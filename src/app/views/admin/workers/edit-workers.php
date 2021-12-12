<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/admin/parts/head.php" ?>
</head>

<body>
  </head>

  <body>
    <?php require "app/views/admin/parts/header.php" ?>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin">Home Admin</a></li>
        <li class="breadcrumb-item"><a href="/workers">Trabajadores</a></li>
        <li class="breadcrumb-item active" aria-current="page">Editar</li>
      </ol>
    </nav>
    <main role="main" class="container">
      <div class="starter-template">

        <h1 class="mb-4">Edición de trabajad@r</h1>

        <form method="post" action="<?= "/workers/update" ?>">
          <input type="hidden" name="id" value="<?php echo $worker->id ?>">
          <div><label>Nombre</label><input type="text" name="name" class="form-control mb-2" value="<?php echo $worker->name ?>"></div>
          <div> <label>Apellidos</label><input type="text" name="surname" class="form-control mb-2" value="<?php echo $worker->surname ?>"></div>
          <div><label>Email</label><input type="text" name="email" class="form-control mb-2" value="<?php echo $worker->email ?>"></div>
          <div><label>Detalles</label><input type="text" name="details" class="form-control mb-2" value="<?php echo $worker->details ?>"></div>
          <div><label>Fecha de nacimiento</label><input type="text" name="birthdate" class="form-control" value="<?php echo $worker->birthdate->format('Y-m-d') ?>">
            <label>Servicios</label>
            <div class="form-check">
              <?php
              $servicesWorkers = [];
              $workersServices = $worker->service;
              foreach ($workersServices as $key => $workerService) {
                $servicesWorkers[] = $workerService->services_id;
              }
              foreach ($services as $key => $service) {
                if (in_array($service->id, $servicesWorkers)) { ?>
                  <input class="form-check-input" name="servicesid[]" type="checkbox" value="<?= $service->id ?>" checked>
                  <label class="form-check-label"><?= $service->name ?></label><br>
                <?php
                } else { ?>
                  <input class="form-check-input" name="servicesid[]" type="checkbox" value="<?= $service->id ?>">
                  <label class="form-check-label"><?= $service->name ?></label><br>
                <?php
                }
                ?>
              <?php
              }
              ?>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Enviar</button>
        </form>
      </div>
  </body>

</html>