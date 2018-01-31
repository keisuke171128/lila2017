<?php
/**
 * Template Name: contact
 */
get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main athena-page" role="main">


        <div class="contact-wrapper">
            <div class="contact-title page-title">
                <h1>Contact</h1>
            </div>  
            <div class="content-explain">
                <p>
                   全てのご連絡はLiLA公式LINEでお願い致します。
                </p>
            </div>

            <div class="page-contact-content">
                <div class="recruit-title showbox">
                    <h3>メンバー加入希望の方</h3>
                </div>
                <div class="recruit-content hidenbox">
                    <p>
                        文頭に「メンバー加入希望！」をつけてご連絡ください。
                        名前・大学名・HP（あれば）
                        をご記入のうえご連絡ください。

                        <div class="contact-line-box">
                            <a href="https://line.me/R/ti/p/%40gnk9580e"><img height="auto" width="100px" border="0" alt="友だち追加" src="https://scdn.line-apps.com/n/line_add_friends/btn/ja.png"></a>
                        </div>
                    </p>
                </div>
                <div class="order-title showbox">
                    <h3>サイト制作依頼の方</h3>
                </div>
                <div class="order-content hidenbox">
                    <p>
                        文頭に「サイト制作依頼」をつけてご連絡ください。
                        名前・大学名・HP（あれば）
                        をご記入のうえご連絡ください。

                        <div class="contact-line-box">
                            <a href="https://line.me/R/ti/p/%40gnk9580e"><img height="auto" width="100px" border="0" alt="友だち追加" src="https://scdn.line-apps.com/n/line_add_friends/btn/ja.png"></a>
                        </div>
                    </p>
                </div>
                <div class="other-title showbox">
                    <h3>その他のご連絡</h3>
                </div>
                <div class="other-content hidenbox">
                    <p>
                        文頭に「その他」をつけてご連絡ください。
                        名前・大学名・HP（あれば）
                        をご記入のうえご連絡ください。

                        <div class="contact-line-box">
                            <a href="https://line.me/R/ti/p/%40gnk9580e"><img height="auto" width="100px" border="0" alt="友だち追加" src="https://scdn.line-apps.com/n/line_add_friends/btn/ja.png"></a>
                        </div>
                    </p>
                </div>
            </div>
        </div>


        <!-- CSS -->
        <style type="text/css">
        .showbox h3 {
            border-left: 5px solid #049a95;
            background-color: #8080801f;
            padding: 10px;
        }
        .hidenbox {
            border-left: 1px solid #067572f0;   
            padding: 10px;
        }
    </style>

    <!-- JS -->
    <script type="text/javascript">
        $('.contact-wrapper .hidenbox').hide();
        $('.contact-wrapper .showbox').click(function(){
            $(this).next('.hidenbox').slideToggle();
            $(this).next('.hidenbox').siblings('.hidenbox').slideUp();
        });
    </script>



    
</div>
</div>

</main><!-- #main -->




</div><!-- #primary -->


<?php get_footer(); ?>

<style type="text/css">

</style>