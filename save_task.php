<!-- La variable superglobal $_POST de tipo array contiene todos los datos de POST -->
<!-- isset — Determina si una variable está definida y no es null
https://www.php.net/manual/es/function.isset.php -->


<!-- Comprobada el envio de información, ahora lo que se requiere es almacenar la informacion en la Dabe de Datos para lo cual se requiere de la conexión del query -->
<?php
   include('db.php'); // recordando, en este archivo solamente está el objeto $conn que establece la conexión a la DB

    if (isset($_POST['save_task'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        
        $query = "INSERT INTO task(`title`, `description`) VALUES ('$title', '$description')";
        /* con la conexión ('db.php') y con la sentencia ('$query') ya se puede ejecutar el query en la DB.
        mysqli_query — Realiza un query a la base de datos
        https://www.php.net/manual/en/mysqli.query.php */

        /*Si la sentencia se ejecutó se devuelve un objeto, el cual se puede comprobar así
        https://github.com/MaodeColombia/CRUD_PHP_MySQL/blob/master/extra/image/20221002185155.png */
        $result = mysqli_query($conn, $query); 
        if (!isset($result)) {
            echo "<br>";
            //exit() — https://www.php.net/manual/es/function.exit.php
            exit("Query failed"); //Falla del query, no se almacenó la información
        } else {
            /* ya en este punto no se debe pensar el funcionamiento propio de la página por lo que en vez de mostrar un "saved" se redirecciona al "formulario"  
            header() es usado para enviar encabezados HTTP sin formato
            https://www.php.net/manual/en/function.header.php 
            https://github.com/MaodeColombia/CRUD_PHP_MySQL/blob/master/extra/image/20221002191307.png 
            
            dicho en otras palabras, esta función es usada para cambiar de una "pagina a otra", y contextualizandolo, en esta parte del código se está ejecutando /save_task.php y lo que se quiere con "header" es que cambie a /index.php
            https://github.com/MaodeColombia/CRUD_PHP_MySQL/blob/master/extra/image/20221014183055.png */
            header("Location:index.php");
            /* el exit asegura que el código que continue este archivo no se ejecute.*/
            exit;
        }
    }
?>