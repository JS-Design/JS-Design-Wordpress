<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/above_the_fold.css">
        
        <title>JS Design & Photography</title>
        <meta name="Author" content="Jakub Szapowalow">
        <meta title="JS Design & Photography">
        <meta name="description" content="This website contains the next level stuff">
        
        
        <?php
            include('includes/transition-elements.php'); 
            $home_url = home_url('/');
            wp_head();
        ?>

    </head>

    <body <?php body_class(); ?>>

    <?php include('includes/navbar.php'); ?>