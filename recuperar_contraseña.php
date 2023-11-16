<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Incluir el archivo de conexión
    include 'conexion.php';

    // Conectar a la base de datos
    $con = conectar();

    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $direccion = $_POST['direccion'];

    // Consultar la base de datos para verificar si el correo y la dirección están presentes
    $query = "SELECT contrasena FROM alumno WHERE email = '$email' AND direccion = '$direccion'";
    $result = mysqli_query($con, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);

        if ($row) {
            // Si el correo y la dirección están en la base de datos, redirigir a la página de restablecimiento
            header("Location: recuperar.php?reset=1&email=" . urlencode($email) . "&direccion=" . urlencode($direccion));
            exit();
        } else {
            // Si el correo o la dirección no están en la base de datos, redirigir con un mensaje de error
            header("Location: recuperar.php?error=1");
            exit();
        }
    } else {
        echo 'Error: ' . mysqli_error($con);
        exit();
    }
}

?>


