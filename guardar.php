<?php
include "conexion.php";

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];

$sql = "INSERT INTO estudiantes (nombre, apellido, nota1, nota2, nota3)
VALUES ('$nombre', '$apellido', '$nota1', '$nota2', '$nota3')";

if ($conexion->query($sql)) {
    echo "Estudiante guardado correctamente";
} else {
    echo "Error: " . $conexion->error;
}
?>
