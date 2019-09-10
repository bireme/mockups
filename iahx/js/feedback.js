$('#iconeFeedback').click(function(){
	$('#boxFeedback').toggleClass("boxFeedback");
})
$('#feedbackFechar').click(function(){
	$('#boxFeedback').removeClass("boxFeedback");
})

/*Add*/
$('.star1').mouseenter(function(){
	$(this).addClass("fas");
})
$('.star2').mouseenter(function(){
	$(this).addClass("fas");
	$(this).siblings(".star1").addClass("fas");
})
$('.star3').mouseenter(function(){
	$(this).addClass("fas");
	$(this).siblings(".star1, .star2").addClass("fas");
})
$('.star4').mouseenter(function(){
	$(this).addClass("fas");
	$(this).siblings(".star1, .star2, .star3").addClass("fas");
})
$('.star5').mouseenter(function(){
	$(this).addClass("fas");
	$(this).siblings(".star1, .star2, .star3, .star4").addClass("fas");
})
/*Remove*/
$('.star1').mouseleave(function(){
	$('.star1').removeClass("fas", "fa-star");
})
$('.star2').mouseleave(function(){
	$('.star1, .star2').removeClass("fas", "fa-star");
})
$('.star3').mouseleave(function(){
	$('.star1, .star2, .star3').removeClass("fas", "fa-star");
})
$('.star4').mouseleave(function(){
	$('.star1, .star2, .star3, .star4').removeClass("fas", "fa-star");
})
$('.star5').mouseleave(function(){
	$('.star1, .star2, .star3, .star4, .star5').removeClass("fas", "fa-star");
})