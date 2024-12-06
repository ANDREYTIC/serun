<?php
session_start();
require_once 'config.php'; // Asegúrate de que este archivo se incluya correctamente

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitización y validación de entradas
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    // Verifica que las entradas no estén vacías
    if (empty($email) || empty($password)) {
        $_SESSION['error'] = "Por favor, ingresa todos los campos.";
        header("Location: login.php");
        exit();
    }

    // Validación de email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Por favor, ingresa un email válido.";
        header("Location: login.php");
        exit();
    }

    // Depuración: Verifica las variables
    error_log("Email ingresado: " . $email);

    // Preparamos la consulta para evitar inyecciones SQL
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    // Depuración: Verifica si se encontró al usuario
    if ($user) {
        error_log("Usuario encontrado: " . $user['email']);
        // Verificamos la contraseña
        if (password_verify($password, $user['password'])) {
            // Guardar en la sesión
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_role'] = $user['role'];
            $_SESSION['user_name'] = $user['name']; // Guardar el nombre del usuario

            // Redirigir según el rol del usuario
            if ($user['role'] == 'admin') {
                header("Location: admin_panel.php");
                exit();
            } else {
                header("Location: user_panel.php");
                exit();
            }
        } else {
            // Contraseña incorrecta
            $_SESSION['error'] = "Contraseña incorrecta. Intenta nuevamente.";
            header("Location: login.php");
            exit();
        }
    } else {
        // Usuario no encontrado
        $_SESSION['error'] = "Usuario no encontrado. Por favor, verifica tu email.";
        header("Location: login.php");
        exit();
    }
}
?>