<?php
//----------------------------------------------------
// App Widget
//----------------------------------------------------
?>
<?php if(is_active_sidebar('qroko_custom_widgets')): ?>
  <aside class="app-widget">
    <div class="app-widget-grid">
      <?php dynamic_sidebar('qroko_custom_widgets'); ?>
    </div>
  </aside>
<?php endif; ?>