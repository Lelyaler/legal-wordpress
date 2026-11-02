<?php
/**
 * Render template for Legal Reviews Block.
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block inner content.
 * @var WP_Block $block      Block instance.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$title     = ! empty( $attributes['title'] ) ? esc_html( $attributes['title'] ) : esc_html__( 'Отзывы наших доверителей', 'legal-wordpress' );
$subtitle  = ! empty( $attributes['subtitle'] ) ? esc_html( $attributes['subtitle'] ) : esc_html__( 'Реальные истории успешной защиты интересов в суде.', 'legal-wordpress' );
$theme_uri = get_template_directory_uri();

$reviews = array(
	array(
		'author' => 'Виктор Васильев',
		'role'   => 'Генеральный директор ООО «ПромИнвест»',
		'text'   => 'Выражаю искреннюю благодарность адвокатам за блестящую победу в Арбитражном суде г. Москвы. На кону стояло более 42 млн рублей необоснованных претензий со стороны недобросовестного подрядчика. Дело было закрыто в нашу пользу в двух инстанциях.',
		'img'    => $theme_uri . '/images/reviews/author-1.webp',
	),
	array(
		'author' => 'Елена Соколова',
		'role'   => 'Частный доверитель (спор с застройщиком)',
		'text'   => 'Застройщик задержал сдачу жилого комплекса бизнес-класса на 14 месяцев и отказывался выплачивать неустойку. Юристы компании взыскали не только полную сумму компенсации, но и штраф 50% по закону о защите прав потребителей. Рекомендую!',
		'img'    => $theme_uri . '/images/reviews/author-2.webp',
	),
	array(
		'author' => 'Максим Грачев',
		'role'   => 'Индивидуальный предприниматель',
		'text'   => 'Успешно завершили процедуру банкротства и реструктуризации кредитных обязательств. Все активы удалось сохранить на законных основаниях, процедура прошла строго в рамках 127-ФЗ без лишней нервотрепки и давления со стороны банков.',
		'img'    => $theme_uri . '/images/reviews/author-3.webp',
	),
);
?>

<section class="reviews" id="reviews">
  <div class="container reviews__container">
    <div class="primary__title">
      <span class="section-badge"><?php esc_html_e( 'Доверие клиентов', 'legal-wordpress' ); ?></span>
      <h2 class="title"><?php echo $title; ?></h2>
      <p class="primary__text"><?php echo $subtitle; ?></p>
    </div>
    <div class="reviews__slider swiper reviews-swiper">
      <div class="swiper-wrapper">
        <?php foreach ( $reviews as $rev ) : ?>
          <div class="swiper-slide review-card">
            <div class="review-card__header">
              <img src="<?php echo esc_url( $rev['img'] ); ?>" alt="<?php echo esc_attr( $rev['author'] ); ?>" class="review-card__avatar" width="60" height="60" loading="lazy">
              <div class="review-card__meta">
                <h4 class="review-card__author"><?php echo esc_html( $rev['author'] ); ?></h4>
                <span class="review-card__role"><?php echo esc_html( $rev['role'] ); ?></span>
              </div>
            </div>
            <p class="review-card__text"><?php echo esc_html( $rev['text'] ); ?></p>
            <div class="review-card__stars">★★★★★</div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="reviews__pagination swiper-pagination"></div>
    </div>
  </div>
</section>
