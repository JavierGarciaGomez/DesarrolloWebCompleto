$(function () {
    'use strict';

    // 239

    $('.nuestros-servicios div:first').show();
    $('.servicios nav a:first').addClass('activo');

    // 240
    $('.servicios nav a').on('click', mostrarTabs);

    function mostrarTabs() {
        $('.nuestros-servicios div').fadeOut();
        $('.servicios nav a').removeClass('activo');
        $(this).addClass('activo');
        var enlace = $(this).attr('href');
        $(enlace).fadeIn()
        // para evitar el comportamiendo de ir arriba
        return false;

    }
});