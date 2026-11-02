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
$generate_schema = ! empty( $attributes['generateSchema'] );

$faqs = array(
	array(
		'q' => 'Как проходит первая консультация и сколько она длится?',
		'a' => 'Первичная консультация длится 30–45 минут. Мы проводим правовой аудит имеющихся документов, оцениваем судебные риски и перспективы, после чего формируем план действий с фиксированной стоимостью услуг.',
	),
	array(
		'q' => 'Гарантируете ли вы 100% выигрыш судебного дела?',
		'a' => 'В соответствии с Федеральным законом «Об адвокатской деятельности» адвокат не вправе обещать безусловный выигрыш, так как решение принимает суд. Однако наш процент побед составляет 98.4%, и мы беремся только за те дела, где видим реальную правовую перспективу.',
	),
	array(
		'q' => 'Каким образом фиксируется стоимость услуг и условия оплаты?',
		'a' => 'Мы заключаем официальное соглашение об оказании юридической помощи с прозрачной сметой. Стоимость фиксируется в договоре и не увеличивается в процессе рассмотрения спора. Возможна поэтапная оплата или гонорар успеха.',
	),
	array(
		'q' => 'Защищена ли передаваемая информация адвокатской тайной?',
		'a' => 'Да, безусловно. Все переданные сведения, документы и контакты охраняются институтом адвокатской тайны согласно 63-ФЗ. Эти данные не подлежат истребованию правоохранительными или налоговыми органами без специального судебного решения.',
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
  <div class="container faq__container">
    <div class="primary__title">
      <span class="section-badge"><?php esc_html_e( 'Ответы юристов', 'legal-wordpress' ); ?></span>
      <h2 class="title"><?php echo $title; ?></h2>
    </div>
    <div class="faq__list">
      <?php foreach ( $faqs as $index => $item ) :
        $is_open = ( 0 === $index );
      ?>
        <div class="faq__item <?php echo $is_open ? 'is-open' : ''; ?>">
          <button type="button" class="faq__question-btn" aria-expanded="<?php echo $is_open ? 'true' : 'false'; ?>">
            <span class="faq__question-text"><?php echo esc_html( $item['q'] ); ?></span>
            <span class="faq__icon" aria-hidden="true">+</span>
          </button>
          <div class="faq__answer-panel" <?php echo $is_open ? '' : 'hidden'; ?>>
            <p class="faq__answer-text"><?php echo esc_html( $item['a'] ); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
