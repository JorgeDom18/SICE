<?php
$host = "localhost"; // Cambiar si usas un servidor remoto
$user = "tu_usuario"; // Cambia por tu usuario de base de datos
$password = "tu_contraseña"; // Cambia por tu contraseña
$dbname = "nombre_base_datos"; // Cambia por el nombre de tu base de datos

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>