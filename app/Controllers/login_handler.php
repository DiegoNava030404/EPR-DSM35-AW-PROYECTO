<!-- login_handler.php -->

<?php
// Verifica si los campos del formulario están presentes y no están vacíos
if (isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])) {
    // Supongamos que aquí hay una función o método para validar el inicio de sesión.
    // Por simplicidad, supongamos que el usuario y la contraseña son "admin".
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if ($username === 'admin' && $password === 'admin') {
        // Inicio de sesión exitoso, redirige al usuario a una página de bienvenida o a la página principal
        header("Location:https://localhost/EPR-DSM35-AW-PROYECTO/views/categoria/index.php");
        exit();
    } else {
        // Inicio de sesión fallido, redirige de nuevo al formulario de inicio de sesión con un mensaje de error
        header("Location:https://localhost/EPR-DSM35-AW-PROYECTO/views/auth/login.php");
        exit();
    }
} else {
    // Si los campos del formulario no están presentes o están vacíos, redirige al formulario de inicio de sesión con un mensaje de error
    header("Location:https://localhost/EPR-DSM35-AW-PROYECTO/views/auth/login.php");
    exit();
}
?>
