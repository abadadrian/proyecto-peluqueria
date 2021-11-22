<!doctype html>
<html lang="es">
<head>
    <?php require "app/views/admin/parts/head.php" ?>
</head>

<body>
    <?php require "app/views/admin/parts/header.php" ?>
  <main role="main" class="container">
    <div class="starter-template">

    <h1>Edición de trabajad@r</h1>

    <form method="post" action="<?="/workers/update"?>">
        <input type="hidden" name="id" value="<?php echo $worker->id ?>">
        <div><label>Nombre</label><input type="text" name="name" class="form-control" value="<?php echo $worker->name ?>"></div>
        <div> <label>Apellidos</label><input type="text" name="apellidos" class="form-control"value="<?php echo $worker->apellidos ?>"></div>
        <div><label>Experiencia</label><input type="text" name="experiencia" class="form-control"value="<?php echo $worker->experiencia ?>"></div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    </div>
</body>
</html>