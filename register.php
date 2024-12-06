<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--  nombre de la página -->
    <title>Reguistro | AnD_C</title>

        <!-- icono del sitio-->
    <link rel="icon" type="image/png" href="/img/logo.png" sizes="32x32">

    <!-- estilos css-->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="[background:radial-gradient(125%_125%_at_50%_10%,#000_40%,#63e_100%)] h-screen flex items-center justify-center ">
    <div class="p-8 rounded-25 shadow-md w-96 flex flex-col w-full md:w-1/2 xl:w-2/5 2xl:w-2/5 3xl:w-1/3 mx-auto p-8 md:p-10 2xl:p-12 3xl:p-14 bg-[# E0FFFF] rounded-2xl shadow-xl border-2 border-white">
    <div class="flex flex-col justify-center mx-auto items-center gap-3 pb-4">
        
            <div>
                <img src="/img/logo.png" alt="Logo" width="100">
            </div>
            <!--  -->
             <h1 class="text-5xl font-bold text-white my-auto">Nuevo Usuario</h1>
        </div>
        <!-- Formulario de registro -->
        <form action="register_process.php" method="POST" class="space-y-4">

            <!-- Campo de texto para el email -->
            <div class="pb-2">
                <label for="email" class="block mb-2 text-base font-medium text-[#87CEFA]">Email</label>
                <input type="email" id="email" name="email" required class="pl-12 mb-2 bg-gray-50 text-gray-600 border focus:border-transparent border-gray-300 sm:text-sm rounded-lg ring ring-transparent focus:ring-1 focus:outline-none focus:ring-gray-400 block w-full p-2.5 rounded-l-lg py-3 px-4">
            </div>

            <!-- Campo de texto para el nombre -->
            <div class="pb-2">
                <label for="nombres" class="block mb-2 text-base font-medium text-[#87CEFA]">Nombres</label>
                <input type="text" id="nombres" name="nombres" required class="pl-12 mb-2 bg-gray-50 text-gray-600 border focus:border-transparent border-gray-300 sm:text-sm rounded-lg ring ring-transparent focus:ring-1 focus:outline-none focus:ring-gray-400 block w-full p-2.5 rounded-l-lg py-3 px-4">
            </div>

            <!-- Campo de texto para el apellido -->
            <div class="pb-2">
                <label for="apellidos" class="block mb-2 text-base font-medium text-[#87CEFA]">Apellidos</label>
                <input type="text" id="apellidos" name="apellidos" required class="pl-12 mb-2 bg-gray-50 text-gray-600 border focus:border-transparent border-gray-300 sm:text-sm rounded-lg ring ring-transparent focus:ring-1 focus:outline-none focus:ring-gray-400 block w-full p-2.5 rounded-l-lg py-3 px-4">
            </div>

            <!-- Campo de texto para el nombre del usuario -->
            <div class="pb-2">
                <label for="username" class="block mb-2 text-base font-medium text-[#87CEFA]">Nombre de usuario</label>
                <input type="text" id="username" name="username" required class="pl-12 mb-2 bg-gray-50 text-gray-600 border focus:border-transparent border-gray-300 sm:text-sm rounded-lg ring ring-transparent focus:ring-1 focus:outline-none focus:ring-gray-400 block w-full p-2.5 rounded-l-lg py-3 px-4">
            </div>

            <!-- Campo para la edad -->
            <div class="pb-2">
                <label for="edad" class="block mb-2 text-base font-medium text-[#87CEFA]">Edad</label>
                <input type="number" id="edad" name="edad" required min="18" class="pl-12 mb-2 bg-gray-50 text-gray-600 border focus:border-transparent border-gray-300 sm:text-sm rounded-lg ring ring-transparent focus:ring-1 focus:outline-none focus:ring-gray-400 block w-full p-2.5 rounded-l-lg py-3 px-4">
            </div>

            <!-- Campo para la contraseña -->
            <div class="pb-6">
                <label for="password" class="block mb-2 text-base font-medium text-[#87CEFA]">Contraseña</label>
                <div class="relative text-gray-400"><span class="absolute inset-y-0 left-0 flex items-center p-1 pl-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-square-asterisk"><rect width="18" height="18" x="3" y="3" rx="2"></rect><path d="M12 8v8"></path><path d="m8.5 14 7-4"></path><path d="m8.5 10 7 4"></path></svg></span> 
                    <input type="password" name="password" id="password" placeholder="••••••••••" class="pl-12 mb-2 bg-gray-50 text-gray-600 border focus:border-transparent border-gray-300 sm:text-sm rounded-lg ring ring-transparent focus:ring-1 focus:outline-none focus:ring-gray-400 block w-full p-2.5 rounded-l-lg py-3 px-4" autocomplete="new-password" aria-autocomplete="list">
                </div>
            </div>

            <!-- Botón de registro -->
            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                Registrarse
            </button>
        </form>
        <!-- Fin del formulario -->

        <!-- boton de inicio de secion en cuenta ya existente -->
        <div class="text-md font-light text-blue-200 text-center">
            ¿Ya tienes cuenta? 
            <a href="login.php" class="font-medium text-[#00fbff] hover:underline"> Inicia sesión aquí</a>
        </div>
    </div>
</body>
</html>