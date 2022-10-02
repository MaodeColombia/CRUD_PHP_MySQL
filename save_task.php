<!-- La variable superglobal $_POST de tipo array contiene todos los datos de POST -->
<!-- isset — Determina si una variable está definida y no es null
https://www.php.net/manual/es/function.isset.php -->
<?php
    if (isset($_POST['save_task'])) {
        $t = $_POST['title'];
        $d = $_POST['description'];
        echo $t;
        echo '<br>';
        echo $d;
    }
?>