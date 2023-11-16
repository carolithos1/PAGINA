<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("conexion.php");
$con = conectar();

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];
$direccion = $_POST['direccion'];
$fecha = $_POST['fecha'];
$sexo = $_POST['sexo'];

if (empty($nombre) || empty($apellido) || empty($usuario) || empty($email) || empty($contrasena) || empty($direccion) || empty($fecha) || empty($sexo)) {
    echo "Error: Todos los campos son obligatorios.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Error: El formato de correo electrónico no es válido.";
} elseif (strlen($contrasena) < 8) {
    echo "Error: La contraseña debe tener al menos 8 caracteres.";
} else {

    $sql = "INSERT INTO alumno (nombre, apellido, usuario, email, contrasena, direccion, fecha, sexo)
            VALUES ('$nombre', '$apellido', '$usuario', '$email', '$contrasena', '$direccion', '$fecha', '$sexo')";

    $query = mysqli_query($con, $sql);

    if ($query) {
        header("Location: alumno.php");
        echo "Se ha guardado exitosamente.";
    } else {
        echo "Error en la consulta: " . mysqli_error($con);
    }
}

mysqli_close($con);
?>
