<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta content="width=device-width, initial-scale=1" name="viewport">      
    <title><?php wp_title(''); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />

<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,400,700&display=swap" rel="stylesheet">

    <link rel="pingback" 
    href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() 
    && get_option( 'thread_comments' ) ) 
    wp_enqueue_script( 'comment-reply' ); ?>


<?php wp_head(); ?>
    
</head>
<body>

<!-- <div class="top-bar">
	<p>Get Weekly Updates</p><button>Sign Up!</button>
</div> -->

<div class="container">

<?php get_template_part('template-parts/nav/logged_out_nav'); ?>




