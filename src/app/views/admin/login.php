<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio sesión - Administrador</title>
    </head>
    <body>
        <h3>Introduce </h3>
        <form method="POST" action="?method=auth">
            <label>Nombre: </label><input type="text" value="" name="usuario"><br><br>
            <label>Contraseña: </label><input type="password" value="" name="contraseña"><br><br>
            <input type="submit" value="Entrar">
        </form>
    </body>
</html>