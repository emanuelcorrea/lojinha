$(document).ready(function() {
    var speed = 6000;
    var run = setInterval('rotate()', speed);

    var item_width = $('.carousel-imagens li').outerWidth();
    var left_value = item_width * (-1);
    
    $('.carousel-imagens li:first').before($('.carousel-imagens li:last'));

    $('.carousel-imagens ul').css({'left' : left_value});

    $("#previous").click(function() {
        var left_intend = parseInt($('.carousel-imagens ul').css('left')) + item_width;

        $('.carousel-imagens ul').animate({'left':left_intend}, 200, function() {
            $('.carousel-imagens li:first').before($('.carousel-imagens li:last'));

            $('.carousel-imagens ul').css({'left': left_value});
        });

        clearInterval(run);
        run = setInterval('rotate()', speed);
    });

    $("#next").click(function() {
        var left_intend = parseInt($('.carousel-imagens ul').css('left')) - item_width;

        $('.carousel-imagens ul').animate({'left':left_intend}, 200, function() {
            $('.carousel-imagens li:last').after($('.carousel-imagens li:first'));

            $('.carousel-imagens ul').css({'left': left_value});
        });

        clearInterval(run);
        run = setInterval('rotate()', speed);
    });
    
    $('.carousel-imagens').hover(
        function() {
            clearInterval(run);
            disableScroll();
        },
        function() {
            run = setInterval('rotate()', speed);
            enableScroll();
        }
    );

    var keys = {37:1, 38:1, 39:1, 40:1};

    function preventDefault(e) {
        e = e || window.event;
        if (e.preventDefault)
            e.preventDefault();
        e.returnValue = false;
    }

    function preventDefaultForScrollKeys(e) {
        if (keys[e.keyCode]) {
            preventDefalt(e);
            return false;
        }
    }

    function disableScroll() {
        window.onwheel = preventDefault;
        window.ontouchmove = preventDefault;
        document.onkeydown = preventDefaultForScrollKeys;
    }

    function enableScroll() {
        window.onwheel = null;
        window.ontouchmove = null;
        document.onkeydown = null;
    }
});

function rotate() {
    $('#next').click();
}