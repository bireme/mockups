AOS.init();

var toTop = $('#to-top');
 $( window ).on( "load", function() {
   toTop.css({bottom: '-100px'});
 });
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
    }, 100);
    return false;
});

$(".btn-close").click(function() {
    $('.video100').trigger('pause');
});