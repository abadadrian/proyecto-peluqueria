<!doctype html>
<html lang="es">
<head>
    <?php require "app/views/admin/parts/head.php" ?>
</head>

<body>
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/admin">Home Admin</a></li>
    <li class="breadcrumb-item active" aria-current="page">Servicios</li>
  </ol>
</nav>    <div class="starter-template">
      <h1>Listado de servicios</h1>
      <a href="<?="/services/create"?>" class="btn btn-primary">Nuevo</a>
      <table class="table table-striped table-hover">
        <tr>
          <th>Nombre</th>
            <th>Género</th>
            <th>Detalles</th>
            <th>Precio</th>
            <th>Tiempo</th>
          <th></th>
        </tr>
        <?php foreach ($services as $key => $service) { ?>
          <tr>
          <td><?php echo $service->name ?></td>
          <td><?php echo $service->gender ?></td>
          <td><?php echo $service->details ?></td>
          <td><?php echo $service->price ?></td>
          <td><?php echo $service->time ?></td>
          <td>
          <!-- La "/" final se deja porque pasa por referencia el ID del servicio así = show/(id) -->
            <a href="<?="/services/show/".$service->id ?>" class="btn btn-primary">Ver </a>
            <a href="<?="/services/edit/".$service->id ?>" class="btn btn-primary">Editar </a>
            <a href="<?="/services/delete/".$service->id ?>" class="btn btn-danger">Borrar </a>
          </td>
          </tr>
        <?php } ?>
      </table>
    </div>

</body>
</html>