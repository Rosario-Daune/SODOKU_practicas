create database tuxydb;

use tuxydb;

create table roles(
rol_id tinyint primary key,
rol_descrip varchar(30)
);

insert into roles values(1,"admin"), (2,"jugador");

select * from roles; 

drop table roles;

create table registro(
reg_id int auto_increment primary key,
reg_user varchar(20),
reg_name varchar(30),
reg_apel varchar(30),
reg_email varchar(50),
reg_pass varchar(30),
rol_id tinyint,
UNIQUE KEY user_idx (reg_user),
UNIQUE KEY email_idx (reg_email),
foreign key(rol_id) references roles(rol_id)
);

select * from registro; 

drop table registro;