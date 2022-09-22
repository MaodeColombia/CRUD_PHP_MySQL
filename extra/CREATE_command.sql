CREATE DATABASE IF NOT EXISTS php_mysql_crud CHARACTER SET 'UTF8' COLLATE 'utf8_general_ci';

USE php_mysql_crud;
/* Error: #1046 Base de datos no seleccionada */

CREATE TABLE task(
  `id` INT(11) PRIMARY KEY AUTO_INCREMENT,
  `title` VARCHAR(255) NOT NULL,
  `description` TEXT,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);