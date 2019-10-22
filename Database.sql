CREATE DATABASE IF NOT EXISTS app_productos CHARACTER SET utf8 COLLATE utf8_spanish2_ci;;
USE app_productos;

CREATE TABLE productos(
id INT(11) auto_increment NOT NULL,
nombre_producto VARCHAR(255) NOT NULL,
nombre_empleado VARCHAR(255) NOT NULL,
precio_producto VARCHAR(255) NOT NULL,
fecha_compra TIMESTAMP DEFAULT CURRENT_TIMESTAMP  
ON UPDATE CURRENT_TIMESTAMP,
CONSTRAINT pk_productos PRIMARY KEY(id) 
)ENGINE=InnoDb;







