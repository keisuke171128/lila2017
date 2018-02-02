<?php
/**
 * Template Name:  blog
 */
get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main athena-page" role="main">

        <div class="blog-wrapper">
            <div class="collection-title page-title">
                <h1>Blog</h1>
            </div>
            <div class="content-explain">
                <div class="future-box contents-img future-blog-box"></div>
                <div class="future-box-text">
                </div>
                <p class="future-text future-blog-text">
                    現役大学生向けコンテンツでは、現役の大学生にとって有意義な情報をブログという形で提供しています。
                    ようするに、大学生に役立つ情報を発信していこう！ってことです。
                    こういったブログを僕たちが書いて、HPで更新していってます。
                    特に、Macの便利な使い方や、レポートの効率良い書き方などwebデザインとプログラミングの知識を生かしたコンテンツを投下しています。
                </p>
            </div>
            <div class="blog-box-wrapper">
                <?php
                $temp = $wp_query;
                $wp_query = null;
                $wp_query = new WP_Query();
                $wp_query->query('post_type=post' . '&paged=' . $paged . '&posts_per_page=5');
                ?>

                <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>


                    <div class="before-article">
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


                            <?php if (get_post_thumbnail_id($post->ID)) : ?>
                                <div id="athena-posts-image">

                                    <a href="<?php echo esc_url( get_the_permalink() ); ?>"> 
                                        <?php echo the_post_thumbnail('large'); ?>
                                    </a> 

                                </div>
                            <?php endif; ?>

                            <header class="entry-header">
                                <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>

                                <?php if ('post' === get_post_type()) : ?>
                                    <div class="entry-meta">
                                        <div class="meta-detail">

                                            <span><span class="fa fa-calendar"></span> <?php echo athena_posted_on(); ?></span>

                                            <span class="author"><?php echo get_the_author() ? '<span class="fa fa-user"></span> ' . get_the_author() : ' '; ?></span>

                                            <span><?php echo get_comments_number() == 0 ? '<span class="fa fa-comment"></span> ' . __('No comments yet', 'athena') : get_comments_number() . ' Comments'; ?></span>

                                            <span><?php athena_entry_footer(); ?></span>

                                        </div>

                                    </div><!-- .entry-meta -->
                                <?php endif; ?>
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <?php echo wp_trim_words( get_the_content(), 50 ); ?>

                                <?php
                                wp_link_pages(array(
                                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'athena'),
                                    'after' => '</div>',
                                ));
                                ?>
                            </div><!-- .entry-content -->

                            <?php if ('post' === get_post_type()) : ?>
                                <div class="continue-reading">
                                    <a class="athena-button primary" href="<?php echo esc_url( get_the_permalink() ); ?>"><?php _e( 'Continue Reading', 'athena' ); ?></a>
                                </div>
                            <?php endif; ?>

                            <footer class="entry-footer">
                                <?php //athena_entry_footer(); ?>
                            </footer><!-- .entry-footer -->
                        </article><!-- #post-## -->
                    </div>
                <?php endwhile; // End of the loop. ?>
            </div>
        </div>
        <div class="athena-pagination">
            <?php echo paginate_links(); ?>
        </div>
    </main>
    <!-- #main -->




</div>
<!-- #primary -->


<?php get_footer(); ?>

<style type="text/css">

</style>