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

$step1_title = ! empty( $attributes['step1_title'] ) ? esc_html( $attributes['step1_title'] ) : esc_html__( 'Первичная консультация', 'legal-wordpress' );
$step1_desc  = ! empty( $attributes['step1_desc'] ) ? esc_html( $attributes['step1_desc'] ) : esc_html__( 'Изучаем обстоятельства спора, анализируем документы, выявляем скрытые правовые риски и даем предварительную правовую оценку.', 'legal-wordpress' );

$step2_title = ! empty( $attributes['step2_title'] ) ? esc_html( $attributes['step2_title'] ) : esc_html__( 'Стратегия и договор', 'legal-wordpress' );
$step2_desc  = ! empty( $attributes['step2_desc'] ) ? esc_html( $attributes['step2_desc'] ) : esc_html__( 'Разрабатываем детальную правовую позицию, согласуем план действий и фиксируем стоимость услуг в официальном договоре.', 'legal-wordpress' );

$step3_title = ! empty( $attributes['step3_title'] ) ? esc_html( $attributes['step3_title'] ) : esc_html__( 'Досудебная стадия', 'legal-wordpress' );
$step3_desc  = ! empty( $attributes['step3_desc'] ) ? esc_html( $attributes['step3_desc'] ) : esc_html__( 'Формируем мотивированную претензию, проводим переговоры со стороной оппонента для скорейшего добровольного разрешения вопроса.', 'legal-wordpress' );

$step4_title = ! empty( $attributes['step4_title'] ) ? esc_html( $attributes['step4_title'] ) : esc_html__( 'Защита в суде', 'legal-wordpress' );
$step4_desc  = ! empty( $attributes['step4_desc'] ) ? esc_html( $attributes['step4_desc'] ) : esc_html__( 'Представляем ваши интересы во всех судебных заседаниях и инстанциях до вынесения решения и фактического исполнения.', 'legal-wordpress' );
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
        <h3 class="process-card__title"><?php echo $step1_title; ?></h3>
        <p class="process-card__text"><?php echo $step1_desc; ?></p>
      </div>
      <div class="process-card">
        <div class="process-card__step">02</div>
        <h3 class="process-card__title"><?php echo $step2_title; ?></h3>
        <p class="process-card__text"><?php echo $step2_desc; ?></p>
      </div>
      <div class="process-card">
        <div class="process-card__step">03</div>
        <h3 class="process-card__title"><?php echo $step3_title; ?></h3>
        <p class="process-card__text"><?php echo $step3_desc; ?></p>
      </div>
      <div class="process-card">
        <div class="process-card__step">04</div>
        <h3 class="process-card__title"><?php echo $step4_title; ?></h3>
        <p class="process-card__text"><?php echo $step4_desc; ?></p>
      </div>
    </div>
  </div>
</section>
