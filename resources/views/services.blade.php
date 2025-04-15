<x-layouts.web.main>
        <!-- Hero Section -->
        <section>
            <!-- Imágenes del carrusel (siempre en el fondo) -->
            <div class="fixed left-0 w-full h-full z-[-2]">
                <div class="absolute inset-0 opacity-100 transition-opacity duration-1000 ease-in-out">
                    <img src="{{ asset('storage/images/iStock-138945251221920w.webp') }}" alt="Imagen del carrusel"
                        class="w-full h-full object-cover" loading="eager" />
                    <div class="absolute inset-0 bg-stone-800 opacity-70"></div>
                </div>
            </div>

            <!-- Contenido del carrusel (encima de las imágenes) -->

            <div class="h-[700px] w-full">


            </div>
            <div class="absolute top-1/2 md:top-3/5 transform -translate-y-1/2 max-w-[850px] md:px-14 px-8">
                <div data-aos="flip-left" class="text-gray-200">
                    <h5 class="uppercase montserrat">servicios</h5>
                    <span class="uppercase md:text-[45px] text-[30px]"><span class="text-[#BEDB49] font-semibold">Asistencia 24/7 </span> - Cuidado y confort para tus seres queridos</span>

                </div>

            </div>

        </section>
        {{-- Banner --}}
        <div class="relative">
            <div class="absolute bg-[#BEDB49] text-center w-7/8 left-1/2 transform -translate-x-1/2 py-5 md:px-20 px-10 bottom-[-30px]
        ">
                <div data-aos="zoom-in">
                    <span class="md:text-[30px] text-[15px] text-gray-600 italic">El mejor ambiente de atención a personas mayores</span>
                </div>

            </div>
        </div>

        {{-- Servicios --}}
        <section class="md:py-30 py-20 bg-white  px-10 ">
            <h1 class="text-gray-800 uppercase text-center md:!text-[30px] sm:!text-[25px] !text-[20px] font-semibold mb-10 md:px-20 md:w-2/3 sm:!w-3/4 mx-auto">Más de 11 años ofreciendo los siguientes servicios</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

            <!-- Card 1 -->
            <div class="bg-[#CBE0F0] rounded-lg shadow-md overflow-hidden " data-aos="slide-up" data-aos-duration="1000">
                <img class="h-[276px] w-full object-cover hover:filter grayscale filter-none transition-all duration-300" src="{{ asset('storage/images/services/1.webp') }}" alt="">
              <div class="p-6 text-center">

{{--                 <div class="flex items-center mb-4">

                  <svg class="w-8 h-8 text-indigo-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 4.75 7.5 4.75a12.742 12.742 0 00-2.269 1.005l-3.214 2.053a.9.9 0 00-.204.464A9.084 9.084 0 003 11.255c0 5.107 3.905 9.26 9.095 9.26A9.084 9.084 0 0021 11.255c0-5.107-3.905-9.26-9.095-9.26z"></path></svg>
                  <h3 class="text-xl font-semibold text-gray-700">Asistencia Personalizada</h3>
                </div> --}}
                <p class="text-gray-600 font-bold">Atención médica especializada por profesionales</p>
              </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-[#CBE0F0] rounded-lg shadow-md overflow-hidden " data-aos="slide-up" data-aos-duration="1000">
                <img class="h-[276px] w-full object-cover hover:filter grayscale filter-none transition-all duration-300" src="{{ asset('storage/images/services/2.webp') }}" alt="">
              <div class="p-6 text-center">
{{--                 <div class="flex items-center mb-4">
                  <svg class="w-8 h-8 text-indigo-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7a7 7 0 2110 3v6m-7 7l7 7m-4-13a3 3 0 100 6m0 0a3 3 0 100-6zm-7-7l9 9"></path></svg>
                  <h3 class="text-xl font-semibold text-gray-700">Cuidado Médico 24/7</h3>
                </div> --}}
                <p class="text-gray-600 font-bold">Asistencia 24/7</p>
              </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-[#CBE0F0] rounded-lg shadow-md overflow-hidden" data-aos="slide-up" data-aos-duration="1400">
                <img class="h-[276px] w-full object-cover hover:filter grayscale filter-none transition-all duration-300" src="{{ asset('storage/images/services/3.webp') }}" alt="">
              <div class="p-6 text-center">
{{--                 <div class="flex items-center mb-4">
                  <svg class="w-8 h-8 text-indigo-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                  <h3 class="text-xl font-semibold text-gray-700">Actividades Recreativas</h3>
                </div> --}}
                <p class="text-gray-600 font-bold">Actividades de integración</p>
              </div>
            </div>
            <!-- Card 4 -->
            <div class="bg-[#CBE0F0] rounded-lg shadow-md overflow-hidden" data-aos="slide-up" data-aos-duration="1800">
                <img class="h-[276px] w-full object-cover hover:filter grayscale filter-none transition-all duration-300" src="{{ asset('storage/images/services/4.webp') }}" alt="">
              <div class="p-6 text-center">
{{--                 <div class="flex items-center mb-4">
                  <svg class="w-8 h-8 text-indigo-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                  <h3 class="text-xl font-semibold text-gray-700">Actividades Recreativas</h3>
                </div> --}}
                <p class="text-gray-600 font-bold">Alimentación balanceada</p>
              </div>
            </div>
            <!-- Card 5 -->
            <div class="bg-[#CBE0F0] rounded-lg shadow-md overflow-hidden" data-aos="slide-up" data-aos-duration="1000">
                <img class="h-[276px] w-full object-cover hover:filter grayscale filter-none transition-all duration-300" src="{{ asset('storage/images/services/5.webp') }}" alt="">
                <div class="p-6 text-center">
{{--                 <div class="flex items-center mb-4">
                    <svg class="w-8 h-8 text-indigo-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    <h3 class="text-xl font-semibold text-gray-700">Actividades Recreativas</h3>
                </div> --}}
                <p class="text-gray-600 font-bold">Terapia ocupacional y recreativa</p>
                </div>
            </div>
                        <!-- Card 6 -->
                        <div class="bg-[#CBE0F0] rounded-lg shadow-md overflow-hidden" data-aos="slide-up" data-aos-duration="1400">
                            <img class="h-[276px] w-full object-cover hover:filter grayscale filter-none transition-all duration-300" src="{{ asset('storage/images/services/6.webp') }}" alt="">
                            <div class="p-6 text-center">
{{--                             <div class="flex items-center mb-4">
                                <svg class="w-8 h-8 text-indigo-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                <h3 class="text-xl font-semibold text-gray-700">Actividades Recreativas</h3>
                            </div> --}}
                            <p class="text-gray-600 font-bold">Servicio de Enfermería</p>
                            </div>
                        </div>
                        <!-- Card 7 -->
                        <div class="bg-[#CBE0F0] rounded-lg shadow-md overflow-hidden" data-aos="slide-up" data-aos-duration="1800">
                        <img class="h-[276px] w-full object-cover hover:filter grayscale filter-none transition-all duration-300" src="{{ asset('storage/images/services/7.webp') }}" alt="">
                        <div class="p-6 text-center">
{{--                         <div class="flex items-center mb-4">
                            <svg class="w-8 h-8 text-indigo-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <h3 class="text-xl font-semibold text-gray-700">Actividades Recreativas</h3>
                        </div> --}}
                        <p class="text-gray-600 font-bold">Terapia física y rehabilitación</p>
                        </div>
                    </div>
                    <!-- Card 8 -->
                    <div class="bg-[#CBE0F0] rounded-lg shadow-md overflow-hidden" data-aos="slide-up" data-aos-duration="2200">
                        <img class="h-[276px] w-full object-cover hover:filter grayscale filter-none transition-all duration-300" src="{{ asset('storage/images/services/8.webp') }}" alt="">
                        <div class="p-6 text-center">
{{--                         <div class="flex items-center mb-4">
                            <svg class="w-8 h-8 text-indigo-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <h3 class="text-xl font-semibold text-gray-700">Actividades Recreativas</h3>
                        </div> --}}
                        <p class="text-gray-600 font-bold">Celebraciones de cumpleaños</p>
                        </div>
                    </div>
                    <!-- Card 9 -->
                    <div class="bg-[#CBE0F0] rounded-lg shadow-md overflow-hidden" data-aos="slide-up" data-aos-duration="1000">
                        <img class="h-[276px] w-full object-cover hover:filter grayscale filter-none transition-all duration-300" src="{{ asset('storage/images/services/9.webp') }}" alt="">
                        <div class="p-6 text-center">
{{--                         <div class="flex items-center mb-4">
                            <svg class="w-8 h-8 text-indigo-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <h3 class="text-xl font-semibold text-gray-700">Actividades Recreativas</h3>
                        </div> --}}
                        <p class="text-gray-600 font-bold">Asistencia psicológica y espiritual.</p>
                        </div>
                    </div>
          </div>
        </section>
{{-- Sección banner fixed--}}
<section class=" h-[500px] w-full overflow-hidden bg-fixed bg-cover bg-center" style=" background-image: url('{{ asset('storage/images/banner-servicios.webp') }}');">

    <!-- Contenido -->
    <div class="bg-gray-600/50 relative z-10 h-full flex items-center justify-center text-center">
        <div class="md:px-12 px-6 md:py-0 pt-20 pb-12 md:pb-0 text-gray-200 w-6/7">
        <h1 class="!font-semibold md:!text-[30px] !text-[20px] uppercase">Atendemos de lunes a domingo las 24 horas del día.</h1>
        <p class="my-10 !text-[18px]">
            Brindamos un servicio de calidad y eficiencia. No dudes en ponerte en contacto con nosotros.
        </p>
        <a href="#"  @click.prevent="
        activeLink = 'contacto';
        if (window.location.pathname !== '/') {
            window.location.href = '/#contact';
        } else {
            document.getElementById('contact').scrollIntoView({ behavior: 'smooth' });
        }
        ">
        <x-layouts.web.button text="CONTÁCTANOS" /></a>
    </div>

</section>
        <!-- About Us Section -->
        <section class="bg-white py-20">
            <div class="container mx-auto md:px-32 grid grid-cols-1 md:grid-cols-2 md:gap-16 gap-8 items-center">

                        <div class=" w-fit flex order-2 sm:order-1 space-x-2 sm:space-x-8 mx-auto sm:scale-110 scale-100">
                            <div>
                                <iframe class=" border-gray-400 shadow-lg rounded-b-lg object-cover" width="165" height="384" src="https://www.youtube.com/embed/87UFv_h-v3U" title="Casa De Reposo Villa Marina" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen ></iframe>
                            </div>
                        <div>
                            <iframe class=" border-gray-400 shadow-lg rounded-b-lg object-cover" width="165" height="384" src="https://www.youtube.com/embed/W7GUIQrHBaM" title="Casa De Reposo Villa Marina" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>

                <div data-aos="fade-out" class="md:w-5/6 w-full px-10 order-1 sm:order-2">
                    <h2 class="font-semibold text-gray-800 mb-6 uppercase">Ven y disfruta “casa de reposo Villa Marina”, un hogar para disfrutar en familia.</h2>
                    <p class=" text-gray-700 mb-8">Nuestras instalaciones están adecuadas para la comodidad y seguridad de nuestros residentes. Brindamos excelentes servicios personalizados y una programación de actividades, bien planeadas, que ayudan a que se sientan satisfechos. </p>
                </div>
            </div>
        </section>
</x-layouts.web.main>
