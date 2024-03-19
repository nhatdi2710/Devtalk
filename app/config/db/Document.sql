create database DevTalk;
use DevTalk;

#Table User
create table Users (
	id int(10) unsigned auto_increment primary key,
    name varchar(255) not null,
    gender tinyint(1),
    birthday date,
    avatar varchar(255) default "default-avatar.png",
    username varchar(20) not null,
    pass blob unique
)engine = InnoDB;

#Table Hashtag
create table Hashtag (
	topic varchar(50) primary key,
    favorite_level int default 1
);

#Table Posts
create table Posts (
	post_seq int(10) primary key,
    date_post timestamp not null default current_timestamp,
    content text not null,
    id int(10) unsigned auto_increment,
    topic varchar(50),
    
    foreign key (id) references users(id),
    foreign key (topic) references hashtag(topic)
)engine = InnoDB;

#Table Comments
create table Comments (
	content_seq int(10),
	comment_content text not null,
    id int(10) unsigned auto_increment,
    post_seq int(10),
    
    foreign key (id) references users(id),
    foreign key	(post_seq) references posts(post_seq),
    primary key (content_seq, id, post_seq)
)engine = InnoDB;

#Table Favorite -> for Favorite Tab