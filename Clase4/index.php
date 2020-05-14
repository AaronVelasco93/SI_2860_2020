<?php
// se usa el requiere para si psi se necesita el archivo conexion
require ("conexion.php");

$conexion = new mysqli('127.0.0.1','root','123456','fes_aragon');

//genear el query
$consulta_sql="SELECT * FROM ALUMNO";

//mandar el query por medio de la conexion y almacenaremos el resultado en una variable
$resultado = $conexion->query($consulta_sql);
// Retorna el numero de filas del resultado. Si encuentra mas de uno lo usamos para imprimir el resultado en nuestra tabla
$count = mysqli_num_rows($resultado); 
 
echo "<table border='2' >
    <tr>
        <th>Usuario</th>
        <th>Carrera</th>
        <th>No Cuenta Institucional</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Correo Electronico</th>
        <th>Contraseña</th>
        <th>Fecha de Registro</th>
    </tr>";

if ( $count>0 ){
    //aqui se pintarian los registro de la DB
    while( $row = mysqli_fetch_assoc($resultado)  ){
     echo "<tr>";
     echo"<td>". $row['nombre_usuario'] ."</td>";
     echo"<td>". $row['carrera'] ."</td>";
     echo"<td>". $row['no_cuenta'] ."</td>";
     echo"<td>". $row['direccion'] ."</td>";
     echo"<td>". $row['telefono'] ."</td>";
     echo"<td>". $row['email'] ."</td>";
     echo"<td>". $row['password'] ."</td>";
     echo"<td>". $row['fecha_registro'] ."</td>";
     echo "</tr></table>";
     
    }


}else{
    
    
    echo"<h1 style='color:red' >Sin Ningun registro</h1>";
    }

?>


