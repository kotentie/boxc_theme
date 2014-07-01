<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container-fluid" id="front-page-header">
    <div class="navbar-container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo home_url(); ?>/"><img src="/wp-content/themes/boxc_theme/assets/img/boxc_brand.png" alt=""></a>
      </div>

      <nav class="collapse navbar-collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
          endif;
        ?>
      </nav>
    </div>
    <div class="row arrow-nav">
        <span class="glyphicon glyphicon-chevron-left" id="slide-back"> </span>
        <span class="glyphicon glyphicon-chevron-right arrow-right" id="slide-forward"></span>
    </div>
      <div class="value-header clearfix" id="value-header-1">
        <h1> Ship direct from China to the US</h1> <h4>It's like domestic shipping: fast, cheap, and hassel free.</h4>
        <div class="value-header-btn">
            <a href="http://ship.boxc.com/account/register" class="btn btn-success tada animated">Ship your first package for free</a>
        </div>
      </div>
      <div class="value-header clearfix" style="display: none" id="value-header-2">
        <h1> Keep your inventory in China </h1> <h4>Let Boxc Pick, Pack and Ship Directly to your USA Customers.</h4>
          <div class="value-header-btn">
            <a href="http://ship.boxc.com/account/register" class="btn btn-success tada animated">Ship your first package for free</a>
          </div>
      </div>
      <div class="row slide-button-container">
        <div class="slide-buttons">
          <a class="front-page-slide glyphicon glyphicon-unchecked" id="slide-img-1"></a>
          <a class="front-page-slide glyphicon glyphicon-unchecked" id="slide-img-2"></a>
          <a class="front-page-slide glyphicon glyphicon-unchecked" id="slide-img-3"></a>
          <a class="front-page-slide glyphicon glyphicon-unchecked" id="slide-img-4"></a>
        </div>
    </div>
  </div>
   <div class="container-fluid">
    <div class="row form-container">
    <form class="form-inline" role="form" action="/estimate" method="get">
      <div class="form-group form-weight">
        <label class="form-label" for="package-weight">Weight</label>
        <input type="text" class="form-control" id="package-weight" name="weight" placeholder="2.5 lbs" required pattern="\d.{0,4}" title="example: 1.2 lbs">
      </div>
        <div class="form-group form-size">
          <label class="form-label" for="package-d0">Package Size</label>
          <input type="text" class="form-control" id="package-d0" name="depth" placeholder="2in" required pattern="\d.{0,4}" title="example: 3in">
          <label class="form-label" for="package-d1"> X </label>
          <input type="text" class="form-control" id="packages-d1" name="height" placeholder="2in" required pattern="\d.{0,4}" title="example: 3in">
           <label class="form-label" for="package-d2"> X </label>
          <input type="text" class="form-control" id="package-d2" name="width" placeholder="2in" required pattern="\d.{0,4}" title="example: 3in">
        </div>
      <button type="submit" value="submit" class="btn btn-warning">Get Estimate</button>
    </form>
    </div>
    <div class="row testimonial-row">
      <div class= "testimonial-container">
        <div class="testimonial" id="testimonial-1">
            <h4>"Fulfillment by Boxc helps us focus on innovation and providing a better customer experience"</h4>
            <div class="testimonial-logo">
              <img src="/wp-content/themes/boxc_theme/assets/img/front-freshetech-logo.png">
            </div>
        </div>
         <div class="testimonial" id="testimonial-2">
            <h4>"By shipping directly with Boxc we have saved thousands of dollars and fulfilled orders faster than ever before"</h4>
            <div class="testimonial-logo">
              <img src="/wp-content/themes/boxc_theme/assets/img/front-utlab-logo.png">
            </div>
        </div>
        <div class="testimonial" id="testimonial-3">
            <h4>"Boxc has helped us grow our business."</h4>
            <div class="testimonial-logo">
              <img src="/wp-content/themes/boxc_theme/assets/img/front-sodacase-logo.png">
            </div>
        </div>
      </div>
    </div>
  </div>
</header>
