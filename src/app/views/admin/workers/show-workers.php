<!doctype html>
<html lang="es">
<head>
    <?php require "app/views/admin/parts/head.php" ?>
</head>

<body>
    <?php require "app/views/admin/parts/header.php" ?>
<body>
  <h1>Plantilla de trabajadores</h1>
    <div class="pelu-workers">
    <table class="table table-striped table-hover">
        <tr>
          <th>Nombre</th>
          <th>Apellidos</th>
          <th>Experiencia</th>
          <th></th>
        </tr>
          <tr>
          <td><?php echo $worker->name ?></td>
          <td><?php echo $worker->apellidos ?></td>
          <td><?php echo $worker->experiencia ?></td>
          <td>
          </td>
          </tr>
      </table>
    </div>
</body>
</html>