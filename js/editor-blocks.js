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
		edit: function () {
			return createBlockPreview(
				'LEGAL THEME BLOCK',
				'Ключевые показатели и статистика доверия',
				'15+ лет практики • 98.4% побед в суде • 1 200+ доверителей • 2.8 млрд ₽ сохраненных активов'
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
