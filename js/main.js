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

        //bar
    // menu fijo
var windowHeight = $(window).height();
var barraAltura = $('.bar').innerHeight();


 
$(window).scroll(function(){
var scroll=$(window).scrollTop();
if(scroll>windowHeight){
$('.bar').addClass('fixed');
$('body').css({'margin-top': barraAltura +'px'})//pa que no de salto
}else{
$('.bar').removeClass('fixed');
$('body').css({'margin-top':'0px'});
}

});

//menu responsive

$('.menu-movil') .on('click',function(){
$(".navegacion-principal").slideToggle();//cuando esteen slide dog ejecutara down y asi.



    });// DOM CONTENT LOADED


    $('body.signin .principal-navegation a:contains("Sign In")').addClass('active');
    $('body.profileS .principal-navegation a:contains("My profile")').addClass('active');
    $('body.profileF .principal-navegation a:contains("My profile")').addClass('active');
    $('body.myfavorits .principal-navegation a:contains("Favorites")').addClass('active');
    $('body.aboutus .principal-navegation a:contains("About us")').addClass('active');
    $('body.faq .principal-navegation a:contains("FAQ")').addClass('active');
    $('body.searchF .principal-navegation a:contains("Search match")').addClass('active'); //No funciona
    $('body.searchS .principal-navegation a:contains("Search match")').addClass('active'); //No funciona
    $('body.seeProfileS .principal-navegation a:contains("Search match")').addClass('active'); //No funciona
    $('body.seeProfileF .principal-navegation a:contains("Search match")').addClass('active'); //No funciona
})
