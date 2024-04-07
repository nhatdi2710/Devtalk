-- [author]: Ndi
create database DevTalk;
use DevTalk;

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
    
    foreign key (username) references accounts(username),
    foreign key (hashtag_name) references hashtag(hashtag_name)
)engine = InnoDB;

#Table Comments
-- [author]: Ndi
create table Comments (
	content_id int(10),
	comment_content text not null,
    username varchar(20),
    post_seq int(10),
    
    foreign key (username) references accounts(username),
    foreign key	(post_seq) references posts(post_seq),
    primary key (content_seq, username, post_seq)
)engine = InnoDB;

#Table Hashtag_Posts
-- [author]: Ndi
create table Hashtag_Post (
    hashtag_name varchar(50),
    post_id int,
    
	foreign key (hashtag_name) references Hashtag(hashtag_name),
    foreign key (post_id) references Posts(post_id),
    primary key (hashtag_name, post_id)
)engine = InnoDB;

-- -- -- -- --