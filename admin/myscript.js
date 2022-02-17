$(function() {
    let timer;
    $(window).resize(function() {

        clearTimeout(timer);
        timer = setTimeout(function() {
            location.href = "http://localhost/sistema_de_altera-o_de_data_pagamento/admin/";
        }, 1000);

        // let windowWidth = $(window)[0].innerWidth;

    });
});


$(document).ready(function() {
    let windowWhidth = $(window)[0].innerWidth;


    if (windowWhidth <= 768) {
        let menu = $('.menu');
        let barra = $('.bar i');
        $('.bar').click(function() {
            menu.attr('style', 'left: 0% !important');
            $('.bar').hide();
            $('.logo').show();

        });

        $('.close').click(function() {
            menu.attr('style', 'left: -100% !important');
            $('.bar').show();

        });
    }
    $('.close').click(function(e) {

        let menu = $('.menu');
        let content = $('.box-content');
        let close = $('.close');

        if (menu.hasClass('col-md-3')) {

            close.removeClass('col-md-2');
            close.addClass('col-md-12');
            $('.close i').removeClass('fa-times');
            $('.close i').addClass('fa-bars');
            menu.removeClass('col-md-3');
            menu.addClass('col-md-1');
            content.removeClass('col-md-9');
            content.addClass('col-md-11');
            $('.text-menu').hide();
            $('.logo').attr('style', 'display:none !important');

        } else {
            $('.close i').removeClass('fa-bars');
            $('.close i').addClass('fa-times');

            close.removeClass('col-md-12');
            close.addClass('col-md-2');
            menu.removeClass('col-md-1');
            menu.addClass('col-md-3');
            content.removeClass('col-md-11');
            content.addClass('col-md-9');
            $('.text-menu').show('slow');
            $('.logo').attr('style', 'display:inline !important');

        }

    });
});