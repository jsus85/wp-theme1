<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package poliexport
 */

get_header();


?>






        <section class="rev_slider_wrapper ">
            <div id="slider1" class="rev_slider" data-version="5.0">
                <ul>
<?php
$args = array( 'post_type'   => 'slider_home' );
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); 

//the_post_thumbnail( 'single-post-thumbnail' );
    $post_id = get_the_ID(); 
    // echo the_post_thumbnail();
    // GET POST META 
     $titulo     = get_post_meta( $post_id, 'wps_titulo', true );
     $sub_titulo = get_post_meta( $post_id, 'wps_subtitulo', true );

     $link_contacto = get_post_meta( $post_id, 'cyb_name', true );
     $link_readmore = get_post_meta( $post_id, 'cyb_readmore', true );  
     
?>
                    <li data-transition="slidingoverlayleft">

                        <img src="<?php the_post_thumbnail_url();?>" alt="" width="1920" height="705" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="2">

                        <div class="tp-caption sfl tp-resizeme factory-caption-h1 text-center" data-x="center" data-hoffset="0" data-y="top" data-voffset="90" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="o:0" data-transform_out="o:0" data-start="500" style="text-shadow: rgb(0, 0, 0) 5px 2px 2px;">
                            <?php echo nl2br($titulo);?>
                        </div>
                        <div class="tp-caption sfl tp-resizeme factory-caption-p text-center" data-x="center" data-hoffset="0" data-y="top" data-voffset="255" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="o:0" data-transform_out="o:0" data-start="500" style="text-shadow: rgb(0, 0, 0) 2px 2px 2px;">
                            <?php echo nl2br($sub_titulo);?>
                        </div>
                        <div class="tp-caption sfl tp-resizeme factory-caption-p text-center" data-x="center" data-hoffset="-94" data-y="top" data-voffset="355" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="o:0" data-transform_out="o:0" data-start="500">
                            <a href="<?php echo $link_contacto;?>" class="thm-btn">Contáctenos</a>
                        </div>
                        <div class="tp-caption sfl tp-resizeme factory-caption-p text-center" data-x="center" data-hoffset="94" data-y="top" data-voffset="355" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="o:0" data-transform_out="o:0" data-start="500">
                            <a href="<?php echo $link_readmore;?>" class="thm-btn thm-blue-bg">Leer Más</a>
                        </div>
                    </li>
           <?php 
                    endforeach;
                    wp_reset_postdata();

           ?>
                </ul>
            </div>
        </section>

        <section class="call-to-action">
            <div class="container">
                <p><?php echo do_shortcode( '[do_widget id=text-2  ]' );?></p>
            </div>
        </section>
        
        <!-- Servicios -->
        <section class="our-services section-padding">
            <div class="container">
                <div class="row">

                    <div class="section-title text-center">
                        <h2><span>Servicios</span></h2>
                    </div>

<?php
// --- Servicios ----- 
$myposts = get_posts(array('category'  => 3, 'order' => 'DESC'));
 if ( $myposts ) {

    foreach ( $myposts as $post ) : 

?>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-our-service">
                            <div class="img-box">
                                <img src="<?php the_post_thumbnail_url($post->post_ID);?>" alt="Awesome Image" />
                                <div class="overlay">
                                    <div class="box">
                                        <div class="box-content">
                                            <a href="<?php the_permalink(); ?>">Leer mas <i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="servicio_detalle"><h3><?php echo $post->post_title;?></h3></a>
                            <p><?php echo $post->post_content;?></p>
                        </div>
                    </div>
<?php 

        endforeach;
        wp_reset_postdata();
    }
?>
        


                </div>

            </div>
        </section>
        <!-- Servicios -->


        <!-- Productos -->
        <section class="our-features">
            <div class="container">
                <div class="row">
<?php
        // --- Productos  ----- 
        $posts_productos = get_posts(array('category'  => 4, 'order' => 'DESC'));
         if ( $posts_productos ) {

            foreach ( $posts_productos as $post ) : 

                  
                    $iconox  = get_post_meta(  get_the_ID(), 'icono', true );

?>
                    <div class="col-md-3">
                        <div class="single-our-feature">
                            <div class="overlay" style="background-image: url(<?php the_post_thumbnail_url(get_the_ID());?>);">
                                <div class="box">
                                    <div class="box-content">
                                        <a href="<?php the_permalink(); ?>">Leer Más <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box">
                                <i class="<?php echo $iconox;?>"></i>
                            </div>
                            <h3><?php echo $post->post_title;?></h3>
                            <p><?php echo $post->post_excerpt;?></p>
                        </div>
                    </div>
  <?php 

        endforeach;
        wp_reset_postdata();
    }
?>

                </div>
            </div>
        </section>
        <!-- Productos -->

        <!-- Nosotros -->
        <?php 
        $post_nosotros = get_post(6); 
        $title = $post_nosotros->post_title;   
        $nosotros_id =  $post_nosotros->ID;
        $resumen_nosotros  = get_post_meta(  $nosotros_id, 'resumen', true );
?>
        <section class="about-section section-padding">
            <div class="container">
                <div class="section-title text-center">
                    <h2><span><?php echo $title;?></span></h2>
                </div>
                <div class="row about-text-wrapper">
                    <div class="col-lg-6  col-md-12">
                        <div class="img-box">                            
                            <img src="<?php echo get_the_post_thumbnail_url($nosotros_id);?>" alt="<?php echo $title;?>" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="right-textbox">
                            <p><?php echo $resumen_nosotros;?></p>
                        </div>
                        <a href="<?php echo get_permalink( $nosotros_id);?>" class="thm-btn thm-blue-bg">Leer Más</a>
                    </div>
                </div>

            </div>
        </section>
        <!--Nosotros--->    
    
<?php
get_footer();
?>