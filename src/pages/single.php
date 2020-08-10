<?php
//----------------------------------------------------
// Single
//----------------------------------------------------
?>
<div class="page-contents">
  <?php if (have_posts()): ?>
    <article class="article">
      <?php while (have_posts()): the_post(); ?>
        <?php
          $preview_add_thumbnail = get_option('preview_add_thumbnail');
          if (has_post_thumbnail() && $preview_add_thumbnail):
        ?>
          <div class="article-thumbnail-wrap">
            <?php the_post_thumbnail('large'); ?>
          </div>
        <?php endif; ?>
        <header class="article-header">
          <?php get_template_part('src/components/app-title'); ?>
          <p class="article-date">
            <time datetime="<?php the_time('Y-m-d'); ?>T<?php the_time('H:i:sP'); ?>">
              公開日：<?php the_time('Y年n月j日'); ?>
            </time>
            <?php if (get_the_modified_time('Y-m-d') != get_the_time('Y-m-d')) : ?>
              <time datetime="<?php the_modified_time('Y-m-d'); ?>T<?php the_modified_time('H:i:sP'); ?>">
                （最終更新日：<?php the_modified_time('Y年n月j日') ?>）
              </time>
            <?php endif; ?>
          </p>
        </header>
        <div class="article-contents">
          <?php the_content(); ?>
        </div>
      <?php endwhile; ?>
      <?php wp_link_pages(); ?>
    </article>
  <?php endif; ?>
</div>