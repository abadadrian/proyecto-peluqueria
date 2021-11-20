<!doctype html>
<html lang="es">
<head>
<title>Listado de servicios</title>
</head>

<body>
    <div class="starter-template">
      <h1>Listado de servicios</h1>
      <p><a href="<?="/services/add"?>" class="btn btn-primary">Nuevo</a></p>
      <table class="table table-striped table-hover">
        <tr>
          <th>Nombre</th>
            <th>Precio</th>
            <th>Tiempo</th>
          <th></th>
        </tr>

        <?php foreach ($services as $key => $service) { ?>
          <tr>
          <td><?php echo $service->name ?></td>
          <td><?php echo $service->precio ?></td>
          <td><?php echo $service->tiempo ?></td>
          <td>
          <!-- La "/" final se deja porque pasa por referencia el ID del servicio así = show/(id) -->
            <a href="<?="/services/show/".$service->id ?>" class="btn btn-primary">Ver </a>
            <a href="<?="/services/edit/".$service->id ?>" class="btn btn-primary">Editar </a>
            <a href="<?="/services/delete/".$service->id ?>" class="btn btn-primary">Borrar </a>
          </td>
          </tr>
        <?php } ?>
      </table>
      
    </div>

</body>
</html>