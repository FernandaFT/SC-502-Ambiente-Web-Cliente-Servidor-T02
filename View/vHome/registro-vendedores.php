<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/SC-502-Ambiente-Web-Cliente-Servidor-T02/View/layout.php";
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
                                    
                                    <form class="forms-sample">

                                        <div class="form-group">
                                            <label>Cédula</label>
                                            <input type="text" class="form-control" id="Cedula" placeholder="Cédula">
                                        </div>

                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input type="text" class="form-control" id="Nombre" placeholder="Nombre">
                                        </div>

                                        <div class="form-group">
                                            <label>Correo Electrónico</label>
                                            <input type="email" class="form-control" id="Correo" placeholder="Correo">
                                        </div>

                                        <button type="submit" class="btn btn-gradient-danger btn-rounded btn-fw me-2">Procesar</button>
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