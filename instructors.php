<?php
/**
 * Template Name: Performers Page
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

          <div class="span11 well">

              <div class="span7 home-container">
                  <h2><?php echo the_title(); ?></h2>
                    <p>
                      Our instructors are divided into the below three categories. Click on each link to know more...
                      <div class="accordion" id="accordion2">
                        <div class="accordion-group">
                          <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                              1. Kids
                            </a>
                          </div>
                          <div id="collapseOne" class="accordion-body collapse">
                            <div class="accordion-inner">
                              <p>Zumbatomic is a specially designed class for children (ages 4 – 12) to encourage kids to develop a healthy lifestyle and to incorporate fitness as a natural part of their lives through dance, music and exercise. Kids will learn cool dance steps and routines while listening to kid friendly songs.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-group">
                          <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                              2. Bollywood
                            </a>
                          </div>
                          <div id="collapseTwo" class="accordion-body collapse">
                            <div class="accordion-inner">
                              <p>This module is uniquely designed and executed by the “S” community where the participant learns the appropriate  dance moves to latest Bollywood numbers in a span of either 8 or 12 classes. A class starts with a warm up, moves to recap the previous routines, and then to New routines for the day, and finally ends with Cool down. End of every course the participant, learns to dance for the full song, chosen for the particular month.This class provides a combination of learning to dance whilst exercising.</p>
                            </div>
                          </div>
                        </div>  

                        <div class="accordion-group">
                          <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                              3. Hip Hop
                            </a>
                          </div>
                          <div id="collapseThree" class="accordion-body collapse">
                            <div class="accordion-inner">
                             <p>Lorem Ipsum dolor sit amet Hip Hop </p>
                            </div>
                          </div>
                        </div>
                      </div>

                    </p>
              </div>

              <?php get_sidebar('page'); ?>

          </div><!--well-->

        </div><!--span12-->

    </div><!--row-->
    <!--======================bottom row======================-->
</div><!-- /.marketing -->
</div>
<?php get_footer();?>
