<?php
session_start();
require_once 'config.php';

if (!isset($_SESSION['user_id']) || $_SESSION['user_role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
    
    try {
        $stmt->execute([$user_id]);
        echo "Usuario eliminado correctamente. <a href='admin_panel.php'>Volver al panel de administrador</a>";
    } catch (PDOException $e) {
        echo "Error al eliminar el usuario: " . $e->getMessage();
    }
} else {
    echo "ID de usuario no proporcionado.";
}
?>