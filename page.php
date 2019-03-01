<?php 
/**
 * The template for displaying all pages
 *
 * @since 1.0
 */
get_header(); 
?>
<!-- Page.php -->


<h1><?php wp_title(''); ?></h1>

<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
            <?php $author = get_the_author(); ?> 
            <?php $thumbnail_id = get_the_author_meta('ID'); ?>
            <div class="card">
            <?php the_title( '<h2 class="article-header">', '</h2>'); ?>
            <?php the_excerpt(); ?>
            <?php echo get_avatar($thumbnail_id, 48, $default, $alt, array( 'class' => array( 'post-avatar') )); ?>
            <div><strong class="bold-text"><?php echo $author ?></strong></div>
            <div class="post-date"><?php the_time('F jS'); ?> </div>
            <a href="<?php the_permalink(); ?>" class="btn-dark float-right w-button">Read Post</a>
            
        <?php endwhile; ?>

<div class="nav-previous"><?php next_posts_link( 'Older posts' ); ?></div>
<div class="nav-next"><?php previous_posts_link( 'Newer posts' ); ?></div>

<?php else : ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>	    
    
    

<?php get_footer(); ?>