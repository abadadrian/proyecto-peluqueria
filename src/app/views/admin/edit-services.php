<!doctype html>
<html lang="es">

<head>
<title>Editar servicio</title>
</head>
<body>
  <main role="main" class="container">
    <div class="starter-template">

    <h1>Edición de servicio</h1>

    <form method="post" action="<?="/user/update"?>">
        <input type="hidden" name="id"
        value="<?php echo $user->id ?>">

    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="name" class="form-control"
        value="<?php echo $user->name ?>"
        >
    </div>
    <div class="form-group">
        <label>Tiempo</label>
        <input type="text" name="surname" class="form-control"
        value="<?php echo $user->surname ?>"
        >
    </div>
    <div class="form-group">
        <label>Precio</label>
        <input type="text" name="birthdate" class="form-control"
        value="<?php echo $user->birthdate->format('Y-m-d') ?>"
        >
    </div>
    <button type="submit" class="btn btn-default">Enviar</button>
    </form>
  </div>
</body>
</html>