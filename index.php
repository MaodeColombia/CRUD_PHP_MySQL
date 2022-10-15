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
                    <!-- https://www.w3schools.com/bootstrap5/bootstrap_cards.php
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
