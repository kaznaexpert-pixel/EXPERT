<?php /* Cache-Control задаёт .htaccess — единая точка правды для кэш-заголовков */ ?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Обучение казначейскому сопровождению: курс от практика</title>
<meta name="description" content="Индивидуальное обучение казначейскому сопровождению госконтрактов: 9 академических часов с экспертом Федерального казначейства на ваших контрактах. Цена 120 000 ₽.">
<meta name="author" content="Ярослав Михайлов">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1">
<meta name="theme-color" content="#F4F1EB" media="(prefers-color-scheme: light)">
<meta name="theme-color" content="#141310" media="(prefers-color-scheme: dark)">
<!-- PROD: canonical и og:url ОБЯЗАТЕЛЬНО менять под URL каждой статьи -->
<link rel="canonical" href="https://kaznaexpert.ru/uslugi/obuchenie-kaznacheyskomu-soprovozhdeniyu/">
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
<script>window.YM_PARAMS = {page_type:"landing", cluster:"uslugi"};</script>
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
<meta property="og:title" content="Обучение казначейскому сопровождению: курс от практика">
<meta property="og:description" content="Индивидуальное обучение казначейскому сопровождению госконтрактов: 9 академических часов с экспертом Федерального казначейства на ваших контрактах. Цена 120 000 ₽.">
<meta property="og:url" content="https://kaznaexpert.ru/uslugi/obuchenie-kaznacheyskomu-soprovozhdeniyu/">
<meta property="og:image" content="https://kaznaexpert.ru/img/og-image.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="Обучение казначейскому сопровождению: курс от практика">
<meta property="article:published_time" content="2026-07-15T09:00:00+03:00">
<meta property="article:modified_time" content="2026-07-22T09:00:00+03:00">
<meta property="article:author" content="https://kaznaexpert.ru/komanda/mihailov-yaroslav/">
<meta property="article:section" content="База знаний">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Обучение казначейскому сопровождению: курс от практика">
<meta name="twitter:description" content="Индивидуальное обучение казначейскому сопровождению госконтрактов: 9 академических часов с экспертом Федерального казначейства на ваших контрактах. Цена 120 000 ₽.">
<meta name="twitter:image" content="https://kaznaexpert.ru/img/og-image.png">

<!-- Schema: Article -->
<!-- Schema: HowTo -->
<!-- Schema: FAQPage -->
<!-- Schema: BreadcrumbList -->
<!-- Schema: DefinedTermSet (глоссарий — для entity-распознавания AI) -->
<link rel="stylesheet" href="/css/landing-shared.css?v=<?= @filemtime($_SERVER['DOCUMENT_ROOT'].'/css/landing-shared.css') ?>">
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

<div class="v2">
<style>@media (min-width:901px){.v2 .v2-process-grid.lp-3col,.v2 .v2-tariffs-grid.lp-3col{grid-template-columns:repeat(3,1fr)}}</style>
<section class="v2-hero"><div class="v2-container"><nav class="crumbs" aria-label="Хлебные крошки"><a href="/">Главная</a> › <a href="/uslugi/kaznacheyskoe-soprovozhdenie/">Услуги</a> › Обучение</nav><h1>Обучение казначейскому сопровождению: индивидуальный курс от практика</h1><p class="v2-lede">9 академических часов один на один с экспертом Федерального казначейства. Разбираем ваши контракты и процессы: открытие лицевого счёта, ГИИС «Электронный бюджет», санкционирование, раздельный учёт. После курса вы ведёте казначейское сопровождение самостоятельно — без отказов и срыва сроков.</p><div class="v2-hero-cta"><a href="#zayavka" class="v2-btn">Записаться на обучение <span aria-hidden="true">→</span></a><span class="v2-hero-note">9 ак. часов · индивидуально · 120 000 ₽</span></div></div></section><section class="v2-section v2-screen"><div class="v2-container"><h2>Для кого это обучение</h2><p>Курс — для тех, кто ведёт государственные контракты с казначейским сопровождением и хочет разобраться в процессе до автономии: бухгалтеров и финансистов подрядчиков, руководителей и специалистов по госзакупкам, сотрудников, которых назначили ответственными за лицевой счёт и «Электронный бюджет». Подойдёт и как ввод в тему с нуля, и как разбор конкретных проблем на действующем контракте.</p></div></section><section class="v2-section v2-screen"><div class="v2-container"><h2>Программа: 9 академических часов</h2><table style="width:100%;border-collapse:collapse;margin:8px 0 0"><caption style="text-align:left;font-size:13px;color:#7A7263;font-style:italic;padding:0 0 10px">Каждый блок — на ваших документах и контрактах</caption><tr><th style="text-align:left;padding:12px 14px;font-size:12px;text-transform:uppercase;letter-spacing:.05em;color:#8B6F47;border-bottom:2px solid #8B6F47">Блок</th><th style="text-align:left;padding:12px 14px;font-size:12px;text-transform:uppercase;letter-spacing:.05em;color:#8B6F47;border-bottom:2px solid #8B6F47">Что разбираем</th></tr><tr><td style="padding:12px 14px;border-bottom:1px solid #E4DDD0;font-weight:600">Счёт и доступы</td><td style="padding:12px 14px;border-bottom:1px solid #E4DDD0">Открытие лицевого счёта «71», Сводный реестр, электронная подпись и машиночитаемая доверенность</td></tr><tr><td style="padding:12px 14px;border-bottom:1px solid #E4DDD0;font-weight:600">Электронный бюджет</td><td style="padding:12px 14px;border-bottom:1px solid #E4DDD0">Настройка рабочего места, вход по сертификату, личный кабинет исполнителя</td></tr><tr><td style="padding:12px 14px;border-bottom:1px solid #E4DDD0;font-weight:600">Сведения и коды</td><td style="padding:12px 14px;border-bottom:1px solid #E4DDD0">Формирование Сведений об операциях, коды направлений расходования целевых средств</td></tr><tr><td style="padding:12px 14px;border-bottom:1px solid #E4DDD0;font-weight:600">Санкционирование</td><td style="padding:12px 14px;border-bottom:1px solid #E4DDD0">Как проходит проверка платежа, частые причины отказов и как их избегать</td></tr><tr><td style="padding:12px 14px;border-bottom:1px solid #E4DDD0;font-weight:600">Учёт и отчётность</td><td style="padding:12px 14px;border-bottom:1px solid #E4DDD0">Раздельный учёт целевых средств, отчётность, закрытие лицевого счёта</td></tr><tr><td style="padding:12px 14px;border-bottom:1px solid #E4DDD0;font-weight:600">Разбор ваших кейсов</td><td style="padding:12px 14px;border-bottom:1px solid #E4DDD0">Ответы на вопросы и разбор ситуаций по вашим действующим контрактам</td></tr></table></div></section><section class="v2-section v2-screen"><div class="v2-container"><h2>Формат обучения</h2><p>Занятия проходят индивидуально и онлайн, на ваших реальных документах и контрактах, а не на абстрактных примерах. Учит практик с 15+ годами работы в системе Федерального казначейства — санкционирование, лицевые счета и требования УФК он знает со стороны проверяющего. График подстраиваем под вас; после курса остаются материалы и чек-листы, к которым можно возвращаться.</p><p>Программа актуальна на июль 2026 года и отражает действующий порядок: открытие лицевого счёта с кодом «71» и подача документов полностью переведены в электронный формат через ГИИС «Электронный бюджет», без личного визита в отделение Федерального казначейства.</p></div></section><section class="v2-section v2-screen"><div class="v2-container"><h2>Что вы получите</h2><p>По итогам обучения вы самостоятельно открываете лицевой счёт, работаете в «Электронном бюджете», формируете Сведения об операциях, проводите платежи через санкционирование без лишних возвратов и ведёте раздельный учёт. На руках — понятный алгоритм и чек-листы под ваши контракты.</p></div></section><section class="v2-section v2-screen"><div class="v2-container"><h2>Учиться самостоятельно или с наставником</h2><p>Освоить казначейское сопровождение можно и по открытым источникам — нормативка публична, а в нашей <a href="/baza-znaniy/">базе знаний</a> больше сотни разборов. Разница не в доступности информации, а в цене ошибки на живом контракте: возврат платежа сдвигает расчёты с поставщиками, а несданные вовремя сведения — это уже административный штраф. Наставник нужен, чтобы пройти первый контракт без этих потерь и забрать себе рабочую методику.</p><table style="width:100%;border-collapse:collapse;margin:14px 0 0"><caption style="text-align:left;font-size:13px;color:#7A7263;font-style:italic;padding:0 0 10px">Честное сравнение форматов освоения</caption><tr><th style="text-align:left;padding:12px 14px;font-size:12px;text-transform:uppercase;letter-spacing:.05em;color:#8B6F47;border-bottom:2px solid #8B6F47">Критерий</th><th style="text-align:left;padding:12px 14px;font-size:12px;text-transform:uppercase;letter-spacing:.05em;color:#8B6F47;border-bottom:2px solid #8B6F47">Самостоятельно</th><th style="text-align:left;padding:12px 14px;font-size:12px;text-transform:uppercase;letter-spacing:.05em;color:#8B6F47;border-bottom:2px solid #8B6F47">Курс с экспертом</th></tr><tr><td style="padding:12px 14px;border-bottom:1px solid #E4DDD0;font-weight:600">Источник ответов</td><td style="padding:12px 14px;border-bottom:1px solid #E4DDD0">Форумы, чужие кейсы, метод проб</td><td style="padding:12px 14px;border-bottom:1px solid #E4DDD0">Практик, который видел процесс со стороны УФК</td></tr><tr><td style="padding:12px 14px;border-bottom:1px solid #E4DDD0;font-weight:600">Материал для разбора</td><td style="padding:12px 14px;border-bottom:1px solid #E4DDD0">Абстрактные примеры из статей</td><td style="padding:12px 14px;border-bottom:1px solid #E4DDD0">Ваши контракты, сведения и платёжки</td></tr><tr><td style="padding:12px 14px;border-bottom:1px solid #E4DDD0;font-weight:600">Цена ошибки</td><td style="padding:12px 14px;border-bottom:1px solid #E4DDD0">Возвраты платежей и риск штрафов на живом контракте</td><td style="padding:12px 14px;border-bottom:1px solid #E4DDD0">Ошибки разбираются до подачи документов</td></tr><tr><td style="padding:12px 14px;border-bottom:1px solid #E4DDD0;font-weight:600">Что остаётся после</td><td style="padding:12px 14px;border-bottom:1px solid #E4DDD0">Разрозненные заметки</td><td style="padding:12px 14px;border-bottom:1px solid #E4DDD0">Чек-листы и алгоритм под ваши процессы</td></tr></table></div></section><section class="v2-section v2-screen"><div class="v2-container"><h2>Какие ошибки чаще всего совершают без подготовки</h2><p>Пять ситуаций, которые мы стабильно видим у компаний, осваивавших сопровождение на ходу — каждая стоит от нескольких дней простоя до штрафа:</p><ul><li>аванс перечисляют контрагенту, который не открыл лицевой счёт в казначействе, — платёж не проходит санкционирование;</li><li>сведения об операциях не бьются с детализацией затрат — казначейство возвращает платёжки на доработку;</li><li>пропускают срок утверждения сведений — с 2026 года за это предусмотрен отдельный штраф по КоАП;</li><li>электронную подпись и машиночитаемую доверенность настраивают в последний момент — теряют недели на доступ к «Электронному бюджету»;</li><li>раздельный учёт начинают вести задним числом перед проверкой вместо настройки с первого дня контракта.</li></ul><div class="related-inline"><b>По теме в базе знаний:</b> <a href="/baza-znaniy/kak-proyti-proverku-kaznachejstva/">как пройти проверку казначейства</a>, <a href="/baza-znaniy/prichiny-otkaza-kaznacheystva-v-sankcionirovanii/">10 причин отказа в санкционировании</a>, <a href="/baza-znaniy/nastroyka-arm-elektronnyy-byudzhet/">настройка рабочего места «Электронного бюджета»</a>.</div></div></section><section class="v2-section v2-screen"><div class="v2-container"><h2>Стоимость обучения</h2><div style="max-width:420px;border:1px solid #E4DDD0;border-radius:14px;padding:24px 26px;background:#FFFDF8"><div style="font-family:'Playfair Display',serif;font-size:20px;margin:0 0 4px">Обучение · 9 академических часов</div><div style="font-family:'Playfair Display',serif;font-size:34px;color:#1A1A1A;margin:6px 0">120 000 ₽</div><div style="font-size:14px;color:#7A7263;margin:0 0 16px">Индивидуально · онлайн · на ваших документах · фиксированная цена</div><a href="#zayavka" class="v2-btn">Записаться <span aria-hidden="true">→</span></a></div></div></section><section class="v2-section v2-screen"><div class="v2-container"><h2 id="faq">Отвечаем прямо</h2><div class="faq"><details><summary>Сколько длится обучение казначейскому сопровождению?</summary><p>Курс рассчитан на 9 академических часов. График гибкий: занятия можно распределить на несколько сессий и подстроить под вашу загрузку.</p></details><details><summary>В каком формате проходит обучение?</summary><p>Индивидуально и онлайн, на ваших реальных контрактах и документах. Учит эксперт с 15+ годами в Федеральном казначействе; после курса остаются материалы и чек-листы.</p></details><details><summary>Кому подходит курс?</summary><p>Бухгалтерам и финансистам подрядчиков, специалистам по госзакупкам и ответственным за лицевой счёт и «Электронный бюджет» — как для старта с нуля, так и для разбора проблем на действующем контракте.</p></details><details><summary>Что нужно для обучения?</summary><p>Достаточно доступа к вашим контрактам и рабочему месту с электронной подписью. Программу и примеры адаптируем под ваши задачи.</p></details></div></div></section>

<section class="v2-section" aria-label="Актуальность страницы">
  <div class="v2-container">
    <p class="v2-freshness">Страница актуальна на <time datetime="2026-07-22">22 июля 2026</time> · проверяем цены, сроки и нормативную базу при каждом обновлении. Автор — <a href="/komanda/mihailov-yaroslav/">Ярослав Михайлов</a>, главный эксперт КазнаЭксперт.</p>
  </div>
</section><section class="v2-section v2-screen" id="zayavka">
  <div class="v2-container">
    <div class="v2-section-head">
      <div class="v2-section-eyebrow">Заявка</div>
      <h2 class="v2-section-title">Записаться на <em>обучение</em></h2>
      <p class="v2-section-lede">Оставьте контакты — эксперт перезвонит за 15 минут, ответит на вопросы и подберёт удобный график обучения.</p>
    </div>
    <div style="max-width:520px;margin:0 auto">
      <form class="railform" id="leadFormBottom" novalidate data-endpoint="/php/lead.php" data-source="obuchenie-cta">
        <input class="fld" name="name" placeholder="Имя" required minlength="2" maxlength="80" autocomplete="name">
        <input class="fld" name="phone" type="tel" placeholder="+7 (___) ___-__-__" required autocomplete="tel" inputmode="tel">
        <input class="hp" name="company_extra" tabindex="-1" autocomplete="off" aria-hidden="true">
        <label class="policy"><input type="checkbox" name="consent" required><span>Согласен с <a href="/privacy/" target="_blank" rel="noopener">политикой обработки данных</a>. Не передаём третьим лицам.</span></label>
        <button class="submit" type="submit">Получить расчёт →</button>
        <div class="formmsg" id="formMsgBottom" hidden></div>
        <div class="railform__trust"><span><b>15+ лет</b> в Казначействе · <b>ИП с 2021 года</b></span><span>Ответ за <b>15 минут</b> · NDA по запросу</span></div>
        <div class="success" id="leadSuccessBottom" role="status" aria-live="polite">
          <div class="success__ic"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg></div>
          <h3>Заявка принята</h3>
          <p>Эксперт перезвонит <b>в течение 15 минут</b> (9:00–21:00 МСК).</p>
        </div>
      </form>
    </div>
  </div>
</section>
</div>

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

<script>
/* обработчик нижней лид-формы (#leadFormBottom); верхнюю #leadForm обслуживает общий скрипт страницы */
(function(){
  var f=document.getElementById('leadFormBottom'); if(!f) return;
  var msg=document.getElementById('formMsgBottom'), ok=document.getElementById('leadSuccessBottom');
  function show(t){ if(msg){msg.hidden=false;msg.textContent=t;} }
  f.addEventListener('submit',function(e){
    e.preventDefault();
    if(f.company_extra && f.company_extra.value) return;
    var name=(f.name.value||'').trim(), phone=(f.phone.value||'').trim();
    if(name.length<2){show('Введите имя');return;}
    if(!/\d[\s\d().-]*\d{3}/.test(phone)||phone.replace(/\D/g,'').length<10){show('Проверьте телефон');return;}
    if(!f.consent.checked){show('Подтвердите согласие');return;}
    var btn=f.querySelector('.submit'), orig=btn.textContent; btn.disabled=true; btn.textContent='Отправляем…';
    fetch(f.dataset.endpoint,{method:'POST',headers:{'Content-Type':'application/json'},body:JSON.stringify({name:name,phone:phone,consent_pd:true,consent_pd_text:'Согласие на обработку ПДн (источник: '+f.dataset.source+')',consent_at:new Date().toISOString(),source:f.dataset.source,page_url:location.href})})
      .then(function(r){ if(!r.ok) throw 0; return r; })
      .then(function(){
        [].forEach.call(f.children,function(el){ if(el!==ok) el.style.display='none'; });
        if(ok) ok.style.display='block';
        try{ if(typeof ym==='function') ym(94305898,'reachGoal','lead',{source:f.dataset.source}); }catch(_){}
      })
      .catch(function(){ btn.disabled=false; btn.textContent=orig; show('Не удалось отправить. Попробуйте ещё раз.'); });
  });
})();
</script>



<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "Service", "datePublished": "2026-07-15", "dateModified": "2026-07-22", "name": "Обучение казначейскому сопровождению", "serviceType": "Индивидуальное обучение", "description": "Индивидуальное обучение казначейскому сопровождению госконтрактов: 9 академических часов с экспертом Федерального казначейства на ваших контрактах. Цена 120 000 ₽.", "areaServed": "RU", "provider": {"@type": "Organization", "name": "КазнаЭксперт", "url": "https://kaznaexpert.ru/"}, "offers": {"@type": "Offer", "name": "Обучение · 9 академических часов", "price": "120000", "priceCurrency": "RUB", "availability": "https://schema.org/InStock", "url": "https://kaznaexpert.ru/uslugi/obuchenie-kaznacheyskomu-soprovozhdeniyu/"}}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [{"@type": "Question", "name": "Сколько длится обучение казначейскому сопровождению?", "acceptedAnswer": {"@type": "Answer", "text": "Курс рассчитан на 9 академических часов. График гибкий: занятия можно распределить на несколько сессий и подстроить под вашу загрузку."}}, {"@type": "Question", "name": "В каком формате проходит обучение?", "acceptedAnswer": {"@type": "Answer", "text": "Индивидуально и онлайн, на ваших реальных контрактах и документах. Учит эксперт с 15+ годами в Федеральном казначействе; после курса остаются материалы и чек-листы."}}, {"@type": "Question", "name": "Кому подходит курс?", "acceptedAnswer": {"@type": "Answer", "text": "Бухгалтерам и финансистам подрядчиков, специалистам по госзакупкам и ответственным за лицевой счёт и «Электронный бюджет» — как для старта с нуля, так и для разбора проблем на действующем контракте."}}, {"@type": "Question", "name": "Что нужно для обучения?", "acceptedAnswer": {"@type": "Answer", "text": "Достаточно доступа к вашим контрактам и рабочему месту с электронной подписью. Программу и примеры адаптируем под ваши задачи."}}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "Главная", "item": "https://kaznaexpert.ru/"}, {"@type": "ListItem", "position": 2, "name": "Услуги", "item": "https://kaznaexpert.ru/uslugi/kaznacheyskoe-soprovozhdenie/"}, {"@type": "ListItem", "position": 3, "name": "Обучение казначейскому сопровождению"}]}
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
</body>
</html>
