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
                      <ul id="myTab" class="nav nav-pills zumbatabs">
                        <li class="active"><a href="#bokwa" data-toggle="tab">Bokwa</a></li>
                        <li class=""><a href="#bokwa_certifications" data-toggle="tab">Bokwa Certifications</a></li>                     
                      </ul>

                      <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active in" id="zumba">
                              <div class="span2">
                                  <img src="<?php bloginfo ( 'template_url' ) ?>/img/bokwa/bokwa.png" class="img-rounded img-polaroid">
                              </div>
                              <div class="span4">
                                  <p>Bokwa Fitness is an exercise dance class that combines cardio conditioning, strength training and flexibility. Furthermore, it integrates customary African dance with boxing maneuvers. The name came from a combination of two other words; “BO” stands for light boxing and “KWA” symbolizes the traditional dance Kwaito.</p>
                                    
                              </div>
                        </div>
                        <div class="tab-pane fade" id="bokwa_certifications">
                          <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
                        </div>

                      </di v>
                      <!--=============================================The Tabs=============================================-->
                      
              </div> <!--main content area-->

          
              

        </div><!--span12-->

    </div><!--row-->
    <!--======================bottom row======================-->
</div><!-- /.marketing -->
</div>
<?php get_footer();?>
