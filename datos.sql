create table dbozapato(
id_zapato int auto_increment not null primary key,
precio decimal(10,2) not null,
color varchar(30) not null,
id_estilo varchar(100) not null,
id_talla varchar(30) not null,
id_genero varchar(100) not null,
cantidad int not null
);

create table dboestilo(
id_estilo int not null,
estilo varchar(100)
);
create table dbotalla(
id_talla int not null,
talla varchar(100)
);
create table dbogenero(
id_genero int not null,
genero varchar(100)
);

-- ALTER TABLE tabla_final AUTO_INCREMENT = 1;
-- select * from tabla_final;

-- create table tabla_final AS
/*
SELECT
z.id_zapato,z.precio,z.color,
e.estilo,
t.talla,
g.genero,
z.cantidad
FROM dbozapato z
INNER JOIN dboestilo e
on z.id_estilo = e.id_estilo
INNER JOIN dbotalla t
on z.id_talla = t.id_talla
INNER JOIN dbogenero g
on z.id_genero = g.id_genero;
*/

/*
insert into tabla_final (precio,color,estilo,talla,genero,cantidad) values (304.90,'Morado','Botines','42','idk',13);
insert into tabla_final (precio,color,estilo,talla,genero,cantidad) values (252.90,'Negro','Vans','42','idk2',8);
insert into tabla_final (precio,color,estilo,talla,genero,cantidad) values (124.90,'RojoRojoRojoRojoRojoRojoRojoRojoRojoRojoRojo','Nike','42','idk3',25);
*/