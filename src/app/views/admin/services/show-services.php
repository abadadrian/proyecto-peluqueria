<!doctype html>
<html lang="es">
<head>
    <?php require "app/views/admin/parts/head.php" ?>
</head>

<body>
    <?php require "app/views/admin/parts/header.php" ?>
  <h1>Servicios peluquería</h1>
    <div class="pelu-services">
    <table class="table table-striped table-hover">
        <tr>
          <th>Nombre</th>
          <th>Precio</th>
          <th>Tiempo</th>
          <th></th>
        </tr>
          <tr>
          <td><?php echo $service->name ?></td>
          <td><?php echo $service->precio ?></td>
          <td><?php echo $service->tiempo ?></td>
          <td>
          </td>
          </tr>
      </table>
    </div>
</body>
</html>