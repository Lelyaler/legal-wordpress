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

  <!-- Footer -->
  <footer class="footer" id="contact">
    <div class="footer__top">
      <div class="footer__container container">
        <div class="footer__row">
          <div class="footer__col footer__col--about">
            <div class="footer__logo">
              <span class="logo__brand"><?php bloginfo( 'name' ); ?></span>
              <span class="logo__desc"><?php bloginfo( 'description' ); ?></span>
            </div>
            <p class="footer__about-text">
              Ведущая правовая практика с 2012 года. Защита интересов частных доверителей и корпоративного бизнеса в арбитражных судах, сопровождение сложных сделок и комплексная юридическая безопасность.
            </p>
          </div>
          <div class="footer__col footer__col--contacts">
            <h4 class="footer__col-title">Контакты</h4>
            <ul class="footer__contacts-list">
              <li><strong>Телефон:</strong> <a href="tel:+79220229482">+7 (922) 022-94-82</a></li>
              <li><strong>E-mail:</strong> <a href="mailto:janis62@yahoo.com">janis62@yahoo.com</a></li>
              <li><strong>График:</strong> Пн–Пт 09:00–20:00, Сб 10:00–17:00</li>
              <li><strong>Адрес:</strong> г. Москва, Пресненская наб., 12</li>
            </ul>
          </div>
          <div class="footer__col footer__col--cta">
            <h4 class="footer__col-title">Срочная помощь</h4>
            <p class="footer__cta-desc">
              Нужна срочная консультация или оценка судебной перспективы? Свяжитесь с дежурным адвокатом прямо сейчас.
            </p>
            <button class="button button--primary" id="openConsultationFooter" type="button">
              Задать вопрос адвокату
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="footer__bottom">
      <div class="footer-bottom__container container">
        <span class="footer__link">© 2012–<?php echo esc_html( date( 'Y' ) ); ?> «<?php bloginfo( 'name' ); ?>». Все права защищены.</span>
        <span class="footer__link">Конфиденциальность гарантируется адвокатской тайной (ФЗ № 63-ФЗ).</span>
      </div>
    </div>
  </footer>

  <!-- Floating Back to Top Button -->
  <button class="back-to-top" id="backToTop" aria-label="Вернуться наверх" type="button">
    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
      <path d="m18 15-6-6-6 6"/>
    </svg>
  </button>

  <!-- Consultation Modal Dialog -->
  <dialog class="custom-dialog" id="consultationDialog">
    <div class="custom-dialog__box">
      <button class="custom-dialog__close" id="closeConsultationBtn" aria-label="Закрыть окно" type="button">&times;</button>
      <div class="custom-dialog__header">
        <span class="custom-dialog__badge">Консультация юриста</span>
        <h3 class="custom-dialog__title">Бесплатная правовая консультация</h3>
        <p class="custom-dialog__subtitle">Оставьте ваш номер телефона — профильный адвокат свяжется с вами в течение 10 минут</p>
      </div>
      <form class="custom-dialog__form" id="consultationForm">
        <div class="form-group">
          <label for="clientName">Ваше имя *</label>
          <input type="text" id="clientName" placeholder="Например: Алексей Смирнов" required autocomplete="name">
        </div>
        <div class="form-group">
          <label for="clientPhone">Номер телефона *</label>
          <input type="tel" id="clientPhone" placeholder="+7 (___) ___-__-__" required autocomplete="tel">
        </div>
        <div class="form-group">
          <label for="clientService">Интересующая область права</label>
          <select id="clientService">
            <option value="Общая консультация">Общая консультация по спору</option>
            <option value="Арбитраж и суды">Арбитражные споры и суды общей юрисдикции</option>
            <option value="Банкротство">Банкротство граждан и бизнеса (127-ФЗ)</option>
            <option value="Сделки и недвижимость">Сделки с недвижимостью / Due Diligence</option>
            <option value="Корпоративное право">Корпоративная безопасность и споры</option>
            <option value="Налоговое право">Налоговое право и проверки ФНС</option>
          </select>
        </div>
        <button type="submit" class="button button--submit">Записаться на консультацию</button>
        <p class="form-privacy">
          Нажимая кнопку, вы соглашаетесь на обработку персональных данных. Конфиденциальность гарантируется адвокатской тайной.
        </p>
      </form>
    </div>
  </dialog>
</div>

<?php wp_footer(); ?>
</body>
</html>
