<?php
require_once 'config.php';

if (isset($_POST["btn_del_med"])) {
    mysqli_query($conn, "Delete from medicamento where clave ='{$_POST['_id']}'");
    mysqli_close($conn);
    header("location: /Inventario/medicamento.php?delete=ok");
}

if (isset($_POST["btn_del_inv"])) {
    mysqli_query($conn, "Delete from anaquel where clave_medicamento ='{$_POST['_id']}' AND lote='{$_POST['_lote']}' AND caducidad='{$_POST['_cad']}'");
    mysqli_close($conn);
    header("location: /Inventario/index.php?delete=ok");
}

if (isset($_POST["btn_del_u013"])) {
    mysqli_query($conn, "Delete from u013 where clave_medicamento ='{$_POST['_id']}' AND lote='{$_POST['_lote']}' AND caducidad='{$_POST['_cad']}'");
    mysqli_close($conn);
    header("location: /Inventario/u013.php?delete=ok");
}