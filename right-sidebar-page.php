<?php
/**
 * Template Name: Two Column Right Sidebar Page
 *
 */

get_header(); ?>


	<section id="right-sidebar" class="wrapper">
        <section id="right-sidebar-col">
            <?php dynamic_sidebar('Right Sidebar'); ?>
        </section>
        <section id="primary">
            <div id="content" class="site-content" role="main123">

                <?php /* The loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                            <div class="entry-thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <?php endif; ?>

                            
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
 
</section>


<?php get_footer(); ?>