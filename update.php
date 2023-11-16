<?php
include("conexion.php");
$con = conectar();
$cod_estudiante = $_POST['cod_estudiante'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];
$direccion = $_POST['direccion'];
$fecha = $_POST['fecha'];
$sexo = $_POST['sexo'];

// Usar consultas preparadas para evitar la inyección SQL
$sql = "UPDATE alumno SET nombre=?, apellido=?, usuario=?, email=?, contrasena=?, direccion=?, fecha=?, sexo=? WHERE cod_estudiante=?";
$stmt = mysqli_prepare($con, $sql);

if ($stmt) {
    // Vincular parámetros
    mysqli_stmt_bind_param($stmt, "ssssssssi", $nombre, $apellido, $usuario, $email, $contrasena, $direccion, $fecha, $sexo, $cod_estudiante);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: actualizar.php?id=" . $cod_estudiante . "&success=true");
    } else {
        header("Location: actualizar.php?id=" . $cod_estudiante . "&success=false");
    }

    mysqli_stmt_close($stmt);
} else {
    // Error en la preparación de la consulta
    header("Location: actualizar.php?id=" . $cod_estudiante . "&success=false");
}

mysqli_close($con);
?>
