<?php get_header(); ?>

    <main class="home">
        <section id="news" class="l-inner p-news c-section u-mt-40">
            <div class="c-section__inner">
                <div class="p-news__title__wrapper c-section__title__wrapper">
                    <h2 class="p-news__title c-section__title"><?php single_cat_title(); ?></h2>
                </div>
                <ul class="p-news__list c-section__list">
                <?php 
                    $category = get_the_category()[0];
                    $cat_name = $category->cat_name;
                    $cat_slug = $category->category_nicename;
                    //カテゴリのリンクURLを取得
                    $cat_link = get_category_link($category->cat_ID);
                    query_posts('cat='.$category->cat_ID); 
                ?>
                <?php if (have_posts()) : ?>

                    <?php
                    // 記事のループ
                    while (have_posts()) : the_post();
                    ?>
                        <li class="p-news__item c-section__item">
                            <figure class="p-news__item__thumb c-section__item__thumb"><a class="lightBox" href="<?php echo get_the_post_thumbnail_url(); ?>" data-lightbox="group"><?php the_post_thumbnail(); ?></a></figure>
                            <div class="p-news__article c-section__article">
                                <div class="p-news__article__header c-section__article__header">
                                    <a class="p-news__article__category c-section__article__category -<?php echo $cat_slug; ?>" href="<?php echo $cat_link; ?>"><?php echo $cat_name; ?></a>
                                    <h3 class="p-news__article__title c-section__article__title"><a
                                            href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                </div>
                                <p class="p-news__article__text c-section__article__text">
                                    <?php echo get_the_excerpt(); ?></p>
                                <a class="p-news__article__link c-section__article__link" href="<?php the_permalink(); ?>">詳細を見る</a>
                                <time class="p-news__article__time c-section__article__time"><?php the_time('Y年m月d日'); ?></time>
                            </div>
                        </li>
                    <?php

                    // End
                    endwhile;
                    endif;
                    ?>
                </ul>
            </div>
        </section>
        <?php get_sidebar(); ?>

        <?php get_footer(); ?>