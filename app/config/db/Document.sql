--- UPDATE 29/03/2024 
drop database devtalk;
create database devtalk;
use devTtlk;
delimiter $$

-- table users
create table users (
	username varchar(50) primary key,
    user_fullname varchar(255) not null,
    user_gender tinyint(1),
    user_birthday date,
    user_avatar varchar(255) default "default-avatar.png",
    user_password blob unique
    user_role tinyint default 0
)engine = InnoDB;

-- table hashtags
create table hashtag (
    hashtag_id int auto_increment primary key,
	hashtag_topic varchar(50),
    hashtag_favorite_level int default 1
);

-- table posts
create table posts (
	post_id int auto_increment primary key,
    post_time timestamp not null default current_timestamp,
    post_content text not null,
    username varchar(50),
    hashtag_id int,
    
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