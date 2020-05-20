<?php
$host_db="localhost";
$user_db="root";
$pass_db="123456";
$db_name="test_php";
//creacion de un objeto conexion
$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);
//error en al conexion mandara un error

if($conexion->connect_error){
    echo"<h1>MySQL le esta dando permisos para ejecutar consultas</h1>";
}
?>