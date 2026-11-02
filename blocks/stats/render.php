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
?>

<section class="stats" id="stats">
  <div class="container">
    <div class="stats__grid reveal">
      <div class="stat-card">
        <div class="stat-card__number" data-target="14">14+</div>
        <div class="stat-card__label"><?php esc_html_e( 'Лет юридической практики', 'legal-wordpress' ); ?></div>
        <div class="stat-card__desc"><?php esc_html_e( 'Успешно защищаем интересы доверителей с 2012 года', 'legal-wordpress' ); ?></div>
      </div>
      <div class="stat-card">
        <div class="stat-card__number" data-target="98.4">98.4%</div>
        <div class="stat-card__label"><?php esc_html_e( 'Выигранных дел в судах', 'legal-wordpress' ); ?></div>
        <div class="stat-card__desc"><?php esc_html_e( 'Достигаем поставленных целей на любой стадии процесса', 'legal-wordpress' ); ?></div>
      </div>
      <div class="stat-card">
        <div class="stat-card__number" data-target="2.8">2.8 млрд ₽</div>
        <div class="stat-card__label"><?php esc_html_e( 'Сохраненных активов', 'legal-wordpress' ); ?></div>
        <div class="stat-card__desc"><?php esc_html_e( 'Предотвратили финансовые потери клиентов по всей РФ', 'legal-wordpress' ); ?></div>
      </div>
      <div class="stat-card">
        <div class="stat-card__number" data-target="3500">3 500+</div>
        <div class="stat-card__label"><?php esc_html_e( 'Успешных соглашений', 'legal-wordpress' ); ?></div>
        <div class="stat-card__desc"><?php esc_html_e( 'Доверие физических лиц и ведущих предприятий', 'legal-wordpress' ); ?></div>
      </div>
    </div>
  </div>
</section>
