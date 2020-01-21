<?php
/**
 * アイキャッチ画像に対応する
 */
function my_after_setup_theme()
{
    // アイキャッチ画像を有効にする
    add_theme_support('post-thumbnails');
    // アイキャッチ画像サイズを指定する（横：640px 縦：384）
    // 画像サイズをオーバーした場合は切り抜き
    set_post_thumbnail_size(640, 384, true);
}
add_action('after_setup_theme', 'my_after_setup_theme');

/*
 * 作成した独自RSSテンプレートを読み込む
 */
function do_feed_new() {
    load_template( get_template_directory() . '/feeds/feed-new.php');
}
//独自RSSテンプレート呼び出し用アクションフックを追加
add_action('do_feed_new', 'do_feed_new');

/* コメント機能作成 */
function mytheme_comments($comment, $args, $depth){
    $GLOBALS['comment'] = $comment; ?>
    <li id="li-comment-<?php comment_ID() ?>" class="comments-item">
      <div id="comment-<?php comment_ID(); ?>" class="comments-wrapper">
        <div class="comments-meta">
        <?php echo get_avatar( $comment, $args['avatar_size']) ?>
          <ul class="comments-meta-list">
            <li class="comments-author-name">
            <?php printf('<cite class="fn">%s</cite>', get_comment_author_link()) ?>
            </li>
            <li class="comments-title">
            <?php
              $commentID_parent = $comment->comment_parent;
              if( $commentID_parent != 0 ):
            ?>
              <a href="<?php echo htmlspecialchars( get_comment_link( $commentID_parent ) ) ?>"><?php echo get_comment_author($commentID_parent); ?>さんへの返信</a>
            <?php else: ?>
              <a href="#top">「<?php the_title(); ?>」へのコメント</a>
            <?php endif; ?>
            <?php 
              if ($comment->comment_approved == '0') {
                echo '<span class="comments-approval">このコメントは承認待ちです。</span>';
              }
            ?>
            </li>
            <li class="comments-date">
              <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
              <?php printf(__('%1$s at %2$s'), get_comment_date(), get_comment_time()) ?></a>
  <span><?php edit_comment_link('（編集する）','','') ?></span>
            </li>
          </ul>
        </div>
        <!-- comment-meta -->
        <div class="comments-content">
          <?php comment_text() ?>
        </div>
        <div class="comments-reply">
          <?php comment_reply_link(array_merge( $args, array(
             'reply_text'=>'返信する', 
             'add_below' =>$add_below, 
             'depth' =>$depth, 
             'max_depth' =>$args['max_depth']))) 
          ?>
        </div>
      </div>
      <!-- comment-comment_ID -->
    <?php
 }

 function pagination( $pages, $paged, $range = 2, $show_only = false ) {

    $pages = ( int ) $pages;    //float型で渡ってくるので明示的に int型 へ
    $paged = $paged ?: 1;       //get_query_var('paged')をそのまま投げても大丈夫なように

    //表示テキスト
    $text_first   = "« 最初へ";
    $text_before  = "‹ 前へ";
    $text_next    = "次へ ›";
    $text_last    = "最後へ »";

    if ( $show_only && $pages === 1 ) {
        // １ページのみで表示設定が true の時
        echo '<div class="pagination"><span class="current pager">1</span></div>';
        return;
    }

    if ( $pages === 1 ) return;    // １ページのみで表示設定もない場合

    if ( 1 !== $pages ) {
        //２ページ以上の時
        echo '<div class="p-pagenation">';
        if ( $paged > $range + 1 ) {
            // 「最初へ」 の表示
            echo '<a href="', get_pagenum_link(1) ,'" class="first">', $text_first ,'</a>';
        }
        if ( $paged > 1 ) {
            // 「前へ」 の表示
            echo '<a href="', get_pagenum_link( $paged - 1 ) ,'" class="prev">', $text_before ,'</a>';
        }
        for ( $i = 1; $i <= $pages; $i++ ) {

            if ( $i <= $paged + $range && $i >= $paged - $range ) {
                // $paged +- $range 以内であればページ番号を出力
                if ( $paged === $i ) {
                    echo '<span class="current pager">', $i ,'</span>';
                } else {
                    echo '<a href="', get_pagenum_link( $i ) ,'" class="pager">', $i ,'</a>';
                }
            }

        }
        if ( $paged < $pages ) {
            // 「次へ」 の表示
            echo '<a href="', get_pagenum_link( $paged + 1 ) ,'" class="next">', $text_next ,'</a>';
        }
        if ( $paged + $range < $pages ) {
            // 「最後へ」 の表示
            echo '<a href="', get_pagenum_link( $pages ) ,'" class="last">', $text_last ,'</a>';
        }
        echo '</div>';
        echo '</div>';
    }
}