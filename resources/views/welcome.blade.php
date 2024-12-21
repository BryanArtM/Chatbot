<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título de la página -->
    <title>Casino Royale</title>
    <!-- Estilos CSS -->
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

    <!-- Encabezado -->
    <header id="home" class="h-[350px] bg-cover bg-center flex flex-col justify-center px-10 lg:items-start items-center text-center lg:text-left" style="background-image: url('https://wallpapers.com/images/hd/casino-background-67ppr1q6d49pwpaz.jpg');">
        <h1 class="text-4xl md:text-5xl font-bold drop-shadow-lg" data-aos="fade-down">Casino Royale</h1>
        <p class="text-lg md:text-2xl mt-2 mb-4" data-aos="fade-up">¡Disfruta de una experiencia de juego única y emocionante!</p>
        <button class="bg-red-500 hover:bg-red-600 text-white py-2 px-6 rounded-full text-lg" data-aos="fade-up">Regístrate ahora</button>
    </header>

    <!-- Navegación -->
    <nav class="fixed top-0 w-full bg-gray-800 bg-opacity-90 z-50 shadow-md">
        <ul class="flex justify-center space-x-6 py-4">
            <li><a href="#home" class="text-white hover:text-red-500">Inicio</a></li>
            <li><a href="#games" class="text-white hover:text-red-500">Juegos</a></li>
            <li><a href="#chat" class="text-white hover:text-red-500">Comentarios</a></li>
            <li><a href="#laws" class="text-white hover:text-red-500">Leyes</a></li>
        </ul>
    </nav>

    <!-- Sección principal -->
    <section id="games" class="py-16 px-10 text-center" data-aos="fade-up">
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-gray-800 rounded-lg shadow-lg p-6 hover:scale-105 transition-transform">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ50OZxVJg36-2kKMqyhBcoyH2QjdgRV0ZQqg&s" alt="Blackjack" class="w-full rounded-md">
                <h3 class="text-xl text-red-400 mt-4">Blackjack</h3>
                <p class="text-sm mt-2">El clásico juego de cartas que desafía tu estrategia.</p>
            </div>
            <div class="bg-gray-800 rounded-lg shadow-lg p-6 hover:scale-105 transition-transform">
                <img src="https://www.casinobarcelona.es/blog/wp-content/uploads/2022/06/ruleta-americana-las-reglas-1.webp" alt="Ruleta" class="w-full rounded-md">
                <h3 class="text-xl text-red-400 mt-4">Ruleta</h3>
                <p class="text-sm mt-2">Gira la rueda y prueba tu suerte.</p>
            </div>
            <div class="bg-gray-800 rounded-lg shadow-lg p-6 hover:scale-105 transition-transform">
                <img src="https://ojo-publico.com/sites/default/files/2020-01/casino_pixabay.jpg" alt="Tragamonedas" class="w-full rounded-md">
                <h3 class="text-xl text-red-400 mt-4">Tragamonedas</h3>
                <p class="text-sm mt-2">Descubre emocionantes premios en cada giro.</p>
            </div>
        </div>
    </section>

    <!-- Testimonios -->
    <section id="chat" class="bg-gray-800 py-16 px-10 text-center">
        <h2 class="text-3xl text-red-400">Lo que dicen nuestros jugadores</h2>
        <div class="grid md:grid-cols-3 gap-6 mt-8">
            <div class="bg-gray-700 p-6 rounded-lg shadow-md">
                <p class="italic">"¡El mejor casino en línea que he probado! Las tragamonedas son increíbles."</p>
                <span class="block mt-4 text-red-400 font-bold">- María García</span>
            </div>
            <div class="bg-gray-700 p-6 rounded-lg shadow-md">
                <p class="italic">"La ruleta en vivo es emocionante, ¡me encanta!"</p>
                <span class="block mt-4 text-red-400 font-bold">- Pedro López</span>
            </div>
            <div class="bg-gray-700 p-6 rounded-lg shadow-md">
                <p class="italic">"La experiencia en el blackjack es única, ¡nunca me canso de jugar!"</p>
                <span class="block mt-4 text-red-400 font-bold">- Juan Pérez</span>
            </div> 
        </div>
        <div class="grid md:grid-cols-3 gap-6 mt-8">
            <div class="bg-gray-700 p-6 rounded-lg shadow-md">
                <p class="italic">"Las promociones y el bono de bienvenida son geniales, me siento muy valorado."</p>
                <span class="block mt-4 text-red-400 font-bold">- Ana Rodríguez</span>
            </div>
            <div class="bg-gray-700 p-6 rounded-lg shadow-md">
                <p class="italic">"La interfaz es muy intuitiva y los juegos son de calidad. ¡Me divierto mucho!"</p>
                <span class="block mt-4 text-red-400 font-bold">- Luis Fernández</span>
            </div>
            <div class="bg-gray-700 p-6 rounded-lg shadow-md">
                <p class="italic">"Excelente atención al cliente, siempre me ayudan rápidamente cuando tengo dudas."</p>
                <span class="block mt-4 text-red-400 font-bold">- Carla Martínez</span>
            </div> 
        </div>
    </section>


    <!-- Leyes -->
    <section id="laws" class="bg-gray-800 py-16 px-10 text-center">
        <h2 class="text-3xl text-red-400">Normativas Legales Relacionadas</h2>
        <div class="grid md:grid-cols-3 gap-6 mt-8">
            <div class="bg-gray-700 p-6 rounded-lg shadow-md">
                <span class="block mt-4 text-red-400 font-bold">LEY 29907</span>
                <p class="italic">Ley para la prevención y el tratamiento de la ludopatía en las salas de juego de casino y máquinas tragamonedas.</p>
                <a href="https://consultasenlinea.mincetur.gob.pe/casinos/archivos/2012LEY29829.pdf" target="_blank" class="text-blue-600 mt-2 inline-block hover:underline">
                    Leer más
                  </a>
            </div>
            <div class="bg-gray-700 p-6 rounded-lg shadow-md">
                <span class="block mt-4 text-red-400 font-bold">LEY 29829</span>
                <p class="italic">Modifica la Ley N° 27796 sobre la explotación de juegos de casino y máquinas tragamonedas.</p>
                <a href="https://consultasenlinea.mincetur.gob.pe/casinos/archivos/2012LEY29829.pdf" target="_blank" class="text-blue-600 mt-2 inline-block hover:underline">
                    Leer más
                  </a>
            </div>
            <div class="bg-gray-700 p-6 rounded-lg shadow-md">
                <span class="block mt-4 text-red-400 font-bold">LEY 29149</span>
                <p class="italic">Reprime la tenencia, explotación, fabricación y comercialización de máquinas tragamonedas.</p>
                <a href="https://consultasenlinea.mincetur.gob.pe/casinos/archivos/2007LEY29149.pdf" target="_blank" class="text-blue-600 mt-2 inline-block hover:underline">
                    Leer más
                  </a>
            </div>
        </div>
        <div class="grid md:grid-cols-3 gap-6 mt-8">

            <div class="bg-gray-700 p-6 rounded-lg shadow-md">
                <span class="block mt-4 text-red-400 font-bold">LEY 28945</span>
                <p class="italic">Reordenamiento y formalización de la actividad de explotación de juegos de casino y máquinas tragamonedas.</p>
                <a href="https://consultasenlinea.mincetur.gob.pe/casinos/archivos/2006LEY28945.pdf" target="_blank" class="text-blue-600 mt-2 inline-block hover:underline">
                    Leer más
                </a>
            </div>
            <div class="bg-gray-700 p-6 rounded-lg shadow-md">
                <span class="block mt-4 text-red-400 font-bold">LEY 27796</span>
                <p class="italic">Modifica artículos de la Ley N° 27153 que regula la explotación de juegos de casino y máquinas tragamonedas.</p>
                <a href="https://consultasenlinea.mincetur.gob.pe/casinos/archivos/2002LEY27796.pdf" target="_blank" class="text-blue-600 mt-2 inline-block hover:underline">
                    Leer más
                </a>
            </div>
            <div class="bg-gray-700 p-6 rounded-lg shadow-md">
                <span class="block mt-4 text-red-400 font-bold">LEY 27153</span>
                <p class="italic">Regula la explotación de los juegos de casino y máquinas tragamonedas.</p>
                <a href="https://consultasenlinea.mincetur.gob.pe/casinos/archivos/1999LEY27153.pdf" target="_blank" class="text-blue-600 mt-2 inline-block hover:underline">
                    Leer más
                </a>
            </div>
        </div>
    </section>


    <!-- Chat flotante -->
    <button id="chatBtn" class="fixed bottom-4 right-4 bg-red-500 hover:bg-red-600 w-16 h-16 rounded-full flex justify-center items-center shadow-lg">
        <img src="https://cdn-icons-png.flaticon.com/512/2593/2593635.png" alt="Chat" class="w-12 h-12">
    </button>

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
