# -*- coding: utf-8 -*-
"""Прогон 2026-08-03: P45-159 (промежуточная отчётность ГОЗ), P45-160 (военное представительство), P45-161 (субсидия на госзадание).
сопровождение средств нацпроектов), P44-158 (сроки хранения документов по госконтракту).
Генерирует <slug>-content.html и <slug>-schema.html из data11_*.py, затем splice в pillar-shell, перелинковка, sitemap.
Запуск: python3 publish_build14.py <repo_root> [<assets_dir>]
Если assets_dir не задан — генерирует рядом со скриптом и собирает страницы в repo_root.
Без repo_root — только генерация content/schema в текущую папку (для самопроверки).
"""
import os, re, sys, json, html, datetime, urllib.parse
sys.path.insert(0, os.path.dirname(os.path.abspath(__file__)))
from refs_render import render_refs

import data49_zakrytie
DATA = [data49_zakrytie.A]

# ---------------- ГЕНЕРАЦИЯ CONTENT/SCHEMA ----------------
PERSON = ('Ярослав Михайлов', 'Главный эксперт по казначейскому сопровождению',
          'https://kaznaexpert.ru/komanda/mihailov-yaroslav/')

def esc(s):
    return html.escape(s, quote=True)

def toc_items(a):
    items = [(sid, t) for sid, t in a['sections']]
    items.append(('glossary', 'Глоссарий'))
    items.append(('faq', 'Частые вопросы'))
    return items

def build_content(a):
    slug = a['slug']
    url = f'https://kaznaexpert.ru/baza-znaniy/{slug}/'
    share_text = urllib.parse.quote(a['share'])
    share_url = urllib.parse.quote(url, safe='')
    toc = toc_items(a)
    toc_aside = '\n'.join(f'      <li><a href="#{i}">{esc(t)}</a></li>' for i, t in toc)
    toc_mob = ''.join(f'<li><a href="#{i}">{esc(t)}</a></li>' for i, t in toc)
    kf = '\n'.join(
        f'        <div class="kf"><div class="kf__n">{esc(n)}</div><div class="kf__t"><b>{esc(b)}</b> — {esc(t)}</div></div>'
        for n, b, t in a['keyfacts'])
    body = a['body'].strip('\n')
    howsteps = ''.join(f'\n      <li><b>{esc(s[0])}.</b> {s[1]}</li>' for s in a['howto'])
    take = ''.join(f'\n        <li>{x}</li>' for x in a['takeaways'])
    gloss = ''.join(f'\n      <div><dt>{esc(t)}</dt><dd>{esc(d)}</dd></div>' for t, d in a['glossary'])
    faq = ''
    for i, (q, ans) in enumerate(a['faq']):
        op = ' open' if i == 0 else ''
        faq += f'\n      <details{op}><summary>{esc(q)}</summary><p>{ans}</p></details>'
    # 17.08.2026: рендер источников вынесен в refs_render — f-string молча подставлял
    # repr() кортежа, когда data-файл отдавал ('текст','url') вместо готового HTML.
    refs = render_refs(a['refs'])
    cards = ''
    for c in a['related']:
        cards += (f'\n    <a class="card reveal" href="/baza-znaniy/{c[0]}/"><div class="card__cover">'
                  f'<span>{esc(c[1])}</span></div><div class="card__body"><span class="card__cat">База знаний</span>'
                  f'<h3 class="card__title">{esc(c[2])}</h3><div class="card__meta">{esc(c[3])}</div></div></a>')

    return f'''<div class="layout">
  <nav class="crumbs" aria-label="Хлебные крошки"><a href="/">Главная</a> › <a href="/baza-znaniy/">База знаний</a> › {esc(a['crumb'])}</nav>

  <aside class="toc" aria-label="Содержание">
    <div class="toc__label">Содержание</div>
    <ul class="toc__list" id="tocList">
{toc_aside}
    </ul>
  </aside>

  <article class="content" id="main">
    <div class="hero">
      <img class="hero__crest hero__crest--light" src="/img/logogold-crest.webp" alt="" aria-hidden="true" width="188" height="137" decoding="async" loading="lazy">
      <img class="hero__crest hero__crest--dark" src="/img/LogoWhite.png" alt="" aria-hidden="true" width="188" height="137" decoding="async" loading="lazy">
      <div class="eyebrow">База знаний · {esc(a['cat'])} <span class="fresh">Актуально на 2026</span></div>
    <h1>{esc(a['h1'])}</h1>
    <div class="byline"><span class="av">ЯМ</span><span>Автор: <a href="/komanda/mihailov-yaroslav/">Ярослав Михайлов</a>, главный эксперт</span><span class="dot">·</span><span>15+ лет в Казначействе</span><span class="dot">·</span><span>{a['read']} мин чтения</span><span class="dot">·</span><span>Обновлено {esc(a['updated'])}</span></div>
    </div>

    <div class="share">
      <span class="share__label">Поделиться:</span>
      <a href="https://t.me/share/url?url={share_url}&amp;text={share_text}" target="_blank" rel="noopener"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.56 8.25l-1.86 8.76c-.14.62-.5.77-1.02.48l-2.82-2.08-1.36 1.31c-.15.15-.28.28-.57.28l.2-2.89 5.27-4.76c.23-.2-.05-.32-.35-.12l-6.51 4.1-2.8-.88c-.61-.19-.62-.61.13-.9l10.95-4.22c.5-.18.95.12.79.85z"/></svg>Telegram</a>
      <button type="button" id="copyLink"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.07 0l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.07 0l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg><span>Копировать ссылку</span></button>
      <button type="button" id="printBtn"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9V2h12v7M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2M6 14h12v8H6z"/></svg>Скачать PDF</button>
    </div>

    <details class="mtoc"><summary>Содержание статьи</summary>
      <ol>
        {toc_mob}
      </ol>
    </details>

    <div class="tldr">{a['tldr']}</div>

    <section class="keyfacts grain" aria-label="Ключевые факты">
      <h2>Коротко о главном</h2>
      <div class="keyfacts__grid">
{kf}
      </div>
    </section>

{body}

    <div class="takeaways">
      <h2>Главное</h2>
      <ul>{take}
      </ul>
    </div>

    <h2 id="glossary">Глоссарий</h2>
    <dl class="gloss">{gloss}
    </dl>

    <h2 id="faq">Частые вопросы</h2>
    <div class="faq">{faq}
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
      <ol>{refs}
      </ol>
      <p class="refs__note">{a['refs_note']}</p>
    </div>
  </article>

  <aside class="rail">
    <form class="railform" id="leadForm" novalidate data-endpoint="/php/lead.php" data-source="{slug}">
      <div class="railform__badge">Разбор эксперта</div>
      <h3 class="railform__title">{esc(a['form_title'])}</h3>
      <p class="railform__sub">{esc(a['form_sub'])}</p>
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
  <div class="related__grid">{cards}
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

<section class="kz-sub" aria-labelledby="kzSubTitle" data-source="{slug}">
  <style>
  .kz-sub{{--i:var(--ink,#1A1A1A);--s:var(--sepia,#8B6F47);--l:var(--line,#e4ddd0);--c:var(--card,#fffdf8);--p:var(--paper,#FAF7F0);--m:var(--ink-mute,#8a8170);--sf:var(--ink-soft,#56524b);
    max-width:1240px;margin:40px auto;padding:0 24px;font-family:'Inter',system-ui,sans-serif}}
  .kz-sub__box{{position:relative;overflow:hidden;background:linear-gradient(135deg,var(--c),var(--p));border:1px solid var(--l);border-radius:20px;padding:34px 38px;display:grid;grid-template-columns:1.25fr 1fr;gap:34px;align-items:center}}
  .kz-sub__ic{{position:absolute;right:-26px;top:-20px;color:var(--s);opacity:.06;pointer-events:none}}
  .kz-sub__eyebrow{{display:inline-flex;align-items:center;gap:8px;font-size:11px;font-weight:600;letter-spacing:.05em;text-transform:uppercase;color:var(--s);background:rgba(139,111,71,.10);border:1px solid rgba(139,111,71,.22);padding:5px 11px;border-radius:20px;margin-bottom:14px}}
  .kz-sub__title{{font-family:'Playfair Display',Georgia,serif;font-weight:500;font-size:clamp(1.5rem,2vw+1rem,2rem);line-height:1.12;letter-spacing:-.01em;margin:0 0 12px;color:var(--i)}}
  .kz-sub__list{{list-style:none;margin:0;padding:0;display:grid;gap:8px}}
  .kz-sub__list li{{position:relative;padding-left:26px;font-size:14.5px;color:var(--sf);line-height:1.45}}
  .kz-sub__list li::before{{content:"";position:absolute;left:0;top:6px;width:16px;height:16px;border-radius:50%;background:rgba(139,111,71,.14)}}
  .kz-sub__list li::after{{content:"";position:absolute;left:5px;top:10px;width:5px;height:8px;border:solid var(--s);border-width:0 2px 2px 0;transform:rotate(45deg)}}
  .kz-sub__form{{background:var(--c);border:1px solid var(--l);border-radius:14px;padding:22px;position:relative}}
  .kz-sub__form h3{{font-family:'Playfair Display',serif;font-weight:500;font-size:18px;margin:0 0 4px;color:var(--i)}}
  .kz-sub__form p{{font-size:12.5px;color:var(--m);margin:0 0 14px;line-height:1.4}}
  .kz-sub__fld{{width:100%;font:inherit;font-size:14.5px;padding:12px 14px;margin-bottom:10px;border:1px solid var(--l);border-radius:10px;background:#fff;color:var(--i)}}
  .kz-sub__fld:focus{{outline:none;border-color:var(--s);box-shadow:0 0 0 3px rgba(139,111,71,.12)}}
  .kz-sub__hp{{position:absolute;left:-9999px;width:1px;height:1px;opacity:0}}
  .kz-sub__policy{{display:flex;gap:9px;align-items:flex-start;font-size:11.5px;color:var(--sf);margin:2px 0 12px;line-height:1.45}}
  .kz-sub__policy input{{margin-top:2px;accent-color:var(--s)}}
  .kz-sub__policy a{{color:var(--s)}}
  .kz-sub__btn{{width:100%;background:var(--i,#1A1A1A);color:#fff;border:none;font:inherit;font-weight:600;font-size:15px;padding:14px;border-radius:11px;cursor:pointer;min-height:50px;transition:background .18s}}
  .kz-sub__btn:hover{{background:var(--s)}}
  .kz-sub__msg{{font-size:12.5px;color:#b3261e;margin-top:8px;min-height:14px}}
  .kz-sub__ok{{display:none;text-align:center;padding:8px 0}}
  .kz-sub__ok.on{{display:block}}
  .kz-sub__ok-ic{{width:50px;height:50px;border-radius:50%;background:rgba(139,111,71,.14);color:var(--s);display:flex;align-items:center;justify-content:center;margin:0 auto 12px}}
  .kz-sub__ok h3{{margin:0 0 6px}}
  .kz-sub__ok p{{font-size:13.5px;color:var(--sf);line-height:1.5}}
  @media(max-width:760px){{.kz-sub__box{{grid-template-columns:1fr;gap:22px;padding:26px 22px}}}}
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
  (function(){{
    var form=document.getElementById('kzSubForm'); if(!form) return;
    var msg=document.getElementById('kzSubMsg'), ok=document.getElementById('kzSubOk');
    var src=(form.closest('.kz-sub')&&form.closest('.kz-sub').dataset.source)||'article';
    form.addEventListener('submit',function(e){{
      e.preventDefault();
      if(form.company_extra.value) return;
      var email=form.email.value.trim();
      if(!/^[^@\\s]+@[^@\\s]+\\.[^@\\s]+$/.test(email)){{ show('Проверьте адрес e-mail'); return; }}
      if(!form.consent.checked){{ show('Подтвердите согласие'); return; }}
      var btn=form.querySelector('.kz-sub__btn'), orig=btn.textContent; btn.disabled=true; btn.textContent='Отправляем…';
      fetch(form.dataset.endpoint,{{method:'POST',headers:{{'Content-Type':'application/json'}},body:JSON.stringify({{email:email,consent:true,source:src,page_url:location.href}})}})
        .then(function(r){{ if(!r.ok) throw 0; return r; }})
        .then(function(){{ succeed(); }})
        .catch(function(){{ btn.disabled=false; btn.textContent=orig; show('Не удалось отправить. Попробуйте ещё раз.'); }});
      function succeed(){{
        [].forEach.call(form.children,function(el){{ if(el!==ok) el.style.display='none'; }});
        ok.classList.add('on');
        try{{ if(typeof ym==='function') ym(94305898,'reachGoal','subscribe',{{source:src}}); }}catch(_){{}}
      }}
    }});
    function show(t){{ msg.hidden=false; msg.textContent=t; }}
  }})();
  </script>
</section>'''

def build_schema(a):
    slug = a['slug']
    url = f'https://kaznaexpert.ru/baza-znaniy/{slug}/'
    article = {"@context":"https://schema.org","@type":"Article","headline":a['h1'],
        "description":a['meta_desc'],"inLanguage":"ru-RU","datePublished":a['date'],"dateModified":a['date'],
        "author":{"@type":"Person","name":PERSON[0],"jobTitle":PERSON[1],"url":PERSON[2]},
        "publisher":{"@type":"Organization","name":"КазнаЭксперт","url":"https://kaznaexpert.ru",
            "logo":{"@type":"ImageObject","url":"https://kaznaexpert.ru/img/logogold.png"}},
        "image":"https://kaznaexpert.ru/img/og-image.png",
        "mainEntityOfPage":{"@type":"WebPage","@id":url}}
    crumbs = {"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[
        {"@type":"ListItem","position":1,"name":"Главная","item":"https://kaznaexpert.ru/"},
        {"@type":"ListItem","position":2,"name":"База знаний","item":"https://kaznaexpert.ru/baza-znaniy/"},
        {"@type":"ListItem","position":3,"name":a['crumb'],"item":url}]}
    faqpage = {"@context":"https://schema.org","@type":"FAQPage","mainEntity":[
        {"@type":"Question","name":q,"acceptedAnswer":{"@type":"Answer","text":re.sub('<[^>]+>','',ans)}}
        for q, ans in a['faq']]}
    howto = {"@context":"https://schema.org","@type":"HowTo","name":a['howto_name'],"inLanguage":"ru-RU","step":[
        {"@type":"HowToStep","position":i+1,"name":s[0],"text":re.sub('<[^>]+>','',s[1])}
        for i, s in enumerate(a['howto'])]}
    terms = {"@context":"https://schema.org","@type":"DefinedTermSet","name":a['termset_name'],"inLanguage":"ru-RU",
        "hasDefinedTerm":[{"@type":"DefinedTerm","name":t,"description":d} for t, d in a['glossary']]}
    person = {"@context":"https://schema.org","@type":"Person","name":PERSON[0],"jobTitle":PERSON[1],
        "worksFor":{"@type":"Organization","name":"КазнаЭксперт","url":"https://kaznaexpert.ru"},
        "url":PERSON[2],"sameAs":["https://t.me/Kaznaexpert","https://www.rusprofile.ru/ip/321784700367672"]}
    blocks = [article, crumbs, faqpage, howto, terms, person]
    if a.get('extra_schema'):
        blocks.append(a['extra_schema'])
    out = ''
    for b in blocks:
        out += '<script type="application/ld+json">\n' + json.dumps(b, ensure_ascii=False) + '\n</script>\n'
    return out.rstrip()

def gen(assets):
    for a in DATA:
        c = build_content(a)
        s = build_schema(a)
        # валидация: каждый ld+json парсится
        for blk in re.findall(r'<script type="application/ld\+json">(.*?)</script>', s, flags=re.S):
            json.loads(blk)
        open(os.path.join(assets, a['slug']+'-content.html'), 'w', encoding='utf-8').write(c)
        open(os.path.join(assets, a['slug']+'-schema.html'), 'w', encoding='utf-8').write(s)
        words = len(re.sub('<[^>]+>',' ', c).split())
        print(f'gen {a["slug"]}: words={words} ldjson={s.count("application/ld+json")}')

# ---------------- СБОРКА В РЕПО ----------------
def repo_assemble(repo, assets):
    SHELL = os.path.join(repo, 'baza-znaniy/svedeniya-ob-operaciyah-s-celevymi-sredstvami/index.php')
    src = open(SHELL, encoding='utf-8').read()
    prefix = src[:src.index('<div class="layout">')]
    suffix = src[src.index('<footer class="v2-footer"'):]
    for a in DATA:
        slug = a['slug']; url = f'https://kaznaexpert.ru/baza-znaniy/{slug}/'
        assert len(a['title']) <= 70, (slug, 'title', len(a['title']))
        assert len(a['meta_desc']) <= 165, (slug, 'desc', len(a['meta_desc']))
        p = prefix
        p = re.sub(r'<title>.*?</title>', '<title>'+a['title']+'</title>', p, flags=re.S)
        p = re.sub(r'<meta name="description" content=".*?">', '<meta name="description" content="'+a['meta_desc']+'">', p, flags=re.S)
        p = re.sub(r'<link rel="canonical" href=".*?">', '<link rel="canonical" href="'+url+'">', p)
        p = re.sub(r'<meta property="og:type" content=".*?">', '<meta property="og:type" content="article">', p)
        p = re.sub(r'<meta property="og:title" content=".*?">', '<meta property="og:title" content="'+a['ogt']+'">', p)
        p = re.sub(r'<meta property="og:description" content=".*?">', '<meta property="og:description" content="'+a['ogd']+'">', p)
        p = re.sub(r'<meta property="og:url" content=".*?">', '<meta property="og:url" content="'+url+'">', p)
        p = re.sub(r'<meta property="og:image:alt" content=".*?">', '<meta property="og:image:alt" content="'+a['ogt']+' — КазнаЭксперт">', p)
        p = re.sub(r'<meta name="twitter:title" content=".*?">', '<meta name="twitter:title" content="'+a['ogt']+'">', p)
        p = re.sub(r'<meta name="twitter:description" content=".*?">', '<meta name="twitter:description" content="'+a['ogd']+'">', p)
        p = re.sub(r'window\.YM_PARAMS = \{.*?\};', 'window.YM_PARAMS = {page_type:"cluster", cluster:"'+a['cluster']+'"};', p, flags=re.S)
        p = re.sub(r'<script type="application/ld\+json">.*?</script>\s*', '', p, flags=re.S)
        schema = open(os.path.join(assets, slug+'-schema.html'), encoding='utf-8').read().strip()
        m = re.search(r'<script>window\.YM_PARAMS = \{.*?\};</script>', p, flags=re.S)
        assert m, 'YM_PARAMS not found '+slug
        p = p.replace(m.group(0), m.group(0)+'\n\n'+schema+'\n')
        content = open(os.path.join(assets, slug+'-content.html'), encoding='utf-8').read().rstrip()
        out = p + content + '\n\n' + suffix
        d = os.path.join(repo, 'baza-znaniy', slug); os.makedirs(d, exist_ok=True)
        open(os.path.join(d, 'index.php'), 'w', encoding='utf-8').write(out)
        ld = out.count('application/ld+json'); lay = out.count('<div class="layout">')
        # ГЕЙТ JSON-LD: каждый ld+json блок ФИНАЛЬНОЙ страницы обязан парситься.
        # GSC-ошибка «отсутствует символ "," или "}"» = битый ld+json после сборки.
        final_blocks = re.findall(r'<script type="application/ld\+json">(.*?)</script>', out, flags=re.S)
        for bi, blk in enumerate(final_blocks):
            try:
                json.loads(blk)
            except Exception as e:
                raise AssertionError(('ld+json invalid in FINAL page', slug, bi, str(e)))
        print(f'built /baza-znaniy/{slug}/ bytes={len(out)} ldjson={ld} layoutdiv={lay} ldjson_valid={len(final_blocks)}')
        expected_ld = 6 + (1 if a.get('extra_schema') else 0)
        assert ld == expected_ld and lay == 1, ('integrity', slug, ld, expected_ld, lay)

# контекстные входящие ссылки (паутина) + related-карточки
CTX = []
RELATED = {}
CARD = {}
def load_links():
    import links48 as links11
    CTX.extend(links11.CTX); RELATED.update(links11.RELATED); CARD.update(links11.CARD)

def card_html(slug):
    cover, title, meta = CARD[slug]
    return (f'<!-- auto-related:{slug} --><a class="card reveal" href="/baza-znaniy/{slug}/">'
            f'<div class="card__cover"><span>{cover}</span></div><div class="card__body">'
            f'<span class="card__cat">База знаний</span><h3 class="card__title">{title}</h3>'
            f'<div class="card__meta">{meta}</div></div></a>')

def interlink(repo):
    edited = set()
    for pg, new_slug, inner in CTX:
        path = os.path.join(repo, 'baza-znaniy', pg, 'index.php')
        if not os.path.exists(path):
            print(f'  SKIP ctx (no file): {pg}'); continue
        h = open(path, encoding='utf-8').read()
        if f'auto-ctx:{new_slug}' in h or f'/baza-znaniy/{new_slug}/' in h:
            print(f'  ctx skip (linked): {pg} -> {new_slug}'); continue
        ins = f'    <p data-ctx="auto-ctx:{new_slug}">{inner}</p>\n'
        anchor = '<div class="takeaways">'
        if anchor not in h:
            anchor = '<div class="author">'
        k = h.index(anchor); ls = h.rfind('\n', 0, k) + 1
        h = h[:ls] + ins + h[ls:]
        open(path, 'w', encoding='utf-8').write(h)
        edited.add(pg); print(f'  ctx inserted: {pg} -> {new_slug}')
    for pg, slugs in RELATED.items():
        path = os.path.join(repo, 'baza-znaniy', pg, 'index.php')
        if not os.path.exists(path):
            print(f'  SKIP related (no file): {pg}'); continue
        h = open(path, encoding='utf-8').read()
        m = re.search(r'(<div class="related__grid">)(.*?)(</div>\s*</section>)', h, flags=re.S)
        if not m:
            print(f'  SKIP related (no grid): {pg}'); continue
        add = ''
        for s in slugs:
            if f'auto-related:{s}' in h or f'/baza-znaniy/{s}/' in m.group(2):
                continue
            add += '\n    ' + card_html(s)
        if add:
            ng = m.group(1) + m.group(2).rstrip() + add + '\n  ' + m.group(3)
            h = h[:m.start()] + ng + h[m.end():]
            open(path, 'w', encoding='utf-8').write(h)
            edited.add(pg); print(f'  related card: {pg} += {slugs}')
    return sorted(edited)

# точечная правка устаревшей нормы (КоАП 15.37 утратила силу с 01.03.2025 -> 7.30.3)
LAWFIX = []
def lawfix(repo):
    import links48 as links11
    fixed = []
    for pg, old, new in getattr(links11, 'LAWFIX', []):
        path = os.path.join(repo, 'baza-znaniy', pg, 'index.php')
        if not os.path.exists(path):
            print(f'  SKIP lawfix (no file): {pg}'); continue
        h = open(path, encoding='utf-8').read()
        if old in h:
            h = h.replace(old, new)
            open(path, 'w', encoding='utf-8').write(h)
            fixed.append((pg, old)); print(f'  lawfix: {pg}: "{old[:40]}..." -> updated')
        else:
            print(f'  lawfix NOTFOUND: {pg}: "{old[:40]}..."')
    return fixed

def update_sitemap(repo):
    path = os.path.join(repo, 'sitemap.xml')
    sm = open(path, encoding='utf-8').read()
    today = datetime.date.today().isoformat()
    for a in DATA:
        url = f'https://kaznaexpert.ru/baza-znaniy/{a["slug"]}/'
        if url not in sm:
            entry = f'  <url>\n    <loc>{url}</loc>\n    <lastmod>{today}</lastmod>\n    <changefreq>monthly</changefreq>\n    <priority>0.7</priority>\n  </url>\n'
            sm = sm.replace('</urlset>', entry + '</urlset>'); print('sitemap +', url)
    open(path, 'w', encoding='utf-8').write(sm)

if __name__ == '__main__':
    here = os.path.dirname(os.path.abspath(__file__))
    if len(sys.argv) == 1:
        gen(here); print('GEN-ONLY done')
    else:
        repo = sys.argv[1]
        assets = sys.argv[2] if len(sys.argv) > 2 else here
        gen(assets)
        repo_assemble(repo, assets)
        load_links()
        edited = interlink(repo)
        fixed = lawfix(repo)
        update_sitemap(repo)
        print('EDITED=' + ','.join(edited))
        print('LAWFIXED=' + ','.join(p for p, _ in fixed))
        # ГЕЙТ перед коммитом. 1) Весь репозиторий /baza-znaniy/ — на битый ld+json
        # (включая страницы, затронутые перелинковкой). 2) Новые slug — полная статейная проверка.
        vb = os.path.join(here, "validate_built.py")
        rc_repo = os.system(f'python3 "{vb}" "{repo}"')
        new_slugs = ' '.join(a['slug'] for a in DATA)
        rc_new = os.system(f'python3 "{vb}" "{repo}" {new_slugs}')
        if rc_repo != 0 or rc_new != 0:
            print('LDJSON-GATE=FAIL — публикация остановлена'); sys.exit(1)
        print('LDJSON-GATE=PASS')
