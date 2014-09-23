<?php

get_header(); ?>



<section id="home" class="wrapper">
	<div id="primary" class="content-area inline">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:') . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div><!-- .entry-content -->

					<footer class="entry-meta">
						<?php edit_post_link( __( 'Edit'), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->

				
			<?php endwhile; ?>

				
		
		</div><!-- end #content -->
	</div><!-- #primary -->
		<?php get_sidebar("Main Sidebar"); ?>
	</section><!-- #home -->

<?php get_footer(); ?>
