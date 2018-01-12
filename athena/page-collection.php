<?php
/**
 * Template Name:  collection
 */
get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <div class="collection-wrapper">
            <div class="collection-title page-title">
                <h1>これまで作ってきた作品たち</h1>
            </div>  
            <div class="collection-box">
                <?php
                $temp = $wp_query;
                $wp_query = null;
                $wp_query = new WP_Query();
                $wp_query->query('post_type=post_collection' . '&paged=' . $paged . '&posts_per_page=5');
                ?>

                <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                   <div class="collection-item">
                    <?  
                    $txt = get_field('collection_url');
                    if($txt){ ?><a href="<? echo $txt; ?>" target="_blank">
                        <? } ?>
                        <div class="collection-item-textbox">
                            <h3>
                                <?php the_title(); ?>
                            </h3>
                            <p>
                               <?  
                               $txt = get_field('collection-univ-name');
                               if($txt){ ?><? echo $txt; ?>
                               <? } ?>
                           </p>
                       </div>
                       <div class="collection-item-imgbox">
                        <? 
                        $img = get_field('collection_image');
                        $imgurl = wp_get_attachment_image_src($img, 'full');
                        if($imgurl){ ?><img src="<? echo $imgurl[0]; ?>" alt="">
                        <? } ?>
                    </div>
                </a>
            </div>
        <?php endwhile; // End of the loop. ?>
    </div>
    <div class="athena-pagination">
        <?php echo paginate_links(); ?>
    </div>
</div>
</div>

</main><!-- #main -->




</div><!-- #primary -->


<?php get_footer(); ?>

<style type="text/css">
.collection-item {
    border: 1px solid #00000040;
    padding: 10px;
    margin-bottom: 30px;
    box-shadow: 1px 1px 1px;
}
.collection-box {
    padding: 15px;
}
.collection-item-textbox h3,.collection-item-textbox p {
    color: #505656;
}
</style>