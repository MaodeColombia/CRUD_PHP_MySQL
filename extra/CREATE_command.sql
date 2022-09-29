CREATE DATABASE IF NOT EXISTS php_mysql_crud CHARACTER SET 'UTF8' COLLATE 'utf8_general_ci';

USE php_mysql_crud;
/* Error: #1046 Base de datos no seleccionada */

CREATE TABLE task(
  `id` INT(11) PRIMARY KEY AUTO_INCREMENT,
  `title` VARCHAR(255) NOT NULL,
  `description` TEXT,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

/*  El anterior query genera la siguiente tabla 
    +-------------+--------------+------+-----+---------------------+----------------+
    | Field       | Type         | Null | Key | Default             | Extra          |
    +-------------+--------------+------+-----+---------------------+----------------+
    | id          | int(11)      | NO   | PRI | NULL                | auto_increment |
    | title       | varchar(255) | NO   |     | NULL                |                |
    | description | text         | YES  |     | NULL                |                |
    | created_at  | timestamp    | NO   |     | current_timestamp() |                |
    +-------------+--------------+------+-----+---------------------+----------------+ 

    para ver en linea de comando la tabla `task` usar el comando 
    DESCRIBE task;
*/