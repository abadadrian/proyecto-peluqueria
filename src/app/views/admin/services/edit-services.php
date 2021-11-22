<!doctype html>
<html lang="es">
<head>
    <?php require "app/views/admin/parts/head.php" ?>
</head>

<body>
    <?php require "app/views/admin/parts/header.php" ?>
  <main role="main" class="container">
    <div class="starter-template">

    <h1>Edición de servicio</h1>

    <form method="post" action="<?="/services/update"?>">
        <input type="hidden" name="id" value="<?php echo $service->id ?>">
        <div><label>Nombre</label><input type="text" name="name" class="form-control" value="<?php echo $service->name ?>"></div>
        <div> <label>Precio</label><input type="text" name="precio" class="form-control"value="<?php echo $service->precio ?>"></div>
        <div><label>Tiempo</label><input type="text" name="tiempo" class="form-control"value="<?php echo $service->tiempo ?>"></div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    </div>
</body>
</html>