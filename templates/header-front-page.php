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
      <div class="value-header">
        <h2> 3-5 day fufillment from China <br> Starting at $2.99 per package</h2>
      </div>
      <div class="row testimonial-container">
        <div class="testimonial" id="testimonial-1">
            <h4>Fulfillment by Boxc helps us focus on innovation and providing a better customer experience"</h4>
            <p>-Adam Schwartz, FresheTech.com</p>
        </div>
         <div class="testimonial" style="display:none" id="testimonial-2">
            <h4>"By shipping directly with Boxc we have saved thousands of dollars and fulfilled orders faster than ever before"</h4>
            <p>-Shaun Nath, THEUTLAB.com</p>
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
    <form class="form-inline" role="form" action="/estimate">
      <div class="form-group form-weight">
        <label class="form-label" for="package-weight">Weight</label>
        <input type="text" class="form-control" id="package-weight" placeholder="2.5 lbs">
      </div>
        <div class="form-group form-size">
          <label class="form-label" for="package-d0">Package Size</label>
          <input type="text" class="form-control" id="package-d0" placeholder="2in">
          <label class="form-label" for="package-d1"> X </label>
          <input type="text" class="form-control" id="packages-d1" placeholder="2in">
           <label class="form-label" for="package-d2"> X </label>
          <input type="text" class="form-control" id="package-d2" placeholder="2in">
        </div>
      <button type="submit" class="btn btn-warning">Get Estimate</button>
    </form>
    </div>
  </div>
</header>
