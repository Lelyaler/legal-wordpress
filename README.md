# Legal Corporate Theme — WordPress Theme with Native Gutenberg Blocks

> **Корпоративная тема для юридических фирм, адвокатских коллегий и консалтинговых агентств со встроенными нативными блоками Gutenberg (Block API v3) и разметкой Schema.org.**

[![WordPress](https://img.shields.io/badge/WordPress-6.2%2B-blue.svg)](https://wordpress.org/)
[![PHP](https://img.shields.io/badge/PHP-8.0%2B-777bb4.svg)](https://www.php.net/)
[![Gutenberg](https://img.shields.io/badge/Block_API-v3-black.svg)](https://developer.wordpress.org/block-editor/)
[![License](https://img.shields.io/badge/License-GPL--2.0--or--later-green.svg)](https://www.gnu.org/licenses/gpl-2.0.html)

Тема разработана по современным стандартам WordPress без использования тяжелых сторонних конструкторов (Elementor / WPBakery). Все ключевые посадочные блоки сайта реализованы как нативные блоки Gutenberg, что позволяет контент-менеджерам и юристам конструировать посадочные страницы прямо в блочном редакторе.

---

## 🏛️ Ключевые особенности

- **Встроенные нативные блоки Gutenberg (Block API v3)**: собственная категория `Legal Theme Blocks` в инсертере блоков WordPress.
- **Динамический Server-Side Rendering (`render.php`)**: блоки рендерятся сервером без сдвига верстки (CLS 0) и гарантируют 100% индексацию поисковыми роботами.
- **Автоматическая микроразметка Schema.org FAQPage**: блок FAQ автоматически генерирует и внедряет валидный JSON-LD в подвал страницы для получения расширенных сниппетов в Google и Яндекс.
- **Доступность (A11Y)**: соответствие WCAG 2.1 AA — корректная ARIA-разметка (`aria-expanded`, `aria-controls`), поддержка навигации с клавиатуры.
- **Интерактивные модальные окна**: нативный `<dialog>` с формой записи на консультацию и быстрой отправкой через AJAX.
- **Высокая производительность**: адаптивные WebP-изображения, предварительная загрузка критических ресурсов, Google PageSpeed 95+.

---

## 🧩 Встроенные Gutenberg-блоки темы

1. **`legal/hero` (Hero Consultation Banner)**:
   - Презентационный баннер с фоновыми слайдами, бейджем практики, заголовком, кнопками вызова консультации и ключевыми индикаторами доверия (15+ лет практики, 98.4% побед, адвокатская тайна).
2. **`legal/stats` (Trust Statistics)**:
   - Сетка подтвержденных показателей (выигранные дела, сохраненные активы доверителей, количество клиентов).
3. **`legal/services` (Practice Areas & Services)**:
   - Каталог юридических практик (арбитраж, банкротство, сделки с недвижимостью, налоги, корпоративная защита) с вызовом персональной консультации.
4. **`legal/process` (Working Process Timeline)**:
   - 4 пошаговых этапа ведения дела: от первичного правового аудита до фактического взыскания по исполнительному листу.
5. **`legal/faq` (Legal FAQ Accordion & Schema)**:
   - Аккордеон с вопросами и ответами, оснащенный автогенерацией Schema.org JSON-LD микроразметки.
6. **`legal/reviews` (Client Testimonials)**:
   - Адаптивная карусель реальных отзывов доверителей на Swiper.

---

## 📂 Структура файлов

```text
legal-wordpress/
├── blocks/               # Встроенные нативные блоки Gutenberg (Block API v3)
│   ├── faq/              # Блок FAQ с Schema.org генератором
│   ├── hero/             # Блок главного баннера
│   ├── process/          # Блок этапов ведения дела
│   ├── reviews/          # Блок отзывов на Swiper
│   ├── services/         # Блок юридических практик
│   └── stats/            # Блок показателей доверия
├── css/                  # Скомпилированные стили
├── images/               # Графика, адвокаты, отзывы и векторные иконки
├── js/                   # Скрипты темы, модалки и editor-blocks.js
├── swiper/               # Вендорная библиотека Swiper
├── footer.php            # Подвал, модалка консультации и wp_footer()
├── front-page.php        # Главная страница (блоки Gutenberg или fallback)
├── functions.php         # Регистрация ассетов, блоков и AJAX
├── header.php            # Шапка, контакты и навигация
├── index.php             # Базовый шаблон вывода контента
├── page.php              # Шаблон страниц с поддержкой the_content()
└── style.css             # Декларация темы и стили блоков
```

---

## 🚀 Установка и использование

1. Скопируйте папку темы в директорию `wp-content/themes/legal-wordpress`:
   ```bash
   git clone https://github.com/Lelyaler/legal-wordpress.git wp-content/themes/legal-wordpress
   ```
2. В панели управления WordPress перейдите в **Внешний вид → Темы** и активируйте **Legal Corporate Theme**.
3. Создайте новую страницу в **Страницы → Добавить новую** и откройте редактор блоков Gutenberg.
4. Нажмите `+` и выберите нужные блоки из категории **Legal Theme Blocks**.
5. Настройте тексты и параметры в правой боковой панели редактора (Inspector Controls).

---

## 📄 Лицензия

Распространяется под лицензией **GPL-2.0-or-later**.
