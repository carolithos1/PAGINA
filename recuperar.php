<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="background-color:#2B3035">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Recuperar Contraseña</div>
                    <div class="card-body">
                    <?php
                        if (isset($_GET['error'])) {
                            echo '<div class="alert alert-danger" role="alert">Correo electrónico o dirección no encontrados.</div>';
                        } elseif (isset($_GET['contrasena'])) {
                            echo '<div class="alert alert-success" role="alert">';
                            echo 'Tu contraseña es: ' . htmlspecialchars($_GET['contrasena']);
                            echo '</div>';
                        } elseif (isset($_GET['reset'])) {
                            $email = $_GET['email'];
                            $direccion = $_GET['direccion'];
                            echo '<div class="alert alert-info" role="alert">';
                            echo 'Para restablecer tu contraseña, <a href="reset.php?email=' . urlencode($email) . '&direccion=' . urlencode($direccion) . '">haz clic aquí</a>.';
                            echo '</div>';
                        }
                        ?>
                        <form action="recuperar_contraseña.php" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo electrónico:</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="direccion" class="form-label">Dirección:</label>
                                <input type="text" class="form-control" name="direccion" required>
                            </div>
                            <button type="submit" class="btn btn-dark">Recuperar Contraseña</button>
                            <a type="button" href="index.php">Inicio</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
