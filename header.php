<?php
/**
 * Header template for Legal Corporate Theme.
 *
 * @package Legal_Corporate
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="wrapper">
  <!-- Header -->
  <header class="header">
    <div class="header__top">
      <div class="header__container container">
        <div class="header__contact">
          <div class="header__content">
            <img class="header__icon" src="<?php echo esc_url( get_template_directory_uri() . '/images/header-intro/phone.svg' ); ?>" alt="Телефон" width="20" height="20">
            <a class="header__text" href="tel:+79220229482">+7 (922) 022-94-82</a>
          </div>
          <div class="header__content">
            <img class="header__icon" src="<?php echo esc_url( get_template_directory_uri() . '/images/header-intro/mail.svg' ); ?>" alt="Электронная почта" width="20" height="20">
            <a class="header__text" href="mailto:janis62@yahoo.com">janis62@yahoo.com</a>
          </div>
          <div class="header__content header__schedule">
            <span class="header__schedule-dot"></span>
            <span class="header__schedule-text">Пн–Пт: 09:00 – 20:00, Сб: 10:00 – 17:00</span>
          </div>
        </div>
        <button class="header__call" id="openConsultationHeader" type="button">
          Заказать звонок
        </button>
      </div>
    </div>
    <div class="header__bottom">
      <div class="header__container container">
        <div class="header__logo">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
            <span class="logo__brand"><?php bloginfo( 'name' ); ?></span>
            <span class="logo__desc"><?php bloginfo( 'description' ); ?></span>
          </a>
        </div>
        <button class="burger" aria-label="Открыть меню" type="button">
          <span class="burger__item"></span>
        </button>
        <nav class="header__menu" aria-label="Основное меню">
          <?php
          if ( has_nav_menu( 'primary' ) ) {
            wp_nav_menu( array(
              'theme_location' => 'primary',
              'container'      => false,
              'menu_class'     => 'menu__items',
              'fallback_cb'    => false,
            ) );
          } else {
          ?>
            <ul class="menu__items">
              <li class="menu__item"><a class="menu__link" href="#services">Услуги</a></li>
              <li class="menu__item"><a class="menu__link" href="#stats">Показатели</a></li>
              <li class="menu__item"><a class="menu__link" href="#process">Этапы</a></li>
              <li class="menu__item"><a class="menu__link" href="#about">Юристы</a></li>
              <li class="menu__item"><a class="menu__link" href="#reviews">Отзывы</a></li>
              <li class="menu__item"><a class="menu__link" href="#faq">FAQ</a></li>
              <li class="menu__item"><a class="menu__link" href="#contact">Контакты</a></li>
            </ul>
          <?php } ?>

          <div class="menu__extra" aria-label="Контакты в меню">
            <div class="menu__extra-contacts">
              <div class="menu__extra-item">
                <span class="menu__extra-label">Срочная консультация</span>
                <a class="menu__extra-phone" href="tel:+79220229482">+7 (922) 022-94-82</a>
                <span class="menu__extra-schedule">Пн–Пт 09:00–20:00, Сб 10:00–17:00</span>
              </div>
              <div class="menu__extra-item">
                <span class="menu__extra-label">Главный офис</span>
                <span class="menu__extra-address">г. Москва, Деловой центр «Сити»</span>
              </div>
            </div>
            <button class="button menu__extra-btn" id="burgerConsultationBtn" type="button">
              Записаться к адвокату
            </button>
            <div class="menu__extra-footer">
              <span class="menu__extra-copy">© <?php echo esc_html( date( 'Y' ) ); ?> ЮрГарант • Все права защищены</span>
              <span class="menu__extra-note">Адвокатская палата Московской области</span>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>

  <main class="main">
