create database if not exists routforall;
use routforall;


create table conductor(
IDconduct int auto_increment primary key not null,
nombres varchar(150) not null,
apellidos varchar(150) not null,
tipoDoc varchar(100) not null,
numDoc char(8) not null,
celular int(9) not null,
correo varchar(100) not null
);

insert into conductor values(null,'denzel stefano', 'sotomayor correa', 'dni', '75481104',981374706, 'denzelsotomayor@gmail.com');
select * from conductor;

create table vehiculos(
IDvehiculo int auto_increment primary key not null,
tipoVehiculo varchar(150) not null,
marcaVehiculo varchar(150) not null,
placaVehicular char(7) not null
);

insert into vehiculos values(null, 'van', 'nissan', 'A8G-K0P'); 
select * from vehiculos;

create table envios(
IDenvio int auto_increment primary key not null,
tipoProducto varchar(80) not null,
producto varchar (80) not null,
cantidad int not null,
peso int,
unidadMedida varchar(20),
nombreCliente varchar(180) not null,
apellidoCliente varchar(180) not null,
docCliente char(8) not null,
correoCliente varchar(180) not null,
telefCliente char(8),
celularCliente char(9) not null,
direccionEnvio varchar(200) not null
);

insert into envios values(null,'casa','microondas','1',5,'KG','luis david', 'trinidad perez','45127889','luistrinidad@hotmail.com','4512452','963852741','Av.Guardia civil 987');
insert into envios values(null,'casa','lavadero','1',21,'KG','luis david', 'trinidad perez','45127889','luistrinidad@hotmail.com','4512452','963852741','Av.Guardia civil 987');
insert into envios values(null,'aseo','cepillos','15',90,'GR','luis david', 'trinidad perez','45127889','luistrinidad@hotmail.com','4512452','963852741','Av.angamos este 189');
select * from envios;



create table rutas(
    IDruta INT auto_increment PRIMARY KEY NOT NULL,
    idenvio int,
	idvehiculo int,
	idconductor int,
    horaSalida time not null,
    horaLlegada time not null,
    FOREIGN KEY (idenvio) REFERENCES envios(IDenvio),
    FOREIGN KEY (idvehiculo) REFERENCES vehiculos(IDvehiculo),
    FOREIGN KEY (idconductor) REFERENCES conductor(IDconduct)
);

insert into rutas values(null, 1,1,1,"14:25:00","14:50:00");
select * from rutas;

-- MOSTRAR EN POPOUP --
select env.nombreCliente, apellidoCliente, direccionEnvio, celularCliente 
from envios env
inner join rutas rut
on env.IDenvio = rut.idenvio
where rut.IDruta = 1 ;
-- MOSTRAR EN POPOUP --



