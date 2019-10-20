<?php /* Template Name: Home-Do-not-Use*/ ?>
<?php get_header(); ?>
<?php include('includes/navbar.php'); ?>
<?php include('includes/banner.php'); ?>
<section>
    <!-- Catch-content block ACF
    Edit in /Home Wordpress  -->
<?php if( have_rows('catch_content_block') ): 
    while ( have_rows('catch_content_block') ) : the_row(); ?>
        <a href="<?php the_sub_field('catch_content_link') ?>" class="catch-content">
        <div class="catch-text">
        <h2><?php the_sub_field('catch_head'); ?></h2>
        <p><?php the_sub_field('description'); ?></p>
        <h3>Click to see more!</h3>
        </div>
        <img src="<?php the_sub_field('img');?>" alt="">
        </a>
    <?php endwhile; endif; ?>
</section>
</body>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style_main.css">
<?php get_footer();?>
