<?php
$mensaje = "";
include_once $_SERVER["DOCUMENT_ROOT"] . "/SC-502-Ambiente-Web-Cliente-Servidor-T02/View/layout.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/SC-502-Ambiente-Web-Cliente-Servidor-T02/Model/HomeModel.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/SC-502-Ambiente-Web-Cliente-Servidor-T02/Controller/HomeController.php";
$vehiculos = ConsultarVehiculos();
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
                                                    <?php if ($vehiculos && $vehiculos->num_rows > 0) { ?>
                                                        <?php while ($row = $vehiculos->fetch_assoc()) { ?>
                                                            <tr>
                                                                <td><?php echo htmlspecialchars($row["Cedula"]); ?></td>
                                                                <td><?php echo htmlspecialchars($row["Nombre"]); ?></td>
                                                                <td><?php echo htmlspecialchars($row["Marca"]); ?></td>
                                                                <td><?php echo htmlspecialchars($row["Modelo"]); ?></td>
                                                                <td><?php echo htmlspecialchars($row["Precio"]); ?></td>
                                                            </tr>
                                                        <?php } ?>
                                                    <?php } else { ?>
                                                        <tr>
                                                            <td colspan="5">No hay vehículos registrados</td>
                                                        </tr>
                                                    <?php } ?>
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