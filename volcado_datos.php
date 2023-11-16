<?php
include("conexion.php");
$con = conectar();

for ($i = 1; $i <= 100; $i++) {
    $nombre = generateRandomName(); 
    $apellido = generateRandomName();
    $usuario = generateRandomName();
    $email = generateRandomEmail();
    $contrasena = generateRandomDni(); 
    $direccion = generateRandomAddress(); 
    $fecha = generateRandomDate(); 
    $sexo = generateRandomSex(); 

    $sql="INSERT INTO alumno VALUES('$cod_estudiante','$nombre','$apellido','$usuario','$email','$contrasena','$direccion','$fecha','$sexo')";


    mysqli_query($con, $sql);
}

echo "Se han insertado 100 registros en la tabla alumno.";


function generateRandomDni() {
   
    return "1234567" . rand(100, 999);
}

function generateRandomName() {
    $names = ["Juan", "María", "Pedro", "Luisa", "Carlos", "Ana", "José", "Elena", "Luis", "Laura"];
    return $names[array_rand($names)];
}
function generateRandomEmail()
{
    $email = ["Juan@gmail.com", "María@gmail.com", "Pedro@gmail.com", "Luisa@gmail.com", "Carlos@gmail.com", "Ana@gmail.com", "José@gmail.com", "Elena@gmail.com", "Luis@gmail.com", "Laura@gmail.com"];
    return $email[array_rand($email)];
}
function generateRandomSex() {
    $sexes = ["M", "F"];
    return $sexes[array_rand($sexes)];
}

function generateRandomDate() {
    
    $year = rand(1980, 2005);
    $month = str_pad(rand(1, 12), 2, '0', STR_PAD_LEFT);
    $day = str_pad(rand(1, 28), 2, '0', STR_PAD_LEFT);
    return "$year-$month-$day";
}

function generateRandomAddress() {
   
    $streets = ["Calle A", "Avenida B", "Carrera C", "Calle D", "Avenida E"];
    return $streets[array_rand($streets)] . ", #" . rand(1, 100);
}
?>
