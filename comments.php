<?php
//----------------------------------------------------
// Comments
//----------------------------------------------------
?>
<?php if( comments_open() ){ ?>
  <div class="comments">
    <p>コメント</p>
    <?php if( have_comments() ){ ?>
    <ol class="comments-list">
      <?php wp_list_comments(); ?>
    </ol>
    <?php the_comments_pagination(); ?>
    <?php } ?>
    <?php comment_form(); ?>
  </div>
<?php } ?>