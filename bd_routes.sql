create database if not exists routforall;
use routforall;


create table conductor(
IDconduct int auto_increment primary key not null,
nombres varchar(150) not null,
apellidos varchar(150) not null,
tipoDoc varchar(100) not null,
numDoc char(8) not null,
celular int(9) not null,
correo varchar(100) not null,
tipoLicencia varchar(100) not null
);

insert into conductor values(null,'denzel stefano', 'sotomayor correa', 'dni', '75481104',981374706, 'denzelsotomayor@gmail.com','A1A');
insert into conductor values(null,'victor cevastian', 'arroyo loayza', 'dni', '45124578',951753486, 'cevitas123@gmail.com','A1A');
insert into conductor values(null,'alonso christian', 'arroyo loayza', 'dni', '45124578',951753486, 'cevitas123@gmail.com','A1A');
insert into conductor values(null,'Alejandro', 'izarra', 'dni', '56231245',923154753, 'ayowa123@gmail.com','A1A');
select * from conductor;

create table vehiculos(
IDvehiculo int auto_increment primary key not null,
tipoVehiculo varchar(150) not null,
marcaVehiculo varchar(150) not null,
anio varchar(50) not null,
placaVehicular char(7) not null,
kilometraje varchar(100) not null,
capacidadCarga bigint (150) not null,
largo varchar (150) not null,
ancho varchar (150) not null,
alto varchar (150) not null
);


select * from vehiculos;


create table clientes(
RUC_cliente bigint(11) primary key not null,
tipoPersona varchar(255) not null,
razonSocial varchar(255) not null,
direccion varchar(255) not null,
correo varchar(255) not null,
telefono char(8) not null,
celular char (9) not null 
);

select * from clientes;

SELECT razonSocial FROM clientes WHERE RUC_cliente='45781245124';

insert into clientes values (20457845124, "juridica", "arroyos sac","jr.junin 15","arroyoscontact@hotmail.com", 4512457, 963852741);
insert into clientes values (10754811043, "natural-negocio","denzels sac","jr.junin 15","denzelcontact@hotmail.com", 4512457, 963852741);

create table cargas(
IDcargas int auto_increment primary key,
rucCliente bigint,
tipoProducto varchar(80) not null,
producto varchar (80) not null,
cantidad int not null,
peso int not null,
unidadMedida varchar(50),
direccionEnvio varchar(200) not null,
FOREIGN KEY (rucCliente) REFERENCES clientes(RUC_cliente)
);


insert into cargas values (null,10754811043, "domestico", "lejias", 250, 400, "KG" ,"av.santa cruz");

select * from cargas;

update cargas
set rucCliente = 10754811043 
where IDcargas = 3;


create table rutas(
    IDruta INT auto_increment PRIMARY KEY NOT NULL,
    idenvio int not null,
	idvehiculo int not null,
	idconductor int not null,
    horaSalida time not null,
    horaLlegada time not null,
    FOREIGN KEY (idenvio) REFERENCES cargas(IDcargas),
    FOREIGN KEY (idvehiculo) REFERENCES vehiculos(IDvehiculo),
    FOREIGN KEY (idconductor) REFERENCES conductor(IDconduct)
);

insert into rutas values(null, 1,1,1,"14:25:00","14:50:00");
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







