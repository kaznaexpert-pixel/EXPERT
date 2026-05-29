<?php
    session_start();

    // Убираем no-cache headers от session_start — даём браузерам кэшировать главную на 5 минут
    header_remove("Pragma");
    header_remove("Expires");
    header("Cache-Control: public, max-age=300, must-revalidate");

    $connect = mysqli_connect('localhost', 'y98451_dbuser', 'LirXu3Qd&Tifir:8', 'y98451_db');

    //Admin
    $user_id = 517727567;
    $sql = mysqli_query($connect, "SELECT * FROM `Users` WHERE `unique_id` = '{$user_id}'");
    if(mysqli_num_rows($sql) > 0){
        $row = mysqli_fetch_assoc($sql);
    }else{
        echo '<script>alert("Data failed to download")</script>';
    }

    //User
    $ran_id = rand(time(), 100000000); //random id for user
    $sql2 = mysqli_query($connect, "INSERT INTO `Users`(`unique_id`, `email`, `password`, `name`, `img`, `status`, `adminvalue`) VALUES ('{$ran_id}', '', '', '{$ran_id}', 'user.png', 'online', '')");
    if($sql2){
        $sql3 = mysqli_query($connect, "SELECT * FROM `Users` WHERE `name` = '{$ran_id}'");
        if(mysqli_num_rows($sql3) > 0){
            $result = mysqli_fetch_assoc($sql3);
            $_SESSION['unique_id'] = $result['unique_id'];
        }else{
            echo '<script>alert("SELECT User")</script>';
        }
    }else{
      echo '<script>alert("INSERT User")</script>';
    }

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
    <link rel="preload" href="/fonts/Comfortaa-VariableFont_wght.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preconnect" href="https://mc.yandex.ru" crossorigin>
    <link rel="preconnect" href="https://www.googletagmanager.com" crossorigin>
    <link rel="dns-prefetch" href="https://t.me">
    <link rel="dns-prefetch" href="https://wa.me">

    <!-- ============================================================ -->
    <!-- STYLES                                                        -->
    <!-- ============================================================ -->
    <link rel="stylesheet" href="/css/style.css" type="text/css">

    <!-- ============================================================ -->
    <!-- OPEN GRAPH (Facebook, LinkedIn, Telegram, VK)                 -->
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
    <!-- Google: old code (T-VolneI...) — оставлен от прежнего         -->
    <!-- разработчика; новая верификация Yaro прошла через DNS         -->
    <!-- Yandex: подтверждён                                           -->
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
        "https://t.me/Kaznaexpert",
        "https://wa.me/+79818331010"
      ],
      "contactPoint": [{
        "@type": "ContactPoint",
        "telephone": "+7-981-833-10-10",
        "contactType": "customer service",
        "email": "kaznaexpert@gmail.com",
        "areaServed": "RU",
        "availableLanguage": ["ru"]
      }]
    }
    </script>

    <!-- ============================================================ -->
    <!-- SCHEMA.ORG: ProfessionalService (LocalBusiness)               -->
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
      "areaServed": [{
        "@type": "AdministrativeArea",
        "name": "Российская Федерация"
      }],
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
    <!-- Дублирует видимый FAQ блок в HTML (Microdata + JSON-LD)       -->
    <!-- Покрывает entity-rich терминологию ниши                       -->
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
        {"@type": "Question", "name": "Сколько стоит казначейское сопровождение?", "acceptedAnswer": {"@type": "Answer", "text": "Стоимость казначейского сопровождения зависит от объёма работ, типа контракта (44-ФЗ, 223-ФЗ, ГОЗ), количества субподрядчиков, региона и состояния документов клиента. Открытие казначейского счёта в ТОФК — от 29 000 ₽. Подключение к ГИИС «Электронный бюджет» — от 19 000 ₽. Полное сопровождение контракта «под ключ» — от 69 000 ₽. Точная смета после бесплатного предварительного анализа контракта."}},
        {"@type": "Question", "name": "Что такое санкционирование платежей УФК?", "acceptedAnswer": {"@type": "Answer", "text": "Санкционирование платежей — это процедура согласования каждого платежа по госконтракту с казначейским сопровождением в УФК. Перед перечислением средств исполнитель подаёт в Казначейство платёжное поручение и пакет подтверждающих документов: счёт, акт, договор с субподрядчиком. УФК проверяет соответствие условиям контракта, кодам КВР и КОСГУ и утверждённым сведениям об операциях. Стандартный срок санкционирования — 1–5 рабочих дней."}}
      ]
    }
    </script>

    <!-- ============================================================ -->
    <!-- GOOGLE ANALYTICS 4 (gtag.js)                                  -->
    <!-- Заменён старый UA-223579262-1 (Universal Analytics — EOL 2023)-->
    <!-- ============================================================ -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-J5BH58Y623"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-J5BH58Y623', {
        'anonymize_ip': true,
        'cookie_flags': 'SameSite=None;Secure'
      });
    </script>

    <!-- ============================================================ -->
    <!-- YANDEX METRIKA                                                -->
    <!-- ============================================================ -->
    <script type="text/javascript">
       (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
       m[i].l=1*new Date();
       for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
       k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
       (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

       ym(94305898, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true,
            ecommerce:"dataLayer"
       });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/94305898" style="position:absolute; left:-9999px;" alt="Яндекс.Метрика" width="1" height="1" aria-hidden="true" /></div></noscript>

    <!-- Top.Mail.Ru счётчик удалён: не используется в VK Ads/MyTarget -->

  </head>

  <body>
    <div class="wrapper">
      <header id="header">
        <div class="container">
          <div class="header-top">
            <div class="header-burger">
              <span></span>
            </div>
            <nav class="menu">
              <ul>
                <li><a href="#aboutus">О Нас</a></li>
                <li><a href="#services">Услуги</a></li>
                <li><a href="#faq">FAQ</a></li>
                <li><a href="#contacts-instruction">Контакты</a></li>
                <li><a href="blog/index.html">Блог</a></li>
              </ul>
            </nav>
            <div class="social">
              <a href="tel:+79818331010"><strong>+7-981-833-10-10</strong></a>
              <!--<a href="tel:+79818331010" class="social-btn"><svg><use href="#phone" xlink:href="#phone"></use></svg></a>-->
              <a href="mailto:kaznaexpert@gmail.com" class="social-btn"><svg><use href="#mail" xlink:href="#mail"></use></svg></a>
              <a href="https://t.me/Kaznaexpert" class="social-btn"><svg><use href="#telegram" xlink:href="#telegram"></use></svg></a>
              <a href="https://wa.me/+79818331010" class="social-btn"><svg><use href="#whatsup" xlink:href="#whatsup"></use></svg></a>
            </div>
          </div>
          <div class="header-body">
            <div class="promo">
              <h1 class="promo-title">Казначейское <br>сопровождение</h1>
              <p>От установки ГИИС "Электронный бюджет" <br> до полного сопровождения. </p>
              <div class="animatedbtn"><a href="#contacts" class="btn">Подать заявку</a></div>
            </div>
            <div class="image">
              <img src="img/LogoWhite.png" width="465" height="338" alt="Казначейское сопровождение">
            </div>
          </div>
        </div>
      </header>

      <section class="aboutus" id="aboutus">
        <div class="container">
          <div class="aboutus-intro">
            <h2>Компания с богатым опытом </h2>
            <p>Важные факты</p>
            <p>По&shy;высь&shy;те эф&shy;фек&shy;тив&shy;ность и ско&shy;рость ва&shy;ших фи&shy;нан&shy;со&shy;вых опе&shy;ра&shy;ций с на&shy;ми. Ре&shy;ши&shy;те проб&shy;ле&shy;му по&shy;да&shy;чи до&shy;ку&shy;мен&shy;тов в ре&shy;гу&shy;ли&shy;рую&shy;щие фе&shy;де&shy;раль&shy;ные служ&shy;бы. <br>
            Мы пред&shy;ла&shy;гаем быс&shy;трое и прос&shy;тое сот&shy;руд&shy;ни&shy;чест&shy;во. От Вас пот&shy;ре&shy;бует&shy;ся толь&shy;ко заяв&shy;ка и па&shy;кет до&shy;ку&shy;мен&shy;тов.  </p>
            <h3> Вы должны знать </h3>
            <p>В на&shy;шей ко&shy;ман&shy;де ра&shy;бо&shy;та&shy;ют про&shy;фес&shy;си&shy;она&shy;лы с мно&shy;го&shy;лет&shy;ним опы&shy;том в Каз&shy;на&shy;чейст&shy;ве.</p>

            <!-- Author / Expert block (E-E-A-T signal для Google QRG + AI-цитирование) -->
            <div class="author-card" itemscope itemtype="https://schema.org/Person" style="margin-top:32px;padding:20px 24px;background:rgba(255,255,255,0.55);border-left:3px solid #C9A227;border-radius:4px;max-width:640px;">
              <p style="margin:0 0 6px;font-size:16px;line-height:1.4;color:#2E3440;">
                <strong itemprop="name">Михайлов Ярослав</strong> — основатель и эксперт «КазнаЭксперт»
              </p>
              <p style="margin:0;font-size:14px;line-height:1.5;color:#555;" itemprop="description">
                <span itemprop="jobTitle">Эксперт по казначейскому сопровождению госконтрактов.</span>
                15+ лет работы в системе Федерального Казначейства. Знаем требования УФК изнутри: причины отказов, нюансы КОСГУ/КВР, особенности раздельного учёта по 44-ФЗ и 223-ФЗ.
              </p>
              <p style="margin:8px 0 0;font-size:12px;color:#888;">Обновлено: май 2026</p>
            </div>
          </div>
        </div>
      </section>


      <section class="callus" >
        <div class="container">
          <div class="callus-intro">
            <h2>Перезвоните мне!</h2>
            <form id="callus-form" action="#">
              <input type="tel" id="callus-form-tel" class="_required_callus" data-tel-input placeholder="Телефон" pattern=".*.*.*.*\d{3}.*.*\d{3}.*\d{2}.*\d{2,}" title="Введите номер до конца" maxlength="18" required>
              <label class="checkbox">Я даю со&shy;гла&shy;сие на об&shy;ра&shy;бот&shy;ку пер&shy;со&shy;наль&shy;ных дан&shy;ных в со&shy;от&shy;вет&shy;ст&shy;вии с <a href="/privacy/" target="_blank">по&shy;ли&shy;ти&shy;кой кон&shy;фи&shy;ден&shy;ци&shy;аль&shy;нос&shy;ти</a>
                <input type="checkbox" class="_required_callus" required>
                <span class="checkmark"></span>
              </label>
              <input type="submit" class="callus-btn _required_callus" value="Отправить" disabled>
            </form>
          </div>
        </div>
      </section>

      <section class="services" id="services">
        <div class="container">
          <div class="slider">

            <div class="slider-buttons">
              <button class="button-prev"></button>
              <button class="button-next"></button>
            </div>

            <div class="service-body">
              <div class="column">
                <div class="service-item">
                  <h2 class="service-title">Услуги</h2>
                </div>
              </div>
              <div class="column">
                <div class="service-item">
                  <h2 class="service-title">Подключение к ГИИС "Электронный бюджет"</h2>
                  <p>Подача запроса на подключение к ГИИС "ЭБ", подготовка документов для получения сертификата, привязка электронной подписи (ЭЦП) к ГИИС "ЭБ"</p>
                </div>
              </div>
              <div class="column">
                <div class="service-item">
                  <h2 class="service-title">Открытие <br> лицевого счета</h2>
                  <p>Подписание договора об обслуживании, открытие (резервирование) лицевого счета (подраздела)</p>
                </div>
              </div>
              <div class="column">
                <div class="service-item">
                  <h2 class="service-title">Утверждение сведений об операциях с целевыми средствами</h2>
                  <p>Распределение суммы контракта по кодам расходов в соответствии с требованиями Казначейства</p>
                </div>
              </div>
              <div class="column">
                <div class="service-item">
                  <h2 class="service-title">Проведение <br> платежей</h2>
                  <p>Выведение денежных средств с казначейского на расчетный счет</p>
                </div>
              </div>
              <div class="column">
                <div class="service-item">
                  <h2 class="service-title">Закрытие <br> лицевого счета</h2>
                  <p>Расчетный счет закрыт, все средства выведены &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                </div>
              </div>
              <div class="column">
                <div class="service-item">
                  <h2 class="service-title">Раздельный <br> учет</h2>
                  <p>Регистрация итогов финансово-хозяйственной деятельности по каждому госконтракту в разрезе отдельных статей расходов</p>
                </div>
              </div>
              <div class="column">
                <div class="service-item">
                  <h2 class="service-title">Анализ <br> контракта</h2>
                  <p>Подготовка рекомендаций и заключений по казначейскому сопровождению согласно условиям контракта</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>

      <section class="contacts" id="contacts">
        <div class="container">
          <div class="contacts-body">
            <div class="contacts-intro">
              <h2>Подать заявку</h2>
              <p>Свяжитесь с нами для успешного сотрудничества</p>
              <form class="contacts-form" id="contacts-form" action="#">
                <input type="text" id="fullname" placeholder="Имя">
                <input type="email" id="email" class="_required" placeholder="email" pattern="[^@\s]+@[^@\s]+(\.[^@\s]+)+" title="user@example.ru">
                <span class="callout">Формат: user@example.ru</span>
                <img src="img/tick.svg" class="callout-img" alt="Поле заполнено корректно" width="16" height="16" aria-hidden="true">
                <input type="tel" id="tel" data-tel-input class="_required" placeholder="Телефон*" pattern=".*.*.*.*\d{3}.*.*\d{3}.*\d{2}.*\d{2,}" title="Введите номер до конца" maxlength="18" required>
                <span class="callout2">Это поле обязательно для заполнения</span>
                <img src="img/tick.svg" class="callout-img2" alt="Поле заполнено корректно" width="16" height="16" aria-hidden="true">
                <textarea id="message" placeholder="Сообщение"></textarea>
                <label class="checkbox">Я даю согласие на обработку персональных данных в соответствии с <a href="/privacy/" target="_blank">политикой конфиденциальности</a>
                  <input type="checkbox" class="_required" required>
                  <span class="checkmark"></span>
                </label>
                <input type="submit" id="submit" class="btn" value="Отправить" disabled>
              </form>
            </div>
            <div class="contacts-instruction" id="contacts-instruction">
              <h2>Контакты</h2>
              <p class="contacts-instruction-1">Адрес:</p>
              <p>199106, Санкт-Петербург, Средний пр.В.О., 88, литера А, оф.330</p>
              <!--<p class="contacts-instruction-1">Реквизиты:</p>-->
              <!--<p>ИП Михайлов Я.А.<br> ОГРНИП 321784700367672<br>ИНН 781428314589 Система УСН</p>-->
              <p class="contacts-instruction-1">E-mail:</p>
              <p><a href="mailto:kaznaexpert@gmail.com">kaznaexpert@gmail.com</a></p>
              <p class="contacts-instruction-1">Телефон:</p>
              <p><a href="tel:+79818331010"><strong>+7-981-833-10-10</strong></a></p>
              <p><div class="social">
                  <a href="https://t.me/Kaznaexpert" class="social-btn"><svg><use href="#telegram" xlink:href="#telegram"></use></svg></a>
                  <a href="https://wa.me/+79818331010" class="social-btn"><svg><use href="#whatsup" xlink:href="#whatsup"></use></svg></a>
                 </div></p>
            </div>
          </div>
        </div>
      </section>

      <section class="advantages">
        <div class="container">
          <h2 class="advantages-title">Наши преимущества</h2>
          <div class="advantage">
            <img src="img/clock.png" width="35" height="35" alt="Быстрая заявка">
            <h2>Быстро</h2>
            <p>От заяв&shy;ки до до&shy;го&shy;во&shy;ра 24 ча&shy;са. Ком&shy;му&shy;ни&shy;ка&shy;ция в удоб&shy;ном мес&shy;сед&shy;же&shy;ре или по те&shy;ле&shy;фо&shy;ну. </p>
          </div>
          <div class="advantage">
            <img src="img/simple.png" width="29.5" height="35" alt="Заполнение формы - просто">
            <h2>Просто</h2>
            <p>От вас толь&shy;ко заяв&shy;ка и па&shy;кет до&shy;ку&shy;мен&shy;тов. Мы са&shy;мос&shy;тоя&shy;те&shy;ль&shy;но за&shy;пол&shy;ним все фор&shy;мы и по&shy;ру&shy;че&shy;ния.</p>
          </div>
          <div class="advantage">
            <img src="img/pro.png" width="36.25" height="35" alt="Профессионально">
            <h2>Профессионально</h2>
            <p>Точ&shy;но по&shy;ни&shy;ма&shy;ем при&shy;чи&shy;ны от&shy;кло&shy;не&shy;ния до&shy;ку&shy;мен&shy;тов. У нас бо&shy;га&shy;тый опыт ра&shy;бо&shy;ты в Каз&shy;на&shy;чейст&shy;ве.</p>
          </div>
          <div class="advantage">
            <img src="img/safe.png" width="32.7" height="35" alt="Безопасно">
            <h2>Безопасно</h2>
            <p>Оп&shy;ла&shy;та пос&shy;ле под&shy;пи&shy;са&shy;ния до&shy;го&shy;во&shy;ра и про&shy;ве&shy;де&shy;ния пер&shy;вых опе&shy;ра&shy;ций по ва&shy;ше&shy;му рас&shy;чет&shy;но&shy;му сче&shy;ту. </p>
          </div>
          <div class="advantage">
            <img src="img/confidential.png" width="37.9" height="35" alt="Конфиденциально">
            <h2>Конфиденциально</h2>
            <p>Под&shy;пи&shy;сы&shy;ва&shy;ем до&shy;го&shy;вор о не&shy;разг&shy;ла&shy;ше&shy;нии еще до расс&shy;мот&shy;ре&shy;ния ва&shy;ших до&shy;ку&shy;мен&shy;тов. </p>
          </div>
          <div class="advantage">
            <img src="img/tw.png" width="33.7" height="35" alt="Удаленно, удобно">
            <h2>Удаленно</h2>
            <p>Ра&shy;бо&shy;та&shy;ем уда&shy;лен&shy;но на ва&shy;шем ком&shy;пью&shy;те&shy;ре че&shy;рез Team&shy;Viewer или AnyDesk. </p>
          </div>
        </div>
      </section>

      <!-- ============================================================ -->
      <!-- FAQ BLOCK — 15 vidible Q&A для GEO/AI-цитирования             -->
      <!-- Microdata + дублирует FAQPage schema в head                   -->
      <!-- Покрывает entity-rich терминологию: ТОФК, ГИИС ЭБ, КВР/КОСГУ, -->
      <!-- неучастник бюджетного процесса, лицевой счёт, санкционирование -->
      <!-- ============================================================ -->
      <section class="faq-section" id="faq" style="padding:60px 0;background:#F5F1E6;">
        <div class="container" style="max-width:960px;margin:0 auto;padding:0 24px;">

          <p style="margin:0 0 8px;font-size:13px;letter-spacing:6px;color:#B7935A;font-weight:600;">FAQ</p>
          <h2 style="margin:0 0 36px;font-size:32px;color:#2E3440;line-height:1.2;">Частые вопросы о казначейском счёте и сопровождении</h2>

          <div class="faq-item" itemscope itemtype="https://schema.org/Question" style="margin-bottom:24px;padding-bottom:24px;border-bottom:1px solid #E5DCC4;">
            <h3 itemprop="name" style="margin:0 0 10px;font-size:18px;color:#2E3440;line-height:1.3;">Что такое казначейский счёт?</h3>
            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
              <p itemprop="text" style="margin:0;font-size:15px;line-height:1.6;color:#444;">Казначейский счёт — это лицевой счёт, открытый в территориальном органе Федерального Казначейства (ТОФК) для расчётов по государственному контракту с казначейским сопровождением. На счёт поступают средства от заказчика, а расходование возможно только после санкционирования УФК. Цель — контроль целевого использования бюджетных средств по 44-ФЗ и 223-ФЗ.</p>
            </div>
          </div>

          <div class="faq-item" itemscope itemtype="https://schema.org/Question" style="margin-bottom:24px;padding-bottom:24px;border-bottom:1px solid #E5DCC4;">
            <h3 itemprop="name" style="margin:0 0 10px;font-size:18px;color:#2E3440;line-height:1.3;">Что такое казначейское сопровождение?</h3>
            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
              <p itemprop="text" style="margin:0;font-size:15px;line-height:1.6;color:#444;">Казначейское сопровождение — режим финансового контроля по 44-ФЗ и 223-ФЗ, при котором расчёты по госконтракту проходят через лицевой счёт в УФК. Каждый платёж исполнителя проверяется Казначейством на соответствие условиям контракта и целевому назначению средств. Регулируется статьёй 242.23 Бюджетного кодекса РФ и Постановлением Правительства РФ № 1496 от 09.12.2017.</p>
            </div>
          </div>

          <div class="faq-item" itemscope itemtype="https://schema.org/Question" style="margin-bottom:24px;padding-bottom:24px;border-bottom:1px solid #E5DCC4;">
            <h3 itemprop="name" style="margin:0 0 10px;font-size:18px;color:#2E3440;line-height:1.3;">Кто попадает под казначейское сопровождение в 2026 году?</h3>
            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
              <p itemprop="text" style="margin:0;font-size:15px;line-height:1.6;color:#444;">Под казначейское сопровождение по 44-ФЗ в 2026 году попадают: исполнители контрактов от 3 млн ₽ при авансе более 50%, исполнители контрактов от 100 млн ₽ независимо от размера аванса, получатели бюджетных субсидий, исполнители контрактов в рамках национальных проектов, исполнители гособоронзаказа (ГОЗ). Также сопровождение распространяется на субподрядчиков всех уровней по этим контрактам.</p>
            </div>
          </div>

          <div class="faq-item" itemscope itemtype="https://schema.org/Question" style="margin-bottom:24px;padding-bottom:24px;border-bottom:1px solid #E5DCC4;">
            <h3 itemprop="name" style="margin:0 0 10px;font-size:18px;color:#2E3440;line-height:1.3;">Кто такой неучастник бюджетного процесса?</h3>
            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
              <p itemprop="text" style="margin:0;font-size:15px;line-height:1.6;color:#444;">Неучастник бюджетного процесса — это юридическое лицо, индивидуальный предприниматель или физическое лицо, которое не является получателем бюджетных средств, но участвует в исполнении госконтракта. Это коммерческие организации — поставщики, подрядчики, субподрядчики, у которых открывается лицевой счёт в ТОФК для расчётов по госконтракту. Большинство клиентов «КазнаЭксперт» — именно неучастники бюджетного процесса.</p>
            </div>
          </div>

          <div class="faq-item" itemscope itemtype="https://schema.org/Question" style="margin-bottom:24px;padding-bottom:24px;border-bottom:1px solid #E5DCC4;">
            <h3 itemprop="name" style="margin:0 0 10px;font-size:18px;color:#2E3440;line-height:1.3;">Какой лимит казначейского сопровождения в 2026 году?</h3>
            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
              <p itemprop="text" style="margin:0;font-size:15px;line-height:1.6;color:#444;">Лимиты обязательного казначейского сопровождения по 44-ФЗ в 2026 году: от 3 млн ₽ при авансе более 50% от цены контракта, от 100 млн ₽ независимо от размера аванса. Для контрактов с бюджетной субсидией или средствами национальных проектов казначейское сопровождение применяется независимо от суммы. Для гособоронзаказа действуют отдельные правила по Федеральному закону № 275-ФЗ.</p>
            </div>
          </div>

          <div class="faq-item" itemscope itemtype="https://schema.org/Question" style="margin-bottom:24px;padding-bottom:24px;border-bottom:1px solid #E5DCC4;">
            <h3 itemprop="name" style="margin:0 0 10px;font-size:18px;color:#2E3440;line-height:1.3;">Как открыть казначейский счёт?</h3>
            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
              <p itemprop="text" style="margin:0;font-size:15px;line-height:1.6;color:#444;">Чтобы открыть казначейский счёт самостоятельно, нужно: 1) Получить квалифицированную электронную подпись (КЭП). 2) Подключиться к ГИИС «Электронный бюджет» — 3–7 рабочих дней. 3) Подготовить пакет документов: устав, ЕГРЮЛ/ЕГРИП, контракт, доверенность. 4) Подать заявление и договор обслуживания в ТОФК. 5) Дождаться открытия — 2–5 рабочих дней. С «КазнаЭксперт» весь процесс — за 2 рабочих дня от готовности документов.</p>
            </div>
          </div>

          <div class="faq-item" itemscope itemtype="https://schema.org/Question" style="margin-bottom:24px;padding-bottom:24px;border-bottom:1px solid #E5DCC4;">
            <h3 itemprop="name" style="margin:0 0 10px;font-size:18px;color:#2E3440;line-height:1.3;">Должен ли субподрядчик открывать казначейский счёт?</h3>
            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
              <p itemprop="text" style="margin:0;font-size:15px;line-height:1.6;color:#444;">Да, субподрядчик по контракту с казначейским сопровождением обязан открыть отдельный лицевой счёт в ТОФК для получения оплаты от подрядчика. Каждое звено цепочки исполнителей — подрядчик → субподрядчик → субсубподрядчик — ведёт расчёты через свой казначейский счёт. Платежи на каждом уровне проходят санкционирование Казначейства. Исключение — поставка строительных материалов и оборудования с прямой оплатой на расчётный счёт.</p>
            </div>
          </div>

          <div class="faq-item" itemscope itemtype="https://schema.org/Question" style="margin-bottom:24px;padding-bottom:24px;border-bottom:1px solid #E5DCC4;">
            <h3 itemprop="name" style="margin:0 0 10px;font-size:18px;color:#2E3440;line-height:1.3;">Что такое ТОФК?</h3>
            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
              <p itemprop="text" style="margin:0;font-size:15px;line-height:1.6;color:#444;">ТОФК — Территориальный Орган Федерального Казначейства. Это региональное подразделение Казначейства России в субъекте Федерации: УФК по Санкт-Петербургу, УФК по г. Москве, УФК по Московской области и так далее. ТОФК открывает лицевые счета, санкционирует платежи, ведёт бюджетный учёт. Все операции по казначейскому сопровождению проходят через ТОФК по месту регистрации или фактического нахождения клиента.</p>
            </div>
          </div>

          <div class="faq-item" itemscope itemtype="https://schema.org/Question" style="margin-bottom:24px;padding-bottom:24px;border-bottom:1px solid #E5DCC4;">
            <h3 itemprop="name" style="margin:0 0 10px;font-size:18px;color:#2E3440;line-height:1.3;">Что такое коды расходования средств (КВР и КОСГУ)?</h3>
            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
              <p itemprop="text" style="margin:0;font-size:15px;line-height:1.6;color:#444;">КВР (код вида расходов) и КОСГУ (классификация операций сектора государственного управления) — это коды бюджетной классификации, определяющие целевое назначение каждого платежа по госконтракту. По 44-ФЗ исполнитель распределяет всю сумму контракта по этим кодам в форме «Сведения об операциях с целевыми средствами». Без утверждения сведений в УФК ни один платёж не пройдёт санкционирование. Регулируется приказом Минфина России № 209н.</p>
            </div>
          </div>

          <div class="faq-item" itemscope itemtype="https://schema.org/Question" style="margin-bottom:24px;padding-bottom:24px;border-bottom:1px solid #E5DCC4;">
            <h3 itemprop="name" style="margin:0 0 10px;font-size:18px;color:#2E3440;line-height:1.3;">Что такое ГИИС «Электронный бюджет»?</h3>
            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
              <p itemprop="text" style="margin:0;font-size:15px;line-height:1.6;color:#444;">ГИИС «Электронный бюджет» — государственная интегрированная информационная система управления общественными финансами, через которую проходит весь документооборот с Федеральным Казначейством по контрактам с казначейским сопровождением. Без подключения к ГИИС «ЭБ» работа невозможна. Подключение требует квалифицированной электронной подписи (КЭП) и установки корневых, промежуточных и личных сертификатов. Стандартный срок подключения — 3–7 рабочих дней.</p>
            </div>
          </div>

          <div class="faq-item" itemscope itemtype="https://schema.org/Question" style="margin-bottom:24px;padding-bottom:24px;border-bottom:1px solid #E5DCC4;">
            <h3 itemprop="name" style="margin:0 0 10px;font-size:18px;color:#2E3440;line-height:1.3;">В чём разница между лицевым счётом и казначейским счётом?</h3>
            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
              <p itemprop="text" style="margin:0;font-size:15px;line-height:1.6;color:#444;">Казначейский счёт — это единый банковский счёт Федерального Казначейства РФ в Банке России, на котором учитываются средства всех клиентов УФК. Лицевой счёт — это аналитический счёт учёта операций конкретного клиента, открытый в ТОФК. При казначейском сопровождении исполнителю открывается лицевой счёт (обычно типа 41, 71 или 14), который ведётся на казначейском счёте УФК. На практике эти термины часто используются как синонимы.</p>
            </div>
          </div>

          <div class="faq-item" itemscope itemtype="https://schema.org/Question" style="margin-bottom:24px;padding-bottom:24px;border-bottom:1px solid #E5DCC4;">
            <h3 itemprop="name" style="margin:0 0 10px;font-size:18px;color:#2E3440;line-height:1.3;">Что такое раздельный учёт по госконтракту?</h3>
            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
              <p itemprop="text" style="margin:0;font-size:15px;line-height:1.6;color:#444;">Раздельный учёт по госконтракту — это обязанность исполнителя по 44-ФЗ вести отдельный учёт результатов финансово-хозяйственной деятельности по каждому контракту с казначейским сопровождением. В учёте отражаются доходы, расходы, активы и обязательства в разрезе конкретного контракта. За нарушение — штраф 5–10% цены договора, но не более 500 тыс. ₽ для юрлиц, не более 250 тыс. ₽ для ИП, 10–50 тыс. ₽ для должностных лиц.</p>
            </div>
          </div>

          <div class="faq-item" itemscope itemtype="https://schema.org/Question" style="margin-bottom:24px;padding-bottom:24px;border-bottom:1px solid #E5DCC4;">
            <h3 itemprop="name" style="margin:0 0 10px;font-size:18px;color:#2E3440;line-height:1.3;">Какие документы нужны для открытия казначейского счёта?</h3>
            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
              <p itemprop="text" style="margin:0;font-size:15px;line-height:1.6;color:#444;">Для открытия казначейского счёта в ТОФК понадобятся: устав организации, выписка из ЕГРЮЛ или ЕГРИП (свежая, не старше 30 дней), копия государственного контракта или дополнительного соглашения, документ о назначении руководителя, доверенность на представителя (если открывает не директор), квалифицированная электронная подпись руководителя, банковские реквизиты для возврата остатков. Точный список финализируется после анализа конкретного контракта.</p>
            </div>
          </div>

          <div class="faq-item" itemscope itemtype="https://schema.org/Question" style="margin-bottom:24px;padding-bottom:24px;border-bottom:1px solid #E5DCC4;">
            <h3 itemprop="name" style="margin:0 0 10px;font-size:18px;color:#2E3440;line-height:1.3;">Сколько стоит казначейское сопровождение?</h3>
            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
              <p itemprop="text" style="margin:0;font-size:15px;line-height:1.6;color:#444;">Стоимость казначейского сопровождения зависит от объёма работ, типа контракта (44-ФЗ, 223-ФЗ, ГОЗ), количества субподрядчиков, региона и состояния документов клиента. Открытие казначейского счёта в ТОФК — от 29 000 ₽. Подключение к ГИИС «Электронный бюджет» — от 19 000 ₽. Полное сопровождение контракта «под ключ» — от 69 000 ₽. Точная смета после бесплатного предварительного анализа контракта.</p>
            </div>
          </div>

          <div class="faq-item" itemscope itemtype="https://schema.org/Question" style="margin-bottom:0;">
            <h3 itemprop="name" style="margin:0 0 10px;font-size:18px;color:#2E3440;line-height:1.3;">Что такое санкционирование платежей УФК?</h3>
            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
              <p itemprop="text" style="margin:0;font-size:15px;line-height:1.6;color:#444;">Санкционирование платежей — это процедура согласования каждого платежа по госконтракту с казначейским сопровождением в УФК. Перед перечислением средств исполнитель подаёт в Казначейство платёжное поручение и пакет подтверждающих документов: счёт, акт, договор с субподрядчиком. УФК проверяет соответствие условиям контракта, кодам КВР и КОСГУ и утверждённым сведениям об операциях. Стандартный срок санкционирования — 1–5 рабочих дней.</p>
            </div>
          </div>

        </div>
      </section>

      <section>
        <div id="popup" class="popup">
          <div class="popup-content">
            <a href="#footer" class="popup-close"><img src="img/close-button.svg" alt="Закрыть чат" width="24" height="24"></a>
            <div class="chat-area">
              <div class="header">
                <img src="cms/files/<?php echo $row['img']; ?>" alt="Аватар оператора чата" width="40" height="40">
                <div class="details">
                  <span><?php echo $row['name']; ?></span>
                  <p><?php echo $row['status']; ?></p>
                </div>
              </div>
              <div class="chat-box">

              </div>
              <form action="#" class="typing-area" enctype="multipart/form-data">
                <input type="text" id="outgoing_id" name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?>" hidden>
                <input type="text" id="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
                <label><img src="cms/files/fileUpload.svg" alt="Прикрепить файл" width="24" height="24">
                      <input type="file" accept="image/*,.pdf,.doc,.docx,.xml,.xls,.xlsx,.ppt,.pptx,.txt" class="file" name="file">
                      <span class="chat-callout">только "jpeg", "jpg", "png", "tiff", "gif", "svg", "webp","pdf", "doc", "docx", "xml", "xls", "xlsx", "ppt", "pptx", "txt"</span>
                </label>
                <input type="text" class="input-field" name="message" placeholder="Сообщение..." autocomplete="off">
                <button aria-label="Отправить сообщение"><img src="cms/files/sendbutton.svg" alt="Отправить" width="24" height="24"></button>
              </form>
            </div>
          </div>
        </div>
        <a href="#popup" class="popup-link" aria-label="Открыть чат с экспертом"><img src="img/chat.png" width="200" height="200" alt="Открыть чат с экспертом по казначейскому сопровождению"></a>
        <a href="#popup" class="popup-link-mobile" aria-label="Открыть чат"><img src="img/chat_mobile.png" width="80" height="80" alt="Открыть чат"></a>
      </section>

      <footer>
        <div class="container">
          <div class="main-footer">
            <div class="logo">
              <a href="#header"><img src="img/logogold.webp" alt="Казначейское сопровождение" width="200" height="60" loading="lazy"></a>
            </div>
            <div class="footer-contacts">
              <p><a href="mailto:kaznaexpert@gmail.com">kaznaexpert@gmail.com</a></p>
              <p><a href="tel:+79818331010"><strong>+7-981-833-10-10</strong></a></p>
              <div class="social">
                  <a href="https://t.me/Kaznaexpert" class="social-btn"><svg><use href="#telegram" xlink:href="#telegram"></use></svg></a>
                  <a href="https://wa.me/+79818331010" class="social-btn"><svg><use href="#whatsup" xlink:href="#whatsup"></use></svg></a>
               </div>
              <p style="font-size:12px;margin-top:8px;"><a href="/privacy/" style="color:inherit;opacity:.7;">Политика конфиденциальности</a></p>
            </div>
          </div>
        </div>
      </footer>

    </div>
    <script src="js/main.js"></script>
  </body>

  <div class="svgs">
  <svg>
    <symbol id="phone" viewBox="0 0 568.02 500">
      <g transform="translate(-596.99 -155)">
        <g stroke="#353745" stroke-linecap="round">
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
        <rect transform="matrix(.69117 -.7227 .76954 .6386 0 0)" x="215.93" y="999.43" width="16.862" height="38.25" fill="#353745" stroke-linejoin="round" stroke-width="10.582" style="paint-order:stroke fill markers"/>
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
