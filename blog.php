<?php
/**
 * Plenum Web Solutions Custom Wordpress Theme
 *
 *
 */

get_header(); ?>
	<section class="wrapper">
	<div id="primary" class="content-area inline">
		<div id="content" class="site-content" role="main">
		<?php if ( have_posts() ) : ?>

			<?php /* The loop */ ?>
			
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; 
			?>

			

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php wp_reset_query();
		endif; ?>

		</div><!-- #content -->
		
		<?php get_sidebar("Main Sidebar"); ?>
	</div><!-- #primary -->


<?php get_footer(); ?>