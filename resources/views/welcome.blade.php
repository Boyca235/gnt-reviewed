<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <link rel="shortcut icon" href="{{asset('site/upload/TG-Thumb.png')}}" />

        <title>GNT | Nouvelles &amp; Magasine</title>

        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="format-detection" content="telephone=no" />

        <link rel="stylesheet" href="{{asset('site/css/reset.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('site/css/wordpress.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('site/css/animation.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('site/css/ilightbox/ilightbox.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('site/css/jqueryui/custom.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('site/js/plugins/flexslider/flexslider.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('site/css/tooltipster.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('site/css/style.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('site/css/left-fullwidth.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('site/css/left-fullwidth-grid.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('site/css/font-awesome.min.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('site/css/grid.css')}}" type="text/css" media="all" />
   
    </head>
    <body>
        <div id="wrapper">
            @include('layouts.site.header')
            @yield('body')
            @include('layouts.site.footer')
        </div>
        
        <script type="text/javascript" src="{{asset('site/js/jquery.js')}}"></script>
        <script>
            (function () {
                function maybePrefixUrlField() {
                    if (this.value.trim() !== "" && this.value.indexOf("http") !== 0) {
                        this.value = "http://" + this.value;
                    }
                }

                var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
                if (urlFields) {
                    for (var j = 0; j < urlFields.length; j++) {
                        urlFields[j].addEventListener("blur", maybePrefixUrlField);
                    }
                }
            })();
        </script>
        <script type="text/javascript" src="{{asset('site/js/plugins/ilightbox.packed.js')}}" id="ilightbox-js"></script>
        <script type="text/javascript" src="{{asset('site/js/plugins/jquery.easing.js')}}" id="easing-js"></script>
        <script type="text/javascript" src="{{asset('site/js/plugins/jquery.sticky-kit.min.js')}}" id="sticky-kit-js"></script>
        <script type="text/javascript" src="{{asset('site/js/plugins/jquery.lazy.min.js')}}" id="lazy-js"></script>
        <script type="text/javascript" src="{{asset('site/js/plugins/jquery.cookie.js')}}" id="cookie-js"></script>
        <script type="text/javascript" src="{{asset('site/js/plugins/jquery.tooltipster.min.js')}}" id="tooltipster-js"></script>
        <script type="text/javascript" src="{{asset('site/js/plugins/custom_plugins.js')}}" id="grandnews-custom-plugins-js"></script>
        <script type="text/javascript" src="{{asset('site/js/plugins/custom.js')}}" id="grandnews-custom-script-js"></script>
        <script type="text/javascript" id="wp-util-js-extra">
            /* <![CDATA[ */
            var _wpUtilSettings = { ajax: { url: "#" } };
            /* ]]> */
        </script>
        <script type="text/javascript" id="wp_review-js-js-extra">
            /* <![CDATA[ */
            var wpreview = { ajaxurl: "#", loginRequiredMessage: "You must log in to add your review" };
            /* ]]> */
        </script>
        <script type="text/javascript" src="{{asset('site/js/plugins/jquery.newsticker.min.js')}}" id="newsticker-js"></script>
        <script type='text/javascript' src='{{asset('site/js/plugins/jquery.isotope.min.js')}}'></script>
        <script type='text/javascript' src='{{asset('site/js/plugins/isotope.js')}}'></script>
        <script type="text/javascript" src="{{asset('site/js/plugins/flexslider/jquery.flexslider-min.js')}}" id="flexslider-js"></script>


        <script>
            jQuery(document).ready(function () {
                jQuery("#16549366201450368853").newsTicker({
                    row_height: 36,
                    max_rows: 1,
                    duration: 6000,
                    autostart: 1,
                    prevButton: jQuery("#newsticker_prev16549366201450368853"),
                    nextButton: jQuery("#newsticker_next16549366201450368853"),
                    pauseOnHover: 1,
                });
            });
        </script>
        <script>
            jQuery(window).load(function () {
                jQuery("#16549366201760534359_filter li a").click(function () {
                    jQuery("#16549366201760534359_filter li a").removeClass("selected");
                    jQuery(this).addClass("selected");
                    jQuery("#16549366201760534359_loading").addClass("active");

                    jQuery.ajax({
                        url: "#",
                        type: "POST",
                        data: "filter=" + jQuery(this).data("filter") + "&items=" + jQuery(this).data("items"),
                        success: function (results) {
                            jQuery("#16549366201760534359_wrapper").html(results);
                            jQuery("#16549366201760534359_loading").removeClass("active");
                        },
                    });
                });
            });
        </script>
        <script>
            var flexslider;

            function carouselGetGridSize() {
                return window.innerWidth < 768 ? 1 : window.innerWidth < 900 ? 3 : 4;
            }

            jQuery(window).load(function () {
                jQuery("#1654936620110643708").flexslider({
                    animation: "slide",
                    animationLoop: true,
                    itemMargin: 30,
                    itemWidth: 210,
                    minItems: carouselGetGridSize(), // use function to pull in initial value
                    maxItems: carouselGetGridSize(),
                    directionNav: false,
                    controlNav: false,
                    smoothHeight: true,
                    animationSpeed: 600,
                    move: 1,
                    start: function (slider) {
                        flexslider = slider;
                    },
                });

                jQuery("#carousel_prev1654936620110643708").on("click", function () {
                    jQuery("#1654936620110643708").flexslider("prev");
                    return false;
                });

                jQuery("#carousel_next1654936620110643708").on("click", function () {
                    jQuery("#1654936620110643708").flexslider("next");
                    return false;
                });

                jQuery(window).resize(function () {
                    var gridSize = carouselGetGridSize();

                    flexslider.vars.minItems = gridSize;
                    flexslider.vars.maxItems = gridSize;
                });
            });
        </script>
        <script>
            jQuery(window).load(function () {
                jQuery("#16549366201748552795").flexslider({
                    animation: "slide",
                    animationLoop: true,
                    itemMargin: 0,
                    minItems: 1,
                    maxItems: 1,
                    slideshow: 0,
                    controlNav: false,
                    smoothHeight: true,
                    slideshowSpeed: 5000,
                    animationSpeed: 1600,
                    move: 1,
                });
            });
        </script>
        <script>
            jQuery(window).load(function () {
                jQuery("#1654936620566699078_filter li a").click(function () {
                    jQuery("#1654936620566699078_filter li a").removeClass("selected");
                    jQuery(this).addClass("selected");
                    jQuery("#1654936620566699078_loading").addClass("active");

                    jQuery.ajax({
                        url: "https://themes.themegoods.com/grandnews/demo2/wp-admin/admin-ajax.php?action=grandnews_filterable_3cols",
                        type: "POST",
                        data: "filter=" + jQuery(this).data("filter") + "&items=" + jQuery(this).data("items"),
                        success: function (results) {
                            jQuery("#1654936620566699078_wrapper").html(results);
                            jQuery("#1654936620566699078_loading").removeClass("active");
                        },
                    });
                });
            });
        </script>
        <script>
            (function () {
                window.mc4wp = window.mc4wp || {
                    listeners: [],
                    forms: {
                        on: function (evt, cb) {
                            window.mc4wp.listeners.push({
                                event: evt,
                                callback: cb,
                            });
                        },
                    },
                };
            })();
        </script>
        @yield('javascript')
    </body>
</html>
