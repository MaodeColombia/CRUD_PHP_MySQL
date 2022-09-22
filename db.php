<?php
// LA CONEXIÓN A SQL

/* 
* - De la biblioteca de PHP se usa el objeto    mysqli
* - mysqli_connect abre una nueva conexión al servidor de MySQL
* - https://www.php.net/manual/en/mysqli.construct.php
*
* YA ESTE ES EL OBJETO QUE GENERA LA CONEXIÓN
*/ 

mysqli_connect(
  'localhost',
  'root',
  '',
  'php_mysql_crud'
);
?>