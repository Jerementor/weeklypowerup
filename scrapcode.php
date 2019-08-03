<?php
/**
 * The front-page file
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WeeklyPowerup
 * @since 1.0.0
 */
get_header();
?>
<!--Frontpage.php-->
<div class="header">
	<div class="frontpage-title-wrapper">
		<p>Latest Post:</p>
		<?php
		$args = array( 'numberposts' => 1 );
		$lastposts = get_posts( $args );
		foreach($lastposts as $post) : setup_postdata($post); ?>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title('<h1 class="frontpage-latest">', '</h1>'); ?></a></h2>
		<?php endforeach; ?>
	</div>
</div>


<div class="frontpage-wrapper">
	
		
		<h1 class="frontpage-title">Join a growing community of game developers learning to make games each week</h1>
		

		<script async data-uid="ee1dce0409" src="https://f.convertkit.com/ee1dce0409/243078d560.js"></script>
</div>


<?php
get_footer('front-footer');





<div class="wrapper">
		<?php
			if ( have_posts() ) {
	
				// Load posts loop.
				while ( have_posts() ) {
					

					the_title('<h1 class="post-title">', '</h1>');
					
					$categories = get_the_category();

					foreach ($categories as $category){
						echo '<a class="tag" href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>';
					}
					
					the_post();
					
					the_content();
					
				}
			} 
		?>
</div>


<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>

       		<div class="header">
       			<div class="title-wrapper">
       					<?php the_title('<h1 class="post-title">', '</h1>'); ?>
       			</div>
       		</div>

       		<div class="content">
       			<?php 
       			 	$categories = get_the_category();

					foreach ($categories as $category){
						echo '<a class="tag" href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>';
					}
										
					the_content();
       			?>
       		</div>
          
<?php endwhile; ?>

            <a href="<?php the_permalink(); ?>"><?php the_title( '<h2 class="article-header">', '</h2>'); ?></a>            
              <?php the_excerpt(); ?>
            
            <a href="<?php the_permalink(); ?>" class="btn-dark float-right w-button">Read Post</a>

                 <?php echo get_avatar($thumbnail_id, 48, $default, $alt, array( 'class' => array( 'post-avatar') )); ?>
               
                 <strong class="bold-text"><?php echo $author ?></strong>
                 <?php the_time('F jS'); ?>             

  	        <?php endwhile; ?>

          <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
          <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

          <?php else : ?>
          <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
          <?php endif; ?>	
