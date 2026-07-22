<?php header("Cache-Control: public, max-age=300, must-revalidate"); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Расходы на УСН при казначейском сопровождении: учёт затрат</title>
<meta name="description" content="Как упрощенец учитывает расходы по сопровождаемому контракту: закрытый перечень ст. 346.16 НК, момент признания, первичка для ФНС и казначейства, раздельный учёт.">
<meta name="author" content="Ярослав Михайлов">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1">
<meta name="theme-color" content="#F4F1EB" media="(prefers-color-scheme: light)">
<meta name="theme-color" content="#141310" media="(prefers-color-scheme: dark)">
<!-- PROD: canonical и og:url ОБЯЗАТЕЛЬНО менять под URL каждой статьи -->
<link rel="canonical" href="https://kaznaexpert.ru/baza-znaniy/uchet-rashodov-na-usn-pri-ks/">
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
{"@context": "https://schema.org", "@type": "Article", "headline": "Расходы на УСН при казначейском сопровождении: раздельный учёт и подтверждение затрат", "description": "Как упрощенец учитывает расходы по сопровождаемому контракту: закрытый перечень ст. 346.16 НК, момент признания, первичка для ФНС и казначейства, раздельный учёт.", "inLanguage": "ru-RU", "datePublished": "2026-07-20", "dateModified": "2026-07-20", "author": {"@type": "Person", "name": "Ярослав Михайлов", "jobTitle": "Главный эксперт по казначейскому сопровождению", "url": "https://kaznaexpert.ru/komanda/mihailov-yaroslav/"}, "publisher": {"@type": "Organization", "name": "КазнаЭксперт", "url": "https://kaznaexpert.ru", "logo": {"@type": "ImageObject", "url": "https://kaznaexpert.ru/img/logogold.png"}}, "image": "https://kaznaexpert.ru/img/og-image.png", "mainEntityOfPage": {"@type": "WebPage", "@id": "https://kaznaexpert.ru/baza-znaniy/uchet-rashodov-na-usn-pri-ks/"}, "citation": ["Налоговый кодекс РФ, глава 26.2: ст. 346.16 (перечень расходов и порядок признания основных средств), ст. 346.17 (кассовый метод, моменты признания), ст. 346.18 (минимальный налог, перенос убытка), ст. 346.24 (учёт в КУДиР).", "Приказ ФНС России от 07.11.2023 № ЕА-7-3/816@ — форма и порядок заполнения Книги учёта доходов и расходов (применяется с 2024 года).", "Федеральный закон от 12.07.2024 № 176-ФЗ — отмена повышенных ставок УСН с 01.01.2025; НДС для упрощенцев.", "Федеральный закон от 28.11.2025 № 425-ФЗ — снижение порога доходов для НДС на УСН до 20 млн рублей с 01.01.2026.", "Приказ Минфина России от 10.12.2021 № 210н (ред. от 27.06.2025) — порядок ведения раздельного учёта доходов и затрат участниками казначейского сопровождения.", "Бюджетный кодекс РФ, глава 24.4, ст. 242.23; Постановление Правительства РФ от 24.11.2021 № 2024 — Правила казначейского сопровождения средств.", "КоАП РФ, ст. 15.37.1 — ответственность за нарушение правил раздельного учёта при казначейском сопровождении (с 01.01.2026). КонсультантПлюс — https://www.consultant.ru/document/cons_doc_LAW_34661/"]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "Главная", "item": "https://kaznaexpert.ru/"}, {"@type": "ListItem", "position": 2, "name": "База знаний", "item": "https://kaznaexpert.ru/baza-znaniy/"}, {"@type": "ListItem", "position": 3, "name": "Расходы на УСН при сопровождении", "item": "https://kaznaexpert.ru/baza-znaniy/uchet-rashodov-na-usn-pri-ks/"}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [{"@type": "Question", "name": "Меняет ли казначейское сопровождение учёт расходов на УСН?", "acceptedAnswer": {"@type": "Answer", "text": "Нет. Расходы признаются по обычным правилам главы 26.2 НК: после фактической оплаты и только из перечня статьи 346.16. Сопровождение добавляет санкционирование платежей, но налоговых правил не меняет."}}, {"@type": "Question", "name": "Когда признавать расход, оплаченный с лицевого счёта?", "acceptedAnswer": {"@type": "Answer", "text": "На дату списания денег с лицевого счёта — её подтверждает выписка казначейства. Дата подачи распоряжения и дата санкционирования для налога значения не имеют."}}, {"@type": "Question", "name": "Можно ли учесть расход, который казначейство не санкционировало?", "acceptedAnswer": {"@type": "Answer", "text": "Если платёж не прошёл и деньги не списаны, оплаты не было — значит, по кассовому методу нет и расхода. Затрата, оплаченная с обычного расчётного счёта собственными средствами, признаётся в общем порядке."}}, {"@type": "Question", "name": "Любая ли затрата по контракту уменьшает налог на УСН?", "acceptedAnswer": {"@type": "Answer", "text": "Нет. Перечень расходов закрытый (пункт 1 статьи 346.16 НК): например, неустойки контрагентам и представительские расходы в него не входят и налоговую базу не уменьшают, даже если платёж прошёл санкционирование."}}, {"@type": "Question", "name": "Как подтверждать расходы по сопровождаемому контракту?", "acceptedAnswer": {"@type": "Answer", "text": "Теми же документами, что подавались в казначейство: договор, счёт, накладная или акт плюс выписка из лицевого счёта как доказательство оплаты. Отдельного «налогового» комплекта собирать не нужно."}}, {"@type": "Question", "name": "Как учитывать купленное для контракта оборудование?", "acceptedAnswer": {"@type": "Answer", "text": "Как основное средство: после оплаты и ввода в эксплуатацию стоимость списывается равными долями на конец каждого отчётного периода до конца года (пункт 3 статьи 346.16 НК), а не единовременно."}}, {"@type": "Question", "name": "Обязан ли упрощенец вести раздельный учёт по контракту?", "acceptedAnswer": {"@type": "Answer", "text": "Да. Обязанность вести раздельный учёт по каждому сопровождаемому контракту (приказ Минфина № 210н) не зависит от режима налогообложения; за отсутствие учёта с 01.01.2026 действует штраф по статье 15.37.1 КоАП — юрлицу до 500 000 рублей."}}, {"@type": "Question", "name": "Что такое минимальный налог и когда его платить?", "acceptedAnswer": {"@type": "Answer", "text": "Если налог по обычной ставке за год оказался меньше 1% от доходов, платится минимальный налог — 1% от доходов (пункт 6 статьи 346.18 НК). Разницу можно учесть в расходах следующих лет."}}, {"@type": "Question", "name": "Платит ли упрощенец НДС на сопровождаемом контракте в 2026 году?", "acceptedAnswer": {"@type": "Answer", "text": "При доходе свыше 20 млн рублей в год — да (порог снижен Федеральным законом от 28.11.2025 № 425-ФЗ). Выбор — пониженные ставки 5% или 7% без вычетов либо общие ставки с вычетами. Само сопровождение обязанности по НДС не создаёт."}}, {"@type": "Question", "name": "Убыток по контракту пропадает?", "acceptedAnswer": {"@type": "Answer", "text": "Нет. Убыток года переносится на будущие периоды в течение десяти лет (пункт 7 статьи 346.18 НК) и уменьшает базу прибыльных лет — типичная ситуация для длинных контрактов с закупкой в первый год."}}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "HowTo", "name": "Как учитывать расходы на УСН по сопровождаемому контракту", "inLanguage": "ru-RU", "step": [{"@type": "HowToStep", "position": 1, "name": "Разложите смету по перечню", "text": "До подписания контракта сверьте плановые затраты с пунктом 1 статьи 346.16 НК и пометьте позиции, которые в налоговые расходы не попадут."}, {"@type": "HowToStep", "position": 2, "name": "Настройте аналитику", "text": "Заведите субконто по контракту (ИГК) в учётной программе и закрепите в учётной политике методику раздельного учёта по приказу Минфина № 210н."}, {"@type": "HowToStep", "position": 3, "name": "Собирайте первичку до платежа", "text": "Комплект документов-оснований для санкционирования — договор, счёт, накладная, акт — сразу копируйте в налоговое досье контракта."}, {"@type": "HowToStep", "position": 4, "name": "Фиксируйте дату списания", "text": "Расход в КУДиР отражайте по дате списания средств с лицевого счёта из выписки, а не по дате подачи распоряжения."}, {"@type": "HowToStep", "position": 5, "name": "Проверяйте особые правила", "text": "Товары признавайте по мере реализации, основные средства — равными долями с ввода в эксплуатацию, налоги — по факту уплаты."}, {"@type": "HowToStep", "position": 6, "name": "Сверяйте два учёта", "text": "Ежеквартально сверяйте КУДиР с раздельным учётом по контракту, чтобы находить расхождения раньше проверяющих."}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "DefinedTermSet", "name": "Термины: расходы упрощенца при казначейском сопровождении", "inLanguage": "ru-RU", "hasDefinedTerm": [{"@type": "DefinedTerm", "name": "УСН «доходы минус расходы»", "description": "упрощённая система с объектом налогообложения по разнице доходов и расходов; базовая ставка 15%, регионы вправе снижать её."}, {"@type": "DefinedTerm", "name": "Закрытый перечень расходов", "description": "список затрат пункта 1 статьи 346.16 НК; расходы вне перечня налоговую базу не уменьшают."}, {"@type": "DefinedTerm", "name": "Кассовый метод", "description": "признание доходов и расходов по факту движения денег (статья 346.17 НК); для сопровождаемого контракта — по датам операций на лицевом счёте."}, {"@type": "DefinedTerm", "name": "КУДиР", "description": "Книга учёта доходов и расходов упрощенца (статья 346.24 НК); форма утверждена приказом ФНС от 07.11.2023 № ЕА-7-3/816@."}, {"@type": "DefinedTerm", "name": "Минимальный налог", "description": "1% от доходов за год; платится, если налог по обычной ставке получился меньше (пункт 6 статьи 346.18 НК)."}, {"@type": "DefinedTerm", "name": "Раздельный учёт по контракту", "description": "обособленный учёт доходов и затрат каждого сопровождаемого контракта по приказу Минфина № 210н; не заменяет налоговый учёт."}]}
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
<meta property="og:title" content="Расходы на УСН при казначейском сопровождении">
<meta property="og:description" content="Расходы упрощенца по сопровождаемому контракту: что попадает в закрытый перечень статьи 346.16 НК, когда затрата считается оплаченной с лицевого счёта, какая первичка нужна ФНС и казначейству и как раздельный учёт уживается с КУДиР.">
<meta property="og:url" content="https://kaznaexpert.ru/baza-znaniy/uchet-rashodov-na-usn-pri-ks/">
<meta property="og:image" content="https://kaznaexpert.ru/img/og-image.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="Расходы на УСН при казначейском сопровождении — КазнаЭксперт">
<meta property="article:published_time" content="2026-07-20T09:00:00+03:00">
<meta property="article:modified_time" content="2026-07-20T09:00:00+03:00">
<meta property="article:author" content="https://kaznaexpert.ru/komanda/mihailov-yaroslav/">
<meta property="article:section" content="База знаний">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Расходы на УСН при казначейском сопровождении">
<meta name="twitter:description" content="Расходы упрощенца по сопровождаемому контракту: что попадает в закрытый перечень статьи 346.16 НК, когда затрата считается оплаченной с лицевого счёта, какая первичка нужна ФНС и казначейству и как раздельный учёт уживается с КУДиР.">
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
  <nav class="crumbs" aria-label="Хлебные крошки"><a href="/">Главная</a> › <a href="/baza-znaniy/">База знаний</a> › Расходы на УСН при сопровождении</nav>

  <aside class="toc" aria-label="Содержание">
    <div class="toc__label">Содержание</div>
    <ul class="toc__list" id="tocList">
      <li><a href="#sut">Коротко: что меняется для упрощенца</a></li>
      <li><a href="#kogda">Когда расход считается признанным: кассовый метод</a></li>
      <li><a href="#perechen">Закрытый перечень статьи 346.16: что можно учесть</a></li>
      <li><a href="#osobye">Материалы, товары, основные средства: особые правила</a></li>
      <li><a href="#pervichka">Первичка двойного назначения: для ФНС и для казначейства</a></li>
      <li><a href="#kudir">КУДиР и раздельный учёт: две книги параллельно</a></li>
      <li><a href="#minimalka">Минимальный налог и убыток по контракту</a></li>
      <li><a href="#nds">НДС на упрощёнке с 2026 года: порог 20 млн</a></li>
      <li><a href="#howto">Как выстроить учёт расходов: шаги</a></li>
      <li><a href="#kejs">Типовая ситуация из практики</a></li>
      <li><a href="#oshibki">Частые ошибки упрощенца на сопровождаемом контракте</a></li>
      <li><a href="#glossary">Глоссарий</a></li>
      <li><a href="#faq">Частые вопросы</a></li>
    </ul>
  </aside>

  <article class="content" id="main">
    <div class="hero">
      <img class="hero__crest hero__crest--light" src="/img/logogold-crest.webp" alt="" aria-hidden="true" width="188" height="137" decoding="async" loading="lazy">
      <img class="hero__crest hero__crest--dark" src="/img/LogoWhite.png" alt="" aria-hidden="true" width="188" height="137" decoding="async" loading="lazy">
      <div class="eyebrow">База знаний · Раздельный учёт <span class="fresh">Актуально на 2026</span></div>
    <h1>Расходы на УСН при казначейском сопровождении: раздельный учёт и подтверждение затрат</h1>
    <div class="byline"><span class="av">ЯМ</span><span>Автор: <a href="/komanda/mihailov-yaroslav/">Ярослав Михайлов</a>, главный эксперт</span><span class="dot">·</span><span>15+ лет в Казначействе</span><span class="dot">·</span><span>15 мин чтения</span><span class="dot">·</span><span>Обновлено 20 июля 2026</span></div>
    </div>

    <div class="share">
      <span class="share__label">Поделиться:</span>
      <a href="https://t.me/share/url?url=https%3A%2F%2Fkaznaexpert.ru%2Fbaza-znaniy%2Fuchet-rashodov-na-usn-pri-ks%2F&amp;text=%D0%A0%D0%B0%D1%81%D1%85%D0%BE%D0%B4%D1%8B%20%D0%BD%D0%B0%20%D0%A3%D0%A1%D0%9D%20%D0%BF%D1%80%D0%B8%20%D0%BA%D0%B0%D0%B7%D0%BD%D0%B0%D1%87%D0%B5%D0%B9%D1%81%D0%BA%D0%BE%D0%BC%20%D1%81%D0%BE%D0%BF%D1%80%D0%BE%D0%B2%D0%BE%D0%B6%D0%B4%D0%B5%D0%BD%D0%B8%D0%B8%3A%20%D0%B7%D0%B0%D0%BA%D1%80%D1%8B%D1%82%D1%8B%D0%B9%20%D0%BF%D0%B5%D1%80%D0%B5%D1%87%D0%B5%D0%BD%D1%8C%20%D1%81%D1%82%D0%B0%D1%82%D1%8C%D0%B8%20346.16%20%D0%9D%D0%9A%2C%20%D0%BC%D0%BE%D0%BC%D0%B5%D0%BD%D1%82%20%D0%BF%D1%80%D0%B8%D0%B7%D0%BD%D0%B0%D0%BD%D0%B8%D1%8F%20%D0%BE%D0%BF%D0%BB%D0%B0%D1%82%D1%8B%20%D1%81%20%D0%BB%D0%B8%D1%86%D0%B5%D0%B2%D0%BE%D0%B3%D0%BE%20%D1%81%D1%87%D1%91%D1%82%D0%B0%2C%20%D0%BF%D0%B5%D1%80%D0%B2%D0%B8%D1%87%D0%BA%D0%B0%20%D0%B4%D0%B2%D0%BE%D0%B9%D0%BD%D0%BE%D0%B3%D0%BE%20%D0%BD%D0%B0%D0%B7%D0%BD%D0%B0%D1%87%D0%B5%D0%BD%D0%B8%D1%8F%20%D0%B4%D0%BB%D1%8F%20%D0%A4%D0%9D%D0%A1%20%D0%B8%20%D0%BA%D0%B0%D0%B7%D0%BD%D0%B0%D1%87%D0%B5%D0%B9%D1%81%D1%82%D0%B2%D0%B0%2C%20%D0%BC%D0%B8%D0%BD%D0%B8%D0%BC%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9%20%D0%BD%D0%B0%D0%BB%D0%BE%D0%B3%20%D0%B8%20%D1%80%D0%B0%D0%B7%D0%B4%D0%B5%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9%20%D1%83%D1%87%D1%91%D1%82%20%D0%BF%D0%B0%D1%80%D0%B0%D0%BB%D0%BB%D0%B5%D0%BB%D1%8C%D0%BD%D0%BE%20%D0%9A%D0%A3%D0%94%D0%B8%D0%A0" target="_blank" rel="noopener"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.56 8.25l-1.86 8.76c-.14.62-.5.77-1.02.48l-2.82-2.08-1.36 1.31c-.15.15-.28.28-.57.28l.2-2.89 5.27-4.76c.23-.2-.05-.32-.35-.12l-6.51 4.1-2.8-.88c-.61-.19-.62-.61.13-.9l10.95-4.22c.5-.18.95.12.79.85z"/></svg>Telegram</a>
      <button type="button" id="copyLink"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.07 0l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.07 0l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg><span>Копировать ссылку</span></button>
      <button type="button" id="printBtn"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9V2h12v7M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2M6 14h12v8H6z"/></svg>Скачать PDF</button>
    </div>

    <details class="mtoc"><summary>Содержание статьи</summary>
      <ol>
        <li><a href="#sut">Коротко: что меняется для упрощенца</a></li><li><a href="#kogda">Когда расход считается признанным: кассовый метод</a></li><li><a href="#perechen">Закрытый перечень статьи 346.16: что можно учесть</a></li><li><a href="#osobye">Материалы, товары, основные средства: особые правила</a></li><li><a href="#pervichka">Первичка двойного назначения: для ФНС и для казначейства</a></li><li><a href="#kudir">КУДиР и раздельный учёт: две книги параллельно</a></li><li><a href="#minimalka">Минимальный налог и убыток по контракту</a></li><li><a href="#nds">НДС на упрощёнке с 2026 года: порог 20 млн</a></li><li><a href="#howto">Как выстроить учёт расходов: шаги</a></li><li><a href="#kejs">Типовая ситуация из практики</a></li><li><a href="#oshibki">Частые ошибки упрощенца на сопровождаемом контракте</a></li><li><a href="#glossary">Глоссарий</a></li><li><a href="#faq">Частые вопросы</a></li>
      </ol>
    </details>

    <div class="tldr">Казначейское сопровождение не меняет налоговый учёт упрощенца: расходы по контракту признаются по обычным правилам главы 26.2 НК. Учесть можно только затраты из <b>закрытого перечня пункта 1 статьи 346.16 НК</b>, обоснованные и подтверждённые документами. Момент признания — <b>после фактической оплаты</b>: для сопровождаемого контракта это дата списания денег с лицевого счёта в казначействе (пункт 2 статьи 346.17 НК). Целевой характер средств признанию расхода не мешает — для налога это обычная оплата поставщику. Удобство в том, что первичка одна: договор, накладная и акт сначала проходят санкционирование в казначействе, а затем подтверждают расход в КУДиР. Параллельно налоговому учёту исполнитель ведёт раздельный учёт затрат по контракту — по приказу Минфина № 210н, и это два разных учёта, которые не заменяют друг друга. Ниже — какие затраты попадают в перечень, когда их признавать, как не потерять расход на материалах и основных средствах и что изменил для упрощенцев порог НДС 20 млн рублей с 2026 года.</div>

    <section class="keyfacts grain" aria-label="Ключевые факты">
      <h2>Коротко о главном</h2>
      <div class="keyfacts__grid">
        <div class="kf"><div class="kf__n">Ст. 346.16 НК</div><div class="kf__t"><b>Перечень</b> — Перечень расходов на УСН закрытый: затрату по контракту можно учесть, только если она названа в пункте 1 статьи 346.16 и отвечает критериям статьи 252 НК</div></div>
        <div class="kf"><div class="kf__n">Кассовый метод</div><div class="kf__t"><b>Момент</b> — Расход признаётся после фактической оплаты — для сопровождаемого контракта это дата списания денег с лицевого счёта (пункт 2 статьи 346.17 НК)</div></div>
        <div class="kf"><div class="kf__n">Одна первичка</div><div class="kf__t"><b>Документы</b> — Договор, накладная и акт подтверждают затрату дважды: казначейству — при санкционировании платежа, налоговой — как расход в КУДиР</div></div>
        <div class="kf"><div class="kf__n">1% минимум</div><div class="kf__t"><b>Налог</b> — Если расходы съели почти всю выручку, упрощенец «доходы минус расходы» платит минимальный налог — 1% от доходов (пункт 6 статьи 346.18 НК)</div></div>
      </div>
    </section>

    <h2 id="sut">Коротко: что меняется для упрощенца</h2>
    <p>Для компании или ИП на упрощённой системе «доходы минус расходы» сопровождаемый контракт — это обычная выручка и обычные затраты, только деньги ходят через лицевой счёт в территориальном органе казначейства и каждый платёж проходит санкционирование. Налоговые правила не меняются: доход признаётся на дату поступления средств на лицевой счёт, расход — на дату оплаты с него, при условии что затрата есть в перечне статьи 346.16 НК.</p>
    <p>Меняется дисциплина. На обычном контракте бухгалтер может собрать первичку «потом» — при казначейском сопровождении без документов платёж просто не уйдёт: казначейство проверяет договор, накладные и акты до списания денег. Поэтому у аккуратного упрощенца на сопровождаемом контракте налоговый учёт расходов оказывается даже крепче обычного — вся доказательная база собирается заранее.</p>
    <p>Есть и обратная сторона: любая небрежность видна сразу двум контролёрам. Расход без документа не пропустит казначейство, а расход вне перечня 346.16 не примет налоговая — даже если платёж благополучно санкционирован. Эти два фильтра работают независимо, и путать их нельзя: «казначейство пропустило» не значит «расход учтён для налога».</p>

    <h2 id="kogda">Когда расход считается признанным: кассовый метод</h2>
    <p>На упрощённой системе расходы признаются после фактической оплаты — так установлен пункт 2 статьи 346.17 НК. Оплатой считается прекращение обязательства перед поставщиком: для сопровождаемого контракта это дата, когда казначейство списало деньги с лицевого счёта по вашему распоряжению.</p>
    <p>Здесь важно не путать три даты, которые на сопровождаемом контракте могут расходиться на дни и даже недели:</p>
    <table>
      <thead><tr><th>Дата</th><th>Что происходит</th><th>Признаётся ли расход</th></tr></thead>
      <tbody>
        <tr><td>Подача распоряжения</td><td>вы направили распоряжение о совершении казначейского платежа в свой территориальный орган казначейства</td><td>нет — деньги ещё на счёте</td></tr>
        <tr><td>Санкционирование</td><td>казначейство проверило документы-основания и одобрило операцию</td><td>нет — списания ещё не было</td></tr>
        <tr><td>Списание с лицевого счёта</td><td>деньги ушли поставщику</td><td>да — при выполнении остальных условий главы 26.2 НК</td></tr>
      </tbody>
    </table>
    <p>Вторая оговорка кассового метода: оплата — условие необходимое, но не всегда достаточное. Для части затрат глава 26.2 добавляет собственные условия признания — о них следующий раздел. А если казначейство вернуло распоряжение без исполнения, расхода нет вовсе: почему так случается, разобрано в статье про <a href="/baza-znaniy/prichiny-otkaza-kaznacheystva-v-sankcionirovanii/">причины отказа казначейства в санкционировании</a>.</p>

    <h2 id="perechen">Закрытый перечень статьи 346.16: что можно учесть</h2>
    <p>Главное ограничение упрощённой системы — перечень расходов закрытый. Затрату можно учесть, только если она прямо названа в пункте 1 статьи 346.16 НК и одновременно отвечает общим критериям пункта 1 статьи 252: обоснованность и документальное подтверждение. Для типовых затрат исполнителя сопровождаемого контракта картина такая:</p>
    <table>
      <thead><tr><th>Затрата по контракту</th><th>Основание в п. 1 ст. 346.16 НК</th><th>Учитывается</th></tr></thead>
      <tbody>
        <tr><td>Материалы, сырьё, комплектующие</td><td>подп. 5 (материальные расходы)</td><td>да</td></tr>
        <tr><td>Зарплата работников на контракте, страховые взносы</td><td>подп. 6 и 7</td><td>да</td></tr>
        <tr><td>Работы и услуги субподрядчиков производственного характера</td><td>подп. 5 (в составе материальных расходов)</td><td>да</td></tr>
        <tr><td>Аренда помещений и техники</td><td>подп. 4</td><td>да</td></tr>
        <tr><td>Покупка и ремонт основных средств</td><td>подп. 1 и 3</td><td>да, по особым правилам</td></tr>
        <tr><td>Входной НДС по оплаченным затратам</td><td>подп. 8</td><td>да, отдельной строкой</td></tr>
        <tr><td>Услуги связи, банковские комиссии, проценты</td><td>подп. 9 и 18</td><td>да</td></tr>
        <tr><td>Неустойки и штрафы контрагентам</td><td>в перечне отсутствуют</td><td>нет</td></tr>
        <tr><td>Представительские расходы</td><td>в перечне отсутствуют</td><td>нет</td></tr>
      </tbody>
    </table>
    <p>Практический вывод: смету сопровождаемого контракта полезно ещё на старте разложить по подпунктам статьи 346.16. Если в цене контракта заметную долю занимают затраты, которых в перечне нет, упрощёнка «доходы минус расходы» покажет налоговую базу больше, чем реальная маржа, — и это стоит понять до подписания, а не после.</p>
    <p>Отдельная строка перечня — налоги и сборы (подп. 22): их учитывают в размере фактически уплаченных сумм. Уплата налогов с лицевого счёта — разрешённая операция, так что и здесь сопровождение ничего не ломает. Как в целом устроено налогообложение исполнителя, разобрано в материале про <a href="/baza-znaniy/nalogi-pri-kaznacheyskom-soprovozhdenii/">налоги при казначейском сопровождении</a>.</p>

    <h2 id="osobye">Материалы, товары, основные средства: особые правила</h2>
    <p>Пункт 2 статьи 346.17 НК задаёт для отдельных групп затрат собственный момент признания — оплата с лицевого счёта запускает отсчёт, но не всегда закрывает вопрос:</p>
    <ul>
      <li><b>Материальные расходы и оплата труда</b> — признаются в момент погашения задолженности: списали деньги с лицевого счёта поставщику материалов или выплатили зарплату — расход состоялся. Ждать списания материалов в производство не нужно.</li>
      <li><b>Товары для перепродажи</b> — признаются по мере реализации покупателю, а не в момент оплаты поставщику. Если контракт предполагает поставку закупаемого товара, расход возникнет на дату передачи товара заказчику.</li>
      <li><b>Основные средства</b> — стоимость оборудования, купленного для исполнения контракта, списывается с момента ввода в эксплуатацию равными долями на конец каждого отчётного периода до конца года (пункт 3 статьи 346.16 НК). Оплата с лицевого счёта — обязательное условие, но расход растянется по кварталам.</li>
      <li><b>Налоги и взносы</b> — в размере фактически уплаченных сумм на дату уплаты.</li>
    </ul>
    <p>Эти правила не зависят от того, каким счётом вы платили — лицевым в казначействе или расчётным в банке. Но на сопровождаемом контракте к ним добавляется целевой фильтр: с лицевого счёта уходят только платежи, связанные с контрактом и прошедшие санкционирование. Какие операции в принципе допустимы, перечислено в статье про <a href="/baza-znaniy/operacii-po-licevomu-schetu-pri-ks/">операции по лицевому счёту при сопровождении</a>.</p>

    <h2 id="pervichka">Первичка двойного назначения: для ФНС и для казначейства</h2>
    <p>Одно из немногих мест, где казначейское сопровождение реально помогает налоговому учёту, — документы. Чтобы платёж ушёл с лицевого счёта, к распоряжению прикладывают документы-основания: договор с поставщиком, счёт, накладную или акт. Ровно эти же документы подтверждают расход для целей статьи 252 НК.</p>
    <p>Получается первичка двойного назначения. Собирая комплект для санкционирования, вы автоматически собираете доказательную базу для налоговой:</p>
    <table>
      <thead><tr><th>Документ</th><th>Зачем казначейству</th><th>Зачем налоговой</th></tr></thead>
      <tbody>
        <tr><td>Договор с поставщиком (с ИГК при сопровождении)</td><td>связь платежа с контрактом</td><td>основание возникновения затраты</td></tr>
        <tr><td>Накладная, УПД, акт</td><td>подтверждение факта поставки перед санкционированием</td><td>документальное подтверждение расхода</td></tr>
        <tr><td>Распоряжение и выписка из лицевого счёта</td><td>само проведение платежа</td><td>доказательство оплаты для кассового метода</td></tr>
        <tr><td>Расчёт распределения общих затрат</td><td>обоснование доли накладных расходов</td><td>обоснованность расхода по ст. 252 НК</td></tr>
      </tbody>
    </table>
    <p>Выписка из лицевого счёта здесь заменяет банковскую выписку — это документ, которым упрощенец подтверждает дату оплаты. Как её получить и читать, показано в материале про <a href="/baza-znaniy/vypiska-iz-licevogo-scheta-kaznachejstva/">выписку из лицевого счёта казначейства</a>.</p>

    <h2 id="kudir">КУДиР и раздельный учёт: две книги параллельно</h2>
    <p>Упрощенец ведёт Книгу учёта доходов и расходов — КУДиР (статья 346.24 НК, форма утверждена приказом ФНС от 07.11.2023 № ЕА-7-3/816@ и применяется с 2024 года). Туда попадают все доходы и все признанные расходы по всем видам деятельности — и по сопровождаемому контракту, и по остальным.</p>
    <p>Параллельно исполнитель сопровождаемого контракта обязан вести раздельный учёт доходов и затрат по каждому контракту — по правилам приказа Минфина России от 10.12.2021 № 210н (в редакции от 27.06.2025). Это не налоговый регистр, а инструмент контроля целевого расходования: он показывает казначейству и заказчику, из чего складываются затраты именно этого контракта. Освобождения для упрощенцев здесь нет — режим налогообложения на обязанность не влияет, а за отсутствие раздельного учёта с 1 января 2026 года действует штраф по статье 15.37.1 КоАП: юрлицу — 5–10% цены контракта, но не более 500 000 рублей.</p>
    <p>Развести две книги просто, если помнить их назначение: КУДиР отвечает на вопрос «сколько налога платить», раздельный учёт — «куда ушли целевые деньги». Данные в них пересекаются, но не совпадают: например, аванс, полученный на лицевой счёт, в КУДиР — доход, а в раздельном учёте — источник финансирования затрат. Как организовать контрактную аналитику, разобрано в статье про <a href="/baza-znaniy/razdelnyy-uchet-po-goskontraktu/">раздельный учёт по госконтракту</a>; если контрактов несколько, добавляются свои правила — им посвящён материал про <a href="/baza-znaniy/neskolko-soprovozhdaemyh-kontraktov/">учёт нескольких сопровождаемых контрактов</a>.</p>

    <h2 id="minimalka">Минимальный налог и убыток по контракту</h2>
    <p>Госконтракты нередко исполняются с низкой маржой, а первые месяцы — в минус: закупка материалов и зарплата идут раньше, чем приходит оплата этапов. Для упрощенца «доходы минус расходы» на этот случай в НК есть два механизма.</p>
    <p><b>Минимальный налог.</b> Если налог, посчитанный по обычной ставке 15% (или пониженной региональной), оказался меньше 1% от доходов за год, платится минимальный налог — 1% от доходов (пункт 6 статьи 346.18 НК). Разницу между минимальным и расчётным налогом можно включить в расходы следующих лет.</p>
    <p><b>Перенос убытка.</b> Убыток года переносится на будущие налоговые периоды в течение десяти лет (пункт 7 статьи 346.18 НК). Для длинного контракта, который начат в конце года, это рабочая ситуация: год закупки закрыт с убытком, год сдачи работ — с прибылью, и убыток прошлого года её уменьшает.</p>
    <p>Ставки с 2025 года стали проще: повышенные 8% и 20% отменены Федеральным законом от 12.07.2024 № 176-ФЗ, остались базовые 6% «доходы» и 15% «доходы минус расходы» плюс региональные льготы. Лимит доходов для права на упрощёнку в 2026 году — 490,5 млн рублей (450 млн с коэффициентом-дефлятором 1,090), остаточная стоимость основных средств — 218 млн рублей.</p>

    <h2 id="nds">НДС на упрощёнке с 2026 года: порог 20 млн</h2>
    <p>С 2025 года упрощенцы перестали быть автоматически освобождёнными от НДС, а с 1 января 2026 года порог стал жёстче: обязанность платить НДС возникает при доходе свыше <b>20 млн рублей</b> в год (Федеральный закон от 28.11.2025 № 425-ФЗ; ранее порог составлял 60 млн). Если доход с начала года превысил порог, НДС начисляется с первого числа следующего месяца.</p>
    <p>Для исполнителя сопровождаемого контракта это означает, что уже один средний госконтракт выводит компанию в плательщики НДС. Выбор из двух режимов: пониженные ставки 5% (доход 20–272,5 млн) или 7% (272,5–490,5 млн) без права на вычет входного НДС — либо общие ставки с вычетами. Выбор влияет и на учёт расходов: при пониженных ставках входной НДС к вычету не принимается и учитывается в стоимости затрат, то есть проходит через перечень статьи 346.16.</p>
    <p>Порог продолжит снижаться — до 15 млн в 2027 году и 10 млн с 2028 года, поэтому закладывать НДС в цену новых контрактов упрощенцам стоит уже на этапе заявки. Это вопрос экономики контракта, а не казначейских процедур: санкционирование к НДС нейтрально, уплата налога с лицевого счёта — разрешённая операция.</p>

    <h2 id="howto">Как выстроить учёт расходов: шаги</h2>
    <p>Порядок, который снимает большинство проблем упрощенца на сопровождаемом контракте.</p>
    <ol class="steps">
      <li><b>Разложите смету по перечню.</b> До подписания контракта сверьте плановые затраты с пунктом 1 статьи 346.16 НК и пометьте позиции, которые в расходы не попадут.</li>
      <li><b>Настройте аналитику.</b> Заведите в учётной программе субконто по контракту (ИГК) и закрепите в учётной политике методику раздельного учёта по приказу № 210н.</li>
      <li><b>Собирайте первичку до платежа.</b> Комплект для санкционирования — договор, счёт, накладная, акт — сразу копируйте в налоговое досье контракта.</li>
      <li><b>Фиксируйте дату списания.</b> Расход в КУДиР ставьте по дате списания с лицевого счёта из выписки, а не по дате распоряжения.</li>
      <li><b>Проверяйте особые правила.</b> Товары — по мере реализации, основные средства — равными долями с ввода в эксплуатацию, налоги — по факту уплаты.</li>
      <li><b>Сверяйте два учёта.</b> Раз в квартал сверяйте КУДиР с раздельным учётом по контракту: расхождения по суммам и датам находите до того, как их найдут проверяющие.</li>
    </ol>

    <h2 id="kejs">Типовая ситуация из практики</h2>
    <p>Это обобщённый пример; он иллюстрирует логику и не описывает конкретного клиента, не гарантирует результата и не является рекламой достижений.</p>
    <p>На практике встречается ситуация: подрядчик на упрощённой системе «доходы минус расходы» исполняет сопровождаемый контракт и уверенно относит в расходы всё, что прошло санкционирование, — раз казначейство одобрило, значит, затрата подтверждена. При камеральной проверке налоговая снимает часть расходов: неустойка субпоставщику и представительские траты в перечне статьи 346.16 не значатся, а стоимость купленного станка списана единовременно вместо равных долей до конца года. Доначисление, пени, уточнёнка. Обратный сюжет тоже случается: бухгалтер признаёт расход по дате подачи распоряжения, хотя списание с лицевого счёта прошло уже в следующем квартале, — и авансовый платёж по налогу оказывается занижен. Вывод один: санкционирование и налоговое признание — два разных фильтра, и проходить нужно оба.</p>

    <h2 id="oshibki">Частые ошибки упрощенца на сопровождаемом контракте</h2>
    <p>Ошибки повторяются из проверки в проверку — вот главные.</p>
    <ul>
      <li><b>«Казначейство пропустило — значит, расход».</b> Санкционирование подтверждает целевой характер платежа, но не включает затрату в перечень статьи 346.16.</li>
      <li><b>Расход по дате распоряжения.</b> Кассовый метод привязан к списанию денег с лицевого счёта; дата из выписки — единственно верная.</li>
      <li><b>Станок списан разом.</b> Основные средства признаются равными долями с момента ввода в эксплуатацию, а не в день оплаты.</li>
      <li><b>Товар учтён при оплате поставщику.</b> Товары для перепродажи признаются по мере передачи заказчику.</li>
      <li><b>Раздельный учёт «заменён» КУДиР.</b> Это разные учёты: за отсутствие контрактного раздельного учёта с 2026 года штрафуют по статье 15.37.1 КоАП.</li>
      <li><b>Не заложен НДС.</b> С 2026 года порог 20 млн рублей делает плательщиком НДС почти любого исполнителя госконтракта на упрощёнке.</li>
    </ul>

    <h2 id="glossary">Глоссарий</h2>
    <dl class="gloss">
      <div><dt>УСН «доходы минус расходы»</dt><dd>упрощённая система с объектом налогообложения по разнице доходов и расходов; базовая ставка 15%, регионы вправе снижать её.</dd></div>
      <div><dt>Закрытый перечень расходов</dt><dd>список затрат пункта 1 статьи 346.16 НК; расходы вне перечня налоговую базу не уменьшают.</dd></div>
      <div><dt>Кассовый метод</dt><dd>признание доходов и расходов по факту движения денег (статья 346.17 НК); для сопровождаемого контракта — по датам операций на лицевом счёте.</dd></div>
      <div><dt>КУДиР</dt><dd>Книга учёта доходов и расходов упрощенца (статья 346.24 НК); форма утверждена приказом ФНС от 07.11.2023 № ЕА-7-3/816@.</dd></div>
      <div><dt>Минимальный налог</dt><dd>1% от доходов за год; платится, если налог по обычной ставке получился меньше (пункт 6 статьи 346.18 НК).</dd></div>
      <div><dt>Раздельный учёт по контракту</dt><dd>обособленный учёт доходов и затрат каждого сопровождаемого контракта по приказу Минфина № 210н; не заменяет налоговый учёт.</dd></div>
    </dl>

    <h2 id="faq">Частые вопросы</h2>
    <div class="faq">
      <details open><summary>Меняет ли казначейское сопровождение учёт расходов на УСН?</summary><p>Нет. Расходы признаются по обычным правилам главы 26.2 НК: после фактической оплаты и только из перечня статьи 346.16. Сопровождение добавляет санкционирование платежей, но налоговых правил не меняет.</p></details>
      <details><summary>Когда признавать расход, оплаченный с лицевого счёта?</summary><p>На дату списания денег с лицевого счёта — её подтверждает выписка казначейства. Дата подачи распоряжения и дата санкционирования для налога значения не имеют.</p></details>
      <details><summary>Можно ли учесть расход, который казначейство не санкционировало?</summary><p>Если платёж не прошёл и деньги не списаны, оплаты не было — значит, по кассовому методу нет и расхода. Затрата, оплаченная с обычного расчётного счёта собственными средствами, признаётся в общем порядке.</p></details>
      <details><summary>Любая ли затрата по контракту уменьшает налог на УСН?</summary><p>Нет. Перечень расходов закрытый (пункт 1 статьи 346.16 НК): например, неустойки контрагентам и представительские расходы в него не входят и налоговую базу не уменьшают, даже если платёж прошёл санкционирование.</p></details>
      <details><summary>Как подтверждать расходы по сопровождаемому контракту?</summary><p>Теми же документами, что подавались в казначейство: договор, счёт, накладная или акт плюс выписка из лицевого счёта как доказательство оплаты. Отдельного «налогового» комплекта собирать не нужно.</p></details>
      <details><summary>Как учитывать купленное для контракта оборудование?</summary><p>Как основное средство: после оплаты и ввода в эксплуатацию стоимость списывается равными долями на конец каждого отчётного периода до конца года (пункт 3 статьи 346.16 НК), а не единовременно.</p></details>
      <details><summary>Обязан ли упрощенец вести раздельный учёт по контракту?</summary><p>Да. Обязанность вести раздельный учёт по каждому сопровождаемому контракту (приказ Минфина № 210н) не зависит от режима налогообложения; за отсутствие учёта с 01.01.2026 действует штраф по статье 15.37.1 КоАП — юрлицу до 500 000 рублей.</p></details>
      <details><summary>Что такое минимальный налог и когда его платить?</summary><p>Если налог по обычной ставке за год оказался меньше 1% от доходов, платится минимальный налог — 1% от доходов (пункт 6 статьи 346.18 НК). Разницу можно учесть в расходах следующих лет.</p></details>
      <details><summary>Платит ли упрощенец НДС на сопровождаемом контракте в 2026 году?</summary><p>При доходе свыше 20 млн рублей в год — да (порог снижен Федеральным законом от 28.11.2025 № 425-ФЗ). Выбор — пониженные ставки 5% или 7% без вычетов либо общие ставки с вычетами. Само сопровождение обязанности по НДС не создаёт.</p></details>
      <details><summary>Убыток по контракту пропадает?</summary><p>Нет. Убыток года переносится на будущие периоды в течение десяти лет (пункт 7 статьи 346.18 НК) и уменьшает базу прибыльных лет — типичная ситуация для длинных контрактов с закупкой в первый год.</p></details>
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
        <li id="ref-1">Налоговый кодекс РФ, глава 26.2: ст. 346.16 (перечень расходов и порядок признания основных средств), ст. 346.17 (кассовый метод, моменты признания), ст. 346.18 (минимальный налог, перенос убытка), ст. 346.24 (учёт в КУДиР).</li>
        <li id="ref-2">Приказ ФНС России от 07.11.2023 № ЕА-7-3/816@ — форма и порядок заполнения Книги учёта доходов и расходов (применяется с 2024 года).</li>
        <li id="ref-3">Федеральный закон от 12.07.2024 № 176-ФЗ — отмена повышенных ставок УСН с 01.01.2025; НДС для упрощенцев.</li>
        <li id="ref-4">Федеральный закон от 28.11.2025 № 425-ФЗ — снижение порога доходов для НДС на УСН до 20 млн рублей с 01.01.2026.</li>
        <li id="ref-5">Приказ Минфина России от 10.12.2021 № 210н (ред. от 27.06.2025) — порядок ведения раздельного учёта доходов и затрат участниками казначейского сопровождения.</li>
        <li id="ref-6">Бюджетный кодекс РФ, глава 24.4, ст. 242.23; Постановление Правительства РФ от 24.11.2021 № 2024 — Правила казначейского сопровождения средств.</li>
        <li id="ref-7">КоАП РФ, ст. 15.37.1 — ответственность за нарушение правил раздельного учёта при казначейском сопровождении (с 01.01.2026). <a href="https://www.consultant.ru/document/cons_doc_LAW_34661/" target="_blank" rel="noopener">КонсультантПлюс</a></li>
      </ol>
      <p class="refs__note">Материал носит справочный характер и не заменяет консультацию по конкретному контракту. Нормы приведены по состоянию на дату публикации; ставки, лимиты и пороги НДС сверяйте на дату операции, а порядок санкционирования — со своим территориальным органом казначейства.</p>
    </div>
  </article>

  <aside class="rail">
    <form class="railform" id="leadForm" novalidate data-endpoint="/php/lead.php" data-source="uchet-rashodov-na-usn-pri-ks">
      <div class="railform__badge">Разбор эксперта</div>
      <h3 class="railform__title">Вопрос по учёту на упрощёнке?</h3>
      <p class="railform__sub">Поможем разложить затраты сопровождаемого контракта: что признаётся расходом на УСН, какая первичка нужна казначейству и как настроить раздельный учёт. Разбор случая — в течение часа.</p>
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
    <a class="card reveal" href="/baza-znaniy/nalogi-pri-kaznacheyskom-soprovozhdenii/"><div class="card__cover"><span>Налоги</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Налоги при казначейском сопровождении: НДС, прибыль, доход на упрощёнке</h3><div class="card__meta">Учёт · 16 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/razdelnyy-uchet-po-goskontraktu/"><div class="card__cover"><span>Раздельный учёт</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Раздельный учёт по госконтракту: когда вести и как организовать</h3><div class="card__meta">Учёт · 15 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/neskolko-soprovozhdaemyh-kontraktov/"><div class="card__cover"><span>Несколько контрактов</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Несколько сопровождаемых контрактов: как разделить деньги и учёт</h3><div class="card__meta">Учёт · 14 мин</div></div></a>
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

<section class="kz-sub" aria-labelledby="kzSubTitle" data-source="uchet-rashodov-na-usn-pri-ks">
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
<script>/* mtr-tail-controller: прячем мини-навигатор на related/footer (scroll-based) */
(function(){var m=document.getElementById('mtr');if(!m)return;
var tail=document.querySelector('.related')||document.querySelector('.v2-footer');if(!tail)return;
function upd(){m.classList.toggle('mtr--tail', tail.getBoundingClientRect().top < window.innerHeight*0.65);}
var t;window.addEventListener('scroll',function(){if(t)return;t=setTimeout(function(){t=null;upd();},100);},{passive:true});
window.addEventListener('resize',upd,{passive:true});upd();})();</script>
</body>
</html>
