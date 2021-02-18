<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "inventario";
$port = "3306";

$conn = mysqli_connect($host,$user,$password,$database,$port);

if(!$conn){
    die("Conexión fallida: ". mysqli_connect_error());
}