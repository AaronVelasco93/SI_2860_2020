<?php
include "conexion.php";
mysqli_set_charset($conexion, 'utf8');

$host_db="127.0.0.1";
$user_db="root";
$password_db="123456";
$name_db="fes_aragon";
// conexion a la DB
//$conexion = new mysqli($host_db,$user_db,$password_db,$name_db);
$conexion = new mysqli('localhost','root','123456','fes_aragon');

//validacion si el usuario ya esta registrado
$buscarUsuario="SELECT * FROM alumno WHERE no_cuenta = '$_POST[no_cuenta]'";

//mandar el query
$result=$conexion->query($buscarUsuario);

//saber si tenemos un resultado y se alamacena en una variable
 $count =mysqli_num_rows($result);

 //se hace la validacion de resultadp para saber si estan registrado
if ($count ==1){// si encuentra algun reegistro
        echo"<h1>El usuario con el numero de cuenta:".$_POST['no_cuenta'].  "ya esta registrado</h1>";

}else{//Se registra al usuario

    //query para poder mandar el registro

    mysqli_query( $conexion, "INSERT INTO alumno (
    nombre_usuario,
    carrera,
    no_cuenta,
    direccion,
    telefono,
    email,
    password)
    VALUES(
       '$_POST[nombre_usuario]',
       '$_POST[carrera]',
       '$_POST[no_cuenta]',
       '$_POST[direccion]',
       '$_POST[telefono]',
       '$_POST[email]',
       '$_POST[password]')");
    echo "<h1>Usuario registrado Exitosamente</h1>";
    echo "<h2>Bienvenido ".$_POST['nombre_usuario']."</h2>";

    
}
?>