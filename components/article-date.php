<?php
//----------------------------------------------------
// Article Date
//----------------------------------------------------
?>
<p class="article-date">
  <time datetime="<?php echo esc_attr(get_the_time('Y-m-d')); ?>">
    <?php esc_html_e('Published', 'qroko'); ?>: <?php the_time(get_option('date_format')) ?>
  </time>
  <?php if(get_the_time('Y-m-d') < get_the_modified_time('Y-m-d')): ?>
    <span> / </span>
    <time datetime="<?php echo esc_attr(get_the_modified_time('c')); ?>">
      <?php esc_html_e('Updated', 'qroko'); ?>: <?php the_modified_date(get_option('date_format')) ?>
    </time>
  <?php endif; ?>
</p>