
function loadApp() {

    $('#all').fadeIn(1000);

    // Create the flipbook

    $('.magazine').turn({

        // Magazine width

        width: 922,

        // Magazine height

        height: 600,

        // Elevation will move the peeling corner this number of pixels by default

        elevation: 50,

        // Hardware acceleration

        acceleration: !isChrome(),

        // Enables gradients

        gradients: true,

        // Auto center this flipbook

        autoCenter: true,

        // The number of pages

        pages: 22,

        direction : "ltr",

        display : "double",


        // Events
        when: {

            turning: function (event, page, view) {

                var book = $(this),
				currentPage = book.turn('page'),
				pages = book.turn('pages');

                // Update the current URI
                Hash.go('page/' + page).update();

                // Show and hide navigation buttons
                disableControls(page);
            },

            turned: function (event, page, view) {

                disableControls(page);

                $(this).turn('center');

                if (page == 1) {
                    $(this).turn('peel', 'br');
                }

                 //if page not one of the currently viewe, reset placeholder
                if ($(this).turn('view').join(", ").indexOf($('#page-number').val()) == -1) {
                     $('#page-number').val('');
                    $('#page-number').attr('placeholder', page + ' of ' + $(this).turn('pages'));
                }
            },

            missing: function (event, pages) {

                // Add pages that aren't in the magazine
                for (var i = 0; i < pages.length; i++)
                    addPage(pages[i], $(this));

            }
        }

    });

    // Zoom.js

    $('.magazine-viewport').zoom({
        flipbook: $('.magazine'),
        max: function () {
            return 3.0;//largeMagazineWidth() / $('.magazine').width();
        },
        when: {
            tap: function (event) {

                if ($(this).zoom('value') == 1) {
                    $('.magazine').
						removeClass('animated').
						addClass('zoom-in');
                    $(this).zoom('zoomIn', event);
                } else {
                    $(this).zoom('zoomOut');
                }
            },

            resize: function (event, scale, page, pageElement) {

                if (scale == 1)
                    loadSmallPage(page, pageElement);
                else
                    loadLargePage(page, pageElement);

            },

            zoomIn: function () {

                $('.thumbnails').hide();
                $('.made').hide();
                $('.magazine').addClass('zoom-in');

                if (!window.escTip && !$.isTouch) {
                    escTip = true;

                    $('<div />', { 'class': 'esc' }).
						html('<div>Press ESC to exit</div>').
							appendTo($('body')).
							delay(2000).
							animate({ opacity: 0 }, 500, function () {
							    $(this).remove();
							});
                }
            },

            zoomOut: function () {

                $('.esc').hide();
                $('.thumbnails').fadeIn();
                $('.made').fadeIn();

                setTimeout(function () {
                    $('.magazine').addClass('animated').removeClass('zoom-in');
                    resizeViewport();
                }, 0);

            },

            swipeLeft: function () {

                $('.magazine').turn('next');

            },

            swipeRight: function () {

                $('.magazine').turn('previous');

            }
        }
    });

    // Using arrow keys to turn the page

    $(document).keydown(function (e) {

        var previous = 37, next = 39, esc = 27;

        switch (e.keyCode) {
            case previous:

                // left arrow
                $('.magazine').turn('previous');
                e.preventDefault();

                break;
            case next:

                //right arrow
                $('.magazine').turn('next');
                e.preventDefault();

                break;
            case esc:

                $('.magazine-viewport').zoom('zoomOut');
                e.preventDefault();

                break;
        }
    });

    // URIs - Format #/page/1 
 Hash.on('^page\/([0-9]*)$', {
        yep: function (path, parts) {
            var page = parts[1];

            if (page !== undefined) {
                if ($('.magazine').turn('is'))
                    $('.magazine').turn('page', page);
            }

        },
        nop: function (path) {

            if ($('.magazine').turn('is'))
                $('.magazine').turn('page', 1);
        }
    });


    $(window).resize(function () {
        resizeViewport();
    }).bind('orientationchange', function () {
        resizeViewport();
    });

    //Events for the navigation buttons
    $('#zoom-in').click(function () {
        if ($('.magazine-viewport').zoom('value') == 1) {
            $('.magazine-viewport').zoom('zoomIn');
        }
        else {
            $('.magazine-viewport').zoom('zoomOut');
        }
    });

    $('#home').click(function () {
        $('.magazine').turn('page', 1);
    });

    $('#gotopage').click(function () {
        $('.magazine').turn('page', $('#page-number').val());
    });

    //on enter inside text box
    $("#page-number").keyup(function (e) {
        if (e.keyCode == 13) {
            $('.magazine').turn('page', $('#page-number').val());
        }
    });


    $('#show_thumbnails').click(function () {
        //$('.overlay').addClass('active').
        //css('opacity', 0).animate({ opacity: 1 }, 1000);
        if ($('.overlay').hasClass('active')) {
            $('.overlay').removeClass('active').css('opacity', 1).animate({ opacity: 0 }, 1000);
        }
        else {
            $('.overlay').addClass('active').css('opacity', 0).animate({ opacity: 1 }, 1000);
        }
    });

    // Events for the next button

    $('.next-button').bind($.mouseEvents.over, function () {

        $(this).addClass('next-button-hover');

    }).bind($.mouseEvents.out, function () {

        $(this).removeClass('next-button-hover');

    }).bind($.mouseEvents.down, function () {

        $(this).addClass('next-button-down');

    }).bind($.mouseEvents.up, function () {

        $(this).removeClass('next-button-down');

    }).click(function () {

        $('.magazine').turn('next');

    });

    // Events for the next button

    $('.previous-button').bind($.mouseEvents.over, function () {

        $(this).addClass('previous-button-hover');

    }).bind($.mouseEvents.out, function () {

        $(this).removeClass('previous-button-hover');

    }).bind($.mouseEvents.down, function () {

        $(this).addClass('previous-button-down');

    }).bind($.mouseEvents.up, function () {

        $(this).removeClass('previous-button-down');

    }).click(function () {

        $('.magazine').turn('previous');

    });


    resizeViewport();

    $('.magazine').addClass('animated');

    //activate 
    $("#thumbs_carousel").jMyCarousel({
        visible: '100%'
    });

    $('#thumbs_carousel img').click(function () {
        vv = $(this).attr('src').replace('pages/thumbs/page-','');
        vv = vv.substring(0, vv.indexOf('.'));
        tmp = parseInt(vv);
        $('.overlay').removeClass('active').css('opacity', 1).animate({ opacity: 0 }, 1000);
        $('.magazine').turn('page', tmp);
    });

 
    $(document).click(function (e) {
        var target = $(e.target);
        if (target.hasClass('overlay'))
            $('.overlay').removeClass('active').css('opacity', 1).animate({ opacity: 0 }, 1000);
    });

    //activating tooltips
    $('.tooltip').tooltipster({ arrow: false });



$('#all').hide();
}

// Load the HTML4 version if there's not CSS transform

yepnope({
    test: Modernizr.csstransforms,
    yep: ['js/turn.min.js'],
    nope: ['js/turn.html4.min.js'],
    both: ['js/zoom.min.js'],
    complete: loadApp
});
