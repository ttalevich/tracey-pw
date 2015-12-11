<?php get_header(); ?>
<div id="container">
    <div id="content">
        <div class="banner">
            <img class="img-banner" src="<?php echo get_bloginfo('template_directory');?>/images/banner-2.png" alt="Unique and Functional UX by tracey.pw">
            <div class="holder"><img src="<?php echo get_bloginfo('template_directory');?>/images/thumb/banner-sub-v2-1.png" alt="Groupo Floresta - Building a Better Community"></div>
            <div class="holder"><img src="<?php echo get_bloginfo('template_directory');?>/images/thumb/banner-sub-v2-2.png" alt="Ivory - Mens Designer Clothing Consignment">
            </div>
        </div>
        
        <section>        
            <p class="tag">Tracey Talevich of tracey.pw is a Seattle-based web and visual designer specializing in <a href="<?php echo home_url()?>/skills/web-design" class="highlight">Web Design and Development,</a> <a class="highlight" href="<?php echo home_url();?>/skills/web-design">Search Engine Optimization (SEO),</a> <a class="highlight" href="<?php echo home_url();?>/skills/brand-strategy">Brand Strategy,</a> and <a class="highlight" href="<?php echo home_url();?>">UI/UX Design</a> to consolidate your brands image through the web</p>
        </section>
        
        <div class="banner">
            <img class="img-banner" src="<?php echo get_bloginfo('template_directory');?>/images/banner-1.png" alt="A branded design and focused strategy by tracey.pw">
            <div class="holder"><img src="<?php echo get_bloginfo('template_directory');?>/images/thumb/banner-sub-v2-4.png" alt="Cooper Lanza Art - Bellingham, WA Oil Paint Artist Portfolio Page"></div>
            <div class="holder"><img src="<?php echo get_bloginfo('template_directory');?>/images/thumb/banner-sub-v2-3.png" alt="West Side Music Academy - Seattle Music School">
            </div>
        </div>
        <div class="home-contact">
            <span><h2>Let us get in touch</h2></span>
            <span><h2>&darr;</h2></span>
            <?php echo do_shortcode('[contact-form-7 id="58" title="home page contact"]'); ?>
        </div>
    </div>
</div>
<?php wp_footer(); ?> 
</body>
</html>