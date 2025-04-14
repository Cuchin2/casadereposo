
<!-- Footer -->
<footer class="bg-[#454545] text-white md:p-12 p-4" x-data="{ openAbout: false, openLinks: false, openServices: false, openContact: false }">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 md:gap-12 gap-6">

            <!-- Columna 1: Información de la empresa -->
            <div>

                <div class="mx-auto w-fit md:w-full">
                    <img src="{{ asset('storage/images/image00001-528w.webp') }}" alt="Villa Marina Logo" class="h-14 bg-white">

                    <div class="mt-4 flex space-x-3">
                        <a href="#" class="transform hover:-translate-y-2 transition-transform duration-200"><x-icons.facebook class="h-10 p-0.5"/></a>
                        <a href="#" class="transform hover:-translate-y-2 transition-transform duration-200"><x-icons.instagram class="h-10 p-1"/></i></a>
                        <a href="https://www.google.com/maps/place/Villa+Marina+Casa+de+Reposo/@-12.1248243,-77.0654771,20678m/data=!3m2!1e3!4b1!4m6!3m5!1s0x9105b938fa7140f3:0x3e7f7a4dd18eacdb!8m2!3d-12.1248366!4d-76.9829018!16s%2Fg%2F11h23k4v5q?entry=ttu&g_ep=EgoyMDI1MDQwOS4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="transform hover:-translate-y-2 transition-transform duration-200"><x-icons.googlebusiness class="h-8.5 w-8.5 p-1 rounded-full bg-[#7babf7] my-1"/></i></a>
                        <a target="_blank" data-display-type="block" href="https://web.whatsapp.com/send?phone=51957742500&amp;text=Hola%2C%20quisiera%20m%C3%A1s%20informaci%C3%B3n" class="transform hover:-translate-y-2 transition-transform duration-200"><x-icons.whatsapp class="h-10 p-0.5"/></a>
                    </div>
                </div>
            </div>

            <!-- Columna 2: Enlaces rápidos -->
            <div>
                <div class="mx-auto w-full " >
                    <h4 class="font-bold mb-4">UBICACIÓN</h4>
                    <p class="!text-[12px]">
                        Jirón Juan Soto Bermeo 290.
                        Santiago de Surco, Lima.

                    </p>

            </div>
            </div>

            <!-- Columna 3: Servicios -->
            <div>

                <div>
                    <h4 class="font-bold !text-lg mb-4">CONTACTO</h4>
                    <ul>
                        <li class=""><a href="#" class="hover:text-gray-300 text-[12px]">villamarina.casa_dereposo@hotmail.com</a></li>
                        <li class=""><a href="#" class="hover:text-gray-300 text-[12px]">informes@villamarinacasadereposo.com</a></li>
                        <li class=""><a href="#" class="hover:text-gray-300 text-[12px]">gerencia@villamarinacasadereposo.com</a></li>
                        <li class=""><a href="#" class="hover:text-gray-300 text-[12px]">administracion@villamarinacasadereposo.com</a></li>
                        <li class=""><a href="#" class="hover:text-gray-300 text-[12px]">01 220 8876 //  957 742 500</a></li>
                    </ul>
                </div>
            </div>

            <!-- Columna 4: Contacto -->
            <div class="pl-0 md:pl-10">

                <div>
                    <h4 class="font-bold !text-lg mb-4">Horario</h4>
                    <p class="!text-[12px] mb-2">Abierto las 24 horas.</p>
                </div>
            </div>
        </div>


    </div>
</footer>
        <!-- Derechos de autor -->

        <section class="md:py-8 py-4 text-white bg-[#1f1f1f]">
            <div class="container mx-auto px-4 text-center ">
                <p>&copy; {{ now()->format('Y') }} Villa Marina Casa de Reposo. Todos los derechos reservados.</p>
            </div>
        </section>
