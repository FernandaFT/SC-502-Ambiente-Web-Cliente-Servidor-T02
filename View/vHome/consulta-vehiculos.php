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

                    <div class="main-panel">
                        <div class="content-wrapper">
                            <div class="page-header">
                                <a href="inicio.php"
                                    class="btn btn-gradient-danger btn-rounded btn-fw">
                                    <i class="mdi mdi-arrow-left"></i>
                                    Ir al Inicio
                                </a>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card bg-gradient-success card-img-holder">
                                        <div class="card-body">
                                            <img src="../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />

                                            <h4 class="card-title text-center">
                                                Consulta de vehículos
                                            </h4>

                                            <table class="table text-center">
                                                <thead>
                                                    <tr>
                                                        <th>Cédula</th>
                                                        <th>Nombre</th>
                                                        <th>Marca</th>
                                                        <th>Modelo</th>
                                                        <th>Precio</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>116700557</td>
                                                        <td>Fernanda Fajardo</td>
                                                        <td>MINI</td>
                                                        <td>Countryman</td>
                                                        <td>3500000</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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