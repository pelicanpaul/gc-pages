

jQuery(document).ready(function($) {

    // just a fancy way to scroll to a place on the page
    $('.some-class').on('click', function(e){
        e.preventDefault();
        var theSectionId = $(this).attr('href');
        var theSection = $(theSectionId);

        $('html, body').stop().animate({
            scrollTop: theSection.offset().top - 70
        }, 900, 'easeInOutExpo');


    });


});
