<?php
$host_db="localhost";
$user_db="root";
$pass_db="123456";
$name_db="test_php";

$conexion= mysqli_connect($host_db,$user_db,$pass_db,$name_db);

if($conexion) {

}else{
    echo "<p>MySQL no reconoce el usuario o el password de la DB y rechaza el intento de conexion</p>";
}


?>