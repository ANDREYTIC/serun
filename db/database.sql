-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS login_system;
USE login_system;

-- Crear la tabla de usuarios
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    nombres VARCHAR(100) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE,
    edad INT NOT NULL,
    password VARCHAR(255) NOT NULL,
    nivel ENUM('user', 'admin') NOT NULL DEFAULT 'user',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE datos_usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) UNIQUE NOT NULL,
    nombres VARCHAR(255) NOT NULL,
    apellidos VARCHAR(255) NOT NULL,
    username VARCHAR(255) UNIQUE NOT NULL,
    edad INT NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('user', 'admin') DEFAULT 'user'
);

-- Insertar un usuario administrador de ejemplo
UPDATE where datos_usuario (email, nombres, apellidos, username, edad, password, nivel)
VALUES ('admin@example.com', 'Admin', 'User', 'admin', 20, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin');

-- La contraseña del admin es 'password'. Asegúrate de cambiarla en un entorno de producción.