/**
 * Legal Corporate Theme - Gutenberg Editor Blocks
 * Native React block editor registration
 */

(function (wp) {
	'use strict';

	if (!wp || !wp.blocks || !wp.element) {
		return;
	}

	const { registerBlockType } = wp.blocks;
	const { createElement: el, Fragment } = wp.element;
	const { InspectorControls } = wp.blockEditor || wp.editor;
	const { PanelBody, TextControl, ToggleControl } = wp.components;
	const { __ } = wp.i18n;

	const createBlockPreview = (badgeText, title, description) => {
		return el(
			'div',
			{
				style: {
					padding: '1.5rem',
					border: '2px dashed #1e3a8a',
					borderRadius: '8px',
					background: '#f8fafc',
					textAlign: 'center',
					margin: '1rem 0',
				},
			},
			el('span', {
				style: {
					display: 'inline-block',
					background: '#1e3a8a',
					color: '#fff',
					padding: '0.2rem 0.6rem',
					borderRadius: '4px',
					fontSize: '0.75rem',
					fontWeight: 'bold',
					marginBottom: '0.5rem',
					textTransform: 'uppercase',
				},
			}, badgeText),
			el('h3', { style: { margin: '0.25rem 0 0.5rem', color: '#0b1120' } }, title),
			el('p', { style: { margin: 0, color: '#64748b', fontSize: '0.9rem' } }, description)
		);
	};

	// 1. Hero Block
	registerBlockType('legal/hero', {
		edit: function (props) {
			const { attributes, setAttributes } = props;
			const { badge, title, subtitle, buttonText } = attributes;

			return el(
				Fragment,
				null,
				el(
					InspectorControls,
					null,
					el(
						PanelBody,
						{ title: __('Параметры баннера', 'legal-wordpress'), initialOpen: true },
						el(TextControl, {
							label: __('Бейдж', 'legal-wordpress'),
							value: badge,
							onChange: (val) => setAttributes({ badge: val }),
						}),
						el(TextControl, {
							label: __('Заголовок', 'legal-wordpress'),
							value: title,
							onChange: (val) => setAttributes({ title: val }),
						}),
						el(TextControl, {
							label: __('Подзаголовок', 'legal-wordpress'),
							value: subtitle,
							onChange: (val) => setAttributes({ subtitle: val }),
						}),
						el(TextControl, {
							label: __('Текст кнопки', 'legal-wordpress'),
							value: buttonText,
							onChange: (val) => setAttributes({ buttonText: val }),
						})
					)
				),
				createBlockPreview('LEGAL THEME BLOCK', title || 'Квалифицированная правовая защита', subtitle)
			);
		},
		save: function () {
			return null;
		},
	});

	// 2. Stats Block
	registerBlockType('legal/stats', {
		edit: function (props) {
			const { attributes, setAttributes } = props;
			const { num1, label1, num2, label2, num3, label3, num4, label4 } = attributes;

			return el(
				Fragment,
				null,
				el(
					InspectorControls,
					null,
					el(
						PanelBody,
						{ title: __('Показатели и статистика', 'legal-wordpress'), initialOpen: true },
						el(TextControl, {
							label: __('Метрика 1 (Значение)', 'legal-wordpress'),
							value: num1 || '14+',
							onChange: (val) => setAttributes({ num1: val }),
						}),
						el(TextControl, {
							label: __('Метрика 1 (Подпись)', 'legal-wordpress'),
							value: label1 || 'Лет юридической практики',
							onChange: (val) => setAttributes({ label1: val }),
						}),
						el(TextControl, {
							label: __('Метрика 2 (Значение)', 'legal-wordpress'),
							value: num2 || '98.4%',
							onChange: (val) => setAttributes({ num2: val }),
						}),
						el(TextControl, {
							label: __('Метрика 2 (Подпись)', 'legal-wordpress'),
							value: label2 || 'Выигранных дел в судах',
							onChange: (val) => setAttributes({ label2: val }),
						}),
						el(TextControl, {
							label: __('Метрика 3 (Значение)', 'legal-wordpress'),
							value: num3 || '2.8 млрд ₽',
							onChange: (val) => setAttributes({ num3: val }),
						}),
						el(TextControl, {
							label: __('Метрика 3 (Подпись)', 'legal-wordpress'),
							value: label3 || 'Сохраненных активов',
							onChange: (val) => setAttributes({ label3: val }),
						}),
						el(TextControl, {
							label: __('Метрика 4 (Значение)', 'legal-wordpress'),
							value: num4 || '3 500+',
							onChange: (val) => setAttributes({ num4: val }),
						}),
						el(TextControl, {
							label: __('Метрика 4 (Подпись)', 'legal-wordpress'),
							value: label4 || 'Успешных соглашений',
							onChange: (val) => setAttributes({ label4: val }),
						})
					)
				),
				createBlockPreview(
					'LEGAL THEME BLOCK',
					'Ключевые показатели и статистика доверия',
					(num1 || '14+') + ' ' + (label1 || 'Лет') + ' • ' + (num2 || '98.4%') + ' • ' + (num3 || '2.8 млрд ₽')
				)
			);
		},
		save: function () {
			return null;
		},
	});

	// 3. Services Block
	registerBlockType('legal/services', {
		edit: function (props) {
			const { attributes, setAttributes } = props;
			const { title, subtitle } = attributes;

			return el(
				Fragment,
				null,
				el(
					InspectorControls,
					null,
					el(
						PanelBody,
						{ title: __('Настройки услуг', 'legal-wordpress'), initialOpen: true },
						el(TextControl, {
							label: __('Заголовок', 'legal-wordpress'),
							value: title,
							onChange: (val) => setAttributes({ title: val }),
						}),
						el(TextControl, {
							label: __('Подзаголовок', 'legal-wordpress'),
							value: subtitle,
							onChange: (val) => setAttributes({ subtitle: val }),
						})
					)
				),
				createBlockPreview(
					'LEGAL THEME BLOCK',
					title || 'Направления юридической практики',
					subtitle || 'Сетка 6 ключевых практик с кнопками консультации и модальным окном'
				)
			);
		},
		save: function () {
			return null;
		},
	});

	// 4. Process Block
	registerBlockType('legal/process', {
		edit: function (props) {
			const { attributes, setAttributes } = props;
			const { title, subtitle } = attributes;

			return el(
				Fragment,
				null,
				el(
					InspectorControls,
					null,
					el(
						PanelBody,
						{ title: __('Настройки этапов', 'legal-wordpress'), initialOpen: true },
						el(TextControl, {
							label: __('Заголовок', 'legal-wordpress'),
							value: title,
							onChange: (val) => setAttributes({ title: val }),
						}),
						el(TextControl, {
							label: __('Подзаголовок', 'legal-wordpress'),
							value: subtitle,
							onChange: (val) => setAttributes({ subtitle: val }),
						})
					)
				),
				createBlockPreview(
					'LEGAL THEME BLOCK',
					title || 'Этапы ведения дела (Process Timeline)',
					subtitle || '4 пошаговых этапа от правового анализа до судебного решения'
				)
			);
		},
		save: function () {
			return null;
		},
	});

	// 5. FAQ Block
	registerBlockType('legal/faq', {
		edit: function (props) {
			const { attributes, setAttributes } = props;
			const { title, generateSchema } = attributes;

			return el(
				Fragment,
				null,
				el(
					InspectorControls,
					null,
					el(
						PanelBody,
						{ title: __('Настройки FAQ & SEO', 'legal-wordpress'), initialOpen: true },
						el(TextControl, {
							label: __('Заголовок', 'legal-wordpress'),
							value: title,
							onChange: (val) => setAttributes({ title: val }),
						}),
						el(ToggleControl, {
							label: __('Генерировать Schema.org FAQPage (JSON-LD)', 'legal-wordpress'),
							checked: generateSchema,
							onChange: (val) => setAttributes({ generateSchema: val }),
						})
					)
				),
				createBlockPreview(
					'LEGAL THEME BLOCK',
					title || 'Юридический FAQ (Аккордеон + Schema.org)',
					'Интерактивный аккордеон с автоматической разметкой FAQPage для Google Rich Snippets'
				)
			);
		},
		save: function () {
			return null;
		},
	});

	// 6. Reviews Block
	registerBlockType('legal/reviews', {
		edit: function (props) {
			const { attributes, setAttributes } = props;
			const { title, subtitle } = attributes;

			return el(
				Fragment,
				null,
				el(
					InspectorControls,
					null,
					el(
						PanelBody,
						{ title: __('Настройки отзывов', 'legal-wordpress'), initialOpen: true },
						el(TextControl, {
							label: __('Заголовок', 'legal-wordpress'),
							value: title,
							onChange: (val) => setAttributes({ title: val }),
						}),
						el(TextControl, {
							label: __('Подзаголовок', 'legal-wordpress'),
							value: subtitle,
							onChange: (val) => setAttributes({ subtitle: val }),
						})
					)
				),
				createBlockPreview(
					'LEGAL THEME BLOCK',
					title || 'Слайдер отзывов доверителей',
					subtitle || 'Адаптивная карусель отзывов клиентов на Swiper'
				)
			);
		},
		save: function () {
			return null;
		},
	});
})(window.wp);
