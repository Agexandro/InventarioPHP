<?php
    require_once("data/config.php");
    $result = mysqli_query($conn, "select clave,descripcion,lote,piezas,caducidad from medicamento inner join u013 on medicamento.clave = u013.clave_medicamento order by clave asc");
    header("Content-type: application/xls;charset=ISO-8859");
    header("Content-Disposition: attachment; filename=Inventario_U013_".date("d-m-Y").".xls");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .titulo{
        font-size: 16px;
        font-weight: bold;
        text-align: center;
    }

    .cut{
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        width: 100px;
    }

    .centrar {
        text-align: center;
    }
    td {
        font-size: 16px;
    }

    </style>
</head>
<body>
<table border="1" cellpadding="2" cellspacing="0" width="100%">
<?php 
if(mysqli_num_rows($result)>0){
        echo "<td class='cut'>Fecha de realización de inventario</td>";
        echo "<td class='titulo'>Clave</td>";
        echo "<td class='titulo'>Descripción</td>";
        echo "<td class='titulo'>Lote</td>";
        echo "<td class='titulo'>Piezas</td>";
        echo "<td class='cut'>Fecha de caducidad</td>";
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td class='centrar'>".date("d/m/Y")."</td>";
        echo "<td class='centrar'>{$row['clave']}</td>";
        echo "<td>{$row['descripcion']}</td>";
        echo "<td class='centrar'>{$row['lote']}</td>";
        echo "<td class='centrar'>{$row['piezas']}</td>";
        echo "<td class='centrar'>{$row['caducidad']}</td>";
        echo "</tr>";
    }
}
?>
</table>
</body>
</html>