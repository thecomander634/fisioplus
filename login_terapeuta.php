<?php
// IMPORTANTE: Que no haya NINGÚN espacio ni línea en blanco antes de <?php
session_start();
// 1. Aquí llamamos a tu archivo con el nombre correcto
require 'conection.php'; 

// Verificamos si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Recogemos los datos del formulario
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    // 2. Consulta adaptada a tu base de datos (fisioplusdb -> fisioterapeutas)
    $sql = "SELECT nombre, contraseña FROM fisioterapeutas WHERE correo = '$email'";
    $resultado = $conn->query($sql);

    if ($resultado && $resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();
        
        // 3. Verificamos la contraseña (texto plano '123')
        if ($password === $usuario['contraseña']) {
            
            // --- LOGIN CORRECTO ---
            $_SESSION['terapeuta_nombre'] = $usuario['nombre'];
            // 4. LA REDIRECCIÓN AL DASHBOARD
            // Esto le dice al navegador: "Vete ya a dashboard.php"
            header("Location: dashboard.php");
            exit; // Detiene el script aquí mismo para que no cargue nada más

        } else {
            // Contraseña incorrecta -> Vuelta al index con alerta
            echo "<script>alert('Contraseña incorrecta'); window.location.href='index.php';</script>";
        }
    } else {
        // Usuario no existe -> Vuelta al index con alerta
        echo "<script>alert('Usuario no encontrado'); window.location.href='index.php';</script>";
    }
} else {
    // Si entran directo sin formulario -> Vuelta al index
    header("Location: index.php");
    exit;
}
?>