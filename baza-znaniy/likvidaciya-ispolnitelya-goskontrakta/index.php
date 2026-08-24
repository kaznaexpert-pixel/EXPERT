<?php /* Cache-Control задаёт .htaccess — единая точка правды для кэш-заголовков */ ?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ликвидация исполнителя госконтракта: контракт, счёт, целевые средства</title>
<meta name="description" content="Что происходит с госконтрактом и лицевым счётом при ликвидации исполнителя: обязательный отказ заказчика, возврат целевых средств, закрытие счёта и риски РНП.">
<meta name="author" content="Ярослав Михайлов">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1">
<meta name="theme-color" content="#F4F1EB" media="(prefers-color-scheme: light)">
<meta name="theme-color" content="#141310" media="(prefers-color-scheme: dark)">
<!-- PROD: canonical и og:url ОБЯЗАТЕЛЬНО менять под URL каждой статьи -->
<link rel="canonical" href="https://kaznaexpert.ru/baza-znaniy/likvidaciya-ispolnitelya-goskontrakta/">
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
<script>window.YM_PARAMS = {page_type:"cluster", cluster:"ks"};</script>

<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "Article", "headline": "Ликвидация исполнителя госконтракта: что будет с контрактом, лицевым счётом и целевыми средствами", "description": "Что происходит с госконтрактом и лицевым счётом при ликвидации исполнителя: обязательный отказ заказчика, возврат целевых средств, закрытие счёта и риски РНП.", "inLanguage": "ru-RU", "datePublished": "2026-07-27", "dateModified": "2026-07-27", "author": {"@type": "Person", "name": "Ярослав Михайлов", "jobTitle": "Главный эксперт по казначейскому сопровождению", "url": "https://kaznaexpert.ru/komanda/mihailov-yaroslav/"}, "publisher": {"@type": "Organization", "name": "КазнаЭксперт", "url": "https://kaznaexpert.ru", "logo": {"@type": "ImageObject", "url": "https://kaznaexpert.ru/img/logogold.png"}}, "image": "https://kaznaexpert.ru/img/og-image.png", "mainEntityOfPage": {"@type": "WebPage", "@id": "https://kaznaexpert.ru/baza-znaniy/likvidaciya-ispolnitelya-goskontrakta/"}, "citation": ["Гражданский кодекс РФ, ст. 61–64.2, 407, 419. КонсультантПлюс — https://www.consultant.ru/document/cons_doc_LAW_5142/", "Федеральный закон от 05.04.2013 № 44-ФЗ, п. 3 ч. 1 ст. 31, ч. 15–16 ст. 95, ст. 104.", "Бюджетный кодекс РФ, ст. 242.23; приказ Казначейства России от 17.10.2016 № 21н (ред. от 26.11.2025).", "Федеральный закон от 08.02.1998 № 14-ФЗ, п. 3.1 ст. 3; Федеральный закон от 26.10.2002 № 127-ФЗ.", "Федеральный закон от 29.12.2012 № 275-ФЗ, ст. 8.3–8.4."]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "Главная", "item": "https://kaznaexpert.ru/"}, {"@type": "ListItem", "position": 2, "name": "База знаний", "item": "https://kaznaexpert.ru/baza-znaniy/"}, {"@type": "ListItem", "position": 3, "name": "Ликвидация исполнителя госконтракта", "item": "https://kaznaexpert.ru/baza-znaniy/likvidaciya-ispolnitelya-goskontrakta/"}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [{"@type": "Question", "name": "Можно ли ликвидировать компанию с действующим госконтрактом?", "acceptedAnswer": {"@type": "Answer", "text": "Юридически запустить процедуру можно, но с записью «в процессе ликвидации» компания перестаёт соответствовать пункту 3 части 1 статьи 31 закона № 44-ФЗ, и заказчик обязан заявить односторонний отказ от контракта с направлением сведений в реестр недобросовестных поставщиков. Правильно — сначала закрыть контракт."}}, {"@type": "Question", "name": "Когда заказчик узнает о ликвидации?", "acceptedAnswer": {"@type": "Answer", "text": "Запись «находится в процессе ликвидации» появляется в открытом ЕГРЮЛ в течение нескольких дней после уведомления регистрирующего органа; заказчики отслеживают контрагентов по выпискам и сервисам мониторинга."}}, {"@type": "Question", "name": "Обязан ли заказчик расторгнуть контракт при ликвидации исполнителя?", "acceptedAnswer": {"@type": "Answer", "text": "Да. По части 15 статьи 95 закона № 44-ФЗ заказчик обязан принять решение об одностороннем отказе, если исполнитель перестал соответствовать требованиям к участнику закупки — а непроведение ликвидации входит в эти требования."}}, {"@type": "Question", "name": "Попадёт ли ликвидируемая компания в реестр недобросовестных поставщиков?", "acceptedAnswer": {"@type": "Answer", "text": "При одностороннем отказе заказчика сведения направляются в ФАС; в реестр включают не только компанию, но и руководителя и участников с долей свыше 25 %. ФАС оценивает недобросовестность поведения, поэтому включение не автоматично, но риск высокий."}}, {"@type": "Question", "name": "Что будет с лицевым счётом при ликвидации?", "acceptedAnswer": {"@type": "Answer", "text": "Счёт сам не закроется: нужно вернуть остаток целевых средств, дождаться исполнения всех распоряжений и подать заявление на закрытие. Право подписи переходит к ликвидатору по переоформленной карточке образцов подписей."}}, {"@type": "Question", "name": "Можно ли направить остаток целевых средств на расчёты с кредиторами?", "acceptedAnswer": {"@type": "Answer", "text": "Нет. Режим целевых средств действует до конца: остаток с лицевого счёта возвращается заказчику или в бюджет, и только заработанные и законно выведенные деньги попадают в общую массу для расчётов по очерёдности статьи 64 ГК."}}, {"@type": "Question", "name": "Что происходит с неотработанным авансом?", "acceptedAnswer": {"@type": "Answer", "text": "Это долг перед заказчиком: он заявляет требование в ликвидацию, а гасится оно возвратом с лицевого счёта. Не вернуть аванс и завершить ликвидацию не получится — заказчик заблокирует процедуру возражениями и исками."}}, {"@type": "Question", "name": "Что делать, если денег на всех кредиторов не хватает?", "acceptedAnswer": {"@type": "Answer", "text": "Ликвидационная комиссия обязана обратиться в арбитражный суд с заявлением о банкротстве (п. 4 ст. 63 ГК) — добровольная ликвидация переходит в конкурсное производство с правилами закона № 127-ФЗ."}}, {"@type": "Question", "name": "Чем ликвидация отличается от банкротства для госконтракта?", "acceptedAnswer": {"@type": "Answer", "text": "Ликвидация лишает соответствия требованиям сразу с записи в ЕГРЮЛ, банкротство — только с открытия конкурсного производства. В обоих случаях итог для действующего контракта — расторжение, но процедуры и риски для владельцев разные."}}, {"@type": "Question", "name": "Можно ли просто «бросить» компанию?", "acceptedAnswer": {"@type": "Answer", "text": "Исключение недействующего лица из ЕГРЮЛ — не безопасная альтернатива: при недобросовестности контролирующих лиц кредиторы вправе требовать с них долги в порядке субсидиарной ответственности (п. 3.1 ст. 3 закона об ООО)."}}, {"@type": "Question", "name": "Что делать, если ликвидируется мой соисполнитель с моим авансом?", "acceptedAnswer": {"@type": "Answer", "text": "В течение двух месяцев с публикации заявить письменное требование ликвидационной комиссии, проследить включение в промежуточный баланс, при игнорировании — возражения в регистрирующий орган и иск до завершения процедуры. Возврат придёт на ваш лицевой счёт."}}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "HowTo", "name": "Как закрыть контрактный контур перед ликвидацией исполнителя", "inLanguage": "ru-RU", "step": [{"@type": "HowToStep", "position": 1, "name": "Инвентаризация обязательств", "text": "Перечень действующих контрактов, этапов, гарантийных обязательств, неотработанных авансов и остатков на лицевых счетах."}, {"@type": "HowToStep", "position": 2, "name": "Доисполнение или расторжение", "text": "Сдать и подписать документы о приёмке по исполнимому; неисполнимое вывести на расторжение по соглашению сторон с фиксацией взаиморасчётов."}, {"@type": "HowToStep", "position": 3, "name": "Возврат неотработанного аванса", "text": "Вернуть остаток аванса с лицевого счёта заказчику по его реквизитам."}, {"@type": "HowToStep", "position": 4, "name": "Итоговая отчётность", "text": "Сдать отчёт о расходах целевых средств и завершить расчёты с соисполнителями."}, {"@type": "HowToStep", "position": 5, "name": "Закрытие лицевого счёта", "text": "При нулевом остатке и отсутствии неисполненных распоряжений подать заявление на закрытие счёта."}, {"@type": "HowToStep", "position": 6, "name": "Оценка гарантийных обязательств", "text": "Оценить сроки и вероятность претензий; обеспечение гарантийных обязательств остаётся у заказчика."}, {"@type": "HowToStep", "position": 7, "name": "Решение о ликвидации", "text": "Только после закрытия контрактного контура — решение учредителей, уведомление регистрирующего органа и стандартная процедура статей 62–64 ГК."}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "DefinedTermSet", "name": "Термины: ликвидация исполнителя госконтракта", "inLanguage": "ru-RU", "hasDefinedTerm": [{"@type": "DefinedTerm", "name": "Ликвидация юридического лица", "description": "прекращение юридического лица без перехода прав и обязанностей к правопреемникам (п. 1 ст. 61 ГК РФ); завершается записью в ЕГРЮЛ."}, {"@type": "DefinedTerm", "name": "Ликвидационная комиссия", "description": "орган, к которому переходят полномочия по управлению компанией на время ликвидации: расчёты с кредиторами, балансы, закрытие счетов."}, {"@type": "DefinedTerm", "name": "Промежуточный ликвидационный баланс", "description": "баланс с составом имущества и перечнем заявленных требований кредиторов; составляется после истечения срока заявления требований."}, {"@type": "DefinedTerm", "name": "Требование к участнику закупки", "description": "непроведение ликвидации и отсутствие решения суда о банкротстве с открытием конкурсного производства (п. 3 ч. 1 ст. 31 закона № 44-ФЗ)."}, {"@type": "DefinedTerm", "name": "Обязательный односторонний отказ", "description": "обязанность заказчика отказаться от контракта, если исполнитель перестал соответствовать требованиям к участнику закупки (ч. 15 ст. 95 закона № 44-ФЗ)."}, {"@type": "DefinedTerm", "name": "Исключение из ЕГРЮЛ недействующего лица", "description": "административное прекращение «брошенной» компании (ст. 64.2 ГК); при недобросовестности контролирующих лиц — их субсидиарная ответственность."}]}
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
<meta property="og:title" content="Ликвидация исполнителя госконтракта">
<meta property="og:description" content="Запись «в процессе ликвидации» обязывает заказчика расторгнуть контракт. Правильный порядок: закрыть контракт и лицевой счёт — потом ликвидироваться.">
<meta property="og:url" content="https://kaznaexpert.ru/baza-znaniy/likvidaciya-ispolnitelya-goskontrakta/">
<meta property="og:image" content="https://kaznaexpert.ru/img/og-image.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="Ликвидация исполнителя госконтракта — КазнаЭксперт">
<meta property="article:published_time" content="2026-07-27T09:00:00+03:00">
<meta property="article:modified_time" content="2026-07-27T09:00:00+03:00">
<meta property="article:author" content="https://kaznaexpert.ru/komanda/mihailov-yaroslav/">
<meta property="article:section" content="База знаний">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Ликвидация исполнителя госконтракта">
<meta name="twitter:description" content="Запись «в процессе ликвидации» обязывает заказчика расторгнуть контракт. Правильный порядок: закрыть контракт и лицевой счёт — потом ликвидироваться.">
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
  <nav class="crumbs" aria-label="Хлебные крошки"><a href="/">Главная</a> › <a href="/baza-znaniy/">База знаний</a> › Ликвидация исполнителя</nav>

  <aside class="toc" aria-label="Содержание">
    <div class="toc__label">Содержание</div>
    <ul class="toc__list" id="tocList">
      <li><a href="#sut">Когда ликвидация «начинается» юридически</a></li>
      <li><a href="#nesovmestimost">Ликвидация и действующий контракт: почему это несовместимо</a></li>
      <li><a href="#rnp">Реестр недобросовестных поставщиков: след для учредителей</a></li>
      <li><a href="#poryadok">Правильная последовательность: сначала контракт, потом ликвидация</a></li>
      <li><a href="#howto">Как закрыть контрактный контур перед ликвидацией: пошагово</a></li>
      <li><a href="#schet">Судьба лицевого счёта в казначействе</a></li>
      <li><a href="#sredstva">Целевые средства и кредиторы: очерёдность и возвраты</a></li>
      <li><a href="#sravnenie">Ликвидация, банкротство, исключение из ЕГРЮЛ: три разных финала</a></li>
      <li><a href="#kontragent">Если ликвидируется ваш контрагент</a></li>
      <li><a href="#zakazchik">Если «ликвидируется» заказчик</a></li>
      <li><a href="#goz">Гособоронзаказ: отдельный счёт и ликвидация</a></li>
      <li><a href="#checklist">Чек-лист перед запуском ликвидации</a></li>
      <li><a href="#kejs">Типовая ситуация из практики</a></li>
      <li><a href="#oshibki">Частые ошибки</a></li>
      <li><a href="#glossary">Глоссарий</a></li>
      <li><a href="#faq">Частые вопросы</a></li>
    </ul>
  </aside>

  <article class="content" id="main">
    <div class="hero">
      <img class="hero__crest hero__crest--light" src="/img/logogold-crest.webp" alt="" aria-hidden="true" width="188" height="137" decoding="async" loading="lazy">
      <img class="hero__crest hero__crest--dark" src="/img/LogoWhite.png" alt="" aria-hidden="true" width="188" height="137" decoding="async" loading="lazy">
      <div class="eyebrow">База знаний · Контракты и риски <span class="fresh">Актуально на 2026</span></div>
    <h1>Ликвидация исполнителя госконтракта: что будет с контрактом, лицевым счётом и целевыми средствами</h1>
    <div class="byline"><span class="av">ЯМ</span><span>Автор: <a href="/komanda/mihailov-yaroslav/">Ярослав Михайлов</a>, главный эксперт</span><span class="dot">·</span><span>15+ лет в Казначействе</span><span class="dot">·</span><span>14 мин чтения</span><span class="dot">·</span><span>Обновлено 27 июля 2026</span></div>
    </div>

    <div class="share">
      <span class="share__label">Поделиться:</span>
      <a href="https://t.me/share/url?url=https%3A%2F%2Fkaznaexpert.ru%2Fbaza-znaniy%2Flikvidaciya-ispolnitelya-goskontrakta%2F&amp;text=%D0%9B%D0%B8%D0%BA%D0%B2%D0%B8%D0%B4%D0%B0%D1%86%D0%B8%D1%8F%20%D0%B8%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D0%B8%D1%82%D0%B5%D0%BB%D1%8F%20%D0%B3%D0%BE%D1%81%D0%BA%D0%BE%D0%BD%D1%82%D1%80%D0%B0%D0%BA%D1%82%D0%B0" target="_blank" rel="noopener"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.56 8.25l-1.86 8.76c-.14.62-.5.77-1.02.48l-2.82-2.08-1.36 1.31c-.15.15-.28.28-.57.28l.2-2.89 5.27-4.76c.23-.2-.05-.32-.35-.12l-6.51 4.1-2.8-.88c-.61-.19-.62-.61.13-.9l10.95-4.22c.5-.18.95.12.79.85z"/></svg>Telegram</a>
      <button type="button" id="copyLink"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.07 0l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.07 0l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg><span>Копировать ссылку</span></button>
      <button type="button" id="printBtn"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9V2h12v7M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2M6 14h12v8H6z"/></svg>Скачать PDF</button>
    </div>

    <details class="mtoc"><summary>Содержание статьи</summary>
      <ol><li><a href="#sut">Когда ликвидация «начинается» юридически</a></li><li><a href="#nesovmestimost">Ликвидация и действующий контракт</a></li><li><a href="#rnp">Реестр недобросовестных поставщиков</a></li><li><a href="#poryadok">Правильная последовательность</a></li><li><a href="#howto">Как закрыть контрактный контур: пошагово</a></li><li><a href="#schet">Судьба лицевого счёта в казначействе</a></li><li><a href="#sredstva">Целевые средства и кредиторы</a></li><li><a href="#sravnenie">Ликвидация, банкротство, исключение из ЕГРЮЛ</a></li><li><a href="#kontragent">Если ликвидируется ваш контрагент</a></li><li><a href="#zakazchik">Если «ликвидируется» заказчик</a></li><li><a href="#goz">Гособоронзаказ: отдельный счёт и ликвидация</a></li><li><a href="#checklist">Чек-лист перед запуском ликвидации</a></li><li><a href="#kejs">Типовая ситуация из практики</a></li><li><a href="#oshibki">Частые ошибки</a></li><li><a href="#glossary">Глоссарий</a></li><li><a href="#faq">Частые вопросы</a></li></ol>
    </details>

    <div class="tldr">Ликвидация исполнителя несовместима с действующим госконтрактом: с момента, когда компания оказывается «в процессе ликвидации», она перестаёт соответствовать пункту 3 части 1 статьи 31 закона № 44-ФЗ, и заказчик обязан в одностороннем порядке отказаться от контракта (ч. 15 ст. 95) — с реестром недобросовестных поставщиков для компании, руководителя и крупных участников. Правильный порядок обратный: сначала закрыть контракт, вернуть остатки целевых средств и лицевой счёт, потом ликвидироваться.</div>

    <section class="keyfacts grain" aria-label="Ключевые факты">
      <h2>Коротко о главном</h2>
      <div class="keyfacts__grid">
        <div class="kf"><div class="kf__n">П. 3 ч. 1 ст. 31</div><div class="kf__t"><b>Запрет для участника</b> — Непроведение ликвидации — базовое требование к исполнителю госконтракта на всём сроке его исполнения, а не только на этапе торгов.</div></div>
        <div class="kf"><div class="kf__n">Ч. 15 ст. 95</div><div class="kf__t"><b>Обязательный отказ</b> — Узнав о начале ликвидации, заказчик не «вправе», а обязан принять решение об одностороннем отказе от контракта — с последующим реестром недобросовестных поставщиков.</div></div>
        <div class="kf"><div class="kf__n">Ст. 419 ГК</div><div class="kf__t"><b>Финал — запись в ЕГРЮЛ</b> — Обязательства прекращаются ликвидацией юридического лица; ликвидация завершена с момента записи в ЕГРЮЛ (п. 9 ст. 63 ГК), до этого все долги и обязанности живы.</div></div>
        <div class="kf"><div class="kf__n">Остаток → бюджет</div><div class="kf__t"><b>Целевые не «свои»</b> — Неиспользованные целевые средства на лицевом счёте не превращаются в ликвидационную массу: неотработанный аванс возвращается заказчику, счёт закрывается при нулевом остатке.</div></div>
      </div>
    </section>

    <h2 id="sut">Когда ликвидация «начинается» юридически</h2>
    <p>Добровольная ликвидация — это процедура прекращения юридического лица без перехода его прав и обязанностей к правопреемникам (п. 1 ст. 61 ГК РФ). Запускается она решением учредителей, и уже в течение трёх рабочих дней после решения компания обязана уведомить регистрирующий орган — с этого момента в ЕГРЮЛ появляется запись «находится в процессе ликвидации». Дальше — назначение ликвидационной комиссии или ликвидатора, публикация в «Вестнике государственной регистрации», не менее двух месяцев на заявление требований кредиторами, промежуточный ликвидационный баланс, расчёты, окончательный баланс и итоговая запись в ЕГРЮЛ.</p>
    <p>Для госконтрактной темы принципиальны две даты. Первая — запись «в процессе ликвидации»: именно с неё компания перестаёт соответствовать требованиям к участнику закупки, и запись эту заказчик видит в открытой выписке из ЕГРЮЛ. Вторая — итоговая запись о прекращении юридического лица: только с неё обязательства компании прекращаются (ст. 419 ГК), а сама ликвидация считается завершённой (п. 9 ст. 63 ГК). Между этими датами компания полностью правоспособна в пределах целей ликвидации: она может и должна завершать расчёты, возвращать авансы, закрывать счета.</p>
    <p>Срок процедуры для ООО ограничен: не более одного года с возможностью продления через суд ещё максимум на шесть месяцев. Это значит, что «повисеть в ликвидации», пока доисполняется длинный контракт, не получится — процедурные часы тикают.</p>

    <h2 id="nesovmestimost">Ликвидация и действующий контракт: почему это несовместимо</h2>
    <p>Пункт 3 части 1 статьи 31 закона № 44-ФЗ требует от участника закупки «непроведение ликвидации... и отсутствие решения арбитражного суда о признании... банкротом и об открытии конкурсного производства». Это требование действует не только на момент подачи заявки: соответствие ему заказчик вправе и обязан отслеживать в ходе исполнения контракта.</p>
    <p>Дальше работает часть 15 статьи 95: если в ходе исполнения установлено, что исполнитель перестал соответствовать требованиям к участнику закупки, заказчик <b>обязан</b> принять решение об одностороннем отказе от исполнения контракта. У заказчика здесь нет усмотрения — «войти в положение» и дождаться, пока вы доделаете работы в статусе ликвидируемой компании, он по закону не может. Решение размещается в ЕИС, вступает в силу через десять дней после надлежащего уведомления, и контракт прекращается. Полная механика процедуры — в статье об <a href="/baza-znaniy/odnostoronniy-otkaz-ot-ispolneniya-kontrakta-44-fz/">одностороннем отказе от исполнения контракта</a>.</p>
    <p>Заметьте зеркальную деталь: тот же пункт 3 части 1 статьи 31 говорит о банкротстве — но только со стадии конкурсного производства. Наблюдение или внешнее управление формально соответствия не лишают, а вот запись «в процессе ликвидации» лишает сразу. Парадоксально, но факт: добровольная ликвидация «выключает» компанию из контрактной системы раньше, чем банкротство.</p>

    <h2 id="rnp">Реестр недобросовестных поставщиков: след для учредителей</h2>
    <p>Односторонний отказ заказчика по части 15 статьи 95 запускает стандартное последствие: сведения об исполнителе направляются в ФАС для включения в реестр недобросовестных поставщиков (ч. 16 ст. 95, ст. 104). И здесь важно понимать, кого именно вносят в реестр: не только само юридическое лицо, но и сведения о его руководителе и участниках с долей более четверти уставного капитала.</p>
    <p>Практическое следствие: «компания всё равно закрывается, реестр ей не страшен» — опасное рассуждение. Компании, может, и не страшен, а вот физическим лицам, которые в ней значились, — вполне: их след в реестре осложнит участие в закупках через новые юридические лица в течение двух лет. Подробно о механике включения и обжалования — в статье о <a href="/baza-znaniy/reestr-nedobrosovestnyh-postavshchikov-44-fz/">реестре недобросовестных поставщиков по 44-ФЗ</a>.</p>
    <p>ФАС включает в реестр не автоматически: антимонопольный орган проверяет обстоятельства и недобросовестность поведения. Если ликвидация запущена по объективным причинам, а контракт к этому моменту фактически исполнен и стороны шли к расторжению по соглашению, — шанс отбиться от реестра есть. Но надёжнее не создавать ситуацию вовсе.</p>

    <h2 id="poryadok">Правильная последовательность: сначала контракт, потом ликвидация</h2>
    <p>Из сказанного следует главное правило: контрактный контур закрывается до подачи уведомления о ликвидации, а не параллельно и не после. Пока в ЕГРЮЛ нет записи о ликвидации, компания — обычный исполнитель: она может доисполнить контракт, подписать документы о приёмке, получить оплату, расторгнуть контракт по соглашению сторон, вернуть неотработанный аванс, сдать отчётность и закрыть лицевой счёт. Все эти действия в статусе «в процессе ликвидации» либо невозможны, либо токсичны.</p>
    <table>
      <thead><tr><th>Действие</th><th>До записи о ликвидации</th><th>После записи о ликвидации</th></tr></thead>
      <tbody>
        <tr><td>Исполнение контракта и приёмка</td><td>в обычном режиме</td><td>заказчик обязан заявить односторонний отказ (ч. 15 ст. 95)</td></tr>
        <tr><td>Расторжение по соглашению сторон</td><td>доступно, самый чистый выход</td><td>формально возможно до вступления отказа в силу, но заказчик связан обязанностью отказаться</td></tr>
        <tr><td>Оплата выполненного</td><td>в общие сроки (7/10 рабочих дней)</td><td>по фактически принятому до прекращения; споры вероятны</td></tr>
        <tr><td>Реестр недобросовестных поставщиков</td><td>не грозит</td><td>направление сведений при одностороннем отказе</td></tr>
        <tr><td>Участие в новых закупках</td><td>доступно</td><td>закрыто: несоответствие п. 3 ч. 1 ст. 31</td></tr>
      </tbody>
    </table>
    <p>Если контракт объективно не доисполнить — договаривайтесь о расторжении по соглашению сторон до старта ликвидации: соглашение фиксирует объём исполненного, взаиморасчёты и отсутствие претензий, не тянет за собой реестр и оставляет процедуру ликвидации чистой.</p>

    <h2 id="howto">Как закрыть контрактный контур перед ликвидацией: пошагово</h2>
    <ol class="steps">
      <li><b>Инвентаризация обязательств.</b> Составьте перечень действующих контрактов, этапов, гарантийных обязательств, неотработанных авансов и остатков на лицевых счетах — по каждому контракту и каждому разделу счёта.</li>
      <li><b>Доисполнение или расторжение.</b> Что можно сдать — сдайте и подпишите документы о приёмке; что нельзя — выводите на расторжение по соглашению сторон с фиксацией взаиморасчётов.</li>
      <li><b>Возврат неотработанного аванса.</b> Верните остаток аванса с лицевого счёта заказчику по его реквизитам; порядок и расчёт — в статье о <a href="/baza-znaniy/vozvrat-avansa-po-goskontraktu/">возврате аванса по госконтракту</a>.</li>
      <li><b>Итоговая отчётность.</b> Сдайте отчёт о расходах целевых средств и закройте расчёты с соисполнителями — их лицевые счета тоже упираются в вашу цепочку.</li>
      <li><b>Закрытие лицевого счёта.</b> При нулевом остатке и отсутствии неисполненных распоряжений подайте заявление на закрытие; механика — в статье о <a href="/baza-znaniy/zavershenie-kaznacheyskogo-soprovozhdeniya/">завершении казначейского сопровождения</a>.</li>
      <li><b>Гарантийные обязательства.</b> Оцените хвосты: гарантия на работы не исчезает по волшебству — при ликвидации она прекратится (ст. 419 ГК), но заказчик вправе заявить требования до завершения процедуры, а обеспечение гарантийных обязательств останется у него.</li>
      <li><b>Только теперь — решение о ликвидации.</b> Уведомление в регистрирующий орган, ликвидационная комиссия, публикация, два месяца кредиторам — стандартная процедура статей 62–64 ГК без контрактных мин.</li>
    </ol>

    <h2 id="schet">Судьба лицевого счёта в казначействе</h2>
    <p>Лицевой счёт участника казначейского сопровождения закрывается по заявлению владельца при двух условиях: нулевой остаток и отсутствие неисполненных распоряжений. Ликвидация сама по себе счёт не закрывает — заниматься этим придётся либо до процедуры (правильно), либо ликвидационной комиссии (мучительно).</p>
    <p>Если ликвидация уже запущена, право подписи переходит к ликвидатору или председателю ликвидационной комиссии — под это переоформляется карточка образцов подписей, где вместо директора расписывается ликвидатор. Детали — в статье о <a href="/baza-znaniy/kartochka-obrazcov-podpisey-kaznachejstvo/">карточке образцов подписей для казначейства</a>; смежные сценарии смены реквизитов и наименования — в разборе <a href="/baza-znaniy/pereoformlenie-licevogo-scheta-v-kaznachejstve/">переоформления лицевого счёта</a>.</p>
    <p>Остаток на счёте ликвидатор не может забрать «в кассу процедуры»: режим целевых средств никуда не девается, перечисления возможны только по правилам статьи 242.23 БК — на исполнение контракта, который уже прекращён, либо на возврат заказчику. Фактически у ликвидируемого исполнителя один легальный маршрут: вернуть остаток и закрыть счёт.</p>

    <h2 id="sredstva">Целевые средства и кредиторы: очерёдность и возвраты</h2>
    <p>Внутри ликвидации требования кредиторов гасятся в очерёдности статьи 64 ГК: сначала вред жизни и здоровью, затем работники, затем обязательные платежи, затем остальные кредиторы. Но целевые средства на лицевом счёте в эту логику не встраиваются: это деньги с особым режимом, и «раздать их кредиторам по очереди» нельзя — сначала они должны покинуть казначейский контур законным путём.</p>
    <p>Раскладка такая. Оплата за фактически выполненное и принятое — заработанные деньги исполнителя: после поступления на расчётный счёт (по разрешённым основаниям перечисления себе) они попадают в общую массу и распределяются по правилам ликвидации. Неотработанный аванс — долг перед заказчиком: заказчик заявляет требование, оно попадает в промежуточный ликвидационный баланс, а гасится возвратом с лицевого счёта. Остаток целевых средств, по которым обязательства не возникли, — возвращается в бюджетную систему.</p>
    <p>Критический момент — достаточность имущества. Если на этапе промежуточного баланса выясняется, что на всех кредиторов денег не хватает, ликвидационная комиссия обязана обратиться в арбитражный суд с заявлением о банкротстве (п. 4 ст. 63 ГК) — добровольная ликвидация конвертируется в конкурсное производство, и дальше работают правила банкротного разбора. Что происходит с контрактом и счётом в этом сценарии — в статье о <a href="/baza-znaniy/bankrotstvo-ispolnitelya-goskontrakta-pri-ks/">банкротстве исполнителя госконтракта</a>.</p>

    <h2 id="sravnenie">Ликвидация, банкротство, исключение из ЕГРЮЛ: три разных финала</h2>
    <table>
      <thead><tr><th>Параметр</th><th>Добровольная ликвидация</th><th>Банкротство</th><th>Исключение из ЕГРЮЛ как недействующего</th></tr></thead>
      <tbody>
        <tr><td>Кто запускает</td><td>учредители (ст. 61 ГК)</td><td>должник, кредиторы, уполномоченный орган (закон № 127-ФЗ)</td><td>регистрирующий орган (ст. 64.2 ГК)</td></tr>
        <tr><td>Контроль процедуры</td><td>ликвидационная комиссия</td><td>арбитражный управляющий и суд</td><td>никто: компания «брошена»</td></tr>
        <tr><td>Расчёты с кредиторами</td><td>очерёдность ст. 64 ГК, полный расчёт</td><td>конкурсная масса, реестр требований</td><td>не производятся</td></tr>
        <tr><td>Госконтракт</td><td>несоответствие ст. 31 → обязательный отказ заказчика</td><td>несоответствие — с открытия конкурсного производства</td><td>прекращение обязательств без процедуры</td></tr>
        <tr><td>Риск для владельцев</td><td>минимальный при чистой процедуре</td><td>субсидиарная ответственность контролирующих лиц</td><td>субсидиарная ответственность при недобросовестности (п. 3.1 ст. 3 закона об ООО)</td></tr>
      </tbody>
    </table>
    <p>Отдельно про «бросить компанию»: исключение недействующего юридического лица из ЕГРЮЛ — не аналог ликвидации, а её суррогат с последствиями. Если недобросовестные действия контролирующих лиц привели к тому, что исключённое общество не рассчиталось с кредиторами, — по заявлению кредитора на этих лиц может быть возложена субсидиарная ответственность. Для исполнителя с неотработанным авансом по госконтракту «бросить и забыть» — прямой маршрут к личным взысканиям.</p>

    <h2 id="kontragent">Если ликвидируется ваш контрагент</h2>
    <p>Зеркальная ситуация: ликвидируется не исполнитель, а его поставщик или соисполнитель, которому с лицевого счёта ушёл аванс. Алгоритм кредитора: узнать о ликвидации (публикация в «Вестнике», запись в ЕГРЮЛ — мониторинг контрагентов эту работу автоматизирует), в двухмесячный срок письменно заявить требование ликвидационной комиссии, проследить включение в промежуточный ликвидационный баланс. Требование, заявленное после срока, гасится в последнюю очередь, а незаявленное — прекращается вместе с компанией.</p>
    <p>Возвращённые контрагентом деньги — неотработанный аванс, переплата — должны прийти обратно на лицевой счёт, с которого уходили: механика кодов и оснований разобрана в статье о <a href="/baza-znaniy/vozvrat-deneg-ot-postavshchika-na-licevoy-schet/">возврате денег от поставщика на лицевой счёт</a>. Если ликвидационная комиссия «не видит» вашего требования — жалоба в регистрирующий орган на недостоверность баланса и иск успевают до итоговой записи, после неё взыскивать не с кого.</p>

    <h2 id="zakazchik">Если «ликвидируется» заказчик</h2>
    <p>Государственный или муниципальный заказчик не ликвидируется в гражданско-правовом смысле — казённые учреждения и органы власти упраздняются или реорганизуются. Ключевое отличие: обязательства публично-правового образования не исчезают, контракт переходит к правопреемнику, определённому актом о реорганизации, а лимиты и лицевые счета переносятся. Исполнителю важно получить уведомление о перемене стороны, переоформить документы и продолжать исполнение — задержки платежей в переходный период случаются, но долг никуда не девается: при затягивании работает общий маршрут взыскания через <a href="/baza-znaniy/ispolnitelnyy-list-v-kaznachejstvo/">исполнительный лист в казначейство</a>.</p>

    <h2 id="goz">Гособоронзаказ: отдельный счёт и ликвидация</h2>
    <p>В контуре гособоронзаказа расчёты идут через отдельный счёт в уполномоченном банке, и режим статьи 8.4 закона № 275-ФЗ ещё жёстче казначейского: перечень разрешённых списаний закрытый, а расторжение контракта не открывает счёт автоматически. Головной исполнитель и банк действуют по правилам режима: остатки возвращаются в цепочке кооперации, счёт закрывается после завершения расчётов по контракту. Ликвидация исполнителя ГОЗ без закрытия расчётов по отдельному счёту упирается в те же проблемы, что и с лицевым счётом, плюс контроль со стороны головного исполнителя и заказчика ГОЗ. Режим, запреты и вывод средств — в статье об <a href="/baza-znaniy/otdelnyy-schet-po-goz/">отдельном счёте по гособоронзаказу</a>.</p>

    <h2 id="checklist">Чек-лист перед запуском ликвидации</h2>
    <ul>
      <li>действующих госконтрактов нет: всё исполнено и принято либо расторгнуто по соглашению сторон;</li>
      <li>неотработанные авансы возвращены заказчикам, взаиморасчёты зафиксированы актами сверки;</li>
      <li>отчёт о расходах целевых средств сдан, претензий от заказчика нет;</li>
      <li>расчёты с соисполнителями по сопровождаемым контрактам завершены;</li>
      <li>остатки на лицевых счетах нулевые, счета закрыты, уведомления казначейства получены;</li>
      <li>отдельные счета ГОЗ закрыты через уполномоченный банк;</li>
      <li>гарантийные обязательства оценены: обеспечение, сроки, вероятность претензий;</li>
      <li>неустойки и штрафы урегулированы: оплачены, списаны по правилам или оспорены;</li>
      <li>только после этого — решение учредителей и уведомление о ликвидации.</li>
    </ul>

    <h2 id="kejs">Типовая ситуация из практики</h2>
    <p>Это обобщённый пример; он иллюстрирует логику и не описывает конкретного клиента, не гарантирует результата и не является рекламой достижений.</p>
    <p>На практике встречается ситуация: собственники подрядной организации решили закрыть бизнес — заказов мало, команда разошлась. Юрист готовит ликвидацию, и уведомление уходит в налоговую раньше, чем бухгалтерия вспоминает про «хвост»: действующий сопровождаемый контракт с невозвращённым авансом и лицевым счётом, на котором остаток. Через две недели заказчик, увидев в выписке запись «в процессе ликвидации», размещает решение об одностороннем отказе и направляет сведения в ФАС. Дальше разбор идёт в аварийном режиме: срочное соглашение с заказчиком о порядке возврата аванса, возврат остатка с лицевого счёта, закрытие счёта ликвидатором по переоформленной карточке, письменные пояснения в ФАС о том, что контракт фактически не исполнялся с весны по инициативе заказчика. Реестра в итоге удаётся избежать, но процедура растягивается на несколько месяцев дольше плана. Урок: перечень «что закрыть до ликвидации» должен составляться до уведомления в налоговую, а не после звонка заказчика.</p>

    <h2 id="oshibki">Частые ошибки</h2>
    <ul>
      <li><b>Запустить ликвидацию с действующим контрактом.</b> Запись в ЕГРЮЛ видна заказчику сразу — обязательный односторонний отказ и реестр недобросовестных поставщиков приходят автоматически.</li>
      <li><b>Считать, что реестр «не страшен закрывающейся фирме».</b> В реестр попадают руководитель и крупные участники — след останется у людей, а не только у компании.</li>
      <li><b>Забыть про лицевой счёт.</b> Ненулевой остаток и незакрытый счёт останавливают ликвидацию на этапе балансов: целевые деньги надо вернуть, счёт — закрыть.</li>
      <li><b>Пытаться распределить целевые средства кредиторам.</b> Режим статьи 242.23 БК действует до конца: остаток уходит заказчику, а не в очередь статьи 64 ГК.</li>
      <li><b>«Бросить» компанию вместо ликвидации.</b> Исключение из ЕГРЮЛ с непогашенным авансом — маршрут к субсидиарной ответственности владельцев.</li>
      <li><b>Игнорировать недостаточность имущества.</b> Если на кредиторов не хватает — ликвидационная комиссия обязана подать на банкротство, и затягивание бьёт по ней лично.</li>
    </ul>

    <h2 id="glossary">Глоссарий</h2>
    <dl class="gloss">
      <div><dt>Ликвидация юридического лица</dt><dd>прекращение юридического лица без перехода прав и обязанностей к правопреемникам (п. 1 ст. 61 ГК РФ); завершается записью в ЕГРЮЛ.</dd></div>
      <div><dt>Ликвидационная комиссия (ликвидатор)</dt><dd>орган, к которому переходят полномочия по управлению компанией на время ликвидации: расчёты с кредиторами, балансы, закрытие счетов.</dd></div>
      <div><dt>Промежуточный ликвидационный баланс</dt><dd>баланс с составом имущества и перечнем заявленных требований кредиторов; составляется после истечения срока заявления требований.</dd></div>
      <div><dt>Требование к участнику закупки</dt><dd>непроведение ликвидации и отсутствие решения суда о банкротстве с открытием конкурсного производства (п. 3 ч. 1 ст. 31 закона № 44-ФЗ).</dd></div>
      <div><dt>Обязательный односторонний отказ</dt><dd>обязанность заказчика отказаться от контракта, если исполнитель перестал соответствовать требованиям к участнику закупки (ч. 15 ст. 95 закона № 44-ФЗ).</dd></div>
      <div><dt>Исключение из ЕГРЮЛ недействующего лица</dt><dd>административное прекращение «брошенной» компании по решению регистрирующего органа (ст. 64.2 ГК); при недобросовестности контролирующих лиц влечёт их субсидиарную ответственность.</dd></div>
    </dl>

    <h2 id="faq">Частые вопросы</h2>
    <div class="faq">
      <details open><summary>Можно ли ликвидировать компанию с действующим госконтрактом?</summary><p>Юридически запустить процедуру можно, но с записью «в процессе ликвидации» компания перестаёт соответствовать пункту 3 части 1 статьи 31 закона № 44-ФЗ, и заказчик обязан заявить односторонний отказ от контракта с направлением сведений в реестр недобросовестных поставщиков. Правильно — сначала закрыть контракт.</p></details>
      <details><summary>Когда заказчик узнает о ликвидации?</summary><p>Запись «находится в процессе ликвидации» появляется в открытом ЕГРЮЛ в течение нескольких дней после уведомления регистрирующего органа; заказчики отслеживают контрагентов по выпискам и сервисам мониторинга.</p></details>
      <details><summary>Обязан ли заказчик расторгнуть контракт при ликвидации исполнителя?</summary><p>Да. По части 15 статьи 95 закона № 44-ФЗ заказчик обязан принять решение об одностороннем отказе, если исполнитель перестал соответствовать требованиям к участнику закупки — а непроведение ликвидации входит в эти требования.</p></details>
      <details><summary>Попадёт ли ликвидируемая компания в реестр недобросовестных поставщиков?</summary><p>При одностороннем отказе заказчика сведения направляются в ФАС; в реестр включают не только компанию, но и руководителя и участников с долей свыше 25 %. ФАС оценивает недобросовестность поведения, поэтому включение не автоматично, но риск высокий.</p></details>
      <details><summary>Что будет с лицевым счётом при ликвидации?</summary><p>Счёт сам не закроется: нужно вернуть остаток целевых средств, дождаться исполнения всех распоряжений и подать заявление на закрытие. Право подписи переходит к ликвидатору по переоформленной карточке образцов подписей.</p></details>
      <details><summary>Можно ли направить остаток целевых средств на расчёты с кредиторами?</summary><p>Нет. Режим целевых средств действует до конца: остаток с лицевого счёта возвращается заказчику или в бюджет, и только заработанные и законно выведенные деньги попадают в общую массу для расчётов по очерёдности статьи 64 ГК.</p></details>
      <details><summary>Что происходит с неотработанным авансом?</summary><p>Это долг перед заказчиком: он заявляет требование в ликвидацию, а гасится оно возвратом с лицевого счёта. Не вернуть аванс и завершить ликвидацию не получится — заказчик заблокирует процедуру возражениями и исками.</p></details>
      <details><summary>Что делать, если денег на всех кредиторов не хватает?</summary><p>Ликвидационная комиссия обязана обратиться в арбитражный суд с заявлением о банкротстве (п. 4 ст. 63 ГК) — добровольная ликвидация переходит в конкурсное производство с правилами закона № 127-ФЗ.</p></details>
      <details><summary>Чем ликвидация отличается от банкротства для госконтракта?</summary><p>Ликвидация лишает соответствия требованиям сразу с записи в ЕГРЮЛ, банкротство — только с открытия конкурсного производства. В обоих случаях итог для действующего контракта — расторжение, но процедуры и риски для владельцев разные.</p></details>
      <details><summary>Можно ли просто «бросить» компанию?</summary><p>Исключение недействующего лица из ЕГРЮЛ — не безопасная альтернатива: при недобросовестности контролирующих лиц кредиторы вправе требовать с них долги в порядке субсидиарной ответственности (п. 3.1 ст. 3 закона об ООО).</p></details>
      <details><summary>Что делать, если ликвидируется мой соисполнитель с моим авансом?</summary><p>В течение двух месяцев с публикации заявить письменное требование ликвидационной комиссии, проследить включение в промежуточный баланс, при игнорировании — возражения в регистрирующий орган и иск до завершения процедуры. Возврат придёт на ваш лицевой счёт.</p></details>
    </div>

    <div class="author">
      <div class="author__av">ЯМ</div>
      <div class="author__body">
        <div class="author__name">Ярослав Михайлов</div>
        <div class="author__role">Основатель и главный эксперт КазнаЭксперт</div>
        <p class="author__bio">15+ лет практики в сфере казначейского сопровождения государственных контрактов. Команда под руководством Ярослава работает с контрактами по 44-ФЗ, 223-ФЗ и ГОЗ; ИП «КазнаЭксперт» зарегистрировано в 2021 году. Специализация — сложные случаи: гособоронзаказ, раздельный учёт, спасение контрактов после отказов казначейства.</p>
        <div class="author__meta"><a href="/komanda/mihailov-yaroslav/">Профиль эксперта →</a><span>Telegram: <a href="https://t.me/Kaznaexpert" target="_blank" rel="noopener">@Kaznaexpert</a></span></div>
      </div>
    </div>


    <div class="refs">
      <h2>Источники и нормативная база</h2>
      <ol>
        <li id="ref-1">Гражданский кодекс РФ, ст. 61–64.2 (порядок ликвидации, очерёдность расчётов, исключение недействующего лица), ст. 407, 419 (прекращение обязательств ликвидацией). КонсультантПлюс — https://www.consultant.ru/document/cons_doc_LAW_5142/</li>
        <li id="ref-2">Федеральный закон от 05.04.2013 № 44-ФЗ, п. 3 ч. 1 ст. 31 (требование непроведения ликвидации), ч. 15–16 ст. 95 (обязательный односторонний отказ), ст. 104 (реестр недобросовестных поставщиков). КонсультантПлюс — https://www.consultant.ru/document/cons_doc_LAW_144624/</li>
        <li id="ref-3">Бюджетный кодекс РФ, ст. 242.23 — режим лицевого счёта и целевых средств при казначейском сопровождении; приказ Казначейства России от 17.10.2016 № 21н (ред. от 26.11.2025) — открытие, переоформление и закрытие лицевых счетов.</li>
        <li id="ref-4">Федеральный закон от 08.02.1998 № 14-ФЗ, п. 3.1 ст. 3 — субсидиарная ответственность контролирующих лиц исключённого из ЕГРЮЛ общества; Федеральный закон от 08.08.2001 № 129-ФЗ — государственная регистрация, записи о ликвидации.</li>
        <li id="ref-5">Федеральный закон от 29.12.2012 № 275-ФЗ, ст. 8.3–8.4 — режим отдельного счёта по гособоронзаказу; Федеральный закон от 26.10.2002 № 127-ФЗ — несостоятельность (банкротство).</li>
      </ol>
      <p class="refs__note">Материал носит справочный характер и не заменяет консультацию по конкретной ситуации. Последовательность действий при ликвидации с госконтрактами стройте по тексту ваших контрактов и актуальным редакциям норм.</p>
    </div>

  </article>

  <aside class="rail">
    <form class="railform" id="leadForm" novalidate data-endpoint="/php/lead.php" data-source="likvidaciya-ispolnitelya-goskontrakta">
      <div class="railform__badge">Разбор эксперта</div>
      <h3 class="railform__title">Закрываете бизнес с госконтрактами?</h3>
      <p class="railform__sub">Проведём аудит контрактного контура перед ликвидацией: контракты, авансы, лицевые счета, отчётность и риски реестра — с планом закрытия в правильной последовательности. Разбор — в течение часа.</p>
      <input class="railform__input" type="text" name="name" placeholder="Ваше имя" autocomplete="name">
      <input class="railform__input" type="tel" name="phone" placeholder="+7 (___) ___-__-__" autocomplete="tel" required>
      <input class="railform__hp" name="company_site" tabindex="-1" autocomplete="off" aria-hidden="true">
      <label class="railform__consent"><input type="checkbox" name="consent" required><span>Согласен на обработку персональных данных в соответствии с <a href="/privacy/" target="_blank" rel="noopener">политикой</a></span></label>
      <button class="railform__btn" type="submit">Получить разбор →</button>
      <div class="railform__msg" id="leadMsg" hidden></div>
      <div class="railform__trust">
        <span>15+ лет в казначействе</span>
        <span>7000+ контрактов</span>
      </div>
    </form>

<!-- rail-svc -->
<a class="rail-svc" href="/uslugi/audit-kaznacheyskogo-soprovozhdeniya/"><span class="rail-svc__k">Поможем под ключ</span><span class="rail-svc__n">Аудит казначейского сопровождения →</span></a>
</aside>
</div>

<section class="related" aria-labelledby="relTitle">
  <div class="related__head"><h2 id="relTitle">Что почитать ещё</h2><a href="/baza-znaniy/">Вся база знаний →</a></div>
  <div class="related__grid">
    <a class="card reveal" href="/baza-znaniy/bankrotstvo-ispolnitelya-goskontrakta-pri-ks/"><div class="card__cover"><span>Банкротство</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Банкротство исполнителя госконтракта при казначейском сопровождении</h3><p class="card__meta">Сценарий, в который превращается ликвидация без денег</p></div></a>
    <a class="card reveal" href="/baza-znaniy/zavershenie-kaznacheyskogo-soprovozhdeniya/"><div class="card__cover"><span>Закрытие счёта</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Завершение казначейского сопровождения: возврат остатков и закрытие счёта</h3><p class="card__meta">Обязательный этап перед ликвидацией</p></div></a>
    <a class="card reveal" href="/baza-znaniy/reestr-nedobrosovestnyh-postavshchikov-44-fz/"><div class="card__cover"><span>РНП</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Реестр недобросовестных поставщиков по 44-ФЗ</h3><p class="card__meta">Чем грозит односторонний отказ при ликвидации</p></div></a>
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

<section class="kz-sub" aria-labelledby="kzSubTitle" data-source="likvidaciya-ispolnitelya-goskontrakta">
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
