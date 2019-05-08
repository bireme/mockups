// icon Accordion
$('.collapse').on('shown.bs.collapse', function(){
	$(this).parent().find(".fa-plus").removeClass("fa-plus").addClass("fa-minus");
}).on('hidden.bs.collapse', function(){
	$(this).parent().find(".fa-minus").removeClass("fa-minus").addClass("fa-plus");
});



//tootip
$(function () {
	$('[data-toggle="tooltip"]').tooltip()
})

/////////////////////////////////
/////////////////// jquery apenas de para exemplo 
/////////////////////////////////
$('.btnSearch1').click(function(){
	var valor = $('.numberP1').text();
	$('.numberP1').removeClass('d-none');
	$('.numberP5').removeClass('d-none').text(valor);
})
$('.btnSearch2').click(function(){
	var valor = $('.numberP2a').text();
	$('.numberP2').removeClass('d-none');
	$('.numberP5').removeClass('d-none');
	$('.numberP5').removeClass('d-none').text(valor);
})
$('.btnSearch3').click(function(){
	var valor = $('.numberP3a').text();
	$('.numberP3').removeClass('d-none');
	$('.numberP5').removeClass('d-none');
	$('.numberP5').removeClass('d-none').text(valor);
})
$('.btnSearch4').click(function(){
	var valor = $('.numberP4a').text();
	$('.numberP4').removeClass('d-none');
	$('.numberP5').removeClass('d-none');
	$('.numberP5').removeClass('d-none').text(valor);

})
$('#btnModal3').click(function(){
	var valor = $('.numberP1').text();
	$('.numberP1').removeClass('d-none');
	$('.numberP5').removeClass('d-none').text(valor);
})
