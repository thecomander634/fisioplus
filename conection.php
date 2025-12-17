<?php
// conexion.php

// 1. CAMBIO CLAVE: En Docker, el host es el nombre del servicio en docker-compose
$host = "db"; 

// 2. El usuario root es correcto
$usuario = "root";

// 3. CAMBIO: En XAMPP estaba vacía, pero en tu Docker le pusimos "root"
$contrasenia = "root";

// 4. OJO AQUÍ:
// Tu docker-compose crea por defecto una base llamada "clinica".
// Si quieres usar "fisioplusdb", tienes que entrar a phpMyAdmin y crearla primero,
// o cambiar este nombre a "clinica".
$base_de_datos = "clinicadocker-compose down
docker-compose up -d --build"; 

$conn = new mysqli($host, $usuario, $contrasenia, $base_de_datos);

if ($conn->connect_error) {
    // Esto te ayudará a ver el error exacto si falla
    die("Error de conexión (" . $conn->connect_errno . "): " . $conn->connect_error);
}git add .

// Esto está perfecto para evitar problemas con las tildes/eñes
$conn->set_charset("utf8");
?>