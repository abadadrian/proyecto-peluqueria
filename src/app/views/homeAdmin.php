<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
    </head>
    <body>
        <h1>Administrador.</h1>
        <form method="POST" action="?method=login">
            <input type="submit" value="Login">
        </form>
        <br>
        <form method="POST" action="?method=gestorEmpleadas">
            <input type="submit" value="Gestor de Empleadas">
        </form>
        <br>
        <form method="POST" action="?method=logout">
            <input type="submit" value="Logout">
        </form>
    </body>
</html>