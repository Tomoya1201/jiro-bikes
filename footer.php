<footer id="footer">
    <div class="footercontainer">
        <div class="footbox">
            <div class="footbox__left">
                <div class="footer_logo">
                    JIRO BIKE
                    <span>"地球を守る自転車"</span>
                </div>
                <div class="footer_sns">
                    <a href=""><i class="fa-brands fa-tiktok"></i></a>
                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                    <a href=""><i class="fa-brands fa-x-twitter"></i></a>
                </div>
            </div>
            <div class="footbox__center">
                <div class="footer_titles">
                    INFO
                </div>
                    <div class="list">
                        <ul>
                            <li><a href="">アバウト</a></li>
                            <li><a href="">会社概要</a></li>
                            <li><a href="">アクセス</a></li>
                            <li><a href="">お問合せ</a></li>
                        </ul>
                    </div>
                <div class="footer_titles">
                    SITEMAP
                </div>
                    <div class="list">
                        <ul>
                            <li><a href="">ホーム</a></li>
                            <li><a href="">ショップ</a></li>
                            <li><a href="">アクセサリーショップ</a></li>
                            <li><a href="">アバウト</a></li>
                            <li><a href="">会社概要</a></li>
                            <li><a href="">アクセス</a></li>
                            <li><a href="">お問合せ</a></li>
                        </ul>
                    </div>
            </div>
            <div class="footbox__right">
                <div class="footer_titles">
                    SHOP
                </div>
                <div class="footer_subtitle">自転車</div>
                    <div class="list">
                        <ul>
                            <li><a href="">ヘルメット</a></li>
                            <li><a href="">自転車パーツ</a></li>
                            <li><a href="">GoProカメラ</a></li>
                            <li><a href="">ライト</a></li>
                            <li><a href="">タイヤ</a></li>
                        </ul>
                    </div>
            </div>
        </div>


        <div class="cprights">
            <small><?php the_date("Y年") ?> © Bike Jiro All rights reserved.</small>
            <span><a href="">PrivacyPolicy.</a></span>
        </div>
    </div>
</footer>

<?php 
    if ( is_home() ){
        wp_enqueue_script('jiro-bikes', get_template_directory_uri() . '/assets/js/main.js');
        wp_enqueue_script('jiro-bikes-vegas', get_template_directory_uri() . '/assets/js/vegas/vegas.min.js');
        wp_enqueue_script('jiro-bikes-slick', get_template_directory_uri() . '/assets/js/slick/slick.min.js');
        /* wp_enqueue_script('jiro-bikes-mscroll', get_template_directory_uri() . '/assets/js/scrollmg.js'); */
        wp_footer(); 
    }
?>
</body>
</html>