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


