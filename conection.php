<?php
// conexion.php
$host = "db";
$usuario = "root";
$contrasenia = "root";
$base_de_datos = "clinica"; // <--- CAMBIADO SEGÚN TU FOTO

$conn = new mysqli($host, $usuario, $contrasenia, $base_de_datos);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
// Importante para que la 'ñ' de 'contraseña' no de problemas
$conn->set_charset("utf8");
?>