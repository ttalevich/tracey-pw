<?php get_header(); ?>
<?php get_sidebar('blog');?>
<!-- START CONTENT -->
<div id="container">
    <div id="content" class="index">
        <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>
        <div class="post-box">
            <h2 id="post-<?php the_ID(); ?>" class="headline"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
            <p class="postmetadata">
                <span class="date">Posted on <?php the_time('F jS, Y') ?></span> in 
                <span class="cat"><?php the_category(', ') ?></span>
                <span class="author">by <?php the_author_posts_link(); ?></span>
                <span class="comments">with <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span>
            </p>
            <?php the_excerpt('More &raquo;'); ?>
            <?php edit_post_link('Edit this entry.', '<p><small>', '</small></p>'); ?>
        </div>
        <?php endwhile; ?>

        <nav class="post-nav"><?php /*?> Posts appear in reverse chrono order, with newer posts at the top of the list. Thus the newer posts link is on the left, the older posts link is on the right. <?php */?>
            <p class="alignleft"><?php previous_posts_link('&laquo; Newer Posts') ?></p>
            <p class="alignright"><?php next_posts_link('Older Posts &raquo;') ?></p>
        </nav>

        <?php endif; ?>
    </div><!-- END CONTENT -->
</div><!-- END CONTAINER -->

<?php get_footer(); ?>