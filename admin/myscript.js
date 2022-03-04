$(function() {
resizeScreen()
function resizeScreen(){
    let timer;
    $(window).resize(function() {

        clearTimeout(timer);
        timer = setTimeout(function() {
            location.reload();
        }, 1000);

        // let windowWidth = $(window)[0].innerWidth;

    });
}
});


$(document).ready(function() {
    menuTogle();
    loadLinkMenu();
    loadLinkMenuBox();
    submenu();   
   
    function menuTogle(){

        let windowWhidth = $(window)[0].innerWidth;
        let menu  = $('.menu');
        let barra = $('.bar i');
        let bar   = $('.bar');
        let logo  = $('.logo');
        let close = $('.close');
        let content = $('.box-content');
        let closeI  = $('.close i');

        // se janela for menor ou igual a 768 aparece o menu responsivo mobile
        if (windowWhidth <= 768) {
           
            bar.click(function() {
                menu.attr('style', 'left: 0% !important');
                bar.hide();
                logo.show();
    
            });
    
            close.click(function() {
                menu.attr('style', 'left: -100% !important');
                bar.show();
    
            });
        }

        close.click(function(e) { 
            
            if (menu.hasClass('col-md-3')) {
    
                close.removeClass('col-md-2');
                close.addClass('col-md-12');
                closeI.removeClass('fa-times');
                closeI.addClass('fa-bars');
                menu.removeClass('col-md-3');
                menu.addClass('col-md-1');
                content.removeClass('col-md-9');
                content.addClass('col-md-11');
                $('.text-menu').hide();
                logo.attr('style', 'display:none !important');
    
            } else {
                closeI.removeClass('fa-bars');
                closeI.addClass('fa-times');
    
                close.removeClass('col-md-12');
                close.addClass('col-md-2');
                menu.removeClass('col-md-1');
                menu.addClass('col-md-3');
                content.removeClass('col-md-11');
                content.addClass('col-md-9');
                $('.text-menu').show('slow');
                logo.attr('style', 'display:inline !important');
    
            }
    
        });
    }//menuTogle

    // function submenu(){
    //     let linkMEnu = $('.link-menu a');
    //     let submenu = $('.submenu');
  
    //     linkMEnu.hover(function () {
    //         if (submenu.attr("style") == "display:none;") {
    //             submenu.attr("style","display:inline-block;");
    //            
    //         }else{
    //            submenu.attr("style","display:none;");
    //           
    //         }
    //     });
    // }
    // carregando links do menu lateral
    function loadLinkMenu(){
        $('.link-menu a').click(function(){
            let href = $(this).attr('href');
           
            $.ajax({
                'url':'../'+href,
                'success':function(data){
                    $('.loadPG').html(data).fadeIn('slow');
                    $('#breadcrumb-item-active').html(href).fadeIn('slow');
                }
            });

            return false;
        });
    } 
    // carregando links da pagina inicial na divi .boxescontent
    function loadLinkMenuBox(){
        $('.link-menu-box a').click(function(){
            let href = $(this).attr('href');
            
            $.ajax({
                'url':'../'+href,
                'success':function(data){
                    $('.loadPG').html(data).fadeIn('slow');
                    $('#breadcrumb-item-active').html(href).fadeIn('slow');
                }
            });

            return false;
        });
    }

    
});