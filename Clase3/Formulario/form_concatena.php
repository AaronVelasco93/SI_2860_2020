<?php
//Get -> txtnombre "aaron Velasco"
$dato = $_GET["txtnombre"]; //esto es un arreglo para almacenar cadenas de caracteres

if ($dato =="Aaron"){

    echo "<h1>Hola: </h1>".$dato."<h1> eres la persona esperada </h1>";
    echo '<a href="formulario.php" >Salir</a>';
}else {

    echo"<h2>Eres alguien diferente</h2>";
    echo "<br>";
    echo '<a href="formulario.php" >Regresar a la pagina anterior</a>';
}


?>