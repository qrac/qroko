<?php
//----------------------------------------------------
// App Header
//----------------------------------------------------
?>
<header class="section is-header" id="header">
  <div class="inner">
    <div class="grid is-middle is-between">
      <div class="column">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <p class="site-title"><?php bloginfo('name'); ?></p>
        </a>
      </div>
      <div class="column">
        <p><?php bloginfo('description'); ?></p>
      </div>
    </div>
  </div>
</header>