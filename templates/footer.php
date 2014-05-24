<footer class="content-info" role="contentinfo">
  <div class="container-fluid">
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <nav class="footer-navigation">
    <?php wp_nav_menu( array( 'theme_location' => 'footer_navigation' ) ); ?>
	</nav>
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
  </div>
</footer>

<?php wp_footer(); ?>
