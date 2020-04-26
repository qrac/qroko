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
  <main class="main">
    <div class="section">
      <div class="inner is-width-min">
        <?php if (have_posts()): ?>
          <?php while (have_posts()): the_post(); ?>
            <article class="article is-single">
              <header class="article-header">
                <h1 class="article-title">
                  <?php if (is_home()): ?>
                    <?php single_post_title(); ?>
                  <?php elseif (is_search()): ?>
                    <?php printf( esc_html__('検索結果: %s'), '' . get_search_query() . ''); ?>
                  <?php elseif (is_archive()): ?>
                    <?php single_cat_title(); ?>
                  <?php elseif (is_single()): ?>
                    <?php the_title(); ?>
                  <?php else: ?>
                    <?php the_title(); ?>
                  <?php endif; ?>
                </h1>
                <?php if (is_single()): ?>
                  <p class="article-date"><?php the_time('Y年n月j日'); ?></p>
                <?php endif; ?>
              </header>
              <div class="wysiwyg is-space">
                <?php the_content(); ?>
              </div>
            </article>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </main>
  <?php get_template_part('components/app-footer'); ?>
</body>
</html>