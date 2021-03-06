<?php get_header(); ?>


<!-- START CONTENT -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="container">
    <div id="content" class="single">
        <strong class="breadcrumb"><?php if (function_exists('bcn_display')) { bcn_display(); } ?></strong>
        <h2><?php the_title(); ?></h2>     
        <?php the_content('More &raquo;'); ?>
        <?php wp_link_pages(); ?>
        <?php edit_post_link('Edit this entry.', '<p class="clear"><small>', '</small></p>'); ?>

        <nav class="post-nav">            
            <div class="alignleft"><?php previous_post_link('&larr; %link', '%title', true) ?></div>
            <div class="alignright"><?php next_post_link('%link &rarr;', '%title', true) ?></div>
        </nav>

        <?php endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
    </div>
</div>
<!-- END CONTENT -->

<?php get_footer(); ?>
