<?php header("Cache-Control: public, max-age=300, must-revalidate"); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Портал заявителя казначейства (ФЗС): вход и заявка</title>
<meta name="description" content="Портал заявителя ФЗС (fzs.roskazna.ru): подготовка рабочего места, договор присоединения, первичный запрос на сертификат УЦ ФК и замена без визита в ТОФК.">
<meta name="author" content="Ярослав Михайлов">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1">
<meta name="theme-color" content="#F4F1EB" media="(prefers-color-scheme: light)">
<meta name="theme-color" content="#141310" media="(prefers-color-scheme: dark)">
<!-- PROD: canonical и og:url ОБЯЗАТЕЛЬНО менять под URL каждой статьи -->
<link rel="canonical" href="https://kaznaexpert.ru/baza-znaniy/portal-zayavitelya-kaznachejstva/">
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
<script>window.YM_PARAMS = {page_type:"cluster", cluster:"ecp"};</script>

<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "Article", "headline": "Портал заявителя казначейства (ФЗС): вход, заявка на сертификат и работа без возвратов", "description": "Портал заявителя ФЗС удостоверяющего центра Федерального казначейства: подготовка рабочего места, договор присоединения, первичный запрос на сертификат, дистанционная замена, статусы и частые причины возвратов.", "inLanguage": "ru-RU", "datePublished": "2026-06-12", "dateModified": "2026-06-12", "author": {"@type": "Person", "name": "Ярослав Михайлов", "jobTitle": "Главный эксперт по казначейскому сопровождению", "url": "https://kaznaexpert.ru/komanda/mihailov-yaroslav/", "@id": "https://kaznaexpert.ru/komanda/mihailov-yaroslav/#person"}, "publisher": {"@type": "Organization", "name": "КазнаЭксперт", "url": "https://kaznaexpert.ru", "logo": {"@type": "ImageObject", "url": "https://kaznaexpert.ru/img/logogold.png"}, "@id": "https://kaznaexpert.ru/#organization"}, "image": "https://kaznaexpert.ru/img/og-image.png", "mainEntityOfPage": {"@type": "WebPage", "@id": "https://kaznaexpert.ru/baza-znaniy/portal-zayavitelya-kaznachejstva/"}, "citation": ["https://roskazna.gov.ru/gis/udostoveryayushchij-centr/onlajn-servis-podachi-dokumentov-dlya-polucheniya-sertifikatov-portal-zayavitelya", "https://mo.roskazna.gov.ru/gis/udostoveryayuschiy-centr/online-servis-podachi-dokumentov-dlya-polucheniya-sertifikatov", "https://www.consultant.ru/document/cons_doc_LAW_112701/", "https://roskazna.gov.ru/gis/udostoveryayushhij-centr/poluchenie-sertifikata/", "http://publication.pravo.gov.ru/"]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "Главная", "item": "https://kaznaexpert.ru/"}, {"@type": "ListItem", "position": 2, "name": "База знаний", "item": "https://kaznaexpert.ru/baza-znaniy/"}, {"@type": "ListItem", "position": 3, "name": "Портал заявителя казначейства (ФЗС)", "item": "https://kaznaexpert.ru/baza-znaniy/portal-zayavitelya-kaznachejstva/"}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [{"@type": "Question", "name": "В портале заявителя нет распоряжений — где их создавать?", "acceptedAnswer": {"@type": "Answer", "text": "Распоряжения о совершении казначейского платежа создают не в портале заявителя (ФЗС), а в личном кабинете ГИИС Электронный бюджет, в модуле казначейского сопровождения. ФЗС нужен для получения сертификата, а распоряжения формируют в Электронном бюджете."}}, 
{"@type": "Question", "name": "Что такое портал заявителя ФЗС?", "acceptedAnswer": {"@type": "Answer", "text": "Онлайн-сервис удостоверяющего центра Федерального казначейства (fzs.roskazna.ru) для подачи документов на квалифицированный сертификат электронной подписи и отслеживания статуса запроса."}},
{"@type": "Question", "name": "Можно ли получить сертификат казначейства полностью дистанционно?", "acceptedAnswer": {"@type": "Answer", "text": "Замену при действующем сертификате — да, полностью онлайн. Первичное получение требует одного визита в ТОФК: оператор обязан удостоверить личность владельца."}},
{"@type": "Question", "name": "Сколько изготавливается сертификат через ФЗС?", "acceptedAnswer": {"@type": "Answer", "text": "До 5 рабочих дней с момента представления полного и корректного комплекта документов."}},
{"@type": "Question", "name": "Почему ФЗС не открывается в обычном браузере?", "acceptedAnswer": {"@type": "Answer", "text": "Портал работает по защищённому соединению ГОСТ TLS. Нужен браузер с поддержкой ГОСТ (Chromium-Gost), КриптоПро CSP и КриптоПро ЭЦП Browser plug-in."}},
{"@type": "Question", "name": "Нужен ли договор с казначейством перед подачей запроса?", "acceptedAnswer": {"@type": "Answer", "text": "Да, организация один раз заключает договор присоединения к Регламенту УЦ ФК со своим территориальным органом казначейства; без него запросы не принимаются."}},
{"@type": "Question", "name": "Чем подпись УЦ ФК отличается от подписи ФНС?", "acceptedAnswer": {"@type": "Answer", "text": "Подпись ФНС используется для общей хозяйственной деятельности, подпись УЦ ФК — для систем казначейства («Электронный бюджет», СУФД). Участнику казначейского сопровождения нужны, как правило, обе."}},
{"@type": "Question", "name": "Какие документы готовить для первичного запроса?", "acceptedAnswer": {"@type": "Answer", "text": "Паспорт, СНИЛС и ИНН владельца сертификата, ИНН/ОГРН организации, документ о полномочиях (приказ или доверенность) и сертифицированный ключевой носитель."}},
{"@type": "Question", "name": "Что делать, если запрос вернули на доработку?", "acceptedAnswer": {"@type": "Answer", "text": "Открыть комментарий оператора в ФЗС, исправить ровно указанное замечание (чаще всего — расхождение ФИО/СНИЛС или дефект доверенности) и отправить запрос повторно."}},
{"@type": "Question", "name": "За сколько дней подавать на замену сертификата?", "acceptedAnswer": {"@type": "Answer", "text": "За 3–4 недели до окончания срока действия: тогда замена пройдёт дистанционно, без потери доступа к «Электронному бюджету» и СУФД."}},
{"@type": "Question", "name": "Подходит ли подпись УЦ ФК для торговых площадок?", "acceptedAnswer": {"@type": "Answer", "text": "Её назначение — системы казначейства. Для электронных торговых площадок и обычного ЭДО используется квалифицированная подпись УЦ ФНС России."}}
]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "HowTo", "name": "Как получить сертификат через портал заявителя ФЗС", "inLanguage": "ru-RU", "step": [
{"@type": "HowToStep", "position": 1, "name": "Подготовить АРМ и документы", "text": "Установить Chromium-Gost, КриптоПро CSP и браузер-плагин; собрать паспорт, СНИЛС, ИНН и документ о полномочиях; заключить договор присоединения к Регламенту УЦ ФК."},
{"@type": "HowToStep", "position": 2, "name": "Открыть fzs.roskazna.ru", "text": "Выбрать тип запроса (первичный или замена) и заполнить сведения о заявителе и организации."},
{"@type": "HowToStep", "position": 3, "name": "Сформировать ключи", "text": "Сгенерировать ключевую пару на сертифицированном носителе средствами КриптоПро; закрытый ключ не покидает носитель."},
{"@type": "HowToStep", "position": 4, "name": "Приложить документы и отправить", "text": "Загрузить читаемые сканы, сверить ФИО и СНИЛС с документами, отправить запрос на проверку."},
{"@type": "HowToStep", "position": 5, "name": "Пройти выдачу", "text": "Для первичного запроса — лично явиться в ТОФК с оригиналами; изготовление занимает до 5 рабочих дней."},
{"@type": "HowToStep", "position": 6, "name": "Установить сертификат", "text": "Установить сертификат и проверить вход в «Электронный бюджет» и СУФД; при ошибках проверить корневые сертификаты УЦ."}
]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "DefinedTermSet", "name": "Глоссарий: портал заявителя и УЦ казначейства", "inLanguage": "ru-RU", "hasDefinedTerm": [
{"@type": "DefinedTerm", "name": "ФЗС", "description": "Портал заявителя «Формирование запросов на сертификаты» — онлайн-сервис УЦ Федерального казначейства для подачи документов на сертификат."},
{"@type": "DefinedTerm", "name": "УЦ ФК", "description": "Аккредитованный удостоверяющий центр Федерального казначейства, выдающий квалифицированные сертификаты для работы в государственных системах."},
{"@type": "DefinedTerm", "name": "Договор присоединения", "description": "Соглашение организации с ТОФК о присоединении к Регламенту УЦ ФК; заключается один раз до подачи первого запроса."},
{"@type": "DefinedTerm", "name": "Ключевой носитель", "description": "Сертифицированный токен, на котором генерируется и хранится закрытый ключ электронной подписи."},
{"@type": "DefinedTerm", "name": "Запрос на сертификат", "description": "Электронное заявление с открытым ключом, формируемое в ФЗС и направляемое в УЦ для выпуска сертификата."}
]}
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
<meta property="og:title" content="Портал заявителя казначейства (ФЗС): вход, заявка на сертификат">
<meta property="og:description" content="Настройка АРМ, договор присоединения, первичный запрос за один визит и дистанционная замена. Диагностика входа и частые причины возвратов.">
<meta property="og:url" content="https://kaznaexpert.ru/baza-znaniy/portal-zayavitelya-kaznachejstva/">
<meta property="og:image" content="https://kaznaexpert.ru/img/og-image.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="Портал заявителя казначейства (ФЗС): вход, заявка на сертификат — КазнаЭксперт">
<meta property="article:published_time" content="2026-06-05T09:00:00+03:00">
<meta property="article:modified_time" content="2026-06-05T09:00:00+03:00">
<meta property="article:author" content="https://kaznaexpert.ru/komanda/mihailov-yaroslav/">
<meta property="article:section" content="База знаний">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Портал заявителя казначейства (ФЗС): вход, заявка на сертификат">
<meta name="twitter:description" content="Настройка АРМ, договор присоединения, первичный запрос за один визит и дистанционная замена. Диагностика входа и частые причины возвратов.">
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
  <nav class="crumbs" aria-label="Хлебные крошки"><a href="/">Главная</a> › <a href="/baza-znaniy/">База знаний</a> › Портал заявителя казначейства (ФЗС)</nav>

  <aside class="toc" aria-label="Содержание">
    <div class="toc__label">Содержание</div>
    <ul class="toc__list" id="tocList">
      <li><a href="#chto-takoe">Что такое портал заявителя</a></li>
      <li><a href="#komu">Кому нужен ФЗС</a></li>
      <li><a href="#pravovaya">Правовая база</a></li>
      <li><a href="#arm">Подготовка рабочего места</a></li>
      <li><a href="#dogovor">Договор присоединения к Регламенту УЦ</a></li>
      <li><a href="#pervichnyy">Первичный запрос: пошагово</a></li>
      <li><a href="#zamena">Замена сертификата дистанционно</a></li>
      <li><a href="#vhod">Вход в ФЗС: диагностика проблем</a></li>
      <li><a href="#statusy">Статусы запроса и сроки</a></li>
      <li><a href="#vozvraty">Частые причины возвратов</a></li>
      <li><a href="#izmeneniya">Изменения 2025–2026</a></li>
      <li><a href="#chek-list">Чек-лист перед подачей</a></li>
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
    <h1>Портал заявителя казначейства (ФЗС): вход, заявка на сертификат и работа без возвратов</h1>
    <div class="byline"><span class="av">ЯМ</span><span>Автор: <a href="/komanda/mihailov-yaroslav/">Ярослав Михайлов</a>, главный эксперт</span><span class="dot">·</span><span>15+ лет в Казначействе</span><span class="dot">·</span><span>15 мин чтения</span><span class="dot">·</span><span>Обновлено 12 июня 2026</span></div>
    </div>

    <div class="share">
      <span class="share__label">Поделиться:</span>
      <a href="https://t.me/share/url?url=https%3A%2F%2Fkaznaexpert.ru%2Fbaza-znaniy%2Fportal-zayavitelya-kaznachejstva%2F&amp;text=%D0%9F%D0%BE%D1%80%D1%82%D0%B0%D0%BB%20%D0%B7%D0%B0%D1%8F%D0%B2%D0%B8%D1%82%D0%B5%D0%BB%D1%8F%20%D0%A4%D0%97%D0%A1%20%D0%BA%D0%B0%D0%B7%D0%BD%D0%B0%D1%87%D0%B5%D0%B9%D1%81%D1%82%D0%B2%D0%B0%3A%20%D0%BD%D0%B0%D1%81%D1%82%D1%80%D0%BE%D0%B9%D0%BA%D0%B0%20%D1%80%D0%B0%D0%B1%D0%BE%D1%87%D0%B5%D0%B3%D0%BE%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0%2C%20%D0%BF%D0%B5%D1%80%D0%B2%D0%B8%D1%87%D0%BD%D1%8B%D0%B9%20%D0%B7%D0%B0%D0%BF%D1%80%D0%BE%D1%81%20%D0%BD%D0%B0%20%D1%81%D0%B5%D1%80%D1%82%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%D1%82%2C%20%D0%B4%D0%B8%D1%81%D1%82%D0%B0%D0%BD%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D0%B0%D1%8F%20%D0%B7%D0%B0%D0%BC%D0%B5%D0%BD%D0%B0%20%D0%B8%20%D1%87%D0%B0%D1%81%D1%82%D1%8B%D0%B5%20%D0%BF%D1%80%D0%B8%D1%87%D0%B8%D0%BD%D1%8B%20%D0%B2%D0%BE%D0%B7%D0%B2%D1%80%D0%B0%D1%82%D0%BE%D0%B2" target="_blank" rel="noopener"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.56 8.25l-1.86 8.76c-.14.62-.5.77-1.02.48l-2.82-2.08-1.36 1.31c-.15.15-.28.28-.57.28l.2-2.89 5.27-4.76c.23-.2-.05-.32-.35-.12l-6.51 4.1-2.8-.88c-.61-.19-.62-.61.13-.9l10.95-4.22c.5-.18.95.12.79.85z"/></svg>Telegram</a>
      <button type="button" id="copyLink"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.07 0l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.07 0l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg><span>Копировать ссылку</span></button>
      <button type="button" id="printBtn"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9V2h12v7M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2M6 14h12v8H6z"/></svg>Скачать PDF</button>
    </div>

    <details class="mtoc"><summary>Содержание статьи</summary>
      <ol>
        <li><a href="#chto-takoe">Что такое портал заявителя</a></li><li><a href="#komu">Кому нужен ФЗС</a></li><li><a href="#pravovaya">Правовая база</a></li><li><a href="#arm">Подготовка рабочего места</a></li><li><a href="#dogovor">Договор присоединения к Регламенту УЦ</a></li><li><a href="#pervichnyy">Первичный запрос: пошагово</a></li><li><a href="#zamena">Замена сертификата дистанционно</a></li><li><a href="#vhod">Вход в ФЗС: диагностика проблем</a></li><li><a href="#statusy">Статусы запроса и сроки</a></li><li><a href="#vozvraty">Частые причины возвратов</a></li><li><a href="#izmeneniya">Изменения 2025–2026</a></li><li><a href="#chek-list">Чек-лист перед подачей</a></li><li><a href="#keys">Пример из практики</a></li><li><a href="#glossary">Глоссарий</a></li><li><a href="#faq">Частые вопросы</a></li>
      </ol>
    </details>

    <div class="tldr">Портал заявителя «Формирование запросов на сертификаты» (ФЗС) — онлайн-сервис удостоверяющего центра Федерального казначейства на fzs.roskazna.ru. Через него подают документы на квалифицированный сертификат электронной подписи: первичный запрос — с одним визитом в ТОФК, замену — полностью дистанционно. Изготовление занимает до 5 рабочих дней.<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a><a class="fn" href="#ref-2" aria-label="Источник 2">[2]</a></div>

    <section class="keyfacts grain" aria-label="Ключевые факты">
      <h2>Коротко о главном</h2>
      <div class="keyfacts__grid">
        <div class="kf"><div class="kf__n">ФЗС</div><div class="kf__t"><b>Портал заявителя</b> УЦ Федерального казначейства — fzs.roskazna.ru</div></div>
        <div class="kf"><div class="kf__n">№ 21н</div><div class="kf__t"><b>Регламент УЦ ФК</b> — приказ Казначейства от 15.06.2021</div></div>
        <div class="kf"><div class="kf__n">до 5 дн.</div><div class="kf__t"><b>Изготовление</b> сертификата — рабочих дней с подачи</div></div>
        <div class="kf"><div class="kf__n">1 визит</div><div class="kf__t"><b>Первичный запрос</b> — личная явка в ТОФК для идентификации</div></div>
        <div class="kf"><div class="kf__n">0 визитов</div><div class="kf__t"><b>Замена</b> — дистанционно при действующей подписи</div></div>
        <div class="kf"><div class="kf__n">ГОСТ TLS</div><div class="kf__t"><b>АРМ</b> — Chromium-Gost + КриптоПро CSP + браузер-плагин</div></div>
      </div>
    </section>

    <h2 id="chto-takoe">Что такое портал заявителя ФЗС</h2>
    <div class="answer reveal">
      <p class="lead-p">Портал заявителя «Формирование запросов на сертификаты» (ФЗС) — это онлайн-сервис информационной системы удостоверяющего центра Федерального казначейства по адресу fzs.roskazna.ru. Через него заявитель формирует запрос на квалифицированный сертификат ключа проверки электронной подписи, прикладывает документы и отслеживает статус — без бумажной переписки с ТОФК.<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a></p>
      <p>До появления ФЗС документы на сертификат подавали на бумаге через «единое окно» территориального органа казначейства. Сейчас бумажный маршрут остался резервным, а основной поток заявок идёт через портал: он сам проверяет комплектность, подсказывает формат вложений и возвращает запрос на доработку с конкретной причиной, а не «молча».</p>
    </div>
    <p>Важно не путать три сервиса казначейства, которые часто смешивают: ФЗС — подача документов на сертификат; <a href="/baza-znaniy/sufd-portal-kaznachejstva/">СУФД</a> — проведение платёжных документов; «Электронный бюджет» — учёт соглашений, сведений об операциях и отчётности при казначейском сопровождении. Подпись, полученная через ФЗС, открывает доступ к двум последним системам.</p>

    <h2 id="komu">Кому нужен ФЗС: четыре типовые ситуации</h2>
    <p>Удостоверяющий центр Федерального казначейства выдаёт квалифицированные сертификаты не всем подряд — его сфера определена законодательством об электронной подписи. На практике через ФЗС проходят четыре категории заявителей.<a class="fn" href="#ref-3" aria-label="Источник 3">[3]</a></p>
    <table>
      <caption>Кто получает сертификаты через портал заявителя</caption>
      <tr><th>Категория</th><th>Зачем нужна подпись УЦ ФК</th></tr>
      <tr><td>Органы власти и местного самоуправления</td><td>Работа в ГИИС «Электронный бюджет», СУФД, размещение информации в государственных системах</td></tr>
      <tr><td>Бюджетные и автономные учреждения</td><td>Платёжные документы, отчётность, соглашения о субсидиях</td></tr>
      <tr><td>Коммерческие организации — участники казначейского сопровождения</td><td>Подписание сведений об операциях с целевыми средствами и платёжных документов по <a href="/baza-znaniy/licevoy-schet-71-kak-otkryt/">лицевому счёту 71</a> в «Электронном бюджете»</td></tr>
      <tr><td>Должностные лица, работающие в системах казначейства</td><td>Персональные сертификаты сотрудников с полномочиями подписи</td></tr>
    </table>
    <p>Для подрядчика по госконтракту ключевой случай — третий. Квалифицированную подпись для обычной хозяйственной деятельности руководитель компании получает в УЦ ФНС России, но для работы с лицевым счётом в «Электронном бюджете» нужна подпись именно удостоверяющего центра казначейства — подробный разбор различий есть в статье о <a href="/baza-znaniy/sertifikat-ecp-kaznachejstvo/">сертификате и ЭЦП казначейства</a>. Поэтому типичная связка исполнителя контракта: подпись ФНС для ЕГРЮЛ-деятельности плюс подпись УЦ ФК для казначейских систем.</p>

    <h2 id="pravovaya">Правовая база: на что опирается работа портала</h2>
    <p>Порядок выдачи сертификатов УЦ ФК закреплён нормативно, и ссылки на эти документы пригодятся при споре с ТОФК о причинах отказа.</p>
    <table>
      <caption>Нормативная база работы УЦ Федерального казначейства</caption>
      <tr><th>Документ</th><th>Что регулирует</th></tr>
      <tr><td>Федеральный закон от 06.04.2011 № 63-ФЗ «Об электронной подписи»</td><td>Статус квалифицированной подписи, требования к аккредитованным УЦ, сферы выдачи сертификатов</td></tr>
      <tr><td>Приказ Казначейства России от 15.06.2021 № 21н — Регламент УЦ ФК</td><td>Процедуры создания и выдачи сертификатов, договор присоединения, основания для отказа</td></tr>
      <tr><td>Приказ Казначейства России от 25.08.2025 № 7н</td><td>Изменения в порядок выдачи с 01.09.2025, в том числе сертификаты госорганам, сведения о которых не включаются в ЕГРЮЛ</td></tr>
      <tr><td>Памятки и инструкции УЦ ФК на roskazna.gov.ru</td><td>Технические требования к АРМ, пошаговые руководства по работе в ФЗС</td></tr>
    </table>

    <h2 id="arm">Подготовка рабочего места: без этого портал не откроется</h2>
    <p>ФЗС работает по защищённому соединению ГОСТ TLS, поэтому обычный браузер страницу подачи запроса не откроет. Перед началом работы на компьютере должны стоять три компонента.<a class="fn" href="#ref-2" aria-label="Источник 2">[2]</a></p>
    <table>
      <caption>Программное обеспечение для работы с ФЗС</caption>
      <tr><th>Компонент</th><th>Назначение</th><th>Где взять</th></tr>
      <tr><td>Браузер с поддержкой ГОСТ TLS (Chromium-Gost)</td><td>Открытие защищённого соединения с fzs.roskazna.ru</td><td>Распространяется свободно, ссылки в инструкциях УЦ ФК</td></tr>
      <tr><td>СКЗИ «КриптоПро CSP»</td><td>Криптооперации: генерация ключей, подпись запроса</td><td>Лицензия приобретается; для работы с УЦ ФК подходят актуальные версии 4.0/5.0</td></tr>
      <tr><td>КриптоПро ЭЦП Browser plug-in 2.0</td><td>Связка браузера с криптопровайдером</td><td>Свободная загрузка с сайта КриптоПро</td></tr>
      <tr><td>Корневые сертификаты УЦ</td><td>Доверие цепочке сертификатов казначейства</td><td>Установка по нашей инструкции о <a href="/baza-znaniy/kornevye-sertifikaty-kaznachejstva/">корневых сертификатах УЦ казначейства</a></td></tr>
    </table>
    <div class="note"><b>Частая ловушка.</b> Портал «не открывается» или показывает ошибку соединения чаще всего не из-за казначейства, а из-за АРМ: стоит обычный Chrome вместо Chromium-Gost, не установлен плагин или истекла лицензия КриптоПро. Проверка трёх компонентов решает большинство «загадочных» проблем со входом.</div>

    <h2 id="dogovor">Договор присоединения к Регламенту УЦ</h2>
    <p>Прежде чем портал примет первый запрос организации, нужно заключить договор присоединения (соглашение) к Регламенту УЦ ФК с территориальным органом казначейства по месту нахождения организации или её обособленного подразделения.<a class="fn" href="#ref-4" aria-label="Источник 4">[4]</a> Это разовая процедура: договор действует для всех последующих сертификатов организации.</p>
    <p>Найти свой ТОФК и его адрес можно в нашем <a href="/baza-znaniy/tofk/">справочнике территориальных органов казначейства</a> — там же указаны коды ТОФК, которые понадобятся при заполнении заявления. Если вы только выходите на госконтракт и параллельно открываете лицевой счёт, удобно совместить визиты: подать договор присоединения вместе с документами на <a href="/baza-znaniy/licevoy-schet-71-kak-otkryt/">открытие лицевого счёта</a>.</p>

    <h2 id="pervichnyy">Первичный запрос на сертификат: пошагово</h2>
    <p>Первичное получение — единственный сценарий, где без личного визита не обойтись: оператор УЦ обязан удостоверить личность получателя сертификата. Дальше всё дистанционно.</p>
    <h3>Шаг 1. Подготовьте АРМ и документы</h3>
    <p>Установите Chromium-Gost, КриптоПро CSP и браузер-плагин. Подготовьте паспорт, СНИЛС, ИНН организации и физлица-владельца, документ о полномочиях (приказ, доверенность). Проверьте, что договор присоединения к Регламенту заключён.</p>
    <h3>Шаг 2. Откройте fzs.roskazna.ru и выберите тип запроса</h3>
    <p>На стартовой странице выберите «Подать документы» → первичный запрос без действующего сертификата. Портал предложит заполнить сведения о заявителе и организации; данные сверяются с ЕГРЮЛ и СМЭВ автоматически.</p>
    <h3>Шаг 3. Сформируйте ключи и запрос на сертификат</h3>
    <p>По кнопке портала криптопровайдер сгенерирует ключевую пару на вашем носителе (токен или съёмный ключевой носитель). Закрытый ключ не покидает носитель — на сервер уходит только запрос на сертификат.</p>
    <h3>Шаг 4. Приложите сканы и отправьте запрос</h3>
    <p>Загрузите документы по списку портала. Перед отправкой система покажет печатную форму заявления — проверьте ФИО, СНИЛС и полномочия: расхождение в одной букве вернёт запрос на доработку.</p>
    <h3>Шаг 5. Дождитесь проверки и придите в ТОФК</h3>
    <p>УЦ проверяет сведения и назначает выдачу. С паспортом и оригиналами документов владелец сертификата лично приходит в ТОФК; оператор удостоверяет личность и активирует выдачу. Изготовление сертификата занимает до 5 рабочих дней с момента представления полного комплекта.<a class="fn" href="#ref-4" aria-label="Источник 4">[4]</a></p>
    <h3>Шаг 6. Установите сертификат и проверьте вход в системы</h3>
    <p>Скачайте изготовленный сертификат из ФЗС или получите в ТОФК, установите в хранилище и проверьте вход в «Электронный бюджет» и СУФД. Если системы не видят подпись — проверьте <a href="/baza-znaniy/kornevye-sertifikaty-kaznachejstva/">цепочку корневых сертификатов</a>.</p>

    <h2 id="zamena">Замена сертификата: полностью дистанционно</h2>
    <p>Пока действует текущий сертификат, новый выпускается без визита в ТОФК: заявитель входит в ФЗС по действующей подписи, портал подтягивает данные из прежнего запроса, заявление подписывается электронно. Это главный аргумент не доводить подпись до истечения срока: после него процедура снова становится «первичной», с личной явкой и потерей доступа к системам на время выпуска.</p>
    <p>Оптимальный график — подавать на замену за 3–4 недели до окончания срока действия. Пошаговый разбор сценариев продления и отзыва (увольнение владельца, компрометация ключа, смена реквизитов) — в статье <a href="/baza-znaniy/kak-prodlit-i-otozvat-ecp-kaznachejstva/">как продлить и отозвать ЭЦП казначейства</a>.</p>

    <h2 id="vhod">Вход в ФЗС: диагностика типовых проблем</h2>
    <p>Запросы «портал заявителя вход» — одни из самых частых в теме, и почти всегда за ними стоит не сломанный портал, а неготовое рабочее место. Диагностика идёт от простого к сложному: браузер → плагин → криптопровайдер → сертификаты → сеть.</p>
    <table>
      <caption>Симптомы и причины проблем со входом в ФЗС</caption>
      <tr><th>Симптом</th><th>Вероятная причина</th><th>Решение</th></tr>
      <tr><td>Страница вообще не открывается, ошибка соединения</td><td>Браузер без поддержки ГОСТ TLS</td><td>Открывать fzs.roskazna.ru в Chromium-Gost, а не в обычном Chrome/Edge</td></tr>
      <tr><td>Портал открылся, но не видит сертификат</td><td>Не установлен или отключён КриптоПро ЭЦП Browser plug-in</td><td>Установить плагин, разрешить его работу для сайта в настройках браузера</td></tr>
      <tr><td>«Не удалось создать подпись», ошибки криптоопераций</td><td>Истекла лицензия КриптоПро CSP или версия несовместима</td><td>Проверить лицензию в панели КриптоПро, обновить версию по памяткам УЦ</td></tr>
      <tr><td>Сертификат есть, но цепочка «красная», подпись не проходит проверку</td><td>Не установлены корневые сертификаты УЦ</td><td>Установить цепочку по инструкции о <a href="/baza-znaniy/kornevye-sertifikaty-kaznachejstva/">корневых сертификатах казначейства</a></td></tr>
      <tr><td>Вход по действующей подписи не даёт продолжить замену</td><td>Сертификат отозван, приостановлен или истёк</td><td>Проверить статус сертификата; при истечении — маршрут первичного запроса с визитом в ТОФК</td></tr>
      <tr><td>Портал «зависает» на загрузке документов</td><td>Сканы превышают допустимый размер или формат</td><td>Сжать файлы до требований портала, использовать PDF</td></tr>
    </table>
    <p>Полезная привычка — проверять рабочее место не в день дедлайна, а при каждом обновлении браузера или КриптоПро: обновления регулярно «отвязывают» плагин и сбивают настройки доверенных узлов.</p>

    <h2 id="statusy">Статусы запроса и сроки</h2>
    <table>
      <caption>Жизненный цикл запроса в ФЗС</caption>
      <tr><th>Статус</th><th>Что происходит</th><th>Что делать заявителю</th></tr>
      <tr><td>Черновик</td><td>Запрос заполняется, на проверку не ушёл</td><td>Дозаполнить и отправить</td></tr>
      <tr><td>На проверке</td><td>Оператор УЦ проверяет сведения и документы</td><td>Ждать; срок изготовления — до 5 рабочих дней</td></tr>
      <tr><td>Возвращён на доработку</td><td>Найдены замечания, в комментарии указана причина</td><td>Исправить ровно то, что указано, и отправить повторно</td></tr>
      <tr><td>Одобрен / назначена выдача</td><td>Сертификат изготовлен или готов к выпуску</td><td>Для первичного — визит в ТОФК; для замены — скачать сертификат</td></tr>
      <tr><td>Отклонён</td><td>Отказ по основаниям Регламента</td><td>Устранить причину (полномочия, документы) и подать новый запрос</td></tr>
    </table>

    <h2 id="vozvraty">Частые причины возвратов: что проверяют операторы</h2>
    <p>По опыту сопровождения клиентов, возвраты запросов в ФЗС почти всегда укладываются в короткий список. Перед отправкой пройдитесь по нему — сэкономите от трёх дней до двух недель.</p>
    <table>
      <caption>Типовые замечания УЦ ФК и как их избежать</caption>
      <tr><th>Причина возврата</th><th>Профилактика</th></tr>
      <tr><td>Расхождение ФИО/СНИЛС/ИНН с данными госреестров</td><td>Сверить написание с паспортом и СНИЛС до буквы, особенно «е/ё» и дефисы</td></tr>
      <tr><td>Полномочия владельца не подтверждены</td><td>Приложить приказ или доверенность с правом подписи в системах казначейства; срок действия не истёк</td></tr>
      <tr><td>Нечитаемые или обрезанные сканы</td><td>Полные развороты, все страницы, читаемые печати</td></tr>
      <tr><td>Заявление подписано не тем лицом</td><td>Заявление подписывает владелец сертификата либо уполномоченное лицо по доверенности</td></tr>
      <tr><td>Нет договора присоединения к Регламенту</td><td>Заключить договор с ТОФК до подачи первого запроса</td></tr>
      <tr><td>Ключи сгенерированы на несертифицированном носителе</td><td>Использовать носитель, соответствующий требованиям УЦ (токен с актуальным сертификатом соответствия)</td></tr>
    </table>

    <h3>Что стоит денег, а что входит в госуслугу</h3>
    <p>Сам выпуск сертификата УЦ Федерального казначейства — государственная функция: плата за изготовление не взимается. Бюджет процедуры складывается из сопутствующего: лицензия КриптоПро CSP на рабочее место (либо встроенная в носитель), сертифицированный токен под ключевую пару и время специалиста на подготовку АРМ и комплекта документов. Для организации с несколькими владельцами подписей экономнее планировать выпуск пакетно: одно рабочее место настраивается один раз, а запросы в ФЗС подаются последовательно, без повторной настройки.</p>

    <h2 id="izmeneniya">Изменения 2025–2026 годов</h2>
    <p>С 1 сентября 2025 года вступили в силу поправки: квалифицированный сертификат может быть выдан государственному органу, сведения о котором не включаются в ЕГРЮЛ — это закрыло формальный пробел для части органов власти (Федеральный закон от 21.04.2025 № 94-ФЗ, приказ Казначейства России от 25.08.2025 № 7н).<a class="fn" href="#ref-5" aria-label="Источник 5">[5]</a> Для коммерческих участников казначейского сопровождения порядок принципиально не менялся: маршрут «договор присоединения → ФЗС → выдача в ТОФК» работает стабильно, обновляются в основном технические требования к АРМ и версии криптосредств — их стоит сверять с актуальными памятками УЦ перед каждой заменой сертификата.</p>

    <h2 id="chek-list">Чек-лист перед подачей запроса</h2>
    <div class="answer reveal">
      <ul>
        <li>Договор присоединения к Регламенту УЦ ФК заключён с вашим ТОФК.</li>
        <li>АРМ готов: Chromium-Gost, КриптоПро CSP с действующей лицензией, браузер-плагин 2.0, корневые сертификаты.</li>
        <li>Носитель ключа сертифицирован и пуст либо имеет место под новую ключевую пару.</li>
        <li>Паспорт, СНИЛС, ИНН, приказ/доверенность на владельца — сканы полные и читаемые.</li>
        <li>ФИО и СНИЛС в заявлении сверены с документами до символа.</li>
        <li>Для замены: текущий сертификат действует и до его окончания не меньше недели.</li>
      </ul>
    </div>

    <h2 id="keys">Пример из практики</h2>
    <div class="answer reveal">
      <p>Типовая ситуация: подрядчик выиграл контракт с казначейским сопровождением, лицевой счёт открыт, а сведения об операциях подписать нечем — подписи УЦ ФК нет, и комплект на неё начали собирать только после напоминания заказчика. Первый запрос вернули из-за доверенности без полномочий на работу в «Электронном бюджете», второй — из-за скана паспорта без страницы регистрации. В итоге подпись появилась через три недели, и всё это время счёт стоял без движения. После этого случая компания внесла в регламент выхода на новый контракт правило: договор присоединения и запрос в ФЗС подаются в один день с документами на открытие счёта. Пример обобщённый; сроки и состав замечаний зависят от конкретного ТОФК и комплекта документов.</p>
    </div>

    <h2 id="glossary">Глоссарий</h2>
    <dl class="gloss">
      <div><dt>ФЗС</dt><dd>Портал заявителя «Формирование запросов на сертификаты» — онлайн-сервис УЦ Федерального казначейства для подачи документов на сертификат (fzs.roskazna.ru).</dd></div>
      <div><dt>УЦ ФК</dt><dd>Аккредитованный удостоверяющий центр Федерального казначейства; выдаёт квалифицированные сертификаты для работы в государственных системах.</dd></div>
      <div><dt>Договор присоединения</dt><dd>Соглашение организации с ТОФК о присоединении к Регламенту УЦ ФК (приказ № 21н); заключается один раз до первого запроса.</dd></div>
      <div><dt>Ключевой носитель</dt><dd>Сертифицированный токен, на котором генерируется и хранится закрытый ключ подписи; ключ не покидает носитель.</dd></div>
      <div><dt>Запрос на сертификат</dt><dd>Электронное заявление с открытым ключом, формируемое в ФЗС и направляемое в УЦ для выпуска сертификата.</dd></div>
      <div><dt>ГОСТ TLS</dt><dd>Защищённое соединение на российских криптоалгоритмах; для него нужен браузер с поддержкой ГОСТ, например Chromium-Gost.</dd></div>
    </dl>

    <h2 id="faq">Частые вопросы</h2>
    <div class="faq">
      <details><summary>В портале заявителя нет распоряжений — где их создавать?</summary><p>Распоряжения о совершении казначейского платежа создают не в портале заявителя (ФЗС), а в личном кабинете ГИИС «Электронный бюджет», в модуле казначейского сопровождения. ФЗС нужен для получения сертификата, а распоряжения формируют в «Электронном бюджете» — см. <a href="/baza-znaniy/rasporyazhenie-o-sovershenii-kaznacheyskogo-platezha/">разбор распоряжения</a>.</p></details>
      <details open><summary>Что такое портал заявителя ФЗС?</summary><p>Онлайн-сервис удостоверяющего центра Федерального казначейства (fzs.roskazna.ru) для подачи документов на квалифицированный сертификат электронной подписи и отслеживания статуса запроса.</p></details>
      <details><summary>Можно ли получить сертификат полностью дистанционно?</summary><p>Замену при действующем сертификате — да, полностью онлайн. Первичное получение требует одного визита в ТОФК: оператор обязан удостоверить личность владельца сертификата.</p></details>
      <details><summary>Сколько изготавливается сертификат?</summary><p>До 5 рабочих дней с момента представления полного и корректного комплекта документов. Возврат на доработку обнуляет ожидание, поэтому комплект стоит проверять по чек-листу до отправки.</p></details>
      <details><summary>Почему ФЗС не открывается в обычном браузере?</summary><p>Портал работает по защищённому соединению ГОСТ TLS. Нужен браузер с поддержкой ГОСТ (Chromium-Gost), установленный КриптоПро CSP и КриптоПро ЭЦП Browser plug-in.</p></details>
      <details><summary>Нужен ли договор с казначейством перед подачей запроса?</summary><p>Да. Организация один раз заключает договор присоединения к Регламенту УЦ ФК со своим территориальным органом казначейства; без него запросы не принимаются.</p></details>
      <details><summary>Чем подпись УЦ ФК отличается от подписи ФНС?</summary><p>Подпись ФНС — для общей хозяйственной деятельности и торговых площадок, подпись УЦ ФК — для систем казначейства («Электронный бюджет», СУФД). Участнику казначейского сопровождения, как правило, нужны обе.</p></details>
      <details><summary>Какие документы готовить для первичного запроса?</summary><p>Паспорт, СНИЛС и ИНН владельца сертификата, ИНН/ОГРН организации, документ о полномочиях (приказ или доверенность) и сертифицированный ключевой носитель.</p></details>
      <details><summary>Кто в организации может быть владельцем сертификата?</summary><p>Руководитель или сотрудник, чьи полномочия на работу в системах казначейства подтверждены приказом либо доверенностью. На каждого владельца оформляется отдельный сертификат.</p></details>
      <details><summary>Что делать, если запрос вернули на доработку?</summary><p>Открыть комментарий оператора в ФЗС, исправить ровно указанное замечание — чаще всего это расхождение ФИО/СНИЛС с реестрами или дефект доверенности — и отправить запрос повторно.</p></details>
      <details><summary>За сколько дней подавать на замену сертификата?</summary><p>За 3–4 недели до окончания срока действия. Тогда замена пройдёт дистанционно и без потери доступа к «Электронному бюджету» и СУФД.</p></details>
      <details><summary>Можно ли подать запрос за владельца сертификата?</summary><p>Заполнить запрос в ФЗС может уполномоченный сотрудник, но удостоверение личности при первичной выдаче проходит лично владелец, а заявление подписывается им или лицом с соответствующей доверенностью.</p></details>
      <details><summary>Сертификат получен — почему «Электронный бюджет» его не видит?</summary><p>Обычно не установлена цепочка корневых сертификатов УЦ или сертификат не привязан в личном кабинете системы. Начните с проверки корневых сертификатов и настроек АРМ.</p></details>
    </div>

    <p data-ctx="auto-ctx:udostoveryayushchiy-centr-kaznachejstva">Портал заявителя — это сервис того самого удостоверяющего центра, который выдаёт подпись получателям бюджетных средств. Что это за центр и кому он выдаёт сертификаты, разбираем в материале об <a href="/baza-znaniy/udostoveryayushchiy-centr-kaznachejstva/">удостоверяющем центре Федерального казначейства</a>.</p>
    <div class="takeaways">
      <h2>Что важно запомнить</h2>
      <ol>
        <li>ФЗС (fzs.roskazna.ru) — единая точка подачи документов на сертификат УЦ Федерального казначейства.</li>
        <li>Порядок закреплён Регламентом УЦ ФК (приказ от 15.06.2021 № 21н с изменениями 2025 года).</li>
        <li>Без ГОСТ-браузера, КриптоПро CSP и плагина портал не заработает — готовьте АРМ заранее.</li>
        <li>Первичный сертификат — один визит в ТОФК; замена при действующей подписи — полностью дистанционно.</li>
        <li>Изготовление — до 5 рабочих дней; подавайте на замену за 3–4 недели до истечения срока.</li>
        <li>Большинство возвратов — расхождения в данных и дефекты полномочий: проверяйте комплект по чек-листу.</li>
      </ol>
    </div>

    <div class="author">
      <div class="author__av">ЯМ</div>
      <div class="author__body">
        <div class="author__name">Ярослав Михайлов</div>
        <div class="author__role">Основатель и главный эксперт КазнаЭксперт</div>
        <p class="author__bio">15+ лет практики в сфере казначейского сопровождения государственных контрактов. За 5 лет личной практики Ярослав сопроводил более 7000 контрактов на 90 млрд ₽ по 44-ФЗ, 223-ФЗ и ГОЗ. Специализация — сложные случаи: гособоронзаказ, раздельный учёт, спасение контрактов после отказов казначейства.</p>
        <div class="author__meta"><a href="/komanda/mihailov-yaroslav/">Профиль эксперта →</a><span>Telegram: <a href="https://t.me/Kaznaexpert" target="_blank" rel="noopener">@Kaznaexpert</a></span></div>
      </div>
    </div>

    <div class="refs">
      <h2>Источники и нормативная база</h2>
      <ol>
        <li id="ref-1">Казначейство России — онлайн-сервис подачи документов для получения сертификатов (Портал заявителя ФЗС) — <a href="https://roskazna.gov.ru/gis/udostoveryayushchij-centr/onlajn-servis-podachi-dokumentov-dlya-polucheniya-sertifikatov-portal-zayavitelya" target="_blank" rel="noopener">roskazna.gov.ru</a></li>
        <li id="ref-2">Требования к автоматизированному рабочему месту для работы с ФЗС (Chromium-Gost, КриптоПро CSP, ЭЦП Browser plug-in) — памятки УЦ ФК на сайтах ТОФК, напр. <a href="https://mo.roskazna.gov.ru/gis/udostoveryayuschiy-centr/online-servis-podachi-dokumentov-dlya-polucheniya-sertifikatov" target="_blank" rel="noopener">mo.roskazna.gov.ru</a></li>
        <li id="ref-3">Федеральный закон от 06.04.2011 № 63-ФЗ «Об электронной подписи» — <a href="https://www.consultant.ru/document/cons_doc_LAW_112701/" target="_blank" rel="noopener">consultant.ru</a></li>
        <li id="ref-4">Приказ Казначейства России от 15.06.2021 № 21н «Об утверждении Регламента удостоверяющего центра Федерального казначейства»; порядок получения сертификата — <a href="https://roskazna.gov.ru/gis/udostoveryayushhij-centr/poluchenie-sertifikata/" target="_blank" rel="noopener">roskazna.gov.ru</a></li>
        <li id="ref-5">Федеральный закон от 21.04.2025 № 94-ФЗ; приказ Казначейства России от 25.08.2025 № 7н (изменения с 01.09.2025) — <a href="http://publication.pravo.gov.ru/" target="_blank" rel="noopener">pravo.gov.ru</a></li>
      </ol>
      <p class="refs__note">Сведения приведены по состоянию на 12 июня 2026 года. Технические требования к АРМ и формы документов уточняйте в актуальных памятках УЦ ФК и вашем ТОФК: версии ПО периодически обновляются.</p>
    </div>
  
    <div class="art-fb" id="artFb" style="margin:34px 0 6px;padding:18px 22px;background:var(--soft,#fbf8f1);border:1px solid var(--line,#e4ddd0);border-radius:14px;display:flex;align-items:center;gap:14px;flex-wrap:wrap">
      <span style="font-size:15px">Помогла ли статья?</span>
      <button type="button" data-fb="yes" style="font-family:inherit;font-size:14px;padding:8px 18px;border:1px solid var(--line,#e4ddd0);border-radius:100px;background:var(--card,#fffdf8);cursor:pointer;color:inherit">👍 Да</button>
      <button type="button" data-fb="no" style="font-family:inherit;font-size:14px;padding:8px 18px;border:1px solid var(--line,#e4ddd0);border-radius:100px;background:var(--card,#fffdf8);cursor:pointer;color:inherit">👎 Нет</button>
    </div>
    <script>(function(){var w=document.getElementById('artFb');if(!w)return;w.addEventListener('click',function(e){var b=e.target.closest('button[data-fb]');if(!b)return;try{window.ym&&ym(window.YM_ID||0,'reachGoal','article_feedback_'+b.dataset.fb);}catch(_){}w.innerHTML='<span style="font-size:15px">'+(b.dataset.fb==='yes'?'Спасибо! Рады, что пригодилось.':'Спасибо! Напишите в <a href="https://t.me/Kaznaexpert" target="_blank" rel="noopener" style="text-decoration:underline">Telegram</a>, чего не хватило — доработаем.')+'</span>';});})();</script>
  </article>

  <aside class="rail">
    <form class="railform" id="leadForm" novalidate data-endpoint="/php/lead.php" data-source="portal-zayavitelya-kaznachejstva">
      <div class="railform__badge">Разбор эксперта</div>
      <h3 class="railform__title">Запрос вернули из ФЗС?</h3>
      <p class="railform__sub">Подготовим комплект на сертификат УЦ ФК, настроим рабочее место и проведём запрос без возвратов — параллельно с открытием лицевого счёта.</p>
      <input class="fld" name="name" placeholder="Имя" required minlength="2" maxlength="80" autocomplete="name">
      <input class="fld" name="phone" type="tel" placeholder="+7 (___) ___-__-__" required autocomplete="tel" inputmode="tel">
      <input class="hp" name="company_extra" tabindex="-1" autocomplete="off" aria-hidden="true">
      <label class="policy"><input type="checkbox" name="consent" required><span>Согласен с <a href="/privacy/" target="_blank" rel="noopener">политикой обработки данных</a>. Не передаём третьим лицам.</span></label>
      <button class="submit" type="submit">Получить расчёт →</button>
      <div class="formmsg" id="formMsg" hidden></div>
      <div class="railform__trust">
        <span><b>15+ лет</b> в Казначействе · <b>7000+</b> контрактов за 5 лет</span>
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
    <a class="card reveal" href="/baza-znaniy/sertifikat-ecp-kaznachejstvo/"><div class="card__cover"><span>ЭЦП</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Сертификат и ЭЦП казначейства: как получить в 2026</h3><div class="card__meta">ЭЦП · 16 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/kak-prodlit-i-otozvat-ecp-kaznachejstva/"><div class="card__cover"><span>Продление</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Как продлить и отозвать ЭЦП казначейства</h3><div class="card__meta">ЭЦП · 13 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/kornevye-sertifikaty-kaznachejstva/"><div class="card__cover"><span>Корневые</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Корневые сертификаты УЦ казначейства: как установить</h3><div class="card__meta">ЭЦП · 12 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/licevoy-schet-71-kak-otkryt/"><div class="card__cover"><span>Счёт 71</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Как открыть лицевой счёт 71 в ТОФК</h3><div class="card__meta">Счета · 15 мин</div></div></a>
    <!-- auto-related:udostoveryayushchiy-centr-kaznachejstva --><a class="card reveal" href="/baza-znaniy/udostoveryayushchiy-centr-kaznachejstva/"><div class="card__cover"><span>УЦ ФК</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Удостоверяющий центр Федерального казначейства</h3><div class="card__meta">Сертификаты · 16 мин</div></div></a>
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

<section class="kz-sub" aria-labelledby="kzSubTitle" data-source="portal-zayavitelya-kaznachejstva">
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
            </nav>

            <nav class="v2-footer-col" aria-label="Мы в сети">
              <h3 class="v2-footer-h">Мы в сети</h3>
              <a href="https://t.me/Kazna_Expert" target="_blank" rel="noopener">Telegram-канал</a>
              <a href="https://dzen.ru/kazna_expert" target="_blank" rel="noopener">Дзен</a>
              <a href="https://www.klerk.ru/user/2692943/" target="_blank" rel="noopener">Клерк</a>
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
<script>/* mtr-tail-controller: прячем мини-навигатор на related/footer (scroll-based) */
(function(){var m=document.getElementById('mtr');if(!m)return;
var tail=document.querySelector('.related')||document.querySelector('.v2-footer');if(!tail)return;
function upd(){m.classList.toggle('mtr--tail', tail.getBoundingClientRect().top < window.innerHeight*0.65);}
var t;window.addEventListener('scroll',function(){if(t)return;t=setTimeout(function(){t=null;upd();},100);},{passive:true});
window.addEventListener('resize',upd,{passive:true});upd();})();</script>
</body>
</html>
