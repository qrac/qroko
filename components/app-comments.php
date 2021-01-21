<?php
//----------------------------------------------------
// App Comments
//----------------------------------------------------
?>
<?php
  $qroko_hide_post_comment = qroko_theme_mod_hide_post_comment();
  if (!$qroko_hide_post_comment):
?>
  <?php if (comments_open()): ?>
    <aside class="app-comments">
      <h2 class="app-comments-title">
        <?php _e('Comment', 'qroko'); ?>
      </h2>
      <?php if (have_comments()): ?>
        <ol class="app-comments-list">
          <?php wp_list_comments(); ?>
        </ol>
        <?php the_comments_pagination(); ?>
      <?php endif; ?>
      <?php comment_form(); ?>
    </aside>
  <?php endif; ?>
<?php endif; ?>