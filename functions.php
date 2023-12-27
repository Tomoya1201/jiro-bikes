<?php 
/**
 * 画像を使用可能にする
 */
add_theme_support( 'post-thumbnails' );
/**
 * <title>タグを出力する
 */
add_theme_support('title-tag');
/**
 * タイトルタグの区切り文字をエン・ダッシュから縦線に変更する
 */
add_filter('document_title_separator', 'my_document_title_separator');
function my_document_title_separator($separator){
    $separator = '|';
    return $separator;
}
/**
 * タイトルタグのテキストを変更する
 */
add_filter('document_title_parts', 'my_document_title_parts');
function my_document_title_parts($title){
    if (is_home()) {
        unset($title['tagline']); // タグラインを削除
        $title['title'] = 'Jiro Bikes '; //テキストを変更
    }
    return $title;
}
add_action( 'wp_body_open', function (){
    ?>

    <?php
});