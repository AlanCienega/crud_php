create table tasks(
   id INT NOT NULL AUTO_INCREMENT,
   title VARCHAR(50) NOT NULL,
   description VARCHAR(100) NOT NULL,
   created_at DATETIME NULL DEFAULT NULL,
   PRIMARY KEY ( id )
);