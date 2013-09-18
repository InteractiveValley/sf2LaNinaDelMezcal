/* Author: Lyudmil Shoshorov */

// Modernizr.load loading the right scripts only if you need them
Modernizr.load([
    {
        // Let's see if we need to load selectivizr
        test: Modernizr.borderradius,
        // Modernizr.load loads selectivizr and Respond.js for IE6-8
        nope: ['libs/selectivizr-min.js']
    }
]);


function inicializarCategorias(){
    $(".thumb").find(".overlay").css("opacity", 0);
    $(".thumb > a").hover(function() {
         $(this).find(".overlay").fadeTo("fast", 0.7).css("z-index", 20); // This sets the opacity to 100% on hover
    }, function() {
            $(this).find(".overlay").fadeTo("fast", 0.0).css("z-index", 0); // This sets the opacity back to 60% on mouseout
    });
    
    $.iniciarlizarGalerias();
}

function inicializarRecomendaciones(){
    $(".thumb-2").find(".overlay").css("opacity", 0);
    $(".thumb-2 > a").hover(function() {
         $(this).find(".overlay").fadeTo("fast", 0.7).css("z-index", 20); // This sets the opacity to 100% on hover
    }, function() {
            $(this).find(".overlay").fadeTo("fast", 0.0).css("z-index", 0); // This sets the opacity back to 60% on mouseout
    });
}

function contenedorCategorias(data) {
    $("#thumbs-contenedor").fadeOut("fast",function(){
        $("#thumbs-contenedor").html(data).fadeIn("fast",inicializarCategorias);
    });
}

function contenedorRecomendaciones(data) {
    $("#thumbs-2-contenedor").fadeOut("fast",function(){
        $("#thumbs-2-contenedor").html(data).fadeIn("fast",inicializarRecomendaciones);
    });
}

function contenedorPlatillos(data) {
     $("#lista-menu-contenedor").fadeOut("fast",function(){
        $("#lista-menu-contenedor").html(data).fadeIn("fast");
    });
}

function paginaCategorias(urlPagina,pagina) {
    loadSeccionAjax(urlPagina,pagina,"#categorias-load",contenedorCategorias);
}


function paginaPlatillos(urlPagina,pagina) {
    loadSeccionAjax(urlPagina,pagina,"#platillos-load",contenedorPlatillos);
}

function paginaRecomendaciones(urlPagina,pagina) {
    loadSeccionAjax(urlPagina,pagina,"#recomendaciones-load",contenedorRecomendaciones);
}

function loadSeccionAjax(urlPagina,pagina,ImgLoader,callbackFunction)
{
    $(ImgLoader).show("fast",function(){
        $.ajax({
            url: urlPagina,
            data: { 'page': pagina },
            type: 'get',
        }).done(callbackFunction);
    });
}

function imagenShow(imagen,titulo,descripcion){
       $.prettyPhoto.open(imagen,titulo,descripcion);
}



$(function() {
    //$.scrollTo( 0 );
    // Scroll to Function
    function scrollingTo(id) {
        $('html,body').animate({scrollTop: ($(id).offset().top - 200)}, 500, 'easeOutCubic');
    }
    
    $('nav a[rel="scroll"]').on('click', function() {
        var target = $(this).attr('href');
        scrollingTo(target);

        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
        }
        else {
            $(this).parents().siblings().find('a').removeClass('active');
            $(this).addClass('active');
        }
        return false
    });
   

});