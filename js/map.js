(function() {
    "use strict"
    document.addEventListener('DOMContentLoaded',function(){
        

//map
var map = L.map('map').setView([ 57.012301, 9.991064], 16);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([57.012301, 9.991064]).addTo(map)
    .bindPopup('HomeStay is supervised from here!')
    .openPopup();

});// DOM CONTENT LOADED
})();