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

$title    = ! empty( $attributes['title'] ) ? esc_html( $attributes['title'] ) : esc_html__( 'Этапы ведения вашего дела', 'legal-wordpress' );
$subtitle = ! empty( $attributes['subtitle'] ) ? esc_html( $attributes['subtitle'] ) : esc_html__( 'Прозрачный алгоритм работы от первичного анализа до исполнения решения.', 'legal-wordpress' );

$steps = array(
	array(
		'step'  => '01',
		'title' => 'Правовой аудит ситуации',
		'desc'  => 'Изучаем материалы спора, оцениваем судебные риски и перспективы, определяем сильные и слабые стороны позиции.',
	),
	array(
		'step'  => '02',
		'title' => 'Стратегия и сбор доказательств',
		'desc'  => 'Формируем правовую позицию, запрашиваем архивные справки, организуем независимые экспертизы и заключения специалистов.',
	),
	array(
		'step'  => '03',
		'title' => 'Досудебный претензионный этап',
		'desc'  => 'Составляем мотивированные претензии, проводим переговоры с оппонентами с целью разрешения спора без судебных издержек.',
	),
	array(
		'step'  => '04',
		'title' => 'Судебная защита и исполнение',
		'desc'  => 'Представляем интересы во всех инстанциях, получаем исполнительный лист и сопровождаем фактическое взыскание средств.',
	),
);
?>

<section class="process" id="process">
  <div class="container process__container">
    <div class="primary__title">
      <span class="section-badge"><?php esc_html_e( 'Как мы работаем', 'legal-wordpress' ); ?></span>
      <h2 class="title"><?php echo $title; ?></h2>
      <p class="primary__text"><?php echo $subtitle; ?></p>
    </div>
    <div class="process__grid">
      <?php foreach ( $steps as $item ) : ?>
        <div class="process-card">
          <div class="process-card__number"><?php echo esc_html( $item['step'] ); ?></div>
          <h3 class="process-card__title"><?php echo esc_html( $item['title'] ); ?></h3>
          <p class="process-card__desc"><?php echo esc_html( $item['desc'] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
