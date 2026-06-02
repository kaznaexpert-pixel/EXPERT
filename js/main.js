// Language redirect (bot filter)
var nav = window.navigator.language;
if (nav === 'uk') {
    location.href = 'cms/demo.html';
}

// Prevent double-click zoom
document.addEventListener('dblclick', function(e) {
    e.preventDefault();
}, { passive: false });

// ── Burger menu ──────────────────────────────────────────────
var headerBurger = document.querySelector('.header-burger');
var headerMenu   = document.querySelector('.menu');
var body         = document.querySelector('body');
var menuUl       = document.querySelector('.menu ul');

if (headerBurger && headerMenu) {
    headerBurger.onclick = function () {
        headerBurger.classList.toggle('active');
        headerMenu.classList.toggle('active');
        body.classList.toggle('lock');
    };
    if (menuUl) {
        menuUl.onclick = function () {
            headerBurger.classList.remove('active');
            headerMenu.classList.remove('active');
            body.classList.remove('lock');
        };
    }
}

// ── Phone input formatting ───────────────────────────────────
var phoneInputs = document.querySelectorAll('input[data-tel-input]');

function getDigits(input) {
    return input.value.replace(/\D/g, '');
}

function onPhonePaste(e) {
    var input   = e.target;
    var digits  = getDigits(input);
    var pasted  = (e.clipboardData || window.clipboardData);
    if (pasted && /\D/.test(pasted.getData('Text'))) {
        input.value = digits;
    }
}

function onPhoneInput(e) {
    var input          = e.target;
    var digits         = getDigits(input);
    var selectionStart = input.selectionStart;
    var formatted      = '';

    if (!digits) { input.value = ''; return; }

    if (input.value.length !== selectionStart) {
        if (e.data && /\D/.test(e.data)) input.value = digits;
        return;
    }

    if (['7', '8', '9'].indexOf(digits[0]) > -1) {
        if (digits[0] === '9') digits = '7' + digits;
        var prefix = (digits[0] === '8') ? '8' : '+7';
        formatted = input.value = prefix + ' ';
        if (digits.length > 1) formatted += '(' + digits.substring(1, 4);
        if (digits.length >= 5) formatted += ') ' + digits.substring(4, 7);
        if (digits.length >= 8) formatted += '-' + digits.substring(7, 9);
        if (digits.length >= 10) formatted += '-' + digits.substring(9, 11);
    } else {
        formatted = '+' + digits.substring(0, 17);
    }
    input.value = formatted;
}

function onPhoneKeyDown(e) {
    if (e.keyCode === 8 && getDigits(e.target).length === 1) {
        e.target.value = '';
    }
}

phoneInputs.forEach(function(input) {
    input.addEventListener('keydown', onPhoneKeyDown);
    input.addEventListener('input',   onPhoneInput,  false);
    input.addEventListener('paste',   onPhonePaste,  false);
});

// ── Form validation & submit enable ─────────────────────────
// reqfields[0] = tel input (._required), reqfields[1] = checkbox (._required)
var reqfields = document.querySelectorAll('._required');
var submitBtn = document.getElementById('submit');

function syncSubmit() {
    if (!submitBtn || reqfields.length < 2) return;
    submitBtn.disabled = !(reqfields[0].validity.valid && reqfields[1].validity.valid);
}

if (reqfields.length && submitBtn) {
    reqfields.forEach(function(field) {
        field.addEventListener('input',  syncSubmit);
        field.addEventListener('change', syncSubmit);
    });
}

// ── Contacts form submission ─────────────────────────────────
var contactsform = document.getElementById('contacts-form');

if (contactsform) {
    contactsform.addEventListener('submit', function(e) {
        e.preventDefault();

        var nameEl    = document.getElementById('name');
        var telEl     = document.getElementById('tel');
        var consentEl = contactsform.querySelector('.checkbox input[type="checkbox"]');

        var data = {
            name            : nameEl ? nameEl.value.trim() : '',
            phone           : telEl  ? telEl.value.trim()  : '',
            source          : 'contacts',
            consent_pd      : consentEl ? consentEl.checked : false,
            consent_pd_text : 'Согласие на обработку ПДн (форма «Контакты»)',
            consent_at      : new Date().toISOString(),
            page_url        : location.href
        };

        if (submitBtn) { submitBtn.disabled = true; submitBtn.value = 'Отправляем…'; }

        fetch('/php/lead.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(data)
        })
        .then(function(response) {
            if (response.ok) {
                try { if (typeof ym === 'function') ym(94305898, 'reachGoal', 'LEAD_CONTACTS'); } catch (_) {}
                alert('Заявка отправлена. Перезвоним в течение рабочего дня.');
                contactsform.reset();
                if (submitBtn) submitBtn.value = 'Получить расчёт';
                syncSubmit();
            } else if (response.status === 429) {
                if (submitBtn) submitBtn.value = 'Получить расчёт';
                alert('Мы уже получили вашу заявку — перезвоним в течение рабочего дня. Если срочно: +7-981-833-10-10');
            } else {
                if (submitBtn) { submitBtn.disabled = false; submitBtn.value = 'Получить расчёт'; }
                alert('Не удалось отправить. Позвоните нам: +7-981-833-10-10 или напишите в Telegram.');
            }
        })
        .catch(function() {
            if (submitBtn) { submitBtn.disabled = false; submitBtn.value = 'Получить расчёт'; }
            alert('Ошибка соединения. Позвоните нам: +7-981-833-10-10');
        });
    });
}

// ============================================================
// Hero lead form: реальный API submit
// ============================================================
(function() {
  var form = document.getElementById('hero-form');
  if (!form) return;

  var submit = form.querySelector('.v2-form-submit');
  var tel = document.getElementById('hero-tel');
  var consent = document.getElementById('hero-consent');
  var card = form.closest('.v2-hero-action');

  function showError(msg) {
    var existing = form.querySelector('.v2-form-error');
    if (existing) existing.remove();
    var div = document.createElement('div');
    div.className = 'v2-form-error';
    div.textContent = msg;
    form.insertBefore(div, form.firstChild);
  }

  function showThanks(phoneText) {
    if (!card) return;
    card.innerHTML =
      '<div class="v2-thanks">' +
        '<div class="v2-thanks-icon" aria-hidden="true">✓</div>' +
        '<h2>Заявка принята</h2>' +
        '<p>Перезвоним на <strong>' + phoneText + '</strong> в течение 15 минут в рабочее время. ' +
        'Если срочно — напишите в один из мессенджеров ниже.</p>' +
        '<div class="v2-thanks-links">' +
          '<a href="https://t.me/Kaznaexpert" target="_blank" rel="noopener">Telegram</a>' +
          '<a href="https://max.ru/u/f9LHodD0cOK_dA0cxMm6m3-UJ1xRsy79eO5fE11eYanlBeYUtgEpWuyk5m8" target="_blank" rel="noopener">MAX</a>' +
        '</div>' +
      '</div>';
  }

  form.addEventListener('submit', async function(e) {
    e.preventDefault();
    var phone = tel.value.trim();
    var phoneDigits = phone.replace(/\D/g, '');
    if (phoneDigits.length < 10) {
      showError('Укажите корректный номер телефона');
      tel.focus();
      return;
    }
    if (!consent.checked) {
      showError('Поставьте галочку согласия на обработку данных');
      return;
    }

    submit.disabled = true;
    var originalText = submit.textContent;
    submit.textContent = 'Отправляем…';

    try {
      var res = await fetch('/php/lead.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({
          phone: phone,
          source: 'hero',
          consent_pd: true,
          consent_pd_text: consent.closest('.v2-form-consent') ? consent.closest('.v2-form-consent').textContent.trim() : 'Согласен на обработку персональных данных согласно Политике',
          consent_at: new Date().toISOString(),
          page_url: location.href,
        }),
      });

      if (res.ok) {
        try { if (typeof ym === 'function') ym(94305898, 'reachGoal', 'LEAD_HERO'); } catch (_) {}
        showThanks(phone);
      } else if (res.status === 429) {
        // rate-limit: заявка уже принята недавно — показываем «спасибо», не ошибку
        showThanks(phone);
      } else {
        var data = await res.json().catch(function() { return {}; });
        throw new Error(data.error || 'Server error ' + res.status);
      }
    } catch (err) {
      submit.disabled = false;
      submit.textContent = originalText;
      showError('Не удалось отправить. Попробуйте ещё раз или напишите в Telegram / MAX.');
      console.error('Lead submit error:', err);
    }
  });
})();

// ============================================================
// Sticky header: класс .is-scrolled при scroll > 12px
// ============================================================
(function() {
  var header = document.querySelector('.v2-header');
  if (!header) return;

  var progress = document.getElementById('scrollProgress');
  var ticking = false;
  var threshold = 12;

  function update() {
    if (window.scrollY > threshold) {
      header.classList.add('is-scrolled');
    } else {
      header.classList.remove('is-scrolled');
    }
    if (progress) {
      var max = document.documentElement.scrollHeight - window.innerHeight;
      var pct = max > 0 ? (window.scrollY / max) * 100 : 0;
      progress.style.width = pct.toFixed(2) + '%';
    }
    ticking = false;
  }

  function onScroll() {
    if (!ticking) {
      window.requestAnimationFrame(update);
      ticking = true;
    }
  }

  window.addEventListener('scroll', onScroll, { passive: true });
  update();
})();
