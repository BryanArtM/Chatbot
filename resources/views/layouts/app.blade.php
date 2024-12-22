<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Casino Royale')</title> <!-- Título dinámico -->
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
    <nav class="fixed top-0 w-full bg-gray-800 bg-opacity-80 z-50 shadow-md">
        <ul class="flex justify-center space-x-6 py-4">
            <li><a href="{{ url('/') }}#home" class="text-white hover:text-red-500">Inicio</a></li>
            <li><a href="{{ url('/') }}#games" class="text-white hover:text-red-500">Juegos</a></li>
            <li><a href="{{ url('/') }}#chat" class="text-white hover:text-red-500">Comentarios</a></li>
            <li><a href="{{ url('/') }}#laws" class="text-white hover:text-red-500">Leyes</a></li>
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

    <script>
        const chatBtn = document.getElementById('chatBtn');
        const chatPopup = document.getElementById('chatPopup');
        const closeChat = document.getElementById('closeChat');
        
        chatBtn.addEventListener('click', () => {
            chatPopup.classList.toggle('hidden');
        });
        
        closeChat.addEventListener('click', () => {
            chatPopup.classList.add('hidden');
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>AOS.init();</script>
</body>
</html>

