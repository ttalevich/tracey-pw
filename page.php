<?php get_header(); ?>


<!-- START CONTENT -->
<div id="container">
<div id="content" class="page">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>">
        
    </div>
        <?php the_content('<p class="serif">More &raquo;</p>'); ?>
<?php edit_post_link('Edit this entry.', '<p class="clear"><small>', '</small></p>'); ?>
    <?php endwhile; endif; ?>  
</div>
<!-- END CONTENT -->
</div>
<?php get_footer(); ?>