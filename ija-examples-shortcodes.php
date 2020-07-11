<?php
/**
 * Plugin Name: IJA Examples: Shortcodes
 * Plugin URI: https://itsjustanthony.com/
 * Description: Shortcode Plugin
 * Version: 0.0.1
 * Author: Anthony Corbelli (anthony@itsjustanthony.com)
 * Author URI: https://itsjustanthony.com
 * Text Domain: ijae-shortcodes
 * Domain Path: /i18n/languages/
 *
 */
defined( 'ABSPATH' ) || exit;

define('IJAE_SHORTCODES_VERSION', '0.0.1');

add_action( 'init' , 'ijae_shortcodes_init' );
function ijae_shortcodes_init() {
    if (!shortcode_exists(('ijae_hello_world'))) {
        add_shortcode('ijae_hello_world', 'ijae_hello_world_shortcode_callback');
    }
}


function ijae_hello_world_shortcode_callback($atts = [], $content = null, $tag = '') {
    $newContent = "
    <div>
        <p>Hello World</p>
        <p>{$content}</p>
        <p>Goodbye World</p>
    </div>
";
    return do_shortcode($newContent);
}