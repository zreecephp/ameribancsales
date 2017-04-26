// JavaScript Document


// content transition
var showHide = function (show) {
    var container = $('#page');
    container.fadeOut({
        complete: function() {
            $('section').hide();
            show.show();
            container.fadeIn();
        }
    });
}

$('a').click(function() {
    showHide($($(this).attr('href')));
});


// menu active state
$('a.menu').click(function(){
    $('a.menu').removeClass("active");
    $(this).addClass("active");
});


// site loader
            $(window).load(function() {
                // $('body').css('overflow', 'hidden');
                $('.loader').fadeOut('slow');
            });
			

// mobile-detect
	var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };