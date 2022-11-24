# crud_php

## cloname

```
git clone https://github.com/AlanCienega/crud_php.git
```

## crear base de datos

```
create database crud_php;
```

## crear tabla

```
create table tasks(
   id INT NOT NULL AUTO_INCREMENT,
   title VARCHAR(50) NOT NULL,
   description VARCHAR(100) NOT NULL,
   created_at DATETIME NULL DEFAULT NULL,
   PRIMARY KEY ( id )
);
```

## inicia un servidor dentro del directorio del proyecto

```
php -S localhost:8000 -t .
```
