
@extends('layouts.app')

<!-- Título de la página -->
@section('title', 'Casino Royale') 

@section('content')
    <!-- Encabezado -->
    <header id="home" class="h-[350px] bg-cover bg-center flex flex-col justify-center px-10 lg:items-start items-center text-center lg:text-left" style="background-image: url('https://wallpapers.com/images/hd/casino-background-67ppr1q6d49pwpaz.jpg');">
        <h1 class="text-4xl md:text-5xl font-bold drop-shadow-lg" data-aos="fade-down">Casino Royale</h1>
        <p class="text-lg md:text-2xl mt-2 mb-4" data-aos="fade-up">¡Disfruta de una experiencia de juego única y emocionante!</p>
        <a href="{{ route('register') }}">
            <button class="bg-red-500 hover:bg-red-600 text-white py-2 px-6 rounded-full text-lg" data-aos="fade-up">Regístrate ahora</button>
        </a>
    </header>

    <!-- Sección principal: Juegos -->
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
@endsection
