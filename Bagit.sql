Create database Bagit;
use Bagit;

Create table Suppliers(
supplier_id int not null auto_increment,
supplier_name varchar(60),
telephone varchar(60),
product_name varchar(60),
primary key(supplier_id)
);


Create table Products(
product_id int not null auto_increment,
product_name varchar(50),
product_avl int,
product_sld int,
supplier_id int,
barcode_id int,
primary key(product_id, barcode_id),
foreign key (supplier_id) references Suppliers(supplier_id)
);

Create table ProductSupplier(
product_id int not null,
supplier_id int not null,
foreign key (product_id) references Products(product_id),
foreign key (supplier_id) references Suppliers(supplier_id)
);

Create table Category(
category_id int not null auto_increment,
category_name varchar(50),
product_id int,
primary key(category_id),
foreign key (product_id) references Products(product_id)
);




Create table Warehouse(
warehouse_id int not null auto_increment,
supplier_id int,
product_id int,
product_avl int,
product_sld int,
period_sld date,
primary key(warehouse_id),
foreign key (supplier_id) references Suppliers(supplier_id),
foreign key (product_id) references Products(product_id)
);

Create table Employee(
employee_id int not null,
employee_name varchar(60),
telephone varchar(60),
DOB date,
SSN int,
email varchar(60),
primary key(employee_id)
);

Create table Orders(
order_id int not null auto_increment,
warehouse_id int not null,
price decimal,
date date,
time time,
primary key(order_id),
foreign key (warehouse_id) references Warehouse(warehouse_id)
);


Create table Details(
order_id int not null,
detail_id int not null auto_increment,
product_id int,
quantity int,
total_price double,
delivery_id int not null,
primary key(detail_id, delivery_id),
foreign key (order_id) references Orders(order_id),
foreign key (product_id) references Products(product_id)
);

Create table DetailOrder(
order_id  int not null,
detail_id int not null,
delivery_id int not null,
foreign key (order_id) references Orders(order_id),
FOREIGN KEY (detail_id, delivery_id) REFERENCES Details(detail_id, delivery_id)
);


Create table Customer(
customer_id int not null auto_increment,
customer_name varchar(60),
telephone varchar(60),
primary key(customer_id)
);



Create table Payment(
payment_id int not null auto_increment,
customer_id int,
payment_price decimal(6,2),
payment_mode enum("cash","MoMo","Card"),
payment_date date,
primary key(payment_id),
foreign key (customer_id) references Customer(customer_id)
);



Create table SalesRep(
employee_id int,
SalesRep_salary decimal not null,
foreign key (employee_id) references Employee(employee_id)
);



Create table Manager(
employee_id int,
manager_bonus decimal,
foreign key (employee_id) references Employee(employee_id)
);



Create table WarehouseManager(
employee_id int,
WarehouseManager_allowances decimal not null,
foreign key (employee_id) references Employee(employee_id)
);



INSERT INTO Suppliers(supplier_name,telephone,product_name) VALUES ("adinkra", "0233746321","Ideal Milk");
INSERT INTO Suppliers(supplier_name,telephone,product_name)  VALUES ("Jane Veggies", "0234857321","Lettuce");
INSERT INTO Suppliers(supplier_name,telephone,product_name)  VALUES ("Bread Boutique", "0236946321","Brown bread");
INSERT INTO Suppliers(supplier_name,telephone,product_name)  VALUES ("FanMilk", "024359821","Vanilla Ice cream");
INSERT INTO Suppliers(supplier_name,telephone,product_name)  VALUES ("Kirkland", "0278758921","500ml bottled water");


INSERT INTO Products(product_name,product_avl,product_sld,supplier_id,barcode_id) VALUES ("Ideal Milk",23,50,1,21);
INSERT INTO Products(product_name,product_avl,product_sld,supplier_id,barcode_id) VALUES ("Lettuce",11,21,2,22);
INSERT INTO Products(product_name,product_avl,product_sld,supplier_id,barcode_id) VALUES ("Brown bread",5,10,3,25);
INSERT INTO Products(product_name,product_avl,product_sld,supplier_id,barcode_id) VALUES ("Vanilla Ice cream",2,12,4,28);
INSERT INTO Products(product_name,product_avl,product_sld,supplier_id,barcode_id) VALUES ("500ml bottled water",100,112,5,26);

INSERT INTO Category(category_name,product_id)  VALUES ("Dairy",1);
INSERT INTO Category(category_name,product_id)  VALUES ("Vegetable",2);
INSERT INTO Category(category_name,product_id)  VALUES ("Bread",3);
INSERT INTO Category(category_name,product_id)  VALUES ("Dairy",4);
INSERT INTO Category(category_name,product_id)  VALUES ("Water",5);

INSERT INTO Warehouse(supplier_id,product_id,product_avl,product_sld,period_sld) VALUES (1,1,23,50,"2021-05-13");
INSERT INTO Warehouse(supplier_id,product_id,product_avl,product_sld,period_sld) VALUES (2,2,11,21,"2020-03-09");
INSERT INTO Warehouse(supplier_id,product_id,product_avl,product_sld,period_sld) VALUES (3,3,5,10,"2021-10-01");
INSERT INTO Warehouse(supplier_id,product_id,product_avl,product_sld,period_sld) VALUES (4,4,2,12,"2020-03-14");
INSERT INTO Warehouse(supplier_id,product_id,product_avl,product_sld,period_sld) VALUES (5,5,100,112,"2020-07-08");


INSERT INTO Orders(warehouse_id,price,date,time) VALUES (1,5.00,"2021-04-13","12:04:56");
INSERT INTO Orders(warehouse_id,price,date,time) VALUES (2,4.00,"2020-04-11","08:05:46");
INSERT INTO Orders(warehouse_id,price,date,time) VALUES (3,8.00,"2020-04-1","13:15:36");
INSERT INTO Orders(warehouse_id,price,date,time) VALUES (4,10.00,"2020-03-21","09:00:06");
INSERT INTO Orders(warehouse_id,price,date,time) VALUES (5,3.00,"2020-03-15","15:34:34");


INSERT INTO Employee(employee_id,employee_name,telephone,DOB,SSN,email) VALUES (001,"Kofi Aboagye", 0278374698,"1991-07-19",2345,"kofia@gmail.com");
INSERT INTO Employee(employee_id,employee_name,telephone,DOB,SSN,email) VALUES (002,"Ellis Koomson", 0244474698,"1998-05-23",2455,"ellisk@gmail.com");
INSERT INTO Employee(employee_id,employee_name,telephone,DOB,SSN,email) VALUES (003,"Daphne Hilary", 0278587698,"1999-12-17",2675,"daphil@gmail.com");
INSERT INTO Employee(employee_id,employee_name,telephone,DOB,SSN,email) VALUES (011,"Seth Ntim", 0265834692,"1999-11-19",3345,"setim@gmail.com");
INSERT INTO Employee(employee_id,employee_name,telephone,DOB,SSN,email) VALUES (005,"Liane Jane", 0278375649,"2000-06-13",2349,"janeli@gmail.com");

INSERT INTO Details(order_id,product_id,quantity,total_price,delivery_id) VALUES (1,1,300,1000.00,10);
INSERT INTO Details(order_id,product_id,quantity,total_price,delivery_id) VALUES (2,2,250,1450.00,11);
INSERT INTO Details(order_id,product_id,quantity,total_price,delivery_id) VALUES (3,3,360,1300.80,12);
INSERT INTO Details(order_id,product_id,quantity,total_price,delivery_id) VALUES (4,4,140,670.00,13);
INSERT INTO Details(order_id,product_id,quantity,total_price,delivery_id) VALUES (5,5,120,980.50,14);


INSERT INTO Customer(customer_name,telephone) VALUES ("Showboy",0554327586);
INSERT INTO Customer(customer_name,telephone) VALUES ("Lizbeth Cole",0574827586);
INSERT INTO Customer(customer_name,telephone) VALUES ("Mary Otchere",0248576586);
INSERT INTO Customer(customer_name,telephone) VALUES ("Yaw Kross",0244327586);
INSERT INTO Customer(customer_name,telephone) VALUES ("Delilah Jones",0234757586);

INSERT INTO Payment(customer_id,payment_price,payment_mode,payment_date) VALUES (1,7.00,"Cash","2020-04-14");
INSERT INTO Payment(customer_id,payment_price,payment_mode,payment_date) VALUES (2,4.00,"MoMo","2020-04-20");
INSERT INTO Payment(customer_id,payment_price,payment_mode,payment_date) VALUES (3,8.00,"Cash","2020-04-14");
INSERT INTO Payment(customer_id,payment_price,payment_mode,payment_date) VALUES (4,20.00,"Card","2020-04-15");
INSERT INTO Payment(customer_id,payment_price,payment_mode,payment_date) VALUES (5,9.00,"Cash","2020-04-11");

INSERT INTO SalesRep(employee_id,SalesRep_salary) VALUES (001,1450.00);
INSERT INTO SalesRep(employee_id,SalesRep_salary) VALUES (002,1250.00);
INSERT INTO SalesRep(employee_id,SalesRep_salary) VALUES (003,2000.00);
INSERT INTO SalesRep(employee_id,SalesRep_salary) VALUES (011,1300.00);
INSERT INTO SalesRep(employee_id,SalesRep_salary) VALUES (005,2500.00);

INSERT INTO Manager(employee_id,manager_bonus) VALUES (005,500.00);
INSERT INTO Manager(employee_id,manager_bonus) VALUES (002,700.00);


INSERT INTO WarehouseManager(employee_id,WarehouseManager_allowances) VALUES (011,200.00);
INSERT INTO WarehouseManager(employee_id,WarehouseManager_allowances) VALUES (001,150.00);



