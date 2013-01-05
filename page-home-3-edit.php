<?php
/**
 * Template Name: Home Page 3rd Edit
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

        </div>
    </div>



<div class="container">
  <div class="row-fluid">
    <div class="span12">
  <br>
              <!--le awesome flex slider-->
        <div class="flexslider2">
              <ul class="slides">
                <li>
                  <img src="<?php bloginfo ( 'template_url' ) ?>/img/home/slides/1.jpg" />
                </li>
                <li>
                  <img src="<?php bloginfo ( 'template_url' ) ?>/img/home/slides/2.jpg" />
                </li>
                <li>
                  <img src="<?php bloginfo ( 'template_url' ) ?>/img/home/slides/3.jpg" />
                </li>
                <li>
                  <img src="<?php bloginfo ( 'template_url' ) ?>/img/home/slides/4.jpg" />
                </li>
              </ul>
            </div><!--Le Awesome slider ends :( -->
          <center>

              <br>
                 <a href="http://www.facebook.com/pages/The-s-community-of-entertainment/303645796319228">
                    <img src="<?php bloginfo ( 'template_url' ) ?>/img/some/facebook.png" class="some">
                </a>
                <a href="http://twitter.com/thescommunity">
                    <img src="<?php bloginfo ( 'template_url' ) ?>/img/some/twitter.png" class="some">
                </a>
          </center>

      </div>
  </div><!--row fluid-->
</div><!--container--> 



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
  <div class="row-fluid">
    <div class="span12">
      <ul class="ch-grid1">
          <li>
            
            <a href="<?php bloginfo ( 'wpurl' ) ?>/instructors/">
              <div class="ch-item ch-img-1">
                  <div class="ch-info">
                      <p>Instructors</p>
                      <h3>Zumba, Bokwa, Bollywood, Kids</h3>
                        
                  </div>
              </div>
            </a>
          </li>
          <li>
            
            <a href="<?php bloginfo ( 'wpurl' ) ?>/performers/">
              <div class="ch-item ch-img-2">
                  <div class="ch-info">
                      <p>Performers</p>
                      <h3>Contemporary, Jazz, Hip hop, Salsa, Bollywood and freestyle </h3>
                      
                  </div>
              </div>
            </a>
          </li>
          <li>
            
            <a href="<?php bloginfo ( 'wpurl' ) ?>/show-managers/">
              <div class="ch-item ch-img-3">
                  <div class="ch-info">
                      <p>Show Managers</p>
                      <h3>Concept, Preproduction, Postproduction, Design, Sound, lights  </h3>
                      
                  </div>
              </div>
            </a>
          </li>
            <li>
              
              <a href="<?php bloginfo ( 'wpurl' ) ?>/dj/">
                <div class="ch-item ch-img-4">
                  <div class="ch-info">
                      <p>DJs</p>
                      <h3>House, techno, hip hop, club, electro</h3>
                        
                    </div>
                </div>
              </a>
            </li>
            <li>
              
              <a href="<?php bloginfo ( 'wpurl' ) ?>/choreographers/">
                <div class="ch-item ch-img-5">
                    <div class="ch-info">
                        <p>Choreographers</p>
                        <h3>Schools, Colleges, Corporates, Competitions, flash mobs</h3>
                        
                    </div>
                </div>
              </a>
            </li>          
      </ul>



      </div><!--span12-->

        </div><!--row fluid-->
  
    


    

<?php get_footer();?>
</div>

