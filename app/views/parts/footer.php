<footer class="w-100 float-start">
    <div class="container">
        <div class="main-footer-logo">
            <a href="index.html">
                <img src="<?=IMG ?>/logo.png" class="img-fluid" alt="logo">
            </a>
        </div>
        <div class="footer-content text-center">
            <p>This theme extends default WordPress profiles. User can edit profile fields, upload photos, add
                favorites, view gifts and read messages, edit privacy settings without even seeing .
            </p>
            <ul class="media-icon">
                <li><a href="javascript:;"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="javascript:;"><i class="fab fa-google"></i></a></li>
                <li><a href="javascript:;"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="javascript:;"><i class="fab fa-twitter"></i></a></li>
                <li><a href="javascript:;"><i class="fab fa-skype"></i></a></li>
            </ul>
        </div>
        <div class="bootem-footer">
            <p>© Copyright 2023 by <span>Fervor</span> - Design by <a href="https://webstrot.com/">Webstrot</a>.
            </p>
            <ul>
                <li><a href="community.html">Community</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="contact.html">Conatct Us</a></li>
            </ul>
        </div>
    </div>
</footer>
</div>
<script src="<?=JS ?>/jquery-3.6.0.min.js"></script>
<script src="<?=JS ?>/jquery-ui.min.js"></script>
<script src="<?=JS ?>/bootstrap.min.js"></script>
<script src="<?=JS ?>/bootstrap.bundle.js"></script>
<script src="<?=JS ?>/owl.carousel.js"></script>
<script src="<?=JS ?>/range-slider.js"></script>
<script src="<?=JS ?>/jquery.themepunch.tools.min.js"></script>
<script src="<?=JS ?>/jquery.themepunch.revolution.min.js"></script>
<script src="<?=JS ?>/extensions/revolution.extension.actions.min.js"></script>
<script src="<?=JS ?>/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?=JS ?>/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?=JS ?>/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?=JS ?>/extensions/revolution.extension.migration.min.js"></script>
<script src="<?=JS ?>/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?=JS ?>/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?=JS ?>/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?=JS ?>/custom.js"></script>
<script>
    var tpj = jQuery;
    var revapi1078;
    tpj(document).ready(function () {
        if (tpj("#rev_slider_1078_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_1078_1");
        } else {
            revapi1078 = tpj("#rev_slider_1078_1").show().revolution({
                sliderType: "standard",
                jsFileLocation: "revolution/js/",
                sliderLayout: "fullwidth",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    mouseScrollReverse: "default",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style: "zeus",
                        enable: true,
                        hide_onmobile: true,
                        hide_under: 600,
                        hide_onleave: true,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        tmp: '<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 30,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 30,
                            v_offset: 0
                        }
                    },
                    bullets: {
                        enable: true,
                        hide_onmobile: true,
                        hide_under: 600,
                        style: "metis",
                        hide_onleave: true,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        direction: "horizontal",
                        h_align: "center",
                        v_align: "bottom",
                        h_offset: 0,
                        v_offset: 30,
                        space: 5,
                        tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
                    }
                },
                viewPort: {
                    enable: true,
                    outof: "pause",
                    visible_area: "80%",
                    presize: false
                },
                responsiveLevels: [1240, 1024, 778, 480],
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: [1240, 1024, 778, 480],
                gridheight: [937, 740, 590, 510],
                lazyType: "none",
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 2000,
                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 55],
                    type: "mouse",
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    });	/*ready*/
</script>
<script>
    // counter js start
    $(document).ready(function ($) {
        function isScrolledIntoView(elem) {
            var docViewTop = $(window).scrollTop();
            var docViewBottom = docViewTop + $(window).height();
            var elemTop = $(elem).offset().top;
            var elemBottom = elemTop + $(elem).height();
            return ((elemBottom <= docViewBottom));
        }
        function countUp() {
            $('.counter').each(function () {
                var $this = $(this),
                    countTo = $this.attr('data-count');

                $({ countNum: $this.text() }).animate({
                        countNum: countTo
                    },

                    {

                        duration: 8000,
                        easing: 'linear',
                        step: function () {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function () {
                            $this.text(this.countNum);
                            //alert('finished');
                        }

                    });
            });
        }
        $(document).scroll(function () {
            if (isScrolledIntoView(".counter")) {
                countUp();
            }
        });
    });

</script>
</body>

</html>
