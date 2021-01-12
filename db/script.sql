create table contacts(
	id serial primary key not null,
	name_contact varchar(200) not null,
	phone varchar(200) not null,
	message varchar(300) not null
);