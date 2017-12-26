<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Athena
 */
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main athena-page" role="main">
        <div class="error-wrapper">
            <h2>Errorページです</h2>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>


<style type="text/css">
.error-wrapper {
    text-align: center;
    padding: 30px 0;
}
</style>