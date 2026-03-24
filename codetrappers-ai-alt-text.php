<?php
/**
 * Plugin Name: Codetrappers AI Alt Text
 * Description: Starter AI plugin for generating image alt text and captions from media context.
 * Version: 0.1.0
 * Author: Codetrappers
 * License: GPL-2.0-or-later
 * Requires at least: 6.4
 * Requires PHP: 7.4
 * Text Domain: codetrappers-ai-alt-text
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'COETRAPPERS_AI_ALT_TEXT_VERSION', '0.1.0' );
define( 'COETRAPPERS_AI_ALT_TEXT_FILE', __FILE__ );
define( 'COETRAPPERS_AI_ALT_TEXT_PATH', plugin_dir_path( __FILE__ ) );
define( 'COETRAPPERS_AI_ALT_TEXT_URL', plugin_dir_url( __FILE__ ) );

require_once COETRAPPERS_AI_ALT_TEXT_PATH . 'includes/class-codetrappers-ai-alt-text.php';

function codetrappers_ai_alt_text_bootstrap() {
	$plugin = new \Codetrappers\CodetrappersAiAltText\CodetrappersAiAltTextPlugin();
	$plugin->boot();
}

codetrappers_ai_alt_text_bootstrap();
