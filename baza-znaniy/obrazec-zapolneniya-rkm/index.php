<?php /* Cache-Control задаёт .htaccess — единая точка правды для кэш-заголовков */ ?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Образец заполнения РКМ — разбор комплекта по шагам</title>
<meta name="description" content="Как заполнить РКМ по ГОЗ: разбор комплекта на условном примере — трудоёмкость, зарплата, материалы, накладные, разрез себестоимости, прибыль и цена. Откуда берётся каждая цифра.">
<meta name="author" content="Ярослав Михайлов">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1">
<meta name="theme-color" content="#F4F1EB" media="(prefers-color-scheme: light)">
<meta name="theme-color" content="#141310" media="(prefers-color-scheme: dark)">
<!-- PROD: canonical и og:url ОБЯЗАТЕЛЬНО менять под URL каждой статьи -->
<link rel="canonical" href="https://kaznaexpert.ru/baza-znaniy/obrazec-zapolneniya-rkm/">
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
<script>window.YM_PARAMS = {page_type:"cluster", cluster:"goz"};</script>

<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "Article", "headline": "Образец заполнения РКМ: разбор комплекта по шагам на условном примере", "description": "Пошаговый разбор заполнения комплекта РКМ по гособоронзаказу на условном примере: трудоёмкость по форме № 23, оплата труда, материальные затраты, накладные и коммерческие затраты, разрез себестоимости на привнесённые и собственные, расчёт прибыли по форме № 20 и итоговая цена.", "inLanguage": "ru-RU", "datePublished": "2026-08-16", "dateModified": "2026-08-16", "author": {"@type": "Person", "name": "Ярослав Михайлов", "jobTitle": "Главный эксперт по казначейскому сопровождению", "url": "https://kaznaexpert.ru/komanda/mihailov-yaroslav/", "@id": "https://kaznaexpert.ru/komanda/mihailov-yaroslav/#person", "image": "https://kaznaexpert.ru/img/team/mihailov-photo.jpg"}, "publisher": {"@type": "Organization", "name": "КазнаЭксперт", "url": "https://kaznaexpert.ru", "logo": {"@type": "ImageObject", "url": "https://kaznaexpert.ru/img/logogold.png"}, "@id": "https://kaznaexpert.ru/#organization"}, "image": ["https://kaznaexpert.ru/img/og/baza-znaniy__obrazec-zapolneniya-rkm-16x9.jpg", "https://kaznaexpert.ru/img/og/baza-znaniy__obrazec-zapolneniya-rkm-4x3.webp", "https://kaznaexpert.ru/img/og/baza-znaniy__obrazec-zapolneniya-rkm-1x1.webp"], "mainEntityOfPage": {"@type": "WebPage", "@id": "https://kaznaexpert.ru/baza-znaniy/obrazec-zapolneniya-rkm/"}, "citation": ["https://www.consultant.ru/document/cons_doc_LAW_436477/", "https://www.consultant.ru/document/cons_doc_LAW_284195/", "https://www.consultant.ru/document/cons_doc_LAW_322968/"]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "Главная", "item": "https://kaznaexpert.ru/"}, {"@type": "ListItem", "position": 2, "name": "База знаний", "item": "https://kaznaexpert.ru/baza-znaniy/"}, {"@type": "ListItem", "position": 3, "name": "Образец заполнения РКМ", "item": "https://kaznaexpert.ru/baza-znaniy/obrazec-zapolneniya-rkm/"}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [{"@type": "Question", "name": "Можно ли скачать готовый образец РКМ?", "acceptedAnswer": {"@type": "Answer", "text": "Актуальные бланки форм берутся из действующей редакции приказа ФАС России № 995/22. Готовый заполненный образец использовать как шаблон нельзя: цифры в нём чужие, а комплект проверяется на соответствие вашим нормам, ценам, сметам и учётной политике. На этой странице разобрана методика заполнения на условном примере — это то, что переносится на ваш контракт, в отличие от чужих чисел."}}, {"@type": "Question", "name": "С какой формы начинать заполнение комплекта?", "acceptedAnswer": {"@type": "Answer", "text": "С расчёта трудоёмкости — формы № 23. От нормо-часов строится основная и дополнительная заработная плата, а от заработной платы в большинстве методик распределяются общепроизводственные и общехозяйственные затраты. Если начать с итоговой цены и «раскидывать» её по статьям, комплект не сойдётся при первой же сверке."}}, {"@type": "Question", "name": "Откуда берётся норматив общепроизводственных затрат?", "acceptedAnswer": {"@type": "Answer", "text": "Из сметы и расчёта по форме № 11: норматив выводится как отношение сметы общепроизводственных затрат к базе распределения за период. База распределения (чаще всего основная заработная плата) закрепляется учётной политикой организации. Использованный в примере норматив 180 % условный и ориентиром не является."}}, {"@type": "Question", "name": "Как считается прибыль в комплекте РКМ?", "acceptedAnswer": {"@type": "Answer", "text": "От структуры себестоимости, раскрытой по строке 1700: не более 1 % привнесённых затрат плюс не более 25 % собственных. В условном примере при привнесённых затратах 6 197 500 ₽ и собственных 6 906 430 ₽ предельная прибыль составляет 1 788 582 ₽. Расчёт оформляется формой № 20."}}, {"@type": "Question", "name": "Нужна ли отчётная калькуляция, если это первая поставка?", "acceptedAnswer": {"@type": "Answer", "text": "Нет. По сноске к форме № 3 отчётная калькуляция представляется по последнему отчётному периоду исполненного контракта, если продукция ранее поставлялась. В условиях нашего примера продукция ранее не поставлялась, поэтому отчётная калькуляция не представляется."}}, {"@type": "Question", "name": "Что проверить в комплекте в последнюю очередь?", "acceptedAnswer": {"@type": "Answer", "text": "Сквозную сверку: итоги расшифровок равны строкам калькуляции, заработная плата выведена из трудоёмкости, нормативы в форме № 22 совпадают с применёнными, строка 1700 раскрыта на привнесённые и собственные затраты, прибыль не превышает предел, бланки взяты из действующей редакции приказа, а период в шапке соответствует форме."}}]}
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
<meta property="og:title" content="Образец заполнения РКМ: разбор комплекта по шагам">
<meta property="og:description" content="Условный пример комплекта РКМ: от нормо-часов до цены, с объяснением, откуда берётся каждая цифра и в какую строку калькуляции она попадает.">
<meta property="og:url" content="https://kaznaexpert.ru/baza-znaniy/obrazec-zapolneniya-rkm/">
<meta property="og:image" content="https://kaznaexpert.ru/img/og/baza-znaniy__obrazec-zapolneniya-rkm-16x9.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="675">
<meta property="og:image:alt" content="Образец заполнения РКМ по ГОЗ — КазнаЭксперт">
<meta property="article:published_time" content="2026-08-16T09:00:00+03:00">
<meta property="article:modified_time" content="2026-08-16T09:00:00+03:00">
<meta property="article:author" content="https://kaznaexpert.ru/komanda/mihailov-yaroslav/">
<meta property="article:section" content="База знаний">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Образец заполнения РКМ: разбор по шагам">
<meta name="twitter:description" content="От трудоёмкости до цены на условном примере: как собирается комплект РКМ и где он чаще всего ломается.">
<meta name="twitter:image" content="https://kaznaexpert.ru/img/og/baza-znaniy__obrazec-zapolneniya-rkm-16x9.jpg">

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
  <nav class="crumbs" aria-label="Хлебные крошки"><a href="/">Главная</a> › <a href="/baza-znaniy/">База знаний</a> › Образец заполнения РКМ</nav>

  <aside class="toc" aria-label="Содержание">
    <div class="toc__label">Содержание</div>
    <ul class="toc__list" id="tocList">
      <li><a href="#uslovie">Условия примера</a></li>
      <li><a href="#shag1">Шаг 1. Трудоёмкость</a></li>
      <li><a href="#shag2">Шаг 2. Оплата труда</a></li>
      <li><a href="#shag3">Шаг 3. Материальные затраты</a></li>
      <li><a href="#shag4">Шаг 4. Накладные затраты</a></li>
      <li><a href="#shag5">Шаг 5. Разрез себестоимости</a></li>
      <li><a href="#shag6">Шаг 6. Прибыль и цена</a></li>
      <li><a href="#zapiska">Пояснительная записка</a></li>
      <li><a href="#proverka">Самопроверка перед сдачей</a></li>
      <li><a href="#faq">Частые вопросы</a></li>
    </ul>
  </aside>

  <article class="content" id="main">
    <div class="hero">
      <img class="hero__crest hero__crest--light" src="/img/logogold-crest.webp" alt="" aria-hidden="true" width="188" height="137" decoding="async" loading="lazy">
      <img class="hero__crest hero__crest--dark" src="/img/LogoWhite.png" alt="" aria-hidden="true" width="188" height="137" decoding="async" loading="lazy">
      <div class="eyebrow">База знаний · Гособоронзаказ <span class="fresh">Актуально на август 2026</span></div>
    <h1>Образец заполнения РКМ: разбор комплекта по шагам на условном примере</h1>
    <div class="byline"><span class="av">ЯМ</span><span>Автор: <a href="/komanda/mihailov-yaroslav/">Ярослав Михайлов</a>, главный эксперт</span><span class="dot">·</span><span>15+ лет в Казначействе</span><span class="dot">·</span><span>13 мин чтения</span><span class="dot">·</span><span>Обновлено 16 августа 2026</span></div>
    </div>

    <div class="share">
      <span class="share__label">Поделиться:</span>
      <a href="https://t.me/share/url?url=https%3A%2F%2Fkaznaexpert.ru%2Fbaza-znaniy%2Fobrazec-zapolneniya-rkm%2F&amp;text=%D0%9E%D0%B1%D1%80%D0%B0%D0%B7%D0%B5%D1%86%20%D0%B7%D0%B0%D0%BF%D0%BE%D0%BB%D0%BD%D0%B5%D0%BD%D0%B8%D1%8F%20%D0%A0%D0%9A%D0%9C%3A%20%D1%80%D0%B0%D0%B7%D0%B1%D0%BE%D1%80%20%D0%BA%D0%BE%D0%BC%D0%BF%D0%BB%D0%B5%D0%BA%D1%82%D0%B0%20%D0%BF%D0%BE%20%D1%88%D0%B0%D0%B3%D0%B0%D0%BC%20%D0%BD%D0%B0%20%D1%83%D1%81%D0%BB%D0%BE%D0%B2%D0%BD%D0%BE%D0%BC%20%D0%BF%D1%80%D0%B8%D0%BC%D0%B5%D1%80%D0%B5%20%E2%80%94%20%D0%BE%D1%82%20%D1%80%D0%B0%D1%81%D1%87%D1%91%D1%82%D0%B0%20%D1%82%D1%80%D1%83%D0%B4%D0%BE%D1%91%D0%BC%D0%BA%D0%BE%D1%81%D1%82%D0%B8%20%D0%B4%D0%BE%20%D0%B8%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D0%BE%D0%B9%20%D1%86%D0%B5%D0%BD%D1%8B%2C%20%D1%81%20%D0%BE%D0%B1%D1%8A%D1%8F%D1%81%D0%BD%D0%B5%D0%BD%D0%B8%D0%B5%D0%BC%2C%20%D0%BE%D1%82%D0%BA%D1%83%D0%B4%D0%B0%20%D0%B1%D0%B5%D1%80%D1%91%D1%82%D1%81%D1%8F%20%D0%BA%D0%B0%D0%B6%D0%B4%D0%B0%D1%8F%20%D1%86%D0%B8%D1%84%D1%80%D0%B0" target="_blank" rel="noopener"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.56 8.25l-1.86 8.76c-.14.62-.5.77-1.02.48l-2.82-2.08-1.36 1.31c-.15.15-.28.28-.57.28l.2-2.89 5.27-4.76c.23-.2-.05-.32-.35-.12l-6.51 4.1-2.8-.88c-.61-.19-.62-.61.13-.9l10.95-4.22c.5-.18.95.12.79.85z"/></svg>Telegram</a>
      <button type="button" id="copyLink"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.07 0l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.07 0l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg><span>Копировать ссылку</span></button>
      <button type="button" id="printBtn"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9V2h12v7M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2M6 14h12v8H6z"/></svg>Скачать PDF</button>
    </div>

    <details class="mtoc"><summary>Содержание статьи</summary>
      <ol>
        <li><a href="#uslovie">Условия примера</a></li>
        <li><a href="#shag1">Шаг 1. Трудоёмкость</a></li>
        <li><a href="#shag2">Шаг 2. Оплата труда</a></li>
        <li><a href="#shag3">Шаг 3. Материальные затраты</a></li>
        <li><a href="#shag4">Шаг 4. Накладные затраты</a></li>
        <li><a href="#shag5">Шаг 5. Разрез себестоимости</a></li>
        <li><a href="#shag6">Шаг 6. Прибыль и цена</a></li>
        <li><a href="#zapiska">Пояснительная записка</a></li>
        <li><a href="#proverka">Самопроверка перед сдачей</a></li>
        <li><a href="#faq">Частые вопросы</a></li>
      </ol>
    </details>

    <style>
    .rkm-cta,.rkm-cta *{box-sizing:border-box}
    .rkm-cta{margin:38px 0;padding:24px 26px;background:linear-gradient(180deg,var(--card,#fffdf8),var(--soft,#fbf8f1));border:1px solid var(--line,#e4ddd0);border-radius:16px;max-width:100%}
    .rkm-cta__k{display:inline-block;font-size:11px;letter-spacing:.14em;text-transform:uppercase;color:var(--sepia,#7A5F3B);font-weight:600;margin:0 0 10px}
    .rkm-cta__t{font-family:var(--font-display,Georgia,serif);font-weight:500;font-size:clamp(1.2rem,1.2vw+.9rem,1.5rem);line-height:1.25;margin:0 0 10px;color:var(--ink,#1A1A1A)}
    .rkm-cta__p{margin:0 0 16px;font-size:15.5px;line-height:1.6;color:var(--ink-soft,#56524b)}
    .rkm-cta__act{display:flex;flex-wrap:wrap;gap:10px}
    .rkm-cta__b{display:inline-block;font-size:15px;font-weight:600;padding:12px 20px;border-radius:10px;text-decoration:none;line-height:1.5}
    .rkm-cta__b--p{background:var(--sepia,#7A5F3B);color:#fff}
    .rkm-cta__b--s{border:1px solid var(--line,#e4ddd0);color:var(--ink,#1A1A1A)}
    @media(max-width:680px){.rkm-cta{padding:20px 16px}.rkm-cta__b{width:100%;text-align:center}}
    </style>
    <div class="tldr">Разбираем заполнение комплекта РКМ по шагам на <b>условном примере</b>: от расчёта трудоёмкости до итоговой цены, с проговариванием, откуда берётся каждая цифра и в какую строку калькуляции она попадает. Все числа и нормативы в примере условные и приведены только для демонстрации логики — свои значения предприятие обосновывает собственными нормами, сметами и учётной политикой.</div>

    <div class="note"><b>Важно.</b> Это разбор методики, а не готовый шаблон для подстановки. Мы намеренно не выкладываем файлы форм для скачивания: бланк без ваших норм, ставок и нормативов даёт ложное ощущение готовности, а комплект всё равно возвращается. Актуальные бланки берите из действующей редакции приказа ФАС № 995/22, а логику сборки — отсюда.</div>

    <section class="keyfacts grain" aria-label="Ключевые факты">
      <h2>Коротко о главном</h2>
      <div class="keyfacts__grid">
        <div class="kf"><div class="kf__n">6 шагов</div><div class="kf__t"><b>Порядок сборки</b> — от трудоёмкости к цене, а не наоборот</div></div>
        <div class="kf"><div class="kf__n">Ф. 23 → Ф. 9</div><div class="kf__t"><b>Начало цепочки</b> — нормо-часы задают заработную плату</div></div>
        <div class="kf"><div class="kf__n">Стр. 1700</div><div class="kf__t"><b>Развилка прибыли</b> — соотношение привнесённых и собственных затрат</div></div>
        <div class="kf"><div class="kf__n">1 % + 25 %</div><div class="kf__t"><b>Предел прибыли</b> — от привнесённых и собственных затрат соответственно</div></div>
        <div class="kf"><div class="kf__n">Условные</div><div class="kf__t"><b>Все цифры примера</b> — демонстрационные, не нормативы и не ориентиры рынка</div></div>
        <div class="kf"><div class="kf__n">Сверка</div><div class="kf__t"><b>Последний шаг</b> — итоги расшифровок равны строкам калькуляции до рубля</div></div>
      </div>
    </section>
    <!-- svc-cta:top -->
    <div class="svc-cta svc-cta--top" role="complementary" aria-label="Услуга КазнаЭксперт"><div class="svc-cta__body"><span class="svc-cta__eyebrow">Цена по ГОЗ</span><p class="svc-cta__title">Составим РКМ так, чтобы военное представительство приняло с первого раза</p><p class="svc-cta__text">Плановая калькуляция, расшифровки статей, обоснование прибыли по правилу «1% + 25%» и нормативам приказа № 334 — комплект под протокол цены.</p><span class="svc-cta__price">105 000 ₽ за комплект</span></div><a class="svc-cta__btn" href="/uslugi/sostavlenie-rkm/" onclick="try{ym(94305898,'reachGoal','svccta_click',{svc:'sostavlenie-rkm',pos:'top'})}catch(e){}">Заказать РКМ →</a></div>
    <!-- /svc-cta:top -->


    <h2 id="uslovie">Условия примера</h2>
    <div class="answer reveal">
      <p class="lead-p">Условное предприятие поставляет партию из <b>10 изделий</b> по контракту в рамках гособоронзаказа. Цена определяется затратным методом, вид цены — ориентировочная (уточняемая). Продукция ранее не поставлялась, поэтому отчётная калькуляция на этой стадии не представляется.<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a> Собираем плановую калькуляцию по форме № 2 и подкладываем под неё расшифровки.</p>
    </div>
    <p><b>Все цифры ниже условные.</b> Нормативы (12 % дополнительной заработной платы, 30 % страховых взносов, 180 % общепроизводственных и 95 % общехозяйственных затрат от основной заработной платы, 4,5 % транспортно-заготовительных затрат, 1,5 % коммерческих затрат) взяты для наглядности расчёта. У вашего предприятия они будут другими и обосновываются сметами форм № 8, № 10, № 11, № 12, № 13 и закреплённой методикой учётной политики.</p>

    <h2 id="shag1">Шаг 1. Трудоёмкость — форма № 23</h2>
    <p>Сборка начинается не с материалов, а с нормо-часов: от них строится вся зарплатная часть калькуляции. В форме № 23 трудоёмкость раскрывается по видам работ на основании технологических процессов и действующих норм.</p>
    <table>
      <caption>Условный расчёт трудоёмкости на партию из 10 изделий</caption>
      <tr><th>Вид работ</th><th>Нормо-часов на изделие</th><th>На партию (10 шт.)</th></tr>
      <tr><td>Заготовительные</td><td>60</td><td>600</td></tr>
      <tr><td>Механическая обработка</td><td>180</td><td>1 800</td></tr>
      <tr><td>Сборка</td><td>140</td><td>1 400</td></tr>
      <tr><td>Регулировка и испытания</td><td>40</td><td>400</td></tr>
      <tr><td><b>Итого</b></td><td><b>420</b></td><td><b>4 200</b></td></tr>
    </table>
    <p><b>Откуда цифра.</b> Из технологических карт и норм времени, а не из «сколько получилось в прошлый раз». Это первая строка, которую военный представитель сверяет с техдокументацией: завышенная трудоёмкость — самая частая причина срезания цены.</p>

    <h2 id="shag2">Шаг 2. Оплата труда — формы № 9 и № 10</h2>
    <p>Основная заработная плата (строка 0201) считается от трудоёмкости и средней тарифной ставки, дополнительная (строка 0202) — по обоснованному нормативу из формы № 10.</p>
    <table>
      <caption>Условный расчёт затрат на оплату труда</caption>
      <tr><th>Показатель</th><th>Расчёт</th><th>Сумма, ₽</th></tr>
      <tr><td>Основная заработная плата (стр. 0201)</td><td>4 200 н-ч × 380 ₽/н-ч</td><td>1 596 000</td></tr>
      <tr><td>Дополнительная заработная плата (стр. 0202)</td><td>1 596 000 × 12 %</td><td>191 520</td></tr>
      <tr><td><b>Затраты на оплату труда (стр. 0200)</b></td><td>0201 + 0202</td><td><b>1 787 520</b></td></tr>
      <tr><td>Страховые взносы (стр. 0300)</td><td>1 787 520 × 30 %</td><td>536 256</td></tr>
    </table>
    <p><b>Откуда цифры.</b> Ставка 380 ₽/н-ч — условная средняя тарифная ставка по видам работ, она подтверждается штатным расписанием и системой оплаты труда. Норматив дополнительной заработной платы 12 % — условный: в форме № 10 он не берётся «из практики», а раскрывается структурой (отпуска, доплаты и прочие выплаты, входящие в состав дополнительной заработной платы).</p>

    <h2 id="shag3">Шаг 3. Материальные затраты — формы № 4–№ 8</h2>
    <p>Каждая позиция материалов и комплектующих раскрывается отдельной строкой расшифровки с ценой и подтверждением источника цены. Итоги расшифровок переносятся в строки 0101–0106 калькуляции.</p>
    <table>
      <caption>Условные материальные затраты на партию</caption>
      <tr><th>Строка</th><th>Статья</th><th>Форма-расшифровка</th><th>Сумма, ₽</th></tr>
      <tr><td>0101</td><td>Сырьё, материалы и вспомогательные материалы</td><td>№ 4</td><td>2 400 000</td></tr>
      <tr><td>0104</td><td>Покупные комплектующие изделия</td><td>№ 6</td><td>3 100 000</td></tr>
      <tr><td>0105</td><td>Работы и услуги сторонних организаций производственного характера</td><td>№ 7</td><td>450 000</td></tr>
      <tr><td>0106</td><td>Транспортно-заготовительные затраты (4,5 % от 5 500 000 ₽)</td><td>№ 8</td><td>247 500</td></tr>
      <tr><td><b>0100</b></td><td><b>Материальные затраты — всего</b></td><td>—</td><td><b>6 197 500</b></td></tr>
    </table>
    <p><b>Откуда цифры.</b> Цены материалов — из коммерческих предложений и договоров поставки; цены комплектующих в кооперации — из договоров, а сами эти цены должны быть обоснованы расчётно-калькуляционными материалами соисполнителей. Запрашивать их нужно заранее: без обоснования цены ПКИ вся строка 0104 повисает — подробнее о том, как это устроено, в разборе <a href="/baza-znaniy/soispolniteli-kooperaciya-goz/">цепочки кооперации в ГОЗ</a>. Норматив ТЗЗ 4,5 % условный и обосновывается расчётом формы № 8; в примере ТЗЗ — услуги сторонних перевозчиков, поэтому далее они отнесены к привнесённым затратам.</p>

    <h2 id="shag4">Шаг 4. Накладные и коммерческие затраты — формы № 11–№ 13</h2>
    <p>Общепроизводственные и общехозяйственные затраты в примере распределяются пропорционально основной заработной плате — база распределения закрепляется учётной политикой и обосновывается сметами.</p>
    <table>
      <caption>Условный расчёт накладных и коммерческих затрат</caption>
      <tr><th>Строка</th><th>Статья</th><th>Расчёт</th><th>Сумма, ₽</th></tr>
      <tr><td>0800</td><td>Общепроизводственные затраты (форма № 11)</td><td>1 596 000 × 180 %</td><td>2 872 800</td></tr>
      <tr><td>0900</td><td>Общехозяйственные затраты (форма № 12)</td><td>1 596 000 × 95 %</td><td>1 516 200</td></tr>
      <tr><td><b>1300</b></td><td><b>Производственная себестоимость</b></td><td>0100 + 0200 + 0300 + 0800 + 0900</td><td><b>12 910 276</b></td></tr>
      <tr><td>1400</td><td>Коммерческие (внепроизводственные) затраты (форма № 13)</td><td>12 910 276 × 1,5 %</td><td>193 654</td></tr>
      <tr><td><b>1700</b></td><td><b>Себестоимость продукции</b></td><td>1300 + 1400</td><td><b>13 103 930</b></td></tr>
    </table>
    <p><b>Откуда цифры.</b> Нормативы 180 % и 95 % — условные: в реальном комплекте каждый из них выводится из сметы соответствующих затрат и объёма базы распределения за период. Строки 1500 «Проценты по кредитам» и 1600 «Административно-управленческие расходы» в примере не заполняются: кредитов нет, а административно-управленческие расходы по условной учётной политике учтены в составе общехозяйственных затрат. Это как раз тот случай, когда бланк требует внимания: включение административно-управленческих расходов и применение статьи «Общехозяйственные затраты» зависят от того, как построена учётная политика организации.<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a></p>

    <h2 id="shag5">Шаг 5. Привнесённые и собственные затраты — строка 1700</h2>
    <p>Здесь комплект проходит развилку, от которой зависит прибыль. Себестоимость раскрывается в разрезе: привнесённые затраты — покупные ресурсы, собственные — созданное силами предприятия.</p>
    <table>
      <caption>Условное раскрытие себестоимости по строке 1700</caption>
      <tr><th>Группа</th><th>Что вошло</th><th>Сумма, ₽</th></tr>
      <tr><td>Привнесённые затраты</td><td>Строки 0101, 0104, 0105, 0106</td><td>6 197 500</td></tr>
      <tr><td>Собственные затраты</td><td>Оплата труда, взносы, накладные, коммерческие затраты</td><td>6 906 430</td></tr>
      <tr><td><b>Себестоимость (стр. 1700)</b></td><td>—</td><td><b>13 103 930</b></td></tr>
    </table>
    <p><b>Почему это важно.</b> Разделение — не бухгалтерская формальность, а прямой множитель прибыли. Отнесение затрат к той или иной группе должно опираться на экономическую суть операции и учётную политику, а не на желание увеличить базу — расхождение с данными <a href="/baza-znaniy/razdelnyy-uchet-goz-275-fz/">раздельного учёта</a> обнаруживается быстро.</p>

    <h2 id="shag6">Шаг 6. Прибыль и цена — форма № 20</h2>
    <p>Прибыль рассчитывается от структуры затрат: не более 1 % привнесённых плюс не более 25 % собственных.</p>
    <table>
      <caption>Условный расчёт прибыли и цены</caption>
      <tr><th>Показатель</th><th>Расчёт</th><th>Сумма, ₽</th></tr>
      <tr><td>1 % привнесённых затрат</td><td>6 197 500 × 1 %</td><td>61 975</td></tr>
      <tr><td>25 % собственных затрат</td><td>6 906 430 × 25 %</td><td>1 726 607,50</td></tr>
      <tr><td><b>Предельная прибыль (стр. 1800)</b></td><td>61 975 + 1 726 607,50</td><td><b>1 788 582</b></td></tr>
      <tr><td><b>Цена продукции без НДС (стр. 1900)</b></td><td>13 103 930 + 1 788 582</td><td><b>14 892 512</b></td></tr>
      <tr><td>Цена единицы продукции</td><td>14 892 512 ÷ 10</td><td>1 489 251,20</td></tr>
    </table>
    <p><b>Что показывает этот расчёт.</b> Если бы те же комплектующие на 3 100 000 ₽ предприятие изготавливало собственными силами при той же себестоимости, привнесённые затраты составили бы 3 097 500 ₽, собственные — 10 006 430 ₽, а предельная прибыль выросла бы до 2 532 582 ₽ — на 744 000 ₽ больше при неизменной себестоимости. Это и есть логика регулятора: собственная добавленная стоимость вознаграждается сильнее перепродажи покупных ресурсов. Подробный разбор правила и его границ — в статье о <a href="/baza-znaniy/normy-pribyli-goz/">нормах прибыли по гособоронзаказу</a>.</p>

    <div class="rkm-cta">
      <p class="rkm-cta__k">Услуга · 105 000 ₽ фиксированно</p>
      <p class="rkm-cta__t">Соберём ваш комплект РКМ вместо разбора примеров</p>
      <p class="rkm-cta__p">Определим состав форм под ваш контракт, посчитаем трудоёмкость, расшифровки и прибыль на ваших данных, напишем пояснительную записку и доведём комплект до принятия — включая ответы на замечания военного представительства и повторную защиту. Цена не меняется после того, как мы увидим документы.</p>
      <div class="rkm-cta__act"><a class="rkm-cta__b rkm-cta__b--p" href="/uslugi/sostavlenie-rkm/">Заказать составление РКМ</a><a class="rkm-cta__b rkm-cta__b--s" href="tel:+79818331010">+7 981 833-10-10</a></div>
    </div>

    <h2 id="zapiska">Пояснительная записка: что написать по этому примеру</h2>
    <p>Записка — не сопроводительное письмо, а объяснение методики. По нашему условному комплекту в ней стоило бы раскрыть:</p>
    <ul>
      <li>почему применён затратный метод определения цены и почему неприменимы остальные;</li>
      <li>источник трудоёмкости: реквизиты технологической документации и норм времени;</li>
      <li>источник цен материалов и комплектующих: договоры, коммерческие предложения, обоснования цен соисполнителей;</li>
      <li>расчёт нормативов дополнительной заработной платы, накладных и коммерческих затрат со ссылкой на сметы и учётную политику;</li>
      <li>принцип отнесения затрат к привнесённым и собственным;</li>
      <li>отличия от предыдущих калькуляций по аналогичной продукции, если они есть.</li>
    </ul>
    <p>Практическое наблюдение: записка с конкретными реквизитами документов по каждой существенной строке сокращает количество уточняющих запросов сильнее, чем любые переговоры о цене.</p>

    <h2 id="proverka">Самопроверка перед сдачей</h2>
    <p>Короткий чек-лист, который закрывает большую часть возвратов.</p>
    <table>
      <caption>Сквозная сверка комплекта</caption>
      <tr><th>Что проверяем</th><th>Как должно быть</th></tr>
      <tr><td>Итоги расшифровок и строки калькуляции</td><td>Совпадают до рубля по каждой строке 0101–0106</td></tr>
      <tr><td>Трудоёмкость и заработная плата</td><td>Основная зарплата выведена из нормо-часов формы № 23, а не подогнана под сумму</td></tr>
      <tr><td>Нормативы в форме № 22</td><td>Совпадают с фактически применёнными в калькуляции</td></tr>
      <tr><td>Строка 1700</td><td>Раскрыта на привнесённые и собственные затраты, сумма равна итогу</td></tr>
      <tr><td>Прибыль в форме № 20</td><td>Считается от базы разреза 1700, не превышает предел и обоснована</td></tr>
      <tr><td>Бланк формы</td><td>Действующая редакция приказа № 995/22, период в шапке соответствует форме («г.» или «гг.»)</td></tr>
      <tr><td>Подписи</td><td>Подписные блоки заполнены по бланку каждой формы</td></tr>
      <tr><td>Носитель</td><td>Бумажный комплект плюс электронный вид на оптическом носителе — копии и живые таблицы</td></tr>
    </table>
    <p>Полный перечень бланков с официальными названиями — на странице <a href="/baza-znaniy/formy-rkm-995-22/">формы РКМ по приказу № 995/22</a>; общая логика комплекта и правовая база — в базовой статье о <a href="/baza-znaniy/rkm-po-gosoboronzakazu/">расчётно-калькуляционных материалах по гособоронзаказу</a>.</p>

    <div class="takeaways">
      <h2>Что важно запомнить</h2>
      <ol>
        <li>Комплект собирается снизу вверх: трудоёмкость → зарплата → материалы → накладные → себестоимость → прибыль → цена.</li>
        <li>Каждая цифра калькуляции должна выводиться из расшифровки, а расшифровка — из документа.</li>
        <li>Разрез строки 1700 на привнесённые и собственные затраты определяет предельную прибыль.</li>
        <li>Нормативы накладных и дополнительной заработной платы обосновываются сметами, а не берутся по аналогии.</li>
        <li>Все цифры этого разбора условные: они показывают логику, а не значения для подстановки.</li>
        <li>Перед сдачей — сквозная сверка: расшифровки, трудоёмкость, нормативы, разрез себестоимости, прибыль и бланк.</li>
      </ol>
    </div>

    <h2 id="faq">Частые вопросы</h2>
    <div class="faq"><details open><summary>Можно ли скачать готовый образец РКМ?</summary><p>Актуальные бланки форм берутся из действующей редакции приказа ФАС России № 995/22. Готовый заполненный образец использовать как шаблон нельзя: цифры в нём чужие, а комплект проверяется на соответствие вашим нормам, ценам, сметам и учётной политике. На этой странице разобрана методика заполнения на условном примере — это то, что переносится на ваш контракт, в отличие от чужих чисел.</p></details>
<details><summary>С какой формы начинать заполнение комплекта?</summary><p>С расчёта трудоёмкости — формы № 23. От нормо-часов строится основная и дополнительная заработная плата, а от заработной платы в большинстве методик распределяются общепроизводственные и общехозяйственные затраты. Если начать с итоговой цены и «раскидывать» её по статьям, комплект не сойдётся при первой же сверке.</p></details>
<details><summary>Откуда берётся норматив общепроизводственных затрат?</summary><p>Из сметы и расчёта по форме № 11: норматив выводится как отношение сметы общепроизводственных затрат к базе распределения за период. База распределения (чаще всего основная заработная плата) закрепляется учётной политикой организации. Использованный в примере норматив 180 % условный и ориентиром не является.</p></details>
<details><summary>Как считается прибыль в комплекте РКМ?</summary><p>От структуры себестоимости, раскрытой по строке 1700: не более 1 % привнесённых затрат плюс не более 25 % собственных. В условном примере при привнесённых затратах 6 197 500 ₽ и собственных 6 906 430 ₽ предельная прибыль составляет 1 788 582 ₽. Расчёт оформляется формой № 20.</p></details>
<details><summary>Нужна ли отчётная калькуляция, если это первая поставка?</summary><p>Нет. По сноске к форме № 3 отчётная калькуляция представляется по последнему отчётному периоду исполненного контракта, если продукция ранее поставлялась. В условиях нашего примера продукция ранее не поставлялась, поэтому отчётная калькуляция не представляется.</p></details>
<details><summary>Что проверить в комплекте в последнюю очередь?</summary><p>Сквозную сверку: итоги расшифровок равны строкам калькуляции, заработная плата выведена из трудоёмкости, нормативы в форме № 22 совпадают с применёнными, строка 1700 раскрыта на привнесённые и собственные затраты, прибыль не превышает предел, бланки взяты из действующей редакции приказа, а период в шапке соответствует форме.</p></details></div>

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
    <div class="svc-cta svc-cta--end" role="complementary" aria-label="Услуги КазнаЭксперт"><div class="svc-cta__card"><span class="svc-cta__eyebrow">Цена по ГОЗ</span><p class="svc-cta__title">Составим РКМ так, чтобы военное представительство приняло с первого раза</p><p class="svc-cta__text">Плановая калькуляция, расшифровки статей, обоснование прибыли по правилу «1% + 25%» и нормативам приказа № 334 — комплект под протокол цены.</p><span class="svc-cta__price">105 000 ₽ за комплект</span><a class="svc-cta__btn" href="/uslugi/sostavlenie-rkm/" onclick="try{ym(94305898,'reachGoal','svccta_click',{svc:'sostavlenie-rkm',pos:'end'})}catch(e){}">Заказать РКМ →</a></div><div class="svc-cta__card svc-cta__card--edu"><span class="svc-cta__eyebrow">Топ-услуга · обучение</span><p class="svc-cta__title">Научим вести казначейское сопровождение самостоятельно</p><p class="svc-cta__text">9 академических часов один на один с экспертом Федерального казначейства — на ваших контрактах: счёт, «Электронный бюджет», сведения и коды, санкционирование, раздельный учёт. После курса вы ведёте контракт сами, без отказов.</p><span class="svc-cta__price">150 000 ₽ · индивидуально</span><a class="svc-cta__btn" href="/uslugi/obuchenie-kaznacheyskomu-soprovozhdeniyu/" onclick="try{ym(94305898,'reachGoal','svccta_click',{svc:'obuchenie',pos:'end'})}catch(e){}">Записаться на обучение →</a></div></div>
    <!-- /svc-cta:end -->
<div class="refs">
      <h2>Источники и нормативная база</h2>
      <ol>
        <li id="ref-1">Приказ ФАС России от 16.12.2022 № 995/22 «Об утверждении форм документов, предусмотренных Положением о государственном регулировании цен на продукцию, поставляемую по государственному оборонному заказу…» (ред. от 18.12.2025), приложение № 5 — <a href="https://www.consultant.ru/document/cons_doc_LAW_436477/" target="_blank" rel="noopener">consultant.ru</a></li>
        <li id="ref-2">Постановление Правительства РФ от 02.12.2017 № 1465 «О государственном регулировании цен на продукцию, поставляемую по государственному оборонному заказу…» (ред. от 14.02.2026) — <a href="https://www.consultant.ru/document/cons_doc_LAW_284195/" target="_blank" rel="noopener">consultant.ru</a></li>
        <li id="ref-3">Приказ Минпромторга России от 08.02.2019 № 334 «Об утверждении порядка определения состава затрат, включаемых в цену продукции, поставляемой в рамках государственного оборонного заказа» (ред. от 26.11.2025) — <a href="https://www.consultant.ru/document/cons_doc_LAW_322968/" target="_blank" rel="noopener">consultant.ru</a></li>
      </ol>
      <p class="refs__note">Материал актуален на 16 августа 2026 года. Все числовые значения примера условные и приведены исключительно для демонстрации методики расчёта; они не являются нормативами, рыночными ориентирами или рекомендацией по величине затрат. Бланки форм берите из действующей редакции приказа ФАС № 995/22 на дату подачи комплекта.</p>
    </div>

    <div class="art-fb" id="artFb" style="margin:34px 0 6px;padding:18px 22px;background:var(--soft,#fbf8f1);border:1px solid var(--line,#e4ddd0);border-radius:14px;display:flex;align-items:center;gap:14px;flex-wrap:wrap">
      <span style="font-size:15px">Помогла ли статья?</span>
      <button type="button" data-fb="yes" style="font:inherit;font-size:14px;padding:8px 16px;border:1px solid var(--line,#e4ddd0);border-radius:9px;background:#fff;cursor:pointer">Да</button>
      <button type="button" data-fb="no" style="font:inherit;font-size:14px;padding:8px 16px;border:1px solid var(--line,#e4ddd0);border-radius:9px;background:#fff;cursor:pointer">Не совсем</button>
    </div>
    <script>(function(){var w=document.getElementById('artFb');if(!w)return;w.addEventListener('click',function(e){var b=e.target.closest('button[data-fb]');if(!b)return;try{window.ym&&ym(window.YM_ID||0,'reachGoal','article_feedback_'+b.dataset.fb);}catch(_){}w.innerHTML='<span style="font-size:15px">'+(b.dataset.fb==='yes'?'Спасибо! Рады, что пригодилось.':'Спасибо! Напишите в <a href="https://t.me/Kaznaexpert" target="_blank" rel="noopener" style="text-decoration:underline">Telegram</a>, чего не хватило — доработаем.')+'</span>';});})();</script>

  </article>

  <aside class="rail">
    <form class="railform" id="leadForm" novalidate data-endpoint="/php/lead.php" data-source="obrazec-zapolneniya-rkm">
      <div class="railform__badge">Разбор эксперта</div>
      <h3 class="railform__title">Нужен не пример, а комплект?</h3>
      <p class="railform__sub">Посчитаем трудоёмкость, расшифровки и прибыль на ваших данных, оформим формы приказа № 995/22 и доведём комплект до принятия у военного представительства.</p>
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
<a class="rail-svc" href="/uslugi/sostavlenie-rkm/"><span class="rail-svc__k">Поможем под ключ</span><span class="rail-svc__n">Составление РКМ — 105 000 ₽ →</span></a>
</aside>
</div>

<section class="related" aria-labelledby="relTitle">
  <div class="related__head"><h2 id="relTitle">Что почитать ещё</h2><a href="/baza-znaniy/">Вся база знаний →</a></div>
  <div class="related__grid">
    <a class="card reveal" href="/baza-znaniy/formy-rkm-995-22/"><div class="card__cover"><span>Формы</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Формы РКМ по приказу № 995/22: полный перечень</h3><div class="card__meta">Гособоронзаказ · 14 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/rkm-po-gosoboronzakazu/"><div class="card__cover"><span>РКМ</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">РКМ по гособоронзаказу: формы, заполнение и пояснительная записка</h3><div class="card__meta">Гособоронзаказ · 16 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/planovaya-i-otchetnaya-kalkulyaciya-goz/"><div class="card__cover"><span>Ф. 2 / Ф. 3</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Плановая и отчётная калькуляция по ГОЗ: разница и состав</h3><div class="card__meta">Гособоронзаказ · 11 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/normy-pribyli-goz/"><div class="card__cover"><span>1 + 25</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Нормы прибыли по ГОЗ: правило «1 % + 25 %»</h3><div class="card__meta">Гособоронзаказ · 14 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/razdelnyy-uchet-goz-275-fz/"><div class="card__cover"><span>Учёт</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Раздельный учёт по ГОЗ: методика, проводки, штрафы</h3><div class="card__meta">Раздельный учёт · 18 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/rkm-rasshifrovka/"><div class="card__cover"><span>Термин</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">РКМ: расшифровка аббревиатуры и назначение</h3><div class="card__meta">Гособоронзаказ · 9 мин</div></div></a>
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

<section class="kz-sub" aria-labelledby="kzSubTitle" data-source="obrazec-zapolneniya-rkm">
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

<style id="mtrStyle">
.mtr{position:fixed;left:10px;top:50%;transform:translateY(-50%);z-index:60;display:flex;align-items:center;gap:8px}
.mtr__ticks{display:flex;flex-direction:column;gap:7px;padding:12px 8px;cursor:pointer}
.mtr__tick{display:block;width:14px;height:2px;background:var(--line,#d8d0c0);border-radius:2px;transition:width .25s,background .25s}
.mtr__tick.on{width:24px;background:var(--sepia,#8B6F47)}
.mtr:hover .mtr__tick{background:var(--sepia,#8B6F47);opacity:.75}
.mtr__panel{position:absolute;left:42px;top:50%;transform:translateY(-50%) translateX(-10px);opacity:0;pointer-events:none;background:#FBF8F1;border:1px solid #e4ddd0;border-radius:14px;padding:16px 8px 16px 20px;width:300px;max-height:72vh;overflow:auto;box-shadow:0 26px 52px -26px rgba(26,26,26,.4);transition:opacity .25s ease,transform .25s ease}
.mtr:hover .mtr__panel,.mtr:focus-within .mtr__panel,.mtr--peek .mtr__panel{opacity:1;pointer-events:auto;transform:translateY(-50%) translateX(0)}
.mtr--peek{pointer-events:none}
.mtr__panel b{display:block;font-size:11px;letter-spacing:.08em;text-transform:uppercase;color:#8B6F47;margin:0 0 8px}
.mtr__panel ol{list-style:none;margin:0;padding:0 12px 0 0}
.mtr__panel a{display:block;font-size:13.5px;line-height:1.35;color:#56524b;text-decoration:none;padding:5px 8px;border-radius:7px;border-left:2px solid transparent}
.mtr__panel a:hover{background:rgba(139,111,71,.08);color:#1A1A1A}
.mtr__panel a.on{border-left-color:#8B6F47;color:#1A1A1A;font-weight:600}
@keyframes mtrHello{0%,100%{transform:translateX(0)}50%{transform:translateX(5px)}}
.mtr--hello .mtr__ticks{animation:mtrHello 1.1s ease 2 .6s}
@media(max-width:1319px),(pointer:coarse){.mtr{display:none}}
@media print{.mtr{display:none}}
</style>
<div class="mtr mtr--hello" id="mtr" hidden>
  <div class="mtr__ticks" id="mtrTicks" tabindex="0" role="button" aria-label="Открыть содержание" title="Содержание"></div>
  <nav class="mtr__panel" aria-label="Содержание статьи"><b>Содержание</b><ol id="mtrList"></ol></nav>
</div>
<script>
(function(){
  var src=document.querySelectorAll('.toc__list a'); if(!src.length) return;
  var box=document.getElementById('mtr'), list=document.getElementById('mtrList'), ticks=document.getElementById('mtrTicks');
  var items=[];
  src.forEach(function(a){
    var id=(a.getAttribute('href')||'').slice(1), h=id&&document.getElementById(id); if(!h) return;
    var t=document.createElement('span'); t.className='mtr__tick'; ticks.appendChild(t);
    var li=document.createElement('li'), l=document.createElement('a'); l.href='#'+id; l.textContent=a.textContent; li.appendChild(l); list.appendChild(li);
    items.push({h:h,t:t,l:l});
  });
  if(!items.length) return;
  box.hidden=false;
  function spy(){
    var y=window.scrollY+140, cur=items[0];
    items.forEach(function(it){ if(it.h.offsetTop<=y) cur=it; });
    items.forEach(function(it){ var on=it===cur; it.t.classList.toggle('on',on); it.l.classList.toggle('on',on); });
  }
  var tm; window.addEventListener('scroll',function(){ if(tm) return; tm=setTimeout(function(){tm=null;spy();},120); },{passive:true});
  spy();
  try{
    if(!sessionStorage.getItem('mtrPeek')){
      sessionStorage.setItem('mtrPeek','1');
      setTimeout(function(){ box.classList.add('mtr--peek'); },900);
      setTimeout(function(){ box.classList.remove('mtr--peek'); },3400);
    }
  }catch(_){}
  setTimeout(function(){ box.classList.remove('mtr--hello'); },4200);
})();
</script>

<style id="edt2026">
/* ===== Editorial 2026: режим чтения (одна колонка, журнальная типографика) ===== */
.layout{display:block!important;max-width:840px!important;padding:46px 30px 90px!important}
.content{max-width:none!important}
/* типографика: тёмный текст, крупный кегль, высокий интерлиньяж */
.content p,.content li{color:var(--ink,#1A1A1A);font-size:17px;line-height:1.78}
.content p{margin:0 0 22px}
.content ul,.content ol{margin:0 0 26px;padding-left:22px}
.content li{margin:0 0 10px}
.lead-p{font-size:19px;line-height:1.72}
.tldr{font-size:17px;line-height:1.72;padding:24px 28px;margin:30px 0 34px}
.content h2{margin:84px 0 26px;line-height:1.14}
.content h3{margin:52px 0 16px}
.content h2+p,.content h3+p{margin-top:0}
.byline{margin-top:18px}
/* таблицы — редакционные: только горизонтальные линейки, высокие строки */
.content table{margin:56px 0 64px;font-size:15px;border-top:2px solid var(--ink,#1A1A1A)}
.content caption{font-style:normal;font-size:11.5px;font-weight:600;letter-spacing:.14em;text-transform:uppercase;color:var(--ink-mute,#8a8170);padding:16px 0 14px}
.content th{background:none;border-bottom:1.5px solid var(--ink,#1A1A1A);padding:10px 22px 12px 0;font-size:11px}
.content td{padding:18px 22px 18px 0;border-bottom:1px solid var(--line,#e4ddd0);line-height:1.6;font-size:15px;color:var(--ink,#1A1A1A)}
.content td+td,.content th+th{border-left:none}
.content tr:nth-child(even) td{background:none}
.content tr:last-child td{border-bottom:1px solid var(--line,#e4ddd0)}
.content td:first-child{font-weight:600}
/* note/answer — врезки с воздухом */
.note{margin:34px 0;padding:20px 24px;line-height:1.7}
/* вехи содержания — у кромки колонки текста */
.mtr{left:max(14px,calc(50% - 530px))}
/* кнопка «наверх» поднимается над CTA */
.totop{bottom:96px!important}
/* ===== форма: выдвижная панель + постоянная CTA-кнопка ===== */
@media(min-width:861px){
  .rail{position:fixed!important;top:0;right:0;height:100vh;width:min(430px,94vw);margin:0;padding:74px 28px 30px;background:var(--paper,#FAF7F0);box-shadow:-34px 0 64px -30px rgba(26,26,26,.4);transform:translateX(112%);transition:transform .32s cubic-bezier(.22,.8,.3,1);z-index:95;overflow:auto}
  body.rail-open .rail{transform:none}
  body.rail-open::before{content:'';position:fixed;inset:0;background:rgba(26,26,26,.34);z-index:94}
  .rail-close{position:absolute;top:18px;right:18px;width:38px;height:38px;border:1px solid var(--line,#e4ddd0);border-radius:50%;background:none;color:var(--ink,#1A1A1A);font-size:17px;line-height:1;cursor:pointer}
}
.rail-toggle{position:fixed;right:22px;bottom:26px;z-index:93;display:inline-flex;align-items:center;gap:9px;background:var(--ink,#1A1A1A);color:#fff;border:none;border-radius:999px;padding:10px 22px;font:600 14.5px/1.2 'Inter',system-ui,sans-serif;box-shadow:0 18px 38px -16px rgba(26,26,26,.55);cursor:pointer;transition:background .2s,transform .2s}
.rail-toggle:hover{background:var(--sepia,#8B6F47);transform:translateY(-2px)}
.rail-toggle .dot{width:7px;height:7px;border-radius:50%;background:#7ad07a}
@media(max-width:860px){.rail-toggle,.rail-close{display:none}}
@media print{.rail-toggle,.rail{display:none!important}}
</style>
<script>
(function(){
  var r=document.querySelector('.rail'); if(!r) return;
  if(window.matchMedia&&window.matchMedia('(min-width:861px)').matches){
    var b=document.createElement('button'); b.className='rail-toggle'; b.type='button';
    b.innerHTML='<span class="dot"></span>Разбор эксперта';
    document.body.appendChild(b);
    var x=document.createElement('button'); x.className='rail-close'; x.type='button'; x.setAttribute('aria-label','Закрыть'); x.innerHTML='✕'; r.appendChild(x);
    function open(){ document.body.classList.add('rail-open'); try{ if(typeof ym==='function') ym(94305898,'reachGoal','rail_open'); }catch(_){ } }
    function close(){ document.body.classList.remove('rail-open'); }
    b.addEventListener('click',function(){ document.body.classList.contains('rail-open')?close():open(); });
    x.addEventListener('click',close);
    document.addEventListener('keydown',function(e){ if(e.key==='Escape') close(); });
    document.addEventListener('click',function(e){ if(document.body.classList.contains('rail-open')&&!r.contains(e.target)&&!b.contains(e.target)) close(); });
  }
})();
</script>

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
<script>/* mtr-tail-controller: прячем мини-навигатор на related/footer (scroll-based) */
(function(){var m=document.getElementById('mtr');if(!m)return;
var tail=document.querySelector('.related')||document.querySelector('.v2-footer');if(!tail)return;
function upd(){m.classList.toggle('mtr--tail', tail.getBoundingClientRect().top < window.innerHeight*0.65);}
var t;window.addEventListener('scroll',function(){if(t)return;t=setTimeout(function(){t=null;upd();},100);},{passive:true});
window.addEventListener('resize',upd,{passive:true});upd();})();</script>
<link rel="stylesheet" href="/assets/svc-cta.css">
<link rel="stylesheet" href="/assets/kg-lead.css"><script src="/assets/kg-lead.js" defer></script>
</body>
</html>
