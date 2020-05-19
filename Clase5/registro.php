<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <header>
        <h1 style="text-align:center">Registro de Alumnos ICO</h1>
    </header>

    <form action="mandar_registro.php" method="post" >

    <label for="nombre_usuario">Nombre Completo:</label>
    <input type="text" name="nombre_usuario" maxlength="155" required>
    <br><br>

    <label for="carrera">Carrera:</label>
    <input type="text" name="carrera" maxlength="255" required>

    <br><br>
    <label for="numero_cuenta">Numero de Cuenta:</label>
    <input type="text" name="no_cuenta" maxlength="15" required>

    <br><br>
    <label for="Direccion">Direccion:</label>
    <input type="text" name="direccion" maxlength="255" required>


    <br><br>
    <label for="telefono">Numero de Celular:</label>
    <input type="text" name="telefono" maxlength="10" required>

    <br><br>
    <label for="email">Correo Electronico:</label>
    <input type="email" name="email" maxlength="155" required>

    <br><br>   
    <label for="contraseña">Ingresa tu contraseña:</label>
    <input type="password" name="password" maxlength="155" required>
    <br><br>

    <input type="submit" name="submit" value="Registro de Alumno">

    <input type="reset" name="clear" value="Borrar campos">


    </form>


</body>

</html>