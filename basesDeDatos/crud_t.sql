create database crud_t;
use crud_t;

create table teachers (
	id_teacher int not null primary key,
    dni int(10) not null ,
    t_names varchar(40),
	t_lastnames varchar(40)
);