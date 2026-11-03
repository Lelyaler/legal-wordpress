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

$badge     = ! empty( $attributes['badge'] ) ? esc_html( $attributes['badge'] ) : esc_html__( 'Профессиональная правовая защита', 'legal-wordpress' );
$title       = ! empty( $attributes['title'] ) ? esc_html( $attributes['title'] ) : esc_html__( 'Правовой Компас', 'legal-wordpress' );
$subtitle    = ! empty( $attributes['subtitle'] ) ? esc_html( $attributes['subtitle'] ) : esc_html__( 'Надежная поддержка физических лиц и бизнеса', 'legal-wordpress' );
$description = ! empty( $attributes['description'] ) ? esc_html( $attributes['description'] ) : esc_html__( 'Профессиональная юридическая помощь по любым правовым вопросам. Наша команда опытных адвокатов обеспечивает качественное сопровождение, минимизирует риски и гарантирует надежную защиту ваших законных прав и активов в суде.', 'legal-wordpress' );
$btn_text    = ! empty( $attributes['buttonText'] ) ? esc_html( $attributes['buttonText'] ) : esc_html__( 'Бесплатная консультация', 'legal-wordpress' );
$theme_uri   = get_template_directory_uri();
?>

<section class="intro" id="hero">
  <div class="intro__container container">
    <div class="intro__content">
      <span class="intro__badge"><?php echo $badge; ?></span>
      <p class="intro__subtitle"><?php echo $subtitle; ?></p>
      <h1 class="intro__title"><?php echo $title; ?></h1>
      <p class="intro__text">
        <?php echo $description; ?>
      </p>
      <div class="intro__actions">
        <button class="intro__button button" id="heroConsultationBtn" type="button">
          <?php echo $btn_text; ?>
        </button>
        <a href="#services" class="intro__button-secondary button button--secondary">
          <?php esc_html_e( 'Все услуги', 'legal-wordpress' ); ?>
        </a>
      </div>
    </div>

    <div class="intro__trust-bar">
      <div class="trust-item">
        <span class="trust-icon">✓</span>
        <span class="trust-text"><?php esc_html_e( 'Первичный аудит дела', 'legal-wordpress' ); ?></span>
      </div>
      <div class="trust-item">
        <span class="trust-icon">✓</span>
        <span class="trust-text"><?php esc_html_e( 'Фиксированная цена в договоре', 'legal-wordpress' ); ?></span>
      </div>
      <div class="trust-item">
        <span class="trust-icon">✓</span>
        <span class="trust-text"><?php esc_html_e( '100% адвокатская тайна', 'legal-wordpress' ); ?></span>
      </div>
    </div>

    <div class="intro__buttons">
      <div class="intro__pagination" id="heroPagination" role="tablist" aria-label="Слайды">
        <button class="intro__bullet active" type="button" role="tab" aria-selected="true" data-index="0" aria-label="Слайд 1 - Правовой Компас"></button>
        <button class="intro__bullet" type="button" role="tab" aria-selected="false" data-index="1" aria-label="Слайд 2 - Арбитраж и Бизнес"></button>
        <button class="intro__bullet" type="button" role="tab" aria-selected="false" data-index="2" aria-label="Слайд 3 - Свобода от Долгов"></button>
      </div>
      <div class="intro__btn">
        <button class="intro__arrow" id="heroPrevBtn" aria-label="Предыдущий слайд" type="button">
          <img src="<?php echo esc_url( $theme_uri . '/images/header-intro/arrowleft.svg' ); ?>" alt="Назад" width="21" height="20" />
        </button>
        <img
          class="intro__slash"
          src="<?php echo esc_url( $theme_uri . '/images/header-intro/Line 3.svg' ); ?>"
          alt="Разделитель"
          width="16"
          height="31"
        />
        <button class="intro__arrow" id="heroNextBtn" aria-label="Следующий слайд" type="button">
          <img src="<?php echo esc_url( $theme_uri . '/images/header-intro/arrowright.svg' ); ?>" alt="Вперед" width="20" height="20" />
        </button>
      </div>
    </div>
  </div>

  <div class="intro__backgrounds" aria-hidden="true">
    <div class="intro__bg-slide active" data-slide="0"></div>
    <div class="intro__bg-slide" data-slide="1"></div>
    <div class="intro__bg-slide" data-slide="2"></div>
  </div>
  <div class="intro__overlay" aria-hidden="true"></div>
</section>
