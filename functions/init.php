<?php
//----------------------------------------------------
// Init
//----------------------------------------------------

// Translate
load_theme_textdomain('qroko', get_template_directory() . '/languages');

// Content Width
if (!isset($content_width)) {
	$content_width = 620;
}