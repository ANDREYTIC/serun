<?php
session_start();
require_once 'config.php';

if (!isset($_SESSION['user_id']) || $_SESSION['user_role'] !== 'user') {
    header("Location: login.php");
    exit();
}

$stmt = $pdo->prepare("SELECT * FROM datos_usuario WHERE id = ?");
$stmt->execute([$_SESSION['user_id']]);
$user = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Usuario</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-6">Panel de Usuario</h1>
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold mb-4">Tus datos:</h2>
            <form action="update_user.php" method="POST" class="space-y-4">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>
                <div>
                    <label for="nombres" class="block text-sm font-medium text-gray-700">Nombres</label>
                    <input type="text" id="nombres" name="nombres" value="<?php echo htmlspecialchars($user['nombres']); ?>" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>
                <div>
                    <label for="apellidos" class="block text-sm font-medium text-gray-700">Apellidos</label>
                    <input type="text" id="apellidos" name="apellidos" value="<?php echo htmlspecialchars($user['apellidos']); ?>" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700">Nombre de usuario</label>
                    <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($user['username']); ?>" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>
                <div>
                    <label for="edad" class="block text-sm font-medium text-gray-700">Edad</label>
                    <input type="number" id="edad" name="edad" value="<?php echo htmlspecialchars($user['edad']); ?>" required min="18" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>
                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                    Actualizar datos
                </button>
            </form>
        </div>
        <a href="logout.php" class="mt-4 inline-block bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Cerrar sesión</a>
    </div>
</body>
</html>