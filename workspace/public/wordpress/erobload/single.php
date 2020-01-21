<?php
    get_header();
    $category = get_the_category()[0];
    $cat_name = $category->cat_name;
    $cat_slug = $category->category_nicename;
    //カテゴリのリンクURLを取得
    $cat_link = get_category_link($category->cat_ID);
?>
    <main class="home post">
        <?php if (have_posts()): while (have_posts()):the_post(); ?>
            <article class="l-inner p-post c-section u-mt-40">
                <div class="p-post__inner">
                    <div class="p-post__title__wrapper c-section__title__wrapper">
                        <h2 class="p-post__title c-section__title"><?php the_title(); ?></h2>
                    </div>
                    <div class="p-post__contents">
                        <div class="p-post__meta">
                            <time class="p-post__meta__time" datetime="2020-1-20"><?php the_time('Y年m月d日'); ?></time>
                            <a class="p-post__meta__category c-section__article__category -<?php echo $cat_slug; ?>" href="<?php echo $cat_link; ?>"><?php echo $cat_name; ?></a>
                        </div>

                        <!-- Twitterボタン -->
                        <a class="twitter-share-button" href="https://twitter.com/intent/tweet">Tweet</a>
                        
                        <?php the_content(); ?>

                        <div class="p-post__sideContents">
                            <div class="p-post__sideContents__inner">
                                <a href="//blog.with2.net/link/?2028459:4496" target="blank"><img src="https://blog.with2.net/img/banner/c/banner_1/br_c_4496_1.gif" title="ノベルゲームランキング"></a><br><a href="//blog.with2.net/link/?2028459:4496" style="font-size: 0.9em;">ノベルゲームランキング</a>
                            </div>
                            <div class="p-post__sideContents__inner">
                                <a href="//blog.with2.net/link/?2028459:1400" target="blank"><img src="https://blog.with2.net/img/banner/c/banner_1/br_c_1400_1.gif" title="ゲームランキング"></a><br><a href="//blog.with2.net/link/?2028459:1400" style="font-size: 0.9em;">ゲームランキング</a>
                            </div>
                        </div>

                        <!-- コメントテンプレート呼び出し -->
                        <?php comments_template(); ?>
                    </div>
                </div>
            </article>
        <?php endwhile; endif; ?>

    <?php get_sidebar(); ?>

<?php get_footer(); ?>