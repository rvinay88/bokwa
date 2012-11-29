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

          <?php wp_reset_query(); ?>
          <h5> Testimonials </h5>
  
  <?php $query = new WP_Query( 'post_type=testimonials' ); ?>

          
              <!--le awesome flex slider-->
        <div class="flexslider">
              <ul class="slides">
                <li>
                  <blockquote>
                    <p><?php echo the_excerpt(); ?></p>
                    <small><?php echo the_title(); ?></small>
                  </blockquote>
                </li>
              </ul>
            </div><!--Le Awesome slider ends :( -->


          
          
  
	</div><!--/.well .sidebar-nav -->
          </div><!-- /.span4 -->
          </div><!-- /.row .content -->
          </div><!-- /.row -->
