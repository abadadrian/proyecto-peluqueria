<!doctype html>
<html lang="es">

<head>
    <?php require "app/views/admin/parts/head.php" ?>
</head>

<body>
<?php require "app/views/admin/parts/header.php" ?>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Home Admin</a></li>
            <li class="breadcrumb-item active" aria-current="page">Subida de fotos</li>
        </ol>
    </nav>

    <div class="starter-template w-50 p-2">
        <h1 class="mb-4">Subida de fotos</h1>
        <form action="/photos/upload" method="post" enctype="multipart/form-data">
            <label>Nombre</label>
            <input type="text" name="name" class="mb-3">
            <input type="file" class="form-control mb-4" id="customFile" name="photo">
            <input class="btn btn-primary mb-4" type="submit" value="Enviar">
        </form>

        <!-- Aquí estara el boton que cargara las imagenes en la vista del usuario -->
        <form action="/photos/show" method="post" enctype="multipart/form-data"> 
            <input class="btn btn-primary" type="submit" value="Mostrar fotos">
        </form>
    </div>
</body>

</html>