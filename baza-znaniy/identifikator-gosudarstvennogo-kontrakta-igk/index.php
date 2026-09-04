<?php /* Cache-Control задаёт .htaccess — единая точка правды для кэш-заголовков */ ?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ИГК: что это, структура кода и где найти идентификатор</title>
<meta name="description" content="Идентификатор государственного контракта: зачем нужен, отличие от ИКЗ, структура кода, где найти ИГК и что делать, если он не указан в договоре или счёте.">
<meta name="author" content="Ярослав Михайлов">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1">
<meta name="theme-color" content="#F4F1EB" media="(prefers-color-scheme: light)">
<meta name="theme-color" content="#141310" media="(prefers-color-scheme: dark)">
<!-- PROD: canonical и og:url ОБЯЗАТЕЛЬНО менять под URL каждой статьи -->
<link rel="canonical" href="https://kaznaexpert.ru/baza-znaniy/identifikator-gosudarstvennogo-kontrakta-igk/">
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
{"@context": "https://schema.org", "@type": "Article", "headline": "Идентификатор государственного контракта (ИГК): что это, структура, как добавить в 1С", "description": "Идентификатор государственного контракта: зачем нужен, отличие от ИКЗ, структура кода, где найти ИГК и что делать, если он не указан в договоре или счёте.", "inLanguage": "ru-RU", "datePublished": "2026-06-08", "dateModified": "2026-08-04", "author": {"@type": "Person", "name": "Ярослав Михайлов", "jobTitle": "Главный эксперт по казначейскому сопровождению", "url": "https://kaznaexpert.ru/komanda/mihailov-yaroslav/", "@id": "https://kaznaexpert.ru/komanda/mihailov-yaroslav/#person", "image": "https://kaznaexpert.ru/img/team/mihailov-photo.jpg"}, "publisher": {"@type": "Organization", "name": "КазнаЭксперт", "url": "https://kaznaexpert.ru", "logo": {"@type": "ImageObject", "url": "https://kaznaexpert.ru/img/logogold.png"}, "@id": "https://kaznaexpert.ru/#organization"}, "image": ["https://kaznaexpert.ru/img/og/baza-znaniy__identifikator-gosudarstvennogo-kontrakta-igk-16x9.jpg", "https://kaznaexpert.ru/img/og/baza-znaniy__identifikator-gosudarstvennogo-kontrakta-igk-4x3.webp", "https://kaznaexpert.ru/img/og/baza-znaniy__identifikator-gosudarstvennogo-kontrakta-igk-1x1.webp"], "mainEntityOfPage": {"@type": "WebPage", "@id": "https://kaznaexpert.ru/baza-znaniy/identifikator-gosudarstvennogo-kontrakta-igk/"}, "citation": ["https://minfin.gov.ru/ru/document/?id_4=135052", "https://base.garant.ru/403325114/", "https://base.garant.ru/71169728/", "https://www.consultant.ru/document/cons_doc_LAW_19702/"]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Главная","item":"https://kaznaexpert.ru/"},{"@type":"ListItem","position":2,"name":"База знаний","item":"https://kaznaexpert.ru/baza-znaniy/"},{"@type":"ListItem","position":3,"name":"Идентификатор государственного контракта (ИГК)"}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [{"@type": "Question", "name": "Что такое ИГК?", "acceptedAnswer": {"@type": "Answer", "text": "Идентификатор государственного контракта — уникальный цифровой код, по которому казначейство связывает платежи, договоры соисполнителей и отчётность с конкретным контрактом при казначейском сопровождении."}}, {"@type": "Question", "name": "Каким приказом формируется ИГК по гособоронзаказу?", "acceptedAnswer": {"@type": "Answer", "text": "Идентификатор государственного контракта по ГОЗ (25-значный) формируется по совместному приказу Министра обороны РФ № 475 и Федерального казначейства № 13н от 11.08.2015. По структуре он отличается от 20-значного идентификатора при казначейском сопровождении (приказ Минфина № 205н), поэтому их не следует смешивать."}}, {"@type": "Question", "name": "Сколько знаков в ИГК?", "acceptedAnswer": {"@type": "Answer", "text": "При казначейском сопровождении (вне ГОЗ) идентификатор состоит из 20 знаков по приказу Минфина № 205н. В гособоронзаказе применяется отдельный 25-значный идентификатор."}}, {"@type": "Question", "name": "Чем ИГК отличается от ИКЗ?", "acceptedAnswer": {"@type": "Answer", "text": "ИГК присваивается контракту и нужен для прослеживаемости платежей и казначейского сопровождения. ИКЗ — идентификационный код закупки по 44-ФЗ, появляется на этапе планирования. Это разные коды."}}, {"@type": "Question", "name": "Кто присваивает ИГК?", "acceptedAnswer": {"@type": "Answer", "text": "Идентификатор формируется при заключении контракта, подлежащего казначейскому сопровождению, по Порядку, утверждённому приказом Минфина России от 02.12.2021 № 205н, и далее не меняется."}}, {"@type": "Question", "name": "Где указывать ИГК?", "acceptedAnswer": {"@type": "Answer", "text": "В платёжных документах — в реквизите «Назначение платежа», а также в договорах с соисполнителями, сведениях об операциях и отчётности по контракту."}}, {"@type": "Question", "name": "Как добавить ИГК в 1С?", "acceptedAnswer": {"@type": "Answer", "text": "Внести идентификатор в карточку договора как отдельный реквизит, после чего он подставляется в платёжные документы. Названия полей различаются по версиям 1С — сверяйте со своей конфигурацией."}}, {"@type": "Question", "name": "Что будет, если ИГК указан неверно?", "acceptedAnswer": {"@type": "Answer", "text": "Платёж не пройдёт санкционирование: казначейство не сможет связать операцию с контрактом. Нужно исправить идентификатор и направить платёж заново."}}, {"@type": "Question", "name": "Меняется ли ИГК в ходе исполнения контракта?", "acceptedAnswer": {"@type": "Answer", "text": "Нет. Идентификатор формируется единожды и используется без изменений на всём сроке контракта."}}, {"@type": "Question", "name": "Кто поможет с ИГК и сопровождением платежей?", "acceptedAnswer": {"@type": "Answer", "text": "Работу с идентификатором и проведение платежей можно передать на сопровождение: эксперт проверит ИГК, настроит подстановку и проведёт операции. Оставьте заявку — разберём вашу ситуацию."}}, {"@type": "Question", "name": "Где взять ИГК, если его нет в контракте?", "acceptedAnswer": {"@type": "Answer", "text": "Проверить приложения и дополнительные соглашения, карточку контракта в реестре контрактов единой информационной системы, сопроводительные письма заказчика и документы казначейского контура. Если кода нет нигде — запросить его у заказчика письменно и оформить дополнительное соглашение."}}, {"@type": "Question", "name": "Что делать, если контрагент не указал ИГК в счёте?", "acceptedAnswer": {"@type": "Answer", "text": "Запросить исправленный счёт с идентификатором и проверить, есть ли в договоре с контрагентом условие о казначейском сопровождении и сам код. Подавать распоряжение без идентификатора не стоит: его вернут, и время будет потеряно."}}, {"@type": "Question", "name": "Присваивается ли соисполнителю отдельный ИГК?", "acceptedAnswer": {"@type": "Answer", "text": "Нет. По цепочке кооперации передаётся один и тот же идентификатор: соисполнитель берёт его из договора со своим заказчиком и указывает в своих документах и распоряжениях."}}, {"@type": "Question", "name": "Можно ли вместо ИГК указать идентификационный код закупки?", "acceptedAnswer": {"@type": "Answer", "text": "Нет, это разные коды с разным назначением. Подмена приведёт к возврату распоряжения при санкционировании."}}, {"@type": "Question", "name": "Кто обязан включить условие о казначейском сопровождении и указать идентификатор?", "acceptedAnswer": {"@type": "Answer", "text": "Пункт 4.1 статьи 242.23 Бюджетного кодекса распределяет обязанность по звеньям: в государственный контракт — заказчик, в договор о субсидии — получатель бюджетных средств или субсидии, в контракты исполнителя — сам исполнитель, в договоры соисполнителей — исполнители по этим контрактам."}}, {"@type": "Question", "name": "Как проверить, что ИГК указан правильно?", "acceptedAnswer": {"@type": "Answer", "text": "Сверить код в распоряжении, документах-основаниях и тексте контракта посимвольно, убедиться, что это именно идентификатор государственного контракта, а не идентификационный код закупки, и что он относится к контракту, по которому открыт лицевой счёт."}}, {"@type": "Question", "name": "Что делать, если по ошибке указан код другого контракта?", "acceptedAnswer": {"@type": "Answer", "text": "Распоряжение будет возвращено при санкционировании. Нужно исправить код и подать распоряжение заново; при нескольких сопровождаемых контрактах удобно вести таблицу соответствия «контракт — идентификатор — лицевой счёт»."}}]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"HowTo","name":"Как добавить ИГК в 1С","inLanguage":"ru-RU","step":[
{"@type":"HowToStep","position":1,"name":"Открыть договор","text":"Найти карточку договора (контракта) с заказчиком в справочнике договоров."},
{"@type":"HowToStep","position":2,"name":"Включить признак казначейского сопровождения","text":"Отметить, что по договору применяется казначейское сопровождение, если такой признак есть."},
{"@type":"HowToStep","position":3,"name":"Внести ИГК","text":"Заполнить реквизит идентификатора государственного контракта значением из контракта."},
{"@type":"HowToStep","position":4,"name":"Проверить подстановку","text":"Убедиться, что ИГК подтягивается в платёжные документы и назначение платежа."},
{"@type":"HowToStep","position":5,"name":"Сверить формат","text":"Проверить число знаков и отсутствие лишних пробелов или символов."}
]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"DefinedTerm","name":"ИГК","description":"Идентификатор государственного контракта — уникальный цифровой код контракта при казначейском сопровождении (20 знаков по приказу Минфина № 205н; 25 знаков в ГОЗ).","inDefinedTermSet":"https://kaznaexpert.ru/baza-znaniy/glossary/"}
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
<meta property="og:title" content="Идентификатор государственного контракта (ИГК): что это, структура, 1С">
<meta property="og:description" content="Идентификатор государственного контракта: зачем нужен, отличие от ИКЗ, структура кода, где найти ИГК и что делать, если он не указан в договоре или счёте.">
<meta property="og:url" content="https://kaznaexpert.ru/baza-znaniy/identifikator-gosudarstvennogo-kontrakta-igk/">
<meta property="og:image" content="https://kaznaexpert.ru/img/og/baza-znaniy__identifikator-gosudarstvennogo-kontrakta-igk-16x9.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="675">
<meta property="og:image:alt" content="Идентификатор государственного контракта (ИГК): что это, структура, 1С — КазнаЭксперт">
<meta property="article:published_time" content="2026-06-08T09:00:00+03:00">
<meta property="article:modified_time" content="2026-08-04T09:00:00+03:00">
<meta property="article:author" content="https://kaznaexpert.ru/komanda/mihailov-yaroslav/">
<meta property="article:section" content="База знаний">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Идентификатор государственного контракта (ИГК): что это, структура, 1С">
<meta name="twitter:description" content="Идентификатор государственного контракта: зачем нужен, отличие от ИКЗ, структура кода, где найти ИГК и что делать, если он не указан в договоре или счёте.">
<meta name="twitter:image" content="https://kaznaexpert.ru/img/og/baza-znaniy__identifikator-gosudarstvennogo-kontrakta-igk-16x9.jpg">


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
  <nav class="crumbs" aria-label="Хлебные крошки"><a href="/">Главная</a> › <a href="/baza-znaniy/">База знаний</a> › Идентификатор государственного контракта (ИГК)</nav>

  <aside class="toc" aria-label="Содержание">
    <div class="toc__label">Содержание</div>
    <ul class="toc__list" id="tocList">
      <li><a href="#chto-takoe">Что такое ИГК</a></li>
      <li><a href="#zachem">Зачем нужен</a></li>
      <li><a href="#igk-ikz">ИГК и ИКЗ — разница</a></li>
      <li><a href="#kto">Кто и когда присваивает</a></li>
      <li><a href="#struktura">Структура ИГК при казначейском сопровождении</a></li>
      <li><a href="#goz">ИГК в ГОЗ (25 знаков)</a></li>
      <li><a href="#gde">Где указывать ИГК</a></li>
      <li><a href="#1c">Как добавить ИГК в 1С</a></li>
      <li><a href="#oshibki">Частые ошибки</a></li>
      <li><a href="#keys">Пример из практики</a></li>
      <li><a href="#glossary">Глоссарий</a></li>
      <li><a href="#faq">Частые вопросы</a></li>
      <li><a href="#gde-nayti">Где найти ИГК: пять источников</a></li>
      <li><a href="#net-igk">Если ИГК не указан: последствия и действия</a></li>
      <li><a href="#cepochka">Кто и от кого получает ИГК: цепочка</a></li>
      <li><a href="#proverka-koda">Проверка кода перед платежом</a></li>
    </ul>
  </aside>

  <article class="content" id="main">
    <div class="hero">
      <img class="hero__crest hero__crest--light" src="/img/logogold-crest.webp" alt="" aria-hidden="true" width="188" height="137" decoding="async" loading="lazy">
      <img class="hero__crest hero__crest--dark" src="/img/LogoWhite.png" alt="" aria-hidden="true" width="188" height="137" decoding="async" loading="lazy">
      <div class="eyebrow">База знаний · Операции и отчётность <span class="fresh">Актуально на 2026</span></div>
    <h1>Идентификатор государственного контракта (ИГК): что это, структура, как добавить в 1С</h1>
    <div class="byline"><span class="av">ЯМ</span><span>Автор: <a href="/komanda/mihailov-yaroslav/">Ярослав Михайлов</a>, главный эксперт</span><span class="dot">·</span><span>15+ лет в Казначействе</span><span class="dot">·</span><span>15 мин чтения</span><span class="dot">·</span><span>Обновлено 4 августа 2026</span></div>
    </div>

    <div class="share">
      <span class="share__label">Поделиться:</span>
      <a href="https://t.me/share/url?url=https%3A%2F%2Fkaznaexpert.ru%2Fbaza-znaniy%2Fidentifikator-gosudarstvennogo-kontrakta-igk%2F&amp;text=Идентификатор%20государственного%20контракта%20(ИГК):%20структура%20и%20как%20добавить%20в%201С" target="_blank" rel="noopener"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.56 8.25l-1.86 8.76c-.14.62-.5.77-1.02.48l-2.82-2.08-1.36 1.31c-.15.15-.28.28-.57.28l.2-2.89 5.27-4.76c.23-.2-.05-.32-.35-.12l-6.51 4.1-2.8-.88c-.61-.19-.62-.61.13-.9l10.95-4.22c.5-.18.95.12.79.85z"/></svg>Telegram</a>
      <button type="button" id="copyLink"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.07 0l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.07 0l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg><span>Копировать ссылку</span></button>
      <button type="button" id="printBtn"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9V2h12v7M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2M6 14h12v8H6z"/></svg>Скачать PDF</button>
    </div>

    <details class="mtoc"><summary>Содержание статьи</summary>
      <ol>
        <li><a href="#chto-takoe">Что такое ИГК</a></li><li><a href="#zachem">Зачем нужен</a></li>
        <li><a href="#igk-ikz">ИГК и ИКЗ</a></li><li><a href="#kto">Кто присваивает</a></li>
        <li><a href="#struktura">Структура при казначейском сопровождении</a></li><li><a href="#goz">ИГК в ГОЗ</a></li>
        <li><a href="#gde">Где указывать</a></li><li><a href="#1c">Как добавить в 1С</a></li>
        <li><a href="#oshibki">Частые ошибки</a></li><li><a href="#keys">Пример из практики</a></li>
        <li><a href="#glossary">Глоссарий</a></li><li><a href="#faq">FAQ</a></li><li><a href="#gde-nayti">Где найти ИГК: пять источников</a></li><li><a href="#net-igk">Если ИГК не указан: последствия и действия</a></li><li><a href="#cepochka">Кто и от кого получает ИГК: цепочка</a></li><li><a href="#proverka-koda">Проверка кода перед платежом</a></li></ol>
    </details>

    <div class="tldr">Идентификатор государственного контракта (ИГК) — это уникальный цифровой код контракта, по которому казначейство связывает все платежи, договоры соисполнителей и отчётность с конкретным контрактом. При казначейском сопровождении ИГК формируется по Порядку, утверждённому приказом Минфина России от 02.12.2021 № 205н, и состоит из 20 знаков; для гособоронзаказа применяется отдельный 25-значный идентификатор. ИГК указывается во всех платёжных документах по контракту.<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a></div>

    <section class="keyfacts grain" aria-label="Ключевые факты">
      <h2>Коротко о главном</h2>
      <div class="keyfacts__grid">
        <div class="kf"><div class="kf__n">20 / 25</div><div class="kf__t"><b>Знаков</b> — 20 при казначейском сопровождении, 25 в ГОЗ</div></div>
        <div class="kf"><div class="kf__n">№ 205н</div><div class="kf__t"><b>Порядок</b> — приказ Минфина от 02.12.2021 (ИГК при казначейском сопровождении)</div></div>
        <div class="kf"><div class="kf__n">1 раз</div><div class="kf__t"><b>Формируется</b> — единожды на весь контракт</div></div>
        <div class="kf"><div class="kf__n">везде</div><div class="kf__t"><b>Указывается</b> — в платёжках и договорах соисполнителей</div></div>
        <div class="kf"><div class="kf__n">ТОФК</div><div class="kf__t"><b>Связывает</b> — операции с контрактом при сопровождении</div></div>
        <div class="kf"><div class="kf__n">≠ ИКЗ</div><div class="kf__t"><b>Не путать</b> — ИГК и ИКЗ это разные коды</div></div>
      </div>
    </section>
    <!-- svc-cta:top -->
    <div class="svc-cta svc-cta--top" role="complementary" aria-label="Услуга КазнаЭксперт"><div class="svc-cta__body"><span class="svc-cta__eyebrow">Топ-услуга · обучение</span><p class="svc-cta__title">Научим вести казначейское сопровождение самостоятельно</p><p class="svc-cta__text">9 академических часов один на один с экспертом Федерального казначейства — на ваших контрактах: счёт, «Электронный бюджет», сведения и коды, санкционирование, раздельный учёт. После курса вы ведёте контракт сами, без отказов.</p><span class="svc-cta__price">150 000 ₽ · индивидуально</span></div><a class="svc-cta__btn" href="/uslugi/obuchenie-kaznacheyskomu-soprovozhdeniyu/" onclick="try{ym(94305898,'reachGoal','svccta_click',{svc:'obuchenie',pos:'top'})}catch(e){}">Записаться на обучение →</a></div>
    <!-- /svc-cta:top -->


    <h2 id="chto-takoe">Что такое идентификатор государственного контракта</h2>
    <div class="answer reveal">
      <p class="lead-p">Идентификатор государственного контракта (ИГК) — это уникальный цифровой код, который присваивается контракту и сопровождает его на всём пути исполнения. Через ИГК казначейство «склеивает» в единую картину все операции по контракту: поступления целевых средств, платежи исполнителя, расчёты с соисполнителями. Без ИГК при казначейском сопровождении платёж просто не идентифицируется и не пройдёт.</p>
      <p>Проще говоря, ИГК — это «паспортный номер» контракта в системе казначейства. Один контракт — один идентификатор, который не меняется в течение всего срока и проставляется во всех связанных документах. Именно поэтому корректность ИГК критична: ошибка в коде разрывает связь платежа с контрактом. Как работает сам режим сопровождения — в разборе <a href="/baza-znaniy/chto-takoe-kaznacheyskoe-soprovozhdenie/">«Казначейское сопровождение: что это и как работает»</a>.</p>
    </div>

    <h2 id="zachem">Зачем нужен ИГК</h2>
    <div class="answer reveal">
      <p>ИГК решает одну задачу — обеспечить прослеживаемость целевых средств. Когда деньги по контракту обособлены и помечены идентификатором, казначейство видит, что каждый платёж относится именно к этому контракту, а не «растворяется» в общем потоке. Это основа контроля целевого использования средств и санкционирования операций.</p>
      <p>Для исполнителя ИГК — обязательный реквизит. Он формируется один раз, далее обязательно отображается во всех платёжных документах и договорах с соисполнителями (субподрядчиками). Благодаря этому цепочка кооперации тоже становится прозрачной: средства, переданные соисполнителю, по-прежнему «привязаны» к исходному контракту через тот же идентификатор.</p>
    </div>

    <h2 id="igk-ikz">ИГК и ИКЗ — в чём разница</h2>
    <div class="answer reveal">
      <p>ИГК часто путают с ИКЗ — идентификационным кодом закупки. Это разные коды с разным назначением. ИКЗ присваивается закупке на этапе планирования по 44-ФЗ и «живёт» в плане-графике и закупочной документации. ИГК присваивается контракту и нужен прежде всего для казначейского сопровождения и прослеживаемости платежей. Их легко различить по роли и моменту появления.</p>
    </div>
    <table>
      <caption>ИГК и ИКЗ: ключевые отличия</caption>
      <tr><th>Параметр</th><th>ИГК</th><th>ИКЗ</th></tr>
      <tr><td>Расшифровка</td><td>Идентификатор государственного контракта</td><td>Идентификационный код закупки</td></tr>
      <tr><td>Когда появляется</td><td>На этапе контракта</td><td>На этапе планирования закупки</td></tr>
      <tr><td>Главная задача</td><td>Прослеживаемость платежей, казначейское сопровождение</td><td>Связь закупки с планом-графиком (44-ФЗ)</td></tr>
      <tr><td>Где используется</td><td>Платёжки, договоры соисполнителей</td><td>Закупочная документация, ЕИС</td></tr>
    </table>

    <h2 id="kto">Кто и когда присваивает ИГК</h2>
    <div class="answer reveal">
      <p>Идентификатор формируется при заключении контракта, подлежащего казначейскому сопровождению, по правилам Порядка, утверждённого приказом Минфина России от 02.12.2021 № 205н. Код формируется единожды и далее не меняется. Формирование привязано к данным контракта и реестровой записи, поэтому ИГК не «придумывается» произвольно, а строится по строгой структуре<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a>.</p>
      <p>Для исполнителя это означает: получив контракт под сопровождение, нужно сразу зафиксировать его ИГК и использовать во всех документах. Если идентификатора нет или он указан с ошибкой, платежи по контракту не пройдут санкционирование — это одна из частых причин возвратов, которые мы разбираем в материале <a href="/baza-znaniy/prichiny-otkaza-kaznacheystva-v-sankcionirovanii/">«Причины отказа казначейства в санкционировании»</a>.</p>
    </div>

    <h2 id="struktura">Структура ИГК при казначейском сопровождении</h2>
    <div class="answer reveal">
      <p>При казначейском сопровождении (вне ГОЗ) идентификатор состоит из 20 знаков. Каждая группа разрядов несёт свой смысл — от служебных нулей до привязки к реестровой записи. Знание структуры помогает проверить корректность кода и понять, что он «зашифровывает»<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a>.</p>
    </div>
    <table>
      <caption>Структура 20-значного ИГК при казначейском сопровождении</caption>
      <tr><th>Разряды</th><th>Что означают</th></tr>
      <tr><td>1–6</td><td>Свободные знаки — обозначаются нулями</td></tr>
      <tr><td>7–8</td><td>Код основного мероприятия целевой статьи расходов (нацпроекты); вне нацпроектов — «00»</td></tr>
      <tr><td>9–19</td><td>Соответствуют 1–11 разрядам уникального номера реестровой записи реестра соглашений</td></tr>
      <tr><td>20</td><td>Контрольный разряд — указывается «2»</td></tr>
    </table>
    <div class="note"><b>Подсказка.</b> Структура задаётся нормативно, поэтому ИГК всегда можно «прочитать»: служебные нули в начале, привязка к реестровой записи в середине и фиксированный признак в конце.</div>

    <h2 id="goz">ИГК в гособоронзаказе (25 знаков)</h2>
    <div class="answer reveal">
      <p>В гособоронзаказе применяется отдельный идентификатор государственного контракта длиной 25 знаков, формируемый по совместному приказу Министра обороны РФ № 475 и Федерального казначейства № 13н от 11.08.2015. По первым разрядам такого ИГК можно определить, что контракт относится именно к гособоронзаказу, а также считать сведения о сроках и виде цены. Поскольку правила формирования и состав разрядов для ГОЗ отличаются от КС-идентификатора, их не следует смешивать.</p>
      <p>Если ваш контракт — гособоронзаказ, опирайтесь на профильные правила ГОЗ и наш разбор режима — <a href="/baza-znaniy/kaznacheyskoe-soprovozhdenie-goz-275-fz/">«Казначейское сопровождение ГОЗ по 275-ФЗ»</a>. В этой статье структура разобрана для 20-значного ИГК при казначейском сопровождении вне ГОЗ.</p>
    </div>

    <h2 id="gde">Где указывать ИГК</h2>
    <div class="answer reveal">
      <p>ИГК проставляется везде, где операция должна быть привязана к контракту. Прежде всего — в платёжных документах: идентификатор указывается в реквизите «Назначение платежа», что позволяет казначейству связать платёж с контрактом. Также ИГК включают в договоры с соисполнителями (субподрядчиками), чтобы вся цепочка кооперации оставалась прослеживаемой.</p>
    </div>
    <table>
      <caption>Где используется ИГК</caption>
      <tr><th>Документ / место</th><th>Зачем</th></tr>
      <tr><td>Платёжные документы</td><td>Привязка платежа к контракту в «Назначении платежа»</td></tr>
      <tr><td>Договоры с соисполнителями</td><td>Прослеживаемость средств по цепочке кооперации</td></tr>
      <tr><td>Сведения об операциях</td><td>Связь плановых операций с контрактом</td></tr>
      <tr><td>Отчётность по контракту</td><td>Идентификация операций при сопровождении</td></tr>
    </table>

    <h2 id="1c">Как добавить ИГК в 1С</h2>
    <div class="answer reveal">
      <p>Принцип одинаков для всех конфигураций: ИГК заносят в карточку договора (контракта) как отдельный реквизит, после чего он автоматически подставляется в связанные документы и в назначение платежа. Конкретные названия полей и пути меню различаются по версиям и редакциям 1С, поэтому ниже — универсальная логика, а точные подписи полей сверяйте со своей конфигурацией.</p>
    </div>
    <table>
      <caption>Порядок добавления ИГК в 1С (общая логика)</caption>
      <tr><th>Шаг</th><th>Что сделать</th></tr>
      <tr><td>1. Открыть договор</td><td>Найти карточку договора/контракта с заказчиком в справочнике договоров</td></tr>
      <tr><td>2. Включить признак казначейского сопровождения</td><td>Отметить, что по договору применяется казначейское сопровождение (если есть такой признак)</td></tr>
      <tr><td>3. Внести ИГК</td><td>Заполнить реквизит идентификатора государственного контракта значением из контракта</td></tr>
      <tr><td>4. Проверить подстановку</td><td>Убедиться, что ИГК подтягивается в платёжные документы и назначение платежа</td></tr>
      <tr><td>5. Сверить формат</td><td>Проверить число знаков и отсутствие лишних пробелов/символов</td></tr>
    </table>
    <div class="note"><b>Важно.</b> Если в вашей версии 1С нет отдельного поля для ИГК, идентификатор вносят вручную в начало реквизита «Назначение платежа» платёжного документа по правилам, которые применяет ваш банк/казначейство. Точный формат уточняйте в своей ТОФК.</div>

    <h2 id="oshibki">Частые ошибки с ИГК</h2>
    <div class="answer reveal">
      <p>Большинство проблем с идентификатором — это опечатки и путаница кодов. Ниже — типичные ошибки и как их избежать.</p>
    </div>
    <table>
      <caption>Типичные ошибки с ИГК и решения</caption>
      <tr><th>Ошибка</th><th>Как правильно</th></tr>
      <tr><td>Перепутали ИГК и ИКЗ</td><td>ИГК — для платежей и казначейского сопровождения; ИКЗ — для закупки по 44-ФЗ</td></tr>
      <tr><td>Опечатка в коде</td><td>Сверять ИГК с контрактом, проверять число знаков</td></tr>
      <tr><td>Не указали ИГК в платёжке</td><td>Проставлять идентификатор в «Назначении платежа»</td></tr>
      <tr><td>Нет ИГК в договоре с соисполнителем</td><td>Включать идентификатор в договоры по цепочке кооперации</td></tr>
      <tr><td>Лишние пробелы/символы</td><td>Вносить код строго в нужном формате без разделителей</td></tr>
    </table>

    <h2 id="keys">Пример из практики</h2>
    <div class="answer reveal">
      <p>Типовая ситуация: исполнитель оплачивает поставку соисполнителю, но в платёжном документе либо не указывает ИГК, либо ставит вместо него ИКЗ. Платёж не проходит санкционирование — казначейство не может связать операцию с контрактом. После того как ИГК внесли корректно в назначение платежа, операция прошла. На практике помогает простое правило: сразу после заключения контракта зафиксировать ИГК в карточке договора в 1С и проверить, что он автоматически подставляется в платёжки, — тогда человеческий фактор сводится к минимуму.</p>
    </div>

    <p data-ctx="auto-ctx:soispolniteli-kooperaciya-goz">Один и тот же идентификатор проходит через всю цепочку поставок — как он работает у соисполнителей и что обязательно прописать в договоре с ними, см. в статье о <a href="/baza-znaniy/soispolniteli-kooperaciya-goz/">кооперации в ГОЗ</a>.</p>
    <p data-ctx="auto-ctx:igk-v-schete-fakture-i-upd">Куда конкретно вписывать код в документах — в строку 8 счёта-фактуры и УПД, в счёт на оплату и платёжку — и как настроить автоподстановку в 1С, разобрано в материале <a href="/baza-znaniy/igk-v-schete-fakture-i-upd/">ИГК в счёте-фактуре, счёте и УПД</a>.</p>
    <p data-ctx="auto-ctx:identifikacionnyy-kod-zakupki-ikz">Идентификатор государственного контракта легко спутать с другим кодом — <a href="/baza-znaniy/identifikacionnyy-kod-zakupki-ikz/">идентификационным кодом закупки (ИКЗ)</a> из 36 разрядов, который идентифицирует саму закупку, а не платежи по контракту.</p>
<!-- p46:identifikator-gosudarstvennogo-kontrakta-igk -->

    <h2 id="gde-nayti">Где найти ИГК: пять источников</h2>
    <p>Идентификатор не придумывается исполнителем и не выводится из номера контракта. Его формирует уполномоченная сторона в установленном порядке, а исполнитель должен код <i>найти</i> и корректно переносить в свои документы. Вот пять мест, где он есть.</p>
    <table>
      <thead><tr><th>Источник</th><th>Где смотреть</th><th>Когда удобнее всего</th></tr></thead>
      <tbody>
        <tr><td>Текст контракта</td><td>Раздел с реквизитами и условиями о казначейском сопровождении, приложения, дополнительные соглашения</td><td>Первый шаг: код почти всегда указан в самом контракте</td></tr>
        <tr><td>Реестр контрактов в единой информационной системе</td><td>Карточка контракта — см. <a href="/baza-znaniy/reestr-kontraktov-eis-44-fz/">реестр контрактов</a></td><td>Когда контракт есть, а бумажный экземпляр недоступен</td></tr>
        <tr><td>Письмо или уведомление заказчика</td><td>Сопроводительное письмо к контракту, уведомление об открытии лицевого счёта</td><td>Когда контракт заключён, а реквизиты дошли отдельным документом</td></tr>
        <tr><td>Документы казначейского контура</td><td>Сведения об операциях с целевыми средствами, распоряжения, <a href="/baza-znaniy/vypiska-iz-licevogo-scheta-kaznachejstva/">выписка из лицевого счёта</a></td><td>Когда счёт уже открыт и операции идут: код виден в аналитике</td></tr>
        <tr><td>Договор с заказчиком по цепочке кооперации</td><td>Договор, который вы заключили как соисполнитель, — код передаётся вниз без изменений</td><td>Для соисполнителей: свой код не присваивается</td></tr>
      </tbody>
    </table>
    <p>Два предупреждения. Первое: не подставляйте вместо идентификатора государственного контракта идентификационный код закупки — это разные коды с разным назначением, различия разобраны в материале про <a href="/baza-znaniy/identifikacionnyy-kod-zakupki-ikz/">идентификационный код закупки</a>. Второе: код переносится <b>посимвольно</b>. Ошибка в одном знаке для казначейства равнозначна отсутствию кода — распоряжение не пройдёт сверку.</p>
    <p>Куда потом вписывать найденный код — в счёт, счёт-фактуру, универсальный передаточный документ, платёжное поручение — подробно разобрано в отдельном материале про <a href="/baza-znaniy/igk-v-schete-fakture-i-upd/">ИГК в счёте-фактуре и УПД</a>.</p>

    <h2 id="net-igk">Если ИГК не указан: последствия и действия</h2>
    <p>Ситуация встречается в двух зеркальных вариантах: код отсутствует в вашем договоре с заказчиком либо его не указал ваш контрагент в счёте и первичных документах. Последствия в обоих случаях денежные.</p>
    <p><b>Что происходит.</b> Подпункт 3 пункта 2 статьи 242.23 Бюджетного кодекса требует, чтобы идентификатор указывался в контрактах (договорах), распоряжениях и документах, установленных порядком санкционирования. Порядок формирования идентификатора устанавливает Минфин России. Если кода нет или он не совпадает с данными контракта, платёж не проходит проверку: распоряжение возвращают. Полный каталог оснований возврата — в материале про <a href="/baza-znaniy/prichiny-otkaza-kaznacheystva-v-sankcionirovanii/">причины отказа казначейства в санкционировании</a>, а разграничение отказа и задержки — в разборе <a href="/baza-znaniy/ufk-zaderzhivaet-platezh/">почему УФК задерживает платёж</a>.</p>
    <p><b>Порядок действий, если кода нет в вашем договоре с заказчиком:</b></p>
    <ol>
      <li>Проверить все источники из таблицы выше — часто код есть в приложении или в письме, но не попал в основной текст.</li>
      <li>Запросить код у заказчика письменно, со ссылкой на обязанность указывать идентификатор в контрактах и распоряжениях.</li>
      <li>Оформить дополнительное соглашение, если код в контракте отсутствует: это не изменение существенных условий, а приведение реквизитов в соответствие.</li>
      <li>Не начинать расчёты по цепочке до получения кода: без него договоры с соисполнителями придётся переоформлять.</li>
    </ol>
    <p><b>Порядок действий, если код не указал ваш контрагент:</b></p>
    <ol>
      <li>Не подавать распоряжение «как есть» в надежде, что пройдёт: возврат распоряжения потеряет больше времени, чем исправление документа.</li>
      <li>Запросить у контрагента исправленный счёт или первичный документ с идентификатором.</li>
      <li>Проверить сам договор с контрагентом: если в нём нет ни условия о казначейском сопровождении, ни идентификатора, нужно дополнительное соглашение, а не только новый счёт.</li>
      <li>Зафиксировать переписку — она понадобится, если срок оплаты по договору окажется под угрозой, см. <a href="/baza-znaniy/srok-oplaty-po-kontraktu-44-fz/">сроки оплаты по контракту</a>.</li>
    </ol>
    <p>Отдельный случай — отказ контрагента вписывать идентификатор «потому что у нас так не принято». Это не вопрос обычаев: без кода платёж с лицевого счёта не пройдёт, а значит, деньги контрагент не получит. Практика показывает, что аргумент про непрохождение платежа работает лучше ссылок на нормы.</p>

    <h2 id="cepochka">Кто и от кого получает ИГК: цепочка</h2>
    <p>Пункт 4.1 статьи 242.23 Бюджетного кодекса, введённый Федеральным законом от 24 июня 2025 г. № 158-ФЗ, распределяет обязанность включать условия о казначейском сопровождении по звеньям цепочки. Из этой конструкции понятно и движение идентификатора.</p>
    <table>
      <thead><tr><th>Звено</th><th>Кто обеспечивает условия о сопровождении</th><th>Что делает с идентификатором</th></tr></thead>
      <tbody>
        <tr><td>Государственный контракт</td><td>Государственный заказчик</td><td>Указывает идентификатор в контракте</td></tr>
        <tr><td>Договор (соглашение) о субсидии, инвестициях</td><td>Получатель бюджетных средств, получатель субсидии</td><td>Указывает идентификатор договора (соглашения)</td></tr>
        <tr><td>Контракты (договоры) исполнителя</td><td>Исполнитель по государственному контракту, получатель средств по договору</td><td>Переносит идентификатор вниз без изменений</td></tr>
        <tr><td>Договоры соисполнителей</td><td>Исполнители по контрактам (договорам)</td><td>Переносят тот же идентификатор дальше по кооперации</td></tr>
      </tbody>
    </table>
    <p>Главный практический вывод: <b>по цепочке идёт один и тот же идентификатор</b>. Соисполнитель не получает «свой» код и не должен его запрашивать в казначействе — он берёт код из договора со своим заказчиком. Как устроены платежи по такой цепочке, разобрано в материалах про <a href="/baza-znaniy/soispolniteli-kooperaciya-goz/">кооперацию и соисполнителей</a> и <a href="/baza-znaniy/oplata-subpodryadchiku-pri-kaznacheyskom-soprovozhdenii/">оплату субподрядчику при сопровождении</a>.</p>
    <p>Если у одной компании несколько сопровождаемых контрактов, идентификаторов тоже несколько, и смешивать их нельзя: аналитика раздельного учёта строится по каждому коду отдельно — см. <a href="/baza-znaniy/neskolko-soprovozhdaemyh-kontraktov/">несколько сопровождаемых контрактов</a>.</p>

<!-- p46b:igk-check -->

    <h2 id="proverka-koda">Проверка идентификатора перед платежом: чек-лист</h2>
    <p>Большинство возвратов распоряжений из-за идентификатора — это не спор о праве, а расхождение символов и реквизитов. Минута проверки экономит дни на повторной подаче. Что сверять перед отправкой распоряжения:</p>
    <ul>
      <li><b>Совпадение с контрактом.</b> Код в распоряжении, в документах-основаниях и в тексте контракта должен быть идентичен посимвольно — без лишних пробелов, дефисов и переносов.</li>
      <li><b>Тот ли это код.</b> Идентификатор государственного контракта, идентификационный код закупки и внутренний номер договора — три разных значения. В распоряжении нужен именно идентификатор.</li>
      <li><b>Соответствие лицевому счёту.</b> Код должен относиться к тому контракту, по которому открыт лицевой счёт и утверждены сведения об операциях с целевыми средствами.</li>
      <li><b>Наличие кода в документах контрагента.</b> Счёт, счёт-фактура, универсальный передаточный документ и акт должны содержать идентификатор, иначе связка «документ — платёж» не сойдётся.</li>
      <li><b>Назначение платежа.</b> Формулировка должна содержать идентификатор и ссылку на документ-основание — требования разобраны в материале про <a href="/baza-znaniy/naznachenie-platezha-kaznachejstvo/">назначение платежа</a>.</li>
      <li><b>Код направления расходования.</b> Идентификатор отвечает на вопрос «по какому контракту», код направления — «на что»: это разные реквизиты, и оба обязательны. Справочник — в разделе <a href="/baza-znaniy/kody/">коды направления расходования</a>.</li>
    </ul>
    <p>Если несколько сопровождаемых контрактов ведутся параллельно, полезно держать перед глазами таблицу соответствия: контракт — идентификатор — лицевой счёт (или его раздел) — реквизиты заказчика. Ошибка «взяли код из соседнего контракта» встречается чаще, чем опечатки, и обнаруживается уже после возврата распоряжения.</p>
    <p>Отдельно про 1С и другие учётные системы: код заводится один раз в карточке договора и подставляется в документы автоматически. Это надёжнее ручного ввода в каждый счёт — как настроить, показано в материале про <a href="/baza-znaniy/igk-v-schete-fakture-i-upd/">ИГК в счёте-фактуре и УПД</a>.</p>

    <div class="takeaways">
      <h2>Что важно запомнить</h2>
      <ol>
        <li>ИГК — уникальный код контракта для прослеживаемости платежей при казначейском сопровождении.</li>
        <li>При казначейском сопровождении идентификатор состоит из 20 знаков (приказ Минфина № 205н), в ГОЗ — из 25.</li>
        <li>ИГК формируется один раз и не меняется в течение всего контракта.</li>
        <li>Его указывают в платёжках («Назначение платежа») и договорах с соисполнителями.</li>
        <li>Не путать с ИКЗ: ИГК — для контракта и казначейского сопровождения, ИКЗ — для закупки по 44-ФЗ.</li>
      </ol>
    </div>

    <h2 id="glossary">Глоссарий</h2>
    <dl class="gloss">
      <div><dt>ИГК</dt><dd>Идентификатор государственного контракта — уникальный код контракта.</dd></div>
      <div><dt>ИКЗ</dt><dd>Идентификационный код закупки по 44-ФЗ.</dd></div>
      <div><dt>Реестровая запись</dt><dd>Запись о соглашении/контракте в соответствующем реестре.</dd></div>
      <div><dt>Соисполнитель</dt><dd>Субподрядчик в цепочке кооперации по контракту.</dd></div>
      <div><dt>Назначение платежа</dt><dd>Реквизит платёжного документа, где указывают ИГК.</dd></div>
      <div><dt>ТОФК</dt><dd>Территориальный орган Федерального казначейства.</dd></div>
      <div><dt>Целевые средства</dt><dd>Деньги по контракту, расходуемые строго на его исполнение.</dd></div>
    </dl>
<p data-ctx="auto-ctx:igk-ne-ukazan-0902">Что происходит, когда код пропущен в конкретном документе — счёте-фактуре, распоряжении при казначейском сопровождении, платеже с отдельного счёта, договоре кооперации — и каким документом это исправляют, разобрано в разделе <a href="/baza-znaniy/igk-v-schete-fakture-i-upd/#ne-ukazan">«Не указан ИГК: последствия по каждому документу»</a>.</p>

    <h2 id="faq">Частые вопросы</h2>
    <div class="faq">
      <details open><summary>Что такое ИГК?</summary><p>Идентификатор государственного контракта — уникальный цифровой код, по которому казначейство связывает платежи, договоры соисполнителей и отчётность с конкретным контрактом при казначейском сопровождении.</p></details>
      <details><summary>Каким приказом формируется ИГК по гособоронзаказу?</summary><p>Идентификатор государственного контракта по ГОЗ (25-значный) формируется по совместному приказу Министра обороны РФ № 475 и Федерального казначейства № 13н от 11.08.2015. По структуре он отличается от 20-значного идентификатора при казначейском сопровождении (приказ Минфина № 205н), поэтому их не следует смешивать.</p></details>
      <details><summary>Сколько знаков в ИГК?</summary><p>При казначейском сопровождении (вне ГОЗ) идентификатор состоит из 20 знаков по приказу Минфина № 205н. В гособоронзаказе применяется отдельный 25-значный идентификатор.</p></details>
      <details><summary>Чем ИГК отличается от ИКЗ?</summary><p>ИГК присваивается контракту и нужен для прослеживаемости платежей и казначейского сопровождения. ИКЗ — идентификационный код закупки по 44-ФЗ, появляется на этапе планирования. Это разные коды.</p></details>
      <details><summary>Кто присваивает ИГК?</summary><p>Идентификатор формируется при заключении контракта, подлежащего казначейскому сопровождению, по Порядку, утверждённому приказом Минфина России от 02.12.2021 № 205н, и далее не меняется.</p></details>
      <details><summary>Где указывать ИГК?</summary><p>В платёжных документах — в реквизите «Назначение платежа», а также в договорах с соисполнителями, сведениях об операциях и отчётности по контракту.</p></details>
      <details><summary>Как добавить ИГК в 1С?</summary><p>Внести идентификатор в карточку договора как отдельный реквизит, после чего он подставляется в платёжные документы. Названия полей различаются по версиям 1С — сверяйте со своей конфигурацией.</p></details>
      <details><summary>Что будет, если ИГК указан неверно?</summary><p>Платёж не пройдёт санкционирование: казначейство не сможет связать операцию с контрактом. Нужно исправить идентификатор и направить платёж заново.</p></details>
      <details><summary>Меняется ли ИГК в ходе исполнения контракта?</summary><p>Нет. Идентификатор формируется единожды и используется без изменений на всём сроке контракта.</p></details>
      <details><summary>Кто поможет с ИГК и сопровождением платежей?</summary><p>Работу с идентификатором и проведение платежей можно передать на сопровождение: эксперт проверит ИГК, настроит подстановку и проведёт операции. Оставьте заявку — разберём вашу ситуацию.</p></details>
      <details><summary>Где взять ИГК, если его нет в контракте?</summary><p>Проверить приложения и дополнительные соглашения, карточку контракта в реестре контрактов единой информационной системы, сопроводительные письма заказчика и документы казначейского контура. Если кода нет нигде — запросить его у заказчика письменно и оформить дополнительное соглашение.</p></details>
      <details><summary>Что делать, если контрагент не указал ИГК в счёте?</summary><p>Запросить исправленный счёт с идентификатором и проверить, есть ли в договоре с контрагентом условие о казначейском сопровождении и сам код. Подавать распоряжение без идентификатора не стоит: его вернут, и время будет потеряно.</p></details>
      <details><summary>Присваивается ли соисполнителю отдельный ИГК?</summary><p>Нет. По цепочке кооперации передаётся один и тот же идентификатор: соисполнитель берёт его из договора со своим заказчиком и указывает в своих документах и распоряжениях.</p></details>
      <details><summary>Можно ли вместо ИГК указать идентификационный код закупки?</summary><p>Нет, это разные коды с разным назначением. Подмена приведёт к возврату распоряжения при санкционировании.</p></details>
      <details><summary>Кто обязан включить условие о казначейском сопровождении и указать идентификатор?</summary><p>Пункт 4.1 статьи 242.23 Бюджетного кодекса распределяет обязанность по звеньям: в государственный контракт — заказчик, в договор о субсидии — получатель бюджетных средств или субсидии, в контракты исполнителя — сам исполнитель, в договоры соисполнителей — исполнители по этим контрактам.</p></details>
      <details><summary>Как проверить, что ИГК указан правильно?</summary><p>Сверить код в распоряжении, документах-основаниях и тексте контракта посимвольно, убедиться, что это именно идентификатор государственного контракта, а не идентификационный код закупки, и что он относится к контракту, по которому открыт лицевой счёт.</p></details>
      <details><summary>Что делать, если по ошибке указан код другого контракта?</summary><p>Распоряжение будет возвращено при санкционировании. Нужно исправить код и подать распоряжение заново; при нескольких сопровождаемых контрактах удобно вести таблицу соответствия «контракт — идентификатор — лицевой счёт».</p></details>
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

    
    <!-- svc-cta:end -->
    <div class="svc-cta svc-cta--end" role="complementary" aria-label="Услуги КазнаЭксперт"><div class="svc-cta__card svc-cta__card--edu"><span class="svc-cta__eyebrow">Топ-услуга · обучение</span><p class="svc-cta__title">Научим вести казначейское сопровождение самостоятельно</p><p class="svc-cta__text">9 академических часов один на один с экспертом Федерального казначейства — на ваших контрактах: счёт, «Электронный бюджет», сведения и коды, санкционирование, раздельный учёт. После курса вы ведёте контракт сами, без отказов.</p><span class="svc-cta__price">150 000 ₽ · индивидуально</span><a class="svc-cta__btn" href="/uslugi/obuchenie-kaznacheyskomu-soprovozhdeniyu/" onclick="try{ym(94305898,'reachGoal','svccta_click',{svc:'obuchenie',pos:'end'})}catch(e){}">Записаться на обучение →</a></div><div class="svc-cta__card"><span class="svc-cta__eyebrow">Сопровождение контракта</span><p class="svc-cta__title">Возьмём казначейское сопровождение контракта на себя</p><p class="svc-cta__text">Счёт в ТОФК, сведения об операциях, каждый платёж, ИГК в документах и раздельный учёт — так, чтобы казначейство не вернуло ни одного документа. Без лимита на число операций.</p><span class="svc-cta__price">65 000 ₽ постоплата · 105 000 ₽/мес аванс и ГОЗ</span><a class="svc-cta__btn" href="/uslugi/kaznacheyskoe-soprovozhdenie/" onclick="try{ym(94305898,'reachGoal','svccta_click',{svc:'kaznacheyskoe-soprovozhdenie',pos:'end'})}catch(e){}">Обсудить контракт →</a></div></div>
    <!-- /svc-cta:end -->
<div class="refs">
      <h2>Источники и нормативная база</h2>
      <ol>
        <li id="ref-1">Приказ Минфина России от 02.12.2021 № 205н «Об утверждении Порядка формирования идентификатора государственного контракта, договора (соглашения) при казначейском сопровождении средств» — <a href="https://minfin.gov.ru/ru/document/?id_4=135052" target="_blank" rel="noopener">minfin.gov.ru</a></li>
        <li id="ref-2">Приказ Минфина России от 02.12.2021 № 205н (с изменениями и дополнениями) — <a href="https://base.garant.ru/403325114/" target="_blank" rel="noopener">base.garant.ru</a></li>
        <li>Совместный приказ Министра обороны РФ № 475 и Федерального казначейства № 13н от 11.08.2015 (порядок формирования идентификатора государственного контракта по гособоронзаказу) — <a href="https://base.garant.ru/71169728/" target="_blank" rel="noopener">base.garant.ru</a></li>
        <li id="ref-3">Бюджетный кодекс РФ, глава 24.4 «Казначейское сопровождение» — <a href="https://www.consultant.ru/document/cons_doc_LAW_19702/" target="_blank" rel="noopener">consultant.ru</a></li>
      </ol>
      <p class="refs__note">Материал носит справочный характер и не заменяет индивидуальную консультацию; актуальные структура и порядок формирования ИГК устанавливаются НПА и могут уточняться. Названия полей в 1С зависят от версии конфигурации. Проверено экспертом КазнаЭксперт. Дата актуализации — 4 августа 2026.</p>
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
    <form class="railform" id="leadForm" novalidate data-endpoint="/php/lead.php" data-source="identifikator-gosudarstvennogo-kontrakta-igk">
      <div class="railform__badge">Экспертный анализ контракта</div>
      <h3 class="railform__title">Проверим ИГК и проведём платежи</h3>
      <p class="railform__sub">Идентификатор, назначение платежа, санкционирование — под ключ. Цена — после анализа контракта.</p>
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
    <a class="card reveal" href="/baza-znaniy/chto-takoe-kaznacheyskoe-soprovozhdenie/"><div class="card__cover"><span>Основы казначейского сопровождения</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Казначейское сопровождение: что это и как работает в 2026</h3><div class="card__meta">Основы · 18 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/svedeniya-ob-operaciyah-s-celevymi-sredstvami/"><div class="card__cover"><span>Сведения</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Сведения об операциях с целевыми средствами</h3><div class="card__meta">Операции · 15 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/prichiny-otkaza-kaznacheystva-v-sankcionirovanii/"><div class="card__cover"><span>Отказы</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Причины отказа казначейства в санкционировании</h3><div class="card__meta">Санкционирование · 14 мин</div></div></a>
    <!-- auto-related:soispolniteli-kooperaciya-goz --><a class="card reveal" href="/baza-znaniy/soispolniteli-kooperaciya-goz/"><div class="card__cover"><span>Кооперация</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Соисполнители и кооперация в ГОЗ</h3><div class="card__meta">ГОЗ · 16 мин</div></div></a>
    <!-- auto-related:igk-v-schete-fakture-i-upd --><a class="card reveal" href="/baza-znaniy/igk-v-schete-fakture-i-upd/"><div class="card__cover"><span>ИГК</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">ИГК в счёте-фактуре, счёте и УПД</h3><div class="card__meta">Операции · 16 мин</div></div></a>
    <!-- auto-related:reestr-kontraktov-eis-44-fz --><a class="card reveal" href="/baza-znaniy/reestr-kontraktov-eis-44-fz/"><div class="card__cover"><span>Реестр</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Реестр контрактов в ЕИС по 44-ФЗ: что это и сроки</h3><div class="card__meta">Основы · 13 мин</div></div></a>
    <!-- auto-related:identifikacionnyy-kod-zakupki-ikz --><a class="card reveal" href="/baza-znaniy/identifikacionnyy-kod-zakupki-ikz/"><div class="card__cover"><span>ИКЗ</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Идентификационный код закупки (ИКЗ) по 44-ФЗ</h3><div class="card__meta">Операции · 13 мин</div></div></a>
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

<section class="kz-sub" aria-labelledby="kzSubTitle" data-source="identifikator-gosudarstvennogo-kontrakta-igk">
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
<link rel="stylesheet" href="/assets/svc-cta.css?v=<?= @filemtime($_SERVER['DOCUMENT_ROOT'].'/assets/svc-cta.css') ?>">
<link rel="stylesheet" href="/assets/kg-lead.css?v=<?= @filemtime($_SERVER['DOCUMENT_ROOT'].'/assets/kg-lead.css') ?>"><script src="/assets/kg-lead.js?v=<?= @filemtime($_SERVER['DOCUMENT_ROOT'].'/assets/kg-lead.js') ?>" defer></script>
</body>
</html>
