<x-layouts.web.main>

    <!-- Hero Section -->
    <section>
        <!-- Imágenes del carrusel (siempre en el fondo) -->
        <div class="fixed left-0 w-full h-full z-[-2]" x-data="{
                currentIndex: 0,
                images: [
                    '{{ asset('storage/images/iStock-1637139484-1920w.webp') }}',
                    '{{ asset('storage/images/iStock-138945251221920w.webp') }}',
                    '{{ asset('storage/images/iStock-83452875211920w.webp') }}'
                ],
                init() {
                    // Cambio automático de imagen
                    setInterval(() => {
                        this.currentIndex = (this.currentIndex + 1) % this.images.length;
                    }, 4000);
                }
            }" x-init="init()">
            <div class="absolute inset-0 opacity-100 transition-opacity duration-1000 ease-in-out">
                <img src="{{ asset('storage/images/iStock-1637139484-1920w.webp') }}" alt="Imagen del carrusel"
                    class="w-full h-full object-cover" loading="eager" />
                <div class="absolute inset-0 bg-stone-800 opacity-70"></div>
            </div>
            <template x-for="(image, index) in images" :key="index">
                <div class="absolute inset-0 transition-opacity duration-1000 ease-in-out"
                    :class="{ 'opacity-100': index === currentIndex, 'opacity-0': index !== currentIndex }">
                    <img :src="image" alt="Imagen del carrusel" class="w-full h-full object-cover" loading="eager" />
                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-stone-800 opacity-70"></div>
                </div>
            </template>
        </div>

        <!-- Contenido del carrusel (encima de las imágenes) -->

        <div class="h-[700px] w-full">


        </div>
        <div class="absolute top-1/2 md:top-3/5 transform -translate-y-1/2 max-w-[850px] md:px-14 px-8">
            <div data-aos="flip-left" >
                <h5 class="uppercase montserrat"><b>Villa Marina</b> | MUCHO MÁS QUE UN CENTRO GERIÁTRICO</h5>
                <span class="uppercase md:text-[45px] text-[30px]">El mejor ambiente de atención a personas mayores</span>
                <p class="mt-2 text-[15px]">¡Cuidamos con amor, calidad y calidez a tu ser más amado!</p>
                <a href="#contact">
                <x-layouts.web.button text="CONTÁCTANOS" />
            </a>
            </div>

        </div>

    </section>
    {{-- Banner --}}
    <div>
        <div class="absolute bg-blue-200 text-center w-7/8 left-1/2 transform -translate-x-1/2 bottom-[-155px] py-5 md:px-20 px-10
    ">
            <div data-aos="zoom-in">
                <span class="md:text-[30px] text-[15px] text-gray-600 italic">"Al final, lo que importa no son los años
                    de vida, sino la vida de los años".</span>
            </div>

        </div>
    </div>
        <!-- About Us Section -->
        <section class="bg-white pt-30 md:px-10 px-2">
            <div class="container mx-auto px-8 grid grid-cols-1 md:grid-cols-2 md:gap-16 gap-8 items-center">
                <div data-aos="fade-right" class="max-w-128 max-h-128 h-full overflow-hidden">
                    <img src="{{ asset('storage/images/iStock-1637139484-1920w.webp') }}" alt="Acerca de Nosotros"
                        class="scale-150 mr-32 rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out">
                </div>
                <div data-aos="fade-out" class="md:w-5/6 w-full">
                    <h2 class="font-semibold text-gray-800 mb-6 uppercase">Quiénes somos</h2>
                    <p class=" text-gray-700 mb-8">En Villa Marina, nos enorgullece ser mucho más que un centro geriátrico.<b> Somos una familia dedicada al bienestar y la felicidad de cada persona que forma parte de nuestro hogar.</b> Nuestro equipo está compuesto por profesionales comprometidos y dedicados que se esfuerzan por brindar un cuidado personalizado y de excelencia.</p>
                    <p  class="text-gray-700">Desde <b>atención médica especializada hasta actividades recreativas diseñadas</b> para estimular tanto el cuerpo como la mente, nos aseguramos de que cada residente reciba el apoyo y la atención que merece. </p>
                </div>
            </div>
        </section>
    <!-- Services Section -->
    <section class="md:py-16 py-8 bg-white md:px-20 px-10">
        <div class="container mx-auto ">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service Card 1 -->
                <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out" data-aos="fade-up">
                <img src="{{ asset('storage/images/1.webp') }}" alt="Servicio 1" class="w-full object-cover rounded-t-lg hover:filter grayscale filter-none transition-all duration-300">

                </div>
                <!-- Service Card 2 -->
                <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out" data-aos="fade-up" data-aos-duration="1400">
                    <img src="{{ asset('storage/images/2.webp') }}" alt="Servicio 2" class="w-full h-full object-cover rounded-t-lg hover:filter grayscale filter-none transition-all duration-300">

                </div>
                <!-- Service Card 3 -->
                <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out" data-aos="fade-up" data-aos-duration="1800">
                    <img src="{{ asset('storage/images/3.webp') }}" alt="Servicio 3" class="w-full h-full object-cover rounded-t-lg hover:filter grayscale filter-none transition-all duration-300">

                </div>
                <!-- Service Card 4 -->
                <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out" data-aos="fade-up">
                    <img src="{{ asset('storage/images/4.webp') }}" alt="Servicio 3" class="w-full h-full object-cover rounded-t-lg hover:filter grayscale filter-none transition-all duration-300">

                </div>
                <!-- Service Card 5 -->
                <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out" data-aos="fade-up" data-aos-duration="1400">
                    <img src="{{ asset('storage/images/5.png') }}" alt="Servicio 3" class="w-full h-full object-cover rounded-t-lg hover:filter grayscale filter-none transition-all duration-300">

                </div>
                <!-- Service Card 6 -->
                <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out" data-aos="fade-up" data-aos-duration="1800">
                    <img src="{{ asset('storage/images/6.jpg') }}" alt="Servicio 3" class="w-full h-full object-cover rounded-t-lg hover:filter grayscale filter-none transition-all duration-300">

                </div>
            </div>
        </div>
    </section>
    <section class=" h-[500px] w-full overflow-hidden bg-fixed bg-cover bg-center" style=" background-image: url('{{ asset('storage/images/iStock-83452875211920w.webp') }}');">

        <!-- Contenido -->
        <div data-aos="slide-right" class="md:w-1/2 w-2/3 md:ml-20 ml-10 relative z-10 h-full flex items-center justify-center text-gray-800 flex-col " style="background: rgba(196, 226, 71, .8)">
            <div class="md:px-12 px-6 md:py-0 pt-20 pb-12 md:pb-0">
            <h1 class="!bolder md:!text-[36px] !text-[20px]">NUESTRA EXPERIENCIA</h1>
            <p class="my-10 !text-[14px]">
                <b>Con más de 11 años de experiencia</b> cuidando a nuestros residentes, quienes son considerados parte de nuestra familia, nos comprometemos a ofrecer un cuidado amoroso, de calidad y lleno de calidez para tus seres queridos. Nuestra misión va más allá de ser simplemente un centro, aspiramos a ser un hogar donde cada residente se sienta acogido y amado.
            </p>
        </div>
        </div>
    </section>
  <!-- Mision Vision y Valores Section -->
  <section class="bg-white pt-16 md:px-40 px-10">

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div data-aos="flip-left" data-aos-once="true" class="bg-[#cbe0f0] rounded-lg shadow-md px-8  py-12 text-center">
            <div class="h-[75px] w-[75px] mx-auto transform hover:-translate-y-2 transition-transform duration-200"><x-icons.mission></x-icons.mission></div>

            <h3 class="font-semibold text-lg text-gray-800  uppercase mb-4">Misión</h3>
            <p class="text-gray-700">Nuestra misión es ofrecer servicios especializados a través de una atención integral y de alta calidad a todos nuestros residentes.</p>
        </div>
        <div data-aos="flip-left" data-aos-once="true" class="bg-[#cbe0f0] rounded-lg shadow-md px-8  py-12 text-center">
            <div class="h-[75px] w-[75px] mx-auto transform hover:-translate-y-2 transition-transform duration-200"><x-icons.valores></x-icons.valores></div>

            <h3 class="font-semibold text-lg text-gray-800  uppercase mb-4">Misión</h3>
            <ul class="text-gray-700">
                <li>Compromiso</li>
                <li>Confianza</li>
                <li>Vocación</li>
                <li>Responsabilidad</li>
                <li>Atención Integral</li>
            </ul>
        </div>
        <div data-aos="flip-left" data-aos-once="true" class="bg-[#cbe0f0] rounded-lg shadow-md px-8  py-12 text-center">
            <div class="h-[75px] w-[75px] mx-auto transform hover:-translate-y-2 transition-transform duration-200"><x-icons.vision></x-icons.vision></div>

            <h3 class="font-semibold text-lg text-gray-800  uppercase mb-4">Misión</h3>
            <p class="text-gray-700">Convertirnos en el mejor centro de reposo y asistencia del adulto mayor, siendo reconocidos por la calidad y calidez de nuestros servicios.</p>
        </div>
    </div>
</section>
    <!-- Contact Section -->
    <section class="pt-16 bg-white" id="contact">
        <div class=" w-full px-4 bg-[rgba(190,219,73,.14)]">
<div class="grid md:grid-cols-2 grid-cols-1 gap-12 md:p-[80px] px-5 md:px-40 pt-16 text-gray-800 ">
    <div>
        <h2 class="!text-[32px] font-semibold text-left uppercase">Envíenos un mensaje</h2>
        <p class="mb-12 text-gray-500 ">Le responderemos a la brevedad.</p>
        <form class="max-w-lg mx-auto" >
            <div class="flex space-x-6">
            <div class="relative z-0 mb-6 w-full group">
                <input type="text" name="floating_name" id="floating_name"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-primary-500 peer"
                    placeholder=" " required />
                <label for="floating_name"
                    class="absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nombre</label>
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <input type="text" name="floating_lastname" id="floating_lastname"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-primary-500 peer"
                    placeholder=" " required />
                <label for="floating_lastname"
                    class="absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Apellidos</label>
            </div>
            </div>
            <div class="flex space-x-6">
            <div class="relative z-0 mb-6 w-full group">
                <input type="email" name="floating_email" id="floating_email"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-primary-500 peer"
                    placeholder=" " required />
                <label for="floating_email"
                    class="absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Correo
                    Electrónico</label>
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <input type="text" name="floating_phone" id="floating_phone"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-primary-500 peer"
                    placeholder=" " required />
                <label for="floating_phone"
                    class="absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Teléfono</label>
            </div>
        </div>
            <div class="relative z-0 mb-6 w-full group">
                <textarea name="floating_message" id="floating_message" rows="5"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-primary-500 peer"
                    placeholder=" " required></textarea>
                <label for="floating_message"
                    class="absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Mensaje</label>
            </div>

            <div class="flex items-center justify-between">
                <button
                    class="bg-primary-500 hover:bg-primary-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-300 ease-in-out"
                    type="submit">
                    Enviar
                </button>
            </div>
        </form>
    </div>
    <div class="h-[400px] md:h-full">
        <div id="mi_mapa" class="my-4 w-full h-[85%] border border-gris-50 shadow rounded-[5px] z-0">

        </div>
    </div>
</div>
        </div>
    </section>

</x-layouts.web.main>
