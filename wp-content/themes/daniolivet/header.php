<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>
            <?php wp_title('|', true, 'right'); ?>
        </title>

        <!--- CSS --->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/all.css">
        <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

        <!--- JS --->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.5.1.min.js" ></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js" ></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.bundle.js" ></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/typed.js" ></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js" ></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js" ></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scripts.js" ></script>

        <?php wp_head(); ?>
        
    </head>
    <body>
    
