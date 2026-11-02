<?php
/**
 * Render template for Legal Process Block.
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block inner content.
 * @var WP_Block $block      Block instance.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$title    = ! empty( $attributes['title'] ) ? esc_html( $attributes['title'] ) : esc_html__( 'Этапы работы', 'legal-wordpress' );
$subtitle = ! empty( $attributes['subtitle'] ) ? esc_html( $attributes['subtitle'] ) : esc_html__( 'Прозрачный алгоритм взаимодействия от первичного обращения до окончательного исполнения решения суда в вашу пользу.', 'legal-wordpress' );
?>

<section class="process" id="process">
  <div class="container">
    <div class="primary__title reveal">
      <span class="section-badge"><?php esc_html_e( 'Понятный регламент', 'legal-wordpress' ); ?></span>
      <h2 class="title"><?php echo $title; ?></h2>
      <p class="primary__text"><?php echo $subtitle; ?></p>
    </div>
    <div class="process__grid reveal">
      <div class="process-card">
        <div class="process-card__step">01</div>
        <h3 class="process-card__title"><?php esc_html_e( 'Первичная консультация', 'legal-wordpress' ); ?></h3>
        <p class="process-card__text">
          <?php esc_html_e( 'Изучаем обстоятельства спора, анализируем документы, выявляем скрытые правовые риски и даем предварительную правовую оценку.', 'legal-wordpress' ); ?>
        </p>
      </div>
      <div class="process-card">
        <div class="process-card__step">02</div>
        <h3 class="process-card__title"><?php esc_html_e( 'Стратегия и договор', 'legal-wordpress' ); ?></h3>
        <p class="process-card__text">
          <?php esc_html_e( 'Разрабатываем детальную правовую позицию, согласуем план действий и фиксируем стоимость услуг в официальном договоре.', 'legal-wordpress' ); ?>
        </p>
      </div>
      <div class="process-card">
        <div class="process-card__step">03</div>
        <h3 class="process-card__title"><?php esc_html_e( 'Досудебная стадия', 'legal-wordpress' ); ?></h3>
        <p class="process-card__text">
          <?php esc_html_e( 'Формируем мотивированную претензию, проводим переговоры со стороной оппонента для скорейшего добровольного разрешения вопроса.', 'legal-wordpress' ); ?>
        </p>
      </div>
      <div class="process-card">
        <div class="process-card__step">04</div>
        <h3 class="process-card__title"><?php esc_html_e( 'Защита в суде', 'legal-wordpress' ); ?></h3>
        <p class="process-card__text">
          <?php esc_html_e( 'Представляем ваши интересы во всех судебных заседаниях и инстанциях до вынесения решения и фактического исполнения.', 'legal-wordpress' ); ?>
        </p>
      </div>
    </div>
  </div>
</section>
