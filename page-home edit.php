<?php
/**
 * Template Name: Home Page Edit
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
                 <a href="http://www.facebook.com">
                    <img src="<?php bloginfo ( 'template_url' ) ?>/img/some/facebook.png" class="some">
                </a>
                <a href="http://www.twitter.com">
                    <img src="<?php bloginfo ( 'template_url' ) ?>/img/some/twitter.png" class="some">
                </a>
          </center>
        </div>
    </div>



<div class="container">
  

  <div class="row-fluid">

<ul class="ch-grid">
    <li>
      <a href="<?php bloginfo ( 'template_url' ) ?>instructors/">
        <div class="ch-item ch-img-1">
            <div class="ch-info">
                <h3>Zumba, Bokwa, Bollywood, Kids</h3>
                
            </div>
        </div>
      </a>
    </li>
    <li>
      <a href="<?php bloginfo ( 'template_url' ) ?>performers/">
        <div class="ch-item ch-img-2">
            <div class="ch-info">
                <h3>Contemporary, Jazz, Hip hop, Salsa, Bollywood and freestyle </h3>
               
            </div>
        </div>
      </a>
    </li>
    <li>
      <a href="<?php bloginfo ( 'template_url' ) ?>show-managers/">
        <div class="ch-item ch-img-3">
            <div class="ch-info">
                <h3>Concept, Preproduction, Postproduction, Design, Sound, lights  </h3>
               
            </div>
        </div>
      </a>
    </li>
</ul>

<ul class="ch-grid">
      <li>
        <a href="<?php bloginfo ( 'template_url' ) ?>dj/">
          <div class="ch-item ch-img-4">
            <div class="ch-info">
                <h3>House, techno</h3>
                
              </div>
          </div>
        </a>
      </li>
      <li>
        <a href="<?php bloginfo ( 'template_url' ) ?>choreographers/">
          <div class="ch-item ch-img-5">
              <div class="ch-info">
                  <h3>Schools, Colleges, Corporates, Competitions, flash mobs</h3>
                
              </div>
          </div>
        </a>
      </li>
  </ul>

  </div><!--row fluid-->
  
    


    


</div>
<?php get_footer();?>
