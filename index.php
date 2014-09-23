<?php get_header(); ?>

<section id="blog-home" class="wrapper">
	<div id="primary" class="content-area inline">
		<div id="content" class="site-content" role="main">
		<?php if ( have_posts() ) : ?>

			<?php /* The loop */ ?>
					
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile;?>


		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar('Main Sidebar'); ?>
</section>
<?php endif; ?>
<?php get_footer(); ?>