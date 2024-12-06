<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--  nombre de la página -->
    <title>Iniciar Sesión | AnD_C</title>

    <!-- icono del sitio-->
    <link rel="icon" type="image/png" href="/img/logo.png" sizes="32x32">
    
    <title></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="[background:radial-gradient(125%_125%_at_50%_10%,#000_40%,#63e_100%)] h-screen flex items-center justify-center">
    <div class="p-8 rounded-lg shadow-md w-96 flex flex-col w-full md:w-1/2 xl:w-2/5 2xl:w-2/5 3xl:w-1/3 mx-auto p-8 md:p-10 2xl:p-12 3xl:p-14 rounded-2xl shadow-xl border-2 border-white">
        <div class="flex flex-col justify-center mx-auto items-center gap-3 pb-4">
            <div class="flex flex-col items-center pb-4 mx-auto">
                <a href="index.html" class="flex flex-col items-center space-y-2">
                    <img src="/img/logo.png" alt="Logo" width="100" height="100" class="items-center">
                    <h1 class="text-2xl font-bold text-white">AnD_C { Dev.login }</h1>
                </a>
            </div>
            <h1 class="text-5xl font-bold text-white my-auto">Inicia Sesión</h1>
        </div>
        <div class="text-sm font-light text-white text-center pb-8 mx-auto">Ingrese sus credenciales</div>

        <!-- Mensaje de error o éxito -->
        <?php if (isset($_SESSION['error'])): ?>
            <div class="bg-red-500 text-white p-2 rounded-md text-center mb-4">
                <?php echo htmlspecialchars($_SESSION['error']); ?>
                <?php unset($_SESSION['error']); ?>
            </div>
        <?php elseif (isset($_SESSION['message'])): ?>
            <div class="bg-green-500 text-white p-2 rounded-md text-center mb-4">
                <?php echo htmlspecialchars($_SESSION['message']); ?>
                <?php unset($_SESSION['message']); ?>
            </div>
        <?php endif; ?>

        <form action="login_process.php" method="POST" class="space-y-4">
            
            <!-- Campo de Email -->
            <div class="pb-2">
                <label for="email" class="block mb-2 text-base font-medium text-[#87CEFA]">Email</label>
                <div class="relative text-gray-400">
                    <span class="absolute inset-y-0 left-0 flex items-center p-1 pl-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail">
                            <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                        </svg>
                    </span>
                    <input type="email" name="email" id="email" class="pl-12 mb-2 bg-gray-50 text-gray-600 border focus:border-transparent border-gray-300 sm:text-sm rounded-lg ring ring-transparent focus:ring-1 focus:outline-none focus:ring-gray-400 block w-full p-2.5 rounded-l-lg py-3 px-4" placeholder="name@company.com" autocomplete="off" required>
                </div>
            </div>

            <!-- Campo de Contraseña -->
            <div class="pb-6">
                <label for="password" class="block mb-2 text-base font-medium text-[#87CEFA]">Contraseña</label>
                <div class="relative text-gray-400">
                    <span class="absolute inset-y-0 left-0 flex items-center p-1 pl-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-square-asterisk">
                            <rect width="18" height="18" x="3" y="3" rx="2"></rect>
                            <path d="M12 8v8"></path>
                            <path d="m8.5 14 7-4"></path>
                            <path d="m8.5 10 7 4"></path>
                        </svg>
                    </span>
                    <input type="password" name="password" id="password" placeholder="••••••••••" class="pl-12 mb-2 bg-gray-50 text-gray-600 border focus:border-transparent border-gray-300 sm:text-sm rounded-lg ring ring-transparent focus:ring-1 focus:outline-none focus:ring-gray-400 block w-full p-2.5 rounded-l-lg py-3 px-4" autocomplete="new-password" required>
                </div>
            </div>

            <!-- Botón de Envío -->
            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                Iniciar Sesión
            </button>
        </form>

        <div class="mt-4 text-center">
            <a href="register.php" class="text-blue-500 hover:text-blue-600">¿No tienes cuenta? Regístrate aquí</a>
        </div>
    </div>
</body>
</html>