<?php
//----------------------------------------------------
// Single
//----------------------------------------------------
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_template_part('components/app-head'); ?>
<body <?php body_class(); ?>>
  <?php get_template_part('components/app-header'); ?>
  <?php get_template_part('components/app-menu'); ?>
  <main class="app-main">
    <div class="app-main-contents">
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
              <?php get_template_part('components/app-title'); ?>
              <p class="article-date">
                <time><?php the_time('Y年n月j日'); ?></time>
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
  </main>
  <?php get_template_part('components/app-footer'); ?>
</body>
</html>