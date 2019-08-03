<?php
/**
 * The single post template file
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WeeklyPowerup
 * @since 1.0.0
 */

get_header();
?>



<!--Single.php-->

<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>

       		<div class="header">
       			<div class="title-wrapper">
				<?php the_title('<h1 class="title">', '</h1>'); ?>
				<?php
					$categories = get_the_category();

					foreach ($categories as $category){
						echo '<a class="tag" href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>';
					}

					?>
       			</div>
       		</div>

       		<div class="content">
       			<?php 
       		
										
					the_content();
       			?>
       		</div>
          
<?php endwhile; ?>
<?php endif; ?>

<?php
get_footer();


