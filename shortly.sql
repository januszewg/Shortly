create database shortly;
use shortly;

create table link(id_link int not null primary key auto_increment,
url varchar(1000) not null)engine=innodb;

create table new_link(id_new_link int not null primary key auto_increment,
url_new varchar(100) not null,id_link int not null,index(id_link),
constraint foreign key(id_link) references link(id_link) on delete cascade
on update cascade)engine=innodb;