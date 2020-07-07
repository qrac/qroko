<?php
//----------------------------------------------------
// Page
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
            <header class="article-header">
              <?php get_template_part('components/app-title'); ?>
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