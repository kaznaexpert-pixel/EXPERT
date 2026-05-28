<?php
    session_start();
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
    <title>Казначейское сопровождение госконтрактов под ключ в СПб и по РФ | КазнаЭксперт</title>
    <meta name="description" content="Полный аутсорсинг казначейского сопровождения по 44-ФЗ и 223-ФЗ: подключение к ГИИС «Электронный бюджет», открытие лицевого счёта, санкционирование платежей, раздельный учёт. 24 часа от заявки до договора. 15+ лет опыта в Казначействе."/>
    <meta name="keywords" content="казначейское сопровождение, ГИИС Электронный бюджет, открытие лицевого счёта в казначействе, раздельный учёт по госконтракту, 44-ФЗ, 223-ФЗ"/>
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
    <meta property="og:title" content="Казначейское сопровождение госконтрактов под ключ | КазнаЭксперт">
    <meta property="og:description" content="Полный аутсорсинг казначейского сопровождения по 44-ФЗ и 223-ФЗ. 24 часа от заявки до договора. 15+ лет опыта в Казначействе.">
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
    <meta name="twitter:title" content="Казначейское сопровождение госконтрактов под ключ | КазнаЭксперт">
    <meta name="twitter:description" content="Полный аутсорсинг казначейского сопровождения по 44-ФЗ и 223-ФЗ. 24 часа от заявки до договора.">
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
    <!-- SCHEMA.ORG: FAQPage (для AI Overviews / rich snippets)        -->
    <!-- ============================================================ -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "От какой суммы контракта обязательно казначейское сопровождение в 2026 году?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "По 44-ФЗ казначейское сопровождение обязательно для контрактов от 3 млн ₽ с авансом более 50%, от 100 млн ₽ независимо от аванса, а также для контрактов, финансируемых из бюджетной субсидии или средств национальных проектов."
          }
        },
        {
          "@type": "Question",
          "name": "Сколько времени занимает подключение к ГИИС «Электронный бюджет»?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Стандартный срок подключения — 3-7 рабочих дней при условии готовности документов клиента."
          }
        },
        {
          "@type": "Question",
          "name": "Что будет, если не вести раздельный учёт по госконтракту?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Штраф на юридическое лицо составляет 5-10% цены договора, но не более 500 тыс. ₽. На ИП — 5-10%, но не более 250 тыс. ₽. На должностное лицо — 10-50 тыс. ₽."
          }
        },
        {
          "@type": "Question",
          "name": "С какими регионами вы работаете?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Со всеми регионами Российской Федерации. Работаем удалённо через TeamViewer или AnyDesk. Базовый офис — Санкт-Петербург."
          }
        },
        {
          "@type": "Question",
          "name": "Подписываете ли вы соглашение о неразглашении?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Да, NDA подписывается ещё до рассмотрения документов клиента. Это стандартная практика."
          }
        }
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
    <noscript><div><img src="https://mc.yandex.ru/watch/94305898" style="position:absolute; left:-9999px;" alt="" /></div></noscript>

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
                <img src="img/tick.svg" class="callout-img" alt="tick">
                <input type="tel" id="tel" data-tel-input class="_required" placeholder="Телефон*" pattern=".*.*.*.*\d{3}.*.*\d{3}.*\d{2}.*\d{2,}" title="Введите номер до конца" maxlength="18" required>
                <span class="callout2">Это поле обязательно для заполнения</span>
                <img src="img/tick.svg" class="callout-img2" alt="tick">
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

      <section>
        <div id="popup" class="popup">
          <div class="popup-content">
            <a href="#footer" class="popup-close"><img src="img/close-button.svg" alt="Закрыть чат"></a>
            <div class="chat-area">
              <div class="header">
                <img src="cms/files/<?php echo $row['img']; ?>" alt="Аватар оператора чата">
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
                <label><img src="cms/files/fileUpload.svg" alt="Прикрепить файл">
                      <input type="file" accept="image/*,.pdf,.doc,.docx,.xml,.xls,.xlsx,.ppt,.pptx,.txt" class="file" name="file">
                      <span class="chat-callout">только "jpeg", "jpg", "png", "tiff", "gif", "svg", "webp","pdf", "doc", "docx", "xml", "xls", "xlsx", "ppt", "pptx", "txt"</span>
                </label>
                <input type="text" class="input-field" name="message" placeholder="Сообщение..." autocomplete="off">
                <button aria-label="Отправить сообщение"><img src="cms/files/sendbutton.svg" alt="Отправить"></button>
              </form>
            </div>
          </div>
        </div>
        <a href="#popup" class="popup-link"><img src="img/chat.png" width="200px" alt="chat image"></a>
        <a href="#popup" class="popup-link-mobile"><img src="img/chat_mobile.png" width="80px" alt="chat image mobile"></a>
      </section>

      <footer>
        <div class="container">
          <div class="main-footer">
            <div class="logo">
              <a href="#header"><img src="img/logogold.webp" alt="Казначейское сопровождение" loading="lazy"></a>
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
