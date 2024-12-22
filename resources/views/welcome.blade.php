@extends('layouts.app')

<!-- Título de la página -->
@section('title', 'Casino Royale') 

@section('content')
    <!-- Encabezado -->
    <header id="home" class="header h-screen bg-cover bg-center flex flex-col justify-center px-10 lg:items-start items-center text-center lg:text-left transition-transform duration-500 ease-out" style="background-image: url('https://wallpapers.com/images/hd/casino-background-67ppr1q6d49pwpaz.jpg');">
        <h1 class="text-4xl text-red-400 md:text-5xl font-bold drop-shadow-lg" data-aos="fade-down" style="font-size: 7vw;">Casino Royale</h1><br><br>
        <p class="text-lg md:text-2xl mt-2 mb-4" data-aos="fade-up"style="font-size: 1.7vw;">¡Disfruta de una experiencia de juego única y emocionante!</p>
    </header>

    <!-- Sección principal: Juegos -->
    <section id="games" class="py-16 px-10 text-center" data-aos="fade-up">
        <div class="grid md:grid-rows-2 gap-6">
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-gray-800 rounded-lg shadow-lg p-6 hover:scale-105 transition-transform">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ50OZxVJg36-2kKMqyhBcoyH2QjdgRV0ZQqg&s" alt="Blackjack" class="w-full h-80 object-cover rounded-md">
                    <h3 class="text-xl text-red-400 mt-4">Blackjack</h3>
                    <p class="text-sm mt-2">El clásico juego de cartas que desafía tu estrategia.</p>
                </div>
                <div class="bg-gray-800 rounded-lg shadow-lg p-6 hover:scale-105 transition-transform">
                    <img src="https://www.casinobarcelona.es/blog/wp-content/uploads/2022/06/ruleta-americana-las-reglas-1.webp" alt="Ruleta" class="w-full h-80 object-cover rounded-md">
                    <h3 class="text-xl text-red-400 mt-4">Ruleta</h3>
                    <p class="text-sm mt-2">Gira la rueda y prueba tu suerte.</p>
                </div>
                <div class="bg-gray-800 rounded-lg shadow-lg p-6 hover:scale-105 transition-transform">
                    <img src="https://ojo-publico.com/sites/default/files/2020-01/casino_pixabay.jpg" alt="Tragamonedas" class="w-full h-80 object-cover rounded-md">
                    <h3 class="text-xl text-red-400 mt-4">Tragamonedas</h3>
                    <p class="text-sm mt-2">Descubre emocionantes premios en cada giro.</p>
                </div>
            </div>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-gray-800 rounded-lg shadow-lg p-6 hover:scale-105 transition-transform">
                    <img src="https://versuspy2.fra1.cdn.digitaloceanspaces.com/versus/wp-content/uploads/2020/02/11084405/atencio%CC%81n-al-cliente-888-poker-1024x575.jpg" alt="Póker" class="w-full h-80 object-cover rounded-md">
                    <h3 class="text-xl text-red-400 mt-4">Póker</h3>
                    <p class="text-sm mt-2">Desafía a tus amigos en este juego de cartas de estrategia y habilidad.</p>
                </div>
                <div class="bg-gray-800 rounded-lg shadow-lg p-6 hover:scale-105 transition-transform">
                    <img src="https://cdn.cardsrealm.com/images/uploads/1-1682647144.jpeg?&width=850" alt="Baccarat" class="w-full h-80 object-cover rounded-md">
                    <h3 class="text-xl text-red-400 mt-4">Baccarat</h3>
                    <p class="text-sm mt-2">Un juego de cartas con reglas sencillas pero emocionantes.</p>
                </div>
                <div class="bg-gray-800 rounded-lg shadow-lg p-6 hover:scale-105 transition-transform">
                    <img src="https://www.sycuan.com/wp-content/uploads/2020/09/tg-sycuan-craps.jpg" alt="Craps" class="w-full h-80 object-cover rounded-md">
                    <h3 class="text-xl text-red-400 mt-4">Craps</h3>
                    <p class="text-sm mt-2">Lanza los dados y apuesta en este emocionante juego de azar.</p>
                </div>
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
        <!-- Nuevos testimonios -->
        <div class="bg-gray-700 p-6 rounded-lg shadow-md">
            <p class="italic">"Las mesas de póker son fantásticas, la competencia es intensa y divertida."</p>
            <span class="block mt-4 text-red-400 font-bold">- Carlos Martínez</span>
        </div>
        <div class="bg-gray-700 p-6 rounded-lg shadow-md">
            <p class="italic">"Me encanta el ambiente del casino, ¡es como estar en Las Vegas desde casa!"</p>
            <span class="block mt-4 text-red-400 font-bold">- Ana Ruiz</span>
        </div>
        <div class="bg-gray-700 p-6 rounded-lg shadow-md">
            <p class="italic">"La atención al cliente es excepcional, siempre me ayudan con cualquier duda."</p>
            <span class="block mt-4 text-red-400 font-bold">- Luis Fernández</span>
        </div>
        <div class="bg-gray-700 p-6 rounded-lg shadow-md">
            <p class="italic">"¡Las tragamonedas tienen gráficos impresionantes y una jugabilidad espectacular!"</p>
            <span class="block mt-4 text-red-400 font-bold">- Isabel Sánchez</span>
        </div>
        <div class="bg-gray-700 p-6 rounded-lg shadow-md">
            <p class="italic">"Me encanta el baccarat, me siento como un profesional en cada partida."</p>
            <span class="block mt-4 text-red-400 font-bold">- Javier Gómez</span>
        </div>
        <div class="bg-gray-700 p-6 rounded-lg shadow-md">
            <p class="italic">"Los torneos de póker son muy emocionantes, ¡siempre quiero participar en más!"</p>
            <span class="block mt-4 text-red-400 font-bold">- Marta López</span>
        </div>
    </div>
</section>


@endsection


