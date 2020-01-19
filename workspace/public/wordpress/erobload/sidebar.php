<div class="p-flexWrap">
    <section id="popular" class="l-inner p-popular c-section u-mt-40">
        <div class="c-section__inner">
            <div class="p-popular__title__wrapper c-section__title__wrapper">
                <h2 class="p-popular__title c-section__title">人気記事</h2>
            </div>
            <ul class="p-popular__list c-section__list">
                <?php if (have_posts()) : ?>

                <?php
                // 記事のループ
                while (have_posts()) : the_post();
                    $category = get_the_category();
                    $cat_name = $category[0]->cat_name;
                    $cat_slug = $category[0]->category_nicename;
                    //カテゴリのリンクURLを取得
                    $cat_link = get_category_link($category->cat_ID);
                ?>
                    <li class="p-popular__item c-section__item">
                        <figure class="p-popular__rank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_rank1.png"></figure>
                        <article class="p-popular__article__wrapper">
                            <figure class="p-popular__item__thumb c-section__item__thumb"><?php the_post_thumbnail(); ?></figure>
                            <div class="p-popular__article c-section__article">
                                <div class="p-popular__article__header c-section__article__header">
                                    <a
                                        class="p-popular__article__category c-section__article__category -<?php echo $cat_slug; ?>" href="<?php $cat_link ?>"><?php echo $cat_name; ?></a>
                                    <h3 class="p-popular__article__title c-section__article__title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                </div>
                                <p class="p-popular__article__text c-section__article__text"><?php echo get_the_excerpt(); ?></p>
                                <a class="p-popular__article__link c-section__article__link"
                                    href="<?php the_permalink(); ?>">詳細を見る</a>
                                <time class="p-popular__article__time c-section__article__time"><?php the_time('Y年m月d日'); ?></time>
                            </div>
                        </article>
                    </li>
                <?php

                // End
                endwhile;
                endif;
                ?>
            </ul>
        </div>
    </section>
    <section id="tweet" class="l-inner p-tweet c-section u-mt-40">
        <div class="c-section__inner">
            <div class="p-tweet__title__wrapper c-section__title__wrapper">
                <h2 class="p-tweet__title c-section__title">twitter</h2>
            </div>
            <div class="p-tweet__card c-section__list">
                <article class="p-tweet__article c-section__item">
                    <blockquote class="twitter-tweet">
                        <p lang="ja" dir="ltr">「D.C.4 ～ダ・カーポ4～」好評発売中！ ダウンロード版、PS4/Switch版も販売中です！<br> <a
                                href="https://t.co/gnxgYf0Ske">https://t.co/gnxgYf0Ske</a> <br> <a
                                href="https://t.co/3WfUN25mwx">https://t.co/3WfUN25mwx</a> <br> <a
                                href="https://twitter.com/hashtag/DC4?src=hash&amp;ref_src=twsrc%5Etfw">#DC4</a>
                        </p>
                        &mdash; サーカス：「D.C.4」好評発売中！ (@circus_info) <a
                            href="https://twitter.com/circus_info/status/1217371015484829696?ref_src=twsrc%5Etfw">January
                            15, 2020</a>
                    </blockquote>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </article>
                <article class="p-tweet__article c-section__item">
                    <blockquote class="twitter-tweet">
                        <p lang="ja" dir="ltr">【お知らせ】ゆずソフト最新作『喫茶ステラと死神の蝶』マスターアップしました。12月20日発売決定です。よろしくお願いします。<a
                                href="https://twitter.com/hashtag/%E3%82%86%E3%81%9A%E3%82%BD%E3%83%95%E3%83%88?src=hash&amp;ref_src=twsrc%5Etfw">#ゆずソフト</a>
                            <a
                                href="https://twitter.com/hashtag/%E5%96%AB%E8%8C%B6%E3%82%B9%E3%83%86%E3%83%A9?src=hash&amp;ref_src=twsrc%5Etfw">#喫茶ステラ</a>
                            <a href="https://t.co/iOFPaKqmaK">pic.twitter.com/iOFPaKqmaK</a></p>&mdash;
                        ゆずソフト@最新作発売中！！ (@yuzusoft) <a
                            href="https://twitter.com/yuzusoft/status/1201783951452323840?ref_src=twsrc%5Etfw">December
                            3, 2019</a>
                    </blockquote>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </article>
                <article class="p-tweet__article c-section__item">
                    <blockquote class="twitter-tweet">
                        <p lang="ja" dir="ltr">【お知らせ】最新作『喫茶ステラと死神の蝶』の体験版配信中です。よろしくおねがいします。<a
                                href="https://twitter.com/hashtag/%E3%82%86%E3%81%9A%E3%82%BD%E3%83%95%E3%83%88?src=hash&amp;ref_src=twsrc%5Etfw">#ゆずソフト</a>
                            <a
                                href="https://twitter.com/hashtag/%E5%96%AB%E8%8C%B6%E3%82%B9%E3%83%86%E3%83%A9?src=hash&amp;ref_src=twsrc%5Etfw">#喫茶ステラ</a><a
                                href="https://t.co/4AJtQCsDl4">https://t.co/4AJtQCsDl4</a> <a
                                href="https://t.co/AbCRiMPB7d">pic.twitter.com/AbCRiMPB7d</a></p>&mdash;
                        ゆずソフト@最新作発売中！！ (@yuzusoft) <a
                            href="https://twitter.com/yuzusoft/status/1217389879765553152?ref_src=twsrc%5Etfw">January
                            15, 2020</a>
                    </blockquote>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </article>
            </div>
        </div>
    </section>
    <section id="category" class="l-inner p-category c-section u-mt-40">
        <div class="c-section__inner">
            <div class="p-category__title__wrapper c-section__title__wrapper">
                <h2 class="p-category__title c-section__title">カテゴリー</h2>
            </div>
            <div class="p-category__box">
                <ul class="p-category__list">
                    <?php
                        //一番親階層のカテゴリをすべて取得
                        $categories = get_categories('parent=0');
                        
                        //取得したカテゴリへの各種処理
                        foreach($categories as $val){

                            //カテゴリのリンクURLを取得
                            $cat_link = get_category_link($val->cat_ID);

                            //親カテゴリのリスト出力
                            echo '<li class="p-category__item"><a class="p-category__link" href="' . $cat_link . '">' . $val->name . '(' . $val->count . ')</a></li>';
                        }
                    ?>
                </ul>
            </div>
        </div>
    </section>
</div>