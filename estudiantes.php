<!DOCTYPE html>
<html>
<body>

<h2>Registro de Estudiantes</h2>

<form action="guardar.php" method="POST">
    Nombre: <input type="text" name="nombre"><br><br>
    Apellido: <input type="text" name="apellido"><br><br>
    Nota 1: <input type="number" step="0.01" name="nota1"><br><br>
    Nota 2: <input type="number" step="0.01" name="nota2"><br><br>
    Nota 3: <input type="number" step="0.01" name="nota3"><br><br>

    <button type="submit">Guardar</button>
</form>

</body>
</html>
