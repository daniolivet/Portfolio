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
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

        <!--- JS --->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.5.1.min.js" ></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js" ></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.bundle.js" ></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scripts.js" ></script>

        <?php wp_head(); ?>
        
    </head>
    <body>
    