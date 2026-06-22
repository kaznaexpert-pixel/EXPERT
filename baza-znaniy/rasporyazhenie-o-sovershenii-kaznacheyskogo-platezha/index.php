<?php header("Cache-Control: public, max-age=300, must-revalidate"); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Распоряжение о казначейском платеже: ЛК и возврат</title>
<meta name="description" content="Как перейти в подраздел «Распоряжения» в личном кабинете «Электронного бюджета», почему его нет и что делать, как заполнить и вернуть распоряжение.">
<meta name="author" content="Ярослав Михайлов">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1">
<meta name="theme-color" content="#F4F1EB" media="(prefers-color-scheme: light)">
<meta name="theme-color" content="#141310" media="(prefers-color-scheme: dark)">
<!-- PROD: canonical и og:url ОБЯЗАТЕЛЬНО менять под URL каждой статьи -->
<link rel="canonical" href="https://kaznaexpert.ru/baza-znaniy/rasporyazhenie-o-sovershenii-kaznacheyskogo-platezha/">
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
{"@context":"https://schema.org","@type":"Article","headline":"Распоряжение о совершении казначейского платежа: заполнение, реквизиты и возврат","description":"Что такое распоряжение о совершении казначейского платежа: виды (перечисление, возврат, уточнение), реквизиты и заполнение по приказу Казначейства № 21н, причины возврата распоряжения и как исправить.","inLanguage":"ru-RU","datePublished":"2026-06-09","dateModified":"2026-06-09","author":{"@type":"Person","name":"Ярослав Михайлов","jobTitle":"Главный эксперт по казначейскому сопровождению","url":"https://kaznaexpert.ru/komanda/mihailov-yaroslav/"},"publisher":{"@type":"Organization","name":"КазнаЭксперт","url":"https://kaznaexpert.ru","logo":{"@type":"ImageObject","url":"https://kaznaexpert.ru/img/logogold.png"}},"image":"https://kaznaexpert.ru/img/og-image.png","mainEntityOfPage":{"@type":"WebPage","@id":"https://kaznaexpert.ru/baza-znaniy/rasporyazhenie-o-sovershenii-kaznacheyskogo-platezha/"}}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Главная","item":"https://kaznaexpert.ru/"},{"@type":"ListItem","position":2,"name":"База знаний","item":"https://kaznaexpert.ru/baza-znaniy/"},{"@type":"ListItem","position":3,"name":"Распоряжение о совершении казначейского платежа"}]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type": "Question", "name": "Почему в личном кабинете нет подраздела Распоряжения?", "acceptedAnswer": {"@type": "Answer", "text": "Чаще всего из-за прав доступа или профиля: не назначено полномочие по казначейскому сопровождению, выбрана не та организация, не подключён компонент казначейского сопровождения или не открыт лицевой счёт. Назначьте нужную роль, проверьте профиль и наличие лицевого счёта."}}, {"@type": "Question", "name": "Как перейти в подраздел Распоряжения о казначейском платеже?", "acceptedAnswer": {"@type": "Answer", "text": "Войдите в Электронный бюджет по сертификату, выберите организацию и полномочие по казначейскому сопровождению, откройте модуль казначейского сопровождения — внутри него находится подраздел формирования распоряжений."}}, 
{"@type":"Question","name":"Что такое распоряжение о совершении казначейского платежа?","acceptedAnswer":{"@type":"Answer","text":"Это электронный документ-основание, по которому Федеральное казначейство проводит операцию в системе казначейских платежей — перечисление, возврат или уточнение средств. Формы и реквизиты установлены приказом Казначейства № 21н."}},
{"@type":"Question","name":"Каким приказом регулируется распоряжение?","acceptedAnswer":{"@type":"Answer","text":"Порядком казначейского обслуживания, утверждённым приказом Федерального казначейства от 14.05.2020 № 21н. Основа системы казначейских платежей — статьи 242.7–242.16 Бюджетного кодекса РФ."}},
{"@type":"Question","name":"Какие бывают виды распоряжений?","acceptedAnswer":{"@type":"Answer","text":"Три базовых: перечисление (основной платёж), возврат (возврат средств) и уточнение (исправление реквизитов проведённого платежа). Формы закреплены в приложениях к Порядку № 21н."}},
{"@type":"Question","name":"Что значит возврат распоряжения?","acceptedAnswer":{"@type":"Answer","text":"Казначейство не исполнило платёж и вернуло документ заявителю с указанием причины. Нужно устранить причину из протокола и направить распоряжение заново."}},
{"@type":"Question","name":"Чем распоряжение (возврат) отличается от возврата распоряжения?","acceptedAnswer":{"@type":"Answer","text":"Распоряжение (возврат) — это форма документа для операции возврата средств. Возврат распоряжения — это ситуация, когда казначейство возвращает любое распоряжение без исполнения из-за ошибок."}},
{"@type":"Question","name":"Почему распоряжение возвращают чаще всего?","acceptedAnswer":{"@type":"Answer","text":"Из-за ошибок в реквизитах получателя, несоответствия назначения платежа, нехватки средств по коду цели, отсутствия документа-основания, непрохождения контроля санкционирования или проблем с подписью."}},
{"@type":"Question","name":"Кто подписывает распоряжение?","acceptedAnswer":{"@type":"Answer","text":"Распоряжение в электронной форме подписывается усиленной квалифицированной электронной подписью лица с правом первой подписи (руководитель) и второй подписи (главный бухгалтер) либо иных уполномоченных лиц."}},
{"@type":"Question","name":"Где в распоряжении указывать ИГК?","acceptedAnswer":{"@type":"Answer","text":"При казначейском сопровождении идентификатор государственного контракта указывают в назначении платежа — это связывает платёж с контрактом. Без ИГК распоряжение вернётся."}},
{"@type":"Question","name":"Как исправить возвращённое распоряжение?","acceptedAnswer":{"@type":"Answer","text":"Прочитать причину в протоколе, исправить конкретный реквизит, перепроверить контроль и направить распоряжение повторно. Не отправляйте документ заново без устранения причины."}}
]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"HowTo","name":"Как сформировать и подписать распоряжение о совершении казначейского платежа","inLanguage":"ru-RU","step":[
{"@type":"HowToStep","position":1,"name":"Выбрать вид","text":"Определить операцию: перечисление, возврат или уточнение."},
{"@type":"HowToStep","position":2,"name":"Указать счёт отправителя","text":"Выбрать лицевой счёт клиента — остальные реквизиты подтянутся из справочника."},
{"@type":"HowToStep","position":3,"name":"Заполнить получателя и сумму","text":"Внести реквизиты получателя, сумму и назначение платежа."},
{"@type":"HowToStep","position":4,"name":"Проставить коды и основание","text":"Указать ИГК при казначейском сопровождении, коды цели/КБК и документ-основание."},
{"@type":"HowToStep","position":5,"name":"Подписать УКЭП","text":"Поставить первую и вторую подпись уполномоченных лиц."},
{"@type":"HowToStep","position":6,"name":"Направить в казначейство","text":"Отправить распоряжение в орган Федерального казначейства."}
]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"DefinedTerm","name":"Распоряжение о совершении казначейского платежа","description":"Электронный документ-основание, по которому Федеральное казначейство проводит казначейский платёж (перечисление, возврат, уточнение). Формы и реквизиты — приказ Казначейства от 14.05.2020 № 21н.","inDefinedTermSet":"https://kaznaexpert.ru/baza-znaniy/glossary/"}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"Person","name":"Ярослав Михайлов","jobTitle":"Главный эксперт по казначейскому сопровождению","worksFor":{"@type":"Organization","name":"КазнаЭксперт","url":"https://kaznaexpert.ru"},"url":"https://kaznaexpert.ru/komanda/mihailov-yaroslav/","sameAs":["https://t.me/Kaznaexpert","https://www.rusprofile.ru/ip/321784700367672"]}
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
@media(max-width:920px){.v2 .v2-header{padding:14px 0}.v2 .v2-header-inner{grid-template-columns:1fr auto}.v2 .v2-nav,.v2 .v2-header-aside .v2-phone-label{display:none}.v2 .v2-brand-mark{height:36px}.v2 .v2-header-aside .v2-phone{font-size:16px}.v2 .v2-burger{display:flex}}</style>
<link rel="preload" href="/css/v2.css?v=<?= @filemtime($_SERVER['DOCUMENT_ROOT'].'/css/v2.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="/css/v2.css?v=<?= @filemtime($_SERVER['DOCUMENT_ROOT'].'/css/v2.css') ?>"></noscript>

<meta property="og:type" content="article">
<meta property="og:locale" content="ru_RU">
<meta property="og:site_name" content="КазнаЭксперт">
<meta property="og:title" content="Распоряжение о совершении казначейского платежа: заполнение и возврат">
<meta property="og:description" content="Виды распоряжений, реквизиты по приказу № 21н, причины возврата распоряжения и как исправить. Экспертный разбор со ссылками на НПА.">
<meta property="og:url" content="https://kaznaexpert.ru/baza-znaniy/rasporyazhenie-o-sovershenii-kaznacheyskogo-platezha/">
<meta property="og:image" content="https://kaznaexpert.ru/img/og-image.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="Распоряжение о совершении казначейского платежа: заполнение и возврат — КазнаЭксперт">
<meta property="article:published_time" content="2026-06-05T09:00:00+03:00">
<meta property="article:modified_time" content="2026-06-05T09:00:00+03:00">
<meta property="article:author" content="https://kaznaexpert.ru/komanda/mihailov-yaroslav/">
<meta property="article:section" content="База знаний">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Распоряжение о совершении казначейского платежа: заполнение и возврат">
<meta name="twitter:description" content="Виды распоряжений, реквизиты по приказу № 21н, причины возврата распоряжения и как исправить. Экспертный разбор со ссылками на НПА.">
<meta name="twitter:image" content="https://kaznaexpert.ru/img/og-image.png">


<style>
:root{
  --cream:#F4F1EB; --bg:#F4F1EB; --ink:#1A1A1A; --ink-soft:#56524b; --ink-mute:#8a8170;
  --sepia:#8B6F47; --sepia-d:#6f5836; --line:#e4ddd0; --card:#fffdf8; --soft:#fbf8f1; --paper:#FAF7F0;
  --header:rgba(244,241,235,.8); --th:#efe7d8; --note:#f6efe2; --dark:#1A1A1A; --dark-tx:#efe9dd;
  --toc-w:230px; --rail-w:288px; --maxw:1240px;
  --font-display:'Playfair Display',Georgia,serif; --font-body:'Inter',system-ui,-apple-system,sans-serif;
}
[data-theme="dark"]{
  --bg:#141310; --ink:#ece7da; --ink-soft:#b4aea1; --ink-mute:#8a8579;
  --sepia:#c8a574; --sepia-d:#b08e5c; --line:#2c2920; --card:#1c1a15; --soft:#1a1813; --paper:#1c1a15;
  --header:rgba(20,19,16,.82); --th:#272318; --note:#211e16; --dark:#0f0e0b; --dark-tx:#ece7da;
}
/* grain texture overlay (тонкая, для тёмных блоков) */
.grain{position:relative}
.grain::after{content:"";position:absolute;inset:0;pointer-events:none;border-radius:inherit;opacity:.05;mix-blend-mode:overlay;background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='2'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E")}
*{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth}
body{background:var(--bg);color:var(--ink);font-family:var(--font-body);line-height:1.66;font-size:clamp(16.5px,.35vw + 16px,18px);-webkit-font-smoothing:antialiased;text-rendering:optimizeLegibility;transition:background .3s,color .3s}
a{color:var(--sepia)}
::selection{background:rgba(139,111,71,.22);color:var(--ink)}
.skip{position:absolute;left:-9999px}
.skip:focus{left:16px;top:16px;background:var(--ink);color:#fff;padding:10px 16px;border-radius:8px;z-index:200}

/* reading progress */
.progress{position:fixed;top:0;left:0;height:3px;width:0;background:linear-gradient(90deg,var(--sepia),#c8a06a);z-index:120;transition:width .1s linear}

/* header */
.hd{position:sticky;top:0;z-index:90;background:var(--header);backdrop-filter:blur(18px) saturate(150%);border-bottom:1px solid var(--line)}
.hd__in{max-width:var(--maxw);margin:0 auto;display:flex;align-items:center;justify-content:space-between;padding:13px 24px;gap:20px}
.hd__brand{display:flex;align-items:center;gap:12px;text-decoration:none;color:var(--ink)}
.hd__crest{height:46px;width:auto;display:block}
.hd__crest--dark{display:none}
[data-theme="dark"] .hd__crest--light{display:none}
[data-theme="dark"] .hd__crest--dark{display:block}
.hd__wordmark{display:flex;flex-direction:column}
.hd__name{font-family:var(--font-display);font-weight:600;font-size:22px;letter-spacing:-.005em;line-height:1.05}
.hd__tag{font-size:10px;color:var(--sepia);letter-spacing:.07em;text-transform:uppercase;margin-top:1px}
@media(max-width:560px){.hd__wordmark{display:none}}
.hd__nav{display:flex;gap:26px;align-items:center}
.hd__nav a{color:var(--ink);text-decoration:none;font-size:14.5px;position:relative}
.hd__nav a::after{content:"";position:absolute;left:0;bottom:-4px;width:0;height:1.5px;background:var(--sepia);transition:width .25s}
.hd__nav a:hover::after{width:100%}
.hd__tools{display:flex;align-items:center;gap:16px}
.theme-btn{display:flex;align-items:center;justify-content:center;width:38px;height:38px;border-radius:50%;border:1px solid var(--line);background:transparent;color:var(--ink);cursor:pointer;transition:border-color .18s,color .18s}
.theme-btn:hover{color:var(--sepia);border-color:var(--sepia)}
.theme-btn .ic-moon{display:none}
[data-theme="dark"] .theme-btn .ic-sun{display:none}
[data-theme="dark"] .theme-btn .ic-moon{display:block}
.totop{position:fixed;right:24px;bottom:24px;width:48px;height:48px;border-radius:50%;background:var(--dark);color:#fff;border:none;display:flex;align-items:center;justify-content:center;cursor:pointer;opacity:0;transform:translateY(12px) scale(.9);pointer-events:none;transition:opacity .3s,transform .3s,background .2s;z-index:110;box-shadow:0 10px 28px -10px rgba(0,0,0,.5)}
.totop.on{opacity:1;transform:none;pointer-events:auto}
.totop:hover{background:var(--sepia)}
.totop__ring{position:absolute;inset:0;transform:rotate(-90deg)}
.totop__bg{fill:none;stroke:rgba(255,255,255,.16);stroke-width:2.5}
.totop__fg{fill:none;stroke:var(--sepia);stroke-width:2.5;stroke-linecap:round;stroke-dasharray:131.95;stroke-dashoffset:131.95;transition:stroke-dashoffset .12s linear}
.totop:hover .totop__fg{stroke:#fff}
.totop__arrow{position:relative;z-index:1;transition:opacity .18s}
.totop__pct{position:absolute;inset:0;display:none;align-items:center;justify-content:center;font-size:11px;font-weight:600;font-variant-numeric:tabular-nums;z-index:2}
.totop:hover .totop__arrow{opacity:0}
.totop:hover .totop__pct{display:flex}
@media(max-width:640px){.totop{right:14px;bottom:80px}}
.hd__phone{text-align:right;text-decoration:none;color:var(--ink)}
.hd__phone b{display:block;font-size:15px}
.hd__phone span{font-size:11px;color:var(--ink-mute)}
@media(max-width:900px){.hd__nav{display:none}}

/* layout */
.layout{max-width:var(--maxw);margin:0 auto;padding:34px 24px 70px;display:grid;grid-template-columns:minmax(0,1fr) var(--rail-w);gap:46px;align-items:start}
.toc{display:none}
.content{max-width:800px}
@media(min-width:1320px) and (max-width:1680px){.layout{padding-left:84px}}
.crumbs{grid-column:1/-1;font-size:13px;color:var(--sepia);margin-bottom:4px}
.crumbs a{color:var(--sepia);text-decoration:none}

/* TOC */
.toc{position:sticky;top:84px;font-size:13.5px;max-height:calc(100vh - 110px);overflow:auto;padding-right:6px}
.toc__label{font-size:11px;text-transform:uppercase;letter-spacing:.09em;color:var(--sepia);font-weight:600;margin-bottom:14px}
.toc__list{list-style:none;border-left:1px solid var(--line)}
.toc__list a{display:block;padding:7px 0 7px 15px;margin-left:-1px;border-left:2px solid transparent;color:var(--ink-mute);text-decoration:none;line-height:1.35;transition:color .2s,border-color .2s}
.toc__list a:hover{color:var(--ink)}
.toc__list a.active{color:var(--sepia);border-left-color:var(--sepia);font-weight:500}

/* content */
.content{min-width:0}
.eyebrow{font-size:12px;text-transform:uppercase;letter-spacing:.12em;color:var(--sepia);font-weight:600;margin-bottom:12px;display:flex;align-items:center;gap:10px;flex-wrap:wrap}
.fresh{font-size:10.5px;letter-spacing:.04em;color:var(--sepia);background:rgba(139,111,71,.10);border:1px solid rgba(139,111,71,.25);border-radius:20px;padding:3px 10px;text-transform:none;font-weight:500;display:inline-flex;align-items:center;gap:6px}
.fresh::before{content:"";width:6px;height:6px;border-radius:50%;background:#3aa76d;box-shadow:0 0 0 3px rgba(58,167,109,.18)}
h1{font-family:var(--font-display);font-weight:500;font-size:clamp(2rem,3.4vw + 1rem,2.95rem);line-height:1.08;letter-spacing:-.018em;margin-bottom:14px}
.byline{display:flex;align-items:center;gap:11px;font-size:13.5px;color:var(--ink-mute);margin-bottom:28px;flex-wrap:wrap}
.byline a{color:var(--sepia);text-decoration:none}
.byline .av{width:34px;height:34px;border-radius:50%;background:linear-gradient(135deg,var(--sepia),var(--sepia-d));color:#fff;display:flex;align-items:center;justify-content:center;font-size:13px;font-weight:600;letter-spacing:.02em}
.byline .dot{color:var(--line)}
.tldr{background:linear-gradient(180deg,var(--card),var(--paper));border:1px solid var(--line);border-left:3px solid var(--sepia);border-radius:12px;padding:22px 24px;margin:0 0 30px;font-size:18px;line-height:1.6}
.tldr b{font-weight:600}
.lead-p::first-letter{font-family:var(--font-display);font-weight:500;float:left;font-size:62px;line-height:.82;padding:6px 12px 0 0;color:var(--sepia)}

/* key facts */
.keyfacts{background:var(--dark);color:var(--dark-tx);border-radius:14px;padding:24px 26px;margin:0 0 36px}
.keyfacts h2{font-family:var(--font-display);color:#fff;font-size:17px;font-weight:500;margin:0 0 14px;letter-spacing:.01em}
.keyfacts__grid{display:grid;grid-template-columns:1fr 1fr;gap:14px 26px}
.kf{display:flex;gap:12px;align-items:flex-start}
.kf__n{font-family:var(--font-display);font-size:26px;color:#d8bd92;line-height:1;flex-shrink:0;min-width:96px}
.kf__t{font-size:13px;color:#b9b3a7;line-height:1.4}
.kf__t b{color:#fff;font-weight:500}
@media(max-width:560px){.keyfacts__grid{grid-template-columns:1fr}}

h2{font-family:var(--font-display);font-weight:500;font-size:clamp(1.55rem,1.6vw + 1rem,1.9rem);line-height:1.16;margin:72px 0 22px;letter-spacing:-.012em;scroll-margin-top:84px;position:relative}
h2[id]:hover .anchor{opacity:1}
.anchor{position:absolute;left:-26px;top:.18em;opacity:0;color:var(--sepia);text-decoration:none;font-size:.7em;transition:opacity .18s;cursor:pointer}
@media(max-width:1080px){.anchor{display:none}}
h3{font-weight:600;font-size:19.5px;margin:44px 0 14px}
.answer{margin:10px 0 14px}
p{margin:0 0 20px}
/* выравнивание основного текста по ширине блока + переносы (против «рек» и дыр) */
.content .answer,.content .answer p,.content p.answer,.content .lead-p,.tldr{text-align:left;hyphens:none}
@media(max-width:560px){.content .answer,.content .answer p,.content p.answer,.content .lead-p,.tldr{text-align:left}}
ul,ol{margin:13px 0 13px 22px}
li{margin:7px 0}
strong,b{font-weight:600}

/* tables — premium editorial */
table{display:block;overflow-x:auto;width:100%;border-collapse:collapse;margin:48px 0 60px;font-size:15px;border-top:2px solid var(--sepia);-webkit-overflow-scrolling:touch}
caption{text-align:left;font-size:12.5px;letter-spacing:.02em;color:var(--ink-mute);padding:14px 0 18px;font-style:italic}
tr:nth-child(even) td{background:rgba(139,111,71,.07)}
td{line-height:1.5}
td+td,th+th{border-left:1px solid var(--line)}
td:first-child{font-weight:600;color:var(--ink)}
th,td{padding:16px 18px;text-align:left;vertical-align:top;min-width:120px}
th{font-size:11px;text-transform:uppercase;letter-spacing:.09em;color:var(--sepia);font-weight:600;border-bottom:1px solid var(--line);background:rgba(139,111,71,.08)}
td{border-bottom:1px solid var(--line);color:var(--ink-soft)}
td:first-child{font-weight:500;color:var(--ink)}
tr:last-child td{border-bottom:none}
tr{transition:background .15s}
tr:hover td{background:var(--soft)}
@media(max-width:640px){th,td{padding:12px 13px;font-size:14.5px}}

.note{background:var(--note);border:1px solid var(--line);border-left:3px solid var(--sepia);border-radius:8px;padding:15px 18px;margin:20px 0;font-size:15.5px;color:var(--ink-soft)}
.note b{color:var(--ink)}

/* expert quote (speakable, premium) */
.quote{position:relative;margin:46px 0 38px;padding:6px 0 6px 30px;border-left:2px solid var(--sepia);font-family:var(--font-display);font-size:clamp(1.2rem,1vw+1rem,1.45rem);line-height:1.42;font-style:italic;color:var(--ink)}
.quote::before{content:"\201C";position:absolute;left:14px;top:-30px;font-family:var(--font-display);font-size:84px;line-height:1;color:var(--sepia);opacity:.22;pointer-events:none}
.quote cite{display:block;margin-top:14px;font-family:var(--font-body);font-style:normal;font-size:13px;color:var(--ink-mute)}

.related-inline{background:var(--soft);border:1px solid var(--line);border-radius:10px;padding:16px 20px;margin:28px 0}
.related-inline b{font-size:11px;text-transform:uppercase;letter-spacing:.06em;color:var(--sepia)}
.related-inline a{display:block;margin:8px 0;color:var(--ink);text-decoration:none;transition:color .18s}
.related-inline a:hover{color:var(--sepia)}

/* takeaways */
.takeaways{background:linear-gradient(180deg,var(--card),var(--paper));border:1px solid var(--line);border-radius:16px;padding:28px 30px;margin:42px 0}
.takeaways h2{margin:0 0 18px;font-size:clamp(1.35rem,1.2vw+1rem,1.6rem)}
.takeaways ol{list-style:none;margin:0;counter-reset:tk}
.takeaways li{counter-increment:tk;position:relative;padding-left:44px;margin:15px 0;font-size:16px;line-height:1.55}
.takeaways li::before{content:counter(tk,decimal-leading-zero);position:absolute;left:0;top:-2px;font-family:var(--font-display);font-size:20px;font-weight:500;color:var(--sepia);font-feature-settings:"tnum"}
.takeaways li::after{content:"";position:absolute;left:1px;top:26px;bottom:-12px;width:1px;background:var(--line)}
.takeaways li:last-child::after{display:none}

/* FAQ accordion */
.faq{margin-top:14px}
.faq details{border-bottom:1px solid var(--line)}
.faq summary{cursor:pointer;list-style:none;padding:16px 0;font-weight:600;font-size:17px;display:flex;justify-content:space-between;gap:16px;align-items:center}
.faq summary::-webkit-details-marker{display:none}
.faq summary::after{content:"+";color:var(--sepia);font-size:22px;font-weight:400;transition:transform .2s}
.faq details[open] summary::after{transform:rotate(45deg)}
.faq details p{margin:0 0 18px;color:var(--ink-soft);font-size:15.5px}

/* glossary */
.gloss{display:grid;grid-template-columns:1fr 1fr;gap:12px 22px;margin:18px 0}
.gloss div{font-size:14.5px}
.gloss dt{font-weight:600;color:var(--sepia)}
.gloss dd{color:var(--ink-soft);margin:2px 0 0}
@media(max-width:560px){.gloss{grid-template-columns:1fr}}

.author{display:flex;gap:20px;align-items:flex-start;background:linear-gradient(180deg,var(--card),var(--paper));border:1px solid var(--line);border-radius:18px;padding:26px 28px;margin:44px 0 8px}
.author__av{width:64px;height:64px;border-radius:50%;background:linear-gradient(135deg,var(--sepia),var(--sepia-d));color:#fff;display:flex;align-items:center;justify-content:center;font-family:var(--font-display);font-size:23px;font-weight:500;flex-shrink:0;letter-spacing:.02em}
.author__name{font-family:var(--font-display);font-size:21px;font-weight:500}
.author__role{font-size:13px;color:var(--sepia);margin:2px 0 10px}
.author__bio{font-size:14.5px;color:var(--ink-soft);line-height:1.58;margin:0}
.author__meta{display:flex;gap:18px;flex-wrap:wrap;margin-top:13px;font-size:12.5px;color:var(--ink-mute)}
.author__meta a{color:var(--sepia);text-decoration:none}
.author__meta a:hover{text-decoration:underline}
@media(max-width:560px){.author{flex-direction:column;gap:14px}}
.src{font-size:13.5px;color:var(--ink-mute);border-top:1px solid var(--line);margin-top:36px;padding-top:18px;line-height:1.6}
.refs{border-top:1px solid var(--line);margin-top:36px;padding-top:24px}
.refs h2{font-size:clamp(1.15rem,1vw+1rem,1.35rem);margin:0 0 16px}
.refs ol{counter-reset:rf;list-style:none;margin:0}
.refs li{counter-increment:rf;position:relative;padding-left:38px;margin:11px 0;font-size:13.5px;color:var(--ink-soft);line-height:1.5}
.refs li::before{content:counter(rf);position:absolute;left:0;top:1px;font-family:var(--font-display);font-size:12.5px;color:var(--sepia);font-weight:600;width:24px;height:24px;border:1px solid var(--line);border-radius:50%;display:flex;align-items:center;justify-content:center}
.refs a{color:var(--sepia);text-decoration:none}
.refs a:hover{text-decoration:underline}
.refs__note{font-size:12.5px;color:var(--ink-mute);margin-top:16px;font-style:italic;line-height:1.55}

/* rail form */
.rail{position:sticky;top:84px}
.railform{background:var(--card);border:1px solid var(--line);border-radius:18px;padding:24px 22px 20px;box-shadow:0 22px 54px -28px rgba(26,26,26,.4),0 2px 6px rgba(0,0,0,.04)}
.railform__badge{display:inline-block;font-size:11px;font-weight:600;letter-spacing:.04em;text-transform:uppercase;color:var(--sepia);background:rgba(139,111,71,.10);border:1px solid rgba(139,111,71,.22);padding:5px 11px;border-radius:20px;margin-bottom:13px}
.railform__title{font-family:var(--font-display);font-weight:500;font-size:22px;line-height:1.15;margin:0 0 6px}
.railform__sub{font-size:13px;color:var(--ink-soft);margin:0 0 16px;line-height:1.45}
.fld{width:100%;font:inherit;font-size:14.5px;padding:12px 14px;margin-bottom:9px;border:1px solid var(--line);border-radius:10px;background:#fff;color:var(--ink);transition:border-color .18s,box-shadow .18s}
.fld:focus{outline:none;border-color:var(--sepia);box-shadow:0 0 0 3px rgba(139,111,71,.12)}
.hp{position:absolute;left:-9999px;width:1px;height:1px;opacity:0}
.policy{display:flex;gap:9px;align-items:flex-start;font-size:11.5px;color:var(--ink-soft);margin:3px 0 13px;line-height:1.45}
.policy input{margin-top:2px;accent-color:var(--sepia)}
.policy a{color:var(--sepia)}
.submit{width:100%;background:var(--dark);color:#fff;border:none;font:inherit;font-weight:600;font-size:15px;padding:14px;border-radius:11px;cursor:pointer;min-height:50px;transition:background .18s,transform .1s}
.submit:hover{background:var(--sepia)}
.submit:active{transform:translateY(1px)}
.formmsg{font-size:12.5px;color:#b3261e;margin-top:8px}
.railform__trust{margin-top:15px;padding-top:14px;border-top:1px solid var(--line);display:flex;flex-direction:column;gap:6px;font-size:11.5px;color:var(--ink-mute);line-height:1.4}
.railform__trust b{color:var(--ink)}
.success{display:none;text-align:center;padding:6px 0}
.success.on{display:block}
.success__ic{width:54px;height:54px;border-radius:50%;background:rgba(139,111,71,.14);color:var(--sepia);display:flex;align-items:center;justify-content:center;margin:0 auto 12px}
.success h3{margin:0 0 6px}
.success p{font-size:13.5px;color:var(--ink-soft);margin:0 0 10px}
.success a{color:var(--sepia)}

/* related cards */
.related{max-width:var(--maxw);margin:0 auto;padding:14px 24px 30px}
.related__head{display:flex;align-items:baseline;justify-content:space-between;margin-bottom:20px}
.related__head h2{font-family:var(--font-display);font-weight:500;font-size:28px;margin:0}
.related__head a{font-size:14px;color:var(--sepia);text-decoration:none}
.related__grid{display:grid;grid-template-columns:repeat(3,1fr);gap:18px}
.card{display:block;background:var(--card);border:1px solid var(--line);border-radius:14px;overflow:hidden;text-decoration:none;color:var(--ink);transition:transform .25s cubic-bezier(.2,.8,.3,1),box-shadow .25s}
.card:hover{transform:translateY(-5px);box-shadow:0 22px 44px -20px rgba(0,0,0,.26)}
.card__cover{height:92px;display:flex;align-items:center;justify-content:center;background:linear-gradient(135deg,var(--soft),var(--paper));border-bottom:1px solid var(--line);position:relative;overflow:hidden}
.card__cover span{font-family:var(--font-display);font-style:italic;font-size:30px;color:var(--sepia);opacity:.92;letter-spacing:.01em}
.card__cover::after{content:"";position:absolute;right:-30px;bottom:-30px;width:90px;height:90px;border:1px solid var(--line);border-radius:50%;opacity:.6}
.card:hover .card__cover span{transform:scale(1.04);transition:transform .25s}
.card__body{padding:18px 22px 20px}
.card__cat{font-size:11px;text-transform:uppercase;letter-spacing:.05em;color:var(--sepia)}
.card__title{font-family:var(--font-display);font-weight:500;font-size:18.5px;line-height:1.25;margin:9px 0 11px}
.card__meta{font-size:12.5px;color:var(--ink-mute)}

/* footer */
.ft{background:#1A1A1A;color:#b9b3a7;margin-top:52px}
.ft__in{max-width:var(--maxw);margin:0 auto;padding:52px 24px 30px;display:grid;grid-template-columns:1.5fr 1fr 1fr 1fr;gap:36px}
.ft__crest{height:58px;width:auto;display:block;margin-bottom:12px;opacity:.92}
.ft__name{font-family:var(--font-display);font-weight:600;font-size:25px;color:#fff;letter-spacing:-.01em}
.ft__tag{font-size:13px;color:#9a9489;line-height:1.6;margin:12px 0 16px;max-width:330px}
.ft__contacts{display:flex;flex-direction:column;gap:7px;font-size:13.5px}
.ft__contacts a{color:#e6e0d4;text-decoration:none}
.ft__contacts a:hover{color:var(--sepia)}
.ft__contacts span{color:#8a857a;font-size:12.5px}
.ft__h{font-size:11px;text-transform:uppercase;letter-spacing:.07em;color:var(--sepia);font-weight:600;margin-bottom:13px}
.ft__col a{display:block;color:#cfc8ba;text-decoration:none;font-size:13.5px;margin:8px 0;transition:color .18s}
.ft__col a:hover{color:#fff}
.ft__bottom{border-top:1px solid #2c2a25;max-width:var(--maxw);margin:0 auto;padding:18px 24px 32px;display:flex;justify-content:space-between;gap:14px;flex-wrap:wrap;font-size:12px;color:#7d786d}
.ft__bottom a{color:#9a9489;text-decoration:none}
.ft__bottom a:hover{color:#cfc8ba}
@media(max-width:860px){.ft__in{grid-template-columns:1fr 1fr;gap:28px}.ft__bottom{flex-direction:column;gap:8px}}
@media(max-width:520px){.ft__in{grid-template-columns:1fr}}

/* hero band */
.hero{position:relative;margin:0 0 22px;padding:30px 32px 26px;border-radius:20px;background:radial-gradient(130% 150% at 0% 0%,var(--card),var(--paper));border:1px solid var(--line);overflow:hidden;min-height:360px}
.hero>*{position:relative;z-index:1}
.hero__crest{position:absolute;right:-26px;top:-22px;width:188px;height:auto;opacity:.07;pointer-events:none;z-index:0;aspect-ratio:188/137}
.hero__crest--dark{display:none}
[data-theme="dark"] .hero__crest--light{display:none}
[data-theme="dark"] .hero__crest--dark{display:block;opacity:.05}
.hero h1{margin-bottom:12px}
.hero .byline{margin-bottom:0}
@media(max-width:560px){.hero{padding:22px 20px;min-height:440px}.hero__crest{width:130px;right:-14px}}
/* marginalia / sidenotes */
.sidenote{font-size:13.5px;color:var(--ink-soft);line-height:1.5;border-left:2px solid var(--sepia);padding:2px 0 2px 14px;margin:14px 0}
.sidenote b{color:var(--ink);font-weight:600}
/* настоящие поля только при достаточной ширине (иначе остаётся аккуратной врезкой) */
@media(min-width:1440px){
  .layout{--maxw-inner:1320px;max-width:1320px}
  .content{padding-right:0}
  .sidenote{float:right;clear:right;width:200px;margin:6px 0 18px 26px;border-left:none;border-top:2px solid var(--sepia);padding:10px 0 0;font-size:12.5px;line-height:1.45;color:var(--ink-mute)}
  .sidenote b{color:var(--ink)}
}
/* term tooltips */
.term{border-bottom:1px dashed var(--sepia);cursor:help;position:relative;font-style:normal;outline:none}
.term::after{content:attr(data-tip);position:absolute;left:0;bottom:150%;width:max-content;max-width:280px;background:var(--dark);color:var(--dark-tx);padding:10px 13px;border-radius:9px;font-family:var(--font-body);font-size:12.5px;font-weight:400;font-style:normal;line-height:1.45;letter-spacing:normal;box-shadow:0 12px 30px -10px rgba(0,0,0,.5);opacity:0;visibility:hidden;transform:translateY(5px);transition:opacity .18s,transform .18s;z-index:80;pointer-events:none;white-space:normal}
.term::before{content:"";position:absolute;left:15px;bottom:150%;border:6px solid transparent;border-top-color:var(--dark);margin-bottom:-11px;opacity:0;visibility:hidden;transition:opacity .18s;z-index:80}
.term:hover::after,.term:focus::after,.term:hover::before,.term:focus::before{opacity:1;visibility:visible;transform:none}
@media(max-width:560px){.term::after{left:auto;right:0;max-width:220px}}
/* section numbers before H2 */
.content{counter-reset:sec}
.content h2[id]{counter-increment:sec}
.content h2[id]::after{content:counter(sec,decimal-leading-zero);position:static;display:inline-block;margin-left:10px;vertical-align:super;font-family:var(--font-body);font-size:11px;font-weight:600;letter-spacing:.1em;color:var(--sepia);opacity:.55}
@media(max-width:1180px){.content h2[id]::after{position:static;display:inline-block;margin:0 0 4px;opacity:.8}}
/* share + pdf */
.share{display:flex;align-items:center;gap:9px;flex-wrap:wrap;margin:20px 0 2px}
.share__label{font-size:12.5px;color:var(--ink-mute)}
.share a,.share button{display:inline-flex;align-items:center;gap:7px;border:1px solid var(--line);background:var(--bg);color:var(--ink-soft);border-radius:9px;padding:8px 13px;font:inherit;font-size:12.5px;cursor:pointer;text-decoration:none;transition:border-color .18s,color .18s}
.share a:hover,.share button:hover{border-color:var(--sepia);color:var(--ink)}
.share svg{color:var(--sepia)}
/* tooltip terms */
dfn{font-style:normal;border-bottom:1px dashed var(--sepia);cursor:help}
/* print / PDF */
@media print{
  .hd,.toc,.rail,.totop,.ck,.share,.mtoc,.theme-btn,.related,.trust,.flow__arrow,.anchor{display:none!important}
  .layout{display:block;max-width:none;padding:0;gap:0}
  body{background:#fff!important;color:#000!important;font-size:11.5pt}
  a{color:#000!important;text-decoration:none}
  .keyfacts,.calc{background:#fff!important;color:#000!important;border:1px solid #bbb}
  .keyfacts h2,.calc h3,.kf__n{color:#000!important}
  .ft{background:#fff!important;color:#000!important}
  h1{font-size:22pt}h2{font-size:15pt}
  .flow__node,.note,.takeaways,.author,.tldr{break-inside:avoid}
}
/* flow diagram */
.flow{margin:32px 0;padding:24px 26px;background:linear-gradient(180deg,var(--card),var(--paper));border:1px solid var(--line);border-radius:16px}
.flow__title{font-family:var(--font-display);font-size:18px;font-weight:500;margin:0 0 18px}
.flow__row{display:flex;align-items:stretch;overflow-x:auto;-webkit-overflow-scrolling:touch}
.flow__node{flex:1;min-width:150px;background:var(--bg);border:1px solid var(--line);border-radius:12px;padding:14px 15px;text-align:center}
.flow__node b{display:block;font-family:var(--font-display);font-size:15px;color:var(--ink);margin-bottom:4px}
.flow__node span{font-size:12px;color:var(--ink-soft);line-height:1.38}
.flow__arrow{display:flex;align-items:center;justify-content:center;color:var(--sepia);padding:0 6px;flex-shrink:0}
@media(max-width:680px){.flow__row{flex-direction:column}.flow__arrow{transform:rotate(90deg);padding:8px 0}}
/* inline footnotes */
.fn{font-size:.64em;vertical-align:super;line-height:0;margin-left:1px;color:var(--sepia);text-decoration:none;font-weight:600}
.fn:hover{text-decoration:underline}
.refs li{scroll-margin-top:90px}
/* mini calculator */
.calc{margin:30px 0;background:var(--dark);color:var(--dark-tx);border-radius:16px;padding:26px 28px}
.calc h3{font-family:var(--font-display);color:#fff;font-weight:500;font-size:20px;margin:0 0 4px}
.calc__sub{font-size:13px;color:#b3ada0;margin:0 0 18px;line-height:1.45}
.calc__row{display:grid;grid-template-columns:1.3fr 1fr;gap:14px}
.calc__label{display:block;font-size:12px;color:#cfc8ba;margin-bottom:6px}
.calc select,.calc input{width:100%;font:inherit;font-size:14.5px;padding:11px 13px;border-radius:10px;border:1px solid #3a382f;background:#26241d;color:#fff;-webkit-appearance:none;appearance:none}
.calc select:focus,.calc input:focus{outline:none;border-color:var(--sepia)}
.calc__out{margin-top:18px;padding:16px 18px;border-radius:12px;border:1px solid #3a382f;background:#1f1d17}
.calc__verdict{font-family:var(--font-display);font-size:18px;font-weight:500;margin:0 0 4px}
.calc__verdict.yes{color:#7ee0a7}
.calc__verdict.no{color:#e0c07e}
.calc__desc{font-size:13.5px;color:#cfc8ba;line-height:1.5}
.calc__law{font-size:11.5px;color:#9a9489;margin-top:8px}
@media(max-width:560px){.calc__row{grid-template-columns:1fr}}
/* trust registries */
.trust{max-width:var(--maxw);margin:30px auto 0;padding:0 24px}
.trust__box{background:linear-gradient(180deg,var(--card),var(--paper));border:1px solid var(--line);border-radius:16px;padding:22px 26px;display:flex;align-items:center;gap:22px;flex-wrap:wrap;justify-content:space-between}
.trust__lead{font-size:13px;color:var(--ink-mute)}
.trust__lead b{font-family:var(--font-display);color:var(--ink);font-weight:500;font-size:16px;display:block;margin-bottom:3px}
.trust__badges{display:flex;gap:12px;flex-wrap:wrap}
.badge{display:flex;align-items:center;gap:8px;border:1px solid var(--line);border-radius:10px;padding:9px 14px;font-size:12.5px;color:var(--ink-soft);text-decoration:none;transition:border-color .18s,color .18s;background:var(--bg)}
.badge:hover{border-color:var(--sepia);color:var(--ink)}
.badge svg{color:var(--sepia);flex-shrink:0}
.badge b{color:var(--ink);font-weight:600}
/* cookie */
.ck{position:fixed;left:20px;right:20px;bottom:20px;z-index:130;max-width:720px;margin:0 auto;display:grid;grid-template-columns:auto 1fr auto;gap:16px;align-items:center;padding:14px 18px;background:rgba(26,26,26,.95);backdrop-filter:blur(20px) saturate(140%);color:#F4F1EB;border:1px solid rgba(255,255,255,.08);border-radius:14px;box-shadow:0 12px 40px -12px rgba(0,0,0,.5);transform:translateY(140%);opacity:0;transition:transform .45s cubic-bezier(.2,.8,.3,1.1),opacity .35s}
.ck.on{transform:translateY(0);opacity:1}
.ck.off{transform:translateY(140%);opacity:0}
.ck__ic{width:34px;height:34px;border-radius:50%;background:rgba(139,111,71,.22);color:#d8bd92;display:flex;align-items:center;justify-content:center;flex-shrink:0}
.ck__t b{font-size:13.5px;font-weight:600;display:block}
.ck__t span{font-size:12px;color:#b9b3a7;line-height:1.4}
.ck__t a{color:#d8d2c6}
.ck__act{display:flex;gap:8px;flex-shrink:0}
.ck__b{font:inherit;font-size:13px;font-weight:600;padding:11px 16px;border-radius:9px;border:1px solid;cursor:pointer;min-height:44px;white-space:nowrap}
.ck__b--s{background:transparent;color:#b9b3a7;border-color:#3a382f}
.ck__b--s:hover{color:#fff;border-color:#6a6557}
.ck__b--p{background:var(--sepia);color:#fff;border-color:var(--sepia)}
.ck__b--p:hover{background:#9a7b50}
@media(max-width:640px){.ck{grid-template-columns:1fr;gap:12px;left:12px;right:12px;bottom:12px}.ck__ic{display:none}.ck__act{width:100%}.ck__b{flex:1}}

/* reveal animation */
.reveal{opacity:0;transform:translateY(16px);transition:opacity .6s ease,transform .6s cubic-bezier(.2,.8,.3,1)}
.reveal.in{opacity:1;transform:none}
@media(prefers-reduced-motion:reduce){.reveal{opacity:1;transform:none;transition:none}.progress{display:none}}


@media(max-width:860px){.layout{grid-template-columns:1fr}.rail{position:static;margin-top:14px}.related__grid{grid-template-columns:1fr}h1{font-size:33px}body{font-size:16.5px}}

/* mobile TOC */
.mtoc{display:none}
@media(max-width:1080px){.mtoc{display:block;margin:0 0 26px}.mtoc summary{cursor:pointer;font-size:13px;font-weight:600;color:var(--sepia);padding:13px 16px;background:var(--soft);border:1px solid var(--line);border-radius:10px;list-style:none}.mtoc ol{margin:12px 0 0 20px;font-size:14.5px}.mtoc a{color:var(--ink-soft);text-decoration:none}}
</style>
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
              <a href="/komanda/">Команда</a>
              <a href="/#faq">FAQ</a>
              <a href="/#contacts">Связаться</a>
            </nav>

            <div class="v2-header-aside">
              <span class="v2-phone-label">С 2009 · Вся РФ</span>
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
              <a href="/komanda/">Команда</a>
            <a href="/#faq">FAQ</a>
            <a class="v2-mobile-cta" href="/#contacts">Получить расчёт</a>
          </nav>
        </header>

<div class="layout">
  <nav class="crumbs" aria-label="Хлебные крошки"><a href="/">Главная</a> › <a href="/baza-znaniy/">База знаний</a> › Распоряжение о совершении казначейского платежа</nav>

  <aside class="toc" aria-label="Содержание">
    <div class="toc__label">Содержание</div>
    <ul class="toc__list" id="tocList">
      <li><a href="#chto-takoe">Что такое РСКП</a></li>
      <li><a href="#skp">Система казначейских платежей</a></li>
      <li><a href="#vidy">Виды распоряжений</a></li>
      <li><a href="#rekvizity">Реквизиты и заполнение</a></li>
      <li><a href="#kak">Как сформировать и подписать</a></li>
      <li><a href="#vozvrat">Возврат распоряжения</a></li>
      <li><a href="#ispravit">Как исправить и направить заново</a></li>
      <li><a href="#ks">РСКП и казначейское сопровождение</a></li>
      <li><a href="#oshibki">Частые ошибки</a></li>
      <li><a href="#keys">Пример из практики</a></li>
      <li><a href="#glossary">Глоссарий</a></li>
      <li><a href="#faq">Частые вопросы</a></li>
    </ul>
  </aside>

  <article class="content" id="main">
    <div class="hero">
      <img class="hero__crest hero__crest--light" src="/img/logogold-crest.webp" alt="" aria-hidden="true" width="188" height="137" decoding="async" loading="lazy">
      <img class="hero__crest hero__crest--dark" src="/img/LogoWhite.png" alt="" aria-hidden="true" width="188" height="137" decoding="async" loading="lazy">
      <div class="eyebrow">База знаний · Операции <span class="fresh">Актуально на 2026</span></div>
    <h1>Распоряжение о совершении казначейского платежа: заполнение, реквизиты и возврат</h1>
    <div class="byline"><span class="av">ЯМ</span><span>Автор: <a href="/komanda/mihailov-yaroslav/">Ярослав Михайлов</a>, главный эксперт</span><span class="dot">·</span><span>15+ лет в Казначействе</span><span class="dot">·</span><span>14 мин чтения</span><span class="dot">·</span><span>Обновлено 9 июня 2026</span></div>
    </div>

    <div class="share">
      <span class="share__label">Поделиться:</span>
      <a href="https://t.me/share/url?url=https%3A%2F%2Fkaznaexpert.ru%2Fbaza-znaniy%2Frasporyazhenie-o-sovershenii-kaznacheyskogo-platezha%2F&amp;text=%D0%A0%D0%B0%D1%81%D0%BF%D0%BE%D1%80%D1%8F%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5%20%D0%BE%20%D1%81%D0%BE%D0%B2%D0%B5%D1%80%D1%88%D0%B5%D0%BD%D0%B8%D0%B8%20%D0%BA%D0%B0%D0%B7%D0%BD%D0%B0%D1%87%D0%B5%D0%B9%D1%81%D0%BA%D0%BE%D0%B3%D0%BE%20%D0%BF%D0%BB%D0%B0%D1%82%D0%B5%D0%B6%D0%B0%3A%20%D0%B7%D0%B0%D0%BF%D0%BE%D0%BB%D0%BD%D0%B5%D0%BD%D0%B8%D0%B5%20%D0%B8%20%D0%B2%D0%BE%D0%B7%D0%B2%D1%80%D0%B0%D1%82" target="_blank" rel="noopener"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.56 8.25l-1.86 8.76c-.14.62-.5.77-1.02.48l-2.82-2.08-1.36 1.31c-.15.15-.28.28-.57.28l.2-2.89 5.27-4.76c.23-.2-.05-.32-.35-.12l-6.51 4.1-2.8-.88c-.61-.19-.62-.61.13-.9l10.95-4.22c.5-.18.95.12.79.85z"/></svg>Telegram</a>
      <button type="button" id="copyLink"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.07 0l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.07 0l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg><span>Копировать ссылку</span></button>
      <button type="button" id="printBtn"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9V2h12v7M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2M6 14h12v8H6z"/></svg>Скачать PDF</button>
    </div>

    <details class="mtoc"><summary>Содержание статьи</summary>
      <ol>
        <li><a href="#chto-takoe">Что такое РСКП</a></li><li><a href="#skp">Система казначейских платежей</a></li><li><a href="#vidy">Виды распоряжений</a></li><li><a href="#rekvizity">Реквизиты и заполнение</a></li><li><a href="#kak">Как сформировать и подписать</a></li><li><a href="#vozvrat">Возврат распоряжения</a></li><li><a href="#ispravit">Как исправить и направить заново</a></li><li><a href="#ks">РСКП и казначейское сопровождение</a></li><li><a href="#oshibki">Частые ошибки</a></li><li><a href="#keys">Пример из практики</a></li><li><a href="#glossary">Глоссарий</a></li><li><a href="#faq">Частые вопросы</a></li>
      </ol>
    </details>

    <div class="tldr">Распоряжение о совершении казначейского платежа (РСКП) — это электронный документ-основание, по которому Федеральное казначейство проводит операцию в системе казначейских платежей: перечисление, возврат или уточнение средств. Формы и реквизиты установлены Порядком казначейского обслуживания (приказ Казначейства России от 14.05.2020 № 21н), а сама система казначейских платежей — статьями 242.7–242.16 Бюджетного кодекса РФ. Если в распоряжении есть ошибка, казначейство возвращает его без исполнения.<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a></div>

    <section class="keyfacts grain" aria-label="Ключевые факты">
      <h2>Коротко о главном</h2>
      <div class="keyfacts__grid">
        <div class="kf"><div class="kf__n">№ 21н</div><div class="kf__t"><b>Порядок</b> — приказ Казначейства от 14.05.2020</div></div>
        <div class="kf"><div class="kf__n">ст. 242.7</div><div class="kf__t"><b>Основание</b> — система казначейских платежей в БК РФ</div></div>
        <div class="kf"><div class="kf__n">3 вида</div><div class="kf__t"><b>Распоряжения</b> — перечисление, возврат, уточнение</div></div>
        <div class="kf"><div class="kf__n">УКЭП</div><div class="kf__t"><b>Подпись</b> — первая (руководитель) и вторая (главбух)</div></div>
        <div class="kf"><div class="kf__n">возврат</div><div class="kf__t"><b>Если ошибка</b> — распоряжение возвращают без исполнения</div></div>
        <div class="kf"><div class="kf__n">эл. вид</div><div class="kf__t"><b>Документооборот</b> — структурированно, через системы казначейства</div></div>
      </div>
    </section>

    <h2 id="chto-takoe">Что такое распоряжение о совершении казначейского платежа</h2>
    <div class="answer reveal">
      <p class="lead-p">Распоряжение о совершении казначейского платежа (РСКП) — это электронный документ, на основании которого Федеральное казначейство проводит операцию в системе казначейских платежей: перечисляет, возвращает или уточняет средства. Его формируют участники системы и направляют в территориальный орган казначейства, где по распоряжению создаётся платёжный документ. Реквизиты и формы распоряжений установлены Порядком казначейского обслуживания (приказ Казначейства России от 14.05.2020 № 21н).<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a></p>
      <p>Если объяснять проще, распоряжение — это «команда» казначейству на движение денег. Сам по себе казначейский платёж не происходит: сначала нужен документ-основание с точными реквизитами, который казначейство проверит и исполнит. Поэтому корректно заполненное распоряжение — это условие того, что деньги уйдут вовремя и по назначению. Ошибка в реквизитах оборачивается возвратом распоряжения и задержкой платежа.</p>
    </div>

    <h2 id="lk-podrazdel">Как перейти в подраздел «Распоряжения» в личном кабинете</h2>
    <div class="answer reveal"><p>Подраздел с распоряжениями находится в личном кабинете ГИИС «Электронный бюджет», в модуле казначейского сопровождения. Чтобы в него перейти, войдите в «Электронный бюджет» по сертификату, выберите нужную организацию и полномочие, затем откройте раздел казначейского сопровождения — внутри него находится подраздел формирования распоряжений о совершении казначейских платежей.</p></div>
    <ol class="howto">
      <li><b>Войти в «Электронный бюджет».</b> Авторизуйтесь по сертификату электронной подписи нужной организации.</li>
      <li><b>Выбрать полномочие.</b> Убедитесь, что выбран профиль с полномочием по казначейскому сопровождению.</li>
      <li><b>Открыть модуль казначейского сопровождения.</b> В главном меню перейдите в раздел учёта и отчётности по целевым средствам.</li>
      <li><b>Найти подраздел «Распоряжения».</b> Внутри модуля выберите формирование распоряжений о совершении казначейского платежа.</li>
      <li><b>Создать документ.</b> Нажмите создание нового распоряжения и заполните реквизиты.</li>
    </ol>
    <h3 id="net-podrazdela">Почему подраздела «Распоряжения» нет и что делать</h3>
    <div class="answer reveal"><p>Если в личном кабинете нет подраздела «Распоряжения», дело почти всегда в правах доступа или профиле, а не в самой системе. Подраздел не отображается, пока пользователю не назначено соответствующее полномочие или не подключён нужный компонент.</p></div>
    <table>
      <caption>Почему нет подраздела «Распоряжения» и как исправить</caption>
      <tr><th>Причина</th><th>Что сделать</th></tr>
      <tr><td>Не назначено полномочие по казначейскому сопровождению</td><td>Запросить у руководителя организации (администратора профиля) нужную роль в «Электронном бюджете»</td></tr>
      <tr><td>Выбран не тот профиль или организация</td><td>Сменить организацию либо полномочие в верхней части кабинета</td></tr>
      <tr><td>Не подключён компонент казначейского сопровождения</td><td>Проверить подключение организации к казначейскому сопровождению</td></tr>
      <tr><td>Нет открытого лицевого счёта</td><td>Сначала <a href="/baza-znaniy/licevoy-schet-71-kak-otkryt/">открыть лицевой счёт</a> — без него распоряжения недоступны</td></tr>
      <tr><td>Проблема с сертификатом или настройкой рабочего места</td><td>Проверить сертификат и настройку АРМ; входить по подписи нужной организации</td></tr>
    </table>
    <p>Если полномочие назначено, профиль верный и лицевой счёт открыт, а подраздел всё равно не появляется — обратитесь в техподдержку «Электронного бюджета» или к оператору ТОФК. Как подключиться к системе и войти по сертификату, разобрано в материале о <a href="/baza-znaniy/elektronnyy-byudzhet-dlya-ispolnitelya-kontrakta/">ГИИС «Электронный бюджет» для исполнителя</a>.</p>
    <script type="application/ld+json">
    {"@context": "https://schema.org", "@type": "HowTo", "name": "Как перейти в подраздел Распоряжения в личном кабинете", "inLanguage": "ru-RU", "step": [{"@type": "HowToStep", "position": 1, "name": "Войти в Электронный бюджет", "text": "Авторизоваться по сертификату электронной подписи нужной организации."}, {"@type": "HowToStep", "position": 2, "name": "Выбрать полномочие", "text": "Выбрать профиль с полномочием по казначейскому сопровождению."}, {"@type": "HowToStep", "position": 3, "name": "Открыть модуль казначейского сопровождения", "text": "Перейти в раздел учёта и отчётности по целевым средствам."}, {"@type": "HowToStep", "position": 4, "name": "Найти подраздел Распоряжения", "text": "Выбрать формирование распоряжений о совершении казначейского платежа."}, {"@type": "HowToStep", "position": 5, "name": "Создать документ", "text": "Создать новое распоряжение и заполнить реквизиты."}]}
    </script>
    <h2 id="skp">Система казначейских платежей: как она устроена</h2>
    <div class="answer reveal">
      <p>Распоряжение существует не само по себе, а внутри системы казначейских платежей (СКП) — механизма, через который проходят расчёты бюджетов и участников казначейского обслуживания. Правовая основа СКП — статьи 242.7–242.16 Бюджетного кодекса РФ; правила её организации и функционирования устанавливает Федеральное казначейство.<a class="fn" href="#ref-2" aria-label="Источник 2">[2]</a> Именно на основании пункта 5 статьи 242.7 БК РФ утверждён порядок, по которому прямые участники представляют распоряжения в казначейство.</p>
      <p>В системе различают прямых и косвенных участников. Прямые участники представляют распоряжения напрямую в орган Федерального казначейства; косвенные действуют через прямых. Для исполнителя госконтракта это важно понимать, потому что от статуса зависит, кто и в каком виде формирует распоряжение и какие реквизиты в нём обязательны.</p>
    </div>
    <table>
      <caption>Место распоряжения в системе казначейских платежей</caption>
      <tr><th>Элемент</th><th>Что обозначает</th></tr>
      <tr><td>Система казначейских платежей (СКП)</td><td>Механизм расчётов через единый казначейский счёт (ст. 242.7–242.16 БК РФ)</td></tr>
      <tr><td>Распоряжение (РСКП)</td><td>Документ-основание для совершения казначейского платежа</td></tr>
      <tr><td>Прямой участник</td><td>Представляет распоряжения напрямую в орган казначейства</td></tr>
      <tr><td>Орган Федерального казначейства</td><td>Проверяет распоряжение и проводит платёж</td></tr>
    </table>

    <h2 id="vidy">Виды распоряжений о совершении казначейского платежа</h2>
    <div class="answer reveal">
      <p>Распоряжение — это не один документ, а группа форм под разные операции. Порядок казначейского обслуживания закрепляет формы распоряжений в приложениях № 15–26, а структурированные реквизиты — в приложениях № 1–4.<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a> На практике исполнителю важно различать три базовых типа: перечисление, возврат и уточнение.</p>
    </div>
    <table>
      <caption>Основные виды распоряжений о совершении казначейских платежей</caption>
      <tr><th>Вид распоряжения</th><th>Когда применяется</th></tr>
      <tr><td>Перечисление</td><td>Перевод средств получателю по операции (основной платёж)</td></tr>
      <tr><td>Возврат</td><td>Возврат излишне уплаченных, ошибочных или подлежащих возврату сумм</td></tr>
      <tr><td>Уточнение</td><td>Исправление реквизитов уже проведённого/невыясненного платежа</td></tr>
    </table>
    <div class="note"><b>Не путать.</b> «Распоряжение о совершении казначейского платежа (возврат)» как вид документа — это не то же самое, что «возврат распоряжения» казначейством. Первое — форма для операции возврата средств; второе — ситуация, когда казначейство возвращает заявителю любое распоряжение без исполнения из-за ошибок. Про вторую ситуацию — отдельный раздел ниже.</div>

    <h2 id="rekvizity">Реквизиты распоряжения и правила заполнения</h2>
    <div class="answer reveal">
      <p>С 2023 года распоряжения заполняются в структурированном виде — по набору реквизитов, приведённых в приложениях к Порядку № 21н.<a class="fn" href="#ref-1" aria-label="Источник 1">[1]</a> Это означает, что значения вносятся в отдельные поля, а не «сплошным текстом», и каждое поле проверяется по справочникам. Ниже — ключевые группы реквизитов, на которые приходится большинство ошибок.</p>
    </div>
    <table>
      <caption>Ключевые реквизиты распоряжения о совершении казначейского платежа</caption>
      <tr><th>Группа</th><th>Что указывают</th></tr>
      <tr><td>Реквизиты отправителя</td><td>Лицевой счёт клиента; прочие реквизиты подтягиваются из справочника</td></tr>
      <tr><td>Реквизиты получателя</td><td>Наименование, счёт, банк/казначейские реквизиты</td></tr>
      <tr><td>Сумма и назначение платежа</td><td>Сумма цифрами; назначение — с идентификаторами (ИГК при казначейском сопровождении)</td></tr>
      <tr><td>Коды бюджетной классификации</td><td>КБК/аналитический код, код цели — где требуется</td></tr>
      <tr><td>Основание</td><td>Реквизиты договора/контракта, документа-основания</td></tr>
      <tr><td>Подписи</td><td>УКЭП лица с правом первой и второй подписи</td></tr>
    </table>
    <div class="note"><b>Подсказка.</b> При казначейском сопровождении в назначении платежа указывают идентификатор государственного контракта (ИГК) — без него платёж не связывается с контрактом. Как устроен ИГК — в разборе <a href="/baza-znaniy/identifikator-gosudarstvennogo-kontrakta-igk/">«Идентификатор государственного контракта (ИГК)»</a>.</div>

    <h2 id="kak">Как сформировать и подписать распоряжение: пошагово</h2>
    <div class="answer reveal">
      <p>Порядок формирования зависит от системы (ГИИС «Электронный бюджет», ПК казначейства, бухгалтерское ПО), но логика везде одна. Распоряжение в электронной форме подписывается усиленной квалифицированной электронной подписью: лицом с правом первой подписи (руководитель) и лицом с правом второй подписи (главный бухгалтер) — либо иными уполномоченными лицами.</p>
    </div>
    <table>
      <caption>Формирование распоряжения о совершении казначейского платежа</caption>
      <tr><th>Шаг</th><th>Что сделать</th></tr>
      <tr><td>1. Выбрать вид</td><td>Определить операцию: перечисление, возврат или уточнение</td></tr>
      <tr><td>2. Указать счёт отправителя</td><td>Выбрать лицевой счёт клиента — остальные реквизиты подтянутся</td></tr>
      <tr><td>3. Заполнить получателя и сумму</td><td>Внести реквизиты получателя, сумму, назначение платежа</td></tr>
      <tr><td>4. Проставить коды и основание</td><td>Указать ИГК (при казначейском сопровождении), коды цели/КБК, документ-основание</td></tr>
      <tr><td>5. Подписать УКЭП</td><td>Первая и вторая подпись уполномоченных лиц</td></tr>
      <tr><td>6. Направить в казначейство</td><td>Отправить распоряжение в орган Федерального казначейства</td></tr>
    </table>

    <h2 id="vozvrat">Возврат распоряжения: почему казначейство не исполняет платёж</h2>
    <div class="answer reveal">
      <p>Возврат распоряжения — это ситуация, когда орган Федерального казначейства не проводит платёж и возвращает документ заявителю с указанием причины. Платёж при этом «зависает»: пока распоряжение не исправлено и не направлено заново, деньги не уходят. Для исполнителя под казначейским сопровождением возврат распоряжения по смыслу близок к отказу в санкционировании — это та же остановка операции из-за несоответствия требованиям.</p>
      <p>Причины возврата почти всегда сводятся к реквизитам и контролю: казначейство сверяет распоряжение со справочниками, остатками, документами-основаниями и условиями санкционирования. Если хотя бы один контроль не проходит — распоряжение возвращается. Ниже — типичные причины.</p>
    </div>
    <table>
      <caption>Типичные причины возврата распоряжения и как их устранить</caption>
      <tr><th>Причина</th><th>Что проверить и исправить</th></tr>
      <tr><td>Ошибка в реквизитах получателя</td><td>Сверить счёт, ИНН, наименование, банковские/казначейские реквизиты</td></tr>
      <tr><td>Несоответствие назначения платежа</td><td>Уточнить формулировку, добавить ИГК и код цели при казначейском сопровождении</td></tr>
      <tr><td>Недостаточно средств на счёте</td><td>Проверить остаток и доведённые лимиты по коду цели</td></tr>
      <tr><td>Нет или не сходится документ-основание</td><td>Приложить/уточнить договор, контракт, иной документ-основание</td></tr>
      <tr><td>Не пройден контроль санкционирования</td><td>Устранить замечание по сведениям/обоснованию (при казначейском сопровождении)</td></tr>
      <tr><td>Ошибка в подписи (УКЭП)</td><td>Проверить действительность сертификата и право подписи</td></tr>
    </table>
    <div class="note"><b>Важно.</b> Причину возврата казначейство указывает в протоколе (уведомлении). Не направляйте распоряжение повторно «как есть» — сначала прочитайте протокол и устраните конкретное замечание, иначе документ вернётся снова.</div>

    <h2 id="ispravit">Как исправить и направить распоряжение заново</h2>
    <div class="answer reveal">
      <p>Алгоритм после возврата простой: разобрать причину из протокола, исправить реквизит, перепроверить контроль и направить распоряжение снова. Если причина возврата — несоответствие условиям санкционирования при казначейском сопровождении, полезно разобрать её по нашему материалу о том, <a href="/baza-znaniy/prichiny-otkaza-kaznacheystva-v-sankcionirovanii/">почему казначейство отказывает в санкционировании</a>, и о самом <a href="/baza-znaniy/poryadok-sankcionirovaniya-rashodov/">порядке санкционирования расходов</a>. Часто одна и та же ошибка повторяется из раза в раз — её устранение «в корне» экономит дни.</p>
    </div>

    <h2 id="ks">Распоряжение и казначейское сопровождение исполнителя</h2>
    <div class="answer reveal">
      <p>Исполнитель госконтракта под казначейским сопровождением проводит расчёты через лицевой счёт в казначействе, и каждая операция оформляется распоряжением и проходит санкционирование. Поэтому распоряжение для него — рабочий инструмент: от его корректности зависит, пройдёт ли платёж поставщику, соисполнителю, на зарплату или налоги. Как устроен сам режим — в базовом разборе <a href="/baza-znaniy/chto-takoe-kaznacheyskoe-soprovozhdenie/">«Казначейское сопровождение: что это и как работает»</a>, а про счёт, по которому идут операции, — в статье <a href="/baza-znaniy/kaznacheyskiy-schet/">«Казначейский счёт»</a> и в инструкции <a href="/baza-znaniy/licevoy-schet-71-kak-otkryt/">«Как открыть лицевой счёт 71»</a>.</p>
      <p>Плановые операции по контракту отражаются в <a href="/baza-znaniy/svedeniya-ob-operaciyah-s-celevymi-sredstvami/">сведениях об операциях с целевыми средствами</a>: распоряжение проводит конкретный платёж, а сведения задают «рамку» допустимых направлений расходов. Если платёж выходит за эту рамку или не подкреплён обоснованием — распоряжение вернётся.</p>
    </div>

    <h2 id="oshibki">Частые ошибки при работе с распоряжениями</h2>
    <div class="answer reveal">
      <p>Большинство проблем — это не «сложные» юридические коллизии, а механические ошибки в реквизитах и спешка перед платежом. Ниже — типичные просчёты и как их не допускать.</p>
    </div>
    <table>
      <caption>Частые ошибки и решения</caption>
      <tr><th>Ошибка</th><th>Как правильно</th></tr>
      <tr><td>Не указали ИГК в назначении платежа</td><td>Проставлять идентификатор контракта при казначейском сопровождении в каждом платеже</td></tr>
      <tr><td>Повторная отправка без исправления</td><td>Сначала устранить причину из протокола возврата</td></tr>
      <tr><td>Просроченный сертификат подписи</td><td>Контролировать срок ЭП заранее, продлевать до истечения</td></tr>
      <tr><td>Неверный код цели/КБК</td><td>Сверять коды со справочником и условиями контракта</td></tr>
      <tr><td>Формирование платежа «в последний день»</td><td>Готовить распоряжения с запасом на проверку и возможный возврат</td></tr>
    </table>

    <h2 id="keys">Пример из практики</h2>
    <div class="answer reveal">
      <p>Типовая ситуация: исполнитель направляет распоряжение на оплату поставки соисполнителю в последний день перед закрытием периода. Казначейство возвращает документ — в назначении платежа не указан ИГК, и платёж не связывается с контрактом. Из-за возврата операция сдвигается, а сроки расчётов с соисполнителем поджимают. После того как ИГК и код цели внесли корректно, распоряжение прошло. На практике помогает простое правило: готовить распоряжения заранее и держать «шаблон» назначения платежа с обязательными идентификаторами, чтобы не собирать реквизиты вручную под дедлайн.</p>
    </div>

    <p data-ctx="auto-ctx:vypiska-iz-licevogo-scheta-kaznachejstva">Прошёл платёж или завис — видно в <a href="/baza-znaniy/vypiska-iz-licevogo-scheta-kaznachejstva/">выписке из лицевого счёта</a>: там же, в справке о неисполненных распоряжениях, ищут причину задержки.</p>
    <p data-ctx="auto-ctx:igk-v-schete-fakture-i-upd">Где ещё проставляют идентификатор кроме распоряжения — в строке 8 счёта-фактуры и УПД: см. <a href="/baza-znaniy/igk-v-schete-fakture-i-upd/">ИГК в счёте-фактуре и УПД</a>.</p>
    <div class="takeaways">
      <h2>Что важно запомнить</h2>
      <ol>
        <li>Распоряжение о совершении казначейского платежа — документ-основание, по которому казначейство проводит операцию.</li>
        <li>Формы и реквизиты установлены Порядком казначейского обслуживания (приказ Казначейства № 21н), основа — система казначейских платежей в БК РФ.</li>
        <li>Три базовых вида: перечисление, возврат, уточнение. Не путать «распоряжение (возврат)» и «возврат распоряжения».</li>
        <li>Возврат распоряжения = платёж не исполнен; нужно прочитать протокол, устранить причину и направить заново.</li>
        <li>При казначейском сопровождении в назначении платежа обязателен ИГК; распоряжение проходит санкционирование.</li>
      </ol>
    </div>

    <h2 id="glossary">Глоссарий</h2>
    <dl class="gloss">
      <div><dt>РСКП</dt><dd>Распоряжение о совершении казначейского платежа — документ-основание для операции.</dd></div>
      <div><dt>СКП</dt><dd>Система казначейских платежей (ст. 242.7–242.16 БК РФ).</dd></div>
      <div><dt>Прямой участник</dt><dd>Представляет распоряжения напрямую в орган казначейства.</dd></div>
      <div><dt>Возврат распоряжения</dt><dd>Возврат документа без исполнения с указанием причины.</dd></div>
      <div><dt>Уточнение</dt><dd>Исправление реквизитов проведённого/невыясненного платежа.</dd></div>
      <div><dt>УКЭП</dt><dd>Усиленная квалифицированная электронная подпись.</dd></div>
      <div><dt>ИГК</dt><dd>Идентификатор государственного контракта — указывается при казначейском сопровождении.</dd></div>
    </dl>

    <h2 id="faq">Частые вопросы</h2>
    <div class="faq">
      <details><summary>Почему в личном кабинете нет подраздела «Распоряжения»?</summary><p>Чаще всего из-за прав доступа или профиля: не назначено полномочие по казначейскому сопровождению, выбрана не та организация, не подключён компонент казначейского сопровождения или не открыт лицевой счёт. Назначьте нужную роль, проверьте профиль и наличие лицевого счёта.</p></details>
      <details><summary>Как перейти в подраздел Распоряжения о казначейском платеже?</summary><p>Войдите в «Электронный бюджет» по сертификату, выберите организацию и полномочие по казначейскому сопровождению, откройте модуль казначейского сопровождения — внутри него находится подраздел формирования распоряжений.</p></details>
      <details open><summary>Что такое распоряжение о совершении казначейского платежа?</summary><p>Это электронный документ-основание, по которому Федеральное казначейство проводит операцию в системе казначейских платежей — перечисление, возврат или уточнение средств. Формы и реквизиты установлены приказом Казначейства № 21н.</p></details>
      <details><summary>Каким приказом регулируется распоряжение?</summary><p>Порядком казначейского обслуживания, утверждённым приказом Федерального казначейства от 14.05.2020 № 21н. Основа системы казначейских платежей — статьи 242.7–242.16 Бюджетного кодекса РФ.</p></details>
      <details><summary>Какие бывают виды распоряжений?</summary><p>Три базовых: перечисление (основной платёж), возврат (возврат средств) и уточнение (исправление реквизитов проведённого платежа). Формы закреплены в приложениях к Порядку № 21н.</p></details>
      <details><summary>Что значит «возврат распоряжения»?</summary><p>Казначейство не исполнило платёж и вернуло документ заявителю с указанием причины. Нужно устранить причину из протокола и направить распоряжение заново.</p></details>
      <details><summary>Чем «распоряжение (возврат)» отличается от «возврата распоряжения»?</summary><p>«Распоряжение (возврат)» — это форма документа для операции возврата средств. «Возврат распоряжения» — это ситуация, когда казначейство возвращает любое распоряжение без исполнения из-за ошибок.</p></details>
      <details><summary>Почему распоряжение возвращают чаще всего?</summary><p>Из-за ошибок в реквизитах получателя, несоответствия назначения платежа, нехватки средств по коду цели, отсутствия документа-основания, непрохождения контроля санкционирования или проблем с подписью.</p></details>
      <details><summary>Кто подписывает распоряжение?</summary><p>Распоряжение в электронной форме подписывается усиленной квалифицированной электронной подписью лица с правом первой подписи (руководитель) и второй подписи (главный бухгалтер) либо иных уполномоченных лиц.</p></details>
      <details><summary>Где в распоряжении указывать ИГК?</summary><p>При казначейском сопровождении идентификатор государственного контракта указывают в назначении платежа — это связывает платёж с контрактом. Без ИГК распоряжение вернётся.</p></details>
      <details><summary>Как исправить возвращённое распоряжение?</summary><p>Прочитать причину в протоколе, исправить конкретный реквизит, перепроверить контроль и направить распоряжение повторно. Не отправляйте документ заново без устранения причины.</p></details>
      <details><summary>Кто поможет с распоряжениями и платежами при казначейском сопровождении?</summary><p>Подготовку распоряжений, проверку реквизитов и проведение платежей можно передать на сопровождение. Эксперт проверит назначение платежа и ИГК и проведёт операции. Оставьте заявку — разберём вашу ситуацию.</p></details>
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
        <li id="ref-1">Приказ Федерального казначейства от 14.05.2020 № 21н «О Порядке казначейского обслуживания» (с изм.; формы распоряжений — приложения № 15–26, реквизиты — приложения № 1–4) — <a href="https://base.garant.ru/74375044/" target="_blank" rel="noopener">base.garant.ru</a></li>
        <li id="ref-2">Бюджетный кодекс РФ, статьи 242.7–242.16 (система казначейских платежей; п. 5 ст. 242.7 — основание правил) — <a href="https://www.consultant.ru/document/cons_doc_LAW_19702/" target="_blank" rel="noopener">consultant.ru</a></li>
        <li id="ref-3">Реквизиты распоряжения о совершении казначейского платежа (возврат) — приложения к Порядку № 21н — <a href="https://www.consultant.ru/document/cons_doc_LAW_487063/" target="_blank" rel="noopener">consultant.ru</a></li>
      </ol>
      <p class="refs__note">Материал носит справочный характер и не заменяет индивидуальную консультацию. Формы и реквизиты распоряжений устанавливаются нормативными актами Федерального казначейства и могут уточняться; названия полей в конкретном ПО различаются. Проверено экспертом КазнаЭксперт. Дата актуализации — 9 июня 2026.</p>
    </div>
  </article>

  <aside class="rail">
    <form class="railform" id="leadForm" novalidate data-endpoint="/php/lead.php" data-source="rasporyazhenie-o-sovershenii-kaznacheyskogo-platezha">
      <div class="railform__badge">Экспертный анализ контракта</div>
      <h3 class="railform__title">Подготовим распоряжения и проведём платежи</h3>
      <p class="railform__sub">Реквизиты, назначение платежа, санкционирование — под ключ. Цена — после анализа контракта.</p>
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
  </aside>
</div>

<section class="related" aria-labelledby="relTitle">
  <div class="related__head"><h2 id="relTitle">Что почитать ещё</h2><a href="/baza-znaniy/">Вся база знаний →</a></div>
  <div class="related__grid">
    <a class="card reveal" href="/baza-znaniy/chto-takoe-kaznacheyskoe-soprovozhdenie/"><div class="card__cover"><span>Основы казначейского сопровождения</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Казначейское сопровождение: что это и как работает в 2026</h3><div class="card__meta">Основы · 18 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/prichiny-otkaza-kaznacheystva-v-sankcionirovanii/"><div class="card__cover"><span>Отказы</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Причины отказа казначейства в санкционировании</h3><div class="card__meta">Санкционирование · 14 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/identifikator-gosudarstvennogo-kontrakta-igk/"><div class="card__cover"><span>ИГК</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Идентификатор государственного контракта (ИГК)</h3><div class="card__meta">Операции · 15 мин</div></div></a>
    <!-- auto-related:vypiska-iz-licevogo-scheta-kaznachejstva --><a class="card reveal" href="/baza-znaniy/vypiska-iz-licevogo-scheta-kaznachejstva/"><div class="card__cover"><span>Выписка</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Выписка из лицевого счёта казначейства</h3><div class="card__meta">Операции · 14 мин</div></div></a>
    <!-- auto-related:igk-v-schete-fakture-i-upd --><a class="card reveal" href="/baza-znaniy/igk-v-schete-fakture-i-upd/"><div class="card__cover"><span>ИГК</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">ИГК в счёте-фактуре, счёте и УПД</h3><div class="card__meta">Операции · 16 мин</div></div></a>
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

<section class="kz-sub" aria-labelledby="kzSubTitle" data-source="rasporyazhenie-o-sovershenii-kaznacheyskogo-platezha">
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
              <p class="v2-footer-tagline">Полное казначейское сопровождение под ключ. Работа с УФК по всей России с 2009 года.</p>
            </div>

            <nav class="v2-footer-col" aria-label="Разделы сайта">
              <h3 class="v2-footer-h">Разделы</h3>
              <a href="/baza-znaniy/">База знаний</a>
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
    else if(href.indexOf('mailto:')===0)g('click_email');
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
