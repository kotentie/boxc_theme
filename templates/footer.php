<?php if(is_page('Home')): ?>
	<div class="container-fluid">
		<div class="row feature-row">
			<div class="featured-in clearfix">
					<img class="img-responsive feature" src="/wp-content/themes/boxc_theme/assets/img/front-techcrunch.png" alt="techcrunch"/>
					<a href="http://technode.com/2013/06/26/china-based-companies-find-business-opportunities-in-international-shipping/">
						<img class="img-responsive feature" src="/wp-content/themes/boxc_theme/assets/img/front-technode.png" alt="technode"/>
					</a>
					<a href="http://venturebeat.com/2013/07/24/the-six-most-memorable-startups-from-500-startups-sixth-class/">
						<img class="img-responsive feature" src="/wp-content/themes/boxc_theme/assets/img/front-venturebeat.png" alt="venturebeat"/>
					</a>
					<a href="http://www.pingwest.com/demo/500-startups-boxc/">
						<img class="img-responsive feature" src="/wp-content/themes/boxc_theme/assets/img/front-pingwest.png" alt="pingwest"/>
					</a>
			</div>
		</div>
	</div>
<?php endif ?>

<footer class="content-info" role="contentinfo">
  <div class="container-fluid footer-container clearfix">
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
		<div class="startups500">
				<a href="http://500.co">
					<img src="/wp-content/themes/boxc_theme/assets/img/footer-500startups.png">
				</a>
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
