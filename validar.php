<?php
include "conexion.php";

$usuario = $_POST["usuario"];
$password = $_POST["password"];

$sql = "SELECT * FROM usuarios WHERE email = '$usuario' AND contrasena = '$password'";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    header("Location: estudiantes.php");
} else {
    echo "Usuario o contraseña incorrectos";
}
?>
