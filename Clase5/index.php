<!DOCTYPE html>
<html lang="en">
<head>
 <title>Registrar Usuario</title>
 <meta charset = "utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 </head>


<script>

    function valida(e){
        tecla = (document.all) ? e.keyCode : e.which;
        //Tecla de retroceso para borrar, siempre la permite
        if (tecla==8){
            return true;
        }

        //patron de entrada, en este caso solo acepta numero
        patron =/[0-9]/;
        tecla_final = String.fromCharCode(tecla);
        return patron.test(tecla_final);
    }
</script>

<body>
 <header>
 <h2 style="text-align:center">Registro Alumnos 2.0 </h2>
  </header>




<form style="text-align:center"  action="mandar_registro.php" method="post">

 <hr />

 <!--Nombre-->
 
 <label for="nombre">Nombre Completo:</label><br>
 <input type="text" name="nombre" maxlength="255"  required>
 <br/><br/>

 <!-- Direcion -->

<label for="direcion">Direccion:</label><br>
<input type="text" name="direccion" maxlength="255" required>
<br/><br/>

<!-- Telefono -->

<label for="telefono">Telefono:</label><br>
<input type="text" onkeypress="return valida(event) "name="telefono" maxlength="15" required>
<br/><br/>

<!-- Email -->

<label for="correo">Email:</label><br>
<input type="email" name="correo" maxlength="35" required>
<br/><br/>

<!--Nombre_usuario-->

<label for="nombre">Nombre Usuario:</label><br>
<input type="text" name="nombre_usuario" maxlength="255"  required>
<br/><br/>

<!--Password-->

<label for="pass">Password:</label><br>
<input type="password" name="password" maxlength="8" required>

 <br/><br/>
 <input type="submit" name="submit" class="btn btn-primary" value="Registrarme">
 <input type="reset" name="clear" class="btn btn-primary" value="Borrar">
 
   

 </form>

 


 </body>
</html>
