<?php /* Cache-Control задаёт .htaccess — единая точка правды для кэш-заголовков */ ?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Регистрация в ГИИС «Электронный бюджет»: подключение 2026</title>
<meta name="description" content="Как исполнителю госконтракта зарегистрироваться в ГИИС «Электронный бюджет» в 2026: регистрация в ПОИБ СОБИ, электронная подпись, СКЗИ, роли и МЧД — пошагово.">
<meta name="author" content="Ярослав Михайлов">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1">
<meta name="theme-color" content="#F4F1EB" media="(prefers-color-scheme: light)">
<meta name="theme-color" content="#141310" media="(prefers-color-scheme: dark)">
<!-- PROD: canonical и og:url ОБЯЗАТЕЛЬНО менять под URL каждой статьи -->
<link rel="canonical" href="https://kaznaexpert.ru/baza-znaniy/registraciya-v-giis-elektronnyy-byudzhet/">
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
<script>window.YM_PARAMS = {page_type:"cluster", cluster:"elektronnyy-byudzhet"};</script>

<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "Article", "headline": "Регистрация в ГИИС «Электронный бюджет»: как подключиться исполнителю госконтракта в 2026 году", "description": "Как исполнителю госконтракта зарегистрироваться в ГИИС «Электронный бюджет» в 2026: регистрация в ПОИБ СОБИ, электронная подпись, СКЗИ, роли и МЧД — пошагово.", "inLanguage": "ru-RU", "datePublished": "2026-08-04", "dateModified": "2026-08-31", "author": {"@type": "Person", "name": "Ярослав Михайлов", "jobTitle": "Главный эксперт по казначейскому сопровождению", "url": "https://kaznaexpert.ru/komanda/mihailov-yaroslav/", "image": "https://kaznaexpert.ru/img/team/mihailov-photo.jpg"}, "publisher": {"@type": "Organization", "name": "КазнаЭксперт", "url": "https://kaznaexpert.ru", "logo": {"@type": "ImageObject", "url": "https://kaznaexpert.ru/img/logogold.png"}}, "image": ["https://kaznaexpert.ru/img/og/baza-znaniy__registraciya-v-giis-elektronnyy-byudzhet-16x9.jpg", "https://kaznaexpert.ru/img/og/baza-znaniy__registraciya-v-giis-elektronnyy-byudzhet-4x3.webp", "https://kaznaexpert.ru/img/og/baza-znaniy__registraciya-v-giis-elektronnyy-byudzhet-1x1.webp"], "mainEntityOfPage": {"@type": "WebPage", "@id": "https://kaznaexpert.ru/baza-znaniy/registraciya-v-giis-elektronnyy-byudzhet/"}}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "Главная", "item": "https://kaznaexpert.ru/"}, {"@type": "ListItem", "position": 2, "name": "База знаний", "item": "https://kaznaexpert.ru/baza-znaniy/"}, {"@type": "ListItem", "position": 3, "name": "Регистрация в ГИИС «Электронный бюджет»", "item": "https://kaznaexpert.ru/baza-znaniy/registraciya-v-giis-elektronnyy-byudzhet/"}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [{"@type": "Question", "name": "С чего начать регистрацию в ГИИС «Электронный бюджет»?", "acceptedAnswer": {"@type": "Answer", "text": "С регистрации организации в подсистеме безопасности ПОИБ СОБИ. Руководитель входит туда по квалифицированной электронной подписи или через ЕСИА с профилем организации, регистрирует организацию и подаёт заявку на подключение к нужным подсистемам."}}, {"@type": "Question", "name": "Кто должен регистрировать организацию — руководитель или бухгалтер?", "acceptedAnswer": {"@type": "Answer", "text": "Первичный вход и регистрацию выполняет руководитель как лицо, действующее без доверенности. Сотрудники (в том числе бухгалтер) подключаются позже — по своим электронным подписям и машиночитаемым доверенностям."}}, {"@type": "Question", "name": "Какая электронная подпись нужна для «Электронного бюджета»?", "acceptedAnswer": {"@type": "Answer", "text": "Квалифицированная электронная подпись: для руководителя коммерческой организации — из удостоверяющего центра ФНС России, для организации бюджетной сферы — из удостоверяющего центра Федерального казначейства."}}, {"@type": "Question", "name": "Нужны ли средства криптографической защиты (СКЗИ)?", "acceptedAnswer": {"@type": "Answer", "text": "Да. Для защищённого соединения с системой оформляется заявка на СКЗИ, если организация получает их впервые, и устанавливается криптопровайдер с корневыми сертификатами."}}, {"@type": "Question", "name": "Чем регистрация в «Электронном бюджете» отличается от открытия лицевого счёта?", "acceptedAnswer": {"@type": "Answer", "text": "Это разные процедуры. Регистрация даёт доступ к системе и возможность подавать документы, а открытие лицевого счёта в казначействе — отдельный шаг для учёта целевых средств по контракту."}}, {"@type": "Question", "name": "Что такое ПОИБ СОБИ?", "acceptedAnswer": {"@type": "Answer", "text": "Это подсистема обеспечения информационной безопасности «Электронного бюджета». С регистрации в ней начинается подключение организации к рабочим подсистемам."}}, {"@type": "Question", "name": "Сколько занимает подключение?", "acceptedAnswer": {"@type": "Answer", "text": "Зависит от готовности организации: при действующей подписи руководителя и настроенном рабочем месте подключение проходит быстро; дольше всего затягивают получение СКЗИ и настройка криптосредств."}}, {"@type": "Question", "name": "Можно ли передать подключение специалисту?", "acceptedAnswer": {"@type": "Answer", "text": "Да. Открытие лицевого счёта, подключение к системе, настройку ролей и первые платежи можно передать на аутсорсинг. Оставьте заявку — разберём вашу ситуацию."}}, {"@type": "Question", "name": "Как проходит регистрация в ГИИС «Электронный бюджет»?", "acceptedAnswer": {"@type": "Answer", "text": "Организация подаёт заявку на подключение через территориальный орган казначейства: оформляет сертификаты электронной подписи на руководителя и уполномоченных сотрудников, машиночитаемую доверенность, заявку с указанием ролей и полномочий доступа, после чего настраивает рабочее место — КриптоПро, плагин браузера, корневые сертификаты и «Континент TLS Клиент». Доступ открывается после проверки заявки казначейством."}}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "HowTo", "name": "Как зарегистрировать организацию в ГИИС «Электронный бюджет»", "inLanguage": "ru-RU", "step": [{"@type": "HowToStep", "position": 1, "name": "Получить электронную подпись руководителя", "text": "Коммерческая организация — в аккредитованном удостоверяющем центре (руководитель юрлица — в УЦ ФНС России), организация бюджетной сферы — в удостоверяющем центре Федерального казначейства."}, {"@type": "HowToStep", "position": 2, "name": "Зарегистрировать организацию в ПОИБ СОБИ", "text": "Руководитель входит в подсистему безопасности по сертификату подписи или через ЕСИА с профилем организации и регистрирует организацию."}, {"@type": "HowToStep", "position": 3, "name": "Подать заявку на подключение", "text": "Сформировать заявку на подключение к нужным подсистемам «Электронного бюджета» и согласовать её через территориальный орган казначейства."}, {"@type": "HowToStep", "position": 4, "name": "Оформить СКЗИ", "text": "Если организация не получала средства криптографической защиты ранее, подать заявку на их выдачу для защищённого канала."}, {"@type": "HowToStep", "position": 5, "name": "Настроить рабочее место", "text": "Установить криптопровайдер, браузерный плагин и корневые сертификаты удостоверяющего центра."}, {"@type": "HowToStep", "position": 6, "name": "Завести пользователей и роли", "text": "Зарегистрировать сотрудников с разграничением прав: ввод, проверка, подписание."}, {"@type": "HowToStep", "position": 7, "name": "Оформить машиночитаемые доверенности", "text": "Выпустить МЧД на сотрудников, действующих от имени организации, вместе с их электронными подписями."}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "DefinedTermSet", "name": "Термины: подключение к ГИИС «Электронный бюджет»", "inLanguage": "ru-RU", "hasDefinedTerm": [{"@type": "DefinedTerm", "name": "ГИИС «Электронный бюджет»", "description": "Государственная интегрированная информационная система управления общественными финансами; оператор — Федеральное казначейство."}, {"@type": "DefinedTerm", "name": "ПОИБ СОБИ", "description": "Подсистема обеспечения информационной безопасности «Электронного бюджета», с регистрации в которой начинается подключение организации."}, {"@type": "DefinedTerm", "name": "СКЗИ", "description": "Средства криптографической защиты информации, обеспечивающие защищённый канал связи с системой."}, {"@type": "DefinedTerm", "name": "ЕСИА", "description": "Единая система идентификации и аутентификации; вход в систему по подтверждённому профилю организации."}, {"@type": "DefinedTerm", "name": "МЧД", "description": "Машиночитаемая доверенность, связывающая электронную подпись сотрудника с полномочиями действовать от имени организации."}, {"@type": "DefinedTerm", "name": "УКЭП", "description": "Усиленная квалифицированная электронная подпись, которой подписывают документы в системе."}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "Person", "name": "Ярослав Михайлов", "jobTitle": "Главный эксперт по казначейскому сопровождению", "worksFor": {"@type": "Organization", "name": "КазнаЭксперт", "url": "https://kaznaexpert.ru"}, "url": "https://kaznaexpert.ru/komanda/mihailov-yaroslav/", "sameAs": ["https://t.me/Kaznaexpert", "https://www.rusprofile.ru/ip/321784700367672"], "image": "https://kaznaexpert.ru/img/team/mihailov-photo.jpg"}
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
<meta property="og:title" content="Регистрация в ГИИС «Электронный бюджет»: подключение в 2026">
<meta property="og:description" content="Пошаговое подключение исполнителя казначейского сопровождения к ГИИС «Электронный бюджет»: ПОИБ СОБИ, электронная подпись, СКЗИ, настройка рабочего места, роли и машиночитаемая доверенность.">
<meta property="og:url" content="https://kaznaexpert.ru/baza-znaniy/registraciya-v-giis-elektronnyy-byudzhet/">
<meta property="og:image" content="https://kaznaexpert.ru/img/og/baza-znaniy__registraciya-v-giis-elektronnyy-byudzhet-16x9.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="675">
<meta property="og:image:alt" content="Регистрация в ГИИС «Электронный бюджет»: подключение в 2026 — КазнаЭксперт">
<meta property="article:published_time" content="2026-06-05T09:00:00+03:00">
<meta property="article:modified_time" content="2026-08-31T09:00:00+03:00">
<meta property="article:author" content="https://kaznaexpert.ru/komanda/mihailov-yaroslav/">
<meta property="article:section" content="База знаний">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Регистрация в ГИИС «Электронный бюджет»: подключение в 2026">
<meta name="twitter:description" content="Пошаговое подключение исполнителя казначейского сопровождения к ГИИС «Электронный бюджет»: ПОИБ СОБИ, электронная подпись, СКЗИ, настройка рабочего места, роли и машиночитаемая доверенность.">
<meta name="twitter:image" content="https://kaznaexpert.ru/img/og/baza-znaniy__registraciya-v-giis-elektronnyy-byudzhet-16x9.jpg">


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
  <nav class="crumbs" aria-label="Хлебные крошки"><a href="/">Главная</a> › <a href="/baza-znaniy/">База знаний</a> › Регистрация в ГИИС «Электронный бюджет»</nav>

  <aside class="toc" aria-label="Содержание">
    <div class="toc__label">Содержание</div>
    <ul class="toc__list" id="tocList">
      <li><a href="#korotkiy-otvet">Короткий ответ: с чего начинается подключение</a></li>
      <li><a href="#chto-takoe">Что такое ГИИС «Электронный бюджет» и зачем регистрация исполнителю</a></li>
      <li><a href="#komu-nuzhno">Кому нужна регистрация в системе</a></li>
      <li><a href="#pravovaya">Правовая база системы</a></li>
      <li><a href="#shagi">Пошаговый порядок регистрации и подключения</a></li>
      <li><a href="#bez-bumagi">Бумажную заявку для сопровождения отменили</a></li>
      <li><a href="#podpis-skzi">Электронная подпись, СКЗИ и настройка рабочего места</a></li>
      <li><a href="#roli-mchd">Роли пользователей и машиночитаемая доверенность</a></li>
      <li><a href="#kody-mchd">Коды полномочий и роли доступа</a></li>
      <li><a href="#tehnika">Требования к рабочему месту</a></li>
      <li><a href="#sroki-oshibki">Сроки подключения и частые ошибки</a></li>
      <li><a href="#glossary">Глоссарий</a></li>
      <li><a href="#faq">Частые вопросы</a></li>
    </ul>
  </aside>

  <article class="content" id="main">
    <div class="hero">
      <img class="hero__crest hero__crest--light" src="/img/logogold-crest.webp" alt="" aria-hidden="true" width="188" height="137" decoding="async" loading="lazy">
      <img class="hero__crest hero__crest--dark" src="/img/LogoWhite.png" alt="" aria-hidden="true" width="188" height="137" decoding="async" loading="lazy">
      <div class="eyebrow">База знаний · Электронный бюджет <span class="fresh">Актуально на 2026</span></div>
    <h1>Регистрация в ГИИС «Электронный бюджет»: как подключиться исполнителю госконтракта в 2026 году</h1>
    <div class="byline"><span class="av">ЯМ</span><span>Автор: <a href="/komanda/mihailov-yaroslav/">Ярослав Михайлов</a>, главный эксперт</span><span class="dot">·</span><span>15+ лет в Казначействе</span><span class="dot">·</span><span>12 мин чтения</span><span class="dot">·</span><span>Обновлено 31 августа 2026</span></div>
    </div>

    <div class="share">
      <span class="share__label">Поделиться:</span>
      <a href="https://t.me/share/url?url=https%3A%2F%2Fkaznaexpert.ru%2Fbaza-znaniy%2Fregistraciya-v-giis-elektronnyy-byudzhet%2F&amp;text=%D0%A0%D0%B5%D0%B3%D0%B8%D1%81%D1%82%D1%80%D0%B0%D1%86%D0%B8%D1%8F%20%D0%B2%20%D0%93%D0%98%D0%98%D0%A1%20%C2%AB%D0%AD%D0%BB%D0%B5%D0%BA%D1%82%D1%80%D0%BE%D0%BD%D0%BD%D1%8B%D0%B9%20%D0%B1%D1%8E%D0%B4%D0%B6%D0%B5%D1%82%C2%BB%20%D0%B4%D0%BB%D1%8F%20%D0%B8%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D0%B8%D1%82%D0%B5%D0%BB%D1%8F%20%D0%B3%D0%BE%D1%81%D0%BA%D0%BE%D0%BD%D1%82%D1%80%D0%B0%D0%BA%D1%82%D0%B0%3A%20%D0%9F%D0%9E%D0%98%D0%91%20%D0%A1%D0%9E%D0%91%D0%98%2C%20%D1%8D%D0%BB%D0%B5%D0%BA%D1%82%D1%80%D0%BE%D0%BD%D0%BD%D0%B0%D1%8F%20%D0%BF%D0%BE%D0%B4%D0%BF%D0%B8%D1%81%D1%8C%2C%20%D0%A1%D0%9A%D0%97%D0%98%2C%20%D1%80%D0%BE%D0%BB%D0%B8%20%D0%B8%20%D0%9C%D0%A7%D0%94%20%E2%80%94%20%D0%BF%D0%BE%D1%88%D0%B0%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D0%BE%D1%80%D1%8F%D0%B4%D0%BE%D0%BA%20%D0%BF%D0%BE%D0%B4%D0%BA%D0%BB%D1%8E%D1%87%D0%B5%D0%BD%D0%B8%D1%8F%20%D0%B2%202026%20%D0%B3%D0%BE%D0%B4%D1%83" target="_blank" rel="noopener"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.56 8.25l-1.86 8.76c-.14.62-.5.77-1.02.48l-2.82-2.08-1.36 1.31c-.15.15-.28.28-.57.28l.2-2.89 5.27-4.76c.23-.2-.05-.32-.35-.12l-6.51 4.1-2.8-.88c-.61-.19-.62-.61.13-.9l10.95-4.22c.5-.18.95.12.79.85z"/></svg>Telegram</a>
      <button type="button" id="copyLink"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.07 0l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.07 0l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg><span>Копировать ссылку</span></button>
      <button type="button" id="printBtn"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9V2h12v7M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2M6 14h12v8H6z"/></svg>Скачать PDF</button>
    </div>

    <details class="mtoc"><summary>Содержание статьи</summary>
      <ol>
        <li><a href="#korotkiy-otvet">Короткий ответ: с чего начинается подключение</a></li><li><a href="#chto-takoe">Что такое ГИИС «Электронный бюджет» и зачем регистрация исполнителю</a></li><li><a href="#komu-nuzhno">Кому нужна регистрация в системе</a></li><li><a href="#pravovaya">Правовая база</a></li><li><a href="#shagi">Пошаговый порядок</a></li>
        <li><a href="#bez-bumagi">Отмена бумажной заявки</a></li><li><a href="#podpis-skzi">Электронная подпись, СКЗИ и настройка рабочего места</a></li><li><a href="#roli-mchd">Роли и МЧД</a></li><li><a href="#kody-mchd">Коды полномочий</a></li>
        <li><a href="#tehnika">Требования к рабочему месту</a></li><li><a href="#sroki-oshibki">Сроки подключения и частые ошибки</a></li><li><a href="#glossary">Глоссарий</a></li><li><a href="#faq">Частые вопросы</a></li>
      </ol>
    </details>

    <div class="tldr">Регистрация в ГИИС «Электронный бюджет» для исполнителя государственного контракта начинается не с самой системы, а с подсистемы информационной безопасности — ПОИБ СОБИ. Руководитель организации входит туда по квалифицированной электронной подписи (или через ЕСИА с профилем организации), регистрирует организацию и подаёт заявку на подключение к нужным подсистемам. Затем оформляется заявка на средства криптографической защиты (СКЗИ), настраивается рабочее место, регистрируются пользователи с распределением ролей «ввод — проверка — подписание» и оформляются машиночитаемые доверенности на сотрудников. Только после этого исполнитель может формировать и подписывать сведения об операциях с целевыми средствами и распоряжения о казначейских платежах.</div>

    <section class="keyfacts grain" aria-label="Ключевые факты">
      <h2>Коротко о главном</h2>
      <div class="keyfacts__grid">
        <div class="kf"><div class="kf__n">ПОИБ СОБИ</div><div class="kf__t"><b>Первый шаг</b> — Регистрация организации начинается в подсистеме обеспечения информационной безопасности — до доступа к рабочим подсистемам «Электронного бюджета»</div></div>
        <div class="kf"><div class="kf__n">Электронная подпись</div><div class="kf__t"><b>Обязательна</b> — Вход и регистрацию выполняет руководитель по квалифицированной электронной подписи или через ЕСИА с подтверждённым профилем организации</div></div>
        <div class="kf"><div class="kf__n">СКЗИ</div><div class="kf__t"><b>Защищённый канал</b> — Для работы оформляется заявка на средства криптографической защиты информации, если организация получает их впервые</div></div>
        <div class="kf"><div class="kf__n">МЧД</div><div class="kf__t"><b>Для сотрудников</b> — Сотрудники, действующие от имени организации, работают по машиночитаемой доверенности с электронной подписью физического лица</div></div>
      </div>
    </section>
    <!-- svc-cta:top -->
    <div class="svc-cta svc-cta--top" role="complementary" aria-label="Услуга КазнаЭксперт"><div class="svc-cta__body"><span class="svc-cta__eyebrow">Топ-услуга · обучение</span><p class="svc-cta__title">Научим вести казначейское сопровождение самостоятельно</p><p class="svc-cta__text">9 академических часов один на один с экспертом Федерального казначейства — на ваших контрактах: счёт, «Электронный бюджет», сведения и коды, санкционирование, раздельный учёт. После курса вы ведёте контракт сами, без отказов.</p><span class="svc-cta__price">150 000 ₽ · индивидуально</span></div><a class="svc-cta__btn" href="/uslugi/obuchenie-kaznacheyskomu-soprovozhdeniyu/" onclick="try{ym(94305898,'reachGoal','svccta_click',{svc:'obuchenie',pos:'top'})}catch(e){}">Записаться на обучение →</a></div>
    <!-- /svc-cta:top -->


    <h2 id="korotkiy-otvet">Короткий ответ: с чего начинается подключение</h2>
    <div class="answer reveal">
      <p class="lead-p">Чтобы работать в ГИИС «Электронный бюджет», исполнитель сначала регистрирует организацию в подсистеме обеспечения информационной безопасности ПОИБ СОБИ: вход выполняет руководитель по квалифицированной электронной подписи либо через ЕСИА. Дальше — заявка на подключение, оформление СКЗИ, настройка рабочего места, регистрация пользователей с распределением ролей и машиночитаемые доверенности на сотрудников.</p>
    </div>
    <p>Чтобы работать в ГИИС «Электронный бюджет», исполнителю казначейского сопровождения сначала нужно зарегистрировать организацию в подсистеме обеспечения информационной безопасности — ПОИБ СОБИ, и только потом получить доступ к рабочим подсистемам. Вход и регистрацию выполняет руководитель организации по квалифицированной электронной подписи либо через ЕСИА с подтверждённым профилем организации.</p>
    <p>Дальше порядок укладывается в несколько шагов: заявка на подключение, оформление средств криптографической защиты информации (СКЗИ), настройка рабочего места, регистрация пользователей с распределением ролей и оформление машиночитаемых доверенностей на сотрудников. Ниже — каждый шаг по порядку и типичные места, где подключение затягивается.</p>

    <h2 id="chto-takoe">Что такое ГИИС «Электронный бюджет» и зачем регистрация исполнителю</h2>
    <p>ГИИС «Электронный бюджет» — государственная интегрированная информационная система управления общественными финансами; её оператором выступает Федеральное казначейство. Через систему участники казначейского сопровождения взаимодействуют с территориальным органом казначейства в электронном виде.</p>
    <p>Для исполнителя государственного контракта регистрация нужна, чтобы формировать и подписывать <a href="/baza-znaniy/svedeniya-ob-operaciyah-s-celevymi-sredstvami/">сведения об операциях с целевыми средствами</a>, направлять <a href="/baza-znaniy/rasporyazhenie-o-sovershenii-kaznacheyskogo-platezha/">распоряжения о совершении казначейских платежей</a> и обмениваться документами с казначейством. Без подключения к системе провести операции по <a href="/baza-znaniy/licevoy-schet-71-kak-otkryt/">лицевому счёту</a> при казначейском сопровождении невозможно.</p>

    <h2 id="komu-nuzhno">Кому нужна регистрация в системе</h2>
    <p>Подключение требуется организации, которая стала участником казначейского сопровождения: получила государственный контракт с условием о сопровождении, целевой аванс, субсидию или исполняет гособоронзаказ и открывает лицевой счёт в территориальном органе казначейства.</p>
    <ul>
      <li>Головные исполнители и соисполнители по цепочке кооперации, которым открываются лицевые счета для целевых средств.</li>
      <li>Юридические лица и индивидуальные предприниматели — получатели целевых субсидий и бюджетных инвестиций, подпадающих под сопровождение.</li>
      <li>Организации, которым нужно подавать сведения об операциях и распоряжения в электронной форме через казначейство.</li>
    </ul>
    <p>Если контракт под сопровождение не подпадает, отдельная регистрация в «Электронном бюджете» исполнителю не нужна — расчёты идут в обычном порядке через банк.</p>

    <h2 id="pravovaya">Правовая база: на чём стоит система</h2>
    <p>Система создана постановлением Правительства РФ от 30.06.2015 № 658; действующая редакция — от 01.11.2025 (постановление № 1735), а крупнейшая переработка Положения прошла постановлением от 30.10.2025 № 1689. Знать эти нормы полезно не ради формальной точности: они отвечают на вопросы, которые возникают на практике.<a class="fn" href="#ref-4" aria-label="Источник 4">[4]</a></p>

    <h3 id="normy-polozheniya">Какие нормы Положения пригодятся исполнителю</h3>
    <table>
      <caption>Нормы Положения о системе, которые пригодятся исполнителю (утв. ПП РФ № 658)</caption>
      <tr><th>Пункт</th><th>Что устанавливает</th><th>Зачем это знать</th></tr>
      <tr><td>п. 2</td><td>Система предназначена в том числе для выполнения функций участников казначейского сопровождения (в ред. постановления от 30.10.2025 № 1689)</td><td>Подтверждает, что контур сопровождения — штатная функция системы, а не надстройка</td></tr>
      <tr><td>п. 6, 7</td><td>Система состоит из подсистем, подсистемы — из компонентов и модулей; расходный контур — подсистема управления расходами</td><td>Отсюда название «компонент казначейского сопровождения подсистемы управления расходами»</td></tr>
      <tr><td>п. 12</td><td>При формировании и обмене документами применяются усиленные квалифицированные электронные подписи</td><td>Простая подпись и вход по логину для подписания не годятся</td></tr>
      <tr><td><b>п. 13(1)</b></td><td>При подтверждённой оператором недоступности системы <b>более 8 часов рабочего времени</b> документооборот ведётся на бумаге с досылкой в систему не позднее следующего рабочего дня</td><td>Единственное легальное основание уйти на бумагу при сбое — и порог здесь конкретный</td></tr>
      <tr><td>п. 19, 20</td><td>Операторы системы — Минфин России и Федеральное казначейство; перечень подсистем под оператором Казначейства устанавливает Минфин</td><td>Перечень задан приказом Минфина от 30.12.2019 № 259н (ред. от 20.01.2025) — это ответ на вопрос «кому писать»</td></tr>
      <tr><td>п. 21</td><td>Субъекты системы — в том числе юридические лица, индивидуальные предприниматели, крестьянские (фермерские) хозяйства, получающие средства из бюджетов, <b>включая подлежащие казначейскому сопровождению</b></td><td>Ваш формальный статус в системе — «субъект», а не «пользователь»</td></tr>
      <tr><td>п. 25</td><td>Субъект системы сам определяет уполномоченных лиц и их полномочия, а также лиц, ответственных за техническое обеспечение работы</td><td>Приказ о назначении ответственных — не формальность, а требование Положения</td></tr>
    </table>

    <h2 id="shagi">Пошаговый порядок регистрации и подключения</h2>
    <p>Порядок подключения участника выстраивается последовательно — каждый следующий шаг опирается на предыдущий.</p>
    <ol>
      <li><b>Квалифицированная электронная подпись руководителя.</b> Коммерческая организация получает подпись в аккредитованном удостоверяющем центре (для руководителя юридического лица — в удостоверяющем центре ФНС России), организация бюджетной сферы — в удостоверяющем центре Федерального казначейства.</li>
      <li><b>Регистрация в ПОИБ СОБИ.</b> Руководитель (лицо, имеющее право действовать без доверенности) входит в подсистему безопасности по сертификату подписи или через ЕСИА и регистрирует организацию.</li>
      <li><b>Заявка на подключение.</b> Формируется заявка на подключение организации к нужным подсистемам «Электронного бюджета» и, как правило, согласуется через территориальный орган казначейства по месту обслуживания.</li>
      <li><b>Средства криптографической защиты (СКЗИ).</b> Если организация не получала СКЗИ ранее, оформляется заявка на их выдачу для защищённого канала связи с системой.</li>
      <li><b>Настройка рабочего места.</b> На компьютер устанавливаются криптопровайдер, браузерный плагин и корневые сертификаты удостоверяющего центра.</li>
      <li><b>Регистрация пользователей и ролей.</b> В системе заводятся сотрудники с разграничением прав: ввод документов, проверка, подписание.</li>
      <li><b>Машиночитаемые доверенности.</b> На сотрудников, которые действуют от имени организации, оформляются МЧД с их электронными подписями.</li>
    </ol>

    <h2 id="bez-bumagi">Бумажную заявку для компонента сопровождения отменили</h2>
    <p>Инструкции трёх-пятилетней давности, которые до сих пор ходят по рукам, описывают подачу заявки на подключение пользователя в территориальный орган казначейства на бумаге. Для компонента казначейского сопровождения это уже не так.</p>

    <h3 id="bumazhnaya-zayavka">Нужна ли бумажная заявка на подключение пользователя</h3>
    <p>Официальный документ Федерального казначейства с перечнем полномочий и ролей компонента сопровождения открывается прямым предупреждением: подключение полномочий подсистемы управления расходами компонента казначейского сопровождения осуществляется с использованием функционала подсистемы обеспечения информационной безопасности <b>без представления в органы Федерального казначейства заявки на подключение (изменение данных) пользователя на бумажном носителе</b>.<a class="fn" href="#ref-5" aria-label="Источник 5">[5]</a></p>

    <p>То есть управление доступом в контуре сопровождения — самообслуживание в личном кабинете, а не поход в управление с папкой документов. Модель такая: полномочиями сотрудников управляет <b>лицо, включённое в ЕГРЮЛ</b>, то есть руководитель, — он входит в подсистему информационной безопасности по квалифицированной подписи, подтверждает адрес электронной почты и дальше либо сам назначает роли, либо делегирует это, назначив сотруднику роль <b>«Регистратор»</b>.</p>

    <h3 id="tochki-vhoda">Какие адреса входа использовать</h3>
    <table>
      <caption>Точки входа: что где находится</caption>
      <tr><th>Адрес</th><th>Что это</th></tr>
      <tr><td><span class="mono">sobi.login.roskazna.ru</span></td><td>Вход в подсистему обеспечения информационной безопасности — здесь регистрируются пользователи, назначаются роли и работают с доверенностями</td></tr>
      <tr><td><span class="mono">eb.cert.roskazna.ru</span></td><td>Вход в компонент казначейского сопровождения подсистемы управления расходами — рабочий контур: лицевой счёт, Сведения, распоряжения</td></tr>
      <tr><td><span class="mono">eb.start.roskazna.ru</span></td><td>«Цифровой ассистент» Казначейства: проверяет состояние программного обеспечения на компьютере, доустанавливает недостающее и формирует отчёт об ошибках</td></tr>
      <tr><td><span class="mono">fzs.roskazna.ru</span></td><td><a href="/baza-znaniy/portal-zayavitelya-kaznachejstva/">Портал заявителя</a> — только подача документов на сертификат, не платёжный контур</td></tr>
    </table>

    <h3 id="bumazhnyy-trek">Где бумажный комплект документов всё ещё нужен</h3>
    <div class="note"><b>Бумажный трек остался там, где открывается лицевой счёт.</b> Комплект документов в территориальный орган по-прежнему подаётся при открытии лицевого счёта: заявление, карточка образцов подписей или машиночитаемая доверенность, копия приказа о назначении ответственных лиц при обмене электронными документами, согласия на обработку персональных данных на каждого регистрируемого сотрудника и файлы сертификатов в архиве. Не путайте два шага: открытие счёта и выдача прав в системе — разные процедуры с разными правилами.</div>

    <h2 id="podpis-skzi">Электронная подпись, СКЗИ и настройка рабочего места</h2>
    <p>Ключевой элемент подключения — квалифицированная электронная подпись. Первичный вход и регистрацию организации выполняет именно руководитель: система идентифицирует его как лицо, действующее без доверенности. Для сотрудников подпись оформляется отдельно, на физическое лицо, и применяется вместе с машиночитаемой доверенностью.</p>
    <p>Защищённое соединение с системой обеспечивают средства криптографической защиты информации. Если организация подключается впервые, СКЗИ нужно получить и корректно установить вместе с криптопровайдером и корневыми сертификатами — без этого рабочее место не пройдёт проверку и вход в закрытый контур не состоится. О продлении и отзыве сертификата — в материале о том, <a href="/baza-znaniy/kak-prodlit-i-otozvat-ecp-kaznachejstva/">как продлить и отозвать подпись</a>.</p>

    
    <h3>Где брать подпись: развилка, на которой ошибаются чаще всего</h3>
    <p>Распространённое убеждение звучит так: «работаем с казначейством — значит, и подпись нужна казначейская». Для коммерческой организации это неверно, и норма здесь однозначная.</p>

    <h3 id="kto-kakaya-podpis">Кто и где получает сертификат подписи</h3>
    <table>
      <caption>Кто какую подпись применяет (Федеральный закон от 06.04.2011 № 63-ФЗ, ред. от 31.07.2025)</caption>
      <tr><th>Кто вы</th><th>Где получаете сертификат</th><th>Норма</th></tr>
      <tr><td><b>Коммерческая организация — исполнитель госконтракта</b>, в том числе с лицевым счётом в казначействе</td><td><b>Удостоверяющий центр ФНС России</b> — подпись юридического лица на руководителя, действующего без доверенности. Для сотрудников — сертификат физического лица в аккредитованном удостоверяющем центре</td><td>п. 1 ч. 1 ст. 17.2</td></tr>
      <tr><td>Представитель организации (сотрудник)</td><td>Аккредитованный удостоверяющий центр, сертификат на физическое лицо; применяется вместе с машиночитаемой доверенностью</td><td>п. 2 ч. 1 ст. 17.2</td></tr>
      <tr><td>Государственные органы, органы местного самоуправления, государственные и муниципальные учреждения, госкорпорации и госкомпании, публично-правовые компании, операторы государственных информационных систем</td><td>Удостоверяющий центр Федерального казначейства — <b>и только для автоматического создания и проверки подписи</b></td><td>ст. 17.4</td></tr>
    </table>

    <h3 id="podpis-kommercheskoy">Может ли коммерческая компания получить подпись в казначействе</h3>
    <p>Виды юридических лиц, которым удостоверяющий центр Федерального казначейства создаёт и выдаёт сертификаты, определены постановлением Правительства РФ от 10.07.2020 № 1018. Коммерческая компания — исполнитель государственного контракта под него не подпадает, даже если ей открыт лицевой счёт в территориальном органе. Официальные памятки управлений казначейства формулируют это прямо: организации, имеющие лицевые счета в территориальных органах, но не имеющие правовых оснований получать сертификаты в Федеральном казначействе, применяют сертификаты, полученные в ФНС России либо в иных аккредитованных удостоверяющих центрах.<a class="fn" href="#ref-6" aria-label="Источник 6">[6]</a></p>

    <h3 id="rekvizity-sertifikata">Какие реквизиты должны быть в сертификате</h3>
    <div class="note"><b>Требование к содержанию сертификата.</b> Для входа в подсистему информационной безопасности годится сертификат, созданный удостоверяющим центром Казначейства, <b>либо</b> сертификат аккредитованного удостоверяющего центра, в котором указаны ИНН физического лица или СНИЛС. Это не формальность: сертификат без этих реквизитов система не сопоставит с учётной записью, и вход не состоится. Материал о <a href="/baza-znaniy/sertifikat-ecp-kaznachejstvo/">сертификате и подписи казначейства</a> адресован тем, кто действительно попадает под постановление № 1018 — учреждениям и органам власти.</div>

    <h2 id="roli-mchd">Роли пользователей и машиночитаемая доверенность</h2>
    <p>Работа в «Электронном бюджете» построена на разделении ролей: один сотрудник вводит документ, второй проверяет, третий подписывает и отправляет. Такое разграничение снижает риск ошибок и соответствует логике внутреннего контроля.</p>
    <p>Сотрудники, подписывающие документы от имени организации, работают по машиночитаемой доверенности (МЧД): она связывает электронную подпись физического лица с полномочиями действовать за юридическое лицо. Как оформить и применить МЧД — в отдельном разборе про <a href="/baza-znaniy/mashinochitaemaya-doverennost-kaznachejstvo/">машиночитаемую доверенность для казначейства</a>.</p>

    <h2 id="kody-mchd">Коды полномочий и роли доступа: что назначать</h2>
    <p>Обязательность машиночитаемой доверенности в компоненте казначейского сопровождения — не отраслевая рекомендация, а два конкретных рубежа, установленных письмами Федерального казначейства.</p>

    <h3 id="kogda-mchd-obyazatelna">С какого момента доверенность стала обязательной</h3>
    <table>
      <caption>Когда машиночитаемая доверенность стала обязательной</caption>
      <tr><th>Кого касается</th><th>Рубеж</th><th>Основание</th></tr>
      <tr><td>Лица, наделённые правом первой и второй подписи в компоненте сопровождения <b>до</b> вступления в силу приказа № 22н</td><td>Подписание без доверенности было возможно <b>до 1 апреля 2025 года</b></td><td>Письмо Федерального казначейства от 12.02.2025 № 07-04-05/04-3889</td></tr>
      <tr><td>Лица, наделяемые правом подписи <b>после</b> вступления приказа № 22н в силу</td><td>Только при наличии доверенности в электронной форме</td><td>То же письмо</td></tr>
      <tr><td>Лица с правом подписи по лицевым счетам с кодом 41 на основании карточки образцов подписей</td><td>Подписание без доверенности было возможно <b>до 1 июня 2025 года</b></td><td>Письмо Федерального казначейства от 31.03.2025 № 07-04-05/04-8762</td></tr>
    </table>

    <h3 id="mchd-prikazy">Какими приказами введена машиночитаемая доверенность</h3>
    <p>Правовая связка: применение доверенности в машиночитаемом виде введено приказом Федерального казначейства от 06.12.2024 № 22н, которым изменён Порядок открытия лицевых счетов участникам казначейского сопровождения (приказ Федерального казначейства от 22.12.2021 № 44н, действующая редакция — от 30.09.2025). Способ представления доверенностей задан приказом Федерального казначейства от 28.12.2023 № 26н: представление осуществляется <b>в личных кабинетах пользователей информационных систем Федерального казначейства</b>.<a class="fn" href="#ref-7" aria-label="Источник 7">[7]</a></p>

    <h3>Какие полномочия выдаются доверенностью</h3>
    <table>
      <caption>Коды полномочий машиночитаемой доверенности для компонента казначейского сопровождения</caption>
      <tr><th>Кто</th><th>Что подписывает</th><th>Уровень подписи</th></tr>
      <tr><td>Руководитель (уполномоченное лицо) участника сопровождения</td><td>Распоряжения, Сведения об операциях с целевыми средствами, Акт приёмки-передачи показателей лицевого счёта, Расходная декларация, документы о приёмке</td><td>Первая подпись</td></tr>
      <tr><td>Главный бухгалтер (уполномоченное лицо)</td><td>Тот же перечень документов</td><td>Вторая подпись</td></tr>
      <tr><td>Руководитель финансово-экономической службы</td><td>Расшифровка к распоряжению, Сведения об операциях с целевыми средствами</td><td>Вторая подпись</td></tr>
      <tr><td>Руководитель со стороны заказчика</td><td>Документы при открытии лицевых счетов, утверждение Сведений, работа приёмочной комиссии</td><td>Первая подпись</td></tr>
    </table>

    <h3 id="roli-bez-mchd">Какие роли нельзя выдать без доверенности</h3>
    <div class="note"><b>Правило, которое экономит день работы.</b> В официальном перечне ролей, доступных <b>без</b> доверенности, есть только просмотровые и вводные — ввод документов по лицевому счёту юридического лица и просмотр своих документов. Все роли, связанные с <b>утверждением и подписанием</b>, назначаются исключительно через машиночитаемую доверенность. Единственное исключение — руководитель из ЕГРЮЛ, которого система опознаёт как такового без доверенности. Поэтому схема «дадим бухгалтеру роль подписанта в личном кабинете» не работает: сначала доверенность, потом роль.</div>

    <h3 id="gde-sozdat-mchd">Где создать и добавить доверенность</h3>
    <p>Доверенности можно создавать в подсистеме информационной безопасности Казначейства и добавлять туда доверенности, оформленные в реестре ФНС России, — контуры связаны в едином пространстве доверенностей. Операции стандартные: выдача, запрос, добавление и отмена. Практика оформления разобрана в материале о <a href="/baza-znaniy/mashinochitaemaya-doverennost-kaznachejstvo/">машиночитаемой доверенности для казначейства</a>.</p>

    <h2 id="tehnika">Требования к рабочему месту</h2>
    <p>Состав программного обеспечения Казначейство публикует официально, и он заметно отличается от того, что описывают инструкции пятилетней давности.<a class="fn" href="#ref-8" aria-label="Источник 8">[8]</a></p>

    <h3 id="sostav-po">Что должно стоять на компьютере пользователя</h3>
    <table>
      <caption>Что должно стоять на компьютере пользователя</caption>
      <tr><th>Компонент</th><th>Требование</th></tr>
      <tr><td>Операционная система</td><td>Windows 7 SP1 и выше, а также отечественные: Astra Linux, Альт Линукс, GosLinux, РЕД ОС</td></tr>
      <tr><td>Браузер</td><td>С поддержкой криптоалгоритмов ГОСТ: Яндекс.Браузер версии 17.9.1 и выше либо браузер Chromium ГОСТ. В Яндекс.Браузере нужно включить подключение к сайтам с шифрованием по ГОСТ</td></tr>
      <tr><td>Криптопровайдер</td><td>Сертифицированная версия КриптоПро CSP</td></tr>
      <tr><td>Плагин</td><td>КриптоПро ЭЦП Browser Plugin версии 2.0 и расширение в браузере</td></tr>
      <tr><td>Сертификаты</td><td>Личный сертификат плюс сертификаты головного удостоверяющего центра Минцифры России и удостоверяющего центра Федерального казначейства по ГОСТ Р 34.10-2012</td></tr>
      <tr><td>Надёжные узлы</td><td>Адреса подсистемы информационной безопасности добавляются в список надёжных сайтов в настройках обозревателя</td></tr>
    </table>

    <h3 id="kontinent">Нужен ли Континент TLS-Клиент</h3>
    <div class="note"><b>Про «Континент».</b> Требование обязательно устанавливать Континент TLS-Клиент встречается в региональных памятках, но действующая федеральная страница Казначейства с требованиями к рабочему месту его не содержит — там браузер с ГОСТ плюс КриптоПро. Реально существуют два пути входа, и какой применяется у вас, зависит от территориального органа. Прежде чем ставить дополнительное программное обеспечение, сверьтесь с памяткой своего управления — лишний клиент защищённого канала создаёт собственные проблемы с сетью. И самый быстрый способ проверить готовность машины — «Цифровой ассистент» Казначейства: он сам определит недостающее.</div>

    <h2 id="sroki-oshibki">Сроки подключения и частые ошибки</h2>
    <p>Сроки зависят не столько от казначейства, сколько от готовности организации: быстрее всего проходят те, у кого заранее выпущена подпись руководителя и настроено рабочее место. Дольше всего затягивают именно технические шаги — получение СКЗИ и установка криптосредств.</p>
    <ul>
      <li>Пытаются регистрировать организацию с подписи сотрудника, а не руководителя — система не пускает.</li>
      <li>Начинают подключение без действующей квалифицированной подписи или с истёкшим сертификатом.</li>
      <li>Не оформили СКЗИ заранее — рабочее место не проходит проверку защищённого соединения.</li>
      <li>Не выпустили МЧД на сотрудников — документы некому подписать после регистрации.</li>
      <li>Путают подключение к «Электронному бюджету» с <a href="/baza-znaniy/licevoy-schet-71-kak-otkryt/">открытием лицевого счёта</a>: это связанные, но разные процедуры.</li>
    </ul>

    <div class="takeaways">
      <h2>Главное</h2>
      <ul>
        <li>Регистрация начинается с подсистемы безопасности ПОИБ СОБИ, а не с самой системы «Электронный бюджет».</li>
        <li>Первичный вход и регистрацию организации выполняет руководитель по квалифицированной электронной подписи или через ЕСИА.</li>
        <li>Средства криптографической защиты и настройка рабочего места — самый долгий технический шаг, его лучше готовить заранее.</li>
        <li>Сотрудники работают по машиночитаемой доверенности с распределением ролей ввод — проверка — подписание.</li>
        <li>Подключение к «Электронному бюджету» и открытие лицевого счёта — связанные, но разные процедуры.</li>
      </ul>
    </div>

    <h2 id="glossary">Глоссарий</h2>
    <dl class="gloss">
      <div><dt>ГИИС «Электронный бюджет»</dt><dd>Государственная интегрированная информационная система управления общественными финансами; оператор — Федеральное казначейство.</dd></div>
      <div><dt>ПОИБ СОБИ</dt><dd>Подсистема обеспечения информационной безопасности «Электронного бюджета», с регистрации в которой начинается подключение организации.</dd></div>
      <div><dt>СКЗИ</dt><dd>Средства криптографической защиты информации, обеспечивающие защищённый канал связи с системой.</dd></div>
      <div><dt>ЕСИА</dt><dd>Единая система идентификации и аутентификации; вход в систему по подтверждённому профилю организации.</dd></div>
      <div><dt>МЧД</dt><dd>Машиночитаемая доверенность, связывающая электронную подпись сотрудника с полномочиями действовать от имени организации.</dd></div>
      <div><dt>УКЭП</dt><dd>Усиленная квалифицированная электронная подпись, которой подписывают документы в системе.</dd></div>
    </dl>

    <h2 id="faq">Частые вопросы</h2>
    <div class="faq">
      <details><summary>Как проходит регистрация в ГИИС «Электронный бюджет»?</summary><p>Организация подаёт заявку на подключение через территориальный орган казначейства: оформляет сертификаты электронной подписи на руководителя и уполномоченных сотрудников, машиночитаемую доверенность, заявку с указанием ролей и полномочий доступа, после чего настраивает рабочее место — КриптоПро, плагин браузера, корневые сертификаты и «Континент TLS Клиент». Доступ открывается после проверки заявки казначейством.</p></details>
      <details open><summary>С чего начать регистрацию в ГИИС «Электронный бюджет»?</summary><p>С регистрации организации в подсистеме безопасности ПОИБ СОБИ. Руководитель входит туда по квалифицированной электронной подписи или через ЕСИА с профилем организации, регистрирует организацию и подаёт заявку на подключение к нужным подсистемам.</p></details>
      <details><summary>Кто должен регистрировать организацию — руководитель или бухгалтер?</summary><p>Первичный вход и регистрацию выполняет руководитель как лицо, действующее без доверенности. Сотрудники (в том числе бухгалтер) подключаются позже — по своим электронным подписям и машиночитаемым доверенностям.</p></details>
      <details><summary>Какая электронная подпись нужна для «Электронного бюджета»?</summary><p>Квалифицированная электронная подпись: для руководителя коммерческой организации — из удостоверяющего центра ФНС России, для организации бюджетной сферы — из удостоверяющего центра Федерального казначейства.</p></details>
      <details><summary>Нужны ли средства криптографической защиты (СКЗИ)?</summary><p>Да. Для защищённого соединения с системой оформляется заявка на СКЗИ, если организация получает их впервые, и устанавливается криптопровайдер с корневыми сертификатами.</p></details>
      <details><summary>Чем регистрация в «Электронном бюджете» отличается от открытия лицевого счёта?</summary><p>Это разные процедуры. Регистрация даёт доступ к системе и возможность подавать документы, а открытие лицевого счёта в казначействе — отдельный шаг для учёта целевых средств по контракту.</p></details>
      <details><summary>Что такое ПОИБ СОБИ?</summary><p>Это подсистема обеспечения информационной безопасности «Электронного бюджета». С регистрации в ней начинается подключение организации к рабочим подсистемам.</p></details>
      <details><summary>Сколько занимает подключение?</summary><p>Зависит от готовности организации: при действующей подписи руководителя и настроенном рабочем месте подключение проходит быстро; дольше всего затягивают получение СКЗИ и настройка криптосредств.</p></details>
      <details><summary>Можно ли передать подключение специалисту?</summary><p>Да. Открытие лицевого счёта, подключение к системе, настройку ролей и первые платежи можно передать на аутсорсинг. Оставьте заявку — разберём вашу ситуацию.</p></details>
    </div>

    <div class="author">
      <div class="author__av">ЯМ</div>
      <div class="author__body">
        <div class="author__name">Ярослав Михайлов</div>
        <div class="author__role">Основатель и главный эксперт КазнаЭксперт</div>
        <p class="author__bio">15+ лет практики в сфере казначейского сопровождения государственных контрактов. Команда под руководством Ярослава сопроводила более 7000 контрактов на 90 млрд ₽ по 44-ФЗ, 223-ФЗ и ГОЗ. Специализация — сложные случаи: гособоронзаказ, раздельный учёт, спасение контрактов после отказов казначейства.</p>
        <div class="author__meta"><a href="/komanda/mihailov-yaroslav/">Профиль эксперта →</a><span>Telegram: <a href="https://t.me/Kaznaexpert" target="_blank" rel="noopener">@Kaznaexpert</a></span></div>
      </div>
    </div>

    
    <!-- svc-cta:end -->
    <div class="svc-cta svc-cta--end" role="complementary" aria-label="Услуги КазнаЭксперт"><div class="svc-cta__card svc-cta__card--edu"><span class="svc-cta__eyebrow">Топ-услуга · обучение</span><p class="svc-cta__title">Научим вести казначейское сопровождение самостоятельно</p><p class="svc-cta__text">9 академических часов один на один с экспертом Федерального казначейства — на ваших контрактах: счёт, «Электронный бюджет», сведения и коды, санкционирование, раздельный учёт. После курса вы ведёте контракт сами, без отказов.</p><span class="svc-cta__price">150 000 ₽ · индивидуально</span><a class="svc-cta__btn" href="/uslugi/obuchenie-kaznacheyskomu-soprovozhdeniyu/" onclick="try{ym(94305898,'reachGoal','svccta_click',{svc:'obuchenie',pos:'end'})}catch(e){}">Записаться на обучение →</a></div><div class="svc-cta__card"><span class="svc-cta__eyebrow">Сопровождение контракта</span><p class="svc-cta__title">Возьмём казначейское сопровождение контракта на себя</p><p class="svc-cta__text">Счёт в ТОФК, сведения об операциях, каждый платёж, ИГК в документах и раздельный учёт — так, чтобы казначейство не вернуло ни одного документа. Без лимита на число операций.</p><span class="svc-cta__price">65 000 ₽ постоплата · 105 000 ₽/мес аванс и ГОЗ</span><a class="svc-cta__btn" href="/uslugi/kaznacheyskoe-soprovozhdenie/" onclick="try{ym(94305898,'reachGoal','svccta_click',{svc:'kaznacheyskoe-soprovozhdenie',pos:'end'})}catch(e){}">Обсудить контракт →</a></div></div>
    <!-- /svc-cta:end -->
<div class="refs">
      <h2>Источники и нормативная база</h2>
      <ol>
        <li id="ref-1">Инструкции пользователя ГИИС «Электронный бюджет» (раздел подключения) — Федеральное казначейство — <a href="https://roskazna.gov.ru/gis/elektronnyj-byudzhet/" target="_blank" rel="noopener">roskazna.gov.ru</a></li>
        <li id="ref-2">Порядок регистрации в ПОИБ СОБИ, формирования МЧД и подключения к ГИИС «Электронный бюджет» — КонсультантПлюс — <a href="https://www.consultant.ru/document/cons_doc_LAW_501323/f0cc513da78da3a04cd85758ae09c10ce125bb98/" target="_blank" rel="noopener">consultant.ru</a></li>
        <li id="ref-3">Бюджетный кодекс РФ, глава 24.4 «Казначейское сопровождение» — <a href="https://base.garant.ru/12112604/c4c9af294a556f592c57e5dc5ad9bbed/" target="_blank" rel="noopener">base.garant.ru</a></li>
      
          <li id="ref-4">Постановление Правительства РФ от 30.06.2015 № 658 «О государственной интегрированной информационной системе управления общественными финансами "Электронный бюджет"» (ред. постановления от 01.11.2025 № 1735) — <a href="https://www.consultant.ru/document/cons_doc_LAW_182473/" target="_blank" rel="noopener">consultant.ru</a>; приказ Минфина России от 30.12.2019 № 259н (ред. от 20.01.2025) — перечень подсистем, оператором которых является Федеральное казначейство</li>
        <li id="ref-5">Федеральное казначейство. Раздел «Подключение к системе» ГИИС «Электронный бюджет»: бланки единой заявки, перечни полномочий и ролей по подсистемам, таблицы соответствия полномочий машиночитаемой доверенности — <a href="https://roskazna.gov.ru/gis/ehlektronnyj-byudzhet/podklyuchenie-k-sisteme/" target="_blank" rel="noopener">roskazna.gov.ru</a></li>
        <li id="ref-6">Федеральный закон от 06.04.2011 № 63-ФЗ «Об электронной подписи» (ред. от 31.07.2025), статьи 17.2, 17.4, 17.5 — <a href="https://www.consultant.ru/document/cons_doc_LAW_112701/" target="_blank" rel="noopener">consultant.ru</a>; постановление Правительства РФ от 10.07.2020 № 1018 — виды юридических лиц, которым сертификаты выдаёт удостоверяющий центр Федерального казначейства</li>
        <li id="ref-7">Письма Федерального казначейства от 12.02.2025 № 07-04-05/04-3889 и от 31.03.2025 № 07-04-05/04-8762 «О применении электронной машиночитаемой доверенности»; приказ Федерального казначейства от 22.12.2021 № 44н (ред. от 30.09.2025) и приказ Федерального казначейства от 06.12.2024 № 22н; приказ Федерального казначейства от 28.12.2023 № 26н</li>
        <li id="ref-8">Федеральное казначейство. Раздел «Система обеспечения безопасности информации»: требования к рабочему месту, точки входа, памятки по переводу компонента казначейского сопровождения — <a href="https://roskazna.gov.ru/gis/sistema-obespecheniya-bezopasnosti-informacii-fk" target="_blank" rel="noopener">roskazna.gov.ru</a></li>
      </ol>
      <p class="refs__note">Порядок подключения и комплект документов могут различаться по территориальным органам; актуальные руководства пользователя и требования к форматам обмена публикует Федеральное казначейство. Материал носит справочный характер. Проверено экспертом КазнаЭксперт. Дата актуализации — 31 августа 2026.</p>
    </div>
  </article>

  <aside class="rail">
    <form class="railform" id="leadForm" novalidate data-endpoint="/php/lead.php" data-source="registraciya-v-giis-elektronnyy-byudzhet">
      <div class="railform__badge">Разбор эксперта</div>
      <h3 class="railform__title">Поможем подключиться к «Электронному бюджету»</h3>
      <p class="railform__sub">Откроем лицевой счёт, подключим организацию к ГИИС «Электронный бюджет», настроим роли и проведём первые платежи. Разбор эксперта — в течение часа.</p>
      <input class="fld" name="name" placeholder="Имя" required minlength="2" maxlength="80" autocomplete="name">
      <input class="fld" name="phone" type="tel" placeholder="+7 (___) ___-__-__" required autocomplete="tel" inputmode="tel">
      <input class="hp" name="company_extra" tabindex="-1" autocomplete="off" aria-hidden="true">
      <label class="policy"><input type="checkbox" name="consent" required><span>Согласен с <a href="/privacy/" target="_blank" rel="noopener">политикой обработки данных</a>. Не передаём третьим лицам.</span></label>
      <button class="submit" type="submit">Получить расчёт →</button>
      <div class="formmsg" id="formMsg" hidden></div>
      <div class="railform__trust">
        <span><b>15+ лет</b> в Казначействе · <b>7000+</b> контрактов</span>
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
<a class="rail-svc" href="/uslugi/otkrytie-scheta/"><span class="rail-svc__k">Поможем под ключ</span><span class="rail-svc__n">Открытие казначейского счёта →</span></a>
</aside>
</div>

<section class="related" aria-labelledby="relTitle">
  <div class="related__head"><h2 id="relTitle">Что почитать ещё</h2><a href="/baza-znaniy/">Вся база знаний →</a></div>
  <div class="related__grid">
    <a class="card reveal" href="/baza-znaniy/elektronnyy-byudzhet-dlya-ispolnitelya-kontrakta/"><div class="card__cover"><span>Электронный бюджет</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Электронный бюджет для исполнителя контракта: вход и работа</h3><div class="card__meta">Электронный бюджет · 14 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/mashinochitaemaya-doverennost-kaznachejstvo/"><div class="card__cover"><span>МЧД</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Машиночитаемая доверенность для казначейства</h3><div class="card__meta">Электронный бюджет · 13 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/licevoy-schet-71-kak-otkryt/"><div class="card__cover"><span>Счёт 71</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Как открыть лицевой счёт 71 в ТОФК</h3><div class="card__meta">Открытие счёта · 12 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/svedeniya-ob-operaciyah-s-celevymi-sredstvami/"><div class="card__cover"><span>Сведения</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Сведения об операциях с целевыми средствами: как заполнить</h3><div class="card__meta">Операции · 14 мин</div></div></a>
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

<section class="kz-sub" aria-labelledby="kzSubTitle" data-source="registraciya-v-giis-elektronnyy-byudzhet">
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
