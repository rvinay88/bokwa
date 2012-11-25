<?php
/**
 * Default Footer
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.1
 *
 * Last Revised: July 16, 2012
 */
?>
    <!-- End Template Content -->
      <footer>
<div class="container">
	<div class="row">
	<div class="span12">
		<div class="span11 well">
		
          <?php
           /** Loading The FooterMenu  **/
           wp_nav_menu( array(
              'menu'            => 'footer-menu',
              'menu_class'      => 'footer-menu',
              'menu_id' => 'footer-menu',
              'walker' => new Bootstrapwp_Walker_Nav_Menu()
          ) ); ?>

          <br><br>

          <p>&copy; <?php bloginfo('name'); ?> <?php the_time('Y') ?></p>	
          
          	</div><!--span11 well-->
	</div><!--span12-->

    </div> <!--row-->
</div><!-- /container -->
       </footer>
<?php wp_footer(); ?>

  </body>
</html>