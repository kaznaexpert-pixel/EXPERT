<?php /* Cache-Control задаёт .htaccess — единая точка правды для кэш-заголовков */ ?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Раздельный учёт НДС при казначейском сопровождении: вычет, ст. 170 НК</title>
<meta name="description" content="Вычет НДС по целевым средствам: по контракту — полный, по субсидии — ограничение п. 2.1 ст. 170 НК; раздельный учёт по п. 4 ст. 170, восстановление, типовые ошибки.">
<meta name="author" content="Ярослав Михайлов">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1">
<meta name="theme-color" content="#F4F1EB" media="(prefers-color-scheme: light)">
<meta name="theme-color" content="#141310" media="(prefers-color-scheme: dark)">
<!-- PROD: canonical и og:url ОБЯЗАТЕЛЬНО менять под URL каждой статьи -->
<link rel="canonical" href="https://kaznaexpert.ru/baza-znaniy/razdelnyy-uchet-nds-pri-ks/">
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
<script>window.YM_PARAMS = {page_type:"cluster", cluster:"uchet"};</script>

<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "Article", "headline": "Раздельный учёт НДС при казначейском сопровождении: когда вычет по целевым средствам ограничен и как его вести", "description": "Вычет НДС по целевым средствам: по контракту — полный, по субсидии — ограничение п. 2.1 ст. 170 НК; раздельный учёт по п. 4 ст. 170, восстановление, типовые ошибки.", "inLanguage": "ru-RU", "datePublished": "2026-09-09", "dateModified": "2026-09-09", "author": {"@type": "Person", "name": "Ярослав Михайлов", "jobTitle": "Главный эксперт по казначейскому сопровождению", "url": "https://kaznaexpert.ru/komanda/mihailov-yaroslav/", "@id": "https://kaznaexpert.ru/komanda/mihailov-yaroslav/#person", "image": "https://kaznaexpert.ru/img/team/mihailov-photo.jpg"}, "publisher": {"@type": "Organization", "name": "КазнаЭксперт", "url": "https://kaznaexpert.ru", "logo": {"@type": "ImageObject", "url": "https://kaznaexpert.ru/img/logogold.png"}, "@id": "https://kaznaexpert.ru/#organization"}, "image": ["https://kaznaexpert.ru/img/og/baza-znaniy__razdelnyy-uchet-nds-pri-ks-16x9.jpg", "https://kaznaexpert.ru/img/og/baza-znaniy__razdelnyy-uchet-nds-pri-ks-4x3.webp", "https://kaznaexpert.ru/img/og/baza-znaniy__razdelnyy-uchet-nds-pri-ks-1x1.webp"], "mainEntityOfPage": {"@type": "WebPage", "@id": "https://kaznaexpert.ru/baza-znaniy/razdelnyy-uchet-nds-pri-ks/"}, "articleSection": "Операции и отчётность", "citation": ["Налоговый кодекс РФ, часть вторая (ред. от 29.04.2026), ст. 170: п. 2.1, пп. 6 п. 3, п. 4, 4.1; ст. 149, 171, 172, 264", "Налоговый кодекс РФ, ст. 164 — ставка 22 % с 01.01.2026 (Федеральный закон от 28.11.2025 № 425-ФЗ) — consultant.ru", "Бюджетный кодекс РФ, ст. 242.23 (п. 4.2 — раздельный учёт участников казначейского сопровождения) — consultant.ru", "Приказ Минфина России от 10.12.2021 № 210н «Порядок ведения раздельного учёта результатов финансово-хозяйственной деятельности…» — consultant.ru"]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "Главная", "item": "https://kaznaexpert.ru/"}, {"@type": "ListItem", "position": 2, "name": "База знаний", "item": "https://kaznaexpert.ru/baza-znaniy/"}, {"@type": "ListItem", "position": 3, "name": "Раздельный учёт НДС", "item": "https://kaznaexpert.ru/baza-znaniy/razdelnyy-uchet-nds-pri-ks/"}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [{"@type": "Question", "name": "Нужен ли раздельный учёт НДС при казначейском сопровождении государственного контракта?", "acceptedAnswer": {"@type": "Answer", "text": "Нет, если целевые средства — оплата контракта: это выручка, входной НДС принимается к вычету на общих основаниях по статьям 171–172 НК. Раздельный учёт по статье 170 нужен получателям субсидий и организациям с освобождёнными от НДС операциями."}}, {"@type": "Question", "name": "Принимается ли к вычету НДС по покупкам за счёт субсидии?", "acceptedAnswer": {"@type": "Answer", "text": "Нет. По пункту 2.1 статьи 170 НК НДС по товарам, работам, услугам, основным средствам и имущественным правам, купленным полностью за счёт субсидии или бюджетной инвестиции, к вычету не принимается и учитывается в прочих расходах. При частичном финансировании вычет не применяется в доле субсидии. Исключение — субсидия, документы о которой предусматривают финансирование без НДС."}}, {"@type": "Question", "name": "Как считать долю НДС, не принимаемую к вычету, при частичной субсидии?", "acceptedAnswer": {"@type": "Answer", "text": "Как отношение суммы субсидии, израсходованной на покупку, к общей стоимости покупки с учётом предъявленного НДС (абзац 3 пункта 2.1 статьи 170 НК). Расчёт делается по каждой покупке."}}, {"@type": "Question", "name": "Когда нужно восстанавливать НДС при казначейском сопровождении?", "acceptedAnswer": {"@type": "Answer", "text": "При получении субсидии или бюджетной инвестиции на возмещение ранее понесённых затрат на покупки, по которым вычет уже применён, — в квартале получения субсидии (подпункт 6 пункта 3 статьи 170 НК); при частичном возмещении — в соответствующей доле."}}, {"@type": "Question", "name": "Чем раздельный учёт по Порядку № 210н отличается от раздельного учёта НДС?", "acceptedAnswer": {"@type": "Answer", "text": "Первый — учёт ресурсов и затрат по каждому контракту для Казначейства и заказчика (пункт 4.2 статьи 242.23 БК, постановление № 47 для ГОЗ). Второй — учёт сумм входного НДС по источникам и видам операций для налоговой инспекции (статья 170 НК). Один не заменяет другой."}}, {"@type": "Question", "name": "Что будет, если не вести раздельный учёт НДС при облагаемых и освобождённых операциях?", "acceptedAnswer": {"@type": "Answer", "text": "Входной НДС по покупкам не принимается к вычету и не включается в расходы по налогу на прибыль (абзац 6 пункта 4 статьи 170 НК). Исключение — кварталы, где доля расходов на освобождённые операции не превышает 5 %."}}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "DefinedTermSet", "name": "Термины", "inLanguage": "ru-RU", "hasDefinedTerm": [{"@type": "DefinedTerm", "name": "Целевые средства", "description": "В Бюджетном кодексе — средства, подлежащие казначейскому сопровождению: оплата контрактов, субсидии, бюджетные инвестиции; в Налоговом кодексе режим НДС у них разный."}, {"@type": "DefinedTerm", "name": "Субсидия (для целей ст. 170 НК)", "description": "Средства из бюджета на приобретение товаров, работ, услуг или на возмещение затрат; входной НДС по покупкам за их счёт к вычету не принимается (п. 2.1), ранее принятый — восстанавливается (пп. 6 п. 3)."}, {"@type": "DefinedTerm", "name": "Доля субсидии", "description": "Отношение суммы субсидии, израсходованной на покупку, к общей стоимости покупки с учётом НДС; в этой доле вычет не применяется."}, {"@type": "DefinedTerm", "name": "Пропорция по п. 4.1 ст. 170", "description": "Отношение стоимости отгрузки по облагаемым (освобождённым) операциям к общей стоимости отгрузки за квартал; применяется к НДС по покупкам общего назначения."}, {"@type": "DefinedTerm", "name": "Правило 5 %", "description": "Право не распределять входной НДС в квартале, когда доля расходов на освобождённые операции не превышает 5 % общих расходов (абз. 7 п. 4 ст. 170)."}]}
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
<meta property="og:title" content="Раздельный учёт НДС при казначейском сопровождении">
<meta property="og:description" content="Контракт или субсидия: где вычет НДС полный, где ограничен пунктом 2.1 статьи 170 НК, как вести раздельный учёт и не потерять вычет.">
<meta property="og:url" content="https://kaznaexpert.ru/baza-znaniy/razdelnyy-uchet-nds-pri-ks/">
<meta property="og:image" content="https://kaznaexpert.ru/img/og/baza-znaniy__razdelnyy-uchet-nds-pri-ks-16x9.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="675">
<meta property="og:image:alt" content="Раздельный учёт НДС при казначейском сопровождении — КазнаЭксперт">
<meta property="article:published_time" content="2026-09-09T10:00:00+03:00">
<meta property="article:modified_time" content="2026-09-09T10:00:00+03:00">
<meta property="article:author" content="https://kaznaexpert.ru/komanda/mihailov-yaroslav/">
<meta property="article:section" content="База знаний">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Раздельный учёт НДС при казначейском сопровождении">
<meta name="twitter:description" content="Контракт или субсидия: где вычет НДС полный, где ограничен пунктом 2.1 статьи 170 НК, как вести раздельный учёт и не потерять вычет.">
<meta name="twitter:image" content="https://kaznaexpert.ru/img/og/baza-znaniy__razdelnyy-uchet-nds-pri-ks-16x9.jpg">


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
  <nav class="crumbs" aria-label="Хлебные крошки"><a href="/">Главная</a> › <a href="/baza-znaniy/">База знаний</a> › Раздельный учёт НДС</nav>

  <aside class="toc" aria-label="Содержание">
    <div class="toc__label">Содержание</div>
    <ul class="toc__list" id="tocList">
      <li><a href="#sut">Коротко: контракт или субсидия</a></li>
      <li><a href="#kontrakt">НДС по контракту: вычет полный</a></li>
      <li><a href="#subsidiya">Субсидия: п. 2.1 ст. 170</a></li>
      <li><a href="#dolya">Частичное финансирование: расчёт доли</a></li>
      <li><a href="#vosstanovlenie">Восстановление НДС</a></li>
      <li><a href="#p4">Облагаемые и необлагаемые операции</a></li>
      <li><a href="#dva-ucheta">Два раздельных учёта: не путать</a></li>
      <li><a href="#kak-vesti">Как организовать: регистры и политика</a></li>
      <li><a href="#oshibki">Ошибки</a></li>
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
    <h1>Раздельный учёт НДС при казначейском сопровождении: когда вычет по целевым средствам ограничен и как его вести</h1>
    <div class="byline"><span class="av">ЯМ</span><span>Автор: <a href="/komanda/mihailov-yaroslav/">Ярослав Михайлов</a>, главный эксперт</span><span class="dot">·</span><span>15+ лет в Казначействе</span><span class="dot">·</span><span>11 мин чтения</span><span class="dot">·</span><span>Обновлено 9 сентября 2026 · первая публикация</span></div>
    </div>

    <div class="share">
      <span class="share__label">Поделиться:</span>
      <a href="https://t.me/share/url?url=https%3A%2F%2Fkaznaexpert.ru%2Fbaza-znaniy%2Frazdelnyy-uchet-nds-pri-ks%2F&amp;text=%D0%A0%D0%B0%D0%B7%D0%B4%D0%B5%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9%20%D1%83%D1%87%D1%91%D1%82%20%D0%9D%D0%94%D0%A1%20%D0%BF%D1%80%D0%B8%20%D0%BA%D0%B0%D0%B7%D0%BD%D0%B0%D1%87%D0%B5%D0%B9%D1%81%D0%BA%D0%BE%D0%BC%20%D1%81%D0%BE%D0%BF%D1%80%D0%BE%D0%B2%D0%BE%D0%B6%D0%B4%D0%B5%D0%BD%D0%B8%D0%B8" target="_blank" rel="noopener"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.56 8.25l-1.86 8.76c-.14.62-.5.77-1.02.48l-2.82-2.08-1.36 1.31c-.15.15-.28.28-.57.28l.2-2.89 5.27-4.76c.23-.2-.05-.32-.35-.12l-6.51 4.1-2.8-.88c-.61-.19-.62-.61.13-.9l10.95-4.22c.5-.18.95.12.79.85z"/></svg>Telegram</a>
      <button type="button" id="copyLink"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.07 0l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.07 0l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg><span>Копировать ссылку</span></button>
      <button type="button" id="printBtn"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9V2h12v7M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2M6 14h12v8H6z"/></svg>Скачать PDF</button>
    </div>

    <details class="mtoc"><summary>Содержание статьи</summary>
      <ol>
        <li><a href="#sut">Коротко: контракт или субсидия</a></li><li><a href="#kontrakt">НДС по контракту: вычет полный</a></li><li><a href="#subsidiya">Субсидия: п. 2.1 ст. 170</a></li><li><a href="#dolya">Частичное финансирование: расчёт доли</a></li><li><a href="#vosstanovlenie">Восстановление НДС</a></li><li><a href="#p4">Облагаемые и необлагаемые операции</a></li><li><a href="#dva-ucheta">Два раздельных учёта: не путать</a></li><li><a href="#kak-vesti">Как организовать: регистры и политика</a></li><li><a href="#oshibki">Ошибки</a></li><li><a href="#keys">Пример из практики</a></li><li><a href="#glossary">Глоссарий</a></li><li><a href="#faq">Частые вопросы</a></li>
      </ol>
    </details>

    <div class="tldr">Раздельный учёт НДС при казначейском сопровождении нужен не всем. Если целевые средства — оплата государственного контракта, входной НДС принимается к вычету на общих основаниях. Ограничения — у получателей субсидий: по пункту 2.1 статьи 170 НК НДС по покупкам за счёт субсидии к вычету не принимается (полностью или в доле), а при субсидии без привязки к покупкам обязателен раздельный учёт затрат по источникам. При облагаемых и освобождённых операциях одновременно раздельный учёт входного НДС обязателен по пункту 4 статьи 170 — иначе вычет теряется.</div>

    <section class="keyfacts grain" aria-label="Ключевые факты">
      <h2>Коротко о главном</h2>
      <div class="keyfacts__grid">
        <div class="kf"><div class="kf__n">Контракт</div><div class="kf__t"><b>Вычет полный</b> — оплата контракта не субсидия, п. 2.1 ст. 170 не применяется</div></div>
        <div class="kf"><div class="kf__n">п. 2.1 ст. 170</div><div class="kf__t"><b>Субсидия</b> — НДС к вычету не принимается (полностью или в доле)</div></div>
        <div class="kf"><div class="kf__n">пп. 6 п. 3</div><div class="kf__t"><b>Восстановление</b> — при субсидии на возмещение ранее понесённых затрат</div></div>
        <div class="kf"><div class="kf__n">п. 4 ст. 170</div><div class="kf__t"><b>Раздельный учёт</b> — при облагаемых и освобождённых операциях</div></div>
        <div class="kf"><div class="kf__n">5 %</div><div class="kf__t"><b>Правило</b> — можно не распределять, если доля расходов по освобождённым операциям не выше 5 %</div></div>
        <div class="kf"><div class="kf__n">22 %</div><div class="kf__t"><b>Ставка</b> НДС с 01.01.2026 (закон № 425-ФЗ)</div></div>
      </div>
    </section>
    <!-- svc-cta:top -->
    <div class="svc-cta svc-cta--top" role="complementary" aria-label="Услуга КазнаЭксперт"><div class="svc-cta__body"><span class="svc-cta__eyebrow">До проверки</span><p class="svc-cta__title">Восстановим раздельный учёт по контракту</p><p class="svc-cta__text">От выписок казначейства и первички — до регистров по каждому контракту и отчёта об исполнении, который примет заказчик и военное представительство.</p><span class="svc-cta__price">99 000 ₽</span></div><a class="svc-cta__btn" href="/uslugi/vosstanovlenie-razdelnogo-ucheta/" onclick="try{ym(94305898,'reachGoal','svccta_click',{svc:'vosstanovlenie-razdelnogo-ucheta',pos:'top'})}catch(e){}">Восстановить учёт →</a></div>
    <!-- /svc-cta:top -->


        <h2 id="sut">Коротко: раздельный учёт НДС зависит от того, что за целевые средства</h2>
    <div class="answer reveal">
      <p class="lead-p">При казначейском сопровождении режим НДС определяется природой целевых средств, а не самим сопровождением. Оплата по государственному контракту — это выручка исполнителя: НДС начисляется с реализации и с аванса, входной НДС по покупкам принимается к вычету на общих основаниях, и раздельный учёт по статье 170 НК не требуется. Субсидии и бюджетные инвестиции — не выручка: по пункту 2.1 статьи 170 входной НДС по покупкам за их счёт к вычету не принимается, а при частичном финансировании или субсидии без привязки к покупкам нужен раздельный учёт. Третий случай — освобождённые от НДС операции: тогда действует пункт 4 статьи 170 независимо от источника денег.<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a></p>
    </div>
    <h3 id="sut-terminy">Почему путают: «целевые» в двух кодексах</h3>
    <p>Путаница возникает из-за слова «целевые»: в Бюджетном кодексе целевыми называют и оплату контрактов, и субсидии, а в Налоговом кодексе они живут в разных режимах. Ниже — каждый режим отдельно; общая картина налогов при сопровождении, включая НДС с аванса на лицевом счёте, — в статье <a href="/baza-znaniy/nalogi-pri-kaznacheyskom-soprovozhdenii/">налоги при казначейском сопровождении</a>.</p>

    <h2 id="kontrakt">НДС по государственному контракту: вычет в полном объёме</h2>
    <div class="answer reveal">
      <p>Средства, поступившие на лицевой счёт 71 в оплату государственного контракта, — оплата товаров, работ и услуг, а не субсидия, поэтому исполнитель начисляет НДС по ставке 22 % с реализации и с аванса, а входной НДС по материалам, субподряду и услугам принимает к вычету по статьям 171–172 НК при наличии счёта-фактуры и принятии к учёту. Казначейское сопровождение не меняет момент вычета и не требует раздельного учёта НДС между контрактами: раздельный учёт результатов финансово-хозяйственной деятельности по постановлению № 47 и Порядку № 210н — это учёт затрат, а не налога.<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a></p>
    </div>
    <h3 id="kontrakt-avans">Аванс на лицевом счёте</h3>
    <p>Единственная особенность — аванс: он приходит на лицевой счёт, тратить его можно только через санкционирование, но НДС с аванса начисляется в общем порядке в квартале получения. Как это считать и когда принять авансовый НДС к вычету — в разделе <a href="/baza-znaniy/nalogi-pri-kaznacheyskom-soprovozhdenii/#nds">НДС с аванса на лицевом счёте</a>. Уплата самого налога с лицевого счёта 71 возможна, если это направление есть в сведениях об операциях.</p>

    <h2 id="subsidiya">Субсидия и бюджетные инвестиции: пункт 2.1 статьи 170 НК</h2>
    <div class="answer reveal">
      <p>Если товары, работы, услуги, основные средства или имущественные права куплены полностью за счёт субсидии или бюджетной инвестиции из бюджета, предъявленный НДС к вычету не принимается — он учитывается единовременно в прочих расходах по статье 264 НК, а не в стоимости покупки. При покупке частично за счёт субсидии вычет не принимается в доле субсидии. Пункт 2.1 не применяется, если документы о предоставлении субсидии предусматривают финансирование затрат без включения в них НДС: тогда налог принимается к вычету полностью.<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a></p>
    </div>
    <h3 id="subsidiya-tablica">Шесть случаев: вычет, раздельный учёт, норма</h3>
    <table>
      <caption>Вычет НДС при казначейском сопровождении: зависимость от источника целевых средств</caption>
      <tr><th>Источник целевых средств</th><th>Вычет входного НДС</th><th>Раздельный учёт по ст. 170</th><th>Норма</th></tr>
      <tr><td>Оплата государственного контракта, договора с исполнителем</td><td>Полный, на общих основаниях</td><td>Не требуется</td><td>Ст. 171, 172 НК</td></tr>
      <tr><td>Субсидия на конкретные покупки, финансирование 100 %</td><td>Не принимается; в прочие расходы</td><td>Не требуется — покупки определены документами</td><td>Абз. 1, 4 п. 2.1 ст. 170</td></tr>
      <tr><td>Субсидия на конкретные покупки, финансирование частичное</td><td>Не принимается в доле субсидии</td><td>Расчёт доли по каждой покупке</td><td>Абз. 2, 3 п. 2.1 ст. 170</td></tr>
      <tr><td>Субсидия без указания конкретных покупок</td><td>Не принимается по затратам за счёт субсидии</td><td>Обязателен: затраты за счёт субсидии отдельно от затрат за счёт иных источников</td><td>Абз. 6 п. 2.1 ст. 170</td></tr>
      <tr><td>Субсидия, документы о которой предусматривают финансирование без НДС</td><td>Полный</td><td>Не требуется</td><td>Абз. 8 п. 2.1 ст. 170</td></tr>
      <tr><td>Субсидия на возмещение ранее понесённых затрат</td><td>Вычет уже применён — налог восстанавливается</td><td>Расчёт восстанавливаемой суммы</td><td>Пп. 6 п. 3 ст. 170</td></tr>
    </table>
    <h3 id="subsidiya-dva">Два учёта у получателя субсидии</h3>
    <p>Для получателя субсидии на казначейском сопровождении это означает, что «раздельный учёт», который требует соглашение о субсидии и Порядок № 210н, и раздельный учёт по абзацу 6 пункта 2.1 статьи 170 — два разных учёта с разными целями, и вести нужно оба. Режим сопровождения субсидий целиком — в статье <a href="/baza-znaniy/kaznacheyskoe-soprovozhdenie-subsidiy/">казначейское сопровождение субсидий</a>.</p>

    <h2 id="dolya">Частичное финансирование за счёт субсидии: как считать долю</h2>
    <div class="answer reveal">
      <p>Доля, в которой НДС не принимается к вычету, равна отношению суммы субсидии или бюджетной инвестиции, израсходованной на покупку, к общей стоимости покупки с учётом предъявленного НДС (абзац 3 пункта 2.1 статьи 170 НК). Расчёт делается по каждой покупке, а не по итогам квартала; сумма невычитаемого налога относится в прочие расходы.</p>
    </div>
    <h3 id="dolya-primer">Пример расчёта доли</h3>
    <p>Пример расчёта: оборудование стоит 12 200 000 ₽ с НДС 22 % (налог 2 200 000 ₽), из них 6 100 000 ₽ оплачены за счёт субсидии. Доля субсидии — 6 100 000 / 12 200 000 = 0,5; к вычету не принимается 1 100 000 ₽, они учитываются в прочих расходах, оставшиеся 1 100 000 ₽ принимаются к вычету. Если субсидия предоставлена без НДС (в соглашении финансирование «без учёта налога»), вычет — 2 200 000 ₽ полностью.</p>

    <h2 id="vosstanovlenie">Восстановление НДС при получении субсидии на возмещение затрат</h2>
    <div class="answer reveal">
      <p>Если вычет уже применён, а потом из бюджета получена субсидия на возмещение ранее понесённых затрат на эти покупки или на возмещение налога при ввозе, принятый к вычету НДС восстанавливается по подпункту 6 пункта 3 статьи 170 НК. Восстановление делается в периоде получения субсидии; при частичном возмещении — в доле, рассчитанной так же, как для вычета; восстановленный налог учитывается в прочих расходах.<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a></p>
    </div>
    <h3 id="vosstanovlenie-signal">Как не пропустить момент восстановления</h3>
    <p>Практический сигнал: любой аванс или платёж по соглашению о субсидии, который приходит на лицевой счёт с назначением «возмещение затрат», требует проверки книги покупок за периоды, в которых эти затраты были понесены. Возврат субсидии при недостижении результата не отменяет восстановления автоматически — как это отражать, разобрано в статье <a href="/baza-znaniy/vozvrat-subsidii-pri-nedostizhenii-rezultatov/">возврат субсидии при недостижении результатов</a>.</p>

    <h2 id="p4">Облагаемые и освобождённые операции: пункт 4 статьи 170</h2>
    <div class="answer reveal">
      <p>Если у исполнителя одновременно есть облагаемые НДС операции и освобождённые (например, научно-исследовательские и опытно-конструкторские работы за счёт бюджета по подпункту 16 пункта 3 статьи 149 НК), входной НДС по покупкам для облагаемых операций принимается к вычету, для освобождённых — учитывается в стоимости, а по покупкам общего назначения — распределяется в пропорции стоимости отгрузки по пункту 4.1. Раздельный учёт таких сумм обязателен: при его отсутствии НДС не принимается к вычету и в расходы по налогу на прибыль не включается. Можно не распределять налог в кварталах, где доля расходов на освобождённые операции не превышает 5 %.<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a></p>
    </div>
    <h3 id="p4-komu">Кому это актуально</h3>
    <p>Для контрактов ГОЗ и обычных государственных контрактов на поставку это правило срабатывает редко — сама поставка облагаемая. Но у организаций, совмещающих серийные поставки с бюджетными НИОКР, пункт 4 статьи 170 работает постоянно, и пропорцию считают по каждому кварталу.</p>

    <h2 id="dva-ucheta">Два раздельных учёта: результатов деятельности и НДС</h2>
    <div class="answer reveal">
      <p>Раздельный учёт результатов финансово-хозяйственной деятельности при казначейском сопровождении (пункт 4.2 статьи 242.23 БК, Порядок № 210н, для ГОЗ — постановление № 47) — это учёт ресурсов и затрат по каждому контракту для проверки цены и целевого использования. Раздельный учёт НДС по статье 170 НК — учёт сумм налога по источникам и видам операций для расчёта вычета. Первый ведут все участники сопровождения, второй — только получатели субсидий и организации с освобождёнными операциями; один другой не заменяет.</p>
    </div>
    <h3 id="dva-ucheta-tablica">Сравнение по пяти признакам</h3>
    <table>
      <caption>Раздельный учёт по контракту и раздельный учёт НДС: сравнение</caption>
      <tr><th>Признак</th><th>Раздельный учёт по контракту (ПП № 47, 210н)</th><th>Раздельный учёт НДС (ст. 170 НК)</th></tr>
      <tr><td>Кто обязан</td><td>Все участники казначейского сопровождения, исполнители ГОЗ</td><td>Получатели субсидий (абз. 6 п. 2.1), организации с освобождёнными операциями (п. 4)</td></tr>
      <tr><td>Объект</td><td>Ресурсы и затраты по каждому контракту, распределение накладных</td><td>Суммы входного НДС по источникам финансирования и видам операций</td></tr>
      <tr><td>Кто проверяет</td><td>Казначейство, заказчик, ВП, ФАС</td><td>Налоговая инспекция</td></tr>
      <tr><td>Последствие отсутствия</td><td>Ст. 15.37.1 КоАП, ч. 11 ст. 7.30.3 КоАП, снятие затрат из цены</td><td>Потеря вычета, налог не включается в расходы (абз. 6 п. 4 ст. 170)</td></tr>
      <tr><td>Где закрепить</td><td>Учётная политика для бухгалтерского учёта, раздел о раздельном учёте</td><td>Учётная политика для целей налогообложения</td></tr>
    </table>
    <p>Как выстроить первый — в статьях <a href="/baza-znaniy/razdelnyy-uchet-po-goskontraktu/">раздельный учёт по госконтракту</a> и <a href="/baza-znaniy/uchetnaya-politika-razdelnyy-uchet-goz/">учётная политика по раздельному учёту ГОЗ</a>.</p>

    <h2 id="kak-vesti">Как организовать раздельный учёт НДС: регистры и учётная политика</h2>
    <div class="answer reveal">
      <p>Достаточно трёх элементов: раздел в налоговой учётной политике с методикой (перечень источников, порядок расчёта доли по пункту 2.1 и пропорции по пункту 4.1, применение правила 5 %), аналитика на счёте 19 по источникам финансирования и видам операций (субсчета «за счёт субсидии», «за счёт иных источников», «облагаемые», «освобождённые», «общие») и ежеквартальный регистр-расчёт с суммами к вычету, к учёту в стоимости, в прочие расходы и к восстановлению.</p>
    </div>
    <h3 id="kak-vesti-shagi">Пять шагов настройки</h3>
    <div class="v2-process-step"><b>Шаг 1.</b> Определить по каждому поступлению на лицевой счёт его природу: оплата контракта, субсидия с указанием покупок, субсидия без указания, возмещение затрат. Это фиксируется в аналитике счёта 51/55 и в сведениях об операциях.</div>
    <div class="v2-process-step"><b>Шаг 2.</b> Открыть субсчета к счёту 19 по источникам и видам операций; в 1С — через дополнительные субконто или отдельные субсчета, при ведении раздельного учёта по контрактам — в той же аналитике, что и затраты.</div>
    <div class="v2-process-step"><b>Шаг 3.</b> По покупкам за счёт субсидии — рассчитать долю на дату принятия к учёту, невычитаемую часть списать в прочие расходы; по общим покупкам при освобождённых операциях — пропорцию по итогам квартала.</div>
    <div class="v2-process-step"><b>Шаг 4.</b> При получении субсидии на возмещение затрат — выборка по книге покупок и восстановление в декларации за квартал получения.</div>
    <div class="v2-process-step"><b>Шаг 5.</b> Регистр-расчёт хранить вместе с соглашением о субсидии и сведениями об операциях: при камеральной проверке декларации именно его запросят первым.</div>

    <h2 id="oshibki">Ошибки в учёте НДС при казначейском сопровождении</h2>
    <table>
      <caption>Типовые ошибки и последствия</caption>
      <tr><th>Ошибка</th><th>Последствие</th><th>Как правильно</th></tr>
      <tr><td>Вычет по покупкам, полностью оплаченным субсидией</td><td>Доначисление НДС, пени, штраф по ст. 122 НК</td><td>НДС — в прочие расходы (п. 2.1 ст. 170)</td></tr>
      <tr><td>Отказ от вычета по покупкам за счёт оплаты контракта «на всякий случай»</td><td>Переплата налога; налог не учитывается и в расходах</td><td>Оплата контракта — не субсидия, вычет полный</td></tr>
      <tr><td>Субсидия без указания покупок, раздельный учёт затрат не ведётся</td><td>Спор о вычете по всем покупкам периода</td><td>Раздельный учёт затрат по источникам (абз. 6 п. 2.1)</td></tr>
      <tr><td>Не восстановлен НДС при субсидии на возмещение затрат</td><td>Доначисление за квартал получения субсидии</td><td>Пп. 6 п. 3 ст. 170 — восстановление в периоде получения</td></tr>
      <tr><td>Раздельный учёт по Порядку № 210н принят за раздельный учёт НДС</td><td>Нет аналитики счёта 19 — потеря вычета при освобождённых операциях</td><td>Два учёта, два раздела учётной политики</td></tr>
      <tr><td>Доля субсидии рассчитана по итогам квартала, а не по покупке</td><td>Искажение вычета</td><td>Расчёт по каждой покупке (абз. 3 п. 2.1)</td></tr>
    </table>

    <h2 id="keys">Пример из практики: контракт и субсидия у одного исполнителя</h2>
    <h3 id="keys-situaciya">Ситуация</h3>
    <p>Организация одновременно исполняла государственный контракт на поставку оборудования на казначейском сопровождении и получала субсидию на модернизацию производства — обе суммы приходили на лицевые счета в Казначействе. Бухгалтерия, увидев слово «целевые средства» в обоих случаях, применила пункт 2.1 статьи 170 ко всем покупкам квартала и не приняла к вычету 4,3 млн ₽ по материалам для контракта.</p>
    <h3 id="keys-reshenie">Как разделили</h3>
    <p>После разбора учёт разделили: по контракту вычет восстановили уточнённой декларацией, по субсидии, выданной без привязки к конкретным покупкам, организовали раздельный учёт затрат по источникам на счетах 19 и 08 и рассчитали невычитаемую долю только по оборудованию, оплаченному субсидией. В налоговой учётной политике появился отдельный раздел с методикой; регистр-расчёт по кварталу теперь формируется вместе со сведениями об операциях по каждому лицевому счёту.</p>

    <div class="takeaways">
      <h2>Что важно запомнить</h2>
      <ol>
        <li>Режим НДС определяет природа целевых средств: оплата контракта — выручка с полным вычетом; субсидия и бюджетная инвестиция — ограничения пункта 2.1 статьи 170 НК.</li>
        <li>По покупкам полностью за счёт субсидии вычета нет, налог — в прочие расходы; при частичном финансировании — не принимается доля субсидии, расчёт по каждой покупке.</li>
        <li>Субсидия без указания конкретных покупок обязывает вести раздельный учёт затрат за счёт субсидии и за счёт других источников (абз. 6 п. 2.1).</li>
        <li>Субсидия на возмещение ранее понесённых затрат — восстановление принятого к вычету НДС в квартале получения (пп. 6 п. 3 ст. 170).</li>
        <li>Облагаемые и освобождённые операции одновременно — раздельный учёт по п. 4 ст. 170, пропорция по п. 4.1, правило 5 %; без учёта вычет теряется.</li>
        <li>Раздельный учёт по контракту (ПП № 47, 210н) и раздельный учёт НДС — разные учёты с разными проверяющими; нужны оба, где применимы.</li>
      </ol>
    </div>

    <h2 id="glossary">Глоссарий</h2>
    <dl class="gloss">
      <div><dt>Целевые средства</dt><dd>В Бюджетном кодексе — средства, подлежащие казначейскому сопровождению: оплата контрактов, субсидии, бюджетные инвестиции; в Налоговом кодексе режим НДС у них разный.</dd></div>
      <div><dt>Субсидия (для целей ст. 170 НК)</dt><dd>Средства из бюджета на приобретение товаров, работ, услуг или на возмещение затрат; входной НДС по покупкам за их счёт к вычету не принимается (п. 2.1), ранее принятый — восстанавливается (пп. 6 п. 3).</dd></div>
      <div><dt>Доля субсидии</dt><dd>Отношение суммы субсидии, израсходованной на покупку, к общей стоимости покупки с учётом НДС; в этой доле вычет не применяется.</dd></div>
      <div><dt>Пропорция по п. 4.1 ст. 170</dt><dd>Отношение стоимости отгрузки по облагаемым (освобождённым) операциям к общей стоимости отгрузки за квартал; применяется к НДС по покупкам общего назначения.</dd></div>
      <div><dt>Правило 5 %</dt><dd>Право не распределять входной НДС в квартале, когда доля расходов на освобождённые операции не превышает 5 % общих расходов (абз. 7 п. 4 ст. 170).</dd></div>
    </dl>

    <h2 id="faq">Частые вопросы</h2>
    <div class="faq">
      <details open><summary>Нужен ли раздельный учёт НДС при казначейском сопровождении государственного контракта?</summary><p>Нет, если целевые средства — оплата контракта: это выручка, входной НДС принимается к вычету на общих основаниях по статьям 171–172 НК. Раздельный учёт по статье 170 нужен получателям субсидий и организациям с освобождёнными от НДС операциями.</p></details>
      <details><summary>Принимается ли к вычету НДС по покупкам за счёт субсидии?</summary><p>Нет. По пункту 2.1 статьи 170 НК НДС по товарам, работам, услугам, основным средствам и имущественным правам, купленным полностью за счёт субсидии или бюджетной инвестиции, к вычету не принимается и учитывается в прочих расходах. При частичном финансировании вычет не применяется в доле субсидии. Исключение — субсидия, документы о которой предусматривают финансирование без НДС.</p></details>
      <details><summary>Как считать долю НДС, не принимаемую к вычету, при частичной субсидии?</summary><p>Как отношение суммы субсидии, израсходованной на покупку, к общей стоимости покупки с учётом предъявленного НДС (абзац 3 пункта 2.1 статьи 170 НК). Расчёт делается по каждой покупке.</p></details>
      <details><summary>Когда нужно восстанавливать НДС при казначейском сопровождении?</summary><p>При получении субсидии или бюджетной инвестиции на возмещение ранее понесённых затрат на покупки, по которым вычет уже применён, — в квартале получения субсидии (подпункт 6 пункта 3 статьи 170 НК); при частичном возмещении — в соответствующей доле.</p></details>
      <details><summary>Чем раздельный учёт по Порядку № 210н отличается от раздельного учёта НДС?</summary><p>Первый — учёт ресурсов и затрат по каждому контракту для Казначейства и заказчика (пункт 4.2 статьи 242.23 БК, постановление № 47 для ГОЗ). Второй — учёт сумм входного НДС по источникам и видам операций для налоговой инспекции (статья 170 НК). Один не заменяет другой.</p></details>
      <details><summary>Что будет, если не вести раздельный учёт НДС при облагаемых и освобождённых операциях?</summary><p>Входной НДС по покупкам не принимается к вычету и не включается в расходы по налогу на прибыль (абзац 6 пункта 4 статьи 170 НК). Исключение — кварталы, где доля расходов на освобождённые операции не превышает 5 %.</p></details>
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
    <div class="svc-cta svc-cta--end" role="complementary" aria-label="Услуги КазнаЭксперт"><div class="svc-cta__card"><span class="svc-cta__eyebrow">До проверки</span><p class="svc-cta__title">Восстановим раздельный учёт по контракту</p><p class="svc-cta__text">От выписок казначейства и первички — до регистров по каждому контракту и отчёта об исполнении, который примет заказчик и военное представительство.</p><span class="svc-cta__price">99 000 ₽</span><a class="svc-cta__btn" href="/uslugi/vosstanovlenie-razdelnogo-ucheta/" onclick="try{ym(94305898,'reachGoal','svccta_click',{svc:'vosstanovlenie-razdelnogo-ucheta',pos:'end'})}catch(e){}">Восстановить учёт →</a></div><div class="svc-cta__card svc-cta__card--edu"><span class="svc-cta__eyebrow">Топ-услуга · обучение</span><p class="svc-cta__title">Научим вести казначейское сопровождение самостоятельно</p><p class="svc-cta__text">9 академических часов один на один с экспертом Федерального казначейства — на ваших контрактах: счёт, «Электронный бюджет», сведения и коды, санкционирование, раздельный учёт. После курса вы ведёте контракт сами, без отказов.</p><span class="svc-cta__price">150 000 ₽ · индивидуально</span><a class="svc-cta__btn" href="/uslugi/obuchenie-kaznacheyskomu-soprovozhdeniyu/" onclick="try{ym(94305898,'reachGoal','svccta_click',{svc:'obuchenie',pos:'end'})}catch(e){}">Записаться на обучение →</a></div></div>
    <!-- /svc-cta:end -->
<div class="refs">
      <h2>Источники и нормативная база</h2>
      <ol>
        <li id="ref-1">Налоговый кодекс РФ, часть вторая (ред. от 29.04.2026), ст. 170: п. 2.1, пп. 6 п. 3, п. 4, 4.1; ст. 149, 171, 172, 264 — <a href="https://rulaws.ru/nk-rf-chast-2/Razdel-VIII/Glava-21/Statya-170/" target="_blank" rel="noopener">rulaws.ru</a></li>
        <li id="ref-2">Налоговый кодекс РФ, ст. 164 — ставка 22 % с 01.01.2026 (Федеральный закон от 28.11.2025 № 425-ФЗ) — consultant.ru — <a href="https://www.consultant.ru/document/cons_doc_LAW_28165/" target="_blank" rel="noopener">www.consultant.ru</a></li>
        <li id="ref-3">Бюджетный кодекс РФ, ст. 242.23 (п. 4.2 — раздельный учёт участников казначейского сопровождения) — consultant.ru — <a href="https://www.consultant.ru/document/cons_doc_LAW_19702/c4bad396d963c79cf5c4665d8fc50e017a94309f/" target="_blank" rel="noopener">www.consultant.ru</a></li>
        <li id="ref-4">Приказ Минфина России от 10.12.2021 № 210н «Порядок ведения раздельного учёта результатов финансово-хозяйственной деятельности…» — consultant.ru — <a href="https://www.consultant.ru/document/cons_doc_LAW_405282/" target="_blank" rel="noopener">www.consultant.ru</a></li>
      </ol>
      <p class="refs__note">Материал актуален на 9 сентября 2026 года; статья 170 НК приведена по редакции от 29.04.2026. Расчёты — иллюстрация методики; по конкретному соглашению о субсидии условие о финансировании «с НДС» или «без НДС» проверяйте в его тексте.</p>
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
    <form class="railform" id="leadForm" novalidate data-endpoint="/php/lead.php" data-source="razdelnyy-uchet-nds-pri-ks">
      <div class="railform__badge">Разбор эксперта</div>
      <h3 class="railform__title">Субсидия и контракт на одном сопровождении?</h3>
      <p class="railform__sub">Разведём источники, поставим раздельный учёт по контрактам и по НДС, оформим регистры под камеральную проверку — в рамках сопровождения контракта.</p>
      <input class="fld" name="name" placeholder="Имя" required minlength="2" maxlength="80" autocomplete="name">
      <input class="fld" name="phone" type="tel" placeholder="+7 (___) ___-__-__" required autocomplete="tel" inputmode="tel">
      <input class="hp" name="kz_note" tabindex="-1" autocomplete="off" aria-hidden="true">
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
<a class="rail-svc" href="/uslugi/kaznacheyskoe-soprovozhdenie/"><span class="rail-svc__k">Поможем под ключ</span><span class="rail-svc__n">Казначейское сопровождение →</span></a>
</aside>
</div>

<section class="related" aria-labelledby="relTitle">
  <div class="related__head"><h2 id="relTitle">Что почитать ещё</h2><a href="/baza-znaniy/">Вся база знаний →</a></div>
  <div class="related__grid">
    <a class="card reveal" href="/baza-znaniy/nalogi-pri-kaznacheyskom-soprovozhdenii/"><div class="card__cover"><span>Налоги</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Налоги при казначейском сопровождении: НДС, прибыль, УСН</h3><div class="card__meta">Операции · 13 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/kaznacheyskoe-soprovozhdenie-subsidiy/"><div class="card__cover"><span>Субсидии</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Казначейское сопровождение субсидий: режим и отчётность</h3><div class="card__meta">Субсидии · 14 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/razdelnyy-uchet-po-goskontraktu/"><div class="card__cover"><span>РУ</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Раздельный учёт по госконтракту: как вести</h3><div class="card__meta">Раздельный учёт · 15 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/uchet-rashodov-na-soprovozhdenie-goz/"><div class="card__cover"><span>Затраты</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Расходы на сопровождение контракта ГОЗ: куда относить</h3><div class="card__meta">ГОЗ · 11 мин</div></div></a>
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

<section class="kz-sub" aria-labelledby="kzSubTitle" data-source="razdelnyy-uchet-nds-pri-ks">
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
      <input class="kz-sub__hp" name="kz_note" tabindex="-1" autocomplete="off" aria-hidden="true">
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
      if(form.kz_note.value) return;
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
    if(form.kz_note.value)return;
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

<script defer src="/js/kz-attr.js?v=<?= @filemtime($_SERVER['DOCUMENT_ROOT'].'/js/kz-attr.js') ?>"></script>
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
<link rel="stylesheet" href="/assets/svc-cta.css?v=<?= @filemtime($_SERVER['DOCUMENT_ROOT'].'/assets/svc-cta.css') ?>">
<link rel="stylesheet" href="/assets/kg-lead.css?v=<?= @filemtime($_SERVER['DOCUMENT_ROOT'].'/assets/kg-lead.css') ?>"><script src="/assets/kg-lead.js?v=<?= @filemtime($_SERVER['DOCUMENT_ROOT'].'/assets/kg-lead.js') ?>" defer></script>
</body>
</html>
