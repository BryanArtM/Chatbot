@extends('layouts.app')

<!-- Título de la página -->
@section('title', 'Normativas Legales Relacionadas - Casino Royale') 

@section('content')
    <!-- Leyes -->
    <section id="laws" class="bg-gray-800 py-16 px-10 text-center">
        <h2 class="text-3xl text-red-400 font-bold">Normativas Legales Relacionadas</h2>
        <div class="grid md:grid-cols-3 gap-6 mt-8">
            <div class="bg-gray-700 p-6 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                <span class="block mt-4 text-red-400 font-bold">LEY 29907</span>
                <p class="italic">Ley para la prevención y el tratamiento de la ludopatía en las salas de juego de casino y máquinas tragamonedas.</p>
                <a href="https://consultasenlinea.mincetur.gob.pe/casinos/archivos/2012LEY29829.pdf" target="_blank" class="text-blue-600 mt-2 inline-block hover:underline">
                    Leer más
                </a>
            </div>
            <div class="bg-gray-700 p-6 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                <span class="block mt-4 text-red-400 font-bold">LEY 29829</span>
                <p class="italic">Modifica la Ley N° 27796 sobre la explotación de juegos de casino y máquinas tragamonedas.</p>
                <a href="https://consultasenlinea.mincetur.gob.pe/casinos/archivos/2012LEY29829.pdf" target="_blank" class="text-blue-600 mt-2 inline-block hover:underline">
                    Leer más
                </a>
            </div>
            <div class="bg-gray-700 p-6 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                <span class="block mt-4 text-red-400 font-bold">LEY 29149</span>
                <p class="italic">Reprime la tenencia, explotación, fabricación y comercialización de máquinas tragamonedas.</p>
                <a href="https://consultasenlinea.mincetur.gob.pe/casinos/archivos/2007LEY29149.pdf" target="_blank" class="text-blue-600 mt-2 inline-block hover:underline">
                    Leer más
                </a>
            </div>
        </div>
        <div class="grid md:grid-cols-3 gap-6 mt-8">
            <div class="bg-gray-700 p-6 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                <span class="block mt-4 text-red-400 font-bold">LEY 28945</span>
                <p class="italic">Reordenamiento y formalización de la actividad de explotación de juegos de casino y máquinas tragamonedas.</p>
                <a href="https://consultasenlinea.mincetur.gob.pe/casinos/archivos/2006LEY28945.pdf" target="_blank" class="text-blue-600 mt-2 inline-block hover:underline">
                    Leer más
                </a>
            </div>
            <div class="bg-gray-700 p-6 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                <span class="block mt-4 text-red-400 font-bold">LEY 27796</span>
                <p class="italic">Modifica artículos de la Ley N° 27153 que regula la explotación de juegos de casino y máquinas tragamonedas.</p>
                <a href="https://consultasenlinea.mincetur.gob.pe/casinos/archivos/2002LEY27796.pdf" target="_blank" class="text-blue-600 mt-2 inline-block hover:underline">
                    Leer más
                </a>
            </div>
            <div class="bg-gray-700 p-6 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                <span class="block mt-4 text-red-400 font-bold">LEY 27153</span>
                <p class="italic">Regula la explotación de los juegos de casino y máquinas tragamonedas.</p>
                <a href="https://consultasenlinea.mincetur.gob.pe/casinos/archivos/1999LEY27153.pdf" target="_blank" class="text-blue-600 mt-2 inline-block hover:underline">
                    Leer más
                </a>
            </div>
        </div>
    </section>

    <!-- Información General sobre Normativas -->
    <section id="general-info" class="bg-gradient-to-r from-gray-800 via-gray-700 to-gray-900 py-16 px-10 text-center rounded-lg shadow-xl mb-16">
        <h2 class="text-3xl text-red-400 font-bold">Información General sobre Normativas Legales</h2>
        <p class="mt-4 text-white leading-relaxed">Las normativas legales relacionadas con los casinos están diseñadas para garantizar un entorno de juego seguro y justo para todos los jugadores. Estas leyes abarcan aspectos como la prevención de la ludopatía, la explotación legal de juegos, y la regulación de las máquinas tragamonedas.</p>
        <p class="mt-4 text-white leading-relaxed">Es fundamental que tanto los operadores como los jugadores estén informados y respeten estas leyes para asegurar que las actividades de los casinos se realicen de manera ética y conforme a la ley.</p>
    </section>

    <!-- Requisitos Legales para Operadores de Casino -->
    <section id="requirements" class="bg-gradient-to-r from-red-800 to-red-600 py-16 px-10 text-center text-white rounded-lg shadow-xl mb-16">
        <h2 class="text-3xl font-bold">Requisitos Legales para Operadores de Casino</h2>
        <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <div class="bg-gray-700 p-6 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-400 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <h3 class="font-semibold">Licencia Obligatoria</h3>
                </div></br>

                <p>Contar con una licencia otorgada por la autoridad competente para operar en el país.</p>
            </div>
            <div class="bg-gray-700 p-6 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-400 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12l5 5L19 7" />
                    </svg>
                    <h3 class="font-semibold">Juego Justo</h3>
                </div></br>
                <p>Garantizar que todos los juegos sean justos, transparentes y auditables para los jugadores.</p>
            </div>
            <div class="bg-gray-700 p-6 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-400 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7-7 7M5 12h14" />
                    </svg>
                    <h3 class="font-semibold">Prevención de Fraude</h3>
                </div></br>
                <p>Implementar medidas de control para prevenir el lavado de dinero y otras actividades fraudulentas.</p>
            </div>
        </div>
    </section>

    <!-- Licencias y Autoridades Reguladoras -->
    <section id="licenses" class="bg-gray-800 py-16 px-10 text-center text-white rounded-lg shadow-xl mb-16">
        <h2 class="text-3xl text-red-400 font-bold">Licencias y Autoridades Reguladoras</h2>
        <p class="mt-4 text-white">Para operar legalmente, los casinos deben obtener una licencia emitida por la autoridad reguladora del país o región correspondiente. Esta licencia garantiza que las actividades de los casinos sean transparentes y justas.</p></br>
        <p class="mt-4 text-white">Las autoridades reguladoras realizan auditorías y monitorean las operaciones de los casinos para asegurar que cumplan con las normativas legales y operen de acuerdo con los estándares establecidos.</p>
    </section>


    <!-- Recursos Adicionales -->
    <section id="resources" class="bg-gray-800 py-16 px-10 text-center text-white rounded-lg shadow-xl mb-16">
        <h2 class="text-3xl font-bold text-yellow-400">Recursos Adicionales</h2>
        <p class="mt-4 text-white">Aquí te proporcionamos enlaces útiles para más información sobre las leyes y regulaciones de los casinos:</p>
        <div class="mt-6 space-y-6">
            <div class="flex items-center justify-center bg-gray-800 p-4 rounded-lg shadow-lg hover:shadow-2xl transition duration-300 ml-[15%] mr-[10%]">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-400 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.5-4.5M19 5l5 5-5 5M5 13V6h8" />
                </svg>
                <a href="https://www.mincetur.gob.pe" target="_blank" class="text-red-300 text-xl font-semibold hover:underline">
                    Ministerio de Comercio Exterior y Turismo (MINCETUR)
                </a>

            </div>
            <div class="flex items-center justify-center bg-gray-800 p-4 rounded-lg shadow-lg hover:shadow-2xl transition duration-300 ml-[15%] mr-[10%]">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-400 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l7 7-7 7" />
                </svg>
                <a href="https://apeja.com.pe/" target="_blank" class="text-red-300 text-xl font-semibold hover:underline">
                    Asociación Peruana de Entretenimiento y Juegos de Azar (APEJA)
                </a>
            </div>


            <div class="flex items-center justify-center bg-gray-800 p-4 rounded-lg shadow-lg hover:shadow-2xl transition duration-300 ml-[15%] mr-[10%]">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-400 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 20l-4-4h3V4h2v12h3l-4 4z" />
                </svg>
                <a href="https://consultasenlinea.mincetur.gob.pe/casinos/" target="_blank" class="text-red-300 text-xl font-semibold hover:underline">
                    Dirección General de Casinos y Máquinas Tragamonedas (DGCMT)
                </a>
            </div>
        </div>
    </section>
@endsection
