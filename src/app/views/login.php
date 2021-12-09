<!DOCTYPE html>
<html>
<head>
    <?php require "app/views/admin/parts/head.php" ?>
</head>
<main role="main" class="container">
    <div class="starter-template">
      <h1>Inicio de sesión</h1>
      <form action="/login/login" method="post" class="mb-4">
        <div class="form-group">
            <label for="formGroupExampleInput">Email</label>
            <input type="email" class="form-control" id="formGroupExampleInput" placeholder="ejemplo@gmail.com" name="email">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Contraseña</label>
            <input type="password" class="form-control" id="formGroupExampleInput" placeholder="******" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
    </form>
    </div>
    <div>
    <p><?php echo isset($_SESSION['message']) ? $_SESSION['message'] : ''; ?></p>
    </div>
    </div>
  </main>
  <?php require "app/views/admin/parts/footer.php" ?>
</body>
<?php require "app/views/admin/parts/scripts.php" ?>