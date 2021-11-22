<!doctype html>
<html lang="es">
<head>
    <?php require "app/views/admin/parts/head.php" ?>
</head>

<body>
    <?php require "app/views/admin/parts/header.php" ?>
  <main role="main" class="container">
    <div class="starter-template">
    <h1>Añadir servicio</h1>
    <form method="post" action='/services/store'>
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label>Precio</label>
        <input type="text" name="precio" class="form-control">
    </div>
    <div class="form-group">
        <label>Tiempo</label>
        <input type="text" name="tiempo" class="form-control">
    </div>
    <button type="submit" class="btn btn-default">Enviar</button>
    </form>    
  </div>

</body>

</html>