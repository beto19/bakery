create table usuario(
id_usuario int not null primary key auto_increment,
correo varchar(50),
contrasena varchar(32),
clave varchar(32));

create table rol(
id_rol int not null primary key auto_increment,
rol varchar(30));

create table rol_usuario(
id_rol int not null ,
id_usuario int not null ,
primary key (id_rol,id_usuario),
foreign key (id_rol) references rol(id_rol),
foreign key (id_usuario) references usuario(id_usuario));

create table cliente(
id_cliente int not null primary key auto_increment,
nombre varchar(50),
apaterno varchar(50),
amaterno varchar(50),
nacimiento date,
id_usuario int not null,
direccion varchar(100),
foreign key (id_usuario) references usuario(id_usuario));

create table temperatura(
temperatura varchar(50));

create table producto(
id_producto int not null primary key auto_increment,
producto varchar(50),
foto varchar(50),
precio float,
descripcion varchar(50));

create table producto_cliente(
id_productoCliente int primary key auto_increment,
id_producto int not null ,
id_cliente int not null ,
calificacion float,
comentario varchar(50),
foreign key(id_producto) references producto(id_producto),
foreign key(id_cliente) references cliente(id_cliente));

INSERT INTO `producto_cliente` (`id_producto`, `id_cliente`, `calificacion`, `comentario`) VALUES
(1, 2, 5, 'El pastel esta muy rico'),
(2, 2, 3, 'El pastel tiene una presentacion muy bonita'),
(3, 2, 4, 'Esta bien chido'),
(4, 2, 2, 'El pastel sabe horrible '),
(5, 2, 3, 'Estaa muy rico'),
(6, 2, 1, 'Pueden mejorar'),
(7, 2, 3, 'panqué bueno'),
(8, 2, 5, 'Excelente los cuernitos'),
(9, 2, 5, 'Muy ricas'),
(10, 2, 4, 'Estan muy pequeñas para el precio'),
(11, 2, 5, 'Estupenda'),
(12, 2, 4, 'Algunas venian rotas'),
(13, 2, 4, 'Buenisimos'),
(14, 2, 3, 'se derrite el chocolate rápidamente'),
(15, 2, 5, 'Asombrosos'),
(16, 2, 4, 'ricas pero mu caras');

create table carrito(
id_carrito int not null primary key auto_increment,
id_cliente int not null ,
fecha date, 
fecha_compra date,
foreign key(id_cliente) references cliente(id_cliente));

create table carrito_detalle(
id_carrito int not null,
id_producto int not null,
cantidad int,
total float ,
foreign key (id_carrito) references carrito (id_carrito),
foreign key (id_producto) references producto(id_producto));

create table categoria(
id_categoria int not null primary key auto_increment,
categoria varchar(30));

create table producto_categoria(
id_producto int not null,
id_categoria int not null,
foreign key (id_producto) references producto(id_producto),
foreign key (id_categoria) references categoria(id_categoria));

create table empleado(
id_empleado int not null primary key auto_increment,
nombre varchar(50),
apaterno varchar(50),
amaterno varchar(50),
nacimiento date,
id_usuario int not null,
direccion varchar(100),
foreign key (id_usuario) references usuario(id_usuario));
alter table empleado add column foto mediumblob





insert into rol (rol) values('Admin');
insert into rol (rol) values('Cliente'); 
insert into rol (rol) values('Empleado');

create view descripcion as (
    select p.producto ,p.foto,p.precio,p.descripcion,
	round(avg(pc.calificacion)),pc.comentario,c.nombre,c.apaterno from 
    producto p inner join producto_cliente pc on p.id_producto=pc.id_producto inner join
    cliente c on c.id_cliente=pc.id_cliente);

create view carrito as(
    select p.id_producto, p.producto, p.foto, p.precio, ca.id_carrito, cd.cantidad,
    (cd.cantidad*p.precio) as subtotal, from 
    producto p inner join carrito_detalle cd on p.id_producto=cd.id_producto inner join 
    carrito ca on ca.id_carrito=cd.id_carrito)
//vista del carrito
create view vista as(    
    select p.id_producto,p.producto,p.foto,p.precio,ca.id_carrito,cd.cantidad,(p.precio*cd.cantidad) as subtotal 
    from producto p inner join carrito_detalle cd on p.id_producto=cd.id_producto inner join
    carrito ca on ca.id_carrito=cd.id_carrito)

SET FOREIGN_KEY_CHECKS=1; //1 para habilitar los checks de los constraint
alter table producto_cliente id_productoCliente int
//historial de compra
select p.id_producto,p.producto,p.foto,p.precio,ca.id_carrito,cd.cantidad,(p.precio*cd.cantidad) as subtotal from producto p inner join carrito_detalle cd on p.id_producto=cd.id_producto inner join carrito ca on ca.id_carrito=cd.id_carrito where ca.id_cliente=2 and ca.fecha_compra!='NULL'




