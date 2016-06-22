﻿CREATE TABLE jokbal(
num int not null auto_increment,
name char(15) not null,
password char(100) not null,
subject char(100) not null,
content text not null,
regist_day datetime not null,
hit int,
file_name_0 char(40),
file_name_1 char(40),
file_name_2 char(40),
file_name_3 char(40),
file_name_4 char(40),
file_copied_0 char(30),
file_copied_1 char(30),
file_copied_2 char(30),
file_copied_3 char(30),
file_copied_4 char(30),
primary key(num)
);