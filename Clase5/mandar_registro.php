<?php
//conexion a la base datos
include "conexion.php";
mysqli_set_charset($conexion,'utf8');

//declaracion de varibales para formulario

$buscarUsuario = "SELECT * FROM persona where no_cuenta = '$_POST[no_cuenta]'";

$result = $conexion -> query($buscarUsuario);
$count = mysqli_num_rows($result);

if($count ==1 ){
    echo'El nombre se usuario ya a sido ocupado';
    
    
}else{
    mysqli_query($conexion, "INSERT INTO alumno (
    nombre_usuario,
    carrera,
    no_cuenta,
    direcion,
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
    '$_POST[password]'
        
        
    )");
echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
echo "<h4>" . "Bienvenido: " . $_POST['nombre_usuario'] . "</h4>";
echo "<h5>" . "<a href='./index.php'>Registro Usuario</a>" . "</h5>";

//termina el else
}



?>