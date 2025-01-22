<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre_alumno'];
    $apellido_paterno = $_POST['apellido_paterno'];
    $apellido_materno = $_POST['apellido_materno'];
    $grupo = $_POST['grupo'];
    $grado = $_POST['grado'];
    $nombre_padre = $_POST['nombre_padre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $sexo = $_POST['sexo'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];

    $sql = "INSERT INTO alumnos (nombre_alumno, grupo, grado, nombre_padre, correo, telefono, sexo, fecha, apellido_paterno, apellido_materno)
            VALUES ('$nombre', '$grupo', $grado, '$nombre_padre', '$correo', '$telefono', '$sexo', '$fecha_nacimiento', '$apellido_paterno', '$apellido_materno')";

    if ($conn->query($sql) === TRUE) {
        echo "Alumno registrado exitosamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>