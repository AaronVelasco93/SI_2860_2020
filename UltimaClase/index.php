<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <center>
        <h1>Ingresando al sistema del Aaron</h1>
            <form action="./Logica/submit_login.php" method="post">
                <input type="text" name="no_cuenta" placeholder="Ingresa tu numero de cuenta">
                <br>
                <input type="password" name="contraseña" placeholder="Ingresa tu contraseña">
                <br>
                <button type="submit" >Login</button>
            </form>
    </center>

</body>

</html>