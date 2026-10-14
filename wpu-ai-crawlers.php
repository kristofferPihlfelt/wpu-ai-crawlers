<?php
/**
 * Plugin Name:       WPU AI Crawlers
 * Plugin URI:        https://wordpressutveckling.se/syns-din-sajt-i-chatgpt-och-ai-sok/
 * Description:       Lägger till Allow-regler för AI-sökens crawlers i den robots.txt som WordPress genererar. Har ingen effekt om det finns en fysisk robots.txt i webbroten.
 * Version:           1.0.0
 * Requires at least: 6.7
 * Requires PHP:      8.2
 * Author:            Pihlfelt & Vänner
 * Author URI:        https://pihlfelt.se
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

defined( 'ABSPATH' ) || exit;

// Priority 20: SEO plugins add their own rules at the default 10, and this block should come after them.
add_filter( 'robots_txt', 'wpu_ai_crawlers_robots', 20, 2 );
function wpu_ai_crawlers_robots( $output, $public ) {
	// A site hidden from search engines should stay hidden from AI search too.
	if ( ! $public ) {
		return $output;
	}

	// Verified against each vendor's own documentation 2026-10-12.
	// Google-Extended is a robots.txt token, not a crawler, but listing it makes the Gemini grounding opt-in explicit.
	$crawlers = [
		'OAI-SearchBot',
		'ChatGPT-User',
		'GPTBot',
		'PerplexityBot',
		'Perplexity-User',
		'Claude-SearchBot',
		'Claude-User',
		'ClaudeBot',
		'Google-Extended',
	];

	$rules = [ '', '# AI search crawlers are welcome; we want to be cited.' ];
	foreach ( $crawlers as $crawler ) {
		$rules[] = 'User-agent: ' . $crawler;
	}
	$rules[] = 'Allow: /';

	return rtrim( (string) $output ) . "\n" . implode( "\n", $rules ) . "\n";
}
