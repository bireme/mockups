$('#smartwizard').smartWizard({
	
	justified: true,
	theme: 'dots',
	toolbarSettings: {
		showNextButton: false,
		showPreviousButton: false,
	},
	anchorSettings: {
		enableAllAnchors: true,
	},
});

$('#select1').on('change', function () {
	$('#smartwizard').smartWizard("goToStep", 1);
	var select1 = $("#select1 option:selected").text();
	$('#resp1').text(select1);
	$('#resp2, #resp3').text(""); // limpar questao 2 e 3
});
$('#select2').on('change', function () {
	$('#smartwizard').smartWizard("goToStep", 2);
	var select2 = $("#select2 option:selected").text();
	$('#resp2').text(select2);
	$('#resp3').text(""); // limpar questao 3
});
$('#step-3 .cartbt').on('click', function () {
	$('#smartwizard').smartWizard("goToStep", 3);
	var select3 = $(this).text();
	$('#resp3').text(select3);
});