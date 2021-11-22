<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Home</title>
    </head>
    <body>
        <?php require "app/views/admin/workers/parts/header.php"?>
        <h1>Home Administrador</h1>
        <br>
        <form method="POST" action="/workers">
            <input type="submit" value="Trabajadores">
        </form>
        <br>
        <form method="POST" action="/services">
            <input type="submit" value="Servicios">
        </form>
        <br>
        <form method="POST" action="/login/logout">
            <input type="submit" value="Logout">
        </form>
        </body>
</html>