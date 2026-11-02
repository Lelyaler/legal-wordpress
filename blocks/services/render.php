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

$title     = ! empty( $attributes['title'] ) ? esc_html( $attributes['title'] ) : esc_html__( 'Наши услуги', 'legal-wordpress' );
$subtitle  = ! empty( $attributes['subtitle'] ) ? esc_html( $attributes['subtitle'] ) : esc_html__( 'Оказываем исчерпывающую юридическую поддержку гражданам и коммерческим организациям. Персональная стратегия защиты, финансовая ответственность и строгое соблюдение регламентов законодательства РФ.', 'legal-wordpress' );
$theme_uri = get_template_directory_uri();
?>

<section class="services" id="services">
  <div class="services__container container">
    <div class="primary__title reveal">
      <span class="section-badge"><?php esc_html_e( 'Правовая практика', 'legal-wordpress' ); ?></span>
      <h2 class="title"><?php echo $title; ?></h2>
      <p class="primary__text"><?php echo $subtitle; ?></p>
    </div>

    <!-- Service Category Filter Tabs -->
    <div class="services__tabs reveal" role="tablist" aria-label="Категории услуг">
      <button class="service-tab active" data-filter="all" type="button" role="tab" aria-selected="true">Все услуги</button>
      <button class="service-tab" data-filter="citizens" type="button" role="tab" aria-selected="false">Для граждан</button>
      <button class="service-tab" data-filter="business" type="button" role="tab" aria-selected="false">Для бизнеса</button>
    </div>

    <div class="services__content-grid">
      <!-- Service 1 -->
      <div
        class="services__card reveal"
        data-category="citizens"
        data-service-id="bankruptcy"
        data-title="Банкротство физических лиц"
        data-price="от 8 000 ₽ / мес."
        data-time="от 6 месяцев"
        data-desc="Комплексная процедура законного списания задолженностей по кредитам, микрозаймам, налогам и ЖКХ согласно Федеральному закону № 127-ФЗ. Полная защита единственного жилья и прекращение звонков коллекторов с первого дня работы."
        data-items="Остановка звонков коллекторов и банков;Защита имущества и доходов;Полное списание долгов по 127-ФЗ;Сопровождение финансового управляющего"
      >
        <div class="services__card-top">
          <div class="item__icon-wrapper">
            <img src="<?php echo esc_url( $theme_uri . '/images/services/agreement blue.svg' ); ?>" alt="Банкротство" width="36" height="35" loading="lazy" decoding="async" />
          </div>
          <span class="services__tag">Для граждан</span>
        </div>
        <h3 class="item__title">Банкротство физических лиц</h3>
        <p class="item__subtitle">Законное списание кредитов и долгов по 127-ФЗ с сохранением имущества и защитой от коллекторов.</p>
        <ul class="services__checklist">
          <li>Защита единственного жилья</li>
          <li>Остановка штрафов и пени</li>
          <li>Списание долгов под ключ</li>
        </ul>
        <div class="services__footer">
          <span class="services__price">от 8 000 ₽/мес.</span>
          <button class="services__more-btn" type="button">Подробнее <span>→</span></button>
        </div>
      </div>

      <!-- Service 2 -->
      <div
        class="services__card reveal"
        data-category="business"
        data-service-id="deals"
        data-title="Сопровождение сделок"
        data-price="от 25 000 ₽"
        data-time="от 3 рабочих дней"
        data-desc="Юридическая экспертиза договоров купли-продажи, аренды, инвестиций и слияний. Проводим глубокий аудит контрагентов и активов (Due Diligence), минимизируя финансовые, налоговые и судебные риски."
        data-items="Глубокая проверка контрагентов (Due Diligence);Подготовка безопасных схем расчетов;Составление и аудит договоров любой сложности;Защита прав бенефициаров и инвесторов"
      >
        <div class="services__card-top">
          <div class="item__icon-wrapper">
            <img src="<?php echo esc_url( $theme_uri . '/images/services/agreement blue.svg' ); ?>" alt="Сопровождение сделок" width="36" height="35" loading="lazy" decoding="async" />
          </div>
          <span class="services__tag">Для бизнеса</span>
        </div>
        <h3 class="item__title">Сопровождение сделок</h3>
        <p class="item__subtitle">Аудит договоров, проверка контрагентов (Due Diligence) и защита инвестиций при крупных покупках.</p>
        <ul class="services__checklist">
          <li>Проверка чистоты активов</li>
          <li>Безопасные расчеты и эскроу</li>
          <li>Минимизация налоговых рисков</li>
        </ul>
        <div class="services__footer">
          <span class="services__price">от 25 000 ₽</span>
          <button class="services__more-btn" type="button">Подробнее <span>→</span></button>
        </div>
      </div>

      <!-- Service 3 -->
      <div
        class="services__card reveal"
        data-category="business"
        data-service-id="corporate"
        data-title="Корпоративные споры"
        data-price="от 40 000 ₽"
        data-time="от 1 месяца"
        data-desc="Разрешение споров между учредителями и акционерами, предотвращение недружественных поглощений (рейдерства), оспаривание крупных сделок с заинтересованностью и исключение недобросовестных участников."
        data-items="Защита от рейдерских захватов;Оспаривание решений собраний участников;Возврат выведенных активов общества;Взыскание убытков с генерального директора"
      >
        <div class="services__card-top">
          <div class="item__icon-wrapper">
            <img src="<?php echo esc_url( $theme_uri . '/images/services/agreement blue.svg' ); ?>" alt="Корпоративные споры" width="36" height="35" loading="lazy" decoding="async" />
          </div>
          <span class="services__tag">Для бизнеса</span>
        </div>
        <h3 class="item__title">Корпоративные споры</h3>
        <p class="item__subtitle">Защита долей учредителей, оспаривание протоколов общих собраний и предотвращение рейдерских захватов.</p>
        <ul class="services__checklist">
          <li>Защита долей в уставном капитале</li>
          <li>Взыскание убытков с руководства</li>
          <li>Блокировка незаконных решений</li>
        </ul>
        <div class="services__footer">
          <span class="services__price">от 40 000 ₽</span>
          <button class="services__more-btn" type="button">Подробнее <span>→</span></button>
        </div>
      </div>

      <!-- Service 4 -->
      <div
        class="services__card reveal"
        data-category="citizens"
        data-service-id="realty"
        data-title="Недвижимость и земля"
        data-price="от 20 000 ₽"
        data-time="от 2 недель"
        data-desc="Судебные споры по договорам долевого участия (ДДУ), признание права собственности, оспаривание кадастровой стоимости земельных участков и защита добросовестных покупателей жилья."
        data-items="Взыскание неустойки по 214-ФЗ с застройщиков;Оспаривание прав третьих лиц на жилье;Снижение кадастровой стоимости земли;Узаконивание самовольных построек"
      >
        <div class="services__card-top">
          <div class="item__icon-wrapper">
            <img src="<?php echo esc_url( $theme_uri . '/images/services/agreement blue.svg' ); ?>" alt="Недвижимость и земля" width="36" height="35" loading="lazy" decoding="async" />
          </div>
          <span class="services__tag">Недвижимость</span>
        </div>
        <h3 class="item__title">Недвижимость и земля</h3>
        <p class="item__subtitle">Взыскание неустоек по ДДУ с застройщиков, споры о границах земельных участков и правах собственности.</p>
        <ul class="services__checklist">
          <li>Взыскание 100% неустойки по 214-ФЗ</li>
          <li>Снижение кадастровой стоимости</li>
          <li>Оформление прав собственности</li>
        </ul>
        <div class="services__footer">
          <span class="services__price">от 20 000 ₽</span>
          <button class="services__more-btn" type="button">Подробнее <span>→</span></button>
        </div>
      </div>

      <!-- Service 5 -->
      <div
        class="services__card reveal"
        data-category="citizens"
        data-service-id="insurance"
        data-title="Возврат страховых премий"
        data-price="от 10 000 ₽"
        data-time="от 10 рабочих дней"
        data-desc="Официальный возврат навязанных банками страховок при оформлении кредитов и ипотеки. Взыскание недополученных выплат по полисам КАСКО и ОСАГО со штрафом 50% в пользу клиента."
        data-items="Возврат страховки в «период охлаждения» и после;Взыскание компенсации со страховых компаний;Судебный штраф 50% в пользу доверителя;Оплата услуг юриста по факту результата"
      >
        <div class="services__card-top">
          <div class="item__icon-wrapper">
            <img src="<?php echo esc_url( $theme_uri . '/images/services/agreement blue.svg' ); ?>" alt="Возврат страховок" width="36" height="35" loading="lazy" decoding="async" />
          </div>
          <span class="services__tag">Для граждан</span>
        </div>
        <h3 class="item__title">Возврат страховых премий</h3>
        <p class="item__subtitle">Взыскание навязанных страховок по кредитам, споры со страховыми организациями по ОСАГО и КАСКО.</p>
        <ul class="services__checklist">
          <li>Возврат навязанных комиссий</li>
          <li>Взыскание штрафа 50% с банка</li>
          <li>Без предоплаты за результат</li>
        </ul>
        <div class="services__footer">
          <span class="services__price">от 10 000 ₽</span>
          <button class="services__more-btn" type="button">Подробнее <span>→</span></button>
        </div>
      </div>

      <!-- Service 6 -->
      <div
        class="services__card reveal"
        data-category="business"
        data-service-id="tax"
        data-title="Налоговое право и споры"
        data-price="от 35 000 ₽"
        data-time="от 2 недель"
        data-desc="Профессиональное сопровождение камеральных и выездных проверок ФНС. Подготовка аргументированных возражений на акты проверок, обжалование доначислений в арбитражном суде."
        data-items="Сопровождение проверок инспекции ФНС;Анализ рисков и подготовка пояснений;Обжалование необоснованных доначислений;Защита от субсидиарной ответственности"
      >
        <div class="services__card-top">
          <div class="item__icon-wrapper">
            <img src="<?php echo esc_url( $theme_uri . '/images/services/agreement blue.svg' ); ?>" alt="Налоговые споры" width="36" height="35" loading="lazy" decoding="async" />
          </div>
          <span class="services__tag">Для бизнеса</span>
        </div>
        <h3 class="item__title">Налоговое право и споры</h3>
        <p class="item__subtitle">Сопровождение налоговых проверок на любой стадии, анализ документов, защита в арбитражных спорах.</p>
        <ul class="services__checklist">
          <li>Снижение налоговых штрафов</li>
          <li>Защита при допросах в ФНС</li>
          <li>Обжалование решений в суде</li>
        </ul>
        <div class="services__footer">
          <span class="services__price">от 35 000 ₽</span>
          <button class="services__more-btn" type="button">Подробнее <span>→</span></button>
        </div>
      </div>
    </div>

    <!-- Mobile Slider Fallback -->
    <div class="services__slider">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide services__card" data-service-id="bankruptcy">
            <div class="services__card-top">
              <div class="item__icon-wrapper">
                <img src="<?php echo esc_url( $theme_uri . '/images/services/agreement blue.svg' ); ?>" alt="Банкротство" width="36" height="35" />
              </div>
              <span class="services__tag">Для граждан</span>
            </div>
            <h3 class="item__title">Банкротство физических лиц</h3>
            <p class="item__subtitle">Законное списание кредитов по 127-ФЗ с защитой имущества.</p>
          </div>
          <div class="swiper-slide services__card" data-service-id="deals">
            <div class="services__card-top">
              <div class="item__icon-wrapper">
                <img src="<?php echo esc_url( $theme_uri . '/images/services/agreement blue.svg' ); ?>" alt="Сделки" width="36" height="35" />
              </div>
              <span class="services__tag">Для бизнеса</span>
            </div>
            <h3 class="item__title">Сопровождение сделок</h3>
            <p class="item__subtitle">Аудит рисков и безопасное закрытие контрактов.</p>
          </div>
          <div class="swiper-slide services__card" data-service-id="corporate">
            <div class="services__card-top">
              <div class="item__icon-wrapper">
                <img src="<?php echo esc_url( $theme_uri . '/images/services/agreement blue.svg' ); ?>" alt="Корпоративные споры" width="36" height="35" />
              </div>
              <span class="services__tag">Для бизнеса</span>
            </div>
            <h3 class="item__title">Корпоративные споры</h3>
            <p class="item__subtitle">Защита долей и прав учредителей предприятия.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="services__action-box reveal">
      <p class="services__action-text"><?php esc_html_e( 'Не нашли нужную услугу? Опишите вашу задачу — юрист ответит за 10 минут', 'legal-wordpress' ); ?></p>
      <button class="services__button button" id="servicesCustomBtn" type="button">
        <?php esc_html_e( 'Получить персональный расчет', 'legal-wordpress' ); ?>
      </button>
    </div>
  </div>
</section>
