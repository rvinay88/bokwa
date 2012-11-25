<?php
/**
 * Template Name: Performers Page2
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
              <img src="<?php bloginfo ( 'template_url' ) ?>/img/logo.png">
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

              <div class="span10">
              <!--le awesome flex slider-->
                <div class="flexslider">
                  <ul class="slides">
                    <li>
                      <img src="<?php bloginfo ( 'template_url' ) ?>/img/perf/1.jpg" class="img-polaroid" />
                    </li>
                    <li>
                      <img src="<?php bloginfo ( 'template_url' ) ?>/img/perf/2.jpg" class="img-polaroid" />
                    </li>
                    <li>
                      <img src="<?php bloginfo ( 'template_url' ) ?>/img/perf/3.jpg" class="img-polaroid" />
                    </li>
                    <li>
                      <img src="<?php bloginfo ( 'template_url' ) ?>/img/perf/4.jpg" class="img-polaroid" />
                    </li>
                    <li>
                      <img src="<?php bloginfo ( 'template_url' ) ?>/img/perf/5.jpg" class="img-polaroid" />
                    </li>
                    <li>
                      <img src="<?php bloginfo ( 'template_url' ) ?>/img/perf/6.jpg" class="img-polaroid" />
                    </li>
                    <li>
                      <img src="<?php bloginfo ( 'template_url' ) ?>/img/perf/7.jpg" class="img-polaroid" />
                    </li>
                    <li>
                      <img src="<?php bloginfo ( 'template_url' ) ?>/img/perf/8.jpg" class="img-polaroid" />
                    </li>
                    <li>
                      <img src="<?php bloginfo ( 'template_url' ) ?>/img/perf/9.jpg" class="img-polaroid" />
                    </li>

                  </ul>
                </div><!--Le Awesome slider ends :( -->
              </div>
              <div class="span12 home-container">
                  <h2><?php the_title(); ?></h2>

<p>                  
The S Community performers started as a college dance team, and slowly evolved to be one of the city’s famous dance crews, potraying various forms of dance (contemporary, Jazz, Hip hop, Salsa, Bollywood and freestyle ).</p>
<p>The highlight of our performing academy has been over the usage of hand carrying and set property.Team “S” community, has represented India and clinched the runner up title at the International Modern Dance Competition held at Malaysia. We have completed over 1500 shows and and are still counting</p>

              </div>

          </div><!--well-->

        </div><!--span12-->

    </div><!--row-->
    <!--======================bottom row======================-->
</div><!-- /.marketing -->
</div>
<?php get_footer();?>
