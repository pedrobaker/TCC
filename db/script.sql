create database cantinadojao;
use cantinadojao;

create table cliente (
	id		smallint primary key	auto_increment				not null,
	login	varchar(25)											not null,
	nome	varchar(80)											not null,
	senha	varchar(20)											not null,
	cred	decimal(3,2)										default 0
);

create table empresas (
	id		smallint primary key	auto_increment				not null,
	login	varchar(25)											not null,
	nome	varchar(80)											not null,
	senha	varchar(50)											not null
);

create table pedido (
	id		smallint primary key	auto_increment				not null,
	descr	varchar(255)												,
	valTot	decimal(3,2)										not null,
	idCli	smallint											not null,
	constraint	fk_pedido_cliente foreign key (idCli)	references cliente(id)
);
CREATE UNIQUE INDEX fk_pedido_cliente ON pedido (idCli);

create table produtos (
	id		smallint primary key	auto_increment				not null,
	descr	varchar(255)										not null,
	prCom	double(9,2)											not null,
	prVen	double(9,2)											not null,
	tipo	varchar(10)											not null,
	estoque	smallint											not null,
	idEmp	smallint											not null,
	constraint	fk_produtos_empresas	foreign key	(idEmp)	references	empresas(id)
);

create table itemPed (
	id		smallint primary key	auto_increment				not null,
	idPed	smallint											not null,
	idProd	smallint											not null,
	qdtProd	smallint											not null,
	constraint	fk_itemPed_ped foreign key (idPed)	references pedido(id),
	constraint	fk_itemPed_produto foreign key (idProd)	references produtos(id)
);
CREATE INDEX fk_itemPed_ped ON itemPed (idPed);
CREATE INDEX fk_itemPed_produto ON itemPed (idProd);

insert into cliente
	values(null, '123', 'Leo', '123', null);
		


insert into produtos
	values(null, 'Hamburgão', 0, 3.5, 'Salgado', 10, 1), 
		(null, 'Oreo', 0, 1.5,  'Doces', 10, 1),
		(null, '5Star', 0, 2.5, 'Doces', 10, 1),
		(null, 'Halls', 0, 2.0, 'Doces', 10, 1),
		(null, 'Suflair', 0, 3.5, 'Doces', 10, 1),
		(null, 'Laka', 0, 2.0, 'Doces', 10, 1),
		(null, 'Trento', 0, 2.0, 'Doces', 10, 1),
		(null, 'Diamante Negro', 0, 2.0, 'Doces', 10, 1),
		(null, 'Coca-Cola', 0, 3.5, 'Bebida', 10, 1), 
		(null, 'Sprite 2L', 0, 6.5, 'Bebida', 10, 1),
		(null, 'Schweppes 2L', 0, 3.5, 'Bebida', 10, 1),
		(null, 'Suco Del Valle 350ml Lata ', 0, 3.5, 'Bebida', 10, 1),
		(null, 'Coca-Cola 2L', 0, 7.5, 'Bebida', 10, 1),
		(null, 'Jaboti 2L', 0, 4.5, 'Bebida', 10, 1),
		(null, 'Fanta 2L', 0, 6.5, 'Bebida', 10, 1),
		(null, "Suco D'lice", 0, 2.5, 'Bebida', 10, 1),
		(null, 'Bacon Beck+', 0, 1.5, 'Salgado', 10, 1),
		(null, 'Paçoca', 0, 1.5, 'Doces', 10, 1),
		(null, 'Água', 0, 2.0, 'Bebida', 10, 1),
		(null, 'Água com gás', 0, 2.0, 'Bebida', 10, 1),
		(null, 'Suco Garrafa 390ml', 0, 2.0, 'Bebida', 10, 1),
		(null, 'Lanche Natural', 0, 3.5, 'Bebida', 10, 1),
		(null, 'Salgados', 0, 1.0, 'Salgado', 10, 1),
		(null, 'Batata', 0, 2.0, 'Salgado', 10, 1),
		(null, 'Bombom', 0, 1.5, 'Doces', 10, 1),
		(null, 'Amendorato', 0, 1.5,'Doces', 10, 1),
		(null, 'Bolos', 0, 3.5, 'Doces', 10, 1),
		(null, 'Cones', 0, 3.5, 'Doces', 10, 1),
		(null, 'Sorvete', 0, 3.5, 'Doces', 10, 1),
		(null, 'Picolé', 0, 1.0, 'Doces', 10, 1),
		(null, 'Paçoca Moreninha 22g', 0, 0.5, 'Doces', 10, 1),
		(null, 'Bolacha Nikito', 0, 2.0, 'Doces', 10, 1);