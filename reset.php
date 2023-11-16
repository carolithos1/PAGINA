<?php
// Verificar si el formulario se envió por el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Incluir el archivo de conexión
    include 'conexion.php';

    // Conectar a la base de datos
    $con = conectar();

    // Obtener los datos del formulario
    $email = $_POST['email'];
    $direccion = $_POST['direccion'];
    $nueva_contrasena = $_POST['nueva_contrasena'];
    $confirmar_contrasena = $_POST['confirmar_contrasena'];

    // Validar que las contraseñas coincidan
    if ($nueva_contrasena !== $confirmar_contrasena) {
        echo 'Las contraseñas no coinciden.';
        exit();
    }

    // Actualizar la contraseña en la base de datos
    $query = "UPDATE alumno SET contrasena = '$nueva_contrasena' WHERE email = '$email' AND direccion = '$direccion'";
    $result = mysqli_query($con, $query);

    if ($result) {
        // Contraseña actualizada exitosamente
        echo '<script>alert("Contraseña actualizada exitosamente.");</script>';
        header("location: reset.php");
        error_log("Query: " . $query);
    } else {
        // Manejar errores en la actualización de la contraseña
        echo 'Error al actualizar la contraseña: ' . mysqli_error($con);
    }
    

    // Cerrar la conexión
    mysqli_close($con);
} else {
    // Si no se envió por POST, mostrar el formulario de recuperación
    ?>

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
                                }
                            ?>
                            <form action="reset.php" method="POST">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Correo electrónico:</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="direccion" class="form-label">Dirección:</label>
                                    <input type="text" class="form-control" name="direccion" required>
                                </div>
                                <div class="mb-3">
                                    <label for="nueva_contrasena" class="form-label">Nueva Contraseña:</label>
                                    <input type="password" class="form-control" name="nueva_contrasena" required>
                                </div>
                                <div class="mb-3">
                                    <label for="confirmar_contrasena" class="form-label">Confirmar Contraseña:</label>
                                    <input type="password" class="form-control" name="confirmar_contrasena" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Recuperar Contraseña</button>
                                <a type="button" href="index.php">Inicio</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    <?php
    if ($result) {
        // Contraseña actualizada exitosamente
        echo 'document.addEventListener("DOMContentLoaded", function() {';
        echo '    var alerta = document.createElement("div");';
        echo '    alerta.classList.add("alert", "alert-success", "alert-dismissible", "fade", "show");';
        echo '    alerta.innerHTML = "Contraseña actualizada exitosamente.";';
        echo '    var cerrarBtn = document.createElement("button");';
        echo '    cerrarBtn.classList.add("btn-close");';
        echo '    cerrarBtn.setAttribute("data-bs-dismiss", "alert");';
        echo '    alerta.appendChild(cerrarBtn);';
        echo '    document.body.appendChild(alerta);';
        echo '});';
    }
    ?>
</script>
    
    </body>
    </html>

    <?php
}

?>
