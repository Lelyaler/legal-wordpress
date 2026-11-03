<?php
/**
 * Legal Corporate Theme functions and definitions.
 *
 * @package Legal_Corporate
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'LEGAL_VERSION', '1.0.0' );

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function legal_theme_setup() {
	load_theme_textdomain( 'legal-wordpress', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 60,
			'width'       => 200,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	register_nav_menus(
		array(
			'primary' => esc_html__( 'Главное меню', 'legal-wordpress' ),
			'footer'  => esc_html__( 'Меню в футере', 'legal-wordpress' ),
		)
	);
}
add_action( 'after_setup_theme', 'legal_theme_setup' );

/**
 * Enqueue scripts and styles.
 */
function legal_theme_scripts() {
	$uri = get_template_directory_uri();

	// Swiper
	wp_enqueue_style( 'swiper-bundle', $uri . '/swiper/swiper-bundle.min.css', array(), '11.0.0' );
	wp_enqueue_script( 'swiper-bundle', $uri . '/swiper/swiper-bundle.min.js', array(), '11.0.0', true );

	// Theme Styles
	wp_enqueue_style( 'legal-bundle', $uri . '/css/style.min.css', array( 'swiper-bundle' ), LEGAL_VERSION );
	wp_enqueue_style( 'legal-theme-style', get_stylesheet_uri(), array( 'legal-bundle' ), LEGAL_VERSION );

	// Theme JS
	wp_enqueue_script( 'legal-main', $uri . '/js/main.min.js', array( 'swiper-bundle' ), LEGAL_VERSION, true );

	wp_localize_script(
		'legal-main',
		'legalData',
		array(
			'ajaxUrl' => admin_url( 'admin-ajax.php' ),
			'nonce'   => wp_create_nonce( 'legal_ajax_nonce' ),
		)
	);
}
add_action( 'wp_enqueue_scripts', 'legal_theme_scripts' );

/**
 * Register Gutenberg Block Category for Legal Corporate Theme.
 */
function legal_block_categories( $categories, $post ) {
	array_unshift(
		$categories,
		array(
			'slug'  => 'legal-blocks',
			'title' => esc_html__( 'Legal Theme Blocks', 'legal-wordpress' ),
			'icon'  => 'shield',
		)
	);
	return $categories;
}
add_filter( 'block_categories_all', 'legal_block_categories', 10, 2 );

/**
 * Register Legal Theme Native Gutenberg Blocks.
 */
function legal_register_theme_blocks() {
	wp_register_script(
		'legal-editor-blocks',
		get_template_directory_uri() . '/js/editor-blocks.js',
		array( 'wp-blocks', 'wp-element', 'wp-block-editor', 'wp-components', 'wp-i18n' ),
		LEGAL_VERSION,
		true
	);

	$theme_dir = get_template_directory();
	$blocks    = array( 'hero', 'stats', 'services', 'process', 'faq', 'reviews' );

	foreach ( $blocks as $block ) {
		$block_path = $theme_dir . '/blocks/' . $block;
		if ( file_exists( $block_path . '/block.json' ) ) {
			register_block_type( $block_path );
		}
	}
}
add_action( 'init', 'legal_register_theme_blocks' );

/**
 * Handle Consultation AJAX Form submission.
 */
function legal_ajax_consultation() {
	check_ajax_referer( 'legal_ajax_nonce', 'nonce' );

	$name    = isset( $_POST['name'] ) ? sanitize_text_field( wp_unslash( $_POST['name'] ) ) : '';
	$phone   = isset( $_POST['phone'] ) ? sanitize_text_field( wp_unslash( $_POST['phone'] ) ) : '';
	$service = isset( $_POST['service'] ) ? sanitize_text_field( wp_unslash( $_POST['service'] ) ) : 'Общая консультация';

	if ( empty( $name ) || empty( $phone ) ) {
		wp_send_json_error( array( 'message' => esc_html__( 'Пожалуйста, заполните обязательные поля.', 'legal-wordpress' ) ) );
	}

	wp_send_json_success(
		array(
			'message' => esc_html__( 'Заявка успешно отправлена! Адвокат свяжется с вами в течение 10 минут.', 'legal-wordpress' ),
		)
	);
}
add_action( 'wp_ajax_legal_consultation', 'legal_ajax_consultation' );
add_action( 'wp_ajax_nopriv_legal_consultation', 'legal_ajax_consultation' );
