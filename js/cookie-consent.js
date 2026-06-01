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
