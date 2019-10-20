        <section class="banner-nav">
            <header class="nav">
                <ol>
                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                </ol>
            </header>
            <div class="banner-logo-background" id="logo">
                <a href="#" class="banner-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Logo.svg" alt="">
                </a>
                <div class="name-wrapper">    
                    <div class="name">                    
                        <h1 id="jakub">Jakub</h1>
                        <h1 id="szapowalow">Szapowalow</h1>
                    </div>
                </div>
            </div>