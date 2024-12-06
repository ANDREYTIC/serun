<?php
session_start();
require_once 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $username = $_POST['username'];
    $edad = $_POST['edad'];

    if ($edad < 18) {
        echo "Debes ser mayor de 18 años.";
        exit();
    }

    $stmt = $pdo->prepare("UPDATE users SET email = ?, nombres = ?, apellidos = ?, username = ?, edad = ? WHERE id = ?");
    
    try {
        $stmt->execute([$email, $nombres, $apellidos, $username, $edad, $_SESSION['user_id']]);
        echo "Datos actualizados correctamente. <a href='user_panel.php'>Volver al panel</a>";
    } catch (PDOException $e) {
        if ($e->getCode() == 23000) {
            echo "El email o nombre de usuario ya está en uso.";
        } else {
            echo "Error en la actualización: " . $e->getMessage();
        }
    }
}
?>