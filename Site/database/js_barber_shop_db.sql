#=====================================================================================
# BTS SIO - MYSQL
# ------------------------------------------------------------------------------------
# js_barber_shop_database.sql  (02/2023)
#=====================================================================================

DROP DATABASE IF EXISTS js_barber_shop_db;
CREATE DATABASE js_barber_shop_db;
USE js_barber_shop_db;


#=====================================================================================
#   TABLE : ADMIN
#=====================================================================================
CREATE TABLE Admin (
    id INT NOT NULL AUTO_INCREMENT,
    email VARCHAR(255),
    password_hash VARCHAR(255),
    PRIMARY KEY (id)
);

#=====================================================================================
#   Contents of the `admin` table
#=====================================================================================
INSERT INTO Admin (email, password_hash) VALUES ('jsbarbershop08000@gmail.com', 'c8fd42a4b7c30043ae4e57be7fb9003a88bcb6105bd0f66b38ce6d317147c557'); #password : jsbarbershop@admin54


#=====================================================================================
#   TABLE : BARBER
#=====================================================================================
CREATE TABLE Barber (
    id INT NOT NULL AUTO_INCREMENT,
    nom VARCHAR(128),
    prenom VARCHAR(128),
    email VARCHAR(255),
    numero_tel CHAR(30),
    password_hash VARCHAR(255),
    genre VARCHAR(255),
    PRIMARY KEY(id)
);