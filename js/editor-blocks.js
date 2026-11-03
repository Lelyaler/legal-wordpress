/**
 * Legal Corporate Theme - Gutenberg Editor Blocks
 * Native React block editor registration with inline RichText editing
 */

(function (wp) {
	'use strict';

	if (!wp || !wp.blocks || !wp.element) {
		return;
	}

	const { registerBlockType } = wp.blocks;
	const { createElement: el, Fragment } = wp.element;
	const blockEditor = wp.blockEditor || wp.editor;
	const { InspectorControls, RichText } = blockEditor;
	const { PanelBody, TextControl, ToggleControl, TextareaControl } = wp.components;
	const { __ } = wp.i18n;

	// Shared header badge helper for editor canvas
	const blockHeader = (badgeText, hint) => {
		return el(
			'div',
			{
				style: {
					display: 'flex',
					justifyContent: 'space-between',
					alignItems: 'center',
					padding: '8px 14px',
					background: '#1e3a8a',
					color: '#ffffff',
					borderRadius: '6px 6px 0 0',
					fontSize: '11px',
					fontWeight: '700',
					letterSpacing: '0.8px',
					textTransform: 'uppercase',
				},
			},
			el('span', null, '⚖️ ' + badgeText),
			el('span', { style: { opacity: 0.8, fontSize: '10px', textTransform: 'none' } }, hint || __('Кликните на любой текст для редактирования', 'legal-wordpress'))
		);
	};

	// 1. HERO BLOCK
	registerBlockType('legal/hero', {
		edit: function (props) {
			const { attributes, setAttributes } = props;
			const { badge, title, subtitle, description, buttonText } = attributes;

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
							label: __('Заголовок (H1)', 'legal-wordpress'),
							value: title,
							onChange: (val) => setAttributes({ title: val }),
						}),
						el(TextareaControl, {
							label: __('Подзаголовок', 'legal-wordpress'),
							value: subtitle,
							onChange: (val) => setAttributes({ subtitle: val }),
						}),
						el(TextareaControl, {
							label: __('Описание', 'legal-wordpress'),
							value: description,
							onChange: (val) => setAttributes({ description: val }),
						}),
						el(TextControl, {
							label: __('Текст кнопки', 'legal-wordpress'),
							value: buttonText,
							onChange: (val) => setAttributes({ buttonText: val }),
						})
					)
				),
				el(
					'div',
					{
						style: {
							border: '1px solid #1e3a8a',
							borderRadius: '8px',
							overflow: 'hidden',
							margin: '16px 0',
							boxShadow: '0 4px 14px rgba(11, 17, 32, 0.08)',
						},
					},
					blockHeader('Hero Banner', __('Прямое редактирование текста', 'legal-wordpress')),
					el(
						'div',
						{
							style: {
								backgroundColor: '#0b1120',
								color: '#ffffff',
								padding: '40px 30px',
								textAlign: 'center',
							},
						},
						el(RichText, {
							tagName: 'span',
							value: badge,
							onChange: (val) => setAttributes({ badge: val }),
							placeholder: __('Адвокатская практика с 2012 года', 'legal-wordpress'),
							style: {
								display: 'inline-block',
								color: '#93c5fd',
								fontSize: '13px',
								fontWeight: '800',
								textTransform: 'uppercase',
								letterSpacing: '1.5px',
								marginBottom: '12px',
							},
						}),
						el(RichText, {
							tagName: 'h1',
							value: title,
							onChange: (val) => setAttributes({ title: val }),
							placeholder: __('Квалифицированная правовая защита', 'legal-wordpress'),
							style: {
								color: '#60a5fa',
								fontSize: '32px',
								fontWeight: '800',
								lineHeight: '1.2',
								margin: '10px 0 16px',
							},
						}),
						el(RichText, {
							tagName: 'p',
							value: subtitle,
							onChange: (val) => setAttributes({ subtitle: val }),
							placeholder: __('Арбитражные споры, банкротство, защита бизнеса...', 'legal-wordpress'),
							style: {
								color: '#e2e8f0',
								fontSize: '18px',
								lineHeight: '1.4',
								marginBottom: '14px',
							},
						}),
						el(RichText, {
							tagName: 'p',
							value: description,
							onChange: (val) => setAttributes({ description: val }),
							placeholder: __('Профессиональная юридическая помощь по любым правовым вопросам...', 'legal-wordpress'),
							style: {
								color: '#94a3b8',
								fontSize: '14px',
								lineHeight: '1.6',
								maxWidth: '700px',
								margin: '0 auto 24px',
							},
						}),
						el(
							'div',
							{ style: { display: 'flex', justifyContent: 'center', gap: '12px' } },
							el(RichText, {
								tagName: 'span',
								value: buttonText,
								onChange: (val) => setAttributes({ buttonText: val }),
								placeholder: __('Записаться на консультацию', 'legal-wordpress'),
								style: {
									display: 'inline-block',
									backgroundColor: '#1e3a8a',
									color: '#ffffff',
									padding: '12px 24px',
									borderRadius: '6px',
									fontWeight: '700',
									fontSize: '13px',
									textTransform: 'uppercase',
								},
							}),
							el(
								'span',
								{
									style: {
										display: 'inline-block',
										border: '1px solid rgba(255,255,255,0.4)',
										color: '#ffffff',
										padding: '12px 20px',
										borderRadius: '6px',
										fontSize: '13px',
										textTransform: 'uppercase',
									},
								},
								__('Все услуги', 'legal-wordpress')
							)
						)
					)
				)
			);
		},
		save: function () {
			return null;
		},
	});

	// 2. STATS BLOCK
	registerBlockType('legal/stats', {
		edit: function (props) {
			const { attributes, setAttributes } = props;
			const { num1, label1, desc1, num2, label2, desc2, num3, label3, desc3, num4, label4, desc4 } = attributes;

			const renderStatCard = (numKey, labelKey, descKey, defaultNum, defaultLabel, defaultDesc) => {
				return el(
					'div',
					{
						style: {
							background: '#ffffff',
							padding: '18px',
							borderRadius: '8px',
							boxShadow: '0 2px 8px rgba(0,0,0,0.06)',
							textAlign: 'center',
						},
					},
					el(RichText, {
						tagName: 'div',
						value: attributes[numKey] || defaultNum,
						onChange: (val) => setAttributes({ [numKey]: val }),
						style: {
							color: '#1e3a8a',
							fontSize: '28px',
							fontWeight: '800',
							marginBottom: '4px',
						},
					}),
					el(RichText, {
						tagName: 'div',
						value: attributes[labelKey] || defaultLabel,
						onChange: (val) => setAttributes({ [labelKey]: val }),
						style: {
							color: '#0b1120',
							fontSize: '14px',
							fontWeight: '700',
							marginBottom: '6px',
						},
					}),
					el(RichText, {
						tagName: 'div',
						value: attributes[descKey] || defaultDesc,
						onChange: (val) => setAttributes({ [descKey]: val }),
						style: {
							color: '#64748b',
							fontSize: '12px',
							lineHeight: '1.4',
						},
					})
				);
			};

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
				el(
					'div',
					{
						style: {
							border: '1px solid #cbd5e1',
							borderRadius: '8px',
							overflow: 'hidden',
							margin: '16px 0',
						},
					},
					blockHeader('Trust Statistics', __('Кликните на цифру или подпись для изменения', 'legal-wordpress')),
					el(
						'div',
						{
							style: {
								backgroundColor: '#edf2f7',
								padding: '24px 20px',
								display: 'grid',
								gridTemplateColumns: 'repeat(auto-fit, minmax(200px, 1fr))',
								gap: '16px',
							},
						},
						renderStatCard('num1', 'label1', 'desc1', '14+', 'Лет юридической практики', 'Успешно защищаем интересы доверителей с 2012 года'),
						renderStatCard('num2', 'label2', 'desc2', '98.4%', 'Выигранных дел в судах', 'Достигаем поставленных целей на любой стадии процесса'),
						renderStatCard('num3', 'label3', 'desc3', '2.8 млрд ₽', 'Сохраненных активов', 'Предотвратили финансовые потери клиентов по всей РФ'),
						renderStatCard('num4', 'label4', 'desc4', '3 500+', 'Успешных соглашений', 'Доверие физических лиц и ведущих предприятий')
					)
				)
			);
		},
		save: function () {
			return null;
		},
	});

	// 3. SERVICES BLOCK
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
						el(TextareaControl, {
							label: __('Подзаголовок', 'legal-wordpress'),
							value: subtitle,
							onChange: (val) => setAttributes({ subtitle: val }),
						})
					)
				),
				el(
					'div',
					{
						style: {
							border: '1px solid #cbd5e1',
							borderRadius: '8px',
							overflow: 'hidden',
							margin: '16px 0',
						},
					},
					blockHeader('Practice Areas & Services', __('Редактирование заголовка и описания', 'legal-wordpress')),
					el(
						'div',
						{
							style: {
								backgroundColor: '#ffffff',
								padding: '30px 20px',
								textAlign: 'center',
							},
						},
						el('span', {
							style: {
								color: '#1e3a8a',
								fontSize: '12px',
								fontWeight: '800',
								textTransform: 'uppercase',
								letterSpacing: '1.2px',
							},
						}, __('Правовая практика', 'legal-wordpress')),
						el(RichText, {
							tagName: 'h2',
							value: title,
							onChange: (val) => setAttributes({ title: val }),
							placeholder: __('Направления юридической практики', 'legal-wordpress'),
							style: {
								color: '#0b1120',
								fontSize: '26px',
								fontWeight: '800',
								textTransform: 'uppercase',
								margin: '8px 0 12px',
							},
						}),
						el(RichText, {
							tagName: 'p',
							value: subtitle,
							onChange: (val) => setAttributes({ subtitle: val }),
							placeholder: __('Комплексная защита прав и законных интересов граждан...', 'legal-wordpress'),
							style: {
								color: '#64748b',
								fontSize: '15px',
								maxWidth: '750px',
								margin: '0 auto 20px',
								lineHeight: '1.5',
							},
						}),
						el(
							'div',
							{
								style: {
									display: 'grid',
									gridTemplateColumns: 'repeat(auto-fit, minmax(220px, 1fr))',
									gap: '12px',
									textAlign: 'left',
									marginTop: '20px',
								},
							},
							['Банкротство граждан', 'Арбитражные споры', 'Сделки с недвижимостью', 'Защита бизнеса и активов', 'Налоговые споры', 'Корпоративное право'].map((s, idx) => {
								return el(
									'div',
									{
										key: idx,
										style: {
											background: '#f8fafc',
											border: '1px solid #e2e8f0',
											padding: '14px',
											borderRadius: '6px',
										},
									},
									el('div', { style: { fontWeight: '700', fontSize: '13px', color: '#0b1120', marginBottom: '4px' } }, '⚖️ ' + s),
									el('div', { style: { fontSize: '11px', color: '#64748b' } }, __('Карточка практики с вызовом консультации', 'legal-wordpress'))
								);
							})
						)
					)
				)
			);
		},
		save: function () {
			return null;
		},
	});

	// 4. PROCESS BLOCK
	registerBlockType('legal/process', {
		edit: function (props) {
			const { attributes, setAttributes } = props;
			const {
				title,
				subtitle,
				step1_title,
				step1_desc,
				step2_title,
				step2_desc,
				step3_title,
				step3_desc,
				step4_title,
				step4_desc,
			} = attributes;

			const renderStep = (num, titleKey, descKey, defTitle, defDesc) => {
				return el(
					'div',
					{
						style: {
							background: '#ffffff',
							border: '1px solid #e2e8f0',
							borderRadius: '8px',
							padding: '16px',
						},
					},
					el('div', {
						style: {
							fontSize: '18px',
							fontWeight: '800',
							color: '#1e3a8a',
							marginBottom: '6px',
						},
					}, num),
					el(RichText, {
						tagName: 'h4',
						value: attributes[titleKey] || defTitle,
						onChange: (val) => setAttributes({ [titleKey]: val }),
						style: {
							fontSize: '15px',
							fontWeight: '800',
							color: '#0b1120',
							margin: '0 0 6px',
						},
					}),
					el(RichText, {
						tagName: 'p',
						value: attributes[descKey] || defDesc,
						onChange: (val) => setAttributes({ [descKey]: val }),
						style: {
							fontSize: '13px',
							color: '#64748b',
							lineHeight: '1.4',
							margin: 0,
						},
					})
				);
			};

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
						el(TextareaControl, {
							label: __('Подзаголовок', 'legal-wordpress'),
							value: subtitle,
							onChange: (val) => setAttributes({ subtitle: val }),
						})
					)
				),
				el(
					'div',
					{
						style: {
							border: '1px solid #cbd5e1',
							borderRadius: '8px',
							overflow: 'hidden',
							margin: '16px 0',
						},
					},
					blockHeader('Working Process Timeline', __('Кликните на любой этап для изменения', 'legal-wordpress')),
					el(
						'div',
						{
							style: {
								backgroundColor: '#f8fafc',
								padding: '28px 20px',
							},
						},
						el(
							'div',
							{ style: { textAlign: 'center', marginBottom: '20px' } },
							el(RichText, {
								tagName: 'h2',
								value: title,
								onChange: (val) => setAttributes({ title: val }),
								placeholder: __('Этапы ведения вашего дела', 'legal-wordpress'),
								style: {
									fontSize: '24px',
									fontWeight: '800',
									color: '#0b1120',
									textTransform: 'uppercase',
									margin: '0 0 8px',
								},
							}),
							el(RichText, {
								tagName: 'p',
								value: subtitle,
								onChange: (val) => setAttributes({ subtitle: val }),
								placeholder: __('Прозрачный алгоритм работы...', 'legal-wordpress'),
								style: {
									fontSize: '14px',
									color: '#64748b',
									margin: 0,
								},
							})
						),
						el(
							'div',
							{
								style: {
									display: 'grid',
									gridTemplateColumns: 'repeat(auto-fit, minmax(220px, 1fr))',
									gap: '14px',
								},
							},
							renderStep('01', 'step1_title', 'step1_desc', 'Первичная консультация', 'Изучаем обстоятельства спора, анализируем документы, выявляем скрытые правовые риски.'),
							renderStep('02', 'step2_title', 'step2_desc', 'Стратегия и договор', 'Разрабатываем детальную правовую позицию, согласуем план действий и фиксируем стоимость.'),
							renderStep('03', 'step3_title', 'step3_desc', 'Досудебная стадия', 'Формируем мотивированную претензию, проводим переговоры со стороной оппонента.'),
							renderStep('04', 'step4_title', 'step4_desc', 'Защита в суде', 'Представляем ваши интересы во всех судебных заседаниях и инстанциях до победы.')
						)
					)
				)
			);
		},
		save: function () {
			return null;
		},
	});

	// 5. FAQ BLOCK
	registerBlockType('legal/faq', {
		edit: function (props) {
			const { attributes, setAttributes } = props;
			const {
				title,
				generateSchema,
				faq1_q,
				faq1_a,
				faq2_q,
				faq2_a,
				faq3_q,
				faq3_a,
				faq4_q,
				faq4_a,
			} = attributes;

			const renderFaqItem = (qKey, aKey, defQ, defA) => {
				return el(
					'div',
					{
						style: {
							border: '1px solid #e2e8f0',
							borderRadius: '6px',
							marginBottom: '10px',
							overflow: 'hidden',
						},
					},
					el(
						'div',
						{
							style: {
								background: '#f8fafc',
								padding: '12px 16px',
								borderBottom: '1px solid #e2e8f0',
							},
						},
						el(RichText, {
							tagName: 'div',
							value: attributes[qKey] || defQ,
							onChange: (val) => setAttributes({ [qKey]: val }),
							style: {
								fontWeight: '700',
								fontSize: '14px',
								color: '#0b1120',
							},
						})
					),
					el(
						'div',
						{
							style: {
								padding: '12px 16px',
								background: '#ffffff',
							},
						},
						el(RichText, {
							tagName: 'div',
							value: attributes[aKey] || defA,
							onChange: (val) => setAttributes({ [aKey]: val }),
							style: {
								fontSize: '13px',
								color: '#334155',
								lineHeight: '1.5',
							},
						})
					)
				);
			};

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
				el(
					'div',
					{
						style: {
							border: '1px solid #cbd5e1',
							borderRadius: '8px',
							overflow: 'hidden',
							margin: '16px 0',
						},
					},
					blockHeader('FAQ Accordion & Schema.org', __('Кликните на вопрос или ответ для редактирования', 'legal-wordpress')),
					el(
						'div',
						{
							style: {
								backgroundColor: '#ffffff',
								padding: '24px 20px',
							},
						},
						el(
							'div',
							{ style: { textAlign: 'center', marginBottom: '18px' } },
							el(RichText, {
								tagName: 'h2',
								value: title,
								onChange: (val) => setAttributes({ title: val }),
								placeholder: __('Часто задаваемые вопросы', 'legal-wordpress'),
								style: {
									fontSize: '24px',
									fontWeight: '800',
									color: '#0b1120',
									textTransform: 'uppercase',
									margin: '0 0 6px',
								},
							}),
							el('div', {
								style: {
									fontSize: '11px',
									color: generateSchema ? '#047857' : '#94a3b8',
									fontWeight: '600',
								},
							}, generateSchema ? '✓ Schema.org JSON-LD микроразметка активна' : '✕ Schema.org отключена')
						),
						renderFaqItem('faq1_q', 'faq1_a', 'Сколько стоит первичная консультация и что в неё входит?', 'Первичная правовая консультация дежурного юриста проводится бесплатно. Мы знакомимся с обстоятельствами ситуации, проводим экспресс-аудит документов, оцениваем судебные риски.'),
						renderFaqItem('faq2_q', 'faq2_a', 'Даете ли вы гарантию 100% выигрыша судебного дела?', 'По закону об адвокатуре ни один адвокат в РФ не имеет права давать 100% гарантию судебного решения. Однако мы беремся только за дела с доказанной правовой перспективой (98.4% побед).'),
						renderFaqItem('faq3_q', 'faq3_a', 'Как фиксируется цена и могут ли появиться скрытые доплаты?', 'Все условия фиксируются в официальном договоре. Стоимость услуг является окончательной и не подлежит увеличению в ходе процесса.'),
						renderFaqItem('faq4_q', 'faq4_a', 'Обеспечивается ли тайна переданных документов и сведений?', 'Да, абсолютная конфиденциальность гарантирована Федеральным законом № 63-ФЗ «Об адвокатской деятельности и адвокатуре в РФ». Адвокатская тайна бессрочна.')
					)
				)
			);
		},
		save: function () {
			return null;
		},
	});

	// 6. REVIEWS BLOCK
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
				el(
					'div',
					{
						style: {
							border: '1px solid #cbd5e1',
							borderRadius: '8px',
							overflow: 'hidden',
							margin: '16px 0',
						},
					},
					blockHeader('Client Testimonials Slider', __('Редактирование заголовка секции', 'legal-wordpress')),
					el(
						'div',
						{
							style: {
								backgroundColor: '#edf2f7',
								padding: '24px 20px',
							},
						},
						el('span', {
							style: {
								color: '#1e3a8a',
								fontSize: '11px',
								fontWeight: '800',
								textTransform: 'uppercase',
								letterSpacing: '1px',
							},
						}, __('Опыт доверителей', 'legal-wordpress')),
						el(RichText, {
							tagName: 'h2',
							value: title,
							onChange: (val) => setAttributes({ title: val }),
							placeholder: __('Что о нас говорят клиенты', 'legal-wordpress'),
							style: {
								fontSize: '24px',
								fontWeight: '800',
								color: '#0b1120',
								margin: '6px 0 16px',
							},
						}),
						el(
							'div',
							{
								style: {
									display: 'grid',
									gridTemplateColumns: 'repeat(auto-fit, minmax(240px, 1fr))',
									gap: '12px',
								},
							},
							[
								{ name: 'Михаил Воронов', role: 'Генеральный директор ООО «Вектор»', text: 'Адвокаты выиграли сложнейший арбитражный спор на 34 млн рублей. Высокий профессионализм!' },
								{ name: 'Елена Смирнова', role: 'Частный доверитель', text: 'Успешно завершили процедуру банкротства с полным списанием кредиторской задолженности.' },
								{ name: 'Артем Казаков', role: 'Учредитель ГК «СтройАльянс»', text: 'Защитили активы компании при рейдерской атаке. Рекомендую как надежных партнеров.' },
							].map((r, i) => {
								return el(
									'div',
									{
										key: i,
										style: {
											background: '#ffffff',
											padding: '14px',
											borderRadius: '6px',
											boxShadow: '0 1px 3px rgba(0,0,0,0.05)',
										},
									},
									el('div', { style: { color: '#f59e0b', fontSize: '13px', marginBottom: '4px' } }, '★★★★★'),
									el('p', { style: { fontSize: '12px', color: '#334155', fontStyle: 'italic', margin: '0 0 8px' } }, '«' + r.text + '»'),
									el('strong', { style: { fontSize: '12px', color: '#0b1120', display: 'block' } }, r.name),
									el('span', { style: { fontSize: '10px', color: '#64748b' } }, r.role)
								);
							})
						)
					)
				)
			);
		},
		save: function () {
			return null;
		},
	});
})(window.wp);
