<!DOCTYPE html>
<html>

<head>
    <?php require "app/views/admin/parts/head.php" ?>
</head>

<body>
    <?php require "app/views/admin/parts/header.php" ?>
    <h1>Home Administrador</h1>
    <br>
    <form method="POST" action="/workers">
        <button type="submit" class="btn btn-dark">Trabajadores</button>
    </form>
    <br>
    <form method="POST" action="/services">
    <button type="submit" class="btn btn-dark">Servicios</button>
    </form>
    <br>
    <form method="POST" action="/login/logout">
    <button type="submit" class="btn btn-dark">Cerrar sesión</button>
    </form>
    <?php require "app/views/admin/parts/footer.php" ?>
</body>
<?php require "app/views/admin/parts/scripts.php" ?>

</html>