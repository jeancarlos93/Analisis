create database tiendaVachelle;


create table cliente(
nombre nvarchar(30),
apellido nvarchar(30),
telefono nvarchar(9),
cedula nvarchar(11),
codigo int auto_increment primary key not null,
estado bit default 1
);
use tiendaVachelle;
create table vendedor(
nombre nvarchar(30),
apellido nvarchar(30),
telefono nvarchar(9),
cedula nvarchar(11)  primary key not null,
fechaContratacion datetime,
contrasena nvarchar(15),
tipoEmlpleado char(1),
estado bit default 1
);
create table proveedor(
nombre nvarchar(20),
apellido nvarchar(20),
telefono nvarchar(9),
correo nvarchar(200),
empresa nvarchar(200),
codigo int auto_increment  primary key not null,
estado bit default 1
);

insert into proveedor(nombre,apellido,telefono,correo) values('pepe','alvarez','8863 6407','correo');
insert into proveedor(nombre,apellido,telefono,correo) values('juan','bandera','8863 6407','correo');
insert into proveedor(nombre,apellido,telefono,correo) values('andres','jimenez','8863 6407','correo');
insert into proveedor(nombre,apellido,telefono,correo) values('ivan','coronado','8863 64','correo');
insert into proveedor(nombre,apellido,telefono,correo) values('juana','arnold','8863 64','correo');

update proveedor set estado = 0 where estado = 1;
select * from proveedor;

create table cierreCaja(
codigo int  primary key not null,
cedVendedor nvarchar(11) ,
fecha datetime not null,
montoVentas float,
montoInicial float,
totalCierre float,
montoTarjetas float,
montoCompras float,
CONSTRAINT fk_cajaVendedor FOREIGN  KEY(cedVendedor) REFERENCES  vendedor(cedula)
);
create table producto(
codigo int auto_increment  primary key not null,
descripcion nvarchar(60),
precioUnitario float,
precioVenta float,
idmarcaProd int,
idCategoriaProd int,
CONSTRAINT fk_marca FOREIGN  KEY(idmarcaProd) REFERENCES  marcaProd(id),
CONSTRAINT fk_categoria FOREIGN  KEY(idCategoriaProd) REFERENCES  categoriaProd(id),
estado bit default 1
);

create table marcaProd(
id int auto_increment  primary key not null,
marca nvarchar(50)
);
create table categoriaProd(
id int auto_increment  primary key not null,
categoria nvarchar(50)
);
create table tallaProd(
id int auto_increment  primary key not null,
talla char(3)
);
create table colorProd(
id int auto_increment  primary key not null,
color nvarchar(15)
);

create table inventario(
id int auto_increment  primary key not null,
codProducto int,
tipo nvarchar(50),
fecha datetime,
cantidad int,
idTalla int,
idColor int,
CONSTRAINT fk_talla FOREIGN  KEY(idTalla) REFERENCES  tallaProd(id),
CONSTRAINT fk_color FOREIGN  KEY(idColor) REFERENCES  colorProd(id)
);


create table facturaVenta(
numFactura int auto_increment  not null,
codCliente int,
codProducto int,
codCaja int,
cedVendedor nvarchar(11), 
iva float,
descuento  float,
descripcion nvarchar(100),
total float,
subtotal float,
fecha datetime not null,
formaPago char(1),
primary key(numFactura,codCliente),
CONSTRAINT fk_Cliente FOREIGN  KEY(codCliente) REFERENCES  cliente(codigo)
);

create table detalleFactVenta(
numFactVenta int not null,
idProducto int not null,
cantProducto int
);

create table abono(
codigo int auto_increment not null,
numFactVenta int,
numFactCompra int,
cedVendedor nvarchar(11),
abono int,
saldoInicial float,
saldoActual float,
saldoFinal float,
fechaSalida datetime,
CONSTRAINT fk_Cliente FOREIGN  KEY(numFactVenta) REFERENCES  facturaVenta(numFactura),
CONSTRAINT fk_facturaCompra FOREIGN  KEY(numFactCompra) REFERENCES   facturaCompra(numFactura)
);

create table facturaCompra(
numFactura int  primary key not null,
 codProducto int,
 codCaja int,
codProveed int, 
 iva float,
 total int,
 subtotal float,
 fecha datetime,
 formaPago char(1)
);
create table detalleFacturaCompra(
numFacturaComp int,
numProved nvarchar(11),
CONSTRAINT fk_Cliente FOREIGN  KEY(numFacturaComp) REFERENCES  facturaCompra(numFactura), 
CONSTRAINT fk_Cliente FOREIGN  KEY(numProved) REFERENCES  proveedor(cedula)
);


delete from proveedor where codigo = codigo;