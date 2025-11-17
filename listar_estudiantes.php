<?php
// Incluir el archivo de conexión
include "conexion.php"; 

// 1. Consulta SQL para seleccionar todos los estudiantes
$sql = "SELECT id, nombre, apellido, nota1, nota2, nota3 FROM estudiantes";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Estudiantes</title>
    <style>
        table { border-collapse: collapse; width: 80%; margin: 20px auto; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

    <h2>Listado de Estudiantes Registrados</h2>
    <a href="estudiantes.php">Regresar al Registro</a>

    <?php
    // 2. Verificar si hay resultados
    if ($resultado->num_rows > 0) {
        // 3. Imprimir la cabecera de la tabla
        echo "<table>";
        echo "<tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Nota 1</th><th>Nota 2</th><th>Nota 3</th></tr>";
        
        // 4. Recorrer los resultados e imprimir cada fila
        while($fila = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $fila["id"] . "</td>";
            echo "<td>" . $fila["nombre"] . "</td>";
            echo "<td>" . $fila["apellido"] . "</td>";
            echo "<td>" . $fila["nota1"] . "</td>";
            echo "<td>" . $fila["nota2"] . "</td>";
            echo "<td>" . $fila["nota3"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No hay estudiantes registrados aún.</p>";
    }
    
    // 5. Cerrar la conexión
    $conexion->close();
    ?>
    
</body>
</html>