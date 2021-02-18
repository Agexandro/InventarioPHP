<?php
require_once 'config.php';
//Registrar medicamento
if (isset($_POST['clave_update'])) {

    $clave = trim($_POST["clave_update"]);
    $clave_org = trim($_POST["clave_org"]);
    $desc = trim($_POST["desc_update"]);

    if (mysqli_query(
        $conn,
        "UPDATE medicamento SET clave='{$clave}', descripcion='{$desc}' WHERE clave = '{$clave_org}'"
    )) {
        header("Location: /Inventario/medicamento.php?update=ok");
    } else {
        header("Location: /Inventario/medicamento.php?update=bad");
    }
    mysqli_close($conn);
}

//Registrar lote
if (isset($_POST['submit_lote_update'])) {

    $clave = trim($_POST["clave"]);
    $clave_org = mb_split(",", $_POST["clave_org"]);
    $lote = trim($_POST["lote"]);
    $piezas = trim($_POST["piezas"]);
    $caducidad = trim($_POST["caducidad"]);

    if (($clave . "," . $lote . "," . $caducidad) == $_POST["clave_org"]) {

        if (mysqli_query(
            $conn,
            "UPDATE anaquel SET clave_medicamento='{$clave}', lote='{$lote}',  piezas=$piezas, caducidad='{$caducidad}'
     WHERE clave_medicamento = '{$clave_org[0]}' and lote = '{$clave_org[1]}' and caducidad = '$clave_org[2]'"
        )) {
            header("Location: /Inventario/index.php?update=ok");
        } else {
            header("Location: /Inventario/index.php?update=bad");
        }
    } else {
        $result = mysqli_query($conn, "select lote from anaquel where clave_medicamento = '$clave' and lote = '$lote' and caducidad='$caducidad'");

        if (mysqli_num_rows($result) > 0) {
            header("Location: /Inventario/index.php?result=exists");
        } else {
            if (mysqli_query(
                $conn,
                "UPDATE anaquel SET clave_medicamento='{$clave}', lote='{$lote}',  piezas=$piezas, caducidad='{$caducidad}'
         WHERE clave_medicamento = '{$clave_org[0]}' and lote = '{$clave_org[1]}' and caducidad = '$clave_org[2]'"
            )) {
                header("Location: /Inventario/index.php?update=ok");
            } else {
                header("Location: /Inventario/index.php?update=bad");
            }
        }
    }


    mysqli_close($conn);
}

//Registrar u013
if (isset($_POST['submit_u013_update'])) {

    $clave = trim($_POST["clave"]);
    $clave_org = mb_split(",", $_POST["clave_org"]);
    $lote = trim($_POST["lote"]);
    $piezas = trim($_POST["piezas"]);
    $caducidad = trim($_POST["caducidad"]);


    if (($clave . "," . $lote . "," . $caducidad) == $_POST["clave_org"]) {
        if (mysqli_query(
            $conn,
            "UPDATE u013 SET clave_medicamento='{$clave}', lote='{$lote}',  piezas=$piezas, caducidad='{$caducidad}'
     WHERE clave_medicamento = '{$clave_org[0]}' and lote = '{$clave_org[1]}' and caducidad = '$clave_org[2]'"
        )) {
            header("Location: /Inventario/u013.php?update=ok");
        } else {
            header("Location: /Inventario/u013.php?update=bad");
        }
    } else {

        $result = mysqli_query($conn, "select lote from u013 where clave_medicamento = '$clave' and lote = '$lote' and caducidad='$caducidad'");

        if (mysqli_num_rows($result) > 0) {
            header("Location: /Inventario/u013.php?result=exists");
        } else {
            if (mysqli_query(
                $conn,
                "UPDATE u013 SET clave_medicamento='{$clave}', lote='{$lote}',  piezas=$piezas, caducidad='{$caducidad}'
     WHERE clave_medicamento = '{$clave_org[0]}' and lote = '{$clave_org[1]}' and caducidad = '$clave_org[2]'"
            )) {
                header("Location: /Inventario/u013.php?update=ok");
            } else {
                header("Location: /Inventario/u013.php?update=bad");
            }
        }
    }
    mysqli_close($conn);
}
