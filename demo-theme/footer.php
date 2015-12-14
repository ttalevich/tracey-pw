        </div> <!-- end content -->
    </div> <!-- end container -->
</div> <!-- end wrapper -->


<div id="footer">
    <div id="footer-copy">
		<p><?php print ("&copy; " . date ('Y') . " "); ?><a href="http://www.tracey.pw">Tracey Talevich</a> &bull; <?php wp_loginout(); ?></p>
    </div>
</div>
<?php /* wp_footer function must be last item before closing body tag: many plugins use this hook to reference JavaScript files */ ?>
<?php wp_footer(); ?> 
</body>
</html>