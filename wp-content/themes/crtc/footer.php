
<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage CRTC
 * @since CRTC 2.0
 */
?>

    <div class="section __black footer" id="slant-footer">
    	<svg viewBox="0 0 200 10" class="svg-top" preserveAspectRatio="xMinYMin slice">
        <polygon points="0,0 200,0 200,10"></polygon>
      </svg>
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <nav>
              <?php
								wp_nav_menu( array(
									'theme_location' => 'primary',
									'menu'              => 'Footer',
		              'depth'             => 1,
		              'container'         => '',
		              'container_id' 			=> '',
		              'container_class'   => '',
		              'menu_class'        => 'nav nav-justified',
		              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		              'walker'            => new wp_bootstrap_navwalker()
								 ) );
							?>
            </nav>
          </div>
          <div class="col-xs-12">
            <nav>
              <?php
								wp_nav_menu( array(
									'theme_location' => 'primary',
									'menu'              => 'Logos',
		              'depth'             => 1,
		              'container'         => '',
		              'container_id' 			=> '',
		              'container_class'   => '',
		              'menu_class'        => 'nav nav-justified',
		              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		              'walker'            => new wp_bootstrap_navwalker()
								 ) );
							?>
            </nav>
          </div>
        </div>
      </div>
    </div>
  
		<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/build/production.js"></script>
		<?php wp_footer(); ?>
	</body>
</html>
