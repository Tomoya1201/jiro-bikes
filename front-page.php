<?php get_header(); ?>

<?php  
    $mainroot = '/wp-content/themes/jiro-bikes';
    include($_SERVER['DOCUMENT_ROOT'] . $mainroot . '/breadcumb.php'); 
?>

<section id="shop">
    <article>
        <div class="display">
            <div class="container">
                <div class="title">
                    <h1>SHOP</h1>
                </div>
            </div>
            <div class="container">
                <div class="inner_shop">
                    <ul class="grid_wrap">
                        <?php
                            $valuesymbol = '￥';
                            $imgroot = get_template_directory_uri().'/assets/img/bicycle/';
                            $bikelist = [
                                [
                                    $imgroot .'bicycle_01.png', 
                                    'ACFタイトル', 
                                    'ACF詳細テキスト', 
                                    $valuesymbol.'26,240'
                                ],
                                [
                                    $imgroot .'bicycle_02.png', 
                                    'ACFタイトル', 
                                    'ACF詳細テキスト', 
                                    $valuesymbol.'26,240'
                                ],
                                [
                                    $imgroot .'bicycle_03.png', 
                                    'ACFタイトル', 
                                    'ACF詳細テキスト', 
                                    $valuesymbol.'26,240'
                                ],
                                [
                                    $imgroot .'bicycle_04.png', 
                                    'ACFタイトル', 
                                    'ACF詳細テキスト', 
                                    $valuesymbol.'26,240'
                                ],
                                [
                                    $imgroot .'bicycle_05.png', 
                                    'ACFタイトル', 
                                    'ACF詳細テキスト', 
                                    $valuesymbol.'26,240'
                                ],
                                [
                                    $imgroot .'bicycle_06.png', 
                                    'ACFタイトル', 
                                    'ACF詳細テキスト', 
                                    $valuesymbol.'26,240'
                                ]
                            ];
                            foreach ($bikelist as $bikes){
                                echo
                                '<li>
                                    <figure>
                                        <img src="'.$bikes[0].'" alt="">
                                    </figure>
                                    <dl>
                                        <dt>'.$bikes[1].'</dt>
                                        <dd>'.$bikes[2].'</dd>
                                        <dd>'.$bikes[3].'</dd>
                                    </dl>
                                </li>';
                            }
                        ?>
                    </ul>
                    <div class="button">
                        <div class="button__inner"><a href="">SEE OUR SHOP<span class="btn_arrow">→</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>
<section id="news" class="news_inner">
    <article>
        <div class="display">
            <div class="container">
                <div class="title title_news">
                    <h1>NEWS / EVENTS</h1>
                </div>
            </div>
            <div class="container">
                <?php get_template_part('single', 'events'); ?>
                <?php   if ( have_posts() ) :  ?>
                    <?php while (have_posts() ) : the_post(); ?>
                        <?php get_template_part('template-parts/loop', 'news'); ?>
                    <?php  endwhile; ?>
                <?php  endif; wp_reset_postdata(); ?>
            </div>
            <div class="button">
                <div class="button__inner"><a href="">SEE MORE<span class="btn_arrow">→</span></a></div>
            </div>
        </div>
    </article>
</section>
<section id="about">
    <article>
        <div class="container">
            <div class="about">
                <div class="about-wrap">
                    <div class="about-wrap__pic">

                    </div>
                    <div class="about-wrap__content">
                        <dl>
                            <dt>ABOUT “JIRO BIKE”</dt>
                            <dd>
                            ジョバンニが学校の門を出るとき、同じ組の七八人は家へ帰らずカムパネルラをまん中にして校庭の隅（すみ）の桜（さくら）の木のところに集まっていました。それはこんやの星祭に青いあかりをこしらえて川へ流す烏瓜（からすうり）を取りに行く相談らしかったのです。 けれどもジョバンニは手を大きく振（ふ）ってどしどし学校の門を出て来ました。
                            </dd>
                        </dl>
                        <div class="button">
                            <div class="button__inner"><a href="">VIEW MORE<span class="btn_arrow">→</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slick-wrap">
                <div class="about-slick">
                    <div><img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/slideshow/slide_wide1.png" alt=""></div>
                    <div><img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/slideshow/slide_wide2.png" alt=""></div>
                    <div><img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/slideshow/slide_wide3.png" alt=""></div>
                    <div><img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/slideshow/slide_wide4.png" alt=""></div>
                </div>
            </div>
        </div>
    </article>
</section>

<?php get_footer(); ?>