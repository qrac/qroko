<?php
//----------------------------------------------------
// Init
//----------------------------------------------------

// Content Width
if (!isset($content_width)) {
	$content_width = 620;
}

// Translate
load_theme_textdomain('qroko', get_template_directory() . '/languages');