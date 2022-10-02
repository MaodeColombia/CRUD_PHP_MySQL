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
        mysqli_query($conn, $query); 
    }
?>