<?php header("Cache-Control: public, max-age=300, must-revalidate"); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Электронный бюджет для исполнителя: вход и работа</title>
<meta name="description" content="ГИИС «Электронный бюджет» для исполнителя контракта под казначейским сопровождением: чем отличается от СУФД и ФЗС, как подключиться через ТОФК и войти по подписи.">
<meta name="author" content="Ярослав Михайлов">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1">
<meta name="theme-color" content="#F4F1EB" media="(prefers-color-scheme: light)">
<meta name="theme-color" content="#141310" media="(prefers-color-scheme: dark)">
<!-- PROD: canonical и og:url ОБЯЗАТЕЛЬНО менять под URL каждой статьи -->
<link rel="canonical" href="https://kaznaexpert.ru/baza-znaniy/elektronnyy-byudzhet-dlya-ispolnitelya-kontrakta/">
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
{"@context": "https://schema.org", "@type": "Article", "headline": "ГИИС «Электронный бюджет» для исполнителя контракта: подключение, вход по сертификату, личный кабинет", "description": "Как исполнителю контракта под казначейским сопровождением подключиться к ГИИС «Электронный бюджет», войти по сертификату и работать в личном кабинете: отличие от СУФД и ФЗС, подсистемы, настройка рабочего места.", "inLanguage": "ru-RU", "datePublished": "2026-06-13", "dateModified": "2026-07-08", "author": {"@type": "Person", "name": "Ярослав Михайлов", "jobTitle": "Главный эксперт по казначейскому сопровождению", "url": "https://kaznaexpert.ru/komanda/mihailov-yaroslav/", "@id": "https://kaznaexpert.ru/komanda/mihailov-yaroslav/#person"}, "publisher": {"@type": "Organization", "name": "КазнаЭксперт", "url": "https://kaznaexpert.ru", "logo": {"@type": "ImageObject", "url": "https://kaznaexpert.ru/img/logogold.png"}, "@id": "https://kaznaexpert.ru/#organization"}, "image": "https://kaznaexpert.ru/img/og-image.png", "mainEntityOfPage": {"@type": "WebPage", "@id": "https://kaznaexpert.ru/baza-znaniy/elektronnyy-byudzhet-dlya-ispolnitelya-kontrakta/"}, "citation": ["https://www.consultant.ru/document/cons_doc_LAW_182473/", "https://minfin.gov.ru/ru/ismf/electronic_budget/connect/regional/order/", "https://roskazna.gov.ru/gis/ehlektronnyj-byudzhet/", "https://www.consultant.ru/document/cons_doc_LAW_19702/68f24d27edee7d0ca5315de64a951b15f0af209f/", "https://www.consultant.ru/document/cons_doc_LAW_208093/"]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "Главная", "item": "https://kaznaexpert.ru/"}, {"@type": "ListItem", "position": 2, "name": "База знаний", "item": "https://kaznaexpert.ru/baza-znaniy/"}, {"@type": "ListItem", "position": 3, "name": "Электронный бюджет для исполнителя", "item": "https://kaznaexpert.ru/baza-znaniy/elektronnyy-byudzhet-dlya-ispolnitelya-kontrakta/"}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [{"@type": "Question", "name": "Что такое «Электронный бюджет» простыми словами?", "acceptedAnswer": {"@type": "Answer", "text": "Государственная система, через которую планируют и проводят операции с бюджетными и целевыми средствами. Для исполнителя контракта под казначейским сопровождением это рабочее место для открытия лицевого счёта, утверждения сведений об операциях и платежей."}}, {"@type": "Question", "name": "Чем «Электронный бюджет» отличается от СУФД и портала ФЗС?", "acceptedAnswer": {"@type": "Answer", "text": "Портал ФЗС нужен для выпуска электронной подписи, «Электронный бюджет» — основной контур для лицевого счёта и платежей, СУФД — соседний инструмент работы с расчётными документами по правилам ТОФК."}}, {"@type": "Question", "name": "Как исполнителю контракта подключиться к системе?", "acceptedAnswer": {"@type": "Answer", "text": "Через территориальный орган казначейства: выпустить ЭП, настроить рабочее место и подать заявку на подключение с приказом о назначении ответственных, файлами сертификатов и согласиями. Обычно совмещается с открытием лицевого счёта 71."}}, {"@type": "Question", "name": "Как войти в личный кабинет «Электронного бюджета»?", "acceptedAnswer": {"@type": "Answer", "text": "По квалифицированному сертификату электронной подписи: подключить токен, открыть точку входа на едином портале, выбрать сертификат и подтвердить PIN-кодом. Логин и пароль не используются."}}, {"@type": "Question", "name": "Почему не получается войти в систему?", "acceptedAnswer": {"@type": "Answer", "text": "Чаще всего проблема в рабочем месте: не установлены корневые сертификаты казначейства, не запущен защищённый канал, истёк личный сертификат или браузер обновился до несовместимой версии."}}, {"@type": "Question", "name": "Нужна ли отдельная подпись для «Электронного бюджета»?", "acceptedAnswer": {"@type": "Answer", "text": "Используется квалифицированный сертификат казначейства, который выпускается на портале заявителя ФЗС. Отдельную подпись для системы заводить не нужно."}}, {"@type": "Question", "name": "Какие подсистемы нужны исполнителю контракта?", "acceptedAnswer": {"@type": "Answer", "text": "Учёт и отчётность (лицевой счёт, выписки), управление денежными средствами (сведения об операциях, платежи) и ведение НСИ (реквизиты, сводный реестр)."}}, {"@type": "Question", "name": "Можно ли работать в «Электронном бюджете» с обычного компьютера?", "acceptedAnswer": {"@type": "Answer", "text": "Нужно подготовить рабочее место: криптопровайдер, защищённый канал, корневые сертификаты и плагин ЭП. С «чистого» компьютера без настройки вход в закрытую часть не пройдёт."}}, {"@type": "Question", "name": "Сколько занимает подключение?", "acceptedAnswer": {"@type": "Answer", "text": "Зависит от готовности рабочего места и комплекта документов. Если ЭП выпущена, а АРМ настроен заранее, подключение и открытие счёта идут параллельно. Точные сроки уточняйте в своём ТОФК."}}, {"@type": "Question", "name": "Где взять корневые сертификаты для входа?", "acceptedAnswer": {"@type": "Answer", "text": "На сайте Федерального казначейства; порядок установки и список сертификатов удостоверяющего центра разобраны в отдельной статье о корневых сертификатах казначейства."}}, {"@type": "Question", "name": "Как зарегистрироваться в ГИИС «Электронный бюджет»?", "acceptedAnswer": {"@type": "Answer", "text": "Отдельной саморегистрации нет: доступ оформляется через территориальный орган Федерального казначейства. Исполнитель получает квалифицированную электронную подпись, обеспечивает включение организации в Сводный реестр и подаёт заявку на подключение. После проверки казначейство открывает личный кабинет — как правило, за несколько рабочих дней."}}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "HowTo", "name": "Как исполнителю контракта подключиться к ГИИС «Электронный бюджет»", "inLanguage": "ru-RU", "step": [
{"@type": "HowToStep", "position": 1, "name": "Выпустить электронную подпись", "text": "Оформить квалифицированный сертификат на уполномоченных сотрудников через портал заявителя ФЗС."},
{"@type": "HowToStep", "position": 2, "name": "Настроить рабочее место", "text": "Установить криптопровайдер, защищённый канал связи, корневые сертификаты казначейства, плагин ЭП и совместимый браузер."},
{"@type": "HowToStep", "position": 3, "name": "Подготовить документы", "text": "Собрать заявку на подключение, приказ о назначении ответственных, файлы сертификатов ЭП, согласия на обработку персональных данных."},
{"@type": "HowToStep", "position": 4, "name": "Подать заявку в ТОФК", "text": "Направить заявку с приложениями в территориальный орган казначейства, обычно вместе с документами на открытие лицевого счёта 71."},
{"@type": "HowToStep", "position": 5, "name": "Получить доступ и проверить вход", "text": "После обработки заявки казначейство заводит профиль и назначает полномочия; войти в личный кабинет по сертификату и начать работу."}
]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "DefinedTermSet", "name": "Глоссарий: Электронный бюджет", "inLanguage": "ru-RU", "hasDefinedTerm": [
{"@type": "DefinedTerm", "name": "ГИИС «Электронный бюджет»", "description": "Государственная интегрированная информационная система управления общественными финансами; ведётся Минфином и Казначейством по ПП РФ № 658."},
{"@type": "DefinedTerm", "name": "Личный кабинет", "description": "Закрытая часть системы с юридически значимыми документами, доступная по квалифицированной электронной подписи после подключения."},
{"@type": "DefinedTerm", "name": "АРМ", "description": "Автоматизированное рабочее место — компьютер с криптосредствами, защищённым каналом и сертификатами для входа в систему."},
{"@type": "DefinedTerm", "name": "Подсистема", "description": "Функциональный блок Электронного бюджета: учёт и отчётность, управление денежными средствами, ведение НСИ."},
{"@type": "DefinedTerm", "name": "Полномочия", "description": "Набор прав, который казначейство назначает организации при подключении; определяет доступные разделы системы."}
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
@media(max-width:920px){.v2 .v2-header{padding:14px 0}.v2 .v2-header-inner{grid-template-columns:1fr auto}.v2 .v2-nav,.v2 .v2-header-aside .v2-phone-label{display:none}.v2 .v2-brand-mark{height:36px}.v2 .v2-header-aside .v2-phone{font-size:16px}.v2 .v2-burger{display:flex}}/* header: КазнаЭксперт под логотипом + номер/подпись в одну строку */.v2 .v2-brand{flex-direction:column;align-items:flex-start;gap:4px}.v2 .v2-brand::after{content:"КазнаЭксперт";font-family:var(--font-display);font-weight:500;font-size:16px;line-height:1;letter-spacing:.01em;color:var(--ink);white-space:nowrap}.v2 .v2-header-aside{flex-direction:column;align-items:flex-end;gap:2px}.v2 .v2-header-aside .v2-phone-label,.v2 .v2-header-aside .v2-phone{white-space:nowrap}.v2 .v2-nav{gap:26px}@media(max-width:920px){.v2 .v2-brand{flex-direction:row;align-items:center}.v2 .v2-brand::after{display:none}.v2 .v2-header-aside{flex-direction:row;align-items:center;gap:14px}}</style>
<link rel="preload" href="/css/v2.css?v=<?= @filemtime($_SERVER['DOCUMENT_ROOT'].'/css/v2.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="/css/v2.css?v=<?= @filemtime($_SERVER['DOCUMENT_ROOT'].'/css/v2.css') ?>"></noscript>

<meta property="og:type" content="article">
<meta property="og:locale" content="ru_RU">
<meta property="og:site_name" content="КазнаЭксперт">
<meta property="og:title" content="Электронный бюджет для исполнителя контракта: подключение и вход">
<meta property="og:description" content="Подключение через ТОФК, вход по сертификату, личный кабинет и подсистемы. Чем «Электронный бюджет» отличается от СУФД и портала заявителя ФЗС.">
<meta property="og:url" content="https://kaznaexpert.ru/baza-znaniy/elektronnyy-byudzhet-dlya-ispolnitelya-kontrakta/">
<meta property="og:image" content="https://kaznaexpert.ru/img/og-image.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="Электронный бюджет для исполнителя контракта: подключение и вход — КазнаЭксперт">
<meta property="article:published_time" content="2026-06-05T09:00:00+03:00">
<meta property="article:modified_time" content="2026-06-05T09:00:00+03:00">
<meta property="article:author" content="https://kaznaexpert.ru/komanda/mihailov-yaroslav/">
<meta property="article:section" content="База знаний">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Электронный бюджет для исполнителя контракта: подключение и вход">
<meta name="twitter:description" content="Подключение через ТОФК, вход по сертификату, личный кабинет и подсистемы. Чем «Электронный бюджет» отличается от СУФД и портала заявителя ФЗС.">
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
  <nav class="crumbs" aria-label="Хлебные крошки"><a href="/">Главная</a> › <a href="/baza-znaniy/">База знаний</a> › Электронный бюджет для исполнителя</nav>

  <aside class="toc" aria-label="Содержание">
    <div class="toc__label">Содержание</div>
    <ul class="toc__list" id="tocList">
      <li><a href="#chto-takoe">Что такое «Электронный бюджет»</a></li>
      <li><a href="#zachem">Зачем исполнителю контракта личный кабинет</a></li>
      <li><a href="#eb-sufd-fzs">Электронный бюджет, СУФД и ФЗС: кто за что отвечает</a></li>
      <li><a href="#pravovaya">Правовая база</a></li>
      <li><a href="#podsistemy">Подсистемы, с которыми работает исполнитель</a></li>
      <li><a href="#arm">Подготовка рабочего места</a></li>
      <li><a href="#podklyuchenie">Как подключиться: пошагово</a></li>
      <li><a href="#vhod">Вход по сертификату</a></li>
      <li><a href="#lk">Личный кабинет: что внутри</a></li>
      <li><a href="#pautina">Электронный бюджет в цепочке сопровождения</a></li>
      <li><a href="#oshibki">Частые проблемы со входом и доступом</a></li>
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
    <h1>ГИИС «Электронный бюджет» для исполнителя контракта: подключение, вход по сертификату, личный кабинет</h1>
    <div class="byline"><span class="av">ЯМ</span><span>Автор: <a href="/komanda/mihailov-yaroslav/">Ярослав Михайлов</a>, главный эксперт</span><span class="dot">·</span><span>15+ лет в Казначействе</span><span class="dot">·</span><span>16 мин чтения</span><span class="dot">·</span><span>Обновлено 8 июля 2026</span></div>
    </div>

    <div class="share">
      <span class="share__label">Поделиться:</span>
      <a href="https://t.me/share/url?url=https%3A%2F%2Fkaznaexpert.ru%2Fbaza-znaniy%2Felektronnyy-byudzhet-dlya-ispolnitelya-kontrakta%2F&amp;text=%D0%AD%D0%BB%D0%B5%D0%BA%D1%82%D1%80%D0%BE%D0%BD%D0%BD%D1%8B%D0%B9%20%D0%B1%D1%8E%D0%B4%D0%B6%D0%B5%D1%82%20%D0%B4%D0%BB%D1%8F%20%D0%B8%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D0%B8%D1%82%D0%B5%D0%BB%D1%8F%20%D0%BA%D0%BE%D0%BD%D1%82%D1%80%D0%B0%D0%BA%D1%82%D0%B0%20%D0%BF%D0%BE%D0%B4%20%D0%BA%D0%B0%D0%B7%D0%BD%D0%B0%D1%87%D0%B5%D0%B9%D1%81%D0%BA%D0%B8%D0%BC%20%D1%81%D0%BE%D0%BF%D1%80%D0%BE%D0%B2%D0%BE%D0%B6%D0%B4%D0%B5%D0%BD%D0%B8%D0%B5%D0%BC%3A%20%D1%87%D0%B5%D0%BC%20%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0%20%D0%BE%D1%82%D0%BB%D0%B8%D1%87%D0%B0%D0%B5%D1%82%D1%81%D1%8F%20%D0%BE%D1%82%20%D0%A1%D0%A3%D0%A4%D0%94%20%D0%B8%20%D0%A4%D0%97%D0%A1%2C%20%D0%BA%D0%B0%D0%BA%20%D0%BF%D0%BE%D0%B4%D0%BA%D0%BB%D1%8E%D1%87%D0%B8%D1%82%D1%8C%D1%81%D1%8F%2C%20%D0%B2%D0%BE%D0%B9%D1%82%D0%B8%20%D0%BF%D0%BE%20%D1%81%D0%B5%D1%80%D1%82%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%D1%82%D1%83%20%D0%B8%20%D1%87%D1%82%D0%BE%20%D0%B4%D0%B5%D0%BB%D0%B0%D1%82%D1%8C%20%D0%B2%20%D0%BB%D0%B8%D1%87%D0%BD%D0%BE%D0%BC%20%D0%BA%D0%B0%D0%B1%D0%B8%D0%BD%D0%B5%D1%82%D0%B5" target="_blank" rel="noopener"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.56 8.25l-1.86 8.76c-.14.62-.5.77-1.02.48l-2.82-2.08-1.36 1.31c-.15.15-.28.28-.57.28l.2-2.89 5.27-4.76c.23-.2-.05-.32-.35-.12l-6.51 4.1-2.8-.88c-.61-.19-.62-.61.13-.9l10.95-4.22c.5-.18.95.12.79.85z"/></svg>Telegram</a>
      <button type="button" id="copyLink"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.07 0l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.07 0l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg><span>Копировать ссылку</span></button>
      <button type="button" id="printBtn"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9V2h12v7M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2M6 14h12v8H6z"/></svg>Скачать PDF</button>
    </div>

    <details class="mtoc"><summary>Содержание статьи</summary>
      <ol>
        <li><a href="#chto-takoe">Что такое «Электронный бюджет»</a></li><li><a href="#zachem">Зачем исполнителю контракта личный кабинет</a></li><li><a href="#eb-sufd-fzs">Электронный бюджет, СУФД и ФЗС: кто за что отвечает</a></li><li><a href="#pravovaya">Правовая база</a></li><li><a href="#podsistemy">Подсистемы, с которыми работает исполнитель</a></li><li><a href="#arm">Подготовка рабочего места</a></li><li><a href="#podklyuchenie">Как подключиться: пошагово</a></li><li><a href="#vhod">Вход по сертификату</a></li><li><a href="#lk">Личный кабинет: что внутри</a></li><li><a href="#pautina">Электронный бюджет в цепочке сопровождения</a></li><li><a href="#oshibki">Частые проблемы со входом и доступом</a></li><li><a href="#keys">Пример из практики</a></li><li><a href="#glossary">Глоссарий</a></li><li><a href="#faq">Частые вопросы</a></li>
      </ol>
    </details>

    <div class="tldr">ГИИС «Электронный бюджет» — государственная система управления общественными финансами, которую ведёт Минфин и Федеральное казначейство по Постановлению Правительства РФ № 658. Для исполнителя контракта под казначейским сопровождением это основной рабочий контур: здесь открывают лицевой счёт, утверждают сведения об операциях и проводят платежи. Подключение идёт через ТОФК, вход — по квалифицированному сертификату ЭП.<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a></div>

    <section class="keyfacts grain" aria-label="Ключевые факты">
      <h2>Коротко о главном</h2>
      <div class="keyfacts__grid">
        <div class="kf"><div class="kf__n">№ 658</div><div class="kf__t"><b>Основа системы</b> — ПП РФ от 30.06.2015 о ГИИС «Электронный бюджет»</div></div>
        <div class="kf"><div class="kf__n">budget.gov.ru</div><div class="kf__t"><b>Единый портал</b> — публичная часть и вход в личный кабинет</div></div>
        <div class="kf"><div class="kf__n">через ТОФК</div><div class="kf__t"><b>Подключение</b> — по заявке, которую обрабатывает орган казначейства</div></div>
        <div class="kf"><div class="kf__n">сертификат ЭП</div><div class="kf__t"><b>Вход</b> — по квалифицированному сертификату казначейства</div></div>
        <div class="kf"><div class="kf__n">3 системы</div><div class="kf__t"><b>Не путать</b> — Электронный бюджет, СУФД и портал заявителя ФЗС</div></div>
        <div class="kf"><div class="kf__n">АРМ</div><div class="kf__t"><b>Рабочее место</b> — КриптоПро, защищённый канал, корневые сертификаты</div></div>
      </div>
    </section>

    <h2 id="chto-takoe">Что такое «Электронный бюджет»</h2>
    <div class="answer reveal">
      <p class="lead-p">«Электронный бюджет» — государственная интегрированная информационная система управления общественными финансами. Через неё органы власти, учреждения и привлечённые к бюджетным деньгам коммерческие организации планируют расходы, ведут лицевые счета, проводят платежи и сдают отчётность. Для исполнителя госконтракта под казначейским сопровождением это не «ещё один портал», а основной рабочий контур, где живёт весь документооборот по целевым средствам.<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a></p>
      <p>Систему создали и ведут Минфин России и Федеральное казначейство. Публичная часть открыта на едином портале бюджетной системы budget.gov.ru — там же находится точка входа в защищённый личный кабинет, где и выполняется работа по контракту.</p>
    </div>
    <p>Важно сразу развести два слоя системы. Открытая часть — витрина: реестры, бюджетные данные, <a href="/baza-znaniy/svodnyy-reestr/">сводный реестр</a> организаций. Закрытая часть — рабочие подсистемы с юридически значимыми документами, доступ к которым даётся по квалифицированной электронной подписи и только после подключения. Исполнителю контракта нужна именно закрытая часть.</p>

    <h2 id="zachem">Зачем исполнителю контракта личный кабинет</h2>
    <p>Как только контракт попал под казначейское сопровождение, расчёты по нему уходят из обычного банка в казначейство, а инструментом становится «Электронный бюджет». В личном кабинете исполнитель:</p>
    <ul>
      <li><b>Подаёт документы на открытие лицевого счёта 71</b> — заявление формируется и подписывается в системе; пошаговый разбор — в статье <a href="/baza-znaniy/licevoy-schet-71-kak-otkryt/">как открыть лицевой счёт 71</a>.</li>
      <li><b>Утверждает сведения об операциях с целевыми средствами</b> — план расходования, без которого казначейство не пропустит ни один платёж; как заполнять — в материале о <a href="/baza-znaniy/svedeniya-ob-operaciyah-s-celevymi-sredstvami/">сведениях об операциях</a>.</li>
      <li><b>Формирует распоряжения о совершении казначейских платежей</b> и направляет их на санкционирование.</li>
      <li><b>Получает выписки и справки</b> по лицевому счёту — как их читать, разбираем в статье о <a href="/baza-znaniy/vypiska-iz-licevogo-scheta-kaznachejstva/">выписке из лицевого счёта</a>.</li>
      <li><b>Сдаёт отчётность</b> по расходованию целевых средств и ведёт переписку с ТОФК.</li>
    </ul>
    <p>Иначе говоря, личный кабинет «Электронного бюджета» — это рабочее место, через которое проходит весь жизненный цикл контракта: от открытия счёта до его закрытия и <a href="/baza-znaniy/zavershenie-kaznacheyskogo-soprovozhdeniya/">завершения сопровождения</a>.</p>

    <h2 id="eb-sufd-fzs">Электронный бюджет, СУФД и ФЗС: кто за что отвечает</h2>
    <p>Три системы казначейства новички постоянно путают, теряя время на «не той» площадке. Разведём их по назначению — это снимает половину вопросов на старте.</p>
    <table>
      <caption>Электронный бюджет, СУФД и портал заявителя ФЗС</caption>
      <tr><th>Система</th><th>Адрес</th><th>Для чего исполнителю казначейского сопровождения</th></tr>
      <tr><td>Портал заявителя (ФЗС)</td><td>fzs.roskazna.ru</td><td>Выпуск и замена сертификата электронной подписи казначейства — см. <a href="/baza-znaniy/portal-zayavitelya-kaznachejstva/">портал заявителя ФЗС</a></td></tr>
      <tr><td>«Электронный бюджет»</td><td>budget.gov.ru / lk</td><td>Основной контур: лицевой счёт 71, сведения об операциях, платежи, отчётность по целевым средствам</td></tr>
      <tr><td>СУФД-портал</td><td>региональный домен ТОФК</td><td>Работа с расчётными документами в ряде случаев и регионов — см. <a href="/baza-znaniy/sufd-portal-kaznachejstva/">СУФД-портал</a></td></tr>
    </table>
    <p>Логика простая: <b>сначала ФЗС</b> (получить подпись), <b>потом «Электронный бюджет»</b> (подключиться и работать). СУФД — соседний инструмент: для исполнителя коммерческого контракта под сопровождением целевых средств основным остаётся «Электронный бюджет», тогда как СУФД исторически обслуживает участников бюджетного процесса. Если ваш ТОФК просит работать в конкретной системе — ориентируйтесь на его памятку, маршрут зависит от типа средств и региона.</p>

    <h2 id="pravovaya">Правовая база</h2>
    <table>
      <caption>На чём основана работа «Электронного бюджета»</caption>
      <tr><th>Документ</th><th>Что регулирует</th></tr>
      <tr><td>Постановление Правительства РФ от 30.06.2015 № 658</td><td>Положение о ГИИС «Электронный бюджет»: состав, подсистемы, участники, порядок доступа</td></tr>
      <tr><td>Бюджетный кодекс РФ, глава 24.4 (ст. 242.23–242.27)</td><td>Казначейское сопровождение, ради которого исполнитель и подключается к системе</td></tr>
      <tr><td>Порядок подключения к ГИИС «Электронный бюджет» (Минфин России)</td><td>Состав заявки на подключение, требования к рабочему месту, перечень документов</td></tr>
      <tr><td>Приказ Казначейства России от 17.10.2016 № 21н (ред. от 26.11.2025)</td><td>Открытие и ведение лицевых счетов, формы выписок, которые исполнитель видит в системе</td></tr>
    </table>
    <p>Правила казначейского сопровождения устанавливаются ежегодно: на 2026 год действует порядок, заданный Постановлением Правительства РФ № 1752 от 11.12.2024 и продлённый Постановлением № 2053 от 17.12.2025. Эти акты определяют, какие средства попадают в систему и по каким правилам идут платежи.<a class="fn" href="#ref-3" aria-label="Источник 3">[3]</a></p>

    <h2 id="podsistemy">Подсистемы, с которыми работает исполнитель</h2>
    <p>«Электронный бюджет» состоит из множества подсистем, но исполнителю контракта нужна лишь часть. Не пытайтесь освоить систему целиком — сфокусируйтесь на нужных разделах.</p>
    <table>
      <caption>Рабочие подсистемы исполнителя контракта под казначейское сопровождение</caption>
      <tr><th>Подсистема / раздел</th><th>Что делает исполнитель</th></tr>
      <tr><td>Учёт и отчётность</td><td>Лицевой счёт 71, выписки, справки, остатки целевых средств</td></tr>
      <tr><td>Управление денежными средствами</td><td>Сведения об операциях, распоряжения о совершении платежей, санкционирование</td></tr>
      <tr><td>Ведение НСИ / реестры</td><td>Реквизиты организации, сверка со сводным реестром, карточки образцов подписей</td></tr>
    </table>
    <p>Остальные подсистемы — бюджетное планирование, управление закупками, учёт ГРБС — относятся к участникам бюджетного процесса и в работе коммерческого исполнителя обычно не задействованы. Набор доступных разделов определяется полномочиями, которые казначейство выдаёт при подключении: лишнего «Электронный бюджет» не покажет.</p>

    <h2 id="arm">Подготовка рабочего места</h2>
    <p>Закрытая часть системы открывается только с правильно настроенного автоматизированного рабочего места (АРМ). Без этого вход не состоится — и именно на этом этапе застревает большинство новичков.</p>
    <h3>Что нужно установить и проверить</h3>
    <ul>
      <li><b>Средство криптозащиты</b> — КриптоПро CSP актуальной версии (лицензия должна быть действующей).</li>
      <li><b>Защищённый канал связи</b> — средство организации защищённого соединения с серверами казначейства (по требованиям ТОФК и Минфина).</li>
      <li><b>Корневые сертификаты УЦ казначейства и сертификаты серверов</b> — без них браузер не доверяет системе; как их поставить, разобрано в статье о <a href="/baza-znaniy/kornevye-sertifikaty-kaznachejstva/">корневых сертификатах казначейства</a>.</li>
      <li><b>Браузер с поддержкой ГОСТ-шифрования и плагин для работы с электронной подписью.</b></li>
      <li><b>Личный квалифицированный сертификат</b> уполномоченного сотрудника, выпущенный через <a href="/baza-znaniy/portal-zayavitelya-kaznachejstva/">портал заявителя ФЗС</a>.</li>
    </ul>
    <div class="note"><b>Совет.</b> Заведите отдельную рабочую станцию или профиль строго под казначейские системы. Обновление браузера «по воздуху» или смена версии криптопровайдера на «общем» компьютере — типичная причина внезапной потери входа накануне платежа.</div>

    <h2 id="podklyuchenie">Как подключиться к «Электронному бюджету»: пошагово</h2>
    <p>Подключение коммерческого исполнителя идёт через территориальный орган казначейства: именно ТОФК обрабатывает заявку и выдаёт доступ. Маршрут такой.<a class="fn" href="#ref-2" aria-label="Источник 2">[2]</a></p>
    <h3>Шаг 1. Выпустите электронную подпись</h3>
    <p>Подключение невозможно без квалифицированного сертификата на уполномоченных сотрудников. Подпись оформляется на портале заявителя ФЗС; держателей обычно двое-трое — руководитель и ответственные исполнители.</p>
    <h3>Шаг 2. Настройте рабочее место</h3>
    <p>Установите криптосредства, защищённый канал, корневые сертификаты и плагин, проверьте версию браузера. Удобно прогнать чек-лист из раздела о подготовке АРМ выше до подачи заявки, а не после первого отказа во входе.</p>
    <h3>Шаг 3. Подготовьте пакет документов</h3>
    <p>В пакет входят заявка на подключение по установленной форме, приказ (распоряжение) о назначении ответственных за работу в системе, файлы сертификатов ЭП, согласия сотрудников на обработку персональных данных и доверенности там, где это нужно. Точный комплект и формы уточняет ваш ТОФК.</p>
    <h3>Шаг 4. Подайте заявку в ТОФК</h3>
    <p>Заявку с приложениями направляют в орган казначейства по месту обслуживания. На практике подключение совмещают с открытием лицевого счёта 71 — это один входной контур, и нет смысла растягивать его на два визита.</p>
    <h3>Шаг 5. Получите доступ и проверьте вход</h3>
    <p>После обработки заявки казначейство заводит профиль организации и назначает полномочия. С этого момента можно входить в личный кабинет по сертификату и начинать работу — открытие счёта, сведения об операциях, платежи.</p>
    <div class="note"><b>Очерёдность.</b> Подпись (ФЗС) → настройка АРМ → заявка на подключение и открытие счёта → работа в личном кабинете. Перепрыгнуть шаг подписи или АРМ не получится: система просто не пустит.</div>

    <h2 id="vhod">Вход по сертификату</h2>
    <p>Вход в закрытую часть выполняется не логином и паролем, а сертификатом электронной подписи. Браузер обращается к серверу казначейства по защищённому каналу, система проверяет ваш сертификат и сопоставляет его с профилем организации.</p>
    <ol>
      <li>Подключите носитель с ключом ЭП (токен) к рабочей станции.</li>
      <li>Откройте точку входа в личный кабинет на едином портале и выберите вход по сертификату.</li>
      <li>Укажите нужный сертификат уполномоченного сотрудника и подтвердите PIN-кодом носителя.</li>
      <li>Система сверяет подпись, полномочия и допуск — и открывает доступные подсистемы.</li>
    </ol>
    <p>Если вход не проходит, в девяти случаях из десяти дело не в самом «Электронном бюджете», а в рабочем месте: не установлен корневой сертификат, истёк личный сертификат, не запущен защищённый канал или браузер обновился до несовместимой версии. Разбор частых проблем — ниже.</p>

    <h2 id="lk">Личный кабинет: что внутри</h2>
    <p>После входа исполнитель видит рабочий стол с доступными подсистемами. Ориентиры для первых недель:</p>
    <table>
      <caption>Что делать в личном кабинете и в какой последовательности</caption>
      <tr><th>Этап</th><th>Где</th><th>Результат</th></tr>
      <tr><td>Сверка реквизитов и сводного реестра</td><td>Ведение НСИ / реестры</td><td>Организация корректно идентифицирована</td></tr>
      <tr><td>Открытие лицевого счёта 71</td><td>Учёт и отчётность</td><td>Появился счёт для целевых средств</td></tr>
      <tr><td>Сведения об операциях</td><td>Управление денежными средствами</td><td>Утверждён план расходования</td></tr>
      <tr><td>Распоряжения и платежи</td><td>Управление денежными средствами</td><td>Платежи проходят санкционирование</td></tr>
      <tr><td>Выписки и отчётность</td><td>Учёт и отчётность</td><td>Контроль остатков и движения средств</td></tr>
    </table>
    <p>Каждый документ в системе подписывается ЭП и получает статус: «черновик», «на проверке», «принят» или «возвращён». Привыкайте отслеживать статусы — это главный индикатор того, на чьей стороне сейчас ход и не завис ли документ.</p>
    <h3>Роли сотрудников и разделение прав</h3>
    <p>В личном кабинете удобно разделить роли: один сотрудник готовит документы, другой подписывает. Такое разделение снижает риск ошибки и не завязывает всю работу на одном человеке и одном сертификате. Полномочия привязываются к конкретным сертификатам, поэтому при увольнении ответственного важно вовремя отозвать его подпись и переназначить права — иначе доступ останется «висеть» за уволенным.</p>
    <h3>Что делать при сбоях на стороне системы</h3>
    <p>Иногда проблема не в рабочем месте, а в самой системе: технические работы, недоступность сервиса. Прежде чем переустанавливать криптосредства, проверьте, открывается ли публичная часть портала и нет ли объявлений о регламентных работах. Если недоступна именно закрытая часть и рабочее место исправно, вопрос решается через техподдержку казначейства, а срочные платежи согласуются с ТОФК — это экономит часы бессмысленной перенастройки.</p>

    <h2 id="pautina">Электронный бюджет в цепочке сопровождения</h2>
    <p>Чтобы система не выглядела набором разрозненных кнопок, держите в голове всю цепочку — «Электронный бюджет» связывает её воедино:</p>
    <ol>
      <li><b>Включение в <a href="/baza-znaniy/svodnyy-reestr/">сводный реестр</a></b> — организация идентифицирована в казначейском контуре.</li>
      <li><b>Выпуск ЭП на <a href="/baza-znaniy/portal-zayavitelya-kaznachejstva/">портале заявителя ФЗС</a></b> — появился ключ доступа.</li>
      <li><b>Подключение к «Электронному бюджету»</b> — открыт личный кабинет.</li>
      <li><b>Открытие <a href="/baza-znaniy/licevoy-schet-71-kak-otkryt/">лицевого счёта 71</a></b> — есть счёт для целевых средств.</li>
      <li><b><a href="/baza-znaniy/svedeniya-ob-operaciyah-s-celevymi-sredstvami/">Сведения об операциях</a> и платежи</b> — деньги движутся по правилам <a href="/baza-znaniy/poryadok-kaznacheyskogo-soprovozhdeniya-sredstv/">порядка казначейского сопровождения</a>.</li>
      <li><b><a href="/baza-znaniy/zavershenie-kaznacheyskogo-soprovozhdeniya/">Завершение сопровождения</a></b> — возврат остатков и закрытие счёта.</li>
    </ol>
    <p>«Электронный бюджет» — узел этой паутины: через него проходят шаги 3–6. Освоив навигацию по личному кабинету один раз, исполнитель проходит все последующие контракты заметно быстрее.</p>

    <h2 id="oshibki">Частые проблемы со входом и доступом</h2>
    <table>
      <caption>Типовые проблемы «Электронного бюджета» и их профилактика</caption>
      <tr><th>Проблема</th><th>Причина</th><th>Что делать</th></tr>
      <tr><td>Браузер не доверяет сайту, ошибка сертификата</td><td>Не установлены корневые сертификаты УЦ казначейства</td><td>Поставить корневые сертификаты и сертификаты серверов</td></tr>
      <tr><td>Вход обрывается, страница не грузится</td><td>Не запущен или неверно настроен защищённый канал связи</td><td>Проверить криптошлюз/клиент защищённого соединения</td></tr>
      <tr><td>Система не видит сертификат</td><td>Истёк личный сертификат ЭП или не подключён токен</td><td>Проверить срок ЭП, при необходимости — заменить через ФЗС</td></tr>
      <tr><td>Доступ есть, но нужных разделов нет</td><td>Не назначены полномочия при подключении</td><td>Уточнить полномочия в ТОФК, дослать заявку</td></tr>
      <tr><td>Вход «слетел» после обновления</td><td>Браузер или криптопровайдер обновились до несовместимой версии</td><td>Откатить версию, вести работу на выделенном АРМ</td></tr>
      <tr><td>Документы расходятся с реестром</td><td>Реквизиты в системе не сверены со сводным реестром и ЕГРЮЛ</td><td>Актуализировать сведения, затем подавать документы</td></tr>
    </table>

    <h2 id="keys">Пример из практики</h2>
    <div class="answer reveal">
      <p>Типовая ситуация: организация выпустила подпись, но к открытию счёта приступает «с чистого ноутбука» — без криптопровайдера, защищённого канала и корневых сертификатов. Вход в личный кабинет не проходит, день уходит на настройку рабочего места, а срок подачи документов на счёт поджимает. На следующем контракте та же компания идёт по порядку: сначала подпись, затем настройка выделенного АРМ по чек-листу, и только потом заявка на подключение и открытие счёта — вход проходит с первого раза. Пример обобщённый; конкретный набор криптосредств и версий зависит от требований вашего ТОФК, но принцип «сначала рабочее место, потом заявка» универсален.</p>
    </div>

    <p data-ctx="auto-ctx:nastroyka-arm-elektronnyy-byudzhet">Прежде чем войти в систему, рабочее место нужно настроить: установить КриптоПро, плагин, «Континент TLS» и цепочку сертификатов — пошагово в материале <a href="/baza-znaniy/nastroyka-arm-elektronnyy-byudzhet/">настройка рабочего места (АРМ) для «Электронного бюджета»</a>.</p>
    <p data-ctx="auto-ctx:poib-sobi-elektronnyy-byudzhet">Полномочия на работу в подсистемах «Электронного бюджета» назначаются отдельно — через <a href="/baza-znaniy/poib-sobi-elektronnyy-byudzhet/">подсистему ПОИБ/СОБИ казначейства</a>.</p>
    <p data-ctx="auto-ctx:mashinochitaemaya-doverennost-kaznachejstvo">Чтобы уполномоченный работник мог подписывать документы в системе, ему нужна <a href="/baza-znaniy/mashinochitaemaya-doverennost-kaznachejstvo/">машиночитаемая доверенность для казначейства</a>, оформленная руководителем.</p>
    <div class="takeaways">
      <h2>Что важно запомнить</h2>
      <ol>
        <li>«Электронный бюджет» (ПП РФ № 658) — основной рабочий контур исполнителя контракта под казначейским сопровождением.</li>
        <li>Не путайте три системы: ФЗС — для подписи, «Электронный бюджет» — для счёта и платежей, СУФД — соседний инструмент по правилам ТОФК.</li>
        <li>Подключение идёт через ТОФК по заявке; коммерческая организация не работает с подсистемами напрямую без допуска.</li>
        <li>Вход — по квалифицированному сертификату ЭП, а не по логину и паролю.</li>
        <li>Большинство проблем со входом — на стороне рабочего места: корневые сертификаты, защищённый канал, срок ЭП, версия браузера.</li>
        <li>Очерёдность: сводный реестр → подпись → подключение → счёт → сведения и платежи → завершение.</li>
      </ol>
    </div>

    <h2 id="glossary">Глоссарий</h2>
    <dl class="gloss">
      <div><dt>ГИИС «Электронный бюджет»</dt><dd>Государственная интегрированная информационная система управления общественными финансами; ведётся Минфином и Казначейством по ПП РФ № 658.</dd></div>
      <div><dt>Личный кабинет</dt><dd>Закрытая часть системы с юридически значимыми документами, доступная по квалифицированной ЭП после подключения.</dd></div>
      <div><dt>АРМ</dt><dd>Автоматизированное рабочее место — настроенный компьютер с криптосредствами, защищённым каналом и сертификатами для входа в систему.</dd></div>
      <div><dt>Подсистема</dt><dd>Функциональный блок «Электронного бюджета» (учёт и отчётность, управление денежными средствами, ведение НСИ и др.).</dd></div>
      <div><dt>Полномочия</dt><dd>Набор прав, который казначейство назначает организации при подключении; определяет доступные разделы.</dd></div>
      <div><dt>Единый портал бюджетной системы</dt><dd>budget.gov.ru — публичная витрина и точка входа в личный кабинет.</dd></div>
    </dl>

    
<!-- geo-registraciya -->
<h2 id="registraciya">Регистрация в ГИИС «Электронный бюджет»: с чего начать</h2>
<p class="answer">Регистрация исполнителя в ГИИС «Электронный бюджет» — это подключение организации к системе, а не самостоятельная регистрация на сайте. Нужны квалифицированная электронная подпись руководителя, включение организации в Сводный реестр и заявка на доступ через территориальный орган Федерального казначейства по месту исполнителя. После проверки казначейство открывает доступ в личный кабинет, обычно за несколько рабочих дней.</p>
<h2 id="faq">Частые вопросы</h2>
    <div class="faq">
      <details open><summary>Что такое «Электронный бюджет» простыми словами?</summary><p>Государственная система, через которую планируют и проводят операции с бюджетными и целевыми средствами. Для исполнителя контракта под казначейским сопровождением это рабочее место, где он открывает лицевой счёт, утверждает сведения об операциях и проводит платежи.</p></details>
      <details><summary>Чем «Электронный бюджет» отличается от СУФД и портала ФЗС?</summary><p>Портал ФЗС нужен для выпуска электронной подписи, «Электронный бюджет» — основной контур для лицевого счёта и платежей, СУФД — соседний инструмент работы с расчётными документами по правилам ТОФК. Сначала подпись на ФЗС, затем работа в «Электронном бюджете».</p></details>
      <details><summary>Как исполнителю контракта подключиться к системе?</summary><p>Через территориальный орган казначейства: выпустить ЭП, настроить рабочее место, подать заявку на подключение с приказом о назначении ответственных, файлами сертификатов и согласиями. Обычно совмещается с открытием лицевого счёта 71.</p></details>
      <details><summary>Как войти в личный кабинет «Электронного бюджета»?</summary><p>По квалифицированному сертификату электронной подписи: подключаете токен, открываете точку входа на едином портале, выбираете сертификат и подтверждаете PIN-кодом. Логин и пароль не используются.</p></details>
      <details><summary>Почему не получается войти в систему?</summary><p>Чаще всего проблема в рабочем месте: не установлены корневые сертификаты казначейства, не запущен защищённый канал, истёк личный сертификат или браузер обновился до несовместимой версии. Сам «Электронный бюджет» при этом доступен.</p></details>
      <details><summary>Нужна ли отдельная подпись для «Электронного бюджета»?</summary><p>Используется квалифицированный сертификат казначейства, который выпускается на портале заявителя ФЗС. Отдельной «подписи для Электронного бюджета» заводить не нужно — подходит тот же сертификат уполномоченного сотрудника.</p></details>
      <details><summary>Какие подсистемы нужны исполнителю контракта?</summary><p>Учёт и отчётность (лицевой счёт, выписки), управление денежными средствами (сведения об операциях, платежи) и ведение НСИ (реквизиты, сводный реестр). Остальные разделы относятся к участникам бюджетного процесса.</p></details>
      <details><summary>Можно ли работать в «Электронном бюджете» с обычного компьютера?</summary><p>Нужно подготовить рабочее место: установить криптопровайдер, защищённый канал, корневые сертификаты и плагин ЭП. С «чистого» компьютера без этой настройки вход в закрытую часть не пройдёт.</p></details>
      <details><summary>Сколько занимает подключение?</summary><p>Зависит от готовности рабочего места и комплекта документов. Если ЭП выпущена, а АРМ настроен заранее, подключение и открытие счёта идут параллельно и не растягиваются. Точные сроки уточняйте в своём ТОФК.</p></details>
      <details><summary>Где взять корневые сертификаты для входа?</summary><p>На сайте Федерального казначейства; порядок установки и список сертификатов УЦ разобраны в отдельной статье о корневых сертификатах казначейства.</p></details>
    
      <details><summary>Как зарегистрироваться в ГИИС «Электронный бюджет»?</summary><p>Отдельной саморегистрации нет: доступ оформляется через территориальный орган Федерального казначейства. Исполнитель получает квалифицированную электронную подпись, обеспечивает включение организации в Сводный реестр и подаёт заявку на подключение. После проверки казначейство открывает личный кабинет — как правило, за несколько рабочих дней.</p></details>
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
        <li id="ref-1">Постановление Правительства РФ от 30.06.2015 № 658 «О государственной интегрированной информационной системе управления общественными финансами "Электронный бюджет"» — <a href="https://www.consultant.ru/document/cons_doc_LAW_182473/" target="_blank" rel="noopener">consultant.ru</a></li>
        <li id="ref-2">Порядок подключения к ГИИС «Электронный бюджет» — Минфин России — <a href="https://minfin.gov.ru/ru/ismf/electronic_budget/connect/regional/order/" target="_blank" rel="noopener">minfin.gov.ru</a>; Электронный бюджет — Казначейство России — <a href="https://roskazna.gov.ru/gis/ehlektronnyj-byudzhet/" target="_blank" rel="noopener">roskazna.gov.ru</a></li>
        <li id="ref-3">Бюджетный кодекс РФ, глава 24.4 «Казначейское сопровождение» (ст. 242.23, ред. с изм. с 24.06.2025) — <a href="https://www.consultant.ru/document/cons_doc_LAW_19702/68f24d27edee7d0ca5315de64a951b15f0af209f/" target="_blank" rel="noopener">consultant.ru</a></li>
        <li id="ref-4">Приказ Казначейства России от 17.10.2016 № 21н «О порядке открытия и ведения лицевых счетов территориальными органами Федерального казначейства» (ред. от 26.11.2025) — <a href="https://www.consultant.ru/document/cons_doc_LAW_208093/" target="_blank" rel="noopener">consultant.ru</a></li>
      </ol>
      <p class="refs__note">Материал актуален на 13 июня 2026 года. Состав заявки на подключение, требования к рабочему месту и перечень полномочий уточняйте в действующих регламентах и памятке вашего ТОФК.</p>
    </div>
  
    <div class="art-fb" id="artFb" style="margin:34px 0 6px;padding:18px 22px;background:var(--soft,#fbf8f1);border:1px solid var(--line,#e4ddd0);border-radius:14px;display:flex;align-items:center;gap:14px;flex-wrap:wrap">
      <span style="font-size:15px">Помогла ли статья?</span>
      <button type="button" data-fb="yes" style="font-family:inherit;font-size:14px;padding:8px 18px;border:1px solid var(--line,#e4ddd0);border-radius:100px;background:var(--card,#fffdf8);cursor:pointer;color:inherit">👍 Да</button>
      <button type="button" data-fb="no" style="font-family:inherit;font-size:14px;padding:8px 18px;border:1px solid var(--line,#e4ddd0);border-radius:100px;background:var(--card,#fffdf8);cursor:pointer;color:inherit">👎 Нет</button>
    </div>
    <script>(function(){var w=document.getElementById('artFb');if(!w)return;w.addEventListener('click',function(e){var b=e.target.closest('button[data-fb]');if(!b)return;try{window.ym&&ym(window.YM_ID||0,'reachGoal','article_feedback_'+b.dataset.fb);}catch(_){}w.innerHTML='<span style="font-size:15px">'+(b.dataset.fb==='yes'?'Спасибо! Рады, что пригодилось.':'Спасибо! Напишите в <a href="https://t.me/Kaznaexpert" target="_blank" rel="noopener" style="text-decoration:underline">Telegram</a>, чего не хватило — доработаем.')+'</span>';});})();</script>
  </article>

  <aside class="rail">
    <form class="railform" id="leadForm" novalidate data-endpoint="/php/lead.php" data-source="elektronnyy-byudzhet-dlya-ispolnitelya-kontrakta">
      <div class="railform__badge">Разбор эксперта</div>
      <h3 class="railform__title">Зависли на подключении к «Электронному бюджету»?</h3>
      <p class="railform__sub">Настроим рабочее место, подключим к системе и откроем лицевой счёт под ключ — без потери времени на ошибки входа и возвраты документов.</p>
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
    <a class="card reveal" href="/baza-znaniy/licevoy-schet-71-kak-otkryt/"><div class="card__cover"><span>Счёт 71</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Как открыть лицевой счёт 71 в ТОФК</h3><div class="card__meta">Счета · 15 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/portal-zayavitelya-kaznachejstva/"><div class="card__cover"><span>ФЗС</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Портал заявителя казначейства (ФЗС)</h3><div class="card__meta">ЭЦП · 15 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/sufd-portal-kaznachejstva/"><div class="card__cover"><span>СУФД</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">СУФД-портал казначейства: подключение и работа</h3><div class="card__meta">ГИИС · 14 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/kornevye-sertifikaty-kaznachejstva/"><div class="card__cover"><span>Сертификаты</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Корневые сертификаты УЦ казначейства</h3><div class="card__meta">ЭЦП · 11 мин</div></div></a>
    <!-- auto-related:nastroyka-arm-elektronnyy-byudzhet --><a class="card reveal" href="/baza-znaniy/nastroyka-arm-elektronnyy-byudzhet/"><div class="card__cover"><span>АРМ</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Настройка рабочего места для «Электронного бюджета»</h3><div class="card__meta">ГИИС · 17 мин</div></div></a>
    <!-- auto-related:poib-sobi-elektronnyy-byudzhet --><a class="card reveal" href="/baza-znaniy/poib-sobi-elektronnyy-byudzhet/"><div class="card__cover"><span>ПОИБ/СОБИ</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">ПОИБ/СОБИ «Электронного бюджета»: вход в защищённый контур</h3><div class="card__meta">ГИИС · 12 мин</div></div></a>
    <!-- auto-related:mashinochitaemaya-doverennost-kaznachejstvo --><a class="card reveal" href="/baza-znaniy/mashinochitaemaya-doverennost-kaznachejstvo/"><div class="card__cover"><span>МЧД</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Машиночитаемая доверенность (МЧД) для казначейства</h3><div class="card__meta">Сертификаты · 15 мин</div></div></a>
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

<section class="kz-sub" aria-labelledby="kzSubTitle" data-source="elektronnyy-byudzhet-dlya-ispolnitelya-kontrakta">
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
</body>
</html>
