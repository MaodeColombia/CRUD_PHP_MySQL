<?php
/*para esto se usa session_start(), función que crea una sesión o reanuda la actual basada en un identificador de sesión pasado mediante una petición GET o POST, o pasado mediante una cookie.
https://www.php.net/manual/es/function.session-start.php

en otras palabras se guarda datos de la sesión, permite conocer inforamación de la navegación entre una y otra página 
https://github.com/MaodeColombia/CRUD_PHP_MySQL/blob/master/extra/image/20221014211835_1.png 

Los mensajes que se guardarán con esta función (para intercambiar información entre páginas web) serán almacenados en el servidor 
https://github.com/MaodeColombia/CRUD_PHP_MySQL/blob/master/extra/image/20221014211835_2.png */

session_start();


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
    echo "<br>";
    //https://www.php.net/manual/es/function.mysqli-connect.php
    echo "DB is conneted".PHP_EOL;
    echo "<br>";
    echo "host information: " . mysqli_get_host_info($conn) . PHP_EOL;
    } 
    else { 
          echo "Error: No conexion to MySQL." . PHP_EOL;
          echo "<br>";
          echo "errno info depuration: " . mysqli_connect_errno() . PHP_EOL;
          echo "<br>";
          echo "error info depuration: " . mysqli_connect_error() . PHP_EOL;
    }

/* se valida en 
    http://localhost/CRUD_PHP_MySQL/db.php
    
    https://github.com/MaodeColombia/CRUD_PHP_MySQL/blob/master/extra/image/20220922013520.png */
?>