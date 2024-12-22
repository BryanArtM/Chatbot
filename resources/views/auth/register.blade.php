@extends('layouts.app')

@section('title', 'Registro - Casino Royale')

@section('content')
<header id="home" class="h-[350px] bg-cover bg-center flex flex-col justify-center px-10 lg:items-start items-center text-center lg:text-left" style="background-image: url('https://wallpapers.com/images/hd/casino-background-67ppr1q6d49pwpaz.jpg');">
    <h2 class="text-4xl md:text-5xl font-bold text-red-400 mb-4" data-aos="fade-down">Regístrate en Casino Royale</h2>
    <p class="text-lg md:text-2xl mb-8" data-aos="fade-up">¡Únete a la mejor experiencia de juego en línea!</p>
    </header>
    <!-- Sección de registro -->
    <section class="py-16 px-10 text-center">

        <form method="POST" action="{{ route('register') }}" class="bg-gray-800 p-8 rounded-lg shadow-lg w-[80%] mx-auto">            @csrf

            <!-- Nombre -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-semibold text-white">Nombre</label>
                <input id="name" type="text" class="mt-2 p-3 w-full bg-gray-700 rounded-lg text-white" name="name" value="{{ old('name') }}" required autofocus>
                @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Correo Electrónico -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-semibold text-white">Correo Electrónico</label>
                <input id="email" type="email" class="mt-2 p-3 w-full bg-gray-700 rounded-lg text-white" name="email" value="{{ old('email') }}" required>
                @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Contraseña -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-semibold text-white">Contraseña</label>
                <input id="password" type="password" class="mt-2 p-3 w-full bg-gray-700 rounded-lg text-white" name="password" required>
                @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Confirmar Contraseña -->
            <div class="mb-4">
                <label for="password_confirmation" class="block text-sm font-semibold text-white">Confirmar Contraseña</label>
                <input id="password_confirmation" type="password" class="mt-2 p-3 w-full bg-gray-700 rounded-lg text-white" name="password_confirmation" required>
            </div>

            <div class="flex justify-center mt-6">
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-3 px-8 rounded-full text-lg">
                    Registrar
                </button>
            </div>
        </form>
    </section>
@endsection
