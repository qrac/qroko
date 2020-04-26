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
  <main class="main">
    <div class="section">
      <div class="inner is-width-min">
        <?php if (have_posts()): ?>
          <ul>
            <?php while (have_posts()): the_post(); ?>
              <li>
                <a href="<?php the_permalink(); ?>">
                  <p class="text">
                    <span class="text"><?php the_title(); ?></span>
                    <span class="text"><?php the_time('Y年n月j日'); ?></span>
                  </p>
                </a>
              </li>
            <?php endwhile; ?>
          </ul>
        <?php endif; ?>
        <?php if (function_exists("pagination")): ?>
          <?php pagination($additional_loop->max_num_pages);?>
        <?php endif; ?>
      </div>
    </div>
  </main>
  <?php get_template_part('components/app-footer'); ?>
</body>
</html>