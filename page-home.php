<?php
/**
 * Template Name: Home Page
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
    <div class="span12">
        <div class="well">
            <!--le awesome flex slider-->
        <div class="flexslider">
              <ul class="slides">
                <li>
                  <img src="<?php bloginfo ( 'template_url' ) ?>/img/kitchen_adventurer_cheesecake_brownie.jpg" class="img-rounded" />
                </li>
                <li>
                  <img src="<?php bloginfo ( 'template_url' ) ?>/img/kitchen_adventurer_lemon.jpg" class="img-rounded" />
                </li>
                <li>
                  <img src="<?php bloginfo ( 'template_url' ) ?>/img/kitchen_adventurer_donut.jpg" class="img-rounded" />
                </li>
                <li>
                  <img src="<?php bloginfo ( 'template_url' ) ?>/img/kitchen_adventurer_caramel.jpg" class="img-rounded" />
                </li>
              </ul>
            </div><!--Le Awesome slider ends :( -->
          </div><!--well-->
        
      </div><!--span12-->
    </div><!--row-->
  <div class="row-fluid">

    <div class="span4">
      <div class="well orange">
        <a href="#">
            <img src="<?php bloginfo ( 'template_url' ) ?>/img/sblack.png" class="img-rounded">
        </a>
      </div>
    </div>
    <div class="span4">
      <div class="well pink">
        <a href="<?php echo home_url( '/' ); ?>zhumba">
          <img src="<?php bloginfo ( 'template_url' ) ?>/img/zumbabig.png" class="img-rounded">
        </a>
      </div>
    </div>
    <div class="span4">
      <div class="well green">
        <a href="<?php echo home_url( '/' ); ?>bokwa">
          <img src="<?php bloginfo ( 'template_url' ) ?>/img/bokwa2.png" class="img-rounded">
        </a>
      </div>
    </div>
  </div>
  <!--========SPACER======--><div class="span12">
        <!--========SPACER======-->
    <!--========SPACER======--></div>
    

</div><!-- /.marketing -->
</div>
<?php get_footer();?>
