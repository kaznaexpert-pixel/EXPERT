<?php
header("Cache-Control: public, max-age=300, must-revalidate");
?>
<!DOCTYPE html>
<html lang="ru">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- ============================================================ -->
    <!-- SEO META                                                      -->
    <!-- ============================================================ -->
    <title>Откроем казначейский счёт за 2 дня · Казначейское сопровождение</title>
    <meta name="description" content="Откроем казначейский счёт в УФК за 2 дня. Казначейское сопровождение под ключ: ГИИС «ЭБ», раздельный учёт, санкционирование. 15+ лет в Казначействе."/>
    <meta name="keywords" content="казначейский счёт, казначейское сопровождение, открытие казначейского счёта, ГИИС Электронный бюджет, раздельный учёт по госконтракту, санкционирование платежей, 44-ФЗ, 223-ФЗ"/>
    <meta name="author" content="КазнаЭксперт">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">

    <link rel="canonical" href="https://kaznaexpert.ru/">

    <!-- ============================================================ -->
    <!-- ICONS                                                         -->
    <!-- ============================================================ -->
    <link rel="icon" href="/img/icon.png" type="image/x-icon">
    <link rel="shortcut icon" href="/img/icon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="/img/icon.png">

    <!-- ============================================================ -->
    <!-- PERFORMANCE: preload / preconnect                             -->
    <!-- ============================================================ -->
    <!-- Quiet Luxury fonts: Playfair Display (serif) + Inter (sans) — self-hosted -->
    <!-- (152-ФЗ: без трансграничной передачи в Google Fonts). -->
    <link rel="preload" as="font" type="font/woff2" href="/fonts/inter-normal-400-cyrillic.woff2" crossorigin>
    <link rel="preload" as="font" type="font/woff2" href="/fonts/playfairdisplay-normal-500-cyrillic.woff2" crossorigin>
    <link rel="stylesheet" href="/css/fonts.css?v=<?= @filemtime(__DIR__ . '/css/fonts.css') ?>">
    <link rel="stylesheet" href="/css/v2.css?v=<?= @filemtime(__DIR__ . '/css/v2.css') ?>">
    <link rel="preconnect" href="https://mc.yandex.ru" crossorigin>
    <link rel="dns-prefetch" href="https://t.me">
    <link rel="dns-prefetch" href="https://max.ru">

    <!-- ============================================================ -->
    <!-- STYLES                                                        -->
    <!-- ============================================================ -->
    <link rel="stylesheet" href="/css/style.css?v=<?= @filemtime(__DIR__ . '/css/style.css') ?>" type="text/css">

    <!-- ============================================================ -->
    <!-- OPEN GRAPH                                                    -->
    <!-- ============================================================ -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://kaznaexpert.ru/">
    <meta property="og:title" content="Откроем казначейский счёт за 2 дня · Сопровождение под ключ">
    <meta property="og:description" content="Открытие казначейского счёта в УФК за 2 дня. Полное казначейское сопровождение по 44-ФЗ и 223-ФЗ: ГИИС «Электронный бюджет», раздельный учёт, санкционирование платежей. 15+ лет в Казначействе.">
    <meta property="og:image" content="https://kaznaexpert.ru/img/og-image.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="КазнаЭксперт — казначейское сопровождение госконтрактов">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:site_name" content="КазнаЭксперт">

    <!-- ============================================================ -->
    <!-- TWITTER CARD                                                  -->
    <!-- ============================================================ -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://kaznaexpert.ru/">
    <meta name="twitter:title" content="Откроем казначейский счёт за 2 дня · Сопровождение под ключ">
    <meta name="twitter:description" content="Открытие казначейского счёта в УФК за 2 дня. Полное казначейское сопровождение по 44-ФЗ и 223-ФЗ. 15+ лет в Казначействе.">
    <meta name="twitter:image" content="https://kaznaexpert.ru/img/og-image.png">
    <meta name="twitter:image:alt" content="КазнаЭксперт — казначейское сопровождение">

    <!-- ============================================================ -->
    <!-- VERIFICATIONS                                                 -->
    <!-- ============================================================ -->
    <meta name="google-site-verification" content="T-VolneI_RUJEvudBW_1poT9Z-nu2VUGmO38zWn5GDs" />
    <meta name="yandex-verification" content="9f594e4b8ecee914" />

    <!-- ============================================================ -->
    <!-- SCHEMA.ORG: Organization                                      -->
    <!-- ============================================================ -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "@id": "https://kaznaexpert.ru/#organization",
      "name": "КазнаЭксперт",
      "alternateName": "Kaznaexpert",
      "url": "https://kaznaexpert.ru/",
      "logo": {
        "@type": "ImageObject",
        "url": "https://kaznaexpert.ru/img/icon.png",
        "width": 512,
        "height": 512
      },
      "image": "https://kaznaexpert.ru/img/og-image.png",
      "description": "Полный аутсорсинг казначейского сопровождения государственных контрактов по 44-ФЗ и 223-ФЗ.",
      "telephone": "+7-981-833-10-10",
      "email": "kaznaexpert@gmail.com",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Средний пр. В.О., 88, литера А, оф. 330",
        "addressLocality": "Санкт-Петербург",
        "postalCode": "199106",
        "addressCountry": "RU"
      },
      "areaServed": {
        "@type": "Country",
        "name": "Российская Федерация"
      },
      "founder": {
        "@type": "Person",
        "name": "Михайлов Ярослав",
        "jobTitle": "Эксперт по казначейскому сопровождению"
      },
      "foundingDate": "2021",
      "sameAs": [
        "https://t.me/Kazna_Expert",
        "https://dzen.ru/kazna_expert",
        "https://tenchat.ru/Kazna-gov",
        "https://www.klerk.ru/user/2692943/",
        "https://www.rusprofile.ru/ip/321784700367672"
      ],
      "contactPoint": [{
        "@type": "ContactPoint",
        "telephone": "+7-981-833-10-10",
        "contactType": "customer service",
        "email": "kaznaexpert@gmail.com",
        "areaServed": "RU",
        "availableLanguage": ["ru"]
      }],
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "bestRating": "5",
        "worstRating": "1",
        "reviewCount": "7"
      }
    }
    </script>

    <!-- ============================================================ -->
    <!-- SCHEMA.ORG: ProfessionalService                               -->
    <!-- ============================================================ -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ProfessionalService",
      "@id": "https://kaznaexpert.ru/#localbusiness",
      "name": "КазнаЭксперт",
      "image": "https://kaznaexpert.ru/img/og-image.png",
      "url": "https://kaznaexpert.ru/",
      "telephone": "+7-981-833-10-10",
      "email": "kaznaexpert@gmail.com",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Средний пр. В.О., 88, литера А, оф. 330",
        "addressLocality": "Санкт-Петербург",
        "postalCode": "199106",
        "addressCountry": "RU"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": "59.945923",
        "longitude": "30.282489"
      },
      "openingHoursSpecification": [{
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
        "opens": "09:00",
        "closes": "19:00"
      }],
      "areaServed": [{"@type": "AdministrativeArea", "name": "Российская Федерация"}],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Услуги казначейского сопровождения",
        "itemListElement": [
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Подключение к ГИИС «Электронный бюджет»"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Открытие лицевого счёта в Казначействе"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Утверждение сведений об операциях с целевыми средствами"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Проведение платежей по казначейскому сопровождению"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Закрытие лицевого счёта"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Раздельный учёт по госконтракту"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Анализ контракта на казначейское сопровождение"}}
        ]
      }
    }
    </script>

    <!-- ============================================================ -->
    <!-- SCHEMA.ORG: WebSite                                           -->
    <!-- ============================================================ -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "@id": "https://kaznaexpert.ru/#website",
      "url": "https://kaznaexpert.ru/",
      "name": "КазнаЭксперт",
      "description": "Казначейское сопровождение государственных контрактов под ключ",
      "publisher": {"@id": "https://kaznaexpert.ru/#organization"},
      "inLanguage": "ru-RU"
    }
    </script>

    <!-- ============================================================ -->
    <!-- SCHEMA.ORG: FAQPage (15 вопросов, для AI Overviews / GEO)     -->
    <!-- ============================================================ -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {"@type": "Question", "name": "Что такое казначейский счёт?", "acceptedAnswer": {"@type": "Answer", "text": "Казначейский счёт — это лицевой счёт, открытый в территориальном органе Федерального Казначейства (ТОФК) для расчётов по государственному контракту с казначейским сопровождением. На счёт поступают средства от заказчика, а расходование возможно только после санкционирования УФК. Цель — контроль целевого использования бюджетных средств по 44-ФЗ и 223-ФЗ."}},
        {"@type": "Question", "name": "Что такое казначейское сопровождение?", "acceptedAnswer": {"@type": "Answer", "text": "Казначейское сопровождение — режим финансового контроля по 44-ФЗ и 223-ФЗ, при котором расчёты по госконтракту проходят через лицевой счёт в УФК. Каждый платёж исполнителя проверяется Казначейством на соответствие условиям контракта и целевому назначению средств. Регулируется статьёй 242.23 Бюджетного кодекса РФ и Постановлением Правительства РФ № 1496 от 09.12.2017."}},
        {"@type": "Question", "name": "Кто попадает под казначейское сопровождение в 2026 году?", "acceptedAnswer": {"@type": "Answer", "text": "Под казначейское сопровождение по 44-ФЗ в 2026 году попадают: исполнители контрактов от 3 млн ₽ при авансе более 50%, исполнители контрактов от 100 млн ₽ независимо от размера аванса, получатели бюджетных субсидий, исполнители контрактов в рамках национальных проектов, исполнители гособоронзаказа (ГОЗ). Также сопровождение распространяется на субподрядчиков всех уровней по этим контрактам."}},
        {"@type": "Question", "name": "Кто такой неучастник бюджетного процесса?", "acceptedAnswer": {"@type": "Answer", "text": "Неучастник бюджетного процесса — это юридическое лицо, индивидуальный предприниматель или физическое лицо, которое не является получателем бюджетных средств, но участвует в исполнении госконтракта. Это коммерческие организации — поставщики, подрядчики, субподрядчики, у которых открывается лицевой счёт в ТОФК для расчётов по госконтракту."}},
        {"@type": "Question", "name": "Какой лимит казначейского сопровождения в 2026 году?", "acceptedAnswer": {"@type": "Answer", "text": "Лимиты обязательного казначейского сопровождения по 44-ФЗ в 2026 году: от 3 млн ₽ при авансе более 50% от цены контракта, от 100 млн ₽ независимо от размера аванса. Для контрактов с бюджетной субсидией или средствами национальных проектов казначейское сопровождение применяется независимо от суммы. Для гособоронзаказа действуют отдельные правила по 275-ФЗ."}},
        {"@type": "Question", "name": "Как открыть казначейский счёт?", "acceptedAnswer": {"@type": "Answer", "text": "Чтобы открыть казначейский счёт самостоятельно: 1) Получить квалифицированную электронную подпись (КЭП). 2) Подключиться к ГИИС «Электронный бюджет» — 3–7 рабочих дней. 3) Подготовить пакет документов: устав, ЕГРЮЛ/ЕГРИП, контракт, доверенность. 4) Подать заявление и договор обслуживания в ТОФК. 5) Дождаться открытия — 2–5 рабочих дней. С «КазнаЭксперт» весь процесс — за 2 рабочих дня."}},
        {"@type": "Question", "name": "Должен ли субподрядчик открывать казначейский счёт?", "acceptedAnswer": {"@type": "Answer", "text": "Да, субподрядчик по контракту с казначейским сопровождением обязан открыть отдельный лицевой счёт в ТОФК для получения оплаты от подрядчика. Каждое звено цепочки исполнителей ведёт расчёты через свой казначейский счёт. Платежи на каждом уровне проходят санкционирование Казначейства. Исключение — поставка строительных материалов и оборудования с прямой оплатой на расчётный счёт."}},
        {"@type": "Question", "name": "Что такое ТОФК?", "acceptedAnswer": {"@type": "Answer", "text": "ТОФК — Территориальный Орган Федерального Казначейства. Это региональное подразделение Казначейства России в субъекте Федерации: УФК по Санкт-Петербургу, УФК по г. Москве, УФК по Московской области и так далее. ТОФК открывает лицевые счета, санкционирует платежи, ведёт бюджетный учёт. Все операции по казначейскому сопровождению проходят через ТОФК по месту регистрации клиента."}},
        {"@type": "Question", "name": "Что такое коды расходования средств (КВР и КОСГУ)?", "acceptedAnswer": {"@type": "Answer", "text": "КВР (код вида расходов) и КОСГУ (классификация операций сектора государственного управления) — это коды бюджетной классификации, определяющие целевое назначение каждого платежа по госконтракту. По 44-ФЗ исполнитель распределяет всю сумму контракта по этим кодам в форме «Сведения об операциях с целевыми средствами». Без утверждения сведений в УФК ни один платёж не пройдёт санкционирование. Регулируется приказом Минфина России № 209н."}},
        {"@type": "Question", "name": "Что такое ГИИС «Электронный бюджет»?", "acceptedAnswer": {"@type": "Answer", "text": "ГИИС «Электронный бюджет» — государственная интегрированная информационная система управления общественными финансами, через которую проходит весь документооборот с Федеральным Казначейством по контрактам с казначейским сопровождением. Без подключения к ГИИС «ЭБ» работа невозможна. Подключение требует квалифицированной электронной подписи (КЭП) и установки сертификатов. Срок — 3–7 рабочих дней."}},
        {"@type": "Question", "name": "В чём разница между лицевым счётом и казначейским счётом?", "acceptedAnswer": {"@type": "Answer", "text": "Казначейский счёт — это единый банковский счёт Федерального Казначейства РФ в Банке России, на котором учитываются средства всех клиентов УФК. Лицевой счёт — это аналитический счёт учёта операций конкретного клиента, открытый в ТОФК. При казначейском сопровождении исполнителю открывается лицевой счёт (обычно типа 41, 71 или 14), который ведётся на казначейском счёте УФК. На практике термины часто синонимичны."}},
        {"@type": "Question", "name": "Что такое раздельный учёт по госконтракту?", "acceptedAnswer": {"@type": "Answer", "text": "Раздельный учёт по госконтракту — это обязанность исполнителя по 44-ФЗ вести отдельный учёт результатов финансово-хозяйственной деятельности по каждому контракту с казначейским сопровождением. В учёте отражаются доходы, расходы, активы и обязательства в разрезе конкретного контракта. За нарушение — штраф 5–10% цены договора, но не более 500 тыс. ₽ для юрлиц, 250 тыс. ₽ для ИП, 10–50 тыс. ₽ для должностных лиц."}},
        {"@type": "Question", "name": "Какие документы нужны для открытия казначейского счёта?", "acceptedAnswer": {"@type": "Answer", "text": "Для открытия казначейского счёта в ТОФК понадобятся: устав организации, выписка из ЕГРЮЛ или ЕГРИП (не старше 30 дней), копия государственного контракта или дополнительного соглашения, документ о назначении руководителя, доверенность на представителя (если открывает не директор), квалифицированная электронная подпись руководителя, банковские реквизиты для возврата остатков. Точный список финализируется после анализа контракта."}},
        {"@type": "Question", "name": "Сколько стоит казначейское сопровождение?", "acceptedAnswer": {"@type": "Answer", "text": "Стоимость казначейского сопровождения зависит от объёма работ, типа контракта (44-ФЗ, 223-ФЗ, ГОЗ), количества субподрядчиков, региона и состояния документов клиента. Открытие казначейского счёта в ТОФК — от 39 000 ₽. Подключение к ГИИС «Электронный бюджет» — от 29 000 ₽. Полное сопровождение контракта «под ключ» — от 79 000 ₽. Точная смета после бесплатного предварительного анализа контракта."}},
        {"@type": "Question", "name": "Что такое санкционирование платежей УФК?", "acceptedAnswer": {"@type": "Answer", "text": "Санкционирование платежей — это процедура согласования каждого платежа по госконтракту с казначейским сопровождением в УФК. Перед перечислением средств исполнитель подаёт в Казначейство платёжное поручение и пакет подтверждающих документов: счёт, акт, договор с субподрядчиком. УФК проверяет соответствие условиям контракта, кодам КВР и КОСГУ и утверждённым сведениям об операциях. Стандартный срок санкционирования — 1–5 рабочих дней."}},
        {"@type": "Question", "name": "Что делать если меня уже ведёт другой подрядчик по казначейскому сопровождению, но он не справляется?", "acceptedAnswer": {"@type": "Answer", "text": "Если подрядчик по казначейскому сопровождению не справляется — казначейство возвращает платежи, документы в беспорядке, не подключены к ГИИС «Электронный бюджет», не ведётся раздельный учёт — КазнаЭксперт берёт контракт на исправление. Работа в два шага: экспресс-аудит за 29 000 ₽ (24–48 часов, разбор ошибок и план исправления) и доведение контракта до закрытия по индивидуальной смете от 99 000 ₽. Передача дел между подрядчиками возможна в любой момент исполнения контракта."}}
      ]
    }
    </script>

    <!-- Schema.org: Person — Михайлов Ярослав (эксперт E-E-A-T) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Person",
      "@id": "https://kaznaexpert.ru/#mikhaylov",
      "name": "Михайлов Ярослав",
      "jobTitle": "Основатель и эксперт по казначейскому сопровождению",
      "image": "https://kaznaexpert.ru/img/mihailov-768.jpg",
      "description": "Эксперт по казначейскому сопровождению государственных контрактов по 44-ФЗ и 223-ФЗ. Опыт работы в системе Федерального Казначейства — 15+ лет. Основатель компании КазнаЭксперт. Знает требования УФК изнутри: причины отказов, нюансы КОСГУ и КВР, раздельный учёт, санкционирование платежей.",
      "knowsAbout": [
        "Казначейское сопровождение",
        "ГИИС Электронный бюджет",
        "Открытие лицевого счёта в Казначействе",
        "Раздельный учёт по госконтракту",
        "Санкционирование платежей УФК",
        "44-ФЗ",
        "223-ФЗ",
        "Гособоронзаказ"
      ],
      "worksFor": {
        "@id": "https://kaznaexpert.ru/#organization"
      },
      "url": "https://kaznaexpert.ru/",
      "sameAs": [
        "https://t.me/Kaznaexpert"
      ]
    }
    </script>

    <!-- Schema.org: ItemList — кейсы клиентов -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ItemList",
      "@id": "https://kaznaexpert.ru/#cases",
      "name": "Кейсы клиентов КазнаЭксперт",
      "description": "5 обезличенных кейсов клиентов: открытие казначейских счетов, сопровождение цепочек субподрядчиков, восстановление раздельного учёта, ускорение санкционирования",
      "numberOfItems": 5,
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Строительная компания, Санкт-Петербург — контракт 140 млн ₽ по 44-ФЗ, возврат платежа УФК", "description": "Платёж санкционирован за 3 рабочих дня после пересборки сведений КВР/КОСГУ"},
        {"@type": "ListItem", "position": 2, "name": "IT-интегратор, Республика Татарстан — контракт 45 млн ₽ по 223-ФЗ", "description": "Подключение к ГИИС ЭБ, открытие лицевого счёта за 2 рабочих дня"},
        {"@type": "ListItem", "position": 3, "name": "Поставка оборудования, Москва — контракт 90 млн ₽ по 44-ФЗ, цепочка из 3 субподрядчиков", "description": "Открыты счета на каждом уровне, расчёты без просрочек"},
        {"@type": "ListItem", "position": 4, "name": "Производственная компания, Краснодарский край — контракт 220 млн ₽ по 44-ФЗ, раздельный учёт", "description": "Проверка пройдена без штрафа, учёт на аутсорсе"},
        {"@type": "ListItem", "position": 5, "name": "Клининговая компания, Санкт-Петербург — контракт 12 млн ₽ по 44-ФЗ с авансом 60%", "description": "Срок санкционирования снижен с 5 до 1-2 дней"}
      ]
    }
    </script>

    <!-- Schema.org: Review collection (7 отзывов, привязаны к Organization) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Review",
          "itemReviewed": {"@id": "https://kaznaexpert.ru/#organization"},
          "author": {"@type": "Person", "name": "А. Громов"},
          "datePublished": "2026-03-15",
          "reviewRating": {"@type": "Rating", "ratingValue": "5", "bestRating": "5"},
          "reviewBody": "Контракт подписали, а про казначейский счёт узнали уже постфактум — сроки горели. Обратились сюда, потому что обещали два дня. По факту так и вышло: документы собрали, счёт открыли, заказчику отчитались вовремя. Что важно — не пришлось самим вникать в КВР и КОСГУ, всё сделали за нас.",
          "name": "Открытие казначейского счёта — строительная компания, СПб"
        },
        {
          "@type": "Review",
          "itemReviewed": {"@id": "https://kaznaexpert.ru/#organization"},
          "author": {"@type": "Person", "name": "М. Сафина"},
          "datePublished": "2026-02-20",
          "reviewRating": {"@type": "Rating", "ratingValue": "5", "bestRating": "5"},
          "reviewBody": "Первый наш контракт с сопровождением. Боялись, что увязнем в ГИИС и согласованиях. Объяснили по шагам, подключили систему, дальше платежи идут штатно. Отвечают по делу, без лишней воды.",
          "name": "Сопровождение под ключ по 223-ФЗ — IT-интегратор, Казань"
        },
        {
          "@type": "Review",
          "itemReviewed": {"@id": "https://kaznaexpert.ru/#organization"},
          "author": {"@type": "Person", "name": "Д. Ковальчук"},
          "datePublished": "2026-01-28",
          "reviewRating": {"@type": "Rating", "ratingValue": "4", "bestRating": "5"},
          "reviewBody": "У нас было три субподрядчика, и всё встало из-за счетов. Тут разрулили цепочку целиком — открыли счета на всех уровнях, объяснили порядок платежей. Единственное: в первый день ответ был не сразу, видимо была загрузка. Дальше связь держали плотно, вопросов нет.",
          "name": "Сопровождение цепочки субподрядчиков — поставка оборудования, Москва"
        },
        {
          "@type": "Review",
          "itemReviewed": {"@id": "https://kaznaexpert.ru/#organization"},
          "author": {"@type": "Person", "name": "Е. Лазарева"},
          "datePublished": "2025-12-10",
          "reviewRating": {"@type": "Rating", "ratingValue": "5", "bestRating": "5"},
          "reviewBody": "Перед проверкой выяснилось, что раздельный учёт фактически не вёлся. Помогли восстановить за сжатый срок, проверку прошли без штрафа. Теперь ведут учёт на аутсорсе — спокойнее.",
          "name": "Раздельный учёт — производственная компания, Краснодар"
        },
        {
          "@type": "Review",
          "itemReviewed": {"@id": "https://kaznaexpert.ru/#organization"},
          "author": {"@type": "Person", "name": "Р. Исаев"},
          "datePublished": "2025-11-22",
          "reviewRating": {"@type": "Rating", "ratingValue": "5", "bestRating": "5"},
          "reviewBody": "Главная боль была — санкционирование тянулось почти неделю, из-за этого задержки по зарплате. После того как взяли сопровождение, платежи стали проходить за день-два. Для нас это критично.",
          "name": "Сопровождение по 44-ФЗ — клининговая компания, СПб"
        },
        {
          "@type": "Review",
          "itemReviewed": {"@id": "https://kaznaexpert.ru/#organization"},
          "author": {"@type": "Person", "name": "О. Нестерова"},
          "datePublished": "2025-10-15",
          "reviewRating": {"@type": "Rating", "ratingValue": "5", "bestRating": "5"},
          "reviewBody": "Сами пытались настроить ЭЦП и систему — потеряли несколько дней и плюнули. Здесь подключились удалённо, поставили всё за один заход. Сэкономили нам неделю возни.",
          "name": "Подключение к ГИИС «Электронный бюджет» — инжиниринговая компания, Екатеринбург"
        },
        {
          "@type": "Review",
          "itemReviewed": {"@id": "https://kaznaexpert.ru/#organization"},
          "author": {"@type": "Person", "name": "С. Третьяков"},
          "datePublished": "2025-09-08",
          "reviewRating": {"@type": "Rating", "ratingValue": "5", "bestRating": "5"},
          "reviewBody": "Работаем не первый месяц. Ценю, что заранее предупреждают о рисках по документам — пару раз так избежали возврата платежа. Цена не самая низкая на рынке, но за скорость и отсутствие головной боли это оправдано.",
          "name": "Сопровождение под ключ контракта >100 млн ₽ — дорожно-строительная компания, Нижний Новгород"
        }
      ]
    }
    </script>

    <!-- ============================================================ -->
    <!-- АНАЛИТИКА — только Яндекс.Метрика (РФ).                        -->
    <!-- Google Analytics удалён полностью: исключаем трансграничную    -->
    <!-- передачу ПДн (152-ФЗ). Метрика инициализируется ТОЛЬКО после   -->
    <!-- согласия на cookie — см. /js/cookie-consent.js.               -->
    <!-- ============================================================ -->

  </head>

  <body>
    <div class="wrapper">

      <!-- ============================================================ -->
      <!-- 01+02 HEADER + HERO + COUNTERS · Quiet Luxury v2            -->
      <!-- ============================================================ -->
      <div class="v2">

        <!-- ============================================================ -->
        <!-- HEADER — только герб, без отдельного текста бренда            -->
        <!-- ============================================================ -->
        <header class="v2-header">
          <div class="v2-container v2-header-inner">

            <a class="v2-brand" href="/" aria-label="КазнаЭксперт — на главную">
              <span class="v2-brand-mark">
                <img src="/img/logogold.webp" alt="КазнаЭксперт" loading="eager" width="60" height="44">
              </span>
            </a>

            <nav class="v2-nav" aria-label="Главная навигация">
              <a href="#tariffs">Тарифы</a>
              <a href="#process">Как работаем</a>
              <a href="#cases">Кейсы</a>
              <a href="#aboutus">Эксперт</a>
              <a href="#faq">FAQ</a>
              <a href="#contacts">Связаться</a>
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
            <a href="#tariffs">Тарифы</a>
            <a href="#process">Как работаем</a>
            <a href="#cases">Кейсы</a>
            <a href="#aboutus">Эксперт</a>
            <a href="#faq">FAQ</a>
            <a class="v2-mobile-cta" href="#contacts">Получить расчёт</a>
          </nav>

          <!-- линия-прогресс скролла под шапкой (поверх hairline-«мостика» для будущего суб-меню) -->
          <div class="v2-scroll-progress" id="scrollProgress" aria-hidden="true"></div>
        </header>

        <!-- ============================================================ -->
        <!-- HERO v2 — компактный, конверсионный                           -->
        <!-- ============================================================ -->
        <section class="v2-hero">
          <div class="v2-container">

            <div class="v2-hero-grid">

              <!-- LEFT: pitch + цифры -->
              <div class="v2-hero-main">

                <div class="v2-hero-eyebrow-row v2-reveal">
                  <span class="v2-eyebrow">44-ФЗ · 223-ФЗ · ГОЗ · Нацпроекты</span>
                  <span class="v2-hero-eyebrow-dash" aria-hidden="true"></span>
                </div>

                <h1 class="v2-reveal">
                  Откроем казначейский счёт
                  <br>
                  <em>за два рабочих дня</em>
                </h1>

                <p class="v2-hero-lede v2-reveal">
                  <strong>Полное казначейское сопровождение под ключ.</strong>
                  Берём всю работу с УФК на себя — от резерва счёта на тендер до закрытия контракта.
                  Без возвратов и срыва сроков.
                </p>

                <div class="v2-hero-trust v2-reveal">
                  <div class="v2-trust-item">
                    <div class="v2-trust-num">15<span class="v2-trust-suffix">+ лет</span></div>
                    <div class="v2-trust-label">в Казначействе</div>
                  </div>
                  <div class="v2-trust-item">
                    <div class="v2-trust-num">7 000<span class="v2-trust-suffix">+</span></div>
                    <div class="v2-trust-label">контрактов</div>
                  </div>
                  <div class="v2-trust-item">
                    <div class="v2-trust-num">90<span class="v2-trust-suffix">&nbsp;млрд&nbsp;₽</span></div>
                    <div class="v2-trust-label">проведено</div>
                  </div>
                  <div class="v2-trust-item">
                    <div class="v2-trust-num">2<span class="v2-trust-suffix">&nbsp;рабочих&nbsp;дня</span></div>
                    <div class="v2-trust-label">до открытия счёта</div>
                  </div>
                </div>

              </div>

              <!-- RIGHT: action card -->
              <aside class="v2-hero-action v2-reveal">

                <div class="v2-hero-action-eyebrow">Связаться с экспертом</div>
                <h2>Перезвоним за 15 минут</h2>
                <p class="v2-hero-action-sub">
                  Оставьте номер — обсудим ваш контракт и стоимость.
                  NDA подписываем до анализа документов.
                </p>

                <form id="hero-form" method="post" action="#contacts">
                  <div class="v2-form-field">
                    <input
                      type="tel"
                      id="hero-tel"
                      name="phone"
                      data-tel-input
                      placeholder="+7 (___) ___-__-__"
                      autocomplete="tel"
                      required
                      pattern=".*\d{3}.*\d{3}.*\d{2}.*\d{2,}"
                    >
                  </div>

                  <label class="v2-form-consent">
                    <input type="checkbox" id="hero-consent" required>
                    <span>
                      Согласен на обработку персональных данных в соответствии с
                      <a href="/privacy/" target="_blank" rel="noopener">политикой конфиденциальности</a>
                    </span>
                  </label>

                  <button type="submit" class="v2-form-submit">
                    Получить расчёт
                  </button>
                </form>

                <ul class="v2-hero-action-points">
                  <li>Бесплатный анализ контракта перед стартом</li>
                  <li>Стоимость фиксируем в договоре</li>
                  <li>Сопровождаем дистанционно — по всей России</li>
                </ul>

                <div class="v2-hero-alt">
                  Или напишите — ответим за 5 минут
                  <div class="v2-hero-alt-links">
                    <a href="https://t.me/Kaznaexpert" target="_blank" rel="noopener">Telegram</a>
                    <a href="https://max.ru/u/f9LHodD0cOK_dA0cxMm6m3-UJ1xRsy79eO5fE11eYanlBeYUtgEpWuyk5m8" target="_blank" rel="noopener">MAX</a>
                  </div>
                </div>

              </aside>

            </div>

          </div>
        </section>

        <!-- ============================================================ -->
        <!-- ВСТУПИТЕЛЬНОЕ СЛОВО — личное обращение эксперта -->
        <!-- ============================================================ -->
        <section class="v2-foreword" id="foreword" aria-labelledby="foreword-name">
          <div class="v2-container">
            <div class="v2-foreword-inner v2-reveal">
              <span class="v2-foreword-mark" aria-hidden="true">“</span>
              <span class="v2-foreword-eyebrow">Вступительное слово</span>
              <blockquote class="v2-foreword-quote">
                Здравствуйте! Я лично разбираю каждый контракт и беру всю работу с Казначейством на себя —
                от резерва счёта на тендер до закрытия. За 15 лет внутри УФК я знаю причины отказов
                и санкционирование платежей изнутри. Вы получаете не подрядчика, а эксперта,
                который доводит дело без сюрпризов и срыва сроков.
              </blockquote>
              <div class="v2-foreword-sign">
                <span class="v2-foreword-name" id="foreword-name">Михайлов Ярослав</span>
                <span class="v2-foreword-role">Эксперт · 15 лет в Казначействе</span>
              </div>
            </div>
          </div>
        </section>

        <!-- ============================================================ -->
        <!-- TRUST BAR — сигналы доверия (ui-ux-pro-max: Trust & Authority) -->
        <!-- ============================================================ -->
        <section class="v2-trust-bar" aria-label="Надёжность и проверка компании">
          <div class="v2-container">
            <div class="v2-trust-bar-inner v2-reveal">
              <div class="v2-trust-bar-id">
                <span class="v2-trust-bar-eyebrow">Открытая компания · работаем с 2009</span>
                ИП Михайлов Ярослав Алексеевич · ИНН 781428314589 · ОГРНИП 321784700367672
              </div>
              <div class="v2-trust-bar-check">
                <span>Проверьте нас:</span>
                <a href="https://www.rusprofile.ru/ip/321784700367672" target="_blank" rel="noopener nofollow">Rusprofile</a>
                <a href="https://zachestnyibiznes.ru/company/ip/321784700367672_781428314589" target="_blank" rel="noopener nofollow">За честный бизнес</a>
                <a href="https://www.audit-it.ru/contragent/fl/781428314589_mikhailov-iaroslav-alekseevich" target="_blank" rel="noopener nofollow">Audit-it</a>
              </div>
            </div>
          </div>
        </section>

        <!-- ============================================================ -->
        <!-- 06. TARIFFS — 4 пакета по этапу контракта                     -->
        <!-- ============================================================ -->
        <section class="v2-section v2-screen" id="tariffs">
          <div class="v2-container">

            <div class="v2-section-head">
              <div class="v2-section-eyebrow">Тарифы</div>
              <h2 class="v2-section-title">Тариф <em>под этап</em> вашего контракта</h2>
              <p class="v2-section-lede">Платите только за нужный этап. Конкретный объём работ и фиксированная стоимость прописаны в договоре.</p>
            </div>

<style>.v2 .v2-tariff-more{display:inline-block;margin-top:10px;font-size:13px;color:var(--accent,#8B6F47);font-weight:500;letter-spacing:.01em}.v2 .v2-tariff-more:hover{text-decoration:underline}</style>
            <div class="v2-tariffs-grid">

              <article class="v2-tariff">
                <div class="v2-tariff-no">01</div>
                <div class="v2-tariff-stage">Тендер</div>
                <h3>Резерв счёта к дате тендера</h3>
                <p class="v2-tariff-desc">Резервируем казначейский счёт заранее — реквизиты готовы к моменту победы. Если контракт не достанется, закрываем счёт без расходов.</p>
                <div class="v2-tariff-price">
                  <div class="v2-tariff-price-num">25 000<span class="v2-tariff-price-unit">&nbsp;₽</span></div>
                  <div class="v2-tariff-price-note">Разово · к дате тендера</div>
                  <a href="#contacts" class="v2-tariff-link" data-tariff="rezerv">Обсудить контракт <span aria-hidden="true">→</span></a>
                  <a href="/uslugi/rezervirovanie-scheta/" class="v2-tariff-more">Подробнее об услуге →</a>
                </div>
              </article>

              <article class="v2-tariff">
                <div class="v2-tariff-no">02</div>
                <div class="v2-tariff-stage">Победа</div>
                <h3>Открытие счёта за два дня</h3>
                <p class="v2-tariff-desc">Готовим пакет документов, проводим включение в сводный реестр получателей средств и открываем счёт в УФК с первой подачи.</p>
                <div class="v2-tariff-price">
                  <div class="v2-tariff-price-num">39 000<span class="v2-tariff-price-unit">&nbsp;₽</span></div>
                  <div class="v2-tariff-price-note">Разово · 2 рабочих дня</div>
                  <a href="#contacts" class="v2-tariff-link" data-tariff="otkrytie">Обсудить контракт <span aria-hidden="true">→</span></a>
                  <a href="/uslugi/otkrytie-scheta/" class="v2-tariff-more">Подробнее об услуге →</a>
                </div>
              </article>

              <article class="v2-tariff">
                <div class="v2-tariff-no">03</div>
                <div class="v2-tariff-stage">Постоплата</div>
                <h3>Контракт с постоплатой</h3>
                <p class="v2-tariff-desc">Полный цикл: открытие счёта, утверждение сведений, проведение платежей по актам и УПД — до закрытия контракта.</p>
                <div class="v2-tariff-price">
                  <div class="v2-tariff-price-num">59 000<span class="v2-tariff-price-unit">&nbsp;₽</span></div>
                  <div class="v2-tariff-price-note">Разово · до закрытия контракта</div>
                  <a href="#contacts" class="v2-tariff-link" data-tariff="postoplata">Обсудить контракт <span aria-hidden="true">→</span></a>
                  <a href="/uslugi/soprovozhdenie-postoplata/" class="v2-tariff-more">Подробнее об услуге →</a>
                </div>
              </article>

              <article class="v2-tariff is-featured">
                <div class="v2-tariff-no">04</div>
                <div class="v2-tariff-stage">
                  Аванс
                  <span class="v2-tariff-badge">Чаще выбирают</span>
                </div>
                <h3>Контракт с авансом — под ключ</h3>
                <p class="v2-tariff-desc">Сопровождаем контракт от поступления аванса до исполнения обязательств. Без лимитов на операции и обращения.</p>
                <div class="v2-tariff-price">
                  <div class="v2-tariff-price-num">79 000<span class="v2-tariff-price-unit">&nbsp;₽/мес</span></div>
                  <div class="v2-tariff-price-note">Без лимитов на операции</div>
                  <a href="#contacts" class="v2-tariff-link" data-tariff="avans">Обсудить контракт <span aria-hidden="true">→</span></a>
                  <a href="/uslugi/soprovozhdenie-avans/" class="v2-tariff-more">Подробнее об услуге →</a>
                </div>
              </article>

            </div>

            <p class="v2-tariffs-footnote">Точная стоимость — после бесплатного анализа вашего контракта.</p>

          </div>
        </section>


        <!-- ============================================================ -->
        <!-- 06.5 RESCUE — Особый случай: подрядчик по КС подвёл           -->
        <!-- ============================================================ -->
        <section class="v2-section v2-screen v2-rescue" id="rescue" aria-labelledby="rescue-title">
          <div class="v2-container">

            <div class="v2-rescue-grid">

              <div class="v2-rescue-text">
                <div class="v2-rescue-eyebrow">Особый случай</div>
                <h2 class="v2-rescue-title" id="rescue-title">Подрядчик по казначейскому <br class="v2-rescue-br">сопровождению <em>подвёл?</em></h2>
                <p class="v2-rescue-lede">Уже работаете с другим консультантом по казначейскому сопровождению, но казначейство возвращает платежи, документы в беспорядке, приближается проверка? Берёмся за исправление чужих ошибок и доводим контракт до закрытия.</p>

                <ul class="v2-rescue-scenarios">
                  <li><span><strong>УФК возвращает платежи.</strong> Пересобираем сведения по КВР и КОСГУ, согласовываем с ТОФК.</span></li>
                  <li><span><strong>Раздельный учёт не вёлся.</strong> Восстанавливаем за сжатый срок перед проверкой.</span></li>
                  <li><span><strong>Не подключены к ГИИС «ЭБ» вовремя.</strong> Настраиваем удалённо за 1–2 рабочих дня.</span></li>
                  <li><span><strong>Цепочка субподрядчиков встала.</strong> Открываем счета на всех уровнях, выстраиваем порядок платежей.</span></li>
                  <li><span><strong>Просрочена отчётность.</strong> Закрываем контракт без штрафов.</span></li>
                </ul>
              </div>

              <div class="v2-rescue-steps">

                <article class="v2-rescue-step">
                  <div class="v2-rescue-step-no">01</div>
                  <h3>Экспресс-аудит</h3>
                  <div class="v2-rescue-step-time">24–48 часов</div>
                  <p class="v2-rescue-step-desc">Разбираем документы и сопровождение предыдущего подрядчика. Даём отчёт о причинах сбоя и план исправления.</p>
                  <div class="v2-rescue-step-price">29 000<span class="v2-rescue-step-price-unit">&nbsp;₽ разово</span></div>
                </article>

                <article class="v2-rescue-step">
                  <div class="v2-rescue-step-no">02</div>
                  <h3>Исправление и доведение контракта</h3>
                  <div class="v2-rescue-step-time">по индивидуальной смете</div>
                  <p class="v2-rescue-step-desc">Восстанавливаем документы, переутверждаем сведения, пересобираем КВР/КОСГУ, восстанавливаем раздельный учёт и ведём контракт до закрытия.</p>
                  <div class="v2-rescue-step-price">от 99 000<span class="v2-rescue-step-price-unit">&nbsp;₽ по смете</span></div>
                </article>

                <div class="v2-rescue-cta">
                  <a href="#contacts-form" class="v2-rescue-cta-btn">Заказать экспресс-аудит <span aria-hidden="true">→</span></a>
                  <div class="v2-rescue-cta-tel">или позвоните <a href="tel:+79818331010">+7 981 833-10-10</a></div>
                  <a href="/uslugi/spasenie-kontrakta/" class="v2-tariff-more" style="margin-top:8px">Подробнее об услуге «Спасение контракта» →</a>
                </div>

              </div>

            </div>

          </div>
        </section>


        <!-- ============================================================ -->
        <!-- 07. COMPARISON — 6 параметров × 3 столбца                     -->
        <!-- ============================================================ -->
        <section class="v2-section v2-screen" id="compare">
          <div class="v2-container">

            <div class="v2-section-head">
              <div class="v2-section-eyebrow">Сравнение</div>
              <h2 class="v2-section-title">Самостоятельно, штатный спец или <em>с нами</em></h2>
              <p class="v2-section-lede">Шесть критериев, по которым клиенты выбирают подход к работе с УФК. Стоимость указана для тарифа «Контракт с авансом».</p>
            </div>

            <div class="v2-compare">

              <div class="v2-compare-head">
                <div class="v2-compare-head-cell">Параметр</div>
                <div class="v2-compare-head-cell">Самостоятельно</div>
                <div class="v2-compare-head-cell">Штатный спец</div>
                <div class="v2-compare-head-cell is-us">С КазнаЭксперт</div>
              </div>

              <div class="v2-compare-row">
                <div class="v2-compare-cell v2-compare-param" data-label="Параметр">Срок старта</div>
                <div class="v2-compare-cell" data-label="Самостоятельно">2–4 недели на освоение матчасти</div>
                <div class="v2-compare-cell" data-label="Штатный спец">1–2 месяца на подбор сотрудника</div>
                <div class="v2-compare-cell is-us" data-label="С КазнаЭксперт"><strong>2 рабочих дня</strong></div>
              </div>

              <div class="v2-compare-row">
                <div class="v2-compare-cell v2-compare-param" data-label="Параметр">Стоимость в месяц</div>
                <div class="v2-compare-cell" data-label="Самостоятельно">Ваше время + риск ошибок</div>
                <div class="v2-compare-cell" data-label="Штатный спец">120–180 тыс ₽ + страховые взносы</div>
                <div class="v2-compare-cell is-us" data-label="С КазнаЭксперт">25 000 ₽ разово или <strong>79 000 ₽/мес</strong></div>
              </div>

              <div class="v2-compare-row">
                <div class="v2-compare-cell v2-compare-param" data-label="Параметр">Опыт работы с УФК</div>
                <div class="v2-compare-cell" data-label="Самостоятельно">Осваиваете по ходу контракта</div>
                <div class="v2-compare-cell" data-label="Штатный спец">Один сотрудник, его уровень</div>
                <div class="v2-compare-cell is-us" data-label="С КазнаЭксперт"><strong>Команда 15+ лет</strong> в Казначействе</div>
              </div>

              <div class="v2-compare-row">
                <div class="v2-compare-cell v2-compare-param" data-label="Параметр">Кадровые риски</div>
                <div class="v2-compare-cell" data-label="Самостоятельно">Не применимо</div>
                <div class="v2-compare-cell" data-label="Штатный спец">Подбор, отпуск, увольнение, замена</div>
                <div class="v2-compare-cell is-us" data-label="С КазнаЭксперт">Закреплённый эксперт + резерв</div>
              </div>

              <div class="v2-compare-row">
                <div class="v2-compare-cell v2-compare-param" data-label="Параметр">Гарантия в договоре</div>
                <div class="v2-compare-cell" data-label="Самостоятельно">Нет</div>
                <div class="v2-compare-cell" data-label="Штатный спец">Нет</div>
                <div class="v2-compare-cell is-us" data-label="С КазнаЭксперт"><strong>Прописана в договоре</strong></div>
              </div>

              <div class="v2-compare-row">
                <div class="v2-compare-cell v2-compare-param" data-label="Параметр">Поддержка при отказе УФК</div>
                <div class="v2-compare-cell" data-label="Самостоятельно">Разбираетесь сами</div>
                <div class="v2-compare-cell" data-label="Штатный спец">По компетенциям сотрудника</div>
                <div class="v2-compare-cell is-us" data-label="С КазнаЭксперт"><strong>Берём на себя</strong> — до принятия</div>
              </div>

            </div>

            <div class="v2-compare-cta">
              <a href="#contacts">Обсудить ваш контракт <span aria-hidden="true">→</span></a>
            </div>

          </div>
        </section>


        <!-- ============================================================ -->
        <!-- 08. PROCESS — 4 шага по дням                                  -->
        <!-- ============================================================ -->
        <section class="v2-section v2-screen" id="process">
          <div class="v2-container">

            <div class="v2-section-head">
              <div class="v2-section-eyebrow">Процесс</div>
              <h2 class="v2-section-title">От договора до счёта — <em>три рабочих дня</em></h2>
              <p class="v2-section-lede">Каждый день — конкретное действие на нашей стороне. Прозрачно и без неожиданностей.</p>
            </div>

            <div class="v2-process-grid">

              <article class="v2-process-step">
                <div class="v2-process-no">01</div>
                <div class="v2-process-day">День 1</div>
                <h3>Старт работы</h3>
                <p class="v2-process-desc">Связываемся в течение 15 минут после заявки, подписываем договор и начинаем подготовку пакета документов для УФК.</p>
                <ul class="v2-process-checks">
                  <li>Договор подписан</li>
                  <li>Пакет документов собран</li>
                </ul>
              </article>

              <article class="v2-process-step">
                <div class="v2-process-no">02</div>
                <div class="v2-process-day">День 2</div>
                <h3>Сводный реестр</h3>
                <p class="v2-process-desc">Подаём запрос в УФК и включаем компанию в сводный реестр получателей средств — без этого казначейские операции невозможны.</p>
                <ul class="v2-process-checks">
                  <li>Запрос подан в УФК</li>
                  <li>Реестр подтверждён</li>
                </ul>
              </article>

              <article class="v2-process-step">
                <div class="v2-process-no">03</div>
                <div class="v2-process-day">День 3</div>
                <h3>Открытие счёта</h3>
                <p class="v2-process-desc">Казначейский счёт активирован, реквизиты переданы клиенту. Готовы к первому платежу от заказчика.</p>
                <ul class="v2-process-checks">
                  <li>Счёт активен</li>
                  <li>Реквизиты у клиента</li>
                </ul>
              </article>

              <article class="v2-process-step">
                <div class="v2-process-no">04</div>
                <div class="v2-process-day">Далее</div>
                <h3>Сопровождение</h3>
                <p class="v2-process-desc">Ведём контракт по выбранному сценарию — до закрытия и вывода средств на ваш расчётный счёт.</p>
                <ul class="v2-process-checks">
                  <li>Платежи по актам и УПД</li>
                  <li>Сдача отчётности</li>
                  <li>Вывод прибыли</li>
                </ul>
              </article>

            </div>

          </div>
        </section>


      <!-- ============================================================ -->
      <!-- 08 ЭКСПЕРТ                                                   -->
      <!-- ============================================================ -->
      <div class="v2">
        <section class="v2-section v2-screen" id="aboutus">
          <div class="v2-container">

            <div class="v2-section-head v2-reveal">
              <div class="v2-section-eyebrow">Эксперт</div>
              <h2 class="v2-section-title">Кто ведёт <em>ваш контракт</em></h2>
              <p class="v2-section-lede">За каждым контрактом — человек из системы Казначейства, а не колл-центр.</p>
            </div>

            <div class="v2-expert-split">
              <div class="v2-expert-portrait v2-expert-portrait--photo v2-reveal">
                <picture>
                  <source type="image/webp" srcset="/img/mihailov-480.webp 480w, /img/mihailov-768.webp 768w" sizes="(max-width:760px) 70vw, 360px">
                  <img src="/img/mihailov-768.jpg" width="768" height="960" loading="lazy" decoding="async"
                       alt="Ярослав Михайлов — главный эксперт КазнаЭксперт, казначейское сопровождение госконтрактов"
                       style="width:100%;height:auto;border-radius:16px;display:block">
                </picture>
              </div>
              <div class="v2-expert-card v2-reveal" itemscope itemtype="https://schema.org/Person">
                <div class="v2-expert-name" itemprop="name">Ярослав Михайлов</div>
                <div class="v2-expert-role" itemprop="jobTitle">Главный эксперт «КазнаЭксперт»</div>
                <p class="v2-expert-bio" itemprop="description">15+ лет в системе Федерального Казначейства. Знаю требования УФК изнутри: причины отказов, санкционирование платежей, раздельный учёт по 44-ФЗ, 223-ФЗ и ГОЗ.</p>
                <p class="v2-expert-bio">За проектами — 5 специалистов с опытом работы в органах Казначейства. Ведём несколько контрактов параллельно, отвечаем в тот же день и не зависим от одного человека.</p>
                <div class="v2-expert-stats">
                  <div class="v2-expert-stat"><b>7000+</b><span>контрактов сопровождено</span></div>
                  <div class="v2-expert-stat"><b>90 млрд ₽</b><span>прошло через счета</span></div>
                  <div class="v2-expert-stat"><b>15+ лет</b><span>внутри Казначейства</span></div>
                </div>
                <a href="#contacts" class="v2-expert-cta">Обсудить ваш контракт <span aria-hidden="true">→</span></a>
                <div class="v2-expert-meta">Обновлено: июнь 2026</div>
              </div>
            </div>

          </div>
        </section>
      </div>

      <!-- ============================================================ -->
      <!-- 09 ПРЕИМУЩЕСТВА                                              -->
      <!-- ============================================================ -->
      <div class="v2">
        <section class="v2-section v2-screen" id="advantages">
          <div class="v2-container">

            <div class="v2-section-head v2-reveal">
              <div class="v2-section-eyebrow">Почему мы</div>
              <h2 class="v2-section-title">Почему выбирают <em>КазнаЭксперт</em></h2>
              <p class="v2-section-lede">Шесть причин доверить нам работу с Казначейством.</p>
            </div>

            <div class="v2-adv-grid">
              <article class="v2-adv v2-reveal">
                <div class="v2-adv-num">2 дня</div>
                <h3>Открываем счёт</h3>
                <p>От готовности документов до открытого лицевого счёта в ТОФК.</p>
              </article>
              <article class="v2-adv v2-reveal">
                <div class="v2-adv-num">24 часа</div>
                <h3>От заявки до договора</h3>
                <p>Связь в Telegram, MAX или по телефону. Работаем в вашем ритме.</p>
              </article>
              <article class="v2-adv v2-reveal">
                <div class="v2-adv-num">0</div>
                <h3>Лишних действий от вас</h3>
                <p>Только документы. Формы, поручения и сведения заполняем сами.</p>
              </article>
              <article class="v2-adv v2-reveal">
                <div class="v2-adv-num">15+</div>
                <h3>Лет внутри ФК</h3>
                <p>Видим ошибку до того, как её увидит УФК. Знаем причины отказов.</p>
              </article>
              <article class="v2-adv v2-reveal">
                <div class="v2-adv-num">NDA</div>
                <h3>До анализа</h3>
                <p>Подписываем NDA до того, как смотрим ваши документы.</p>
              </article>
              <article class="v2-adv v2-reveal">
                <div class="v2-adv-num">Вся РФ</div>
                <h3>Удалённо</h3>
                <p>Работаем на вашем компьютере через TeamViewer или AnyDesk, в вашем часовом поясе.</p>
              </article>
            </div>

          </div>
        </section>
      </div>

      <!-- ============================================================ -->
      <!-- 10. КЕЙСЫ — 5 обезличенных, для социального доказательства   -->
      <!-- ============================================================ -->
      <div class="v2">
        <section class="v2-section v2-screen" id="cases">
          <div class="v2-container">

            <div class="v2-section-head v2-reveal">
              <div class="v2-section-eyebrow">Кейсы</div>
              <h2 class="v2-section-title">Пять историй <em>наших клиентов</em></h2>
              <p class="v2-section-lede">Обезличенные кейсы по NDA: тип компании, сумма контракта, проблема и результат.</p>
            </div>

            <div class="v2-carousel v2-reveal">

              <article class="v2-case">
                <div class="v2-case-top"><span class="v2-case-tag">44-ФЗ</span><span class="v2-case-meta">140 млн ₽ · Санкт-Петербург</span></div>
                <h3>Строительная компания: возврат платежа из УФК</h3>
                <dl>
                  <dt>Проблема</dt><dd>УФК вернуло платёж — сведения не соответствовали КВР/КОСГУ, оплата субподрядчику зависла на две недели.</dd>
                  <dt>Решение</dt><dd>Пересобрали сведения по кодам, согласовали с ТОФК, подготовили документы-основания.</dd>
                  <dt>Результат</dt><dd class="is-result">Платёж санкционирован за 3 рабочих дня, дальнейшие — без возвратов.</dd>
                </dl>
              </article>

              <article class="v2-case">
                <div class="v2-case-top"><span class="v2-case-tag">223-ФЗ</span><span class="v2-case-meta">45 млн ₽ · Татарстан</span></div>
                <h3>IT-интегратор: первый контракт с сопровождением</h3>
                <dl>
                  <dt>Проблема</dt><dd>Компания не подключена к ГИИС «Электронный бюджет», заказчик торопил со сроками.</dd>
                  <dt>Решение</dt><dd>Получили сертификат, подключили ГИИС «ЭБ», привязали ЭЦП, открыли счёт в ТОФК под ключ.</dd>
                  <dt>Результат</dt><dd class="is-result">Счёт открыт за 2 рабочих дня от готовности документов, аванс получен в срок.</dd>
                </dl>
              </article>

              <article class="v2-case">
                <div class="v2-case-top"><span class="v2-case-tag">44-ФЗ</span><span class="v2-case-meta">90 млн ₽ · Москва</span></div>
                <h3>Поставка оборудования: цепочка из 3 субподрядчиков</h3>
                <dl>
                  <dt>Проблема</dt><dd>Ни один субподрядчик не открыл лицевой счёт — платежи по контракту встали.</dd>
                  <dt>Решение</dt><dd>Открыли счета на каждом уровне цепочки, выстроили порядок санкционирования.</dd>
                  <dt>Результат</dt><dd class="is-result">Вся цепочка платежей проведена, расчёты с субподрядчиками без просрочек.</dd>
                </dl>
              </article>

              <article class="v2-case">
                <div class="v2-case-top"><span class="v2-case-tag">44-ФЗ</span><span class="v2-case-meta">220 млн ₽ · Краснодар</span></div>
                <h3>Производство: восстановили раздельный учёт</h3>
                <dl>
                  <dt>Проблема</dt><dd>Раздельный учёт не вёлся, приближалась проверка — риск штрафа 5–10% цены договора.</dd>
                  <dt>Решение</dt><dd>Настроили учёт в разрезе контракта, восстановили операции, подготовили документы.</dd>
                  <dt>Результат</dt><dd class="is-result">Проверка пройдена без штрафа, учёт ведётся на аутсорсе.</dd>
                </dl>
              </article>

              <article class="v2-case">
                <div class="v2-case-top"><span class="v2-case-tag">44-ФЗ</span><span class="v2-case-meta">12 млн ₽, аванс 60% · СПб</span></div>
                <h3>Клининговая компания: ускорили санкционирование</h3>
                <dl>
                  <dt>Проблема</dt><dd>Санкционирование затягивалось до 5 дней, кассовые разрывы по зарплате и закупкам.</dd>
                  <dt>Решение</dt><dd>Взяли сопровождение под ключ, привели документы к требованиям УФК, отладили подачу.</dd>
                  <dt>Результат</dt><dd class="is-result">Срок санкционирования снижен до 1–2 дней, разрывы устранены.</dd>
                </dl>
              </article>

            </div>

            <p class="v2-carousel-hint">← Листайте · названия компаний закрыты по NDA, документы предоставляем по запросу</p>

          </div>
        </section>
      </div>

      <!-- ============================================================ -->
      <!-- 11. ОТЗЫВЫ — 7 разноплановых, с лёгкой критикой в одном       -->
      <!-- ============================================================ -->
      <div class="v2">
        <section class="v2-section v2-screen" id="reviews">
          <div class="v2-container">

            <div class="v2-section-head v2-reveal">
              <div class="v2-section-eyebrow">Отзывы клиентов</div>
              <h2 class="v2-section-title">Что говорят <em>о нас</em></h2>
              <div class="v2-rating">
                <span class="v2-rating-num">4.9</span>
                <span class="v2-rating-stars">★★★★★</span>
                <span class="v2-rating-count">по 7 отзывам</span>
              </div>
            </div>

            <div class="v2-carousel v2-reveal">

              <article class="v2-review">
                <div class="v2-review-stars">★★★★★</div>
                <p class="v2-review-quote">Контракт подписали, а про казначейский счёт узнали постфактум — сроки горели. Обещали два дня — так и вышло: собрали документы, открыли счёт, отчитались вовремя. Не пришлось самим вникать в КВР и КОСГУ.</p>
                <div class="v2-review-author">
                  <strong>А. Громов</strong>
                  <span>Финансовый директор · Строительная компания · СПб</span>
                  <div class="v2-review-tag">Открытие казначейского счёта</div>
                </div>
              </article>

              <article class="v2-review">
                <div class="v2-review-stars">★★★★★</div>
                <p class="v2-review-quote">Первый контракт с сопровождением. Боялись увязнуть в ГИИС и согласованиях. Объяснили по шагам, подключили систему — дальше платежи идут штатно. Отвечают по делу, без воды.</p>
                <div class="v2-review-author">
                  <strong>М. Сафина</strong>
                  <span>Главный бухгалтер · IT-интегратор · Казань</span>
                  <div class="v2-review-tag">Сопровождение под ключ, 223-ФЗ</div>
                </div>
              </article>

              <article class="v2-review">
                <div class="v2-review-stars">★★★★<span class="dim">★</span></div>
                <p class="v2-review-quote">Было три субподрядчика, всё встало из-за счетов. Разрулили цепочку целиком — открыли счета на всех уровнях. Единственное: в первый день ответ был не сразу. Дальше связь держали плотно.</p>
                <div class="v2-review-author">
                  <strong>Д. Ковальчук</strong>
                  <span>Директор · Поставка оборудования · Москва</span>
                  <div class="v2-review-tag">Сопровождение цепочки субподрядчиков</div>
                </div>
              </article>

              <article class="v2-review">
                <div class="v2-review-stars">★★★★★</div>
                <p class="v2-review-quote">Перед проверкой выяснилось, что раздельный учёт не вёлся. Помогли восстановить за сжатый срок, проверку прошли без штрафа. Теперь ведут учёт на аутсорсе — спокойнее.</p>
                <div class="v2-review-author">
                  <strong>Е. Лазарева</strong>
                  <span>Руководитель тендерного отдела · Производство · Краснодар</span>
                  <div class="v2-review-tag">Раздельный учёт</div>
                </div>
              </article>

              <article class="v2-review">
                <div class="v2-review-stars">★★★★★</div>
                <p class="v2-review-quote">Главная боль — санкционирование тянулось почти неделю, отсюда задержки по зарплате. После сопровождения платежи проходят за день-два. Для нас это критично.</p>
                <div class="v2-review-author">
                  <strong>Р. Исаев</strong>
                  <span>Владелец · Клининговая компания · СПб</span>
                  <div class="v2-review-tag">Сопровождение, 44-ФЗ</div>
                </div>
              </article>

              <article class="v2-review">
                <div class="v2-review-stars">★★★★★</div>
                <p class="v2-review-quote">Сами пытались настроить ЭЦП и систему — потеряли несколько дней и плюнули. Здесь подключились удалённо, поставили всё за один заход. Сэкономили неделю возни.</p>
                <div class="v2-review-author">
                  <strong>О. Нестерова</strong>
                  <span>Главный бухгалтер · Инжиниринг · Екатеринбург</span>
                  <div class="v2-review-tag">Подключение к ГИИС «ЭБ»</div>
                </div>
              </article>

              <article class="v2-review">
                <div class="v2-review-stars">★★★★★</div>
                <p class="v2-review-quote">Работаем не первый месяц. Ценю, что заранее предупреждают о рисках по документам — пару раз избежали возврата платежа. Цена не самая низкая, но за скорость и отсутствие головной боли оправдано.</p>
                <div class="v2-review-author">
                  <strong>С. Третьяков</strong>
                  <span>Финансовый директор · Дорожно-строительная · Н. Новгород</span>
                  <div class="v2-review-tag">Под ключ, контракт &gt; 100 млн ₽</div>
                </div>
              </article>

            </div>

            <p class="v2-carousel-hint">← Листайте отзывы</p>

          </div>
        </section>
      </div>

      <!-- ============================================================ -->
      <!-- 13 FAQ — содержимое не меняется                              -->
      <!-- ============================================================ -->
      <div class="v2">
        <section class="v2-section v2-screen" id="faq">
          <div class="v2-container">

            <div class="v2-section-head v2-reveal">
              <div class="v2-section-eyebrow">FAQ</div>
              <h2 class="v2-section-title">Частые вопросы о <em>казначейском счёте</em></h2>
              <p class="v2-section-lede">Коротко о счёте, сопровождении, сроках и стоимости.</p>
            </div>

            <div class="v2-faq v2-reveal">

          <details itemscope itemtype="https://schema.org/Question">
                <summary itemprop="name">Что такое казначейский счёт?</summary>
                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <p itemprop="text">Казначейский счёт — это лицевой счёт, открытый в территориальном органе Федерального Казначейства (ТОФК) для расчётов по государственному контракту с казначейским сопровождением. На счёт поступают средства от заказчика, а расходование возможно только после санкционирования УФК. Цель — контроль целевого использования бюджетных средств по 44-ФЗ и 223-ФЗ.</p>
                </div>
              </details>

          <details itemscope itemtype="https://schema.org/Question">
                <summary itemprop="name">Что такое казначейское сопровождение?</summary>
                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <p itemprop="text">Казначейское сопровождение — режим финансового контроля по 44-ФЗ и 223-ФЗ, при котором расчёты по госконтракту проходят через лицевой счёт в УФК. Каждый платёж исполнителя проверяется Казначейством на соответствие условиям контракта и целевому назначению средств. Регулируется статьёй 242.23 Бюджетного кодекса РФ и Постановлением Правительства РФ № 1496 от 09.12.2017.</p>
                </div>
              </details>

          <details itemscope itemtype="https://schema.org/Question">
                <summary itemprop="name">Кто попадает под казначейское сопровождение в 2026 году?</summary>
                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <p itemprop="text">Под казначейское сопровождение по 44-ФЗ в 2026 году попадают: исполнители контрактов от 3 млн ₽ при авансе более 50%, исполнители контрактов от 100 млн ₽ независимо от размера аванса, получатели бюджетных субсидий, исполнители контрактов в рамках национальных проектов, исполнители гособоронзаказа (ГОЗ). Также сопровождение распространяется на субподрядчиков всех уровней по этим контрактам.</p>
                </div>
              </details>

          <details itemscope itemtype="https://schema.org/Question">
                <summary itemprop="name">Кто такой неучастник бюджетного процесса?</summary>
                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <p itemprop="text">Неучастник бюджетного процесса — это юридическое лицо, индивидуальный предприниматель или физическое лицо, которое не является получателем бюджетных средств, но участвует в исполнении госконтракта. Это коммерческие организации — поставщики, подрядчики, субподрядчики, у которых открывается лицевой счёт в ТОФК для расчётов по госконтракту. Большинство клиентов «КазнаЭксперт» — именно неучастники бюджетного процесса.</p>
                </div>
              </details>

          <details itemscope itemtype="https://schema.org/Question">
                <summary itemprop="name">Какой лимит казначейского сопровождения в 2026 году?</summary>
                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <p itemprop="text">Лимиты обязательного казначейского сопровождения по 44-ФЗ в 2026 году: от 3 млн ₽ при авансе более 50% от цены контракта, от 100 млн ₽ независимо от размера аванса. Для контрактов с бюджетной субсидией или средствами национальных проектов казначейское сопровождение применяется независимо от суммы. Для гособоронзаказа действуют отдельные правила по Федеральному закону № 275-ФЗ.</p>
                </div>
              </details>

          <details itemscope itemtype="https://schema.org/Question">
                <summary itemprop="name">Как открыть казначейский счёт?</summary>
                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <p itemprop="text">Чтобы открыть казначейский счёт самостоятельно, нужно: 1) Получить квалифицированную электронную подпись (КЭП). 2) Подключиться к ГИИС «Электронный бюджет» — 3–7 рабочих дней. 3) Подготовить пакет документов: устав, ЕГРЮЛ/ЕГРИП, контракт, доверенность. 4) Подать заявление и договор обслуживания в ТОФК. 5) Дождаться открытия — 2–5 рабочих дней. С «КазнаЭксперт» весь процесс — за 2 рабочих дня от готовности документов.</p>
                </div>
              </details>

          <details itemscope itemtype="https://schema.org/Question">
                <summary itemprop="name">Должен ли субподрядчик открывать казначейский счёт?</summary>
                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <p itemprop="text">Да, субподрядчик по контракту с казначейским сопровождением обязан открыть отдельный лицевой счёт в ТОФК для получения оплаты от подрядчика. Каждое звено цепочки исполнителей — подрядчик → субподрядчик → субсубподрядчик — ведёт расчёты через свой казначейский счёт. Платежи на каждом уровне проходят санкционирование Казначейства. Исключение — поставка строительных материалов и оборудования с прямой оплатой на расчётный счёт.</p>
                </div>
              </details>

          <details itemscope itemtype="https://schema.org/Question">
                <summary itemprop="name">Что такое ТОФК?</summary>
                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <p itemprop="text">ТОФК — Территориальный Орган Федерального Казначейства. Это региональное подразделение Казначейства России в субъекте Федерации: УФК по Санкт-Петербургу, УФК по г. Москве, УФК по Московской области и так далее. ТОФК открывает лицевые счета, санкционирует платежи, ведёт бюджетный учёт. Все операции по казначейскому сопровождению проходят через ТОФК по месту регистрации или фактического нахождения клиента.</p>
                </div>
              </details>

          <details itemscope itemtype="https://schema.org/Question">
                <summary itemprop="name">Что такое коды расходования средств (КВР и КОСГУ)?</summary>
                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <p itemprop="text">КВР (код вида расходов) и КОСГУ (классификация операций сектора государственного управления) — это коды бюджетной классификации, определяющие целевое назначение каждого платежа по госконтракту. По 44-ФЗ исполнитель распределяет всю сумму контракта по этим кодам в форме «Сведения об операциях с целевыми средствами». Без утверждения сведений в УФК ни один платёж не пройдёт санкционирование. Регулируется приказом Минфина России № 209н.</p>
                </div>
              </details>

          <details itemscope itemtype="https://schema.org/Question">
                <summary itemprop="name">Что такое ГИИС «Электронный бюджет»?</summary>
                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <p itemprop="text">ГИИС «Электронный бюджет» — государственная интегрированная информационная система управления общественными финансами, через которую проходит весь документооборот с Федеральным Казначейством по контрактам с казначейским сопровождением. Без подключения к ГИИС «ЭБ» работа невозможна. Подключение требует квалифицированной электронной подписи (КЭП) и установки корневых, промежуточных и личных сертификатов. Стандартный срок подключения — 3–7 рабочих дней.</p>
                </div>
              </details>

          <details itemscope itemtype="https://schema.org/Question">
                <summary itemprop="name">В чём разница между лицевым счётом и казначейским счётом?</summary>
                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <p itemprop="text">Казначейский счёт — это единый банковский счёт Федерального Казначейства РФ в Банке России, на котором учитываются средства всех клиентов УФК. Лицевой счёт — это аналитический счёт учёта операций конкретного клиента, открытый в ТОФК. При казначейском сопровождении исполнителю открывается лицевой счёт (обычно типа 41, 71 или 14), который ведётся на казначейском счёте УФК. На практике эти термины часто используются как синонимы.</p>
                </div>
              </details>

          <details itemscope itemtype="https://schema.org/Question">
                <summary itemprop="name">Что такое раздельный учёт по госконтракту?</summary>
                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <p itemprop="text">Раздельный учёт по госконтракту — это обязанность исполнителя по 44-ФЗ вести отдельный учёт результатов финансово-хозяйственной деятельности по каждому контракту с казначейским сопровождением. В учёте отражаются доходы, расходы, активы и обязательства в разрезе конкретного контракта. За нарушение — штраф 5–10% цены договора, но не более 500 тыс. ₽ для юрлиц, не более 250 тыс. ₽ для ИП, 10–50 тыс. ₽ для должностных лиц.</p>
                </div>
              </details>

          <details itemscope itemtype="https://schema.org/Question">
                <summary itemprop="name">Какие документы нужны для открытия казначейского счёта?</summary>
                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <p itemprop="text">Для открытия казначейского счёта в ТОФК понадобятся: устав организации, выписка из ЕГРЮЛ или ЕГРИП (свежая, не старше 30 дней), копия государственного контракта или дополнительного соглашения, документ о назначении руководителя, доверенность на представителя (если открывает не директор), квалифицированная электронная подпись руководителя, банковские реквизиты для возврата остатков. Точный список финализируется после анализа конкретного контракта.</p>
                </div>
              </details>

          <details itemscope itemtype="https://schema.org/Question">
                <summary itemprop="name">Сколько стоит казначейское сопровождение?</summary>
                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <p itemprop="text">Стоимость казначейского сопровождения зависит от объёма работ, типа контракта (44-ФЗ, 223-ФЗ, ГОЗ), количества субподрядчиков, региона и состояния документов клиента. Открытие казначейского счёта в ТОФК — от 39 000 ₽. Подключение к ГИИС «Электронный бюджет» — от 29 000 ₽. Полное сопровождение контракта «под ключ» — от 79 000 ₽. Точная смета после бесплатного предварительного анализа контракта.</p>
                </div>
              </details>

          <details itemscope itemtype="https://schema.org/Question">
                <summary itemprop="name">Что такое санкционирование платежей УФК?</summary>
                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <p itemprop="text">Санкционирование платежей — это процедура согласования каждого платежа по госконтракту с казначейским сопровождением в УФК. Перед перечислением средств исполнитель подаёт в Казначейство платёжное поручение и пакет подтверждающих документов: счёт, акт, договор с субподрядчиком. УФК проверяет соответствие условиям контракта, кодам КВР и КОСГУ и утверждённым сведениям об операциях. Стандартный срок санкционирования — 1–5 рабочих дней.</p>
                </div>
              </details>

            </div>
          </div>
        </section>
      </div>

      <!-- ============================================================ -->
      <!-- 14 ФОРМА + КОНТАКТЫ                                          -->
      <!-- ============================================================ -->
      <div class="v2">
        <section class="v2-section v2-screen" id="contacts">
          <div class="v2-container">

            <div class="v2-section-head v2-reveal">
              <div class="v2-section-eyebrow">Заявка</div>
              <h2 class="v2-section-title">Получите расчёт <em>за 2 минуты</em></h2>
              <p class="v2-section-lede">Оставьте контакты — обсудим ваш контракт и стоимость. Ответим в течение рабочего дня.</p>
            </div>

            <div class="v2-contacts-split v2-reveal">
              <div class="v2-contacts-form">
              <form class="contacts-form" id="contacts-form" action="#">
                <div class="v2-field">
                  <label for="name">Имя</label>
                  <input type="text" id="name" name="name" autocomplete="name" placeholder="Как к вам обращаться">
                </div>
                <div class="v2-field">
                  <label for="tel">Телефон <span class="req">*</span></label>
                  <input type="tel" id="tel" data-tel-input class="_required" placeholder="+7 (___) ___-__-__" pattern=".*.*.*.*\d{3}.*.*\d{3}.*\d{2}.*\d{2,}" title="Введите номер до конца" maxlength="18" required>
                </div>
                <p class="form-assurance">Перезвоним в течение рабочего дня. NDA по запросу.</p>
                <label class="checkbox">Я даю со­гла­сие на об­ра­бот­ку пер­со­наль­ных дан­ных в со­от­вет­ст­вии с <a href="/privacy/" target="_blank">по­ли­ти­кой кон­фи­ден­ци­аль­нос­ти</a>
                  <input type="checkbox" class="_required" required>
                  <span class="checkmark"></span>
                </label>
                <input type="submit" id="submit" class="btn btn-gold" value="Получить расчёт" disabled>
              </form>
              </div>

              <div class="v2-contacts-panel">
                <div class="v2-contacts-row">
                  <div class="v2-contacts-label">Адрес</div>
                  <div class="v2-contacts-val">199106, Санкт-Петербург,<br>Средний пр. В.О., 88, литера А, оф. 330</div>
                </div>
                <div class="v2-contacts-row">
                  <div class="v2-contacts-label">E-mail</div>
                  <div class="v2-contacts-val"><a href="mailto:kaznaexpert@gmail.com">kaznaexpert@gmail.com</a></div>
                </div>
                <div class="v2-contacts-row">
                  <div class="v2-contacts-label">Телефон</div>
                  <div class="v2-contacts-val"><a href="tel:+79818331010">+7 981 833-10-10</a></div>
                </div>
                <div class="v2-contacts-row">
                  <div class="v2-contacts-label">Мессенджеры</div>
                  <div class="v2-contacts-msgr">
                    <a href="https://t.me/Kaznaexpert" target="_blank" rel="noopener">Telegram</a>
                    <a href="https://max.ru/u/f9LHodD0cOK_dA0cxMm6m3-UJ1xRsy79eO5fE11eYanlBeYUtgEpWuyk5m8" target="_blank" rel="noopener">MAX</a>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </section>
      </div>
      </div><!-- /.v2 (единый wrapper всей страницы — sticky-хедер живёт здесь) -->

      <!-- Плавающие кнопки связи — кастом под бренд (звонок · Telegram · MAX) -->
      <div class="messenger-float" role="complementary" aria-label="Связаться">
        <a href="https://t.me/Kaznaexpert" target="_blank" rel="noopener noreferrer" class="messenger-btn messenger-btn--tg" aria-label="Написать в Telegram">
          <span class="messenger-btn-label">Telegram</span>
          <span class="messenger-btn-ico">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" width="24" height="24">
              <path d="M9.78 18.65l.28-4.23 7.68-6.92c.34-.31-.07-.46-.52-.19L7.74 13.3 3.64 12c-.88-.25-.89-.86.2-1.3l15.97-6.16c.73-.27 1.43.18 1.15 1.3l-2.72 12.81c-.19.91-.74 1.13-1.5.71L12.6 16.3l-2 1.93c-.23.22-.42.42-.82.42z" fill="currentColor"/>
            </svg>
          </span>
        </a>
        <a href="https://max.ru/u/f9LHodD0cOK_dA0cxMm6m3-UJ1xRsy79eO5fE11eYanlBeYUtgEpWuyk5m8" target="_blank" rel="noopener noreferrer" class="messenger-btn messenger-btn--max" aria-label="Написать в MAX">
          <span class="messenger-btn-label">MAX</span>
          <span class="messenger-btn-ico messenger-btn-text">MAX</span>
        </a>
        <a href="tel:+79818331010" class="messenger-btn messenger-btn--call" aria-label="Позвонить +7 981 833-10-10">
          <span class="messenger-btn-label">Позвонить</span>
          <span class="messenger-btn-ico">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" width="23" height="23">
              <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" fill="currentColor"/>
            </svg>
          </span>
        </a>
      </div>

<!-- ПОДПИСКА «Календарь дедлайнов КС 2026» (DashaMail) — главная -->
<section class="kz-sub" aria-labelledby="kzSubTitle" data-source="home">
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
      <span class="kz-sub__eyebrow">Бесплатно · PDF</span>
      <h2 class="kz-sub__title" id="kzSubTitle">Календарь дедлайнов по казначейскому сопровождению 2026</h2>
      <ul class="kz-sub__list">
        <li>Дедлайн принятия бюджетных обязательств и график операций конца года</li>
        <li>Сроки авансирования по 44-ФЗ и вступления изменений 2026</li>
        <li>Штрафы КоАП с 01.01.2026 и сроки утверждения сведений об операциях</li>
        <li>Раз в месяц — короткий разбор изменений в законодательстве по КС</li>
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
      if(form.company_extra.value) return; // honeypot
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
              <a href="#contacts" class="v2-footer-cta-btn">Оставить заявку</a>
              <a href="tel:+79818331010" class="v2-footer-cta-phone">+7 981 833-10-10</a>
            </div>
          </div>

          <div class="v2-footer-top">

            <div class="v2-footer-brand">
              <a href="#hero" class="v2-footer-logo" aria-label="КазнаЭксперт — на главную">
                <img src="img/logogold.webp" alt="КазнаЭксперт" width="180" height="54" loading="lazy">
              </a>
              <p class="v2-footer-tagline">Полное казначейское сопровождение под ключ. Работа с УФК по всей России с 2009 года.</p>
            </div>

            <nav class="v2-footer-col" aria-label="Связаться">
              <h3 class="v2-footer-h">Связаться</h3>
              <a href="tel:+79818331010">+7 981 833-10-10</a>
              <a href="mailto:kaznaexpert@gmail.com">kaznaexpert@gmail.com</a>
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

    <!-- ============================================================ -->
    <!-- COOKIE CONSENT (152-ФЗ) — баннер + модалка настроек            -->
    <!-- ============================================================ -->
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

    <script src="js/main.js?v=<?= @filemtime(__DIR__ . '/js/main.js') ?>"></script>
    <script src="js/cookie-consent.js?v=<?= @filemtime(__DIR__ . '/js/cookie-consent.js') ?>"></script>
    <script src="js/reveal.js?v=<?= @filemtime(__DIR__ . '/js/reveal.js') ?>"></script>
    <script>
      /* CTA-2 prefills "Получил отказ УФК" in task select */
      document.querySelectorAll('.cta--refused').forEach(function(el) {
        el.addEventListener('click', function() {
          var sel = document.getElementById('task');
          if (sel) sel.value = 'refused';
        });
      });
    </script>
  </body>

  <div class="svgs">
  <svg>
    <symbol id="phone" viewBox="0 0 568.02 500">
      <g transform="translate(-596.99 -155)">
        <g stroke="#1C1E26" stroke-linecap="round">
        <g fill="none">
          <path d="m779.78 260h200.22" stroke-opacity=".98431" stroke-width="50"/>
          <circle cx="878.71" cy="437.32" r="100" stroke-linejoin="round" stroke-width="25" style="paint-order:stroke fill markers"/>
          <ellipse cx="879.36" cy="436.81" rx="60.632" ry="61.532" stroke-linejoin="round" stroke-width="25" style="paint-order:stroke fill markers"/>
          <g>
          <g stroke-width="50">
            <path d="m700 580c0 16.668 0 33.334 6.6673 41.667 6.6673 8.3328 20 8.3328 73.335 8.3328h200c53.333 0 66.667 0 73.333-8.333 6.6661-8.333 6.6661-24.999 6.6661-41.667"/>
            <path d="m780 260c-16.667 40-33.334 80-45 110s-18.333 50-23.333 70c-5 20-8.3333 40-9.9999 63.334-1.6666 23.334-1.6666 50-1.6666 76.665"/>
            <path d="m980 260c16.667 40 33.334 80 45 110 11.667 30 18.333 50 23.333 70s8.3333 40 9.9999 63.334 1.6666 50 1.6666 76.665"/>
            <path d="m742 340c-7.9998 5.3332-16 10.667-25.333 13.333-9.3331 2.6667-20 2.6667-32 2.6667s-25.333 0-34.666-1.3331-14.666-3.9997-18.667-7.9995-6.6669-9.333-8.0005-16-1.3336-14.667-1.3336-21.333v-20c0-8.0002 0-18.666 6.6668-33.334 6.6667-14.667 20-33.333 38.667-46.667 18.667-13.334 42.666-21.333 77.334-25.333s80-4 125.33-4"/>
            <path d="m1020 340c7.9998 5.3332 16 10.667 25.333 13.333 9.3331 2.6667 20 2.6667 32 2.6667 12 0 25.333 0 34.667-1.3331 9.3332-1.3331 14.666-3.9997 18.667-7.9995 4.0003-3.9998 6.6669-9.333 8.0005-16 1.3336-6.6669 1.3336-14.667 1.3336-21.333v-20c0-8.0002 0-18.666-6.6667-33.334-6.6668-14.667-20-33.333-38.667-46.667-18.667-13.334-42.666-21.333-79.334-25.333-36.668-4-86-4-135.33-4"/>
          </g>
          <path d="m630 296.84c17.194 0 34.386 0 50.352-1.2282 15.965-1.2281 30.701-3.6842 45.438-9.8247 14.737-6.1405 29.473-15.965 44.21-25.789" stroke-width="25"/>
          <path d="m1130 300c-18.072 0-36.138 0-52.543-1.3334-16.405-1.3334-31.142-4-47.107-10.667s-33.158-17.333-50.35-28" stroke-width="25"/>
          </g>
        </g>
        <rect transform="matrix(.69117 -.7227 .76954 .6386 0 0)" x="215.93" y="999.43" width="16.862" height="38.25" fill="#1C1E26" stroke-linejoin="round" stroke-width="10.582" style="paint-order:stroke fill markers"/>
        </g>
      </g>
    </symbol>
  </svg>

  <svg width="16" height="16" fill="currentColor">
    <symbol id="mail" viewBox="0 0 16 16">
      <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
    </symbol>
  </svg>

  <svg width="256px" height="256px">
    <symbol id="telegram" viewBox="0 0 256 256">
      <g>
          <path d="M128,0 C57.307,0 0,57.307 0,128 L0,128 C0,198.693 57.307,256 128,256 L128,256 C198.693,256 256,198.693 256,128 L256,128 C256,57.307 198.693,0 128,0 L128,0 Z" fill="#40B3E0"></path>
          <path d="M190.2826,73.6308 L167.4206,188.8978 C167.4206,188.8978 164.2236,196.8918 155.4306,193.0548 L102.6726,152.6068 L83.4886,143.3348 L51.1946,132.4628 C51.1946,132.4628 46.2386,130.7048 45.7586,126.8678 C45.2796,123.0308 51.3546,120.9528 51.3546,120.9528 L179.7306,70.5928 C179.7306,70.5928 190.2826,65.9568 190.2826,73.6308" fill="#FFFFFF"></path>
          <path d="M98.6178,187.6035 C98.6178,187.6035 97.0778,187.4595 95.1588,181.3835 C93.2408,175.3085 83.4888,143.3345 83.4888,143.3345 L161.0258,94.0945 C161.0258,94.0945 165.5028,91.3765 165.3428,94.0945 C165.3428,94.0945 166.1418,94.5735 163.7438,96.8115 C161.3458,99.0505 102.8328,151.6475 102.8328,151.6475" fill="#D2E5F1"></path>
          <path d="M122.9015,168.1154 L102.0335,187.1414 C102.0335,187.1414 100.4025,188.3794 98.6175,187.6034 L102.6135,152.2624" fill="#B5CFE4"></path>
      </g>
    </symbol>
  </svg>

  <svg>
    <symbol id="whatsup" viewBox="0 0 58 58">
      <g>
        <path style="fill:#2CB742;" d="M0,58l4.988-14.963C2.457,38.78,1,33.812,1,28.5C1,12.76,13.76,0,29.5,0S58,12.76,58,28.5
          S45.24,57,29.5,57c-4.789,0-9.299-1.187-13.26-3.273L0,58z"/>
        <path style="fill:#FFFFFF;" d="M47.683,37.985c-1.316-2.487-6.169-5.331-6.169-5.331c-1.098-0.626-2.423-0.696-3.049,0.42
          c0,0-1.577,1.891-1.978,2.163c-1.832,1.241-3.529,1.193-5.242-0.52l-3.981-3.981l-3.981-3.981c-1.713-1.713-1.761-3.41-0.52-5.242
          c0.272-0.401,2.163-1.978,2.163-1.978c1.116-0.627,1.046-1.951,0.42-3.049c0,0-2.844-4.853-5.331-6.169
          c-1.058-0.56-2.357-0.364-3.203,0.482l-1.758,1.758c-5.577,5.577-2.761,11.873,2.746,17.45l5.097,5.097l5.097,5.097
          c5.577,5.577,11.873,8.323,17.45,2.746l1.758-1.758C48.048,40.341,48.243,39.042,47.683,37.985z"/>
      </g>
    </symbol>
  </svg>

</div>
</html>
