<?php /* Template Name: Sub-Page*/ ?>
<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/sub_page.css">

<section class="header-sub-page">
    <div class="header-sub-page-text">
        <h1><?php the_field('header'); ?></h1>
        <p><?php the_field('header_text'); ?></p>
        <ul class="extra-content">

        <?php $counter_link = 1 ?>
        <?php if( have_rows('project_showcase') ): 
            while ( have_rows('project_showcase') ) : the_row(); ?>
            
                <a class="extra-content-btn" data-project="proj-<?php echo $counter_link; ?>" href="<?php the_sub_field('project_link') ?>"><li><?php the_sub_field('project_name') ?></li></a>

            <?php $counter_link++ ?>
            <?php endwhile; 
        endif; ?>
        
</ul>
    </div>
<div class="header-sub-page-img">
    <div class="default-image show-img">
        <img src="<?php the_field('header_image') ?>" alt="">
    </div>

<?php $counter_image = 1; ?>    
<?php if( have_rows('project_showcase') ): 
    while ( have_rows('project_showcase') ) : the_row(); ?>

    <div class="proj-img" data-img="proj-<?php echo $counter_image; ?>">
        <img src="<?php the_sub_field('showcase_image') ?>" alt="">
        <div class="proj-caption">
            <h3><?php the_sub_field('image_caption_1') ?></h3>
            <p><?php the_sub_field('image_caption_2') ?></p>
        </div>
    </div>

    <?php $counter_image++; ?>    
    <?php endwhile; 
endif; ?>  

</div>
</section>

<?php if (have_rows('catch_content')):
    while (have_rows('catch_content')): the_row(); ?>
        <section class="catch-content-sub-page" id="catch-content">

            <div class="background-image">
                <img class="catch-content wave-1" src="<?php the_sub_field('cover_1') ?>">
                <img class="catch-content wave-2" src="<?php the_sub_field('cover_2') ?>">
                <img class="catch-content img-1" src="<?php the_sub_field('background_image') ?>">
                <div class="catch-content img-2">
                    <img id="moving-image-1" src="<?php echo the_sub_field('moving_image_1') ?>" style="position: absolute; left: 0px; bottom: 0px;">
                </div>
                <div class="catch-content img-3">
                    <img id="moving-image-2" src="<?php echo the_sub_field('moving_image_2') ?>" style="position: absolute; left: 0px; bottom: 0px;">
                </div>
            </div>

            <div class="catch-quote">
                <h1 class="alt-text-1"><?php the_sub_field('catch_quote_header_1') ?></h1>
                <h1 class="alt-text-2"><?php the_sub_field('catch_quote_header_2') ?></h1>
                <p><?php the_sub_field('catch_quote_paragraph') ?></p>
            </div>
        </section>
    <?php endwhile;
endif; ?>  

<section class="gallery">
    <!-- Gallery -->
</section>

<?php get_footer();?>