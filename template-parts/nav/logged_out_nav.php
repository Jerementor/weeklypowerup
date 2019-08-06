<div data-collapse="medium" data-animation="default" data-duration="400" class="wpk-navbar w-nav">
    <div class="container-2 w-container">
      <a href="#" class="brand w-nav-brand">
        <h4 class="wkp-text-logo"><?php echo get_bloginfo('name'); ?></h4>
      </a>
      <nav role="navigation" class="nav-menu w-nav-menu">

        <!-- Get logged out navbar -->

          <?php get_template_part( 'template-parts/nav/nav_out'); ?>     

        </nav>
      <div class="wpk-menu-button w-nav-button">
        <div class="wpk-menu-icon w-icon-nav-menu"></div>
      </div>
  </div>
</div>
