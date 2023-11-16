<?php
include("conexion.php");
$con = conectar();

// Iniciar la sesión
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $email = $_POST["email"];
    $contrasena = $_POST["contrasena"];

    // Consulta SQL para verificar las credenciales
    $query = "SELECT * FROM alumno WHERE email = '$email' AND contrasena = '$contrasena'";
    $result = mysqli_query($con, $query);

    // Verificar si se encontró un alumno con esas credenciales
    if (mysqli_num_rows($result) == 1) {

        $row = mysqli_fetch_assoc($result);
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        $_SESSION['username'] = $row['nombre'];
        header("Location: home.php");
        exit();
    } else {

        echo "Credenciales incorrectas. Inténtalo de nuevo.";
    }
}

// Cerrar la conexión a la base de datos
mysqli_close($con);
?>
