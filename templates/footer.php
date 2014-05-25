<footer class="content-info" role="contentinfo">
  <div class="container-fluid footer-container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
  	<div class="row">
  		<div class="footer-link-container col-md-9">
		    <div class="footer-links col-md-3">
		    <h5> Boxc </h5>
		    <?php wp_nav_menu( array( 'theme_location' => 'footer_navigation_boxc' ) ); ?>
			</div>
			<div class="footer-links col-md-3">
		    <h5> Social </h5>
		    <?php wp_nav_menu( array( 'theme_location' => 'footer_navigation_social' ) ); ?>
			</div>
		    <div class="footer-links col-md-3">
		    <h5> Contact Us </h5>
		    <?php wp_nav_menu( array( 'theme_location' => 'footer_navigation_contact' ) ); ?>
			</div>
		</div>
	</div>
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
  </div>
</footer>
<?php wp_footer(); ?>
