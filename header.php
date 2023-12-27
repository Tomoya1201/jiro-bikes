<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/js/vegas/vegas.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/js/slick/slick.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
    <?php 
        wp_enqueue_script('jquery');
        wp_enqueue_script('jiro-bikes', get_template_directory_uri() . '/assets/js/main.js');
        wp_enqueue_script('jiro-bikes-vegas', get_template_directory_uri() . '/assets/js/vegas/vegas.min.js');
        wp_enqueue_script('jiro-bikes-slick', get_template_directory_uri() . '/assets/js/slick/slick.min.js');
        /* wp_enqueue_script('jiro-bikes-mscroll', get_template_directory_uri() . '/assets/js/scrollmg.js'); */
        wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/738fbaff4a.js');
    ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
<header id="vegaslide">
    <div class="navcontainer">
        <div class="openbtn">
            <i></i>
            <i></i>
            <i></i>
        </div>
        
        <div class="navcontainer__overlay">
            <nav class="navbar">
                <ul class="navbar__left">
                    <li><a href="">ホーム</a></li>
                    <li><a href="">アバウト</a></li>
                    <li><a href="">ショップ</a></li>
                </ul>
                <div class="navbar__logo">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero/logo_01.png" alt="Jiro Bikes">
                    </a>
                </div>
                <ul class="navbar__right">
                    <li><a href="">会社概要</a></li>
                    <li><a href="">アクセス</a></li>
                    <li><a href="">お問合せ</a></li>
                </ul>
            </nav>
            <div class="sns">
                <ul>
                    <li><a href=""><i class="fa-brands fa-tiktok"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-x-twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

</header>