<?php
include("conexion.php");
$con = conectar();

if (isset($_POST['c'])) {
    $termino_busqueda = $_POST['c'];
    $sql = "SELECT * FROM alumno WHERE cod_estudiante LIKE '%$termino_busqueda%' OR nombre LIKE '%$termino_busqueda%' OR apellido LIKE '%$termino_busqueda%' OR sexo LIKE '%$termino_busqueda%'";
    $query = mysqli_query($con, $sql);
} else {
    $sql = "SELECT * FROM alumno";
    $query = mysqli_query($con, $sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PAGINA ALUMNO</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body >
    <div class="grid-container">
        <?php if (isset($_GET['success']) && $_GET['success'] === 'true') : ?>
            <div class="alert alert-success">La actualización se ha realizado con éxito.</div>
        <?php elseif (isset($_GET['success']) && $_GET['success'] === 'false') : ?>
            <div class="alert alert-danger">Error: La actualización ha fallado.</div>
        <?php endif; ?>
        <div class="row">
            <div class="col-md-3">
                <h1>Ingrese datos</h1>
                <form action="insertar.php" method="POST">
                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                    <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido">
                    <input type="text" class="form-control mb-3" name="usuario" placeholder="Usuario">
                    <input type="text" class="form-control mb-3" name="email" placeholder="Email">
                    <input type="text" class="form-control mb-3" name="contrasena" placeholder="Contraseña">
                    <input type="text" class="form-control mb-3" name="direccion" placeholder="direccion">
                    <input type="text" class="form-control mb-3" name="fecha" placeholder="fecha nacimiento">
                    <input type="text" class="form-control mb-3" name="sexo" placeholder="Sexo">
                    <input type="submit" class="btn btn-primary">
                </form>
            </div>

            <div class="col-md-8">
                <input type="text" class="form-control mb-3" id="buscar" placeholder="Buscar">
                <table class="table mx-auto">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>Codigo</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Usuario</th>
                            <th>Email</th>
                            <th>Contraseña</th>
                            <th>Dirección</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Sexo</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody style="color:white">
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                            ?>
                            <tr>
                                <td><?php echo $row['cod_estudiante'] ?></td>
                                <td><?php echo $row['nombre'] ?></td>
                                <td><?php echo $row['apellido'] ?></td>
                                <td><?php echo $row['usuario'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['contrasena'] ?></td>
                                <td><?php echo $row['direccion'] ?></td>
                                <td><?php echo $row['fecha'] ?></td>
                                <td><?php echo $row['sexo'] ?></td>
                                <td><button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $row['cod_estudiante']; ?>">Editar</button></td>
                                    <div class="modal fade" id="editModal<?php echo $row['cod_estudiante']; ?>" tabindex="-1" aria-labelledby="editModalLabel<?php echo $row['cod_estudiante']; ?>" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5  class="modal-title" id="editModalLabel<?php echo $row['cod_estudiante']; ?>">Editar:</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div style="color:black"class="modal-body">
                                                    <form action="update.php" method="POST">
                                                        <input type="hidden" name="cod_estudiante" value="<?php echo $row['cod_estudiante'] ?? ''; ?>">
                                                        <label>Nombre</label>
                                                        <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre'] ?? ''; ?>">
                                                        <label>Apellido</label>
                                                        <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido" value="<?php echo $row['apellido'] ?? ''; ?>">
                                                        <label>Usuario</label>
                                                        <input type="text" class="form-control mb-3" name="usuario" placeholder="Usuario" value="<?php echo $row['usuario'] ?? ''; ?>">
                                                        <label>Email</label>
                                                        <input type="text" class="form-control mb-3" name="email" placeholder="Email" value="<?php echo $row['email'] ?? ''; ?>">
                                                        <label>Contraseña</label>
                                                        <input type="text" class="form-control mb-3" name="contrasena" placeholder="Contrasena" value="<?php echo $row['contrasena'] ?? ''; ?>">
                                                        <label>Fecha de nacimiento</label>
                                                        <input type="text" class="form-control mb-3" name="fecha" placeholder="Fecha" value="<?php echo $row['fecha'] ?? ''; ?>">
                                                        <label>Direccion</label>
                                                        <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion" value="<?php echo $row['direccion'] ?? ''; ?>">
                                                        <label>Sexo</label>
                                                        <select class="form-control mb-3" name="sexo">
                                                        <option value="Hombre" <?php if (isset($row['sexo']) && $row['sexo'] === 'Hombre') echo 'selected'; ?>>Hombre</option>
                                                        <option value="Mujer" <?php if (isset($row['sexo']) && $row['sexo'] === 'Mujer') echo 'selected'; ?>>Mujer</option>
                                                        <option value="Otro" <?php if (isset($row['sexo']) && $row['sexo'] === 'Otro') echo 'selected'; ?>>Otro</option>
                                                        </select>
                                                        <button type="submit" class="btn btn-primary">Actualizar</button>
                                                        <a href="alumno.php" class="btn btn-primary">Volver</a>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <td><a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal<?php echo $row['cod_estudiante']; ?>">Eliminar</a></td>
                                <div class="modal fade" id="confirmDeleteModal<?php echo $row['cod_estudiante']; ?>" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmar Eliminación</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>¿Seguro que desea eliminar este estudiante de forma permanente?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                <a href="delete.php?id=<?php echo $row['cod_estudiante']; ?>" class="btn btn-danger">Eliminar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {
    $('#buscar').on('input', function () {
        var query = $(this).val();

        if (query !== '') {
            $.ajax({
                type: "POST",
                url: "buscar.php",
                data: { c: query },
                success: function (data) {
                    $('tbody').html(data);
                }
            });
        } else {
            $.ajax({
                type: "POST",
                url: "buscar.php",
                data: { c: '' },
                success: function (data) {
                    $('tbody').html(data);
                }
            });
        }
    });
});
</script>
</html>
