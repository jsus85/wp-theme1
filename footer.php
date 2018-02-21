  <footer class="footer">
            <div class="container">
                <div class="col-md-4 col-sm-4">
                    <div class="footer-widget about-widget">
                        <?php   the_custom_logo();?>
                        <p><?php echo do_shortcode( '[do_widget id=text-3 ]' );?></p>
                        <!--<a href="#!" class="thm-btn">Buy Now</a>-->
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="footer-widget link-widget">
                        <div class="title">
                            <h2>Menú</h2>
                        </div>
                 

 <?php
                wp_nav_menu( array(
                    'menu_class' => 'links',
                    'container' => false ,
                    'submenu_class' => 'submenu-hide'

                ) );
?> 
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="footer-widget contact-widget">
                        <div class="title">
                            <h2>Contáctanos</h2>
                        </div>
                        <ul>
                            <li>
                                <div class="icon-box dtc">
                                    <i class="flaticon-placeholder"></i>
                                </div>
                                <div class="content dtc">
                                    <h3>Cl, Marquez de Torre Tagle  N° 357 - <br>Dpto. 301 - Miraflores.</h3>
                                </div>
                            </li>
                            <li>
                                <div class="icon-box dtc">
                                    <i class="flaticon-technology"></i>
                                </div>
                                <div class="content dtc">
                                    <h3>(1) 719-7140 / (1) 719-7850</h3>
                                </div>
                            </li>
                            <li>
                                <div class="icon-box dtc">
                                    <i class="flaticon-interface"></i>
                                </div>
                                <div class="content dtc">
                                    <h3>correo@poliexport.com</h3>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <section class="bottom-footer">
            <div class="container">
                <div class="left-text pull-left">
                    <p>© 2018 PoliExport - Diseñador por <a href="https://www.phsperu.com/" target="_blank">PHSPERU.com</a></p>
                </div>
                <div class="right-text pull-right">
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <?php 
            wp_footer();
        ?>
        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target=".top-bar"><span class="icon flaticon-arrows"></span></div>
        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target=".top-bar"><span class="icon flaticon-arrows"></span></div>
        <!-- jQuery js -->
        <script src="<?php echo get_template_directory_uri();?>/assets/jquery/jquery-1.11.3.min.js"></script>
        <!-- bootstrap js -->
        <script src="<?php echo get_template_directory_uri();?>/assets/bootstrap/js/bootstrap.min.js"></script>
        <!-- jQuery ui js -->
        <script src="<?php echo get_template_directory_uri();?>/assets/jquery-ui-1.11.4/jquery-ui.js"></script>
        <!-- owl carousel js -->
        <script src="<?php echo get_template_directory_uri();?>/assets/owl.carousel-2/owl.carousel.min.js"></script>
        <!-- jQuery validation -->
        <script src="<?php echo get_template_directory_uri();?>/assets/jquery-validation/dist/jquery.validate.min.js"></script>
        <!-- gmap.js helper -->
        <script src="https://maps.googleapis.com/maps/api/js?sensor=true&v=3"></script>
        <!-- gmap.js -->
        <script src="<?php echo get_template_directory_uri();?>/assets/gmap.js"></script>
        <!-- mixit up -->
        <script src="<?php echo get_template_directory_uri();?>/assets/jquery.mixitup.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/jquery.fitvids.js"></script>
        <!-- revolution slider js -->
        <script src="<?php echo get_template_directory_uri();?>/assets/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <!-- fancy box -->
        <script src="<?php echo get_template_directory_uri();?>/assets/fancyapps-fancyBox/source/jquery.fancybox.pack.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/Polyglot-Language-Switcher-master/js/jquery.polyglot.language.switcher.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/nouislider/nouislider.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/bootstrap-touch-spin/jquery.bootstrap-touchspin.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/jquery-appear/jquery.appear.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/jquery.countTo.js"></script>
        <!-- Style-switcher  -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/jQuery.style.switcher.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.2/js.cookie.min.js"></script>
        <!-- theme custom js  -->
        <script id="map-script" src="<?php echo get_template_directory_uri();?>/js/default-map.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/custom.js"></script>
    </div>
</body>

</html>
