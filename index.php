<?php
//se requiere la conexión a penas inicie la aplicación
include ("db.php")
?>

<?php include("includes/header.php")?>
        
    <!-- Seccion donde se tendrá un formulario y una tabla  -->
    <div>
        <!-- contenedor de Bootstrap que permite centrar el contenido 
        https://sutilweb.com/lenguajes/bootstrap/bootstrap-4/contenedores-en-bootstrap/ 
        https://github.com/MaodeColombia/CRUD_PHP_MySQL/blob/master/extra/image/20220929082755_class=containerp-4.jpg -->
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
                        <form action="">
                            <!-- https://getbootstrap.com/docs/5.0/forms/overview/
                                https://getbootstrap.com/docs/4.0/components/forms/
                                https://www.w3schools.com/bootstrap5/bootstrap_forms.php -->
                            <div class="form-group">
                                <input type="text">
                            </div>
                            <div class="form-group">
                                <textarea name="" id="" cols="" rows=""></textarea>
                            </div>
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
