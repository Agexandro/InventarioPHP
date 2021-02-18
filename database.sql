create database if not exists inventario;
use inventario;

create table if not exists medicamento(
clave varchar(20) primary key unique,
descripcion text
);

create table if not exists anaquel(
clave_medicamento varchar(20) not null,
lote text not null,
piezas int not null,
caducidad date not null,
foreign key (clave_medicamento)
references medicamento(clave)
on delete cascade
on update cascade
);

create table if not exists u013(
clave_medicamento varchar(20) primary key not null,
lote text not null,
piezas int not null,
caducidad date not null,
foreign key (clave_medicamento)
references medicamento(clave)
on delete cascade
on update cascade
);

insert into medicamento(clave,nombre,descripcion) values(101,"Paracetamol","Tabletas 10mg");
insert into medicamento(clave,nombre,descripcion) values(1031,"Paracetamol","Tabletas 10mg");
insert into medicamento(clave,nombre,descripcion) values(1011,"Paracetamol","Tabletas 10mg");
insert into medicamento(clave,nombre,descripcion) values(1014,"Paracetamol","Tabletas 10mg");
insert into medicamento(clave,nombre,descripcion) values(131,"Paracetamol","Tabletas 10mg");

INSERT INTO `anaquel`(`clave_medicamento`, `lote`, `piezas`, `caducidad`) VALUES (101,"DLFO34",12,"2021-08-09");
INSERT INTO `anaquel`(`clave_medicamento`, `lote`, `cantidad`, `caducidad`) VALUES (1031,"2334",12,"2020-08-09");
INSERT INTO `anaquel`(`clave_medicamento`, `lote`, `cantidad`, `caducidad`) VALUES (1011,"111334",12,"2023-08-29");
INSERT INTO `anaquel`(`clave_medicamento`, `lote`, `cantidad`, `caducidad`) VALUES (1014,"09282",12,"2021-02-12");
INSERT INTO `anaquel`(`clave_medicamento`, `lote`, `cantidad`, `caducidad`) VALUES (131,"9288849",12,"2021-06-23");