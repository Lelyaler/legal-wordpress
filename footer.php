<?php
/**
 * Footer template for Legal Corporate Theme.
 *
 * @package Legal_Corporate
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
  </main>

  <!-- Footer & Contacts -->
  <footer class="footer">
    <section class="contact" id="contact">
      <div class="container">
        <h2 class="visually-hidden"><?php esc_html_e( 'Контакты и запись на консультацию', 'legal-wordpress' ); ?></h2>
        <div class="contact__top reveal">
          <div class="contact__brand-block">
            <span class="logo"><?php bloginfo( 'name' ); ?></span>
            <p class="contact__brand-tag"><?php bloginfo( 'description' ); ?></p>
          </div>
          <p class="contact__text">
            <?php esc_html_e( 'Профессиональная юридическая помощь гражданам и юридическим лицам. Лицензированные адвокаты, прозрачные договоры, защита интересов в судах всех уровней по всей территории Российской Федерации.', 'legal-wordpress' ); ?>
          </p>
        </div>
        <div class="contact__bottom">
          <ul class="contact__list reveal">
            <li class="contact__items">
              <div class="contact__icon-wrap">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
                  <circle cx="12" cy="10" r="3"/>
                </svg>
              </div>
              <div class="contact__item">
                <h3 class="contact__title"><?php esc_html_e( 'Центральный офис', 'legal-wordpress' ); ?></h3>
                <address class="contact__address">
                  <?php esc_html_e( 'г. Москва, Пресненская наб., 12, БЦ «Башня Федерация»', 'legal-wordpress' ); ?>
                </address>
              </div>
            </li>
            <li class="contact__items">
              <div class="contact__icon-wrap">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                </svg>
              </div>
              <div class="contact__item">
                <h3 class="contact__title"><?php esc_html_e( 'Запись на консультацию', 'legal-wordpress' ); ?></h3>
                <address class="contact__address">
                  <a href="tel:+79220229482" class="contact__link">+7 (922) 022-94-82</a>
                </address>
              </div>
            </li>
            <li class="contact__items">
              <div class="contact__icon-wrap">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <rect width="20" height="16" x="2" y="4" rx="2"/>
                  <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                </svg>
              </div>
              <div class="contact__item">
                <h3 class="contact__title"><?php esc_html_e( 'Деловая переписка', 'legal-wordpress' ); ?></h3>
                <address class="contact__address">
                  <a href="mailto:janis62@yahoo.com" class="contact__link">janis62@yahoo.com</a>
                </address>
              </div>
            </li>
          </ul>
          <div class="footer__nav reveal">
            <ul class="footer__menu">
              <li class="menu__list"><a class="menu__link" href="#services"><?php esc_html_e( 'Услуги', 'legal-wordpress' ); ?></a></li>
              <li class="menu__list"><a class="menu__link" href="#stats"><?php esc_html_e( 'Показатели', 'legal-wordpress' ); ?></a></li>
              <li class="menu__list"><a class="menu__link" href="#process"><?php esc_html_e( 'Этапы', 'legal-wordpress' ); ?></a></li>
              <li class="menu__list"><a class="menu__link" href="#reviews"><?php esc_html_e( 'Отзывы', 'legal-wordpress' ); ?></a></li>
              <li class="menu__list"><a class="menu__link" href="#faq"><?php esc_html_e( 'FAQ', 'legal-wordpress' ); ?></a></li>
            </ul>
            <div class="footer__question">
              <div class="question__top">
                <img
                  src="<?php echo esc_url( get_template_directory_uri() . '/images/footer/Rectangle 28.webp' ); ?>"
                  alt="Миронов Александр"
                  width="65"
                  height="65"
                  loading="lazy"
                  decoding="async"
                />
                <div class="question__items">
                  <h3 class="question__title"><?php esc_html_e( 'Миронов Александр', 'legal-wordpress' ); ?></h3>
                  <p class="question__subtitle"><?php esc_html_e( 'Ведущий адвокат', 'legal-wordpress' ); ?></p>
                </div>
              </div>
              <p class="question__info">
                <?php esc_html_e( 'Нужна срочная юридическая консультация или оценка судебной перспективы? Оставьте вопрос — я лично свяжусь с вами в ближайшее рабочее время.', 'legal-wordpress' ); ?>
              </p>
              <button class="question__button button" id="openConsultationFooter" type="button">
                <?php esc_html_e( 'Задать вопрос юристу', 'legal-wordpress' ); ?>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="footer__bottom">
      <div class="footer-bottom__container container">
        <span class="footer__link">© 2012–<?php echo esc_html( date( 'Y' ) ); ?> «<?php bloginfo( 'name' ); ?>». <?php esc_html_e( 'Все права защищены.', 'legal-wordpress' ); ?></span>
        <a class="footer__link" href="#" id="privacyPolicyLink">
          <?php esc_html_e( 'Политика конфиденциальности и обработки данных', 'legal-wordpress' ); ?>
        </a>
      </div>
    </div>
  </footer>

  <!-- Floating Back to Top Button -->
  <button class="back-to-top" id="backToTop" aria-label="<?php esc_attr_e( 'Вернуться наверх', 'legal-wordpress' ); ?>" type="button">
    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
      <path d="m18 15-6-6-6 6"/>
    </svg>
  </button>

  <!-- 1. Consultation Modal Dialog -->
  <dialog class="custom-dialog" id="consultationDialog">
    <div class="custom-dialog__box">
      <button class="custom-dialog__close" id="closeConsultationBtn" aria-label="Закрыть окно" type="button">&times;</button>
      <div class="custom-dialog__header">
        <span class="custom-dialog__badge"><?php esc_html_e( 'Консультация юриста', 'legal-wordpress' ); ?></span>
        <h3 class="custom-dialog__title"><?php esc_html_e( 'Бесплатная правовая консультация', 'legal-wordpress' ); ?></h3>
        <p class="custom-dialog__subtitle"><?php esc_html_e( 'Оставьте ваш номер телефона — профильный юрист свяжется с вами в течение 10 минут', 'legal-wordpress' ); ?></p>
      </div>
      <form class="custom-dialog__form" id="consultationForm">
        <div class="form-group">
          <label for="clientName"><?php esc_html_e( 'Ваше имя *', 'legal-wordpress' ); ?></label>
          <input type="text" id="clientName" placeholder="Например: Алексей Смирнов" required autocomplete="name" />
        </div>
        <div class="form-group">
          <label for="clientPhone"><?php esc_html_e( 'Номер телефона *', 'legal-wordpress' ); ?></label>
          <input type="tel" id="clientPhone" placeholder="+7 (___) ___-__-__" required autocomplete="tel" />
        </div>
        <div class="form-group">
          <label for="clientService"><?php esc_html_e( 'Интересующая услуга', 'legal-wordpress' ); ?></label>
          <select id="clientService">
            <option value="Общая консультация"><?php esc_html_e( 'Общая консультация по спору', 'legal-wordpress' ); ?></option>
            <option value="Банкротство физических лиц"><?php esc_html_e( 'Банкротство физических лиц (127-ФЗ)', 'legal-wordpress' ); ?></option>
            <option value="Сопровождение сделок"><?php esc_html_e( 'Сопровождение сделок / Due Diligence', 'legal-wordpress' ); ?></option>
            <option value="Корпоративные споры"><?php esc_html_e( 'Корпоративные и арбитражные споры', 'legal-wordpress' ); ?></option>
            <option value="Недвижимость и земля"><?php esc_html_e( 'Недвижимость и земельные отношения', 'legal-wordpress' ); ?></option>
            <option value="Возврат страховых премий"><?php esc_html_e( 'Возврат страховок и комиссий банков', 'legal-wordpress' ); ?></option>
            <option value="Налоговое право и споры"><?php esc_html_e( 'Налоговое право и проверки ФНС', 'legal-wordpress' ); ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="clientIssue"><?php esc_html_e( 'Краткое описание вопроса (необязательно)', 'legal-wordpress' ); ?></label>
          <textarea id="clientIssue" rows="3" placeholder="Опишите в 1-2 предложениях вашу ситуацию..."></textarea>
        </div>
        <button type="submit" class="button button--submit"><?php esc_html_e( 'Записаться на консультацию', 'legal-wordpress' ); ?></button>
        <p class="form-privacy">
          <?php esc_html_e( 'Нажимая кнопку, вы соглашаетесь на обработку персональных данных. Конфиденциальность гарантируется адвокатской тайной.', 'legal-wordpress' ); ?>
        </p>
      </form>
    </div>
  </dialog>

  <!-- 2. Service Details Modal Dialog -->
  <dialog class="custom-dialog" id="serviceDialog">
    <div class="custom-dialog__box custom-dialog__box--wide">
      <button class="custom-dialog__close" id="closeServiceBtn" aria-label="Закрыть окно" type="button">&times;</button>
      <div class="custom-dialog__header">
        <span class="custom-dialog__badge" id="serviceModalCategory"><?php esc_html_e( 'Услуга', 'legal-wordpress' ); ?></span>
        <h3 class="custom-dialog__title" id="serviceModalTitle"><?php esc_html_e( 'Название услуги', 'legal-wordpress' ); ?></h3>
        <p class="custom-dialog__subtitle" id="serviceModalDesc"><?php esc_html_e( 'Подробное описание правовой помощи', 'legal-wordpress' ); ?></p>
      </div>
      <div class="service-details-body">
        <div class="service-details-meta">
          <div class="service-meta-item">
            <span class="meta-label"><?php esc_html_e( 'Ориентировочный срок:', 'legal-wordpress' ); ?></span>
            <span class="meta-value" id="serviceModalTime"><?php esc_html_e( 'от 2 недель', 'legal-wordpress' ); ?></span>
          </div>
          <div class="service-meta-item">
            <span class="meta-label"><?php esc_html_e( 'Стоимость:', 'legal-wordpress' ); ?></span>
            <span class="meta-value" id="serviceModalPrice"><?php esc_html_e( 'от 10 000 ₽', 'legal-wordpress' ); ?></span>
          </div>
        </div>
        <h4 class="service-checklist-title"><?php esc_html_e( 'Что входит в работу юриста:', 'legal-wordpress' ); ?></h4>
        <ul class="service-modal-list" id="serviceModalList">
          <!-- Dynamically populated via JS -->
        </ul>
        <div class="service-modal-actions">
          <button class="button" id="orderThisServiceBtn" type="button">
            <?php esc_html_e( 'Заказать эту услугу', 'legal-wordpress' ); ?>
          </button>
        </div>
      </div>
    </div>
  </dialog>

  <!-- 3. Leave Review Modal Dialog -->
  <dialog class="custom-dialog" id="reviewDialog">
    <div class="custom-dialog__box">
      <button class="custom-dialog__close" id="closeReviewBtn" aria-label="Закрыть окно" type="button">&times;</button>
      <div class="custom-dialog__header">
        <span class="custom-dialog__badge"><?php esc_html_e( 'Обратная связь', 'legal-wordpress' ); ?></span>
        <h3 class="custom-dialog__title"><?php esc_html_e( 'Оставить отзыв о сотрудничестве', 'legal-wordpress' ); ?></h3>
        <p class="custom-dialog__subtitle"><?php esc_html_e( 'Поделитесь вашим опытом работы с юристами «ЮрГарант»', 'legal-wordpress' ); ?></p>
      </div>
      <form class="custom-dialog__form" id="reviewForm">
        <div class="form-group">
          <label for="reviewAuthor"><?php esc_html_e( 'Ваше имя *', 'legal-wordpress' ); ?></label>
          <input type="text" id="reviewAuthor" placeholder="Иван Иванов" required />
        </div>
        <div class="form-group">
          <label for="reviewCompany"><?php esc_html_e( 'Компания или статус (необязательно)', 'legal-wordpress' ); ?></label>
          <input type="text" id="reviewCompany" placeholder="Например: ООО «Вектор» или частный клиент" />
        </div>
        <div class="form-group">
          <label><?php esc_html_e( 'Ваша оценка:', 'legal-wordpress' ); ?></label>
          <div class="rating-stars" id="ratingStars">
            <span class="star selected" data-value="1">★</span>
            <span class="star selected" data-value="2">★</span>
            <span class="star selected" data-value="3">★</span>
            <span class="star selected" data-value="4">★</span>
            <span class="star selected" data-value="5">★</span>
          </div>
        </div>
        <div class="form-group">
          <label for="reviewText"><?php esc_html_e( 'Текст отзыва *', 'legal-wordpress' ); ?></label>
          <textarea id="reviewText" rows="4" placeholder="Расскажите, какой вопрос помогли решить наши специалисты..." required></textarea>
        </div>
        <button type="submit" class="button button--submit"><?php esc_html_e( 'Опубликовать отзыв', 'legal-wordpress' ); ?></button>
      </form>
    </div>
  </dialog>

  <!-- 4. Certificates & Licenses Modal Dialog -->
  <dialog class="custom-dialog" id="certificatesDialog">
    <div class="custom-dialog__box custom-dialog__box--wide">
      <button class="custom-dialog__close" id="closeCertificatesBtn" aria-label="Закрыть окно" type="button">&times;</button>
      <div class="custom-dialog__header">
        <span class="custom-dialog__badge"><?php esc_html_e( 'Надежность и аккредитация', 'legal-wordpress' ); ?></span>
        <h3 class="custom-dialog__title"><?php esc_html_e( 'Сертификаты и правовой статус', 'legal-wordpress' ); ?></h3>
        <p class="custom-dialog__subtitle"><?php esc_html_e( 'Официальные сведения о квалификации компании и статусе адвокатов', 'legal-wordpress' ); ?></p>
      </div>
      <div class="certificates-grid">
        <div class="cert-item">
          <div class="cert-icon">📜</div>
          <h4 class="cert-title"><?php esc_html_e( 'Членство в Адвокатской палате', 'legal-wordpress' ); ?></h4>
          <p class="cert-desc"><?php esc_html_e( 'Все ведущие специалисты состоят в Адвокатской палате с действующими регистрационными номерами.', 'legal-wordpress' ); ?></p>
        </div>
        <div class="cert-item">
          <div class="cert-icon">🏛️</div>
          <h4 class="cert-title"><?php esc_html_e( 'Страхование ответственности', 'legal-wordpress' ); ?></h4>
          <p class="cert-desc"><?php esc_html_e( 'Профессиональная ответственность адвокатов застрахована на сумму 50 000 000 рублей.', 'legal-wordpress' ); ?></p>
        </div>
        <div class="cert-item">
          <div class="cert-icon">⭐</div>
          <h4 class="cert-title"><?php esc_html_e( 'Топ рейтинга «Право-300»', 'legal-wordpress' ); ?></h4>
          <p class="cert-desc"><?php esc_html_e( 'Входим в группу лидеров регионального рейтинга юридических компаний.', 'legal-wordpress' ); ?></p>
        </div>
      </div>
      <div class="service-modal-actions">
        <button class="button" id="closeCertificatesActionBtn" type="button"><?php esc_html_e( 'Понятно', 'legal-wordpress' ); ?></button>
      </div>
    </div>
  </dialog>

  <!-- 5. All Reviews Modal Dialog -->
  <dialog class="custom-dialog custom-dialog--wide" id="allReviewsDialog">
    <div class="custom-dialog__box custom-dialog__box--wide">
      <button class="custom-dialog__close" id="closeAllReviewsBtn" aria-label="Закрыть окно" type="button">&times;</button>
      <div class="custom-dialog__header">
        <span class="custom-dialog__badge"><?php esc_html_e( 'Репутация и доверие', 'legal-wordpress' ); ?></span>
        <h3 class="custom-dialog__title"><?php esc_html_e( 'Отзывы доверителей', 'legal-wordpress' ); ?></h3>
        <p class="custom-dialog__subtitle">
          <?php esc_html_e( 'Средняя оценка 4.9 из 5.0 на основании проверенных судебных дел.', 'legal-wordpress' ); ?>
        </p>
      </div>
      <div class="all-reviews__footer">
        <button class="button button--submit" id="writeReviewFromAllBtn" type="button">
          <?php esc_html_e( 'Оставить свой отзыв', 'legal-wordpress' ); ?>
        </button>
      </div>
    </div>
  </dialog>

  <!-- Toast Notification -->
  <div class="toast-notice" id="toastNotice" role="status" aria-live="polite"></div>

</div><!-- /.wrapper -->

<?php wp_footer(); ?>
</body>
</html>
