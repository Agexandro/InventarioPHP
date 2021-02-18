<?php
require_once 'config.php';

//Registrar lote
if (isset($_POST['submit_lote'])) {
    $clave =trim($_POST["clave"]);
    $lote = trim($_POST["lote"]);
    $piezas = trim($_POST["piezas"]);
    $caducidad =trim($_POST["caducidad"]);

    $result = mysqli_query($conn, "select clave_medicamento from anaquel where clave_medicamento = '$clave' and lote = '$lote' and caducidad='$caducidad'");

    if (mysqli_num_rows($result) > 0) {
        header("Location: /Inventario/index.php?result=exists");
    } else {

        if (mysqli_query($conn, "INSERT INTO anaquel(clave_medicamento,lote,piezas,caducidad) 
    VALUES('{$clave}','{$lote}',{$piezas},'{$caducidad}')")) {
            header("Location: /Inventario/index.php?result=ok");
        } else {
            header("Location: /Inventario/index.php?result=bad");
        }
    }
    mysqli_close($conn);
}

//Registrar medicamento
if (isset($_POST['submit_medicine'])) {

    $clave = $_POST["clave"];
    $desc = trim($_POST["desc"]);

    $result = mysqli_query($conn, "select clave from medicamento where clave = '$clave'");

    if (mysqli_num_rows($result) <= 0) {
        if (mysqli_query($conn, "INSERT into medicamento(clave,descripcion) 
        VALUES('{$clave}','{$desc}')")) {
            header("Location: /Inventario/medicamento.php?result=ok");
        } else {
            header("Location: /Inventario/medicamento.php?result=bad");
        }
    } else {
        header("Location: /Inventario/medicamento.php?result=exists");
    }
    mysqli_close($conn);
}

//Registrar u013
if (isset($_POST['submit_u013'])) {
    $clave =trim($_POST["clave"]);
    $lote = trim($_POST["lote"]);
    $piezas = trim($_POST["piezas"]);
    $caducidad =trim($_POST["caducidad"]);

    $result = mysqli_query($conn, "select clave_medicamento from u013 where clave_medicamento = '$clave' and lote = '$lote' and caducidad='$caducidad'");

    if (mysqli_num_rows($result) > 0) {
        header("Location: /Inventario/u013.php?result=exists");
    } else {
        if (mysqli_query($conn, "INSERT INTO u013(clave_medicamento,lote,piezas,caducidad) 
    VALUES('{$clave}','{$lote}',{$piezas},'{$caducidad}')")) {
            header("Location: /Inventario/u013.php?result=ok");
        } else {
            header("Location: /Inventario/u013.php?result=bad");
        }
    }
    mysqli_close($conn);
}