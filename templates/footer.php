<footer class="content-info" role="contentinfo">
  <div class="container-fluid footer-container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
  	<div class="row">
  		<div class="footer-link-container">
		    <div class="footer-links">
		    <h5> Boxc </h5>
		    <?php wp_nav_menu( array( 'theme_location' => 'footer_navigation_boxc' ) ); ?>
			</div>
			<div class="footer-links">
		    <h5> Social </h5>
		    <?php wp_nav_menu( array( 'theme_location' => 'footer_navigation_social' ) ); ?>
			</div>
		    <div class="footer-links">
		    <h5> Contact Us </h5>
		    <?php wp_nav_menu( array( 'theme_location' => 'footer_navigation_contact' ) ); ?>
			</div>
		</div>
	</div>
	<div class="row">
    	<div class="footer-copy">
    		<div class="footer-text">
    			<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights Reserved. | TOS | Privacy | Sitemap</p>
  			</div>
  		</div>
  	</div>
  </div>
</footer>
<?php wp_footer(); ?>
