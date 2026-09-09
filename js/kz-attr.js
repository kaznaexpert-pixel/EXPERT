/* kz-attr.js — атрибуция заявок и общие цели Метрики (PROMPT-konversiya-fix 09.09.2026).
   Подключается на всех страницах рядом с cookie-consent.js. Ничего не рисует.
   1) utm-метки, yclid, gclid из URL + referrer/landing первой страницы сессии → sessionStorage kz_attr;
   2) обёртка fetch: в JSON любой отправки на /php/lead.php и /php/subscribe.php дописываются
      utm, yclid, gclid, referrer, landing, ym_uid (getClientID), ts_load, ts_send;
   3) цели: click_max — везде; click_phone/click_telegram/form_start — только если на странице нет
      инлайн-обработчика (window.__kzInlineGoals), чтобы не дублировать. */
(function () {
  var KEY = 'kz_attr', YM = window.YM_ID || 94305898, loadTs = Date.now();
  function load() { try { return JSON.parse(sessionStorage.getItem(KEY) || 'null') || {}; } catch (e) { return {}; } }
  function save(a) { try { sessionStorage.setItem(KEY, JSON.stringify(a)); } catch (e) {} }
  var attr = load(), q = null;
  try { q = new URLSearchParams(location.search); } catch (e) {}
  if (q) ['utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content', 'yclid', 'gclid'].forEach(function (k) {
    var v = q.get(k); if (v) attr[k] = String(v).slice(0, 100);
  });
  if (!attr.landing) attr.landing = location.pathname.slice(0, 200);
  if (!attr.referrer) attr.referrer = (document.referrer || '').slice(0, 200);
  if (!attr.first_visit) attr.first_visit = new Date().toISOString();
  save(attr);

  var ymUid = '';
  function askUid() { try { if (typeof ym === 'function') ym(YM, 'getClientID', function (id) { ymUid = id || ''; }); } catch (e) {} }
  setTimeout(askUid, 1500); setTimeout(askUid, 5000);

  var of = window.fetch;
  if (of) window.fetch = function (url, opt) {
    try {
      var u = String((url && url.url) || url || '');
      if (/\/php\/(lead|subscribe)\.php/.test(u) && opt && typeof opt.body === 'string') {
        var d = JSON.parse(opt.body);
        d.utm = { source: attr.utm_source || '', medium: attr.utm_medium || '', campaign: attr.utm_campaign || '', term: attr.utm_term || '', content: attr.utm_content || '' };
        d.yclid = attr.yclid || ''; d.gclid = attr.gclid || '';
        d.referrer = attr.referrer || ''; d.landing = attr.landing || '';
        d.ym_uid = ymUid; d.ts_load = loadTs; d.ts_send = Date.now();
        opt = Object.assign({}, opt, { body: JSON.stringify(d) });
      }
    } catch (e) {}
    return of.call(this, url, opt);
  };

  function g(n, p) { try { if (typeof ym === 'function') ym(YM, 'reachGoal', n, p || undefined); } catch (e) {} }
  document.addEventListener('click', function (e) {
    var a = e.target && e.target.closest ? e.target.closest('a') : null; if (!a) return;
    var h = a.getAttribute('href') || '';
    if (/max\.ru\//.test(h)) g('click_max');
    if (window.__kzInlineGoals) return;
    if (h.indexOf('tel:') === 0) g('click_phone');
    else if (/t\.me\//.test(h) && h.indexOf('/share') < 0) g('click_telegram');
  }, true);
  var started = {};
  document.addEventListener('focusin', function (e) {
    var f = e.target && e.target.form; if (!f) return;
    var id = f.id || f.getAttribute('name') || f.className || 'form';
    if (window.__kzInlineGoals && f.id === 'leadForm') return;
    if (!f.dataset.endpoint && !/lead|contact|hero|kg-lead|kzSub/i.test(id)) return;
    if (started[id]) return; started[id] = 1; g('form_start', { form: id });
  }, true);
})();
