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

        var taskEl  = document.getElementById('task');
        var lawEl   = document.getElementById('law');
        var telEl   = document.getElementById('tel');
        var emailEl = document.getElementById('email');

        var data = {
            task  : taskEl  ? taskEl.value  : '',
            law   : lawEl   ? lawEl.value   : '',
            tel   : telEl   ? telEl.value   : '',
            email : emailEl ? emailEl.value : ''
        };

        fetch('php/mail.php', {
            method: 'POST',
            body: JSON.stringify(data)
        })
        .then(function(response) {
            if (response.ok) {
                alert('Заявка отправлена');
                contactsform.reset();
                syncSubmit();
            } else {
                alert('Ошибка при отправке. Позвоните нам: +7-981-833-10-10');
            }
        })
        .catch(function() {
            alert('Ошибка соединения. Позвоните нам: +7-981-833-10-10');
        });
    });
}
