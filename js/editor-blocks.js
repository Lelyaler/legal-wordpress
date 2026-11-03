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
	const { InspectorControls, RichText, useBlockProps } = blockEditor;
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
					userSelect: 'none',
				},
			},
			el('span', null, '⚖️ ' + badgeText),
			el('span', { style: { opacity: 0.85, fontSize: '11px', textTransform: 'none' } }, hint || __('Кликните на текст для редактирования', 'legal-wordpress'))
		);
	};

	// 1. HERO BLOCK
	registerBlockType('legal/hero', {
		edit: function (props) {
			const { attributes, setAttributes } = props;
			const badge = attributes.badge !== undefined ? attributes.badge : 'Адвокатская практика с 2012 года';
			const title = attributes.title !== undefined ? attributes.title : 'Квалифицированная правовая защита';
			const subtitle = attributes.subtitle !== undefined ? attributes.subtitle : 'Арбитражные споры, банкротство, сопровождение сделок и защита бизнеса в судах всех инстанций.';
			const description = attributes.description !== undefined ? attributes.description : 'Профессиональная юридическая помощь по любым правовым вопросам. Наша команда опытных адвокатов обеспечивает качественное сопровождение, минимизирует риски и гарантирует надежную защиту ваших законных прав и активов в суде.';
			const buttonText = attributes.buttonText !== undefined ? attributes.buttonText : 'Записаться на консультацию';

			const blockProps = useBlockProps ? useBlockProps({
				className: 'legal-editor-block legal-editor-hero',
				style: {
					border: '1px solid #1e3a8a',
					borderRadius: '8px',
					overflow: 'hidden',
					margin: '16px 0',
					boxShadow: '0 4px 14px rgba(11, 17, 32, 0.08)',
				},
			}) : {
				style: {
					border: '1px solid #1e3a8a',
					borderRadius: '8px',
					overflow: 'hidden',
					margin: '16px 0',
				},
			};

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
					blockProps,
					blockHeader('Hero Banner', __('Кликните на любой текст для изменения', 'legal-wordpress')),
					el(
						'div',
						{
							style: {
								backgroundColor: '#0b1120',
								color: '#ffffff',
								padding: '36px 24px',
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
								marginBottom: '10px',
								cursor: 'text',
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
								margin: '8px 0 14px',
								cursor: 'text',
							},
						}),
						el(RichText, {
							tagName: 'p',
							value: subtitle,
							onChange: (val) => setAttributes({ subtitle: val }),
							placeholder: __('Арбитражные споры, банкротство, защита бизнеса...', 'legal-wordpress'),
							style: {
								color: '#e2e8f0',
								fontSize: '17px',
								lineHeight: '1.4',
								marginBottom: '12px',
								cursor: 'text',
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
								margin: '0 auto 20px',
								cursor: 'text',
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
									padding: '10px 20px',
									borderRadius: '6px',
									fontWeight: '700',
									fontSize: '13px',
									textTransform: 'uppercase',
									cursor: 'text',
								},
							}),
							el(
								'span',
								{
									style: {
										display: 'inline-block',
										border: '1px solid rgba(255,255,255,0.4)',
										color: '#ffffff',
										padding: '10px 18px',
										borderRadius: '6px',
										fontSize: '13px',
										textTransform: 'uppercase',
										opacity: 0.8,
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
			const num1 = attributes.num1 !== undefined ? attributes.num1 : '14+';
			const label1 = attributes.label1 !== undefined ? attributes.label1 : 'Лет юридической практики';
			const desc1 = attributes.desc1 !== undefined ? attributes.desc1 : 'Успешно защищаем интересы доверителей с 2012 года';

			const num2 = attributes.num2 !== undefined ? attributes.num2 : '98.4%';
			const label2 = attributes.label2 !== undefined ? attributes.label2 : 'Выигранных дел в судах';
			const desc2 = attributes.desc2 !== undefined ? attributes.desc2 : 'Достигаем поставленных целей на любой стадии процесса';

			const num3 = attributes.num3 !== undefined ? attributes.num3 : '2.8 млрд ₽';
			const label3 = attributes.label3 !== undefined ? attributes.label3 : 'Сохраненных активов';
			const desc3 = attributes.desc3 !== undefined ? attributes.desc3 : 'Предотвратили финансовые потери клиентов по всей РФ';

			const num4 = attributes.num4 !== undefined ? attributes.num4 : '3 500+';
			const label4 = attributes.label4 !== undefined ? attributes.label4 : 'Успешных соглашений';
			const desc4 = attributes.desc4 !== undefined ? attributes.desc4 : 'Доверие физических лиц и ведущих предприятий';

			const blockProps = useBlockProps ? useBlockProps({
				className: 'legal-editor-block legal-editor-stats',
				style: {
					border: '1px solid #cbd5e1',
					borderRadius: '8px',
					overflow: 'hidden',
					margin: '16px 0',
				},
			}) : {
				style: {
					border: '1px solid #cbd5e1',
					borderRadius: '8px',
					overflow: 'hidden',
					margin: '16px 0',
				},
			};

			const renderStatCard = (valNum, keyNum, valLabel, keyLabel, valDesc, keyDesc) => {
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
						value: valNum,
						onChange: (val) => setAttributes({ [keyNum]: val }),
						style: {
							color: '#1e3a8a',
							fontSize: '28px',
							fontWeight: '800',
							marginBottom: '4px',
							cursor: 'text',
						},
					}),
					el(RichText, {
						tagName: 'div',
						value: valLabel,
						onChange: (val) => setAttributes({ [keyLabel]: val }),
						style: {
							color: '#0b1120',
							fontSize: '14px',
							fontWeight: '700',
							marginBottom: '6px',
							cursor: 'text',
						},
					}),
					el(RichText, {
						tagName: 'div',
						value: valDesc,
						onChange: (val) => setAttributes({ [keyDesc]: val }),
						style: {
							color: '#64748b',
							fontSize: '12px',
							lineHeight: '1.4',
							cursor: 'text',
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
							value: num1,
							onChange: (val) => setAttributes({ num1: val }),
						}),
						el(TextControl, {
							label: __('Метрика 1 (Подпись)', 'legal-wordpress'),
							value: label1,
							onChange: (val) => setAttributes({ label1: val }),
						}),
						el(TextControl, {
							label: __('Метрика 2 (Значение)', 'legal-wordpress'),
							value: num2,
							onChange: (val) => setAttributes({ num2: val }),
						}),
						el(TextControl, {
							label: __('Метрика 2 (Подпись)', 'legal-wordpress'),
							value: label2,
							onChange: (val) => setAttributes({ label2: val }),
						}),
						el(TextControl, {
							label: __('Метрика 3 (Значение)', 'legal-wordpress'),
							value: num3,
							onChange: (val) => setAttributes({ num3: val }),
						}),
						el(TextControl, {
							label: __('Метрика 3 (Подпись)', 'legal-wordpress'),
							value: label3,
							onChange: (val) => setAttributes({ label3: val }),
						}),
						el(TextControl, {
							label: __('Метрика 4 (Значение)', 'legal-wordpress'),
							value: num4,
							onChange: (val) => setAttributes({ num4: val }),
						}),
						el(TextControl, {
							label: __('Метрика 4 (Подпись)', 'legal-wordpress'),
							value: label4,
							onChange: (val) => setAttributes({ label4: val }),
						})
					)
				),
				el(
					'div',
					blockProps,
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
						renderStatCard(num1, 'num1', label1, 'label1', desc1, 'desc1'),
						renderStatCard(num2, 'num2', label2, 'label2', desc2, 'desc2'),
						renderStatCard(num3, 'num3', label3, 'label3', desc3, 'desc3'),
						renderStatCard(num4, 'num4', label4, 'label4', desc4, 'desc4')
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
			const title = attributes.title !== undefined ? attributes.title : 'Направления юридической практики';
			const subtitle = attributes.subtitle !== undefined ? attributes.subtitle : 'Комплексная защита прав и законных интересов граждан и юридических лиц по ключевым отраслям права.';

			const blockProps = useBlockProps ? useBlockProps({
				className: 'legal-editor-block legal-editor-services',
				style: {
					border: '1px solid #cbd5e1',
					borderRadius: '8px',
					overflow: 'hidden',
					margin: '16px 0',
				},
			}) : {
				style: {
					border: '1px solid #cbd5e1',
					borderRadius: '8px',
					overflow: 'hidden',
					margin: '16px 0',
				},
			};

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
					blockProps,
					blockHeader('Practice Areas & Services', __('Редактирование заголовка и описания', 'legal-wordpress')),
					el(
						'div',
						{
							style: {
								backgroundColor: '#ffffff',
								padding: '28px 20px',
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
								display: 'inline-block',
								marginBottom: '4px',
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
								margin: '6px 0 10px',
								cursor: 'text',
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
								margin: '0 auto 18px',
								lineHeight: '1.5',
								cursor: 'text',
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
									marginTop: '16px',
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
			const title = attributes.title !== undefined ? attributes.title : 'Этапы ведения вашего дела';
			const subtitle = attributes.subtitle !== undefined ? attributes.subtitle : 'Прозрачный алгоритм работы от первичного правового анализа до фактического исполнения судебного решения.';

			const step1_title = attributes.step1_title !== undefined ? attributes.step1_title : 'Первичная консультация';
			const step1_desc = attributes.step1_desc !== undefined ? attributes.step1_desc : 'Изучаем обстоятельства спора, анализируем документы, выявляем скрытые правовые риски.';

			const step2_title = attributes.step2_title !== undefined ? attributes.step2_title : 'Стратегия и договор';
			const step2_desc = attributes.step2_desc !== undefined ? attributes.step2_desc : 'Разрабатываем детальную правовую позицию, согласуем план действий и фиксируем стоимость.';

			const step3_title = attributes.step3_title !== undefined ? attributes.step3_title : 'Досудебная стадия';
			const step3_desc = attributes.step3_desc !== undefined ? attributes.step3_desc : 'Формируем мотивированную претензию, проводим переговоры со стороной оппонента.';

			const step4_title = attributes.step4_title !== undefined ? attributes.step4_title : 'Защита в суде';
			const step4_desc = attributes.step4_desc !== undefined ? attributes.step4_desc : 'Представляем ваши интересы во всех судебных заседаниях и инстанциях до победы.';

			const blockProps = useBlockProps ? useBlockProps({
				className: 'legal-editor-block legal-editor-process',
				style: {
					border: '1px solid #cbd5e1',
					borderRadius: '8px',
					overflow: 'hidden',
					margin: '16px 0',
				},
			}) : {
				style: {
					border: '1px solid #cbd5e1',
					borderRadius: '8px',
					overflow: 'hidden',
					margin: '16px 0',
				},
			};

			const renderStep = (num, valTitle, keyTitle, valDesc, keyDesc) => {
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
						value: valTitle,
						onChange: (val) => setAttributes({ [keyTitle]: val }),
						style: {
							fontSize: '15px',
							fontWeight: '800',
							color: '#0b1120',
							margin: '0 0 6px',
							cursor: 'text',
						},
					}),
					el(RichText, {
						tagName: 'p',
						value: valDesc,
						onChange: (val) => setAttributes({ [keyDesc]: val }),
						style: {
							fontSize: '13px',
							color: '#64748b',
							lineHeight: '1.4',
							margin: 0,
							cursor: 'text',
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
					blockProps,
					blockHeader('Working Process Timeline', __('Кликните на любой этап для изменения текста', 'legal-wordpress')),
					el(
						'div',
						{
							style: {
								backgroundColor: '#f8fafc',
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
								placeholder: __('Этапы ведения вашего дела', 'legal-wordpress'),
								style: {
									fontSize: '24px',
									fontWeight: '800',
									color: '#0b1120',
									textTransform: 'uppercase',
									margin: '0 0 6px',
									cursor: 'text',
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
									cursor: 'text',
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
							renderStep('01', step1_title, 'step1_title', step1_desc, 'step1_desc'),
							renderStep('02', step2_title, 'step2_title', step2_desc, 'step2_desc'),
							renderStep('03', step3_title, 'step3_title', step3_desc, 'step3_desc'),
							renderStep('04', step4_title, 'step4_title', step4_desc, 'step4_desc')
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
			const title = attributes.title !== undefined ? attributes.title : 'Часто задаваемые вопросы';
			const generateSchema = attributes.generateSchema !== undefined ? attributes.generateSchema : true;

			const faq1_q = attributes.faq1_q !== undefined ? attributes.faq1_q : 'Сколько стоит первичная консультация и что в неё входит?';
			const faq1_a = attributes.faq1_a !== undefined ? attributes.faq1_a : 'Первичная правовая консультация дежурного юриста проводится бесплатно. Мы знакомимся с обстоятельствами ситуации, проводим экспресс-аудит документов, оцениваем судебные риски.';

			const faq2_q = attributes.faq2_q !== undefined ? attributes.faq2_q : 'Даете ли вы гарантию 100% выигрыша судебного дела?';
			const faq2_a = attributes.faq2_a !== undefined ? attributes.faq2_a : 'По закону об адвокатуре ни один адвокат в РФ не имеет права давать 100% гарантию судебного решения. Однако мы беремся только за дела с доказанной правовой перспективой (98.4% побед).';

			const faq3_q = attributes.faq3_q !== undefined ? attributes.faq3_q : 'Как фиксируется цена и могут ли появиться скрытые доплаты?';
			const faq3_a = attributes.faq3_a !== undefined ? attributes.faq3_a : 'Все условия фиксируются в официальном договоре. Стоимость услуг является окончательной и не подлежит увеличению в ходе процесса.';

			const faq4_q = attributes.faq4_q !== undefined ? attributes.faq4_q : 'Обеспечивается ли тайна переданных документов и сведений?';
			const faq4_a = attributes.faq4_a !== undefined ? attributes.faq4_a : 'Да, абсолютная конфиденциальность гарантирована Федеральным законом № 63-ФЗ «Об адвокатской деятельности и адвокатуре в РФ». Адвокатская тайна бессрочна.';

			const blockProps = useBlockProps ? useBlockProps({
				className: 'legal-editor-block legal-editor-faq',
				style: {
					border: '1px solid #cbd5e1',
					borderRadius: '8px',
					overflow: 'hidden',
					margin: '16px 0',
				},
			}) : {
				style: {
					border: '1px solid #cbd5e1',
					borderRadius: '8px',
					overflow: 'hidden',
					margin: '16px 0',
				},
			};

			const renderFaqItem = (valQ, keyQ, valA, keyA) => {
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
							value: valQ,
							onChange: (val) => setAttributes({ [keyQ]: val }),
							style: {
								fontWeight: '700',
								fontSize: '14px',
								color: '#0b1120',
								cursor: 'text',
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
							value: valA,
							onChange: (val) => setAttributes({ [keyA]: val }),
							style: {
								fontSize: '13px',
								color: '#334155',
								lineHeight: '1.5',
								cursor: 'text',
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
					blockProps,
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
							{ style: { textAlign: 'center', marginBottom: '16px' } },
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
									cursor: 'text',
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
						renderFaqItem(faq1_q, 'faq1_q', faq1_a, 'faq1_a'),
						renderFaqItem(faq2_q, 'faq2_q', faq2_a, 'faq2_a'),
						renderFaqItem(faq3_q, 'faq3_q', faq3_a, 'faq3_a'),
						renderFaqItem(faq4_q, 'faq4_q', faq4_a, 'faq4_a')
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
			const title = attributes.title !== undefined ? attributes.title : 'Что о нас говорят клиенты';
			const subtitle = attributes.subtitle !== undefined ? attributes.subtitle : 'Опыт доверителей';

			const blockProps = useBlockProps ? useBlockProps({
				className: 'legal-editor-block legal-editor-reviews',
				style: {
					border: '1px solid #cbd5e1',
					borderRadius: '8px',
					overflow: 'hidden',
					margin: '16px 0',
				},
			}) : {
				style: {
					border: '1px solid #cbd5e1',
					borderRadius: '8px',
					overflow: 'hidden',
					margin: '16px 0',
				},
			};

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
					blockProps,
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
								display: 'inline-block',
								marginBottom: '4px',
							},
						}, subtitle),
						el(RichText, {
							tagName: 'h2',
							value: title,
							onChange: (val) => setAttributes({ title: val }),
							placeholder: __('Что о нас говорят клиенты', 'legal-wordpress'),
							style: {
								fontSize: '24px',
								fontWeight: '800',
								color: '#0b1120',
								margin: '4px 0 16px',
								cursor: 'text',
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
