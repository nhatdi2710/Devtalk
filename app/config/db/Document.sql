drop database devtalk;
create database devtalk;
use devTtlk;
delimiter $$

drop database Devtalk;
# Table Account_Type
-- [author]: Ndi
create table roles (
	rol_user varchar(20) primary key
)engine = InnoDB;

insert into account_type(type_name) values ('admin');
insert into account_type(type_name) values ('user');

#Table User
-- [author]: Ndi
create table users (
    nick_name varchar(255) not null,
    gender tinyint(1) default 1,
    birthday date,
    avatar varchar(255) default "default-avatar.png",
    username varchar(20) primary key,
    pass blob unique,
    role_user varchar(20) not null,
    
    foreign key (type_name) references account_type(type_name)
)engine = InnoDB;

#Table Hashtag
-- [author]: Ndi
create table Hashtag (
	hashtag_name varchar(50) primary key,
    favorite_level int default 1
);

insert into Hashtag(hashtag_name) values ('Food');
insert into Hashtag(hashtag_name) values ('Sport');
insert into Hashtag(hashtag_name) values ('Q&A');

#Table Posts
-- [author]: Ndi
create table Posts (
	post_id int(10) primary key,
    date_post timestamp not null default current_timestamp,
    content text not null,
    like_number int default 0,
    username varchar(20),
    hashtag_name varchar(50),
>>>>>>> 5f003db189bda4c5b419507a5febfcab761a292b
    
    foreign key (username) references users(iusername),
    foreign key (hashtag_id) references hashtag(hashtag_id)
)engine = InnoDB;

-- table comments
create table comments (
	comment_id int,
	comment_content text not null,
    username varchar(50),
    post_id int,
    
    foreign key (username) references users(username),
    foreign key	(post_id) references posts(post_id),
    primary key (comment_id, post_id)
)engine = InnoDB;

-- table likes
create table likes (
    username varchar(50),
    post_id int,
    
    foreign key (username) references users(username),
    foreign key (post_id) references posts(post_id),
    primary key (username, post_id)
)engine = InnoDB;

-- table post_comments

create table post_comments (
    post_id int,
    comment_id int,
    
    foreign key (post_id) references posts(post_id),
    foreign key (comment_id) references comments(comment_id),
    primary key (post_id, comment_id)
)engine = InnoDB;

-----------------------------------------------------------------------

-- [procedure]: add_user(_username varchar(50), _user_fullname varchar(255), _user_gender tinyint(1), _user_birthday date, _user_avatar varchar(255), _user_password blob)
-- [author]: camtu
drop procedure if exists add_user $$
create procedure add_user(
    in _username varchar(50),
    in _user_fullname varchar(255),
    in _user_gender tinyint(1),
    in _user_birthday date,
    in _user_avatar varchar(255),
    in _user_password blob
)
begin
    insert into users (username, user_fullname, user_gender, user_avatar, user_password)
        values(username, user_fullname, user_gender, user_birthday, user_avatar, user_password);
end $$

-- [procedure]: update_user(_user_fullname varchar(255), _user_gender tinyint(1), _user_birthday date, _user_avatar varchar(255))
-- [author]: camtu

drop procedure if exists update_user $$
create procedure update_user(
    in _username varchar(50),
    in _user_fullname varchar(255),
    in _user_gender tinyint(1),
    in _user_birthday date,
    in _user_avatar varchar(255)
)
begin
    update users 
    set user_fullname = _user_full, user_gender = _user_gender, user_birthday = _user_birthday, user_avatar = _user_avatar
    where username = _username;
end $$

-- [procedure]: delete_user(_username varchar(50))
-- [author]: camtu
drop procedure if exists delete_user $$
create procedure delete_user(
    in _username varchar(50)
)
begin
    delete from users where username = _username;
end $$

-- [procedure]: get_user_by_username(_username varchar(50))
-- [author]: camtu
drop procedure if exists get_user_by_username $$
create procedure get_user_by_username(
    in _username varchar(50)
)
begin
    select * from users where username = _username;
end $$

-- [procedure]: get_all_users(_user_gender, _user_birthday, _user_role))
-- [author]: camtu
drop procedure if exists get_all_users $$
create procedure get_all_users(
    in _user_fullname varchar(50),
    in _user_gender tinyint(1),
    in _user_birthday date,
    in _user_role tinyint
)
begin
    select * 
    from users
    where (_user_fullname is null or user_fullname like concat('%', _user_fullname, '%')) 
		  and (_user_gender is null or user_gender = _user_gender)
		  and (_user_birthday is null or user_birthday = _user_birthday)
          and (_user_role is null or user_role = _user_role);
end $$


#Table Favorite -> for Favorite Tab