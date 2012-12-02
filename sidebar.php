<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */
?>
<div class="span3 well">
	<h5>Latest Updates</h5>
	<?php query_posts('post_type=news&posts_per_page=3'); ?>
    		<?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
           
              <div class="media news-body">
   
                  <h6 class="news-heading"><?php echo the_title(); ?></h6>
                    <em class="news-object"><?php echo the_excerpt(); ?></em>                       
   
              </div>
    
          <?php endwhile; endif; ?>     
          <hr>     

          <h5> Testimonials </h5>
  
            
              <!--le awesome flex slider-->
        <div class="flexslider">
              <ul class="slides">
                <li>
                  <blockquote>
                    <img src="<?php bloginfo ( 'template_url' ) ?>/img/testimonials/jo.png" class="img-rounded">
                    <p>Senthil sir's Zumba is full of life, smiles and the music...He is an ace Zumba sir, highly qualified with a lot of positive energy
                      <a href="<?php bloginfo ( 'wpurl' ) ?>/instructors/zumba/testimonials">Read More</a>
                    </p>
                    <small>Jyothika Surya, Actress</small>
                  </blockquote>
                </li>

                <li>
                  <blockquote>
                    <img src="<?php bloginfo ( 'template_url' ) ?>/img/testimonials/devayani.jpg" class="img-rounded">
                    <p>I like Senthil's Zumba classes for the simple reason that it is SO much fun...So much that at end of the class, you don't even realise that you have had an hour of intese workout. </p>
                    <small>Devayani, Actress</small>
                  </blockquote>
                </li>
                <li>
                  <blockquote>
                    <img src="<?php bloginfo ( 'template_url' ) ?>/img/testimonials/paul.jpg" class="img-rounded">
                    <p>on Senthil "The guy is interesting!". I raised an idea that I should have a premium floor in Kerala...and I would want Senthil Sir to play a key role in raising the standards through his multiple Zumba certifications!! Just loved his class!</p>
                    <small>Amala Paul, Actress</small>
                  </blockquote>
                </li>
                 <li>
                  <blockquote>
                    <img src="<?php bloginfo ( 'template_url' ) ?>/img/testimonials/surya.jpg" class="img-rounded">
                    <p>So thankful to you, sir! "My wife enjoys every class of yours!" I get to attend his classes, while I am not shooting, and realise that everytime the benchmark intensity goes higher and higher! People in the class just love it!! Congrats Senthil sir!!</p>
                    <small>Surya, Actor</small>
                  </blockquote>
                </li>
                               
                <li>
                  <blockquote>
                    <img src="<?php bloginfo ( 'template_url' ) ?>/img/testimonials/ramya.jpg" class="img-rounded">
                    <p>Someone as health conscious as me couldnt have asked for more than Senthil's Zumba classes. I try not to miss even a single day! Love Senthil's Zumba classes for the kind of intensity and fun it gives me!</p>
                    <small>Ramya, Actress</small>
                  </blockquote>
                </li>
              </ul>
            </div><!--Le Awesome slider ends :( -->


          
          
  
	</div><!--/.well .sidebar-nav -->
          </div><!-- /.span4 -->
          </div><!-- /.row .content -->
          </div><!-- /.row -->
