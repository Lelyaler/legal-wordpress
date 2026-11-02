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

$title     = ! empty( $attributes['title'] ) ? esc_html( $attributes['title'] ) : esc_html__( 'Что о нас говорят клиенты', 'legal-wordpress' );
$theme_uri = get_template_directory_uri();
?>

<section class="reviews" id="reviews">
  <div class="container">
    <div class="reviews__content reveal">
      <div>
        <span class="section-badge"><?php esc_html_e( 'Опыт доверителей', 'legal-wordpress' ); ?></span>
        <h2 class="info__title"><?php echo $title; ?></h2>
      </div>
      <div class="reviews__button">
        <button class="reviews__arrow reviews-button-prev" aria-label="Предыдущий отзыв" type="button">
          <img src="<?php echo esc_url( $theme_uri . '/images/reviews/arrowleft.svg' ); ?>" alt="Назад" width="21" height="21" />
        </button>
        <img
          class="reviews__slash"
          src="<?php echo esc_url( $theme_uri . '/images/reviews/Line 3.svg' ); ?>"
          alt="Разделитель"
          width="16"
          height="30"
        />
        <button class="reviews__arrow reviews-button-next" aria-label="Следующий отзыв" type="button">
          <img src="<?php echo esc_url( $theme_uri . '/images/reviews/arrowright.svg' ); ?>" alt="Вперед" width="20" height="21" />
        </button>
      </div>
    </div>

    <div class="reviews__slider">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <!-- Review 1 -->
          <div class="swiper-slide reviews__card">
            <div class="reviews__top">
              <img
                src="<?php echo esc_url( $theme_uri . '/images/reviews/client-1.webp' ); ?>"
                alt="Логинова Анастасия"
                width="70"
                height="70"
                loading="lazy"
                decoding="async"
              />
              <div class="reviews__title">
                <div class="reviews__stars">★★★★★</div>
                <h3 class="reviews__name">Логинова Анастасия</h3>
                <p class="reviews__work">Генеральный директор ООО «ИТ Консалтинг»</p>
              </div>
            </div>
            <p class="reviews__comment">
              «Обратились в «ЮрГарант» при возникновении серьезного спора с подрядчиком по разработке программного обеспечения. Юристы компании оперативно провели аудит договора, составили грамотную претензию и в досудебном порядке вернули аванс в размере 14,8 млн рублей. Очень профессиональная и интеллигентная команда!»
            </p>
            <div class="reviews__meta">Дело № А40-184920/2025 • Спор урегулирован до суда</div>
          </div>

          <!-- Review 2 -->
          <div class="swiper-slide reviews__card">
            <div class="reviews__top">
              <img
                src="<?php echo esc_url( $theme_uri . '/images/reviews/client-2.webp' ); ?>"
                alt="Макаров Сергей"
                width="70"
                height="70"
                loading="lazy"
                decoding="async"
              />
              <div class="reviews__title">
                <div class="reviews__stars">★★★★★</div>
                <h3 class="reviews__name">Макаров Сергей</h3>
                <p class="reviews__work">Финансовый директор АО «ПРОММАШ»</p>
              </div>
            </div>
            <p class="reviews__comment">
              «Юристы сопровождали сделку по приобретению производственно-складского комплекса. В процессе Due Diligence выявили скрытые обременения и залоги в пользу третьих лиц, о которых продавец умолчал. Это уберегло компанию от колоссальных убытков.»
            </p>
            <div class="reviews__meta">Аудит сделки M&A • Защита активов на 85 млн руб.</div>
          </div>

          <!-- Review 3 -->
          <div class="swiper-slide reviews__card">
            <div class="reviews__top">
              <img
                src="<?php echo esc_url( $theme_uri . '/images/reviews/client-3.webp' ); ?>"
                alt="Воронова Елена"
                width="70"
                height="70"
                loading="lazy"
                decoding="async"
              />
              <div class="reviews__title">
                <div class="reviews__stars">★★★★★</div>
                <h3 class="reviews__name">Воронова Елена</h3>
                <p class="reviews__work">Частный доверитель (г. Москва)</p>
              </div>
            </div>
            <p class="reviews__comment">
              «После закрытия бизнеса осталась с неподъемными кредитами. Огромное человеческое спасибо Александру Германовичу за поддержку и ведение процедуры банкротства. Все долги (1,9 млн рублей) были полностью списаны арбитражным судом за 7 месяцев, квартира осталась в собственности.»
            </p>
            <div class="reviews__meta">Дело № А41-72941/2025 • Полное списание долга</div>
          </div>
        </div>
      </div>
    </div>

    <div class="reviews__actions reveal">
      <button class="button__right button" id="openReviewBtn" type="button">
        <?php esc_html_e( 'Написать отзыв', 'legal-wordpress' ); ?>
      </button>
      <button class="button__left button" id="allReviewsTrigger" type="button">
        <?php esc_html_e( 'Все отзывы (25)', 'legal-wordpress' ); ?>
      </button>
    </div>
  </div>
</section>
