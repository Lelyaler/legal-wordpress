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

$stats = ! empty( $attributes['stats'] ) && is_array( $attributes['stats'] ) ? $attributes['stats'] : array(
	array( 'number' => '15+', 'label' => 'Лет успешной практики' ),
	array( 'number' => '98.4%', 'label' => 'Выигранных судебных дел' ),
	array( 'number' => '1 200+', 'label' => 'Довольных доверителей' ),
	array( 'number' => '2.8 млрд ₽', 'label' => 'Сохраненных активов' ),
);
?>

<section class="stats" id="stats">
  <div class="container stats__container">
    <div class="stats__grid">
      <?php foreach ( $stats as $stat ) : ?>
        <div class="stats__item">
          <span class="stats__number"><?php echo esc_html( $stat['number'] ); ?></span>
          <span class="stats__label"><?php echo esc_html( $stat['label'] ); ?></span>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
