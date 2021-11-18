<!doctype html>
<html lang="es">

<head>
<title>Añadir servicio</title>
</head>

<body>

  <main role="main" class="container">
    <div class="starter-template">

    <h1>Añadir servicio</h1>
    
    <form method="post" action="<?="/service/store"?>">

    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label>Precio</label>
        <input type="text" name="surname" class="form-control">
    </div>
    <div class="form-group">
        <label>Tiempo</label>
        <input type="text" name="birthdate" class="form-control">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control">
    </div>
    <button type="submit" class="btn btn-default">Enviar</button>
    </form>    
  </div>

</body>

</html>