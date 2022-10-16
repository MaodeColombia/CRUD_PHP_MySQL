<?php
/* Ahora se pretende poner un Mensaje de "registro exitoso" en la página del formulario, asi
https://github.com/MaodeColombia/CRUD_PHP_MySQL/blob/master/extra/image/20221002194215.png */

//se requiere la conexión a penas inicie la aplicación
include ("db.php")
?>

<?php include("includes/header.php")?>
        
    <!-- Seccion donde se tendrá un formulario y una tabla  -->
    <div>
        <!-- contenedor de Bootstrap que permite centrar el contenido 
        https://sutilweb.com/lenguajes/bootstrap/bootstrap-4/contenedores-en-bootstrap/ 
        https://github.com/MaodeColombia/CRUD_PHP_MySQL/blob/master/extra/image/20220929082755_class='containerp-4'.jpg -->
        <div class="container p-4">
            <!-- https://www.w3schools.com/bootstrap/bootstrap_grid_system.asp
                https://www.w3schools.com/bootstrap/bootstrap_grid_examples.asp
                https://getbootstrap.com/docs/5.0/layout/grid/
                https://github.com/MaodeColombia/CRUD_PHP_MySQL/blob/master/extra/image/20220929084148_col-md-4.jpg -->
            <div class="row">
                <div class="col-md-4">  
                    <!--identificando donde se ubicaría el aviso "registro exitoso"-"Task Saved Successfully" como se propuso (ver el commit
                    https://github.com/MaodeColombia/CRUD_PHP_MySQL/commit/6e13a30a211909a964462ea96977c6761e4ecbb2 )
                    https://github.com/MaodeColombia/CRUD_PHP_MySQL/blob/master/extra/image/20221015220656.png 
                    
                    Lo primero es validar si los datos de "session" están disponibles
                    https://github.com/MaodeColombia/CRUD_PHP_MySQL/blob/master/extra/image/20221015225636.png 
                
                    Lo segundo es mostrar "Task Saved Successfully" haciendo uso de Boostrap
                    https://getbootstrap.com/docs/5.2/components/alerts/#dismissing -->
                    <?php
                        if (isset($_SESSION['message'])) { ?>
                        <!-- NOTA: con el anterior "?>" y el "< ? php" siguiente se hace que el if opere dentro del contexto de PHP solamante y aquí en esta área se pueda usar HTML (HTML que se copiará directamente de Bootsrap) 
                        
                        copiado de la página de Boostrap
                        https://getbootstrap.com/docs/5.2/components/alerts/#dismissing 
                        se obtendría lo siguiente
                        https://github.com/MaodeColombia/CRUD_PHP_MySQL/blob/master/extra/image/20221016001249.png -->
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <!-- se cambia el mensaje por el enviado desde save_task.php por intermedio de la variable $_SESSION, note que está en el contexto de PHP
                            https://github.com/MaodeColombia/CRUD_PHP_MySQL/blob/master/extra/image/20221016002115.png 
                            tambien observe el uso de "< ? =" en stackoverflow en el siguiente link
                            https://es.stackoverflow.com/questions/75296/para-qu%C3%A9-sirve-en-php -->
                            <?= $_SESSION['message'] ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php
                        /* Retomando, lo que se pretende ahora es que este aviso que se ha trabajado no aparezca solamente cuando de /save_task.php haya hecho un registro, o sea se debe "Libera todas las variables de sesión"
                        https://www.php.net/manual/es/function.session-unset.php 
                        https://github.com/MaodeColombia/CRUD_PHP_MySQL/blob/master/extra/image/20221016010803.png */
                        session_unset(); 
                        }
                    ?>
                    
                    <!--https://www.w3schools.com/bootstrap5/bootstrap_cards.php
                        https://github.com/MaodeColombia/CRUD_PHP_MySQL/blob/master/extra/image/20220929093058_cardcard-body.jpg
                        https://getbootstrap.com/docs/5.0/components/card/ -->
                    <div class="card card-body">
                        <!-- se incluye un formulario con tres areas, para titulo, para inscripción y para guardar la tarea, todo esto con la class form-group; "action" pendiente -->
                        <!-- el formulario se enviará a save_task.php por el método POST (no muestra info en la URL) https://github.com/MaodeColombia/CRUD_PHP_MySQL/blob/master/extra/image/20221002155358.png -->
                        <form action="save_task.php" method="POST">
                            <!-- https://getbootstrap.com/docs/5.0/forms/overview/
                                https://getbootstrap.com/docs/4.0/components/forms/
                                https://www.w3schools.com/bootstrap5/bootstrap_forms.php -->
                            <div class="form-group">
                                <!-- https://www.w3schools.com/html/html_forms.asp
                                    name="title" especifica el nombre de la forma https://www.w3schools.com/html/html_forms_attributes.asp
                                    class="form-control" clase de bootstrap https://getbootstrap.com/docs/4.0/components/forms/#form-controls
                                    placeholder="Task title" https://www.w3schools.com/tags/att_input_placeholder.asp
                                    autofocus para que cuando incie la pagina el cursor se ubique en este input -->
                                <input type="text" name="title" class="form-control" placeholder="Task title" autofocus>
                            </div>
                            <br>
                            <div class="form-group">
                                <!-- textarea https://www.w3schools.com/tags/tag_textarea.asp
                                    name="description"  El atributo de nombre es necesario para hacer referencia a los datos del formulario después de enviar el formulario, https://www.w3schools.com/tags/tag_textarea.asp
                                    rows="2" El atributo de filas especifica la altura visible de un área de texto, en líneas, https://www.w3schools.com/tags/att_textarea_rows.asp
                                    class="form-control" clase de bootstrap
                                     -->
                                <textarea name="description" rows="2" class="form-control" placeholder="Task description"></textarea>
                            </div>
                            <br>
                            <!-- botón de tipo "submit" para que cuando se haga clic ejecute el formulario 
                                https://www.w3schools.com/tags/att_input_type_submit.asp
                                https://getbootstrap.com/docs/4.0/components/buttons/ 
                                https://github.com/MaodeColombia/CRUD_PHP_MySQL/blob/master/extra/image/20221002123720.png -->
                            <input type="submit" class="btn btn-success btn-block" name="save_task" value="Save task">
                        </form>
                    </div>
                </div>
                <!-- https://github.com/MaodeColombia/CRUD_PHP_MySQL/blob/master/extra/image/20220929090536__col-md-8.jpg -->
                <div class="col-md-8">

                </div>
            </div>
        </div>
    </div>
        
<?php include("includes/footer.php")?>
