<!DOCTYPE html>
<html>

<head>
    <?php require "app/views/admin/parts/head.php" ?>
</head>

<body>
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active">Home Admin</li>
  </ol>
</nav>
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