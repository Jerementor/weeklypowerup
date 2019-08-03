<?php
/**
 * The template for index
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */
get_header(); 
?>

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



<!--Index.php-->
<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>

       		<div class="header">
       			<div class="title-wrapper">
       					<?php the_title('<h1 class="title">', '</h1>'); ?>
					?>
       			</div>
       		</div>

       		<div class="content">

       			<div class="article-card">
		          <div class="article-card-header">
		              <a href="<?php the_permalink(); ?>"><?php the_title( '<h2 class="post-title">', '</h2>'); ?>
		          		</a>
		          </div>
		          
		          <div class="card-excerpt">
		            <?php the_excerpt(); ?>
		          </div>

       		</div>
          
<?php endwhile; ?>
<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

<?php else : ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php
get_footer();




<!-- Index.php -->
<div class="content">
<h1>Tutorials:</h1>
<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>

        <div class="article-card">
          <div class="article-card-header">
              <a href="<?php the_permalink(); ?>"<?php the_title( '<h2 class="post-title">', '</h2>'); ?></a>
          </div>
          
          <div class="article-card-excerpt">
            <?php the_excerpt(); ?>
          </div>
          
<?php endwhile; ?>


<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

<?php else : ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>	    
</div>

<?php get_footer(); ?>
