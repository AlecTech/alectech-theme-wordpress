<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'title' ); ?></title>
    <?php
    //output scrip styles meta that wp is asking for
    //as we log in as admin we want to see admin nav that head will be responsible for that
    wp_head();
    ?>
</head>
<body>
    <h1><?php bloginfo('title'); ?> </h1>
    <nav>
    <h2>
    <?php bloginfo('title');?>
    Navigation
    </h2>
    <?php 
    wp_nav_menu (
        array(
                'theme_location' => 'main_menu'
        )
    );
    ?>
    </nav>

    
