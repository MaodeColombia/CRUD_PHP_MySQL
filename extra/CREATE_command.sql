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

/*  El siguiente query es generado por phpMyAdmin cuando se crea la tabla manualmente
    
    CREATE TABLE `php_mysql_crud`.`task` ( 
    `id` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT , 
    `title` VARCHAR(255) NOT NULL , 
    `description` TEXT , 
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ) ENGINE = InnoDB; 

    https://github.com/MaodeColombia/CRUD_PHP_MySQL/blob/master/extra/image/20220928193313.jpg

    y esto genera la misma tabla
    +-------------+--------------+------+-----+---------------------+----------------+
    | Field       | Type         | Null | Key | Default             | Extra          |
    +-------------+--------------+------+-----+---------------------+----------------+
    | id          | int(11)      | NO   | PRI | NULL                | auto_increment |
    | title       | varchar(255) | NO   |     | NULL                |                |
    | description | text         | YES  |     | NULL                |                |
    | created_at  | timestamp    | NO   |     | current_timestamp() |                |
    +-------------+--------------+------+-----+---------------------+----------------+
 */
/*  RECORDAR:
        si se requiere borrar la tabla el query es
        DROP TABLE `task`;
*/