<?php
/**
 * Front page template for Legal Corporate Theme.
 * Supports native Gutenberg block content or full fallback.
 *
 * @package Legal_Corporate
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		$content = trim( get_the_content() );
		if ( ! empty( $content ) ) :
			the_content();
		else :
			// Default template layout using the theme blocks
			$theme_dir = get_template_directory();
			include $theme_dir . '/blocks/hero/render.php';
			include $theme_dir . '/blocks/stats/render.php';
			include $theme_dir . '/blocks/services/render.php';
			include $theme_dir . '/blocks/process/render.php';
			include $theme_dir . '/blocks/reviews/render.php';
			include $theme_dir . '/blocks/faq/render.php';
		endif;
	endwhile;
endif;

get_footer();
