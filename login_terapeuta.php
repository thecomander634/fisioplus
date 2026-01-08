<?php
// IMPORTANTE: Que no haya NINGÚN espacio ni línea en blanco antes de <?php
session_start();
require 'conection.php'; 

// Verificamos si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Recogemos los datos del formulario
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    // 2. Consulta adaptada
    // IMPORTANTE: Aquí pedimos 'password' (en inglés), no 'contraseña'
    $sql = "SELECT nombre, password FROM fisioterapeutas WHERE email = '$email'";
    $resultado = $conn->query($sql);

    if ($resultado && $resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();
        
        // --- CORRECCIÓN CRÍTICA AQUÍ ---
        // Antes tenías $usuario['contraseña']. Eso da error porque en el SELECT pedimos 'password'.
        if ($password === $usuario['password']) {
            
            // --- LOGIN CORRECTO ---
            $_SESSION['terapeuta_nombre'] = $usuario['nombre'];
            header("Location: dashboard.php");
            exit; 

        } else {
            // Contraseña incorrecta
            echo "<script>alert('Contraseña incorrecta. Has escrito: $password y en la BD está: " . $usuario['password'] . "'); window.location.href='index.php';</script>";
        }
    } else {
        // --- ERROR DE USUARIO NO ENCONTRADO ---
        // He añadido que te muestre qué email está buscando para que veas si llega bien
        echo "<script>alert('Usuario no encontrado. Buscaste el email: $email'); window.location.href='index.php';</script>";
    }
} else {
    header("Location: index.php");
    exit;
}
?>