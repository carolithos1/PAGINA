<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Footer Design</title>
  <link rel="stylesheet" href="estilos.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <div class="grid-container">
  <header>
      <div class="logo">
        <img src="imagenes/footer.png"alt="Logo de Diablo 3">
      </div>
      <nav class="navbar navbar-expand-lg bg-body-tertiary"data-bs-theme="dark">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="#">Navbar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="nosotros.html">Team</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Tier list
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Solo Pushing</a></li>
                  <li><a class="dropdown-item" href="#">Key Farming</a></li>
                  <li><a class="dropdown-item" href="#">Bounty Farming</a></li>
                </ul>
              </li>
              <li class="nav-item">
              <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
    <!-- Mostrar el nombre de usuario y el menú desplegable -->
    <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="userDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $_SESSION['username']; ?>
        </a>
        <ul class="dropdown-menu" aria-labelledby="userDropdown">
            <li><a class="dropdown-item" href="#">Opción 1</a></li>
            <li><a class="dropdown-item" href="#">Opción 2</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="logout.php">Cerrar sesión</a></li>
        </ul>
    </div>
<?php else: ?>
    <!-- Botón de inicio de sesión que abre el modal -->
    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#loginModal">
        Iniciar sesión
    </button>

    <!-- Modal de inicio de sesión -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Iniciar sesión</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulario de inicio de sesión -->
                    <form action="login.php" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo:</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="contrasena" class="form-label">Contraseña:</label>
                            <input type="password" class="form-control" name="contrasena" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                    </form>

                    <!-- Enlace de registro y recuperación de contraseña -->
                    <p class="mt-3">¿No tienes una cuenta? <a href="ingresar.php">Regístrate aquí</a></p>
                    <p><a href="recuperar.php">¿Olvidaste tu contraseña?</a></p>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

              </li>
            </ul>
          </div>
        </div>
      </nav>

    </header>
    <article>
      <form  onsubmit="return validateForm()">
        <div class="col-md-6">
          <label for="nombre" class="form-label">Nombres</label>
          <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="col-md-6">
          <label for="apellido" class="form-label">Apellidos</label>
          <input type="text" class="form-control" id="apellido" name="apellido" required>
        </div>
        <div class="col-md-6">
          <label for="usuario" class="form-label">Usuario</label>
          <input type="text" class="form-control" id="usuario" name="usuario" required>
        </div>
        <div class="col-md-6">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="col-md-6">
          <label for="contrasena" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="contrasena" name="contrasena" required>
        </div>
        <div class="col-md-6">
          <label for="direccion" class="form-label">Dirección</label>
          <input type="text" class="form-control" id="direccion" name="direccion" required>
        </div>
        <div class="col-md-6">
          <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
          <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento">
        </div>
        <div class="col-md-6">
          <label for="sexo" class="form-label">Sexo</label>
          <select id="sexo" class="form-select" name="sexo">
            <option selected>Seleccione...</option>
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
            <option value="otro">Otro</option>
          </select>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-dark">Enviar</button>
        </div>
      </form>
    </article>
    <footer class="footer">
      <div class="container-footer">
        <div class="fila">
          <div class="footer-col">
            <h4>company</h4>
            <ul>
              <li><a href="#">about us</a></li>
              <li><a href="#">our services</a></li>
              <li><a href="#">privacy policy</a></li>
              <li><a href="#">affiliate program</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>get help</h4>
            <ul>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">shipping</a></li>
              <li><a href="#">returns</a></li>
              <li><a href="#">order status</a></li>
              <li><a href="#">payment options</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>online shop</h4>
            <ul>
              <li><a href="#">diablo 1</a></li>
              <li><a href="#">diablo 2</a></li>
              <li><a href="#">diablo 3</a></li>
              <li><a href="#">diablo 4</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>follow us</h4>
            <div class="social-links">
              <a href="#"><i class="fab fa-facebook"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-tumblr"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <div class="copyright">
      <p>&copy; 2023 Diablo 3. Todos los derechos reservados.</p>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
  function showConfirmation() {
    alert("¡Formulario enviado con éxito!");
    return true;
  }
</script>
<script>
  function validateForm() {
    // Validación del formulario
    var nombre = document.getElementById("nombre").value;
    var apellido = document.getElementById("apellido").value;
    var usuario = document.getElementById("usuario").value;
    var email = document.getElementById("email").value;
    var contrasena = document.getElementById("contrasena").value;
    var direccion = document.getElementById("direccion").value;
    var fechaNacimiento = document.getElementById("fechaNacimiento").value;
    var sexo = document.getElementById("sexo").value;

    // Validaciones individuales
    if (!nombre || !apellido || !usuario || !email || !contrasena || !direccion || !fechaNacimiento || sexo === "Seleccione...") {
      alert("Por favor, complete todos los campos obligatorios.");
      return false;
    }

    // Validación de la contraseña
    if (contrasena.length < 8) {
      alert("La contraseña debe tener al menos 8 caracteres.");
      return false;
    }

    // Puedes agregar más validaciones según sea necesario

    // Si todas las validaciones pasan, retorna true
    return true;
  }
</script>
</html>
