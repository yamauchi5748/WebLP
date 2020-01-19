<?php
  if (post_password_required()) {
     return;
   }
?>
<!-- comments start -->
<div class="comments u-mt-50">
   <?php if (have_comments()) :?>
   <h3 class="comments-count"><?php echo get_comments_number().' 件のコメント'; ?></h3>
   <!-- comments-list start -->
   <ul class="comments-list">
     <?php wp_list_comments(array(
       'avatar_size'=>48,
       'style'=>'ul',
       'type'=>'comment',
       'callback'=>'mytheme_comments'
      )); ?>
   </ul>
   <?php if (get_comment_pages_count() > 1) : ?>
   <ul class="comments-nav">
     <li class="comments-prev"><?php previous_comments_link('＜＜ 前のコメント'); ?></li>
     <li class="comments-next"><?php next_comments_link('次のコメント ＞＞'); ?></li>
   </ul>
   <?php endif; ?>
  <?php endif; ?>
  <!-- comments-list end -->
  <!-- comments-form start -->
  <?php
     $comments_args = array(
       'fields' => array(
       'author' => '<p class="comments-form-author">' . '<label for="author">' . __( 'Name' ) . ( $req ? ' <span class="comments-required">*</span>' : '' ) . '</label>' .'<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '"></p>',
       'email' => '<p class="comments-form-email"><label for="email">' . __( 'Email' ) . ( $req ? ' <span class="comments-required">*</span>' : '' ) . '</label> ' .'<input id="email" name="email" type="email"' . ' value="' . esc_attr( $commenter['comment_author_email'] ) . '"></p>'
     ),
     'title_reply' => 'コメントはこちらから',
     'comment_notes_before' => '<p class="comments-notes">メールアドレスは公開されませんのでご安心ください。また、<span class="comments-required">*</span> が付いている欄は必須項目となります。</p>',
     'comment_notes_after' => '<p class="comments-form-allowed-tags">内容に問題なければ、下記の「コメントを送信する」ボタンを押してください。</p>',
     'label_submit' => 'コメントを送信する',
   );
   comment_form($comments_args);
  ?>
  <!-- comments-form end -->
</div>
<!-- comments end -->