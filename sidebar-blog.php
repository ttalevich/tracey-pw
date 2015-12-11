<div id="sidebar-wp">
    <?php if ( is_active_sidebar( 'blog' ) ) : ?>  

    <?php dynamic_sidebar( 'blog' ); ?>

    <?php else : ?>

    <?php /*?> 
Replace the code below with whatever default code you want to display in the sidebar when no widgets are active. 
Here are some examples: 
<?php */?>
    
        <h3>Categories</h3>
            <ul>
                <?php wp_list_categories('title_li='); ?>    
            </ul>
        <ul>
            <li><a href="http://facebook.com/TraceyTalevich" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/facebook.png"</a></li>
            <li><a href="http://linkedin.com" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/linkedin.png"</a></li>
            <li><a href="http://twitter.com/tracey_pw" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/twitter.png"</a></li>
            <li><a href="http://github.com/ttalevich" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/github.png"</a></li>
            <li><a href="mailto:me@tracey.pw?subject=Inquiry%20from%20site" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/email.png"></a></li>
        </ul>
    <?php endif; ?> 
</div>
