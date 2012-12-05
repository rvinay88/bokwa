<?php
/**
 * Template Name: Bokwa Page
 *
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.5
 *
 * Last Revised: July 16, 2012
 */
get_header(); ?>
    <div class="container">
        <div class="span12">

          <center>
            <a href="#">
              <img src="<?php bloginfo ( 'template_url' ) ?>/img/logo.png" class="logo">
            </a>  
              <br>
                 <a href="http://www.facebook.com/pages/The-s-community-of-entertainment/303645796319228">
                    <img src="<?php bloginfo ( 'template_url' ) ?>/img/some/facebook.png" class="some">
                </a>
                <a href="http://twitter.com/thescommunity">
                    <img src="<?php bloginfo ( 'template_url' ) ?>/img/some/twitter.png" class="some">
                </a>
          </center>
        </div>
    </div>

<!--===========================Navbar=======================-->
    <div class="navbar navbar-inverse navbar-relative-top">
           <div class="navbar-inner">
             <div class="container">
           <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
          <?php
           /** Loading WordPress Custom Menu  **/
           wp_nav_menu( array(
              'menu'            => 'main-menu',
              'container_class' => 'nav-collapse',
              'menu_class'      => 'nav',
              'fallback_cb'     => '',
              'menu_id' => 'main-menu',
              'walker' => new Bootstrapwp_Walker_Nav_Menu()
          ) ); ?>
        </div>
      </div>
    </div>
<!--===========================Navbar=======================-->

<div class="container">
  <div class="marketing">
  <div class="row">
    <!--========SPACER======--><div class="span12">
        <!--========SPACER======-->&nbsp;
    <!--========SPACER======--></div>

    </div><!--row-->
  <!--========SPACER======--><div class="span12">
        <!--========SPACER======-->
    <!--========SPACER======--></div>
    
<!--======================bottom row======================-->
    <div class="row">
        <div class="span12">
          <div class="span2"></div>
            <div class="span8 well"> <!--main content area-->

                      <!--=============================================The Tabs=============================================-->

                              <div class="span2">
                                  <img src="<?php bloginfo ( 'template_url' ) ?>/img/bokwa/bokwa.png" class="img-rounded img-polaroid">
                              </div>
                              <div class="span4">
                                  <p>Bokwa Fitness is an exercise dance class that combines cardio conditioning, strength training and flexibility. Furthermore, it integrates customary African dance with boxing maneuvers. The name came from a combination of two other words; “BO” stands for light boxing and “KWA” symbolizes the traditional dance Kwaito.</p>
                                    
                              </div>
                              <div class="span7">

                          <div id="myCarousel" class="carousel slide">
                            <!-- Carousel items -->
                            <div class="carousel-inner">
                              <div class="active item">
                                <img src="<?php bloginfo ( 'template_url' ) ?>/img/bokwa/bokwa-cert.jpg" class="img-rounded">
                                <div class="carousel-caption">
                                  <h4>Certified to train!</h4>
                                </div>                                  
                              </div>
                             <div class="item">
                                <img src="<?php bloginfo ( 'template_url' ) ?>/img/bokwa/bcred.jpg" class="img-rounded">
                                <div class="carousel-caption">
                                  <h4>Scored a 100% in the training module!</h4>
                                </div>
                              </div>
                              <div class="item">
                                <img src="<?php bloginfo ( 'template_url' ) ?>/img/bokwa/bokwa-site-red.jpg" class="img-rounded">
                                <div class="carousel-caption">
                                  <h4>The one and ONLY instructor in all of India</h4>
                                </div>
                              </div>
                              <div class="item">
                                <img src="<?php bloginfo ( 'template_url' ) ?>/img/bokwa/mavi.jpg" class="img-rounded">                              
                                <div class="carousel-caption">
                                  <h4>Learnt Bokwa from the Founder himself!</h4>
                                </div>
                              </div>                              
                            </div>
                            <!-- Carousel nav -->
                            <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                            <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
                          </div>    

                          </div><!--span7-->                                             
              </div> <!--main content area-->

          
              

        </div><!--span12-->

    </div><!--row-->
    <!--======================bottom row======================-->
</div><!-- /.marketing -->
</div>
<?php get_footer();?>
