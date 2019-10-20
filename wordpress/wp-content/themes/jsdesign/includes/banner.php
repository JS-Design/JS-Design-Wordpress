<section class="banner">
    <div class="banner-quote-div hidden">
        <div class="banner-quote">
            <h2><?php echo get_field('banner_quote_header'); ?><h2>
            <p><?php echo get_field('banner_quote_paragraph'); ?></p>
        </div>
        <?php if (get_field('is_link')): ?>
        <a class="arrow-right-wrapper" href="<?= get_field('banner_link')?>">
            <svg class="arrow-right" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"width="306px" height="306px" viewBox="0 0 306 306" style="enable-background:new 0 0 306 306;" xml:space="preserve"><g><g id="chevron-right"><polygon points="94.35,0 58.65,35.7 175.95,153 58.65,270.3 94.35,306 247.35,153"/></g></g></svg>
        </a>
        <?php endif; ?>
    </div>
    <?php  
    //Fields
    //banner_images = Gallery Field
    $images = get_field('banner_images');
    if( $images ): ?>
    <div class="slider-for">
            
                <?php foreach( $images as $image ): ?>

                    <div class="slick-container">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                    </div>
                    
                <?php endforeach; ?>

        </div>
    <?php endif; ?>
</section>