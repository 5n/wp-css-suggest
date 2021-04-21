<?php
/**
 * Tailwind via CDN
 */

define('TAILWIND_CDN_URL', 'https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css');

// editor
function qtb_tailwind_setup() {
  add_editor_style([TAILWIND_CDN_URL]);
}
add_action('after_setup_theme', 'qtb_tailwind_setup');

// front end
function qtb_tailwind_scripts() {
  wp_enqueue_style('tailwind-cdn-style', TAILWIND_CDN_URL);
}
add_action('wp_enqueue_scripts', 'qtb_tailwind_scripts');
