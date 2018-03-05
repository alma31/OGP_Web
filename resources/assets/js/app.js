
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
    init();
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
            //html += '<ul class="weather_custome"><li>'+weather.city+', '+weather.region+'</li>';
            ///html += '<li>'+weather.wind.direction+' '+weather.wind.speed+' '+weather.units.speed+'</li></ul>';

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

/*
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
}*/




function init() {

    $.ajax({
        url: "https://graph.facebook.com/oauth/access_token?client_id=1982944171960624&client_secret=047ad1f983b9c8038c7efd5e243abe94&grant_type=client_credentials",
        type: 'POST',
        success : function(code_html, statut){
            var token = code_html['access_token'];
            getEventFacebook(token);
        },

        error : function(resultat, statut, erreur){

        },

        complete : function(resultat, statut){
        }
    });


}



function getEventFacebook(token) {
    FB.api(
        '/302706460080999/events',
        'GET',
        {
            access_token : token,
            "fields":"timezone,cover,id,end_time,name,place,type,start_time,owner,event_times,description"},
        function(response) {
            //console.log(response.data);
            for(var i= 0; i < response.data.length; i++)
            {
               var listEvent = response.data[i];
               console.log(listEvent);
               var date = listEvent.start_time;

                $("#row_event_responsive").append( "<div class='container-event'><div class='card-media'><div class='card-media-object-container'><div class='card-media-object' style='background-image:url("+listEvent.cover.source+");'></div><span class='card-media-object-tag subtle'>"+listEvent.name+"</span></div><div class='card-media-body'><div class='card-media-body-top'><span class='subtle'>"+listEvent.start_time+"</span><div class='card-media-body-top-icons u-float-right'><svg fill='#888888' height='16' viewBox='0 0 24 24' width='16' xmlns='http://www.w3.org/2000/svg'><path d='M0 0h24v24H0z' fill='none'/><path d='M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z'/></svg><svg fill='#888888' height='16' viewBox='0 0 24 24' width='16' xmlns='http://www.w3.org/2000/svg'><path d='M17 3H7c-1.1 0-1.99.9-1.99 2L5 21l7-3 7 3V5c0-1.1-.9-2-2-2z'/><path d='M0 0h24v24H0z' fill='none'/></svg></div></div><span class='card-media-body-heading'>"+truncate_reponsive(listEvent.description)+"</span><div class='card-media-body-supporting-bottom'<span class='card-media-body-supporting-bottom-text subtle'>"+listEvent.place.name+", "+listEvent.place.location.city+"</span></div><div class='card-media-body-supporting-bottom card-media-body-supporting-bottom-reveal'><a href='https://www.facebook.com/events/"+listEvent.id+"' class='card-media-body-supporting-bottom-text card-media-link u-float-right'>PARTICIPER A L'ÉVÉNEMENT</a></div></div></div></div>");
                $("#row_event").append( "<div class='container-event'><div class='card-media'><div class='card-media-object-container'><div class='card-media-object' style='background-image:url("+listEvent.cover.source+");'></div><span class='card-media-object-tag subtle'>"+listEvent.name+"</span></div><div class='card-media-body'><div class='card-media-body-top'><span class='subtle'>"+listEvent.start_time+"</span><div class='card-media-body-top-icons u-float-right'><svg fill='#888888' height='16' viewBox='0 0 24 24' width='16' xmlns='http://www.w3.org/2000/svg'><path d='M0 0h24v24H0z' fill='none'/><path d='M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z'/></svg><svg fill='#888888' height='16' viewBox='0 0 24 24' width='16' xmlns='http://www.w3.org/2000/svg'><path d='M17 3H7c-1.1 0-1.99.9-1.99 2L5 21l7-3 7 3V5c0-1.1-.9-2-2-2z'/><path d='M0 0h24v24H0z' fill='none'/></svg></div></div><span class='card-media-body-heading'>"+truncate(listEvent.description)+"</span><div class='card-media-body-supporting-bottom'<span class='card-media-body-supporting-bottom-text subtle'>"+listEvent.place.name+", "+listEvent.place.location.city+"</span></div><div class='card-media-body-supporting-bottom card-media-body-supporting-bottom-reveal'><a href='https://www.facebook.com/events/"+listEvent.id+"' class='card-media-body-supporting-bottom-text card-media-link u-float-right'>PARTICIPER A L'ÉVÉNEMENT</a></div></div></div></div>");
            }
        }
    );
}

function truncate(string){
    if (string.length > 300)
        return string.substring(0,300)+'...';
    else
        return string;
};

function truncate_reponsive(string){
    if (string.length > 100)
        return string.substring(0,100)+'...';
    else
        return string;
};

$(document).ready(function () {

    var videoPlayer= document.getElementById('video');

    videoPlayer.addEventListener('ended', function(){
        this.pause();

        var videos = [
            "OriginalGreenPark",
            "Vidéopresentation",
        ], videos = videos[Math.floor(Math.random() * videos.length)];

        this.src = "video/" + videos + ".mp4";

    }, false);

});




