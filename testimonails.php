<?php
/**
 * Template Name: Testimonials Page
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
                <a href="http://www.twitter.com">
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
            <div class="span7 well"> <!--main content area-->

                      <!--=============================================The Tabs=============================================-->
                      <ul id="myTab" class="nav nav-pills zumbatabs">
                        <li class=""><a href="#zumba" data-toggle="tab">Zumba</a></li>
                        <li class=""><a href="#zumba_certifications" data-toggle="tab">Zumba Certifications</a></li>
                        <li class=""><a href="#aqua_zumba" data-toggle="tab">Aqua Zumba</a></li>
                        <li class=""><a href="#zumbatomic" data-toggle="tab">Zumbatomic</a></li>
                        <li class=""><a href="#zumba-activities" data-toggle="tab">Zumba Activities</a></li>
                        <li class="active"><a href="#testimonials" data-toggle="tab">Testimonials</a></li>
                        
                      </ul>

                      <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade" id="zumba">
                              <div class="span2">
                                  <img src="<?php bloginfo ( 'template_url' ) ?>/img/zumba/home1.jpg" class="img-rounded img-polaroid">
                              </div>
                              <div class="span4">
                                  <p>Zumba is the only Latin-inspired dance that blends red-hot international music, created by Grammy Award-winning producers, and contagious steps to form a "fitness-party" that is downright addictive. </p>
                                    <p>Zumba involves dance and aerobic elements. Zumba's choreography incorporates hip-hop, soca, samba, salsa, merengue, mambo, martial arts, and some Bollywood and belly dance moves. Squats and lunges are also included.</p>
                              </div>
                        </div>
                        <div class="tab-pane fade" id="zumba_certifications">
                          <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
                        </div>
                        <div class="tab-pane fade" id="aqua_zumba">
                          <img src="<?php bloginfo ( 'template_url' ) ?>/img/zumba/aqua.jpg">
                          <p>Known as the Zumba “pool party”, the aqua Zumba program gives new meaning to the idea of an invigorating workout. Intergrating the Zumba formula and philosophy with traditional aqua fitness disciplines, the Aqua Zumba class blends it all together into a safe, challenging, water based workout that’s cardio conditioning and most of all, exhilarating beyond belief.</p>
                        </div>
                        <div class="tab-pane fade" id="zumbatomic">
                          <img src="<?php bloginfo ( 'template_url' ) ?>/img/zumba/zumbatomic.gif">
                          <p>Zumbatomic is a specially designed class for children (ages 4 – 12) to encourage kids to develop a healthy lifestyle and to incorporate fitness as a natural part of their lives through dance, music and exercise. Kids will learn cool dance steps and routines while listening to kid friendly songs.</p>
                        </div>
                        <div class="tab-pane fade" id="zumba-activities">
                          <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
                        </div>
                        <div class="tab-pane fade active in" id="testimonials">
                          <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
                        </div>                        
                      </div>
                      <!--=============================================The Tabs=============================================-->
                      
              </div> <!--main content area-->

          
              

        </div><!--span12-->

    </div><!--row-->
    <!--======================bottom row======================-->
</div><!-- /.marketing -->
</div>
<?php get_footer();?>
