<?php
$host = 'localhost';
$db   = 'login_system';
$user = 'root';
$pass = '';

// Usar mysqli en modo orientado a objetos
$connect = new mysqli($host, $user, $pass, $db);

// Verificar si la conexión fue exitosa
if ($connect->connect_error) {
    // Mostrar el error de conexión
    die("Conexión fallida: " . $connect->connect_error);
} else {
    // Si la conexión es exitosa
    echo "Conexión exitosa";
}

// Cerrar la conexión al finalizar
$connect->close();
?>
