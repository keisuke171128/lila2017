<?php
/**
 * Template Name:  member
 */
get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main athena-page" role="main">

        <div class="member-wrapper">
            <div class="member-title page-title">
                <h1>MEMBER</h1>
            </div>  
            <div class="page">
                <?php
                $temp = $wp_query;
                $wp_query = null;
                $wp_query = new WP_Query();
                $wp_query->query('post_type=post_member' . '&paged=' . $paged . '&posts_per_page=5');
                ?>
                <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                    <div class="page-member-box">
                        <div class="member-text" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>);">
                            <div class="member-name">
                                <?php the_title(); ?>
                            </div>
                        </div>

                        <div class="member-content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <? endwhile; ?>
            </div>
            <div class="athena-pagination">
                <?php echo paginate_links(); ?>
            </div>
        </div>

        <?php get_footer(); ?>

        <style type="text/css">
        .member-text {
            height: 100px;
            width: 100%;
            background-size: cover;
            background-position: center center;
            text-align: center;
            display: table;
            filter: gray;
            -webkit-filter: grayscale(100%);
        }

        .member-text:hover {
            filter: none;
            -webkit-filter: grayscale(0%);
        }

        .member-name {
            display: table-cell;
            vertical-align: middle;
            font-size: 2.5rem;
            color: #ffffff;
            text-shadow: 3px 3px 3px black;
        }

        .member-content {
            margin: 5% 5%;
            padding: 0% 2%;
            border-left: solid 1px #36b3a8;
            border-right: solid 1px #36b3a8;
        }

        #main.athena-page {
            padding-top: 0px!important;
        }

    </style>

    <script type="text/javascript">
        $('.page-member-box .member-content').hide();
        $('.page-member-box .member-text').click(function() {
            $(this).next('.member-content').slideToggle();
            $(this).next('.member-content').siblings('.member-content').slideUp();
        });

    </script>
