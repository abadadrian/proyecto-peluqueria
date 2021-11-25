<!DOCTYPE html>
<html>
<head>
    <?php require "app/views/admin/parts/head.php" ?>
</head>

<body>
        <h3>Introduce </h3>
        <form method="POST" action="/login/auth">
            <label>Nombre: </label><input type="text" value="" name="usuario"><br><br>
            <label>Contraseña: </label><input type="password" value="" name="clave"><br><br>
            <input type="submit" value="Entrar"> 
        </form>
    </body>
</html>