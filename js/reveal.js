/* ============================================================
 * Scroll-reveal — премиальное появление секций при скролле.
 * Только transform/opacity (compositor-friendly). Уважает
 * prefers-reduced-motion. Без зависимостей.
 * ============================================================ */
(function () {
  'use strict';

  // Нет поддержки IO или пользователь просит меньше движения — показываем сразу.
  if (!('IntersectionObserver' in window) ||
      (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches)) {
    return;
  }

  function run() {
    var els = document.querySelectorAll('.v2-reveal');
    if (!els.length) return;

    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-in');
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -8% 0px' });

    els.forEach(function (el) {
      // Hero — проигрываем вход сразу на загрузке (элементы ниже сгиба
      // не должны оставаться невидимыми), остальное — по скроллу.
      if (el.closest('.v2-hero')) {
        el.classList.add('is-in');
      } else {
        io.observe(el);
      }
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', run);
  } else {
    run();
  }
})();
