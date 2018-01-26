
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

