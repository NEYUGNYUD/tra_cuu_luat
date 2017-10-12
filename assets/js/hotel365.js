$(document).ready(function () {
    var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth,
            height = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
    var dem = 1;
    $(window).scroll(function () {
        if ($(this).scrollTop() > 150)
            $('.goTop').fadeIn();
        else
            $('.goTop').fadeOut();
    });
    $('.goTop').click(function () {
        $('body,html').animate({scrollTop: 0}, 'slow');
    });
    function checkWidth() {
        if (width <= 767) {
            $('aside').css({'transform': 'translateX(-800px)', '-webkit-transform': 'translateX(-800px)'});
            $(".filter_mobile").click(function () {
                dem++;
                if (dem % 2 === 0) {
                    $('aside').css({'transform': 'translateX(0px)', '-webkit-transform': 'translateX(0px)'});
                } else {
                    $('aside').css({'transform': 'translateX(-800px)', '-webkit-transform': 'translateX(-800px)'});
                }
            });
        } else {
            $('aside').css({'transform': 'translateX(0px)', '-webkit-transform': 'translateX(0px)'});
        }
    }
// Execute on load
    checkWidth();
    $(window).resize(checkWidth);
});
$(function () {
    $.fn.limit = function ($n) {
        this.each(function () {
            var allText = $(this).html();
            var tLength = $(this).html().length;
            var startText = allText.slice(0, $n);
            if (tLength >= $n) {
                $(this).html(startText + '...');
            } else {
                $(this).html(startText);
            }
            ;
        });

        return this;
    };
    $('.item-service h2 a').limit(60);
    $('.detail p').limit(170);
});

