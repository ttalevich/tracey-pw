<?php get_header(); ?>
<div id="container">
    <div id="content">
        <div class="banner">
            <img class="img-banner" src="<?php echo get_bloginfo('template_directory');?>/images/banner-2.png" alt="Unique and Functional UX by tracey.pw">
            <div class="holder">
                <a href="/floresta">
                    <img src="<?php echo get_bloginfo('template_directory');?>/images/thumb/banner-sub-v2-1.png" alt="Groupo Floresta - Building a Better Community">
                    <h3><span>Floresta</span></h3>
                </a>
            </div>
            <div class="holder">
                <a href="/project-ivory">
                    <img src="<?php echo get_bloginfo('template_directory');?>/images/thumb/banner-sub-v2-2.png" alt="Ivory - Mens Designer Clothing Consignment">
                    <h3><span>Ivory</span></h3>
                </a>
            </div>
        </div>
        
        <section>        
            <p class="tag">Tracey Talevich of tracey.pw is a Seattle-based web and visual designer specializing in <a href="<?php echo home_url()?>/skills/web-design" class="highlight">Web Design and Development,</a> <a class="highlight" href="<?php echo home_url();?>/skills/web-design">Search Engine Optimization (SEO),</a> <a class="highlight" href="<?php echo home_url();?>/skills/brand-strategy">Brand Strategy,</a> and <a class="highlight" href="<?php echo home_url();?>">UI/UX Design</a> to consolidate your brands image through the web</p>
        </section>
        
        <div class="banner">
            <img class="img-banner" src="<?php echo get_bloginfo('template_directory');?>/images/banner-1.png" alt="A branded design and focused strategy by tracey.pw">
            <div class="holder">
                <a href="/project-cooper-lanza-art">
                    <img src="<?php echo get_bloginfo('template_directory');?>/images/thumb/banner-sub-v2-4.png" alt="Cooper Lanza Art - Bellingham, WA Oil Paint Artist Portfolio Page">
                    <h3><span>Cooper Lanza Art</span></h3>
                </a>
            </div>
            <div class="holder">
                <a href="/project-west-side-music-academy">
                    <img src="<?php echo get_bloginfo('template_directory');?>/images/thumb/banner-sub-v2-3.png" alt="West Side Music Academy - Seattle Music School">
                    <h3><span>West Side Music Academy</span></h3>
                </a>
            </div>
        </div>
        <div class="home-contact">
            <div><h2>Let us get in touch</h2></div>
            <div><h2>&darr;</h2></div>
            <?php echo do_shortcode('[contact-form-7 id="58" title="home page contact"]'); ?>
        </div>
    </div>
</div>
</div> <!--Close wrapper -->
<?php wp_footer(); ?> 
</body>
</html>