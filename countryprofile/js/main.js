jQuery( ".nav-item" ).click(function() {
	jQuery(".nav-link").removeClass('active');
	jQuery(this).find(".nav-link").toggleClass('active');
});