<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/admin/parts/head.php" ?>
</head>

<body>
  <?php require "app/views/admin/parts/header.php" ?>

  <body>
    <main role="main" class="container">
      <div class="starter-template">
        <h1>Añadir trabajador</h1>
        <form method="post" action='/workers/store'>
          <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="name" class="form-control">
          </div>
          <div class="form-group">
            <label>Apellidos</label>
            <input type="text" name="apellidos" class="form-control">
          </div>
          <div class="form-group">
            <label>Experiencia</label>
            <input type="text" name="experiencia" class="form-control">
          </div>
          <br>
          <input class="btn btn-primary" type="submit" value="Enviar">
        </form>
      </div>

  </body>

</html>