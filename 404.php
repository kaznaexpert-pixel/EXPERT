<?php http_response_code(404); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Страница не найдена — КазнаЭксперт</title>
<meta name="robots" content="noindex, follow">
<meta name="theme-color" content="#F4F1EB" media="(prefers-color-scheme: light)">
<meta name="theme-color" content="#141310" media="(prefers-color-scheme: dark)">
<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
<link rel="apple-touch-icon" sizes="180x180" href="/img/apple-touch-icon.png">

<link rel="preload" as="font" type="font/woff2" href="/fonts/inter-normal-400-cyrillic.woff2" crossorigin>
<link rel="preload" as="font" type="font/woff2" href="/fonts/playfairdisplay-normal-500-cyrillic.woff2" crossorigin>
<style id="fonts-crit">
@font-face{font-family:'Inter';font-style:normal;font-weight:400;font-display:swap;src:url(/fonts/inter-normal-400-cyrillic.woff2) format('woff2');unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}
@font-face{font-family:'Playfair Display';font-style:normal;font-weight:500;font-display:swap;src:url(/fonts/playfairdisplay-normal-500-cyrillic.woff2) format('woff2');unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}</style>
<style>
:root{--bg:#F4F1EB;--paper:#FBF9F4;--ink:#1A1A1A;--mute:#6E6B66;--hair:rgba(26,26,26,.12);--accent:#8B6F47;
  --font-display:"Playfair Display","Times New Roman",serif;--font-body:"Inter",-apple-system,sans-serif}
*{box-sizing:border-box;margin:0;padding:0}
body{background:var(--bg);color:var(--ink);font-family:var(--font-body);font-size:17px;line-height:1.6;-webkit-font-smoothing:antialiased;min-height:100vh;display:flex;flex-direction:column}
a{color:inherit;text-decoration:none}
.hd{padding:22px 40px;border-bottom:1px solid var(--hair);display:flex;justify-content:space-between;align-items:center}
.hd img{height:44px;width:auto;display:block}
.hd .ph{font-family:var(--font-display);font-size:19px}
main{flex:1;display:flex;align-items:center;justify-content:center;padding:60px 24px}
.card{max-width:640px;text-align:center}
.num{font-family:var(--font-display);font-size:clamp(90px,16vw,150px);font-weight:500;line-height:1;color:var(--accent);opacity:.35}
h1{font-family:var(--font-display);font-weight:500;font-size:clamp(26px,4.5vw,38px);letter-spacing:-.01em;margin:14px 0 12px}
.sub{color:var(--mute);margin-bottom:28px}
.srch{display:flex;gap:8px;max-width:440px;margin:0 auto 28px}
.srch input{flex:1;padding:13px 18px;font-size:16px;font-family:inherit;border:1px solid var(--hair);border-radius:12px;background:var(--paper);color:var(--ink)}
.srch input:focus{outline:none;border-color:rgba(139,111,71,.55);box-shadow:0 0 0 3px rgba(139,111,71,.12)}
.srch button{padding:13px 22px;font-size:15px;font-family:inherit;border:0;border-radius:12px;background:var(--ink);color:#FBF9F4;cursor:pointer}
.links{display:flex;flex-wrap:wrap;gap:10px;justify-content:center}
.links a{font-size:14px;background:var(--paper);border:1px solid var(--hair);border-radius:100px;padding:9px 18px;transition:border-color .2s}
.links a:hover{border-color:rgba(139,111,71,.55)}
.ft{padding:20px 40px;border-top:1px solid var(--hair);text-align:center;font-size:13px;color:var(--mute)}
@media(max-width:560px){.hd{padding:14px 20px}.hd img{height:36px}.srch{flex-direction:column}}
</style>
</head>
<body>
<header class="hd">
  <a href="/" aria-label="КазнаЭксперт — на главную"><img src="/img/logogold.webp" alt="КазнаЭксперт" width="60" height="44"></a>
  <a class="ph" href="tel:+79818331010">+7 981 833-10-10</a>
</header>
<main>
  <div class="card">
    <div class="num" aria-hidden="true">404</div>
    <h1>Такой страницы нет</h1>
    <p class="sub">Страница переехала, переименована или в адресе опечатка.
    Но ответ на ваш вопрос, скорее всего, уже есть в базе знаний.</p>
    <form class="srch" action="/baza-znaniy/" method="get" role="search">
      <input type="search" name="q" placeholder="Например: ГОЗ, лицевой счёт, аванс…" aria-label="Поиск по базе знаний">
      <button type="submit">Найти</button>
    </form>
    <nav class="links" aria-label="Полезные разделы">
      <a href="/">Главная</a>
      <a href="/baza-znaniy/">База знаний</a>
      <a href="/faq/">Частые вопросы</a>
      <a href="/uslugi/kaznacheyskoe-soprovozhdenie/">Услуги</a>
      <a href="/#contacts">Связаться с экспертом</a>
    </nav>
  </div>
</main>
<footer class="ft">КазнаЭксперт · казначейское сопровождение госконтрактов · <a href="mailto:manager@kaznaexpert.ru" style="text-decoration:underline">manager@kaznaexpert.ru</a></footer>
</body>
</html>
