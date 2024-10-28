<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/ fb# website: http://ogp.me/ns/website#">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="format-detection" content="email=no, telephone=no, address=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="noindex,nofollow" />
    <meta name="description" content="テクノロジーで社会課題を解決する。AIやビッグデータ分析などの技術を活用した社会課題解決サービスを提供するTETOTEの採用サイト。" />
    <meta name="keywords" content="" />
    <link rel="canonical" href="./" />
    <!-- favicon -->
    <link rel="shortcut icon"
        href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/tetote-favicon.svg" />
    <!-- apple-touch-icon -->
    <link rel="apple-touch-icon" sizes="180x180"
        href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/tetote-favicon.ico" />
    <link rel="icon" href="/icon.png">
    <!-- font -->
    <!-- style.css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
    <script src="https://cdn.jsdelivr.net/npm/focus-visible@5.2.0/dist/focus-visible.min.js"
        integrity="sha384-xRa5B8rCDfdg0npZcxAh+RXswrbFk3g6dlHVeABeluN8EIwdyljz/LqJgc2R3KNA" crossorigin="anonymous"
        defer></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="top" class="wrap" ontouchstart="">
        <!-- header -->
        <header id="js-header" class="l-header">
            <div class="l-header__inner">
                <!-- header-logo -->
                <h1 class="l-header__logo">
                    <a href="<?php echo esc_url(home_url('')); ?>" class="l-header__logoLink">
                        <figure>
                            <picture>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/header_logo01.svg"
                                    alt="ロゴ" id="logo" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/header_logo02.svg"
                                    alt="ロゴ" id="logo2" style="display:none" />
                            </picture>
                        </figure>
                    </a>
                    <a href="<?php echo esc_url(home_url('')); ?>" class="l-header__logoLink--subpage">
                        <figure>
                            <picture>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/header_logo02.svg"
                                    alt="ロゴ" />
                            </picture>
                        </figure>
                    </a>
                </h1>
                <h1 id="js-sub" class="l-header__logo -sub">
                    <a href="<?php echo esc_url(home_url('')); ?>" class="l-header__logoLink">
                        <figure>
                            <picture>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/header_logo02.svg"
                                    alt="ロゴ" />
                            </picture>
                        </figure>
                    </a>
                </h1>
                <!-- /header-logo -->
                <div class="l-header__right">
                    <div class="l-header__button">
                        <a href="<?php echo esc_url(home_url('details')); ?>"
                            class="l-header__buttonLink -recruit">募集要項</a>
                        <a href="<?php echo esc_url(home_url('entry')); ?>"
                            class="l-header__buttonLink -entry">ENTRY</a>
                    </div>
                    <!-- header-nav-toggle -->
                    <button id="js-hamburger-toggle" type="button" class="l-hamburger__toggle">
                        <div class="l-hamburger__toggleWrap">
                            <span class="l-hamburger__toggleLine"></span>
                            <span class="l-hamburger__toggleLine"></span>
                            <span class="l-hamburger__toggleLine"></span>
                        </div>
                        <p class="l-hamburger__text">MENU</p>
                    </button>
                </div>
                <!-- /header-nav-toggle -->
                <!-- header-menu -->
                <div id="js-menu" class="l-menu">
                    <div class="l-menu__wrapper">
                        <h1 class="l-menu__logo">
                            <a href="<?php echo esc_url(home_url('')); ?>" class="l-menu__logoLink">
                                <figure>
                                    <picture>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/header_logo02.svg"
                                            alt="ロゴ" />
                                    </picture>
                                </figure>
                            </a>
                        </h1>
                        <nav class="l-menu__nav">
                            <ul class="l-menu__list">
                                <ul class="l-menu__subList--left">
                                    <li class="l-menu__item">
                                        <a href="<?php echo esc_url(home_url('about-us')); ?>" class="l-menu__link">
                                            <p class="l-menu__title">ABOUT US</p>
                                            <p class="l-menu__subTitle">TETOTEについて</p>
                                        </a>
                                    </li>
                                    <li class="l-menu__item">
                                        <a href="<?php echo esc_url(home_url('staff')); ?>" class="l-menu__link">
                                            <p class="l-menu__title">STAFF</p>
                                            <p class="l-menu__subTitle">社員について</p>
                                        </a>
                                    </li>
                                    <li class="l-menu__item">
                                        <a href="<?php echo esc_url(home_url('blog')); ?>" class="l-menu__link">
                                            <p class="l-menu__title">BLOG</p>
                                            <p class="l-menu__subTitle">採用ブログ</p>
                                        </a>
                                    <li class="l-menu__item u-pc">
                                        <a href="<?php echo esc_url(home_url('details')); ?>"
                                            class="l-menu-button__link -recruit">募集要項</a>
                                    </li>
                                </ul>
                                </li>
                                <ul class="l-menu__subList--right">
                                    <li class="l-menu__item">
                                        <a href="<?php echo esc_url(home_url('benefits')); ?>" class="l-menu__link">
                                            <p class="l-menu__title">BENEFITS</p>
                                            <p class="l-menu__subTitle">福利厚生について</p>
                                        </a>
                                    </li>
                                    <li class="l-menu__item">
                                        <a href="<?php echo esc_url(home_url('career')); ?>" class="l-menu__link">
                                            <p class="l-menu__title">CAREER</p>
                                            <p class="l-menu__subTitle">研修制度とキャリアパス</p>
                                        </a>
                                    </li>
                                    <li class="l-menu__item -border-bottom">
                                        <a href="<?php echo esc_url(home_url('faq')); ?>" class="l-menu__link">
                                            <p class="l-menu__title">FAQ</p>
                                            <p class="l-menu__subTitle">よくある質問</p>
                                        </a>
                                    </li>
                                    <li class="l-menu__item u-pc">
                                        <a href="<?php echo esc_url(home_url('entry')); ?>"
                                            class="l-menu-button__link -entry">ENTRY</a>
                                    </li>
                                </ul>
                            </ul>
                            <!-- l-menu-button -->
                            <div class="l-menu-button u-sp">
                                <ul class="l-menu-button__list">
                                    <li class="l-menu-button__item">
                                        <a href="<?php echo esc_url(home_url('details')); ?>"
                                            class="l-menu-button__link -recruit">募集要項</a>
                                    </li>
                                    <li class="l-menu-button__item">
                                        <a href="<?php echo esc_url(home_url('entry')); ?>"
                                            class="l-menu-button__link -entry">ENTRY</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /l-menu-button -->
                        </nav>
                        <!-- /header-menu -->
                    </div>
                </div>
            </div>
        </header>
        <!-- /header -->