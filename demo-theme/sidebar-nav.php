    <?php if ( is_active_sidebar( 'nav' ) ) : ?>  

    <?php dynamic_sidebar( 'nav' ); ?>

    <?php else : ?>

    <?php /*?> 
Replace the code below with whatever default code you want to display in the sidebar when no widgets are active. 
Here are some examples: 
<?php */?>
                    <div class="toggle">
                        <div class="hamburger"></div>
                        <div class="hamburger"></div>
                        <div class="hamburger"></div>
                    </div>
                <a href="<?php echo home_url(); ?>" class="logo">tracey.pw</a>
                <a href="<?php echo home_url(); ?>" class="minilogo">t.pw</a>
                    <?php /*
                        if ( function_exists( 'register_nav_menus' ) ) {
                            register_nav_menus(
                            array('main-menu' => 'Main Menu'));
                        } */ ?>
                <div class="desk-nav">
                    <?php 
                        wp_nav_menu( array( 
                            'theme_location' => 'header-menu',
                            'menu' => 'Main Menu',
                            'container' => 'ul',
                            'container_class' => 'desk-nav'
                        )); 
                    ?>
                </div>   
                <div class="mob-nav">
                    <?php 
                        wp_nav_menu( array( 
                            'theme_location' => 'header-menu',
                            'menu' => 'Main Menu',
                            'container' => 'ul',
                        )); 
                    ?>
                </div>
    <?php endif; ?> 
