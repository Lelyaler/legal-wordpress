<?php
/**
 * Render template for Legal Services Block.
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block inner content.
 * @var WP_Block $block      Block instance.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$title    = ! empty( $attributes['title'] ) ? esc_html( $attributes['title'] ) : esc_html__( 'Направления юридической практики', 'legal-wordpress' );
$subtitle = ! empty( $attributes['subtitle'] ) ? esc_html( $attributes['subtitle'] ) : esc_html__( 'Комплексная защита прав и законных интересов граждан и бизнеса.', 'legal-wordpress' );
$theme_uri = get_template_directory_uri();

$services = array(
	array(
		'title' => 'Арбитражные споры и суды',
		'desc'  => 'Представительство во всех инстанциях арбитражных судов и судов общей юрисдикции. Взыскание долгов, защита от необоснованных исков, споры по договорам поставки и подряда.',
		'img'   => $theme_uri . '/images/services/court.webp',
	),
	array(
		'title' => 'Банкротство граждан и бизнеса',
		'desc'  => 'Полное сопровождение процедуры банкротства в соответствии с 127-ФЗ. Списание долгов, сохранение имущества, защита от субсидиарной ответственности руководства.',
		'img'   => $theme_uri . '/images/services/bankruptcy.webp',
	),
	array(
		'title' => 'Сделки с недвижимостью и землей',
		'desc'  => 'Правовой аудит (Due Diligence) объектов недвижимости, проверка чистоты истории владения, сопровождение купли-продажи, аренды и земельных правоотношений.',
		'img'   => $theme_uri . '/images/services/realty.webp',
	),
	array(
		'title' => 'Корпоративное право и защита бизнеса',
		'desc'  => 'Урегулирование конфликтов между акционерами, защита от недружественных поглощений, разработка уставных документов и сопровождение реорганизации бизнеса.',
		'img'   => $theme_uri . '/images/services/corporate.webp',
	),
	array(
		'title' => 'Налоговые споры и проверки ФНС',
		'desc'  => 'Оспаривание актов выездных и камеральных проверок налоговых органов, снижение доначислений и штрафов, досудебное обжалование в вышестоящие органы ФНС.',
		'img'   => $theme_uri . '/images/services/tax.webp',
	),
	array(
		'title' => 'Интеллектуальная собственность',
		'desc'  => 'Регистрация товарных знаков, патентов, защита авторских прав, пресечение контрафакта и взыскание компенсаций за незаконное использование бренда.',
		'img'   => $theme_uri . '/images/services/intellectual.webp',
	),
);
?>

<section class="services" id="services">
  <div class="container services__container">
    <div class="primary__title">
      <span class="section-badge"><?php esc_html_e( 'Наши компетенции', 'legal-wordpress' ); ?></span>
      <h2 class="title"><?php echo $title; ?></h2>
      <p class="primary__text"><?php echo $subtitle; ?></p>
    </div>
    <div class="services__grid">
      <?php foreach ( $services as $item ) : ?>
        <article class="service-card">
          <div class="service-card__image-box">
            <img src="<?php echo esc_url( $item['img'] ); ?>" alt="<?php echo esc_attr( $item['title'] ); ?>" class="service-card__img" width="380" height="240" loading="lazy">
          </div>
          <div class="service-card__body">
            <h3 class="service-card__title"><?php echo esc_html( $item['title'] ); ?></h3>
            <p class="service-card__desc"><?php echo esc_html( $item['desc'] ); ?></p>
            <button type="button" class="button button--service js-open-consultation" data-service="<?php echo esc_attr( $item['title'] ); ?>">
              <?php esc_html_e( 'Консультация юриста', 'legal-wordpress' ); ?>
            </button>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
