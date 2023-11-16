<?php
include("conexion.php");
$con = conectar();

if (isset($_POST['c'])) {
    $termino_busqueda = $_POST['c'];
    // Modifica la consulta para buscar en cualquier campo
    $sql = "SELECT * FROM alumno WHERE cod_estudiante LIKE '%$termino_busqueda%' OR nombre LIKE '%$termino_busqueda%' OR apellido LIKE '%$termino_busqueda%' OR sexo LIKE '%$termino_busqueda%'";
    $query = mysqli_query($con, $sql);
} else {
    $sql = "SELECT * FROM alumno";
    $query = mysqli_query($con, $sql);
}
?>
<table class="table mx-auto">
    
    <tbody style="color:white" id="search-results">
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
                <td><a href="actualizar.php?id=<?php echo $row['cod_estudiante'] ?>" class="btn btn-info">Editar</a></td>
                <td><a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal<?php echo $row['cod_estudiante']; ?>">Eliminar</a></td>
                <!-- Modal de Confirmación -->
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
