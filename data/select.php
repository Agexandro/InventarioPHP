<?php
require_once 'config.php';

//Consultar medicamento
if (isset($_REQUEST['update'])) {
    $clave = $_REQUEST["clave"];

    $getone = mysqli_query($conn,"select descripcion from medicamento where clave = '{$clave}'");

    if ($getone) {
        echo mysqli_fetch_assoc($getone)["descripcion"];
    } else {
        echo 'bad';
    }
    mysqli_close($conn);
}