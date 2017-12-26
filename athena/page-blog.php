<?php
/**
 * Template Name:  blog
 */
get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main athena-page" role="main">

            <div class="page-blog-con">
                <?php $numno = 1; ?>
                <?php
	$temp = $wp_query;
	$wp_query = null;
	$wp_query = new WP_Query();
	$wp_query->query('post_type=post_member' . '&paged=' . $paged . '&posts_per_page=12');
	?>
                    <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                    <div class="page-member-box">
                        <div class="member-text mclick<?php echo $numno; ?>" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>);">
                            <div class="member-name">
                                <?php the_title(); ?>
                            </div>
                        </div>

                        <script type="text/javascript">
                            $(function() {
                                $(".mclick<?php echo $numno; ?>").on("click", function() {
                                    $('.member-content<?php echo $numno; ?>').next().slideToggle();
                                    $('.member-content<?php echo $numno; ?>').toggleClass("show");
                                });
                            });

                        </script>

                        <div class="member-content<?php echo $numno; ?>" style="display: none;">
                            <?php $numno = $numno + 1; ?>
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <? endwhile; ?>
            </div>
