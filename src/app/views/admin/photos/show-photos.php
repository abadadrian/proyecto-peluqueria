<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/admin/parts/head.php" ?>
</head>

<body>
<?php require "app/views/admin/parts/header.php" ?>
  <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/admin">Home Admin</a></li>
      <li class="breadcrumb-item"><a href="/photos/index">Subir Fotos</a></li>
      <li class="breadcrumb-item active" aria-current="page">Ver</li>
    </ol>
  </nav>
  <!--  Vista donde se muestran las fotos -->
  <h1 class="mb-4">Fotos</h1>
  <div class="pelu-services">
    <table class="table table-striped table-hover">
      <tr>
        <th>Nombre</th>
        <th>Foto</th>
        <th>Opciones</th>
      </tr>
      <?php foreach ($photos as $key => $photo) { ?>
        <tr>
          <td><?php echo $photo->name ?></td>
          <td> <img src="<?php echo $photo->path ?>" width="250"></td>
          <td><a href="<?="/photos/delete/".$photo->id ?>" class="btn btn-danger">Borrar </a></td>
        </tr>
      <?php } ?>
    </table>
  </div>
</body>

</html>