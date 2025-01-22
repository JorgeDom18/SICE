<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_alumno = $_POST['nombre_alumno'];
    $grado = $_POST['grado'];
    $materia = $_POST['materia'];
    $calificacion = $_POST['calificacion'];

    $sql = "INSERT INTO calificaciones (nombre_alumno, grado, materia, calificacion)
            VALUES ('$nombre_alumno', $grado, '$materia', $calificacion)";

    if ($conn->query($sql) === TRUE) {
        echo "Calificación registrada exitosamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>