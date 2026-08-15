<?php /* Cache-Control задаёт .htaccess — единая точка правды для кэш-заголовков */ ?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ЕКС в реквизитах: что это значит — единый казначейский счёт</title>
<meta name="description" content="ЕКС в реквизитах банка — что это значит: единый казначейский счёт (40102) в поле 15 платёжки, казначейский счёт (03) в поле 17. Какой счёт указывать.">
<meta name="author" content="Ярослав Михайлов">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1">
<meta name="theme-color" content="#F4F1EB" media="(prefers-color-scheme: light)">
<meta name="theme-color" content="#141310" media="(prefers-color-scheme: dark)">
<!-- PROD: canonical и og:url ОБЯЗАТЕЛЬНО менять под URL каждой статьи -->
<link rel="canonical" href="https://kaznaexpert.ru/baza-znaniy/edinyy-kaznacheyskiy-schet/">
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
<script>window.YM_PARAMS = {page_type:"cluster", cluster:"schet"};</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "Единый казначейский счёт (ЕКС): что это, реквизиты и как указать в платёжке",
  "description": "Единый казначейский счёт: банковский счёт ФК в Банке России на балансовом счёте 40102, связка с казначейскими счетами 03, поля 15 и 17 платёжного поручения, частые ошибки.",
  "inLanguage": "ru-RU",
  "datePublished": "2026-06-11",
  "dateModified": "2026-08-11",
  "author": {
    "@type": "Person",
    "name": "Ярослав Михайлов",
    "jobTitle": "Главный эксперт по казначейскому сопровождению",
    "url": "https://kaznaexpert.ru/komanda/mihailov-yaroslav/",
    "@id": "https://kaznaexpert.ru/komanda/mihailov-yaroslav/#person"
  },
  "publisher": {
    "@type": "Organization",
    "name": "КазнаЭксперт",
    "url": "https://kaznaexpert.ru",
    "logo": {
      "@type": "ImageObject",
      "url": "https://kaznaexpert.ru/img/logogold.png"
    },
    "@id": "https://kaznaexpert.ru/#organization"
  },
  "image": "https://kaznaexpert.ru/img/og-image.png",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://kaznaexpert.ru/baza-znaniy/edinyy-kaznacheyskiy-schet/"
  },
  "citation": [
    "https://www.consultant.ru/document/cons_doc_LAW_19702/2e0d2b0f64b3ff765b8d3f4adc70ec3061c79c7f/",
    "https://www.cbr.ru/explan/eks/",
    "http://www.consultant.ru/document/cons_doc_LAW_352105/",
    "https://roskazna.gov.ru/dokumenty/sistemakaznacheyskikh-platezhey/",
    "https://roskazna.gov.ru/dokumenty/sistemakaznacheyskikh-platezhey/kaznacheyskie-scheta/"
  ]
}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "Главная", "item": "https://kaznaexpert.ru/"}, {"@type": "ListItem", "position": 2, "name": "База знаний", "item": "https://kaznaexpert.ru/baza-znaniy/"}, {"@type": "ListItem", "position": 3, "name": "Единый казначейский счёт (ЕКС)", "item": "https://kaznaexpert.ru/baza-znaniy/edinyy-kaznacheyskiy-schet/"}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [{"@type": "Question", "name": "Что такое ЕКС в реквизитах счёта?", "acceptedAnswer": {"@type": "Answer", "text": "ЕКС в реквизитах — это единый казначейский счёт Федерального казначейства в Банке России (начинается на 40102). Его указывают как счёт банка получателя (поле 15) при платежах в бюджет и по госконтрактам, а казначейский счёт получателя, начинающийся с 03, — в поле 17."}}, {"@type": "Question", "name": "Что такое единый казначейский счёт простыми словами?", "acceptedAnswer": {"@type": "Answer", "text": "Это «общий кошелёк» бюджетной системы — банковский счёт Федерального казначейства в Банке России, начинающийся с 40102. На нём лежат деньги федерального бюджета, регионов, муниципалитетов и других участников системы казначейских платежей."}}, {"@type": "Question", "name": "ЕКС — это счёт получателя или счёт банка получателя?", "acceptedAnswer": {"@type": "Answer", "text": "Счёт банка получателя. В платёжном поручении номер 40102 указывается в поле 15, а в поле 17 «Счёт получателя» ставится казначейский счёт, начинающийся с 03."}}, {"@type": "Question", "name": "Почему казначейский счёт начинается с 03, а не с 40?", "acceptedAnswer": {"@type": "Answer", "text": "Казначейские счета открываются не в банке, а в Федеральном казначействе, поэтому имеют собственную нумерацию по приказу ФК № 15н: 20 знаков, первая цифра 0, первые пять знаков кодируют вид средств."}}, {"@type": "Question", "name": "Где взять реквизиты ЕКС своего региона?", "acceptedAnswer": {"@type": "Answer", "text": "На сайте управления Федерального казначейства по вашему субъекту или в сводном разделе «Система казначейских платежей / Казначейские счета» на roskazna.gov.ru. Для платежей по контракту реквизиты даёт получатель."}}, {"@type": "Question", "name": "Может ли у организации быть свой ЕКС?", "acceptedAnswer": {"@type": "Answer", "text": "Нет. ЕКС открывается только Федеральному казначейству и его территориальным органам. Организации при работе с казначейством открывают лицевые счета в ТОФК."}}, {"@type": "Question", "name": "Что будет, если указать 40102 в поле 17?", "acceptedAnswer": {"@type": "Answer", "text": "Банк, скорее всего, отклонит платёж на форматном контроле; если платёж пройдёт, средства попадут в невыясненные поступления, и их придётся уточнять отдельным обращением. Правильно: 40102 — в поле 15, казначейский счёт 03 — в поле 17."}}, {"@type": "Question", "name": "Можно ли арестовать деньги на ЕКС?", "acceptedAnswer": {"@type": "Answer", "text": "Нет. Статья 242.12 БК РФ прямо запрещает обращение взыскания на денежные средства единого казначейского счёта. Взыскание с конкретного должника — участника бюджетного процесса проводится по специальным процедурам бюджетного законодательства."}}, {"@type": "Question", "name": "Зачем государству единый счёт?", "acceptedAnswer": {"@type": "Answer", "text": "Концентрация средств даёт контроль и доход: казначейство видит все деньги бюджетной системы в режиме реального времени и размещает временно свободные остатки (депозиты, репо), а проценты зачисляются в бюджет (ст. 242.13 БК РФ)."}}, {"@type": "Question", "name": "Как ЕКС связан с казначейским сопровождением?", "acceptedAnswer": {"@type": "Answer", "text": "Платежи участнику казначейского сопровождения идут через ЕКС на казначейский счёт, а внутри казначейства отражаются на лицевом счёте 71 подрядчика. В назначении платежа обязательно указывают номер лицевого счёта и ИГК."}}, {"@type": "Question", "name": "Сколько ЕКС существует?", "acceptedAnswer": {"@type": "Answer", "text": "Единых казначейских счетов несколько: они открыты территориальным органам ФК в подразделениях Банка России, к одному БИК ТОФК может быть открыто несколько счетов 40102. Но логически они образуют единый казначейский счёт бюджетной системы."}}, {"@type": "Question", "name": "Изменились ли реквизиты ЕКС в 2026 году?", "acceptedAnswer": {"@type": "Answer", "text": "Сама конструкция (40102 + казначейские счета 03) не менялась с 2021 года. Точечные уточнения реквизитов по регионам и видам платежей случаются, поэтому перед платежом сверяйте реквизиты с актуальным справочником казначейства или данными получателя."}}, {"@type": "Question", "name": "Единый казначейский счёт — это расчётный счёт?", "acceptedAnswer": {"@type": "Answer", "text": "Нет. Единый казначейский счёт — счёт Федерального казначейства в Банке России, его номер начинается на 40102 и в платёжном поручении он указывается как счёт банка получателя. Расчётный счёт организации открывается в банке по договору банковского счёта."}}, {"@type": "Question", "name": "Единый казначейский счёт — это корреспондентский счёт?", "acceptedAnswer": {"@type": "Answer", "text": "Нет, хотя в платёжном документе он занимает то же поле, что раньше занимал корреспондентский счёт органа казначейства. Корреспондентский счёт принадлежит кредитной организации, а единый казначейский счёт — Федеральному казначейству."}}, {"@type": "Question", "name": "Чем единый казначейский счёт отличается от казначейского счёта получателя?", "acceptedAnswer": {"@type": "Answer", "text": "Единый казначейский счёт один на всю систему и указывается как счёт банка получателя. Казначейский счёт получателя — это счёт конкретного участника системы казначейских платежей, он указывается в поле счёта получателя."}}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "HowTo", "name": "Как указать единый казначейский счёт в платёжном поручении", "inLanguage": "ru-RU", "step": [
{"@type": "HowToStep", "position": 1, "name": "Взять реквизиты из первоисточника", "text": "Получить актуальные реквизиты у получателя платежа, ТОФК или из справочника казначейских счетов на roskazna.gov.ru."},
{"@type": "HowToStep", "position": 2, "name": "Заполнить блок банка получателя", "text": "Поле 13 — банк получателя, поле 14 — БИК ТОФК, поле 15 — единый казначейский счёт, начинающийся с 40102."},
{"@type": "HowToStep", "position": 3, "name": "Заполнить счёт получателя", "text": "Поле 17 — казначейский счёт: 20 знаков, первая цифра 0."},
{"@type": "HowToStep", "position": 4, "name": "Указать аналитику в назначении", "text": "Для платежей при казначейском сопровождении добавить номер лицевого счёта и ИГК в назначение платежа."},
{"@type": "HowToStep", "position": 5, "name": "Сверить пару полей 15 и 17", "text": "Проверить, что ЕКС и казначейский счёт относятся к одному ТОФК и согласованы между собой."}
]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "DefinedTermSet", "name": "Глоссарий: единый казначейский счёт", "inLanguage": "ru-RU", "hasDefinedTerm": [
{"@type": "DefinedTerm", "name": "ЕКС", "description": "Единый казначейский счёт — банковский счёт Федерального казначейства в Банке России (40102), на котором аккумулируются средства бюджетной системы."},
{"@type": "DefinedTerm", "name": "Система казначейских платежей", "description": "Совокупность участников и оператора (ФК), проводящих казначейские платежи по правилам главы 24.2 БК РФ."},
{"@type": "DefinedTerm", "name": "Казначейский счёт", "description": "Счёт в Федеральном казначействе для операций с определённым видом средств; 20 знаков, начинается с 03."},
{"@type": "DefinedTerm", "name": "UTRA", "description": "Признак единого казначейского счёта в справочнике БИК Банка России."}
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
<meta property="og:title" content="ЕКС в реквизитах: что это значит и какой счёт указывать">
<meta property="og:description" content="ЕКС в реквизитах банка — что это значит: единый казначейский счёт (40102) в поле 15 платёжки, казначейский счёт (03) в поле 17. Какой счёт указывать.">
<meta property="og:url" content="https://kaznaexpert.ru/baza-znaniy/edinyy-kaznacheyskiy-schet/">
<meta property="og:image" content="https://kaznaexpert.ru/img/og-image.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="Единый казначейский счёт (ЕКС): что это и реквизиты в платёжке — КазнаЭксперт">
<meta property="article:published_time" content="2026-06-11T09:00:00+03:00">
<meta property="article:modified_time" content="2026-06-11T09:00:00+03:00">
<meta property="article:author" content="https://kaznaexpert.ru/komanda/mihailov-yaroslav/">
<meta property="article:section" content="База знаний">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="ЕКС в реквизитах: что это значит и какой счёт указывать">
<meta name="twitter:description" content="ЕКС в реквизитах банка — что это значит: единый казначейский счёт (40102) в поле 15 платёжки, казначейский счёт (03) в поле 17. Какой счёт указывать.">
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
  <nav class="crumbs" aria-label="Хлебные крошки"><a href="/">Главная</a> › <a href="/baza-znaniy/">База знаний</a> › Единый казначейский счёт (ЕКС)</nav>

  <aside class="toc" aria-label="Содержание">
    <div class="toc__label">Содержание</div>
    <ul class="toc__list" id="tocList">
      <li><a href="#chto-takoe">Что такое ЕКС</a></li>
      <li><a href="#pravovaya">Правовая база</a></li>
      <li><a href="#skp">Система казначейских платежей</a></li>
      <li><a href="#raznica">ЕКС, казначейский и лицевой счёт</a></li>
      <li><a href="#rekvizity">Номер 40102 и структура счетов</a></li>
      <li><a href="#platezhka">Как заполнить платёжку</a></li>
      <li><a href="#oshibki">Частые ошибки</a></li>
      <li><a href="#ne-raschetnyy">ЕКС — это расчётный счёт?</a></li>
      <li><a href="#ostatki">Управление остатками и новации</a></li>
      <li><a href="#svyaz-ks">ЕКС и казначейское сопровождение</a></li>
      <li><a href="#keys">Пример из практики</a></li>
      <li><a href="#glossary">Глоссарий</a></li>
      <li><a href="#faq">Частые вопросы</a></li>
    </ul>
  </aside>

  <article class="content" id="main">
    <div class="hero">
      <img class="hero__crest hero__crest--light" src="/img/logogold-crest.webp" alt="" aria-hidden="true" width="188" height="137" decoding="async" loading="lazy">
      <img class="hero__crest hero__crest--dark" src="/img/LogoWhite.png" alt="" aria-hidden="true" width="188" height="137" decoding="async" loading="lazy">
      <div class="eyebrow">База знаний · Счета в казначействе <span class="fresh">Актуально на август 2026</span></div>
    <h1>Единый казначейский счёт (ЕКС): что это, реквизиты и как указать в платёжке</h1>
    <div class="byline"><span class="av">ЯМ</span><span>Автор: <a href="/komanda/mihailov-yaroslav/">Ярослав Михайлов</a>, главный эксперт</span><span class="dot">·</span><span>15+ лет в Казначействе</span><span class="dot">·</span><span>15 мин чтения</span><span class="dot">·</span><span>Обновлено 11 августа 2026 · учтён приказ Казначейства России от 16.02.2026 № 2н, изменивший Правила системы казначейских платежей</span></div>
    </div>

    <div class="share">
      <span class="share__label">Поделиться:</span>
      <a href="https://t.me/share/url?url=https%3A%2F%2Fkaznaexpert.ru%2Fbaza-znaniy%2Fedinyy-kaznacheyskiy-schet%2F&amp;text=%D0%95%D0%B4%D0%B8%D0%BD%D1%8B%D0%B9%20%D0%BA%D0%B0%D0%B7%D0%BD%D0%B0%D1%87%D0%B5%D0%B9%D1%81%D0%BA%D0%B8%D0%B9%20%D1%81%D1%87%D1%91%D1%82%3A%20%D1%87%D1%82%D0%BE%20%D1%8D%D1%82%D0%BE%2C%20%D1%80%D0%B5%D0%BA%D0%B2%D0%B8%D0%B7%D0%B8%D1%82%D1%8B%2040102%20%D0%B8%20%D0%BF%D1%80%D0%B0%D0%B2%D0%B8%D0%BB%D0%B0%20%D0%B7%D0%B0%D0%BF%D0%BE%D0%BB%D0%BD%D0%B5%D0%BD%D0%B8%D1%8F%20%D0%BF%D0%BB%D0%B0%D1%82%D1%91%D0%B6%D0%BA%D0%B8" target="_blank" rel="noopener"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.56 8.25l-1.86 8.76c-.14.62-.5.77-1.02.48l-2.82-2.08-1.36 1.31c-.15.15-.28.28-.57.28l.2-2.89 5.27-4.76c.23-.2-.05-.32-.35-.12l-6.51 4.1-2.8-.88c-.61-.19-.62-.61.13-.9l10.95-4.22c.5-.18.95.12.79.85z"/></svg>Telegram</a>
      <button type="button" id="copyLink"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.07 0l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.07 0l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg><span>Копировать ссылку</span></button>
      <button type="button" id="printBtn"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9V2h12v7M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2M6 14h12v8H6z"/></svg>Скачать PDF</button>
    </div>

    <details><summary>ЕКС и ЕНС — это одно и то же?</summary><p>Нет. ЕКС — единый казначейский счёт Федерального казначейства в Банке России (40102) для средств бюджетной системы. ЕНС — единый налоговый счёт налогоплательщика в ФНС. Налоговые платежи зачисляются через ЕКС, но учитываются на вашем ЕНС.</p></details>
      <details><summary>Что такое «счёт ФНС» в платёжке?</summary><p>Отдельного банковского счёта у ФНС нет: получатель «Казначейство России (ФНС России)» означает, что платёж идёт на единый казначейский счёт, открытый УФК по Тульской области, а налоговая учитывает его на вашем едином налоговом счёте.</p></details>
      <details class="mtoc"><summary>Содержание статьи</summary>
      <ol>
        <li><a href="#chto-takoe">Что такое ЕКС</a></li><li><a href="#pravovaya">Правовая база</a></li><li><a href="#skp">Система казначейских платежей</a></li><li><a href="#raznica">ЕКС, казначейский и лицевой счёт</a></li><li><a href="#rekvizity">Номер 40102 и структура счетов</a></li><li><a href="#platezhka">Как заполнить платёжку</a></li><li><a href="#oshibki">Частые ошибки</a></li><li><a href="#ne-raschetnyy">ЕКС — это расчётный счёт?</a></li><li><a href="#ostatki">Управление остатками и новации</a></li><li><a href="#svyaz-ks">ЕКС и казначейское сопровождение</a></li><li><a href="#keys">Пример из практики</a></li><li><a href="#glossary">Глоссарий</a></li><li><a href="#faq">Частые вопросы</a></li>
      </ol>
    </details>

    <div class="tldr">Единый казначейский счёт (ЕКС) — это банковский счёт Федерального казначейства в Банке России на балансовом счёте 40102, на котором аккумулируются средства всей бюджетной системы. В платёжном поручении ЕКС указывают в поле 15 «Счёт банка получателя», а в поле 17 — казначейский счёт, начинающийся с 03.<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a></div>

    <section class="keyfacts grain" aria-label="Ключевые факты">
      <h2>Коротко о главном</h2>
      <div class="keyfacts__grid">
        <div class="kf"><div class="kf__n">40102</div><div class="kf__t"><b>Балансовый счёт</b> ЕКС в Банке России</div></div>
        <div class="kf"><div class="kf__n">гл. 24.2</div><div class="kf__t"><b>Основа</b> — БК РФ, введена 479-ФЗ от 27.12.2019</div></div>
        <div class="kf"><div class="kf__n">01.01.2021</div><div class="kf__t"><b>Старт</b> — переход на систему казначейских платежей</div></div>
        <div class="kf"><div class="kf__n">поле 15</div><div class="kf__t"><b>В платёжке</b> — ЕКС идёт как счёт банка получателя</div></div>
        <div class="kf"><div class="kf__n">03…</div><div class="kf__t"><b>Поле 17</b> — казначейский счёт получателя, 20 знаков с нуля</div></div>
        <div class="kf"><div class="kf__n">запрет</div><div class="kf__t"><b>Взыскание</b> на средства ЕКС не допускается (ст. 242.12 БК)</div></div>
      </div>
    </section>

    <h2 id="chto-takoe">Что такое единый казначейский счёт</h2>
    <div class="answer reveal">
      <p class="lead-p">Единый казначейский счёт — это банковский счёт, открытый Федеральному казначейству в Банке России на балансовом счёте № 40102. На нём концентрируются денежные средства федерального бюджета, бюджетов регионов и муниципалитетов, внебюджетных фондов и всех остальных участников системы казначейских платежей. Понятие и правила работы ЕКС закреплены в главе 24.2 Бюджетного кодекса, введённой Федеральным законом от 27.12.2019 № 479-ФЗ.<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a></p>
      <p>Если упростить: государство собрало деньги всей бюджетной системы «в один кошелёк» в Банке России. До 2021 года у органов казначейства были тысячи разрозненных банковских счетов — по каждому бюджету и виду средств. С 1 января 2021 года эти счета закрыты, а вместо них работает связка «ЕКС + казначейские счета»: банковский счёт 40102 в Банке России — снаружи, и казначейские счета, начинающиеся с 03, — внутри казначейства.<a class="fn" href="#ref-2" aria-label="Источник 2">[2]</a></p>
    </div>
    <p>Для бизнеса ЕКС — это прежде всего реквизит в платёжных поручениях. Любой платёж в бюджет или участнику казначейского сопровождения проходит через эту конструкцию, и большинство ошибок в платёжках связано именно с путаницей между ЕКС и казначейским счётом. Ниже разберём, как устроена система, чем счета отличаются друг от друга и как заполнять поля 15 и 17 без возвратов.</p>

    <h2 id="v-rekvizitah">Что такое ЕКС в реквизитах счёта</h2>
    <div class="answer reveal"><p>Когда вы видите <b>ЕКС в реквизитах</b> счёта, речь идёт о едином казначейском счёте — счёте Федерального казначейства в Банке России (начинается на 40102). В реквизитах для оплаты в бюджет или по госконтракту ЕКС указывают как «счёт банка получателя» (поле 15 платёжного поручения), а номер <a href="/baza-znaniy/kaznacheyskiy-schet/">казначейского счёта</a> получателя, начинающийся с 03, — в поле 17. То есть ЕКС в реквизитах — это не ваш счёт и не счёт организации, а счёт казначейства, через который проходит платёж.</p></div>
    <p>Проще говоря, в строке реквизитов ЕКС отвечает на вопрос «в каком банке и на каком счёте банка получателя», а казначейский счёт (03…) — «на какой счёт получателя». Их всегда указывают в паре, и ошибка в любом из полей приводит к возврату платежа. Актуальные реквизиты берут из официального источника — например, на странице вашего <a href="/baza-znaniy/tofk/">территориального органа казначейства (ТОФК)</a>.</p>
    <h2 id="pravovaya">Правовая база: на чём держится ЕКС</h2>
    <p>Единый казначейский счёт регулируется нормами нескольких уровней — от Бюджетного кодекса до порядков Банка России. Все ключевые документы действуют в актуальных редакциях на июнь 2026 года.</p>
    <table>
      <caption>Нормативная база единого казначейского счёта</caption>
      <tr><th>Документ</th><th>Что устанавливает</th></tr>
      <tr><td>Глава 24.2 БК РФ (ст. 242.7–242.13-1), введена ФЗ от 27.12.2019 № 479-ФЗ</td><td>Система казначейских платежей, участники, казначейские платежи, основы функционирования ЕКС и управление остатками</td></tr>
      <tr><td>Ст. 242.12 БК РФ</td><td>Основы функционирования ЕКС: формирование средств, запрет взыскания, безотзывность перевода</td></tr>
      <tr><td>Приказ Казначейства России от 01.04.2020 № 15н (ред. от 28.12.2022)</td><td>Порядок открытия казначейских счетов, структура номера счёта, коды видов счетов</td></tr>
      <tr><td>Приказ Казначейства России от 14.05.2020 № 21н</td><td>Порядок казначейского обслуживания: формы и реквизиты распоряжений о совершении казначейских платежей</td></tr>
      <tr><td>Совместное письмо Минфина, ФК и Банка России от 29.07.2020 № 09-01-10/66747 / 04-45-7/5526 / 07-04-05/05-14880</td><td>Закрытие прежних банковских счетов органов казначейства при переходе на казначейское обслуживание</td></tr>
    </table>
    <div class="note"><b>Важно про даты.</b> Глава 24.2 БК РФ вступила в силу с 1 января 2021 года — с этой даты прежние счета органов казначейства (в том числе на балансовом счёте 40101) поэтапно закрыты, а платежи проводятся через ЕКС 40102 и казначейские счета 03. Если в ваших шаблонах платёжек до сих пор «зашиты» старые реквизиты — платёж не пройдёт.<a class="fn" href="#ref-2" aria-label="Источник 2">[2]</a></div>

    <h2 id="skp">Как устроена система казначейских платежей</h2>
    <p>ЕКС — ядро системы казначейских платежей (СКП), оператором которой является Федеральное казначейство. Логика системы похожа на банковскую: казначейство выступает «банком» для бюджетной системы, а его клиенты — участники СКП — держат в нём казначейские счета.<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a></p>
    <p>Участники системы определены статьёй 242.8 БК РФ и делятся на прямых и косвенных. Прямые участники — администраторы доходов, главные распорядители и получатели бюджетных средств, финансовые органы регионов и муниципалитетов, органы управления внебюджетными фондами. Косвенные — бюджетные и автономные учреждения и иные организации, в том числе юридические лица — участники казначейского сопровождения, которым открыты лицевые счета в казначействе.</p>
    <p>Денежные средства ЕКС формируются за счёт остатков на казначейских счетах участников (ст. 242.12 БК РФ). Распоряжения о переводе денег по банковским счетам, входящим в состав ЕКС, представляет само казначейство и его территориальные органы, а порядок приёма и исполнения этих распоряжений устанавливает Банк России. При этом к одному БИК территориального органа ФК может быть открыто несколько банковских счетов, входящих в состав ЕКС, — все в одном подразделении Банка России.<a class="fn" href="#ref-2" aria-label="Источник 2">[2]</a></p>

    <p>Что нового в правилах системы казначейских платежей. Правила организации и функционирования СКП утверждены приказом Казначейства России от 13.05.2020 № 20н; приказ Казначейства России от 16.02.2026 № 2н внёс в них изменения, учитывающие расчёты цифровым рублём, — новая редакция пункта 1.2 Правил применяется с 17 мая 2026 года. На реквизиты ЕКС и порядок заполнения платёжных поручений это не влияет: единый казначейский счёт и счета участников СКП работают как прежде, но при появлении операций с цифровым рублём смотреть нужно уже в актуальную редакцию Правил.</p>

    <h2 id="raznica">ЕКС, казначейский счёт и лицевой счёт: в чём разница</h2>
    <p>Три понятия, которые путают чаще всего. Они образуют трёхуровневую конструкцию, и у каждого уровня своя роль.</p>
    <table>
      <caption>Три уровня счетов в казначействе</caption>
      <tr><th>Счёт</th><th>Что это</th><th>Номер</th><th>Где открыт</th></tr>
      <tr><td>Единый казначейский счёт</td><td>Банковский счёт Федерального казначейства, «кошелёк» всей бюджетной системы</td><td>40102…</td><td>В Банке России</td></tr>
      <tr><td>Казначейский счёт</td><td>Счёт для операций с определённым видом средств, привязан к ЕКС</td><td>03…, 20 знаков</td><td>В Федеральном казначействе</td></tr>
      <tr><td>Лицевой счёт</td><td>Аналитический счёт конкретного клиента (например, лицевой счёт 71 участника казначейского сопровождения)</td><td>код типа + номер</td><td>В ТОФК, в разрезе казначейского счёта</td></tr>
    </table>
    <p>Иерархия простая: на ЕКС физически лежат деньги; казначейский счёт показывает, к какому виду средств они относятся (доходы бюджета, средства БУ/АУ, средства участников казначейского сопровождения); лицевой счёт — чьи именно это деньги. Подробно про второй и третий уровень мы разбирали в статьях <a href="/baza-znaniy/kaznacheyskiy-schet/">«Казначейский счёт: что это, виды и реквизиты»</a> и <a href="/baza-znaniy/licevoy-schet-71-kak-otkryt/">«Как открыть лицевой счёт 71 в ТОФК»</a>.</p>

    
    <h2 id="eks-i-ens">ЕКС, ЕНС и «счёт ФНС»: три разных понятия</h2>
    <div class="answer reveal"><p>ЕКС (единый казначейский счёт) и ЕНС (единый налоговый счёт) — разные вещи, хотя аббревиатуры похожи. ЕКС — счёт Федерального казначейства в Банке России (начинается с 40102), через который проходят средства бюджетной системы. ЕНС — учётная сумма налогоплательщика в ФНС, на которую зачисляется единый налоговый платёж. При этом сами налоговые платежи физически тоже идут через казначейство: получатель в платёжке — «Казначейство России (ФНС России)», а в реквизитах указан единый казначейский счёт УФК по Тульской области.</p></div>
    <p>Отсюда и путаница в запросах «счёт ФНС», «государственный счёт», «счёт федерального казначейства»: в налоговой платёжке люди видят одновременно ФНС как получателя, казначейство как банк-посредник и номер 40102 — тот самый ЕКС. Правильная картина такая: государственного «счёта ФНС» как отдельного банковского счёта налоговой не существует — деньги налогоплательщиков зачисляются на единый казначейский счёт, а ФНС ведёт их учёт на вашем ЕНС.</p>
    <p>Аббревиатуру иногда пишут раздельно — «е к с» — или разворачивают как «единый счёт казначейства»: во всех случаях речь об одном и том же счёте 40102 Федерального казначейства. Для исполнителя госконтракта практическое правило простое: в реквизитах контракта и лицевого счёта ЕКС — обязательный элемент связки «БИК ТОФК + ЕКС + номер казначейского счёта», а к вашему налоговому ЕНС эта связка отношения не имеет.</p>

    <h2 id="rekvizity">Номер 40102 и структура казначейских счетов</h2>
    <p>Единые казначейские счета открыты территориальным органам Федерального казначейства на балансовом счёте второго порядка № 40102 «Единый казначейский счет». В справочнике БИК Банка России такие счета помечены признаком UTRA (Unified Treasury Account). Реквизиты ЕКС своего региона публикует управление ФК по субъекту; сводная информация размещается на сайте Казначейства России в разделе «Система казначейских платежей / Казначейские счета».<a class="fn" href="#ref-2" aria-label="Источник 2">[2]</a></p>
    <p>Казначейский счёт состоит из 20 знаков и всегда начинается с нуля — это формальный признак, по которому банки проверяют корректность реквизитов. Первые пять знаков задают вид счёта. Перечень кодов установлен приказом ФК № 15н; наиболее распространённые значения приводил Банк России в разъяснениях о переходе на ЕКС.<a class="fn" href="#ref-3" aria-label="Источник 3">[3]</a></p>
    <table>
      <caption>Первые пять знаков казначейского счёта (примеры)</caption>
      <tr><th>Начало номера</th><th>Вид средств</th></tr>
      <tr><td>03100</td><td>Доходы, распределяемые органами ФК между бюджетами (налоги, сборы, пошлины)</td></tr>
      <tr><td>03212</td><td>Средства федеральных бюджетных учреждений</td></tr>
      <tr><td>03214 / 03224 / 03234</td><td>Средства во временном распоряжении (федеральный / региональный / местный уровень)</td></tr>
      <tr><td>03222 / 03232</td><td>Средства бюджетных учреждений субъекта РФ / муниципальных</td></tr>
      <tr><td>03242 / 03252 / 03262 / 03272</td><td>Средства автономных учреждений и иных организаций соответствующего уровня</td></tr>
    </table>
    <div class="note"><b>Нюанс, о котором забывают.</b> Номер казначейского счёта «ключуется» к ЕКС по тем же принципам, по которым обычный расчётный счёт ключуется к корреспондентскому. Поэтому пара «ЕКС в поле 15 + казначейский счёт в поле 17» должна быть согласованной: чужой казначейский счёт с «не своим» ЕКС банк может не пропустить, а казначейство отразит средства как невыясненные.<a class="fn" href="#ref-2" aria-label="Источник 2">[2]</a></div>

    <h2 id="platezhka">Как указать ЕКС в платёжном поручении: пошагово</h2>
    <p>Главное правило с 2021 года: ЕКС — не счёт получателя, а счёт банка получателя. Алгоритм заполнения платёжки выглядит так.</p>
    <h3>Шаг 1. Возьмите реквизиты из первоисточника</h3>
    <p>Реквизиты для платежей публикует получатель: налоговая — для ЕНП, ТОФК — для операций по лицевым счетам, заказчик — в контракте. Не используйте реквизиты из старых платёжек «по образцу» — после перехода на ЕКС и последующих уточнений они могли измениться.</p>
    <h3>Шаг 2. Заполните блок банка получателя</h3>
    <p>В поле 13 «Банк получателя» указывается наименование банка-получателя — подразделение Банка России и через двойной слеш наименование органа ФК, в поле 14 — БИК территориального органа казначейства. В поле 15 «Счёт банка получателя» вносится номер ЕКС, начинающийся с 40102.<a class="fn" href="#ref-2" aria-label="Источник 2">[2]</a></p>
    <h3>Шаг 3. Заполните счёт получателя</h3>
    <p>В поле 17 «Счёт получателя» указывается казначейский счёт — 20 знаков, первая цифра 0. Именно сюда чаще всего по старой памяти пытаются вписать счёт 40102 — это ошибка.</p>
    <h3>Шаг 4. Укажите назначение платежа с аналитикой</h3>
    <p>Для платежей участникам казначейского сопровождения в назначении дополнительно указывают номер лицевого счёта и ИГК — без них казначейство не сможет привязать деньги к контракту. Как это делать правильно, разбирали в статье про <a href="/baza-znaniy/rasporyazhenie-o-sovershenii-kaznacheyskogo-platezha/">распоряжение о совершении казначейского платежа</a>.</p>
    <h3>Шаг 5. Сверьте пару «15 ↔ 17» перед отправкой</h3>
    <p>Проверьте, что ЕКС и казначейский счёт относятся к одному ТОФК (по БИК) и что номер в поле 17 начинается с правильных пяти цифр для вашего вида платежа. Эта сверка занимает минуту и снимает основную массу возвратов.</p>

    <h2 id="oshibki">Частые ошибки в платёжках с ЕКС</h2>
    <table>
      <caption>Типовые ошибки и их последствия</caption>
      <tr><th>Ошибка</th><th>Что происходит</th><th>Как исправить</th></tr>
      <tr><td>Счёт 40102 указан в поле 17 как счёт получателя</td><td>Банк отклоняет платёж или средства попадают в невыясненные</td><td>Перенести 40102 в поле 15, в поле 17 — казначейский счёт 03…</td></tr>
      <tr><td>Перепутаны ЕКС разных регионов</td><td>Средства зачисляются «до выяснения принадлежности»</td><td>Сверить БИК ТОФК и ЕКС по справочнику на сайте казначейства</td></tr>
      <tr><td>Использованы реквизиты, действовавшие до 2021 года (40101 и пр.)</td><td>Платёж не проходит — счета закрыты</td><td>Запросить актуальные реквизиты у получателя или ТОФК</td></tr>
      <tr><td>Нет лицевого счёта/ИГК в назначении платежа при казначейском сопровождении</td><td>Казначейство не может идентифицировать получателя, возможен возврат</td><td>Указать номер лицевого счёта и ИГК в назначении</td></tr>
      <tr><td>Казначейский счёт набран с ошибкой (19 знаков, без ведущего нуля)</td><td>Не проходит форматный контроль банка</td><td>Проверить: 20 цифр, первая — 0</td></tr>
    </table>

    <h2 id="ne-raschetnyy">ЕКС — это расчётный счёт?</h2>
    <p>Нет. Частый вопрос в поисковых запросах — «единый казначейский счёт это расчётный счёт?» — имеет короткий ответ: это банковский счёт Федерального казначейства, а не расчётный счёт организации. У вашей компании не может быть «своего ЕКС»: бизнесу при казначейском сопровождении открывается лицевой счёт в ТОФК, который работает поверх казначейского счёта и ЕКС.</p>
    <p>У этой конструкции есть два важных юридических свойства, закреплённых в ст. 242.12 БК РФ. Первое — на денежные средства ЕКС не допускается обращение взыскания: арестовать или списать деньги «с ЕКС» по исполнительному листу нельзя, взыскание обращается по специальным правилам на средства конкретного должника. Второе — безотзывность: перевод на ЕКС становится безотзывным с момента представления плательщиком распоряжения в банк при достаточности средств.<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a></p>

    <h2 id="ostatki">Управление остатками и новации главы 24.2</h2>
    <p>Концентрация денег на одном счёте — не только про контроль, но и про доходность. Статья 242.13 БК РФ позволяет Федеральному казначейству управлять остатками средств на ЕКС: размещать временно свободные средства на банковских депозитах, по договорам репо и в другие инструменты. Проценты от размещения — доход бюджета. Для участников системы это незаметно: ликвидность для текущих платежей поддерживается ежедневным прогнозированием движения средств.<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a></p>
    <p>Глава 24.2 продолжает развиваться. В неё добавлены статья 242.11-1 об особенностях использования счёта цифрового рубля Федерального казначейства — бюджетная система готова проводить отдельные операции в цифровых рублях, и статья 242.13-1 о казначейском мониторинге — наблюдении за операциями участников системы казначейских платежей. Обе нормы действуют и отражают общий вектор: платежи бюджета становятся прозрачнее и контролируемее.<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a></p>

    <h2 id="svyaz-ks">ЕКС и казначейское сопровождение: что это значит для подрядчика</h2>
    <p>Если ваш контракт попал под <a href="/baza-znaniy/chto-takoe-kaznacheyskoe-soprovozhdenie/">казначейское сопровождение</a>, вся цепочка счетов выглядит так: заказчик платит на казначейский счёт (поле 17) через ЕКС (поле 15), а внутри казначейства деньги отражаются на вашем лицевом счёте 71 в разрезе ИГК. Снять их на расчётный счёт нельзя — каждый платёж проходит санкционирование в ТОФК.</p>
    <p>Практический вывод: подрядчику важно не только правильно открыть лицевой счёт, но и давать контрагентам корректные «внешние» реквизиты — ЕКС и казначейский счёт своего региона плюс номер лицевого счёта в назначении платежа. Реквизиты везде разные: у каждого управления ФК свой БИК и свой ЕКС, поэтому при работе с несколькими регионами сверяйте реквизиты по справочнику казначейства или через <a href="/baza-znaniy/tofk/">справочник ТОФК</a>.</p>
    <p>Если казначейство вернуло платёж или деньги зависли как невыясненные — это решаемо: уточнение реквизитов делается отдельным обращением, без повторного перевода. Как именно — зависит от вида платежа; в сложных случаях быстрее показать платёжку эксперту, чем переписываться с ТОФК вслепую.</p>

    <h2 id="keys">Пример из практики</h2>
    <div class="answer reveal">
      <p>Типовая ситуация: субподрядчик впервые получает оплату по контракту с казначейским сопровождением. Бухгалтерия заказчика берёт реквизиты «как для обычного поставщика»: в поле 17 ставит номер, начинающийся с 40102, а казначейский счёт не указывает вовсе. Банк платёж пропускает не всегда; если пропустил — деньги попадают в невыясненные поступления, и подрядчик ждёт оплату неделями. Решение стандартное: переделать платёжку — ЕКС в поле 15, казначейский счёт 03 в поле 17, в назначении — лицевой счёт и ИГК, а по зависшей сумме направить в ТОФК обращение об уточнении. После этого деньги доходят за один-два рабочих дня. Это обобщённый пример: конкретные сроки зависят от региона и вида платежа.</p>
    </div>

    <p data-ctx="auto-ctx:sistema-kaznacheyskih-platezhey">Единый казначейский счёт — лишь «хранилище» средств; распределяет их между участниками и проводит операции <a href="/baza-znaniy/sistema-kaznacheyskih-platezhey/">система казначейских платежей</a> (глава 24.2 Бюджетного кодекса).</p>
    <div class="takeaways">
      <h2>Что важно запомнить</h2>
      <ol>
        <li>ЕКС — банковский счёт Федерального казначейства в Банке России на балансовом счёте 40102; «своего ЕКС» у организации быть не может.</li>
        <li>С 1 января 2021 года прежние счета органов казначейства закрыты — работает связка «ЕКС + казначейские счета 03».</li>
        <li>В платёжке ЕКС указывают в поле 15 «Счёт банка получателя», казначейский счёт — в поле 17; путать их нельзя.</li>
        <li>Казначейский счёт — всегда 20 знаков и начинается с 0; первые пять цифр показывают вид средств.</li>
        <li>На средства ЕКС не обращается взыскание, а перевод на ЕКС безотзывен (ст. 242.12 БК РФ).</li>
        <li>При казначейском сопровождении деньги идут через ЕКС на казначейский счёт и отражаются на лицевом счёте 71 — без лицевого счёта и ИГК в назначении платёж зависнет.</li>
      </ol>
    </div>

    <h2 id="glossary">Глоссарий</h2>
    <dl class="gloss">
      <div><dt>ЕКС</dt><dd>Единый казначейский счёт — банковский счёт ФК в Банке России (40102…), на котором аккумулируются средства бюджетной системы.</dd></div>
      <div><dt>Система казначейских платежей</dt><dd>Совокупность участников и оператора (Федерального казначейства), проводящих казначейские платежи по правилам главы 24.2 БК РФ.</dd></div>
      <div><dt>Казначейский счёт</dt><dd>Счёт, открытый в ФК для операций с определённым видом средств; 20 знаков, начинается с 03.</dd></div>
      <div><dt>Лицевой счёт</dt><dd>Аналитический счёт клиента казначейства, ведётся в ТОФК в разрезе казначейского счёта.</dd></div>
      <div><dt>UTRA</dt><dd>Признак единого казначейского счёта в справочнике БИК Банка России.</dd></div>
      <div><dt>Невыясненные поступления</dt><dd>Средства, которые казначейство не смогло отнести к конкретному получателю из-за ошибок в реквизитах.</dd></div>
    </dl>

    <!-- p46r:eks-faq -->
    <h2 id="faq">Частые вопросы</h2>
    <div class="faq">
      <details><summary>Что такое ЕКС в реквизитах счёта?</summary><p>ЕКС в реквизитах — это единый казначейский счёт Федерального казначейства в Банке России (начинается на 40102). Его указывают как счёт банка получателя (поле 15) при платежах в бюджет и по госконтрактам, а казначейский счёт получателя, начинающийся с 03, — в поле 17.</p></details>
      <details open><summary>Что такое единый казначейский счёт простыми словами?</summary><p>Это «общий кошелёк» бюджетной системы — банковский счёт Федерального казначейства в Банке России, начинающийся с 40102. На нём лежат деньги федерального бюджета, регионов, муниципалитетов и других участников системы казначейских платежей.</p></details>
      <details><summary>ЕКС — это счёт получателя или счёт банка получателя?</summary><p>Счёт банка получателя. В платёжном поручении номер 40102 указывается в поле 15, а в поле 17 «Счёт получателя» ставится казначейский счёт, начинающийся с 03.</p></details>
      <details><summary>Почему казначейский счёт начинается с 03, а не с 40?</summary><p>Казначейские счета открываются не в банке, а в Федеральном казначействе, поэтому имеют собственную нумерацию по приказу ФК № 15н: 20 знаков, первая цифра 0, первые пять знаков кодируют вид средств.</p></details>
      <details><summary>Где взять реквизиты ЕКС своего региона?</summary><p>На сайте управления Федерального казначейства по вашему субъекту или в сводном разделе «Система казначейских платежей / Казначейские счета» на roskazna.gov.ru. Для платежей по контракту реквизиты даёт получатель.</p></details>
      <details><summary>Может ли у организации быть свой ЕКС?</summary><p>Нет. ЕКС открывается только Федеральному казначейству и его территориальным органам. Организации при работе с казначейством открывают лицевые счета в ТОФК.</p></details>
      <details><summary>Что будет, если указать 40102 в поле 17?</summary><p>Банк, скорее всего, отклонит платёж на форматном контроле; если платёж пройдёт, средства попадут в невыясненные поступления, и их придётся уточнять отдельным обращением. Правильно: 40102 — в поле 15, казначейский счёт 03 — в поле 17.</p></details>
      <details><summary>Можно ли арестовать деньги на ЕКС?</summary><p>Нет. Статья 242.12 БК РФ прямо запрещает обращение взыскания на денежные средства единого казначейского счёта. Взыскание с конкретного должника — участника бюджетного процесса проводится по специальным процедурам бюджетного законодательства.</p></details>
      <details><summary>Зачем государству единый счёт?</summary><p>Концентрация средств даёт контроль и доход: казначейство видит все деньги бюджетной системы в режиме реального времени и размещает временно свободные остатки (депозиты, репо), а проценты зачисляются в бюджет (ст. 242.13 БК РФ).</p></details>
      <details><summary>Как ЕКС связан с казначейским сопровождением?</summary><p>Платежи участнику казначейского сопровождения идут через ЕКС на казначейский счёт, а внутри казначейства отражаются на лицевом счёте 71 подрядчика. В назначении платежа обязательно указывают номер лицевого счёта и ИГК.</p></details>
      <details><summary>Сколько ЕКС существует?</summary><p>Единых казначейских счетов несколько: они открыты территориальным органам ФК в подразделениях Банка России, к одному БИК ТОФК может быть открыто несколько счетов 40102. Но логически они образуют единый казначейский счёт бюджетной системы.</p></details>
      <details><summary>Изменились ли реквизиты ЕКС в 2026 году?</summary><p>Сама конструкция (40102 + казначейские счета 03) не менялась с 2021 года. Точечные уточнения реквизитов по регионам и видам платежей случаются, поэтому перед платежом сверяйте реквизиты с актуальным справочником казначейства или данными получателя.</p></details>
      <details><summary>Единый казначейский счёт — это расчётный счёт?</summary><p>Нет. Единый казначейский счёт — счёт Федерального казначейства в Банке России, его номер начинается на 40102 и в платёжном поручении он указывается как счёт банка получателя. Расчётный счёт организации открывается в банке по договору банковского счёта.</p></details>
      <details><summary>Единый казначейский счёт — это корреспондентский счёт?</summary><p>Нет, хотя в платёжном документе он занимает то же поле, что раньше занимал корреспондентский счёт органа казначейства. Корреспондентский счёт принадлежит кредитной организации, а единый казначейский счёт — Федеральному казначейству.</p></details>
      <details><summary>Чем единый казначейский счёт отличается от казначейского счёта получателя?</summary><p>Единый казначейский счёт один на всю систему и указывается как счёт банка получателя. Казначейский счёт получателя — это счёт конкретного участника системы казначейских платежей, он указывается в поле счёта получателя.</p></details>
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
        <li id="ref-1">Бюджетный кодекс РФ, глава 24.2 «Система казначейских платежей» (ст. 242.7–242.13-1), введена Федеральным законом от 27.12.2019 № 479-ФЗ; ст. 242.12 «Основы функционирования единого казначейского счета» — <a href="https://www.consultant.ru/document/cons_doc_LAW_19702/2e0d2b0f64b3ff765b8d3f4adc70ec3061c79c7f/" target="_blank" rel="noopener">consultant.ru</a></li>
        <li id="ref-2">Банк России. Разъяснения о переходе Федерального казначейства на единый казначейский счёт (реквизиты распоряжений, признак UTRA, коды казначейских счетов, письмо от 29.07.2020 № 09-01-10/66747/04-45-7/5526/07-04-05/05-14880) — <a href="https://www.cbr.ru/explan/eks/" target="_blank" rel="noopener">cbr.ru</a></li>
        <li id="ref-3">Приказ Казначейства России от 01.04.2020 № 15н «О Порядке открытия казначейских счетов» (ред. от 28.12.2022) — <a href="http://www.consultant.ru/document/cons_doc_LAW_352105/" target="_blank" rel="noopener">consultant.ru</a></li>
        <li id="ref-4">Приказ Казначейства России от 14.05.2020 № 21н «О Порядке казначейского обслуживания» — <a href="https://roskazna.gov.ru/dokumenty/sistemakaznacheyskikh-platezhey/" target="_blank" rel="noopener">roskazna.gov.ru</a></li>
        <li id="ref-5">Казначейство России. Раздел «Документы / Система казначейских платежей / Казначейские счета» (актуальные реквизиты) — <a href="https://roskazna.gov.ru/dokumenty/sistemakaznacheyskikh-platezhey/kaznacheyskie-scheta/" target="_blank" rel="noopener">roskazna.gov.ru</a></li>
      </ol>
      <p class="refs__note">Материал носит информационный характер, не является финансовой или юридической консультацией. Нормы приведены в редакциях, действующих на 11 июня 2026 года; перед платежом сверяйте реквизиты с первоисточниками.</p>
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
    <form class="railform" id="leadForm" novalidate data-endpoint="/php/lead.php" data-source="edinyy-kaznacheyskiy-schet">
      <div class="railform__badge">Разбор эксперта</div>
      <h3 class="railform__title">Платёж завис или вернулся?</h3>
      <p class="railform__sub">Проверим реквизиты, найдём причину возврата и поможем уточнить невыясненные поступления. Цена — после диагностики.</p>
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
    <a class="card reveal" href="/baza-znaniy/kaznacheyskiy-schet/"><div class="card__cover"><span>Счета</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Казначейский счёт: что это, виды и реквизиты</h3><div class="card__meta">Счета · 16 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/licevoy-schet-71-kak-otkryt/"><div class="card__cover"><span>Счёт 71</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Как открыть лицевой счёт 71 в ТОФК</h3><div class="card__meta">Счета · 13 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/rasporyazhenie-o-sovershenii-kaznacheyskogo-platezha/"><div class="card__cover"><span>Платежи</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Распоряжение о совершении казначейского платежа</h3><div class="card__meta">Операции · 14 мин</div></div></a>
    <!-- auto-related:sistema-kaznacheyskih-platezhey --><a class="card reveal" href="/baza-znaniy/sistema-kaznacheyskih-platezhey/"><div class="card__cover"><span>СКП</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Система казначейских платежей: что это и как работает</h3><div class="card__meta">Основы · 16 мин</div></div></a>
    <!-- auto-related:kaznacheyskiy-schet-i-raschetnyy-schet --><a class="card reveal" href="/baza-znaniy/kaznacheyskiy-schet-i-raschetnyy-schet/"><div class="card__cover"><span>Сравнение</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Казначейский счёт и расчётный счёт: в чём разница</h3><div class="card__meta">Счета · 14 мин</div></div></a>
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

<section class="kz-sub" aria-labelledby="kzSubTitle" data-source="edinyy-kaznacheyskiy-schet">
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
