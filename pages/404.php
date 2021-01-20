<?php
//----------------------------------------------------
// 404
//----------------------------------------------------
?>
<div class="app-contents">
  <article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>
    <p><?php esc_html_e('404', 'qroko'); ?></p>
  </article>
</div>