<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta content="width=device-width, initial-scale=1" name="viewport">      
    <title><?php wp_title(''); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" 
    href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() 
    && get_option( 'thread_comments' ) ) 
    wp_enqueue_script( 'comment-reply' ); ?>


<?php wp_head(); ?>
    
</head>

<div class="container">
<div class="header">
    <div class="nav">
        <h3 class="nav-text">make2d.games</h3>
    </div>
</div>
<body>



