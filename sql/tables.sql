-- mysql -u sravani -ppass123 < tables.sql

-- drop database if exists sravanicart;
-- create database sravanicart;
-- use sravanicart;

create table users
(
	UserId integer auto_increment,
	UserName varchar(50) not null,
	Password varchar(20) not null,
	EmailId varchar(100) not null unique,
	Address varchar(100),
	PRIMARY KEY(UserId)
);


create table productgroups
(
	GroupId integer PRIMARY KEY,
	GroupName varchar(50) not null UNIQUE
);

insert into productgroups (GroupId, GroupName) values (1, 'Dresses');
insert into productgroups (GroupId, GroupName) values (2, 'Laptops');
insert into productgroups (GroupId, GroupName) values (3, 'Handbags');
insert into productgroups (GroupId, GroupName) values (4, 'Books');
insert into productgroups (GroupId, GroupName) values (5, 'Cellphones');

create table products
(
	GroupId integer ,
	ProductName varchar(100),
	ProductId integer PRIMARY KEY,
	Details varchar(1024) ,
	Price integer ,
	BalQuantity integer ,
	OrdQuantity integer
);

insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (1, 1, 'white chudidar',2500,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (1, 2, 'red chudidar',1500,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (1, 3, 'green chudidar',1500,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (1, 4, 'Blue chudidar',1325,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (1, 5, 'Tops',1300,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (2, 6, 'lap1',47350,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (2, 7, 'lap2',54425,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (2, 8, 'Dell',42460,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (2, 9, 'hp',61560,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (2, 10, 'lenovo',50000,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (3, 11, 'Blue handbag',7000,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (3, 12, 'Red handbag',2000,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (3, 13, 'violet handbag',5700,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (3, 14, 'Orange handbag',5000,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (3, 15, 'Merun handbag',8750,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (4, 16, 'Advanced org chemistry',2000,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (4, 17, 'analytical che',7500,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (4, 18, 'Crystallization pocess',3600,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (4, 19, 'Physics',1675,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (4, 20, 'Nuclear physics',2999,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (5, 21, 'Mobile1',5000,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (5, 22, 'Mobile2',5000,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (5, 23, 'Mobile3',6500,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (5, 24, 'Mobile4',2499,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (5, 25, 'Mobile5',13000,50);


create table cartdetails
(
	UserId integer,
	ProductId integer,
	OrdQuantity integer ,
	constraint uidpid_pk PRIMARY KEY (UserId, ProductId)
);

create table ordertable
(
	UserId integer,
	OrderNo integer,
	OrderDate date not null,
	ProductId integer,
	OrdQuantity integer not null,
	Amount integer not null,
	constraint uidpidordno_pk PRIMARY KEY (UserId, OrderNo, ProductId)
);
