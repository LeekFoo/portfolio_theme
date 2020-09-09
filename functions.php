<?php
add_theme_support('html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ));
add_theme_support('automatic-feed-links');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
register_nav_menu('header-nav', ' ヘッダーナビゲーション ');
register_nav_menu('footer-nav', ' フッターナビゲーション ');

// WPのバージョン情報を非表示
remove_action('wp_head', 'wp_generator');

// プラグインのバージョン情報を非表示
function remove_cssjs_ver2($src)
{
    if (strpos($src, 'ver=')) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('style_loader_src', 'remove_cssjs_ver2', 9999);
add_filter('script_loader_src', 'remove_cssjs_ver2', 9999);

function load_google_cdn()
{
    if (!is_admin()) {
        //jQueryを登録解除
        wp_deregister_script('jquery');

        wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, false);
    }
}
add_action('init', 'load_google_cdn');

add_filter(
    'post_thumbnail_size',
    function ($size, $post_id) {
        return 'full';
    },
    10,
    2
);

function leek_scripts()
{

    // wp_enqueue_style( 'leek-style', get_stylesheet_uri() );

    $body_font 		= get_theme_mod('body_fonts', '//fonts.googleapis.com/css?family=Kosugi+Maru&display=swap');
    $headings_font 	= get_theme_mod('headings_fonts', '//fonts.googleapis.com/css?family=Kosugi+Maru&display=swap');

    wp_enqueue_style('leek-body-fonts', esc_url($body_font));

    wp_enqueue_style('leek-headings-fonts', esc_url($headings_font));

    wp_enqueue_style('leek-font', '//fonts.googleapis.com/css?family=Kosugi+Maru&display=swap', array(), '20200309');
    wp_enqueue_style('normalize', get_template_directory_uri() .'/css/reset.css', array(), '20200309');
    wp_enqueue_style('materialized', '//cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css', array(), '1.0.0');
    wp_enqueue_style('slick', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css', array(), '1.9.0');
    wp_enqueue_style('slick-theme', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css', array(), '1.9.0');
    wp_enqueue_style('slick-custom', get_template_directory_uri() .'/css/slick-theme.css', array(), '20200309');
    wp_enqueue_style('aos', '//cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css', array(), '2.3.4');
    wp_enqueue_style('my-fa5', '//use.fontawesome.com/releases/v5.6.3/css/all.css', array(), '5.6.3');

    wp_enqueue_style('leek-css', get_template_directory_uri() . '/css/style.css');

    wp_enqueue_script('materialized-js', '//cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js', array('jquery'));
    wp_enqueue_script('jquery-ui-js', '//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js', array('jquery'));
    wp_enqueue_script('anime-js', '//cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.js', array('jquery'));
    wp_enqueue_script('slick-js', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array('jquery'));
    wp_enqueue_script('aos-js', '//cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js', array('jquery'));

    wp_enqueue_script('leek-scripts', get_template_directory_uri() . '/js/custom.js', array('jquery'), '20200330', true);

    wp_script_add_data('leek-html5shiv', 'conditional', 'lt IE 9');

    // WP側で読み込まれているjQueryを読み込まず、独自に読み込む
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), '3.4.1');
}
add_action('wp_enqueue_scripts', 'leek_scripts');

// パスワード保護ページの設定
function password_form_cookie()
{
    require_once ABSPATH . 'wp-includes/class-phpass.php';
    $hasher = new PasswordHash(8, true);
    setcookie('wp-postpass_' . COOKIEHASH, $hasher->HashPassword(wp_unslash($_POST['post_password'])), time() + MINUTE_IN_SECONDS, COOKIEPATH);
    wp_safe_redirect(wp_get_referer());
    exit();
}
  add_action('login_form_postpass', 'password_form_cookie');

function my_password_form()
{
    return '<p>このコンテンツはパスワードで保護されています。<br>閲覧するには以下にパスワードを入力してください。</p>
<form class="post_password" action="' . home_url() . '/wp-login.php?action=postpass" method="post">
パスワード <input name="post_password" type="password" size="24" /> <input class="waves-effect waves-light btn white-text cyan lighten-1" type="submit" name="Submit" value="' . esc_attr__("確定") . '" />
</form>';
}
add_filter('the_password_form', 'my_password_form');

add_filter('protected_title_format', 'remove_protected');
function remove_protected($title)
{
    return '%s';
}
