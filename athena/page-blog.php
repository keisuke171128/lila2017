<?php
/**
 * Template Name:  blog
 */
get_header(); ?>

<div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <?php
 $temp = $wp_query;
 $wp_query = null;
 $wp_query = new WP_Query();
 $wp_query->query('post_type=syoukai' . '&paged=' . $paged . '&posts_per_page=10');
 ?>
 
 <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
 
 <?php get_template_part('template-parts/content', 'page'); ?>

            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>

        <?php endwhile; // End of the loop. ?>

    </main><!-- #main -->


    
    
</div><!-- #primary -->


<?php get_footer(); ?>
