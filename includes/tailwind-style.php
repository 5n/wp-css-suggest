<?php
/**
 * Tailwind via CDN
 */

function qtb_tailwind_scripts() {
  wp_enqueue_style('tailwind-cdn-style', 'https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css');
}
add_action('wp_enqueue_scripts', 'qtb_tailwind_scripts');
add_action('enqueue_block_editor_assets', 'qtb_tailwind_scripts');
