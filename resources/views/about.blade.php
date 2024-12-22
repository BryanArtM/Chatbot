@extends('layouts.app')

@section('title', 'Sobre Nosotros | Casino Royale')

@section('content')
    <!-- Encabezado -->
    <header id="home" class="h-[350px] bg-cover bg-center flex flex-col justify-center px-10 lg:items-start items-center text-center lg:text-left" style="background-image: url('https://wallpapers.com/images/hd/casino-background-67ppr1q6d49pwpaz.jpg');">
        <h1 class="text-4xl md:text-5xl font-bold text-red-400 mb-4" data-aos="fade-down">Sobre Nosotros</h1>
        <p class="text-lg md:text-2xl mt-2 mb-4" data-aos="fade-up">Descubre quiénes somos y qué nos hace únicos.</p>
    </header>

    <!-- Sección: Nuestra Historia -->
    <section class="py-16 px-10 text-center bg-gray-800" data-aos="fade-up">
        <h2 class="text-3xl text-red-400 font-bold mb-4">Nuestra Historia</h2>
        <p class="max-w-4xl mx-auto text-gray-300">
            Desde nuestros inicios, <strong>Casino Royale</strong> se ha destacado por ofrecer experiencias de juego únicas y emocionantes. Con una sólida reputación y años de experiencia, hemos construido un espacio seguro y divertido para nuestros jugadores.
        </p>
    </section>

    <!-- Sección: Misión y Visión -->
    <section class="py-16 px-10 text-center" data-aos="fade-up">
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-gray-700 p-6 rounded-lg shadow-md">
                <h3 class="text-2xl text-red-400 font-bold mb-2">Nuestra Misión</h3>
                <p>
                    Proporcionar entretenimiento de calidad, garantizando la seguridad y confianza de nuestros usuarios en cada jugada.
                </p>
            </div>
            <div class="bg-gray-700 p-6 rounded-lg shadow-md">
                <h3 class="text-2xl text-red-400 font-bold mb-2">Nuestra Visión</h3>
                <p>
                    Convertirnos en el casino en línea líder a nivel mundial, ofreciendo innovación constante y experiencias inolvidables.
                </p>
            </div>
        </div>
    </section>

    <!-- Sección: Nuestros Valores -->
    <section class="py-16 px-10 text-center bg-gray-800" data-aos="fade-up">
        <h2 class="text-3xl text-red-400 font-bold mb-4">Nuestros Valores</h2>
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-gray-700 p-6 rounded-lg shadow-md">
                <h4 class="text-xl font-bold mb-2">🎯 Compromiso</h4>
                <p>Nos dedicamos a brindar un servicio de alta calidad con transparencia.</p>
            </div>
            <div class="bg-gray-700 p-6 rounded-lg shadow-md">
                <h4 class="text-xl font-bold mb-2">🔒 Seguridad</h4>
                <p>Protegemos tus datos con tecnología avanzada.</p>
            </div>
            <div class="bg-gray-700 p-6 rounded-lg shadow-md">
                <h4 class="text-xl font-bold mb-2">🤝 Integridad</h4>
                <p>Actuamos con honestidad y responsabilidad en cada interacción.</p>
            </div>
        </div>
    </section>

    <!-- Sección: Nuestro Equipo -->
    <section class="py-16 px-10 text-center" data-aos="fade-up">
        <h2 class="text-3xl text-red-400 font-bold mb-4">Nuestro Equipo</h2>
        <p class="max-w-4xl mx-auto text-gray-300 mb-8">
            Detrás de <strong>Casino Royale</strong> hay un equipo apasionado y profesional, comprometido con ofrecer la mejor experiencia de juego.
        </p>
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-gray-700 p-6 rounded-lg shadow-md">
                <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="CEO" class="w-24 h-24 mx-auto rounded-full mb-4">
                <h4 class="text-xl font-bold">Carlos Ramírez</h4>
                <p class="text-red-400">CEO & Fundador</p>
            </div>
            <div class="bg-gray-700 p-6 rounded-lg shadow-md">
                <img src="https://randomuser.me/api/portraits/women/2.jpg" alt="CMO" class="w-24 h-24 mx-auto rounded-full mb-4">
                <h4 class="text-xl font-bold">Ana López</h4>
                <p class="text-red-400">CMO</p>
            </div>
            <div class="bg-gray-700 p-6 rounded-lg shadow-md">
                <img src="https://randomuser.me/api/portraits/men/3.jpg" alt="CTO" class="w-24 h-24 mx-auto rounded-full mb-4">
                <h4 class="text-xl font-bold">David Pérez</h4>
                <p class="text-red-400">CTO</p>
            </div>
        </div>
    </section>

    <!-- Llamada a la acción -->
    <section class="py-16 px-10 text-center bg-red-500 text-white" data-aos="fade-up">
        <h2 class="text-3xl font-bold mb-4">¡Únete a la Experiencia Casino Royale!</h2>
        <p class="mb-6">Disfruta de una experiencia única de juego en línea.</p>

    </section>
@endsection
