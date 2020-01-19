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
                        <?php the_content(); ?>
                        <!-- コメントテンプレート呼び出し -->
                    <?php comments_template(); ?>
                    </div>
                </div>
            </article>
        <?php endwhile; endif; ?>

    <?php get_sidebar(); ?>

<?php get_footer(); ?>