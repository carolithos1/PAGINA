<?php
include("conexion.php");
$con = conectar();

if (isset($_GET['id'])) {
    $cod_estudiante = $_GET['id'];

    // Consulta para obtener los datos del estudiante
    $sql = "SELECT * FROM alumno WHERE cod_estudiante = ?";
    $stmt = mysqli_prepare($con, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $cod_estudiante);
        if (mysqli_stmt_execute($stmt)) {
            $result = mysqli_stmt_get_result($stmt);
            $row = mysqli_fetch_assoc($result);
        }
        mysqli_stmt_close($stmt);
    }
}

mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Actualizar</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body style="background-color:#2B3035;color:white">
    <div class="container mt-5">
        <?php if (isset($_GET['success']) && $_GET['success'] === 'true') : ?>
            <div class="alert alert-success">La actualización se ha realizado con éxito.</div>
        <?php elseif (isset($_GET['success']) && $_GET['success'] === 'false') : ?>
            <div class="alert alert-danger">Error: La actualización ha fallado.</div>
        <?php endif; ?>

        <form action="update.php" method="POST">
            <input type="hidden" name="cod_estudiante" value="<?php echo $row['cod_estudiante'] ?? ''; ?>">
            <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre'] ?? ''; ?>">
            <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido" value="<?php echo $row['apellido'] ?? ''; ?>">
            <input type="text" class="form-control mb-3" name="usuario" placeholder="Usuario" value="<?php echo $row['usuario'] ?? ''; ?>">
            <input type="text" class="form-control mb-3" name="email" placeholder="Email" value="<?php echo $row['email'] ?? ''; ?>">
            <input type="text" class="form-control mb-3" name="contrasena" placeholder="Contrasena" value="<?php echo $row['contrasena'] ?? ''; ?>">
            <input type="text" class="form-control mb-3" name="fecha" placeholder="Fecha" value="<?php echo $row['fecha'] ?? ''; ?>">
            <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion" value="<?php echo $row['direccion'] ?? ''; ?>">
            <select class="form-control mb-3" name="sexo">
            <option value="Hombre" <?php if (isset($row['sexo']) && $row['sexo'] === 'Hombre') echo 'selected'; ?>>Hombre</option>
            <option value="Mujer" <?php if (isset($row['sexo']) && $row['sexo'] === 'Mujer') echo 'selected'; ?>>Mujer</option>
            <option value="Otro" <?php if (isset($row['sexo']) && $row['sexo'] === 'Otro') echo 'selected'; ?>>Otro</option>
        </select>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="alumno.php" class="btn btn-primary">Volver</a>
        </form>
    </div>
</body>
</html>
