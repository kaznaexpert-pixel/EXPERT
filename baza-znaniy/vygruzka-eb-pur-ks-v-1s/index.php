<?php /* Cache-Control задаёт .htaccess — единая точка правды для кэш-заголовков */ ?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Выписка ЕБ (ПУР КС) в 1С: выгрузка XML и TXT, загрузка, ошибки</title>
<meta name="description" content="Как выгрузить выписку по лицевому счёту 71 из «Электронного бюджета» (ПУР КС) в XML или TXT и загрузить в 1С:Бухгалтерию и 1С:ERP: файлы, настройки, ошибки, сверка.">
<meta name="author" content="Ярослав Михайлов">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1">
<meta name="theme-color" content="#F4F1EB" media="(prefers-color-scheme: light)">
<meta name="theme-color" content="#141310" media="(prefers-color-scheme: dark)">
<!-- PROD: canonical и og:url ОБЯЗАТЕЛЬНО менять под URL каждой статьи -->
<link rel="canonical" href="https://kaznaexpert.ru/baza-znaniy/vygruzka-eb-pur-ks-v-1s/">
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
{"@context": "https://schema.org", "@type": "Article", "headline": "Выписка из «Электронного бюджета» (ПУР КС) в 1С: выгрузка XML и TXT, загрузка и сверка", "description": "Как выгрузить выписку по лицевому счёту 71 из «Электронного бюджета» (ПУР КС) в XML или TXT и загрузить в 1С:Бухгалтерию и 1С:ERP: файлы, настройки, ошибки, сверка.", "inLanguage": "ru-RU", "datePublished": "2026-09-03", "dateModified": "2026-09-03", "author": {"@type": "Person", "name": "Ярослав Михайлов", "jobTitle": "Главный эксперт по казначейскому сопровождению", "url": "https://kaznaexpert.ru/komanda/mihailov-yaroslav/", "@id": "https://kaznaexpert.ru/komanda/mihailov-yaroslav/#person", "image": "https://kaznaexpert.ru/img/team/mihailov-photo.jpg"}, "publisher": {"@type": "Organization", "name": "КазнаЭксперт", "url": "https://kaznaexpert.ru", "logo": {"@type": "ImageObject", "url": "https://kaznaexpert.ru/img/logogold.png"}, "@id": "https://kaznaexpert.ru/#organization"}, "image": ["https://kaznaexpert.ru/img/og/baza-znaniy__vygruzka-eb-pur-ks-v-1s-16x9.jpg", "https://kaznaexpert.ru/img/og/baza-znaniy__vygruzka-eb-pur-ks-v-1s-4x3.webp", "https://kaznaexpert.ru/img/og/baza-znaniy__vygruzka-eb-pur-ks-v-1s-1x1.webp"], "mainEntityOfPage": {"@type": "WebPage", "@id": "https://kaznaexpert.ru/baza-znaniy/vygruzka-eb-pur-ks-v-1s/"}, "articleSection": "Операции и отчётность", "citation": ["Постановление Правительства РФ от 30.06.2015 № 658 «О государственной интегрированной информационной системе управления общественными финансами „Электронный бюджет“» — consultant.ru", "Бюджетный кодекс РФ, глава 24.4 «Казначейское сопровождение» (ст. 242.23–242.27) — consultant.ru", "Единый портал бюджетной системы Российской Федерации — вход в ГИИС «Электронный бюджет»", "Казначейство России — клиентам: лицевые счета участников казначейского сопровождения (код 71) и подключение к ГИИС «Электронный бюджет»"]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "Главная", "item": "https://kaznaexpert.ru/"}, {"@type": "ListItem", "position": 2, "name": "База знаний", "item": "https://kaznaexpert.ru/baza-znaniy/"}, {"@type": "ListItem", "position": 3, "name": "Выписка ЕБ (ПУР КС) в 1С", "item": "https://kaznaexpert.ru/baza-znaniy/vygruzka-eb-pur-ks-v-1s/"}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [{"@type": "Question", "name": "Чем выписка «Электронного бюджета» отличается от банковской?", "acceptedAnswer": {"@type": "Answer", "text": "Банк отдаёт готовый файл для 1С в текстовом формате «клиент-банк», а «Электронный бюджет» — пакет XML-файлов, который 1С без конвертации или внешней обработки не загружает. Кроме того, казначейская выписка формируется по операционным дням с приложением документов-оснований, а операции в ней всегда содержат идентификатор контракта и код направления расходования."}}, {"@type": "Question", "name": "Почему 1С не видит операции после загрузки?", "acceptedAnswer": {"@type": "Answer", "text": "Чаще всего в параметрах загрузки выбран расчётный счёт вместо лицевого, либо номер счёта или БИК в карточке банковского счёта не совпадают с реквизитами в файле. Вторая причина — загружены не те файлы пакета: выписка TSE_StatemAcc без платёжных документов D07/D08. Проверьте счёт, день и состав файлов."}}, {"@type": "Question", "name": "Как часто выгружать выписку из «Электронного бюджета»?", "acceptedAnswer": {"@type": "Answer", "text": "За каждый операционный день с движениями: в период активных платежей — ежедневно, в паузах — по факту операций, но не реже раза в неделю для контроля остатка. Накопительной выписки за период с одним файлом система не даёт — пакет содержит файлы по каждому дню."}}, {"@type": "Question", "name": "Нужен ли КриптоПро для выгрузки?", "acceptedAnswer": {"@type": "Answer", "text": "Для входа в кабинет и подписания документов — да, сертификат и криптопровайдер обязательны. Для самой выгрузки файлов на диск и загрузки в 1С — нет: с распакованным пакетом работает любой бухгалтер без сертификата."}}, {"@type": "Question", "name": "Как отражать операции по лицевому счёту в учёте?", "acceptedAnswer": {"@type": "Answer", "text": "На отдельном субсчёте счёта 55 по учётной политике: аванс — зачисление целевых средств с признанием аванса полученного, платежи соисполнителям — списание с аналитикой контракта и кода направления, перечисление за принятый этап на расчётный счёт — внутренний перевод. Каждая операция должна нести идентификатор контракта — это основа раздельного учёта."}}, {"@type": "Question", "name": "Можно ли загрузить XML «Электронного бюджета» в 1С штатными средствами?", "acceptedAnswer": {"@type": "Answer", "text": "В типовой 1С:Бухгалтерии 3.0 и 1С:ERP штатной обработки для XML «Электронного бюджета» нет. Штатно загружается только текстовый формат «клиент-банк», поэтому XML либо конвертируют в него, либо импортируют внешней обработкой."}}, {"@type": "Question", "name": "Что делать, если остаток в 1С не сходится с выпиской?", "acceptedAnswer": {"@type": "Answer", "text": "Проверить три вещи: все ли операционные дни загружены, нет ли дублей одного дня и не проведён ли в 1С платёж, который казначейство не санкционировало или исполнило другой датой. Опорная цифра — исходящий остаток последней выписки; учёт подгоняют к нему, а не наоборот."}}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "HowTo", "name": "Как выгрузить выписку из «Электронного бюджета» и загрузить в 1С", "inLanguage": "ru-RU", "step": [{"@type": "HowToStep", "name": "Войти в кабинет ПУР КС", "text": "Вход в «Электронный бюджет» по сертификату сотрудника с доступом к лицевому счёту 71."}, {"@type": "HowToStep", "name": "Сформировать выписку с приложением", "text": "Выбрать операционный день или период, сформировать выписку вместе с приложением документов-оснований."}, {"@type": "HowToStep", "name": "Экспортировать пакет XML", "text": "Сохранить архив с файлами TSE_* в папку обмена и распаковать, не открывая XML в редакторах."}, {"@type": "HowToStep", "name": "Конвертировать в формат «клиент-банк»", "text": "Собрать из файлов D07/D08 и D091/D092 текстовый файл 1CClientBankExchange с полным назначением платежа."}, {"@type": "HowToStep", "name": "Загрузить в 1С и сверить остаток", "text": "Штатная загрузка банковских выписок на счёт, под которым заведён лицевой счёт 71; сверить исходящий остаток с субсчётом."}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "DefinedTermSet", "name": "Термины: выписка «Электронного бюджета» в 1С", "inLanguage": "ru-RU", "hasDefinedTerm": [{"@type": "DefinedTerm", "name": "ПУР КС", "description": "Подсистема управления расходами ГИИС «Электронный бюджет» в части казначейского сопровождения — кабинет участника с лицевым счётом 71."}, {"@type": "DefinedTerm", "name": "Пакет выгрузки", "description": "Архив XML-файлов за операционный день: выписка, платёжные документы, распоряжения о перечислении."}, {"@type": "DefinedTerm", "name": "Формат «клиент-банк»", "description": "Текстовый формат обмена 1CClientBankExchange, который штатно загружает 1С."}, {"@type": "DefinedTerm", "name": "Операционный день", "description": "День, за который казначейство формирует выписку при наличии движений по счёту."}, {"@type": "DefinedTerm", "name": "Субсчёт лицевого счёта", "description": "Отдельный субсчёт счёта 55 в 1С для целевых средств на лицевом счёте — по учётной политике."}, {"@type": "DefinedTerm", "name": "ИГК", "description": "Идентификатор государственного контракта в назначении платежа; ключ привязки операции к контракту."}]}
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
<meta property="og:title" content="Выписка ЕБ (ПУР КС) в 1С: выгрузка XML/TXT и загрузка">
<meta property="og:description" content="Файлы выгрузки из «Электронного бюджета», два пути загрузки в 1С, таблица ошибок и сверка остатков лицевого счёта с учётом.">
<meta property="og:url" content="https://kaznaexpert.ru/baza-znaniy/vygruzka-eb-pur-ks-v-1s/">
<meta property="og:image" content="https://kaznaexpert.ru/img/og/baza-znaniy__vygruzka-eb-pur-ks-v-1s-16x9.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="675">
<meta property="og:image:alt" content="Выписка ЕБ (ПУР КС) в 1С: выгрузка XML/TXT и загрузка — КазнаЭксперт">
<meta property="article:published_time" content="2026-09-03T10:00:00+03:00">
<meta property="article:modified_time" content="2026-09-03T10:00:00+03:00">
<meta property="article:author" content="https://kaznaexpert.ru/komanda/mihailov-yaroslav/">
<meta property="article:section" content="База знаний">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Выписка ЕБ (ПУР КС) в 1С: выгрузка XML/TXT и загрузка">
<meta name="twitter:description" content="Файлы выгрузки из «Электронного бюджета», два пути загрузки в 1С, таблица ошибок и сверка остатков лицевого счёта с учётом.">
<meta name="twitter:image" content="https://kaznaexpert.ru/img/og/baza-znaniy__vygruzka-eb-pur-ks-v-1s-16x9.jpg">


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
  <nav class="crumbs" aria-label="Хлебные крошки"><a href="/">Главная</a> › <a href="/baza-znaniy/">База знаний</a> › Выписка из лицевого счёта</nav>

  <aside class="toc" aria-label="Содержание">
    <div class="toc__label">Содержание</div>
    <ul class="toc__list" id="tocList">
      <li><a href="#chto-takoe">Что такое ПУР КС и где формируется выписка</a></li>
      <li><a href="#formaty">Форматы выгрузки: XML и TXT</a></li>
      <li><a href="#kak-vygruzit">Как выгрузить выписку из «Электронного бюджета»</a></li>
      <li><a href="#kak-zagruzit">Как загрузить в 1С:Бухгалтерию и 1С:ERP</a></li>
      <li><a href="#nastroyki">Настройки 1С перед первой загрузкой</a></li>
      <li><a href="#oshibki">Ошибки при загрузке: причина и решение</a></li>
      <li><a href="#sverka">Сверка остатков лицевого счёта с 1С</a></li>
      <li><a href="#uchet">Как отражать операции по лицевому счёту в учёте</a></li>
      <li><a href="#reglament">Как часто выгружать и нужен ли КриптоПро</a></li>
      <li><a href="#keys">Пример из практики</a></li>
      <li><a href="#glossary">Глоссарий</a></li>
      <li><a href="#faq">Частые вопросы</a></li>
    </ul>
  </aside>

  <article class="content" id="main">
    <div class="hero">
      <img class="hero__crest hero__crest--light" src="/img/logogold-crest.webp" alt="" aria-hidden="true" width="188" height="137" decoding="async" loading="lazy">
      <img class="hero__crest hero__crest--dark" src="/img/LogoWhite.png" alt="" aria-hidden="true" width="188" height="137" decoding="async" loading="lazy">
      <div class="eyebrow">База знаний · Операции и отчётность <span class="fresh">Актуально на сентябрь 2026</span></div>
    <h1>Выписка из «Электронного бюджета» (ПУР КС) в 1С: выгрузка XML и TXT, загрузка и сверка</h1>
    <div class="byline"><span class="av">ЯМ</span><span>Автор: <a href="/komanda/mihailov-yaroslav/">Ярослав Михайлов</a>, главный эксперт</span><span class="dot">·</span><span>15+ лет в Казначействе</span><span class="dot">·</span><span>13 мин чтения</span><span class="dot">·</span><span>Обновлено 3 сентября 2026 · первая публикация</span></div>
    </div>

    <div class="share">
      <span class="share__label">Поделиться:</span>
      <a href="https://t.me/share/url?url=https%3A%2F%2Fkaznaexpert.ru%2Fbaza-znaniy%2Fvygruzka-eb-pur-ks-v-1s%2F&amp;text=%D0%92%D1%8B%D0%BF%D0%B8%D1%81%D0%BA%D0%B0%20%D0%95%D0%91%20%28%D0%9F%D0%A3%D0%A0%20%D0%9A%D0%A1%29%20%D0%B2%201%D0%A1%3A%20%D0%B2%D1%8B%D0%B3%D1%80%D1%83%D0%B7%D0%BA%D0%B0%20XML%2FTXT%20%D0%B8%20%D0%B7%D0%B0%D0%B3%D1%80%D1%83%D0%B7%D0%BA%D0%B0" target="_blank" rel="noopener"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.56 8.25l-1.86 8.76c-.14.62-.5.77-1.02.48l-2.82-2.08-1.36 1.31c-.15.15-.28.28-.57.28l.2-2.89 5.27-4.76c.23-.2-.05-.32-.35-.12l-6.51 4.1-2.8-.88c-.61-.19-.62-.61.13-.9l10.95-4.22c.5-.18.95.12.79.85z"/></svg>Telegram</a>
      <button type="button" id="copyLink"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.07 0l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.07 0l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg><span>Копировать ссылку</span></button>
      <button type="button" id="printBtn"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9V2h12v7M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2M6 14h12v8H6z"/></svg>Скачать PDF</button>
    </div>

    <details class="mtoc"><summary>Содержание статьи</summary>
      <ol>
        <li><a href="#chto-takoe">Что такое ПУР КС и где формируется выписка</a></li><li><a href="#formaty">Форматы выгрузки: XML и TXT</a></li><li><a href="#kak-vygruzit">Как выгрузить выписку из «Электронного бюджета»</a></li><li><a href="#kak-zagruzit">Как загрузить в 1С:Бухгалтерию и 1С:ERP</a></li><li><a href="#nastroyki">Настройки 1С перед первой загрузкой</a></li><li><a href="#oshibki">Ошибки при загрузке: причина и решение</a></li><li><a href="#sverka">Сверка остатков лицевого счёта с 1С</a></li><li><a href="#uchet">Как отражать операции по лицевому счёту в учёте</a></li><li><a href="#reglament">Как часто выгружать и нужен ли КриптоПро</a></li><li><a href="#keys">Пример из практики</a></li><li><a href="#glossary">Глоссарий</a></li><li><a href="#faq">Частые вопросы</a></li>
      </ol>
    </details>

    <div class="tldr">Выписка по лицевому счёту 71 формируется в подсистеме ПУР КС «Электронного бюджета» и выгружается пакетом XML-файлов; в 1С её загружают либо через конвертацию в текстовый формат обмена «клиент-банк», либо внешней обработкой напрямую из XML. Штатной загрузки XML «Электронного бюджета» в типовой 1С:Бухгалтерии нет — это главная причина, по которой бухгалтерии вводят операции вручную и теряют сверку.</div>

    <section class="keyfacts grain" aria-label="Ключевые факты">
      <h2>Коротко о главном</h2>
      <div class="keyfacts__grid">
        <div class="kf"><div class="kf__n">ПУР КС</div><div class="kf__t"><b>Где выписка</b> — подсистема управления расходами «Электронного бюджета», кабинет участника</div></div>
        <div class="kf"><div class="kf__n">XML</div><div class="kf__t"><b>Формат выгрузки</b> — пакет файлов TSE_* по операционному дню: выписка, платёжки, распоряжения</div></div>
        <div class="kf"><div class="kf__n">TXT</div><div class="kf__t"><b>Формат для 1С</b> — текстовый обмен «клиент-банк» после конвертации из XML</div></div>
        <div class="kf"><div class="kf__n">нет</div><div class="kf__t"><b>Штатной загрузки</b> XML ЭБ в типовой 1С:Бухгалтерии 3.0 нет — внешняя обработка или конвертер</div></div>
        <div class="kf"><div class="kf__n">счёт 71</div><div class="kf__t"><b>В 1С</b> лицевой счёт заводят как отдельный банковский счёт с реквизитами ТОФК</div></div>
        <div class="kf"><div class="kf__n">ИГК</div><div class="kf__t"><b>Ключ сверки</b> — идентификатор контракта в назначении каждой операции</div></div>
      </div>
    </section>

        <h2 id="chto-takoe">Что такое ПУР КС и где формируется выписка</h2>
    <div class="answer reveal">
      <p class="lead-p">ПУР КС — подсистема управления расходами ГИИС «Электронный бюджет» в части казначейского сопровождения: личный кабинет, в котором участник сопровождения работает с лицевым счётом 71 — подаёт Сведения об операциях, распоряжения о платежах и получает выписки. Выписка формируется территориальным органом Федерального казначейства по каждому операционному дню, в котором были движения, и доступна в кабинете в электронном виде с приложением — перечнем документов-оснований.<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a></p>
    </div>
    <p>Как получить и прочитать выписку — входящий и исходящий остаток, приложение, справка о неисполненных распоряжениях — разобрано в статье <a href="/baza-znaniy/vypiska-iz-licevogo-scheta-kaznachejstva/">о выписке из лицевого счёта казначейства</a>. Здесь — следующий шаг, о котором та статья не говорит: как перенести выписку в 1С, чтобы операции по лицевому счёту попали в учёт без ручного ввода и сошлись с остатком у казначейства.</p>
    <p>Подключение к кабинету, сертификат и роли пользователя — в материале <a href="/baza-znaniy/elektronnyy-byudzhet-dlya-ispolnitelya-kontrakta/">«Электронный бюджет» для исполнителя контракта</a>. Дальше предполагаем, что доступ в ПУР КС у вас есть и выписка в кабинете видна.</p>

    <h2 id="formaty">Форматы выгрузки: XML и TXT</h2>
    <div class="answer reveal">
      <p>«Электронный бюджет» выгружает выписку пакетом XML-файлов: собственно выписка по лицевому счёту, платёжные документы по операциям и распоряжения о перечислении — каждый тип в своём файле с префиксом TSE_. Текстовый формат TXT, который штатно загружает 1С (обмен «клиент-банк», 1CClientBankExchange), из кабинета не выгружается напрямую — его получают конвертацией XML.</p>
    </div>
    <h3 id="formaty-raznica">Почему банк отдаёт TXT, а «Электронный бюджет» — XML</h3>
    <p>Это ключевое различие, из-за которого путаются бухгалтерии: в банке нажимают «выгрузить в 1С» и получают готовый TXT, а в «Электронном бюджете» получают архив с XML, который 1С без подготовки не понимает. Внутри пакета — файлы разных типов, и для учёта нужны не все.</p>
    <table>
      <caption>Файлы пакета выгрузки из «Электронного бюджета» (ПУР КС)</caption>
      <tr><th>Файл (префикс)</th><th>Что содержит</th><th>Нужен ли для загрузки в 1С</th></tr>
      <tr><td>TSE_StatemAcc_*</td><td>Сама выписка: входящий и исходящий остаток, обороты за операционный день</td><td>Да — для контроля остатков; в документы 1С не грузится</td></tr>
      <tr><td>TSE_0401060_D07_* / D08_*</td><td>Платёжные поручения по операциям: реквизиты плательщика и получателя, сумма, назначение</td><td>Да — из них формируются документы списания и поступления</td></tr>
      <tr><td>TSE_TransOrderAcc_D091_* / D092_*</td><td>Распоряжения о перечислении между лицевыми счетами (внутриказначейские операции)</td><td>Да, если были переводы между лицевыми счетами; иначе пусто</td></tr>
      <tr><td>Прочие служебные файлы (ошибки, уведомления)</td><td>Сообщения системы, не операции</td><td>Нет</td></tr>
    </table>
    <h3 id="formaty-polya">Поля XML и их соответствие формату «клиент-банк»</h3>
    <p>Внутри XML операция описана полями с говорящими именами — номер и дата документа, сумма, ИНН, КПП, наименование, счёт, БИК и корреспондентский счёт плательщика и получателя, назначение платежа. Именно эти поля один к одному соответствуют реквизитам секции документа в текстовом формате «клиент-банк» («Номер», «Дата», «Сумма», «ПлательщикИНН», «ПолучательСчет», «НазначениеПлатежа» и далее). Поэтому конвертация XML→TXT — задача техническая, а не учётная: перекладка полей по таблице соответствия.</p>
    <p class="note">Назначение платежа в файлах «Электронного бюджета» содержит идентификатор контракта и код направления расходования — не обрезайте его при конвертации: без ИГК операция в 1С не привяжется к контракту, и <a href="/baza-znaniy/razdelnyy-uchet-goz-v-1s/">раздельный учёт по ГОЗ в 1С</a> окажется неполным.</p>

    <h2 id="kak-vygruzit">Как выгрузить выписку из «Электронного бюджета»: пошагово</h2>
    <div class="answer reveal">
      <p>Выгрузка занимает пять шагов: войти в кабинет ПУР КС по сертификату, открыть раздел выписок по лицевому счёту, задать операционный день или период, сформировать выписку с приложением и экспортировать пакет XML на диск. Файлы приходят архивом — его распаковывают, не открывая XML в текстовых редакторах.</p>
    </div>
    <h3 id="vygruzka-shagi">Пять шагов выгрузки</h3>
    <ol>
      <li><b>Вход.</b> Кабинет «Электронного бюджета» под сертификатом уполномоченного сотрудника с ролью, дающей доступ к лицевому счёту; настройка рабочего места — в статье <a href="/baza-znaniy/nastroyka-arm-elektronnyy-byudzhet/">об АРМ для «Электронного бюджета»</a>.</li>
      <li><b>Раздел выписок.</b> В подсистеме казначейского сопровождения открывают учёт операций по лицевому счёту 71 и список выписок по дням.</li>
      <li><b>Период.</b> Выбирают конкретный операционный день (штатный режим) или диапазон дат — тогда пакет будет содержать файлы по каждому дню с движениями.</li>
      <li><b>Формирование.</b> Формируют выписку вместе с приложением: без приложения в пакете не будет платёжных документов D07/D08, а значит и операций для 1С.</li>
      <li><b>Экспорт.</b> Экспортируют пакет в XML и сохраняют архив в папку обмена; распаковывают штатным архиватором. Не открывайте и не пересохраняйте XML в Word или «Блокноте» — так в файл попадают лишние символы перед объявлением XML, и загрузка в 1С падает с ошибкой разбора.</li>
    </ol>
    <h3 id="vygruzka-pdf">Почему PDF-выписка не подходит</h3>
    <p>Бумажная или PDF-выписка для 1С бесполезна: с неё операции можно только вбить руками. Если в кабинете доступен только PDF, проверьте роль пользователя — экспорт данных обычно закрыт у ролей «только просмотр».</p>

    <h2 id="kak-zagruzit">Как загрузить выписку в 1С:Бухгалтерию 3.0 и 1С:ERP</h2>
    <div class="answer reveal">
      <p>Есть три рабочих способа: конвертировать XML в текстовый файл формата «клиент-банк» и загрузить его штатной загрузкой банковских выписок; загрузить XML напрямую внешней обработкой обмена с «Электронным бюджетом»; ввести операции вручную по приложению к выписке. Первый способ самый переносимый — он не зависит от релиза конфигурации, потому что штатная загрузка «клиент-банка» есть в любой типовой 1С.</p>
    </div>

    <h3 id="sposob-1">Способ 1. Конвертация XML → TXT и штатная загрузка</h3>
    <p>Конвертер — внешняя обработка или скрипт — читает файлы D07/D08 и D091/D092 и собирает из них один текстовый файл формата 1CClientBankExchange с секциями документов. Затем в 1С открывают загрузку банковских выписок, указывают банковский счёт организации, под которым заведён лицевой счёт 71, выбирают файл и загружают. 1С создаст документы «Списание с расчётного счёта» и «Поступление на расчётный счёт» по каждой операции, подобрав контрагентов по ИНН и КПП.</p>
    <p>Плюс способа — предсказуемость: формат «клиент-банк» стабилен много лет, и обработка загрузки в 1С отлажена лучше любого стороннего импорта. Минус — конвертер нужно один раз написать или купить, а таблицу соответствия полей поддерживать при изменении структуры XML на стороне «Электронного бюджета».</p>

    <h3 id="sposob-2">Способ 2. Прямой импорт XML внешней обработкой</h3>
    <p>Внешние обработки обмена с «Электронным бюджетом» читают XML-пакет сразу и создают документы 1С, минуя текстовый формат. Они удобнее в ежедневной работе, но привязаны к релизу конфигурации и платформы: после обновления 1С обработка может перестать открываться, и за это платят сопровождением. В типовой 1С:Бухгалтерии 3.0 и 1С:ERP собственной обработки для XML «Электронного бюджета» нет — вендорское решение существует для бюджетных конфигураций, а не для коммерческих исполнителей контрактов.</p>

    <h3 id="sposob-3">Способ 3. Ручной ввод по приложению</h3>
    <p>Оправдан, когда операций по лицевому счёту единицы в месяц: аванс пришёл, три платежа соисполнителям ушли. Вводят по приложению к выписке, обязательно копируя назначение платежа целиком, с ИГК и кодом направления. При десятках операций в день ручной ввод — источник расхождений с казначейством, а не экономия.</p>
    <table>
      <caption>Три способа загрузки выписки «Электронного бюджета» в 1С</caption>
      <tr><th>Способ</th><th>Когда подходит</th><th>Риск</th></tr>
      <tr><td>XML → TXT + штатная загрузка</td><td>Регулярные операции, несколько лицевых счетов, обновляемая 1С</td><td>Ошибка в таблице соответствия полей при смене структуры XML</td></tr>
      <tr><td>Внешняя обработка импорта XML</td><td>Много операций в день, есть сопровождение 1С</td><td>Обработка перестаёт работать после обновления релиза</td></tr>
      <tr><td>Ручной ввод по приложению</td><td>Единичные операции</td><td>Обрезанное назначение платежа, пропущенные операции, дубли</td></tr>
    </table>

    <h2 id="nastroyki">Настройки 1С перед первой загрузкой</h2>
    <div class="answer reveal">
      <p>До первой загрузки в 1С заводят лицевой счёт как отдельный банковский счёт организации с реквизитами ТОФК, привязывают договор с заказчиком с идентификатором контракта и настраивают статьи движения денежных средств и аналитику раздельного учёта. Без этого 1С либо не найдёт счёт для операций, либо загрузит их «в никуда» — без контракта и кода.</p>
    </div>
    <h3 id="nastroyki-cheklist">Счёт, договор и аналитика: чек-лист</h3>
    <ul>
      <li><b>Банковский счёт организации = лицевой счёт 71.</b> Номер лицевого счёта, БИК и наименование ТОФК, казначейский счёт — те же реквизиты, что вы даёте заказчику для перечисления аванса. Какие поля куда — в статье о <a href="/baza-znaniy/kaznacheyskiy-schet/">реквизитах казначейского счёта</a>.</li>
      <li><b>Счёт учёта.</b> По учётной политике средства на лицевом счёте обычно учитывают на отдельном субсчёте счёта 55 «Специальные счета в банках», чтобы целевые средства не смешивались с расчётным счётом.</li>
      <li><b>Договор и ИГК.</b> В карточке договора с заказчиком и договоров с соисполнителями указан идентификатор контракта — тогда подбор по назначению платежа сработает автоматически. Где брать код и как его проверить — в материале об <a href="/baza-znaniy/identifikator-gosudarstvennogo-kontrakta-igk/">идентификаторе государственного контракта</a>.</li>
      <li><b>Статьи ДДС и аналитика.</b> Статьи движения денежных средств под коды направлений расходования и субконто контракта для раздельного учёта — иначе загруженные операции придётся размечать вручную.</li>
      <li><b>Контрагенты.</b> Соисполнители с ИНН/КПП и отдельными счетами заведены заранее: при загрузке 1С ищет контрагента по ИНН, и неизвестного создаст с пустой карточкой.</li>
    </ul>

    <h2 id="oshibki">Ошибки при загрузке: причина и решение</h2>
    <div class="answer reveal">
      <p>Большинство сбоев при загрузке выписки «Электронного бюджета» в 1С сводятся к пяти причинам: испорченный XML после открытия в редакторе, счёт в 1С не совпадает с лицевым счётом из файла, неверная кодировка сконвертированного TXT, повторная загрузка того же дня и обрезанное назначение платежа. Каждая диагностируется по тексту сообщения 1С.</p>
    </div>
    <h3 id="oshibki-tablica">Таблица: симптом, причина, решение</h3>
    <table>
      <caption>Ошибки загрузки выписки «Электронного бюджета» в 1С</caption>
      <tr><th>Ошибка / симптом</th><th>Причина</th><th>Как исправить</th></tr>
      <tr><td>«Ошибка разбора XML… XML declaration allowed only at the start of the document»</td><td>Перед объявлением <code>&lt;?xml</code> появились лишние символы: файл открывали и пересохраняли в редакторе, добавилась метка BOM или пустая строка</td><td>Заново распаковать оригинальный архив из кабинета; не открывать XML в Word/«Блокноте»</td></tr>
      <tr><td>1С «не видит» операции: загрузка прошла, документов нет</td><td>В параметрах загрузки выбран расчётный счёт, а не лицевой; номер счёта или БИК в 1С не совпадает с файлом; период загрузки не тот</td><td>Сверить реквизиты банковского счёта в 1С с реквизитами лицевого счёта в выписке, выбрать нужный счёт и день</td></tr>
      <tr><td>Кириллица в назначении платежа «кракозябрами»</td><td>TXT сконвертирован в UTF-8 с BOM, а загрузка ждёт Windows-1251 (или наоборот)</td><td>Пересохранить файл в кодировке, указанной в заголовке формата «клиент-банк»; проверить параметр кодировки в конвертере</td></tr>
      <tr><td>Операции задвоились</td><td>Один операционный день загружен дважды, документы не сопоставлены по номеру и дате</td><td>Удалить дубли, включить контроль повторной загрузки по номеру документа и дате</td></tr>
      <tr><td>Операция загружена, но без контракта и кода направления</td><td>Назначение платежа обрезано при конвертации; в договоре 1С нет ИГК</td><td>Восстановить полное назначение из XML, добавить идентификатор в карточку договора, перепровести</td></tr>
      <tr><td>Нет части операций — только платёжки, без переводов между лицевыми счетами</td><td>Загружены файлы D07/D08, а D091/D092 пропущены</td><td>Загрузить распоряжения о перечислении отдельно или добавить их в конвертер</td></tr>
      <tr><td>Неизвестный контрагент создан с пустой карточкой</td><td>Соисполнитель не был заведён до загрузки</td><td>Заполнить карточку, объединить дубли контрагентов</td></tr>
    </table>
    <h3 id="oshibki-net-v-vypiske">Операция есть в 1С, но нет в выписке</h3>
    <p>Если операция есть в 1С, но её нет в выписке, дело не в загрузке: распоряжение не прошло санкционирование. Такие платежи ищут в справке о неисполненных распоряжениях, а причины — в разборе <a href="/baza-znaniy/prichiny-otkaza-kaznacheystva-v-sankcionirovanii/">причин отказа казначейства в санкционировании</a>.</p>

    <h2 id="sverka">Сверка остатков лицевого счёта с 1С</h2>
    <div class="answer reveal">
      <p>Сверка строится на одном уравнении: входящий остаток по выписке плюс поступления минус списания равны исходящему остатку, и та же цифра должна стоять на субсчёте лицевого счёта в 1С на конец дня. Расхождение означает либо незагруженную операцию, либо дубль, либо документ, проведённый в 1С раньше, чем казначейство его санкционировало.</p>
    </div>
    <h3 id="sverka-tochki">Три контрольные точки</h3>
    <p>Практический регламент — три контрольные точки. Ежедневно: исходящий остаток последней выписки против остатка на субсчёте в 1С. Еженедельно: обороты за неделю по выписке против оборотов по счёту в 1С в разрезе контрактов — здесь всплывают операции, загруженные не на тот договор. Ежемесячно: сверка с заказчиком по авансу и оплаченным этапам и подготовка данных для <a href="/baza-znaniy/otchet-o-rashodah-celevyh-sredstv/">отчёта о расходах целевых средств</a>, если он предусмотрен контрактом.</p>
    <h3 id="sverka-data">Дата операции — по выписке, а не по распоряжению</h3>
    <p>Самая частая причина «висящего» расхождения — документ списания, проведённый в 1С датой отправки распоряжения, тогда как казначейство исполнило его на следующий рабочий день или вернуло. Правило простое: датой операции в учёте является дата исполнения по выписке, а не дата подписания распоряжения в кабинете.</p>

    <h2 id="uchet">Как отражать операции по лицевому счёту в учёте</h2>
    <div class="answer reveal">
      <p>Поступление аванса от заказчика отражают как зачисление целевых средств на субсчёт лицевого счёта с одновременным признанием аванса полученного по контракту; платежи соисполнителям — как списание с этого субсчёта с привязкой к контракту и коду направления; перечисление оплаты за принятый этап на расчётный счёт — как внутренний перевод между счетами организации. Раздельный учёт требует, чтобы каждая операция имела аналитику контракта.</p>
    </div>
    <p>Подробная схема проводок и настройка аналитики под гособоронзаказ — в статье <a href="/baza-znaniy/razdelnyy-uchet-goz-v-1s/">о раздельном учёте по ГОЗ в 1С</a>; какие направления расходования бывают и как подобрать код — в <a href="/baza-znaniy/kody/">справочнике кодов направлений расходования</a>. Если учёт по контракту уже «разъехался» — операции загружали частично, без ИГК или на общий расчётный счёт, — восстанавливать его нужно от выписок: они первичны, а не регистры 1С.</p>
    <p class="note">Восстановление раздельного учёта по госконтракту от выписок казначейства до готовых регистров — 99 000 ₽; сопровождение контракта ГОЗ, где выписки, сведения и платежи ведём мы, — 105 000 ₽ в месяц. <a href="/uslugi/vosstanovlenie-razdelnogo-ucheta/">Восстановление раздельного учёта →</a></p>

    <h2 id="reglament">Как часто выгружать и нужен ли КриптоПро</h2>
    <div class="answer reveal">
      <p>Выгружать выписку нужно за каждый операционный день, в котором были движения, — казначейство формирует её именно по дням, а не накопительно; на практике это ежедневная процедура в период активных платежей и еженедельная в паузах. КриптоПро CSP нужен для входа в кабинет «Электронного бюджета» по сертификату и подписания документов; сама выгрузка файлов и их загрузка в 1С криптопровайдера не требуют.</p>
    </div>
    <p>Отсюда организационное следствие: выгружать выписку может только сотрудник с сертификатом и доступом в ПУР КС, а загружать в 1С — любой бухгалтер. Разумно разделить эти роли и завести общую папку обмена с датой в имени файла, чтобы не потерять день и не загрузить один и тот же пакет дважды. Как получить сертификат и что делать при его истечении — в материале о <a href="/baza-znaniy/sertifikat-ecp-kaznachejstvo/">сертификате и электронной подписи казначейства</a>.</p>

    <h2 id="keys">Пример из практики</h2>
    <p>Типовая ситуация, с которой приходят на восстановление учёта: подрядчик по контракту с авансом полгода вводил операции по лицевому счёту вручную по PDF-выпискам. Назначения платежей сокращали до «оплата по договору», ИГК в карточках договоров не было, часть переводов между лицевыми счетами головного исполнителя и соисполнителя вообще не проводили. К моменту сдачи этапа остаток в 1С расходился с выпиской казначейства на сумму трёх «потерянных» операций, а отчёт о расходах целевых средств собрать было не из чего.</p>
    <p>Восстановление шло от XML-пакетов за весь период: их выгрузили из кабинета заново, сконвертировали в текстовый формат и загрузили в 1С на отдельный субсчёт, предварительно проставив ИГК в договорах. После загрузки уравнение остатков сошлось по каждому дню, а расхождение объяснилось двумя пропущенными распоряжениями D091 и одним возвратом, который в PDF не заметили. Пример обобщённый; сроки и суммы зависят от числа операций.</p>

    <div class="takeaways">
      <h2>Что важно запомнить</h2>
      <ol>
        <li>Выписка по лицевому счёту 71 формируется в ПУР КС «Электронного бюджета» по операционным дням и выгружается пакетом XML-файлов TSE_*.</li>
        <li>Штатной загрузки XML «Электронного бюджета» в типовой 1С:Бухгалтерии 3.0 нет: используют конвертацию в текстовый формат «клиент-банк» либо внешнюю обработку.</li>
        <li>До первой загрузки заведите лицевой счёт как отдельный банковский счёт с реквизитами ТОФК и укажите ИГК в договорах.</li>
        <li>Не открывайте XML в редакторах — типовая ошибка разбора «XML declaration allowed only at the start».</li>
        <li>Датой операции в учёте считается дата исполнения по выписке, а не дата подписания распоряжения.</li>
        <li>Сверяйте исходящий остаток выписки с субсчётом в 1С ежедневно; расхождение — незагруженная операция, дубль или несанкционированный платёж.</li>
      </ol>
    </div>

    <h2 id="glossary">Глоссарий</h2>
    <dl class="gloss">
      <div><dt>ПУР КС</dt><dd>Подсистема управления расходами ГИИС «Электронный бюджет» в части казначейского сопровождения — кабинет участника с лицевым счётом 71.</dd></div>
      <div><dt>Пакет выгрузки</dt><dd>Архив XML-файлов за операционный день: выписка, платёжные документы, распоряжения о перечислении.</dd></div>
      <div><dt>Формат «клиент-банк»</dt><dd>Текстовый формат обмена 1CClientBankExchange, который штатно загружает 1С.</dd></div>
      <div><dt>Операционный день</dt><dd>День, за который казначейство формирует выписку при наличии движений по счёту.</dd></div>
      <div><dt>Субсчёт лицевого счёта</dt><dd>Отдельный субсчёт счёта 55 в 1С для целевых средств на лицевом счёте — по учётной политике.</dd></div>
      <div><dt>ИГК</dt><dd>Идентификатор государственного контракта в назначении платежа; ключ привязки операции к контракту.</dd></div>
    </dl>
<p data-ctx="auto-ctx:eb1s-0903-1">Следующий шаг после получения выписки — перенести её в учёт: какие файлы выгружает «Электронный бюджет», как загрузить их в 1С и почему остаток не сходится — в статье <a href="/baza-znaniy/vygruzka-eb-pur-ks-v-1s/">о выгрузке выписки ЕБ (ПУР КС) в 1С</a>.</p>

    <h2 id="faq">Частые вопросы</h2>
    <div class="faq">
      <details open><summary>Чем выписка «Электронного бюджета» отличается от банковской?</summary><p>Банк отдаёт готовый файл для 1С в текстовом формате «клиент-банк», а «Электронный бюджет» — пакет XML-файлов, который 1С без конвертации или внешней обработки не загружает. Кроме того, казначейская выписка формируется по операционным дням с приложением документов-оснований, а операции в ней всегда содержат идентификатор контракта и код направления расходования.</p></details>
      <details><summary>Почему 1С не видит операции после загрузки?</summary><p>Чаще всего в параметрах загрузки выбран расчётный счёт вместо лицевого, либо номер счёта или БИК в карточке банковского счёта не совпадают с реквизитами в файле. Вторая причина — загружены не те файлы пакета: выписка TSE_StatemAcc без платёжных документов D07/D08. Проверьте счёт, день и состав файлов.</p></details>
      <details><summary>Как часто выгружать выписку из «Электронного бюджета»?</summary><p>За каждый операционный день с движениями: в период активных платежей — ежедневно, в паузах — по факту операций, но не реже раза в неделю для контроля остатка. Накопительной выписки за период с одним файлом система не даёт — пакет содержит файлы по каждому дню.</p></details>
      <details><summary>Нужен ли КриптоПро для выгрузки?</summary><p>Для входа в кабинет и подписания документов — да, сертификат и криптопровайдер обязательны. Для самой выгрузки файлов на диск и загрузки в 1С — нет: с распакованным пакетом работает любой бухгалтер без сертификата.</p></details>
      <details><summary>Как отражать операции по лицевому счёту в учёте?</summary><p>На отдельном субсчёте счёта 55 по учётной политике: аванс — зачисление целевых средств с признанием аванса полученного, платежи соисполнителям — списание с аналитикой контракта и кода направления, перечисление за принятый этап на расчётный счёт — внутренний перевод. Каждая операция должна нести идентификатор контракта — это основа раздельного учёта.</p></details>
      <details><summary>Можно ли загрузить XML «Электронного бюджета» в 1С штатными средствами?</summary><p>В типовой 1С:Бухгалтерии 3.0 и 1С:ERP штатной обработки для XML «Электронного бюджета» нет. Штатно загружается только текстовый формат «клиент-банк», поэтому XML либо конвертируют в него, либо импортируют внешней обработкой.</p></details>
      <details><summary>Что делать, если остаток в 1С не сходится с выпиской?</summary><p>Проверить три вещи: все ли операционные дни загружены, нет ли дублей одного дня и не проведён ли в 1С платёж, который казначейство не санкционировало или исполнило другой датой. Опорная цифра — исходящий остаток последней выписки; учёт подгоняют к нему, а не наоборот.</p></details>
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
        <li id="ref-1">Постановление Правительства РФ от 30.06.2015 № 658 «О государственной интегрированной информационной системе управления общественными финансами „Электронный бюджет“» — consultant.ru — <a href="https://www.consultant.ru/document/cons_doc_LAW_182031/" target="_blank" rel="noopener">www.consultant.ru</a></li>
        <li id="ref-2">Бюджетный кодекс РФ, глава 24.4 «Казначейское сопровождение» (ст. 242.23–242.27) — consultant.ru — <a href="https://www.consultant.ru/document/cons_doc_LAW_19702/c4bad396d963c79cf5c4665d8fc50e017a94309f/" target="_blank" rel="noopener">www.consultant.ru</a></li>
        <li id="ref-3">Единый портал бюджетной системы Российской Федерации — вход в ГИИС «Электронный бюджет» — <a href="https://www.budget.gov.ru/" target="_blank" rel="noopener">www.budget.gov.ru</a></li>
        <li id="ref-4">Казначейство России — клиентам: лицевые счета участников казначейского сопровождения (код 71) и подключение к ГИИС «Электронный бюджет» — <a href="https://roskazna.gov.ru/" target="_blank" rel="noopener">roskazna.gov.ru</a></li>
      </ol>
      <p class="refs__note">Материал актуален на 3 сентября 2026 года. Состав файлов выгрузки и интерфейс кабинета «Электронного бюджета» меняются с обновлениями системы; названия обработок и поддерживаемые релизы уточняйте у вашего сопровождающего 1С.</p>
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
    <form class="railform" id="leadForm" novalidate data-endpoint="/php/lead.php" data-source="vygruzka-eb-pur-ks-v-1s">
      <div class="railform__badge">Разбор эксперта</div>
      <h3 class="railform__title">Выписки в 1С не сходятся с казначейством?</h3>
      <p class="railform__sub">Загрузим выписки «Электронного бюджета» за весь период, восстановим раздельный учёт по контракту и сведём остатки день в день — вы получите учёт, который совпадает с казначейством.</p>
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
<a class="rail-svc" href="/uslugi/vosstanovlenie-razdelnogo-ucheta/"><span class="rail-svc__k">Поможем под ключ</span><span class="rail-svc__n">Восстановление раздельного учёта →</span></a>
</aside>
</div>

<section class="related" aria-labelledby="relTitle">
  <div class="related__head"><h2 id="relTitle">Что почитать ещё</h2><a href="/baza-znaniy/">Вся база знаний →</a></div>
  <div class="related__grid">
    <a class="card reveal" href="/baza-znaniy/vypiska-iz-licevogo-scheta-kaznachejstva/"><div class="card__cover"><span>Выписка</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Выписка из лицевого счёта казначейства: как получить и читать</h3><div class="card__meta">Операции · 14 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/elektronnyy-byudzhet-dlya-ispolnitelya-kontrakta/"><div class="card__cover"><span>ЭБ</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">«Электронный бюджет» для исполнителя контракта</h3><div class="card__meta">Инструменты · 15 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/razdelnyy-uchet-goz-v-1s/"><div class="card__cover"><span>1С</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Раздельный учёт по ГОЗ в 1С: настройка и ведение</h3><div class="card__meta">Учёт · 16 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/kody/"><div class="card__cover"><span>Коды</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Коды направлений расходования целевых средств: справочник</h3><div class="card__meta">Справочник · 12 мин</div></div></a>
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

<section class="kz-sub" aria-labelledby="kzSubTitle" data-source="vygruzka-eb-pur-ks-v-1s">
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
</body>
</html>
