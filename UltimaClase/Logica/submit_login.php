<?php
require "conexion.php";
session_start();
$no_cuenta = $_POST['no_cuenta'];
$clave = $_POST['contraseña'];

//la funcion COUNT nos regresa el numero de filas de la consulta, es decir, el numero de resgistros que cumple la determinada condicion
$q = "SELECT COUNT(*) AS contar FROM persona WHERE no_cuenta ='$no_cuenta' AND password = '$clave'";

$consulta= mysqli_query($conexion,$q);

$array = mysqli_fetch_array($consulta);

if ($array ['contar']>0) {
    
    //En la variable session vamos a guardar el numero de cuenta temporalmente, hasta que mi usario se salga de la aplicacion
    $_SESSION['numeroCuenta']=$no_cuenta;

    header("location: ../Principal.php");//esta archivo no esta echo
    
}else{
echo"
<center>
    <h1>No estas registrado en nuestro Sistema</h1>
    <a href='../index.php'>Login</a>
</center>";


}


?>

