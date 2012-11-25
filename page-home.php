<?php
/**
 * Template Name: Home Hero Template with 3 widget areas
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
            <img src="<?php bloginfo ( 'template_url' ) ?>/img/logo.png" class="img.aligncenter">
          </center>
        </div>
    </div>


<div class="container">
  <div class="marketing">
  <div class="row-fluid">
    

    <div class="span12">
        
            <!--le awesome flex slider-->
        <div class="flexslider">
              <ul class="slides">
                <li>
                  <img src="<?php bloginfo ( 'template_url' ) ?>/img/kitchen_adventurer_cheesecake_brownie.jpg" />
                </li>
                <li>
                  <img src="<?php bloginfo ( 'template_url' ) ?>/img/kitchen_adventurer_lemon.jpg" />
                </li>
                <li>
                  <img src="<?php bloginfo ( 'template_url' ) ?>/img/kitchen_adventurer_donut.jpg" />
                </li>
                <li>
                  <img src="<?php bloginfo ( 'template_url' ) ?>/img/kitchen_adventurer_caramel.jpg" />
                </li>
              </ul>
            </div><!--Le Awesome slider ends :( -->

        
      </div><!--span12-->
    </div><!--row-->
  <div class="row-fluid">

    <div class="span4">
      
    </div>
    <div class="span4">
      
    </div>
    <div class="span4">
      
    </div>
  </div>
</div><!-- /.marketing -->
</div>
<?php get_footer();?>
