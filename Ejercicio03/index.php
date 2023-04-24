<?php
session_start();
if (isset($_SESSION['usuario'])) {
  header("Location: inicioSesion.php");
}

include('conexion.inc.php');

// Si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $usuario = $_POST['usuario'];
  $password = $_POST['password'];

  // Consulta a la base de datos
  $sql = "SELECT * FROM usuario WHERE usuario='$usuario' AND password='$password'";
  $result = $conn->query($sql);

  // Comprobar si se encontró un usuario con los datos ingresados
  if ($result->num_rows == 1) {
    // Iniciar sesión
    $_SESSION['usuario'] = $usuario;
    header("Location: inicioSesion.php"); // redirigir a la página de inicio
  } else {
    $error = "Usuario o contraseña incorrectos";
  }
}
?>

<!DOCTYPE html>
<html lang="es">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<html>

<head>
  <title>Iniciar sesión</title>
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body>

  <section class="hero">
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h4>Iniciar sesión</h4>
            </div>
            <form class="card-body" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
              <div class="form-group">
                <label>Usuario:</label>
                <input class="form-control" type="text" name="usuario" placeholder="Introduce tu Usuario" required><br><br>
              </div>
              <div class="form-group">
                <label>Contraseña:</label>
                <input class="form-control" type="password" name="password" placeholder="Introduce tu Usuario" required><br><br>
              </div>
              <button type="submit" value="Iniciar sesión" class="btn btn-primary">Iniciar sesion </button>
            </form>
            <?php if (isset($error)) { ?>
              <p><?php echo $error; ?></p>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="/Ejercicio03/assets/js/main.js"></script>

</html>