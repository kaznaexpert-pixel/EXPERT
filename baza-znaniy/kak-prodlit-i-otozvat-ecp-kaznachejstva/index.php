<?php /* Cache-Control задаёт .htaccess — единая точка правды для кэш-заголовков */ ?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Продление ЭЦП казначейства: как продлить и отозвать сертификат</title>
<meta name="description" content="Продление ЭЦП казначейства: когда начинать перевыпуск, какие документы нужны, чем отзыв отличается от аннулирования и что делать при компрометации ключа подписи.">
<meta name="author" content="Ярослав Михайлов">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1">
<meta name="theme-color" content="#F4F1EB" media="(prefers-color-scheme: light)">
<meta name="theme-color" content="#141310" media="(prefers-color-scheme: dark)">
<!-- PROD: canonical и og:url ОБЯЗАТЕЛЬНО менять под URL каждой статьи -->
<link rel="canonical" href="https://kaznaexpert.ru/baza-znaniy/kak-prodlit-i-otozvat-ecp-kaznachejstva/">
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
<script>window.YM_PARAMS = {page_type:"cluster", cluster:"ecp"};</script>

<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "Article", "headline": "Продление ЭЦП казначейства: как продлить и отозвать сертификат", "description": "Продление ЭЦП казначейства: когда начинать перевыпуск, какие документы нужны, чем отзыв отличается от аннулирования и что делать при компрометации ключа подписи.", "inLanguage": "ru-RU", "datePublished": "2026-06-09", "dateModified": "2026-08-31", "author": {"@type": "Person", "name": "Ярослав Михайлов", "jobTitle": "Главный эксперт по казначейскому сопровождению", "url": "https://kaznaexpert.ru/komanda/mihailov-yaroslav/", "@id": "https://kaznaexpert.ru/komanda/mihailov-yaroslav/#person", "image": "https://kaznaexpert.ru/img/team/mihailov-photo.jpg"}, "publisher": {"@type": "Organization", "name": "КазнаЭксперт", "url": "https://kaznaexpert.ru", "logo": {"@type": "ImageObject", "url": "https://kaznaexpert.ru/img/logogold.png"}, "@id": "https://kaznaexpert.ru/#organization"}, "image": ["https://kaznaexpert.ru/img/og/baza-znaniy__kak-prodlit-i-otozvat-ecp-kaznachejstva-16x9.jpg", "https://kaznaexpert.ru/img/og/baza-znaniy__kak-prodlit-i-otozvat-ecp-kaznachejstva-4x3.webp", "https://kaznaexpert.ru/img/og/baza-znaniy__kak-prodlit-i-otozvat-ecp-kaznachejstva-1x1.webp"], "mainEntityOfPage": {"@type": "WebPage", "@id": "https://kaznaexpert.ru/baza-znaniy/kak-prodlit-i-otozvat-ecp-kaznachejstva/"}, "citation": ["https://www.consultant.ru/document/cons_doc_LAW_112701/", "https://crl.roskazna.ru/crl/", "https://roskazna.gov.ru/"]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "Главная", "item": "https://kaznaexpert.ru/"}, {"@type": "ListItem", "position": 2, "name": "База знаний", "item": "https://kaznaexpert.ru/baza-znaniy/"}, {"@type": "ListItem", "position": 3, "name": "Как продлить и отозвать ЭЦП казначейства"}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [{"@type": "Question", "name": "Как продлить ЭЦП через казначейство?", "acceptedAnswer": {"@type": "Answer", "text": "Продление — это перевыпуск: через ФЗС УЦ ФК формируют запрос на новый сертификат, проверяют данные, прикладывают документы и после выпуска устанавливают сертификат на носитель. Запускать процедуру нужно заранее, до истечения срока."}}, {"@type": "Question", "name": "Какой срок действия у сертификата казначейства?", "acceptedAnswer": {"@type": "Answer", "text": "Единой цифры закон не устанавливает: продолжительность определяет удостоверяющий центр, а даты начала и окончания срока действия обязательно содержатся в самом сертификате — это требование пункта 1 части 2 статьи 14 Федерального закона № 63-ФЗ. Ориентируйтесь на дату окончания в свойствах своего сертификата."}}, {"@type": "Question", "name": "За сколько до окончания продлевать сертификат?", "acceptedAnswer": {"@type": "Answer", "text": "Заранее. Ориентир по практике УЦ ФК — обращаться за перевыпуском не позднее чем за 20 рабочих дней до окончания срока, чтобы успеть пройти проверку и выпуск."}}, {"@type": "Question", "name": "Как отозвать сертификат ЭЦП?", "acceptedAnswer": {"@type": "Answer", "text": "Подать в УЦ ФК заявление на прекращение действия (аннулирование) сертификата. Удостоверяющий центр вносит сведения о нём в список аннулированных сертификатов, после чего подпись считается недействительной."}}, {"@type": "Question", "name": "Когда нужно отзывать сертификат?", "acceptedAnswer": {"@type": "Answer", "text": "При увольнении или смене подписанта, компрометации либо утере ключа, изменении данных владельца, а также если сертификат больше не нужен. При компрометации — немедленно."}}, {"@type": "Question", "name": "Что будет, если сертификат истёк?", "acceptedAnswer": {"@type": "Answer", "text": "Подпись перестаёт действовать: войти в «Электронный бюджет», подписать сведения и платёжные документы и пройти санкционирование не получится, пока не выпущен новый сертификат."}}, {"@type": "Question", "name": "Чем отличается перевыпуск от отзыва?", "acceptedAnswer": {"@type": "Answer", "text": "Перевыпуск — выпуск нового сертификата взамен истекающего, чтобы продолжать работу. Отзыв — досрочное прекращение действия сертификата, чтобы им нельзя было подписывать."}}, {"@type": "Question", "name": "Где продлевать — в казначействе или в ФНС?", "acceptedAnswer": {"@type": "Answer", "text": "Сертификаты для работы в системах казначейства перевыпускает УЦ Федерального казначейства. Базовую подпись руководителя юрлица/ИП — УЦ ФНС. Уточните, какой именно сертификат у вас истекает."}}, {"@type": "Question", "name": "Нужно ли менять носитель при перевыпуске?", "acceptedAnswer": {"@type": "Answer", "text": "Не обязательно: часто новый сертификат записывают на тот же носитель. Менять токен нужно при его неисправности или по требованиям к носителю; тогда возможен перевыпуск."}}, {"@type": "Question", "name": "Кто поможет с продлением и отзывом подписи?", "acceptedAnswer": {"@type": "Answer", "text": "Сопровождение электронной подписи — контроль сроков, перевыпуск, отзыв, оформление МЧД — можно передать эксперту. Оставьте заявку: поможем, чтобы подпись не блокировала операции по контракту."}}, {"@type": "Question", "name": "Чем отзыв подписи отличается от аннулирования сертификата?", "acceptedAnswer": {"@type": "Answer", "text": "То, что называют отзывом, — это прекращение действия сертификата по части 6 статьи 14 закона № 63-ФЗ: по сроку, по заявлению владельца или при прекращении деятельности центра. Аннулирование по части 6.1 — решение самого удостоверяющего центра, когда не подтверждено владение ключом, ключ проверки дублирует ранее выданный сертификат или суд установил недостоверность сведений."}}, {"@type": "Question", "name": "С какого момента сертификат перестаёт действовать?", "acceptedAnswer": {"@type": "Answer", "text": "С момента внесения записи в реестр сертификатов. Часть 7 статьи 14 закона № 63-ФЗ даёт удостоверяющему центру двенадцать часов на такую запись с момента наступления обстоятельств или с момента, когда центру о них стало известно. До записи сертификат формально продолжает действовать."}}, {"@type": "Question", "name": "Что делать, если носитель с ключом потерян?", "acceptedAnswer": {"@type": "Answer", "text": "Немедленно прекратить использование ключа и не позднее одного рабочего дня уведомить удостоверяющий центр — так требует пункт 1 статьи 10 закона № 63-ФЗ. Затем подать заявление о прекращении действия сертификата и только после этого выпускать новый: перевыпуск сам по себе старую подпись не отключает."}}, {"@type": "Question", "name": "Останутся ли действительными документы, подписанные до отзыва?", "acceptedAnswer": {"@type": "Answer", "text": "Если сертификат прекратил действие по сроку или по заявлению, ранее подписанные документы сохраняют силу: по статье 11 закона № 63-ФЗ сертификат должен быть действителен на момент подписания. Поэтому важно хранить подтверждение этого момента — протоколы систем, квитанции, штампы времени."}}, {"@type": "Question", "name": "Можно ли подать заявление на прекращение действия сертификата на бумаге?", "acceptedAnswer": {"@type": "Answer", "text": "Да. Часть 6 статьи 14 закона № 63-ФЗ прямо допускает заявление как в форме электронного документа, так и на бумажном носителе, а процедуры в удостоверяющем центре казначейства описаны пунктами 29–34 Порядка по приказу Казначейства России от 15.06.2021 № 21н. Бумажный путь используют, когда доступ к системе уже утрачен."}}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "HowTo", "name": "Как продлить (перевыпустить) сертификат УЦ Федерального казначейства", "inLanguage": "ru-RU", "step": [{"@type": "HowToStep", "position": 1, "name": "Проверить срок", "text": "Уточнить дату окончания текущего сертификата."}, {"@type": "HowToStep", "position": 2, "name": "Подготовить рабочее место", "text": "Проверить СКЗИ, плагин, драйверы носителя и корневые сертификаты."}, {"@type": "HowToStep", "position": 3, "name": "Сформировать запрос", "text": "Создать запрос на новый сертификат через ФЗС УЦ ФК."}, {"@type": "HowToStep", "position": 4, "name": "Подтвердить данные", "text": "Проверить сведения о владельце и организации, приложить документы."}, {"@type": "HowToStep", "position": 5, "name": "Дождаться выпуска", "text": "УЦ ФК проверяет запрос и выпускает новый сертификат."}, {"@type": "HowToStep", "position": 6, "name": "Установить и проверить", "text": "Записать сертификат на носитель, проверить подпись и вход в системы."}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "DefinedTerm", "name": "Аннулирование сертификата", "description": "Досрочное прекращение действия квалифицированного сертификата электронной подписи удостоверяющим центром с внесением сведений в список аннулированных сертификатов (отзыв ЭЦП).", "inDefinedTermSet": "https://kaznaexpert.ru/baza-znaniy/glossary/"}
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
<meta property="og:title" content="Продление ЭЦП казначейства: как продлить и отозвать сертификат">
<meta property="og:description" content="Продление ЭЦП казначейства: когда начинать перевыпуск, какие документы нужны, чем отзыв отличается от аннулирования и что делать при компрометации ключа подписи.">
<meta property="og:url" content="https://kaznaexpert.ru/baza-znaniy/kak-prodlit-i-otozvat-ecp-kaznachejstva/">
<meta property="og:image" content="https://kaznaexpert.ru/img/og/baza-znaniy__kak-prodlit-i-otozvat-ecp-kaznachejstva-16x9.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="675">
<meta property="og:image:alt" content="Как продлить и отозвать ЭЦП казначейства в 2026 — КазнаЭксперт">
<meta property="article:published_time" content="2026-06-09T09:00:00+03:00">
<meta property="article:modified_time" content="2026-08-31T09:00:00+03:00">
<meta property="article:author" content="https://kaznaexpert.ru/komanda/mihailov-yaroslav/">
<meta property="article:section" content="База знаний">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Продление ЭЦП казначейства: как продлить и отозвать сертификат">
<meta name="twitter:description" content="Продление ЭЦП казначейства: когда начинать перевыпуск, какие документы нужны, чем отзыв отличается от аннулирования и что делать при компрометации ключа подписи.">
<meta name="twitter:image" content="https://kaznaexpert.ru/img/og/baza-znaniy__kak-prodlit-i-otozvat-ecp-kaznachejstva-16x9.jpg">


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
  <nav class="crumbs" aria-label="Хлебные крошки"><a href="/">Главная</a> › <a href="/baza-znaniy/">База знаний</a> › Как продлить и отозвать ЭЦП казначейства</nav>

  <aside class="toc" aria-label="Содержание">
    <div class="toc__label">Содержание</div>
    <ul class="toc__list" id="tocList">
      <li><a href="#chto-takoe">Продлить и отозвать — что это</a></li>
      <li><a href="#srok">Срок действия сертификата</a></li>
      <li><a href="#prodlenie">Как продлить (перевыпуск)</a></li>
      <li><a href="#dokumenty">Документы для перевыпуска</a></li>
      <li><a href="#otzyv">Как отозвать (аннулировать)</a></li>
      <li><a href="#istek">Сертификат истёк</a></li><li><a href="#zamena">Замена носителя и смена сотрудника</a></li>
      <li><a href="#fns">УЦ Казначейства или УЦ ФНС</a></li>
      <li><a href="#oshibki">Частые ошибки</a></li>
      <li><a href="#keys">Пример из практики</a></li>
      <li><a href="#glossary">Глоссарий</a></li>
      <li><a href="#faq">Частые вопросы</a></li>
      <li><a href="#prekrashchenie-vs-annulirovanie">Прекращение и аннулирование: два разных механизма</a></li>
      <li><a href="#komprometaciya">Компрометация ключа: порядок действий по часам</a></li>
      <li><a href="#dokumenty-do-otzyva">Что происходит с документами, подписанными до отзыва</a></li>
    </ul>
  </aside>

  <article class="content" id="main">
    <div class="hero">
      <img class="hero__crest hero__crest--light" src="/img/logogold-crest.webp" alt="" aria-hidden="true" width="188" height="137" decoding="async" loading="lazy">
      <img class="hero__crest hero__crest--dark" src="/img/LogoWhite.png" alt="" aria-hidden="true" width="188" height="137" decoding="async" loading="lazy">
      <div class="eyebrow">База знаний · ГИИС и ЭЦП <span class="fresh">Актуально на август 2026</span></div>
    <h1>Продление ЭЦП казначейства: как продлить, отозвать и заменить сертификат в 2026</h1>
    <div class="byline"><span class="av">ЯМ</span><span>Автор: <a href="/komanda/mihailov-yaroslav/">Ярослав Михайлов</a>, главный эксперт</span><span class="dot">·</span><span>15+ лет в Казначействе</span><span class="dot">·</span><span>13 мин чтения</span><span class="dot">·</span><span>Обновлено 31 августа 2026</span></div>
    </div>

    <div class="share">
      <span class="share__label">Поделиться:</span>
      <a href="https://t.me/share/url?url=https%3A%2F%2Fkaznaexpert.ru%2Fbaza-znaniy%2Fkak-prodlit-i-otozvat-ecp-kaznachejstva%2F&amp;text=%D0%9A%D0%B0%D0%BA%20%D0%BF%D1%80%D0%BE%D0%B4%D0%BB%D0%B8%D1%82%D1%8C%20%D0%B8%20%D0%BE%D1%82%D0%BE%D0%B7%D0%B2%D0%B0%D1%82%D1%8C%20%D0%AD%D0%A6%D0%9F%20%D0%BA%D0%B0%D0%B7%D0%BD%D0%B0%D1%87%D0%B5%D0%B9%D1%81%D1%82%D0%B2%D0%B0%20%D0%B2%202026" target="_blank" rel="noopener"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.56 8.25l-1.86 8.76c-.14.62-.5.77-1.02.48l-2.82-2.08-1.36 1.31c-.15.15-.28.28-.57.28l.2-2.89 5.27-4.76c.23-.2-.05-.32-.35-.12l-6.51 4.1-2.8-.88c-.61-.19-.62-.61.13-.9l10.95-4.22c.5-.18.95.12.79.85z"/></svg>Telegram</a>
      <button type="button" id="copyLink"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.07 0l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.07 0l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg><span>Копировать ссылку</span></button>
      <button type="button" id="printBtn"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9V2h12v7M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2M6 14h12v8H6z"/></svg>Скачать PDF</button>
    </div>

    <details class="mtoc"><summary>Содержание статьи</summary>
      <ol>
        <li><a href="#chto-takoe">Продлить и отозвать — что это</a></li><li><a href="#srok">Срок действия сертификата</a></li><li><a href="#prodlenie">Как продлить (перевыпуск)</a></li><li><a href="#dokumenty">Документы для перевыпуска</a></li><li><a href="#otzyv">Как отозвать (аннулировать)</a></li><li><a href="#istek">Сертификат истёк</a></li><li><a href="#zamena">Замена носителя и смена сотрудника</a></li><li><a href="#fns">УЦ Казначейства или УЦ ФНС</a></li><li><a href="#oshibki">Частые ошибки</a></li><li><a href="#keys">Пример из практики</a></li><li><a href="#glossary">Глоссарий</a></li><li><a href="#faq">Частые вопросы</a></li><li><a href="#prekrashchenie-vs-annulirovanie">Прекращение и аннулирование: два разных механизма</a></li><li><a href="#komprometaciya">Компрометация ключа: порядок действий по часам</a></li><li><a href="#dokumenty-do-otzyva">Что происходит с документами, подписанными до отзыва</a></li></ol>
    </details>

    <div class="tldr">Продлить ЭЦП казначейства — значит вовремя выпустить новый квалифицированный сертификат взамен истекающего (перевыпуск); «доливки» срока к старому сертификату не бывает. Отозвать сертификат — значит досрочно прекратить его действие (аннулировать). И выпуск, и аннулирование выполняет удостоверяющий центр Федерального казначейства по Федеральному закону № 63-ФЗ «Об электронной подписи» и Регламенту УЦ ФК. Срок сертификата ограничен и указан в нём самом, перевыпуск запускают заранее.<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a></div>

    <section class="keyfacts grain" aria-label="Ключевые факты">
      <h2>Коротко о главном</h2>
      <div class="keyfacts__grid">
        <div class="kf"><div class="kf__n">УЦ ФК</div><div class="kf__t"><b>Выдаёт и аннулирует</b> — удостоверяющий центр Казначейства</div></div>
        <div class="kf"><div class="kf__n">~15 мес</div><div class="kf__t"><b>Срок</b> — точная дата указана в самом сертификате</div></div>
        <div class="kf"><div class="kf__n">≥20 р.д.</div><div class="kf__t"><b>Продление</b> — обращаться заранее, до истечения</div></div>
        <div class="kf"><div class="kf__n">перевыпуск</div><div class="kf__t"><b>Продлить</b> = выпустить новый сертификат</div></div>
        <div class="kf"><div class="kf__n">аннулир.</div><div class="kf__t"><b>Отозвать</b> — внесение в список аннулированных (СОС)</div></div>
        <div class="kf"><div class="kf__n">63-ФЗ</div><div class="kf__t"><b>Правовая основа</b> — закон «Об электронной подписи»</div></div>
      </div>
    </section>
    <!-- svc-cta:top -->
    <div class="svc-cta svc-cta--top" role="complementary" aria-label="Услуга КазнаЭксперт"><div class="svc-cta__body"><span class="svc-cta__eyebrow">Топ-услуга · обучение</span><p class="svc-cta__title">Научим вести казначейское сопровождение самостоятельно</p><p class="svc-cta__text">9 академических часов один на один с экспертом Федерального казначейства — на ваших контрактах: счёт, «Электронный бюджет», сведения и коды, санкционирование, раздельный учёт. После курса вы ведёте контракт сами, без отказов.</p><span class="svc-cta__price">150 000 ₽ · индивидуально</span></div><a class="svc-cta__btn" href="/uslugi/obuchenie-kaznacheyskomu-soprovozhdeniyu/" onclick="try{ym(94305898,'reachGoal','svccta_click',{svc:'obuchenie',pos:'top'})}catch(e){}">Записаться на обучение →</a></div>
    <!-- /svc-cta:top -->


    <h2 id="chto-takoe">Что значит продлить и отозвать ЭЦП казначейства</h2>
    <div class="answer reveal">
      <p class="lead-p">Продлить ЭЦП казначейства — значит вовремя выпустить новый квалифицированный сертификат взамен истекающего: «продления» как доливки срока к старому сертификату не существует, происходит перевыпуск. Отозвать сертификат — значит прекратить его действие досрочно (аннулировать), чтобы им нельзя было подписывать документы. И выпуск, и аннулирование сертификатов выполняет удостоверяющий центр Федерального казначейства (УЦ ФК) по правилам Федерального закона № 63-ФЗ «Об электронной подписи» и Регламента УЦ ФК.<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a></p>
    </div>
    <p>Пошаговая подача первичного запроса разобрана в материале про <a href="/baza-znaniy/portal-zayavitelya-kaznachejstva/">портал заявителя ФЗС</a>.</p>
    
      <p>Для исполнителя под казначейским сопровождением это не формальность: истёкший или отозванный сертификат блокирует вход в «Электронный бюджет», подписание сведений и платёжных документов, прохождение санкционирования. Поэтому жизненным циклом подписи — сроком, перевыпуском, отзывом и заменой носителя — нужно управлять заранее, а не в день, когда платёж уже нужно подписать. Как получить сертификат впервые — в базовом разборе <a href="/baza-znaniy/sertifikat-ecp-kaznachejstvo/">«Сертификат и ЭЦП казначейства: как получить»</a>; эта статья — про то, что делать дальше.</p>

    <h2 id="srok">Срок действия сертификата и когда начинать продление</h2>
    <div class="answer reveal">
      <p>Квалифицированный сертификат выдаётся на ограниченный срок, но единой цифры закон не задаёт. По пункту 1 части 2 статьи 14 Федерального закона № 63-ФЗ сертификат обязательно содержит даты начала и окончания срока действия, а конкретную продолжительность определяет удостоверяющий центр. Ориентироваться нужно на дату окончания в свойствах самого сертификата, а не на расхожие цифры из интернета. Ограничение срока связано с требованиями к средствам криптозащиты: ключ не может действовать бессрочно. Заранее отслеживать дату — обязанность владельца, потому что по истечении сертификат перестаёт работать без предупреждения.</p>
      <h3 id="za-skolko-dnej-perevypusk">За сколько дней запускать перевыпуск</h3>
      <p>Перевыпуск стоит запускать не в последний момент, а заранее — ориентир по практике УЦ ФК: обращаться не позднее чем за 20 рабочих дней до окончания срока. Этого запаса хватает на проверку документов, выпуск нового сертификата и установку, даже если что-то пойдёт не так с рабочим местом или носителем.</p>
      <h3 id="redakciya-63fz-i-uc">Закон № 63-ФЗ: действующая редакция и чей удостоверяющий центр</h3>
      <p>Сверка на 4 августа 2026 года: Федеральный закон от 06.04.2011 № 63-ФЗ «Об электронной подписи» действует в редакции от 31.07.2025, порядок выпуска и досрочного прекращения действия квалифицированных сертификатов не менялся. Напомним основание, по которому сертификаты для организаций бюджетной сферы выдаёт именно удостоверяющий центр Федерального казначейства: статья 17.2 закона № 63-ФЗ относит к его компетенции квалифицированные сертификаты для лиц, замещающих государственные должности, должностных лиц государственных органов и органов местного самоуправления, а также их подведомственных организаций. Коммерческий исполнитель контракта получает подпись в удостоверяющем центре ФНС России или у его доверенных лиц — это разные контуры, и перепутать их при перевыпуске нельзя.</p>
    </div>
    <h3 id="srok-i-kontrol-svodka">Срок действия и контроль: сводная таблица</h3>
    <table>
      <caption>Срок действия и контроль сертификата</caption>
      <tr><th>Параметр</th><th>Значение</th></tr>
      <tr><td>Срок действия</td><td>Ограничен; даты начала и окончания указаны в самом сертификате (п. 1 ч. 2 ст. 14 № 63-ФЗ)</td></tr>
      <tr><td>Когда начинать перевыпуск</td><td>Заранее, ориентир — не позднее чем за 20 рабочих дней</td></tr>
      <tr><td>Что будет при истечении</td><td>Подпись перестаёт действовать, операции блокируются</td></tr>
      <tr><td>Кто контролирует срок</td><td>Владелец сертификата (организация)</td></tr>
    </table>
    <h3 id="kak-ne-propustit-datu">Как не пропустить дату окончания</h3>
    <div class="note"><b>Совет.</b> Поставьте напоминание за 1–1,5 месяца до даты окончания на каждый сертификат. Если в организации несколько подписантов, ведите простой реестр сертификатов с датами — это снимает риск «внезапно истёкшей» подписи у ключевого сотрудника.</div>

    <h2 id="prodlenie">Как продлить (перевыпустить) сертификат: пошагово</h2>
    <div class="answer reveal">
      <p>Плановый перевыпуск проще первичного получения: рабочее место уже настроено, а часть данных подтягивается из прежнего сертификата. Заявление формируется через ФЗС УЦ ФК; при неизменных данных процедура во многом дистанционная. Ниже — общая логика; точные шаги интерфейса сверяйте с памяткой своего территориального органа казначейства.</p>
    </div>
    <table>
      <caption>Перевыпуск (продление) сертификата УЦ ФК</caption>
      <tr><th>Шаг</th><th>Что сделать</th></tr>
      <tr><td>1. Проверить срок</td><td>Уточнить дату окончания текущего сертификата</td></tr>
      <tr><td>2. Подготовить АРМ</td><td>Проверить СКЗИ, плагин, драйверы носителя, корневые сертификаты</td></tr>
      <tr><td>3. Сформировать запрос</td><td>Создать запрос на новый сертификат через ФЗС УЦ ФК</td></tr>
      <tr><td>4. Подтвердить данные</td><td>Проверить сведения о владельце и организации, приложить документы</td></tr>
      <tr><td>5. Дождаться выпуска</td><td>УЦ ФК проверяет запрос и выпускает новый сертификат</td></tr>
      <tr><td>6. Установить и проверить</td><td>Записать сертификат на носитель, проверить подпись и вход в системы</td></tr>
    </table>
    <div class="note"><b>Важно.</b> Если в данных владельца или организации что-то изменилось (ФИО, должность, реквизиты), дистанционный перевыпуск может быть недоступен — потребуется личное обращение с подтверждающими документами. Уточняйте это до того, как старый сертификат истечёт.</div>

    <h2 id="dokumenty">Документы для перевыпуска</h2>
    <div class="answer reveal">
      <p>Комплект зависит от того, плановый это перевыпуск или со сменой данных, и от статуса заявителя. В типовой набор входят заявление на сертификат, документы, удостоверяющие личность и полномочия владельца, и согласие на обработку данных. Точный перечень закреплён Регламентом УЦ ФК и памятками территориальных органов казначейства.<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a></p>
    </div>
    <table>
      <caption>Типовой комплект для перевыпуска</caption>
      <tr><th>Документ</th><th>Назначение</th></tr>
      <tr><td>Заявление на сертификат</td><td>Запрос на выпуск нового сертификата</td></tr>
      <tr><td>Документ, удостоверяющий личность</td><td>Идентификация владельца сертификата</td></tr>
      <tr><td>Документы о полномочиях</td><td>Подтверждение должности/права действовать от организации</td></tr>
      <tr><td>Согласие на обработку данных</td><td>Обработка персональных данных владельца</td></tr>
    </table>

    <h2 id="otzyv">Как отозвать (аннулировать) сертификат</h2>
    <div class="answer reveal">
      <p>Отзыв (аннулирование, прекращение действия) сертификата нужен, когда подпись больше не должна работать: сотрудник уволился, ключ скомпрометирован или утерян, изменились данные владельца, либо организация прекращает работу с системой. Владелец или организация подаёт в УЦ ФК заявление на прекращение действия сертификата, после чего удостоверяющий центр вносит сведения о нём в список аннулированных сертификатов (СОС). С этого момента подпись считается недействительной.<a class="fn" href="#ref-2" aria-label="Источник 2">[2]</a></p>
      <p>Отозвать сертификат важно не откладывая: пока он действует, им технически можно подписывать документы. Особенно критичны случаи компрометации ключа и увольнения подписанта — здесь промедление создаёт прямой риск несанкционированных операций.</p>
    </div>
    <table>
      <caption>Когда нужно отозвать сертификат</caption>
      <tr><th>Ситуация</th><th>Почему отзывают</th></tr>
      <tr><td>Увольнение/смена подписанта</td><td>Сотрудник теряет право подписывать от организации</td></tr>
      <tr><td>Компрометация или утеря ключа</td><td>Риск несанкционированного использования подписи</td></tr>
      <tr><td>Изменение данных владельца</td><td>Сертификат содержит неактуальные сведения</td></tr>
      <tr><td>Прекращение работы с системой</td><td>Сертификат больше не нужен</td></tr>
    </table>
    <div class="note"><b>Внимание.</b> При компрометации ключа подавайте заявление на аннулирование немедленно — это снижает риск того, что подписью воспользуются для проведения операций. После отзыва для дальнейшей работы выпускают новый сертификат.</div>

    <h2 id="istek">Сертификат истёк: что встаёт и как быстро вернуться в строй</h2>
<div class="answer reveal" data-ctx="p63-ecp-istek"><p class="lead-p">Истёкший сертификат не «слегка мешает» — он выключает организацию из электронного документооборота. Подписать распоряжение, сведения об операциях или отчёт этой подписью уже нельзя: средство подписи откажет на этапе формирования документа, а не на приёме в казначействе. Внешне это выглядит как поломка рабочего места, хотя причина административная — просто закончился срок.</p>
<h3 id="pochemu-dokument-ne-dohodit">Почему документ не доходит до казначейства</h3>
<p>Отсюда важное различие, которое снимает половину паники. Проблема не в том, что казначейство «не принимает подпись», а в том, что документ вообще не будет подписан и, значит, не дойдёт до контроля. Всё, что было подписано до даты окончания, остаётся действительным: по статье 11 закона № 63-ФЗ подпись признаётся действительной, если сертификат был действителен на момент подписания документа. Продлевать сертификат «задним числом» нельзя и не нужно — нужен новый.</p>
<h3 id="priznaki-i-dejstviya">Признаки и действия при истёкшем сертификате</h3>
<table class="ctab"><caption>Что происходит при истёкшем сертификате</caption><thead><tr><th>Признак</th><th>Что на самом деле</th><th>Действие</th></tr></thead><tbody>
<tr><td class="cd">Средство подписи не подписывает документ, ошибка «сертификат недействителен»</td><td>истёк срок действия либо сертификат прекращён</td><td>проверить даты в свойствах сертификата, запускать перевыпуск</td></tr>
<tr><td class="cd">Не проходит вход в личный кабинет системы</td><td>вход выполняется по сертификату, срок которого закончился</td><td>перевыпуск; временно — вход другого сотрудника с действующим сертификатом</td></tr>
<tr><td class="cd">Ранее подписанные документы остались в работе</td><td>подпись под ними действительна на момент подписания</td><td>ничего переподписывать не требуется</td></tr>
<tr><td class="cd">Ошибка при проверке цепочки доверия, срок сертификата в порядке</td><td>это не истечение, а проблема с корневыми сертификатами или списком отзыва</td><td>обновить корневые сертификаты и списки отзыва на рабочем месте</td></tr>
</tbody></table>
<h3 id="platezhi-pri-istyokshem">Что происходит с платежами по контракту</h3>
<p>Отдельно про деньги. Пока в организации нет действующей подписи уполномоченного лица, останавливается вся цепочка платежей по сопровождаемому контракту: не подписываются распоряжения, не утверждаются сведения об операциях с целевыми средствами, не уходит отчётность. Формально это не отказ казначейства — до контроля документ не доходит, — но результат для подрядчика тот же, что и при возврате распоряжения: срок оплаты идёт, деньги стоят. Какие основания даёт территориальному органу отказать в санкционировании уже поступившего документа, разобрано в материале о <a href="/baza-znaniy/prichiny-otkaza-kaznacheystva-v-sankcionirovanii/">причинах отказа казначейства</a>.</p>
<h3>Порядок действий, когда срок уже вышел</h3>
<ol class="ol">
<li><b>Проверить, что именно закончилось.</b> В свойствах сертификата — дата окончания; если она в прошлом, вопрос закрыт. Если дата в порядке, а подпись всё равно не работает, причина в рабочем месте: средство криптозащиты, плагин, драйверы носителя, корневые сертификаты.</li>
<li><b>Не ждать «как раньше».</b> Автоматического продления у квалифицированного сертификата нет: выпускается новый сертификат, а не продлевается старый. Процедура — та же, что при плановом перевыпуске.</li>
<li><b>Проверить актуальность сведений об организации и владельце.</b> Если сменились должность, фамилия или реквизиты, комплект документов будет шире, чем при неизменных данных, — это самая частая причина потери ещё нескольких дней.</li>
<li><b>Обеспечить непрерывность на время перевыпуска.</b> Второй сотрудник с действующим сертификатом и оформленными полномочиями закрывает разрыв. Если подписант в организации один, разрыв закрыть нечем — именно поэтому реестр сертификатов с датами окончания стоит вести заранее.</li>
<li><b>После выпуска — проверить всю связку.</b> Мало записать сертификат на носитель: нужно убедиться, что подпись проходит и вход в рабочие системы выполняется, до того, как подойдёт срок ближайшего платежа.</li>
</ol>
<h3 id="avarijnyj-perevypusk-sroki">Сколько занимает аварийный перевыпуск</h3>
<div class="note"><b>Практический ориентир.</b> Плановый перевыпуск занимает предсказуемое время, аварийный — нет: он попадает на конец месяца, на смену подписанта или на праздники. Поэтому напоминание за 20 рабочих дней до окончания срока — это не осторожность, а единственный способ не поставить платежи по контракту в зависимость от скорости обработки заявления.</div></div>

<h2 id="zamena">Замена носителя, смена сотрудника, реорганизация</h2>
    <div class="answer reveal">
      <p>Помимо планового перевыпуска и отзыва, на практике встречаются смежные ситуации, которые тоже затрагивают сертификат. При замене носителя (токена) обычно требуется записать ключ на новый носитель, а иногда — выпустить новый сертификат. При смене ответственного сотрудника старый сертификат отзывают, а новому выпускают свой. При реорганизации или смене реквизитов организации сертификаты с устаревшими данными аннулируют и выпускают актуальные.</p>
    </div>
    <table>
      <caption>Смежные ситуации и действия с сертификатом</caption>
      <tr><th>Ситуация</th><th>Что делать</th></tr>
      <tr><td>Замена носителя (токена)</td><td>Перенести/записать ключ; при необходимости — перевыпуск</td></tr>
      <tr><td>Смена ответственного сотрудника</td><td>Отозвать старый сертификат, выпустить новый на нового сотрудника</td></tr>
      <tr><td>Изменение реквизитов организации</td><td>Аннулировать сертификаты с устаревшими данными, выпустить новые</td></tr>
      <tr><td>Несколько систем у одного лица</td><td>Уточнить, нужен ли отдельный сертификат под конкретную систему</td></tr>
    </table>

    <h2 id="fns">УЦ Казначейства или УЦ ФНС: где продлевать</h2>
    <div class="answer reveal">
      <p>Здесь возникает частая путаница. Базовую подпись юрлица или ИП (для отчётности, торгов, общего документооборота) руководитель получает и продлевает в удостоверяющем центре ФНС. Сертификаты для работы непосредственно в системах казначейства по целевым средствам выпускает и перевыпускает УЦ Федерального казначейства. Сотрудники организации работают по личным подписям с оформленной машиночитаемой доверенностью (МЧД). Подробнее это разграничение разобрано в базовом материале <a href="/baza-znaniy/sertifikat-ecp-kaznachejstvo/">«Сертификат и ЭЦП казначейства»</a>.</p>
      <p>Практический вывод: продлевать нужно тот сертификат, которым вы реально подписываете документы в конкретной системе. Если истекает подпись для «Электронного бюджета», перевыпуск идёт через УЦ ФК; если базовая подпись руководителя — через УЦ ФНС. Прежде чем запускать процедуру, уточните в своём ТОФК, какой именно сертификат у вас истекает.</p>
    </div>

    <h2 id="oshibki">Частые ошибки</h2>
    <div class="answer reveal">
      <p>Большинство проблем с подписью — организационные: пропущенный срок, неотозванный сертификат уволенного сотрудника, отсутствие МЧД. Ниже — типичные ошибки и как их избежать.</p>
    </div>
    <table>
      <caption>Частые ошибки и решения</caption>
      <tr><th>Ошибка</th><th>Как правильно</th></tr>
      <tr><td>Спохватились в день истечения</td><td>Перевыпускать заранее (ориентир — за 20 рабочих дней)</td></tr>
      <tr><td>Не отозвали подпись уволенного</td><td>Аннулировать сертификат сразу при увольнении подписанта</td></tr>
      <tr><td>Не оформили МЧД на сотрудника</td><td>Готовить машиночитаемую доверенность заранее</td></tr>
      <tr><td>Перепутали УЦ ФК и УЦ ФНС</td><td>Уточнить, какой сертификат истекает и где его перевыпускать</td></tr>
      <tr><td>Не проверили вход после перевыпуска</td><td>Сразу проверить подпись и доступ в нужную систему</td></tr>
    </table>

    <h2 id="keys">Пример из практики</h2>
    <div class="answer reveal">
      <p>Типовая ситуация: у ответственного сотрудника сертификат для «Электронного бюджета» истекает в конце месяца, а в этот же период нужно подписать сведения и провести платежи. О сроке вспомнили за пару дней, рабочее место за это время «переехало» на новый компьютер без настроенного СКЗИ — в итоге перевыпуск и платежи сдвинулись. Правильный порядок обратный: дату окончания отслеживают заранее, перевыпуск запускают за несколько недель, а после выпуска сразу проверяют вход в систему. Тогда смена сертификата проходит незаметно и не останавливает операции по контракту.</p>
    </div>

    <p data-ctx="auto-ctx:mashinochitaemaya-doverennost-kaznachejstvo">Наряду со сроком сертификата важно следить и за сроком <a href="/baza-znaniy/mashinochitaemaya-doverennost-kaznachejstvo/">машиночитаемой доверенности</a>: по её истечении подписант теряет право подписывать документы от имени организации.</p>
    <p data-ctx="auto-ctx:pereoformlenie-licevogo-scheta-v-kaznachejstve">Смена подписанта затрагивает не только сертификат: одновременно меняют и <a href="/baza-znaniy/pereoformlenie-licevogo-scheta-v-kaznachejstve/">карточку образцов подписей при переоформлении лицевого счёта</a>.</p>
    <!-- p47:ctx-uc -->
    <p data-ctx="p47:udostoveryayushchiy-centr-kaznachejstva">Перевыпуск и отзыв проходят в том же центре, который выдал сертификат: как устроен <a href="/baza-znaniy/udostoveryayushchiy-centr-kaznachejstva/">удостоверяющий центр казначейства</a> и кому он выдаёт подписи, разобрано отдельно.</p>
<!-- p48:prekrashchenie-i-annulirovanie -->

    <h2 id="prekrashchenie-vs-annulirovanie">Прекращение и аннулирование: два разных механизма</h2>
    <p>В разговоре всё называют одним словом — «отозвать подпись». В законе это два разных события с разными основаниями и разными последствиями, и путаница между ними приводит к неверным заявлениям в удостоверяющий центр. Прекращение действия инициирует владелец или наступает срок. Аннулирование — решение самого центра, и поводы для него закрытые.</p>
    <h3 id="osnovaniya-prekrashcheniya-i-annulirovaniya">Основания прекращения и аннулирования</h3>
    <table>
      <thead><tr><th>Прекращение действия — часть 6 статьи 14 закона № 63-ФЗ</th><th>Аннулирование — часть 6.1 статьи 14</th></tr></thead>
      <tbody>
        <tr><td>Истёк установленный срок действия сертификата</td><td>Не подтверждено, что владелец сертификата владеет ключом электронной подписи, соответствующим ключу проверки в сертификате</td></tr>
        <tr><td>Подано заявление владельца — на бумажном носителе или в форме электронного документа</td><td>Ключ проверки из сертификата уже содержится в ином, ранее созданном сертификате</td></tr>
        <tr><td>Удостоверяющий центр прекратил деятельность без перехода функций другим лицам</td><td>Вступило в силу решение суда, которым установлено, что сертификат содержит недостоверную информацию</td></tr>
        <tr><td>Иные случаи, установленные законом, принятыми в соответствии с ним актами или соглашением центра с владельцем</td><td>—</td></tr>
      </tbody>
    </table>
    <h3 id="moment-prekrashcheniya-dejstviya">С какого момента сертификат перестаёт работать</h3>
    <p>Общее у обоих механизмов — момент, с которого сертификат перестаёт работать. Часть 7 статьи 14 закона № 63-ФЗ отводит удостоверяющему центру двенадцать часов на внесение записи в реестр сертификатов с момента наступления обстоятельств либо с момента, когда центру стало известно о них, и прямо указывает: действие сертификата прекращается с момента внесения записи. До этой записи прежняя подпись формально сохраняет силу, и это создаёт зазор, о котором стоит помнить при увольнении подписанта.</p>
    <h3 id="posledstviya-annulirovaniya">Чем аннулирование отличается по последствиям</h3>
    <p>При аннулировании закон добавляет обязанность центра предупредить: по части 9 статьи 14 до внесения записи в реестр владельцу направляется документ на бумаге или в электронной форме. Использование аннулированного сертификата юридических последствий не влечёт — кроме тех, что связаны с самим аннулированием.</p>
    <h3 id="procedury-po-prikazu-21n">Как обе процедуры оформлены в приказе № 21н</h3>
    <p>В удостоверяющем центре казначейства обе процедуры описаны пунктами 29–34 Порядка, утверждённого приказом Казначейства России от 15.06.2021 № 21н (зарегистрирован в Минюсте России 09.08.2021 № 64574, применяется с 1 января 2022 года). Прекращение действия производится в случаях, установленных частью 6 статьи 14 закона № 63-ФЗ; заявление владельца подаётся через информационную систему удостоверяющего центра либо на бумажном носителе в территориальный орган. Практический смысл этой развилки простой: если доступ к системе ещё есть — быстрее электронное заявление, если ключ уже недоступен или скомпрометирован — идут с бумагой, не дожидаясь восстановления доступа.</p>

    <h2 id="komprometaciya">Компрометация ключа: порядок действий по часам</h2>
    <p>Компрометация — это не обязательно взлом. Достаточно того, что носитель с ключом побывал у постороннего, потерялся, остался в чужом компьютере или уехал с уволенным сотрудником. Закон в этой ситуации требует не расследования, а скорости: по пункту 1 статьи 10 закона № 63-ФЗ участник электронного взаимодействия обязан не использовать ключ при наличии оснований полагать, что конфиденциальность нарушена, и уведомить удостоверяющий центр не позднее одного рабочего дня.</p>
    <h3 id="sroki-dejstvij-pri-komprometacii">Сроки действий при компрометации</h3>
    <table>
      <thead><tr><th>Когда</th><th>Что делаете</th><th>Основание</th></tr></thead>
      <tbody>
        <tr><td>Немедленно</td><td>Прекращаете использовать ключ и изымаете носитель из оборота. Ни одного документа этой подписью больше не подписывается</td><td>Пункт 1 статьи 10 закона № 63-ФЗ</td></tr>
        <tr><td>Не позднее одного рабочего дня</td><td>Уведомляете удостоверяющий центр и подаёте заявление о прекращении действия сертификата</td><td>Пункт 1 статьи 10; часть 6 статьи 14</td></tr>
        <tr><td>В течение двенадцати часов после того, как центру стало известно</td><td>Центр вносит запись в реестр сертификатов — с этого момента сертификат не действует</td><td>Часть 7 статьи 14</td></tr>
        <tr><td>Параллельно</td><td>Предупреждаете тех, кто принимает от вас документы, чтобы они не приняли подписанное в зазоре</td><td>Договорная и операционная дисциплина</td></tr>
        <tr><td>После</td><td>Выпускаете новый сертификат, меняете носитель, приводите в порядок полномочия в системах</td><td>Порядок по приказу № 21н</td></tr>
      </tbody>
    </table>
    <h3 id="perevypusk-ne-otmenyaet-otzyv">Перевыпуск не отменяет отзыв</h3>
    <p>Ошибка, которая встречается чаще прочих: организация сразу заказывает новую подпись и считает вопрос закрытым, а заявление о прекращении действия старой не подаёт. Пока записи в реестре нет, скомпрометированный сертификат остаётся действующим — им можно подписать документ, и формально такая подпись пройдёт проверку. Перевыпуск не отменяет отзыв, это два отдельных действия.</p>
    <h3 id="srok-uvedomleniya-odin-den">Почему нельзя тянуть с уведомлением</h3>
    <p>Вторая ошибка — тянуть с уведомлением до понедельника. Срок в один рабочий день установлен законом, и если между инцидентом и заявлением прошла неделя, объяснять этот промежуток придётся уже не удостоверяющему центру, а тем, кто будет разбирать последствия подписанных в этот период документов.</p>

    <h2 id="dokumenty-do-otzyva">Что происходит с документами, подписанными до отзыва</h2>
    <p>Вопрос возникает каждый раз, когда меняется подписант: не «рассыплется» ли всё, что он подписал раньше. Ответ следует из статьи 11 закона № 63-ФЗ. Подпись признаётся действительной, если сертификат был действителен на момент подписания документа — при условии, что есть достоверная информация об этом моменте, — либо на день проверки, если момент подписания определить нельзя.</p>
    <p>Отсюда две разные картины.</p>
    <h3 id="sudba-podpisannyh-dokumentov">Судьба документов: прекращение против аннулирования</h3>
    <ul>
      <li><b>Сертификат прекратил действие по сроку или по заявлению.</b> Документы, подписанные до записи в реестре, остаются подписанными: на момент подписания сертификат действовал. Важно только, чтобы этот момент подтверждался — журналом системы, штампом времени, протоколом обмена.</li>
      <li><b>Сертификат аннулирован.</b> Здесь строже: по части 9 статьи 14 использование аннулированного сертификата не влечёт юридических последствий, кроме связанных с аннулированием. Основания аннулирования — из части 6.1 статьи 14 — говорят о пороке самого сертификата, а не о смене человека.</li>
    </ul>
    <h3 id="dokazat-moment-podpisaniya">Как доказать момент подписания</h3>
    <p>Практический вывод для организации, работающей под казначейским сопровождением: ценность имеет не сам факт подписи, а возможность доказать момент подписания. Поэтому протоколы отправки документов в <a href="/baza-znaniy/elektronnyy-byudzhet-dlya-ispolnitelya-kontrakta/">«Электронном бюджете»</a> и квитанции о приёме документов сохраняют вместе с самими документами, а не удаляют «за ненадобностью» после закрытия месяца. Когда через год возникает спор о том, когда было направлено распоряжение, восстановить эту хронологию больше неоткуда.</p>
    <h3 id="smena-podpisanta-polnomochiya">Смена подписанта: полномочия не переносятся</h3>
    <p>И организационное следствие, о котором забывают при увольнениях. Прекращение действия сертификата не переносит полномочия: новому сотруднику нужен собственный сертификат, а его права в информационных системах и <a href="/baza-znaniy/kartochka-obrazcov-podpisey-kaznachejstvo/">карточка образцов подписей</a> оформляются отдельно. Пока это не сделано, расчёты по контракту стоят, а сроки оплаты продолжают идти.</p>

    <div class="takeaways">
      <h2>Что важно запомнить</h2>
      <ol>
        <li>«Продление» сертификата — это перевыпуск: выпускается новый сертификат взамен истекающего.</li>
        <li>Срок ограничен, но единой цифры в законе нет: даты начала и окончания указаны в самом сертификате, перевыпуск запускают заранее.</li>
        <li>Отзыв (аннулирование) прекращает действие сертификата досрочно; сведения вносятся в список аннулированных.</li>
        <li>Сертификат уволенного сотрудника и скомпрометированный ключ отзывают немедленно.</li>
        <li>Сертификаты для систем казначейства перевыпускает УЦ ФК; базовую подпись руководителя — УЦ ФНС.</li>
      </ol>
    </div>

    <h2 id="glossary">Глоссарий</h2>
    <dl class="gloss">
      <div><dt>УЦ ФК</dt><dd>Удостоверяющий центр Федерального казначейства — выдаёт и аннулирует сертификаты.</dd></div>
      <div><dt>Перевыпуск</dt><dd>Выпуск нового сертификата взамен истекающего («продление»).</dd></div>
      <div><dt>Аннулирование</dt><dd>Досрочное прекращение действия сертификата (отзыв).</dd></div>
      <div><dt>СОС</dt><dd>Список аннулированных сертификатов, публикуемый удостоверяющим центром.</dd></div>
      <div><dt>МЧД</dt><dd>Машиночитаемая доверенность для подписи сотрудника от имени организации.</dd></div>
      <div><dt>СКЗИ</dt><dd>Средство криптографической защиты информации на рабочем месте.</dd></div>
      <div><dt>УКЭП</dt><dd>Усиленная квалифицированная электронная подпись.</dd></div>
    </dl>

    <h2 id="faq">Частые вопросы</h2>
    <div class="faq">
      <details open><summary>Как продлить ЭЦП через казначейство?</summary><p>Продление — это перевыпуск: через ФЗС УЦ ФК формируют запрос на новый сертификат, проверяют данные, прикладывают документы и после выпуска устанавливают сертификат на носитель. Запускать процедуру нужно заранее, до истечения срока.</p></details>
      <details><summary>Какой срок действия у сертификата казначейства?</summary><p>Единой цифры закон не устанавливает: продолжительность определяет удостоверяющий центр, а даты начала и окончания срока действия обязательно содержатся в самом сертификате — это требование пункта 1 части 2 статьи 14 Федерального закона № 63-ФЗ. Ориентируйтесь на дату окончания в свойствах своего сертификата.</p></details>
      <details><summary>За сколько до окончания продлевать сертификат?</summary><p>Заранее. Ориентир по практике УЦ ФК — обращаться за перевыпуском не позднее чем за 20 рабочих дней до окончания срока, чтобы успеть пройти проверку и выпуск.</p></details>
      <details><summary>Как отозвать сертификат ЭЦП?</summary><p>Подать в УЦ ФК заявление на прекращение действия (аннулирование) сертификата. Удостоверяющий центр вносит сведения о нём в список аннулированных сертификатов, после чего подпись считается недействительной.</p></details>
      <details><summary>Когда нужно отзывать сертификат?</summary><p>При увольнении или смене подписанта, компрометации либо утере ключа, изменении данных владельца, а также если сертификат больше не нужен. При компрометации — немедленно.</p></details>
      <details><summary>Что будет, если сертификат истёк?</summary><p>Подпись перестаёт действовать: войти в «Электронный бюджет», подписать сведения и платёжные документы и пройти санкционирование не получится, пока не выпущен новый сертификат.</p></details>
      <details><summary>Чем отличается перевыпуск от отзыва?</summary><p>Перевыпуск — выпуск нового сертификата взамен истекающего, чтобы продолжать работу. Отзыв — досрочное прекращение действия сертификата, чтобы им нельзя было подписывать.</p></details>
      <details><summary>Где продлевать — в казначействе или в ФНС?</summary><p>Сертификаты для работы в системах казначейства перевыпускает УЦ Федерального казначейства. Базовую подпись руководителя юрлица/ИП — УЦ ФНС. Уточните, какой именно сертификат у вас истекает.</p></details>
      <details><summary>Нужно ли менять носитель при перевыпуске?</summary><p>Не обязательно: часто новый сертификат записывают на тот же носитель. Менять токен нужно при его неисправности или по требованиям к носителю; тогда возможен перевыпуск.</p></details>
      <details><summary>Кто поможет с продлением и отзывом подписи?</summary><p>Сопровождение электронной подписи — контроль сроков, перевыпуск, отзыв, оформление МЧД — можно передать эксперту. Оставьте заявку: поможем, чтобы подпись не блокировала операции по контракту.</p></details>
      <details><summary>Чем отзыв подписи отличается от аннулирования сертификата?</summary><p>То, что называют отзывом, — это прекращение действия сертификата по части 6 статьи 14 закона № 63-ФЗ: по сроку, по заявлению владельца или при прекращении деятельности центра. Аннулирование по части 6.1 — решение самого удостоверяющего центра, когда не подтверждено владение ключом, ключ проверки дублирует ранее выданный сертификат или суд установил недостоверность сведений.</p></details>
      <details><summary>С какого момента сертификат перестаёт действовать?</summary><p>С момента внесения записи в реестр сертификатов. Часть 7 статьи 14 закона № 63-ФЗ даёт удостоверяющему центру двенадцать часов на такую запись с момента наступления обстоятельств или с момента, когда центру о них стало известно. До записи сертификат формально продолжает действовать.</p></details>
      <details><summary>Что делать, если носитель с ключом потерян?</summary><p>Немедленно прекратить использование ключа и не позднее одного рабочего дня уведомить удостоверяющий центр — так требует пункт 1 статьи 10 закона № 63-ФЗ. Затем подать заявление о прекращении действия сертификата и только после этого выпускать новый: перевыпуск сам по себе старую подпись не отключает.</p></details>
      <details><summary>Останутся ли действительными документы, подписанные до отзыва?</summary><p>Если сертификат прекратил действие по сроку или по заявлению, ранее подписанные документы сохраняют силу: по статье 11 закона № 63-ФЗ сертификат должен быть действителен на момент подписания. Поэтому важно хранить подтверждение этого момента — протоколы систем, квитанции, штампы времени.</p></details>
      <details><summary>Можно ли подать заявление на прекращение действия сертификата на бумаге?</summary><p>Да. Часть 6 статьи 14 закона № 63-ФЗ прямо допускает заявление как в форме электронного документа, так и на бумажном носителе, а процедуры в удостоверяющем центре казначейства описаны пунктами 29–34 Порядка по приказу Казначейства России от 15.06.2021 № 21н. Бумажный путь используют, когда доступ к системе уже утрачен.</p></details>
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
        <li id="ref-1">Федеральный закон от 06.04.2011 № 63-ФЗ «Об электронной подписи» (порядок выдачи, действия и прекращения квалифицированных сертификатов) — <a href="https://www.consultant.ru/document/cons_doc_LAW_112701/" target="_blank" rel="noopener">consultant.ru</a></li>
        <li id="ref-2">Удостоверяющий центр Федерального казначейства: списки аннулированных сертификатов (СОС) — <a href="https://crl.roskazna.ru/crl/" target="_blank" rel="noopener">crl.roskazna.ru</a></li>
        <li id="ref-3">Регламент Удостоверяющего центра Федерального казначейства; смена сертификатов — <a href="https://roskazna.gov.ru/" target="_blank" rel="noopener">roskazna.gov.ru</a></li>
      </ol>
      <p class="refs__note">Материал носит справочный характер и не заменяет индивидуальную консультацию. Порядок выпуска, продления и аннулирования сертификатов устанавливается законом № 63-ФЗ и Регламентом УЦ Федерального казначейства и может уточняться; точный срок действия указывается в самом сертификате. Проверено экспертом КазнаЭксперт. Дата актуализации — 31 августа 2026.</p>
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
    <form class="railform" id="leadForm" novalidate data-endpoint="/php/lead.php" data-source="kak-prodlit-i-otozvat-ecp-kaznachejstva">
      <div class="railform__badge">Сопровождение ЭП</div>
      <h3 class="railform__title">Поможем с продлением и отзывом подписи</h3>
      <p class="railform__sub">Контроль сроков, перевыпуск, отзыв, МЧД — чтобы подпись не блокировала операции. Цена — после анализа задачи.</p>
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
    <a class="card reveal" href="/baza-znaniy/sertifikat-ecp-kaznachejstvo/"><div class="card__cover"><span>ЭЦП</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Сертификат и ЭЦП казначейства: как получить в 2026</h3><div class="card__meta">Электронная подпись · 16 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/licevoy-schet-71-kak-otkryt/"><div class="card__cover"><span>Счёт 71</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Как открыть лицевой счёт 71 в ТОФК</h3><div class="card__meta">Счёт · 14 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/chto-takoe-kaznacheyskoe-soprovozhdenie/"><div class="card__cover"><span>Основы казначейского сопровождения</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Казначейское сопровождение: что это и как работает в 2026</h3><div class="card__meta">Основы · 18 мин</div></div></a>
    <!-- auto-related:kornevye-sertifikaty-kaznachejstva --><a class="card reveal" href="/baza-znaniy/kornevye-sertifikaty-kaznachejstva/"><div class="card__cover"><span>Сертификаты</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Корневые сертификаты УЦ казначейства</h3><div class="card__meta">Подпись · 13 мин</div></div></a>
    <!-- auto-related:portal-zayavitelya-kaznachejstva --><a class="card reveal" href="/baza-znaniy/portal-zayavitelya-kaznachejstva/"><div class="card__cover"><span>ФЗС</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Портал заявителя казначейства (ФЗС): вход и заявка</h3><div class="card__meta">ЭЦП · 15 мин</div></div></a>
    <!-- auto-related:mashinochitaemaya-doverennost-kaznachejstvo --><a class="card reveal" href="/baza-znaniy/mashinochitaemaya-doverennost-kaznachejstvo/"><div class="card__cover"><span>МЧД</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Машиночитаемая доверенность (МЧД) для казначейства</h3><div class="card__meta">Сертификаты · 15 мин</div></div></a>
    <!-- auto-related:pereoformlenie-licevogo-scheta-v-kaznachejstve --><a class="card reveal" href="/baza-znaniy/pereoformlenie-licevogo-scheta-v-kaznachejstve/"><div class="card__cover"><span>Переоформление</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Переоформление лицевого счёта в казначействе: порядок 2026</h3><div class="card__meta">Лицевой счёт · 15 мин</div></div></a>
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

<section class="kz-sub" aria-labelledby="kzSubTitle" data-source="kak-prodlit-i-otozvat-ecp-kaznachejstva">
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
<link rel="stylesheet" href="/assets/svc-cta.css">
<link rel="stylesheet" href="/assets/kg-lead.css"><script src="/assets/kg-lead.js" defer></script>
</body>
</html>
