create database if not exists routforall;
use routforall;
create table rutas(
    IDruta INT auto_increment PRIMARY KEY NOT NULL,
    distrito VARCHAR (30) NOT NULL,
    direccion VARCHAR (30) NOT NULL,
    usuario INT (2) NOT NULL
);
select * from rutas;