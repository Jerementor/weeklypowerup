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

<!--Page.php-->
<div class="content">
		<?php
			if ( have_posts() ) {
	
				// Load posts loop.
				while ( have_posts() ) {
					
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

<?php
get_footer();


