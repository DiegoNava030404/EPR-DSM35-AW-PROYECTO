<?php
require __DIR__ . '/../../../database/conexion.php';
// Verificar si se recibieron datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $username = $_POST['username'];
    $password = $_POST['password'];

$resultado = mysqli_query($enlace, $query);
    // Validación de ejemplo (¡No seguro! Implementa tu lógica segura)
    if ($username === 'usuario' && $password === 'contraseña') {
        // Autenticación exitosa
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: https://localhost/EPR-DSM35-AW-PROYECTO/index.php");
        exit;
    } else {
        // Autenticación fallida
        $error = "Usuario o contraseña incorrectos.";
    }
}
?>
