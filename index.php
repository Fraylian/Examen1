<?php
include 'db.php';

$sql = "SELECT * FROM tardanzas ORDER BY fecha_hora DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Tardanzas</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5">Registro de Tardanzas</h1>
        <a href="registrar.html" class="btn btn-primary mb-3">Registrar Nueva Tardanza</a>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Matrícula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Curso</th>
                    <th>Motivo</th>
                    <th>Fecha y Hora</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['matricula']}</td>
                                <td>{$row['nombre']}</td>
                                <td>{$row['apellido']}</td>
                                <td>{$row['curso']}</td>
                                <td>{$row['motivo']}</td>
                                <td>{$row['fecha_hora']}</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No hay registros</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php
$conn->close();
?>
