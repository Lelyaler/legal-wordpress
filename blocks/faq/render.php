<?php
/**
 * Render template for Legal FAQ Block.
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block inner content.
 * @var WP_Block $block      Block instance.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$title           = ! empty( $attributes['title'] ) ? esc_html( $attributes['title'] ) : esc_html__( 'Часто задаваемые вопросы', 'legal-wordpress' );
$generate_schema = ! isset( $attributes['generateSchema'] ) || ! empty( $attributes['generateSchema'] );

$faqs = array(
	array(
		'q' => ! empty( $attributes['faq1_q'] ) ? esc_html( $attributes['faq1_q'] ) : 'Сколько стоит первичная консультация и что в неё входит?',
		'a' => ! empty( $attributes['faq1_a'] ) ? esc_html( $attributes['faq1_a'] ) : 'Первичная правовая консультация дежурного юриста проводится бесплатно. Мы знакомимся с обстоятельствами ситуации, проводим экспресс-аудит документов, оцениваем судебные риски и предлагаем 2-3 варианта решения с точным расчетом стоимости.',
	),
	array(
		'q' => ! empty( $attributes['faq2_q'] ) ? esc_html( $attributes['faq2_q'] ) : 'Даете ли вы гарантию 100% выигрыша судебного дела?',
		'a' => ! empty( $attributes['faq2_a'] ) ? esc_html( $attributes['faq2_a'] ) : 'По закону об адвокатуре ни один адвокат в РФ не имеет права давать 100% гарантию судебного решения, так как окончательный вердикт выносит исключительно суд. Однако мы беремся только за дела с доказанной правовой перспективой, что подтверждается 98.4% выигранных процессов.',
	),
	array(
		'q' => ! empty( $attributes['faq3_q'] ) ? esc_html( $attributes['faq3_q'] ) : 'Как фиксируется цена и могут ли появиться скрытые доплаты?',
		'a' => ! empty( $attributes['faq3_a'] ) ? esc_html( $attributes['faq3_a'] ) : 'Все условия фиксируются в официальном договоре. Стоимость услуг является окончательной и не подлежит увеличению в ходе процесса. Никаких скрытых платежей, комиссий за звонки или подготовку ходатайств.',
	),
	array(
		'q' => ! empty( $attributes['faq4_q'] ) ? esc_html( $attributes['faq4_q'] ) : 'Обеспечивается ли тайна переданных документов и сведений?',
		'a' => ! empty( $attributes['faq4_a'] ) ? esc_html( $attributes['faq4_a'] ) : 'Да, абсолютная конфиденциальность гарантирована Федеральным законом № 63-ФЗ «Об адвокатской деятельности и адвокатуре в РФ». Адвокатская тайна бессрочна, информация не может быть истребована правоохранительными органами или третьими лицами без решения суда.',
	),
);

// Register FAQ with schema if enabled
if ( $generate_schema ) {
	add_action( 'wp_footer', function() use ( $faqs ) {
		$main_entities = array();
		foreach ( $faqs as $item ) {
			$main_entities[] = array(
				'@type'          => 'Question',
				'name'           => $item['q'],
				'acceptedAnswer' => array(
					'@type' => 'Answer',
					'text'  => $item['a'],
				),
			);
		}
		$schema = array(
			'@context'   => 'https://schema.org',
			'@type'      => 'FAQPage',
			'mainEntity' => $main_entities,
		);
		echo "\n<!-- Legal Theme - Schema.org FAQPage Rich Snippet -->\n";
		echo '<script type="application/ld+json">' . "\n" . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT ) . "\n" . '</script>' . "\n";
	}, 99 );
}
?>

<section class="faq" id="faq">
  <div class="container">
    <div class="primary__title reveal">
      <span class="section-badge"><?php esc_html_e( 'Вопрос — ответ', 'legal-wordpress' ); ?></span>
      <h2 class="title"><?php echo $title; ?></h2>
      <p class="primary__text">
        <?php esc_html_e( 'Собрали ответы на главные вопросы, возникающие перед обращением к юристам: от порядка оплаты до гарантий соблюдения конфиденциальности.', 'legal-wordpress' ); ?>
      </p>
    </div>

    <div class="faq__list reveal">
      <?php foreach ( $faqs as $index => $item ) :
        $is_open = ( 0 === $index );
      ?>
        <div class="faq__item <?php echo $is_open ? 'active' : ''; ?>">
          <button class="faq__trigger" aria-expanded="<?php echo $is_open ? 'true' : 'false'; ?>" type="button">
            <span class="faq__question"><?php echo esc_html( $item['q'] ); ?></span>
            <span class="faq__icon">+</span>
          </button>
          <div class="faq__answer">
            <p><?php echo esc_html( $item['a'] ); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
