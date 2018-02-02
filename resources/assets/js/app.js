
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


//window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Vue.component('example-component', require('./components/ExampleComponent.vue'));

//const app = new Vue({
 //   el: '#app'
//});

var $btn = $('#js-iconMenu'),
    $menu = $('.js-toggleEffect');

function menuToggle(e) {
    $menu.slideToggle();
    $(this).toggleClass('on');
    e.preventDefault();
}

$btn.on('click', menuToggle);



$(document).ready(function(){
    CountBierre();
    CountGrabe();
    CountMusique();
    CountOllie();
    $("#headerMrS > div:gt(0)").hide();

    var carouselInt = '';

    var carouDiv = function(){
        carouselInt = setInterval(function() {
            $('#headerMrS > div:first')
                .fadeOut(500)
                .next()
                .fadeIn(500)
                .end()
                .appendTo('#headerMrS');
        },  3000);
    };

    $(carouDiv());//Initialise the carousel function

    $("#headerMrS").hover(function(){//Stop the carousel on hover
        clearInterval(carouselInt);
    },function(){
        carouDiv();
    });



    //Direction Arrow links
    $(".button-sales").click(function(){
        $(".header").fadeOut(800);
        $(".sales").animate({opacity:"show"},800);
    });
    $(".button-modern").click(function(){
        $(".header").fadeOut(800);
        $(".modern").animate({opacity:"show"},800);
    });
    $(".button-antique").click(function(){
        $(".header").fadeOut(800);
        $(".antique").animate({opacity:"show"},800);
    });
});



$(document).ready(function (){
    $("#spot_menue").click(function (){
        $('html, body').animate({
            scrollTop: $("#spot").offset().top
        }, 1000);
    });
    $("#activite_menue").click(function (){
        $('html, body').animate({
            scrollTop: $("#activite").offset().top
        }, 1000);
    });
});


$(document).ready(function() {
    $.simpleWeather({
        location: 'Bessieres, FR',
        woeid: '',
        unit: 'c',
        success: function(weather) {
            html = '<h2><i class="icon-'+weather.code+'"></i> '+weather.temp+'&deg;'+weather.units.temp+'</h2>';
            html += '<ul class="weather_custome"><li>'+weather.city+', '+weather.region+'</li>';
            html += '<li>'+weather.wind.direction+' '+weather.wind.speed+' '+weather.units.speed+'</li></ul>';

            $("#weather").html(html);
        },
        error: function(error) {
            $("#weather").html('<p>'+error+'</p>');
        }
    });
});

$(document).ready(function () {
    $("#spot_menue").click(function (){
        removeAllClass();
       $("#spot_menue").toggleClass("active", true);
    });
    $("#activite_menue").click(function (){
        removeAllClass();
        $("#activite_menue").toggleClass("active", true);
    });
    $("#restauration_menue").click(function (){
        removeAllClass();
        $("#restauration_menue").toggleClass("active", true);
    });
    $("#event_menue").click(function (){
        removeAllClass();
        $("#event_menue").toggleClass("active", true);
    });
    $("#tarif_menue").click(function (){
        removeAllClass();
        $("#activite_menue").toggleClass("active", true);
    });
    $("#tarif_menue").click(function (){
        removeAllClass();
        $("#activite_menue").toggleClass("active", true);
    });
    $("#galerie_menue").click(function (){
        removeAllClass();
        $("#galerie_menue").toggleClass("active", true);
    });
    $("#contact_menue").click(function (){
        removeAllClass();
        $("#contact_menue").toggleClass("active", true);
    });
});


function removeAllClass(){
    $("#spot_menue").toggleClass("active", false);
    $("#activite_menue").toggleClass("active", false);
    $("#restauration_menue").toggleClass("active", false);
    $("#event_menue").toggleClass("active", false);
    $("#tarif_menue").toggleClass("active", false);
    $("#galerie_menue").toggleClass("active", false);
    $("#contact_menue").toggleClass("active", false);
}


function CountGrabe() {
    var n = 555; // Nombre final du compteur
    var cpt = 0; // Initialisation du compteur
    var duree = 5; // Durée en seconde pendant laquel le compteur ira de 0 à 15
    var delta = Math.ceil((duree * 1000) / n); // On calcule l'intervalle de temps entre chaque rafraîchissement du compteur (durée mise en milliseconde)
    var node =  document.getElementById("compteur_grabe"); // On récupère notre noeud où sera rafraîchi la valeur du compteur

    function countdown() {
        node.innerHTML = ++cpt;
        if( cpt < n ) { // Si on est pas arrivé à la valeur finale, on relance notre compteur une nouvelle fois
            setTimeout(countdown, delta);
        }
    }

    setTimeout(countdown, delta);
}

function CountMusique() {
    var n = 1765; // Nombre final du compteur
    var cpt = 0; // Initialisation du compteur
    var duree = 5; // Durée en seconde pendant laquel le compteur ira de 0 à 15
    var delta = Math.ceil((duree * 1000) / n); // On calcule l'intervalle de temps entre chaque rafraîchissement du compteur (durée mise en milliseconde)
    var node =  document.getElementById("compteur_musique"); // On récupère notre noeud où sera rafraîchi la valeur du compteur

    function countdown() {
        node.innerHTML = ++cpt;
        if( cpt < n ) { // Si on est pas arrivé à la valeur finale, on relance notre compteur une nouvelle fois
            setTimeout(countdown, delta);
        }
    }

    setTimeout(countdown, delta);
}

function CountOllie() {

    var n = 976; // Nombre final du compteur
    var cpt = 0; // Initialisation du compteur
    var duree = 5; // Durée en seconde pendant laquel le compteur ira de 0 à 15
    var delta = Math.ceil((duree * 1000) / n); // On calcule l'intervalle de temps entre chaque rafraîchissement du compteur (durée mise en milliseconde)
    var node =  document.getElementById("compteur_ollie"); // On récupère notre noeud où sera rafraîchi la valeur du compteur

    function countdown() {
        node.innerHTML = ++cpt;
        if( cpt < n ) { // Si on est pas arrivé à la valeur finale, on relance notre compteur une nouvelle fois
            setTimeout(countdown, delta);
        }
    }

    setTimeout(countdown, delta);

}

function CountBierre() {

    var n = 325; // Nombre final du compteur
    var cpt = 0; // Initialisation du compteur
    var duree = 5; // Durée en seconde pendant laquel le compteur ira de 0 à 15
    var delta = Math.ceil((duree * 1000) / n); // On calcule l'intervalle de temps entre chaque rafraîchissement du compteur (durée mise en milliseconde)
    var node =  document.getElementById("compteur_bierre"); // On récupère notre noeud où sera rafraîchi la valeur du compteur

    function countdown() {
        node.innerHTML = ++cpt;
        if( cpt < n ) { // Si on est pas arrivé à la valeur finale, on relance notre compteur une nouvelle fois
            setTimeout(countdown, delta);
        }
    }

    setTimeout(countdown, delta);

}

