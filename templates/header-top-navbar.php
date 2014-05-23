<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container-fluid" <?php 
    if(is_page('Home')): 
      echo 'id="front-page-header"'; 
      endif; 
      ?>>
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
    <?php if(is_page('Home')): ?>
      <div class="value-header"><h1> Fufilment from China. <br> $2.99 per package</h1></div>
    <?php endif; ?>
  </div>
</header>
