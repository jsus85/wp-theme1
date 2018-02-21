<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Poliexport SAC</title>
    <?php wp_head();?>
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/responsive.css">
    <!-- Color css -->
    <link rel="stylesheet" id="jssDefault" href="<?php echo get_template_directory_uri();?>/css/color.css">
    <link rel="icon" type="<?php echo get_template_directory_uri();?>/image/png" href="<?php echo get_template_directory_uri();?>/img/favicon.ico" />
</head>

<body <?php body_class(); ?>>

  <div class="boxed_wrapper">
        <section class="top-bar">
            <div class="container">

                <!--barra derecha-->
                <div class="top-bar-right pull-right">
                    <!--<div class="top-info">
                        <ul>
                            <li><span>No1 :</span> World’s Leading Industrial Solution Provider USA</li>
                            <li><i class="flaticon-interface"></i> Factory@Steeltheems.com</li>
                        </ul>
                    </div>-->
                    <div class="social">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!--barra derecha-->
            </div>
        </section>
        <header class="header">
            <div class="container">
                <div class="logo pull-left">
                    <?php
                    the_custom_logo();
                    ?>

                </div>
                <div class="header-right pull-right">
                    <div class="single-header-right">
                        <div class="icon-box">
                            <i class="flaticon-placeholder"></i>
                        </div>
                        <div class="content-box">
                            <?php echo do_shortcode( '[do_widget id=text-4 ]' );?>
                        </div>
                    </div>
                    <div class="single-header-right">
                        <div class="icon-box">
                            <i class="flaticon-technology"></i>
                        </div>
                        <div class="content-box">
                            <b>(01) 719-7140</b>
                            <p>(01) 719-7850</p>
                        </div>
                    </div>
                   <!-- <div class="single-header-right">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Download" class="icon-btn"><i class="flaticon-cloud"></i></a>
                        <button class="thm-btn"><i class="fa fa-share"></i> get a Quote</button>
                    </div>-->
                </div>
            </div>
        </header>

           <section class="mainmenu-wrapper stricky">
            <div class="container">
               
                <nav class="mainmenu-holder">
                    <div class="nav-header">
                    
                        <?php
                                wp_nav_menu( array(
                                    'menu_class' => 'navigation',
                                    'container' => false ,
                                    'submenu_class' => 'submenu'

                                ) );
                            ?>                      
                    </div>
                    <div class="nav-footer hidden-lg">
                        <ul>
                            <li>
                                <button class="menu-expander"><i class="fa fa-list-ul"></i></button>
                            </li>
                        </ul>
                    </div>
                </nav>
               



            </div>
        </section>