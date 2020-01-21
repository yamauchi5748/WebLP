<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="えろげぶろーど | <?php echo the_title(); ?> | <?php echo get_the_excerpt(); ?> エロゲ・同人・レビュー・攻略・おすすめなどの配信を行うサイトです。">
    <meta name="keywords" content="えろげぶろーど エロゲ まとめ レビュー 攻略 おすすめ 配信 webサイト <?php echo the_title(); ?>">
    <meta name="apple-mobile-web-app-title" content="">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png">

    <!--facebook & その他SNSの設定-->
    <meta property="og:title" content="えろげぶろーど | <?php echo the_title(); ?>">
    <meta property="og:type" content="website">
    <meta property="og:description" content="えろげぶろーど | <?php echo the_title(); ?> | <?php echo get_the_excerpt(); ?> エロゲ・同人・レビュー・攻略・おすすめなどの配信を行うサイトです。">
    <meta property="og:url" content="<?php echo get_the_permalink(); ?>">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png">
    <meta property="og:site_name" content="えろげぶろーど">

    <!--twitterの設定-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="<?php echo get_the_permalink(); ?>">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" />
    <meta name="twitter:title" content="えろげぶろーど">
    <meta name="twitter:description" content="えろげぶろーど | <?php echo the_title(); ?> | <?php echo get_the_excerpt(); ?> エロゲ・同人・レビュー・攻略・おすすめなどの配信を行うサイトです。">

    <title>えろげぶろーど | <?php echo the_title(); ?></title>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick/slick.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" rel="stylesheet">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156336637-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-156336637-1');
    </script>
</head>

<body>
    <header class="l-header">
        <div class="l-header__wrapper">
            <div class="u-ml-6 l-header__title">エロゲサイト<br class="sp">まとめ<br class="sp">攻略</div>
            <h1><a class="l-header__logo" href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="えろげぶろーど"></a></h1>
            <div class="l-header__humburger">
                <span></span>
                <span class="over"></span>
                <span></span>
            </div>
        </div>
        <nav class="l-header__container">
            <ul class="l-header__container__list">
                <li class="l-header__container__item"><a class="l-header__container__link js-header__container__link"
                        href="/">HOME</a></li>
                <li class="l-header__container__item"><a class="l-header__container__link js-header__container__link"
                        href="#news">最新情報</a></li>
                <li class="l-header__container__item"><a class="l-header__container__link js-header__container__link"
                        href="#popular">人気記事</a></li>
                <li class="l-header__container__item"><a class="l-header__container__link js-header__container__link"
                        href="#tweet">ツイート</a></li>
                <li class="l-header__container__item"><a class="l-header__container__link js-header__container__link"
                        href="#category">カテゴリ</a></li>
            </ul>
        </nav>
        <div class="l-header__mv">
            <ul class="l-header__mv__list js-slider">
                <li class="l-header__mv__item -first">
                    <a class="l-header__mv__link" href="http://www.akabeesoft3.com/" target="_blank"><img src="http://www.akabeesoft3.com/products/charabration/images/banner600x150.jpg" border="0" width="600" height="150" alt="『きゃらぶれーしょん！』を応援しています！"></a>
                </li>
                <li class="l-header__mv__item -second">
                    <a class="l-header__mv__link" href="http://palette.clearrave.co.jp/product/yukiiro/" target="_blank"><img src="http://palette.clearrave.co.jp/product/yukiiro/images/special/banner/600-140_01.jpg" alt="9-nine-ゆきいろゆきはなゆきのあと"></a>
                </li>
                <li class="l-header__mv__item -third">
                    <a class="l-header__mv__link" href="http://madosoft.net/raspberry/" target="_blank"><img src="http://madosoft.net/raspberry/img/ouen/600x150_1.jpg" border="0" alt="【ラズベリーキューブ】応援中！"></a>
                </li>
            </ul>
        </div>
        <div class="l-overlay"></div>
    </header>