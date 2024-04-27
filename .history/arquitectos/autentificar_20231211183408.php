<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Credenciales de acceso
    $usuarioCorrecto = "gabriel";
    $contrasenaCorrecta = "estrella"; // Recuerda usar una contraseña segura en producción

    // Obtener datos del formulario
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Verificar las credenciales
    if ($usuario === $usuarioCorrecto && $contrasena === $contrasenaCorrecta) {
        // Inicio de sesión correcto, redireccionar al panel administrativo
        header("Location: login.php");
        exit();
    } else {
        // Si las credenciales son incorrectas, muestra un mensaje de error
        echo "<p>Usuario o contraseña incorrectos. Por favor, inténtalo de nuevo.</p>";
    }
}
?>

?>
