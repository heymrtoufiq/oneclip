/**
 * @package Helix3 Framework
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2022 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
 */
jQuery(function($) {

    var $body = $('body'),
        $wrapper = $('.body-innerwrapper'),
        $toggler = $('#offcanvas-toggler'),
        $close = $('.close-offcanvas'),
        $offCanvas = $('.offcanvas-menu'),
        nav_collapse = $('.nav.menu');

    // Off Canvas Menu
    $('#offcanvas-toggler').on('click', function(event) {
        event.preventDefault();
        $('body').addClass('offcanvas');
    });

    //$( '<div class="offcanvas-overlay"></div>' ).insertBefore( '.body-innerwrapper > .offcanvas-menu' );

    $('.close-offcanvas, .offcanvas-overlay, .offcanvas-inner ul > li:not(.no-scroll) > a').on('click', function() {
        $('body').removeClass('offcanvas');
    });

    $('<div class="offcanvas-overlay"></div>').insertBefore('.body-innerwrapper > .offcanvas-menu');

    $('.close-offcanvas, .offcanvas-overlay').on('click', function(event) {
        event.preventDefault();
        $('body').removeClass('offcanvas');
    });

    //Mega Menu
    $('.sp-megamenu-wrapper').parent().parent().css('position', 'static').parent().css('position', 'relative');
    $('.sp-menu-full').each(function() {
        $(this).parent().addClass('menu-justify');
    });

    $('.show-menu').click(function() {
        $('.show-menu').toggleClass('active');
    });

    //Search
    var searchRow = $('.top-search-input-wrap').parent().closest('.row');
    $('.top-search-input-wrap').insertAfter(searchRow);

    $(".search-open-icon").on('click', function() {
        $(".top-search-input-wrap").slideDown(200);
        $(this).hide();
        $('.search-close-icon').show();
        $(".top-search-input-wrap").addClass('active');
    });

    $(".search-close-icon").on('click', function() {
        $(".top-search-input-wrap").slideUp(200);
        $(this).hide();
        $('.search-open-icon').show();
        $(".top-search-input-wrap").removeClass('active');
    });

    $("#sp-menu .mod-finder label").on('click', function() {
        $("#sp-menu .mod-finder").toggleClass('active');
    });

    //Slideshow height
    $(window).on({
        load: function() {
            setTimeout(function() {
                var slideHeight = $('.applanding-static-slider').outerHeight(true);
                $('#sp-header:not(".menu-fixed")').css('top', slideHeight);
            }, 1);
        },
        resize: function() {
            var slideHeight = $('.applanding-static-slider').outerHeight(true);
            $('#sp-header:not(".menu-fixed")').css('top', slideHeight);
        }
    });

    $(".varition-advance .customNavigation, .varition-advance .owl-dots").wrapAll("<div class='container controller-wrapper' />");
    $(".varition-thumb .customNavigation, .varition-thumb .owl-dots").wrapAll("<div class='container controller' />");
    $(".varition-thumb .controller").wrapAll("<div class='controller-wrapper' />");

    // Add class menu-fixed when scroll
    var windowWidth = $(window).width();

    if ($('#sp-menu').length) {
        if ($('body').hasClass('home')) {
            var windowHeight = $(window).height() - 70;
        } else {
            var windowHeight = $('#sp-menu').offset().top;
        }
    }

    var slideHeight = $('.applanding-static-slider').outerHeight(true);

    if ($('.variation-applanding').length > 0) {
        var d = navigator.userAgent.toLowerCase(),
            isSafari = (~d.indexOf("safari") && (!~d.indexOf("chrome")) && !~d.indexOf("firefox"));
        if (isSafari) {
            var slideHeight = $('.applanding-static-slider').outerHeight(true) + 80;
        } else {
            var slideHeight = $('.applanding-static-slider').outerHeight(true);
        }
    }

    var stickyNav = function() {
        var scrollTop = $(window).scrollTop();
        slideHeight = slideHeight == undefined ? 0 : slideHeight;

        if (scrollTop > slideHeight) {
            $('#sp-header').removeClass('menu-fixed-out').addClass('menu-fixed');
            $('#sp-header').css('top', 0);
        } else {
            console.log('here2');
            if ($('#sp-header').hasClass('menu-fixed')) {
                $('#sp-header').removeClass('menu-fixed').addClass('menu-fixed-out');
                if (isSafari) {
                    $('#sp-header').css('top', (slideHeight - 80));
                } else {
                    $('#sp-header').css('top', slideHeight);
                }

            }

        }

    };
    stickyNav();
    $(window).scroll(function() {
        stickyNav();

    });

    // ******* Menu link ******** //
    var homeSectionId = $('#sp-page-builder > .page-content > *:first-child').attr('id'); // home section id

    //if first section hasn't id
    if (homeSectionId == undefined) {
        $('#sp-page-builder > .page-content > *:first-child').attr('id', 'first-section');
    }

    $('.sp-megamenu-wrapper ul, .nav.menu').find('li:not(".no-scroll")').each(function(i, el) {
        var $that = $(this),
            $anchor = $that.children('a'),
            url = $anchor.attr('href'),
            splitUrl = url.split('#');

        if ($that.hasClass('home')) {
            if (homeSectionId && $('body').hasClass('home')) {
                $anchor.attr('href', oneClipUrl + '#' + homeSectionId);
            } else {
                $anchor.attr('href', oneClipUrl);
            }
        } else {
            if (typeof splitUrl !== undefined) {
                $anchor.attr('href', oneClipUrl + '#' + splitUrl[1]);
            }
        }
    });

    //onepage nav
    if($('.sp-menu-item.no-scroll.current-item').length == 0){
        $('.sp-megamenu-parent, .nav.menu').onePageNav({
            currentClass: 'active',
            changeHash: false,
            scrollSpeed: 1,
            scrollOffset: 60,
            scrollThreshold: 0.5,
            filter: ':not(.no-scroll)'
        });
    }

    //Screenshot slider
    if ($(".screenshot-slider").length) {

        $('.screenshot-slider').owlCarousel({
            stagePadding: 100,
            loop: true,
            center: true,
            margin: 30,
            nav: true,
            autoWidth: false,
            autoHeight: false,
            navText: ['<span class="fa fa-caret-left"></span>', '<span class="fa fa-caret-right"></span>'],
            autoplay: true,
            responsive: {
                0: {
                    items: 1,
                    margin: 15,
                    stagePadding: 30
                },
                480: {
                    items: 1,
                    margin: 30,
                    stagePadding: 110
                },
                600: {
                    items: 3
                },
                768: {
                    items: 3,
                    margin: 30,
                    stagePadding: 0
                },
                992: {
                    items: 3,
                    margin: 30,
                    stagePadding: 95
                },
                1199: {
                    items: 6
                }
            }
        });
    };

    //Tooltip
	var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
	var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
		return new bootstrap.Tooltip(tooltipTriggerEl);
	});

    $(document).on('click', '.sp-rating .star', function(event) {
        event.preventDefault();

        var data = {
            'action': 'voting',
            'user_rating': $(this).data('number'),
            'id': $(this).closest('.post_rating').attr('id')
        };

        var request = {
            'option': 'com_ajax',
            'plugin': 'helix3',
            'data': data,
            'format': 'json'
        };

        $.ajax({
            type: 'POST',
            data: request,
            beforeSend: function() {
                $('.post_rating .ajax-loader').show();
            },
            success: function(response) {
                var data = $.parseJSON(response.data);

                $('.post_rating .ajax-loader').hide();

                if (data.status == 'invalid') {
                    $('.post_rating .voting-result').text('You have already rated this entry!').fadeIn('fast');
                } else if (data.status == 'false') {
                    $('.post_rating .voting-result').text('Somethings wrong here, try again!').fadeIn('fast');
                } else if (data.status == 'true') {
                    var rate = data.action;
                    $('.voting-symbol').find('.star').each(function(i) {
                        if (i < rate) {
                            $(".star").eq(-(i + 1)).addClass('active');
                        }
                    });

                    $('.post_rating .voting-result').text('Thank You!').fadeIn('fast');
                }

            },
            error: function() {
                $('.post_rating .ajax-loader').hide();
                $('.post_rating .voting-result').text('Failed to rate, try again!').fadeIn('fast');
            }
        });
    });

    //Pricing Table Hover
    if ($('.sppb-addon-pricing-table.simple .sppb-pricing-box').length > 0) {
        $('.sppb-addon-pricing-table.simple .sppb-pricing-box').on('mouseover', function() {
            $('.sppb-pricing-box.sppb-pricing-featured').removeClass('sppb-pricing-featured');
            $(this).addClass('sppb-pricing-featured');
        });
    }

    //For react template
    var observer = new MutationObserver(function(mutations) {
        mutations.forEach(function(mutation) {
            var newNodes = mutation.addedNodes;
            if (newNodes !== null) {
                var $nodes = $(newNodes);

                //Screenshot Slider
                $nodes.each(function() {
                    var $node = $(this);
                    $node.find('.screenshot-slider').each(function() {
                        $(".screenshot-slider").owlCarousel({
                            stagePadding: 100,
                            loop: true,
                            center: true,
                            margin: 30,
                            nav: true,
                            autoWidth: false,
                            autoHeight: false,
                            navText: ['<span class="fa fa-caret-left"></span>', '<span class="fa fa-caret-right"></span>'],
                            autoplay: true,
                            responsive: {
                                0: {
                                    items: 1,
                                    margin: 15,
                                    stagePadding: 30
                                },
                                480: {
                                    items: 1,
                                    margin: 30,
                                    stagePadding: 110
                                },
                                600: {
                                    items: 3
                                },
                                768: {
                                    items: 3,
                                    margin: 30,
                                    stagePadding: 0
                                },
                                992: {
                                    items: 3,
                                    margin: 30,
                                    stagePadding: 95
                                },
                                1199: {
                                    items: 6
                                }
                            }
                        });
                    });
                });

                // Fullwidth slider
                $nodes.each(function() {
                    var $node = $(this);
                    $node.find('.slide-fullwidth').each(function() {
                        $(".varition-advance .customNavigation, .varition-advance .owl-dots").wrapAll("<div class='container controller-wrapper' />");
                        $(".varition-thumb .customNavigation, .varition-thumb .owl-dots").wrapAll("<div class='container controller' />");
                        $(".varition-thumb .controller").wrapAll("<div class='controller-wrapper' />");

                        var $spslideowl = $(this);

                        var $autoplay = $spslideowl.attr("data-sppb-slide-ride");
                        if ($autoplay == "true") {
                            var $autoplay = true;
                        } else {
                            var $autoplay = false
                        };

                        var $controllers = $spslideowl.attr("data-sppb-slide-controllers");
                        if ($controllers == "true") {
                            var $controllers = true;
                        } else {
                            var $controllers = false
                        };


                        $spslideowl.owlCarousel({
                            margin: 0,
                            loop: true,
                            video: true,
                            autoplay: $autoplay,
                            animateIn: "fadeIn",
                            animateOut: "fadeOut",
                            autoplayHoverPause: true,
                            autoplaySpeed: 1500,
                            dotsContainer: "#sppb-custom-dots",
                            responsive: {
                                0: {
                                    items: 1
                                },
                                600: {
                                    items: 1
                                },
                                1000: {
                                    items: 1
                                }
                            },
                        });


                        $(".sppbSlidePrev").click(function() {
                            $spslideowl.trigger("prev.owl.carousel", [400]);
                        });

                        $(".sppbSlideNext").click(function() {
                            $spslideowl.trigger("next.owl.carousel", [400]);
                        });
                    });
                });

            }
        });
    });

    var config = {
        childList: true,
        subtree: true
    };
    // Pass in the target node, as well as the observer options
    observer.observe(document.body, config);
});