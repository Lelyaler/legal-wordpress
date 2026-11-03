<?php
/**
 * Render template for Legal Stats Block.
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block inner content.
 * @var WP_Block $block      Block instance.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$num1   = ! empty( $attributes['num1'] ) ? esc_html( $attributes['num1'] ) : '14+';
$label1 = ! empty( $attributes['label1'] ) ? esc_html( $attributes['label1'] ) : esc_html__( 'Лет юридической практики', 'legal-wordpress' );
$desc1  = ! empty( $attributes['desc1'] ) ? esc_html( $attributes['desc1'] ) : esc_html__( 'Успешно защищаем интересы доверителей с 2012 года', 'legal-wordpress' );

$num2   = ! empty( $attributes['num2'] ) ? esc_html( $attributes['num2'] ) : '98.4%';
$label2 = ! empty( $attributes['label2'] ) ? esc_html( $attributes['label2'] ) : esc_html__( 'Выигранных дел в судах', 'legal-wordpress' );
$desc2  = ! empty( $attributes['desc2'] ) ? esc_html( $attributes['desc2'] ) : esc_html__( 'Достигаем поставленных целей на любой стадии процесса', 'legal-wordpress' );

$num3   = ! empty( $attributes['num3'] ) ? esc_html( $attributes['num3'] ) : '2.8 млрд ₽';
$label3 = ! empty( $attributes['label3'] ) ? esc_html( $attributes['label3'] ) : esc_html__( 'Сохраненных активов', 'legal-wordpress' );
$desc3  = ! empty( $attributes['desc3'] ) ? esc_html( $attributes['desc3'] ) : esc_html__( 'Предотвратили финансовые потери клиентов по всей РФ', 'legal-wordpress' );

$num4   = ! empty( $attributes['num4'] ) ? esc_html( $attributes['num4'] ) : '3 500+';
$label4 = ! empty( $attributes['label4'] ) ? esc_html( $attributes['label4'] ) : esc_html__( 'Успешных соглашений', 'legal-wordpress' );
$desc4  = ! empty( $attributes['desc4'] ) ? esc_html( $attributes['desc4'] ) : esc_html__( 'Доверие физических лиц и ведущих предприятий', 'legal-wordpress' );
?>

<section class="stats" id="stats">
  <div class="container">
    <div class="stats__grid reveal">
      <div class="stat-card">
        <div class="stat-card__number" data-target="14"><?php echo $num1; ?></div>
        <div class="stat-card__label"><?php echo $label1; ?></div>
        <div class="stat-card__desc"><?php echo $desc1; ?></div>
      </div>
      <div class="stat-card">
        <div class="stat-card__number" data-target="98.4"><?php echo $num2; ?></div>
        <div class="stat-card__label"><?php echo $label2; ?></div>
        <div class="stat-card__desc"><?php echo $desc2; ?></div>
      </div>
      <div class="stat-card">
        <div class="stat-card__number" data-target="2.8"><?php echo $num3; ?></div>
        <div class="stat-card__label"><?php echo $label3; ?></div>
        <div class="stat-card__desc"><?php echo $desc3; ?></div>
      </div>
      <div class="stat-card">
        <div class="stat-card__number" data-target="3500"><?php echo $num4; ?></div>
        <div class="stat-card__label"><?php echo $label4; ?></div>
        <div class="stat-card__desc"><?php echo $desc4; ?></div>
      </div>
    </div>
  </div>
</section>
