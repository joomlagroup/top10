
jQuery.noConflict();
jQuery(document).ready(function($){

    var window_width = $( window ).width();
    var top_head = 90;
    if(window_width <= 768 ){
        top_head = 30;
    }

    var height_td_header_main =  $('.td-header-main-menu').height();
    $('.circle_link a[href*="#"]').on('click', function (e) {
        e.preventDefault();

        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top - top_head
        }, 500, 'linear');
    });
});