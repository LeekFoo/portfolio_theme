<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/logo.png">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css">
<link href="https://fonts.googleapis.com/css?family=Kosugi+Maru&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.2.1/font-awesome-animation.min.css" integrity="sha256-OksDpsEotGZHyoFCHRsdsld3UaZrCcE2d8jXU8rBjHo=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-152752591-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-152752591-1');
</script>
<?php wp_head(); ?>
</head>
<body id="portfolio-top" <?php body_class(); ?>>
<header>
<div id="nav_bar" class="navbar-fixed">
        <nav>
            <div class="nav-wrapper container">
                <a href="#" class="brand-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="サイトロゴ" />
                </a>
                <a href="" data-target="mobile-demo" class="sidenav-trigger"><i class="fas fa-bars"></i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="#">TOP</a></li>
                    <li><a href="#about">このサイトについて</a></li>
                    <li class="dropdown">
                        <a href="#portfolio_projects">ポートフォリオ</a>
                        <ul id="dropdown1" class="dropdown-list">
                            <li><a href="#portfolio_projects">制作物</a></li>
                            <li><a href="#portfolio_skill">スキル</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact">連絡先</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <ul class="sidenav collapsible" id="mobile-demo">
        <li><a href="#">TOP</a></li>
        <li><a href="#about">このサイトについて</a></li>
        <li>
            <a class="collapsible-header">ポートフォリオ<i class="fas fa-caret-down right"></i></a>
            <div class="collapsible-body">
                <ul>
                    <li><a href="#portfolio_projects">制作物</a></li>
                    <li><a href="#skill_set_content">スキル</a></li>
                </ul>
            </div>
        </li>
        <li><a href="#contact">連絡先</a></li>
    </ul>
</header>
