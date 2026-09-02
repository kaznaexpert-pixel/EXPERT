<?php /* Cache-Control задаёт .htaccess — единая точка правды для кэш-заголовков */ ?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>СУФД-портал казначейства: что это и как подключиться</title>
<meta name="description" content="СУФД-портал Федерального казначейства: что это, как подключиться через УФК, требования к рабочему месту, вход по сертификату и типовые ошибки. Разбор эксперта.">
<meta name="author" content="Ярослав Михайлов">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1">
<meta name="theme-color" content="#F4F1EB" media="(prefers-color-scheme: light)">
<meta name="theme-color" content="#141310" media="(prefers-color-scheme: dark)">
<!-- PROD: canonical и og:url ОБЯЗАТЕЛЬНО менять под URL каждой статьи -->
<link rel="canonical" href="https://kaznaexpert.ru/baza-znaniy/sufd-portal-kaznachejstva/">
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
<script>window.YM_PARAMS = {page_type:"cluster", cluster:"giis"};</script>

<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "Article", "headline": "СУФД-портал казначейства: что это, как подключиться и работать", "description": "СУФД — система удалённого финансового документооборота Федерального казначейства: возможности портала, пошаговое подключение через УФК, требования к рабочему месту и типовые ошибки.", "inLanguage": "ru-RU", "datePublished": "2026-06-11", "dateModified": "2026-08-21", "author": {"@type": "Person", "name": "Ярослав Михайлов", "jobTitle": "Главный эксперт по казначейскому сопровождению", "url": "https://kaznaexpert.ru/komanda/mihailov-yaroslav/", "@id": "https://kaznaexpert.ru/komanda/mihailov-yaroslav/#person", "image": "https://kaznaexpert.ru/img/team/mihailov-photo.jpg"}, "publisher": {"@type": "Organization", "name": "КазнаЭксперт", "url": "https://kaznaexpert.ru", "logo": {"@type": "ImageObject", "url": "https://kaznaexpert.ru/img/logogold.png"}, "@id": "https://kaznaexpert.ru/#organization"}, "image": ["https://kaznaexpert.ru/img/og/baza-znaniy__sufd-portal-kaznachejstva-16x9.jpg", "https://kaznaexpert.ru/img/og/baza-znaniy__sufd-portal-kaznachejstva-4x3.webp", "https://kaznaexpert.ru/img/og/baza-znaniy__sufd-portal-kaznachejstva-1x1.webp"], "mainEntityOfPage": {"@type": "WebPage", "@id": "https://kaznaexpert.ru/baza-znaniy/sufd-portal-kaznachejstva/"}, "citation": ["https://kirov.roskazna.gov.ru/gis/sufd-onlajn/poryadok-podklyucheniya/", "https://mo.roskazna.gov.ru/gis/sufd-onlayn/", "https://roskazna.gov.ru/gis/ehlektronnyj-byudzhet/", "https://www.consultant.ru/document/cons_doc_LAW_112701/", "https://cryptopro.ru/"]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "Главная", "item": "https://kaznaexpert.ru/"}, {"@type": "ListItem", "position": 2, "name": "База знаний", "item": "https://kaznaexpert.ru/baza-znaniy/"}, {"@type": "ListItem", "position": 3, "name": "СУФД-портал казначейства", "item": "https://kaznaexpert.ru/baza-znaniy/sufd-portal-kaznachejstva/"}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [
{"@type": "Question", "name": "Что такое СУФД простыми словами?", "acceptedAnswer": {"@type": "Answer", "text": "Это «интернет-банк» Федерального казначейства: веб-портал, через который клиенты отправляют платёжные документы, получают выписки по лицевым счетам и отчётность."}},
{"@type": "Question", "name": "Чем СУФД отличается от «Электронного бюджета»?", "acceptedAnswer": {"@type": "Answer", "text": "СУФД — система финансового документооборота с органом казначейства. ГИИС «Электронный бюджет» — более широкая система управления общественными финансами, куда казначейство поэтапно переводит клиентов. Канал для конкретной организации определяет её УФК."}},
{"@type": "Question", "name": "Как подключиться к СУФД-порталу?", "acceptedAnswer": {"@type": "Answer", "text": "Через своё УФК: договор об обмене электронными документами, сертификаты ЭП в УЦ ФК, установка СКЗИ и TLS-клиента, заявки на регистрацию пользователей и настройка рабочего места по инструкции управления."}},
{"@type": "Question", "name": "Сколько стоит подключение к СУФД?", "acceptedAnswer": {"@type": "Answer", "text": "Подключение и ПО со стороны казначейства предоставляются клиентам без взимания платы. Расходы организации — лицензия на сертифицированное СКЗИ и время на настройку."}},
{"@type": "Question", "name": "Какой логин и пароль у СУФД-портала?", "acceptedAnswer": {"@type": "Answer", "text": "С 2021 года вход выполняется по сертификату электронной подписи через защищённый канал — отдельные логин и пароль при такой схеме не используются."}},
{"@type": "Question", "name": "Почему не открывается СУФД-портал?", "acceptedAnswer": {"@type": "Answer", "text": "Чаще всего не запущен или не настроен Континент TLS-клиент либо нет доступа к каналу. Проверьте TLS-клиент, сетевые настройки и актуальную памятку своего УФК."}},
{"@type": "Question", "name": "Почему СУФД не видит сертификат?", "acceptedAnswer": {"@type": "Answer", "text": "Не установлен личный сертификат или контейнер ключей, либо не собрана цепочка доверия. Переустановите сертификат через КриптоПро, установите корневой Минцифры и сертификат УЦ ФК, обновите CRL."}},
{"@type": "Question", "name": "Используют ли СУФД участники казначейского сопровождения?", "acceptedAnswer": {"@type": "Answer", "text": "Коммерческим подрядчикам с лицевым счётом 71 операции чаще настраивают через ГИИС «Электронный бюджет»; решение зависит от категории клиента и практики УФК."}},
{"@type": "Question", "name": "Можно ли работать в СУФД с нескольких рабочих мест?", "acceptedAnswer": {"@type": "Answer", "text": "Да, каждое рабочее место настраивается отдельно: СКЗИ, TLS-клиент, цепочка доверия и личный сертификат. Передавать ключи подписи между сотрудниками нельзя."}},
{"@type": "Question", "name": "Где брать инструкции по работе с СУФД?", "acceptedAnswer": {"@type": "Answer", "text": "На сайте своего управления Федерального казначейства в разделе «ГИС → СУФД-онлайн»: там публикуются порядок подключения, памятки и требования к программному обеспечению."}}
]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "HowTo", "name": "Как подключиться к СУФД-порталу казначейства", "inLanguage": "ru-RU", "step": [
{"@type": "HowToStep", "position": 1, "name": "Заключить договор с УФК", "text": "Оформить договор (соглашение) об обмене электронными документами со своим управлением Федерального казначейства."},
{"@type": "HowToStep", "position": 2, "name": "Оформить сертификаты ЭП", "text": "Выпустить квалифицированные сертификаты в удостоверяющем центре ФК для всех подписантов."},
{"@type": "HowToStep", "position": 3, "name": "Настроить криптографию", "text": "Установить КриптоПро CSP, Континент TLS-клиент и корневые сертификаты цепочки доверия."},
{"@type": "HowToStep", "position": 4, "name": "Зарегистрировать пользователей", "text": "Подать в УФК заявки на регистрацию пользователей портала с указанием ролей."},
{"@type": "HowToStep", "position": 5, "name": "Выполнить тестовый вход", "text": "Настроить рабочее место по инструкции УФК, войти по сертификату и отправить тестовый документ."}
]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "DefinedTermSet", "name": "Глоссарий: СУФД", "inLanguage": "ru-RU", "hasDefinedTerm": [
{"@type": "DefinedTerm", "name": "СУФД", "description": "Система удалённого финансового документооборота Федерального казначейства."},
{"@type": "DefinedTerm", "name": "СУФД-портал", "description": "Веб-приложение СУФД, доступное клиентам ФК через защищённый интернет-канал."},
{"@type": "DefinedTerm", "name": "СКЗИ", "description": "Средство криптографической защиты информации, обеспечивающее ГОСТ-подпись и шифрование."},
{"@type": "DefinedTerm", "name": "КЭП", "description": "Квалифицированная электронная подпись, придающая документам юридическую силу по 63-ФЗ."}
]}
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
<meta property="og:title" content="СУФД-портал казначейства: подключение, вход и работа">
<meta property="og:description" content="Система удалённого финансового документооборота: подключение через УФК, сертификаты, КриптоПро и Континент TLS, типовые ошибки входа. Разбор эксперта.">
<meta property="og:url" content="https://kaznaexpert.ru/baza-znaniy/sufd-portal-kaznachejstva/">
<meta property="og:image" content="https://kaznaexpert.ru/img/og/baza-znaniy__sufd-portal-kaznachejstva-16x9.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="675">
<meta property="og:image:alt" content="СУФД-портал казначейства: подключение, вход и работа — КазнаЭксперт">
<meta property="article:published_time" content="2026-06-11T09:00:00+03:00">
<meta property="article:modified_time" content="2026-08-21T09:00:00+03:00">
<meta property="article:author" content="https://kaznaexpert.ru/komanda/mihailov-yaroslav/">
<meta property="article:section" content="База знаний">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="СУФД-портал казначейства: подключение, вход и работа">
<meta name="twitter:description" content="Система удалённого финансового документооборота: подключение через УФК, сертификаты, КриптоПро и Континент TLS, типовые ошибки входа. Разбор эксперта.">
<meta name="twitter:image" content="https://kaznaexpert.ru/img/og/baza-znaniy__sufd-portal-kaznachejstva-16x9.jpg">


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
  <nav class="crumbs" aria-label="Хлебные крошки"><a href="/">Главная</a> › <a href="/baza-znaniy/">База знаний</a> › СУФД-портал казначейства</nav>

  <aside class="toc" aria-label="Содержание">
    <div class="toc__label">Содержание</div>
    <ul class="toc__list" id="tocList">
      <li><a href="#chto-takoe">Что такое СУФД</a></li>
      <li><a href="#komu">Кому нужен СУФД, а кому ЭБ</a></li>
      <li><a href="#vozmozhnosti">Что можно делать в СУФД</a></li>
      <li><a href="#formy">Формы и коды документов</a></li>
       <li><a href="#pravovaya">Правовая база документооборота</a></li>
       <li><a href="#podklyuchenie">Подключение: пошагово</a></li>
      <li><a href="#trebovaniya">Требования к рабочему месту</a></li>
      <li><a href="#vhod">Вход в систему</a></li>
      <li><a href="#statusy">Статусы документа</a></li>
       <li><a href="#roli">Роли, права и подписи</a></li>
       <li><a href="#oshibki">Типовые ошибки и решения</a></li>
      <li><a href="#checklist">Чек-лист первого платежа</a></li>
      <li><a href="#bezopasnost">Подписи и безопасность</a></li>
      <li><a href="#keys">Пример из практики</a></li>
      <li><a href="#glossary">Глоссарий</a></li>
      <li><a href="#faq">Частые вопросы</a></li>
    </ul>
  </aside>

  <article class="content" id="main">
    <div class="hero">
      <img class="hero__crest hero__crest--light" src="/img/logogold-crest.webp" alt="" aria-hidden="true" width="188" height="137" decoding="async" loading="lazy">
      <img class="hero__crest hero__crest--dark" src="/img/LogoWhite.png" alt="" aria-hidden="true" width="188" height="137" decoding="async" loading="lazy">
      <div class="eyebrow">База знаний · ГИИС и ЭЦП <span class="fresh">Актуально на 2026</span></div>
    <h1>СУФД-портал казначейства: что это, как подключиться и работать</h1>
    <div class="byline"><span class="av">ЯМ</span><span>Автор: <a href="/komanda/mihailov-yaroslav/">Ярослав Михайлов</a>, главный эксперт</span><span class="dot">·</span><span>15+ лет в Казначействе</span><span class="dot">·</span><span>14 мин чтения</span><span class="dot">·</span><span>Обновлено 21 августа 2026</span></div>
    </div>

    <div class="share">
      <span class="share__label">Поделиться:</span>
      <a href="https://t.me/share/url?url=https%3A%2F%2Fkaznaexpert.ru%2Fbaza-znaniy%2Fsufd-portal-kaznachejstva%2F&amp;text=%D0%A1%D0%A3%D0%A4%D0%94-%D0%BF%D0%BE%D1%80%D1%82%D0%B0%D0%BB%20%D0%BA%D0%B0%D0%B7%D0%BD%D0%B0%D1%87%D0%B5%D0%B9%D1%81%D1%82%D0%B2%D0%B0%3A%20%D0%BF%D0%BE%D0%B4%D0%BA%D0%BB%D1%8E%D1%87%D0%B5%D0%BD%D0%B8%D0%B5%20%D1%87%D0%B5%D1%80%D0%B5%D0%B7%20%D0%A3%D0%A4%D0%9A%2C%20%D0%B2%D1%85%D0%BE%D0%B4%20%D0%BF%D0%BE%20%D1%81%D0%B5%D1%80%D1%82%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%D1%82%D1%83%20%D0%B8%20%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%B0%20%D1%81%20%D0%B4%D0%BE%D0%BA%D1%83%D0%BC%D0%B5%D0%BD%D1%82%D0%B0%D0%BC%D0%B8" target="_blank" rel="noopener"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.56 8.25l-1.86 8.76c-.14.62-.5.77-1.02.48l-2.82-2.08-1.36 1.31c-.15.15-.28.28-.57.28l.2-2.89 5.27-4.76c.23-.2-.05-.32-.35-.12l-6.51 4.1-2.8-.88c-.61-.19-.62-.61.13-.9l10.95-4.22c.5-.18.95.12.79.85z"/></svg>Telegram</a>
      <button type="button" id="copyLink"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.07 0l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.07 0l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg><span>Копировать ссылку</span></button>
      <button type="button" id="printBtn"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9V2h12v7M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2M6 14h12v8H6z"/></svg>Скачать PDF</button>
    </div>

    <details class="mtoc"><summary>Содержание статьи</summary>
      <ol>
        <li><a href="#chto-takoe">Что такое СУФД</a></li><li><a href="#komu">Кому нужен СУФД, а кому ЭБ</a></li><li><a href="#vozmozhnosti">Что можно делать в СУФД</a></li><li><a href="#formy">Формы и коды документов</a></li>
       <li><a href="#pravovaya">Правовая база документооборота</a></li>
       <li><a href="#podklyuchenie">Подключение: пошагово</a></li><li><a href="#trebovaniya">Требования к рабочему месту</a></li><li><a href="#vhod">Вход в систему</a></li><li><a href="#statusy">Статусы документа</a></li>
       <li><a href="#roli">Роли, права и подписи</a></li>
       <li><a href="#oshibki">Типовые ошибки и решения</a></li><li><a href="#checklist">Чек-лист первого платежа</a></li><li><a href="#bezopasnost">Подписи и безопасность</a></li><li><a href="#keys">Пример из практики</a></li><li><a href="#glossary">Глоссарий</a></li><li><a href="#faq">Частые вопросы</a></li>
      </ol>
    </details>

    <div class="tldr">СУФД — система удалённого финансового документооборота Федерального казначейства. Через СУФД-портал клиенты казначейства направляют платёжные документы, получают выписки по лицевым счетам и отчётность. Подключение оформляется через своё УФК: договор об обмене электронными документами, сертификаты ЭП УЦ ФК, СКЗИ и заявки на регистрацию пользователей.<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a></div>

    <section class="keyfacts grain" aria-label="Ключевые факты">
      <h2>Коротко о главном</h2>
      <div class="keyfacts__grid">
        <div class="kf"><div class="kf__n">веб</div><div class="kf__t"><b>Формат</b> — портал, доступный через интернет-браузер</div></div>
        <div class="kf"><div class="kf__n">УФК</div><div class="kf__t"><b>Подключение</b> — через своё управление казначейства</div></div>
        <div class="kf"><div class="kf__n">ЭП</div><div class="kf__t"><b>Подпись</b> — сертификаты УЦ Федерального казначейства</div></div>
        <div class="kf"><div class="kf__n">СКЗИ</div><div class="kf__t"><b>Криптография</b> — КриптоПро CSP + защищённый канал</div></div>
        <div class="kf"><div class="kf__n">128 кбит/с</div><div class="kf__t"><b>Канал</b> — минимальная скорость интернета для портала</div></div>
        <div class="kf"><div class="kf__n">24/7</div><div class="kf__t"><b>Документы</b> — отправка и статусы в онлайн-режиме</div></div>
      </div>
    </section>

    <h2 id="chto-takoe">Что такое СУФД</h2>
    <div class="answer reveal">
      <p class="lead-p">СУФД (система удалённого финансового документооборота) — это канал электронного взаимодействия клиентов Федерального казначейства с органами казначейства. Через СУФД-портал — веб-приложение, доступное через интернет, — зарегистрированные клиенты управляют платежами и финансовыми документами и получают доступ к актуальной отчётности, сформированной в автоматизированной системе Федерального казначейства.<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a></p>
      <p>По смыслу СУФД для клиента казначейства — то же, что интернет-банк для клиента банка: здесь формируют и подписывают платёжные документы, отслеживают их статусы, получают выписки по лицевым счетам. Разница в том, что «банком» выступает орган Федерального казначейства, а подпись и канал связи строятся на сертификатах УЦ ФК и сертифицированной криптографии.</p>
    </div>
    <h3>Не «зеркало», а первоисточник данных</h3>
    <p>СУФД — рабочий инструмент бухгалтеров и финансистов организаций, у которых открыты лицевые счета в ТОФК: от бюджетных учреждений до коммерческих компаний. Технически портал — клиентская часть автоматизированной системы Федерального казначейства: документы, которые вы отправляете, попадают напрямую в учётный контур ТОФК, а статусы и выписки формируются из той же системы, в которой работают операционисты казначейства. Отсюда главное свойство СУФД — данные в нём не «зеркало», а первоисточник.</p>
    <p>Информацию о портале, инструкции и памятки публикует каждое управление ФК в разделе «ГИС → СУФД-онлайн» своего сайта; там же выкладываются дистрибутивы и требования к программному обеспечению.<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a></p>

    <h2 id="komu">Кому нужен СУФД, а кому «Электронный бюджет»</h2>
    <p>У Федерального казначейства два основных клиентских канала документооборота: СУФД и ГИИС «Электронный бюджет». Исторически СУФД был главным инструментом для всех клиентов ФК, но казначейство поэтапно переводит категории клиентов в «Электронный бюджет» — этот процесс идёт с 2021 года. Какой канал использует ваша организация, определяется правилами для вашей категории клиентов и практикой вашего УФК.<a class="fn" href="#ref-2" aria-label="Источник 2">[2]</a></p>
    <table>
      <caption>СУФД и ГИИС «Электронный бюджет»: ориентиры</caption>
      <tr><th>Критерий</th><th>СУФД-портал</th><th>ГИИС «Электронный бюджет»</th></tr>
      <tr><td>Что это</td><td>Система удалённого финансового документооборота с органом ФК</td><td>Государственная интегрированная система управления общественными финансами</td></tr>
      <tr><td>Основной сценарий</td><td>Платёжные документы, выписки, отчётность по лицевым счетам</td><td>Широкий контур: планирование, закупки, лицевые счета участников казначейского сопровождения, отчётность</td></tr>
      <tr><td>Участники казначейского сопровождения</td><td>Не является для них рабочим контуром</td><td>Единственный канал: открытие лицевых счетов, сведения об операциях с целевыми средствами, санкционирование каждой операции</td></tr>
      <tr><td>Доступ</td><td>Веб-портал + сертификат УЦ ФК + СКЗИ</td><td>Личный кабинет budget.gov.ru + сертификат + СКЗИ</td></tr>
    </table>
<h3>Разграничение задано нормой, а не привычкой управления</h3>
    <p>Это разграничение задаётся не практикой управления, а нормой: казначейское обслуживание операций со средствами участников казначейского сопровождения ведётся по отдельному Порядку — приказ Федерального казначейства от 15.12.2021 № 40н (Минюст 31.01.2022 № 67059, действующая редакция — приказ Федерального казначейства от 01.10.2025 № 13н). Документооборот при резервировании и открытии лицевого счёта, открытии разделов на нём и проведении операций идёт через личный кабинет в компоненте казначейского сопровождения ГИИС «Электронный бюджет».<a class="fn" href="#ref-7" aria-label="Источник 7">[7]</a></p>

    <h3>Третья система — портал заявителя: только за сертификатом</h3>
    <p>Есть и третья система, которую регулярно путают с первыми двумя, — <a href="/baza-znaniy/portal-zayavitelya-kaznachejstva/">портал заявителя</a>. Это не платёжный контур вообще: онлайн-сервис нужен только для подачи документов на получение, изменение или прекращение действия сертификата подписи. Логика простая: портал заявителя — чтобы получить сертификат; «Электронный бюджет» — чтобы работать, если вы участник казначейского сопровождения; СУФД — чтобы работать, если вы получатель бюджетных средств, бюджетное или автономное учреждение, финансовый орган либо администратор доходов с договором об обмене электронными документами.</p>

    <div class="note"><b>Практический ориентир.</b> Если вы коммерческий подрядчик и вам открывают лицевой счёт 71 для казначейского сопровождения — ваш основной инструмент «Электронный бюджет» (как открыть счёт, разбирали <a href="/baza-znaniy/licevoy-schet-71-kak-otkryt/">в отдельной инструкции</a>). СУФД чаще остаётся за «классическими» клиентами казначейства. Точный ответ всегда даёт ваше УФК — состав систем зависит от категории клиента.</div>

    <h2 id="vozmozhnosti">Что можно делать в СУФД-портале</h2>
    <p>Функциональность портала закрывает повседневный финансовый документооборот с казначейством.</p>
    <table>
      <caption>Основные операции в СУФД</caption>
      <tr><th>Блок</th><th>Что делает клиент</th></tr>
      <tr><td>Платёжные документы</td><td>Формирует и подписывает распоряжения о совершении казначейских платежей, отправляет их в ТОФК, отслеживает статусы обработки</td></tr>
      <tr><td>Выписки</td><td>Получает выписки по лицевым счетам и приложенные к ним документы за любой операционный день</td></tr>
      <tr><td>Отчётность</td><td>Запрашивает и получает отчёты, сформированные в учётной системе казначейства</td></tr>
      <tr><td>Справочники</td><td>Использует актуальные справочники реквизитов (банки, счета, коды бюджетной классификации)</td></tr>
      <tr><td>Импорт/экспорт</td><td>Обменивается документами с бухгалтерскими программами (1С и др.) через форматные файлы</td></tr>
    </table>
    <p>Статусная модель — главное удобство портала: по каждому документу видно, принят ли он, прошёл ли контроль, исполнен ли платёж. Если документ отклонён, в статусе отражается причина — это позволяет исправить ошибку без звонков в операционный отдел. Какие реквизиты заполняются в распоряжении и почему документы отклоняют, мы разбирали в статьях про <a href="/baza-znaniy/rasporyazhenie-o-sovershenii-kaznacheyskogo-platezha/">казначейский платёж</a> и <a href="/baza-znaniy/prichiny-otkaza-kaznacheystva-v-sankcionirovanii/">причины отказов в санкционировании</a>.</p>

    <h2 id="formy">Какие документы ходят через СУФД: формы и коды</h2>
    <p>Разговор о документообороте бессмысленен без перечня документов. Распоряжения, которые прямой участник системы казначейских платежей представляет в территориальный орган казначейства, перечислены в пункте 2 приказа Федерального казначейства от 14.05.2020 № 21н — там же указаны коды форм и номера приложений, где эти формы утверждены. Перечень действует до 31 декабря 2027 года: это переходный период, пока казначейство достраивает единый формат распоряжения о совершении казначейского платежа.<a class="fn" href="#ref-5" aria-label="Источник 5">[5]</a></p>

    <table>
      <caption>Распоряжения, представляемые в ТОФК (п. 2 приказа Федерального казначейства № 21н)</caption>
      <tr><th>Документ</th><th>Код формы</th><th>Приложение к Порядку № 21н</th></tr>
      <tr><td>Заявка на кассовый расход</td><td>0531801</td><td>№ 15</td></tr>
      <tr><td>Заявка на кассовый расход (сокращённая)</td><td>0531851</td><td>№ 16</td></tr>
      <tr><td>Сводная заявка на кассовый расход</td><td>0531860</td><td>№ 17</td></tr>
      <tr><td>Заявка на возврат</td><td>0531803</td><td>№ 18</td></tr>
      <tr><td>Заявка на получение наличных денег</td><td>0531802</td><td>№ 19</td></tr>
      <tr><td>Заявка на получение денежных средств, перечисляемых на карту</td><td>0531243</td><td>№ 20</td></tr>
      <tr><td>Уведомление об уточнении вида и принадлежности платежа</td><td>0531809</td><td>№ 24</td></tr>
      <tr><td>Уведомление об уточнении операций клиента</td><td>0531852</td><td>№ 25</td></tr>
      <tr><td>Платёжное поручение</td><td>0401060</td><td>Положение Банка России № 762-П</td></tr>
    </table>

    <h3>КФД против ОКУД: как правильно называть коды форм</h3>
    <div class="note"><b>Терминологическая тонкость, на которой спотыкаются.</b> Коды казначейских распоряжений — это коды формы по <b>КФД</b>, классификатору форм документов Федерального казначейства. По Общероссийскому классификатору управленческой документации кодируется только платёжное поручение: 0401060 по ОКУД, форма утверждена приложением 2 к Положению Банка России от 29.06.2021 № 762-П. Формулировка «заявка на кассовый расход по ОКУД 0531801» встречается в договорах и регламентах постоянно, но она неверна.</div>

    <p>Практический вывод для бухгалтера: если бухгалтерская программа выгружает файл обмена, а портал его не принимает, первым делом сверяются код формы и её редакция. Формы приложений к Порядку № 21н менялись — приложение № 15 действует в редакции приказа Федерального казначейства от 29.07.2022 № 19н, — и выгрузка по устаревшему шаблону отклоняется на входном контроле.</p>

    <h2 id="pravovaya">На чём документооборот держится юридически</h2>
    <p>У СУФД нет «своего» приказа: портал — программный инструмент, а правовое основание обмена задают три уровня норм. Понимание этой конструкции экономит время в спорах с УФК: ссылаться нужно не на памятку с сайта управления, а на акт.</p>

    <table>
      <caption>Правовая конструкция электронного обмена с территориальным органом казначейства</caption>
      <tr><th>Уровень</th><th>Акт</th><th>Что устанавливает</th></tr>
      <tr><td>Порядок обслуживания</td><td>Приказ Федерального казначейства от 14.05.2020 № 21н (Минюст 13.07.2020 № 58914, ред. приказа от 15.06.2026 № 13н — действует с 15.08.2026)</td><td>Взаимодействие клиента и территориального органа ведётся в электронном виде с применением усиленной квалифицированной электронной подписи; на бумаге — только при отсутствии технической возможности. Здесь же перечень и формы распоряжений</td></tr>
      <tr><td>Открытие счетов</td><td>Приказ Федерального казначейства от 01.04.2020 № 15н (ред. приказа от 28.11.2025 № 22н, опубликована 30.12.2025)</td><td>Обмен документами при открытии, ведении и закрытии казначейских счетов идёт в электронном виде на основании договора (соглашения) об обмене электронными документами</td></tr>
      <tr><td>Договор с конкретным УФК</td><td>Договор об обмене электронными документами + присоединение к регламенту удостоверяющего центра казначейства</td><td>Стороны, состав документов, ответственные лица, порядок разрешения споров о подлинности подписи. Типовую форму публикует управление казначейства, а не Минфин</td></tr>
    </table>

    <h3>Договор об обмене — с конкретным управлением</h3>
    <p>Отсюда следует то, что часто узнают поздно: договор об обмене электронными документами заключается с <b>конкретным</b> управлением. При смене места учёта или открытии счёта в другом регионе прежний договор на новое управление не распространяется — комплект оформляется заново. Ссылки на приказ Федерального казначейства от 10.10.2008 № 8н, которые до сих пор встречаются в шаблонах договоров и внутренних регламентах, устарели: Порядок казначейского обслуживания по приказу № 21н применяется с 1 января 2021 года.</p>

    <h2 id="podklyuchenie">Подключение к СУФД: пошаговый порядок</h2>
    <p>Порядок подключения публикуется на сайте каждого УФК и в основе одинаков по всей стране.<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a></p>
    <h3>Шаг 1. Договор об обмене электронными документами</h3>
    <p>Организация заключает со своим УФК договор (соглашение) об обмене электронными документами. Это юридическая основа всего документооборота: в нём фиксируются стороны, форматы и условия признания электронной подписи.</p>
    <h3>Шаг 2. Сертификаты электронной подписи</h3>
    <p>Каждому сотруднику, который будет подписывать документы, оформляется квалифицированный сертификат в удостоверяющем центре Федерального казначейства. Как проходит выпуск — от генерации ключей до получения, — смотрите в разборе <a href="/baza-znaniy/sertifikat-ecp-kaznachejstvo/">«Сертификат и ЭЦП казначейства»</a>.</p>
    <h3>Шаг 3. Криптография на рабочем месте</h3>
    <p>На компьютеры устанавливаются СКЗИ (как правило, КриптоПро CSP), средство защищённого соединения с порталом (Континент TLS-клиент) и цепочка доверия — корневые сертификаты Минцифры и УЦ ФК. Без собранной цепочки портал не «увидит» вашу подпись: типовые ошибки и их лечение — в статье про <a href="/baza-znaniy/kornevye-sertifikaty-kaznachejstva/">корневые сертификаты казначейства</a>.</p>
    <h3>Шаг 4. Заявки на регистрацию пользователей</h3>
    <p>В УФК подаётся заявка на регистрацию каждого пользователя СУФД-портала с указанием ролей (ввод документов, подпись, просмотр). По заявкам казначейство создаёт учётные записи и привязывает к ним сертификаты.</p>
    <h3>Шаг 5. Настройка и тестовый вход</h3>
    <p>По инструкции своего УФК настраивается рабочее место, выполняется вход на портал по сертификату и отправляется тестовый документ. После успешного прохождения цикла «отправка → статус → выписка» система готова к боевой работе.</p>

    <h2 id="trebovaniya">Требования к рабочему месту</h2>
    <p>Технические требования скромные — портал работает на обычном офисном компьютере. Важно другое: набор компонентов за последние годы заметно сместился, и памятка трёхлетней давности приведёт к нерабочей конфигурации. Схема доступа у большинства управлений ушла с Континент-АП на Континент TLS-Клиент, а браузер требуется с поддержкой отечественной криптографии.<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a><a class="fn" href="#ref-3" aria-label="Источник 3">[3]</a></p>
    <table>
      <caption>Минимальные требования для работы в СУФД</caption>
      <tr><th>Компонент</th><th>Требование</th></tr>
      <tr><td>Интернет-канал</td><td>От 128 кбит/с (рекомендуется от 512 кбит/с)</td></tr>
      <tr><td>СКЗИ</td><td>Сертифицированный криптопровайдер (КриптоПро CSP актуальной версии)</td></tr>
      <tr><td>Защищённый канал</td><td>Континент TLS-клиент (версия — по требованиям вашего УФК)</td></tr>
      <tr><td>Сертификаты</td><td>Личный сертификат УЦ ФК + корневые сертификаты цепочки доверия</td></tr>
      <tr><td>Браузер и ОС</td><td>По актуальной инструкции УФК (поддерживаемые версии перечислены в памятке подключения)</td></tr>
    </table>

    <h3>Актуальный набор компонентов</h3>
    <table>
      <caption>Актуальный набор компонентов рабочего места (по памяткам управлений казначейства)</caption>
      <tr><th>Компонент</th><th>Что ставится</th><th>Зачем</th></tr>
      <tr><td>Криптопровайдер</td><td>КриптоПро CSP версии 5.0 (для Windows 11 — обязательно версия 5.X)</td><td>Работа с ключами и подписью по ГОСТ Р 34.10-2012</td></tr>
      <tr><td>Плагин браузера</td><td>КриптоПро ЭЦП Browser plug-in 2.0 плюс расширение в браузере</td><td>Подписание документов прямо в веб-интерфейсе</td></tr>
      <tr><td>Защищённый канал</td><td>Континент TLS-Клиент (у части управлений — Континент-АП версии 3.7)</td><td>Доступ к порталу по защищённому соединению</td></tr>
      <tr><td>Браузер</td><td>Браузер с поддержкой ГОСТ: Яндекс.Браузер, Chromium ГОСТ</td><td>Установление TLS-соединения по отечественным алгоритмам</td></tr>
      <tr><td>Цепочка доверия</td><td>Корневой сертификат головного удостоверяющего центра — в «Доверенные корневые», сертификаты удостоверяющего центра казначейства — в «Промежуточные»</td><td>Без полной цепочки подпись считается недействительной</td></tr>
      <tr><td>Личные сертификаты</td><td>Сертификаты сотрудников, зарегистрированных как пользователи портала</td><td>Авторизация и подписание</td></tr>
    </table>

    <h3>Две ошибки установки, которые повторяются из года в год</h3>
    <div class="note"><b>Две ошибки, которые повторяются из года в год.</b> Первая — установка Континент-АП вместе с компонентом «Межсетевой экран»: памятки управлений прямо предписывают этот компонент не ставить, иначе рвётся сетевая связность рабочего места. Вторая — установка сертификатов в хранилище текущего пользователя вместо хранилища «Локальный компьютер»: портал открывается, а подпись не проходит, и причину ищут в ключе.</div>
    <div class="note"><b>Совет.</b> Скачивайте инструкции только с сайта своего УФК (домены *.roskazna.gov.ru): требования к версиям ПО периодически обновляются, и устаревшая памятка с форума — частая причина «не работающего» портала.</div>

    <h2 id="vhod">Вход в систему: авторизация по сертификату</h2>
    <p>С 2021 года авторизация на СУФД-портале строится на сертификате электронной подписи: пользователь выбирает свой сертификат при входе, и система связывает его с учётной записью — отдельные логин и пароль при такой схеме не используются. Подключение проходит через защищённое соединение, которое устанавливает Континент TLS-клиент.<a class="fn" href="#ref-3" aria-label="Источник 3">[3]</a></p>
    <p>Уточнение, которое снимает половину вопросов о входе: схема авторизации зависит от полномочий пользователя. <b>Первичный вход</b> после регистрации выполняется по логину и паролю из карточки пользователя, и пароль система требует сменить сразу. Сотрудник <b>без права подписи</b> — тот, кто только вводит документы, — так и продолжает работать по логину и паролю. По сертификату входит пользователь <b>с правом подписи</b>: система сопоставляет сертификат с учётной записью и открывает операции подписания.</p>
    <p>Единой федеральной точки входа у портала нет: адрес региональный и строится по шаблону <span class="mono">ufk&lt;код региона&gt;.sufd.budget.gov.ru</span> — своё значение берите из памятки управления, а не из поисковой выдачи. Если рабочих мест несколько, каждое настраивается отдельно, а сертификаты сотрудников не «переносятся» между компьютерами без переустановки ключей. Первая линия поддержки по вопросам портала — единый контактный центр казначейства 8 (800) 30-10-777.<a class="fn" href="#ref-3" aria-label="Источник 3">[3]</a></p>

    <h2 id="statusy">Статусы документа: три колонки, а не одна цепочка</h2>
    <p>Представление «документ идёт по одной линейке от черновика до исполнения» — главный источник недоразумений при разборе застрявшего платежа. В портале у документа <b>три независимые характеристики</b>, и смотреть нужно на все три.<a class="fn" href="#ref-6" aria-label="Источник 6">[6]</a></p>

    <table>
      <caption>Колонки состояния документа в СУФД-портале</caption>
      <tr><th>Колонка</th><th>Что показывает</th></tr>
      <tr><td>Статус (наименование)</td><td>Бизнес-состояние документа: черновик, введён, подписан, зарегистрировано, готово к оплате</td></tr>
      <tr><td>Транспортный статус (статус передачи)</td><td>Что произошло с документом на канале обмена: ушёл ли он в учётную систему, не оборвалась ли отправка</td></tr>
      <tr><td>Статус утверждения</td><td>Полнота набранных подписей: подписан ли документ первой и второй подписью</td></tr>
    </table>

    <div class="note"><b>Где эти колонки.</b> Транспортный статус и статус утверждения по умолчанию скрыты. Правый клик по заголовку таблицы документов → «Настройка» → включить нужные чекбоксы. Пока колонки скрыты, документ с оборванной отправкой выглядит в списке так же, как отправленный.</div>

    <h3>Что означают ключевые состояния</h3>
    <table>
      <caption>Типовая последовательность состояний исходящего распоряжения</caption>
      <tr><th>Состояние</th><th>Что произошло и что делать</th></tr>
      <tr><td>Черновик</td><td>Документ создан или загружен из бухгалтерской программы. Редактируется свободно, но подписать и отправить его нельзя</td></tr>
      <tr><td>Введён (введено)</td><td>Пройден документарный контроль: поля сверены со справочниками, форматом и требованиями нормативных актов. Именно с этого состояния становится активной кнопка подписи</td></tr>
      <tr><td>Подписан / утверждён</td><td>Набраны обе подписи в правильном порядке. Документ готов к отправке</td></tr>
      <tr><td>Ошибка отправки</td><td>Отправка сорвалась на транспортном уровне. Документ никуда не ушёл, платёж не в работе — нужна повторная отправка</td></tr>
      <tr><td>Зарегистрировано (003)</td><td>Документ принят учётной системой казначейства и готов к включению в реестр</td></tr>
      <tr><td>Готово к оплате (342)</td><td>Документ включён в реестр платежей</td></tr>
      <tr><td>Отправлено в банк (344)</td><td>Реестр направлен в банк — деньги ушли из контура казначейства</td></tr>
    </table>

    <p>Документарный контроль выдаёт список ошибок с разделением на критичные и некритичные. Критичные блокируют переход к подписи, некритичные — предупреждения, с которыми документ можно провести. Отдельно стоит помнить, что успешный статус в портале означает только приём документа: содержательная проверка расходования средств — это уже санкционирование, и по её итогам платёж может быть <a href="/baza-znaniy/prichiny-otkaza-kaznacheystva-v-sankcionirovanii/">не принят к исполнению с уведомлением о причине отказа</a>.</p>

    <h2 id="roli">Роли, права доступа и порядок подписей</h2>
    <p>Права в портале раздаются не «на организацию», а на конкретного пользователя через набор ролей: аутентификация клиента плюс ветка ролей автоматизированной системы казначейства с вложенными полномочиями. Разделение труда внутри бухгалтерии повторяет привычное: один сотрудник вводит документы, другой проверяет, третий подписывает и отправляет.</p>

    <h3>Как оформляется доступ</h3>
    <ol>
      <li>Заявка на доступ к информационной системе «Автоматизированная система Федерального казначейства (СУФД-портал)» — форму и образец публикует ваше управление казначейства в разделе «СУФД-онлайн».</li>
      <li>Копия приказа о назначении ответственных лиц при обмене электронными документами — требуется и при первичном подключении, и при добавлении новых пользователей.</li>
      <li>Карточка сопровождаемого объекта — сопроводительный документ к заявке.</li>
      <li>Сертификаты электронной подписи на всех, кому нужны права подписания.</li>
    </ol>

    <div class="note"><b>Правило очерёдности подписей.</b> Порядок жёсткий: <b>первая подпись — главного бухгалтера, вторая — руководителя</b>. Если первая подпись поставлена некорректным сертификатом, документ нельзя «дописать» второй подписью: сначала переподписывается первая, и только затем ставится вторая. Управления казначейства рекомендуют держать минимум по два действующих сертификата на каждую должность с правом подписи — иначе отпуск или болезнь главного бухгалтера останавливает платежи целиком.</div>

    <p>Смена или отзыв сертификата у сотрудника с правом подписи — не техническая мелочь, а событие, требующее заявки: учётная запись в портале связана с конкретным сертификатом. Порядок продления разбирали отдельно — <a href="/baza-znaniy/kak-prodlit-i-otozvat-ecp-kaznachejstva/">как продлить и отозвать подпись казначейства</a>.</p>

    <h2 id="oshibki">Типовые ошибки и как их лечить</h2>
    <table>
      <caption>Частые проблемы при работе с СУФД</caption>
      <tr><th>Симптом</th><th>Вероятная причина</th><th>Решение</th></tr>
      <tr><td>Портал не открывается</td><td>Не запущен/не настроен Континент TLS, нет доступа к каналу</td><td>Проверить TLS-клиент, настройки прокси и доступ по инструкции УФК</td></tr>
      <tr><td>Сертификат не отображается при входе</td><td>Не установлен личный сертификат или СКЗИ его не видит</td><td>Переустановить сертификат через КриптоПро, проверить контейнер ключей</td></tr>
      <tr><td>«Сертификат недоверенный»</td><td>Не собрана цепочка доверия</td><td>Установить корневой Минцифры и сертификат УЦ ФК, обновить CRL</td></tr>
      <tr><td>Документ не подписывается</td><td>Истёк срок сертификата или нет роли подписанта</td><td>Проверить срок действия, при необходимости <a href="/baza-znaniy/kak-prodlit-i-otozvat-ecp-kaznachejstva/">продлить сертификат</a>; сверить роли в заявке</td></tr>
      <tr><td>Документ отклонён казначейством</td><td>Ошибки реквизитов, недостаток средств, нарушение порядка санкционирования</td><td>Открыть причину отказа в статусе документа и исправить; типовые причины — в разборе отказов</td></tr>
    </table>

    <h2 id="checklist">Чек-лист: первый платёж через СУФД</h2>
    <p>Перед боевым стартом пройдитесь по короткому списку — он закрывает 90% причин, по которым «не уходит» первый документ:</p>
    <ul>
      <li>договор об обмене электронными документами с УФК подписан и зарегистрирован;</li>
      <li>сертификаты всех подписантов действующие, роли в заявках соответствуют приказу о праве подписи;</li>
      <li>КриптоПро CSP и Континент TLS установлены версий из актуальной памятки УФК;</li>
      <li>цепочка доверия собрана: корневой Минцифры + сертификат УЦ ФК + свежий CRL;</li>
      <li>реквизиты получателя сверены с первоисточником (ЕКС — в поле счёта банка, казначейский счёт — в поле счёта получателя);</li>
      <li>в назначении платежа есть обязательная аналитика (для участников казначейского сопровождения — лицевой счёт и ИГК);</li>
      <li>тестовый документ прошёл полный цикл «отправка → принят → исполнен → выписка»;</li>
      <li>назначен дублирующий подписант на случай отпуска или болезни основного.</li>
    </ul>

    <h2 id="bezopasnost">Подписи и безопасность</h2>
    <p>Юридическая сила документов в СУФД обеспечивается квалифицированной электронной подписью по Федеральному закону от 06.04.2011 № 63-ФЗ «Об электронной подписи»: документ, подписанный КЭП, равнозначен бумажному с собственноручной подписью. Криптографическая защита канала и подписи строится на ГОСТ-алгоритмах, поэтому без сертифицированного СКЗИ работать с порталом нельзя.<a class="fn" href="#ref-4" aria-label="Источник 4">[4]</a></p>
    <p>Организационная сторона не менее важна: ключи подписи нельзя передавать между сотрудниками, при увольнении подписанта сертификат отзывают, а права в СУФД пересматривают. Эти правила — не формальность: подпись в казначейском документообороте распоряжается бюджетными деньгами.</p>

    <h2 id="keys">Пример из практики</h2>
    <div class="answer reveal">
      <p>Типовая ситуация: организация переезжает на новые компьютеры, и СУФД «ломается» — портал не открывается, подпись не работает. Паника, подозрение на блокировку счёта. Причина оказывается приземлённой: на новые машины поставили браузер и перенесли личные сертификаты, но забыли про Континент TLS и корневые сертификаты цепочки доверия. После установки TLS-клиента по памятке УФК, импорта корневого Минцифры и сертификата УЦ ФК вход восстанавливается за полчаса. Вывод, который подтверждается постоянно: рабочее место СУФД — это четыре компонента (СКЗИ, TLS-канал, цепочка доверия, личный сертификат), и проверять их при сбое нужно именно в этом порядке. Пример обобщённый; конкретный набор ПО зависит от требований вашего УФК.</p>
    </div>

    <p data-ctx="auto-ctx:elektronnyy-byudzhet-dlya-ispolnitelya-kontrakta">Чтобы не путать площадки, сравните их в материале о <a href="/baza-znaniy/elektronnyy-byudzhet-dlya-ispolnitelya-kontrakta/">«Электронном бюджете» для исполнителя контракта</a> — там разведены роли ФЗС, «Электронного бюджета» и СУФД.</p>
    <div class="takeaways">
      <h2>Что важно запомнить</h2>
      <ol>
        <li>СУФД — «интернет-банк» казначейства: платёжные документы, выписки и отчётность по лицевым счетам через веб-портал.</li>
        <li>Подключение оформляет ваше УФК: договор об обмене электронными документами, сертификаты УЦ ФК, заявки на пользователей.</li>
        <li>Рабочее место = СКЗИ (КриптоПро) + Континент TLS + цепочка доверия + личный сертификат.</li>
        <li>Вход — по сертификату электронной подписи через защищённый канал.</li>
        <li>Участников казначейского сопровождения чаще ведут в ГИИС «Электронный бюджет»; какой канал у вас — определяет УФК.</li>
        <li>Инструкции и требования к версиям ПО берите только с сайта своего УФК.</li>
      </ol>
    </div>

    <h2 id="glossary">Глоссарий</h2>
    <dl class="gloss">
      <div><dt>СУФД</dt><dd>Система удалённого финансового документооборота Федерального казначейства.</dd></div>
      <div><dt>СУФД-портал</dt><dd>Веб-приложение СУФД, доступное клиентам ФК через интернет по защищённому каналу.</dd></div>
      <div><dt>УФК</dt><dd>Управление Федерального казначейства по субъекту РФ — территориальный орган, который подключает клиентов и ведёт их счета.</dd></div>
      <div><dt>СКЗИ</dt><dd>Средство криптографической защиты информации (например, КриптоПро CSP) — обеспечивает ГОСТ-подпись и шифрование.</dd></div>
      <div><dt>Континент TLS</dt><dd>Клиент защищённого соединения, через который устанавливается доступ к порталу.</dd></div>
      <div><dt>КЭП</dt><dd>Квалифицированная электронная подпись — придаёт документам юридическую силу по 63-ФЗ.</dd></div>
    </dl>

    <!-- sufd-deep -->
<h2 id="sufd-vs-eb">СУФД-портал и «Электронный бюджет»: что для чего</h2>
<p>Две системы часто путают. СУФД-портал — это канал удалённого документооборота с территориальным органом Федерального казначейства; ГИИС «Электронный бюджет» — единая система Минфина, через которую ведётся казначейское сопровождение госконтрактов. Ниже — сравнение по назначению.</p>
<table class="ctab">
<caption>СУФД-портал против «Электронного бюджета»</caption>
<tr><th>Критерий</th><th>СУФД-портал</th><th>«Электронный бюджет»</th></tr>
<tr><td>Оператор</td><td>Территориальный орган Федерального казначейства</td><td>Министерство финансов РФ</td></tr>
<tr><td>Основные пользователи</td><td>Получатели и администраторы бюджетных средств, отдельные операции по лицевым счетам</td><td>Участники казначейского сопровождения — исполнители госконтрактов</td></tr>
<tr><td>Ключевые документы</td><td>Платёжные документы, заявки, выписки по лицевому счёту</td><td>Сведения об операциях с целевыми средствами, распоряжения, санкционирование</td></tr>
<tr><td>Вход</td><td>По сертификату электронной подписи через средство криптозащиты</td><td>По сертификату электронной подписи</td></tr>
<tr><td>Роль при сопровождении контракта</td><td>Вспомогательная — доступ к части операций и выпискам</td><td>Основная рабочая система исполнителя</td></tr>
</table>
<p>Как настроить основную систему исполнителя — в статье <a href="/baza-znaniy/elektronnyy-byudzhet-dlya-ispolnitelya-kontrakta/">«Электронный бюджет» для исполнителя контракта</a>; про подпись для входа — в разборе <a href="/baza-znaniy/sertifikat-ecp-kaznachejstvo/">сертификата электронной подписи казначейства</a>.</p>

<h2 id="faq">Частые вопросы</h2>
    <div class="faq">
      <details open><summary>Что такое СУФД простыми словами?</summary><p>Это «интернет-банк» Федерального казначейства: веб-портал, через который клиенты казначейства отправляют платёжные документы, получают выписки по лицевым счетам и отчётность.</p></details>
      <details><summary>Чем СУФД отличается от «Электронного бюджета»?</summary><p>СУФД — система финансового документооборота с органом казначейства (платёжки, выписки). ГИИС «Электронный бюджет» — более широкая система управления общественными финансами, куда казначейство поэтапно переводит клиентов. Какой канал использует ваша организация, определяет ваше УФК.</p></details>
      <details><summary>Как подключиться к СУФД-порталу?</summary><p>Через своё УФК: заключить договор об обмене электронными документами, оформить сертификаты ЭП в УЦ ФК, установить СКЗИ и TLS-клиент, подать заявки на регистрацию пользователей и настроить рабочее место по инструкции управления.</p></details>
      <details><summary>Сколько стоит подключение?</summary><p>Программное обеспечение и подключение со стороны казначейства предоставляются его клиентам без взимания платы. Расходы организации — сертифицированное СКЗИ (лицензия КриптоПро) и рабочее время на настройку.</p></details>
      <details><summary>Какой логин и пароль у СУФД?</summary><p>С 2021 года вход строится на сертификате электронной подписи через защищённый канал — отдельные логин и пароль при такой схеме не используются. Доступ настраивается при подключении по памятке УФК.</p></details>
      <details><summary>Можно ли работать в СУФД с нескольких компьютеров?</summary><p>Да, но каждое рабочее место настраивается отдельно: СКЗИ, TLS-клиент, цепочка доверия и личный сертификат. Ключи подписи переносятся только установленным порядком, передавать их между сотрудниками нельзя.</p></details>
      <details><summary>Почему не открывается СУФД-портал?</summary><p>Чаще всего не запущен или не настроен Континент TLS-клиент либо нет доступа к каналу. Проверьте TLS-клиент, сетевые настройки и актуальную памятку своего УФК.</p></details>
      <details><summary>Почему портал не видит сертификат?</summary><p>Либо не установлен личный сертификат/контейнер ключей (проверьте через КриптоПро), либо не собрана цепочка доверия — установите корневой сертификат Минцифры и сертификат УЦ ФК, обновите список отзыва.</p></details>
      <details><summary>Работает ли СУФД для участников казначейского сопровождения?</summary><p>Коммерческим подрядчикам с лицевым счётом 71 операции чаще настраивают через ГИИС «Электронный бюджет». Решение зависит от категории клиента и практики УФК — уточните при открытии счёта.</p></details>
      <details><summary>Где брать инструкции по СУФД?</summary><p>На сайте своего управления ФК (раздел «ГИС → СУФД-онлайн» на региональном поддомене roskazna.gov.ru): там публикуются памятки подключения, инструкции пользователя и требования к ПО.</p></details>
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
        <li id="ref-1">Разделы «СУФД-онлайн» на сайтах управлений Федерального казначейства: порядок подключения, памятки и инструкции (например, УФК по Кировской области, УФК по Московской области) — <a href="https://kirov.roskazna.gov.ru/gis/sufd-onlajn/poryadok-podklyucheniya/" target="_blank" rel="noopener">kirov.roskazna.gov.ru</a>, <a href="https://mo.roskazna.gov.ru/gis/sufd-onlayn/" target="_blank" rel="noopener">mo.roskazna.gov.ru</a></li>
        <li id="ref-2">Казначейство России. ГИИС «Электронный бюджет»: назначение системы и подключение — <a href="https://roskazna.gov.ru/gis/ehlektronnyj-byudzhet/" target="_blank" rel="noopener">roskazna.gov.ru</a></li>
        <li id="ref-3">Памятки УФК о порядке доступа к СУФД-порталу и настройке защищённого соединения (Континент TLS) — региональные разделы «СУФД-онлайн» на roskazna.gov.ru</li>
        <li id="ref-5">Приказ Федерального казначейства от 14.05.2020 № 21н «О Порядке казначейского обслуживания» (Минюст 13.07.2020 № 58914; ред. приказа Федерального казначейства от 15.06.2026 № 13н, Минюст 03.08.2026 № 87715, вступил в силу 15.08.2026), пункт 2 приказа — перечень распоряжений и коды форм — <a href="http://publication.pravo.gov.ru/Document/View/0001202007140019" target="_blank" rel="noopener">publication.pravo.gov.ru</a></li>
        <li id="ref-6">Официальные ответы на частые вопросы по работе в СУФД-портале на сайтах управлений Федерального казначейства (колонки статусов, документарный контроль, порядок подписей) — региональные разделы «СУФД-онлайн» на roskazna.gov.ru</li>
        <li id="ref-7">Приказ Федерального казначейства от 15.12.2021 № 40н «Об утверждении Порядка казначейского обслуживания операций со средствами участников казначейского сопровождения» (Минюст 31.01.2022 № 67059; ред. приказа Федерального казначейства от 01.10.2025 № 13н) — <a href="http://publication.pravo.gov.ru/document/0001202511060003" target="_blank" rel="noopener">publication.pravo.gov.ru</a></li>
        <li id="ref-4">Федеральный закон от 06.04.2011 № 63-ФЗ «Об электронной подписи» — <a href="https://www.consultant.ru/document/cons_doc_LAW_112701/" target="_blank" rel="noopener">consultant.ru</a>; документация КриптоПро CSP — <a href="https://cryptopro.ru/" target="_blank" rel="noopener">cryptopro.ru</a></li>
      </ol>
      <p class="refs__note">Материал носит информационный характер. Состав ПО и порядок подключения зависят от требований вашего УФК; сверяйтесь с актуальными памятками на региональном сайте казначейства. Информация актуальна на 21 августа 2026 года.</p>
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
    <form class="railform" id="leadForm" novalidate data-endpoint="/php/lead.php" data-source="sufd-portal-kaznachejstva">
      <div class="railform__badge">Разбор эксперта</div>
      <h3 class="railform__title">Настроим работу с казначейством</h3>
      <p class="railform__sub">Поможем подключиться к СУФД или «Электронному бюджету», настроить подписи и пройти первый платёж без отказов. Цена — после диагностики.</p>
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
<a class="rail-svc" href="/uslugi/otkrytie-scheta/"><span class="rail-svc__k">Поможем под ключ</span><span class="rail-svc__n">Открытие казначейского счёта →</span></a>
</aside>
</div>

<section class="related" aria-labelledby="relTitle">
  <div class="related__head"><h2 id="relTitle">Что почитать ещё</h2><a href="/baza-znaniy/">Вся база знаний →</a></div>
  <div class="related__grid">
    <a class="card reveal" href="/baza-znaniy/sertifikat-ecp-kaznachejstvo/"><div class="card__cover"><span>ЭЦП</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Сертификат и ЭЦП казначейства: как получить</h3><div class="card__meta">Подпись · 14 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/kornevye-sertifikaty-kaznachejstva/"><div class="card__cover"><span>Сертификаты</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Корневые сертификаты УЦ казначейства</h3><div class="card__meta">Подпись · 13 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/rasporyazhenie-o-sovershenii-kaznacheyskogo-platezha/"><div class="card__cover"><span>Платежи</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Распоряжение о совершении казначейского платежа</h3><div class="card__meta">Операции · 14 мин</div></div></a>
    <!-- auto-related:elektronnyy-byudzhet-dlya-ispolnitelya-kontrakta --><a class="card reveal" href="/baza-znaniy/elektronnyy-byudzhet-dlya-ispolnitelya-kontrakta/"><div class="card__cover"><span>ЭБ</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">«Электронный бюджет» для исполнителя контракта</h3><div class="card__meta">ГИИС · 16 мин</div></div></a>
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

<section class="kz-sub" aria-labelledby="kzSubTitle" data-source="sufd-portal-kaznachejstva">
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
</body>
</html>
