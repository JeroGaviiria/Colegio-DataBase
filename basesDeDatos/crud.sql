create database crud;
use crud;

create table students (
	id_student int not null primary key,
    ti int(10) not null ,
    namess varchar(40),
	lastnames varchar(40)
);

select * from students;