<?php
//----------------------------------------------------
// App Head
//----------------------------------------------------
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no, email=no, address=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <?php if (is_singular()) wp_enqueue_script("comment-reply"); ?>
  <?php wp_head(); ?>
</head>