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

		<?php
		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) {
				the_post();
				the_content();
			}

			// Previous/next page navigation.

		} 
		//else {

			// If no content, include the "No posts found" template.
		//	get_template_part( 'template-parts/content/content', 'none' );

		//}
		?>

<?php
get_footer();
