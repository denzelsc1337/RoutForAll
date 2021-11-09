create database if not exists routforall;
use routforall;


create table conductor(
IDconduct int auto_increment primary key not null,
tipoDoc varchar(100) not null,
numDoc char(8) not null,
nombres varchar(150) not null,
apellidoP varchar(150) not null,
apellidoM varchar(150) not null,
fechaNacimiento date,
edad char(4),
celular int(9) not null,
correo varchar(100) not null,
tipoLicencia varchar(100) not null,
estadoLicencia varchar(50) not null
);


select * from conductor;

create table vehiculos(
IDvehiculo int auto_increment primary key not null,
tipoVehiculo varchar(150) not null,
marcaVehiculo varchar(150) not null,
anio char(4) not null,
placaVehicular char(7) not null,
capacidadCarga bigint (150) not null,	
largo bigint(11) not null,
ancho bigint(11) not null,
alto bigint(11) not null,
estado varchar(50) not null
);

INSERT INTO `vehiculos` VALUES (NULL, 'camion', 'foton', '2020', 'A45A32', '1500', '150', '2400', '230', 'activo');

select * from vehiculos;

SELECT razonSocial FROM clientes WHERE RUC_cliente = 10754811043;

create table clientes(
RUC_cliente bigint(11) primary key not null,
razonSocial varchar(255) not null,
tipoPersona varchar(255) not null,
direccion varchar(255) not null,
correo varchar(255) not null,
telefono char(8) not null,
celular char (9) not null,
contactoPersona varchar(120) not null
);

INSERT INTO `clientes` VALUES ('10754811043', 'denzel test', 'juridica', 'san juan', 'denzelsotomayor@gmail.com', '45678512', '981374706', 'ivan leon');

select * from clientes;


create table cargas(
IDcargas int auto_increment primary key,
rucCliente bigint,
descripcionCarga varchar(250) not null,
unidadMedidaCarga varchar(50) not null,
pesoCarga bigint(11) not null,
largoCarga bigint(11) not null,
anchoCarga bigInt(11) not null,
altoCarga bigint(11) not null,
direccionEnvio varchar(200) not null,
direccionEntrega varchar(200) not null,
fechaRegistro date,
estado varchar(50) not null,
FOREIGN KEY (rucCliente) REFERENCES clientes(RUC_cliente)
);



select * from cargas;

-- update cargas
-- set rucCliente = 10754811043 
-- where IDcargas = 3;


create table rutas(
    IDruta INT auto_increment PRIMARY KEY NOT NULL,
    idenvio int not null,
	idvehiculo int not null,
	idconductor int not null,
    fechaSalida date not null,
    fechaLlegada date not null,
    fechaRegistro date not null,
	horaLlegada time not null,
	horaSalida time not null,
    kilometrajeSalida bigint(20) not null,
    kilometrajeFinal double as (kilometrajeSalida /horaSalida),
    tiempoEstimado time not null,
	direccionEnvio varchar(250) not null,
    direccionEntrega varchar(250) not null,
    FOREIGN KEY (idenvio) REFERENCES cargas(IDcargas),
    FOREIGN KEY (idvehiculo) REFERENCES vehiculos(IDvehiculo),
    FOREIGN KEY (idconductor) REFERENCES conductor(IDconduct)
);




select * from rutas;

-- MOSTRAR EN POPOUP CONDUCTOR--
select env.nombreCliente, apellidoCliente, direccionEnvio, celularCliente 
from envios env
inner join rutas rut
on env.IDenvio = rut.idenvio
where rut.IDruta = 1 ;
-- MOSTRAR EN POPOUP CONDUCTOR --

-- create table envios(
-- IDenvio int auto_increment primary key not null,
-- rucCliente int,
-- tipoProducto varchar(80) not null,
-- producto varchar (80) not null,
-- cantidad int not null,
-- peso int,
-- unidadMedida varchar(20),
-- nombreCliente varchar(180) not null,
-- apellidoCliente varchar(180) not null,
-- docCliente char(8) not null,
-- correoCliente varchar(180) not null,
-- telefCliente char(8),
-- celularCliente char(9) not null,
-- direccionEnvio varchar(200) not null,
-- FOREIGN KEY (rucCliente) REFERENCES clientes(RUC_cliente)
-- );







