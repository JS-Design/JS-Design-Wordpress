<header class="top-nav" id="top-nav">
    <a class="top-nav-logo-div" href="<?= get_home_url()?>">
        <svg class="logo-image" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"><path d="m686.55 446.4v13.44h215.06v215.06h-322.59v-94.09h215.06v-13.44h-215.06v-215.06h322.59v94.09z"/><path d="m444.98 352.31v215.06l-93.9-.01v-120.97l-228.69.01.01-94.09z"/><path d="m445 580.81v38.33a55.76 55.76 0 0 1 -55.76 55.76h-211.09a55.76 55.76 0 0 1 -55.75-55.76v-92.09h107.52v53.76z"/><path d="m353.21 580h215.06v107.53h-123.49v215.05l-91.57.01z"/><path d="m444.78 336.47h13.44v-215.06h215.05v322.59h-94.08v-215.06h-13.44v215.06h-215.06v-322.59h94.09z"/><path d="m579.19 580h38.33a55.77 55.77 0 0 1 55.76 55.76v211.07a55.77 55.77 0 0 1 -55.76 55.76h-92.1v-107.53h53.77z"/></svg>
        <div class="top-nav-logo-text-div">
            <div class="top-nav-logo-text">
                <h2>Jakub</h2>
                <h2>Szapowalow</h2>
            </div>
        </div>
    </a>
    <div class="top-nav-menu-div">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?> 
    </div>
</header>