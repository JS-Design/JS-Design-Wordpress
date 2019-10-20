<!-- Generator: Adobe Illustrator 23.1.1, SVG Export Plug-In  -->
<svg class="footer-triangle" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1921px" height="190.4px" viewBox="0 0 1921 190.4" xml:space="preserve">
<defs>
</defs>
<polygon class="st0" points="1921,190.4 0,190.4 0,0 1921,119.7 "/>
</svg>


    <footer class="footer">
        <div class="footer-menu">
            <ul>
                <?php if ( have_rows('footer_menu', 'options') ) : ?>

                        <?php $counter = 1; ?>

                        <?php while ( have_rows('footer_menu', 'options') ) : the_row();?>

                            <?php if ($counter == 3): ?>
                                <?php $home_url = home_url('/'); ?>
                                <li><a href="<?php echo $home_url ?>">
                                <svg class="logo-image" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"><path d="m686.55 446.4v13.44h215.06v215.06h-322.59v-94.09h215.06v-13.44h-215.06v-215.06h322.59v94.09z"/><path d="m444.98 352.31v215.06l-93.9-.01v-120.97l-228.69.01.01-94.09z"/><path d="m445 580.81v38.33a55.76 55.76 0 0 1 -55.76 55.76h-211.09a55.76 55.76 0 0 1 -55.75-55.76v-92.09h107.52v53.76z"/><path d="m353.21 580h215.06v107.53h-123.49v215.05l-91.57.01z"/><path d="m444.78 336.47h13.44v-215.06h215.05v322.59h-94.08v-215.06h-13.44v215.06h-215.06v-322.59h94.09z"/><path d="m579.19 580h38.33a55.77 55.77 0 0 1 55.76 55.76v211.07a55.77 55.77 0 0 1 -55.76 55.76h-92.1v-107.53h53.77z"/></svg>
                                </a></li>
                            <?php else: ?>
                                <li><a href="<?php the_sub_field("footer_menu_link") ?>"><?php the_sub_field('footer_menu_label') ?></a></li>
                            <?php endif; ?>
                
                            <?php $counter ++; ?>

                        <?php endwhile; ?>

                <?php endif; ?>
            </ul>
        </div>    
        
        <?php wp_footer(); ?>
    </footer>    
</body>
    <link rel="stylesheet" href="https://use.typekit.net/cqu2mbm.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css"/>    
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/global.css">

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>

</html>