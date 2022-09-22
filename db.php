<?php
// LA CONEXIÓN A SQL

/* 
* - De la biblioteca de PHP se usa el objeto    mysqli
* - mysqli_connect abre una nueva conexión al servidor de MySQL
* - https://www.php.net/manual/en/mysqli.construct.php
*
* ya este es el objeto que genera la conexión
*/ 

/* Se asigna el objeto a una variable */
$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'php_mysql_crud'
);

/*mysqli_connect devuelve un objeto que representa la conexión al servidor MySQL y en caso que no se genre la conexión devuelve FALSO*/

//isset :Determina si una variable está definida y es diferente de NULL 

/* entonces se valida si se establece la conexión */

if (isset($conn)){
    echo 'DB is conneted';
}

/* se valida en 
    http://localhost/CRUD_PHP_MySQL/db.php
    
    https://github.com/MaodeColombia/CRUD_PHP_MySQL/blob/master/extra/image/20220922013520.png*/
?>