<?php
/**
 * Template Name: Schedule
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
        <div class="span12 well">

          <div class="span12">

              <div class="span11 home-container">

                                      <h2><?php the_title(); ?></h2>

<p>                  
  The S community schedule is as follows...
</p>


     <table class="table table-bordered table-striped table-hover">
  <tr>
    <th>Time</th>
    <th>Mon</th>
    <th>Tue</th>
    <th>Wed</th>
    <th>Thu</th>
    <th>Fri</th>
    <th>Sat</th>
    <th>Sun</th>
  </tr>
  <tr>
  <th>7.30am-8.30am
</th>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td><b>ZUMBA BASIC</b>-Bamboola Play School
</td>
  <td><b>ZUMBA BASIC</b>-Bamboola Play School
</td>
  </tr>
  <tr>
  <th>9am-1.30pm
</th>
  <td><b>KIDS</b>-Sunshine School
</td>
  <td><b>KIDS</b>-Sunshine School
</td>
  <td><b>KIDS</b>-Sunshine School
</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  </tr>
  <tr>
  <th>
9am-3pm</th>
  <td></td>
  <td></td>
  <td><b>KIDS</b>-Balalok Matriculation
</td>
  <td></td>
  <td><b>KIDS</b>-Balalok Matriculation
</td>
  <td></td>
  <td></td>
  </tr>
  <tr>
  <th>
10am-11am</th>
  <td><b>ZUMBA BASIC</b> -Evolve Fitness Studios<br>
  <b>FITNESS CLASS</b>-Casa Apartments

</td>
  <td></td>
  <td><b>ZUMBA BASIC</b> -Evolve Fitness Studios
  <br>
  <b>FITNESS CLASS</b>-Casa Apartments
</td>
  <td></td>
  <td><b>ZUMBA BASIC</b> -Evolve Fitness Studios
  <br>

</td>
  <td></td>
  <td></td>
  </tr>
  <tr>
  <th> 

11am-12 NOON</th>
  <td></td>
  <td><b>ZUMBA BASIC</b>- O2 Besant Nagar</td>
  <td></td>
  <td><b>ZUMBA BASIC</b>- O2 Besant Nagar</td>
  <td></td>
  <td></td>
  <td></td>
  </tr>
  <tr>
  <th>

4pm-5pm</th>
  <td><b>KIDS</b>-Bamboola Play school
</td>
  <td></td>
  <td><b>KIDS</b>-Bamboola Play school
</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  </tr>
  <tr>
  <th>
5pm-6pm</th>
  <td></td>
  <td><b>ZUMBA BASIC</b>- Radisson Blu Egmore
</td>
  <td></td>
  <td><b>ZUMBA BASIC</b>- Radisson Blu Egmore<br>
  <b>KIDS</b>-Sunshine School

</td>
  <td><b>KIDS</b>-Sunshine School
</td>
  <td></td>
  <td></td>
  </tr>
  <tr>
  <th>

6pm-7pm</th>
  <td><b>BOLLYWOOD</b>-Evolve Fitness Studio
</td>
  <td></td>
  <td><b>BOLLYWOOD</b>-Evolve Fitness Studio
</td>
  <td><b>KIDS</b>-Sunshine School<br>
  <b>KIDS</b>-Sunshine School
</td>
  <td><b>BOLLYWOOD</b>-Evolve Fitness Studio<br>
  
</td>
  <td></td>
  <td></td>
  </tr>

  <tr>
  <th>



7pm- 8pm</th>
  <td><b>ZUMBA BASIC</b>-Evolve Fitness Studio
</td>
  <td></td>
  <td><b>ZUMBA BASIC</b>- Evolve Fitness Studio
</td>
  <td></td>
  <td><b>ZUMBA BASIC</b>-Evolve Fitness Studio
</td>
  <td></td>
  <td></td>
  </tr>
</table>


              </div>


              </div>

              

          </div><!--well-->

        </div><!--span12-->

    </div><!--row-->
    <!--======================bottom row======================-->
</div><!-- /.marketing -->
</div>
<?php get_footer();?>
