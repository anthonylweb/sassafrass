		</div><!-- #main -->
		</div><!-- #page -->
		<section id="ss-par" class="flex-section">

        <?php
            if( is_front_page() ){
                require_once('home-subsection.php'); 
            } else {
                require_once('subsection.php');
            } 
        ?>
        
</section>

<section id="pre-footer" class="flex-section">
    <?php dynamic_sidebar('Subpage Secondary Content Section');?>
</section>


		<footer id="colophon" class="site-footer" role="contentinfo">
			<section class="wrapper">  
			
				<div class="copyright inline">
					&copy; Copyright -- Open for All		
				</div><!-- .copyright -->

				<div class="credit inline">
					<a href="http://www.anthonylaurence.net">Developed by Anthony Laurence</a>		
				</div><!-- .copyright -->

			</section>
			
		</footer><!-- #colophon -->
	

	<?php wp_footer(); ?>
</body>
</html>