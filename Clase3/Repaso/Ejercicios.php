<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repaso con el Aaron</title>
</head>

<body>
    <h1>Dias de la semana</h1>
    <p>generar un programa con los dias de la semana; si es del dia lunes a viernes que mande un mensaje que es un dia laboral</p>
        <br>
    <p>si es dia de dabado o domingo es un dia de descanso</p>
        <br>
    <p>en el caso de no seleccionar ningun dia dar un mensaje de parametro invalido</p>

   <form action="Respuestasemana.php" method="POST">
       <!--Dias de la semana-->
       <br><h1>Dia de la semana</h1> <br>
        Ingresa el dia de la semana: <input type="text" name="txtdiasemana" placeholder="Ingresa un dia de la seman" >
        <button>Que dia es</button>
        <br>
   </form>
   
   
   <br><br>
    <form action="RespuestaSuma.php">
    <br>     
    Ingrese numero 1: <input name="num1"><br>
    Ingrese numero 2: <input name="num2"><br>
    Ingrese numero 3: <input name="num3">
    <br>
    <button>Resultado de la suma</button>


    </form>
</body>

</html>