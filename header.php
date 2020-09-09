<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/logo.png">

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
<body <?php body_class(); ?>>
<header>
<?php $isHome = is_home(); ?>
<div id="nav_bar" class="navbar-fixed">
        <nav>
            <div class="nav-wrapper container">
                <a href="#" class="brand-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="サイトロゴ" />
                </a>
                <a href="" data-target="mobile-demo" class="sidenav-trigger"><i class="fas fa-bars"></i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="<?php echo $isHome ? '#' : home_url(); ?>">TOP</a></li>
                    <li><a href="<?php echo $isHome ? '#about' : home_url('#about'); ?>">このサイトについて</a></li>
                    <li class="dropdown">
                        <a href="<?php echo $isHome ? '#portfolio_projects' : home_url('#portfolio_projects'); ?>">ポートフォリオ</a>
                        <ul id="dropdown1" class="dropdown-list">
                            <li><a href="<?php echo $isHome ? '#portfolio_projects' : home_url('#portfolio_projects'); ?>">制作物</a></li>
                            <li><a href="<?php echo $isHome ? '#portfolio_skill' : home_url('#portfolio_skill'); ?>">スキル</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact">連絡先</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <ul class="sidenav collapsible" id="mobile-demo">
        <li><a href="<?php echo $isHome ? '#' : home_url(); ?>">TOP</a></li>
        <li><a href="<?php echo $isHome ? '#about' : home_url('#about'); ?>">このサイトについて</a></li>
        <li>
            <a class="collapsible-header">ポートフォリオ<i class="fas fa-caret-down right"></i></a>
            <div class="collapsible-body">
                <ul>
                    <li><a href="<?php echo $isHome ? '#portfolio_projects' : home_url('#portfolio_projects'); ?>">制作物</a></li>
                    <li><a href="<?php echo $isHome ? '#portfolio_skill' : home_url('#portfolio_skill'); ?>">スキル</a></li>
                </ul>
            </div>
        </li>
        <li><a href="#contact">連絡先</a></li>
    </ul>
</header>
