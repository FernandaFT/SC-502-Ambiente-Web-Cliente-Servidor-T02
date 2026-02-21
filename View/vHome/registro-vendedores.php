<?php
$mensaje = "";
include_once $_SERVER["DOCUMENT_ROOT"] . "/SC-502-Ambiente-Web-Cliente-Servidor-T02/View/layout.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/SC-502-Ambiente-Web-Cliente-Servidor-T02/Controller/HomeController.php";
?>
<!DOCTYPE html>
<html lang="en">

<?php
MostrarCSS();
?>

<body>
    <div class="container-scroller">

        <div class="container-fluid page-body-wrapper">

            <div class="main-panel-body">
                <div class="content-wrapper">
                    <?php
                    MostrarHeader();
                    ?>

                    <div class="row justify-content-center">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card bg-gradient-primary card-img-holder text-white">
                                <div class="card-body">
                                    <img src="../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                                    <h4 class="card-title text-center text-white">Registro Vendedores</h4>

                                    <?php if (!empty($mensaje)) { ?>
                                        <div class="alert alert-danger mt-3"><?php echo $mensaje; ?></div>
                                    <?php } ?>

                                    <form class="forms-sample" action="" method="POST">

                                        <div class="form-group">
                                            <label>Cédula</label>
                                            <input type="text" class="form-control" id="Cedula" name="Cedula" placeholder="Cédula">
                                        </div>

                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre">
                                        </div>

                                        <div class="form-group">
                                            <label>Correo Electrónico</label>
                                            <input type="email" class="form-control" id="Correo" name="Correo" placeholder="Correo">
                                        </div>

                                        <button type="submit" id="btnRegistrarV" 
                                                name="btnRegistrarV"
                                                class="btn btn-gradient-danger btn-rounded btn-fw me-2">
                                                Procesar
                                        </button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    MostrarFooter();
                    ?>

                </div>
            </div>
        </div>

        <?php
        MostrarJS();
        ?>

</body>

</html>