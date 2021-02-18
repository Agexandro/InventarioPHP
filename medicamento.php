<?php require_once 'data/config.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicamento</title>
    <?php include_once('partials/link.php'); ?>
</head>

<body>
    <?php include_once('partials/navbar.php'); ?>
    <br>
    <div class="container">
        <div class="columns">
            <div class="column is-3">
                <?php include_once('partials/form_medicamento.php'); ?>
            </div>
            <div class="column">
                <?php require_once 'data/medicina.php'; ?>
            </div>
        </div>
    </div>
    <!-- Alert -->
    <?php include_once('partials/alert_medicamento.php'); ?>
    <!--  Modal eliminación -->
    <div class="mod" id="modal">
        <div class="modal-box">
            <div class="titulo">¿Eliminar?</div>
            <br>
            <form action="data/delete.php" method="post" style="text-align: center;">
                <input id="_id" name="_id" type="text" value="" hidden>
                <button name="btn_del_med" type="submit" class="button is-danger">Si, eliminar</button>
                <button type="button" class="button is-default" onclick="exit()">No eliminar</button>
            </form>
        </div>
    </div>

    <!-- Modal actualización -->
    <div class="mod" id="modal_update">
        <div class="modal-box">
            <div class="titulo">Editar medicamento</div>
            <br>
            <form action="data/update.php" method="POST" id="form_update">
                <div class="field">
                    <label for="clave_update">Clave</label>
                    <input type="text" name="clave_update" id="clave_update" class="input">
                    <input type="text" name="clave_org" id="clave_org" hidden>
                </div>
                <div class="field">
                    <label for="desc_update">Descripción</label>
                    <textarea type="text" name="desc_update" id="desc_update" class="input textarea"></textarea>
                </div>
                <div class="field">
                    <button type="button" onclick="validar_update()" name="submit_update"
                        class="btn success">Guardar</button>
                    <button type="button" style='margin-top:5px;width:100%;' class="btn danger"
                        onclick="exit_update()">Cancelar</button>
                </div>
                <div class="field">
                    <p id="alerta_update"></p>
                </div>
            </form>
        </div>
    </div>
    <?php include_once('partials/scripts.php'); ?>
    <script src="assets/script/medicamento.js"></script>
</body>

</html>
<?php mysqli_close($conn); ?>