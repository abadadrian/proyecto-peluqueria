<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/admin/parts/head.php" ?>
</head>

<body>
  <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/admin">Home Admin</a></li>
      <li class="breadcrumb-item active" aria-current="page">Trabajadores</li>
    </ol>
  </nav>

  <div class="starter-template">
    <h1 class="mb-4">Listado de trabajadores</h1>
    <a class="btn btn-primary mb-4" href="<?= "/workers/create" ?>" role="button">Nuevo</a>

    <table class="table table-striped table-hover">
      <tr>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Email</th>
        <th>Detalles</th>
        <th>Opciones</th>
      </tr>
      <?php foreach ($workers as $key => $worker) { ?>
        <tr>
          <td><?php echo $worker->name ?></td>
          <td><?php echo $worker->surname ?></td>
          <td><?php echo $worker->email ?></td>
          <td><?php echo $worker->details ?></td>
          <td>
            <!-- La "/" final se deja porque pasa por referencia el ID del servicio así = show/(id) -->
            <a href="<?= "/workers/show/" . $worker->id ?>" class="btn btn-primary">Ver </a>
            <a href="<?= "/workers/edit/" . $worker->id ?>" class="btn btn-primary">Editar </a>
            <a href="<?= "/workers/delete/" . $worker->id ?>" class="btn btn-danger">Borrar </a>
          </td>
        </tr>
      <?php } ?>
    </table>
    <select class="custom-select" name="type_id">
      <option>Seleccionar</option>
      <?php foreach ($workers as $key => $worker) { 
        $selected = $worker->name == 'Adrian' ? 'selected': '';?>
        <option value="<? echo $worker->email?>"<?= $selected?>><?php echo $worker->email?> </option>
      <?php } ?>
    </select>
  </div>

</body>

</html>