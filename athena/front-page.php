<?php
/**
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Athena
 */
get_header();
?>



<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <!-- オリジナルTOP画像 -->
        <!-- <?php do_action('athena_homepage'); ?> -->

        <div class="index-top-wrapper">
            <div class="index-top-content">
                <div class="index-top-text">
                    <p>
                        <span class="index-text-eng">
                            Curiosity has its own reason for existing.
                        </span>
                        <br>
                        <span class="index-text-jpn">
                            好奇心は理由があって存在している
                        </span>
                    </p>
                </div>
            </div>
        </div>

        <div class="row">

            <?php get_sidebar('left'); ?>

            <div class="content-1 con-whoweare index-content-wrap">
                <div class="item-whoweare whoareare-title title-box">
                    <h4>
                        ぼくたちについて
                    </h3>
                    <h1>
                        OUR MISSION
                    </h1>
                    <p class="index-title-border"></p>
                </div>
                <div class="item-whoweare whoareare-text">
                    <p>
                        LiLAはwebデザインインカレサークルです<br>大学の学生サークルや学生団体さんのホームページやwebアプリケーションの作成を行っています。<br>
                        現在は、同志社大学・京都大学・滋賀大学の３校から９名が参加して活動しています。
                        全員プログラミング初心者から初めて、１週間ほどでコードが書けるようになり、自分のHPを作成できる程度までスキルアップしました。プログラミングを楽しむをモットーに週１回程度活動しています。遠方からの参加でも可能ですよ。
                    </p>
                </div>
                <div class="item-whoweare whoareare-linkbox link-box">
                    <div class="aboutus-link link-item">
                        <a href="http://lila.wp.xdomain.jp/about-us">About us</a>
                    </div>
                </div>
            </div>

            <div class="content-2 con-future index-content-wrap">
                <div class="item-future future-title title-box">
                    <h4>
                        何をやってるのか
                    </h3>
                    <h1>
                        Futures
                    </h1>
                    <p class="index-title-border"></p>
                </div>
                <div class="item-future blog-text">
                    <div>
                        <a href="http://lila.wp.xdomain.jp/futures/webdesign" class="future-a">
                            <div class="future-box webdesign-img"></div>
                            <div class="future-box-text">
                                <h2>
                                    webサイト制作
                                </h2>
                            </div>
                        </a>
                    </div>

                    <div>
                        <a href="http://lila.wp.xdomain.jp/futures/promotion-support" class="future-a">
                            <div class="future-box promo-img"></div>
                            <div class="future-box-text">
                                <h2>
                                    Promotionサポート
                                </h2>
                            </div>
                        </a>
                    </div>

                    <div>
                        <a href="http://lila.wp.xdomain.jp/futures/blog" class="future-a">
                            <div class="future-box contents-img"></div>
                            <div class="future-box-text">
                                <h2>
                                    現役大学生向けコンテンツ
                                </h2>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item-future blog-linkbox">
                    <div class="future-link link-item">
                        <a href="http://lila.wp.xdomain.jp/contact">Contact</a>
                    </div>
                </div>
            </div>

            <div class="content-3 con-blog index-content-wrap">
                <div class="item-blog blog-title title-box">
                    <h4>
                        コンテンツ
                    </h4>
                    <h1>
                        BLOG
                    </h1>
                    <p class="index-title-border"></p>
                </div>

                <!-- BLOG -->
                <div class="index-blog-wrapper">
                    <div class="homepage-page-content col-sm-<?php echo athena_main_width(); ?>">
                        <?php if (have_posts()) : ?>
                            <?php if (is_home() && !is_front_page()) : ?>
                                <header>
                                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                                </header>
                            <?php endif; ?>
                            <?php $front = get_option('show_on_front'); ?>
                            <?php echo $front == 'posts' ? '<div class="athena-blog-content">' : ''; ?>
                                <?php while (have_posts()) : the_post(); ?>
                                    <?php
                                    if ('posts' == get_option('show_on_front')) :
                                        get_template_part('template-parts/content-blog', get_post_format());
                                    else:
                                        get_template_part('template-parts/content-page-home', get_post_format());
                                    endif;
                                    ?>
                                <?php endwhile; ?>
                                <?php echo $front == 'posts' ? '</div>' : ''; ?>
                                <div class="athena-pagination">
                                    <?php echo paginate_links(); ?>
                                </div>
                            <?php else : ?>
                                <?php get_template_part('template-parts/content', 'none'); ?>
                            <?php endif; ?>
                        </div>
                        <?php get_sidebar(); ?>
                    </div>
                </div>
                <!-- BLOG -->



            </div>

            <div class="content-4 con-clients index-content-wrap">
                <div class="item-clients clients-title title-box">
                    <h1>
                        CLIENTS
                    </h1>
                    <p class="index-title-border"></p>
                </div>
                <div class="item-clients clients-text">
                    <p>喜劇研究会</p>
                    <p>CLOVER</p>
                    <p>SALTILO</p>
                    <p>KWUF</p>
                </div>
            </div>

            <div class="content-5 con-portfolio index-content-wrap">
                <div class="item-portfolio portfolio-text link-box">
                    <a href="http://lila.wp.xdomain.jp/portfolio">
                        <div class="portfolio-link link-item">
                            PORTFOLIO
                        </div>
                    </a>
                </div>
            </div>


        </main><!-- #main -->
    </div><!-- #primary -->


    <?php get_footer(); ?>        