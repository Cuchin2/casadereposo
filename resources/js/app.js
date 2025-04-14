import AOS from 'aos';
import 'aos/dist/aos.css';
import L from 'leaflet';
import 'leaflet.fullscreen/Control.FullScreen.css';
import 'leaflet.fullscreen';
  // Función para inicializar AOS
function initializeAOS() {
    AOS.init({
        duration: 1000,
    });
}

  function initializeMap() {
    const mapDiv = document.getElementById('mi_mapa',);
    if (mapDiv) {
        let map = L.map('mi_mapa', {
            fullscreenControl: true,
            fullscreenControlOptions: {
                position: 'topleft',
                title: 'Pantalla completa',
                titleCancel: 'Salir de pantalla completa',
            }
        }).setView([-12.14357218843046, -76.9932422559785], 16);

        var myIcon = L.icon({
            iconUrl: 'storage/images/marker-icon.png',
            iconSize: [25, 41],
            popupAnchor: [0, -20],
        });
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> Villa Mariana casa de reposo',
        }).addTo(map);

        L.marker([-12.14357218843046, -76.9932422559785], { icon: myIcon })
            .addTo(map)
            .bindPopup("<b>Villa Mariana casa de reposo </b> <br>Jirón Juan Soto Bermeo 290. <br> Santiago de Surco, Lima.");
    }
}
// Escuchar el evento livewire:navigated
document.addEventListener('livewire:navigated', () => {
    initializeAOS(); // Reinicializar AOS
    initializeMap(); // Reinicializar el mapa si está presente
});
