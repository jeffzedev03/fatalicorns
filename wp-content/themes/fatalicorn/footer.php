

        <!-- START: Footer -->
        <!--
    Additional Classes:
        .nk-footer-parallax
        .nk-footer-parallax-opacity
-->
        <footer class="nk-footer nk-footer-parallax nk-footer-parallax-opacity">
            <img class="nk-footer-top-corner" src="<?php bloginfo('template_directory'); ?>/assets/images/footer-corner.png" alt="">



            <div class="container">
                <div class="nk-gap-2"></div>
                <div class="nk-gap"></div>

                <p>
                    &copy; <?php date('Y'); ?> Fatalicorns Gaming. Tous droits réservés.
                </p>
                

                <div class="nk-footer-links">
                    <a href="#" class="link-effect">Mentions légales</a>
                    <span>|</span> <a href="#" class="link-effect">Privacy Policy</a>
                </div>

                <div class="nk-gap-4"></div>
            </div>
        </footer>
        <!-- END: Footer -->


    </div>



    <!--
    START: Share Buttons
        .nk-share-buttons-left
-->
    <div class="nk-share-buttons nk-share-buttons-left">
        <ul>
            <li>
                <span class="nk-share-icon" title="Share page on Facebook" data-share="facebook">
                    <span class="icon fa fa-facebook"></span>
                </span>
                <span class="nk-share-name">Facebook</span>
            </li>
            <li>
                <span class="nk-share-icon" title="Share page on Twitter" data-share="twitter">
                    <span class="icon fa fa-twitter"></span>
                </span>
                <span class="nk-share-name">Twitter</span>
            </li>
            <li>
                <span class="nk-share-icon" title="Share page on Google+" data-share="google-plus">
                    <span class="icon fa fa-google-plus"></span>
                </span>
                <span class="nk-share-name">Google Plus</span>
            </li>
            <!--
        <li>
            <span class="nk-share-icon" title="Share page on Pinterest" data-share="pinterest">
                <span class="icon fa fa-pinterest"></span>
            </span>
            <span class="nk-share-name">Pinterest</span>
        </li>
        <li>
            <span class="nk-share-icon" title="Share page on LinkedIn" data-share="linkedin">
                <span class="icon fa fa-linkedin"></span>
            </span>
            <span class="nk-share-name">LinkedIn</span>
        </li>
        <li>
            <span class="nk-share-icon" title="Share page on VK" data-share="vk">
                <span class="icon fa fa-vk"></span>
            </span>
            <span class="nk-share-name">Vkontakte</span>
        </li>
        -->
        </ul>
    </div>


  


    <!--
    START: Search

    Additional Classes:
        .nk-search-light
-->
    <div class="nk-search">
        <div class="container">
            <form action="#">
                <fieldset class="form-group nk-search-field">
                    <input type="text" class="form-control" id="searchInput" placeholder="Search..." name="s">
                    <label for="searchInput"><i class="ion-ios-search"></i></label>
                </fieldset>
            </form>
        </div>
    </div>
    <!-- END: Search -->




    <!--
    START: Shopping Cart

    Additional Classes:
        .nk-cart-light
-->
    <div class="nk-cart">
        <div class="nk-gap-2"></div>
        <div class="container">
            <div class="nk-store nk-store-cart">
                <div class="table-responsive">
                    <table class="table nk-store-cart-products">
                        <tbody>

                            <tr>
                                <td class="nk-product-cart-thumb">
                                    <a href="store-product.html" class="nk-post-image">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/product-2-sm.png" alt="Men Tshirt" class="nk-img">
                                    </a>
                                </td>
                                <td class="nk-product-cart-title">
                                    <h2 class="nk-post-title h5">
                                        <a href="store-product.html">Men Tshirt</a>
                                    </h2>
                                </td>
                                <td class="nk-product-cart-price">$67.00</td>
                                <td class="nk-product-cart-quantity">
                                    1
                                </td>
                                <td class="nk-product-cart-total">
                                    $67.00
                                </td>
                                <td class="nk-product-cart-remove">
                                    <a href="#">
                                        <span class="ion-trash-b"></span>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td class="nk-product-cart-thumb">
                                    <a href="store-product.html" class="nk-post-image">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/product-4-sm.png" alt="Men Hoodie" class="nk-img">
                                    </a>
                                </td>
                                <td class="nk-product-cart-title">
                                    <h2 class="nk-post-title h5">
                                        <a href="store-product.html">Men Hoodie</a>
                                    </h2>
                                </td>
                                <td class="nk-product-cart-price">$125.00
                                    <del>$145.00</del>
                                </td>
                                <td class="nk-product-cart-quantity">
                                    2
                                </td>
                                <td class="nk-product-cart-total">
                                    $250.00
                                </td>
                                <td class="nk-product-cart-remove">
                                    <a href="#">
                                        <span class="ion-trash-b"></span>
                                    </a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <div class="nk-gap-2"></div>
                <div class="nk-cart-total">
                    Total
                    <span>$317</span>
                </div>

                <div class="nk-gap-3"></div>
                <div class="nk-cart-btns">
                    <a href="#" class="nk-btn nk-btn-lg nk-btn-color-main-1 link-effect-4">
                    Go to Checkout
                </a> &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#" class="nk-btn nk-btn-lg link-effect-4 nk-cart-toggle">
                    Continue Shopping
                </a>
                </div>
            </div>
        </div>
        <div class="nk-gap-5"></div>
    </div>
    <!-- END: Shopping Cart -->




    <!-- START: Scripts -->

    <!-- GSAP -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/bower_components/gsap/src/minified/TweenMax.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/bower_components/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>

    <!-- Bootstrap -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/bower_components/tether/dist/js/tether.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Sticky Kit -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/bower_components/sticky-kit/dist/sticky-kit.min.js"></script>

    <!-- Jarallax -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/bower_components/jarallax/dist/jarallax.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/bower_components/jarallax/dist/jarallax-video.min.js"></script>

    <!-- Flickity -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/bower_components/flickity/dist/flickity.pkgd.min.js"></script>

    <!-- Isotope -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/bower_components/isotope/dist/isotope.pkgd.min.js"></script>

    <!-- Photoswipe -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/bower_components/photoswipe/dist/photoswipe.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/bower_components/photoswipe/dist/photoswipe-ui-default.min.js"></script>

    <!-- Typed.js -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/bower_components/typed.js/dist/typed.min.js"></script>

    <!-- Jquery Form -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/bower_components/jquery-form/jquery.form.js"></script>

    <!-- Jquery Validation -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/bower_components/jquery-validation/dist/jquery.validate.min.js"></script>

    <!-- Jquery Countdown + Moment -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/bower_components/jquery.countdown/dist/jquery.countdown.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/bower_components/moment/min/moment.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/bower_components/moment-timezone/builds/moment-timezone-with-data.js"></script>

    <!-- Hammer.js -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/bower_components/hammer.js/hammer.min.js"></script>

    <!-- nK Share -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/plugins/nk-share/nk-share.js"></script>

    <!-- NanoSroller -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/bower_components/nanoscroller/bin/javascripts/jquery.nanoscroller.min.js"></script>

    <!-- SoundManager2 -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/bower_components/SoundManager2/script/soundmanager2-nodebug-jsmin.js"></script>

    <!-- DateTimePicker -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/bower_components/datetimepicker/build/jquery.datetimepicker.full.min.js"></script>

    <!-- Revolution Slider -->
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>

    <!-- Keymaster -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/bower_components/keymaster/keymaster.js"></script>

    <!-- Summernote -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/bower_components/summernote/dist/summernote.min.js"></script>

    <!-- Prism -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/bower_components/prism/prism.js"></script>

    <!-- GODLIKE -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/godlike.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/godlike-init.js"></script>
    <!-- END: Scripts -->



    <script type="text/javascript">
    var tpj = jQuery;
    var revapi50;
    tpj(document).ready(function() {
        if (tpj("#rev_slider_50_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_50_1");
        } else {
            revapi50 = tpj("#rev_slider_50_1").show().revolution({
                sliderType: "carousel",
                jsFileLocation: "assets/plugins/revolution/js/",
                sliderLayout: "auto",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    onHoverStop: "off",
                },
                carousel: {
                    maxRotation: 8,
                    vary_rotation: "off",
                    minScale: 20,
                    vary_scale: "off",
                    horizontal_align: "center",
                    vertical_align: "center",
                    fadeout: "off",
                    vary_fade: "off",
                    maxVisibleItems: 3,
                    infinity: "on",
                    space: -90,
                    stretch: "off"
                },
                responsiveLevels: [1240, 1024, 778, 480],
                gridwidth: [800, 600, 400, 320],
                gridheight: [600, 400, 320, 280],
                lazyType: "none",
                shadow: 0,
                spinner: "off",
                stopLoop: "on",
                stopAfterLoops: 0,
                stopAtSlide: 1,
                shuffle: "off",
                autoHeight: "off",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "",
                disableProgressBar: "on",
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
    });
    </script>

</body>

</html>