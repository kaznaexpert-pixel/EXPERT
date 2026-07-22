<?php header("Cache-Control: public, max-age=300, must-revalidate"); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ПОИБ/СОБИ Электронного бюджета: что это и как войти</title>
<meta name="description" content="ПОИБ/СОБИ Федерального казначейства: что это за подсистема ГИИС «Электронный бюджет», как назначаются полномочия и как войти в защищённый контур через Континент TLS.">
<meta name="author" content="Ярослав Михайлов">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1">
<meta name="theme-color" content="#F4F1EB" media="(prefers-color-scheme: light)">
<meta name="theme-color" content="#141310" media="(prefers-color-scheme: dark)">
<!-- PROD: canonical и og:url ОБЯЗАТЕЛЬНО менять под URL каждой статьи -->
<link rel="canonical" href="https://kaznaexpert.ru/baza-znaniy/poib-sobi-elektronnyy-byudzhet/">
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
{"@context": "https://schema.org", "@type": "Article", "headline": "ПОИБ/СОБИ ГИИС «Электронный бюджет»: что это и как войти в защищённый контур", "description": "ПОИБ/СОБИ Федерального казначейства: что это за подсистема ГИИС «Электронный бюджет», как назначаются полномочия и как войти в защищённый контур через Континент TLS.", "inLanguage": "ru-RU", "datePublished": "2026-06-24", "dateModified": "2026-06-24", "author": {"@type": "Person", "name": "Ярослав Михайлов", "jobTitle": "Главный эксперт по казначейскому сопровождению", "url": "https://kaznaexpert.ru/komanda/mihailov-yaroslav/", "@id": "https://kaznaexpert.ru/komanda/mihailov-yaroslav/#person"}, "publisher": {"@type": "Organization", "name": "КазнаЭксперт", "url": "https://kaznaexpert.ru", "logo": {"@type": "ImageObject", "url": "https://kaznaexpert.ru/img/logogold.png"}, "@id": "https://kaznaexpert.ru/#organization"}, "image": "https://kaznaexpert.ru/img/og-image.png", "mainEntityOfPage": {"@type": "WebPage", "@id": "https://kaznaexpert.ru/baza-znaniy/poib-sobi-elektronnyy-byudzhet/"}, "citation": ["Раздел «Система обеспечения безопасности информации» Федерального казначейства (roskazna.gov.ru): назначение ПОИБ/СОБИ, точки входа, требования.", "ПОИБ/СОБИ: памятки и инструкции (руководство пользователя, инструкция по регистрации) на сайте Федерального казначейства.", "Инструкции по настройке рабочего места для ГИИС «Электронный бюджет» (территориальные органы Федерального казначейства).", "Сообщения Федерального казначейства об обновлении сертификата сервера «Континент TLS VPN».", "Сообщение о переносе входа в компонент казначейского сопровождения на eb.cert.roskazna.ru.", "Федеральный закон от 06.04.2011 № 63-ФЗ «Об электронной подписи»."]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "Главная", "item": "https://kaznaexpert.ru/"}, {"@type": "ListItem", "position": 2, "name": "База знаний", "item": "https://kaznaexpert.ru/baza-znaniy/"}, {"@type": "ListItem", "position": 3, "name": "ПОИБ/СОБИ Электронного бюджета", "item": "https://kaznaexpert.ru/baza-znaniy/poib-sobi-elektronnyy-byudzhet/"}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [{"@type": "Question", "name": "Как расшифровываются ПОИБ и СОБИ?", "acceptedAnswer": {"@type": "Answer", "text": "СОБИ — Система обеспечения безопасности информации Федерального казначейства. ПОИБ — подсистема обеспечения информационной безопасности в её составе, через которую назначают полномочия пользователям «Электронного бюджета»."}}, {"@type": "Question", "name": "Что делает ПОИБ/СОБИ?", "acceptedAnswer": {"@type": "Answer", "text": "Это подсистема администрирования доступа: в ней заводят учётную запись пользователя и назначают ему роли в компонентах «Электронного бюджета». Заявки утверждает руководитель организации или регистратор."}}, {"@type": "Question", "name": "Где вход в ПОИБ/СОБИ?", "acceptedAnswer": {"@type": "Answer", "text": "На адресе sobi.cert.roskazna.ru. Он открывается только в защищённом контуре, то есть при запущенном и настроенном клиенте Континент TLS."}}, {"@type": "Question", "name": "Чем вход в защищённый контур отличается от обычного?", "acceptedAnswer": {"@type": "Answer", "text": "Адреса *.cert.roskazna.ru недоступны из браузера напрямую — сначала нужно поднять защищённый канал через Континент TLS. На публичный портал budget.gov.ru этот клиент не требуется."}}, {"@type": "Question", "name": "Что нужно установить на компьютер?", "acceptedAnswer": {"@type": "Answer", "text": "Клиент Континент TLS, КриптоПро CSP, плагин для браузера, ГОСТ-браузер и цепочку сертификатов удостоверяющего центра. Нужен и действующий сертификат казначейства."}}, {"@type": "Question", "name": "Можно ли войти через Госуслуги?", "acceptedAnswer": {"@type": "Answer", "text": "Да, вход в ПОИБ/СОБИ возможен по учётной записи Госуслуг или по квалифицированному сертификату казначейства. Защищённый канал через Континент TLS нужен в обоих случаях."}}, {"@type": "Question", "name": "Почему я вошёл, но не вижу нужных разделов?", "acceptedAnswer": {"@type": "Answer", "text": "Скорее всего, в ПОИБ/СОБИ вам не назначены полномочия или заявку не утвердил руководитель. Подайте заявку на роли и дождитесь её утверждения."}}, {"@type": "Question", "name": "Адрес контура перестал открываться — что делать?", "acceptedAnswer": {"@type": "Answer", "text": "Чаще всего сменился сертификат сервера «Континент TLS VPN». Обновите настройки клиента на актуальный сертификат — после этого доступ восстановится."}}, {"@type": "Question", "name": "Нужен ли отдельный сертификат каждому сотруднику?", "acceptedAnswer": {"@type": "Answer", "text": "Да. Электронная подпись персональна, поэтому каждому сотруднику, который работает в «Электронном бюджете», нужен свой квалифицированный сертификат казначейства. Работать всем под одним сертификатом руководителя неудобно и небезопасно."}}, {"@type": "Question", "name": "Как закрыть доступ уволенному сотруднику?", "acceptedAnswer": {"@type": "Answer", "text": "Через ПОИБ/СОБИ: руководитель организации или регистратор блокирует учётную запись и снимает полномочия. Это нужно делать сразу при увольнении, чтобы доступ к лицевому счёту не оставался у бывшего работника."}}, {"@type": "Question", "name": "Подойдёт ли для входа коммерческий сертификат?", "acceptedAnswer": {"@type": "Answer", "text": "Нет. Для защищённого контура нужен квалифицированный сертификат, выданный Удостоверяющим центром Казначейства. Коммерческий сертификат для обычных площадок здесь не подходит."}}, {"@type": "Question", "name": "Сколько времени занимает получение доступа?", "acceptedAnswer": {"@type": "Answer", "text": "Основное время уходит не на саму регистрацию в подсистеме, а на подготовку: выпуск сертификата в удостоверяющем центре и настройку рабочего места. Если сертификат и настроенный компьютер уже есть, регистрация пользователя и назначение полномочий проходят быстро — задержка обычно на стороне утверждения заявки руководителем."}}, {"@type": "Question", "name": "Можно ли подключиться удалённо, без визита в казначейство?", "acceptedAnswer": {"@type": "Answer", "text": "Получение сертификата требует подачи документов в удостоверяющий центр в установленном порядке, а вся последующая настройка и работа ведутся удалённо с рабочего места. Личное присутствие при самой работе в подсистеме не требуется."}}, {"@type": "Question", "name": "ПОИБ/СОБИ и СУФД — это одно и то же?", "acceptedAnswer": {"@type": "Answer", "text": "Нет. СУФД — это портал для работы с документами казначейства, а ПОИБ/СОБИ — подсистема управления доступом и полномочиями. Это разные компоненты, хотя оба относятся к инфраструктуре Федерального казначейства и требуют сертификата казначейства."}}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "HowTo", "name": "Как получить доступ и войти в ПОИБ/СОБИ Казначейства", "inLanguage": "ru-RU", "step": [{"@type": "HowToStep", "position": 1, "name": "Получить сертификат", "text": "Оформите в Удостоверяющем центре Казначейства квалифицированный сертификат электронной подписи на сотрудника."}, {"@type": "HowToStep", "position": 2, "name": "Настроить рабочее место", "text": "Установите КриптоПро CSP, плагин для браузера, ГОСТ-браузер и цепочку сертификатов удостоверяющего центра."}, {"@type": "HowToStep", "position": 3, "name": "Поднять защищённый канал", "text": "Установите и настройте клиент «Континент TLS» на актуальный сертификат сервера, чтобы открывались адреса *.cert.roskazna.ru."}, {"@type": "HowToStep", "position": 4, "name": "Зарегистрироваться в ПОИБ/СОБИ", "text": "Войдите на sobi.cert.roskazna.ru, зарегистрируйте пользователя и подайте заявку на нужные полномочия."}, {"@type": "HowToStep", "position": 5, "name": "Утвердить полномочия", "text": "Дождитесь, пока руководитель организации или регистратор утвердит заявку на полномочия."}, {"@type": "HowToStep", "position": 6, "name": "Войти в «Электронный бюджет»", "text": "После назначения ролей войдите на eb.cert.roskazna.ru в нужный модуль, для сопровождения — в компонент казначейского сопровождения."}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "DefinedTermSet", "name": "Термины: ПОИБ, СОБИ и защищённый контур", "inLanguage": "ru-RU", "hasDefinedTerm": [{"@type": "DefinedTerm", "name": "СОБИ", "description": "Система обеспечения безопасности информации Федерального казначейства."}, {"@type": "DefinedTerm", "name": "ПОИБ", "description": "Подсистема обеспечения информационной безопасности в составе СОБИ; через неё назначают полномочия пользователям (термин по терминологии Федерального казначейства)."}, {"@type": "DefinedTerm", "name": "Защищённый контур", "description": "Сегмент сети казначейства с адресами *.cert.roskazna.ru, доступный только через защищённый канал."}, {"@type": "DefinedTerm", "name": "Континент TLS", "description": "VPN-клиент, который поднимает защищённый канал к контуру казначейства."}, {"@type": "DefinedTerm", "name": "Регистратор", "description": "Сотрудник организации, которому руководитель поручил утверждать заявки на полномочия в ПОИБ/СОБИ."}, {"@type": "DefinedTerm", "name": "Полномочия (роли)", "description": "Права пользователя на работу в конкретных компонентах и модулях «Электронного бюджета»."}]}
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
<meta property="og:title" content="ПОИБ/СОБИ ГИИС «Электронный бюджет»: что это и как войти">
<meta property="og:description" content="Что такое ПОИБ/СОБИ Казначейства, как назначают полномочия и как войти в защищённый контур (sobi.cert.roskazna.ru, Континент TLS).">
<meta property="og:url" content="https://kaznaexpert.ru/baza-znaniy/poib-sobi-elektronnyy-byudzhet/">
<meta property="og:image" content="https://kaznaexpert.ru/img/og-image.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="ПОИБ/СОБИ ГИИС «Электронный бюджет»: что это и как войти — КазнаЭксперт">
<meta property="article:published_time" content="2026-06-24T09:00:00+03:00">
<meta property="article:modified_time" content="2026-06-24T09:00:00+03:00">
<meta property="article:author" content="https://kaznaexpert.ru/komanda/mihailov-yaroslav/">
<meta property="article:section" content="База знаний">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="ПОИБ/СОБИ ГИИС «Электронный бюджет»: что это и как войти">
<meta name="twitter:description" content="Что такое ПОИБ/СОБИ Казначейства, как назначают полномочия и как войти в защищённый контур (sobi.cert.roskazna.ru, Континент TLS).">
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
  <nav class="crumbs" aria-label="Хлебные крошки"><a href="/">Главная</a> › <a href="/baza-znaniy/">База знаний</a> › ПОИБ/СОБИ Электронного бюджета</nav>

  <aside class="toc" aria-label="Содержание">
    <div class="toc__label">Содержание</div>
    <ul class="toc__list" id="tocList">
      <li><a href="#chto">Что такое ПОИБ и СОБИ</a></li>
      <li><a href="#rol">Зачем нужна подсистема: управление полномочиями</a></li>
      <li><a href="#kontur">Защищённый контур: чем отличается вход</a></li>
      <li><a href="#vs-portal">ПОИБ/СОБИ и публичный портал budget.gov.ru</a></li>
      <li><a href="#po">Что нужно установить на рабочее место</a></li>
      <li><a href="#podgotovka">Что подготовить до подключения</a></li>
      <li><a href="#dostup">Как получить доступ и назначить полномочия</a></li>
      <li><a href="#roli">Какие полномочия нужны исполнителю контракта</a></li>
      <li><a href="#vhod">Точки входа и роль сертификата</a></li>
      <li><a href="#diagnostika">Как локализовать проблему входа</a></li>
      <li><a href="#oshibki">Типичные ошибки входа</a></li>
      <li><a href="#glossary">Глоссарий</a></li>
      <li><a href="#faq">Частые вопросы</a></li>
    </ul>
  </aside>

  <article class="content" id="main">
    <div class="hero">
      <img class="hero__crest hero__crest--light" src="/img/logogold-crest.webp" alt="" aria-hidden="true" width="188" height="137" decoding="async" loading="lazy">
      <img class="hero__crest hero__crest--dark" src="/img/LogoWhite.png" alt="" aria-hidden="true" width="188" height="137" decoding="async" loading="lazy">
      <div class="eyebrow">База знаний · ГИИС и ЭЦП <span class="fresh">Актуально на 2026</span></div>
    <h1>ПОИБ/СОБИ ГИИС «Электронный бюджет»: что это и как войти в защищённый контур</h1>
    <div class="byline"><span class="av">ЯМ</span><span>Автор: <a href="/komanda/mihailov-yaroslav/">Ярослав Михайлов</a>, главный эксперт</span><span class="dot">·</span><span>15+ лет в Казначействе</span><span class="dot">·</span><span>12 мин чтения</span><span class="dot">·</span><span>Обновлено 24 июня 2026</span></div>
    </div>

    <div class="share">
      <span class="share__label">Поделиться:</span>
      <a href="https://t.me/share/url?url=https%3A%2F%2Fkaznaexpert.ru%2Fbaza-znaniy%2Fpoib-sobi-elektronnyy-byudzhet%2F&amp;text=%D0%9F%D0%9E%D0%98%D0%91/%D0%A1%D0%9E%D0%91%D0%98%20%D0%93%D0%98%D0%98%D0%A1%20%C2%AB%D0%AD%D0%BB%D0%B5%D0%BA%D1%82%D1%80%D0%BE%D0%BD%D0%BD%D1%8B%D0%B9%20%D0%B1%D1%8E%D0%B4%D0%B6%D0%B5%D1%82%C2%BB%3A%20%D1%87%D1%82%D0%BE%20%D1%8D%D1%82%D0%BE%20%D0%B8%20%D0%BA%D0%B0%D0%BA%20%D0%B2%D0%BE%D0%B9%D1%82%D0%B8%20%D0%B2%20%D0%B7%D0%B0%D1%89%D0%B8%D1%89%D1%91%D0%BD%D0%BD%D1%8B%D0%B9%20%D0%BA%D0%BE%D0%BD%D1%82%D1%83%D1%80" target="_blank" rel="noopener"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.56 8.25l-1.86 8.76c-.14.62-.5.77-1.02.48l-2.82-2.08-1.36 1.31c-.15.15-.28.28-.57.28l.2-2.89 5.27-4.76c.23-.2-.05-.32-.35-.12l-6.51 4.1-2.8-.88c-.61-.19-.62-.61.13-.9l10.95-4.22c.5-.18.95.12.79.85z"/></svg>Telegram</a>
      <button type="button" id="copyLink"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.07 0l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.07 0l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg><span>Копировать ссылку</span></button>
      <button type="button" id="printBtn"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9V2h12v7M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2M6 14h12v8H6z"/></svg>Скачать PDF</button>
    </div>

    <details class="mtoc"><summary>Содержание статьи</summary>
      <ol>
        <li><a href="#chto">Что такое ПОИБ и СОБИ</a></li><li><a href="#rol">Зачем нужна подсистема: управление полномочиями</a></li><li><a href="#kontur">Защищённый контур: чем отличается вход</a></li><li><a href="#vs-portal">ПОИБ/СОБИ и публичный портал budget.gov.ru</a></li><li><a href="#po">Что нужно установить на рабочее место</a></li><li><a href="#podgotovka">Что подготовить до подключения</a></li><li><a href="#dostup">Как получить доступ и назначить полномочия</a></li><li><a href="#roli">Какие полномочия нужны исполнителю контракта</a></li><li><a href="#vhod">Точки входа и роль сертификата</a></li><li><a href="#diagnostika">Как локализовать проблему входа</a></li><li><a href="#oshibki">Типичные ошибки входа</a></li><li><a href="#glossary">Глоссарий</a></li><li><a href="#faq">Частые вопросы</a></li>
      </ol>
    </details>

    <div class="tldr">СОБИ — это Система обеспечения безопасности информации Федерального казначейства, а ПОИБ — её подсистема, через которую пользователям назначают полномочия в ГИИС «Электронный бюджет». Вход — на sobi.cert.roskazna.ru, по сертификату казначейства или через Госуслуги. Сам адрес открывается только в защищённом контуре через клиент Континент TLS. Заявки на полномочия утверждает руководитель организации или регистратор.</div>

    <section class="keyfacts grain" aria-label="Ключевые факты">
      <h2>Коротко о главном</h2>
      <div class="keyfacts__grid">
        <div class="kf"><div class="kf__n">СОБИ</div><div class="kf__t"><b>Что это</b> — Система обеспечения безопасности информации Федерального казначейства</div></div>
        <div class="kf"><div class="kf__n">ПОИБ</div><div class="kf__t"><b>Что это</b> — подсистема обеспечения информационной безопасности — администрирование доступа и полномочий пользователей</div></div>
        <div class="kf"><div class="kf__n">Континент TLS</div><div class="kf__t"><b>Защищённый контур</b> — вход в сегмент *.cert.roskazna.ru возможен только через VPN-клиент Континент TLS</div></div>
        <div class="kf"><div class="kf__n">УЦ ФК</div><div class="kf__t"><b>Условие входа</b> — нужен действующий квалифицированный сертификат Удостоверяющего центра Казначейства</div></div>
      </div>
    </section>

    <h2 id="chto">Что такое ПОИБ и СОБИ</h2>
    <p class="lead-p">За аббревиатурами, которые встречаются при подключении к «Электронному бюджету», стоит инфраструктура информационной безопасности Федерального казначейства.</p>
    <ul>
      <li><b>СОБИ</b> — Система обеспечения безопасности информации Федерального казначейства. Это название системы и одноимённого раздела на сайте roskazna.gov.ru.</li>
      <li><b>ПОИБ</b> — подсистема обеспечения информационной безопасности в составе СОБИ (термин приводится по терминологии Федерального казначейства). Именно через неё пользователи получают и меняют полномочия для работы в подсистемах ГИИС «Электронный бюджет».</li>
    </ul>
    <p>В обиходе их называют слитно — «ПОИБ СОБИ» или «ПОИБ СОБИ казначейства». Практически это портал, на котором заводят учётную запись пользователя и выдают ему роли: без оформленных в ПОИБ полномочий войти в нужный модуль «Электронного бюджета» не получится, даже если у сотрудника есть рабочий сертификат.</p>

    <h2 id="rol">Зачем нужна подсистема: управление полномочиями</h2>
    <p>ПОИБ/СОБИ — это не канал связи и не «ещё один личный кабинет», а подсистема администрирования доступа. Её задача — связать сотрудника организации с конкретными ролями в компонентах «Электронного бюджета»: например, в компоненте казначейского сопровождения, в учёте и отчётности, в работе с лицевым счётом.</p>
    <p>Заявки на добавление пользователя, изменение его данных или набора полномочий подаются в подсистеме, а утверждает или отклоняет их руководитель организации либо назначенный им регистратор. Такая схема обеспечивает контроль: новые полномочия не появляются сами по себе, их санкционирует ответственное лицо организации.</p>
    <p>Для исполнителя по контракту это означает простую вещь: прежде чем работать в «Электронном бюджете», нужно, чтобы в ПОИБ/СОБИ была заведена учётная запись и назначены роли под конкретные задачи. Это отдельный шаг, который часто упускают и потом не понимают, почему «сертификат есть, а доступа нет».</p>
    <p>Стоит запомнить логику разделения: сертификат отвечает за то, «кто вы», а полномочия в подсистеме — за то, «что вам можно делать». Эти два уровня независимы. Можно иметь идеально настроенный сертификат и рабочий защищённый канал, но не видеть ни одного нужного раздела, потому что роли ещё не выданы. И наоборот — полномочия, назначенные на сотрудника, не сработают без действующего сертификата и поднятого канала. Поэтому при подключении удобно держать в голове три независимых слоя: сертификат, канал и полномочия — и проверять их по отдельности.</p>

    <h2 id="kontur">Защищённый контур: чем отличается вход</h2>
    <p>Подсистемы казначейства работают в защищённом сегменте сети с адресами вида <code>*.cert.roskazna.ru</code>. Это и есть «защищённый контур». Отличие от обычного входа в том, что попасть на такие адреса напрямую из браузера нельзя — сначала нужно поднять защищённый канал.</p>
    <p>Защищённый канал обеспечивает специальный VPN-клиент «Континент TLS». Пока он запущен и настроен на актуальный сертификат сервера, адреса контура открываются; как только сертификат сервера меняется, доступ пропадает до обновления настроек клиента. Поэтому периодические сообщения казначейства о смене сертификата «Континент TLS VPN» — типовая причина того, что «вчера работало, сегодня не открывается».</p>
    <p>Компонент казначейского сопровождения тоже живёт в этом контуре: с 2022 года вход в него выполняется по адресу <code>eb.cert.roskazna.ru</code>, а прежний адрес был закрыт. Поэтому работа исполнителя по сопровождаемому контракту почти всегда проходит именно через защищённый контур, а не через публичный портал budget.gov.ru.</p>

    <h2 id="vs-portal">ПОИБ/СОБИ и публичный портал budget.gov.ru</h2>
    <p>У «Электронного бюджета» есть две точки соприкосновения с пользователем, и их часто смешивают. Публичный портал budget.gov.ru — это открытая витрина с данными о бюджете, реестрами и общедоступными сервисами; на неё заходят из обычного браузера без специального клиента. Защищённый контур на поддоменах cert.roskazna.ru — это рабочая среда, где ведутся операции, и попасть в неё можно только через ПОИБ/СОБИ и клиент Континент TLS.</p>
    <table>
      <thead><tr><th>Признак</th><th>Публичный портал</th><th>Защищённый контур</th></tr></thead>
      <tbody>
        <tr><td>Адрес</td><td>budget.gov.ru</td><td>*.cert.roskazna.ru</td></tr>
        <tr><td>Нужен Континент TLS</td><td>Нет</td><td>Да</td></tr>
        <tr><td>Что делают</td><td>Смотрят открытые данные</td><td>Ведут операции, проводят платежи</td></tr>
        <tr><td>Нужны полномочия в ПОИБ/СОБИ</td><td>Нет</td><td>Да</td></tr>
      </tbody>
    </table>
    <p>Для исполнителя по сопровождаемому контракту рабочая среда — именно защищённый контур: компонент казначейского сопровождения с 2022 года живёт по адресу eb.cert.roskazna.ru. Поэтому, когда речь идёт о реальной работе с лицевым счётом и санкционированием, путь всегда лежит через ПОИБ/СОБИ, а не через публичный портал.</p>

    <h2 id="po">Что нужно установить на рабочее место</h2>
    <p>Набор программ для защищённого контура стандартный для инфраструктуры казначейства. Конкретные версии со временем обновляются, поэтому ориентируйтесь на актуальные инструкции на roskazna.gov.ru.</p>
    <table>
      <thead><tr><th>Компонент</th><th>Назначение</th></tr></thead>
      <tbody>
        <tr><td>Континент TLS VPN-Клиент</td><td>Поднимает защищённый канал к сегменту *.cert.roskazna.ru</td></tr>
        <tr><td>КриптоПро CSP</td><td>Криптопровайдер для работы с электронной подписью по ГОСТ</td></tr>
        <tr><td>КриптоПро ЭЦП Browser plug-in</td><td>Плагин для подписания в браузере</td></tr>
        <tr><td>Браузер с поддержкой ГОСТ</td><td>Браузер Chromium ГОСТ или Яндекс.Браузер для работы с защищёнными адресами</td></tr>
        <tr><td>Корневые и промежуточные сертификаты</td><td>Цепочка доверия удостоверяющего центра казначейства</td></tr>
      </tbody>
    </table>
    <p>Поддерживаются Windows 7 SP1 и выше, а также отечественные операционные системы — Astra Linux, Альт, РЕД ОС, GosLinux и другие. Линейка отечественных систем расширяется в рамках импортозамещения, поэтому перед настройкой стоит свериться с актуальным перечнем совместимых ОС в инструкциях казначейства. Отдельно понадобится действующий квалифицированный сертификат, выданный Удостоверяющим центром Казначейства, и при необходимости лицензия КриптоПро.</p>
    <p>Версии программ со временем меняются: и Континент TLS, и КриптоПро регулярно выпускают обновления, а казначейство меняет требования к минимальным сборкам. Конкретные номера версий из старых инструкций брать опасно — они устаревают. Правильный подход: открыть актуальную страницу настройки рабочего места на сайте казначейства и установить те версии, которые указаны там на текущую дату. Это избавляет от типичной ситуации, когда всё установлено «по инструкции из интернета», а контур всё равно не открывается из-за несовместимой версии клиента.</p>

    <h2 id="podgotovka">Что подготовить до подключения</h2>
    <p>Большая часть задержек при первом подключении возникает не в самой подсистеме, а из-за того, что заранее не собраны базовые вещи. Подготовка экономит дни.</p>
    <ul>
      <li><b>Носитель и ключ.</b> Защищённый носитель (токен) для ключа электронной подписи — его выпускают вместе с сертификатом.</li>
      <li><b>Сертификат казначейства.</b> Действующий квалифицированный сертификат на конкретного сотрудника, оформленный в Удостоверяющем центре Казначейства.</li>
      <li><b>Лицензия КриптоПро.</b> При необходимости — лицензия на криптопровайдер.</li>
      <li><b>Назначенный регистратор.</b> Сотрудник, который будет утверждать заявки на полномочия, и приказ, закрепляющий его роль.</li>
      <li><b>Рабочее место.</b> Компьютер с поддерживаемой операционной системой и правами на установку программ.</li>
    </ul>
    <p>Отдельно стоит заранее решить, кто из сотрудников какие операции выполняет, — это определит набор полномочий, который вы запросите. Если оставить этот вопрос «на потом», доступ придётся донастраивать уже в процессе исполнения контракта, а это лишние итерации с заявками и согласованиями.</p>

    <h2 id="dostup">Как получить доступ и назначить полномочия</h2>
    <p>Порядок получения доступа удобно держать как последовательность шагов — пропуск любого из них приводит к тому, что вход не работает.</p>
    <ol>
      <li>Получить в Удостоверяющем центре Казначейства квалифицированный сертификат на сотрудника.</li>
      <li>Настроить рабочее место: операционная система из перечня, КриптоПро CSP, плагин для браузера, ГОСТ-браузер, корневые и промежуточные сертификаты, клиент Континент TLS на актуальный сертификат сервера.</li>
      <li>Зарегистрировать пользователя и подать заявку на полномочия в ПОИБ/СОБИ; заявку утверждает руководитель организации или регистратор.</li>
      <li>После назначения ролей войти в нужный модуль «Электронного бюджета», для казначейского сопровождения — в соответствующий компонент.</li>
    </ol>
    <p>У Федерального казначейства есть официальные руководство и инструкция по регистрации пользователей ПОИБ/СОБИ — их стоит держать под рукой при первом подключении.</p>

    <h2 id="roli">Какие полномочия нужны исполнителю контракта</h2>
    <p>Полномочия в «Электронном бюджете» выдаются точечно, под конкретные задачи. Исполнителю по сопровождаемому контракту обычно требуется набор ролей вокруг работы с лицевым счётом и санкционированием — формирование и подписание распоряжений, просмотр выписок, работа со сведениями об операциях. Точный перечень зависит от того, кто в организации какие действия выполняет.</p>
    <p>Здесь важно правильно распределить роли между сотрудниками. Как правило, разделяют того, кто готовит документы, и того, кто их подписывает усиленной подписью, — это и требование безопасности, и удобство. Руководитель организации либо назначенный регистратор управляет этим распределением через заявки в ПОИБ/СОБИ: добавляет сотрудников, выдаёт и снимает полномочия, блокирует доступ уволенных.</p>
    <p>Типичная ошибка на старте — оформить сертификат только на руководителя и пытаться вести всю операционную работу под ним. Это неудобно и небезопасно. Правильнее сразу определить, кому какие роли нужны, и завести их в подсистеме, чтобы не возвращаться к настройке доступа в разгар исполнения контракта.</p>

    <h2 id="vhod">Точки входа и роль сертификата</h2>
    <p>Входы в защищённый контур построены на поддоменах <code>cert.roskazna.ru</code>.</p>
    <table>
      <thead><tr><th>Адрес</th><th>Назначение</th></tr></thead>
      <tbody>
        <tr><td>sobi.cert.roskazna.ru</td><td>Вход в ПОИБ/СОБИ — управление учётной записью и полномочиями</td></tr>
        <tr><td>eb.cert.roskazna.ru</td><td>Вход в ГИИС «Электронный бюджет» в защищённом контуре, включая компонент казначейского сопровождения</td></tr>
      </tbody>
    </table>
    <p>Войти в ПОИБ/СОБИ можно по электронной подписи (квалифицированный сертификат казначейства) или по учётной записи Госуслуг. Но в любом случае адрес откроется, только когда поднят защищённый канал через Континент TLS. Сертификат при этом играет двойную роль: он и идентифицирует пользователя при входе, и используется для подписания операций внутри системы.</p>

    <h2 id="diagnostika">Как локализовать проблему входа</h2>
    <p>Когда вход не работает, помогает не гадать, а пройти цепочку «снизу вверх» — от канала к полномочиям. Каждый уровень проверяется отдельно.</p>
    <ol>
      <li><b>Канал.</b> Запущен ли клиент Континент TLS и открывается ли вообще адрес контура? Если адрес не грузится — проблема в канале или в сертификате сервера, до сертификатов и полномочий дело ещё не дошло.</li>
      <li><b>Криптография.</b> Если адрес открывается, но не появляется окно выбора сертификата или браузер ругается на подпись — проверяют КриптоПро, плагин и ГОСТ-браузер.</li>
      <li><b>Цепочка сертификатов.</b> Ошибка про доверие или корневой сертификат означает, что не установлены корневой или подчинённый сертификаты центра.</li>
      <li><b>Сам сертификат.</b> Если система не принимает подпись — проверяют, не истёк ли и не отозван ли сертификат пользователя.</li>
      <li><b>Полномочия.</b> Если вход выполнен, но нужных разделов нет — дело в полномочиях: их либо не назначили в подсистеме, либо заявку не утвердили.</li>
    </ol>
    <p>Такой порядок экономит время: бессмысленно переустанавливать сертификаты, если не поднят защищённый канал, и бессмысленно искать ошибку в канале, если на самом деле просто не выданы роли. По сложным случаям подключения работает единый контактный центр Федерального казначейства — туда имеет смысл обращаться, когда первые четыре уровня проверены, а проблема осталась.</p>

    <h2 id="oshibki">Типичные ошибки входа</h2>
    <table>
      <thead><tr><th>Симптом</th><th>Причина</th><th>Что сделать</th></tr></thead>
      <tbody>
        <tr><td>Адрес sobi/eb.cert.roskazna.ru не открывается</td><td>Не запущен или не настроен клиент Континент TLS, либо устарел сертификат сервера</td><td>Запустить клиент, обновить настройки на актуальный сертификат сервера «Континент TLS VPN»</td></tr>
        <tr><td>«Доступ запрещён, не найден корневой сертификат»</td><td>Не установлены корневой и промежуточный сертификаты удостоверяющего центра</td><td>Установить цепочку сертификатов казначейства в нужные хранилища</td></tr>
        <tr><td>Не появляется окно выбора сертификата</td><td>Проблема с КриптоПро, плагином или ГОСТ-браузером</td><td>Проверить установку КриптоПро CSP, плагина и совместимого браузера</td></tr>
        <tr><td>Вход выполнен, но нет нужных разделов</td><td>В ПОИБ/СОБИ не назначены полномочия</td><td>Подать заявку на полномочия, дождаться утверждения руководителем или регистратором</td></tr>
        <tr><td>Сертификат не принимается</td><td>Сертификат просрочен или отозван</td><td>Перевыпустить сертификат в удостоверяющем центре казначейства</td></tr>
      </tbody>
    </table>
    <p class="note">На практике встречается типовая ситуация: у нового сотрудника есть сертификат и настроен Континент TLS, но в системе он «ничего не видит». Причина — в ПОИБ/СОБИ ему не назначили полномочия, либо заявку не утвердил руководитель. Это обобщённый пример: доступ в «Электронный бюджет» — это всегда связка «сертификат + защищённый канал + полномочия», и недостающее звено блокирует работу целиком. По вопросам подключения работает единый контактный центр Федерального казначейства.</p>

    <h2 id="glossary">Глоссарий</h2>
    <dl class="gloss">
      <div><dt>СОБИ</dt><dd>Система обеспечения безопасности информации Федерального казначейства.</dd></div>
      <div><dt>ПОИБ</dt><dd>Подсистема обеспечения информационной безопасности в составе СОБИ; через неё назначают полномочия пользователям (термин по терминологии Федерального казначейства).</dd></div>
      <div><dt>Защищённый контур</dt><dd>Сегмент сети казначейства с адресами *.cert.roskazna.ru, доступный только через защищённый канал.</dd></div>
      <div><dt>Континент TLS</dt><dd>VPN-клиент, который поднимает защищённый канал к контуру казначейства.</dd></div>
      <div><dt>Регистратор</dt><dd>Сотрудник организации, которому руководитель поручил утверждать заявки на полномочия в ПОИБ/СОБИ.</dd></div>
      <div><dt>Полномочия (роли)</dt><dd>Права пользователя на работу в конкретных компонентах и модулях «Электронного бюджета».</dd></div>
    </dl>

    <h2 id="faq">Частые вопросы</h2>
    <div class="faq">
      <details open><summary>Как расшифровываются ПОИБ и СОБИ?</summary><p>СОБИ — Система обеспечения безопасности информации Федерального казначейства. ПОИБ — подсистема обеспечения информационной безопасности в её составе, через которую назначают полномочия пользователям «Электронного бюджета».</p></details>
      <details><summary>Что делает ПОИБ/СОБИ?</summary><p>Это подсистема администрирования доступа: в ней заводят учётную запись пользователя и назначают ему роли в компонентах «Электронного бюджета». Заявки утверждает руководитель организации или регистратор.</p></details>
      <details><summary>Где вход в ПОИБ/СОБИ?</summary><p>На адресе sobi.cert.roskazna.ru. Он открывается только в защищённом контуре, то есть при запущенном и настроенном клиенте Континент TLS.</p></details>
      <details><summary>Чем вход в защищённый контур отличается от обычного?</summary><p>Адреса *.cert.roskazna.ru недоступны из браузера напрямую — сначала нужно поднять защищённый канал через Континент TLS. На публичный портал budget.gov.ru этот клиент не требуется.</p></details>
      <details><summary>Что нужно установить на компьютер?</summary><p>Клиент Континент TLS, КриптоПро CSP, плагин для браузера, ГОСТ-браузер и цепочку сертификатов удостоверяющего центра. Нужен и действующий сертификат казначейства.</p></details>
      <details><summary>Можно ли войти через Госуслуги?</summary><p>Да, вход в ПОИБ/СОБИ возможен по учётной записи Госуслуг или по квалифицированному сертификату казначейства. Защищённый канал через Континент TLS нужен в обоих случаях.</p></details>
      <details><summary>Почему я вошёл, но не вижу нужных разделов?</summary><p>Скорее всего, в ПОИБ/СОБИ вам не назначены полномочия или заявку не утвердил руководитель. Подайте заявку на роли и дождитесь её утверждения.</p></details>
      <details><summary>Адрес контура перестал открываться — что делать?</summary><p>Чаще всего сменился сертификат сервера «Континент TLS VPN». Обновите настройки клиента на актуальный сертификат — после этого доступ восстановится.</p></details>
      <details><summary>Нужен ли отдельный сертификат каждому сотруднику?</summary><p>Да. Электронная подпись персональна, поэтому каждому сотруднику, который работает в «Электронном бюджете», нужен свой квалифицированный сертификат казначейства. Работать всем под одним сертификатом руководителя неудобно и небезопасно.</p></details>
      <details><summary>Как закрыть доступ уволенному сотруднику?</summary><p>Через ПОИБ/СОБИ: руководитель организации или регистратор блокирует учётную запись и снимает полномочия. Это нужно делать сразу при увольнении, чтобы доступ к лицевому счёту не оставался у бывшего работника.</p></details>
      <details><summary>Подойдёт ли для входа коммерческий сертификат?</summary><p>Нет. Для защищённого контура нужен квалифицированный сертификат, выданный Удостоверяющим центром Казначейства. Коммерческий сертификат для обычных площадок здесь не подходит.</p></details>
      <details><summary>Сколько времени занимает получение доступа?</summary><p>Основное время уходит не на саму регистрацию в подсистеме, а на подготовку: выпуск сертификата в удостоверяющем центре и настройку рабочего места. Если сертификат и настроенный компьютер уже есть, регистрация пользователя и назначение полномочий проходят быстро — задержка обычно на стороне утверждения заявки руководителем.</p></details>
      <details><summary>Можно ли подключиться удалённо, без визита в казначейство?</summary><p>Получение сертификата требует подачи документов в удостоверяющий центр в установленном порядке, а вся последующая настройка и работа ведутся удалённо с рабочего места. Личное присутствие при самой работе в подсистеме не требуется.</p></details>
      <details><summary>ПОИБ/СОБИ и СУФД — это одно и то же?</summary><p>Нет. СУФД — это портал для работы с документами казначейства, а ПОИБ/СОБИ — подсистема управления доступом и полномочиями. Это разные компоненты, хотя оба относятся к инфраструктуре Федерального казначейства и требуют сертификата казначейства.</p></details>
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
        <li id="ref-1">Раздел «Система обеспечения безопасности информации» Федерального казначейства (roskazna.gov.ru): назначение ПОИБ/СОБИ, точки входа, требования.</li>
        <li id="ref-2">ПОИБ/СОБИ: памятки и инструкции (руководство пользователя, инструкция по регистрации) на сайте Федерального казначейства.</li>
        <li id="ref-3">Инструкции по настройке рабочего места для ГИИС «Электронный бюджет» (территориальные органы Федерального казначейства).</li>
        <li id="ref-4">Сообщения Федерального казначейства об обновлении сертификата сервера «Континент TLS VPN».</li>
        <li id="ref-5">Сообщение о переносе входа в компонент казначейского сопровождения на eb.cert.roskazna.ru.</li>
        <li id="ref-6">Федеральный закон от 06.04.2011 № 63-ФЗ «Об электронной подписи».</li>
      </ol>
      <p class="refs__note">Сведения приведены по состоянию на 24 июня 2026 года. Актуальные адреса входа, версии программного обеспечения и инструкции смотрите на официальном сайте Федерального казначейства roskazna.gov.ru.</p>
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
    <form class="railform" id="leadForm" novalidate data-endpoint="/php/lead.php" data-source="poib-sobi-elektronnyy-byudzhet">
      <div class="railform__badge">Разбор эксперта</div>
      <h3 class="railform__title">Настроим доступ под ключ</h3>
      <p class="railform__sub">Подключим к «Электронному бюджету»: сертификат казначейства, Континент TLS, полномочия в ПОИБ/СОБИ. Удалённо, по всей России.</p>
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
    <a class="card reveal" href="/baza-znaniy/elektronnyy-byudzhet-dlya-ispolnitelya-kontrakta/"><div class="card__cover"><span>ЭБ</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">ГИИС «Электронный бюджет» для исполнителя контракта</h3><div class="card__meta">ГИИС · 16 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/nastroyka-arm-elektronnyy-byudzhet/"><div class="card__cover"><span>АРМ</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Настройка рабочего места для «Электронного бюджета»</h3><div class="card__meta">ГИИС · 14 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/sufd-portal-kaznachejstva/"><div class="card__cover"><span>СУФД</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">СУФД-портал казначейства: подключение и работа</h3><div class="card__meta">ГИИС · 14 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/sertifikat-ecp-kaznachejstvo/"><div class="card__cover"><span>Сертификат</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Сертификат и ЭЦП казначейства: как получить</h3><div class="card__meta">ЭЦП · 16 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/sertifikaty-i-spiski-otzyva-uc-kaznachejstva/"><div class="card__cover"><span>Сертификаты</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Сертификаты и списки отзыва (СОС) УЦ казначейства</h3><div class="card__meta">ЭЦП · 12 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/portal-zayavitelya-kaznachejstva/"><div class="card__cover"><span>ФЗС</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Портал заявителя казначейства: заявка на сертификат</h3><div class="card__meta">ЭЦП · 14 мин</div></div></a>
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

<section class="kz-sub" aria-labelledby="kzSubTitle" data-source="poib-sobi-elektronnyy-byudzhet">
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
