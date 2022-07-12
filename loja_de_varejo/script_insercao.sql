use retail_store;
/* Address */
insert into address(
address_code,
public_place,
number_of_street,
complement,
neighborhood,
city,
zipcode
) values(
null,
'Avenida',
797,
'APTO 23',
'Pedreira',
'Belém',
'66085317'
);
insert into address values (null,'Rua',22,'A','Velha','Blumenau','89036470');
insert into address values(null,'Avenida',455,null,'Centro','Gravataí','94999888');

/* Provider */
insert into provider values(null,'22.941.006/0001-04','Luan e Regina Construções Ltda','(55) 3615-6367',1);

insert into provider values(null,'47.989.765/0001-60','Manoel e Beatriz Comercio de Bebidas Ltda','(51) 3616-6245',20);
