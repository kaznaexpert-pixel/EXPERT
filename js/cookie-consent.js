/* ============================================================
 * Cookie consent (152-ФЗ) — без сторонних библиотек.
 *
 * Категории:
 *  - necessary  — всегда включены (работа сайта, форма, хранение выбора).
 *  - analytics  — Яндекс.Метрика (РФ). Грузится ТОЛЬКО после согласия.
 *
 * Google Analytics удалён полностью — трансграничной передачи ПДн нет.
 * ============================================================ */
(function () {
  'use strict';

  var STORAGE_KEY = 'kz_cookie_consent_v1';
  var METRIKA_ID = 94305898;

  function readConsent() {
    try {
      var raw = localStorage.getItem(STORAGE_KEY);
      return raw ? JSON.parse(raw) : null;
    } catch (_) {
      return null;
    }
  }

  function saveConsent(obj) {
    try {
      localStorage.setItem(STORAGE_KEY, JSON.stringify(obj));
    } catch (_) {
      /* приватный режим — заявку это не блокирует */
    }
  }

  // === Яндекс.Метрика — инициализация только при согласии на аналитику ===
  var metrikaLoaded = false;
  function loadMetrika() {
    if (metrikaLoaded || typeof window.ym === 'function') return;
    metrikaLoaded = true;
    (function (m, e, t, r, i, k, a) {
      m[i] = m[i] || function () { (m[i].a = m[i].a || []).push(arguments); };
      m[i].l = 1 * new Date();
      for (var j = 0; j < e.scripts.length; j++) { if (e.scripts[j].src === r) { return; } }
      k = e.createElement(t); a = e.getElementsByTagName(t)[0];
      k.async = 1; k.src = r; a.parentNode.insertBefore(k, a);
    })(window, document, 'script', 'https://mc.yandex.ru/metrika/tag.js', 'ym');
    window.ym(METRIKA_ID, 'init', {
      clickmap: true,
      trackLinks: true,
      accurateTrackBounce: true,
      webvisor: true,
      ecommerce: 'dataLayer'
    });
  }

  function applyConsent(c) {
    if (c && c.analytics) loadMetrika();
  }

  // === DOM ===
  var banner, modal;

  function show(el) { if (el) el.hidden = false; }
  function hide(el) { if (el) el.hidden = true; }

  function on(id, fn) {
    var el = document.getElementById(id);
    if (el) el.addEventListener('click', fn);
  }

  function commit(analytics) {
    var c = {
      necessary: true,
      analytics: !!analytics,
      ts: new Date().toISOString()
    };
    saveConsent(c);
    applyConsent(c);
    hide(banner);
    hide(modal);
  }

  function openModal() {
    var existing = readConsent();
    var toggle = document.getElementById('cookie-cat-analytics');
    // по умолчанию аналитика предложена включённой; при повторном открытии — текущий выбор
    if (toggle) toggle.checked = existing ? !!existing.analytics : true;
    show(modal);
  }

  function resetConsent(e) {
    if (e) e.preventDefault();
    try { localStorage.removeItem(STORAGE_KEY); } catch (_) {}
    hide(modal);
    show(banner);
  }

  function wire() {
    on('cookie-accept-all', function () { commit(true); });
    on('cookie-reject', function () { commit(false); });
    on('cookie-settings', openModal);
    on('cookie-modal-save', function () {
      var toggle = document.getElementById('cookie-cat-analytics');
      commit(toggle ? toggle.checked : false);
    });
    on('cookie-modal-close', function () { hide(modal); });
    on('cookie-modal-backdrop', function () { hide(modal); });

    var resets = document.querySelectorAll('[data-cookie-reset]');
    for (var i = 0; i < resets.length; i++) {
      resets[i].addEventListener('click', resetConsent);
    }
  }

  function init() {
    banner = document.getElementById('cookie-banner');
    modal = document.getElementById('cookie-modal');
    wire();

    var existing = readConsent();
    if (existing) {
      applyConsent(existing);
    } else {
      show(banner);
    }
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();

/* ============================================================
 * Маска телефона +7 (XXX) XXX-XX-XX — без зависимостей.
 * Навешивается на все input[type=tel] / input[name=phone].
 * ============================================================ */
(function () {
  'use strict';
  function format(value) {
    var d = (value || '').replace(/\D/g, '');
    if (!d) return '';
    if (d[0] === '8') d = '7' + d.slice(1);
    else if (d[0] !== '7') d = '7' + d;           // RU по умолчанию
    d = d.slice(0, 11);
    var code = d.substring(1, 4), a = d.substring(4, 7), b = d.substring(7, 9), c = d.substring(9, 11);
    var out = '+7';
    if (code) out += ' (' + code;
    if (d.length > 4) out += ') ' + a;
    if (d.length > 7) out += '-' + b;
    if (d.length > 9) out += '-' + c;
    return out;
  }
  function attach(inp) {
    if (inp.dataset.phoneMask) return;
    inp.dataset.phoneMask = '1';
    inp.addEventListener('input', function () {
      var start = inp.selectionStart, len = inp.value.length;
      inp.value = format(inp.value);
      // курсор в конец при наборе с конца (достаточно для типового ввода)
      if (start >= len) { try { inp.setSelectionRange(inp.value.length, inp.value.length); } catch (_) {} }
    });
    inp.addEventListener('focus', function () { if (!inp.value) inp.value = '+7 ('; });
    inp.addEventListener('blur', function () { if (inp.value === '+7 (' || inp.value === '+7') inp.value = ''; });
  }
  function init() {
    var nodes = document.querySelectorAll('input[type="tel"], input[name="phone"]');
    for (var i = 0; i < nodes.length; i++) attach(nodes[i]);
  }
  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', init);
  else init();
})();

/* ============================================================
 * UX-полировка форм и FAQ (на всех страницах):
 *  - незаполненное согласие: тряска чекбокса + красная подсветка,
 *    без сдвига layout (перехват submit на capture-фазе);
 *  - резерв места под сообщение формы (.railform) — текст ошибки
 *    не толкает страницу;
 *  - плавное раскрытие FAQ (.faq) там, где браузер поддерживает
 *    ::details-content (Safari 18.4+, Chrome 131+).
 * ============================================================ */
(function () {
  'use strict';
  var css = [
    '@keyframes kzShake{10%,90%{transform:translateX(-1px)}20%,80%{transform:translateX(2px)}30%,50%,70%{transform:translateX(-4px)}40%,60%{transform:translateX(4px)}}',
    '.kz-shake{animation:kzShake .45s cubic-bezier(.36,.07,.19,.97) both}',
    '.kz-consent-invalid{outline:1.5px solid rgba(192,57,43,.55);outline-offset:6px;border-radius:8px}',
    '.kz-consent-invalid,.kz-consent-invalid a,.kz-consent-invalid span{color:#c0392b !important}',
    '.kz-consent-invalid input[type=checkbox]{accent-color:#c0392b;outline:2px solid #c0392b;outline-offset:1px}',
    /* резерв места под сообщение — без скачка layout */
    '.railform .formmsg{display:block !important;min-height:1.05em;margin-top:8px}',
    '.railform .formmsg[hidden]{visibility:hidden}',
    /* плавный FAQ (где поддерживается ::details-content) */
    '.faq details::details-content{block-size:0;overflow:clip;transition:block-size .32s ease, content-visibility .32s allow-discrete}',
    '.faq details[open]::details-content{block-size:auto}'
  ].join('');
  var st = document.createElement('style'); st.textContent = css;
  (document.head || document.documentElement).appendChild(st);

  function findConsent(form) {
    return form.querySelector('input[type="checkbox"][required], input[type="checkbox"][name="consent"], .policy input[type="checkbox"], .v2-form-consent input[type="checkbox"]');
  }
  function labelOf(cb) {
    return cb.closest('label') || cb.closest('.policy') || cb.closest('.v2-form-consent') || cb.parentElement;
  }
  // перехват отправки: нет согласия -> тряска, без сдвига и без сообщения-толкателя
  document.addEventListener('submit', function (e) {
    var form = e.target; if (!form || form.tagName !== 'FORM') return;
    var cb = findConsent(form); if (!cb || !cb.required) return;
    if (!cb.checked) {
      e.preventDefault(); e.stopImmediatePropagation();
      var lab = labelOf(cb);
      if (lab) { lab.classList.remove('kz-shake'); void lab.offsetWidth; lab.classList.add('kz-shake', 'kz-consent-invalid'); }
      try { cb.focus({ preventScroll: true }); } catch (_) {}
    }
  }, true);
  // снятие подсветки при простановке галочки
  document.addEventListener('change', function (e) {
    var t = e.target;
    if (t && t.type === 'checkbox' && t.checked) {
      var lab = labelOf(t); if (lab) lab.classList.remove('kz-consent-invalid', 'kz-shake');
    }
  }, true);
})();
