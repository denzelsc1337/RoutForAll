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
anio year(4) not null,
placaVehicular char(7) not null,
kilometraje DECIMAL(8,3) not null,
pesoNeto DECIMAL(8,3) not null,
cargaUtil DECIMAL(8,3) not null,	
pesoBruto DECIMAL(8,3) not null,
largo DECIMAL(8,3) not null,
ancho DECIMAL(8,3) not null,
alto DECIMAL(8,3) not null,
estado varchar(50) not null
);



INSERT INTO `vehiculos` VALUES (NULL, 'camion', 'foton', '2020', 'A45A32',3.555, 1.500,1.499,3.499,2.410,1.506,1.996, 'activo');

select * from vehiculos;

-- SELECT razonSocial FROM clientes WHERE RUC_cliente = 10754811043;

create table clientes(
IDclient int primary key auto_increment not null,
RUC_cliente bigint not null,
razonSocial varchar(255) not null,
tipoPersona varchar(255) not null,
direccion varchar(255) not null,
correo varchar(255) not null,
telefono char(8) not null,
celular char (9) not null,
contactoPersona varchar(120) not null
);

ALTER TABLE clientes AUTO_INCREMENT = 10001; 

INSERT INTO `clientes` VALUES (null,'10457845126','denzel test', 'juridica', 'san juan', 'denzelsotomayor@gmail.com', '45678512', '981374706', 'ivan leon');


select * from clientes;


SELECT razonSocial, IDclient FROM clientes WHERE RUC_cliente = '10457845126';
-- DELETE FROM clientes WHERE RUC_cliente = 45781245126;

create table cargas(
IDcargas int auto_increment primary key,
id_client int,
rucClient bigint (11),
descripcionCarga varchar(250) not null,
unidadMedidaCarga varchar(50) not null,
pesoCarga DECIMAL(8,3) not null,
largoCarga bigint(11) not null,
anchoCarga bigInt(11) not null,
altoCarga bigint(11) not null,
direccionEnvio varchar(200) not null,
direccionEntrega varchar(200) not null,
fechaRegistro datetime,
estado varchar(50) NOT NULL DEFAULT 'Pendiente',
FOREIGN KEY (id_client) REFERENCES clientes(IDclient)
);

-- select * from cargas where rucClient = '10457845125';
-- ALTER TABLE `cargas` CHANGE `estado` `estado` VARCHAR(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'Pendiente';

INSERT INTO `cargas` VALUES (null,'10001','10457845126', 'denzel test', 'KILO', 45, 45, 45, 45, 'ivan leon',"test",now(),'Pendiente');


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
    horaSalida time not null,
    horaLlegada time not null,
    fechaRegistro date not null,
    
    kilometrajeInicial bigint(20) not null,
    kilometrajeSalida bigint(20) not null,
    kilometrajeFinal double as (kilometrajeSalida /horaSalida),
    
    tiempoEstimado time not null,
    
    direccionEntrega varchar(250) not null,
    FOREIGN KEY (idenvio) REFERENCES cargas(IDcargas),
    FOREIGN KEY (idvehiculo) REFERENCES vehiculos(IDvehiculo),
    FOREIGN KEY (idconductor) REFERENCES conductor(IDconduct)
);




select * from rutas;



-- MOSTRAR EN POPOUP CONDUCTOR--
-- select env.nombreCliente, apellidoCliente, direccionEnvio, celularCliente 
-- from envios env
-- inner join rutas rut
-- on env.IDenvio = rut.idenvio
-- where rut.IDruta = 1 ;
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


DROP TABLE IF EXISTS tipo_usuario;
CREATE TABLE tipo_usuario
(
    id_tipo_usuario INT auto_increment PRIMARY KEY NOT NULL,
    detalle_tipo_usuario VARCHAR (20) NOT NULL
);



insert into tipo_usuario values (null, "Admin");
insert into tipo_usuario values (null, "Operador");

select * from tipo_usuario;

Create table usuarios(
secuence_usu INT auto_increment PRIMARY KEY NOT NULL,
id_usuario char(8) NOT NULL,
nom_usuario VARCHAR (30) NOT NULL,
ape_usuario VARCHAR (30) NOT NULL,
IDtipoUsu INT (2) NOT NULL,
usuario VARCHAR (30) NOT NULL,
pass_usuario VARCHAR (20) NOT NULL,
mail_usuario VARCHAR (40),
tlf_usuario CHAR (9),
estado_usuario BOOLEAN,
sexo_usuario CHAR(2),
FOREIGN KEY (IDtipoUsu) REFERENCES tipo_usuario (id_tipo_usuario)
);


insert into usuarios values(null, 75481104,"denzel stefano" , "sotomayor correa", 1, "dsotomayor", "54811004","denzelsotomayor@gmail.com",981374706,1,"M");
insert into usuarios values(null, 10678950,"ivan hilario" , "leon gomez ", 2, "igomez", "hilario123","ileon@gmail.com",963852741,1,"M");

select * from usuarios;





