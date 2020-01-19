<?php 
    get_header(); 
    $category = get_the_category();
    $cat_name = $category[0]->cat_name;
    $cat_slug = $category[0]->category_nicename;
    //カテゴリのリンクURLを取得
    $cat_link = get_category_link($category->cat_ID);
?>
    <main class="home post">
        <?php if(have_posts()): while(have_posts()):the_post(); ?>
            <article class="l-inner p-post c-section u-mt-40">
                <div class="p-post__inner">
                    <div class="p-post__title__wrapper c-section__title__wrapper">
                        <h2 class="p-post__title c-section__title"><?php the_title(); ?></h2>
                    </div>
                    <div class="p-post__contents">
                        <div class="p-post__meta">
                            <time class="p-post__meta__time" datetime="2020-1-20"><?php the_time('Y年m月d日'); ?></time>
                            <a class="p-post__meta__category c-section__article__category -<?php echo $cat_slug; ?>" href="<?php $cat_link ?>"><?php echo $cat_name; ?></a>
                        </div>
                        <?php the_content(); ?>
                        <p class="p-post__text">
                            
                        </p>
                        <figure class="p-post__thumb c-section__item__thumb"><?php the_post_thumbnail(); ?></figure>
                        <table class="p-post__table" border="1">
                            <tr class="p-post__table__box">
                                <th class="p-post__table__header">タイトル</th>
                                <td class="p-post__data">フォーリン・ラビリンス -隷属の少女たち-</td>
                            </tr>
                            <tr class="p-post__table__box">
                                <th class="p-post__table__header">発売日</th>
                                <td class="p-post__data">2019/11/10</td>
                            </tr>
                            <tr class="p-post__table__box">
                                <th class="p-post__table__header">価格</th>
                                <td class="p-post__data">1,980円</td>
                            </tr>
                            <tr class="p-post__table__box">
                                <th class="p-post__table__header">販売ブランド</th>
                                <td class="p-post__data">ジュッカクゲームス</td>
                            </tr>
                            <tr class="p-post__table__box">
                                <th class="p-post__table__header">ジャンル</th>
                                <td class="p-post__data">ロールプレイング</td>
                            </tr>
                            <tr class="p-post__table__box">
                                <th class="p-post__table__header">販売先URL</th>
                                <td class="p-post__data"><a
                                        href="https://www.dlsite.com/maniax/work/=/product_id/RJ240457.html"
                                        target="_blank">DL.Site</a>
                                </td>
                            </tr>
                            <tr class="p-post__table__box">
                                <th class="p-post__table__header">製作者URL</th>
                                <td class="p-post__data"><a href="http://jukkakugames.blog.jp/"
                                        target="_blank">ジュッカクゲームスHP</a>
                                </td>
                            </tr>
                            <tr class="p-post__table__box">
                                <th class="p-post__table__header">製作者twitter</th>
                                <td class="p-post__data"><a href="https://twitter.com/JukkakuGames"
                                        target="_blank">ジュッカクゲームスtwitter</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </article>
        <?php endwhile; endif; ?>

    <?php get_sidebar(); ?>

<?php get_footer(); ?>