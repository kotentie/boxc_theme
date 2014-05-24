<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container-fluid" id="front-page-header">
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
      <div class="value-header"><h1> Fufillment From China <br> $2.99 per package</h1></div>
  </div>
   <div class="container-fluid">
    <div class="row form-container">
    <form class="form-inline" role="form">
      <div class="form-group form-weight col-md-3">
        <label class="form-label" for="package-weight">Weight</label>
        <input type="text" class="form-control" id="package-weight" placeholder="2.5 lbs">
      </div>
      <div class="form-size col-md-4">
        <div class="form-group">
          <label class="form-label" for="package-d0">Package Size</label>
          <input type="text" class="form-control" id="package-d0" placeholder="2in">
        </div>
        <div class="form-group form-size">
          <label class="form-label" for="package-d1"> X </label>
          <input type="text" class="form-control" id="packages-d1" placeholder="2in">
        </div>
        <div class="form-group form-size">
          <label class="form-label" for="package-d2"> X </label>
          <input type="text" class="form-control" id="package-d2" placeholder="2in">
        </div>
      </div>
      <div class="form-btn col-md-4">
      <button type="submit" class="btn btn-warning">Get Estimate</button>
    </div>
    </form>
    </div>
  </div>
</header>
