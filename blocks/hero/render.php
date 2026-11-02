<?php
/**
 * Render template for Legal Hero Block.
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block inner content.
 * @var WP_Block $block      Block instance.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$badge     = ! empty( $attributes['badge'] ) ? esc_html( $attributes['badge'] ) : esc_html__( 'Адвокатская практика с 2012 года', 'legal-wordpress' );
$title     = ! empty( $attributes['title'] ) ? esc_html( $attributes['title'] ) : esc_html__( 'Квалифицированная правовая защита', 'legal-wordpress' );
$subtitle  = ! empty( $attributes['subtitle'] ) ? esc_html( $attributes['subtitle'] ) : esc_html__( 'Арбитражные споры, банкротство, сопровождение сделок и защита бизнеса в судах всех инстанций.', 'legal-wordpress' );
$btn_text  = ! empty( $attributes['buttonText'] ) ? esc_html( $attributes['buttonText'] ) : esc_html__( 'Записаться на консультацию', 'legal-wordpress' );
$theme_uri = get_template_directory_uri();
?>

<section class="intro" id="hero">
  <div class="intro__backgrounds" aria-hidden="true">
    <div class="intro__bg-slide active" data-slide="0" style="background-image: url('<?php echo esc_url( $theme_uri . '/images/header-intro/hero-slide-1.webp' ); ?>');"></div>
  </div>
  <div class="intro__overlay" aria-hidden="true"></div>
  <div class="intro__container container">
    <div class="intro__content">
      <span class="intro__badge"><?php echo $badge; ?></span>
      <h1 class="intro__title"><?php echo $title; ?></h1>
      <p class="intro__text"><?php echo $subtitle; ?></p>
      <div class="intro__actions">
        <button type="button" class="button js-open-consultation"><?php echo $btn_text; ?></button>
        <a href="#services" class="button button--secondary"><?php esc_html_e( 'Практики и услуги', 'legal-wordpress' ); ?></a>
      </div>
      <div class="intro__trust-bar">
        <div class="trust-item">
          <span class="trust-icon">✓</span>
          <span><?php esc_html_e( '15+ лет судебной практики', 'legal-wordpress' ); ?></span>
        </div>
        <div class="trust-item">
          <span class="trust-icon">✓</span>
          <span><?php esc_html_e( '98.4% выигранных дел', 'legal-wordpress' ); ?></span>
        </div>
        <div class="trust-item">
          <span class="trust-icon">✓</span>
          <span><?php esc_html_e( 'Адвокатская тайна (63-ФЗ)', 'legal-wordpress' ); ?></span>
        </div>
      </div>
    </div>
  </div>
</section>
