<!doctype html>
<html lang="es">
<head>
    <?php require "app/views/admin/parts/head.php" ?>
</head>

<body>
    <?php require "app/views/admin/parts/header.php" ?>
<body>
    <div class="starter-template">
      <h1>Listado de trabajadores</h1>
      <a class="btn btn-primary" href="<?="/workers/create"?>" role="button">Nuevo</a>

      <table class="table table-striped table-hover">
        <tr>
          <th>Nombre</th>
            <th>Apellidos</th>
            <th>Experiencia</th>
          <th></th>
        </tr>

        <?php foreach ($workers as $key => $worker) { ?>
          <tr>
          <td><?php echo $worker->name ?></td>
          <td><?php echo $worker->apellidos ?></td>
          <td><?php echo $worker->experiencia ?></td>
          <td>
          <!-- La "/" final se deja porque pasa por referencia el ID del servicio así = show/(id) -->
            <a href="<?="/workers/show/".$worker->id ?>" class="btn btn-primary">Ver </a>
            <a href="<?="/workers/edit/".$worker->id ?>" class="btn btn-primary">Editar </a>
            <a href="<?="/workers/delete/".$worker->id ?>" class="btn btn-danger">Borrar </a>
          </td>
          </tr>
        <?php } ?>
      </table>
    </div>

</body>
</html>