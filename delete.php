<?php

include("conexion.php");
$con=conectar();

$cod_estudiante=$_GET['id'];

$sql="DELETE FROM alumno  WHERE cod_estudiante='$cod_estudiante'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
        echo" se a guardado exitosamente";

    }
    else {
        echo "Error en la consulta: " . mysqli_error($con);
    }
?>
