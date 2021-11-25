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
      <li class="breadcrumb-item active" aria-current="page">Añadir</li>
    </ol>
  </nav>
  <main role="main" class="container">
    <div class="starter-template">
      <h1>Añadir servicio</h1>
      <form method="post" action='/services/store'>
        <div class="form-group">
          <label>Nombre</label>
          <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
          <label>Género</label>
          <input type="text" name="gender" class="form-control">
        </div>
        <div class="form-group">
          <label>Detalles</label>
          <input type="text" name="details" class="form-control">
          <br>
        </div>
        <div class="form-group">
          <label>Precio</label>
          <input type="text" name="price" class="form-control">
          <br>
        </div>
        <div class="form-group">
          <label>Tiempo</label>
          <input type="text" name="time" class="form-control">
          <br>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>

</body>

</html>