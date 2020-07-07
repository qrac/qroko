<?php
//----------------------------------------------------
// Index
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
      <?php get_template_part('components/app-title'); ?>
      <?php if (have_posts()): ?>
        <ul>
          <?php while (have_posts()): the_post(); ?>
            <li>
              <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
            </li>
          <?php endwhile; ?>
        </ul>
      <?php endif; ?>
      <?php if (function_exists("pagination")): ?>
        <?php pagination($additional_loop->max_num_pages);?>
      <?php endif; ?>
    </div>
  </main>
  <?php get_template_part('components/app-footer'); ?>
</body>
</html>