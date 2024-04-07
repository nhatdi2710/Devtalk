use devtalk;
delimiter $$

drop procedure add_user $$
create procedure add_user(
	in _nick_name varchar(255),
    in _gender tinyint(1),
    in _birthday date,
    in _avatar varchar(255),
    in _username varchar(20),
    in _pass blob,
    in _role_user varchar(20)
)
begin
    insert into users
        values (_nick_name,_gender, _birthday, _avatar, _username, _pass,_role_user);
end $$


delimiter $$
drop procedure delete_user $$
create procedure delete_user(
    in _username varchar(20),
    in _role_user varchar(20)
)
begin
	if (_role_user like 'user')
    then 
		delete from users
			where username = _username;
	end if;
end $$

-- CALL delete_user('alice123','user');
-- CALL delete_user('bob456','user');

DROP PROCEDURE IF EXISTS edit_user $$
CREATE PROCEDURE edit_user(
    IN _nick_name VARCHAR(255),
    IN _gender TINYINT(1),
    IN _birthday DATE,
    IN _avatar VARCHAR(255),
    IN _username VARCHAR(20)
)
BEGIN
	UPDATE users
	SET nick_name = _nick_name,
		gender = _gender,
		birthday = _birthday,
		avatar = _avatar
	WHERE username = _username;
END $$

-- CALL edit_user('New Charlie', 1, '1990-01-01', 'https://example.com/new_avatar.jpg', 'charlie789');

DROP PROCEDURE IF EXISTS  update_pass $$
CREATE PROCEDURE update_pass(
    IN _username VARCHAR(20),
    in _pass blob
)
BEGIN
	update users
    set pass = _pass
    where username = _username
		and _pass is not null
		and pass <> _pass;
END $$

-- call update_pass ('alice123', 'hashed_password10');

