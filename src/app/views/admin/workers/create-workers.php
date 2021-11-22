<!doctype html>
<html lang="es">

<head>
<title>Añadir trabajador</title>
</head>

<body>

  <main role="main" class="container">
    <div class="starter-template">
    <h1>Añadir trabajador</h1>
    <form method="post" action='/workers/store'>
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label>Apellidos</label>
        <input type="text" name="apellidos" class="form-control">
    </div>
    <div class="form-group">
        <label>Experiencia</label>
        <input type="text" name="experiencia" class="form-control">
    </div>
    <button type="submit" class="btn btn-default">Enviar</button>
    </form>    
  </div>

</body>

</html>