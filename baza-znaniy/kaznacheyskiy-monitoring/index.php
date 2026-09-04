<?php /* Cache-Control задаёт .htaccess — единая точка правды для кэш-заголовков */ ?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Казначейский мониторинг: что это, меры реагирования и риски</title>
<meta name="description" content="Казначейский (бюджетный) мониторинг по статье 242.13-1 БК: кого касается, меры реагирования — приостановление операции и предупреждение, изменения с 2026 года.">
<meta name="author" content="Ярослав Михайлов">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1">
<meta name="theme-color" content="#F4F1EB" media="(prefers-color-scheme: light)">
<meta name="theme-color" content="#141310" media="(prefers-color-scheme: dark)">
<!-- PROD: canonical и og:url ОБЯЗАТЕЛЬНО менять под URL каждой статьи -->
<link rel="canonical" href="https://kaznaexpert.ru/baza-znaniy/kaznacheyskiy-monitoring/">
<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">
<link rel="apple-touch-icon" sizes="180x180" href="/img/apple-touch-icon.png">
<link rel="manifest" href="/site.webmanifest">

<!-- ╔═ ЯНДЕКС.МЕТРИКА (счётчик 94305898) — в проде вставить В ОБЩИЙ HEAD САЙТА, один раз ═╗ -->
<script>window.YM_ID = 94305898;</script>
<!-- Метрика 94305898 грузится из /js/cookie-consent.js (по согласию, единый счётчик сайта) -->
<!-- ╚════════════════════════════════════════════════════════════════════════════╝ -->
<!-- PER-PAGE: параметры этой страницы для группировок в Метрике (менять под каждую статью) -->
<script>window.YM_PARAMS = {page_type:"cluster", cluster:"kontrol"};</script>

<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "Article", "headline": "Казначейский мониторинг в системе казначейских платежей: как работает и меры реагирования", "description": "Казначейский (бюджетный) мониторинг по статье 242.13-1 БК: кого касается, меры реагирования — приостановление операции и предупреждение, изменения с 2026 года.", "inLanguage": "ru-RU", "datePublished": "2026-06-23", "dateModified": "2026-09-03", "author": {"@type": "Person", "name": "Ярослав Михайлов", "jobTitle": "Главный эксперт по казначейскому сопровождению", "url": "https://kaznaexpert.ru/komanda/mihailov-yaroslav/", "@id": "https://kaznaexpert.ru/komanda/mihailov-yaroslav/#person", "image": "https://kaznaexpert.ru/img/team/mihailov-photo.jpg"}, "publisher": {"@type": "Organization", "name": "КазнаЭксперт", "url": "https://kaznaexpert.ru", "logo": {"@type": "ImageObject", "url": "https://kaznaexpert.ru/img/logogold.png"}, "@id": "https://kaznaexpert.ru/#organization"}, "image": ["https://kaznaexpert.ru/img/og/baza-znaniy__kaznacheyskiy-monitoring-16x9.jpg", "https://kaznaexpert.ru/img/og/baza-znaniy__kaznacheyskiy-monitoring-4x3.webp", "https://kaznaexpert.ru/img/og/baza-znaniy__kaznacheyskiy-monitoring-1x1.webp"], "mainEntityOfPage": {"@type": "WebPage", "@id": "https://kaznaexpert.ru/baza-znaniy/kaznacheyskiy-monitoring/"}, "citation": ["Статья 242.13-1 Бюджетного кодекса РФ — казначейский мониторинг; введена Федеральным законом от 01.07.2021 № 244-ФЗ, наименование изменено Федеральным законом от 21.04.2025 № 84-ФЗ. consultant.ru, pravo.gov.ru.", "Глава 24.2 БК РФ «Система казначейских платежей» — мониторинг как часть функционирования системы. consultant.ru. КонсультантПлюс — https://www.consultant.ru/document/cons_doc_LAW_19702/", "Постановление Правительства РФ от 25.12.2021 № 2483 — порядок проведения бюджетного мониторинга и применения мер реагирования в целях недопущения финансовых нарушений участниками казначейского сопровождения. minfin.gov.ru, consultant.ru.", "Федеральный закон от 24.06.2025 № 158-ФЗ — новая редакция статьи 242.13-1 БК РФ с 1 сентября 2026 года. consultant.ru, pravo.gov.ru.", "Часть 9 статьи 5 Федерального закона от 28.11.2025 № 426-ФЗ «О федеральном бюджете на 2026 год и на плановый период 2027 и 2028 годов» — переходные особенности информирования о мерах реагирования до 1 сентября 2026 года. consultant.ru. КонсультантПлюс — https://www.consultant.ru/document/cons_doc_LAW_520057/d6ac9d5890b286aa7d2de73aa8fb56eecf6d610b/"]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "Главная", "item": "https://kaznaexpert.ru/"}, {"@type": "ListItem", "position": 2, "name": "База знаний", "item": "https://kaznaexpert.ru/baza-znaniy/"}, {"@type": "ListItem", "position": 3, "name": "Казначейский мониторинг", "item": "https://kaznaexpert.ru/baza-znaniy/kaznacheyskiy-monitoring/"}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [{"@type": "Question", "name": "Где посмотреть перечень признаков финансовых нарушений?", "acceptedAnswer": {"@type": "Answer", "text": "В классификаторе признаков финансовых нарушений участников системы казначейских платежей — его ведёт Федеральное казначейство в ГИИС «Электронный бюджет». Правила формирования классификатора с 1 сентября 2026 года устанавливает приказ Минфина от 26.06.2026 № 80н (прежний приказ от 23.06.2025 № 76н утратил силу). В приложении к Порядку два раздела: девять признаков для предупреждения и семь признаков для приостановления операций."}}, {"@type": "Question", "name": "Что такое казначейский мониторинг простыми словами?", "acceptedAnswer": {"@type": "Answer", "text": "Это наблюдение казначейства за операциями участников казначейского сопровождения, чтобы заранее выявлять риски финансовых нарушений. При срабатывании риска казначейство приостанавливает операцию или направляет предупреждение. Основание — статья 242.13-1 Бюджетного кодекса."}}, {"@type": "Question", "name": "Казначейский мониторинг и контрольный мониторинг — это одно и то же?", "acceptedAnswer": {"@type": "Answer", "text": "Нет. Казначейский мониторинг — система управления рисками при открытии лицевых счетов и операциях по ним (ст. 242.13-1 БК, Правила по ПП РФ от 27.07.2026 № 941), он действует в силу закона. Контрольный мониторинг — метод внутреннего государственного финансового контроля (ст. 267.1 БК, Правила по ПП РФ от 13.07.2026 № 875), в него входят добровольно по соглашению, и он заменяет проверки, ревизии и обследования по своему предмету."}}, {"@type": "Question", "name": "Чем казначейский мониторинг отличается от бюджетного?", "acceptedAnswer": {"@type": "Answer", "text": "Это один и тот же институт. Статья 242.13-1 раньше называлась «Бюджетный мониторинг в системе казначейских платежей», а с 21 апреля 2025 года — «Казначейский мониторинг». Механизм не изменился."}}, {"@type": "Question", "name": "Какие меры реагирования применяет казначейство?", "acceptedAnswer": {"@type": "Answer", "text": "Две: приостановление операции на лицевом счёте и предупреждение (информирование). Приостановление останавливает платёж до устранения причины, предупреждение — это сигнал о риске."}}, {"@type": "Question", "name": "Это штраф?", "acceptedAnswer": {"@type": "Answer", "text": "Нет. Мониторинг — превентивный контроль, а не наказание. Меры реагирования не являются административным штрафом; ответственность наступает по отдельным основаниям КоАП."}}, {"@type": "Question", "name": "Кого касается мониторинг?", "acceptedAnswer": {"@type": "Answer", "text": "Участников казначейского сопровождения — тех, кому открыты лицевые счета для работы с целевыми средствами: исполнителей и соисполнителей контрактов, получателей субсидий и бюджетных инвестиций."}}, {"@type": "Question", "name": "Чем мониторинг отличается от санкционирования?", "acceptedAnswer": {"@type": "Answer", "text": "Санкционирование проверяет конкретный платёж перед его проведением, а мониторинг — это непрерывная риск-оценка при открытии счёта и операциях. Это два параллельных фильтра."}}, {"@type": "Question", "name": "Что делать, если операцию приостановили?", "acceptedAnswer": {"@type": "Answer", "text": "Узнать причину в казначействе, проверить реквизиты распоряжения, собрать подтверждающие документы и направить пояснения. После устранения основания операцию проводят."}}, {"@type": "Question", "name": "Что изменилось с 1 сентября 2026 года?", "acceptedAnswer": {"@type": "Answer", "text": "Статья 242.13-1 действует в новой редакции (Федеральный закон от 24.06.2025 № 158-ФЗ). До этой даты установлены переходные особенности информирования о мерах реагирования (часть 9 статьи 5 Закона о бюджете на 2026 год)."}}, {"@type": "Question", "name": "Постановление № 2483 ещё действует?", "acceptedAnswer": {"@type": "Answer", "text": "Нет. С 1 сентября 2026 года правила казначейского мониторинга применяются по постановлению Правительства от 27.07.2026 № 941, а постановление от 25.12.2021 № 2483 утратило силу."}}, {"@type": "Question", "name": "Останется ли приостановление открытия лицевого счёта после 1 сентября 2026 года?", "acceptedAnswer": {"@type": "Answer", "text": "Сама мера остаётся в статье 242.13-1 Бюджетного кодекса, но её процедура уходит из Порядка № 44н: приказ Казначейства от 22.06.2026 № 14н отменяет пункты 31–33 и приложения № 4 – № 8. Порядок применения смотрите в постановлении № 941."}}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "HowTo", "name": "Что делать, если операцию приостановили по итогам мониторинга", "inLanguage": "ru-RU", "step": [{"@type": "HowToStep", "position": 1, "name": "Узнать причину приостановления", "text": "Уточнить в территориальном органе казначейства, какой индикатор риска сработал и какая мера реагирования применена к операции."}, {"@type": "HowToStep", "position": 2, "name": "Проверить реквизиты операции", "text": "Сверить идентификатор государственного контракта, назначение платежа, код целевых средств и сумму с условиями контракта."}, {"@type": "HowToStep", "position": 3, "name": "Собрать подтверждающие документы", "text": "Подготовить контракт, акты, счета и обоснование расхода, подтверждающие целевой характер операции."}, {"@type": "HowToStep", "position": 4, "name": "Направить пояснения в казначейство", "text": "Представить документы и пояснения, устраняющие основание для приостановления операции."}, {"@type": "HowToStep", "position": 5, "name": "Устранить ошибку в распоряжении", "text": "При необходимости переоформить распоряжение о совершении казначейского платежа с корректными реквизитами."}, {"@type": "HowToStep", "position": 6, "name": "Проконтролировать снятие меры", "text": "Убедиться, что операция проведена, и проверить движение средств в выписке из лицевого счёта."}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "DefinedTermSet", "name": "Глоссарий: казначейский мониторинг", "inLanguage": "ru-RU", "hasDefinedTerm": [{"@type": "DefinedTerm", "name": "Казначейский мониторинг", "description": "Наблюдение Федерального казначейства за операциями участников казначейского сопровождения для недопущения финансовых нарушений (статья 242.13-1 БК)."}, {"@type": "DefinedTerm", "name": "Бюджетный мониторинг", "description": "Прежнее наименование казначейского мониторинга до изменения статьи 242.13-1 в 2025 году; то же самое по сути."}, {"@type": "DefinedTerm", "name": "Меры реагирования", "description": "Действия казначейства при выявлении риска: приостановление операции на лицевом счёте и предупреждение (информирование)."}, {"@type": "DefinedTerm", "name": "Приостановление операции", "description": "Мера, при которой операция по лицевому счёту не проводится до устранения причин."}, {"@type": "DefinedTerm", "name": "Предупреждение", "description": "Информирование участника о выявленном риске при открытии лицевого счёта или при операции."}, {"@type": "DefinedTerm", "name": "Индикатор риска", "description": "Признак, по которому система оценивает операцию или открытие счёта как потенциально рисковые."}, {"@type": "DefinedTerm", "name": "Постановление № 2483", "description": "Постановление Правительства от 25.12.2021 № 2483 — порядок проведения мониторинга и применения мер реагирования."}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "Person", "name": "Ярослав Михайлов", "jobTitle": "Главный эксперт по казначейскому сопровождению", "worksFor": {"@id": "https://kaznaexpert.ru/#organization"}, "url": "https://kaznaexpert.ru/komanda/mihailov-yaroslav/", "sameAs": ["https://t.me/Kaznaexpert", "https://www.rusprofile.ru/ip/321784700367672"], "@id": "https://kaznaexpert.ru/komanda/mihailov-yaroslav/#person", "image": "https://kaznaexpert.ru/img/team/mihailov-photo.jpg"}
</script>

<link rel="preload" as="font" type="font/woff2" href="/fonts/inter-normal-400-cyrillic.woff2" crossorigin>
<link rel="preload" as="font" type="font/woff2" href="/fonts/playfairdisplay-normal-500-cyrillic.woff2" crossorigin>
<style id="fonts-crit">/* критические @font-face (кириллица, выше первого экрана): H1 Playfair 500 + body Inter 400. Остальные начертания — из fonts.css (async). */
@font-face{font-family:'Inter';font-style:normal;font-weight:400;font-display:swap;src:url(/fonts/inter-normal-400-cyrillic.woff2) format('woff2');unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}
@font-face{font-family:'Playfair Display';font-style:normal;font-weight:500;font-display:swap;src:url(/fonts/playfairdisplay-normal-500-cyrillic.woff2) format('woff2');unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}</style>
<link rel="preload" href="/css/fonts.css?v=<?= @filemtime($_SERVER['DOCUMENT_ROOT'].'/css/fonts.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="/css/fonts.css?v=<?= @filemtime($_SERVER['DOCUMENT_ROOT'].'/css/fonts.css') ?>"></noscript>
<style id="v2-crit">/* critical: v2-шапка (above-the-fold); полный v2.css грузится асинхронно */
.v2{--bg:#F4F1EB;--bg-alt:#EDE9E1;--paper:#FBF9F4;--ink:#1A1A1A;--ink-soft:#3A3A3A;--mute:#6E6B66;--mute-soft:#A8A39B;--hair:rgba(26,26,26,.10);--hair-strong:rgba(26,26,26,.18);--accent:#8B6F47;--font-display:"Playfair Display","Times New Roman",serif;--font-body:"Inter",-apple-system,BlinkMacSystemFont,"Segoe UI",sans-serif;--container:1280px;--gutter:80px;--space-5:24px}
.v2,.v2 *{box-sizing:border-box;margin:0;padding:0}
.v2{background:var(--bg);color:var(--ink);font-family:var(--font-body);font-size:17px;line-height:1.6;font-weight:400;letter-spacing:-.005em;-webkit-font-smoothing:antialiased}
.v2 a{color:inherit;text-decoration:none}
.v2-container{max-width:var(--container);margin:0 auto;padding:0 var(--gutter)}
.v2 .v2-header{position:sticky;top:0;z-index:100;padding:22px 0;background:rgba(244,241,235,.62);-webkit-backdrop-filter:saturate(180%) blur(20px);backdrop-filter:saturate(180%) blur(20px);border-bottom:1px solid var(--hair);overflow:visible}
.v2 .v2-header *{color:inherit}
.v2 .v2-header-inner{display:grid;grid-template-columns:auto 1fr auto;align-items:center;gap:var(--space-5)}
.v2 .v2-brand{display:inline-flex;align-items:center;color:var(--ink)}
.v2 .v2-brand-mark{height:44px;width:auto;display:block}
.v2 .v2-brand-mark img{height:100%;width:auto;display:block;object-fit:contain}
.v2 .v2-nav{display:flex;justify-content:center;gap:36px;list-style:none}
.v2 .v2-nav a{font-family:var(--font-body);font-size:14px;font-weight:400;color:var(--ink);letter-spacing:-.005em}
.v2 .v2-header-aside{display:flex;align-items:center;gap:22px}
.v2 .v2-header-aside .v2-phone-label{font-family:var(--font-body);font-size:11px;font-weight:500;letter-spacing:.18em;text-transform:uppercase;color:var(--mute)}
.v2 .v2-header-aside .v2-phone{font-family:var(--font-display);font-weight:500;font-size:19px;letter-spacing:-.005em;color:var(--ink)}
.v2 .v2-burger{display:none;flex-direction:column;justify-content:center;gap:5px;width:44px;height:44px;padding:0;border:0;background:transparent;cursor:pointer;margin-left:2px}
.v2 .v2-burger span{display:block;width:24px;height:1.5px;margin:0 auto;background:var(--ink)}
.v2 .v2-mobile-menu{display:none}
@media(max-width:920px){.v2 .v2-header{padding:14px 0}.v2 .v2-header-inner{grid-template-columns:1fr auto}.v2 .v2-nav,.v2 .v2-header-aside .v2-phone-label{display:none}.v2 .v2-brand-mark{height:36px}.v2 .v2-header-aside .v2-phone{font-size:16px}.v2 .v2-burger{display:flex}}/* header (премиум): герб + «КазнаЭксперт» по центру; номер крупно, подпись мелко под ним */.v2 .v2-brand{flex-direction:column;align-items:center;gap:7px}.v2 .v2-brand-mark{height:46px}.v2 .v2-brand::after{content:"КазнаЭксперт";font-family:var(--font-display);font-weight:500;font-size:18px;line-height:1;letter-spacing:.015em;color:var(--ink);white-space:nowrap;text-align:center}.v2 .v2-header-aside{flex-direction:column-reverse;align-items:flex-end;gap:4px}.v2 .v2-header-aside .v2-phone{font-family:var(--font-body);font-weight:500;font-size:19px;letter-spacing:.01em;color:var(--ink);white-space:nowrap;font-variant-numeric:tabular-nums lining-nums;font-feature-settings:"tnum" 1,"lnum" 1}.v2 .v2-header-aside .v2-phone-label{font-family:var(--font-body);font-weight:500;font-size:10.5px;letter-spacing:.15em;text-transform:uppercase;color:var(--mute);white-space:nowrap}.v2 .v2-nav{gap:26px}@media(max-width:920px){.v2 .v2-brand{flex-direction:row;gap:10px}.v2 .v2-brand-mark{height:36px}.v2 .v2-brand::after{display:none}.v2 .v2-header-aside{flex-direction:row;align-items:center;gap:14px}.v2 .v2-header-aside .v2-phone-label{display:none}.v2 .v2-header-aside .v2-phone{font-size:16px}}</style>
<link rel="preload" href="/css/v2.css?v=<?= @filemtime($_SERVER['DOCUMENT_ROOT'].'/css/v2.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="/css/v2.css?v=<?= @filemtime($_SERVER['DOCUMENT_ROOT'].'/css/v2.css') ?>"></noscript>

<meta property="og:type" content="article">
<meta property="og:locale" content="ru_RU">
<meta property="og:site_name" content="КазнаЭксперт">
<meta property="og:title" content="Казначейский мониторинг в системе казначейских платежей: как работает и меры реагирования">
<meta property="og:description" content="Казначейский мониторинг (бывший бюджетный мониторинг) по статье 242.13-1 Бюджетного кодекса: цель, на кого распространяется, как проводится, меры реагирования — приостановление операции на лицевом счёте и предупреждение, изменения с 1 сентября 2026 года.">
<meta property="og:url" content="https://kaznaexpert.ru/baza-znaniy/kaznacheyskiy-monitoring/">
<meta property="og:image" content="https://kaznaexpert.ru/img/og/baza-znaniy__kaznacheyskiy-monitoring-16x9.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="675">
<meta property="og:image:alt" content="Казначейский мониторинг в системе казначейских платежей: как работает и меры реагирования — КазнаЭксперт">
<meta property="article:published_time" content="2026-06-23T09:00:00+03:00">
<meta property="article:modified_time" content="2026-09-03T10:00:00+03:00">
<meta property="article:author" content="https://kaznaexpert.ru/komanda/mihailov-yaroslav/">
<meta property="article:section" content="База знаний">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Казначейский мониторинг в системе казначейских платежей: как работает и меры реагирования">
<meta name="twitter:description" content="Казначейский мониторинг (бывший бюджетный мониторинг) по статье 242.13-1 Бюджетного кодекса: цель, на кого распространяется, как проводится, меры реагирования — приостановление операции на лицевом счёте и предупреждение, изменения с 1 сентября 2026 года.">
<meta name="twitter:image" content="https://kaznaexpert.ru/img/og/baza-znaniy__kaznacheyskiy-monitoring-16x9.jpg">


<link rel="stylesheet" href="/css/article-shared.css?v=<?= @filemtime($_SERVER['DOCUMENT_ROOT'].'/css/article-shared.css') ?>">
</head>
<body>
<a href="#main" class="skip">Перейти к содержанию</a>
<div class="progress" id="progress" aria-hidden="true"></div>

<div class="v2">
<header class="v2-header">
          <div class="v2-container v2-header-inner">

            <a class="v2-brand" href="/" aria-label="КазнаЭксперт — на главную">
              <span class="v2-brand-mark">
                <img src="/img/logo-header.webp" srcset="/img/logo-header-1x.webp 1x, /img/logo-header.webp 2x" alt="КазнаЭксперт" loading="eager" width="60" height="44">
              </span>
            </a>

            <nav class="v2-nav" aria-label="Главная навигация">
              <a href="/#tariffs">Тарифы</a>
              <a href="/#process">Как работаем</a>
              <a href="/keysy/">Кейсы</a>
              <a href="/regiony/">Регионы</a>
              <a href="/baza-znaniy/">База знаний</a>
              <a href="/uslugi/kaznacheyskoe-soprovozhdenie/">Услуги</a>
              <a href="/o-kompanii/">О компании</a>
              <a href="/#faq">FAQ</a>
              <a href="/#contacts">Связаться</a>
            </nav>

            <div class="v2-header-aside">
              <span class="v2-phone-label">Эксперт с 2009 · Вся РФ</span>
              <a class="v2-phone" href="tel:+79818331010">+7 981 833-10-10</a>
              <button class="v2-burger" id="v2Burger" type="button" aria-label="Открыть меню" aria-expanded="false" aria-controls="v2MobileMenu">
                <span></span><span></span><span></span>
              </button>
            </div>

          </div>

          <!-- мобильное меню (раскрывается бургером) -->
          <nav class="v2-mobile-menu" id="v2MobileMenu" aria-label="Мобильная навигация">
            <a href="/#tariffs">Тарифы</a>
            <a href="/#process">Как работаем</a>
            <a href="/keysy/">Кейсы</a>
              <a href="/regiony/">Регионы</a>
              <a href="/baza-znaniy/">База знаний</a>
              <a href="/uslugi/kaznacheyskoe-soprovozhdenie/">Услуги</a>
              <a href="/o-kompanii/">О компании</a>
            <a href="/#faq">FAQ</a>
            <a class="v2-mobile-cta" href="/#contacts">Получить расчёт</a>
          </nav>
        </header>

<div class="layout">
  <nav class="crumbs" aria-label="Хлебные крошки"><a href="/">Главная</a> › <a href="/baza-znaniy/">База знаний</a> › Казначейский мониторинг</nav>

  <aside class="toc" aria-label="Содержание">
    <div class="toc__label">Содержание</div>
    <ul class="toc__list" id="tocList">
      <li><a href="#chto-takoe">Казначейский мониторинг: коротко</a></li>
      <li><a href="#osnova">Правовая основа: статья 242.13-1 БК и постановление № 2483</a></li>
      <li><a href="#terminy">Бюджетный или казначейский мониторинг: как менялось название</a></li>
      <li><a href="#kto-pod">Кого касается мониторинг</a></li>
      <li><a href="#kak-rabotaet">Как проводится мониторинг: система управления рисками</a></li>
      <li><a href="#mery">Меры реагирования: приостановление и предупреждение</a></li>
      <li><a href="#indikatory">Признаки финансовых нарушений: классификатор</a></li>
      <li><a href="#posledstviya">Последствия для бизнеса и как оспорить меру</a></li>
      <li><a href="#otlichiya">Мониторинг, санкционирование и госфинконтроль: разница</a></li>
      <li><a href="#izmeneniya">Что изменилось с 1 сентября 2026 года</a></li>
      <li><a href="#kak-snizit">Как снизить риск мер реагирования: чек-лист</a></li>
      <li><a href="#howto">Что делать при приостановлении операции: пошагово</a></li>
      <li><a href="#oshibki">Частые ошибки и заблуждения</a></li>
      <li><a href="#keys">Пример из практики</a></li>
      <li><a href="#glossary">Глоссарий</a></li>
      <li><a href="#faq">Частые вопросы</a></li>
    </ul>
  </aside>

  <article class="content" id="main">
    <div class="hero">
      <img class="hero__crest hero__crest--light" src="/img/logogold-crest.webp" alt="" aria-hidden="true" width="188" height="137" decoding="async" loading="lazy">
      <img class="hero__crest hero__crest--dark" src="/img/LogoWhite.png" alt="" aria-hidden="true" width="188" height="137" decoding="async" loading="lazy">
      <div class="eyebrow">База знаний · Санкционирование и контроль <span class="fresh">Актуально на 2026</span></div>
    <h1>Казначейский мониторинг в системе казначейских платежей: как работает и меры реагирования</h1>
    <div class="byline"><span class="av">ЯМ</span><span>Автор: <a href="/komanda/mihailov-yaroslav/">Ярослав Михайлов</a>, главный эксперт</span><span class="dot">·</span><span>15+ лет в Казначействе</span><span class="dot">·</span><span>15 мин чтения</span><span class="dot">·</span><span>Обновлено 3 сентября 2026</span></div>
    </div>

    <div class="share">
      <span class="share__label">Поделиться:</span>
      <a href="https://t.me/share/url?url=https%3A%2F%2Fkaznaexpert.ru%2Fbaza-znaniy%2Fkaznacheyskiy-monitoring%2F&amp;text=%D0%9A%D0%B0%D0%B7%D0%BD%D0%B0%D1%87%D0%B5%D0%B9%D1%81%D0%BA%D0%B8%D0%B9%20%D0%BC%D0%BE%D0%BD%D0%B8%D1%82%D0%BE%D1%80%D0%B8%D0%BD%D0%B3%20%28%D0%B1%D1%8E%D0%B4%D0%B6%D0%B5%D1%82%D0%BD%D1%8B%D0%B9%20%D0%BC%D0%BE%D0%BD%D0%B8%D1%82%D0%BE%D1%80%D0%B8%D0%BD%D0%B3%29%20%D0%BF%D0%BE%20%D1%81%D1%82%D0%B0%D1%82%D1%8C%D0%B5%20242.13-1%20%D0%91%D0%9A%3A%20%D1%87%D1%82%D0%BE%20%D1%8D%D1%82%D0%BE%2C%20%D0%BA%D0%BE%D0%B3%D0%BE%20%D0%BA%D0%B0%D1%81%D0%B0%D0%B5%D1%82%D1%81%D1%8F%2C%20%D0%BA%D0%B0%D0%BA%20%D0%BA%D0%B0%D0%B7%D0%BD%D0%B0%D1%87%D0%B5%D0%B9%D1%81%D1%82%D0%B2%D0%BE%20%D0%B2%D1%8B%D1%8F%D0%B2%D0%BB%D1%8F%D0%B5%D1%82%20%D1%80%D0%B8%D1%81%D0%BA%D0%B8%2C%20%D0%BA%D0%B0%D0%BA%D0%B8%D0%B5%20%D0%BC%D0%B5%D1%80%D1%8B%20%D1%80%D0%B5%D0%B0%D0%B3%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F%20%D0%BF%D1%80%D0%B8%D0%BC%D0%B5%D0%BD%D1%8F%D0%B5%D1%82%20%E2%80%94%20%D0%BF%D1%80%D0%B8%D0%BE%D1%81%D1%82%D0%B0%D0%BD%D0%BE%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5%20%D0%BE%D0%BF%D0%B5%D1%80%D0%B0%D1%86%D0%B8%D0%B8%20%D0%B8%20%D0%BF%D1%80%D0%B5%D0%B4%D1%83%D0%BF%D1%80%D0%B5%D0%B6%D0%B4%D0%B5%D0%BD%D0%B8%D0%B5%20%E2%80%94%20%D0%B8%20%D1%87%D1%82%D0%BE%20%D0%BC%D0%B5%D0%BD%D1%8F%D0%B5%D1%82%D1%81%D1%8F%20%D1%81%201%20%D1%81%D0%B5%D0%BD%D1%82%D1%8F%D0%B1%D1%80%D1%8F%202026%20%D0%B3%D0%BE%D0%B4%D0%B0" target="_blank" rel="noopener"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.56 8.25l-1.86 8.76c-.14.62-.5.77-1.02.48l-2.82-2.08-1.36 1.31c-.15.15-.28.28-.57.28l.2-2.89 5.27-4.76c.23-.2-.05-.32-.35-.12l-6.51 4.1-2.8-.88c-.61-.19-.62-.61.13-.9l10.95-4.22c.5-.18.95.12.79.85z"/></svg>Telegram</a>
      <button type="button" id="copyLink"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.07 0l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.07 0l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg><span>Копировать ссылку</span></button>
      <button type="button" id="printBtn"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9V2h12v7M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2M6 14h12v8H6z"/></svg>Скачать PDF</button>
    </div>

    <details class="mtoc"><summary>Содержание статьи</summary>
      <ol>
        <li><a href="#chto-takoe">Казначейский мониторинг: коротко</a></li><li><a href="#osnova">Правовая основа: статья 242.13-1 БК и постановление № 2483</a></li><li><a href="#terminy">Бюджетный или казначейский мониторинг: как менялось название</a></li><li><a href="#kto-pod">Кого касается мониторинг</a></li><li><a href="#kak-rabotaet">Как проводится мониторинг: система управления рисками</a></li><li><a href="#mery">Меры реагирования: приостановление и предупреждение</a></li><li><a href="#indikatory">Типовые основания для мер реагирования</a></li><li><a href="#posledstviya">Последствия для бизнеса и как оспорить меру</a></li><li><a href="#otlichiya">Мониторинг, санкционирование и госфинконтроль: разница</a></li><li><a href="#izmeneniya">Что изменилось с 1 сентября 2026 года</a></li><li><a href="#kak-snizit">Как снизить риск мер реагирования: чек-лист</a></li><li><a href="#howto">Что делать при приостановлении операции: пошагово</a></li><li><a href="#oshibki">Частые ошибки и заблуждения</a></li><li><a href="#keys">Пример из практики</a></li><li><a href="#glossary">Глоссарий</a></li><li><a href="#faq">Частые вопросы</a></li>
      </ol>
    </details>

    <div class="tldr">Казначейский мониторинг — это наблюдение Федерального казначейства за операциями участников казначейского сопровождения с целью не допустить финансовых нарушений. Он закреплён статьёй 242.13-1 Бюджетного кодекса, а порядок и меры реагирования определены постановлением Правительства № 2483. При выявлении риска казначейство применяет одну из двух мер: приостанавливает операцию на лицевом счёте или направляет предупреждение (информирование). Это превентивный контроль внутри системы казначейских платежей, а не штраф.<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a></div>

    <section class="keyfacts grain" aria-label="Ключевые факты">
      <h2>Коротко о главном</h2>
      <div class="keyfacts__grid">
        <div class="kf"><div class="kf__n">Ст. 242.13-1</div><div class="kf__t"><b>Основа</b> — мониторинг закреплён статьёй 242.13-1 Бюджетного кодекса</div></div>
        <div class="kf"><div class="kf__n">ПП № 2483</div><div class="kf__t"><b>Порядок</b> — правила и меры реагирования — постановление № 2483</div></div>
        <div class="kf"><div class="kf__n">Риск-контроль</div><div class="kf__t"><b>Суть</b> — автоматизированное наблюдение за операциями участников</div></div>
        <div class="kf"><div class="kf__n">2 меры</div><div class="kf__t"><b>Реагирование</b> — приостановление операции и предупреждение</div></div>
        <div class="kf"><div class="kf__n">С 01.09.2026</div><div class="kf__t"><b>Новое</b> — статья действует в новой редакции с 1 сентября 2026</div></div>
        <div class="kf"><div class="kf__n">Не штраф</div><div class="kf__t"><b>Природа</b> — это превентивный контроль, а не наказание</div></div>
      </div>
    </section>
    <!-- svc-cta:top -->
    <div class="svc-cta svc-cta--top" role="complementary" aria-label="Услуга КазнаЭксперт"><div class="svc-cta__body"><span class="svc-cta__eyebrow">Второе мнение</span><p class="svc-cta__title">Аудит казначейского сопровождения: найдём ошибки до проверки</p><p class="svc-cta__text">Проверяем сведения, платежи, коды, раздельный учёт и документы по контракту — с перечнем нарушений и планом исправления.</p><span class="svc-cta__price">160 000 ₽</span></div><a class="svc-cta__btn" href="/uslugi/audit-kaznacheyskogo-soprovozhdeniya/" onclick="try{ym(94305898,'reachGoal','svccta_click',{svc:'audit-kaznacheyskogo-soprovozhdeniya',pos:'top'})}catch(e){}">Заказать аудит →</a></div>
    <!-- /svc-cta:top -->


    <h2 id="chto-takoe">Казначейский мониторинг: коротко</h2>
    <div class="answer reveal">
      <p class="lead-p">Казначейский мониторинг — это наблюдение Федерального казначейства за операциями участников казначейского сопровождения, чтобы не допустить финансовых нарушений. Он закреплён статьёй 242.13-1 Бюджетного кодекса. При выявлении риска казначейство применяет меру реагирования: приостанавливает операцию на лицевом счёте либо направляет предупреждение. Порядок установлен постановлением Правительства № 2483.<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a><a class="fn" href="#ref-2" aria-label="Источник 2">[2]</a></p>
      <p>Главное отличие мониторинга от привычного контроля — он работает на упреждение и встроен прямо в систему казначейских платежей. Казначейство не ждёт, пока нарушение состоится, а оценивает риски при открытии лицевых счетов и при проведении операций. Это не наказание и не штраф, а превентивный фильтр, через который проходят целевые средства.</p>
    </div>

    <h2 id="osnova">Правовая основа: статья 242.13-1 БК и постановление № 941</h2>
    <p>Мониторинг описан в статье 242.13-1 Бюджетного кодекса. Норма входит в главу 24.2 «Система казначейских платежей», то есть мониторинг — это часть работы самой системы, а не отдельная проверочная процедура. Федеральное казначейство при открытии лицевых счетов и осуществлении операций в целях недопущения финансовых нарушений участниками казначейского сопровождения проводит мониторинг и применяет меры реагирования в порядке, установленном Правительством.<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a></p>
    <p>Сам порядок проведения и применения мер реагирования утверждён постановлением Правительства от 25.12.2021 № 2483.<a class="fn" href="#ref-3" aria-label="Источник 3">[3]</a> Статью 242.13-1 ввёл Федеральный закон от 01.07.2021 № 244-ФЗ — одновременно с запуском системы казначейских платежей.</p>
    <p>Постановление № 2483 больше не действует: с 1 сентября 2026 года оно утратило силу, а правила мониторинга применяются по постановлению Правительства от 27.07.2026 № 941.<a class="fn" href="#ref-6" aria-label="Источник 6">[6]</a> Разбор перехода — ниже, в разделе <a href="#izmeneniya">что изменилось с 1 сентября 2026 года</a>.</p>
    <table>
      <caption>Нормативная основа казначейского мониторинга</caption>
      <tr><th>Документ</th><th>Что регулирует</th></tr>
      <tr><td>Статья 242.13-1 БК РФ</td><td>Сам институт мониторинга и виды мер реагирования</td></tr>
      <tr><td>Постановление Правительства № 2483</td><td>Порядок проведения и применения мер реагирования — применялся до 31 августа 2026 года, утратил силу</td></tr>
      <tr><td>Постановление Правительства № 941</td><td>Правила проведения мониторинга — действуют с 1 сентября 2026 года, взамен № 2483</td></tr>
      <tr><td>Глава 24.2 БК РФ</td><td>Система казначейских платежей, в которую встроен мониторинг</td></tr>
    </table>
    <p>Где мониторинг находится в общей архитектуре расчётов, разобрано в материале <a href="/baza-znaniy/sistema-kaznacheyskih-platezhey/">система казначейских платежей</a>.</p>

    <h2 id="terminy">Бюджетный или казначейский мониторинг: как менялось название</h2>
    <p>В практике встречаются оба термина — «бюджетный мониторинг» и «казначейский мониторинг». Это не два разных механизма, а одно и то же на разных этапах. Изначально статья 242.13-1 называлась «Бюджетный мониторинг в системе казначейских платежей». Федеральный закон от 21.04.2025 № 84-ФЗ изменил наименование статьи на «Казначейский мониторинг».<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a></p>
    <p>Поэтому если вы встречаете формулировку «бюджетный мониторинг в системе казначейских платежей» в старых документах или письмах — речь идёт о том же институте. Актуальное название на 2026 год — казначейский мониторинг.</p>
    <table>
      <caption>Термины: бюджетный и казначейский мониторинг</caption>
      <tr><th>Период</th><th>Название статьи 242.13-1</th></tr>
      <tr><td>С 2021 года</td><td>«Бюджетный мониторинг в системе казначейских платежей»</td></tr>
      <tr><td>С 21 апреля 2025 года</td><td>«Казначейский мониторинг»</td></tr>
    </table>

    <h2 id="kto-pod">Кого касается мониторинг</h2>
    <p>Мониторинг направлен на участников казначейского сопровождения — то есть на тех, кому открыты лицевые счета в казначействе для работы с целевыми средствами. Это исполнители и соисполнители контрактов, получатели субсидий и бюджетных инвестиций, по операциям которых казначейство и наблюдает за рисками.</p>
    <p>Под мониторинг попадают как открытие лицевого счёта, так и каждая операция по нему. Иными словами, риск-оценка сопровождает целевые средства на всём пути: от момента, когда участник заходит в систему, до конкретных платежей. Кто именно относится к участникам сопровождения, разобрано в материале <a href="/baza-znaniy/kto-popadaet-pod-kaznacheyskoe-soprovozhdenie/">кто попадает под казначейское сопровождение</a>.</p>
    <p>Важно не путать адресата мониторинга и адресата санкционирования. Санкционирование касается конкретного распоряжения на платёж, а мониторинг охватывает поведение участника в целом — открытие счетов, структуру операций, типовые расходы. Поэтому даже формально безупречный по реквизитам платёж может попасть в зону внимания, если общая картина операций выглядит рискованной. Это не повод для тревоги, а причина вести расчёты прозрачно и подтверждать каждый расход документами.</p>

    <h2 id="kak-rabotaet">Как проводится мониторинг: система управления рисками</h2>
    <p>Казначейский мониторинг строится на риск-ориентированном подходе. Казначейство анализирует операции по набору признаков (индикаторов риска) и при их срабатывании реагирует. Технически это автоматизированная проверка внутри системы казначейских платежей, а не выездная ревизия.</p>
    <p>Упрощённо алгоритм выглядит так:</p>
    <ol>
      <li><b>Сбор данных.</b> Система видит сведения об участнике, контракте, целевых средствах и каждой операции.</li>
      <li><b>Оценка риска.</b> Операция или открытие счёта проверяются по индикаторам риска нарушения.</li>
      <li><b>Решение.</b> При отсутствии рисков операция проходит штатно; при срабатывании индикатора применяется мера реагирования.</li>
      <li><b>Информирование.</b> Сведения о применённых мерах доводятся до участника и уполномоченных органов.</li>
    </ol>
    <p>Важно, что мониторинг не заменяет санкционирование конкретного платежа — это два разных фильтра, которые работают параллельно.</p>

    <h2 id="mery">Меры реагирования: приостановление и предупреждение</h2>
    <p>Закон предусматривает две меры реагирования.<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a></p>
    <table>
      <caption>Меры реагирования при казначейском мониторинге</caption>
      <tr><th>Мера</th><th>Что означает</th><th>Когда применяется</th></tr>
      <tr><td>Приостановление операции</td><td>Операция по лицевому счёту не проводится до устранения причин</td><td>При выявлении риска по конкретной операции</td></tr>
      <tr><td>Предупреждение (информирование)</td><td>Участнику направляется уведомление о риске</td><td>При открытии лицевого счёта или при операциях</td></tr>
    </table>
    <p>Приостановление операции — самая чувствительная мера для бизнеса: платёж «зависает», пока участник не устранит причину или не подтвердит правомерность расхода. Предупреждение мягче — это сигнал, что операция или ситуация выглядит рискованной. Ни та, ни другая мера сама по себе не является штрафом: административная ответственность наступает по другим основаниям и разобрана в материале <a href="/baza-znaniy/otvetstvennost-za-narusheniya-goz/">ответственность за нарушения в сфере ГОЗ и казначейского сопровождения</a>.</p>

    <h2 id="indikatory">Признаки финансовых нарушений: официальный классификатор</h2>
    <p>Основания для мер реагирования не выдуманы инспектором на месте — они перечислены в классификаторе признаков финансовых нарушений. Классификатор ведёт Федеральное казначейство в ГИИС «Электронный бюджет», а правила его формирования утверждает Минфин. С 1 сентября 2026 года действует Порядок из приказа Минфина от 26.06.2026 № 80н, зарегистрированный Минюстом 12.08.2026 под № 87823 и опубликованный в тот же день на официальном портале правовой информации; прежний приказ от 23.06.2025 № 76н утратил силу.<a class="fn" href="#ref-8" aria-label="Источник 8">[8]</a></p>
    <p>Смена приказа — не косметика. Прежний классификатор описывал признаки нарушений <b>участников казначейского сопровождения</b>, новый — <b>участников системы казначейских платежей</b>. Периметр шире: он охватывает открытие лицевого счёта получателю средств из бюджета и участнику казначейского сопровождения (пункты 7 и 7.1 статьи 220.1 БК РФ) и операции на лицевых счетах участников системы казначейских платежей.<a class="fn" href="#ref-8" aria-label="Источник 8">[8]</a></p>

    <h3 id="klassifikator-ustroystvo">Как устроен классификатор: два раздела и пятизначный код</h3>
    <p>Классификатор ведётся в разрезе двух разделов: раздел 1 — открытие лицевого счёта получателю средств из бюджета и участнику казначейского сопровождения, раздел 2 — проведение операций на лицевом счёте участника системы казначейских платежей. У каждого признака пятизначный уникальный код.<a class="fn" href="#ref-8" aria-label="Источник 8">[8]</a></p>
    <table>
      <caption>Структура кода признака финансового нарушения (п. 4 Порядка, приказ № 80н)</caption>
      <thead><tr><th>Разряды</th><th>Что означают</th></tr></thead>
      <tbody>
        <tr><td>1–2</td><td>Код раздела классификатора (открытие счёта или операции по счёту)</td></tr>
        <tr><td>3–5</td><td>Порядковый номер признака внутри раздела</td></tr>
      </tbody>
    </table>
    <p>Код, однажды присвоенный признаку, повторно не используется — даже если признак из классификатора исключили. Помимо кода в классификаторе указываются федеральный орган, отвечающий за предоставление информации по признаку, и мера реагирования, которую применяет территориальный орган казначейства.</p>
    <h3 id="klassifikator-riski">Коды риска: 1, 2 и 3</h3>
    <p>Отдельным измерением классификатора идут коды рисков — они отвечают на вопрос, к какому последствию ведёт нарушение.<a class="fn" href="#ref-8" aria-label="Источник 8">[8]</a></p>
    <table>
      <caption>Коды рисков в классификаторе признаков финансовых нарушений</caption>
      <thead><tr><th>Код</th><th>Риск</th></tr></thead>
      <tbody>
        <tr><td>1</td><td>Недостижение результата предоставления субсидии, неисполнение или ненадлежащее исполнение контракта</td></tr>
        <tr><td>2</td><td>Образование неиспользованных остатков субсидии (лимитов бюджетных обязательств)</td></tr>
        <tr><td>3</td><td>Принятие обязательств сверх лимитов бюджетных обязательств</td></tr>
      </tbody>
    </table>

    <h3 id="priznaki-preduprezhdenie">Девять признаков, по которым выносят предупреждение</h3>
    <p>Первый раздел приложения к Порядку — признаки, по которым казначейство выносит предупреждение при открытии лицевого счёта или при операциях по нему. Общая логика: все они проверяются по внешним государственным реестрам, то есть срабатывают автоматически и без участия инспектора.<a class="fn" href="#ref-8" aria-label="Источник 8">[8]</a></p>
    <table>
      <caption>Признаки финансовых нарушений: предупреждение (раздел I приложения к приказу № 80н)</caption>
      <thead><tr><th>№</th><th>Признак</th><th>Где проверяется</th></tr></thead>
      <tbody>
        <tr><td>1</td><td>Сведения о реорганизации юридического лица — получателя средств или получателя денег от участника системы казначейских платежей</td><td>ЕГРЮЛ</td></tr>
        <tr><td>2</td><td>Лицо, имеющее право действовать без доверенности, значится дисквалифицированным</td><td>Реестр дисквалифицированных лиц (ч. 3 ст. 32.11 КоАП РФ)</td></tr>
        <tr><td>3</td><td>Место регистрации или нахождения — в государстве из перечня не выполняющих рекомендации ФАТФ</td><td>Перечень ФАТФ (приказ Росфинмониторинга от 10.11.2011 № 361)</td></tr>
        <tr><td>4</td><td>Возбуждено производство по делу о банкротстве</td><td>ЕГРЮЛ</td></tr>
        <tr><td>5</td><td>Сведения о лице внесены в реестр недобросовестных поставщиков</td><td>РНП в ЕИС (ПП РФ от 30.06.2021 № 1078)</td></tr>
        <tr><td>6</td><td>Банк России отнёс юридическое лицо или предпринимателя к группе высокого риска совершения подозрительных операций</td><td>Платформа «Знай своего клиента» (ст. 9.1 закона № 86-ФЗ)</td></tr>
        <tr><td>7</td><td>Место регистрации или нахождения — на территории недружественного государства</td><td>Перечень по распоряжению Правительства от 05.03.2022 № 430-р</td></tr>
        <tr><td>8</td><td>Привлечение к ответственности по статье 19.28 КоАП РФ в течение двух лет до дня подачи документов на открытие счёта или проведения операции</td><td>ЕИС в сфере закупок</td></tr>
        <tr><td>9</td><td>Запись о недостоверности сведений о руководителе</td><td>ЕГРЮЛ</td></tr>
      </tbody>
    </table>
    <p>Обратите внимание на охват: признаки проверяются не только по самому участнику казначейского сопровождения, но и по юридическому лицу, которое получает деньги от участника системы казначейских платежей. То есть контрагент из вашей цепочки способен вызвать меру реагирования по вашему счёту. Как это работает в кооперации — в разборе <a href="/baza-znaniy/soispolniteli-kooperaciya-goz/">соисполнителей и кооперации в ГОЗ</a>.</p>

    <h3 id="priznaki-priostanovlenie">Семь признаков, по которым приостанавливают операции</h3>
    <p>Второй раздел приложения — более жёсткая группа: по ней операции на лицевом счёте приостанавливаются. Первые три признака — про прекращение существования контрагента, остальные четыре считаются по данным ГИИС «Электронный бюджет» и завязаны на долю в цене контракта.<a class="fn" href="#ref-8" aria-label="Источник 8">[8]</a></p>
    <table>
      <caption>Признаки финансовых нарушений: приостановление операций (раздел II приложения к приказу № 80н)</caption>
      <thead><tr><th>№</th><th>Признак</th><th>Порог</th></tr></thead>
      <tbody>
        <tr><td>1</td><td>Сведения о ликвидации юридического лица</td><td>Факт записи в ЕГРЮЛ</td></tr>
        <tr><td>2</td><td>Исключение юридического лица или предпринимателя из ЕГРЮЛ (ЕГРИП)</td><td>Факт записи</td></tr>
        <tr><td>3</td><td>Признание банкротом либо прекращение деятельности предпринимателя в связи с решением суда о банкротстве гражданина</td><td>Факт записи в ЕГРЮЛ (ЕГРИП)</td></tr>
        <tr><td>4</td><td>Уплата налогов, сборов, таможенных платежей, страховых взносов и иных обязательных платежей с лицевого счёта</td><td>Суммарно свыше 50 % цены контракта (договора)</td></tr>
        <tr><td>5</td><td>Оплата труда физическим лицам с лицевого счёта</td><td>Суммарно свыше 50 % цены; исключение — контракты на НИОКР</td></tr>
        <tr><td>6</td><td>Перечисление прибыли по контракту гособоронзаказа после исполнения контракта или этапа и представления подтверждающих документов</td><td>Свыше 25 % цены контракта (договора)</td></tr>
        <tr><td>7</td><td>Место регистрации или нахождения получателя денег от участника системы казначейских платежей — в офшорной зоне</td><td>Перечень Минфина (приказ от 05.06.2023 № 86н)</td></tr>
      </tbody>
    </table>
    <p>Четвёртый и пятый признаки — самые неочевидные для добросовестного исполнителя. Оба считают долю от цены контракта, и оба легко перешагнуть на трудоёмком контракте с небольшой материальной составляющей: зарплата исполнителей выше половины цены — обычная ситуация, скажем, в проектировании. Исключение по НИОКР сделано именно поэтому, а остальным исполнителям приходится планировать выплаты и заранее готовить обоснование. Как правильно платить зарплату с лицевого счёта, разобрано отдельно: <a href="/baza-znaniy/zarplata-s-licevogo-scheta-pri-ks/">зарплата с лицевого счёта при казначейском сопровождении</a>. Про вывод прибыли по гособоронзаказу — в материале <a href="/baza-znaniy/vyvod-pribyli-pri-kaznacheyskom-soprovozhdenii/">вывод прибыли при казначейском сопровождении</a>.</p>

    <h3 id="indikatory-praktika">Что чаще всего срабатывает на практике</h3>
    <p>Помимо формальных признаков классификатора есть бытовая сторона: большинство «зависаний» платежа сводится к нескольким понятным группам ошибок в документах. Знание этих оснований помогает заранее настроить документооборот.</p>
    <table>
      <caption>Группы оснований, по которым чаще срабатывает мониторинг</caption>
      <tr><th>Группа</th><th>Что вызывает риск</th></tr>
      <tr><td>Реквизиты</td><td>Ошибки в идентификаторе государственного контракта, назначении платежа, коде целевых средств</td></tr>
      <tr><td>Несоответствие предмету</td><td>Расход не связан с предметом контракта или соглашения</td></tr>
      <tr><td>Авансы</td><td>Превышение разрешённого размера аванса, оплата без подтверждения</td></tr>
      <tr><td>Вывод средств</td><td>Попытка перечислить целевые средства на расчётный счёт вне разрешённых случаев</td></tr>
      <tr><td>Контрагенты</td><td>Платёж в пользу лица с признаками риска или вне цепочки кооперации</td></tr>
      <tr><td>Дробление</td><td>Разбиение платежей для обхода контроля</td></tr>
    </table>
    <p>Важно понимать: срабатывание индикатора — это не вывод о нарушении, а сигнал для проверки. Если расход правомерен и подтверждён документами, мера реагирования снимается. Какие расходы в принципе допустимы по целевым средствам, разобрано в материале <a href="/baza-znaniy/celevye-sredstva-kaznacheyskoe-soprovozhdenie/">целевые средства: что это, виды и режим</a>. Отдельный частый триггер — авансовые платежи: их контролируют строже, и порядок разобран в материале <a href="/baza-znaniy/avans-pri-kaznacheyskom-soprovozhdenii/">казначейское сопровождение авансовых платежей</a>.</p>

    <h2 id="posledstviya">Последствия для бизнеса и как оспорить меру</h2>
    <p>Для исполнителя контракта самое ощутимое последствие мониторинга — приостановление операции: платёж не проходит, а сроки расчётов с поставщиками и соисполнителями сдвигаются. Само по себе приостановление не означает вину и не влечёт штраф, но требует оперативной реакции, иначе под угрозу попадают обязательства по контракту.</p>
    <p>Алгоритм действий при несогласии с мерой строится на документах, а не на эмоциях. Сначала участник выясняет конкретное основание, затем подтверждает правомерность операции первичными документами и при необходимости исправляет реквизиты распоряжения. Если основание устранено, казначейство проводит операцию. При сохраняющемся споре участник вправе обжаловать действия должностных лиц в установленном порядке — административном или судебном.</p>
    <p>Чтобы приостановления не превращались в системную проблему, имеет смысл выстроить внутренний регламент: кто в компании отвечает за реквизиты распоряжений, как хранятся подтверждающие документы по каждой операции и кто взаимодействует с территориальным органом казначейства. Это снижает время простоя и количество спорных ситуаций. Общая логика расчётов в системе разобрана в материале <a href="/baza-znaniy/sistema-kaznacheyskih-platezhey/">система казначейских платежей</a>.</p>

    <h2 id="otlichiya">Мониторинг, санкционирование и госфинконтроль: разница</h2>
    <p>Три механизма контроля легко перепутать, потому что все связаны с казначейством. Разведём их по времени и сути.</p>
    <table>
      <caption>Три вида контроля казначейства</caption>
      <tr><th>Механизм</th><th>Когда</th><th>Что проверяет</th><th>Основание</th></tr>
      <tr><td>Санкционирование</td><td>Перед каждым платежом</td><td>Целевой характер конкретного расхода</td><td>П. 4 ст. 242.23 БК, порядок 214н</td></tr>
      <tr><td>Казначейский мониторинг</td><td>При открытии счёта и операциях</td><td>Риски нарушений (превентивно)</td><td>Ст. 242.13-1 БК, ПП № 2483</td></tr>
      <tr><td>Госфинконтроль</td><td>После операций</td><td>Законность и целевое использование (ревизия)</td><td>Ст. 269.2 БК</td></tr>
    </table>
    <p>Санкционирование — это «пропуск» каждого платежа; почему в нём отказывают, разобрано в материале <a href="/baza-znaniy/prichiny-otkaza-kaznacheystva-v-sankcionirovanii/">причины отказа казначейства в санкционировании</a>. Последующий госфинконтроль — это уже ревизии и проверки, им посвящён материал <a href="/baza-znaniy/finansovyy-kontrol-federalnogo-kaznachejstva/">финансовый контроль Федерального казначейства</a>. Мониторинг стоит между ними: он работает непрерывно и на упреждение.</p>

    <h2 id="izmeneniya">Что изменилось с 1 сентября 2026 года</h2>
    <p>Изменились сразу три уровня регулирования: статья 242.13-1 Бюджетного кодекса действует в новой редакции, порядок мониторинга переехал из постановления № 2483 в постановление № 941, а из Порядка открытия лицевых счетов № 44н процедуры мониторинга исключены целиком.</p>

    <h3 id="izm-941">Постановление № 941 вместо постановления № 2483</h3>
    <p>Правила проведения казначейского мониторинга утверждены постановлением Правительства от 27.07.2026 № 941 и применяются с 1 сентября 2026 года. С этой же даты постановление от 25.12.2021 № 2483 утратило силу.<a class="fn" href="#ref-6" aria-label="Источник 6">[6]</a> Ссылки на № 2483 в регламентах, договорах и учётной политике теперь ведут на недействующий акт — их нужно заменить на № 941.</p>
    <p>Сверка 1 сентября 2026 года: переход состоялся в заявленный срок. Правила по постановлению № 941 от 27.07.2026 применяются с этой даты, постановление № 2483 от 25.12.2021 (ред. от 09.06.2025) утратило силу, а изменения в Порядок № 44н внесены приказом Казначейства от 22.06.2026 № 14н, зарегистрированным в Минюсте 23.07.2026 под № 87587. Переносов и отсрочек по этому пакету не объявлялось.</p>
    <p>Новые Правила описывают проверку сведений при открытии лицевых счетов участникам системы казначейских платежей и при проведении операций по таким счетам, взаимодействие казначейства с финансовыми органами и государственными внебюджетными фондами, а также сроки принятия решений и направления уведомлений.</p>

    <h3 id="izm-bk">Новая редакция статьи 242.13-1 Бюджетного кодекса</h3>
    <p>Статья 242.13-1 изложена в новой редакции Федеральным законом от 24.06.2025 № 158-ФЗ; редакция вступает в силу 1 сентября 2026 года.<a class="fn" href="#ref-4" aria-label="Источник 4">[4]</a> До этой даты применяется редакция по Федеральному закону от 21.04.2025 № 84-ФЗ — та самая, что переименовала статью в «Казначейский мониторинг».</p>

    <h3 id="izm-44n">Мониторинг уходит из Порядка № 44н</h3>
    <p>Приказ Казначейства от 22.06.2026 № 14н с 1 сентября 2026 года признаёт утратившими силу пункты 7, 31–33, 35.1, 36 и 40 Порядка № 44н, а вместе с ними приложения № 4 – № 8 к Порядку.<a class="fn" href="#ref-7" aria-label="Источник 7">[7]</a> Это ровно те нормы и формы, по которым мониторинг работал на этапе открытия счёта.</p>
    <table>
      <caption>Нормы мониторинга, утрачивающие силу в Порядке № 44н с 1 сентября 2026 года</caption>
      <tr><th>Норма Порядка № 44н</th><th>Что регулировала до 1 сентября 2026 года</th></tr>
      <tr><td>Пункт 7</td><td>Общие положения о казначейском мониторинге при открытии лицевого счёта</td></tr>
      <tr><td>Пункты 31–33</td><td>Приостановление открытия счёта, уведомление о приостановлении (форма 0531361) и решение заказчика (форма 0531362) в срок до двух рабочих дней</td></tr>
      <tr><td>Пункт 35.1</td><td>Информирование органа финансового мониторинга об открытии счёта после приостановления (форма 0531363)</td></tr>
      <tr><td>Пункт 36</td><td>Проверка признаков финансовых нарушений при открытии счёта и Предупреждение (форма 0531378)</td></tr>
      <tr><td>Пункт 40</td><td>Проверка оснований при открытии счёта региональному участнику через финансовый орган субъекта</td></tr>
      <tr><td>Приложения № 4 – № 8</td><td>Формы уведомлений, информации и предупреждений мониторинга</td></tr>
    </table>

    <h3 id="izm-sroki">Что меняется в сроках при открытии счёта</h3>
    <p>Пункты 34 и 35 Порядка № 44н тот же приказ излагает в новой редакции. Возврат документов сохраняет срок «не позднее следующего рабочего дня после дня представления», но единственным основанием остаётся несоответствие требованиям пункта 30. Счёт по-прежнему открывается в день представления документов — оговорок про приостановление в норме больше нет.</p>
    <p>Как процедура открытия выглядит целиком, разобрано в материале <a href="/baza-znaniy/licevoy-schet-71-kak-otkryt/">как открыть лицевой счёт 71 в казначействе</a>.</p>

    <h3 id="izm-80n">Новый классификатор признаков финансовых нарушений</h3>
    <p>С той же даты — 1 сентября 2026 года — начинает действовать Порядок формирования и ведения классификатора признаков финансовых нарушений участников системы казначейских платежей (приказ Минфина от 26.06.2026 № 80н). Приказ от 23.06.2025 № 76н, по которому классификатор вёлся для участников казначейского сопровождения, утратил силу.<a class="fn" href="#ref-8" aria-label="Источник 8">[8]</a></p>
    <p>Для исполнителя это означает, что перечень признаков и мер реагирования нужно смотреть в новом приложении, а сам классификатор — в ГИИС «Электронный бюджет». Разбор структуры и обоих разделов приложения — <a href="#indikatory">выше по тексту</a>.</p>

    <h3 id="izm-praktika">Что это значит для исполнителя</h3>
    <p>Мониторинг не отменяют — его выносят в отдельный акт Правительства и распространяют на участников системы казначейских платежей шире. Практический эффект для исполнителя другой: процедура открытия счёта в Порядке № 44н становится короче, а основания и меры реагирования нужно смотреть в постановлении № 941, а не в приказе о лицевых счетах.</p>
    <p>На переходный период были установлены особенности: до 1 сентября 2026 года информация о применении мер реагирования направлялась получателям бюджетных средств, доводящим лимиты на предоставление целевых средств, а также юридическим лицам и индивидуальным предпринимателям — получателям таких средств. Это было закреплено в части 9 статьи 5 Федерального закона от 28.11.2025 № 426-ФЗ о федеральном бюджете на 2026 год; переходный период завершён.<a class="fn" href="#ref-5" aria-label="Источник 5">[5]</a></p>
    <p>Полный обзор бюджетных изменений года — в материале <a href="/baza-znaniy/kaznacheyskoe-soprovozhdenie-v-2026-godu/">казначейское сопровождение в 2026 году</a>.</p>

    <h3 id="km-vs-kontrolnyy">Казначейский мониторинг и контрольный мониторинг — разные вещи</h3>
    <p>Названия похожи настолько, что их уже путают в отраслевых публикациях, хотя оба режима ведёт одно ведомство. Казначейский мониторинг — это система управления рисками при открытии лицевых счетов и операциях по ним (статья 242.13-1 БК, Правила по постановлению Правительства от 27.07.2026 № 941). Контрольный мониторинг — метод внутреннего государственного финансового контроля по статье 267.1 БК, введённый Федеральным законом от 28.11.2025 № 432-ФЗ; Правила утверждены постановлением Правительства от 13.07.2026 № 875.</p>
    <table>
      <caption>Казначейский и контрольный мониторинг: чем различаются</caption>
      <thead><tr><th>Параметр</th><th>Казначейский мониторинг</th><th>Контрольный мониторинг</th></tr></thead>
      <tbody>
        <tr><td>Норма</td><td>Ст. 242.13-1 БК, ПП РФ № 941</td><td>Ст. 267.1 БК, ПП РФ № 875</td></tr>
        <tr><td>Кого касается</td><td>Участников системы казначейских платежей при открытии счёта и операциях</td><td>Крупных получателей бюджетных средств от 500 млн рублей</td></tr>
        <tr><td>Основание</td><td>Действует в силу закона, согласия не требуется</td><td>Добровольное соглашение с казначейством</td></tr>
        <tr><td>Что на выходе</td><td>Меры реагирования: предупреждение, приостановление операций</td><td>Мотивированное мнение с рекомендациями и сроком исполнения</td></tr>
        <tr><td>Связь с проверками</td><td>Не отменяет госфинконтроль</td><td>Заменяет проверки, ревизии и обследования по своему предмету</td></tr>
      </tbody>
    </table>
    <p>Практическое различие простое: под казначейский мониторинг попадают все, у кого есть лицевой счёт, и спрашивать согласия никто не будет. В контрольный мониторинг входят по заявлению и только при выполнении условий — подробности в материале о <a href="/baza-znaniy/finansovyy-kontrol-federalnogo-kaznachejstva/#kontrolnyy-monitoring">финансовом контроле Федерального казначейства</a>.</p>

    <h2 id="kak-snizit">Как снизить риск мер реагирования: чек-лист</h2>
    <p>Большинство приостановлений связано не со злым умыслом, а с ошибками в оформлении и режиме целевых средств. Базовая профилактика:</p>
    <ul class="check">
      <li><b>Корректно указывайте ИГК и назначение платежа.</b> Расхождения в реквизитах — частый триггер риска.</li>
      <li><b>Соблюдайте режим лицевого счёта.</b> Оплачивайте только то, что допустимо по целевому характеру средств.</li>
      <li><b>Подтверждайте расходы документами.</b> Держите наготове контракты, акты, счета по каждой операции.</li>
      <li><b>Следите за авансами.</b> Авансовые платежи проходят отдельный контроль; оформляйте их строго по правилам.</li>
      <li><b>Не дробите и не «обналичивайте» средства.</b> Подозрительные схемы — прямой индикатор риска.</li>
      <li><b>Реагируйте быстро.</b> При запросе казначейства предоставляйте пояснения и документы без задержек.</li>
    </ul>
    <p>Какие операции в принципе допустимы по лицевому счёту, разобрано в материале <a href="/baza-znaniy/operacii-po-licevomu-schetu-pri-ks/">какие операции можно проводить по лицевому счёту при казначейском сопровождении</a>.</p>

    <h2 id="howto">Что делать при приостановлении операции: пошагово</h2>
    <p>Если операция приостановлена по итогам мониторинга, действуйте последовательно.</p>
    <ol>
      <li><b>Узнайте причину.</b> Уточните в территориальном органе казначейства, какой индикатор сработал и какая мера применена.</li>
      <li><b>Проверьте реквизиты.</b> Сверьте ИГК, назначение платежа, код целевых средств и сумму с контрактом.</li>
      <li><b>Соберите подтверждающие документы.</b> Подготовьте контракт, акты, счета, обоснование расхода.</li>
      <li><b>Направьте пояснения.</b> Представьте в казначейство документы и пояснения, устраняющие основание для приостановления.</li>
      <li><b>Устраните ошибку.</b> При необходимости переоформите распоряжение с корректными реквизитами.</li>
      <li><b>Проконтролируйте снятие меры.</b> Убедитесь, что операция проведена, и проверьте выписку из лицевого счёта.</li>
    </ol>

    <h2 id="oshibki">Частые ошибки и заблуждения</h2>
    <ul class="check">
      <li><b>«Мониторинг — это штраф».</b> Нет. Это превентивный контроль; меры реагирования (приостановление, предупреждение) не являются административным наказанием.</li>
      <li><b>«Бюджетный и казначейский мониторинг — разные вещи».</b> Это одно и то же: статью переименовали в 2025 году.</li>
      <li><b>«Если платёж прошёл санкционирование, мониторинг не страшен».</b> Это два независимых фильтра; мониторинг работает и помимо санкционирования.</li>
      <li><b>«Приостановление навсегда».</b> Операция возобновляется после устранения причины или подтверждения правомерности.</li>
      <li><b>«Мониторинг касается всех платежей бизнеса».</b> Он направлен на операции участников казначейского сопровождения с целевыми средствами.</li>
    </ul>

    <h2 id="keys">Пример из практики</h2>
    <p><i>Ниже — обобщённый, типовой пример. Он иллюстрирует логику и не описывает конкретного клиента; суммы и обстоятельства условны.</i></p>
    <p>На практике встречается такая ситуация. Исполнитель сопровождаемого контракта пытается оплатить с лицевого счёта услугу, формулировка назначения платежа в которой не совпадает с предметом контракта, а идентификатор государственного контракта указан с ошибкой. Система казначейского мониторинга расценивает операцию как рисковую и приостанавливает её. Бухгалтерия воспринимает это как «блокировку счёта» и тревожится. На деле достаточно было уточнить причину, исправить реквизиты распоряжения и приложить документы, подтверждающие связь расхода с контрактом, — после этого операцию провели. Урок типовой: мониторинг реагирует на несоответствия в реквизитах и режиме целевых средств, поэтому аккуратное оформление платежей снимает большую часть рисков заранее.</p>

    <h2 id="glossary">Глоссарий</h2>
    <dl class="gloss">
      <div><dt>Казначейский мониторинг</dt><dd>Наблюдение Федерального казначейства за операциями участников казначейского сопровождения для недопущения финансовых нарушений (статья 242.13-1 БК).</dd></div>
      <div><dt>Бюджетный мониторинг</dt><dd>Прежнее наименование казначейского мониторинга до изменения статьи 242.13-1 в 2025 году; то же самое по сути.</dd></div>
      <div><dt>Меры реагирования</dt><dd>Действия казначейства при выявлении риска: приостановление операции на лицевом счёте и предупреждение (информирование).</dd></div>
      <div><dt>Приостановление операции</dt><dd>Мера, при которой операция по лицевому счёту не проводится до устранения причин.</dd></div>
      <div><dt>Предупреждение</dt><dd>Информирование участника о выявленном риске при открытии лицевого счёта или при операции.</dd></div>
      <div><dt>Индикатор риска</dt><dd>Признак, по которому система оценивает операцию или открытие счёта как потенциально рисковые.</dd></div>
      <div><dt>Постановление № 2483</dt><dd>Постановление Правительства от 25.12.2021 № 2483 — порядок проведения мониторинга и применения мер реагирования.</dd></div>
    </dl>

    <h2 id="faq">Частые вопросы</h2>
    <div class="faq">
      <details open><summary>Что такое казначейский мониторинг простыми словами?</summary><p>Это наблюдение казначейства за операциями участников казначейского сопровождения, чтобы заранее выявлять риски финансовых нарушений. При срабатывании риска казначейство приостанавливает операцию или направляет предупреждение. Основание — статья 242.13-1 Бюджетного кодекса.</p></details>
      <details><summary>Где посмотреть перечень признаков финансовых нарушений?</summary><p>В классификаторе признаков финансовых нарушений участников системы казначейских платежей — его ведёт Федеральное казначейство в ГИИС «Электронный бюджет». Правила формирования классификатора с 1 сентября 2026 года устанавливает приказ Минфина от 26.06.2026 № 80н (прежний приказ от 23.06.2025 № 76н утратил силу). В приложении к Порядку два раздела: девять признаков для предупреждения и семь признаков для приостановления операций.</p></details>
      <details><summary>Казначейский мониторинг и контрольный мониторинг — это одно и то же?</summary><p>Нет. Казначейский мониторинг — система управления рисками при открытии лицевых счетов и операциях по ним (ст. 242.13-1 БК, Правила по ПП РФ от 27.07.2026 № 941), он действует в силу закона. Контрольный мониторинг — метод внутреннего государственного финансового контроля (ст. 267.1 БК, Правила по ПП РФ от 13.07.2026 № 875), в него входят добровольно по соглашению, и он заменяет проверки, ревизии и обследования по своему предмету.</p></details>
      <details><summary>Чем казначейский мониторинг отличается от бюджетного?</summary><p>Это один и тот же институт. Статья 242.13-1 раньше называлась «Бюджетный мониторинг в системе казначейских платежей», а с 21 апреля 2025 года — «Казначейский мониторинг». Механизм не изменился.</p></details>
      <details><summary>Какие меры реагирования применяет казначейство?</summary><p>Две: приостановление операции на лицевом счёте и предупреждение (информирование). Приостановление останавливает платёж до устранения причины, предупреждение — это сигнал о риске.</p></details>
      <details><summary>Это штраф?</summary><p>Нет. Мониторинг — превентивный контроль, а не наказание. Меры реагирования не являются административным штрафом; ответственность наступает по отдельным основаниям КоАП.</p></details>
      <details><summary>Кого касается мониторинг?</summary><p>Участников казначейского сопровождения — тех, кому открыты лицевые счета для работы с целевыми средствами: исполнителей и соисполнителей контрактов, получателей субсидий и бюджетных инвестиций.</p></details>
      <details><summary>Чем мониторинг отличается от санкционирования?</summary><p>Санкционирование проверяет конкретный платёж перед его проведением, а мониторинг — это непрерывная риск-оценка при открытии счёта и операциях. Это два параллельных фильтра.</p></details>
      <details><summary>Что делать, если операцию приостановили?</summary><p>Узнать причину в казначействе, проверить реквизиты распоряжения, собрать подтверждающие документы и направить пояснения. После устранения основания операцию проводят.</p></details>
      <details><summary>Что изменилось с 1 сентября 2026 года?</summary><p>Статья 242.13-1 действует в новой редакции (Федеральный закон от 24.06.2025 № 158-ФЗ). До этой даты установлены переходные особенности информирования о мерах реагирования (часть 9 статьи 5 Закона о бюджете на 2026 год).</p></details>
      <details><summary>Постановление № 2483 ещё действует?</summary><p>Нет. С 1 сентября 2026 года правила казначейского мониторинга применяются по постановлению Правительства от 27.07.2026 № 941, а постановление от 25.12.2021 № 2483 утратило силу.</p></details>
      <details><summary>Останется ли приостановление открытия лицевого счёта после 1 сентября 2026 года?</summary><p>Сама мера остаётся в статье 242.13-1 Бюджетного кодекса, но её процедура уходит из Порядка № 44н: приказ Казначейства от 22.06.2026 № 14н отменяет пункты 31–33 и приложения № 4 – № 8. Порядок применения смотрите в постановлении № 941.</p></details>
    </div>

    <p data-ctx="auto-ctx:priostanovlenie-operaciy-po-licevomu-schetu">Как приостановление операции выглядит со стороны исполнителя и что делать, чтобы возобновить платежи, подробно разобрано в материале <a href="/baza-znaniy/priostanovlenie-operaciy-po-licevomu-schetu/">«казначейство приостановило операции по лицевому счёту»</a>.</p>
    <p data-ctx="auto-ctx:otkaz-v-otkrytii-licevogo-scheta">Как эти меры выглядят на практике для исполнителя — от уведомления о приостановлении до решения заказчика — разобрано в материале об <a href="/baza-znaniy/otkaz-v-otkrytii-licevogo-scheta/">отказе в открытии лицевого счёта</a>.</p>
    <p data-ctx="auto-ctx:poryadok-sankcionirovaniya-rashodov">Мониторинг не идёт отдельной процедурой поверх платежей: до 31 августа 2026 года это прямо закреплял пункт 13 приказа Минфина России № 214н — территориальный орган казначейства осуществляет проверки в рамках казначейского мониторинга <b>при санкционировании</b> операций с целевыми средствами; с 1 сентября 2026 года пункты 13–19 исключены из Порядка приказом Минфина № 75н, и меры реагирования при операциях применяются по Правилам постановления № 941. Как выглядит этот единый проход по распоряжению и какие сроки в нём установлены — в разборе <a href="/baza-znaniy/poryadok-sankcionirovaniya-rashodov/">санкционирования расходов при казначейском сопровождении</a>.</p>

    <div class="author">
      <div class="author__av">ЯМ</div>
      <div class="author__body">
        <div class="author__name">Ярослав Михайлов</div>
        <div class="author__role">Основатель и главный эксперт КазнаЭксперт</div>
        <p class="author__bio">15+ лет практики в сфере казначейского сопровождения государственных контрактов. Работает с контрактами по 44-ФЗ, 223-ФЗ и ГОЗ; с 2021 года ведёт клиентов как ИП «КазнаЭксперт». Специализация — сложные случаи: гособоронзаказ, раздельный учёт, спасение контрактов после отказов казначейства.</p>
        <div class="author__meta"><a href="/komanda/mihailov-yaroslav/">Профиль эксперта →</a><span>Telegram: <a href="https://t.me/Kaznaexpert" target="_blank" rel="noopener">@Kaznaexpert</a></span></div>
      </div>
    </div>

    
    <!-- svc-cta:end -->
    <div class="svc-cta svc-cta--end" role="complementary" aria-label="Услуги КазнаЭксперт"><div class="svc-cta__card"><span class="svc-cta__eyebrow">Второе мнение</span><p class="svc-cta__title">Аудит казначейского сопровождения: найдём ошибки до проверки</p><p class="svc-cta__text">Проверяем сведения, платежи, коды, раздельный учёт и документы по контракту — с перечнем нарушений и планом исправления.</p><span class="svc-cta__price">160 000 ₽</span><a class="svc-cta__btn" href="/uslugi/audit-kaznacheyskogo-soprovozhdeniya/" onclick="try{ym(94305898,'reachGoal','svccta_click',{svc:'audit-kaznacheyskogo-soprovozhdeniya',pos:'end'})}catch(e){}">Заказать аудит →</a></div><div class="svc-cta__card svc-cta__card--edu"><span class="svc-cta__eyebrow">Топ-услуга · обучение</span><p class="svc-cta__title">Научим вести казначейское сопровождение самостоятельно</p><p class="svc-cta__text">9 академических часов один на один с экспертом Федерального казначейства — на ваших контрактах: счёт, «Электронный бюджет», сведения и коды, санкционирование, раздельный учёт. После курса вы ведёте контракт сами, без отказов.</p><span class="svc-cta__price">150 000 ₽ · индивидуально</span><a class="svc-cta__btn" href="/uslugi/obuchenie-kaznacheyskomu-soprovozhdeniyu/" onclick="try{ym(94305898,'reachGoal','svccta_click',{svc:'obuchenie',pos:'end'})}catch(e){}">Записаться на обучение →</a></div></div>
    <!-- /svc-cta:end -->
<div class="refs">
      <h2>Источники и нормативная база</h2>
      <ol>
        <li id="ref-1">Статья 242.13-1 Бюджетного кодекса РФ — казначейский мониторинг; введена Федеральным законом от 01.07.2021 № 244-ФЗ, наименование изменено Федеральным законом от 21.04.2025 № 84-ФЗ. consultant.ru, pravo.gov.ru.</li>
        <li id="ref-2">Глава 24.2 БК РФ «Система казначейских платежей» — мониторинг как часть функционирования системы. consultant.ru. <a href="https://www.consultant.ru/document/cons_doc_LAW_19702/" target="_blank" rel="noopener">КонсультантПлюс</a></li>
        <li id="ref-3">Постановление Правительства РФ от 25.12.2021 № 2483 — порядок проведения бюджетного мониторинга и применения мер реагирования в целях недопущения финансовых нарушений участниками казначейского сопровождения. minfin.gov.ru, consultant.ru.</li>
        <li id="ref-4">Федеральный закон от 24.06.2025 № 158-ФЗ — новая редакция статьи 242.13-1 БК РФ с 1 сентября 2026 года. consultant.ru, pravo.gov.ru.</li>
        <li id="ref-6">Постановление Правительства РФ от 27.07.2026 № 941 «Об утверждении Правил проведения казначейского мониторинга и применения мер реагирования» — применяется с 1 сентября 2026 года, постановление № 2483 утратило силу с этой же даты; официально опубликовано 27.07.2026. pravo.gov.ru, garant.ru.</li>
        <li id="ref-7">Приказ Федерального казначейства от 22.06.2026 № 14н — изменения в Порядок № 44н с 1 сентября 2026 года: утрата силы пунктов 7, 31–33, 35.1, 36, 40 и приложений № 4 – № 8, новая редакция пунктов 34, 35, 37, 51. Зарегистрирован в Минюсте 23.07.2026 № 87587, опубликован 24.07.2026. pravo.gov.ru, normativ.kontur.ru.</li>
        <li id="ref-8">Приказ Министерства финансов Российской Федерации от 26.06.2026 № 80н «Об утверждении Порядка формирования и ведения классификатора признаков финансовых нарушений участников системы казначейских платежей» — вступил в силу 01.09.2026, признал утратившим силу приказ Минфина от 23.06.2025 № 76н; зарегистрирован Минюстом 12.08.2026 № 87823, официально опубликован 12.08.2026, номер публикации 0001202608120019 — <a href="http://publication.pravo.gov.ru/document/0001202608120019" target="_blank" rel="noopener">pravo.gov.ru</a></li>
        <li id="ref-5">Часть 9 статьи 5 Федерального закона от 28.11.2025 № 426-ФЗ «О федеральном бюджете на 2026 год и на плановый период 2027 и 2028 годов» — переходные особенности информирования о мерах реагирования до 1 сентября 2026 года. consultant.ru. <a href="https://www.consultant.ru/document/cons_doc_LAW_520057/d6ac9d5890b286aa7d2de73aa8fb56eecf6d610b/" target="_blank" rel="noopener">КонсультантПлюс</a></li>
      </ol>
      <p class="refs__note">Материал актуален на 1 сентября 2026 года и носит справочный характер, не являясь юридической или финансовой консультацией. Порядок мониторинга и применения мер реагирования зависит от типа средств и условий сопровождения и уточняется подзаконными актами. Для оценки вашей ситуации обратитесь к специалисту.</p>
    </div>
  
    <div class="art-fb" id="artFb" style="margin:34px 0 6px;padding:18px 22px;background:var(--soft,#fbf8f1);border:1px solid var(--line,#e4ddd0);border-radius:14px;display:flex;align-items:center;gap:14px;flex-wrap:wrap">
      <span style="font-size:15px">Помогла ли статья?</span>
      <button type="button" data-fb="yes" style="font-family:inherit;font-size:14px;padding:8px 18px;border:1px solid var(--line,#e4ddd0);border-radius:100px;background:var(--card,#fffdf8);cursor:pointer;color:inherit">👍 Да</button>
      <button type="button" data-fb="no" style="font-family:inherit;font-size:14px;padding:8px 18px;border:1px solid var(--line,#e4ddd0);border-radius:100px;background:var(--card,#fffdf8);cursor:pointer;color:inherit">👎 Нет</button>
    </div>
    <script>(function(){var w=document.getElementById('artFb');if(!w)return;w.addEventListener('click',function(e){var b=e.target.closest('button[data-fb]');if(!b)return;try{window.ym&&ym(window.YM_ID||0,'reachGoal','article_feedback_'+b.dataset.fb);}catch(_){}w.innerHTML='<span style="font-size:15px">'+(b.dataset.fb==='yes'?'Спасибо! Рады, что пригодилось.':'Спасибо! Напишите в <a href="https://t.me/Kaznaexpert" target="_blank" rel="noopener" style="text-decoration:underline">Telegram</a>, чего не хватило — доработаем.')+'</span>';});})();</script>
  
    <div class="art-promo" style="margin:26px 0 6px;display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:14px">
      <a href="/uslugi/soprovozhdenie-avans/" style="display:block;padding:20px 22px;background:var(--soft,#fbf8f1);border:1px solid var(--line,#e4ddd0);border-radius:14px;text-decoration:none;color:inherit">
        <span style="display:block;font-size:11px;letter-spacing:.14em;text-transform:uppercase;color:#9a7b4f;font-weight:600;margin-bottom:8px">Сопровождение под ключ</span>
        <b style="display:block;font-size:16.5px;line-height:1.35;margin-bottom:6px">Казначейское сопровождение контракта — 105&nbsp;000&nbsp;&#8381;/мес</b>
        <span style="display:block;font-size:14px;color:var(--mute,#6e6b66);line-height:1.55">Счёт, сведения, санкционирование платежей и отчётность — ведём контракт за вас, без лимитов на операции.</span>
        <span style="display:inline-block;margin-top:10px;font-size:14px;color:#9a7b4f;font-weight:600">Обсудить контракт &rarr;</span>
      </a>
      <a href="/uslugi/obuchenie-kaznacheyskomu-soprovozhdeniyu/" style="display:block;padding:20px 22px;background:var(--soft,#fbf8f1);border:1px solid var(--line,#e4ddd0);border-radius:14px;text-decoration:none;color:inherit">
        <span style="display:block;font-size:11px;letter-spacing:.14em;text-transform:uppercase;color:#9a7b4f;font-weight:600;margin-bottom:8px">Обучение</span>
        <b style="display:block;font-size:16.5px;line-height:1.35;margin-bottom:6px">Курс казначейского сопровождения от практика — 150&nbsp;000&nbsp;&#8381;</b>
        <span style="display:block;font-size:14px;color:var(--mute,#6e6b66);line-height:1.55">9 академических часов один на один с экспертом Казначейства — научитесь вести контракты самостоятельно.</span>
        <span style="display:inline-block;margin-top:10px;font-size:14px;color:#9a7b4f;font-weight:600">Записаться на курс &rarr;</span>
      </a>
    </div>
  </article>

  <aside class="rail">
    <form class="railform" id="leadForm" novalidate data-endpoint="/php/lead.php" data-source="kaznacheyskiy-monitoring">
      <div class="railform__badge">Разбор эксперта</div>
      <h3 class="railform__title">Операцию приостановили по итогам мониторинга?</h3>
      <p class="railform__sub">Поможем разобраться, почему казначейство применило меру реагирования, и снять приостановление операции по лицевому счёту. Разбор эксперта — за 1 час.</p>
      <input class="fld" name="name" placeholder="Имя" required minlength="2" maxlength="80" autocomplete="name">
      <input class="fld" name="phone" type="tel" placeholder="+7 (___) ___-__-__" required autocomplete="tel" inputmode="tel">
      <input class="hp" name="company_extra" tabindex="-1" autocomplete="off" aria-hidden="true">
      <label class="policy"><input type="checkbox" name="consent" required><span>Согласен с <a href="/privacy/" target="_blank" rel="noopener">политикой обработки данных</a>. Не передаём третьим лицам.</span></label>
      <button class="submit" type="submit">Получить расчёт →</button>
      <div class="formmsg" id="formMsg" hidden></div>
      <div class="railform__trust">
        <span><b>15+ лет</b> в Казначействе · <b>ИП с 2021 года</b></span>
        <span>Ответ эксперта за <b>1 час</b> · NDA по запросу</span>
      </div>
      <div class="success" id="leadSuccess" role="status" aria-live="polite">
        <div class="success__ic"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg></div>
        <h3>Заявка принята</h3>
        <p>Эксперт перезвонит <b>в течение 1 часа</b> (9:00–21:00 МСК) и разберёт ваш случай.</p>
        <p>Срочно — <a href="https://t.me/Kaznaexpert" target="_blank" rel="noopener">Telegram</a> или <a href="tel:+79818331010">+7 (981) 833-10-10</a>.</p>
      </div>
    </form>
  <!-- rail-svc -->
<a class="rail-svc" href="/uslugi/audit-kaznacheyskogo-soprovozhdeniya/"><span class="rail-svc__k">Поможем под ключ</span><span class="rail-svc__n">Аудит казначейского сопровождения →</span></a>
</aside>
</div>

<section class="related" aria-labelledby="relTitle">
  <div class="related__head"><h2 id="relTitle">Что почитать ещё</h2><a href="/baza-znaniy/">Вся база знаний →</a></div>
  <div class="related__grid">
    <a class="card reveal" href="/baza-znaniy/sistema-kaznacheyskih-platezhey/"><div class="card__cover"><span>СКП</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Система казначейских платежей: что это и как работает</h3><div class="card__meta">Основы · 16 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/prichiny-otkaza-kaznacheystva-v-sankcionirovanii/"><div class="card__cover"><span>Отказы</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Причины отказа казначейства в санкционировании</h3><div class="card__meta">Санкционирование · 16 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/finansovyy-kontrol-federalnogo-kaznachejstva/"><div class="card__cover"><span>Контроль</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Финансовый контроль Федерального казначейства</h3><div class="card__meta">Контроль · 16 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/operacii-po-licevomu-schetu-pri-ks/"><div class="card__cover"><span>Операции</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Какие операции можно проводить по лицевому счёту</h3><div class="card__meta">Операции · 15 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/kaznacheyskoe-soprovozhdenie-v-2026-godu/"><div class="card__cover"><span>2026</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Казначейское сопровождение в 2026 году</h3><div class="card__meta">Сопровождение · 17 мин</div></div></a>
    <!-- auto-related:priostanovlenie-operaciy-po-licevomu-schetu --><a class="card reveal" href="/baza-znaniy/priostanovlenie-operaciy-po-licevomu-schetu/"><div class="card__cover"><span>Приостановление</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Казначейство приостановило операции по счёту: что делать</h3><div class="card__meta">Контроль · 15 мин</div></div></a>
    <!-- auto-related:otkaz-v-otkrytii-licevogo-scheta --><a class="card reveal" href="/baza-znaniy/otkaz-v-otkrytii-licevogo-scheta/"><div class="card__cover"><span>Отказ в открытии</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Отказ в открытии лицевого счёта в казначействе: что делать</h3><div class="card__meta">Счета · 16 мин</div></div></a>
  </div>
</section>

<section class="trust" aria-label="Проверка в реестрах">
  <div class="trust__box">
    <div class="trust__lead"><b>Проверьте нас в открытых реестрах</b>ИП Михайлов Я.А. · ИНН 781428314589 · ОГРНИП 321784700367672</div>
    <div class="trust__badges">
      <a class="badge" href="https://www.rusprofile.ru/ip/321784700367672" target="_blank" rel="noopener"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l8 4v6c0 5-3.4 8.5-8 10-4.6-1.5-8-5-8-10V6z"/><path d="M9 12l2 2 4-4"/></svg><b>Rusprofile</b></a>
      <a class="badge" href="https://zachestnyibiznes.ru/company/ip/321784700367672_781428314589" target="_blank" rel="noopener"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l8 4v6c0 5-3.4 8.5-8 10-4.6-1.5-8-5-8-10V6z"/><path d="M9 12l2 2 4-4"/></svg>За честный <b>бизнес</b></a>
      <a class="badge" href="https://www.audit-it.ru/contragent/fl/781428314589_mikhailov-iaroslav-alekseevich" target="_blank" rel="noopener"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l8 4v6c0 5-3.4 8.5-8 10-4.6-1.5-8-5-8-10V6z"/><path d="M9 12l2 2 4-4"/></svg><b>Audit-it</b></a>
    </div>
  </div>
</section>

<section class="kz-sub" aria-labelledby="kzSubTitle" data-source="kaznacheyskiy-monitoring">
  <style>
  .kz-sub{--i:var(--ink,#1A1A1A);--s:var(--sepia,#8B6F47);--l:var(--line,#e4ddd0);--c:var(--card,#fffdf8);--p:var(--paper,#FAF7F0);--m:var(--ink-mute,#8a8170);--sf:var(--ink-soft,#56524b);
    max-width:1240px;margin:40px auto;padding:0 24px;font-family:'Inter',system-ui,sans-serif}
  .kz-sub__box{position:relative;overflow:hidden;background:linear-gradient(135deg,var(--c),var(--p));border:1px solid var(--l);border-radius:20px;padding:34px 38px;display:grid;grid-template-columns:1.25fr 1fr;gap:34px;align-items:center}
  .kz-sub__ic{position:absolute;right:-26px;top:-20px;color:var(--s);opacity:.06;pointer-events:none}
  .kz-sub__eyebrow{display:inline-flex;align-items:center;gap:8px;font-size:11px;font-weight:600;letter-spacing:.05em;text-transform:uppercase;color:var(--s);background:rgba(139,111,71,.10);border:1px solid rgba(139,111,71,.22);padding:5px 11px;border-radius:20px;margin-bottom:14px}
  .kz-sub__title{font-family:'Playfair Display',Georgia,serif;font-weight:500;font-size:clamp(1.5rem,2vw+1rem,2rem);line-height:1.12;letter-spacing:-.01em;margin:0 0 12px;color:var(--i)}
  .kz-sub__list{list-style:none;margin:0;padding:0;display:grid;gap:8px}
  .kz-sub__list li{position:relative;padding-left:26px;font-size:14.5px;color:var(--sf);line-height:1.45}
  .kz-sub__list li::before{content:"";position:absolute;left:0;top:6px;width:16px;height:16px;border-radius:50%;background:rgba(139,111,71,.14)}
  .kz-sub__list li::after{content:"";position:absolute;left:5px;top:10px;width:5px;height:8px;border:solid var(--s);border-width:0 2px 2px 0;transform:rotate(45deg)}
  .kz-sub__form{background:var(--c);border:1px solid var(--l);border-radius:14px;padding:22px;position:relative}
  .kz-sub__form h3{font-family:'Playfair Display',serif;font-weight:500;font-size:18px;margin:0 0 4px;color:var(--i)}
  .kz-sub__form p{font-size:12.5px;color:var(--m);margin:0 0 14px;line-height:1.4}
  .kz-sub__fld{width:100%;font:inherit;font-size:14.5px;padding:12px 14px;margin-bottom:10px;border:1px solid var(--l);border-radius:10px;background:#fff;color:var(--i)}
  .kz-sub__fld:focus{outline:none;border-color:var(--s);box-shadow:0 0 0 3px rgba(139,111,71,.12)}
  .kz-sub__hp{position:absolute;left:-9999px;width:1px;height:1px;opacity:0}
  .kz-sub__policy{display:flex;gap:9px;align-items:flex-start;font-size:11.5px;color:var(--sf);margin:2px 0 12px;line-height:1.45}
  .kz-sub__policy input{margin-top:2px;accent-color:var(--s)}
  .kz-sub__policy a{color:var(--s)}
  .kz-sub__btn{width:100%;background:var(--i,#1A1A1A);color:#fff;border:none;font:inherit;font-weight:600;font-size:15px;padding:14px;border-radius:11px;cursor:pointer;min-height:50px;transition:background .18s}
  .kz-sub__btn:hover{background:var(--s)}
  .kz-sub__msg{font-size:12.5px;color:#b3261e;margin-top:8px;min-height:14px}
  .kz-sub__ok{display:none;text-align:center;padding:8px 0}
  .kz-sub__ok.on{display:block}
  .kz-sub__ok-ic{width:50px;height:50px;border-radius:50%;background:rgba(139,111,71,.14);color:var(--s);display:flex;align-items:center;justify-content:center;margin:0 auto 12px}
  .kz-sub__ok h3{margin:0 0 6px}
  .kz-sub__ok p{font-size:13.5px;color:var(--sf);line-height:1.5}
  @media(max-width:760px){.kz-sub__box{grid-template-columns:1fr;gap:22px;padding:26px 22px}}
  </style>
  <div class="kz-sub__box">
    <svg class="kz-sub__ic" width="190" height="190" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M3 9h18M8 2v4M16 2v4M8 13h2M14 13h2M8 17h2M14 17h2"/></svg>
    <div class="kz-sub__left">
      <span class="kz-sub__eyebrow">Гайд · PDF</span>
      <h2 class="kz-sub__title" id="kzSubTitle">Календарь дедлайнов по казначейскому сопровождению 2026</h2>
      <ul class="kz-sub__list">
        <li>Реквизиты платежей при казначейском сопровождении: ИГК, назначение платежа, сроки</li>
        <li>Дедлайн принятия бюджетных обязательств и график конца года</li>
        <li>Штрафы КоАП с 01.01.2026 и сроки утверждения сведений</li>
        <li>Раз в месяц — короткий разбор изменений в законодательстве по казначейскому сопровождению</li>
      </ul>
    </div>
    <form class="kz-sub__form" id="kzSubForm" novalidate data-endpoint="/php/subscribe.php">
      <h3>Получить календарь на почту</h3>
      <p>Пришлём PDF после подтверждения подписки. Без спама, отписка в один клик.</p>
      <input class="kz-sub__fld" type="email" name="email" placeholder="Ваш e-mail" required autocomplete="email" inputmode="email">
      <input class="kz-sub__hp" name="company_extra" tabindex="-1" autocomplete="off" aria-hidden="true">
      <label class="kz-sub__policy"><input type="checkbox" name="consent" required><span>Даю согласие на обработку персональных данных и на получение информационных и рекламных писем на указанный e-mail в соответствии с <a href="/privacy/" target="_blank" rel="noopener">политикой</a>. Отписаться можно в один клик в любом письме.</span></label>
      <button class="kz-sub__btn" type="submit">Получить календарь →</button>
      <div class="kz-sub__msg" id="kzSubMsg" hidden></div>
      <div class="kz-sub__ok" id="kzSubOk" role="status" aria-live="polite">
        <div class="kz-sub__ok-ic"><svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg></div>
        <h3>Почти готово</h3>
        <p>Мы отправили письмо на вашу почту. Подтвердите подписку по ссылке — и календарь придёт следом.</p>
      </div>
    </form>
  </div>
  <script>
  (function(){
    var form=document.getElementById('kzSubForm'); if(!form) return;
    var msg=document.getElementById('kzSubMsg'), ok=document.getElementById('kzSubOk');
    var src=(form.closest('.kz-sub')&&form.closest('.kz-sub').dataset.source)||'article';
    form.addEventListener('submit',function(e){
      e.preventDefault();
      if(form.company_extra.value) return;
      var email=form.email.value.trim();
      if(!/^[^@\s]+@[^@\s]+\.[^@\s]+$/.test(email)){ show('Проверьте адрес e-mail'); return; }
      if(!form.consent.checked){ show('Подтвердите согласие'); return; }
      var btn=form.querySelector('.kz-sub__btn'), orig=btn.textContent; btn.disabled=true; btn.textContent='Отправляем…';
      fetch(form.dataset.endpoint,{method:'POST',headers:{'Content-Type':'application/json'},body:JSON.stringify({email:email,consent:true,source:src,page_url:location.href})})
        .then(function(r){ if(!r.ok) throw 0; return r; })
        .then(function(){ succeed(); })
        .catch(function(){ btn.disabled=false; btn.textContent=orig; show('Не удалось отправить. Попробуйте ещё раз.'); });
      function succeed(){
        [].forEach.call(form.children,function(el){ if(el!==ok) el.style.display='none'; });
        ok.classList.add('on');
        try{ if(typeof ym==='function') ym(94305898,'reachGoal','subscribe',{source:src}); }catch(_){}
      }
    });
    function show(t){ msg.hidden=false; msg.textContent=t; }
  })();
  </script>
</section>

<footer class="v2-footer" id="footer">
        <div class="v2-container">

          <div class="v2-footer-cta">
            <div class="v2-footer-cta-lead">
              <span class="v2-footer-cta-eyebrow">Готовы начать</span>
              <p class="v2-footer-cta-title">Откроем казначейский счёт <em>за два рабочих дня</em></p>
            </div>
            <div class="v2-footer-cta-actions">
              <a href="/#contacts" class="v2-footer-cta-btn">Оставить заявку</a>
              <a href="tel:+79818331010" class="v2-footer-cta-phone">+7 981 833-10-10</a>
            </div>
          </div>

          <div class="v2-footer-top">

            <div class="v2-footer-brand">
              <a href="/" class="v2-footer-logo" aria-label="КазнаЭксперт — на главную">
                <img src="/img/logo-footer.webp" alt="КазнаЭксперт" width="180" height="54" loading="lazy">
              </a>
              <p class="v2-footer-tagline">Полное казначейское сопровождение под ключ. Экспертная работа с УФК по всей России — с 2009 года.</p>
            </div>

            <nav class="v2-footer-col" aria-label="Разделы сайта">
              <h3 class="v2-footer-h">Разделы</h3>
              <a href="/baza-znaniy/">База знаний</a>
              <a href="/uslugi/kaznacheyskoe-soprovozhdenie/">Услуги</a>
              <a href="/o-kompanii/">О компании</a>
              <a href="/komanda/">Команда</a>
              <a href="/baza-znaniy/kody/">Коды направлений расходования</a>
              <a href="/baza-znaniy/kody-postupleniy/">Коды источников поступлений</a>
              <a href="/baza-znaniy/normativnaya-baza/">Нормативная база</a>
              <a href="/baza-znaniy/tofk/">Справочник ТОФК</a>
              <a href="/baza-znaniy/glossary/">Глоссарий</a>
              <a href="/regiony/">Регионы</a>
            </nav>

            <nav class="v2-footer-col" aria-label="Связаться">
              <h3 class="v2-footer-h">Связаться</h3>
              <a href="tel:+79818331010">+7 981 833-10-10</a>
              <a href="mailto:manager@kaznaexpert.ru">manager@kaznaexpert.ru</a>
              <a href="https://t.me/Kaznaexpert" target="_blank" rel="noopener">Telegram</a>
              <a href="https://max.ru/u/f9LHodD0cOK_dA0cxMm6m3-UJ1xRsy79eO5fE11eYanlBeYUtgEpWuyk5m8" target="_blank" rel="noopener">MAX</a>
              <a href="/kontakty/">Все контакты</a>
            </nav>

            <nav class="v2-footer-col" aria-label="Мы в сети">
              <h3 class="v2-footer-h">Мы в сети</h3>
              <a href="https://t.me/Kaznaexpert" target="_blank" rel="noopener">Telegram-канал</a>
              <a href="https://dzen.ru/kazna_expert" target="_blank" rel="noopener">Дзен</a>
              <a href="https://www.klerk.ru/user/2703999/" target="_blank" rel="noopener">Клерк</a>
              <a href="https://tenchat.ru/Kazna-gov" target="_blank" rel="noopener">TenChat</a>
            </nav>

            <nav class="v2-footer-col" aria-label="Проверка и реквизиты">
              <h3 class="v2-footer-h">Проверка</h3>
              <a href="https://www.rusprofile.ru/ip/321784700367672" target="_blank" rel="noopener nofollow">Rusprofile</a>
              <a href="https://zachestnyibiznes.ru/company/ip/321784700367672_781428314589" target="_blank" rel="noopener nofollow">За честный бизнес</a>
              <a href="https://www.audit-it.ru/contragent/fl/781428314589_mikhailov-iaroslav-alekseevich" target="_blank" rel="noopener nofollow">Audit-it</a>
            </nav>

          </div>

          <div class="v2-footer-bottom">
            <p class="v2-footer-id">ИП Михайлов Ярослав Алексеевич · ИНН 781428314589 · ОГРНИП 321784700367672</p>
            <nav class="v2-footer-legal" aria-label="Правовая информация">
              <a href="/privacy/">Политика конфиденциальности</a>
              <a href="/terms/">Пользовательское соглашение</a>
              <a href="#" data-cookie-reset>Настройки cookie</a>
            </nav>
            <p class="v2-footer-copy">© 2026 КазнаЭксперт</p>
          </div>

        </div>
      </footer>
</div>

<button class="totop" id="toTop" type="button" aria-label="Наверх · прочитано" title="Наверх"><svg class="totop__ring" width="48" height="48" viewBox="0 0 48 48" aria-hidden="true"><circle class="totop__bg" cx="24" cy="24" r="21"/><circle class="totop__fg" id="totopRing" cx="24" cy="24" r="21"/></svg><svg class="totop__arrow" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M12 19V5M5 12l7-7 7 7"/></svg><span class="totop__pct" id="totopPct" aria-live="off">0%</span></button>

<div class="cookie-banner" id="cookie-banner" role="dialog" aria-label="Уведомление об использовании cookie" aria-live="polite" hidden>
      <div class="cookie-banner-inner">
        <div class="cookie-banner-text">
          <strong>Мы используем файлы cookie</strong>
          <p>Сайт использует cookie и Яндекс.Метрику (данные хранятся в РФ, без трансграничной передачи) для корректной работы и анонимной статистики посещений. Продолжая пользоваться сайтом, вы соглашаетесь с этим. Подробнее — в <a href="/privacy/">Политике конфиденциальности</a>.</p>
        </div>
        <div class="cookie-banner-actions">
          <button type="button" class="cookie-btn cookie-btn--solid" id="cookie-ok">Понятно</button>
        </div>
      </div>
    </div>

<script>
/* reading analytics: прогресс-бар + кольцо «прочитано %» + события дочитывания/времени
   Цели уходят ТОЛЬКО в Яндекс.Метрику (ym reachGoal) — без GA, нет трансграничной передачи данных.
   Метрики: read_25/50/75/90/100 (глубина), time_15s/30s/60s/120s/300s (активное время), read_complete. */
(function(){
  var bar=document.getElementById('progress'),ring=document.getElementById('totopRing'),pctEl=document.getElementById('totopPct');
  var C=2*Math.PI*21,fired={},maxPct=0,active=0,last=Date.now();
  var depth=[25,50,75,90,100],times=[15,30,60,120,300];
  function track(name){
    if(fired[name])return;fired[name]=1;
    // только Яндекс.Метрика — без GA (нет трансграничной передачи данных)
    try{window.ym&&ym(window.YM_ID||0,'reachGoal',name);}catch(e){}
  }
  function upd(){
    var h=document.documentElement,sc=h.scrollTop||document.body.scrollTop,max=h.scrollHeight-h.clientHeight;
    var pct=max>0?Math.min(100,sc/max*100):0,r=Math.round(pct);
    if(bar)bar.style.width=pct+'%';
    if(ring)ring.style.strokeDashoffset=C*(1-pct/100);
    if(pctEl)pctEl.textContent=r+'%';
    if(r>maxPct)maxPct=r;
    depth.forEach(function(m){if(maxPct>=m)track('read_'+m);});
  }
  addEventListener('scroll',upd,{passive:true});addEventListener('resize',upd);upd();
  // параметры страницы для группировки в Метрике (задать per-page: window.YM_PARAMS={page_type:'pillar',cluster:'goz'})
  try{window.ym&&window.YM_PARAMS&&ym(window.YM_ID||0,'params',window.YM_PARAMS);}catch(e){}
  // активное время чтения (пауза, когда вкладка скрыта)
  document.addEventListener('visibilitychange',function(){if(document.hidden){active+=Date.now()-last;}else{last=Date.now();}});
  setInterval(function(){
    if(!document.hidden){active+=Date.now()-last;last=Date.now();}
    var sec=Math.round(active/1000);
    times.forEach(function(m){if(sec>=m)track('time_'+m+'s');});
    if(maxPct>=90&&sec>=60)track('read_complete');
  },5000);
  // финальная отправка глубины при уходе со страницы
  addEventListener('beforeunload',function(){track('depth_'+(maxPct>=90?90:maxPct>=75?75:maxPct>=50?50:maxPct>=25?25:0));});
})();
/* scroll reveal */
(function(){
  var els=[].slice.call(document.querySelectorAll('.reveal'));
  if(!els.length||!('IntersectionObserver'in window)){els.forEach(function(e){e.classList.add('in');});return;}
  var o=new IntersectionObserver(function(es){es.forEach(function(e){if(e.isIntersecting){e.target.classList.add('in');o.unobserve(e.target);}});},{rootMargin:'0px 0px -8% 0px'});
  els.forEach(function(e){o.observe(e);});
})();
/* TOC active */
(function(){
  var links=[].slice.call(document.querySelectorAll('#tocList a'));if(!links.length||!('IntersectionObserver'in window))return;
  var map={};links.forEach(function(a){map[a.getAttribute('href').slice(1)]=a;});
  var o=new IntersectionObserver(function(es){es.forEach(function(e){if(e.isIntersecting){links.forEach(function(l){l.classList.remove('active');});var a=map[e.target.id];if(a)a.classList.add('active');}});},{rootMargin:'-78px 0px -70% 0px'});
  document.querySelectorAll('.content h2[id]').forEach(function(h){o.observe(h);});
})();
/* lead form */
(function(){
  var form=document.getElementById('leadForm');if(!form)return;
  var SRC=form.dataset.source||'goz-275fz';
  var msg=document.getElementById('formMsg'),ok=document.getElementById('leadSuccess');
  form.addEventListener('submit',function(e){
    e.preventDefault();
    if(form.company_extra.value)return;
    if(!form.consent.checked){show('Подтвердите согласие на обработку данных');return;}
    if(form.name.value.trim().length<2||form.phone.value.replace(/\D/g,'').length<10){show('Проверьте имя и телефон');return;}
    var DEMO=false;
    var btn=form.querySelector('.submit'),orig=btn.textContent;btn.disabled=true;btn.textContent='Отправляем…';
    var data={phone:form.phone.value.trim(),source:SRC,consent_pd:true,consent_pd_text:'Согласие на обработку ПДн (источник: '+SRC+')',consent_at:new Date().toISOString(),page_url:location.href,name:form.name.value.trim()};
    fetch(form.dataset.endpoint,{method:'POST',headers:{'Content-Type':'application/json'},body:JSON.stringify(data)})
      .then(function(r){if(!r.ok)throw 0;return r;}).then(succeed).catch(function(){if(DEMO){succeed();}else{fail();}});
    function succeed(){[].forEach.call(form.children,function(el){if(el!==ok)el.style.display='none';});ok.classList.add('on');try{window.ym&&ym(94305898,'reachGoal','lead',{source:SRC});}catch(e){}}
    function fail(){btn.disabled=false;btn.textContent=orig;show('Не удалось отправить. Позвоните +7 981 833-10-10 или напишите в Telegram.');}
  });
  function show(t){msg.hidden=false;msg.textContent=t;}
})();
/* theme toggle убран: сайт светлый, тёмной темы у общего header/footer нет */
/* heading anchor links */
(function(){
  document.querySelectorAll('.content h2[id]').forEach(function(h){
    var a=document.createElement('a');a.href='#'+h.id;a.className='anchor';a.setAttribute('aria-label','Ссылка на раздел');a.textContent='#';
    a.addEventListener('click',function(e){e.preventDefault();var u=location.href.split('#')[0]+'#'+h.id;history.replaceState(null,'',u);if(navigator.clipboard)navigator.clipboard.writeText(u);location.hash=h.id;});
    h.insertBefore(a,h.firstChild);
  });
})();
/* back to top */
(function(){
  var b=document.getElementById('toTop');if(!b)return;
  addEventListener('scroll',function(){if((document.documentElement.scrollTop||document.body.scrollTop)>700)b.classList.add('on');else b.classList.remove('on');},{passive:true});
  b.addEventListener('click',function(){scrollTo({top:0,behavior:'smooth'});});
})();
/* copy quote */
(function(){
  document.querySelectorAll('.quote').forEach(function(q){
    q.style.cursor='copy';q.title='Нажмите, чтобы скопировать цитату';
    q.addEventListener('click',function(){
      var t=q.querySelector('cite'),txt=q.textContent.replace(t?t.textContent:'','').trim()+' — КазнаЭксперт';
      if(navigator.clipboard)navigator.clipboard.writeText(txt);
      var old=q.style.borderLeftColor;q.style.borderLeftColor='#3aa76d';setTimeout(function(){q.style.borderLeftColor=old;},700);
    });
  });
})();
/* share: copy link + print/PDF */
(function(){
  var c=document.getElementById('copyLink'),p=document.getElementById('printBtn');
  if(c)c.addEventListener('click',function(){try{navigator.clipboard&&navigator.clipboard.writeText(location.href);}catch(e){}var s=c.querySelector('span');if(s){var o=s.textContent;s.textContent='Скопировано ✓';setTimeout(function(){s.textContent=o;},1500);}});
  if(p)p.addEventListener('click',function(){window.print();});
})();
/* mini calculator: попадает ли контракт под казначейское сопровождение 2026 */
(function(){
  var type=document.getElementById('calcType'),sum=document.getElementById('calcSum'),out=document.getElementById('calcOut');
  if(!type||!sum||!out)return;
  var RULES={
    goz:{th:3,strict:true,law:'п. 8 ч. 2 ст. 5 ФЗ № 426-ФЗ',what:'расчётов по контракту ГОЗ'},
    ed:{th:3,strict:true,law:'п. 7 ч. 2 ст. 5 ФЗ № 426-ФЗ',what:'расчётов с единственным поставщиком'},
    sub:{th:3,strict:true,law:'п. 9 ч. 2 ст. 5 ФЗ № 426-ФЗ',what:'договора с соисполнителем'},
    gos:{th:100,strict:false,law:'п. 5 ч. 2 ст. 5 ФЗ № 426-ФЗ',what:'аванса по обычному госконтракту'},
    bu:{th:10,strict:false,law:'п. 6 ч. 2 ст. 5 ФЗ № 426-ФЗ',what:'аванса по контракту БУ/АУ'},
    subs:{always:true,law:'пп. 1–4 ч. 2 ст. 5 ФЗ № 426-ФЗ',what:'субсидий и инвестиций'}
  };
  function fmt(n){try{return n.toLocaleString('ru-RU');}catch(e){return n;}}
  function rmLaw(){var e=out.querySelector('.calc__law');if(e)e.remove();}
  function render(cls,verd,desc,law){
    out.querySelector('.calc__verdict').className='calc__verdict'+(cls?' '+cls:'');
    out.querySelector('.calc__verdict').textContent=verd;
    out.querySelector('.calc__desc').textContent=desc;rmLaw();
    if(law){var p=document.createElement('div');p.className='calc__law';p.textContent='Основание: '+law+'. Точный режим определяется текстом контракта.';out.appendChild(p);}
  }
  function calc(){
    var r=RULES[type.value],raw=(sum.value||'').replace(',','.'),v=parseFloat(raw);
    if(r.always){render('yes','✓ Подлежит казначейскому сопровождению','Субсидии юрлицам, бюджетные инвестиции по ст. 80 БК РФ и гранты сопровождаются без суммового порога.',r.law);return;}
    if(isNaN(v)){render('','Укажите сумму контракта','Порог для «'+type.options[type.selectedIndex].text+'»: '+(r.strict?'свыше ':'от ')+fmt(r.th)+' млн ₽.',null);return;}
    var yes=r.strict?(v>r.th):(v>=r.th);
    render(yes?'yes':'no',(yes?'✓ ':'— ')+(yes?'Подлежит казначейскому сопровождению':'Не подлежит казначейскому сопровождению'),
      'Для '+r.what+' порог — '+(r.strict?'свыше ':'от ')+fmt(r.th)+' млн ₽. Указано: '+fmt(v)+' млн ₽.',r.law);
  }
  type.addEventListener('change',calc);sum.addEventListener('input',calc);
})();
/* доп. цели Метрики: контакты, форма, калькулятор, шеринг (только ym) */
(function(){
  function g(name){try{window.ym&&ym(window.YM_ID||0,'reachGoal',name);}catch(e){}}
  document.addEventListener('click',function(e){
    var a=e.target.closest?e.target.closest('a,button'):null;if(!a)return;
    var href=(a.getAttribute&&a.getAttribute('href'))||'';
    if(href.indexOf('tel:')===0)g('click_phone');
    else if(/t\.me\//.test(href)&&href.indexOf('/share')<0)g('click_telegram');
    else if(href.indexOf('mailto:')===0)g('click_email');else if(/\.pdf($|[?#])/.test(href))g('download_pdf');
    else if(a.classList&&a.classList.contains('badge'))g('click_registry');
  },true);
  var lf=document.getElementById('leadForm');
  if(lf){var st=false;lf.addEventListener('focusin',function(){if(!st){st=true;g('form_start');}});}
  var ct=document.getElementById('calcType'),cs=document.getElementById('calcSum'),cd=false;
  function cu(){if(!cd){cd=true;g('calc_used');}}
  ct&&ct.addEventListener('change',cu);cs&&cs.addEventListener('input',cu);
  var cl=document.getElementById('copyLink'),pb=document.getElementById('printBtn');
  cl&&cl.addEventListener('click',function(){g('copy_link');});
  pb&&pb.addEventListener('click',function(){g('print_pdf');});
  document.querySelectorAll('.share a[href*="t.me/share"]').forEach(function(a){a.addEventListener('click',function(){g('share_telegram');});});
})();
</script>

<script defer src="/js/cookie-consent.js?v=<?= @filemtime($_SERVER['DOCUMENT_ROOT'].'/js/cookie-consent.js') ?>"></script>
<script>
/* v2-header: бургер + sticky-shrink (без main.js, чтобы не дублировать цели Метрики) */
(function(){
  var b=document.getElementById('v2Burger'),m=document.getElementById('v2MobileMenu');
  if(b&&m){var o=function(s){b.classList.toggle('is-open',s);m.classList.toggle('is-open',s);b.setAttribute('aria-expanded',s?'true':'false');};
    b.addEventListener('click',function(){o(!b.classList.contains('is-open'));});
    m.addEventListener('click',function(e){if(e.target.closest('a'))o(false);});
    document.addEventListener('keydown',function(e){if(e.key==='Escape')o(false);});}
  var h=document.querySelector('.v2-header');
  if(h){var u=function(){h.classList.toggle('is-scrolled',(window.scrollY||0)>12);};addEventListener('scroll',u,{passive:true});u();}
})();
</script>
<link rel="stylesheet" href="/assets/svc-cta.css?v=<?= @filemtime($_SERVER['DOCUMENT_ROOT'].'/assets/svc-cta.css') ?>">
<link rel="stylesheet" href="/assets/kg-lead.css?v=<?= @filemtime($_SERVER['DOCUMENT_ROOT'].'/assets/kg-lead.css') ?>"><script src="/assets/kg-lead.js?v=<?= @filemtime($_SERVER['DOCUMENT_ROOT'].'/assets/kg-lead.js') ?>" defer></script>
</body>
</html>
