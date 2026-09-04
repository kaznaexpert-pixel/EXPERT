/* kg-lead.js — блок перехода из статьи базы знаний в услугу.
   Вставляется скриптом перед H2, который приходится примерно на первую треть текста
   (по накопленной длине текста, а не по номеру заголовка). HTML статьи не меняется.
   Страницы с числом H2 меньше четырёх пропускаются. Показывается только на страницах
   из карты CONFIG — для остальных скрипт ничего не делает.

   Отправка — на тот же /php/lead.php и в том же формате, что остальные формы сайта.
   Цель Метрики при успехе: ym(94305898,'reachGoal','lead',{source:'article-mid'}).
   События воронки (чтобы видеть отвал по полям): kglead_view, kglead_focus_name,
   kglead_focus_phone, kglead_fill_name, kglead_fill_phone, kglead_consent,
   kglead_submit, kglead_error.

   Подключение одной строкой перед </body>:
   <link rel="stylesheet" href="/assets/kg-lead.css"><script src="/assets/kg-lead.js" defer></script>
*/
(function () {
  'use strict';
  var YM_ID = 94305898;
  var ENDPOINT = '/php/lead.php';
  var MIN_H2 = 4;

  /* slug → содержимое блока. Тон не продающий: человек читает, как сделать самому,
     и видит альтернативу. Заголовок ≤ 60 знаков, текст ≤ 60 слов. */
  var CONFIG = {
    'normy-pribyli-goz': {
      eyebrow: 'Если считаете сами',
      title: 'Ошибка в расчёте прибыли всплывает на проверке',
      text: 'Неверная база или норма рентабельности — это замечание военного представителя и пересчёт цены задним числом. Если контракт уже идёт, проще проверить расчёт до подачи, чем защищать его после. Разбираем калькуляцию и собираем <a href="/uslugi/sostavlenie-rkm/">комплект РКМ</a> под ключ.',
      cta: 'Проверить расчёт'
    },
    'kaznacheyskoe-soprovozhdenie-po-44-fz': {
      eyebrow: 'Если контракт уже подписан',
      title: 'Попали под сопровождение — с чего начать',
      text: 'Открыть лицевой счёт, настроить «Электронный бюджет», подготовить первые сведения и провести платёж — это четыре разных процедуры с разными сроками. Первый круг по каждой обычно уходит на возвраты. Можно пройти его с человеком, который делал это сотни раз: <a href="/uslugi/kaznacheyskoe-soprovozhdenie/">сопровождение контракта</a>.',
      cta: 'Обсудить контракт'
    },
    'chto-takoe-gosudarstvennyy-oboronnyy-zakaz': {
      eyebrow: 'Если это первый контракт по ГОЗ',
      title: 'Объём требований по ГОЗ виден не сразу',
      text: 'Отдельный счёт, раздельный учёт, санкционирование каждого платежа, отчётность по цепочке кооперации — всё это включается с первого дня исполнения, а не по мере готовности. Первый контракт проще пройти с проводником: <a href="/uslugi/soprovozhdenie-avans/">сопровождение контракта по гособоронзаказу</a>.',
      cta: 'Разобрать контракт'
    },
    'razdelnyy-uchet-goz-v-1s': {
      eyebrow: 'Если учёт уже запущен с ошибками',
      title: 'Настройка съедает недели, ошибка вскроется на проверке',
      text: 'Раздельный учёт, поставленный «как получилось», при проверке разваливается на расхождениях между калькуляцией и регистрами. Переделывать задним числом дольше и дороже, чем поставить сразу. Приводим учёт в порядок до проверки: <a href="/uslugi/vosstanovlenie-razdelnogo-ucheta/">восстановление раздельного учёта</a>.',
      cta: 'Проверить учёт'
    },
    'kody': {
      eyebrow: 'Если платёж уже возвращали',
      title: 'Неверный код — возврат платежа и сдвиг срока',
      text: 'Код направления расходования проверяется на каждом платеже, и один неверный разряд возвращает распоряжение целиком. Пока причина не устранена, возврат повторится. При <a href="/uslugi/kaznacheyskoe-soprovozhdenie/">сопровождении контракта</a> коды подбирает эксперт до отправки, а не после отказа.',
      cta: 'Обсудить платежи'
    },
    'igk-v-schete-fakture-i-upd': {
      eyebrow: 'Если документ вернули',
      title: 'Ошибка в ИГК останавливает платёж',
      text: 'Идентификатор проверяется в счёте-фактуре, УПД, платёжном поручении и распоряжении — расхождение в любом из них означает возврат и повторный круг согласования. При <a href="/uslugi/kaznacheyskoe-soprovozhdenie/">сопровождении контракта</a> реквизиты в каждом документе сверяет эксперт до подачи.',
      cta: 'Проверить документы'
    }
  };

  /* Страницы вне CONFIG: блок по кластеру страницы (window.YM_PARAMS.cluster) — 04.09.2026,
     решение владельца: форма заявки в середине каждой статьи базы знаний. */
  var DEFAULTS = {
    schet: { eyebrow: 'Если счёт нужен к сроку', title: 'Открытие счёта в казначействе — два рабочих дня, с первой подачи',
      text: 'Возврат пакета из ТОФК стоит неделю, а сроки по контракту уже идут. Берём анализ контракта, документы, сводный реестр и настройку «Электронного бюджета» на себя: <a href="/uslugi/otkrytie-scheta/">открытие счёта</a> — 35 000 ₽, гарантия в договоре.', cta: 'Открыть счёт' },
    goz: { eyebrow: 'Если контракт по ГОЗ', title: 'Отдельный счёт, ИГК, раздельный учёт и военпред — с первого дня',
      text: 'По гособоронзаказу каждый платёж, каждый документ и каждая калькуляция проверяются отдельно, и ошибка в одном звене останавливает деньги. Ведём цепочку целиком: <a href="/uslugi/kaznacheyskoe-soprovozhdenie/">сопровождение контракта по ГОЗ</a> — 105 000 ₽ в месяц без лимита операций.', cta: 'Обсудить контракт' },
    uchet: { eyebrow: 'Если учёт уже расходится', title: 'Раздельный учёт проверят по регистрам, а не по объяснениям',
      text: 'Операции без привязки к контракту, обрезанные назначения платежей, дубли — при проверке это расхождения между калькуляцией и учётом. Приводим учёт в порядок от выписок до отчёта: <a href="/uslugi/vosstanovlenie-razdelnogo-ucheta/">восстановление раздельного учёта</a> — 99 000 ₽.', cta: 'Проверить учёт' },
    kontrol: { eyebrow: 'Если платежи уже остановились', title: 'Возврат, приостановка, предписание — есть порядок действий',
      text: 'Каждый день простоя — пеня и риск расторжения. Находим причину, готовим документы и доводим платежи до исполнения: <a href="/uslugi/spasenie-kontrakta/">спасение контракта</a> — экспресс-аудит 35 000 ₽, дальше по плану.', cta: 'Разблокировать платежи' },
    obuchenie: { eyebrow: 'Если хотите вести сами', title: 'Один курс — и сопровождение ведёт ваш сотрудник, а не подрядчик',
      text: 'Девять академических часов один на один с экспертом Федерального казначейства, на ваших контрактах: счёт, «Электронный бюджет», сведения и коды, санкционирование, учёт. <a href="/uslugi/obuchenie-kaznacheyskomu-soprovozhdeniyu/">Обучение казначейскому сопровождению</a> — 150 000 ₽.', cta: 'Записаться на обучение' },
    ks: { eyebrow: 'Если контракт уже под сопровождением', title: 'Первый круг по каждой процедуре обычно уходит на возвраты',
      text: 'Счёт, сведения, санкционирование, отчётность — четыре процедуры с разными сроками и разными причинами отказов. Можно пройти их с человеком, который делал это сотни раз: <a href="/uslugi/kaznacheyskoe-soprovozhdenie/">сопровождение контракта</a> — 65 000 ₽ постоплата, 105 000 ₽ в месяц аванс и ГОЗ.', cta: 'Обсудить контракт' }
  };
  var CLUSTER_MAP = { schet: 'schet', otkrytie: 'schet', scheta: 'schet', goz: 'goz', uchet: 'uchet', kontrol: 'kontrol', peni: 'kontrol',
    operacii: 'obuchenie', sankcionirovanie: 'obuchenie', kody: 'obuchenie', giis: 'obuchenie', ecp: 'obuchenie', 'elektronnyy-byudzhet': 'obuchenie' };
  function defaultCfg() {
    var cl = (window.YM_PARAMS && window.YM_PARAMS.cluster) || '';
    return DEFAULTS[CLUSTER_MAP[cl] || 'ks'];
  }

  function slugOf() {
    var m = location.pathname.match(/\/baza-znaniy\/([^\/]+)\/?/);
    return m ? m[1] : null;
  }
  function goal(name, params) {
    try { if (typeof ym === 'function') ym(YM_ID, 'reachGoal', name, params || {}); } catch (e) {}
  }
  function textLen(el) { return (el.textContent || '').replace(/\s+/g, ' ').length; }

  /* H2, перед которым накопленная длина текста впервые превышает треть всего текста статьи */
  function findAnchor(content) {
    var heads = [].slice.call(content.querySelectorAll('h2'));
    if (heads.length < MIN_H2) return null;
    var total = textLen(content), acc = 0, node = content.firstElementChild;
    while (node) {
      if (node.tagName === 'H2' && acc >= total / 3) return node;
      acc += textLen(node);
      node = node.nextElementSibling;
    }
    return null;
  }

  function build(slug, cfg) {
    var box = document.createElement('aside');
    box.className = 'kg-lead';
    box.setAttribute('aria-label', 'Помощь эксперта');
    box.innerHTML =
      '<span class="kg-lead__eyebrow">' + cfg.eyebrow + '</span>' +
      '<div class="kg-lead__title">' + cfg.title + '</div>' +
      '<p class="kg-lead__text">' + cfg.text + '</p>' +
      '<form class="kg-lead__form" novalidate>' +
        '<input class="kg-lead__fld" name="name" placeholder="Имя" autocomplete="name" maxlength="80">' +
        '<input class="kg-lead__fld" name="phone" type="tel" placeholder="+7 (___) ___-__-__" autocomplete="tel" inputmode="tel">' +
        '<button class="kg-lead__btn" type="submit">' + cfg.cta + '</button>' +
        '<input class="kg-lead__hp" name="company_extra" tabindex="-1" autocomplete="off" aria-hidden="true">' +
        '<label class="kg-lead__policy"><input type="checkbox" name="consent"><span>Согласен с <a href="/privacy/" target="_blank" rel="noopener">политикой обработки данных</a>. Не передаём третьим лицам.</span></label>' +
        '<p class="kg-lead__msg" hidden></p>' +
      '</form>' +
      '<p class="kg-lead__ok">Заявка принята. Эксперт перезвонит в течение 15 минут в рабочее время (9:00–21:00 МСК).</p>';

    var form = box.querySelector('form'), msg = box.querySelector('.kg-lead__msg');
    /* поля берём через elements: form.name — встроенное свойство формы, на него полагаться нельзя */
    var F = { name: form.elements.namedItem('name'), phone: form.elements.namedItem('phone'),
              consent: form.elements.namedItem('consent'), hp: form.elements.namedItem('company_extra') };
    var SRC = 'article-mid/' + slug;
    var seen = {};
    function once(name) { if (seen[name]) return; seen[name] = 1; goal(name, { source: SRC }); }

    /* воронка по полям: фокус → заполнение → согласие */
    F.name.addEventListener('focus', function () { once('kglead_focus_name'); });
    F.phone.addEventListener('focus', function () { once('kglead_focus_phone'); });
    F.name.addEventListener('change', function () { if (F.name.value.trim().length >= 2) once('kglead_fill_name'); });
    F.phone.addEventListener('change', function () { if (F.phone.value.replace(/\D/g, '').length >= 10) once('kglead_fill_phone'); });
    F.consent.addEventListener('change', function () { if (F.consent.checked) once('kglead_consent'); });

    function show(t) { msg.hidden = false; msg.textContent = t; }

    form.addEventListener('submit', function (e) {
      e.preventDefault();
      if (F.hp.value) return;
      once('kglead_submit');
      if (F.name.value.trim().length < 2 || F.phone.value.replace(/\D/g, '').length < 10) { show('Проверьте имя и телефон'); return; }
      if (!F.consent.checked) { show('Подтвердите согласие на обработку данных'); return; }
      var btn = form.querySelector('.kg-lead__btn'), orig = btn.textContent;
      btn.disabled = true; btn.textContent = 'Отправляем…';
      var data = {
        phone: F.phone.value.trim(),
        name: F.name.value.trim(),
        source: SRC,
        consent_pd: true,
        consent_pd_text: 'Согласие на обработку ПДн (источник: ' + SRC + ')',
        consent_at: new Date().toISOString(),
        page_url: location.href
      };
      fetch(ENDPOINT, { method: 'POST', headers: { 'Content-Type': 'application/json' }, body: JSON.stringify(data) })
        .then(function (r) { if (!r.ok) throw 0; return r; })
        .then(function () {
          box.classList.add('is-done');
          goal('lead', { source: 'article-mid' });
        })
        .catch(function () {
          btn.disabled = false; btn.textContent = orig;
          goal('kglead_error', { source: SRC });
          show('Не удалось отправить. Позвоните +7 981 833-10-10 или напишите в Telegram.');
        });
    });
    return box;
  }

  function init() {
    var slug = slugOf();
    if (!slug) return;
    var cfg = CONFIG[slug] || defaultCfg();
    if (!cfg) return;
    var content = document.querySelector('article.content, .content');
    if (!content) return;
    var anchor = findAnchor(content);
    if (!anchor) return;
    var box = build(slug, cfg);
    anchor.parentNode.insertBefore(box, anchor);
    /* показ считаем по факту попадания во вьюпорт, а не по вставке */
    if (typeof window.IntersectionObserver === 'function') {
      var io = new IntersectionObserver(function (es) {
        es.forEach(function (en) { if (en.isIntersecting) { goal('kglead_view', { source: 'article-mid/' + slug }); io.disconnect(); } });
      }, { threshold: 0.4 });
      io.observe(box);
    } else { goal('kglead_view', { source: 'article-mid/' + slug }); }
  }

  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', init);
  else init();
})();
