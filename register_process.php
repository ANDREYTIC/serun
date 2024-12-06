<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $username = $_POST['username'];
    $edad = $_POST['edad'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    if ($edad < 18) {
        echo "Debes ser mayor de 18 años para registrarte.";
        exit();
    }

    $stmt = $pdo->prepare("INSERT INTO datos_usuario (email, nombres, apellidos, username, edad, password, role) VALUES (?, ?, ?, ?, ?, ?, 'user')");
    
    try {
        $stmt->execute([$email, $nombres, $apellidos, $username, $edad, $password]);
        echo "Registro exitoso. <a href='login.php'>Inicia sesión aquí</a>";
    } catch (PDOException $e) {
        if ($e->getCode() == 23000) {
            echo "El email o nombre de usuario ya está en uso.";
        } else {
            echo "Error en el registro: " . $e->getMessage();
        }
    }
}
?>