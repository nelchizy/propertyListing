create table country
(
	id INT NOT NULL AUTO_INCREMENT,
	name CHAR(255) NOT NULL,
	is_enabled BOOLEAN NOT NULL DEFAULT TRUE,
	date_of_creation DATETIME NOT NULL DEFAULT NOW(),
	date_of_update DATETIME NOT NULL DEFAULT NOW(),
	PRIMARY KEY(id)
);

create table state
(
	id INT NOT NULL AUTO_INCREMENT,
	name CHAR(255) NOT NULL,
	is_enabled BOOLEAN NOT NULL DEFAULT TRUE,
	country_id INT NOT NULL,
	date_of_creation DATETIME NOT NULL DEFAULT NOW(),
	date_of_update DATETIME NOT NULL DEFAULT NOW(),
	PRIMARY KEY(id),
	FOREIGN KEY(country_id) REFERENCES country(id) ON DELETE CASCADE
);

create table city
(
	id INT NOT NULL AUTO_INCREMENT,
	name CHAR(255) NOT NULL,
	is_enabled BOOLEAN NOT NULL DEFAULT TRUE,
	state_id INT NOT NULL,
	date_of_creation DATETIME NOT NULL DEFAULT NOW(),
	date_of_update DATETIME NOT NULL DEFAULT NOW(),
	PRIMARY KEY(id),
	FOREIGN KEY(state_id) REFERENCES state(id) ON DELETE CASCADE
);

create table affiliate
(
	aff_id INT NOT NULL AUTO_INCREMENT,
	company_name VARCHAR(100) NULL,
	company_address VARCHAR(255) NULL,
	official_phone VARCHAR(15) NULL,
	company_email VARCHAR(35) NULL,
	password VARCHAR(32) NOT NULL,
	affiliate_cid VARCHAR(20) NULL,
	first_name VARCHAR(60) NOT NULL,
	last_name VARCHAR(60) NOT NULL,
	sex	BOOLEAN NOT NULL DEFAULT TRUE,
	email VARCHAR(60)NOT NULL,
	phone_number VARCHAR(15) NOT NULL UNIQUE,
	affiliate_passport VARCHAR(255) NULL,
	residential_address TEXT(255) NOT NULL,
	user_role ENUM('0', '1', '2', '3') NOT NULL DEFAULT '3',  #not 0 = super admin, 1 = admin, 2 = premium user and 3 = normal user 
	country_id INT NOT NULL,
	state_id INT NOT NULL,
	city_id INT NOT NULL,
	package_id INT NOT NULL,
	status ENUM('ACTIVE','DISBALED','SUSPENDED') NOT NULL DEFAULT 'ACTIVE',
	subscription_status ENUM('FREE', 'PREMIUM', 'GOLD') NOT NULL DEFAULT 'FREE',
	post_count VARCHAR(100) NOT NULL DEFAULT '0',
	post_limit VARCHAR(100) NOT NULL DEFAULT '1',
	date_of_creation DATETIME NOT NULL DEFAULT NOW(),
	date_of_suspension DATETIME NOT NULL DEFAULT NOW(),
	date_of_plan_change DATETIME NOT NULL DEFAULT NOW(),
	PRIMARY KEY(aff_id),
	FOREIGN KEY(package_id) REFERENCES package(id) ON DELETE CASCADE,
	FOREIGN KEY(country_id) REFERENCES country(id) ON DELETE CASCADE,
	FOREIGN KEY(state_id) REFERENCES state(id) ON DELETE CASCADE,
	FOREIGN KEY(city_id) REFERENCES city(id) ON DELETE CASCADE
);
create table product_type
	(
		type_id INT NOT NULL AUTO_INCREMENT,
		type_name VARCHAR(100) NOT NULL,
		is_enabled BOOLEAN NOT NULL DEFAULT TRUE,

		date_of_creation DATETIME NOT NULL DEFAULT NOW(),
		PRIMARY KEY(type_id)
		);
create table sub_type
	(
		sub_id INT NOT NULL AUTO_INCREMENT,
		sub_type_name VARCHAR(100) NOT NULL,
		is_enabled BOOLEAN NOT NULL DEFAULT true,
		product_type_id INT NOT NULL,

		date_of_creation DATETIME NOT NULL ,
		PRIMARY KEY(sub_id),
		FOREIGN KEY(product_type_id) REFERENCES product_type(type_id) ON DELETE CASCADE
		);
create table property_listing
	(
		listing_id INT NOT NULL AUTO_INCREMENT,
		property_name VARCHAR(100) NOT NULL,
		location VARCHAR(120) NOT NULL,
		latitude VARCHAR(50) NULL,
		longitude VARCHAR(50) NULL,
		propert_id VARCHAR(255) NOT NULL, #auto generated
		year_built VARCHAR(30) NULL,
		property_size VARCHAR(50) NOT NULL,
		type_id INT(11) NOT NULL,
		sub_type_id INT(11) NOT NULL,
		material VARCHAR(255) NOT NULL,

		description VARCHAR(2000) NOT NULL,

		#floor
		cottage_structure VARCHAR(255) NOT NULL,
		flooring VARCHAR(255) NOT NULL,
		walls VARCHAR(255) NOT NULL,
		windows VARCHAR(255) NOT NULL,
		doors VARCHAR(255) NOT NULL,
		roofing VARCHAR(255) NOT NULL,
		electrical_work VARCHAR(255) NOT NULL,
		garage VARCHAR(255) NOT NULL,

		#facilities
		international_school VARCHAR(255) NULL,
			super_market VARCHAR(255) NULL,
			worship VARCHAR(255) NULL,
			restaurant VARCHAR(255) NULL,
			bus_stop VARCHAR(255) NULL,
			railway VARCHAR(255) NULL,
			airport VARCHAR(255) NULL,
			hospital VARCHAR(255) NULL,
			college VARCHAR(255) NULL,

		property_img1 VARCHAR(255) NOT NULL,
		property_img2 VARCHAR(255) NULL,
		property_img3 VARCHAR(255) NULL,
		property_img4 VARCHAR(255) NULL,
		property_img4 VARCHAR(255) NULL,


		rooms INT(11) NOT NULL,
		bathrooms INT(11) NOT NULL,
		floors INT(11) NOT NULL,
		price_from DOUBLE NOT NULL DEFAULT '0.00',
		actual_price DOUBLE NOT NULL DEFAULT '0.00', 
		status ENUM("APPROVED","PENDING","SUSPENDED","EXPIRED") NOT NULL DEFAULT "PENDING",

		affiliate_id INT NOT NULL,

		date_of_creation DATETIME NOT NULL DEFAULT NOW(),
		date_of_update DATETIME NOT NULL DEFAULT NOW(),
		PRIMARY KEY(listing_id),
		FOREIGN KEY(type_id) REFERENCES product_type(type_id) ON DELETE CASCADE,
		FOREIGN KEY(sub_type_id) REFERENCES sub_type(sub_id) ON DELETE CASCADE,
		FOREIGN KEY(affiliate_id) REFERENCES affiliate(aff_id) ON DELETE CASCADE

		);

create table transactions
(
	trans_id INT NOT NULL AUTO_INCREMENT,
	transaction_id VARCHAR(255) NOT NULL UNIQUE,
	agent_id INT NOT NULL,
	payment_status ENUM('SUCCESSFUL','FAILED','PENDING') NOT NULL,
	PRIMARY KEY(trans_id),
	FOREIGN KEY(agent_id) REFERENCES affiliate(aff_id) ON DELETE CASCADE
);
create table package
(
		id INT NOT NULL AUTO_INCREMENT,
		package_name VARCHAR(50) NOT NULL,
		price DOUBLE NOT NULL DEFAULT '0.00',
		PRIMARY KEY(id)

);
create table billing
	(
		bill_id INT NOT NULL AUTO_INCREMENT,
		billing_id VARCHAR(255) NOT NULL,
		package_id INT(11) NOT NULL,
		transaction_id INT(11) NOT NULL,

		PRIMARY KEY(bill_id),
		FOREIGN KEY(package_id) REFERENCES package(id) ON DELETE CASCADE,
		FOREIGN KEY(transaction_id) REFERENCES transactions(trans_id) ON DELETE CASCADE
		);

create table property_specification
	(
		specification_id INT NOT NULL AUTO_INCREMENT,
		cottage_structure VARCHAR(255) NOT NULL,
		flooring VARCHAR(255) NOT NULL,
		walls VARCHAR(255) NOT NULL,
		windows VARCHAR(255) NOT NULL,
		doors VARCHAR(255) NOT NULL,
		roofing VARCHAR(255) NOT NULL,
		electrical_work VARCHAR(255) NOT NULL,
		garage VARCHAR(255) NOT NULL,

		date_of_creation DATETIME NOT NULL DEFAULT NOW(),

		listing_id INT NOT NULL,

		PRIMARY KEY(specification_id),
		FOREIGN KEY(listing_id) REFERENCES property_listing(listing_id) ON DELETE CASCADE



		);
	create table public_facilities
		(
			facility_id INT NOT NULL AUTO_INCREMENT,
			international_school VARCHAR(255) NULL,
			super_market VARCHAR(255) NULL,
			worship VARCHAR(255) NULL,
			restaurant VARCHAR(255) NULL,
			bus_stop VARCHAR(255) NULL,
			railway VARCHAR(255) NULL,
			airport VARCHAR(255) NULL,
			hospital VARCHAR(255) NULL,
			college VARCHAR(255) NULL,

			date_of_creation DATETIME NOT NULL DEFAULT NOW(),

			listing_id INT NULL,

			PRIMARY KEY(facility_id),
			FOREIGN KEY(listing_id) REFERENCES property_listing(listing_id) ON DELETE CASCADE

			);

create table plans
	(
		plan_id INT NOT NULL AUTO_INCREMENT,
		plan_name VARCHAR(100) NOT NULL UNIQUE,
		plan_price DOUBLE NOT NULL DEFAULT '10000',
		durations VARCHAR(255),

		date_of_creation DATETIME

		PRIMARY KEY(plan_id)
		);
create table payment_method
(
	id INT NOT NULL AUTO INCREMENT,
	name VARCHAR NOT NULL UNIQUE,
	signature VARCHAR,
	is_enabled BOOLEAN NOT NULL DEFAULT true,
	PRIMARY KEY(id)
);
create table transactions
(
	trans_id INT NOT NULL AUTO_INCREMENT,
	transaction_id VARCHAR(255) NOT NULL UNIQUE,
	payment_method_id INT NOT NULL,
	affiliate_id INT NOT NULL
	payment_status ENUM('SUCCESSFUL','FAILED','PENDING') NOT NULL DEFAULT 'PENDING',
	PRIMARY KEY(id),
	FOREIGN KEY(payment_method_id) REFERENCES payment_method(id) ON DELETE CASCADE,
	FOREIGN KEY(affiliate_id) REFERENCES affiliate(aff_id) ON DELETE CASCADE
);

create table subscriptions
	(
		sub_id INT NOT NULL AUTO_INCREMENT,
		subcription_id VARCHAR(255) NOT NULL UNIQUE,

		affiliate_id INT NOT NULL,
		package_id INT NOT NULL,

		plan_date DATE NOT NULL,
		plan_expire DATE NULL,

		PRIMARY KEY(sub_id),
		FOREIGN KEY(affiliate_id) REFERENCES affiliate(aff_id) ON DELETE CASCADE,
		FOREIGN KEY(package_id) REFERENCES package(id) ON DELETE CASCADE

		);
	create table agentmessages
		(
			msg_id INT NOT NULL AUTO_INCREMENT,
			sender_phone VARCHAR(20) NOT NULL,
			sender_email VARCHAR(50) NULL,
			sender_name VARCHAR(100) NOT NULL,
			message TEXT(1000) NOT NULL,

			property_id INT NOT NULL,
			agent_id INT NOT NULL,

			date_contacted DATETIME NOT NULL DEFAULT NOW(),
			PRIMARY KEY(msg_id),
			FOREIGN KEY(property_id) REFERENCES property_listing(listing_id) ON DELETE CASCADE,
			FOREIGN KEY(agent_id) REFERENCES affiliate(aff_id) ON DELETE CASCADE
			);
	create table slider
	(
		slider_id INT NOT NULL AUTO_INCREMENT,
		slider_name VARCHAR(100) NOT NULL,
		slider_img VARCHAR(255) NOT NULL

		date_created DATETIME NOT NULL DEFAULT NOW(),
		is_enabled ENUM('ACTIVE','DISABLED') NOT NULL DEFAULT 'ACTIVE',
		admin_id INT NOT NULL,

		PRIMARY KEY(slider_id),
		FOREIGN KEY(admin_id) REFERENCES affiliate(aff_id) ON DELETE CASCADE
		);