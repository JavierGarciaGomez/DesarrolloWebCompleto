// 222

// Las dos opciones pueden ser utilizadas para determinar que todo el documento está cargado
console.log('**********************222. Esperando a que el documento esté listo**************************');
$(function () {

    // 222

    'use strict';
    console.log("listo1");

    // 223
    console.log('**********************223. Seleccionando contenido jQuery**************************');
    let jqHeader = $('header');
    let tradHeader = document.querySelector('header');
    console.log(jqHeader);
    console.log(tradHeader);
    console.log($('.logo'));
    console.log($('#navegacion'));
    console.log($('main article:last'));

    console.log('**********************224. Clonando jQuery**************************');
    $('main article:last').hide();
    $('main article:last').remove();

    var copia = $('main article:last').clone();
    // append, prepend, after, before
    // $('main article:last').append(copia);
    $('main article:last').after(copia);

    console.log('**********************225. Borrando y mostrando contenido**************************');
    $('div.logo img').on('click', function () {
        console.log('Has hecho click en el logo');
        $(this).animate({
            opacity: 0.5
        });
    });

    $('div.logo img').on('mouseenter', function () {
        $(this).css('background-color', 'red')
    });

    $('div.logo img').on('mouseleave', function () {
        $(this).css('background-color', 'transparent')
    });

    console.log('**********************226. Agregando quitando clases**************************');
    $('div.logo img').addClass('activo');

    $('.navegacion ul li a').on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass('activo');

    })

    console.log('**********************227. Manejando eventos jQuery**************************');
    // muchos eventos
    $('main').on({
        click: function () {
            console.log('has clicado');
        },
        mouseenter: function () {
            console.log('ha entrado el mouse');
        }
    })

    console.log('**********************228. Traversing**************************');
    console.log($('.navegacion').children().children());
    console.log($('article:first').parent());

    console.log('**********************229. Obteniendo el texto y actualizando**************************');
    $('main article:first h2').text('TEXTO CAMBIADO JQUERY')
    $('main article:first h2').html('TEXTO <a href="http://www.google.com">CAMBIADO </a> JQUERY')

    console.log('**********************230. Obteniendo atributos y actualizando**************************');
    $('.navegacion ul li:first a').attr('href', 'http:www.google.com');

    console.log('**********************231. Cambiando CSS**************************');
    $('div.logo img').css({
        'margin-top': '6rem',
        'margin-left': '6rem'
    });

    console.log('**********************232-233. Animaciones jQuery**************************');
    // .hide(), .show(), .toggle(), .fadeOut(), .fadeIn(), .slideUp, .slideDown, .slideToggle(), animation()
    $('.logo').animate({
        opacity: 0.7
    })

    console.log('**********************234. Cargar Ajax**************************');

    $('div.logo img').on('click', cargarAjax);

    function cargarAjax() {
        $.ajax('promociones.txt', {
            success: agregarContenido,
            type: 'GET',
            datatype: 'text'
        })
    }

    function agregarContenido(data, status, jqxhr) {

        $('.logo').after(`<h4>${data}</h4>`);
        console.log(status);
    }

    console.log('**********************235. Recorriendo array**************************');
    var proximosViajes = ['Londres', 'Valencia', 'París', 'Roma']
    $.each(proximosViajes, function (index, value) {
        console.log(index);
        console.log(value);
    })


});

// 222
$(document).ready(function () {
    console.log("listo2");
});