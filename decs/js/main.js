// Scroll totop button
var toTop = $('#to-top');
toTop.click(function () {
	$('html, body').animate({scrollTop: '0px'}, 800);
	return false;
});

// Contador Banner
const tempo_intervalo = 3; //ms -> define a velocidade da animação
const tempo = 2000; //ms -> define o tempo total da animaçao

$('.counter-up').each(function() {  
	let count_to = parseInt($(this).data('countTo'));
	let intervalos = tempo / tempo_intervalo; //quantos passos de animação tem
	let incremento = count_to / intervalos; //quanto cada contador deve aumentar
	let valor = 0;
	let el = $(this);

	let timer = setInterval(function() {
	   if (valor >= count_to){ //se já contou tudo tem de parar o timer
	   	valor = count_to;
	   	clearInterval(timer);
	   }
	   let texto = valor.toFixed(0).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
	   el.text(texto);
	   valor += incremento;      
	}, tempo_intervalo);
});

/*scrool tabs */
$('.navLinkList').click(function(){
	$('html, body').animate({scrollTop: '250px'}, 800);
})

//tootip
$(function () {
	$('[data-toggle="tooltip"]').tooltip()
})

//Buscar
$("#fieldSearch").click(function(){
	$("#navConsultaAvancada").show(200);
	setTimeout(function () {
		$("#navConsultaAvancada").hide(200);
	}, 10000);
});
$("#fieldSearch").focus(function(){
	$("#navConsultaAvancada").show(200);
});

/// Lista / Hierarquico

$('#btnHierarquico').click(function(){
	$('#hierarquico').show();
	$('#lista').hide();
	$('#btnHierarquico').attr('disabled','disabled');
	$('#btnLista').removeAttr('disabled');
})
$('#btnLista').click(function(){
	$('#lista').show();
	$('#hierarquico').hide();
	$('#btnLista').attr('disabled','disabled');
	$('#btnHierarquico').removeAttr('disabled');
})