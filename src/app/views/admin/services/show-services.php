<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/admin/parts/head.php" ?>
</head>

<body>
  <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/admin">Home Admin</a></li>
      <li class="breadcrumb-item"><a href="/services">Servicios</a></li>
      <li class="breadcrumb-item active" aria-current="page">Ver</li>
    </ol>
  </nav>
  <h1 class="mb-4">Servicios peluquería</h1>
  <div class="pelu-services">
    <table class="table table-striped table-hover">
      <tr>
        <th>Nombre</th>
        <th>Género</th>
        <th>Detalles</th>
        <th>Precio</th>
        <th>Tiempo</th>
      </tr>
      <tr>
        <td><?php echo $service->name ?></td>
        <td><?php echo $service->gender ?></td>
        <td><?php echo $service->details ?></td>
        <td><?php echo $service->price ?></td>
        <td><?php echo $service->time ?></td>
      </tr>
    </table>
  </div>
</body>

</html>