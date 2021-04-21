<?php
/**
 * Plugin Name:       Query Theme Builder
 * Description:       A plugin that help WordPress developers to create a block-based theme using Tailwind CSS.
 * Requires at least: 5.7
 * Requires PHP:      7.4
 * Version:           0.2.0
 * Author:            Genki Nakatani
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       query-theme-builder
 *
 * @package           create-block
 */

define('QTB_PLUGIN_DIR', plugin_dir_path(__FILE__));

/**
 * Register Script for Gutenberg
 */
function qtb_editor_assets() {
  $script_asset = require(QTB_PLUGIN_DIR.'build/index.asset.php');

  wp_enqueue_script(
    'qtb-gutenberg-js',
    plugins_url('build/index.js', __FILE__),
    $script_asset['dependencies'],
    $script_asset['version']
  );
}
add_action('enqueue_block_editor_assets', 'qtb_editor_assets');

/**
 * Block Editor Setting
 */
function qtb_editor_settings($settings) {
  $settings['qtbSuggestions'] = apply_filters('qtb_class_suggestions', []);
  return $settings;
}
add_filter('block_editor_settings', 'qtb_editor_settings');

/**
 * PHP code files
 */
require_once QTB_PLUGIN_DIR.'includes/tailwind-style.php';
require_once QTB_PLUGIN_DIR.'includes/tailwind-components.php';
