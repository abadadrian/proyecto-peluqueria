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
      <li class="breadcrumb-item"><a href="/workers">Trabajadores</a></li>
      <li class="breadcrumb-item active" aria-current="page">Añadir</li>
    </ol>
  </nav>
  <main role="main" class="container">
    <div class="starter-template">
      <h1 class="mb-4">Añadir trabajador</h1>
      <form method="post" action='/workers/store'>
        <div class="form-group">
          <label>Nombre</label>
          <input type="text" name="name" class="form-control mb-2">
        </div>
        <div class="form-group">
          <label>Apellidos</label>
          <input type="text" name="surname" class="form-control mb-2">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" class="form-control mb-2">
        </div>
        <div class="form-group">
          <label>Contraseña</label>
          <input type="password" name="password" class="form-control mb-2">
        </div>
        <div class="form-group">
          <label>Detalles</label>
          <input type="text" name="details" class="form-control mb-4">
        </div>
        <div class="form-group">
          <label>Fecha de nacimiento (YYYY-MM-DD)</label>
          <input type="text" name="birthdate" class="form-control">
        </div>
        <label>Servicios</label>
        <div class="form-check">
        <?php
                    foreach ($services as $key => $service) { ?>
                        <input class="form-check-input" name="servicesid[]" type="checkbox" value="<?= $service->id ?>" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault"><?= $service->name ?></label><br>
                    <?php
                    }
                    ?>
        </div>
        <input class="btn btn-primary" type="submit" value="Enviar">
      </form>
    </div>

</body>

</html>