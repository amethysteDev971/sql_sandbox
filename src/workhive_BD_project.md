````sql
CREATE DATABASE workhive
````

- Ma création de la table Users
````sql
CREATE TABLE Users (
     id INT AUTO_INCREMENT PRIMARY KEY,
     first_name VARCHAR(50)NOT NULL,
     last_name VARCHAR(50) NOT NULL,
     photo VARCHAR(255) NULL,
     user_role ENUM('member', 'user', 'admin') NOT NULL,
	 phone VARCHAR(15) NULL,
     email VARCHAR(100) NOT NULL,
     password VARCHAR(255) NOT NULL,
     status ENUM('active', 'inactive') NOT NULL,
     created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
     updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP()
);


#table Rooms
CREATE TABLE Rooms (
     id INT AUTO_INCREMENT PRIMARY KEY,
     name VARCHAR(100) NOT NULL,
     description TEXT NULL,
     photo VARCHAR(255) NULL,
     capacity INT NOT NULL,
	 width DECIMAL(5,2) NOT NULL,
     length DECIMAL(5,2) NOT NULL,
     status ENUM('active', 'inactive') DEFAULT 'active',
     created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
     updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP()
);

CREATE TABLE Room_Role_Rate (
     id INT AUTO_INCREMENT PRIMARY KEY,
     room_id INT NOT NULL,
     user_role ENUM('member', 'guest', 'admin') NOT NULL,
     hourly_rate DECIMAL(10,2) NOT NULL 
);

CREATE TABLE Room_Equipment (
     id INT AUTO_INCREMENT PRIMARY KEY,
     room_id INT NOT NULL,
     equipment_id INT NOT NULL,
     quantity INT NOT NULL,
     assigned_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);

CREATE TABLE Equipments (
     id INT AUTO_INCREMENT PRIMARY KEY,
     name VARCHAR(100) NOT NULL,
     description TEXT NULL,
     photo VARCHAR(255) NULL,
     total_stock INT NOT NULL,
     created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
     updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP()
);

CREATE TABLE Reservation_Equipment (
     id INT AUTO_INCREMENT PRIMARY KEY,
     reservation_id INT NOT NULL,
     equipment_id INT NOT NULL,
     quantity INT NOT NULL,
     created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
     updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP()
);

CREATE TABLE Equipment_Role_Rate (
     id INT AUTO_INCREMENT PRIMARY KEY,
     equipment_id INT NOT NULL,
     user_role ENUM('member', 'guest', 'admin') NOT NULL,
     hourly_rate INT NOT NULL,
     created_at DECIMAL(10,2) NOT NULL,
     FOREIGN KEY (equipment_id) REFERENCES Equipments(id)
);

ALTER TABLE Reservations ADD FOREIGN KEY (user_id) REFERENCES Users(id);

ALTER TABLE Reservations ADD FOREIGN KEY (room_id) REFERENCES Rooms(id);

ALTER TABLE Reservation_Equipment ADD FOREIGN KEY (reservation_id) REFERENCES Reservations(id);

ALTER TABLE Reservation_Equipment 
ADD FOREIGN KEY (equipment_id) REFERENCES Equipments(id);

ALTER TABLE Room_Equipment 
ADD FOREIGN KEY (equipment_id) REFERENCES Equipments(id),
ADD FOREIGN KEY (room_id) REFERENCES Rooms(id);

ALTER TABLE Room_Role_Rate 
ADD FOREIGN KEY (room_id) REFERENCES Rooms(id);

````