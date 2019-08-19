// icon Accordion
$('.collapse').on('shown.bs.collapse', function() {
    $(this).parent().find(".fa-angle-down").removeClass("fa-angle-down").addClass("fa-angle-up");
}).on('hidden.bs.collapse', function() {
    $(this).parent().find(".fa-angle-up").removeClass("fa-angle-up").addClass("fa-angle-down");
});

var items = $('#filterEsq');
function open() {
    $(items).removeClass('close').addClass('open');
}
function close() {
    $(items).removeClass('open').addClass('close');
}
$('#btnFiltraM').click(function(event) {
    if (items.hasClass('open')) {
        close();
        console.log('fechado');
    } else {
        open();
        console.log('aberto')
    }
});

/*Ativar Resumo*/
$('#customSwitches').click(function() {
    $('.resumo').toggleClass('collapse');
});

// Scroll totop button
var toTop = $('#to-top');
// $( window ).on( "load", function() {
//     toTop.css({bottom: '-100px'});
// });
$(window).scroll(function() {
    if ($(this).scrollTop() > 1) {
        toTop.css({
            bottom: '11px'
        });
    } else {
        toTop.css({
            bottom: '-100px'
        });
    }
});
toTop.click(function() {
    $('html, body').animate({
        scrollTop: '0px'
    }, 800);
    return false;
});

// scrool botao filtro
var btFiltro = $('#btnFiltroD');
$(window).scroll(function() {
    if ($(this).scrollTop() > 450) {
        btFiltro.css({
            'width': '100%'
        });
    } else {
        btFiltro.css({
            'width': 'auto'
        });
    }
});