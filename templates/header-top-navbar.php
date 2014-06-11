<?php if(is_page('Home')): 
  get_template_part('templates/header-front-page');
?>
<?php else:?>
<header class="banner navbar navbar-default navbar-fixed-top" role="banner">
  <div class="container-fluid">
    <div class="navbar-container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo home_url(); ?>/"><img src="/wp-content/themes/boxc_theme/assets/img/boxc_brand2.png" alt="brand"></a>
      </div>

      <nav class="collapse navbar-collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
          endif;
        ?>
      </nav>
    </div>
  </div>
</header>
<?php endif; ?>


