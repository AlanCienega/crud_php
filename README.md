#crud_php

## crear base de datos

create database crud_php;

## crear tabla

create table tasks(
   id INT NOT NULL AUTO_INCREMENT,
   title VARCHAR(50) NOT NULL,
   description VARCHAR(100) NOT NULL,
   PRIMARY KEY ( id )
);
