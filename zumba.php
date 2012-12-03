<?php
/**
 * Template Name: Zumba Page
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
                        <li class="active"><a href="#zumba" data-toggle="tab">Zumba</a></li>
                        <li class=""><a href="#zumba_certifications" data-toggle="tab">Zumba Certifications</a></li>
                        <li class=""><a href="#aqua_zumba" data-toggle="tab">Aqua Zumba</a></li>
                        <li class=""><a href="#zumbatomic" data-toggle="tab">Zumbatomic</a></li>
                        <li class=""><a href="#zumba-activities" data-toggle="tab">Zumba Activities</a></li>
                        <li class=""><a href="#testimonials" data-toggle="tab">Testimonials</a></li>
                        
                      </ul>

                      <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active in" id="zumba">
                              <div class="span2">
                                  <img src="<?php bloginfo ( 'template_url' ) ?>/img/zumba/home1.jpg" class="img-rounded img-polaroid">
                              </div>
                              <div class="span4">
                                  <p>Zumba is the only Latin-inspired dance that blends red-hot international music, created by Grammy Award-winning producers, and contagious steps to form a "fitness-party" that is downright addictive. </p>
                                    <p>Zumba involves dance and aerobic elements. Zumba's choreography incorporates hip-hop, soca, samba, salsa, merengue, mambo, martial arts, and some Bollywood and belly dance moves. Squats and lunges are also included.</p>
                              </div>
                        </div>
                        <div class="tab-pane fade" id="zumba_certifications">
                          
                           <div id="myCarousel2" class="carousel slide">
                            <!-- Carousel items -->
                            <div class="carousel-inner">
                              <div class="active item">
                                <img src="<?php bloginfo ( 'template_url' ) ?>/img/zumba/cert/b1.jpg" class="img-rounded">
                                <div class="carousel-caption">
                                  <h4>Zumba Basic 1 with Hermann Melow at Mumbai, India</h4>
                                </div>                                  
                              </div>
                              <div class="item">
                                <img src="<?php bloginfo ( 'template_url' ) ?>/img/zumba/cert/b2.jpg" class="img-rounded">
                                <div class="carousel-caption">
                                  <h4>Zumba Basic 2 with Kelly Bullard at Mumbai, India</h4>
                                </div>
                              </div>
                              <div class="item">
                                <img src="<?php bloginfo ( 'template_url' ) ?>/img/zumba/cert/za.jpg" class="img-rounded">
                                <div class="carousel-caption">
                                  <h4>ZumbAtomic with Maria Teressa Stone at Manila, Philippines</h4>
                                </div>
                              </div>
                              <div class="item">
                                <img src="<?php bloginfo ( 'template_url' ) ?>/img/zumba/cert/az.jpg" class="img-rounded">
                                <div class="carousel-caption">
                                  <h4>Aqua Zumba with Kelly Bullard at Bengaluru, India</h4>
                                </div>
                              </div>
                            </div>
                            <!-- Carousel nav -->
                            <a class="carousel-control left" href="#myCarousel2" data-slide="prev">&lsaquo;</a>
                            <a class="carousel-control right" href="#myCarousel2" data-slide="next">&rsaquo;</a>
                          </div>

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
                                                    <div id="myCarousel" class="carousel slide">
                            <!-- Carousel items -->
                            <div class="carousel-inner">
                              <div class="active item">
                                <img src="<?php bloginfo ( 'template_url' ) ?>/img/zumba/activities/license.jpg" class="img-rounded">
                                <div class="carousel-caption">
                                  <h4>Senthil, ZIN - Chennai's ONLY multiple certified. Licensed to teach Zumba, Aqua Zumba and ZumbAtomic</h4>
                                </div>                                  
                              </div>
                              <div class="item">
                                <img src="<?php bloginfo ( 'template_url' ) ?>/img/zumba/activities/zumba-party.jpg" class="img-rounded">
                                <div class="carousel-caption">
                                  <h4>Senthil, ZIN - Part of Chennai's first Zumba Party</h4>
                                </div>
                              </div>
                              <div class="item">
                                <img src="<?php bloginfo ( 'template_url' ) ?>/img/zumba/activities/zumba-party2.jpg" class="img-rounded">
                                <div class="carousel-caption">
                                  <h4>Senthil, ZIN - Part of Chennai'"'s party featuring ZIN's from Chennai, Mumbai and France</h4>
                                </div>
                              </div>
                              <div class="item">
                                <img src="<?php bloginfo ( 'template_url' ) ?>/img/zumba/activities/beach-party.jpg" class="img-rounded">
                                <div class="carousel-caption">
                                  <h4>Senthil, ZIN - Part of Chennai's first Zumba Beach Party</h4>
                                </div>
                              </div>
                              <div class="item">
                                <img src="<?php bloginfo ( 'template_url' ) ?>/img/zumba/activities/indo-france.jpg" class="img-rounded">                              
                                <div class="carousel-caption">
                                  <h4>Senthil, ZIN - Indo France Zumba cultural exchange</h4>
                                </div>
                              </div>                              
                            </div>
                            <!-- Carousel nav -->
                            <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                            <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
                          </div>

                        </div>
                        <div class="tab-pane fade" id="testimonials">
                          
              <!--le awesome flex slider-->
              
        <div class="flexslider span6">
              <ul class="slides">
                <li>
                  <blockquote>
                   
                    <p>Senthil sir's Zumba is full of life, smiles and the music...He is an ace Zumba sir, highly qualified with a lot of positive energy
                      <a href="<?php bloginfo ( 'wpurl' ) ?>/instructors/zumba/testimonials">Read More</a>
                    </p>
                    <small>Jyothika Surya, Actress</small>
                  </blockquote>
                </li>
                <li>
                  <blockquote>
                   
                    <p>I like Senthil's Zumba classes for the simple reason that it is SO much fun...So much that at end of the class, you don't even realise that you have had an hour of intese workout. </p>
                    <small>Devayani, Actress</small>
                  </blockquote>
                </li>
                <li>
                  <blockquote>
                   
                    <p>on Senthil "The guy is interesting!". I raised an idea that I should have a premium floor in Kerala...and I would want Senthil Sir to play a key role in raising the standards through his multiple Zumba certifications!! Just loved his class!</p>
                    <small>Amala Paul, Actress</small>
                  </blockquote>
                </li>
                 <li>
                  <blockquote>
                  
                    <p>So thankful to you, sir! "My wife enjoys every class of yours!" I get to attend his classes, while I am not shooting, and realise that everytime the benchmark intensity goes higher and higher! People in the class just love it!! Congrats Senthil sir!!</p>
                    <small>Surya, Actor</small>
                  </blockquote>
                </li>
                               
                <li>
                  <blockquote>
                  
                    <p>Someone as health conscious as me couldnt have asked for more than Senthil's Zumba classes. I try not to miss even a single day! Love Senthil's Zumba classes for the kind of intensity and fun it gives me!</p>
                    <small>Ramya, Actress</small>
                  </blockquote>
                </li>
              </ul>
            </div><!--Le Awesome slider ends :( -->
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
