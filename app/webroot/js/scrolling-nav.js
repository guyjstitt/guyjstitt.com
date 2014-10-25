//jQuery to collapse the navbar on scroll
$(window).scroll(function() {

    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
    var intro = $('#intro');
    var introPosition = $('.intro').position();
    if( introPosition != undefined && $(this).scrollTop() > introPosition.top){
        $.ajax('/guyjstitt.com/app/webroot/ajax/about.html', {
            success: function(response) {
                $('#about').html(response).append();
            }
        }).done(function(){
            intro.removeClass('intro');
        });
    }
    var about = $('#about');
    var aboutPosition = $('.about').position();
    if(aboutPosition != undefined &&  $(this).scrollTop() > aboutPosition.top){
        $.ajax('/guyjstitt.com/app/webroot/ajax/portfolio.html', {
            success: function(response) {
                $('#services').html(response).append();
            }
        }).done(function(){
            about.removeClass('about');
        });
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
