<?php
require_once('data/config.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="autor" content="Alejandro Galván Espinoza">
    <meta name="contacto" content="kleon0313@gmail.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <?php include_once('partials/link.php'); ?>
</head>

<body>
    <?php require_once('partials/navbar.php'); ?>
    <br>
    <div class="container">
        <div class="columns">
            <div class="column is-3">
                <div class="contenedor">
                    <p class="form-title">Agregar nuevo lote</p>
                    <?php
                    $action = "data/insert.php";
                    $_clave = "clave";
                    $idform = "submit_lote";
                    $_lote = "lote";
                    $_piezas = "piezas";
                    $_cad = "cad";
                    $button = "validar()";
                    $_item = "";
                    include('partials/form_inventario.php'); ?>
                </div>
            </div>
            <div class="column ">
                <?php include_once("data/inventario.php"); ?>
            </div>
        </div>
    </div>
    <!-- Modal Eliminación -->
    <div class="mod" id="modal">
        <div class="modal-box">
            <div class="titulo">¿Eliminar?</div>
            <br>
            <form action="data/delete.php" method="POST" style="text-align: center;">
                <input id="_id" name="_id" type="text" value="" hidden>
                <input id="_lote" name="_lote" type="text" value="" hidden>
                <input id="_cad" name="_cad" type="text" value="" hidden>
                <button name="btn_del_inv" type="submit" class="button is-danger">Si, eliminar</button>
                <button type="button" class="button is-default" onclick="exit()">No eliminar</button>
            </form>
        </div>
    </div>
    <!-- Modal update -->
    <div class="mod" id="modal_update">
        <div class="modal-box">
            <p class="form-title">Actualizar lote</p>
            <!-- Formulario -->
            <?php
            $action = "data/update.php";
            $_clave = "clave_update";
            $idform = "submit_lote_update";
            $_lote = "lote_update";
            $_piezas = "piezas_update";
            $_cad = "cad_update";
            $button = "validar_update()";
            $_item = "<button style='margin-top:5px;width:100%;' type='button' class='btn danger' onclick='exit_update()'>Cancelar</button>
                      <input type='text' name='clave_org' id='clave_org' hidden>
                      <div class='field'><p id='alerta_update'></p></div>
                      ";
            include('partials/form_inventario.php'); ?>
        </div>
    </div>
    <!-- Alerts -->
    <?php include_once("partials/alert_medicamento.php"); ?>
    <!--script-->
    <?php include_once('partials/scripts.php'); ?>
    <script src="assets/script/inventario.js"></script>
</body>

</html>
<?php
mysqli_close($conn);
?>