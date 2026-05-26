<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row justify-content-center align-items-center vh-100">
      <div class="col-xl-6 col-log-5 col-md-6 col-sm-9 col-2">
        <div class="card">
          <div class="card-header bg bg-primary">
            <p class="h4 text-white">Login</p>
          </div>
          <form action="../app/logica.php" method="post">
            <div class="card-body">

              <?php
              if (isset($_SESSION['error'])):
              ?>
                <div class="alert alert-danger">
                  <?php echo  $_SESSION['error'] ?>
                </div>
              <?php
                unset($_SESSION['error']);
              endif;
              ?>

              <div class="form-group">
                <label for="name" class="form-label">Username</label>
                <input type="text" name="name" id="name" class="form-control">
              </div>
              <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control">
              </div>
              <a href="../view/reset_password.php">Olvidaste la contraseña?</a>
              <a href="../view/registro.php">Registro</a>
            </div>

            <div class="card-footer">
              <button class="btn btn-primary" name="login">Entrar</button>
              <button type="reset" class="btn btn-danger">Cancelar</button>

            </div>

            <?php
            if (isset($_GET['message'])) {

            ?>
              <div class="alert alert-primary" role="alert">
                <?php
                switch ($_GET['message']) {
                  case 'ok':
                    echo 'Por favor, revisa tu correo';
                    break;

                  case 'success_password':
                    echo 'Inicia sesión con tu nueva contraseña';
                    break;
                    
                  default:
                    echo 'Algo salió mal, intenta de nuevo';
                    break;
                }
                ?>

              </div>
            <?php
            }
            ?>
          </form>
          <div>
            <p class="row mt-5 mb-3 text-muted justify-content-center align-items-center">&copy; 2026 Web</p>
          </div>

        </div>
      </div>
    </div>
  </div>
</body>

</html>