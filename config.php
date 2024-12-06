<?php
// Configuración de la base de datos (ajusta con tus credenciales)
$host = 'localhost'; // O el host de tu base de datos
$dbname = 'login_system'; // El nombre de tu base de datos
$username = 'root'; // Tu usuario de base de datos
$password = ''; // Tu contraseña de base de datos

try {
    // Establecer la conexión con PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Establecer el modo de error de PDO a excepción
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Si hay un error en la conexión, muestra un mensaje
    die("Error de conexión: " . $e->getMessage());
}
?>
