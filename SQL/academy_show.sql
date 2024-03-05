drop database if exists academy_show;
create database academy_show default character set utf8 collate utf8_general_ci;
drop user if exists 'staff'@'localhost';
create user 'staff'@'localhost' identified by 'password';
grant all on academy_show.* to 'staff'@'localhost';
use academy_show;

/*受講生管理*/
/*googleIDを紐づける手法を考える*/
CREATE TABLE IF NOT EXISTS customer (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL unique,
    phone_num VARCHAR(20),
    payment VARCHAR(255),
    password VARCHAR(255) NOT NULL
);

/*講師*/
CREATE TABLE IF NOT EXISTS teacher (
    teacher_id INT AUTO_INCREMENT PRIMARY KEY,
    teacher_name VARCHAR(255) NOT NULL
);

/* 講座*/
CREATE TABLE IF NOT EXISTS lesson (
    lesson_id INT AUTO_INCREMENT PRIMARY KEY,
    date DATE NOT NULL,
    time TIME NOT NULL,
    lesson_name VARCHAR(255) NOT NULL,
    teacher_id INT,
    url VARCHAR(255),
    FOREIGN KEY (teacher_id) REFERENCES teacher(teacher_id)
);

/* 予約*/
CREATE TABLE IF NOT EXISTS appointment (
    lesson_id INT,
    id INT,
    PRIMARY KEY (lesson_id, id),
    FOREIGN KEY (lesson_id) REFERENCES lesson(lesson_id),
    FOREIGN KEY (id) REFERENCES customer(id)
);



-- insert into customer values(null, 'name', 'address', 'phone_num', 'payment','password');
insert into customer values(null, '原田　奈央', 'nao@gmail.com', '090-1234-5678', null,'naonao');
insert into customer values(null, '高崎　ゆりあ', 'yuria`gmail.com', '080-1234-5678', null,'yuria');

-- insert into teacher values(null, 'teacher_name');
insert into teacher values(null,'Hisami');
insert into teacher values(null,'Sho');
insert into teacher values(null,'Ran');
insert into teacher values(null,'Kenta');

-- insert into lesson values(null,'配信日YYYYMMDD','配信時間HH:MM','講義名',INT,'url_address')
insert into lesson values(null,20240704,'0:00','夜更かしPHP',1,'urladdress');