<?php
/**
 * The main template file
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Make2d
 * @since 1.0.0
 */

get_header();
?>

<!--Index.php-->

<div class="content">
	<a href = "/" class="tag">Game Maker Studio 2</a>
	<a href = "/"class="tag">Tutorial</a>
		<?php
			if ( have_posts() ) {

				// Load posts loop.
				while ( have_posts() ) {
					
					the_title('<h1 class="post-title">', '</h1>');
					
					the_post();
					
					the_content();
					
				}
			} 
		?>
</div>

<?php
get_footer();
