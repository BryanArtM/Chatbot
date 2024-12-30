<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Casino Royale')</title>
    <link rel="icon" href="{{ asset('images/icon.png') }}" type="image/x-icon">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="font-[Poppins] bg-gray-900 text-white">

    <!-- Menú de navegación -->
    <nav id="navbar" class="fixed top-0 w-full bg-transparente bg-opacity-100 z-50 transition-all ease-in-out duration-600">
        <ul id="navbarList" class="flex justify-center space-x-20 py-4 transition-all ease-in-out duration-600">
            <li><a href="{{ url('/') }}#home" class="text-white hover:text-red-500">Inicio</a></li>
            <li><a href="{{ url('/') }}#games" class="text-white hover:text-red-500">Juegos</a></li>
            <li><a href="{{ url('/') }}#chat" class="text-white hover:text-red-500">Comentarios</a></li>
            <li><a href="{{ url('/laws') }}" class="text-white hover:text-red-500">Leyes</a></li>
            <li><a href="{{ url('/about') }}" class="text-white hover:text-red-500">Sobre Nosotros</a></li>
        </ul>
    </nav>

    <!-- Contenido principal -->
    <main>
        @yield('content')
    </main>

    <!-- Botón - Chat flotante -->
    <button id="chatBtn" class="fixed bottom-4 right-4 bg-red-500 hover:bg-red-600 w-16 h-16 rounded-full flex justify-center items-center shadow-lg">
        <img src="https://cdn-icons-png.flaticon.com/512/2593/2593635.png" alt="Chat" class="w-12 h-12">
    </button>

    <!-- Chat flotante -->
    <div id="chatPopup" class="hidden fixed bottom-24 right-4 w-80 h-96 bg-white rounded-lg shadow-lg overflow-hidden">
        <button id="closeChat" class="absolute top-2 right-2 bg-red-500 text-white rounded-full w-8 h-8 flex justify-center items-center">✖</button>
        <iframe src="https://console.dialogflow.com/api-client/demo/embedded/75604a3c-da04-44e9-88ca-c1f770081830" allow="microphone;" class="w-full h-full"> </iframe>
    </div>

    <!-- Pie de página -->
    <footer class="bg-gray-800 text-center py-4 text-sm">
        &copy; 2024 Casino Royale. Todos los derechos reservados. | <a href="#" class="text-red-400">Política de Privacidad</a>
    </footer>

        <!-- Script para abrir y cerrar el chat flotante -->
        <script>
            // Al hacer clic en el botón del chat, mostrar el chat flotante
            document.getElementById('chatBtn').addEventListener('click', function() {
                const chatPopup = document.getElementById('chatPopup');
                chatPopup.classList.toggle('hidden'); // Alterna la visibilidad del chat
            });
    
            // Al hacer clic en el botón de cerrar, ocultar el chat
            document.getElementById('closeChat').addEventListener('click', function() {
                const chatPopup = document.getElementById('chatPopup');
                chatPopup.classList.add('hidden'); // Esconde el chat
            });
        </script>

    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            const navbarList = document.getElementById('navbarList');
            if (window.scrollY > 50) {
                // Cuando se hace scroll, se cambia el fondo y la separación
                navbar.classList.remove('bg-gray-800', 'bg-opacity-80', 'bg-transparent');
                navbar.classList.add('bg-gray-900', 'bg-opacity-100');
                navbarList.classList.remove('space-x-10'); 
                navbarList.classList.add('space-x-6');
                navbarList.classList.add('scale-90');
            } else {
                // Cuando la página está arriba, se hace completamente transparente
                navbar.classList.remove('bg-gray-900', 'bg-opacity-100');
                navbar.classList.add('bg-transparent'); // Hacerlo completamente transparente
                navbarList.classList.remove('space-x-6'); 
                navbarList.classList.add('space-x-20');
                navbarList.classList.remove('scale-90');
            }
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>AOS.init();</script>
</body>
</html>
