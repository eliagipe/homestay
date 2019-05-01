(function() {
    "use strict";

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
});

$(function() {
    //Add class to menu

    $('body.signin .principal-navegation a:contains("Sign In")').addClass('active');
    $('body.profileS .principal-navegation a:contains("My profile")').addClass('active');
    $('body.searchS .principal-navegation a:contains("Search match")').addClass('active');
    $('body.profileF .principal-navegation a:contains("My profile")').addClass('active');
    $('body.searchF .principal-navegation a:contains("Search match")').addClass('active');
    $('body.myfavorits .principal-navegation a:contains("Favorites")').addClass('active');
    $('body.aboutus .principal-navegation a:contains("About us")').addClass('active');
    $('body.faq .principal-navegation a:contains("FAQ")').addClass('active');
})