<?php
//----------------------------------------------------
// Article Tag
//----------------------------------------------------
?>
<?php
  $tags = get_the_tags();
  if ($tags) {
    echo '<p class="article-tag">';
    the_tags( __('Tag', 'qroko') . ': ', ', ', '' );
    echo '</p>';
  }
?>