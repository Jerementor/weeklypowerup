<?php
/**
 * The template for displaying Category pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */
get_header(); 
?>


<!-- Category.php -->
<div class="header">
  <div class="title-wrapper">
    <h1 class="title">
      All posts in the category for: <a href="" class="tag"><strong> <?php single_cat_title(); ?></strong></a>
    </h1>
  </div>
</div>

<div class="category-content">
  <?php if ( have_posts() ) : ?>
  		<?php while ( have_posts() ) : the_post(); ?>
  		 <?php $author = get_the_author(); ?> 
  		 <?php $thumbnail_id = get_the_author_meta('ID'); ?>

 
       <div class="category-card">
        <a href="<?php the_permalink(); ?>"><?php the_title( '<h2 class="article-header">', '</h2>'); ?></a>         
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