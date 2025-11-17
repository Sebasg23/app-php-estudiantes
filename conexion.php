<?php
$conexion = new mysqli("localhost", "root", "", "bd_estudiantes");

if ($conexion->connect_errno) {
    echo "Error al conectar " . $conexion->connect_error;
}
?>
