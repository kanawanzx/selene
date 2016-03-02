jQuery(window).load(function () {
    jQuery("#as-preloading-wrapper").fadeOut("slow");
});
jQuery(document).ready(function ($) {
    // VIDEO JS
    jQuery("video").mediaelementplayer({
        success: function (e, t) {
            jQuery("#" + t.id + "-mode").html("mode: " + e.pluginType)
        }
    }),
            jQuery("audio,video").mediaelementplayer();
    // MENU RESPONSIVE
    jQuery("#dl-menu").dlmenu({
        animationClasses: {classin: 'dl-animate-in-5', classout: 'dl-animate-out-5'}
    });
    // MENU HEADER OPTION 2
    var trigger = $("#as-hamburger"),
            primary_nav = $(".as-nav-wrapper"),
            isClosed = true,
            lastScrollTop = 0,
            header_2 = $("#as-header-2 .as-header-2-wrapper");

    function burgerTime() {
        if (isClosed == true) {
            trigger.removeClass("is-open");
            trigger.addClass("is-closed");
            isClosed = false;
        } else {
            trigger.removeClass("is-closed");
            trigger.addClass("is-open");
            isClosed = true;
        }
    }

    trigger.click(function () {
        burgerTime();
        primary_nav.toggleClass("is-visible");
        $("html, body").toggleClass("as-hidden");
    });

    $(window).scroll(function () {
        var st = $(this).scrollTop();
        if (st > lastScrollTop && st > 120) {
            // scrolling down
            if (header_2.data("menu") === "show") {
                header_2.data("menu", "hide");
                //header_2.stop().animate({top:"-30",opacity: "0"},900, "easeOutExpo");
                header_2.css("padding", "10px 0");
            }
        }
        else {
            // scrolling up
            if (header_2.data("menu") === "hide") {
                header_2.data("menu", "show");
                //header_2.stop().animate({top:"0",opacity: "1"},900, "easeOutExpo");
            }
        }
        if (st < 120) {
            header_2.css("padding", "38px 0");
        }
        lastScrollTop = st;
    });

    // BLOG SIDEBAR STYLE
    function border_height_blog() {
        var height_sidebar = $("#as-page-blog-classic .dslc-col.dslc-4-col").height(),
                height_content_blog = $("#as-page-blog-classic .dslc-col.dslc-8-col").height(),
                height_border = $("#as-page-blog-classic .dslc-col.dslc-4-col .as-border-sidebar");

        if (height_sidebar > height_content_blog) {
            height_border.css("height", height_sidebar + 120);
        } else {
            height_border.css("height", height_content_blog + 120);
        }
    }
    border_height_blog();
    jQuery(window).resize(function () {
        border_height_blog();
    });

    // MENU HAMBURGER SIDENAV STYLE
    var hamburger_button = $(".as-icon-hamburger-menu"),
            mobile_close_nav = $(".as-close-nav-mobile span"),
            main_nav_menu = $(".as-main-nav-menu"),
            nav_menu_left = $(".as-nav-menu-left"),
            nav_menu_right = $(".as-nav-menu-right"),
            logo_main_site = $(".as-logo-main-site"),
            menu_one_page = $("#menu-onepage-menus li"),
            windowWidth = $(window).width();

    if (windowWidth > 480) {
        if (nav_menu_right.length > 0) {
            hamburger_button.css({"right": "60px", "top": "60px"});
            logo_main_site.css("left", 60);
        }
        if (nav_menu_left.length > 0) {
            hamburger_button.css({"left": "60px", "top": "60px"});
            logo_main_site.css("right", 60);
        }
    } else {
        if (nav_menu_right.length > 0) {
            hamburger_button.css({"right": "20px", "top": "20px"});
            logo_main_site.css("left", 40);
        }
        if (nav_menu_left.length > 0) {
            hamburger_button.css({"left": "20px", "top": "20px"});
            logo_main_site.css("right", 40);
        }
    }

    function position_show_hide() {
        $("#as-mark-black-sidenav").fadeToggle(500);
        hamburger_button.toggleClass("as-close");
        if (nav_menu_right.length > 0) {
            hamburger_button.toggleClass("as-position-right");
        }
        if (nav_menu_left.length > 0) {
            hamburger_button.toggleClass("as-position-left");
        }
        main_nav_menu.toggleClass("as-menu-nav-active");
    }

    hamburger_button.click(function () {
        position_show_hide();
    });
    mobile_close_nav.click(function () {
        position_show_hide();
    });
    // ACTIVE MENU ONE PAGE
    menu_one_page.click(function () {
        menu_one_page.removeClass("active");
        $(this).addClass("active");
        position_show_hide();
    });

    // MENU HEADER FIXED 
    $(window).scroll(function(e){ 
	    $sticky_header = $('#as-menu-header-1.as-header-sticky');
		if ( $(this).scrollTop() > 150 && $sticky_header.css('position') != 'fixed' ){ 			
			$sticky_header.css({'position': 'fixed', 'top': '0px', 'opacity':'0'}).animate({opacity:1},1000).addClass('as-bg-sticky');		
		}
		if ($(this).scrollTop() < 80 && $sticky_header.css('position') == 'fixed'){
			$sticky_header.css({'position': 'relative'}).removeClass('as-bg-sticky');		
		}
    });
    // SIZE SHOP CART
    var shop_cart_header = $(".as-shop-search-wrapper .as-shop-cart-header"),
            shop_cart_content = $(".as-shop-cart-header .widget_shopping_cart_content");
    shop_cart_header.hover(function () {
        shop_cart_content.addClass("as-cart-active");
    });
    shop_cart_header.mouseleave(function () {
        shop_cart_content.toggleClass("as-cart-active");
    });

    // 	SCROLL TO TOP
    var scroll_up = $(".as-scrollup");
    scroll_up.click(function () {
        $("html, body").animate({scrollTop: 0}, 600, "easeOutExpo");
        return false;
    });
});
/**/
var optimizedScroll = (function ($) {

    var callbacks = new Array(),
            running = false;

    // fired on resize event
    function scroll() {

        if (!running) {
            running = true;

            if (window.requestAnimationFrame) {
                window.requestAnimationFrame(runCallbacks);
            } else {
                setTimeout(runCallbacks, 66);
            }
        }

    }

    // run the actual callbacks
    function runCallbacks() {
        $.each(callbacks, function (k, callback) {
            callback();
        });

        running = false;
    }

    // adds callback to loop
    function addCallback(callback) {

        if (callback) {
            callbacks.push(callback);
        }

    }

    return {
        // initalize resize event listener
        init: function (callback) {
            $(window).on("scroll", scroll);

            addCallback(callback);
        },
        // public method to add additional callback
        add: function (callback) {
            addCallback(callback);
        }
    }
}(jQuery));
optimizedScroll.init();

/**/
var optimizedResize = (function ($) {

    var callbacks = new Array(),
            running = false;

    // fired on resize event
    function resize() {

        if (!running) {
            running = true;

            if (window.requestAnimationFrame) {
                window.requestAnimationFrame(runCallbacks);
            } else {
                setTimeout(runCallbacks, 66);
            }
        }

    }

    // run the actual callbacks
    function runCallbacks() {
        $.each(callbacks, function (k, callback) {
            callback();
        });

        running = false;
    }

    // adds callback to loop
    function addCallback(callback) {

        if (callback) {
            callbacks.push(callback);
        }

    }

    return {
        // initalize resize event listener
        init: function (callback) {
            $(window).on("resize", resize);
            addCallback(callback);
        },
        // public method to add additional callback
        add: function (callback) {
            addCallback(callback);
        }
    }
}(jQuery));
optimizedResize.init(function () {
});
/* Create cookie for like post */
function createCookie(name, value, days) {
    var expires;

    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    } else {
        expires = "";
    }
    document.cookie = escape(name) + "=" + escape(value) + expires + "; path=/";
}
function showMessage(message, effect)
{
    if (typeof (effect) == "undefined")
    {
        effect = "mfp-zoom-in";
    }
    jQuery.magnificPopup.open({
        preloader: true,
        mainClass: effect,
        items: {
            src: '<div class="as-popup-message mfp-with-anim">' + message + '</div>',
            type: "inline",
            midClick: true
        }
    });
}