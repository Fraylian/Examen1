<?php
include 'db.php';

$matricula = $_POST['matricula'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$curso = $_POST['curso'];
$motivo = $_POST['motivo'];

$sql = "INSERT INTO tardanzas (matricula, nombre, apellido, curso, motivo) 
        VALUES ('$matricula', '$nombre', '$apellido', '$curso', '$motivo')";

if ($conn->query($sql) === TRUE) {
    echo "Nueva tardanza registrada correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: index.php");
exit();
?>
