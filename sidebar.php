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
          <blockquote>
            <p>
              Zumba is a fun way of doing a high impact cardio workout, so what is most imp is enjoying it, which makes strain and stress take a back seat, and before you realize, the one hour of jumping and jiving is done. For this,  one requires a good Zumba instructor like Senthil who can keep you in grip with the right kind of enjoyable steps coordinated with high calorie-burning.   Senthil sir's Zumba is full of life, smiles, n most Imp, the music, songs n steps changing every month, which doesn't make the routine boring. He himself is an ace Zumba sir, highly qualified in the art n makes his presence  in every class worthwhile! I am personally addicted to this workout because there is something new to look out for each month, it's fun, there's a lot of positive energy involved and a fun way to kickstart the day. 3 cheers to Senthil sir n his team
            </p>
              <small>Jyotika Suriya, Actress</small>


          </blockquote>

          
          
  
	</div><!--/.well .sidebar-nav -->
          </div><!-- /.span4 -->
          </div><!-- /.row .content -->
          </div><!-- /.row -->
