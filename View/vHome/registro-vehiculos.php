<?php
$mensaje = "";
include_once $_SERVER["DOCUMENT_ROOT"] . "/SC-502-Ambiente-Web-Cliente-Servidor-T02/View/layout.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/SC-502-Ambiente-Web-Cliente-Servidor-T02/Model/HomeModel.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/SC-502-Ambiente-Web-Cliente-Servidor-T02/Controller/HomeController.php";
$vendedores = ConsultarVendedores();
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
                            <div class="card bg-gradient-info card-img-holder text-white">
                                <div class="card-body">
                                    <img src="../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                                    <h4 class="card-title text-center text-white">Registro Vehículos</h4>

                                    <?php if (!empty($mensaje)) { ?>
                                        <div class="alert alert-danger mt-3"><?php echo $mensaje; ?></div>
                                    <?php } ?>

                                    <form class="forms-sample" action="" method="POST">

                                        <div class="form-group">
                                            <label>Marca</label>
                                            <input type="text" class="form-control" id="Marca" name="Marca" placeholder="Marca">
                                        </div>

                                        <div class="form-group">
                                            <label>Modelo</label>
                                            <input type="text" class="form-control" id="Modelo" name="Modelo" placeholder="Modelo">
                                        </div>

                                        <div class="form-group">
                                            <label>Color</label>
                                            <input type="text" class="form-control" id="Color" name="Color" placeholder="Color">
                                        </div>

                                        <div class="form-group">
                                            <label>Precio</label>
                                            <input type="number" class="form-control" id="Precio" name="Precio"
                                                step="0.01" min="0" placeholder="Color">
                                        </div>

                                        <div class="form-group">
                                            <label>Vendedor</label>
                                            <select id="IdVendedor" name="IdVendedor" class="form-control" required>
                                                <option value="">Seleccione un vendedor</option>
                                                <?php if ($vendedores && $vendedores->num_rows > 0) { ?>

                                                    <?php while ($row = $vendedores->fetch_assoc()) { ?>
                                                        <option value="<?php echo htmlspecialchars($row["IdVendedor"]); ?>">
                                                            <?php echo htmlspecialchars($row["Nombre"]); ?>
                                                        </option>
                                                    <?php } ?>

                                                <?php } else { ?>

                                                    <option value="">No hay vendedores registrados</option>

                                                <?php } ?>
                                            </select>
                                        </div>

                                        <button type="submit" id="btnRegistrarVehiculo"
                                            name="btnRegistrarVehiculo"
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