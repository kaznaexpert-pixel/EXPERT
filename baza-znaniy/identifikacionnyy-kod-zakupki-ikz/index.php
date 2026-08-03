<?php /* Cache-Control задаёт .htaccess — единая точка правды для кэш-заголовков */ ?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Идентификационный код закупки (ИКЗ) по 44-ФЗ: структура</title>
<meta name="description" content="Что такое ИКЗ по 44-ФЗ, из чего состоят 36 разрядов идентификационного кода закупки, как его расшифровать, где указывать и чем ИКЗ отличается от ИГК.">
<meta name="author" content="Ярослав Михайлов">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1">
<meta name="theme-color" content="#F4F1EB" media="(prefers-color-scheme: light)">
<meta name="theme-color" content="#141310" media="(prefers-color-scheme: dark)">
<!-- PROD: canonical и og:url ОБЯЗАТЕЛЬНО менять под URL каждой статьи -->
<link rel="canonical" href="https://kaznaexpert.ru/baza-znaniy/identifikacionnyy-kod-zakupki-ikz/">
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
<script>window.YM_PARAMS = {page_type:"cluster", cluster:"operacii"};</script>

<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "Article", "headline": "Идентификационный код закупки (ИКЗ) по 44-ФЗ: структура, расшифровка и отличие от ИГК", "description": "Что такое ИКЗ по 44-ФЗ, из чего состоят 36 разрядов идентификационного кода закупки, как его расшифровать, где указывать и чем ИКЗ отличается от ИГК.", "inLanguage": "ru-RU", "datePublished": "2026-06-26", "dateModified": "2026-06-26", "author": {"@type": "Person", "name": "Ярослав Михайлов", "jobTitle": "Главный эксперт по казначейскому сопровождению", "url": "https://kaznaexpert.ru/komanda/mihailov-yaroslav/", "@id": "https://kaznaexpert.ru/komanda/mihailov-yaroslav/#person"}, "publisher": {"@type": "Organization", "name": "КазнаЭксперт", "url": "https://kaznaexpert.ru", "logo": {"@type": "ImageObject", "url": "https://kaznaexpert.ru/img/logogold.png"}, "@id": "https://kaznaexpert.ru/#organization"}, "image": "https://kaznaexpert.ru/img/og-image.png", "mainEntityOfPage": {"@type": "WebPage", "@id": "https://kaznaexpert.ru/baza-znaniy/identifikacionnyy-kod-zakupki-ikz/"}, "citation": ["Федеральный закон от 05.04.2013 № 44-ФЗ, статья 23 «Идентификационный код закупки, каталог товаров, работ, услуг» (ред. на 26.06.2026). КонсультантПлюс — https://www.consultant.ru/document/cons_doc_LAW_144624/", "Приказ Минфина России от 10.04.2019 № 55н «Об установлении Порядка формирования идентификационного кода закупки».", "Федеральный закон от 05.04.2013 № 44-ФЗ, статья 103 «Реестр контрактов» (ИКЗ как реквизит реестровой записи). КонсультантПлюс — https://www.consultant.ru/document/cons_doc_LAW_144624/", "Общероссийский классификатор продукции по видам экономической деятельности (ОКПД2) — для разрядов 30–33 кода.", "Бюджетный кодекс РФ и приказ Минфина о порядке применения кодов видов расходов (КВР) — для разрядов 34–36 кода. КонсультантПлюс — https://www.consultant.ru/document/cons_doc_LAW_19702/"]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "Главная", "item": "https://kaznaexpert.ru/"}, {"@type": "ListItem", "position": 2, "name": "База знаний", "item": "https://kaznaexpert.ru/baza-znaniy/"}, {"@type": "ListItem", "position": 3, "name": "Идентификационный код закупки (ИКЗ)", "item": "https://kaznaexpert.ru/baza-znaniy/identifikacionnyy-kod-zakupki-ikz/"}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [{"@type": "Question", "name": "Что такое ИКЗ по 44-ФЗ?", "acceptedAnswer": {"@type": "Answer", "text": "Идентификационный код закупки — это цифровой код из 36 разрядов, который присваивается закупке и связывает план-график, извещение, документацию и контракт. Он предусмотрен статьёй 23 Закона № 44-ФЗ."}}, {"@type": "Question", "name": "Сколько цифр в ИКЗ?", "acceptedAnswer": {"@type": "Answer", "text": "ИКЗ состоит из 36 разрядов. Каждый блок кодирует свой элемент: год, идентификационный код заказчика, номера в плане-графике, код объекта по ОКПД2 и код вида расходов."}}, {"@type": "Question", "name": "Каким документом установлена структура ИКЗ?", "acceptedAnswer": {"@type": "Answer", "text": "Состав, структуру и порядок формирования идентификационного кода закупки устанавливает приказ Минфина России от 10.04.2019 № 55н, принятый во исполнение статьи 23 Закона № 44-ФЗ."}}, {"@type": "Question", "name": "Кто формирует ИКЗ?", "acceptedAnswer": {"@type": "Answer", "text": "Код формирует заказчик на стадии планирования закупки — вместе с позицией плана-графика. Поставщик код не формирует, а использует тот, что указан в извещении и контракте."}}, {"@type": "Question", "name": "Чем ИКЗ отличается от ИГК?", "acceptedAnswer": {"@type": "Answer", "text": "ИКЗ из 36 знаков идентифицирует закупку и связывает её документы. ИГК из 20 или 25 знаков формируется для сопровождаемых контрактов и гособоронзаказа и связывает с контрактом платежи. Это разные коды с разными задачами."}}, {"@type": "Question", "name": "Где указывается идентификационный код закупки?", "acceptedAnswer": {"@type": "Answer", "text": "В плане-графике, извещении и документации, проекте контракта и контракте, реестровой записи, а также в отчётных и платёжных документах, где требуется идентификация закупки."}}, {"@type": "Question", "name": "Что будет при ошибке в ИКЗ?", "acceptedAnswer": {"@type": "Answer", "text": "Расхождение кода между документами нарушает принцип взаимосвязи и может затормозить заключение контракта или его оплату. При санкционировании казначейство сверяет реквизиты, и нестыковка ведёт к возврату документа."}}, {"@type": "Question", "name": "Как найти закупку по ИКЗ?", "acceptedAnswer": {"@type": "Answer", "text": "В открытой части ЕИС на портале zakupki.gov.ru: введите код в поиск по закупкам или в реестре контрактов — система покажет связанные извещение и контракт."}}, {"@type": "Question", "name": "Меняется ли ИКЗ в течение закупки?", "acceptedAnswer": {"@type": "Answer", "text": "Код сквозной и сохраняется на всех стадиях одной закупки. Но при существенном изменении плана-графика позиция может получить новый код, поэтому актуальность кода стоит проверять."}}, {"@type": "Question", "name": "Нужен ли ИКЗ при казначейском сопровождении?", "acceptedAnswer": {"@type": "Answer", "text": "Да, ИКЗ применяется к любой закупке по 44-ФЗ и попадает в реестр контрактов. При сопровождении к нему дополнительно формируется ИГК, по которому казначейство отслеживает целевые платежи."}}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "HowTo", "name": "Как формируется и читается идентификационный код закупки (ИКЗ)", "inLanguage": "ru-RU", "step": [{"@type": "HowToStep", "position": 1, "name": "Планирование закупки", "text": "Заказчик включает закупку в план-график, и ей присваивается идентификационный код закупки (ИКЗ)."}, {"@type": "HowToStep", "position": 2, "name": "Перенос в извещение", "text": "Код указывается в извещении и документации — так закупка связывается с позицией плана-графика."}, {"@type": "HowToStep", "position": 3, "name": "Заключение контракта", "text": "ИКЗ переносится в проект контракта и в заключённый контракт, обеспечивая взаимосвязь документов."}, {"@type": "HowToStep", "position": 4, "name": "Реестровая запись", "text": "Код попадает в реестр контрактов и становится одним из реквизитов идентификации контракта."}, {"@type": "HowToStep", "position": 5, "name": "Исполнение и оплата", "text": "При санкционировании казначейство сверяет реквизиты, включая ИКЗ; для сопровождаемых контрактов дополнительно используется ИГК."}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "DefinedTermSet", "name": "Термины: идентификационный код закупки", "inLanguage": "ru-RU", "hasDefinedTerm": [{"@type": "DefinedTerm", "name": "ИКЗ", "description": "Идентификационный код закупки — цифровой код из 36 разрядов, связывающий документы закупки (статья 23 № 44-ФЗ)."}, {"@type": "DefinedTerm", "name": "ИГК", "description": "Идентификатор государственного контракта — код из 20 или 25 знаков для сопровождаемых контрактов и гособоронзаказа."}, {"@type": "DefinedTerm", "name": "План-график", "description": "Документ планирования закупок заказчика, в котором впервые формируется ИКЗ."}, {"@type": "DefinedTerm", "name": "ОКПД2", "description": "Общероссийский классификатор продукции по видам экономической деятельности; его код входит в разряды 30–33 ИКЗ."}, {"@type": "DefinedTerm", "name": "КВР", "description": "Код вида расходов бюджетной классификации; занимает разряды 34–36 идентификационного кода закупки."}, {"@type": "DefinedTerm", "name": "Идентификационный код заказчика", "description": "20-значный код заказчика, формируемый на основе сводного реестра и входящий в разряды 3–22 ИКЗ."}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "Person", "name": "Ярослав Михайлов", "jobTitle": "Главный эксперт по казначейскому сопровождению", "worksFor": {"@id": "https://kaznaexpert.ru/#organization"}, "url": "https://kaznaexpert.ru/komanda/mihailov-yaroslav/", "sameAs": ["https://t.me/Kaznaexpert", "https://www.rusprofile.ru/ip/321784700367672"], "@id": "https://kaznaexpert.ru/komanda/mihailov-yaroslav/#person"}
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
<meta property="og:title" content="Идентификационный код закупки (ИКЗ) по 44-ФЗ: структура и расшифровка">
<meta property="og:description" content="Структура 36 разрядов ИКЗ, расшифровка по статье 23 № 44-ФЗ и приказу Минфина № 55н, где указывать код и чем ИКЗ отличается от ИГК.">
<meta property="og:url" content="https://kaznaexpert.ru/baza-znaniy/identifikacionnyy-kod-zakupki-ikz/">
<meta property="og:image" content="https://kaznaexpert.ru/img/og-image.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="Идентификационный код закупки (ИКЗ) по 44-ФЗ: структура и расшифровка — КазнаЭксперт">
<meta property="article:published_time" content="2026-06-26T09:00:00+03:00">
<meta property="article:modified_time" content="2026-06-26T09:00:00+03:00">
<meta property="article:author" content="https://kaznaexpert.ru/komanda/mihailov-yaroslav/">
<meta property="article:section" content="База знаний">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Идентификационный код закупки (ИКЗ) по 44-ФЗ: структура и расшифровка">
<meta name="twitter:description" content="Структура 36 разрядов ИКЗ, расшифровка по статье 23 № 44-ФЗ и приказу Минфина № 55н, где указывать код и чем ИКЗ отличается от ИГК.">
<meta name="twitter:image" content="https://kaznaexpert.ru/img/og-image.png">


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
  <nav class="crumbs" aria-label="Хлебные крошки"><a href="/">Главная</a> › <a href="/baza-znaniy/">База знаний</a> › Идентификационный код закупки (ИКЗ)</nav>

  <aside class="toc" aria-label="Содержание">
    <div class="toc__label">Содержание</div>
    <ul class="toc__list" id="tocList">
      <li><a href="#chto-takoe">Что такое ИКЗ и зачем он нужен</a></li>
      <li><a href="#pravovaya-osnova">Правовая основа: статья 23 и приказ № 55н</a></li>
      <li><a href="#struktura">Структура ИКЗ: 36 разрядов по порядку</a></li>
      <li><a href="#rasshifrovka">Расшифровка кода на примере</a></li>
      <li><a href="#kto-formiruet">Кто и когда формирует ИКЗ</a></li>
      <li><a href="#gde-ukazyvat">Где указывается идентификационный код закупки</a></li>
      <li><a href="#ktru">ИКЗ и каталог товаров, работ, услуг (КТРУ)</a></li>
      <li><a href="#ikz-igk">ИКЗ и ИГК: в чём разница</a></li>
      <li><a href="#ks-svyaz">ИКЗ, реестр контрактов и казначейское сопровождение</a></li>
      <li><a href="#oshibki">Типичные ошибки в ИКЗ и их последствия</a></li>
      <li><a href="#kak-nayti">Как найти закупку по ИКЗ</a></li>
      <li><a href="#chek-list">Чек-лист проверки кода</a></li>
      <li><a href="#glossary">Глоссарий</a></li>
      <li><a href="#faq">Частые вопросы</a></li>
    </ul>
  </aside>

  <article class="content" id="main">
    <div class="hero">
      <img class="hero__crest hero__crest--light" src="/img/logogold-crest.webp" alt="" aria-hidden="true" width="188" height="137" decoding="async" loading="lazy">
      <img class="hero__crest hero__crest--dark" src="/img/LogoWhite.png" alt="" aria-hidden="true" width="188" height="137" decoding="async" loading="lazy">
      <div class="eyebrow">База знаний · Операции и отчётность <span class="fresh">Актуально на 2026</span></div>
    <h1>Идентификационный код закупки (ИКЗ) по 44-ФЗ: структура, расшифровка и отличие от ИГК</h1>
    <div class="byline"><span class="av">ЯМ</span><span>Автор: <a href="/komanda/mihailov-yaroslav/">Ярослав Михайлов</a>, главный эксперт</span><span class="dot">·</span><span>15+ лет в Казначействе</span><span class="dot">·</span><span>13 мин чтения</span><span class="dot">·</span><span>Обновлено 26 июня 2026</span></div>
    </div>

    <div class="share">
      <span class="share__label">Поделиться:</span>
      <a href="https://t.me/share/url?url=https%3A%2F%2Fkaznaexpert.ru%2Fbaza-znaniy%2Fidentifikacionnyy-kod-zakupki-ikz%2F&amp;text=%D0%98%D0%B4%D0%B5%D0%BD%D1%82%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D1%8B%D0%B9%20%D0%BA%D0%BE%D0%B4%20%D0%B7%D0%B0%D0%BA%D1%83%D0%BF%D0%BA%D0%B8%20%28%D0%98%D0%9A%D0%97%29%3A%20%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%82%D1%83%D1%80%D0%B0%2C%20%D1%80%D0%B0%D1%81%D1%88%D0%B8%D1%84%D1%80%D0%BE%D0%B2%D0%BA%D0%B0%20%D0%B8%20%D0%BE%D1%82%D0%BB%D0%B8%D1%87%D0%B8%D0%B5%20%D0%BE%D1%82%20%D0%98%D0%93%D0%9A" target="_blank" rel="noopener"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.56 8.25l-1.86 8.76c-.14.62-.5.77-1.02.48l-2.82-2.08-1.36 1.31c-.15.15-.28.28-.57.28l.2-2.89 5.27-4.76c.23-.2-.05-.32-.35-.12l-6.51 4.1-2.8-.88c-.61-.19-.62-.61.13-.9l10.95-4.22c.5-.18.95.12.79.85z"/></svg>Telegram</a>
      <button type="button" id="copyLink"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.07 0l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.07 0l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg><span>Копировать ссылку</span></button>
      <button type="button" id="printBtn"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9V2h12v7M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2M6 14h12v8H6z"/></svg>Скачать PDF</button>
    </div>

    <details class="mtoc"><summary>Содержание статьи</summary>
      <ol>
        <li><a href="#chto-takoe">Что такое ИКЗ и зачем он нужен</a></li><li><a href="#pravovaya-osnova">Правовая основа: статья 23 и приказ № 55н</a></li><li><a href="#struktura">Структура ИКЗ: 36 разрядов по порядку</a></li><li><a href="#rasshifrovka">Расшифровка кода на примере</a></li><li><a href="#kto-formiruet">Кто и когда формирует ИКЗ</a></li><li><a href="#gde-ukazyvat">Где указывается идентификационный код закупки</a></li><li><a href="#ktru">ИКЗ и каталог товаров, работ, услуг (КТРУ)</a></li><li><a href="#ikz-igk">ИКЗ и ИГК: в чём разница</a></li><li><a href="#ks-svyaz">ИКЗ, реестр контрактов и казначейское сопровождение</a></li><li><a href="#oshibki">Типичные ошибки в ИКЗ и их последствия</a></li><li><a href="#kak-nayti">Как найти закупку по ИКЗ</a></li><li><a href="#chek-list">Чек-лист проверки кода</a></li><li><a href="#glossary">Глоссарий</a></li><li><a href="#faq">Частые вопросы</a></li>
      </ol>
    </details>

    <div class="tldr">Идентификационный код закупки (ИКЗ) — это цифровой код из <b>36 разрядов</b>, который связывает закупку с планом-графиком, извещением, документацией и контрактом. Его формирует заказчик по статье 23 Закона № 44-ФЗ и приказу Минфина России от 10.04.2019 № 55н. Код сквозной: один и тот же ИКЗ сопровождает закупку на всех стадиях и попадает в реестр контрактов. Не путайте ИКЗ с ИГК: ИКЗ из 36 знаков идентифицирует саму закупку, а ИГК из 20 или 25 знаков формируется для сопровождаемых контрактов и связывает с ними платежи.</div>

    <section class="keyfacts grain" aria-label="Ключевые факты">
      <h2>Коротко о главном</h2>
      <div class="keyfacts__grid">
        <div class="kf"><div class="kf__n">Ст. 23</div><div class="kf__t"><b>Правовая основа</b> — идентификационный код закупки предусмотрен статьёй 23 Закона № 44-ФЗ</div></div>
        <div class="kf"><div class="kf__n">№ 55н</div><div class="kf__t"><b>Порядок формирования</b> — состав и структура установлены приказом Минфина России от 10.04.2019 № 55н</div></div>
        <div class="kf"><div class="kf__n">36 разрядов</div><div class="kf__t"><b>Длина кода</b> — ИКЗ — это машиночитаемый цифровой код из тридцати шести разрядов</div></div>
        <div class="kf"><div class="kf__n">Заказчик</div><div class="kf__t"><b>Кто формирует</b> — ИКЗ формирует заказчик на этапе планирования закупки</div></div>
      </div>
    </section>

    <h2 id="chto-takoe">Что такое ИКЗ и зачем он нужен</h2>
    <p class="lead-p">Идентификационный код закупки (ИКЗ) — это уникальный цифровой код, который присваивается каждой закупке по 44-ФЗ и проходит с ней через все стадии: от плана-графика до контракта и его исполнения. По сути это «паспортный номер» закупки, по которому её можно однозначно найти и проследить.</p>
    <p>Код решает задачу взаимосвязи документов. До его введения сведения о закупке в плане, извещении и контракте жили отдельно, и связать их было сложно. ИКЗ сшивает их в единую цепочку: по нему видно, из какого плана-графика выросла закупка, по какому извещению она проводилась и каким контрактом завершилась. Это нужно и для контроля, и для статистики, и для прозрачности расходования бюджета.</p>
    <p>Для поставщика ИКЗ — не просто формальность. Этот код фигурирует в извещении, документации и контракте, а затем в реестровой записи и в платёжных документах. Ошибка или несовпадение кода способны затормозить и заключение контракта, и его оплату, поэтому понимать логику ИКЗ полезно любому участнику закупок.</p>

    <h2 id="pravovaya-osnova">Правовая основа: статья 23 и приказ № 55н</h2>
    <p>Сам институт идентификационного кода закупки закреплён статьёй 23 Закона № 44-ФЗ. Она устанавливает, что каждая закупка имеет идентификационный код, который указывается в плане-графике, извещении, документации, контракте и иных документах, а также обеспечивает взаимосвязь этих документов.</p>
    <p>Конкретный состав, структуру и порядок формирования кода статья 23 отдаёт на уровень подзаконного акта. Сейчас это приказ Минфина России от 10.04.2019 № 55н «Об установлении Порядка формирования идентификационного кода закупки». Именно он определяет, что означает каждый разряд кода и по каким правилам заказчик его собирает. При работе с ИКЗ всегда стоит сверяться с действующей редакцией приказа, поскольку отдельные элементы (например, привязка к классификаторам) со временем уточняются.</p>

    <h2 id="struktura">Структура ИКЗ: 36 разрядов по порядку</h2>
    <p>ИКЗ состоит из 36 цифр, и каждый блок разрядов несёт свой смысл. Понимание структуры помогает читать код и замечать ошибки.</p>
    <table>
      <thead><tr><th>Разряды</th><th>Что кодируют</th><th>Пояснение</th></tr></thead>
      <tbody>
        <tr><td>1–2</td><td>Год размещения извещения</td><td>Две последние цифры года, в котором размещается извещение или заключается контракт с единственным поставщиком</td></tr>
        <tr><td>3–22</td><td>Идентификационный код заказчика</td><td>20-значный код заказчика, формируемый на основе сведений из сводного реестра</td></tr>
        <tr><td>23–26</td><td>Номер закупки в плане-графике</td><td>Порядковый номер закупки в плане-графике (от 0001 до 9999)</td></tr>
        <tr><td>27–29</td><td>Порядковый номер закупки</td><td>Номер закупки в пределах позиции плана-графика (от 001 до 999)</td></tr>
        <tr><td>30–33</td><td>Код объекта закупки по ОКПД2</td><td>Классификация продукции по Общероссийскому классификатору продукции по видам экономической деятельности</td></tr>
        <tr><td>34–36</td><td>Код вида расходов (КВР)</td><td>Код вида расходов по бюджетной классификации Российской Федерации</td></tr>
      </tbody>
    </table>
    <p>Первые два блока (год и код заказчика) задают «кто и когда», средние блоки (номера в плане-графике) — «какая именно закупка», а последние (ОКПД2 и КВР) — «что закупается и за счёт чего». Такая логика делает код самодостаточным: по нему многое понятно даже без обращения к документам. Что такое КВР, как он соотносится с КОСГУ и почему его нельзя путать с кодами направления расходования — в разборе <a href="/baza-znaniy/kvr-kosgu-celevye-sredstva/">КВР и КОСГУ для целевых средств</a>.</p>

    <h2 id="rasshifrovka">Расшифровка кода на примере</h2>
    <p>Разберём принцип чтения на условном коде. Возьмём ИКЗ, начинающийся на «261…»: первые два разряда «26» означают 2026 год размещения извещения. Следующие двадцать разрядов — идентификационный код заказчика; по ним закупку можно привязать к конкретной организации. Блок из четырёх разрядов — номер позиции в плане-графике, ещё три — порядковый номер закупки внутри этой позиции.</p>
    <p>Завершают код два «содержательных» блока. Четыре разряда кодируют объект закупки по ОКПД2 — например, класс продукции или услуги. Последние три разряда — код вида расходов: по нему видно, по какой статье бюджетной классификации финансируется закупка. Если закупка содержит несколько объектов с разными кодами ОКПД2 или КВР, в соответствующих разрядах могут проставляться нули — приказ № 55н описывает такие случаи отдельно.</p>
    <p>Главное, что стоит вынести из расшифровки: ИКЗ не случайный набор цифр, а структурированная запись. Поэтому любое расхождение в коде между извещением, контрактом и платёжными документами — это сигнал ошибки, а не безобидная мелочь.</p>

    <h2 id="kto-formiruet">Кто и когда формирует ИКЗ</h2>
    <p>ИКЗ формирует заказчик, и происходит это на самой ранней стадии — при планировании. Код рождается вместе с позицией плана-графика: как только закупка попадает в план, ей присваивается идентификационный код, который затем переносится во все последующие документы.</p>
    <p>Поставщик ИКЗ не формирует — он его использует. Участник видит код в извещении и документации, а после заключения — в контракте. Но это не значит, что код можно игнорировать: при подготовке платёжных и отчётных документов поставщику нередко приходится указывать сведения о закупке, и здесь важно брать корректный код из контракта, а не сочинять его заново.</p>
    <p>Технически код формируется в ЕИС автоматически на основе введённых заказчиком данных, что снижает риск опечаток. Тем не менее ответственность за правильность сведений лежит на заказчике, и ошибки на стадии планирования способны тянуться через всю закупку.</p>

    <h2 id="gde-ukazyvat">Где указывается идентификационный код закупки</h2>
    <p>Сквозной характер кода означает, что он встречается во множестве документов. Перечислим основные.</p>
    <ul>
      <li>план-график закупок — здесь код впервые появляется;</li>
      <li>извещение об осуществлении закупки и документация;</li>
      <li>проект контракта и сам заключённый контракт;</li>
      <li>реестровая запись в реестре контрактов;</li>
      <li>отчётные и платёжные документы, где требуется идентификация закупки.</li>
    </ul>
    <p>Сквозное указание кода и обеспечивает ту самую взаимосвязь документов, ради которой ИКЗ задуман. Если код в контракте не совпадает с кодом в извещении или в реестре, это прямое нарушение принципа взаимосвязи, и такие расхождения контролирующие органы и казначейство замечают.</p>

    <h2 id="ktru">ИКЗ и каталог товаров, работ, услуг (КТРУ)</h2>
    <p>Статья 23 Закона № 44-ФЗ регулирует не только идентификационный код закупки, но и каталог товаров, работ, услуг для обеспечения государственных и муниципальных нужд (КТРУ). Эти инструменты работают в связке, поэтому при разговоре об ИКЗ полезно понимать и роль каталога.</p>
    <p>КТРУ — это унифицированный справочник позиций, которые закупают заказчики: с типовыми наименованиями, описаниями и характеристиками. Каталог нужен, чтобы одинаковые товары и услуги по всей стране назывались и описывались единообразно, а закупки можно было сравнивать и контролировать. Когда заказчик формирует закупку, он берёт позицию из каталога, и это влияет в том числе на код объекта закупки, который затем отражается в разрядах ИКЗ, отвечающих за ОКПД2.</p>
    <p>Для поставщика связь каталога и кода практична: корректная позиция КТРУ и согласованный с ней код в ИКЗ означают, что предмет закупки описан и классифицирован однозначно. Расхождение между фактически закупаемым объектом, позицией каталога и кодом ОКПД2 в идентификационном коде — это потенциальная зона споров и претензий контроля. Поэтому при анализе извещения имеет смысл сверять, что объект закупки, позиция каталога и соответствующие разряды кода описывают одно и то же.</p>
    <p>Каталог постоянно пополняется, и применение конкретных позиций КТРУ обязательно с момента их размещения в системе. Это ещё один аргумент в пользу того, чтобы читать ИКЗ не изолированно, а вместе с описанием объекта закупки и позицией каталога: только их совокупность даёт полную картину того, что и как закупается.</p>

    <h2 id="ikz-igk">ИКЗ и ИГК: в чём разница</h2>
    <p>Это самая частая путаница, поэтому разберём её отдельно. ИКЗ и ИГК — два разных кода с разными задачами, и совпадение первых букв вводит в заблуждение.</p>
    <table>
      <thead><tr><th>Признак</th><th>ИКЗ</th><th>ИГК</th></tr></thead>
      <tbody>
        <tr><td>Расшифровка</td><td>Идентификационный код закупки</td><td>Идентификатор государственного контракта</td></tr>
        <tr><td>Длина</td><td>36 разрядов</td><td>20 или 25 разрядов</td></tr>
        <tr><td>Что идентифицирует</td><td>Закупку в целом: план — извещение — контракт</td><td>Конкретный контракт и расчёты по нему</td></tr>
        <tr><td>Когда применяется</td><td>Любая закупка по 44-ФЗ</td><td>Сопровождаемые контракты и гособоронзаказ</td></tr>
        <tr><td>Основа</td><td>Ст. 23 № 44-ФЗ, приказ Минфина № 55н</td><td>Правила казначейства и Минобороны</td></tr>
      </tbody>
    </table>
    <p>Проще всего запомнить так: ИКЗ отвечает на вопрос «что это за закупка», а ИГК — «к какому контракту привязать деньги». Для обычной закупки достаточно ИКЗ. Как только включается казначейское сопровождение или гособоронзаказ, к контракту дополнительно формируется ИГК, по которому казначейство отслеживает целевые платежи. Подробно структура и применение ИГК разобраны в отдельном материале об идентификаторе государственного контракта.</p>

    <h2 id="ks-svyaz">ИКЗ, реестр контрактов и казначейское сопровождение</h2>
    <p>Идентификационный код закупки попадает в реестровую запись контракта и становится одним из реквизитов, по которым контракт идентифицируется. При санкционировании оплаты казначейство сверяет данные распоряжения со сведениями реестра контрактов, и корректный ИКЗ — часть этой сверки. Несовпадение кода или его отсутствие там, где он должен быть, — повод для возврата документа на доработку.</p>
    <p>Для сопровождаемых контрактов картина двухуровневая. ИКЗ идентифицирует закупку и хранится в реестре, а ИГК связывает с контрактом конкретные платежи через лицевой счёт. Оба кода работают вместе: ИКЗ обеспечивает «происхождение» закупки, ИГК — целевую привязку денег. Поставщику под сопровождением важно не перепутать их в платёжных и отчётных документах, иначе платёж может не пройти санкционирование.</p>
    <p>Отсюда практический вывод: при работе по сопровождаемому контракту держите перед глазами оба кода из контракта и реестровой записи и переносите их в документы без ошибок. Это снимает значительную часть рисков на стадии оплаты.</p>
    <p>Полезно понимать и роли ведомств. Идентификационный код закупки формируется по правилам Минфина и обслуживает контрактную систему в целом, а идентификатор государственного контракта работает в инфраструктуре казначейства и нужен там, где деньги идут через лицевые счета под контролем целевого расходования. Поэтому в обычной закупке поставщик сталкивается только с ИКЗ, а в сопровождаемой — сразу с двумя кодами, и каждый из них выполняет свою функцию: ИКЗ описывает закупку, ИГК привязывает к контракту платежи. Смешение этих ролей в документах — самая частая причина возвратов на стадии санкционирования.</p>

    <h2 id="oshibki">Типичные ошибки в ИКЗ и их последствия</h2>
    <p>Большинство проблем с кодом — это расхождения и опечатки. Они кажутся мелочью, но в контрактной системе любая нестыковка реквизитов тормозит процесс.</p>
    <ul>
      <li><b>Несовпадение кода в контракте и извещении.</b> Нарушает принцип взаимосвязи документов, привлекает внимание контроля.</li>
      <li><b>Ошибка в коде заказчика или КВР.</b> Искажает привязку к бюджету, может всплыть при санкционировании.</li>
      <li><b>Путаница ИКЗ и ИГК в платёжных документах.</b> Платёж не проходит сверку, документ возвращается.</li>
      <li><b>Использование устаревшего кода после изменения плана-графика.</b> Код перестаёт соответствовать актуальной позиции плана.</li>
    </ul>
    <p>Для поставщика вывод простой: не придумывайте код самостоятельно и не копируйте его из старых документов. Берите ИКЗ из актуального контракта и реестровой записи, а при сопровождении — отдельно сверяйте ИГК. Это убирает почти все типовые ошибки.</p>

    <h2 id="kak-nayti">Как найти закупку по ИКЗ</h2>
    <p>По идентификационному коду закупку легко найти в открытой части ЕИС — это удобно и заказчикам, и участникам.</p>
    <ul>
      <li>Откройте поиск по закупкам или реестр контрактов на портале zakupki.gov.ru.</li>
      <li>Введите ИКЗ в строку поиска — система покажет связанные извещение и контракт.</li>
      <li>В карточке проверьте соответствие кода в извещении, контракте и реестровой записи.</li>
    </ul>
    <p>Такой поиск полезен, когда нужно быстро поднять все документы по конкретной закупке: вместо того чтобы искать по названию и датам, достаточно одного кода, который сшивает всю цепочку.</p>

    <h2 id="chek-list">Чек-лист проверки кода</h2>
    <p>Чтобы ИКЗ не стал источником проблем, поставщику достаточно держать под контролем несколько пунктов.</p>
    <ul>
      <li>Код в контракте совпадает с кодом в извещении и документации.</li>
      <li>Тот же код отражён в реестровой записи контракта.</li>
      <li>В платёжных и отчётных документах используется код из актуального контракта.</li>
      <li>Для сопровождаемого контракта ИКЗ не подменяется ИГК и наоборот.</li>
      <li>После изменения плана-графика код проверен на актуальность.</li>
    </ul>
    <p class="note">На практике встречается типовая ситуация: бухгалтерия исполнителя по сопровождаемому контракту вписывает в платёжный документ идентификационный код закупки вместо идентификатора государственного контракта — и казначейство возвращает распоряжение, потому что платёж не привязывается к контракту. Сверка обоих кодов с контрактом и реестровой записью снимает проблему. Пример приведён для наглядности и не является обещанием конкретного результата.</p>

    <h2 id="glossary">Глоссарий</h2>
    <dl class="gloss">
      <div><dt>ИКЗ</dt><dd>Идентификационный код закупки — цифровой код из 36 разрядов, связывающий документы закупки (статья 23 № 44-ФЗ).</dd></div>
      <div><dt>ИГК</dt><dd>Идентификатор государственного контракта — код из 20 или 25 знаков для сопровождаемых контрактов и гособоронзаказа.</dd></div>
      <div><dt>План-график</dt><dd>Документ планирования закупок заказчика, в котором впервые формируется ИКЗ.</dd></div>
      <div><dt>ОКПД2</dt><dd>Общероссийский классификатор продукции по видам экономической деятельности; его код входит в разряды 30–33 ИКЗ.</dd></div>
      <div><dt>КВР</dt><dd>Код вида расходов бюджетной классификации; занимает разряды 34–36 идентификационного кода закупки.</dd></div>
      <div><dt>Идентификационный код заказчика</dt><dd>20-значный код заказчика, формируемый на основе сводного реестра и входящий в разряды 3–22 ИКЗ.</dd></div>
    </dl>

    <h2 id="faq">Частые вопросы</h2>
    <div class="faq">
      <details open><summary>Что такое ИКЗ по 44-ФЗ?</summary><p>Идентификационный код закупки — это цифровой код из 36 разрядов, который присваивается закупке и связывает план-график, извещение, документацию и контракт. Он предусмотрен статьёй 23 Закона № 44-ФЗ.</p></details>
      <details><summary>Сколько цифр в ИКЗ?</summary><p>ИКЗ состоит из 36 разрядов. Каждый блок кодирует свой элемент: год, идентификационный код заказчика, номера в плане-графике, код объекта по ОКПД2 и код вида расходов.</p></details>
      <details><summary>Каким документом установлена структура ИКЗ?</summary><p>Состав, структуру и порядок формирования идентификационного кода закупки устанавливает приказ Минфина России от 10.04.2019 № 55н, принятый во исполнение статьи 23 Закона № 44-ФЗ.</p></details>
      <details><summary>Кто формирует ИКЗ?</summary><p>Код формирует заказчик на стадии планирования закупки — вместе с позицией плана-графика. Поставщик код не формирует, а использует тот, что указан в извещении и контракте.</p></details>
      <details><summary>Чем ИКЗ отличается от ИГК?</summary><p>ИКЗ из 36 знаков идентифицирует закупку и связывает её документы. ИГК из 20 или 25 знаков формируется для сопровождаемых контрактов и гособоронзаказа и связывает с контрактом платежи. Это разные коды с разными задачами.</p></details>
      <details><summary>Где указывается идентификационный код закупки?</summary><p>В плане-графике, извещении и документации, проекте контракта и контракте, реестровой записи, а также в отчётных и платёжных документах, где требуется идентификация закупки.</p></details>
      <details><summary>Что будет при ошибке в ИКЗ?</summary><p>Расхождение кода между документами нарушает принцип взаимосвязи и может затормозить заключение контракта или его оплату. При санкционировании казначейство сверяет реквизиты, и нестыковка ведёт к возврату документа.</p></details>
      <details><summary>Как найти закупку по ИКЗ?</summary><p>В открытой части ЕИС на портале zakupki.gov.ru: введите код в поиск по закупкам или в реестре контрактов — система покажет связанные извещение и контракт.</p></details>
      <details><summary>Меняется ли ИКЗ в течение закупки?</summary><p>Код сквозной и сохраняется на всех стадиях одной закупки. Но при существенном изменении плана-графика позиция может получить новый код, поэтому актуальность кода стоит проверять.</p></details>
      <details><summary>Нужен ли ИКЗ при казначейском сопровождении?</summary><p>Да, ИКЗ применяется к любой закупке по 44-ФЗ и попадает в реестр контрактов. При сопровождении к нему дополнительно формируется ИГК, по которому казначейство отслеживает целевые платежи.</p></details>
    </div>

    <div class="author">
      <div class="author__av">ЯМ</div>
      <div class="author__body">
        <div class="author__name">Ярослав Михайлов</div>
        <div class="author__role">Основатель и главный эксперт КазнаЭксперт</div>
        <p class="author__bio">15+ лет практики в сфере казначейского сопровождения государственных контрактов. Работает с контрактами по 44-ФЗ, 223-ФЗ и ГОЗ; с 2021 года ведёт клиентов как ИП «КазнаЭксперт». Специализация — сложные случаи: гособоронзаказ, раздельный учёт, спасение контрактов после отказов казначейства.</p>
        <div class="author__meta"><a href="/komanda/mihailov-yaroslav/">Профиль эксперта →</a><span>Telegram: <a href="https://t.me/Kaznaexpert" target="_blank" rel="noopener">@Kaznaexpert</a></span></div>
      </div>
    </div>

    <div class="refs">
      <h2>Источники и нормативная база</h2>
      <ol>
        <li id="ref-1">Федеральный закон от 05.04.2013 № 44-ФЗ, статья 23 «Идентификационный код закупки, каталог товаров, работ, услуг» (ред. на 26.06.2026). <a href="https://www.consultant.ru/document/cons_doc_LAW_144624/" target="_blank" rel="noopener">КонсультантПлюс</a></li>
        <li id="ref-2">Приказ Минфина России от 10.04.2019 № 55н «Об установлении Порядка формирования идентификационного кода закупки».</li>
        <li id="ref-3">Федеральный закон от 05.04.2013 № 44-ФЗ, статья 103 «Реестр контрактов» (ИКЗ как реквизит реестровой записи). <a href="https://www.consultant.ru/document/cons_doc_LAW_144624/" target="_blank" rel="noopener">КонсультантПлюс</a></li>
        <li id="ref-4">Общероссийский классификатор продукции по видам экономической деятельности (ОКПД2) — для разрядов 30–33 кода.</li>
        <li id="ref-5">Бюджетный кодекс РФ и приказ Минфина о порядке применения кодов видов расходов (КВР) — для разрядов 34–36 кода. <a href="https://www.consultant.ru/document/cons_doc_LAW_19702/" target="_blank" rel="noopener">КонсультантПлюс</a></li>
      </ol>
      <p class="refs__note">Нормы и классификаторы приведены в редакции, действующей на 26 июня 2026 года. Материал носит справочный характер.</p>
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
        <b style="display:block;font-size:16.5px;line-height:1.35;margin-bottom:6px">Казначейское сопровождение контракта — 89&nbsp;000&nbsp;&#8381;/мес</b>
        <span style="display:block;font-size:14px;color:var(--mute,#6e6b66);line-height:1.55">Счёт, сведения, санкционирование платежей и отчётность — ведём контракт за вас, без лимитов на операции.</span>
        <span style="display:inline-block;margin-top:10px;font-size:14px;color:#9a7b4f;font-weight:600">Обсудить контракт &rarr;</span>
      </a>
      <a href="/uslugi/obuchenie-kaznacheyskomu-soprovozhdeniyu/" style="display:block;padding:20px 22px;background:var(--soft,#fbf8f1);border:1px solid var(--line,#e4ddd0);border-radius:14px;text-decoration:none;color:inherit">
        <span style="display:block;font-size:11px;letter-spacing:.14em;text-transform:uppercase;color:#9a7b4f;font-weight:600;margin-bottom:8px">Обучение</span>
        <b style="display:block;font-size:16.5px;line-height:1.35;margin-bottom:6px">Курс казначейского сопровождения от практика — 120&nbsp;000&nbsp;&#8381;</b>
        <span style="display:block;font-size:14px;color:var(--mute,#6e6b66);line-height:1.55">9 академических часов один на один с экспертом Казначейства — научитесь вести контракты самостоятельно.</span>
        <span style="display:inline-block;margin-top:10px;font-size:14px;color:#9a7b4f;font-weight:600">Записаться на курс &rarr;</span>
      </a>
    </div>
  </article>

  <aside class="rail">
    <form class="railform" id="leadForm" novalidate data-endpoint="/php/lead.php" data-source="identifikacionnyy-kod-zakupki-ikz">
      <div class="railform__badge">Разбор эксперта</div>
      <h3 class="railform__title">Запутались в кодах закупки?</h3>
      <p class="railform__sub">Разберём ИКЗ, ИГК и реквизиты вашего контракта под казначейским сопровождением, чтобы платежи проходили санкционирование без возвратов.</p>
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
<a class="rail-svc" href="/uslugi/soprovozhdenie-postoplata/"><span class="rail-svc__k">Поможем под ключ</span><span class="rail-svc__n">Сопровождение контракта (постоплата) →</span></a>
</aside>
</div>

<section class="related" aria-labelledby="relTitle">
  <div class="related__head"><h2 id="relTitle">Что почитать ещё</h2><a href="/baza-znaniy/">Вся база знаний →</a></div>
  <div class="related__grid">
    <a class="card reveal" href="/baza-znaniy/identifikator-gosudarstvennogo-kontrakta-igk/"><div class="card__cover"><span>ИГК</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Идентификатор государственного контракта (ИГК)</h3><div class="card__meta">Операции · 14 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/igk-v-schete-fakture-i-upd/"><div class="card__cover"><span>Документы</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">ИГК в счёте-фактуре, счёте и УПД: где указывать</h3><div class="card__meta">Операции · 13 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/reestr-kontraktov-eis-44-fz/"><div class="card__cover"><span>Реестр</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Реестр контрактов в ЕИС по 44-ФЗ: что это и сроки</h3><div class="card__meta">Основы · 13 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/rasporyazhenie-o-sovershenii-kaznacheyskogo-platezha/"><div class="card__cover"><span>Платёж</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Распоряжение о совершении казначейского платежа</h3><div class="card__meta">Операции · 15 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/kaznacheyskoe-soprovozhdenie-po-44-fz/"><div class="card__cover"><span>44-ФЗ</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Казначейское сопровождение по 44-ФЗ в 2026</h3><div class="card__meta">Применимость · 15 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/svedeniya-ob-operaciyah-s-celevymi-sredstvami/"><div class="card__cover"><span>Сведения</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Сведения об операциях с целевыми средствами</h3><div class="card__meta">Операции · 14 мин</div></div></a>
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

<section class="kz-sub" aria-labelledby="kzSubTitle" data-source="identifikacionnyy-kod-zakupki-ikz">
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
              <a href="/komanda/mihailov-yaroslav/">Эксперт: Ярослав Михайлов</a>
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

<div class="cookie-banner" id="cookie-banner" role="dialog" aria-label="Согласие на использование cookie" aria-live="polite" hidden>
      <div class="cookie-banner-inner">
        <div class="cookie-banner-text">
          <strong>Мы используем файлы cookie</strong>
          <p>Необходимые cookie обеспечивают работу сайта и формы заявки. Аналитика (Яндекс.Метрика, РФ — без трансграничной передачи данных) включается только с вашего согласия. Подробнее — в <a href="/privacy/">Политике конфиденциальности</a>.</p>
        </div>
        <div class="cookie-banner-actions">
          <button type="button" class="cookie-btn cookie-btn--ghost" id="cookie-settings">Настройки</button>
          <button type="button" class="cookie-btn cookie-btn--ghost" id="cookie-reject">Только необходимые</button>
          <button type="button" class="cookie-btn cookie-btn--solid" id="cookie-accept-all">Принять все</button>
        </div>
      </div>
    </div>

    <div class="cookie-modal" id="cookie-modal" role="dialog" aria-modal="true" aria-labelledby="cookie-modal-title" hidden>
      <div class="cookie-modal-backdrop" id="cookie-modal-backdrop"></div>
      <div class="cookie-modal-card">
        <h2 class="cookie-modal-title" id="cookie-modal-title">Настройки cookie</h2>
        <div class="cookie-cat">
          <div class="cookie-cat-row">
            <div class="cookie-cat-info">
              <strong>Необходимые</strong>
              <span>Работа сайта, формы заявки и хранение вашего выбора cookie. Отключить нельзя.</span>
            </div>
            <span class="cookie-cat-locked">Всегда вкл.</span>
          </div>
          <label class="cookie-cat-row">
            <div class="cookie-cat-info">
              <strong>Аналитика</strong>
              <span>Яндекс.Метрика — анонимная статистика посещений. Данные хранятся в РФ, без трансграничной передачи.</span>
            </div>
            <input type="checkbox" id="cookie-cat-analytics" class="cookie-toggle" checked>
          </label>
        </div>
        <div class="cookie-modal-actions">
          <button type="button" class="cookie-btn cookie-btn--ghost" id="cookie-modal-close">Отмена</button>
          <button type="button" class="cookie-btn cookie-btn--solid" id="cookie-modal-save">Сохранить выбор</button>
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
/* cookie consent */
(function(){
  var KEY='ke_cookie_consent',bar=document.getElementById('ckBar');if(!bar)return;
  function read(){try{return localStorage.getItem(KEY);}catch(e){return null;}}
  function write(v){try{localStorage.setItem(KEY,v);}catch(e){}}
  function show(){bar.hidden=false;requestAnimationFrame(function(){bar.classList.add('on');bar.classList.remove('off');});}
  function hide(){bar.classList.add('off');bar.classList.remove('on');setTimeout(function(){bar.hidden=true;},450);}
  function disable(){try{window['yaDisableMetrika']=true;window.ym=function(){};}catch(e){}}
  function publish(v){document.documentElement.setAttribute('data-cookie-consent',v);}
  document.getElementById('ckAccept').addEventListener('click',function(){write('all');publish('all');hide();});
  document.getElementById('ckDecline').addEventListener('click',function(){write('necessary');publish('necessary');disable();hide();});
  var rs=document.getElementById('ckSettings');if(rs)rs.addEventListener('click',function(e){e.preventDefault();show();});
  var s=read();
  if(s==='necessary'){publish('necessary');disable();}
  else if(s==='all'){publish('all');}
  else{publish('pending');setTimeout(show,800);}
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
</body>
</html>
