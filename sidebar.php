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
                    <img src="<?php bloginfo ( 'template_url' ) ?>/img/testimonials/jo.jpg" class="img-rounded">
                    <p>Senthil sir's Zumba is full of life, smiles and the music...He is an ace Zumba sir, highly qualified with a lot of positive energy
                      <a href="<?php bloginfo ( 'wpurl' ) ?>/instructors/zumba/testimonials">Read More</a>
                    </p>
                    <small>Jyothika Surya, Actress</small>
                  </blockquote>
                </li>
                <li>
                  <blockquote>
                    <img src="<?php bloginfo ( 'template_url' ) ?>/img/testimonials/suhasini.jpg" class="img-rounded">
                    <p>Senthil sir's Zumba is full of life, smiles and the music...He is an ace Zumba sir, highly qualified with a lot of positive energy</p>
                    <small>Suhasini Mani Ratnam, Feminist</small>
                  </blockquote>
                </li>
              </ul>
            </div><!--Le Awesome slider ends :( -->


          
          
  
	</div><!--/.well .sidebar-nav -->
          </div><!-- /.span4 -->
          </div><!-- /.row .content -->
          </div><!-- /.row -->
