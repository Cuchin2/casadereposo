<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Casa de reposo y cuidado del adulto mayor - Villa Marina Casa de Resposo</title>
    <link rel="icon" href="{{ asset('storage/images/site_favicon_16_1718670025552.ico') }}" type="image/x-icon">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @fluxAppearance
</head>
<style>
    body {
        /* font-family: Poppins, 'Poppins Fallback'; */
        font-family: Montserrat, 'Montserrat Fallback' !important;
    }

    .montserrat {
        font-family: Montserrat, 'Montserrat Fallback' !important;
    }

    .underline-animation {
        position: relative;
        overflow: hidden;
        display: inline-block;
    }

    .underline-animation::before {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 0;
        height: 2px;
        background-color: #BEDB49;
        transition: width 0.3s ease-in-out;
    }

    .underline-animation:hover::before,
    .underline-animation.active::before {
        /* Agregamos la clase .active aquí */
        width: 100%;
    }

    html {
        scroll-behavior: smooth;
    }
</style>

<body class="font-sans antialiased bg-gray-100">

    <!-- Header -->
    <header class="bg-white shadow-md fixed top-0 w-full z-20" x-data="{ isOpen: false }">
        <div class="container mx-auto md:px-16 px-4 py-3 flex items-center justify-between">
            <a href="{{ route('home') }}" wire:navigate class="flex items-center space-x-2">
                <img src="{{ asset('storage/images/image00001-528w.webp') }}" alt="Villa Marina Logo" class="md:h-14 h-10">
                {{-- <span class="text-xl font-bold text-gray-800">Villa Marina</span> --}}
            </a>
            <nav class="hidden md:flex space-x-6" x-data="{ activeLink: '{{ Route::currentRouteName() }}' }">
                <a href="{{ route('home') }}" wire:navigate
                    class="text-gray-600 hover:text-primary-500 underline-animation"
                    :class="{ 'active': activeLink === 'home' }" @click="activeLink = 'home'">Quiénes somos</a>
                <a href="{{ route('services') }}" wire:navigate
                    class="text-gray-600 hover:text-primary-500 underline-animation"
                    :class="{ 'active': activeLink === 'services' }" @click="activeLink = 'servicios'">Servicios</a>
                <a href="#" class="text-gray-600 hover:text-primary-500 underline-animation"
                    :class="{ 'active': activeLink === 'contacto' }" @click.prevent="
                       activeLink = 'contacto';
                       if (window.location.pathname !== '/') {
                           window.location.href = '/#contact';
                       } else {
                           document.getElementById('contact').scrollIntoView({ behavior: 'smooth' });
                       }
                   ">Contacto</a>
            </nav>
            <div class="flex md:space-x-3 justify-between scale-80 md:scale-100">
                <a href="#" class="transform hover:-translate-y-2 transition-transform duration-200">
                    <x-icons.facebook class="h-11 p-0.5" />
                </a>
                <a href="#" class="transform hover:-translate-y-2 transition-transform duration-200">
                    <x-icons.instagram class="h-10 p-1 mt-0.5" /></i>
                </a>
                <a href="https://www.google.com/maps/place/Villa+Marina+Casa+de+Reposo/@-12.1248243,-77.0654771,20678m/data=!3m2!1e3!4b1!4m6!3m5!1s0x9105b938fa7140f3:0x3e7f7a4dd18eacdb!8m2!3d-12.1248366!4d-76.9829018!16s%2Fg%2F11h23k4v5q?entry=ttu&g_ep=EgoyMDI1MDQwOS4wIKXMDSoASAFQAw%3D%3D"
                    target="_blank" class="transform hover:-translate-y-2 transition-transform duration-200">
                    <x-icons.googlebusiness class="h-8 w-8 p-1 mt-1.5 ml-1 rounded-full bg-[#7babf7] my-1" /></i>
                </a>
            </div>
            <button @click="isOpen = !isOpen" @click.away="isOpen = false"
                class="md:hidden text-gray-500 hover:text-gray-800 focus:outline-none">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" x-show="!isOpen">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" x-show="isOpen">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>

            <!-- Mobile Menu -->
            <div class="md:hidden absolute top-full left-0 w-full bg-white shadow-md py-4" x-show="isOpen"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform translate-y-4"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 transform translate-y-0"
                x-transition:leave-end="opacity-0 transform translate-y-4">
                <nav class="flex flex-col items-center space-y-4">
                    <a href="{{ route('home') }}" wire:navigate
                        class="text-gray-600 hover:text-primary-500 underline-animation">Quiénes somos</a>
                    <a href="{{ route('services') }}" wire:navigate
                        class="text-gray-600 hover:text-primary-500 underline-animation">Servicios</a>
                    <a href="#" class="text-gray-600 hover:text-primary-500 underline-animation" @click.prevent="
                        if (window.location.pathname !== '/') {
                            window.location.href = '/#contact';
                        } else {
                            document.getElementById('contact').scrollIntoView({ behavior: 'smooth' });
                        }
                    ">Contacto</a>
                </nav>
            </div>
        </div>
    </header>
    {{ $slot }}
    <!-- Footer -->
    @include('web.footer')

    <!-- whatsapp -->
    <div>
        <a target="_blank" data-display-type="block" href="https://web.whatsapp.com/send?phone=51957742500&amp;text=Hola%2C%20quisiera%20m%C3%A1s%20informaci%C3%B3n"
            class="fixed bottom-5 right-3 transform hover:-translate-y-2 transition-transform duration-200 z-20">
            <x-icons.whatsapp class="h-12 p-0.5" />
        </a>
    </div>
    @fluxScripts

</body>

</html>
