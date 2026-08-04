<?php /* Cache-Control задаёт .htaccess — единая точка правды для кэш-заголовков */ ?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Соисполнители и кооперация ГОЗ: договоры, ИГК, счета</title>
<meta name="description" content="Цепочка кооперации в ГОЗ: кто такие соисполнители, что прописать в договоре, единый идентификатор (ИГК), отдельные счета и сопровождение по всей цепочке.">
<meta name="author" content="Ярослав Михайлов">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1">
<meta name="theme-color" content="#F4F1EB" media="(prefers-color-scheme: light)">
<meta name="theme-color" content="#141310" media="(prefers-color-scheme: dark)">
<!-- PROD: canonical и og:url ОБЯЗАТЕЛЬНО менять под URL каждой статьи -->
<link rel="canonical" href="https://kaznaexpert.ru/baza-znaniy/soispolniteli-kooperaciya-goz/">
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
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "Соисполнители и цепочка кооперации в ГОЗ при казначейском сопровождении",
  "description": "Цепочка кооперации в ГОЗ: кто такие соисполнители, что прописать в договоре, единый идентификатор (ИГК), отдельные счета и сопровождение по всей цепочке.",
  "inLanguage": "ru-RU",
  "datePublished": "2026-06-16",
  "dateModified": "2026-08-04",
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
    "@id": "https://kaznaexpert.ru/baza-znaniy/soispolniteli-kooperaciya-goz/"
  },
  "citation": [
    "https://www.consultant.ru/document/cons_doc_LAW_140175/",
    "https://base.garant.ru/70291366/31de5683116b8d79b08fa2d768e33df6/",
    "https://www.consultant.ru/document/cons_doc_LAW_34661/b945e9baa2f86ef7eafc3db4cd85e34064cb6801/"
  ]
}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "Главная", "item": "https://kaznaexpert.ru/"}, {"@type": "ListItem", "position": 2, "name": "База знаний", "item": "https://kaznaexpert.ru/baza-znaniy/"}, {"@type": "ListItem", "position": 3, "name": "Соисполнители и кооперация ГОЗ", "item": "https://kaznaexpert.ru/baza-znaniy/soispolniteli-kooperaciya-goz/"}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [{"@type": "Question", "name": "Кто такой соисполнитель в ГОЗ?", "acceptedAnswer": {"@type": "Answer", "text": "Это исполнитель в цепочке кооперации — лицо, заключившее контракт с головным исполнителем или с другим исполнителем для участия в поставках по оборонному контракту."}}, {"@type": "Question", "name": "Чем соисполнитель отличается от головного исполнителя?", "acceptedAnswer": {"@type": "Answer", "text": "Головной исполнитель заключает государственный контракт напрямую с заказчиком, а соисполнитель входит в кооперацию и работает по договору с головным исполнителем или другим исполнителем."}}, {"@type": "Question", "name": "Нужно ли указывать ИГК в договоре с соисполнителем?", "acceptedAnswer": {"@type": "Answer", "text": "Да, это обязательно. Без идентификатора контракта платёж по сопровождаемой сделке нельзя связать с контрактом, и банк или казначейство вернут операцию."}}, {"@type": "Question", "name": "У каждого соисполнителя свой идентификатор?", "acceptedAnswer": {"@type": "Answer", "text": "Нет. По всей цепочке кооперации используется единый ИГК головного контракта — он указывается во всех договорах и расчётных документах одинаково."}}, {"@type": "Question", "name": "Должен ли соисполнитель открывать отдельный счёт?", "acceptedAnswer": {"@type": "Answer", "text": "Да. Каждый участник кооперации ведёт расчёты по контракту через отдельный счёт в уполномоченном банке или лицевой счёт в казначействе в зависимости от режима сопровождения."}}, {"@type": "Question", "name": "Что делать, если соисполнитель отказывается прописывать ИГК?", "acceptedAnswer": {"@type": "Answer", "text": "Без идентификатора расчёты по контракту не пройдут сопровождение. Условие об ИГК нужно сделать обязательным, иначе договор не позволит легально оплатить поставку."}}, {"@type": "Question", "name": "Обязан ли соисполнитель вести раздельный учёт?", "acceptedAnswer": {"@type": "Answer", "text": "Да. Обязанность вести раздельный учёт по контракту распространяется на всю кооперацию по статье 8 Закона № 275-ФЗ, а не только на головного исполнителя."}}, {"@type": "Question", "name": "Кто отвечает за нарушения в кооперации?", "acceptedAnswer": {"@type": "Answer", "text": "Ответственность несёт каждый участник за свои нарушения: с 1 марта 2025 года административные санкции применяются по статье 7.30.3 КоАП РФ, а за злоупотребления — по статьям 201.1 и 285.4 УК РФ."}}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "HowTo", "name": "Как подключить соисполнителя к контракту ГОЗ", "inLanguage": "ru-RU", "step": [{"@type": "HowToStep", "position": 1, "name": "Зафиксировать идентификатор", "text": "Получить ИГК головного контракта и довести его до соисполнителя для включения в договор."}, {"@type": "HowToStep", "position": 2, "name": "Заключить договор по правилам ГОЗ", "text": "Прописать ИГК, режим сопровождения, реквизиты счёта, раздельный учёт и запрет нецелевого расходования."}, {"@type": "HowToStep", "position": 3, "name": "Открыть счёт соисполнителю", "text": "Открыть отдельный счёт в уполномоченном банке или лицевой счёт в казначействе под контракт."}, {"@type": "HowToStep", "position": 4, "name": "Настроить раздельный учёт", "text": "Обособить затраты по контракту в учёте соисполнителя и закрепить методику в учётной политике."}, {"@type": "HowToStep", "position": 5, "name": "Согласовать назначение платежей", "text": "Привести формулировки назначения и пакет документов-оснований к требованиям сопровождения."}, {"@type": "HowToStep", "position": 6, "name": "Проводить расчёты и сверять", "text": "Оплачивать работу соисполнителя через специальный счёт и сверять остатки с данными учёта."}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "DefinedTermSet", "name": "Глоссарий: кооперация и соисполнители в ГОЗ", "inLanguage": "ru-RU", "hasDefinedTerm": [{"@type": "DefinedTerm", "name": "Кооперация головного исполнителя", "description": "Совокупность взаимодействующих лиц, участвующих в поставках по сопровождаемым сделкам в рамках одного гособоронзаказа."}, {"@type": "DefinedTerm", "name": "Соисполнитель", "description": "Исполнитель в цепочке кооперации, заключивший контракт с головным исполнителем или с другим исполнителем."}, {"@type": "DefinedTerm", "name": "Сопровождаемая сделка", "description": "Контракт по ГОЗ, расчёты по которому подлежат банковскому или казначейскому сопровождению."}, {"@type": "DefinedTerm", "name": "ИГК", "description": "Идентификатор государственного контракта; единый код, проходящий через всю цепочку кооперации."}, {"@type": "DefinedTerm", "name": "Отдельный счёт", "description": "Счёт в уполномоченном банке для расчётов по контракту ГОЗ с особым режимом использования."}, {"@type": "DefinedTerm", "name": "Уполномоченный банк", "description": "Банк, отобранный для банковского сопровождения расчётов по гособоронзаказу."}]}
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
<meta property="og:title" content="Соисполнители и цепочка кооперации в ГОЗ: договоры, ИГК, счета">
<meta property="og:description" content="Кооперация головного исполнителя по 275-ФЗ: статус соисполнителя, обязательные условия договора, единый ИГК по всей цепочке, отдельные счета каждого участника и банковское или казначейское сопровождение.">
<meta property="og:url" content="https://kaznaexpert.ru/baza-znaniy/soispolniteli-kooperaciya-goz/">
<meta property="og:image" content="https://kaznaexpert.ru/img/og-image.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="Соисполнители и цепочка кооперации в ГОЗ: договоры, ИГК, счета — КазнаЭксперт">
<meta property="article:published_time" content="2026-06-16T09:00:00+03:00">
<meta property="article:modified_time" content="2026-06-16T09:00:00+03:00">
<meta property="article:author" content="https://kaznaexpert.ru/komanda/mihailov-yaroslav/">
<meta property="article:section" content="База знаний">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Соисполнители и цепочка кооперации в ГОЗ: договоры, ИГК, счета">
<meta name="twitter:description" content="Кооперация головного исполнителя по 275-ФЗ: статус соисполнителя, обязательные условия договора, единый ИГК по всей цепочке, отдельные счета каждого участника и банковское или казначейское сопровождение.">
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
  <nav class="crumbs" aria-label="Хлебные крошки"><a href="/">Главная</a> › <a href="/baza-znaniy/">База знаний</a> › Соисполнители и кооперация ГОЗ</nav>

  <aside class="toc" aria-label="Содержание">
    <div class="toc__label">Содержание</div>
    <ul class="toc__list" id="tocList">
      <li><a href="#chto-takoe">Что такое кооперация головного исполнителя</a></li>
      <li><a href="#kto-uchastniki">Головной исполнитель, исполнитель, соисполнитель</a></li>
      <li><a href="#dogovor">Договор с соисполнителем: что обязательно прописать</a></li>
      <li><a href="#igk-v-cepochke">Единый идентификатор контракта (ИГК) в цепочке</a></li>
      <li><a href="#otdelnye-scheta">Отдельные счета участников кооперации</a></li>
      <li><a href="#obyazannosti">Обязанности исполнителя по статье 8</a></li>
      <li><a href="#soprovozhdenie-cepochki">Сопровождение расчётов по цепочке</a></li>
      <li><a href="#avansirovanie">Авансирование и доведение средств по цепочке</a></li>
      <li><a href="#proverka-statusa">Как соисполнителю понять, что он в ГОЗ</a></li>
      <li><a href="#howto">Как подключить соисполнителя к контракту ГОЗ</a></li>
      <li><a href="#oshibki">Частые ошибки в работе с соисполнителями</a></li>
      <li><a href="#otvetstvennost">Ответственность участников кооперации</a></li>
      <li><a href="#keys">Пример из практики</a></li>
      <li><a href="#glossary">Глоссарий</a></li>
      <li><a href="#faq">Частые вопросы</a></li>
    </ul>
  </aside>

  <article class="content" id="main">
    <div class="hero">
      <img class="hero__crest hero__crest--light" src="/img/logogold-crest.webp" alt="" aria-hidden="true" width="188" height="137" decoding="async" loading="lazy">
      <img class="hero__crest hero__crest--dark" src="/img/LogoWhite.png" alt="" aria-hidden="true" width="188" height="137" decoding="async" loading="lazy">
      <div class="eyebrow">База знаний · Гособоронзаказ <span class="fresh">Актуально на август 2026</span></div>
    <h1>Соисполнители и цепочка кооперации в ГОЗ при казначейском сопровождении</h1>
    <div class="byline"><span class="av">ЯМ</span><span>Автор: <a href="/komanda/mihailov-yaroslav/">Ярослав Михайлов</a>, главный эксперт</span><span class="dot">·</span><span>15+ лет в Казначействе</span><span class="dot">·</span><span>16 мин чтения</span><span class="dot">·</span><span>Обновлено 4 августа 2026 · сверено с редакцией закона № 275-ФЗ от 04.07.2026: новая глава 3.3 о переводе сопровождаемой сделки в иной уполномоченный банк</span></div>
    </div>

    <div class="share">
      <span class="share__label">Поделиться:</span>
      <a href="https://t.me/share/url?url=https%3A%2F%2Fkaznaexpert.ru%2Fbaza-znaniy%2Fsoispolniteli-kooperaciya-goz%2F&amp;text=%D0%A1%D0%BE%D0%B8%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D0%B8%D1%82%D0%B5%D0%BB%D0%B8%20%D0%B8%20%D1%86%D0%B5%D0%BF%D0%BE%D1%87%D0%BA%D0%B0%20%D0%BA%D0%BE%D0%BE%D0%BF%D0%B5%D1%80%D0%B0%D1%86%D0%B8%D0%B8%20%D0%B2%20%D0%B3%D0%BE%D1%81%D0%BE%D0%B1%D0%BE%D1%80%D0%BE%D0%BD%D0%B7%D0%B0%D0%BA%D0%B0%D0%B7%D0%B5%3A%20%D0%BA%D1%82%D0%BE%20%D1%82%D0%B0%D0%BA%D0%B8%D0%B5%20%D1%81%D0%BE%D0%B8%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D0%B8%D1%82%D0%B5%D0%BB%D0%B8%2C%20%D1%87%D1%82%D0%BE%20%D0%BE%D0%B1%D1%8F%D0%B7%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%BE%20%D0%BF%D1%80%D0%BE%D0%BF%D0%B8%D1%81%D0%B0%D1%82%D1%8C%20%D0%B2%20%D0%B4%D0%BE%D0%B3%D0%BE%D0%B2%D0%BE%D1%80%D0%B5%20%D1%81%20%D1%81%D0%BE%D0%B8%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D0%B8%D1%82%D0%B5%D0%BB%D0%B5%D0%BC%2C%20%D0%BA%D0%B0%D0%BA%20%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%B0%D0%B5%D1%82%20%D0%B5%D0%B4%D0%B8%D0%BD%D1%8B%D0%B9%20%D0%B8%D0%B4%D0%B5%D0%BD%D1%82%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%D1%82%D0%BE%D1%80%20%D0%BA%D0%BE%D0%BD%D1%82%D1%80%D0%B0%D0%BA%D1%82%D0%B0%20%D0%BF%D0%BE%20%D0%B2%D1%81%D0%B5%D0%B9%20%D1%86%D0%B5%D0%BF%D0%BE%D1%87%D0%BA%D0%B5%2C%20%D0%B7%D0%B0%D1%87%D0%B5%D0%BC%20%D0%BA%D0%B0%D0%B6%D0%B4%D0%BE%D0%BC%D1%83%20%D1%83%D1%87%D0%B0%D1%81%D1%82%D0%BD%D0%B8%D0%BA%D1%83%20%D0%BE%D1%82%D0%B4%D0%B5%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9%20%D1%81%D1%87%D1%91%D1%82%20%D0%B8%20%D0%BA%D0%B0%D0%BA%20%D1%83%D1%81%D1%82%D1%80%D0%BE%D0%B5%D0%BD%D0%BE%20%D1%81%D0%BE%D0%BF%D1%80%D0%BE%D0%B2%D0%BE%D0%B6%D0%B4%D0%B5%D0%BD%D0%B8%D0%B5%20%D0%BA%D0%BE%D0%BE%D0%BF%D0%B5%D1%80%D0%B0%D1%86%D0%B8%D0%B8" target="_blank" rel="noopener"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.56 8.25l-1.86 8.76c-.14.62-.5.77-1.02.48l-2.82-2.08-1.36 1.31c-.15.15-.28.28-.57.28l.2-2.89 5.27-4.76c.23-.2-.05-.32-.35-.12l-6.51 4.1-2.8-.88c-.61-.19-.62-.61.13-.9l10.95-4.22c.5-.18.95.12.79.85z"/></svg>Telegram</a>
      <button type="button" id="copyLink"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.07 0l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.07 0l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg><span>Копировать ссылку</span></button>
      <button type="button" id="printBtn"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9V2h12v7M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2M6 14h12v8H6z"/></svg>Скачать PDF</button>
    </div>

    <details class="mtoc"><summary>Содержание статьи</summary>
      <ol>
        <li><a href="#chto-takoe">Что такое кооперация головного исполнителя</a></li><li><a href="#kto-uchastniki">Головной исполнитель, исполнитель, соисполнитель</a></li><li><a href="#dogovor">Договор с соисполнителем: что обязательно прописать</a></li><li><a href="#igk-v-cepochke">Единый идентификатор контракта (ИГК) в цепочке</a></li><li><a href="#otdelnye-scheta">Отдельные счета участников кооперации</a></li><li><a href="#obyazannosti">Обязанности исполнителя по статье 8</a></li><li><a href="#soprovozhdenie-cepochki">Сопровождение расчётов по цепочке</a></li><li><a href="#avansirovanie">Авансирование и доведение средств по цепочке</a></li><li><a href="#proverka-statusa">Как соисполнителю понять, что он в ГОЗ</a></li><li><a href="#howto">Как подключить соисполнителя к контракту ГОЗ</a></li><li><a href="#oshibki">Частые ошибки в работе с соисполнителями</a></li><li><a href="#otvetstvennost">Ответственность участников кооперации</a></li><li><a href="#keys">Пример из практики</a></li><li><a href="#glossary">Глоссарий</a></li><li><a href="#faq">Частые вопросы</a></li>
      </ol>
    </details>

    <div class="tldr">Кооперация головного исполнителя — это вся цепочка лиц, участвующих в поставках по одному оборонному контракту: головной исполнитель и привлечённые им соисполнители (исполнители). По статье 3 Закона № 275-ФЗ исполнитель — это лицо, заключившее контракт с головным исполнителем или с другим исполнителем. Через всю цепочку проходит единый идентификатор контракта (ИГК), а каждый участник открывает отдельный счёт и проводит расчёты под сопровождением.<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a></div>

    <section class="keyfacts grain" aria-label="Ключевые факты">
      <h2>Коротко о главном</h2>
      <div class="keyfacts__grid">
        <div class="kf"><div class="kf__n">Кооперация</div><div class="kf__t"><b>Понятие</b> — совокупность лиц в поставках по сопровождаемой сделке (ст. 3 № 275-ФЗ)</div></div>
        <div class="kf"><div class="kf__n">Единый ИГК</div><div class="kf__t"><b>Идентификатор</b> — один идентификатор контракта проходит через всю цепочку</div></div>
        <div class="kf"><div class="kf__n">Свой счёт</div><div class="kf__t"><b>Расчёты</b> — каждый участник кооперации открывает отдельный или лицевой счёт</div></div>
        <div class="kf"><div class="kf__n">ст. 8</div><div class="kf__t"><b>Обязанности</b> — обязанности исполнителя закреплены в статье 8 Закона № 275-ФЗ</div></div>
        <div class="kf"><div class="kf__n">Договор</div><div class="kf__t"><b>Условие</b> — идентификатор и режим расчётов обязательны в договоре с соисполнителем</div></div>
        <div class="kf"><div class="kf__n">Контроль</div><div class="kf__t"><b>Сопровождение</b> — банк или казначейство проверяют платежи по всей кооперации</div></div>
      </div>
    </section>

    <h2 id="chto-takoe">Что такое кооперация головного исполнителя</h2>
    <div class="answer reveal">
      <p class="lead-p">Кооперация головного исполнителя — это совокупность взаимодействующих между собой лиц, которые участвуют в поставках продукции по одному гособоронзаказу в рамках сопровождаемых сделок. Простыми словами: один контракт с государством получает головной исполнитель, но реально его выполняет целая цепочка — поставщики материалов и комплектующих, подрядчики, разработчики. Все они вместе и образуют кооперацию. Понятие закреплено в статье 3 Федерального закона от 29.12.2012 № 275-ФЗ.<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a></p>
      <p>Принципиальный момент: внутри кооперации действуют те же правила обращения с целевыми деньгами, что и для головного исполнителя. Идентификатор контракта, отдельные счета, режим расчётов и сопровождение распространяются на всю цепочку, а не только на верхний уровень. Поэтому соисполнитель, который заходит в ГОЗ впервые, должен понимать: он становится частью оборонного контракта со всеми его требованиями, даже если поставляет всего лишь комплектующие.</p>
    </div>

    <h2 id="kto-uchastniki">Головной исполнитель, исполнитель, соисполнитель</h2>
    <p>В законе есть два формальных термина — головной исполнитель и исполнитель, а слово «соисполнитель» используется на практике как синоним исполнителя в цепочке. Разберём роли.</p>
    <table>
      <caption>Роли в кооперации по ст. 3 Закона № 275-ФЗ</caption>
      <tr><th>Роль</th><th>С кем заключает договор</th><th>Положение в цепочке</th></tr>
      <tr><td>Головной исполнитель</td><td>С государственным заказчиком (госконтракт)</td><td>Вершина: отвечает за конечный результат заказа</td></tr>
      <tr><td>Исполнитель (соисполнитель 1-го уровня)</td><td>С головным исполнителем</td><td>Первый уровень кооперации</td></tr>
      <tr><td>Исполнитель (соисполнитель 2-го уровня и ниже)</td><td>С другим исполнителем</td><td>Глубже по цепочке поставок</td></tr>
    </table>
    <p>Ключевое: статус исполнителя в ГОЗ возникает не от того, что вы «подрядчик», а от факта вхождения в кооперацию по конкретному оборонному контракту с его идентификатором. Как только вы заключили договор, привязанный к ИГК головного контракта, вы — исполнитель со всеми обязанностями по статье 8. Общую картину того, как устроен гособоронзаказ и кто его участники, мы даём в обзорной статье <a href="/baza-znaniy/chto-takoe-gosudarstvennyy-oboronnyy-zakaz/">что такое гособоронзаказ</a>.</p>

    <h2 id="dogovor">Договор с соисполнителем: что обязательно прописать</h2>
    <p>Договор внутри кооперации — это не обычный договор поставки. Он должен «нести» на себе признаки гособоронзаказа, иначе расчёты по нему не пройдут сопровождение. Минимальный набор обязательных элементов приведён ниже.</p>
    <table>
      <caption>Обязательные элементы договора с соисполнителем по ГОЗ</caption>
      <tr><th>Элемент</th><th>Зачем нужен</th></tr>
      <tr><td>Идентификатор государственного контракта (ИГК)</td><td>Привязывает договор к головному контракту; без него платёж не идентифицируется</td></tr>
      <tr><td>Указание на гособоронзаказ и режим сопровождения</td><td>Фиксирует, что сделка сопровождаемая (банк или казначейство)</td></tr>
      <tr><td>Реквизиты отдельного (лицевого) счёта</td><td>Расчёты идут только через специальный счёт под контракт</td></tr>
      <tr><td>Условие о раздельном учёте</td><td>Соисполнитель обязан обособлять затраты по контракту</td></tr>
      <tr><td>Запрет на нецелевое использование средств</td><td>Деньги тратятся только на исполнение этого контракта</td></tr>
      <tr><td>Право контроля и предоставления информации</td><td>Головной исполнитель и контролёры вправе проверять расходы</td></tr>
    </table>
    <p>Самая частая болевая точка — идентификатор контракта. Бывает, что соисполнитель отказывается указывать ИГК в договоре, считая это лишней формальностью. На деле без идентификатора платёж по сопровождаемой сделке провести нельзя: банк или казначейство просто не свяжут операцию с контрактом и вернут её. Поэтому условие об ИГК — не предмет торга, а обязательный реквизит. Подробно структуру идентификатора мы разбираем в материале об <a href="/baza-znaniy/identifikator-gosudarstvennogo-kontrakta-igk/">идентификаторе государственного контракта (ИГК)</a>.</p>

    <h2 id="igk-v-cepochke">Единый идентификатор контракта (ИГК) в цепочке</h2>
    <p>Главная логика кооперации в ГОЗ: один идентификатор на весь контракт. ИГК присваивается государственному контракту, и этот же идентификатор «спускается» по всей цепочке — в договоры головного исполнителя с соисполнителями, дальше к их поставщикам и так до конца кооперации. Благодаря этому контролёры видят все расчёты по контракту как единое целое.</p>
    <p>Это значит, что соисполнитель не получает «свой» новый идентификатор — он использует тот же ИГК, что и головной исполнитель. В платёжных документах, счетах и отчётности идентификатор указывается одинаково по всей цепочке. Так казначейство и банк могут проследить движение целевых денег от государственного заказчика до конкретного поставщика комплектующих и убедиться, что средства не ушли за пределы контракта. Именно единый ИГК превращает разрозненные договоры в прозрачную сопровождаемую сделку.</p>

    <h2 id="otdelnye-scheta">Отдельные счета участников кооперации</h2>
    <p>Расчёты по ГОЗ идут только через специальные счета — и это касается каждого участника кооперации, а не только головного исполнителя. В зависимости от режима сопровождения это либо отдельный счёт в уполномоченном банке, либо лицевой счёт в Федеральном казначействе.</p>
    <table>
      <caption>Счета в кооперации в зависимости от режима сопровождения</caption>
      <tr><th>Режим</th><th>Где счёт</th><th>Кто контролирует платёж</th></tr>
      <tr><td>Банковское сопровождение</td><td>Отдельный счёт в уполномоченном банке</td><td>Уполномоченный банк</td></tr>
      <tr><td>Казначейское сопровождение</td><td>Лицевой счёт в ТОФК</td><td>Федеральное казначейство</td></tr>
    </table>
    <p>Деньги движутся по цепочке так: головной исполнитель получает средства от заказчика на свой счёт и оплачивает работу соисполнителя на его отдельный счёт; соисполнитель, в свою очередь, оплачивает поставки своих контрагентов — и так далее. На каждом шаге платёж проходит проверку: расход должен относиться к контракту с этим ИГК. Как открыть такой счёт, мы разбираем в материалах об <a href="/baza-znaniy/otdelnyy-schet-po-goz/">отдельном счёте по ГОЗ</a> и о том, как <a href="/baza-znaniy/licevoy-schet-71-kak-otkryt/">открыть лицевой счёт в ТОФК</a>. Смешивать целевые деньги контракта с обычной выручкой или средствами другого заказа на этих счетах запрещено.</p>

    <p>С 4 августа 2026 года у цепочки кооперации появилась страховка на случай проблем с банком. Федеральный закон от 04.07.2026 № 232-ФЗ дополнил закон № 275-ФЗ главой 3.3 (ст. 8.9–8.13): если банк исключён из категории уполномоченных по решению Правительства РФ, сопровождаемая сделка переводится в другой уполномоченный банк, а банковское сопровождение переходит без заявления исполнителя о закрытии отдельного счёта. Для соисполнителя это значит, что смена банка у головного исполнителя больше не парализует расчёты по цепочке — но новые реквизиты отдельного счёта нужно получить и отразить в договоре и платёжных документах. Тем же законом срок представления уполномоченным банком информации о расчётах по запросам Федерального казначейства увеличен с 2 до 5 рабочих дней.<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a></p>

    <h2 id="obyazannosti">Обязанности исполнителя по статье 8</h2>
    <p>Статья 8 Закона № 275-ФЗ устанавливает обязанности не только для головного исполнителя, но и для каждого исполнителя в кооперации. Войдя в цепочку, соисполнитель принимает на себя обязательства, сопоставимые с обязательствами головного.</p>
    <table>
      <caption>Ключевые обязанности исполнителя по ст. 8 № 275-ФЗ</caption>
      <tr><th>Обязанность</th><th>Что означает на практике</th></tr>
      <tr><td>Целевое использование средств</td><td>Тратить деньги только на исполнение данного контракта</td></tr>
      <tr><td>Раздельный учёт</td><td>Обособлять доходы и расходы по контракту от прочей деятельности</td></tr>
      <tr><td>Использование отдельного счёта</td><td>Вести расчёты по контракту через специальный счёт</td></tr>
      <tr><td>Предоставление информации</td><td>Раскрывать данные о затратах и контрагентах по запросу</td></tr>
      <tr><td>Включение идентификатора</td><td>Указывать ИГК во всех договорах и расчётных документах кооперации</td></tr>
      <tr><td>Запрет завышения цены</td><td>Не допускать действий, ведущих к необоснованному росту цены</td></tr>
    </table>
    <p>Как именно соисполнителю выстроить раздельный учёт, мы подробно разбираем в статье о <a href="/baza-znaniy/razdelnyy-uchet-goz-275-fz/">раздельном учёте по ГОЗ</a>. Главная мысль: соисполнитель не может сослаться на то, что он «всего лишь поставщик» — обязанности по статье 8 распространяются на всю кооперацию.</p>

    <h2 id="soprovozhdenie-cepochki">Сопровождение расчётов по цепочке</h2>
    <p>Сопровождение — это сквозной контроль за движением денег по всей кооперации. Режим определяется для контракта в целом: если сделка идёт под казначейским сопровождением, через лицевые счета в казначействе работают все участники цепочки; если под банковским — через уполномоченный банк. Чем отличаются эти режимы и как выбрать, мы разбираем в материале о <a href="/baza-znaniy/kaznacheyskoe-i-bankovskoe-soprovozhdenie/">казначейском и банковском сопровождении</a>.</p>
    <p>Перед каждым платежом участник подтверждает целевой характер расхода — прикладывает документы-основания (договор, акт, накладную) и указывает идентификатор. Контролёр сверяет операцию с условиями контракта и либо проводит, либо отказывает. Поскольку цепочка длинная, ошибка одного звена тормозит расчёты дальше по линии: если соисполнитель оформил платёж без ИГК или с неверным назначением, деньги застревают. Поэтому в кооперации особенно важна дисциплина оформления — типичные причины отказов мы собрали в статье о <a href="/baza-znaniy/prichiny-otkaza-kaznacheystva-v-sankcionirovanii/">причинах отказа казначейства в санкционировании</a>.</p>

    <h2 id="avansirovanie">Авансирование и доведение средств по цепочке</h2>
    <p>Деньги в кооперации не появляются у соисполнителя сами по себе — они «спускаются» сверху вниз. Государственный заказчик перечисляет средства головному исполнителю, тот рассчитывается с соисполнителями первого уровня, а они — со своими контрагентами. На каждом шаге сумма проходит сопровождение, поэтому скорость расчётов по цепочке зависит от дисциплины всех её участников.</p>
    <p>Отдельный нюанс — авансирование. Если контракт предусматривает аванс, головной исполнитель обязан довести соответствующую часть аванса до соисполнителей, занятых в исполнении. Удерживать целевой аванс на верхнем уровне, не доводя его до тех, кто реально выполняет работы, нельзя: это нарушает режим целевых средств. Поэтому в договоре с соисполнителем важно зафиксировать не только сумму и сроки, но и порядок авансирования, согласованный с условиями головного контракта. Как устроен аванс в режиме сопровождения, мы разбираем в материале об <a href="/baza-znaniy/avans-pri-kaznacheyskom-soprovozhdenii/">авансе при казначейском сопровождении</a>.</p>
    <p>Практическое следствие для соисполнителя: планируя денежный поток, нельзя рассчитывать на средства раньше, чем они дойдут по цепочке и пройдут санкционирование. Чем длиннее кооперация, тем важнее заранее согласовать график платежей и держать пакет документов-оснований наготове — иначе деньги «застрянут» на любом из промежуточных звеньев.</p>

    <h2 id="proverka-statusa">Как соисполнителю понять, что он в ГОЗ</h2>
    <p>Иногда поставщик не сразу осознаёт, что заключённый им договор — часть гособоронзаказа со всеми его требованиями. Признаки, по которым это легко определить, перечислены ниже.</p>
    <table>
      <caption>Признаки того, что договор относится к ГОЗ</caption>
      <tr><th>Признак</th><th>Что означает</th></tr>
      <tr><td>В договоре указан идентификатор контракта (ИГК)</td><td>Договор привязан к государственному оборонному контракту</td></tr>
      <tr><td>Прямая ссылка на Закон № 275-ФЗ</td><td>Сделка прямо отнесена к сфере гособоронзаказа</td></tr>
      <tr><td>Требование вести расчёты через отдельный (лицевой) счёт</td><td>Действует режим банковского или казначейского сопровождения</td></tr>
      <tr><td>Условие о раздельном учёте и предоставлении информации</td><td>На соисполнителя распространяются обязанности по ст. 8</td></tr>
    </table>
    <p>Если хотя бы один из признаков присутствует, к договору применяются правила ГОЗ, и работать «по-обычному» уже нельзя. В этом случае соисполнителю стоит сразу открыть отдельный счёт, настроить раздельный учёт и согласовать с головным исполнителем порядок расчётов — до первого платежа, а не после первого отказа. Понимание своего статуса в кооперации экономит недели, которые иначе уйдут на разбор возвратов и переоформление документов.</p>

    <h2 id="howto">Как подключить соисполнителя к контракту ГОЗ</h2>
    <p>Ниже — типовой порядок, как головному исполнителю корректно ввести соисполнителя в кооперацию, а соисполнителю — войти в неё без срыва расчётов.</p>
    <ol class="howto">
      <li><b>Зафиксировать идентификатор.</b> Получить ИГК головного контракта и довести его до соисполнителя для включения в договор.</li>
      <li><b>Заключить договор по правилам ГОЗ.</b> Прописать ИГК, режим сопровождения, реквизиты отдельного счёта, раздельный учёт и запрет нецелевого расходования.</li>
      <li><b>Открыть счёт соисполнителю.</b> Открыть отдельный счёт в уполномоченном банке или лицевой счёт в казначействе под этот контракт.</li>
      <li><b>Настроить раздельный учёт.</b> Обособить затраты по контракту в учёте соисполнителя и закрепить методику в учётной политике.</li>
      <li><b>Согласовать назначение платежей.</b> Привести формулировки назначения и пакет документов-оснований к требованиям сопровождения.</li>
      <li><b>Проводить расчёты и сверять.</b> Оплачивать работу соисполнителя через специальный счёт и сверять остатки с данными учёта.</li>
    </ol>

    <h2 id="oshibki">Частые ошибки в работе с соисполнителями</h2>
    <table>
      <caption>Типовые ошибки кооперации и их последствия</caption>
      <tr><th>Ошибка</th><th>Последствие</th><th>Как избежать</th></tr>
      <tr><td>Соисполнитель не указывает ИГК в договоре</td><td>Платёж не идентифицируется, операция возвращается</td><td>Сделать идентификатор обязательным реквизитом договора</td></tr>
      <tr><td>Расчёты с обычного расчётного счёта</td><td>Нарушение режима, отказ в проведении платежа</td><td>Открыть отдельный или лицевой счёт под контракт</td></tr>
      <tr><td>Нет раздельного учёта у соисполнителя</td><td>Невозможно доказать целевой расход, риск санкций</td><td>Настроить обособление затрат по контракту</td></tr>
      <tr><td>Смешение средств разных контрактов</td><td>Нарушение режима целевых средств</td><td>Отдельный счёт на каждый идентификатор</td></tr>
      <tr><td>Неверное назначение платежа</td><td>Возврат операции, задержка по всей цепочке</td><td>Согласовать формулировки с требованиями сопровождения</td></tr>
    </table>

    <h2 id="otvetstvennost">Ответственность участников кооперации</h2>
    <p>Обязанности по ГОЗ распространяются на всю кооперацию, и ответственность — тоже. С 1 марта 2025 года административные нарушения в сфере гособоронзаказа наказываются по статье 7.30.3 КоАП РФ: например, за совершение действий, ведущих к необоснованному завышению цены, или за нарушение правил раздельного учёта предусмотрены штрафы как на должностных, так и на юридических лиц. За злоупотребления при выполнении ГОЗ применяются статьи 201.1 и 285.4 Уголовного кодекса.</p>
    <p>Полный разбор составов и штрафов мы собрали в материале об <a href="/baza-znaniy/otvetstvennost-za-narusheniya-goz/">ответственности за нарушения в сфере ГОЗ и казначейского сопровождения</a>. Для соисполнителя это означает: формальное участие «сбоку» не снимает рисков — за нарушение режима целевых средств или искажение учёта отвечает каждый участник цепочки.</p>

    <h2 id="keys">Пример из практики</h2>
    <div class="answer reveal">
      <p>На практике встречается такая ситуация: головной исполнитель привлекает нового поставщика комплектующих, но в договоре не указывает идентификатор контракта, а поставщик ведёт расчёты с обычного счёта. Первый же платёж по сопровождаемой сделке возвращается: операцию невозможно связать с контрактом. После того как стороны переоформляют договор с указанием ИГК, поставщик открывает отдельный счёт и согласовывает назначение платежей, расчёты по цепочке идут штатно. Пример обобщённый и иллюстративный; конкретные требования зависят от режима сопровождения и условий головного контракта.</p>
    </div>

    <p data-ctx="auto-ctx:kaznacheyskiy-schet-subpodryadchika">Отдельный практический вопрос — <a href="/baza-znaniy/kaznacheyskiy-schet-subpodryadchika/">нужен ли казначейский счёт субподрядчику</a> по контракту с казначейским сопровождением: ответ зависит от уровня в цепочке и от того, привлекает ли он других лиц.</p>
    <p data-ctx="auto-ctx:kaznacheyskoe-soprovozhdenie-niokr">Особый случай кооперации — составные части научно-исследовательских и опытно-конструкторских работ: правила привлечения третьих лиц там задаёт глава 38 ГК, а финансовый контур — лицевые счета; подробности в материале про <a href="/baza-znaniy/kaznacheyskoe-soprovozhdenie-niokr/">сопровождение НИОКР</a>.</p>
    <div class="takeaways">
      <h2>Что важно запомнить</h2>
      <ol>
        <li>Кооперация головного исполнителя — вся цепочка участников одного оборонного контракта.</li>
        <li>Соисполнитель (исполнитель) заключает договор с головным исполнителем или другим исполнителем и принимает обязанности по ст. 8.</li>
        <li>Через всю цепочку проходит единый идентификатор контракта (ИГК).</li>
        <li>Каждый участник открывает отдельный или лицевой счёт и ведёт раздельный учёт.</li>
        <li>Идентификатор и режим расчётов — обязательные условия договора с соисполнителем.</li>
        <li>Ответственность за нарушения несёт каждый участник кооперации.</li>
      </ol>
    </div>

    <h2 id="glossary">Глоссарий</h2>
    <dl class="gloss">
      <div><dt>Кооперация головного исполнителя</dt><dd>Совокупность взаимодействующих лиц, участвующих в поставках по сопровождаемым сделкам в рамках одного гособоронзаказа.</dd></div>
      <div><dt>Соисполнитель</dt><dd>Исполнитель в цепочке кооперации, заключивший контракт с головным исполнителем или с другим исполнителем.</dd></div>
      <div><dt>Сопровождаемая сделка</dt><dd>Контракт по ГОЗ, расчёты по которому подлежат банковскому или казначейскому сопровождению.</dd></div>
      <div><dt>ИГК</dt><dd>Идентификатор государственного контракта; единый код, проходящий через всю цепочку кооперации.</dd></div>
      <div><dt>Отдельный счёт</dt><dd>Счёт в уполномоченном банке для расчётов по контракту ГОЗ с особым режимом использования.</dd></div>
      <div><dt>Уполномоченный банк</dt><dd>Банк, отобранный для банковского сопровождения расчётов по гособоронзаказу.</dd></div>
    </dl>

    <h2 id="faq">Частые вопросы</h2>
    <div class="faq">
      <details open><summary>Кто такой соисполнитель в ГОЗ?</summary><p>Это исполнитель в цепочке кооперации — лицо, заключившее контракт с головным исполнителем или с другим исполнителем для участия в поставках по оборонному контракту.</p></details>
      <details><summary>Чем соисполнитель отличается от головного исполнителя?</summary><p>Головной исполнитель заключает государственный контракт напрямую с заказчиком, а соисполнитель входит в кооперацию и работает по договору с головным исполнителем или другим исполнителем.</p></details>
      <details><summary>Нужно ли указывать ИГК в договоре с соисполнителем?</summary><p>Да, это обязательно. Без идентификатора контракта платёж по сопровождаемой сделке нельзя связать с контрактом, и банк или казначейство вернут операцию.</p></details>
      <details><summary>У каждого соисполнителя свой идентификатор?</summary><p>Нет. По всей цепочке кооперации используется единый ИГК головного контракта — он указывается во всех договорах и расчётных документах одинаково.</p></details>
      <details><summary>Должен ли соисполнитель открывать отдельный счёт?</summary><p>Да. Каждый участник кооперации ведёт расчёты по контракту через отдельный счёт в уполномоченном банке или лицевой счёт в казначействе в зависимости от режима сопровождения.</p></details>
      <details><summary>Что делать, если соисполнитель отказывается прописывать ИГК?</summary><p>Без идентификатора расчёты по контракту не пройдут сопровождение. Условие об ИГК нужно сделать обязательным, иначе договор не позволит легально оплатить поставку.</p></details>
      <details><summary>Обязан ли соисполнитель вести раздельный учёт?</summary><p>Да. Обязанность вести раздельный учёт по контракту распространяется на всю кооперацию по статье 8 Закона № 275-ФЗ, а не только на головного исполнителя.</p></details>
      <details><summary>Кто отвечает за нарушения в кооперации?</summary><p>Ответственность несёт каждый участник за свои нарушения: с 1 марта 2025 года административные санкции применяются по статье 7.30.3 КоАП РФ, а за злоупотребления — по статьям 201.1 и 285.4 УК РФ.</p></details>
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
        <li id="ref-1">Федеральный закон от 29.12.2012 № 275-ФЗ «О государственном оборонном заказе» (ред. от 04.07.2026), ст. 3 — кооперация и исполнители — <a href="https://www.consultant.ru/document/cons_doc_LAW_140175/" target="_blank" rel="noopener">consultant.ru</a></li>
        <li id="ref-2">Федеральный закон от 29.12.2012 № 275-ФЗ, ст. 8 — основные обязанности головного исполнителя и исполнителя — <a href="https://base.garant.ru/70291366/31de5683116b8d79b08fa2d768e33df6/" target="_blank" rel="noopener">garant.ru</a></li>
        <li id="ref-3">Кодекс РФ об административных правонарушениях, ст. 7.30.3 (введена Федеральным законом от 28.12.2024 № 500-ФЗ) — ответственность в сфере ГОЗ — <a href="https://www.consultant.ru/document/cons_doc_LAW_34661/b945e9baa2f86ef7eafc3db4cd85e34064cb6801/" target="_blank" rel="noopener">consultant.ru</a></li>
      </ol>
      <p class="refs__note">Материал актуален на 4 августа 2026 года и носит справочный характер, не являясь юридической консультацией. Перед оформлением договоров в кооперации сверяйтесь с действующей редакцией Закона № 275-ФЗ и условиями головного контракта; конкретные требования к расчётам определяет режим сопровождения.</p>
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
    <form class="railform" id="leadForm" novalidate data-endpoint="/php/lead.php" data-source="soispolniteli-kooperaciya-goz">
      <div class="railform__badge">Разбор эксперта</div>
      <h3 class="railform__title">Работаете в кооперации ГОЗ?</h3>
      <p class="railform__sub">Поможем выстроить работу по цепочке кооперации: договор с соисполнителем с правильным идентификатором, открытие отдельных счетов, режим расчётов и сопровождение без возвратов. Разбор вашей схемы — за 1 час.</p>
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
    <a class="card reveal" href="/baza-znaniy/chto-takoe-gosudarstvennyy-oboronnyy-zakaz/"><div class="card__cover"><span>ГОЗ</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Что такое гособоронзаказ простыми словами</h3><div class="card__meta">ГОЗ · 17 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/identifikator-gosudarstvennogo-kontrakta-igk/"><div class="card__cover"><span>ИГК</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Идентификатор государственного контракта (ИГК)</h3><div class="card__meta">Операции · 15 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/otdelnyy-schet-po-goz/"><div class="card__cover"><span>Счёт ГОЗ</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Отдельный счёт по ГОЗ: режим и вывод прибыли</h3><div class="card__meta">ГОЗ · 18 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/kaznacheyskoe-i-bankovskoe-soprovozhdenie/"><div class="card__cover"><span>Режимы</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Казначейское и банковское сопровождение</h3><div class="card__meta">Сопровождение · 16 мин</div></div></a>
    <!-- auto-related:kaznacheyskiy-schet-subpodryadchika --><a class="card reveal" href="/baza-znaniy/kaznacheyskiy-schet-subpodryadchika/"><div class="card__cover"><span>Субподряд</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Нужен ли казначейский счёт субподрядчику</h3><div class="card__meta">Счета · 17 мин</div></div></a>
    <!-- auto-related:kaznacheyskoe-soprovozhdenie-niokr --><a class="card reveal" href="/baza-znaniy/kaznacheyskoe-soprovozhdenie-niokr/"><div class="card__cover"><span>НИОКР</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Казначейское сопровождение НИОКР: затраты, этапы, результат</h3><div class="card__meta">Сопровождение · 15 мин</div></div></a>
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

<section class="kz-sub" aria-labelledby="kzSubTitle" data-source="soispolniteli-kooperaciya-goz">
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
