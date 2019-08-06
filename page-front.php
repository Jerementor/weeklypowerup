<?php
/**
* Template Name: Front Page
*
* @package WeeklyPowerup
*/
get_header(); 
?>

<div class="wkp-hero-panel">
    <div class="container">
      <div class="flex-grid-wrapped gutter-20">
        <div class="flex-grid-item">
          <h1 class="hero-heading dark-bg">New Screencast: <?php the_field('screencast_title'); ?></h1>
          <p class="hero-subtitle">Learn the ins and outs of Construct 3 and why it&#x27;s the logical next step for game programming!</p>
        </div>
        <div class="flex-item-20 _40-percent"></div>
      </div>
    </div>
  </div>

  <div class="wkp-content-section">
    <div class="container">
      <div class="flex-grid-wrapped gutter-20">
        <div class="flex-item-20">

        <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
                <?php					
					the_content();
                ?>
        <?php endwhile; ?>
        <?php endif; ?>
      
        </div>
        <div class="flex-item-20 _40-percent">
          <div class="sidebar-wrapper">
            <div class="sidebar-image">
              <h3 class="heading-2 dark-bg">Coming August 12th 2019</h3>
            </div>
            <div class="sidebar-item">
              <a href="#" class="link-block w-inline-block">
                <div class="wpk-button">Join Free Today</div>
              </a>
            </div>
            <div class="sidebar-item"><a href="#" class="wkp-text-link">Or, get lifetime access <span class="wkp-lifetime-price">$149</span> $59</a></div>
            <div class="sidebar-item">
              <div class="text-block">Countdown timer goes here</div>
            </div>
            <div class="w-embed">
              <style>
  .sidebar-wrapper {
    position: -webkit-sticky;
    position: -moz-sticky;
    position: -ms-sticky;
    position: -o-sticky;
    position: sticky;
    top: 50px;
  }
</style>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
