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
//wizard
$('#select1').on('change', function () {
    if ($(this).val() == "SDG (Agenda 2030)") {
        $('#etapa1').hide();
        $('#etapa2').show();
        $('#etapa3').hide();
        $('#etapa4').hide();

    }
});
$('#select2').on('change', function () {
    if ($(this).val() == "Erradicação da pobreza") {
        $('#etapa1').hide();
        $('#etapa2').hide();
        $('#etapa3').show();
        $('#etapa4').hide(); 
    }
});
$('#btEtapa3').on('click', function () {
    $('#etapa1').hide();
    $('#etapa2').hide();
    $('#etapa3').hide();
    $('#etapa4').show();
});
$('.bc1').click(function(){
   $('#etapa1').show();
   $('#etapa2').hide();
   $('#etapa3').hide();
   $('#etapa4').hide();
   $('#select1, #select2').val('Opciones');
})
$('.bc2').click(function(){
   $('#etapa1').hide();
   $('#etapa2').show();
   $('#etapa3').hide();
   $('#etapa4').hide();
   $('#select1, #select2').val('Opciones');
})
$('.bc3').click(function(){
   $('#etapa1').hide();
   $('#etapa2').hide();
   $('#etapa3').show();
   $('#etapa4').hide();
})
//preprint
$('.disclaimerTransparente').click(function(){
  $(this).parent().find(".fa-angle-down").toggleClass("fa-angle-up");
  $('#disclaimer').toggleClass("disclaimer");
})

$('.icon-info').click(function(){
    $('#info-box').toggleClass('icon-info-active');
    $('#info-closed').toggle();
})
$('#close-info').click(function(){
    $('#info-box').toggleClass('icon-info-active');
    $('#info-closed').toggle();
})
$('#info-closed').click(function(){
    $('#info-box').toggleClass('icon-info-active');
    $('#info-closed').toggle();
})