<?php
/**
 * Template Name: Two Column Left Sidebar Page
 *
 */

get_header(); ?>


	<section id="left-sidebar" class="wrapper">
	<section id="primary">
		<div id="content" class="site-content" role="main123">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h2><?php the_title(); ?></h2>
                    </header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:') . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div><!-- .entry-content -->

					<footer class="entry-meta">
						<?php edit_post_link( __( 'Edit'), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->

			
			<?php endwhile; ?>

		</div><!-- #content -->
	</section><!-- #primary -->
    
    <section id="left-sidebar-col" class="flex-col">
    <?php
        get_template_part( 'img-sidebar' );
        dynamic_sidebar('Left Sidebar');
    ?>
    </section>

</section>


<?php get_footer(); ?>