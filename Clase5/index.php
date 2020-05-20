<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Registro de usuario</title>
</head>
<script>// script para que los campos de numero no reciban texto
    function valida(e) {
        tecla = (document.all) ? e.keyCode : e.which;
        //Tecla de retroceso para borrar, siempre la permite
        if (tecla == 8) {
            return true;
        }

        //patron de entrada, en este caso solo acepta numero
        patron = /[0-9]/;
        tecla_final = String.fromCharCode(tecla);
        return patron.test(tecla_final);
    }
</script>
<body>
    <header>
        <h1 style="text-align:center">Registro de Alumnos ICO2.0</h1>
    </header>

    <form action="mandar_registro.php" method="post" >

    <label for="nombre_usuario">Nombre Completo:</label>
    <input type="text" name="nombre_usuario" maxlength="155" required>
    <br><br>

    <label for="carrera">Carrera:</label>
    <input type="text" name="carrera" maxlength="255" required>

    <br><br>
    <label for="no_cuenta">Numero de Cuenta:</label>
    <input type="" name="no_cuenta" maxlength="15" onkeypress="return valida(event)" required>

    <br><br>
    <label for="direccion">Direccion:</label>
    <input type="text" name="direccion" maxlength="255" required>


    <br><br>
    <label for="telefono">Numero de Celular:</label>
    <input type="" name="telefono" maxlength="10" onkeypress="return valida(event)" required>

    <br><br>
    <label for="email">Correo Electronico:</label>
    <input type="email" name="email" maxlength="155" required>

    <br><br>   
    <label for="contraseña">Ingresa tu contraseña:</label>
    <input type="password" name="password" maxlength="30" required>
    <br><br>

    <input type="submit" name="submit" value="Registrar Alumno">

    <input type="reset" name="clear" value="Borrar campos">
    

    </form>


</body>

</html>