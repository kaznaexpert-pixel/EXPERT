<?php /* Cache-Control задаёт .htaccess — единая точка правды для кэш-заголовков */ ?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Единая бюджетная платформа (ЕБП) казначейства: разбор 2026</title>
<meta name="description" content="ЕБП — новая учётно-платёжная модель казначейства взамен АСФК: конструктор РСКП, МЧД вместо карточек, версия 3.2 с 18.07.2026 и что это значит для исполнителя.">
<meta name="author" content="Ярослав Михайлов">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1">
<meta name="theme-color" content="#F4F1EB" media="(prefers-color-scheme: light)">
<meta name="theme-color" content="#141310" media="(prefers-color-scheme: dark)">
<!-- PROD: canonical и og:url ОБЯЗАТЕЛЬНО менять под URL каждой статьи -->
<link rel="canonical" href="https://kaznaexpert.ru/baza-znaniy/edinaya-byudzhetnaya-platforma-ebp/">
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
{"@context": "https://schema.org", "@type": "Article", "headline": "Единая бюджетная платформа (ЕБП): что меняется для исполнителя контракта в 2026 году", "description": "ЕБП — новая учётно-платёжная модель казначейства взамен АСФК: конструктор РСКП, МЧД вместо карточек, версия 3.2 с 18.07.2026 и что это значит для исполнителя.", "inLanguage": "ru-RU", "datePublished": "2026-08-10", "dateModified": "2026-08-26", "author": {"@type": "Person", "name": "Ярослав Михайлов", "jobTitle": "Главный эксперт по казначейскому сопровождению", "url": "https://kaznaexpert.ru/komanda/mihailov-yaroslav/"}, "publisher": {"@type": "Organization", "name": "КазнаЭксперт", "url": "https://kaznaexpert.ru", "logo": {"@type": "ImageObject", "url": "https://kaznaexpert.ru/img/logogold.png"}}, "image": "https://kaznaexpert.ru/img/og-image.png", "mainEntityOfPage": {"@type": "WebPage", "@id": "https://kaznaexpert.ru/baza-znaniy/edinaya-byudzhetnaya-platforma-ebp/"}}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "Главная", "item": "https://kaznaexpert.ru/"}, {"@type": "ListItem", "position": 2, "name": "База знаний", "item": "https://kaznaexpert.ru/baza-znaniy/"}, {"@type": "ListItem", "position": 3, "name": "Единая бюджетная платформа (ЕБП)", "item": "https://kaznaexpert.ru/baza-znaniy/edinaya-byudzhetnaya-platforma-ebp/"}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [{"@type": "Question", "name": "Что такое Единая бюджетная платформа (ЕБП)?", "acceptedAnswer": {"@type": "Answer", "text": "Это новая учётно-платёжная модель ГИИС «Электронный бюджет», встроенная в систему казначейских платежей, которой Федеральное казначейство заменяет устаревшую АСФК. Операции отражаются в реальном времени, распоряжения формируются в конструкторе, полномочия оформляются машиночитаемой доверенностью."}}, {"@type": "Question", "name": "Чем ЕБП отличается от АСФК?", "acceptedAnswer": {"@type": "Answer", "text": "Операции видны в реальном времени (а не за вчерашний день), вместо 16 форм распоряжений — конструктор с автозаполнением до 80% реквизитов, вместо трёх лицевых счетов учреждения — единый счёт с кодами поступлений, вместо 90 разрозненных баз — три платёжных центра."}}, {"@type": "Question", "name": "Что вошло в версию 3.2 ЕБП?", "acceptedAnswer": {"@type": "Answer", "text": "С 18 июля 2026 года: массовое санкционирование распоряжений из списковой формы, интеграция с бухгалтерскими системами по 41-м лицевым счетам, коды поступлений в документах по наличным, автозакрытие операционного дня, виджеты, выписки для финоргана и диагностические отчёты."}}, {"@type": "Question", "name": "Можно ли редактировать РСКП, загруженное из 1С?", "acceptedAnswer": {"@type": "Answer", "text": "Нет. Казначейство сделало это намеренно, чтобы данные в бухгалтерской системе и в ЕБП не расходились. При ошибке документ удаляют или отменяют и создают заново в бухгалтерской программе."}}, {"@type": "Question", "name": "Почему РСКП перестало загружаться из 1С?", "acceptedAnswer": {"@type": "Answer", "text": "С 1 июля 2026 года приём распоряжений по старому формату отключён. Нужна версия бухгалтерской системы с поддержкой актуального альбома форматов (в 1С — альбом 2.1); форматы опубликованы на сайте казначейства в разделе ГИС-документы."}}, {"@type": "Question", "name": "Нужна ли карточка образцов подписей в ЕБП?", "acceptedAnswer": {"@type": "Answer", "text": "Нет. Полномочия подписантов оформляются машиночитаемой доверенностью прямо в системе — руководителем, без визита в казначейский орган. Система проверяет полномочия автоматически."}}, {"@type": "Question", "name": "Как работает массовое санкционирование в 3.2?", "acceptedAnswer": {"@type": "Answer", "text": "Итоговый результат контроля проставляется из списковой формы по отфильтрованному пулу распоряжений — без входа в карточку, если автоконтроли пройдены и осталась одна визуальная проверка соответствия КБК назначению платежа."}}, {"@type": "Question", "name": "Когда все клиенты казначейства перейдут в ЕБП?", "acceptedAnswer": {"@type": "Answer", "text": "По плану казначейства: казённые учреждения — волнами до конца 2026 и в 2027 году, неполная касса и внебюджетные фонды — в 2028–2029 годах, после чего старый контур АСФК будет закрыт."}}, {"@type": "Question", "name": "Кто поможет перестроить работу под ЕБП?", "acceptedAnswer": {"@type": "Answer", "text": "Настройку интеграции, полномочия по МЧД и проведение платежей можно передать на аутсорсинг. Оставьте заявку — разберём вашу ситуацию и возьмём операции на себя."}}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "HowTo", "name": "Как исполнителю подготовиться к работе в ЕБП", "inLanguage": "ru-RU", "step": [{"@type": "HowToStep", "position": 1, "name": "Обновить бухгалтерскую систему", "text": "Установите версию с поддержкой актуального альбома форматов обмена: с 1 июля 2026 года приём РСКП по старому формату отключён."}, {"@type": "HowToStep", "position": 2, "name": "Оформить машиночитаемые доверенности", "text": "Переведите полномочия подписантов на МЧД — карточки образцов подписей в ЕБП не используются."}, {"@type": "HowToStep", "position": 3, "name": "Настроить интеграцию с ЕБП", "text": "Руководитель в личном кабинете даёт согласие на предоставление непубличных данных и добавляет сертификат сотрудника, совпадающий с сертификатом в бухгалтерской системе."}, {"@type": "HowToStep", "position": 4, "name": "Перестроить работу с РСКП", "text": "Формируйте распоряжения в конструкторе или загружайте из 1С; помните, что загруженное РСКП не редактируется — только удаление и повторная отправка."}, {"@type": "HowToStep", "position": 5, "name": "Указывать коды поступлений по наличным", "text": "Создавайте расшифровки и заявки на взнос с кодом поступления, чтобы средства зачислялись на верные реквизиты автоматически."}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "DefinedTermSet", "name": "Термины: Единая бюджетная платформа", "inLanguage": "ru-RU", "hasDefinedTerm": [{"@type": "DefinedTerm", "name": "ЕБП", "description": "Единая бюджетная платформа — новая учётно-платёжная модель ГИИС «Электронный бюджет», заменяющая АСФК."}, {"@type": "DefinedTerm", "name": "АСФК", "description": "Прежняя автоматизированная система Федерального казначейства, контур которой закрывается к 2029 году."}, {"@type": "DefinedTerm", "name": "РСКП", "description": "Распоряжение о совершении казначейского платежа — основной платёжный документ участника."}, {"@type": "DefinedTerm", "name": "Конструктор РСКП", "description": "Механизм формирования распоряжения в ЕБП с автозаполнением до 80% реквизитов вместо выбора из 16 форм."}, {"@type": "DefinedTerm", "name": "МЧД", "description": "Машиночитаемая доверенность — электронное оформление полномочий подписантов взамен карточек образцов подписей."}, {"@type": "DefinedTerm", "name": "Платёжные центры", "description": "Три центра обработки платежей казначейства: Нижний Новгород, Новосибирская область, Приморский край."}, {"@type": "DefinedTerm", "name": "Массовое санкционирование", "description": "Выбор итогового результата контроля РСКП из списковой формы без входа в карточку каждого документа."}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "Person", "name": "Ярослав Михайлов", "jobTitle": "Главный эксперт по казначейскому сопровождению", "worksFor": {"@type": "Organization", "name": "КазнаЭксперт", "url": "https://kaznaexpert.ru"}, "url": "https://kaznaexpert.ru/komanda/mihailov-yaroslav/", "sameAs": ["https://t.me/Kaznaexpert", "https://www.rusprofile.ru/ip/321784700367672"]}
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
<meta property="og:title" content="Единая бюджетная платформа (ЕБП): что меняется в 2026">
<meta property="og:description" content="ЕБП заменяет АСФК: операции в реальном времени, конструктор распоряжений с автозаполнением до 80% реквизитов, МЧД вместо карточек подписей, массовое санкционирование в версии 3.2.">
<meta property="og:url" content="https://kaznaexpert.ru/baza-znaniy/edinaya-byudzhetnaya-platforma-ebp/">
<meta property="og:image" content="https://kaznaexpert.ru/img/og-image.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="Единая бюджетная платформа (ЕБП): что меняется в 2026 — КазнаЭксперт">
<meta property="article:published_time" content="2026-06-05T09:00:00+03:00">
<meta property="article:modified_time" content="2026-08-26T09:00:00+03:00">
<meta property="article:author" content="https://kaznaexpert.ru/komanda/mihailov-yaroslav/">
<meta property="article:section" content="База знаний">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Единая бюджетная платформа (ЕБП): что меняется в 2026">
<meta name="twitter:description" content="ЕБП заменяет АСФК: операции в реальном времени, конструктор распоряжений с автозаполнением до 80% реквизитов, МЧД вместо карточек подписей, массовое санкционирование в версии 3.2.">
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
  <nav class="crumbs" aria-label="Хлебные крошки"><a href="/">Главная</a> › <a href="/baza-znaniy/">База знаний</a> › Единая бюджетная платформа (ЕБП)</nav>

  <aside class="toc" aria-label="Содержание">
    <div class="toc__label">Содержание</div>
    <ul class="toc__list" id="tocList">
      <li><a href="#korotkiy-otvet">Короткий ответ: что такое ЕБП</a></li>
      <li><a href="#chem-otlichaetsya">Чем ЕБП отличается от старой системы</a></li>
      <li><a href="#rskp-konstruktor">Конструктор РСКП вместо 16 форм: что важно знать</a></li>
      <li><a href="#mchd">МЧД вместо карточек образцов подписей</a></li>
      <li><a href="#versiya-32">Версия 3.2 с 18 июля 2026: семь новаций</a></li>
      <li><a href="#integraciya-1s">Интеграция с 1С и бухгалтерскими системами</a></li>
      <li><a href="#nalichnye">Наличные: конец «зависших» поступлений на ПД</a></li>
      <li><a href="#migraciya">График миграции: кто и когда переходит в ЕБП</a></li>
      <li><a href="#chto-delat">Что делать исполнителю контракта уже сейчас</a></li>
      <li><a href="#glossary">Глоссарий</a></li>
      <li><a href="#faq">Частые вопросы</a></li>
    </ul>
  </aside>

  <article class="content" id="main">
    <div class="hero">
      <img class="hero__crest hero__crest--light" src="/img/logogold-crest.webp" alt="" aria-hidden="true" width="188" height="137" decoding="async" loading="lazy">
      <img class="hero__crest hero__crest--dark" src="/img/LogoWhite.png" alt="" aria-hidden="true" width="188" height="137" decoding="async" loading="lazy">
      <div class="eyebrow">База знаний · Электронный бюджет <span class="fresh">Актуально на 2026</span></div>
    <h1>Единая бюджетная платформа (ЕБП): что меняется для исполнителя контракта в 2026 году</h1>
    <div class="byline"><span class="av">ЯМ</span><span>Автор: <a href="/komanda/mihailov-yaroslav/">Ярослав Михайлов</a>, главный эксперт</span><span class="dot">·</span><span>15+ лет в Казначействе</span><span class="dot">·</span><span>13 мин чтения</span><span class="dot">·</span><span>Обновлено 26 августа 2026</span></div>
    </div>

    <div class="share">
      <span class="share__label">Поделиться:</span>
      <a href="https://t.me/share/url?url=https%3A%2F%2Fkaznaexpert.ru%2Fbaza-znaniy%2Fedinaya-byudzhetnaya-platforma-ebp%2F&amp;text=%D0%95%D0%B4%D0%B8%D0%BD%D0%B0%D1%8F%20%D0%B1%D1%8E%D0%B4%D0%B6%D0%B5%D1%82%D0%BD%D0%B0%D1%8F%20%D0%BF%D0%BB%D0%B0%D1%82%D1%84%D0%BE%D1%80%D0%BC%D0%B0%20%28%D0%95%D0%91%D0%9F%29%20%D0%BA%D0%B0%D0%B7%D0%BD%D0%B0%D1%87%D0%B5%D0%B9%D1%81%D1%82%D0%B2%D0%B0%3A%20%D0%BE%D0%BF%D0%B5%D1%80%D0%B0%D1%86%D0%B8%D0%B8%20%D0%B2%20%D1%80%D0%B5%D0%B0%D0%BB%D1%8C%D0%BD%D0%BE%D0%BC%20%D0%B2%D1%80%D0%B5%D0%BC%D0%B5%D0%BD%D0%B8%2C%20%D0%BA%D0%BE%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%82%D0%BE%D1%80%20%D0%A0%D0%A1%D0%9A%D0%9F%20%D0%B2%D0%BC%D0%B5%D1%81%D1%82%D0%BE%2016%20%D1%84%D0%BE%D1%80%D0%BC%2C%20%D0%9C%D0%A7%D0%94%20%D0%B2%D0%BC%D0%B5%D1%81%D1%82%D0%BE%20%D0%BA%D0%B0%D1%80%D1%82%D0%BE%D1%87%D0%B5%D0%BA%20%D0%BF%D0%BE%D0%B4%D0%BF%D0%B8%D1%81%D0%B5%D0%B9%2C%20%D0%B2%D0%B5%D1%80%D1%81%D0%B8%D1%8F%203.2%20%D1%81%20%D0%BC%D0%B0%D1%81%D1%81%D0%BE%D0%B2%D1%8B%D0%BC%20%D1%81%D0%B0%D0%BD%D0%BA%D1%86%D0%B8%D0%BE%D0%BD%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5%D0%BC%20%E2%80%94%20%D1%80%D0%B0%D0%B7%D0%B1%D0%BE%D1%80%20%D0%BF%D0%BE%20%D0%BC%D0%B0%D1%82%D0%B5%D1%80%D0%B8%D0%B0%D0%BB%D0%B0%D0%BC%20%D0%B2%D0%B5%D0%B1%D0%B8%D0%BD%D0%B0%D1%80%D0%B0%20%D0%A4%D0%B5%D0%B4%D0%B5%D1%80%D0%B0%D0%BB%D1%8C%D0%BD%D0%BE%D0%B3%D0%BE%20%D0%BA%D0%B0%D0%B7%D0%BD%D0%B0%D1%87%D0%B5%D0%B9%D1%81%D1%82%D0%B2%D0%B0" target="_blank" rel="noopener"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.56 8.25l-1.86 8.76c-.14.62-.5.77-1.02.48l-2.82-2.08-1.36 1.31c-.15.15-.28.28-.57.28l.2-2.89 5.27-4.76c.23-.2-.05-.32-.35-.12l-6.51 4.1-2.8-.88c-.61-.19-.62-.61.13-.9l10.95-4.22c.5-.18.95.12.79.85z"/></svg>Telegram</a>
      <button type="button" id="copyLink"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.07 0l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.07 0l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg><span>Копировать ссылку</span></button>
      <button type="button" id="printBtn"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9V2h12v7M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2M6 14h12v8H6z"/></svg>Скачать PDF</button>
    </div>

    <details class="mtoc"><summary>Содержание статьи</summary>
      <ol>
        <li><a href="#korotkiy-otvet">Короткий ответ: что такое ЕБП</a></li><li><a href="#chem-otlichaetsya">Чем ЕБП отличается от старой системы</a></li><li><a href="#rskp-konstruktor">Конструктор РСКП вместо 16 форм: что важно знать</a></li><li><a href="#mchd">МЧД вместо карточек образцов подписей</a></li><li><a href="#versiya-32">Версия 3.2 с 18 июля 2026: семь новаций</a></li><li><a href="#integraciya-1s">Интеграция с 1С и бухгалтерскими системами</a></li><li><a href="#nalichnye">Наличные: конец «зависших» поступлений на ПД</a></li><li><a href="#migraciya">График миграции: кто и когда переходит в ЕБП</a></li><li><a href="#chto-delat">Что делать исполнителю контракта уже сейчас</a></li><li><a href="#glossary">Глоссарий</a></li><li><a href="#faq">Частые вопросы</a></li>
      </ol>
    </details>

    <div class="tldr">Единая бюджетная платформа (ЕБП) — новая учётно-платёжная модель ГИИС «Электронный бюджет», которой Федеральное казначейство заменяет технически устаревшую АСФК. Ключевые отличия для участника казначейского сопровождения: операции отражаются в режиме реального времени одновременно на лицевом и казначейском счетах; вместо 16 форм распоряжений — конструктор с автозаполнением до 80% реквизитов; вместо карточек образцов подписей — машиночитаемые доверенности, которые руководитель оформляет прямо в системе; платежи проходят через три платёжных центра, а выплаты через НСПК санкционируются автоматически. С 18 июля 2026 года действует версия 3.2: массовое санкционирование распоряжений, интеграция с бухгалтерскими системами по 41-м лицевым счетам и коды поступлений в документах по наличным. Полный переход с закрытием старого контура запланирован до 2029 года.</div>

    <section class="keyfacts grain" aria-label="Ключевые факты">
      <h2>Коротко о главном</h2>
      <div class="keyfacts__grid">
        <div class="kf"><div class="kf__n">Реальное время</div><div class="kf__t"><b>Вместо «за вчера»</b> — Операции отражаются одновременно на лицевом и казначейском счёте в момент проведения — финансист видит картину сейчас, а не накопительным итогом за вчерашний день</div></div>
        <div class="kf"><div class="kf__n">Конструктор РСКП</div><div class="kf__t"><b>До 80% автозаполнения</b> — Вместо выбора из 16 форм старой системы — конструктор операций с автоматическим заполнением реквизитов распоряжения</div></div>
        <div class="kf"><div class="kf__n">МЧД</div><div class="kf__t"><b>Вместо карточек</b> — Полномочия подписантов оформляются руководителем прямо в системе машиночитаемой доверенностью — без визита в казначейство и бумажных карточек</div></div>
        <div class="kf"><div class="kf__n">Версия 3.2</div><div class="kf__t"><b>С 18.07.2026</b> — Массовое санкционирование распоряжений, интеграция с бухгалтерскими системами, коды поступлений в документах по наличным</div></div>
      </div>
    </section>

    <h2 id="korotkiy-otvet">Короткий ответ: что такое ЕБП</h2>
    <div class="answer reveal"><p>ЕБП (Единая бюджетная платформа) — это новая учётно-платёжная модель ГИИС «Электронный бюджет», встроенная в систему казначейских платежей, которой Федеральное казначейство заменяет устаревшую АСФК. Для исполнителя контракта это значит: операции по счетам видны в реальном времени, распоряжения о платежах формируются в конструкторе с автозаполнением, а полномочия подписантов оформляются машиночитаемой доверенностью без визита в казначейство.</p></div>
    <p>ЕБП — крупнейший проект импортозамещения в истории казначейства с горизонтом до 2029 года. По данным вебинара Федерального казначейства, с апреля 2026 года в платформе уже работает 71 управление, все автономные и бюджетные учреждения на казначейском обслуживании — более 45 тысяч организаций, почти 2500 финансовых органов и около 6000 учредителей.</p>

    <h2 id="chem-otlichaetsya">Чем ЕБП отличается от старой системы</h2>
    <p>Три системных изменения, которые уже действуют.</p>
    <p class="note">Работать в платформе исполнителю придётся ежедневно — от сведений об операциях до платёжек; эту рутину можно передать на <a href="/uslugi/kaznacheyskoe-soprovozhdenie/">казначейское сопровождение контракта &rarr;</a></p>
    <ul>
      <li><b>Реальное время вместо «за вчера».</b> В старой модели операции на лицевом и казначейском счетах учитывались раздельно, и реальная картина была видна только за прошедший день. В ЕБП поступление, расход и привлечение отражаются в момент проведения одновременно на обоих уровнях — и казначею, и финансовому органу, и клиенту.</li>
      <li><b>Единый счёт вместо трёх.</b> Раньше у бюджетных и автономных учреждений было по три лицевых счёта: операции разносили вручную и сводили из трёх таблиц. Теперь — единый счёт (80-й для бюджетных, 90-й для автономных) с семью кодами поступлений, которые система распределяет автоматически. Ошибиться счётом при оплате стало невозможно.</li>
      <li><b>Три платёжных центра вместо 90 баз.</b> Платежи, которые раньше каждое управление проводило в своей базе, теперь идут через платёжные центры в Нижнем Новгороде, Новосибирской области и Приморском крае — с покрытием всех часовых поясов. Выплаты через НСПК санкционируются автоматически, без участия оператора — деньги доходят мгновенно.</li>
    </ul>
    <p>Ещё одно новшество — лицевые счета с отложенной датой открытия: счёт можно открыть заранее, и до наступления активной даты платежи на него не поступят. Как открыть счёт — в инструкции про <a href="/baza-znaniy/licevoy-schet-71-kak-otkryt/">лицевой счёт 71</a>.</p>

    <h2 id="rskp-konstruktor">Конструктор РСКП вместо 16 форм: что важно знать</h2>
    <p>В старой системе для распоряжения о совершении казначейского платежа приходилось выбирать из 16 форм. В ЕБП это конструктор: выбираете операцию — система заполняет до 80% реквизитов автоматически. Меньше ручного ввода — меньше ошибок и отказов при санкционировании.</p>
    <p>Два жёстких правила, о которых прямо сказало казначейство. Первое: <b>РСКП, загруженное из бухгалтерской системы, отредактировать в ЕБП нельзя</b> — ни назначение платежа, ни реквизиты. Это сделано специально, чтобы данные в 1С и в казначейском учёте не расходились. Если ошиблись — документ удаляют или отменяют и создают заново в своей бухгалтерской программе. Второе: <b>РСКП-уточнение создаётся только на основании структурированного документа в самой системе</b> — загрузить его из 1С нельзя (выгрузить в 1С — можно). Подробно о работе с распоряжением — в разборе <a href="/baza-znaniy/rasporyazhenie-o-sovershenii-kaznacheyskogo-platezha/">РСКП: заполнение и возврат</a>.</p>

    <h2 id="mchd">МЧД вместо карточек образцов подписей</h2>
    <p>ЕБП окончательно закрепила переход с бумажных карточек образцов подписей на машиночитаемые доверенности. Раньше для выдачи полномочий нужно было ехать в казначейство, регистрировать карточку и ждать; сверка подписей шла по бумажным или отсканированным карточкам. Теперь при смене бухгалтера или подписанта руководитель оформляет полномочия прямо в системе, и система проверяет их автоматически.</p>
    <p>Для исполнителя это значит: комплект документов на открытие счёта стал короче (карточка больше не нужна), а смена подписанта — вопрос минут, а не поездки в территориальный орган. Как оформить доверенность — в материале про <a href="/baza-znaniy/mashinochitaemaya-doverennost-kaznachejstvo/">МЧД для казначейства</a>.</p>

    <h2 id="versiya-32">Версия 3.2 с 18 июля 2026: семь новаций</h2>
    <p>Релиз 3.2 — первый крупный после завершения миграции бюджетных и автономных учреждений. Что вошло:</p>
    <table>
      <caption>Новации версии 3.2 ЕБП (по материалам вебинара Федерального казначейства)</caption>
      <tr><th>Новация</th><th>Суть</th></tr>
      <tr><td>Массовое санкционирование РСКП</td><td>Итоговый результат контроля проставляется из списковой формы без входа в каждую карточку — при пройденных автоконтролях и единственной визуальной проверке соответствия КБК назначению платежа</td></tr>
      <tr><td>Интеграция с бухгалтерскими системами</td><td>РСКП-перечисление по 41-м лицевым счетам формируется в 1С и направляется в ЕБП — двойной ввод уходит; подписание — по-прежнему в ЕБП</td></tr>
      <tr><td>Коды поступлений в документах по наличным</td><td>Расшифровка сумм и заявка на взнос наличных содержат код поступления — средства зачисляются на нужный код автоматически</td></tr>
      <tr><td>Автозакрытие операционного дня</td><td>Операционный день закрывается автоматически после диагностики и обработки выписок, либо в 11:00 по Москве</td></tr>
      <tr><td>Виджеты в личных кабинетах</td><td>Остатки, расходы учреждений, виды наличных средств — в режиме реального времени</td></tr>
      <tr><td>Выписки для финоргана</td><td>Финансовый орган видит выписки лицевых счетов своих учреждений без запросов в казначейство</td></tr>
      <tr><td>Диагностические отчёты</td><td>Контроль отрицательных остатков в конце операционного дня: при ошибке день не закроется, выписки не сформируются</td></tr>
    </table>

    <h2 id="integraciya-1s">Интеграция с 1С и бухгалтерскими системами</h2>
    <p>Ключевой практический момент: <b>с 1 июля 2026 года казначейство отключило приём РСКП по старому формату</b>. Работает только обмен по новой версии форматов (в 1С — версия альбома 2.1). Если распоряжения перестали загружаться из бухгалтерской программы — первым делом обновите её до версии с поддержкой актуального альбома; форматы обмена опубликованы на сайте Федерального казначейства в разделе ГИС-документы.</p>
    <p>Для подключения обмена руководитель в личном кабинете ЕБП даёт согласие на предоставление непубличных данных и добавляет сертификат сотрудника — он должен совпадать с сертификатом, загруженным в бухгалтерскую систему. Загрузка РСКП по наличным средствам из бухгалтерских систем — в разработке; форматы обмена расшифровок сумм опубликованы с 20 июля. Подробнее о связке с учётной системой — в материале про <a href="/baza-znaniy/integraciya-eis-1s/">интеграцию ЕИС и 1С</a>.</p>

    <h2 id="nalichnye">Наличные: конец «зависших» поступлений на ПД</h2>
    <p>Частая боль: при внесении наличных суммы падали на код ПД и КБК-180, после чего их приходилось вручную уточнять на корректные реквизиты. С версии 3.2 анализатор ищет в назначении платежа ключевые слова и привязывает поступление к расшифровке, объявлению или заявке на взнос — средства сразу отражаются по тем реквизитам, по которым созданы документы-основания. Логика восстановления кассового расхода при этом сохранена.</p>

    <h2 id="migraciya">График миграции: кто и когда переходит в ЕБП</h2>
    <table>
      <caption>График перевода клиентов казначейства в ЕБП (по материалам вебинара ФК)</caption>
      <tr><th>Период</th><th>Кто переходит</th></tr>
      <tr><td>С апреля 2026</td><td>71 УФК, все бюджетные и автономные учреждения на казначейском обслуживании (45 000+ организаций), ~2500 финорганов, ~6000 учредителей, 250+ получателей средств</td></tr>
      <tr><td>Июль 2026</td><td>Первая волна казённых учреждений по счетам средств во временном распоряжении (800+ организаций Калининградской, Московской и Рязанской областей)</td></tr>
      <tr><td>До конца 2026</td><td>Ещё 8 волн: казённые учреждения и терфонды — более 30 000 организаций, ещё 17 управлений</td></tr>
      <tr><td>2027</td><td>Основная ветка лицевых счетов казённых учреждений регионов</td></tr>
      <tr><td>2028–2029</td><td>Неполная касса и государственные внебюджетные фонды; закрытие старого контура АСФК</td></tr>
    </table>
    <p>Отдельные ожидаемые доработки: единый личный кабинет для централизованных бухгалтерий по всем клиентам — ориентировочно середина 2027 года; разделитель «запятая» в суммах — в проработке.</p>

    <h2 id="chto-delat">Что делать исполнителю контракта уже сейчас</h2>
    <ul>
      <li>Обновить бухгалтерскую систему до версии с актуальным альбомом форматов — старый формат РСКП не принимается с 1 июля.</li>
      <li>Проверить полномочия подписантов: оформить машиночитаемые доверенности, не рассчитывать на карточки.</li>
      <li>Настроить интеграцию с ЕБП (согласие на непубличные данные + сертификат) — уйти от двойного ввода.</li>
      <li>Помнить: загруженное из 1С распоряжение в ЕБП не редактируется — ошибку исправляют пересозданием документа.</li>
      <li>По наличным — создавать расшифровки и заявки с кодом поступления, чтобы средства не зависали на уточнении.</li>
    </ul>

    <h2 id="voprosy-vebinara">Вопросы с вебинара Казначейства: что ответили официально</h2>
    <div class="answer reveal"><p>На вебинаре Федерального казначейства о версии 3.2 команда ЕБП ответила на вопросы пользователей. Ключевое: массовое подписание распоряжений уже реализовано для всех типов клиентов, отредактировать загруженное из 1С распоряжение нельзя — его удаляют и создают заново, а поступления наличных перестали «падать» на код ПД благодаря доработанному анализатору счёта 40116.</p>
    <p class="note">Пока идёт миграция, ошибки в документах обходятся дороже обычного; при сопровождении контракта изменения платформы перестают быть вашей проблемой: <a href="/uslugi/kaznacheyskoe-soprovozhdenie/">казначейское сопровождение &rarr;</a></p></div>
    <p><b>Почему не работает массовое подписание?</b> Оно реализовано для всех клиентов — бюджетных и автономных учреждений, казённых, получателей средств. Условия: документы направлены на подписание именно вам и весь отобранный пул находится в одном статусе. Если условия соблюдены, а подписание недоступно — это повод для обращения в техподдержку.</p>
    <p><b>Как исправить распоряжение, загруженное из бухгалтерской системы?</b> Никак: редактирование в ЕБП закрыто намеренно, чтобы данные в 1С и в казначейском учёте не разошлись. Ошибочный документ удаляют или отменяют в ЕБП, вносят правку в бухгалтерской системе и отправляют заново.</p>
    <p><b>Что с «зависшими» наличными?</b> Анализатор поступлений со счёта 40116 доработан: система ищет в назначении платежа реквизиты расшифровки, объявления или заявки и зачисляет сумму сразу на корректный код поступления. Поступления больше не должны классифицироваться на код ПД и КБК 180 — исчезает необходимость уточнений.</p>
    <p><b>Как понять, придёт ли подкрепление под распоряжение?</b> В списковой форме появился столбец «Дата подписания уведомления»: по нему видно, попало ли распоряжение в заявку на подкрепление, и нужно ли запрашивать дополнительное.</p>
    <p><b>Когда централизованным бухгалтериям дадут один личный кабинет по всем клиентам?</b> Запрос принят, реализация планируется в середине 2027 года — после завершения ускоренной миграции казённых учреждений.</p>
    <p>Масштаб перехода: с июля в ЕБП зашла первая волна казённых учреждений по счетам для средств во временное распоряжение — более 800 организаций Калининградской, Московской и Рязанской областей; до конца 2026 года запланировано ещё восемь волн — более 30 тысяч организаций и 17 отделений казначейства.</p>
    <h2 id="glossary">Глоссарий</h2>
    <dl class="gloss">
      <div><dt>ЕБП</dt><dd>Единая бюджетная платформа — новая учётно-платёжная модель ГИИС «Электронный бюджет», заменяющая АСФК.</dd></div>
      <div><dt>АСФК</dt><dd>Прежняя автоматизированная система Федерального казначейства, контур которой закрывается к 2029 году.</dd></div>
      <div><dt>РСКП</dt><dd>Распоряжение о совершении казначейского платежа — основной платёжный документ участника.</dd></div>
      <div><dt>Конструктор РСКП</dt><dd>Механизм формирования распоряжения в ЕБП с автозаполнением до 80% реквизитов вместо выбора из 16 форм.</dd></div>
      <div><dt>МЧД</dt><dd>Машиночитаемая доверенность — электронное оформление полномочий подписантов взамен карточек образцов подписей.</dd></div>
      <div><dt>Платёжные центры</dt><dd>Три центра обработки платежей казначейства: Нижний Новгород, Новосибирская область, Приморский край.</dd></div>
      <div><dt>Массовое санкционирование</dt><dd>Выбор итогового результата контроля РСКП из списковой формы без входа в карточку каждого документа.</dd></div>
    </dl>

    <h2 id="faq">Частые вопросы</h2>
    <div class="faq">
      <details open><summary>Что такое Единая бюджетная платформа (ЕБП)?</summary><p>Это новая учётно-платёжная модель ГИИС «Электронный бюджет», встроенная в систему казначейских платежей, которой Федеральное казначейство заменяет устаревшую АСФК. Операции отражаются в реальном времени, распоряжения формируются в конструкторе, полномочия оформляются машиночитаемой доверенностью.</p></details>
      <details><summary>Чем ЕБП отличается от АСФК?</summary><p>Операции видны в реальном времени (а не за вчерашний день), вместо 16 форм распоряжений — конструктор с автозаполнением до 80% реквизитов, вместо трёх лицевых счетов учреждения — единый счёт с кодами поступлений, вместо 90 разрозненных баз — три платёжных центра.</p></details>
      <details><summary>Что вошло в версию 3.2 ЕБП?</summary><p>С 18 июля 2026 года: массовое санкционирование распоряжений из списковой формы, интеграция с бухгалтерскими системами по 41-м лицевым счетам, коды поступлений в документах по наличным, автозакрытие операционного дня, виджеты, выписки для финоргана и диагностические отчёты.</p></details>
      <details><summary>Можно ли редактировать РСКП, загруженное из 1С?</summary><p>Нет. Казначейство сделало это намеренно, чтобы данные в бухгалтерской системе и в ЕБП не расходились. При ошибке документ удаляют или отменяют и создают заново в бухгалтерской программе.</p></details>
      <details><summary>Почему РСКП перестало загружаться из 1С?</summary><p>С 1 июля 2026 года приём распоряжений по старому формату отключён. Нужна версия бухгалтерской системы с поддержкой актуального альбома форматов (в 1С — альбом 2.1); форматы опубликованы на сайте казначейства в разделе ГИС-документы.</p></details>
      <details><summary>Нужна ли карточка образцов подписей в ЕБП?</summary><p>Нет. Полномочия подписантов оформляются машиночитаемой доверенностью прямо в системе — руководителем, без визита в казначейский орган. Система проверяет полномочия автоматически.</p></details>
      <details><summary>Как работает массовое санкционирование в 3.2?</summary><p>Итоговый результат контроля проставляется из списковой формы по отфильтрованному пулу распоряжений — без входа в карточку, если автоконтроли пройдены и осталась одна визуальная проверка соответствия КБК назначению платежа.</p></details>
      <details><summary>Когда все клиенты казначейства перейдут в ЕБП?</summary><p>По плану казначейства: казённые учреждения — волнами до конца 2026 и в 2027 году, неполная касса и внебюджетные фонды — в 2028–2029 годах, после чего старый контур АСФК будет закрыт.</p></details>
      <details><summary>Кто поможет перестроить работу под ЕБП?</summary><p>Настройку интеграции, полномочия по МЧД и проведение платежей можно передать на аутсорсинг. Оставьте заявку — разберём вашу ситуацию и возьмём операции на себя.</p></details>
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

    <div class="refs">
      <h2>Источники и нормативная база</h2>
      <ol>
        <li id="ref-1">Вебинар Федерального казначейства «Новые функциональные возможности версии 3.2 Единой бюджетной платформы (ГИИС ЭБ)», июль 2026 — <a href="https://roskazna.gov.ru/" target="_blank" rel="noopener">roskazna.gov.ru</a></li>
        <li id="ref-2">ГИС-документы (форматы обмена) — Федеральное казначейство — <a href="https://roskazna.gov.ru/gis/dokumenty/" target="_blank" rel="noopener">roskazna.gov.ru</a></li>
        <li id="ref-3">ГИИС «Электронный бюджет» — Федеральное казначейство — <a href="https://roskazna.gov.ru/gis/elektronnyj-byudzhet/" target="_blank" rel="noopener">roskazna.gov.ru</a></li>
      </ol>
      <p class="refs__note">Материал подготовлен по выступлениям представителей Федерального казначейства на вебинаре о релизе версии 3.2 ЕБП; функциональность и сроки могут уточняться — актуальный перечень изменений публикуется в разделе «Журнал версий» платформы. Проверено экспертом КазнаЭксперт. Дата актуализации — 26 августа 2026.</p>
    </div>
  </article>

  <aside class="rail">
    <form class="railform" id="leadForm" novalidate data-endpoint="/php/lead.php" data-source="edinaya-byudzhetnaya-platforma-ebp">
      <div class="railform__badge">Разбор эксперта</div>
      <h3 class="railform__title">Работаете в ЕБП с казначейским счётом?</h3>
      <p class="railform__sub">Поможем перестроить работу под новую платформу: РСКП, интеграция с 1С, полномочия по МЧД и платежи без возвратов. Разбор эксперта — в течение часа.</p>
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
<a class="rail-svc" href="/uslugi/soprovozhdenie-postoplata/"><span class="rail-svc__k">Поможем под ключ</span><span class="rail-svc__n">Сопровождение контракта (постоплата) →</span></a>
</aside>
</div>

<section class="related" aria-labelledby="relTitle">
  <div class="related__head"><h2 id="relTitle">Что почитать ещё</h2><a href="/baza-znaniy/">Вся база знаний →</a></div>
  <div class="related__grid">
    <a class="card reveal" href="/baza-znaniy/elektronnyy-byudzhet-dlya-ispolnitelya-kontrakta/"><div class="card__cover"><span>Электронный бюджет</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Электронный бюджет для исполнителя контракта: вход и работа</h3><div class="card__meta">Электронный бюджет · 14 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/rasporyazhenie-o-sovershenii-kaznacheyskogo-platezha/"><div class="card__cover"><span>РСКП</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Распоряжение о совершении казначейского платежа</h3><div class="card__meta">Операции · 14 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/mashinochitaemaya-doverennost-kaznachejstvo/"><div class="card__cover"><span>МЧД</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Машиночитаемая доверенность для казначейства</h3><div class="card__meta">Электронный бюджет · 13 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/integraciya-eis-1s/"><div class="card__cover"><span>1С</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Интеграция ЕИС и 1С: обмен для сопровождения</h3><div class="card__meta">Электронный бюджет · 13 мин</div></div></a>
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

<section class="kz-sub" aria-labelledby="kzSubTitle" data-source="edinaya-byudzhetnaya-platforma-ebp">
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
</body>
</html>
