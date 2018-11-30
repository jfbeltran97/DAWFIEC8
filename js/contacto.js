
var map = L.map('mapa').setView([-2.905, -79.81], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([-2.911522, -79.815588]).addTo(map)
    .bindPopup('Sede Balao Calinauplio.SA')
    .openPopup();