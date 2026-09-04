<?php /* Cache-Control задаёт .htaccess — единая точка правды для кэш-заголовков */ ?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Сертификаты казначейства и списки отзыва: где скачать и проверить</title>
<meta name="description" content="Сертификаты казначейства: где скачать корневые сертификаты и списки отзыва (СОС/CRL) удостоверяющего центра, как установить в КриптоПро и проверить статус подписи.">
<meta name="author" content="Ярослав Михайлов">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1">
<meta name="theme-color" content="#F4F1EB" media="(prefers-color-scheme: light)">
<meta name="theme-color" content="#141310" media="(prefers-color-scheme: dark)">
<!-- PROD: canonical и og:url ОБЯЗАТЕЛЬНО менять под URL каждой статьи -->
<link rel="canonical" href="https://kaznaexpert.ru/baza-znaniy/sertifikaty-i-spiski-otzyva-uc-kaznachejstva/">
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
{"@context": "https://schema.org", "@type": "Article", "headline": "Сертификаты казначейства и списки отзыва: где скачать и проверить", "description": "Сертификаты казначейства: где скачать корневые сертификаты и списки отзыва (СОС/CRL) удостоверяющего центра, как установить в КриптоПро и проверить статус подписи.", "inLanguage": "ru-RU", "datePublished": "2026-06-24", "dateModified": "2026-08-27", "author": {"@type": "Person", "name": "Ярослав Михайлов", "jobTitle": "Главный эксперт по казначейскому сопровождению", "url": "https://kaznaexpert.ru/komanda/mihailov-yaroslav/", "@id": "https://kaznaexpert.ru/komanda/mihailov-yaroslav/#person", "image": "https://kaznaexpert.ru/img/team/mihailov-photo.jpg"}, "publisher": {"@type": "Organization", "name": "КазнаЭксперт", "url": "https://kaznaexpert.ru", "logo": {"@type": "ImageObject", "url": "https://kaznaexpert.ru/img/logogold.png"}, "@id": "https://kaznaexpert.ru/#organization"}, "image": ["https://kaznaexpert.ru/img/og/baza-znaniy__sertifikaty-i-spiski-otzyva-uc-kaznachejstva-16x9.jpg", "https://kaznaexpert.ru/img/og/baza-znaniy__sertifikaty-i-spiski-otzyva-uc-kaznachejstva-4x3.webp", "https://kaznaexpert.ru/img/og/baza-znaniy__sertifikaty-i-spiski-otzyva-uc-kaznachejstva-1x1.webp"], "mainEntityOfPage": {"@type": "WebPage", "@id": "https://kaznaexpert.ru/baza-znaniy/sertifikaty-i-spiski-otzyva-uc-kaznachejstva/"}, "citation": ["Федеральный закон от 06.04.2011 № 63-ФЗ «Об электронной подписи», часть 1 статьи 15, статьи 17.2 и 17.4. КонсультантПлюс — https://www.consultant.ru/document/cons_doc_LAW_112701/", "Приказ Федерального казначейства от 15.06.2021 № 21н о порядке реализации функций аккредитованного удостоверяющего центра (действует с 01.01.2022). КонсультантПлюс — https://www.consultant.ru/document/cons_doc_LAW_208093/", "Раздел «Удостоверяющий центр» на официальном сайте Федерального казначейства (roskazna.gov.ru).", "Каталог корневых сертификатов и списков отзыва УЦ Казначейства (crl.roskazna.ru).", "Информационная система Головного удостоверяющего центра, Минцифры России (digital.gov.ru).", "Инструкция по установке корневых сертификатов в КриптоПро CSP (cryptopro.ru)."]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "Главная", "item": "https://kaznaexpert.ru/"}, {"@type": "ListItem", "position": 2, "name": "База знаний", "item": "https://kaznaexpert.ru/baza-znaniy/"}, {"@type": "ListItem", "position": 3, "name": "Сертификаты и списки отзыва УЦ Казначейства", "item": "https://kaznaexpert.ru/baza-znaniy/sertifikaty-i-spiski-otzyva-uc-kaznachejstva/"}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [{"@type": "Question", "name": "Чем сертификаты удостоверяющего центра отличаются от моего сертификата?", "acceptedAnswer": {"@type": "Answer", "text": "Ваш сертификат выдан сотруднику для подписи документов. Сертификаты центра — корневой и подчинённый — нужны, чтобы система доверяла вашему сертификату. Без них установленный личный сертификат не пройдёт проверку."}}, {"@type": "Question", "name": "Что такое СОС и зачем он нужен?", "acceptedAnswer": {"@type": "Answer", "text": "СОС (список отозванных сертификатов), он же CRL, — перечень сертификатов, действие которых прекращено досрочно. Программа сверяет с ним вашу подпись: если сертификат отозван, использовать его нельзя."}}, {"@type": "Question", "name": "Где скачать корневые сертификаты и списки отзыва?", "acceptedAnswer": {"@type": "Answer", "text": "В разделе «Удостоверяющий центр» на roskazna.gov.ru и в каталоге crl.roskazna.ru. Списки отзыва имеют расширение .crl и привязаны к конкретному подчинённому сертификату по году выпуска."}}, {"@type": "Question", "name": "Куда устанавливать корневой и подчинённый сертификаты?", "acceptedAnswer": {"@type": "Answer", "text": "Корневой сертификат Головного центра — в «Доверенные корневые центры сертификации», сертификат «Казначейство России» — в «Промежуточные центры сертификации»."}}, {"@type": "Question", "name": "Почему новый сертификат не проходит проверку?", "acceptedAnswer": {"@type": "Answer", "text": "Чаще всего на рабочем месте не установлен новый подчинённый сертификат центра или его список отзыва. После любого обновления в удостоверяющем центре проверяйте всю цепочку, а не только личный сертификат."}}, {"@type": "Question", "name": "Как проверить, не отозван ли сертификат?", "acceptedAnswer": {"@type": "Answer", "text": "Откройте вкладку «Путь сертификации» в свойствах сертификата и убедитесь, что цепочка без ошибок. Если серийный номер есть в актуальном списке отзыва — сертификат отозван и подлежит перевыпуску."}}, {"@type": "Question", "name": "Как часто обновляется список отзыва?", "acceptedAnswer": {"@type": "Answer", "text": "Список действует ограниченное время и периодически переиздаётся. Точную периодичность смотрите в регламенте удостоверяющего центра. На практике список стоит обновлять при ошибках проверки и после выпуска новых сертификатов центра."}}, {"@type": "Question", "name": "Нужно ли что-то делать, если центр выпустил новый сертификат?", "acceptedAnswer": {"@type": "Answer", "text": "Да. Доустановите новый подчинённый сертификат центра и соответствующий список отзыва на рабочее место — иначе свежевыпущенные пользовательские сертификаты перестанут проходить проверку."}}, {"@type": "Question", "name": "Подойдёт ли для казначейства коммерческий сертификат?", "acceptedAnswer": {"@type": "Answer", "text": "Нет. Для работы со средствами, подлежащими казначейскому сопровождению, нужен квалифицированный сертификат, выданный Удостоверяющим центром Казначейства по приказу № 21н. Коммерческий сертификат для площадок и налоговой здесь не подходит."}}, {"@type": "Question", "name": "Можно ли обновить корневые сертификаты автоматически?", "acceptedAnswer": {"@type": "Answer", "text": "Частично: в свежих сборках КриптоПро CSP актуальные корневые сертификаты уже включены, поэтому их обновление сводится к обновлению программы. А вот списки отзыва обновляются отдельно и по мере выпуска новых сертификатов центра."}}, {"@type": "Question", "name": "В какое хранилище ставить список отзыва?", "acceptedAnswer": {"@type": "Answer", "text": "Файл .crl устанавливается как список отзыва сертификатов (в хранилище CRL). Это отдельное действие: установка только сертификатов без актуального списка отзыва всё равно приведёт к ошибке проверки."}}, {"@type": "Question", "name": "Чем СОС отличается от проверки по OCSP?", "acceptedAnswer": {"@type": "Answer", "text": "СОС (список отзыва) скачивается целиком и действует ограниченный срок — он может слегка отставать от реального статуса. OCSP проверяет конкретный сертификат по запросу в реальном времени и возвращает ответ «действителен», «отозван» или «неизвестен». На практике их используют как взаимодополняющие способы."}}, {"@type": "Question", "name": "Где скачать сертификаты казначейства?", "acceptedAnswer": {"@type": "Answer", "text": "Головные и подчинённые сертификаты удостоверяющего центра и списки отзыва публикуются в разделе удостоверяющего центра на сайте Федерального казначейства. Личный сертификат там не скачивается: он выпускается по вашему запросу и записывается на защищённый носитель."}}, {"@type": "Question", "name": "Чем сертификат удостоверяющего центра отличается от списка отзыва?", "acceptedAnswer": {"@type": "Answer", "text": "Сертификат центра подтверждает, кто выпустил вашу подпись, и строит цепочку доверия. Список отзыва (СОС, CRL) показывает, не аннулирован ли сертификат на текущий момент. Первый обновляется редко, второй — регулярно."}}, {"@type": "Question", "name": "Почему подпись перестала работать без видимых причин?", "acceptedAnswer": {"@type": "Answer", "text": "Чаще всего истёк срок актуальности списка отзыва на рабочем месте или не обновились служебные файлы после переустановки системы. Проверку начинают с цепочки доверия и списков отзыва, а не с перевыпуска сертификата."}}, {"@type": "Question", "name": "Как обновлять списки отзыва на компьютере без интернета?", "acceptedAnswer": {"@type": "Answer", "text": "Файлы переносят вручную и устанавливают по внутреннему регламенту с фиксированной периодичностью. Автоматическая загрузка в закрытом контуре недоступна, поэтому ответственного и график обновления назначают заранее."}}, {"@type": "Question", "name": "Что означает, что сертификат находится в списке отзыва?", "acceptedAnswer": {"@type": "Answer", "text": "Сертификат аннулирован: подписывать им нельзя, а проверка подписи даст отрицательный результат. По статье 11 закона № 63-ФЗ подпись признаётся действительной, если сертификат действителен на момент подписания документа либо на день проверки, когда момент подписания не определён."}}, {"@type": "Question", "name": "Что делать с документами, подписанными аннулированным сертификатом?", "acceptedAnswer": {"@type": "Answer", "text": "Их переподписывают действующим сертификатом. Дополнительно проверяют, не нарушена ли конфиденциальность ключа: при подозрении на компрометацию удостоверяющий центр уведомляют не позднее одного рабочего дня со дня получения информации о нарушении."}}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "HowTo", "name": "Как установить корневые сертификаты и список отзыва УЦ Казначейства", "inLanguage": "ru-RU", "step": [{"@type": "HowToStep", "position": 1, "name": "Скачать корневой сертификат", "text": "Из раздела «Удостоверяющий центр» на roskazna.gov.ru или каталога crl.roskazna.ru скачайте корневой сертификат Головного удостоверяющего центра (Минцифры)."}, {"@type": "HowToStep", "position": 2, "name": "Установить корневой", "text": "Установите его в хранилище «Доверенные корневые центры сертификации»."}, {"@type": "HowToStep", "position": 3, "name": "Скачать и установить подчинённый", "text": "Скачайте сертификат «Казначейство России» и установите его в «Промежуточные центры сертификации»."}, {"@type": "HowToStep", "position": 4, "name": "Скачать список отзыва", "text": "Из каталога crl.roskazna.ru скачайте файл списка отзыва (.crl), относящийся к вашему подчинённому сертификату (по году выпуска)."}, {"@type": "HowToStep", "position": 5, "name": "Установить список отзыва", "text": "Установите .crl как список отзыва сертификатов в соответствующее хранилище."}, {"@type": "HowToStep", "position": 6, "name": "Проверить цепочку", "text": "Откройте свойства личного сертификата, вкладку «Путь сертификации», и убедитесь, что цепочка выстроена без ошибок."}]}
</script>
<script type="application/ld+json">
{"@context": "https://schema.org", "@type": "DefinedTermSet", "name": "Термины: сертификаты и списки отзыва УЦ", "inLanguage": "ru-RU", "hasDefinedTerm": [{"@type": "DefinedTerm", "name": "Удостоверяющий центр Казначейства", "description": "Аккредитованный удостоверяющий центр, которым выступает Федеральное казначейство по части 1 статьи 15 Закона № 63-ФЗ."}, {"@type": "DefinedTerm", "name": "Корневой сертификат", "description": "Самоподписанный сертификат верхнего уровня (Головного удостоверяющего центра), которому система доверяет априори."}, {"@type": "DefinedTerm", "name": "Подчинённый сертификат", "description": "Промежуточный сертификат, выданный Головным центром Казначейству; им подписываются пользовательские сертификаты."}, {"@type": "DefinedTerm", "name": "СОС (CRL)", "description": "Список отозванных сертификатов — подписанный перечень серийных номеров сертификатов, действие которых прекращено."}, {"@type": "DefinedTerm", "name": "Цепочка доверия", "description": "Путь от корневого сертификата к пользовательскому; считается действительной, если все звенья установлены и не отозваны."}, {"@type": "DefinedTerm", "name": "OCSP", "description": "Протокол проверки статуса сертификата в реальном времени: возвращает «действителен», «отозван» или «неизвестен»."}]}
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
<meta property="og:title" content="Сертификаты казначейства и списки отзыва: где скачать и проверить">
<meta property="og:description" content="Сертификаты казначейства: где скачать корневые сертификаты и списки отзыва (СОС/CRL) удостоверяющего центра, как установить в КриптоПро и проверить статус подписи.">
<meta property="og:url" content="https://kaznaexpert.ru/baza-znaniy/sertifikaty-i-spiski-otzyva-uc-kaznachejstva/">
<meta property="og:image" content="https://kaznaexpert.ru/img/og/baza-znaniy__sertifikaty-i-spiski-otzyva-uc-kaznachejstva-16x9.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="675">
<meta property="og:image:alt" content="Сертификаты и списки отзыва (СОС) УЦ Федерального казначейства — КазнаЭксперт">
<meta property="article:published_time" content="2026-06-24T09:00:00+03:00">
<meta property="article:modified_time" content="2026-08-27T09:00:00+03:00">
<meta property="article:author" content="https://kaznaexpert.ru/komanda/mihailov-yaroslav/">
<meta property="article:section" content="База знаний">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Сертификаты казначейства и списки отзыва: где скачать и проверить">
<meta name="twitter:description" content="Сертификаты казначейства: где скачать корневые сертификаты и списки отзыва (СОС/CRL) удостоверяющего центра, как установить в КриптоПро и проверить статус подписи.">
<meta name="twitter:image" content="https://kaznaexpert.ru/img/og/baza-znaniy__sertifikaty-i-spiski-otzyva-uc-kaznachejstva-16x9.jpg">


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
  <nav class="crumbs" aria-label="Хлебные крошки"><a href="/">Главная</a> › <a href="/baza-znaniy/">База знаний</a> › Сертификаты и списки отзыва УЦ Казначейства</nav>

  <aside class="toc" aria-label="Содержание">
    <div class="toc__label">Содержание</div>
    <ul class="toc__list" id="tocList">
      <li><a href="#uc">Удостоверяющий центр Казначейства и его сертификаты</a></li>
      <li><a href="#akkreditaciya">Чем УЦ Казначейства отличается от коммерческих</a></li>
      <li><a href="#chain">Цепочка доверия: корневой, подчинённый, пользовательский</a></li>
      <li><a href="#sos">Что такое список отзыва сертификатов (СОС/CRL)</a></li>
      <li><a href="#download">Где скачать сертификаты и списки отзыва</a></li>
      <li><a href="#install">Как установить корневые и СОС в КриптоПро</a></li>
      <li><a href="#naming">Как читать имена файлов сертификатов и списков</a></li>
      <li><a href="#check">Как проверить статус сертификата</a></li>
      <li><a href="#offline">Если рабочее место без доступа в интернет</a></li>
      <li><a href="#paket">Полный комплект файлов для рабочего места</a></li>
      <li><a href="#problems">Типичные ошибки и как их устранить</a></li>
      <li><a href="#glossary">Глоссарий</a></li>
      <li><a href="#faq">Частые вопросы</a></li>
      <li><a href="#chto-nazyvayut">Что называют «сертификатами казначейства»</a></li>
      <li><a href="#v-spiske-otzyva">Если сертификат попал в список отзыва</a></li>
    </ul>
  </aside>

  <article class="content" id="main">
    <div class="hero">
      <img class="hero__crest hero__crest--light" src="/img/logogold-crest.webp" alt="" aria-hidden="true" width="188" height="137" decoding="async" loading="lazy">
      <img class="hero__crest hero__crest--dark" src="/img/LogoWhite.png" alt="" aria-hidden="true" width="188" height="137" decoding="async" loading="lazy">
      <div class="eyebrow">База знаний · ГИИС и ЭЦП <span class="fresh">Актуально на 2026</span></div>
    <h1>Сертификаты казначейства и списки отзыва (СОС): где скачать и как проверить</h1>
    <div class="byline"><span class="av">ЯМ</span><span>Автор: <a href="/komanda/mihailov-yaroslav/">Ярослав Михайлов</a>, главный эксперт</span><span class="dot">·</span><span>15+ лет в Казначействе</span><span class="dot">·</span><span>12 мин чтения</span><span class="dot">·</span><span>Обновлено 27 августа 2026</span></div>
    </div>

    <div class="share">
      <span class="share__label">Поделиться:</span>
      <a href="https://t.me/share/url?url=https%3A%2F%2Fkaznaexpert.ru%2Fbaza-znaniy%2Fsertifikaty-i-spiski-otzyva-uc-kaznachejstva%2F&amp;text=%D0%A1%D0%B5%D1%80%D1%82%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%D1%82%D1%8B%20%D0%B8%20%D1%81%D0%BF%D0%B8%D1%81%D0%BA%D0%B8%20%D0%BE%D1%82%D0%B7%D1%8B%D0%B2%D0%B0%20%28%D0%A1%D0%9E%D0%A1%29%20%D0%A3%D0%A6%20%D0%9A%D0%B0%D0%B7%D0%BD%D0%B0%D1%87%D0%B5%D0%B9%D1%81%D1%82%D0%B2%D0%B0%3A%20%D0%B3%D0%B4%D0%B5%20%D1%81%D0%BA%D0%B0%D1%87%D0%B0%D1%82%D1%8C%20%D0%B8%20%D0%BA%D0%B0%D0%BA%20%D0%BF%D1%80%D0%BE%D0%B2%D0%B5%D1%80%D0%B8%D1%82%D1%8C" target="_blank" rel="noopener"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.56 8.25l-1.86 8.76c-.14.62-.5.77-1.02.48l-2.82-2.08-1.36 1.31c-.15.15-.28.28-.57.28l.2-2.89 5.27-4.76c.23-.2-.05-.32-.35-.12l-6.51 4.1-2.8-.88c-.61-.19-.62-.61.13-.9l10.95-4.22c.5-.18.95.12.79.85z"/></svg>Telegram</a>
      <button type="button" id="copyLink"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.07 0l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.07 0l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg><span>Копировать ссылку</span></button>
      <button type="button" id="printBtn"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9V2h12v7M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2M6 14h12v8H6z"/></svg>Скачать PDF</button>
    </div>

    <details class="mtoc"><summary>Содержание статьи</summary>
      <ol>
        <li><a href="#uc">Удостоверяющий центр Казначейства и его сертификаты</a></li><li><a href="#akkreditaciya">Чем УЦ Казначейства отличается от коммерческих</a></li><li><a href="#chain">Цепочка доверия: корневой, подчинённый, пользовательский</a></li><li><a href="#sos">Что такое список отзыва сертификатов (СОС/CRL)</a></li><li><a href="#download">Где скачать сертификаты и списки отзыва</a></li><li><a href="#install">Как установить корневые и СОС в КриптоПро</a></li><li><a href="#naming">Как читать имена файлов сертификатов и списков</a></li><li><a href="#check">Как проверить статус сертификата</a></li><li><a href="#offline">Если рабочее место без доступа в интернет</a></li><li><a href="#paket">Полный комплект файлов для рабочего места</a></li><li><a href="#problems">Типичные ошибки и как их устранить</a></li><li><a href="#glossary">Глоссарий</a></li><li><a href="#faq">Частые вопросы</a></li><li><a href="#chto-nazyvayut">Что называют «сертификатами казначейства»</a></li><li><a href="#v-spiske-otzyva">Если сертификат попал в список отзыва</a></li></ol>
    </details>

    <div class="tldr">Корневые сертификаты, цепочку и списки отзыва (СОС/CRL) Удостоверяющего центра Казначейства скачивают из раздела «Удостоверяющий центр» на roskazna.gov.ru и из каталога crl.roskazna.ru. Корневой сертификат ставят в «Доверенные корневые», сертификат казначейства — в «Промежуточные», список отзыва — в хранилище CRL. После этого цепочка доверия выстраивается, а статус подписи можно проверить.</div>

    <section class="keyfacts grain" aria-label="Ключевые факты">
      <h2>Коротко о главном</h2>
      <div class="keyfacts__grid">
        <div class="kf"><div class="kf__n">63-ФЗ</div><div class="kf__t"><b>Правовая основа</b> — Казначейство — аккредитованный удостоверяющий центр по части 1 статьи 15 Закона № 63-ФЗ</div></div>
        <div class="kf"><div class="kf__n">21н</div><div class="kf__t"><b>Порядок работы УЦ</b> — приказ Федерального казначейства от 15.06.2021 № 21н, действует с 1 января 2022 года</div></div>
        <div class="kf"><div class="kf__n">СОС = CRL</div><div class="kf__t"><b>Список отзыва</b> — перечень серийных номеров отозванных и аннулированных сертификатов</div></div>
        <div class="kf"><div class="kf__n">crl.roskazna.ru</div><div class="kf__t"><b>Точка распространения</b> — официальный каталог корневых сертификатов и списков отзыва УЦ Казначейства</div></div>
      </div>
    </section>
    <!-- svc-cta:top -->
    <div class="svc-cta svc-cta--top" role="complementary" aria-label="Услуга КазнаЭксперт"><div class="svc-cta__body"><span class="svc-cta__eyebrow">Топ-услуга · обучение</span><p class="svc-cta__title">Научим вести казначейское сопровождение самостоятельно</p><p class="svc-cta__text">9 академических часов один на один с экспертом Федерального казначейства — на ваших контрактах: счёт, «Электронный бюджет», сведения и коды, санкционирование, раздельный учёт. После курса вы ведёте контракт сами, без отказов.</p><span class="svc-cta__price">150 000 ₽ · индивидуально</span></div><a class="svc-cta__btn" href="/uslugi/obuchenie-kaznacheyskomu-soprovozhdeniyu/" onclick="try{ym(94305898,'reachGoal','svccta_click',{svc:'obuchenie',pos:'top'})}catch(e){}">Записаться на обучение →</a></div>
    <!-- /svc-cta:top -->


    <h2 id="uc">Удостоверяющий центр Казначейства и его сертификаты</h2>
    <div class="answer reveal">
      <p class="lead-p">Чтобы подпись казначейства проходила проверку, на рабочем месте нужны три файла: корневой сертификат Головного удостоверяющего центра, подчинённый сертификат «Казначейство России» и актуальный список отзыва (.crl) под ваш сертификат. Берут их в разделе «Удостоверяющий центр» на roskazna.gov.ru или в каталоге crl.roskazna.ru.</p>
    </div>
    <p class="lead-p">Федеральное казначейство выступает аккредитованным удостоверяющим центром на основании части 1 статьи 15 Федерального закона от 06.04.2011 № 63-ФЗ «Об электронной подписи». Порядок реализации этих функций установлен приказом Федерального казначейства от 15.06.2021 № 21н, который действует с 1 января 2022 года и издан во исполнение пункта 1 части 3 статьи 17.2 и статьи 17.4 Закона № 63-ФЗ. Подробнее о подаче первичного запроса — в отдельном разборе про <a href="/baza-znaniy/portal-zayavitelya-kaznachejstva/">портал заявителя ФЗС</a>.</p>
    <h3 id="komu-vydayut-sertifikaty">Кому Казначейство выдаёт сертификаты</h3>
    <p>Удостоверяющий центр Казначейства выдаёт квалифицированные сертификаты ограниченному кругу лиц: должностным лицам государственных органов и органов местного самоуправления, а также работникам организаций, которые получают средства бюджета, подлежащие казначейскому сопровождению. Функции центр выполняет как напрямую, так и через территориальные органы Федерального казначейства.</p>
    <h3 id="dva-tipa-sertifikatov">Два типа сертификатов: пользователя и удостоверяющего центра</h3>
    <p>Важно различать два типа сертификатов. Есть сертификат конкретного пользователя — то, что выдают сотруднику организации для работы в «Электронном бюджете». И есть сертификаты самого удостоверяющего центра — корневой и подчинённые, которыми центр подписывает выпускаемые сертификаты. Чтобы система доверяла вашей подписи, на компьютере должны быть установлены оба сертификата центра и актуальный список отзыва.</p>

    <h2 id="akkreditaciya">Чем УЦ Казначейства отличается от коммерческих</h2>
    <p>Удостоверяющих центров в стране много, и все аккредитованные центры работают по одному закону № 63-ФЗ. Но Удостоверяющий центр Казначейства занимает особое место: он выдаёт сертификаты не всем подряд, а строго ограниченному кругу лиц, связанных с бюджетными средствами. Это должностные лица государственных органов и органов местного самоуправления, а также сотрудники организаций, которые получают средства, подлежащие казначейскому сопровождению.</p>
    <h3 id="kommercheskiy-ne-podoydet">Подойдёт ли коммерческий сертификат</h3>
    <p>Для бизнеса это означает простую вещь: если ваш контракт попал под казначейское сопровождение, сертификат для работы в «Электронном бюджете» вы получаете именно в Удостоверяющем центре Казначейства, а не в произвольном коммерческом центре. Коммерческий квалифицированный сертификат для работы с обычными электронными площадками и налоговой здесь не подойдёт — нужен сертификат казначейства, выпущенный по приказу № 21н.</p>
    <h3 id="chi-sertifikaty-v-cepochke">Чьи сертификаты выстраивают цепочку доверия</h3>
    <p>Отсюда же вытекает практическое следствие по сертификатам и спискам отзыва: цепочку доверия выстраивают именно корневой Головного центра и подчинённый сертификат казначейства. Если на рабочем месте стоят только сертификаты коммерческого центра, подпись казначейства проверяться не будет, какой бы рабочей она ни казалась.</p>

    <h2 id="chain">Цепочка доверия: корневой, подчинённый, пользовательский</h2>
    <p>Доверие к электронной подписи выстраивается по цепочке. На вершине стоит Головной удостоверяющий центр, функции которого выполняет Минцифры России, — это единая точка доверия для всех аккредитованных центров страны. Он выдаёт подчинённый сертификат Удостоверяющему центру Казначейства, а тот уже подписывает сертификаты конечных пользователей.</p>
    <h3 id="tri-zvena-cepochki">Три звена цепочки и их хранилища</h3>
    <table>
      <thead><tr><th>Звено</th><th>Кто владелец</th><th>Куда устанавливается</th></tr></thead>
      <tbody>
        <tr><td>Корневой сертификат</td><td>Головной удостоверяющий центр (Минцифры России)</td><td>Доверенные корневые центры сертификации</td></tr>
        <tr><td>Подчинённый сертификат</td><td>Удостоверяющий центр Казначейства</td><td>Промежуточные центры сертификации</td></tr>
        <tr><td>Сертификат пользователя</td><td>Сотрудник организации</td><td>Личное хранилище (контейнер на носителе)</td></tr>
      </tbody>
    </table>
    <h3 id="net-zvena-cepochki">Что будет, если звена цепочки не хватает</h3>
    <p>Если хотя бы одно звено отсутствует или просрочено, цепочка считается невыстроенной: подпись не пройдёт проверку, а вход в «Электронный бюджет» завершится ошибкой. Поэтому первое, что делают при настройке рабочего места, — устанавливают корневой и подчинённый сертификаты, и только потом подключают личный.</p>

    <h2 id="sos">Что такое список отзыва сертификатов (СОС/CRL)</h2>
    <p>Список отзыва сертификатов (СОС), он же CRL (Certificate Revocation List), — это подписанный удостоверяющим центром перечень серийных номеров сертификатов, действие которых прекращено досрочно: отозвано по заявлению владельца или аннулировано центром. Программа проверки подписи скачивает этот список и сверяет с ним сертификат — если номер в списке, сертификат использовать нельзя.</p>
    <h3 id="pochemu-obnovlyat-sos">Почему список отзыва приходится обновлять</h3>
    <p>Список отзыва — «периодический» механизм: он скачивается целиком и действует ограниченное время, после чего его нужно обновить. Если на компьютере лежит устаревший список или он недоступен, проверка сертификата завершится ошибкой, даже когда сам сертификат в порядке. Альтернатива спискам — протокол OCSP, который проверяет статус по запросу в реальном времени и возвращает один из ответов: действителен, отозван или неизвестен.</p>
    <h3 id="gde-publikuet-sos">Где казначейство публикует списки отзыва</h3>
    <p>Удостоверяющий центр Казначейства публикует списки отзыва в той же точке распространения, что и сертификаты. Для каждого подчинённого сертификата ведётся свой файл списка.</p>
    <h3 id="srok-sos-i-cdp">Срок действия списка и точка распространения (CDP)</h3>
    <p>Список отзыва действует ограниченный срок и периодически переиздаётся: программа проверки ориентируется на дату следующего обновления, указанную внутри самого списка. Если этот срок прошёл, а свежий список не подгрузился, проверка считается невозможной — отсюда ошибка «не удалось получить список отзыва» даже при действующем сертификате. Точную периодичность переиздания смотрите в регламенте удостоверяющего центра; на практике же достаточно правила: при ошибках проверки и после любого обновления сертификатов центра список отзыва нужно обновить. Адрес точки распространения (CDP) указывается в самом сертификате — программа берёт список именно оттуда, поэтому к этому адресу у рабочего места должен быть доступ либо список устанавливают вручную.</p>

    <h2 id="download">Где скачать сертификаты и списки отзыва</h2>
    <p>Есть два официальных источника, и оба относятся к Федеральному казначейству.</p>
    <ul>
      <li><b>Раздел «Удостоверяющий центр» на roskazna.gov.ru</b> — здесь собраны корневые сертификаты, списки аннулированных сертификатов, нормативные документы и ФЗС. Это основная витрина для пользователей.</li>
      <li><b>Каталог crl.roskazna.ru</b> — точка распространения, где напрямую лежат файлы корневых и подчинённых сертификатов и соответствующих им списков отзыва. Имена файлов списков построены по году выпуска сертификата (например, ucfk_2024, ucfk_2025), поэтому важно скачивать список, относящийся именно к вашему сертификату.</li>
    </ul>
    <h3 id="regionalnye-vitriny-fayly">Региональные витрины и расширения файлов: .cer, .crt, .crl</h3>
    <p>На региональных страницах территориальных управлений казначейства размещён тот же набор файлов — можно пользоваться любой витриной. Корневой сертификат Головного удостоверяющего центра и сертификат «Казначейство России» обычно доступны отдельными файлами с расширением .cer или .crt, а списки отзыва — с расширением .crl.</p>
    <h3 id="novyy-podchinennyy-sertifikat">Что делать после выпуска нового подчинённого сертификата</h3>
    <p class="note">Удостоверяющий центр периодически выпускает новые подчинённые сертификаты — в 2025 году были изданы очередные. После такого обновления на рабочее место нужно доустановить новый подчинённый сертификат и его список отзыва, иначе свежевыпущенные пользовательские сертификаты перестанут проходить проверку.</p>

    <h2 id="install">Как установить корневые и СОС в КриптоПро</h2>
    <p>Установка выполняется в средстве КриптоПро CSP и стандартном хранилище сертификатов Windows. Логика простая: каждый сертификат — в своё хранилище, список отзыва — отдельно.</p>
    <table>
      <thead><tr><th>Объект</th><th>Хранилище</th></tr></thead>
      <tbody>
        <tr><td>Корневой сертификат Головного центра</td><td>Доверенные корневые центры сертификации</td></tr>
        <tr><td>Сертификат «Казначейство России»</td><td>Промежуточные центры сертификации</td></tr>
        <tr><td>Список отзыва (.crl)</td><td>Устанавливается как список отзыва (хранилище CRL)</td></tr>
        <tr><td>Личный сертификат</td><td>Через КриптоПро CSP → «Просмотреть сертификаты в контейнере» → «Установить»</td></tr>
      </tbody>
    </table>
    <h3 id="svezhaya-sborka-kriptopro">Свежая сборка КриптоПро вместо ручной установки корневых</h3>
    <p>Самый быстрый способ не держать в голове все звенья — поддерживать актуальную сборку КриптоПро CSP: в свежих дистрибутивах корневые сертификаты уже включены. Но списки отзыва всё равно обновляются по мере выпуска, поэтому периодически их стоит переустанавливать вручную, особенно если рабочее место не имеет доступа к точке распространения в интернете.</p>

    <h2 id="naming">Как читать имена файлов сертификатов и списков</h2>
    <p>В каталоге точки распространения лежит много файлов, и поначалу легко скачать не тот. Разобраться помогает простая логика имён и расширений.</p>
    <table>
      <thead><tr><th>Расширение</th><th>Что это</th></tr></thead>
      <tbody>
        <tr><td>.cer, .crt</td><td>Файл сертификата (корневого или подчинённого)</td></tr>
        <tr><td>.crl</td><td>Список отзыва сертификатов (СОС)</td></tr>
      </tbody>
    </table>
    <h3 id="god-vypuska-v-imeni">Год выпуска в имени файла: какой список брать</h3>
    <p>Имена подчинённых сертификатов и их списков отзыва обычно содержат год выпуска. Если ваш сертификат выдан, например, в 2025 году, то и подчинённый сертификат центра, и список отзыва нужно брать соответствующего поколения — более старый список не будет «знать» о новых сертификатах. При этом на рабочем месте, как правило, должны стоять сразу несколько поколений подчинённых сертификатов и списков: пользователи в организации могут иметь сертификаты разных лет выпуска, и каждый из них проверяется по своей ветке цепочки.</p>
    <h3 id="poryadok-ustanovki-faylov">В каком порядке устанавливать файлы</h3>
    <p>Корневой сертификат Головного удостоверяющего центра — один на всех; именно он лежит в основе доверия. Поэтому при настройке нового рабочего места порядок такой: сначала корневой, затем все актуальные подчинённые сертификаты центра, затем соответствующие списки отзыва, и только потом личный сертификат пользователя.</p>

    <h2 id="check">Как проверить статус сертификата</h2>
    <p>Проверить, что сертификат действителен и цепочка выстроена, можно несколькими способами.</p>
    <ul>
      <li><b>Свойства сертификата → вкладка «Путь сертификации».</b> Здесь видно всю цепочку: от корневого до пользовательского. Если над сертификатом стоит значок ошибки или цепочка обрывается — не хватает корневого или подчинённого сертификата либо списка отзыва.</li>
      <li><b>Статус по списку отзыва.</b> Если серийный номер сертификата попал в актуальный список — сертификат отозван, и работать им нельзя.</li>
      <li><b>OCSP.</b> При наличии онлайн-проверки статус возвращается сразу: действителен, отозван или неизвестен.</li>
    </ul>
    <h3 id="demo-proverka-podpisi">Как проверить, что подпись работает целиком</h3>
    <p>Если нужно убедиться, что подпись в принципе работает на рабочем месте, удобно использовать демо-страницу проверки подписи КриптоПро — она показывает, корректно ли настроены провайдер, плагин и сертификат.</p>

    <h2 id="offline">Если рабочее место без доступа в интернет</h2>
    <p>Многие рабочие места, с которых ведётся работа с казначейством, изолированы от интернета по требованиям безопасности. В этом случае автоматическая загрузка списков отзыва по точке распространения невозможна, и проверка цепочки будет падать с ошибкой «не удалось получить список отзыва». Решение — обновлять списки вручную.</p>
    <h3 id="obnovlenie-sos-vruchnuyu">Как обновлять списки отзыва вручную</h3>
    <p>Порядок простой: на компьютере с доступом в интернет скачать актуальные файлы корневого и подчинённых сертификатов и все нужные списки отзыва из каталога точки распространения, перенести их на изолированное рабочее место и установить в соответствующие хранилища. Делать это нужно регулярно — списки отзыва имеют ограниченный срок действия, и просроченный список так же блокирует проверку, как и его отсутствие.</p>
    <h3 id="komplekt-dlya-mnogih-mest">Комплект файлов для нескольких изолированных мест</h3>
    <p>Если в организации много изолированных мест, удобно один раз в период собирать «комплект» из свежих сертификатов и списков и распространять его централизованно. Это снимает большую часть обращений в духе «подпись перестала работать без видимой причины» — почти всегда причина именно в устаревшем списке отзыва.</p>

    <h2 id="paket">Полный комплект файлов для рабочего места</h2>
    <p>Чтобы подпись казначейства гарантированно проходила проверку, на рабочем месте должен быть собран полный комплект. Удобно держать его перечнем и проверять при каждой настройке нового компьютера.</p>
    <h3 id="pyat-elementov-komplekta">Пять элементов комплекта</h3>
    <ul>
      <li>Корневой сертификат Головного удостоверяющего центра — установлен в «Доверенные корневые центры сертификации».</li>
      <li>Все актуальные подчинённые сертификаты Удостоверяющего центра Казначейства — в «Промежуточные центры сертификации».</li>
      <li>Списки отзыва (.crl) для каждого подчинённого сертификата — установлены и не просрочены.</li>
      <li>Личный сертификат пользователя — в личном хранилище, с привязкой к ключевому носителю.</li>
      <li>Актуальная сборка КриптоПро CSP и плагин для браузера.</li>
    </ul>
    <h3 id="s-chego-nachinat-diagnostiku">С чего начинать диагностику сбоя</h3>
    <p>Если все пять пунктов на месте, цепочка доверия выстраивается, а проверка по спискам отзыва проходит без ошибок. Когда хотя бы один элемент устарел или отсутствует — появляется одна из ошибок из таблицы ниже. Поэтому при любом сбое начинать диагностику стоит именно со сверки этого комплекта, а не с перевыпуска сертификата.</p>

    <h2 id="problems">Типичные ошибки и как их устранить</h2>
    <table>
      <thead><tr><th>Симптом</th><th>Причина</th><th>Что сделать</th></tr></thead>
      <tbody>
        <tr><td>«Не удалось проверить цепочку сертификатов»</td><td>Нет корневого Головного центра или подчинённого сертификата Казначейства</td><td>Скачать и установить недостающие сертификаты в нужные хранилища либо обновить КриптоПро CSP</td></tr>
        <tr><td>«Нет отношения доверия» (цепочка прервана на корневом)</td><td>Корневой сертификат не в «Доверенных корневых»</td><td>Переустановить корневой именно в хранилище доверенных корневых центров</td></tr>
        <tr><td>«Не удалось получить список отзыва»</td><td>Список устарел или недоступна точка распространения</td><td>Скачать актуальный .crl из каталога crl.roskazna.ru и установить вручную</td></tr>
        <tr><td>Сертификат не принимается системой</td><td>Сертификат отозван — есть в списке отзыва</td><td>Перевыпустить сертификат в удостоверяющем центре</td></tr>
        <tr><td>Перестали проходить новые сертификаты</td><td>Выпущен новый подчинённый сертификат центра</td><td>Доустановить новый подчинённый сертификат и его список отзыва</td></tr>
      </tbody>
    </table>
    <h3 id="tipovaya-situaciya-vhod">Типовая ситуация: подпись новая, а вход не проходит</h3>
    <p class="note">На практике встречается типовая ситуация: после планового перевыпуска сертификата сотрудник не может войти в «Электронный бюджет», хотя подпись «новая и рабочая». Причина почти всегда одна — на рабочем месте не обновлены подчинённый сертификат центра и список отзыва. Это обобщённый пример: после любого обновления в удостоверяющем центре проверяйте цепочку целиком, а не только личный сертификат.</p>

    <h2 id="glossary">Глоссарий</h2>
    <dl class="gloss">
      <div><dt>Удостоверяющий центр Казначейства</dt><dd>Аккредитованный удостоверяющий центр, которым выступает Федеральное казначейство по части 1 статьи 15 Закона № 63-ФЗ.</dd></div>
      <div><dt>Корневой сертификат</dt><dd>Самоподписанный сертификат верхнего уровня (Головного удостоверяющего центра), которому система доверяет априори.</dd></div>
      <div><dt>Подчинённый сертификат</dt><dd>Промежуточный сертификат, выданный Головным центром Казначейству; им подписываются пользовательские сертификаты.</dd></div>
      <div><dt>СОС (CRL)</dt><dd>Список отозванных сертификатов — подписанный перечень серийных номеров сертификатов, действие которых прекращено.</dd></div>
      <div><dt>Цепочка доверия</dt><dd>Путь от корневого сертификата к пользовательскому; считается действительной, если все звенья установлены и не отозваны.</dd></div>
      <div><dt>OCSP</dt><dd>Протокол проверки статуса сертификата в реальном времени: возвращает «действителен», «отозван» или «неизвестен».</dd></div>
    </dl>

    <h2 id="faq">Частые вопросы</h2>
    <div class="faq">
      <details open><summary>Чем сертификаты удостоверяющего центра отличаются от моего сертификата?</summary><p>Ваш сертификат выдан сотруднику для подписи документов. Сертификаты центра — корневой и подчинённый — нужны, чтобы система доверяла вашему сертификату. Без них установленный личный сертификат не пройдёт проверку.</p></details>
      <details><summary>Что такое СОС и зачем он нужен?</summary><p>СОС (список отозванных сертификатов), он же CRL, — перечень сертификатов, действие которых прекращено досрочно. Программа сверяет с ним вашу подпись: если сертификат отозван, использовать его нельзя.</p></details>
      <details><summary>Где скачать корневые сертификаты и списки отзыва?</summary><p>В разделе «Удостоверяющий центр» на roskazna.gov.ru и в каталоге crl.roskazna.ru. Списки отзыва имеют расширение .crl и привязаны к конкретному подчинённому сертификату по году выпуска.</p></details>
      <details><summary>Куда устанавливать корневой и подчинённый сертификаты?</summary><p>Корневой сертификат Головного центра — в «Доверенные корневые центры сертификации», сертификат «Казначейство России» — в «Промежуточные центры сертификации».</p></details>
      <details><summary>Почему новый сертификат не проходит проверку?</summary><p>Чаще всего на рабочем месте не установлен новый подчинённый сертификат центра или его список отзыва. После любого обновления в удостоверяющем центре проверяйте всю цепочку, а не только личный сертификат.</p></details>
      <details><summary>Как проверить, не отозван ли сертификат?</summary><p>Откройте вкладку «Путь сертификации» в свойствах сертификата и убедитесь, что цепочка без ошибок. Если серийный номер есть в актуальном списке отзыва — сертификат отозван и подлежит перевыпуску.</p></details>
      <details><summary>Как часто обновляется список отзыва?</summary><p>Список действует ограниченное время и периодически переиздаётся. Точную периодичность смотрите в регламенте удостоверяющего центра. На практике список стоит обновлять при ошибках проверки и после выпуска новых сертификатов центра.</p></details>
      <details><summary>Нужно ли что-то делать, если центр выпустил новый сертификат?</summary><p>Да. Доустановите новый подчинённый сертификат центра и соответствующий список отзыва на рабочее место — иначе свежевыпущенные пользовательские сертификаты перестанут проходить проверку.</p></details>
      <details><summary>Подойдёт ли для казначейства коммерческий сертификат?</summary><p>Нет. Для работы со средствами, подлежащими казначейскому сопровождению, нужен квалифицированный сертификат, выданный Удостоверяющим центром Казначейства по приказу № 21н. Коммерческий сертификат для площадок и налоговой здесь не подходит.</p></details>
      <details><summary>Можно ли обновить корневые сертификаты автоматически?</summary><p>Частично: в свежих сборках КриптоПро CSP актуальные корневые сертификаты уже включены, поэтому их обновление сводится к обновлению программы. А вот списки отзыва обновляются отдельно и по мере выпуска новых сертификатов центра.</p></details>
      <details><summary>В какое хранилище ставить список отзыва?</summary><p>Файл .crl устанавливается как список отзыва сертификатов (в хранилище CRL). Это отдельное действие: установка только сертификатов без актуального списка отзыва всё равно приведёт к ошибке проверки.</p></details>
      <details><summary>Чем СОС отличается от проверки по OCSP?</summary><p>СОС (список отзыва) скачивается целиком и действует ограниченный срок — он может слегка отставать от реального статуса. OCSP проверяет конкретный сертификат по запросу в реальном времени и возвращает ответ «действителен», «отозван» или «неизвестен». На практике их используют как взаимодополняющие способы.</p></details>
      <details><summary>Где скачать сертификаты казначейства?</summary><p>Головные и подчинённые сертификаты удостоверяющего центра и списки отзыва публикуются в разделе удостоверяющего центра на сайте Федерального казначейства. Личный сертификат там не скачивается: он выпускается по вашему запросу и записывается на защищённый носитель.</p></details>
      <details><summary>Чем сертификат удостоверяющего центра отличается от списка отзыва?</summary><p>Сертификат центра подтверждает, кто выпустил вашу подпись, и строит цепочку доверия. Список отзыва (СОС, CRL) показывает, не аннулирован ли сертификат на текущий момент. Первый обновляется редко, второй — регулярно.</p></details>
      <details><summary>Почему подпись перестала работать без видимых причин?</summary><p>Чаще всего истёк срок актуальности списка отзыва на рабочем месте или не обновились служебные файлы после переустановки системы. Проверку начинают с цепочки доверия и списков отзыва, а не с перевыпуска сертификата.</p></details>
      <details><summary>Как обновлять списки отзыва на компьютере без интернета?</summary><p>Файлы переносят вручную и устанавливают по внутреннему регламенту с фиксированной периодичностью. Автоматическая загрузка в закрытом контуре недоступна, поэтому ответственного и график обновления назначают заранее.</p></details>
      <details><summary>Что означает, что сертификат находится в списке отзыва?</summary><p>Сертификат аннулирован: подписывать им нельзя, а проверка подписи даст отрицательный результат. По статье 11 закона № 63-ФЗ подпись признаётся действительной, если сертификат действителен на момент подписания документа либо на день проверки, когда момент подписания не определён.</p></details>
      <details><summary>Что делать с документами, подписанными аннулированным сертификатом?</summary><p>Их переподписывают действующим сертификатом. Дополнительно проверяют, не нарушена ли конфиденциальность ключа: при подозрении на компрометацию удостоверяющий центр уведомляют не позднее одного рабочего дня со дня получения информации о нарушении.</p></details>
    </div>

<!-- p47:chto-nazyvayut-sertifikatami -->

    <h2 id="chto-nazyvayut">Что называют «сертификатами казначейства»</h2>
    <p>Запрос «сертификаты казначейства» приводит людей с четырьмя разными задачами, и путаница между ними стоит рабочего дня. Разложим по полкам: что это за файл, для чего он и куда идти дальше.</p>
    <h3 id="chetyre-zaprosa">Четыре разных запроса и что за ними стоит</h3>
    <table>
      <thead><tr><th>Что имеют в виду</th><th>Что это на самом деле</th><th>Куда дальше</th></tr></thead>
      <tbody>
        <tr><td>«Мне нужен сертификат, чтобы подписывать»</td><td>Личный квалифицированный сертификат должностного лица</td><td><a href="/baza-znaniy/sertifikat-ecp-kaznachejstvo/">Как получить сертификат казначейства</a></td></tr>
        <tr><td>«Скачать сертификаты казначейства»</td><td>Головной и подчинённые сертификаты удостоверяющего центра — файлы цепочки доверия</td><td>Разделы этой страницы про загрузку и установку</td></tr>
        <tr><td>«Нужны списки отзыва»</td><td>Списки отзыва сертификатов (СОС, CRL) — перечни аннулированных сертификатов</td><td>Раздел про проверку статуса на этой странице</td></tr>
        <tr><td>«Не работает подпись после переустановки»</td><td>Задача настройки рабочего места целиком: криптопровайдер, носитель, плагин, корневые файлы</td><td><a href="/baza-znaniy/nastroyka-arm-elektronnyy-byudzhet/">Настройка рабочего места</a> и <a href="/baza-znaniy/kornevye-sertifikaty-kaznachejstva/">установка корневых сертификатов</a></td></tr>
      </tbody>
    </table>
    <h3 id="sertifikat-protiv-sos">Чем сертификат центра отличается от списка отзыва</h3>
    <p>Разница между сертификатом удостоверяющего центра и списком отзыва принципиальна. Сертификат центра отвечает на вопрос «кто выпустил вашу подпись и можно ли ему доверять». Список отзыва отвечает на другой вопрос — «не аннулирована ли эта подпись прямо сейчас». Поэтому корневые файлы ставят один раз и обновляют редко, а списки отзыва по своей природе регулярно обновляются, и просроченный список — самая частая причина внезапного «сертификат не действителен» на рабочем месте, которое вчера работало.</p>
    <h3 id="zakrytyy-kontur">Закрытый контур: файлы приносят вручную</h3>
    <p>Второй практический вывод — про закрытый контур. Если рабочее место без выхода в интернет, автоматически подтянуть свежий список отзыва система не сможет: файлы придётся приносить и обновлять вручную по регламенту, который вы установите сами. Об этом отдельный раздел ниже.</p>

<!-- p47b:v-spiske-otzyva -->

    <h2 id="v-spiske-otzyva">Если сертификат попал в список отзыва</h2>
    <p>Попадание в список отзыва означает, что сертификат аннулирован: подписывать им нельзя, а проверка подписи даст отрицательный результат. Это не техническая мелочь. По статье 11 закона № 63-ФЗ квалифицированная подпись признаётся действительной, когда сертификат действителен на момент подписания документа — либо на день проверки, если момент подписания достоверно не определён.</p>
    <h3 id="dokumenty-posle-annulirovaniya">Что делать с документами, подписанными после аннулирования</h3>
    <p>Отсюда два практических следствия. Первое: документы, подписанные после аннулирования, придётся переподписывать действующим сертификатом. Второе: если момент подписания в системе не фиксируется достоверно, риск растёт — проверка будет смотреть на состояние сертификата на день проверки, а не на день подписи.</p>
    <h3 id="poryadok-pri-otzyve">Порядок действий при отзыве сертификата</h3>
    <ol>
      <li><b>Выясните причину.</b> Отзыв по заявлению владельца, прекращение полномочий должностного лица, компрометация ключа и истечение срока — разные события с разными последствиями.</li>
      <li><b>Прекратите использование ключа.</b> Если есть основания считать конфиденциальность нарушенной, использовать ключ нельзя, а удостоверяющий центр уведомляют не позднее одного рабочего дня со дня получения информации о нарушении (статья 10 закона № 63-ФЗ).</li>
      <li><b>Выпустите новый сертификат</b> — порядок в материале про <a href="/baza-znaniy/kak-prodlit-i-otozvat-ecp-kaznachejstva/">продление и отзыв подписи казначейства</a>.</li>
      <li><b>Проверьте документы за спорный период</b> и переподпишите те, что ушли после аннулирования.</li>
      <li><b>Обновите сведения о подписантах</b> в информационных системах и в карточке образцов подписей.</li>
    </ol>
    <h3 id="ustarevshiy-spisok-vinovat">Чаще виноват устаревший список, а не сертификат</h3>
    <p>Обратная ситуация встречается чаще: сертификат в порядке, а рабочее место считает его недействительным, потому что локальный список отзыва устарел. Прежде чем бежать за перевыпуском, обновите служебные файлы и проверьте цепочку доверия — в большинстве случаев этим всё и лечится.</p>

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
        <li id="ref-1">Федеральный закон от 06.04.2011 № 63-ФЗ «Об электронной подписи», часть 1 статьи 15, статьи 17.2 и 17.4. <a href="https://www.consultant.ru/document/cons_doc_LAW_112701/" target="_blank" rel="noopener">КонсультантПлюс</a></li>
        <li id="ref-2">Приказ Федерального казначейства от 15.06.2021 № 21н о порядке реализации функций аккредитованного удостоверяющего центра (действует с 01.01.2022). <a href="https://www.consultant.ru/document/cons_doc_LAW_208093/" target="_blank" rel="noopener">КонсультантПлюс</a></li>
        <li id="ref-3">Раздел «Удостоверяющий центр» на официальном сайте Федерального казначейства (roskazna.gov.ru).</li>
        <li id="ref-4">Каталог корневых сертификатов и списков отзыва УЦ Казначейства (crl.roskazna.ru).</li>
        <li id="ref-5">Информационная система Головного удостоверяющего центра, Минцифры России (digital.gov.ru).</li>
        <li id="ref-6">Инструкция по установке корневых сертификатов в КриптоПро CSP (cryptopro.ru).</li>
      </ol>
      <p class="refs__note">Сведения приведены по состоянию на 27 августа 2026 года. Точные имена файлов, реквизиты текущих сертификатов и периодичность списков отзыва смотрите в актуальном разделе удостоверяющего центра на roskazna.gov.ru.</p>
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
    <form class="railform" id="leadForm" novalidate data-endpoint="/php/lead.php" data-source="sertifikaty-i-spiski-otzyva-uc-kaznachejstva">
      <div class="railform__badge">Разбор эксперта</div>
      <h3 class="railform__title">Поможем с сертификатом</h3>
      <p class="railform__sub">Настроим электронную подпись казначейства, установим корневые сертификаты и списки отзыва, проверим цепочку доверия. Удалённо, по всей России.</p>
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
    <a class="card reveal" href="/baza-znaniy/kornevye-sertifikaty-kaznachejstva/"><div class="card__cover"><span>Корневые</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Корневые сертификаты УЦ казначейства: как установить</h3><div class="card__meta">ЭЦП · 14 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/sertifikat-ecp-kaznachejstvo/"><div class="card__cover"><span>Сертификат</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Сертификат и ЭЦП казначейства: как получить</h3><div class="card__meta">ЭЦП · 16 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/udostoveryayushchiy-centr-kaznachejstva/"><div class="card__cover"><span>УЦ ФК</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Удостоверяющий центр Федерального казначейства</h3><div class="card__meta">ЭЦП · 15 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/kak-prodlit-i-otozvat-ecp-kaznachejstva/"><div class="card__cover"><span>Продление</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Как продлить и отозвать ЭЦП казначейства</h3><div class="card__meta">ЭЦП · 13 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/nastroyka-arm-elektronnyy-byudzhet/"><div class="card__cover"><span>АРМ</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">Настройка рабочего места для «Электронного бюджета»</h3><div class="card__meta">ГИИС · 14 мин</div></div></a>
    <a class="card reveal" href="/baza-znaniy/poib-sobi-elektronnyy-byudzhet/"><div class="card__cover"><span>ПОИБ/СОБИ</span></div><div class="card__body"><span class="card__cat">База знаний</span><h3 class="card__title">ПОИБ/СОБИ «Электронного бюджета»: вход в контур</h3><div class="card__meta">ГИИС · 12 мин</div></div></a>
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

<section class="kz-sub" aria-labelledby="kzSubTitle" data-source="sertifikaty-i-spiski-otzyva-uc-kaznachejstva">
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
<link rel="stylesheet" href="/assets/svc-cta.css?v=<?= @filemtime($_SERVER['DOCUMENT_ROOT'].'/assets/svc-cta.css') ?>">
<link rel="stylesheet" href="/assets/kg-lead.css?v=<?= @filemtime($_SERVER['DOCUMENT_ROOT'].'/assets/kg-lead.css') ?>"><script src="/assets/kg-lead.js?v=<?= @filemtime($_SERVER['DOCUMENT_ROOT'].'/assets/kg-lead.js') ?>" defer></script>
</body>
</html>
