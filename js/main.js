// no robots

const nav = window.navigator.language;
    if(nav == 'uk'){
        location.href="cms/demo.html";
    }
    
//no-zoom when doubleclick

document.addEventListener('dblclick', function(event) {
    event.preventDefault();
}, { passive: false });

// menu

var header_burger = document.querySelector('.header-burger');
var header_menu = document.querySelector('.menu');
var back = document.querySelector('body');
var menu_ul = document.querySelector('.menu ul');

header_burger.onclick = function () {
    header_burger.classList.toggle('active');
    header_menu.classList.toggle('active');
    back.classList.toggle('lock');
};

menu_ul.onclick = function () {
    header_burger.classList.remove('active');
    header_menu.classList.remove('active');
    back.classList.remove('lock');
};

//slider

let position = 0;
let slidesToShow = 2;
const slidesToScroll = 1;
const slider = document.querySelector('.slider');
const serviceBody = document.querySelector('.service-body');
const serviceItems = document.querySelectorAll('.column');
const serviceItemCount = serviceItems.length;
const btnPrev = document.querySelector('.button-prev');
const btnNext = document.querySelector('.button-next');
let width;

let serviceItemWidth;
let movePosition;
let count = 0;

function init() { 
    const mediaQuery = window.matchMedia('(max-width: 650px)');
    if (mediaQuery.matches) slidesToShow = 1;
    else slidesToShow = 2;

    width = slider.clientWidth;

    serviceItemWidth = width / slidesToShow;
    
    serviceItems.forEach((serviceItems) => {
        serviceItems.style.minWidth = `${serviceItemWidth}px`;
        serviceItems.style.height = 'auto';
    });
    
    movePosition = slidesToScroll * serviceItemWidth;

    setPosition();
}

window.addEventListener('resize', init);
init();

window.addEventListener('resize', Count);
function Count() { 
    position = -(count * slidesToScroll * serviceItemWidth); 
    setPosition();
}


btnNext.addEventListener('click', () => {
    count++;
    
    const itemsLeft = serviceItemCount - (Math.abs(position) + slidesToShow * serviceItemWidth) / serviceItemWidth;
    
    position -= itemsLeft >= slidesToScroll ? movePosition : itemsLeft * serviceItemWidth;

    setPosition();
    checkBtns();
});

btnPrev.addEventListener('click', () => {
     count--;
     
    const itemsLeft = Math.abs(position) / serviceItemWidth ;
    
    position += itemsLeft >= slidesToScroll ? movePosition : itemsLeft * serviceItemWidth;

    setPosition();
    checkBtns();
});

function setPosition ()  {
    serviceBody.style.transform = `translateX(${position}px)`;
}

function checkBtns () {
    btnPrev.disabled = position === 0;
    btnNext.disabled = position <= -(serviceItemCount - slidesToShow) * serviceItemWidth;
}
setPosition();
checkBtns();

//swipe

slider.addEventListener('touchstart', handleTouchStart, true);
slider.addEventListener('touchmove', handleTouchMove, true);

let x1 = null;
let y1 = null;

function handleTouchStart(event) {
    const firstTouch = event.touches[0];
    x1 = firstTouch.clientX;
    y1 = firstTouch.clientY;
}

function handleTouchMove(event) {
    if (!x1 || !y1){
        return false;
    }
    let x2 = event.touches[0].clientX;
    let y2 = event.touches[0].clientY;
    
    let xDiv = x2 - x1;
    let yDiv = y2 - y1;
    
    if (Math.abs(xDiv)>Math.abs(yDiv)){
        if (xDiv > 0) {
             count--;
             
            const itemsLeft = Math.abs(position) / serviceItemWidth ;
            
            position += itemsLeft >= slidesToScroll ? movePosition : itemsLeft * serviceItemWidth;
        
            setPosition();
            checkBtns();
        }
        else {
             count++;
             
            const itemsLeft = serviceItemCount - (Math.abs(position) + slidesToShow * serviceItemWidth) / serviceItemWidth;
            
            position -= itemsLeft >= slidesToScroll ? movePosition : itemsLeft * serviceItemWidth;
        
            setPosition();
            checkBtns();
        } 
    }
  
    x1 = null;
    y1 = null;
}


//phoneinput check


var phoneInputs = document.querySelectorAll('input[data-tel-input]');

var getInputNumbersValue = function (input) {
    // Return stripped input value — just numbers
    return input.value.replace(/\D/g, '');
}

var onPhonePaste = function (e) {
    var input = e.target,
        inputNumbersValue = getInputNumbersValue(input);
    var pasted = e.clipboardData || window.clipboardData;
    if (pasted) {
        var pastedText = pasted.getData('Text');
        if (/\D/g.test(pastedText)) {
            // Attempt to paste non-numeric symbol — remove all non-numeric symbols,
            // formatting will be in onPhoneInput handler
            input.value = inputNumbersValue;
            return;
        }
    }
}

var onPhoneInput = function (e) {
    var input = e.target,
        inputNumbersValue = getInputNumbersValue(input),
        selectionStart = input.selectionStart,
        formattedInputValue = "";

    if (!inputNumbersValue) {
        return input.value = "";
    }

    if (input.value.length != selectionStart) {
        // Editing in the middle of input, not last symbol
        if (e.data && /\D/g.test(e.data)) {
            // Attempt to input non-numeric symbol
            input.value = inputNumbersValue;
        }
        return;
    }

    if (["7", "8", "9"].indexOf(inputNumbersValue[0]) > -1) {
        if (inputNumbersValue[0] == "9") inputNumbersValue = "7" + inputNumbersValue;
        var firstSymbols = (inputNumbersValue[0] == "8") ? "8" : "+7";
        formattedInputValue = input.value = firstSymbols + " ";
        if (inputNumbersValue.length > 1) {
            formattedInputValue += '(' + inputNumbersValue.substring(1, 4);
        }
        if (inputNumbersValue.length >= 5) {
            formattedInputValue += ') ' + inputNumbersValue.substring(4, 7);
        }
        if (inputNumbersValue.length >= 8) {
            formattedInputValue += '-' + inputNumbersValue.substring(7, 9);
        }
        if (inputNumbersValue.length >= 10) {
            formattedInputValue += '-' + inputNumbersValue.substring(9, 11);
        }
    } else {
        formattedInputValue = '+' + inputNumbersValue.substring(0, 17);
    }
    input.value = formattedInputValue;
}
var onPhoneKeyDown = function (e) {
    // Clear input after remove last symbol
    var inputValue = e.target.value.replace(/\D/g, '');
    if (e.keyCode == 8 && inputValue.length == 1) {
        e.target.value = "";
    }
}
for (var phoneInput of phoneInputs) {
    phoneInput.addEventListener('keydown', onPhoneKeyDown);
    phoneInput.addEventListener('input', onPhoneInput, false);
    phoneInput.addEventListener('paste', onPhonePaste, false);
}

    
//form validation & submit.enabled

let required_callus = document.querySelectorAll("._required_callus");
const callus_btn = document.querySelector(".callus-btn");

for (let index = 0; index < required_callus.length; index++) {
    required_callus[index].addEventListener('input', () => {
        (required_callus[0].validity.valid && required_callus[1].validity.valid) ? callus_btn.disabled = false : callus_btn.disabled = true;
    });
}

let reqfields = document.querySelectorAll("._required");
const submit = document.getElementById("submit");

for (let index = 0; index < reqfields.length; index++) {
    reqfields[index].addEventListener('input', () => {
        if(reqfields[index].validity.patternMismatch) {
            document.querySelector(".callout").innerHTML = reqfields[0].validationMessage;
            document.querySelector(".callout2").innerHTML = reqfields[1].validationMessage;
        }
        (reqfields[1].validity.valid && reqfields[2].validity.valid) ? submit.disabled = false : submit.disabled = true;
    });
}

//form sending

const callusform = document.getElementById('callus-form');
callusform.addEventListener('submit', callusformSend);

async function callusformSend(e) {
    e.preventDefault();
    
    var data = {
        tel : document.getElementById('callus-form-tel').value
    };
    
    let response = await fetch ('php/mail.php', {
        method: 'POST',
        body: JSON.stringify(data)
    })
    if(response.ok){
        alert('Заявка отправлена');
        callusform.reset();
    }else {
        alert("Ошибка");
    } 
}

const contactsform = document.getElementById('contacts-form');
contactsform.addEventListener('submit', contactsformSend);

async function contactsformSend(e) {
    e.preventDefault();
    
    var data = {
        fullname : document.getElementById('fullname').value,
        email : document.getElementById('email').value,
        tel : document.getElementById('tel').value,
        message : document.getElementById('message').value,
    };
    
    let response = await fetch ('php/mail.php', {
        method: 'POST',
        body: JSON.stringify(data)
    })
    if(response.ok){
        alert('Заявка отправлена');
        contactsform.reset();
    }else {
        alert("Ошибка");
    } 
}

// CHAT


const chatArea = document.querySelector(".chat-area");
const chatBox = document.querySelector(".chat-box");
const form = document.querySelector(".typing-area"),
file = form.querySelector(".file"),
inputField = form.querySelector(".input-field"),
sendBtn = form.querySelector("button");
const snd1 = new Audio('cms/files/soft-click.mp3');
const snd2 = new Audio('cms/files/bubble-click.mp3');
let seen_status = 0;

chatArea.onclick = function(e) {
  seen_status = 1;
}

inputField.focus();
inputField.onkeyup = ()=>{
  if(inputField.value != ""){
    sendBtn.classList.add("active");
  }else{
    sendBtn.classList.remove("active");
  }
}

chatBox.onmouseenter = ()=>{
  chatBox.classList.add("active");
}
chatBox.onmouseleave = ()=>{
  chatBox.classList.remove("active");
}
chatBox.ontouchstart = ()=>{
  chatBox.classList.add("active");
}
inputField.onfocus = ()=>{
  chatBox.classList.remove("active");
}

file.addEventListener('change', function() {
    
    let fs = file.files[0];

    const fileTypes = [
        'image/jpeg', 'image/jpg', 'image/png', 'image/tiff','image/gif', 'image/svg+xml', 'image/webp', 
        'application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
        'text/xml', 'application/xml', 'application/vnd.ms-excel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 
        'application/vnd.ms-powerpoint', 'application/vnd.openxmlformats-officedocument.presentationml.presentation', 'text/plain'
    ];
        
    if(!fileTypes.includes(fs.type)) {
        document.querySelector(".chat-callout").classList.add('invalid');
        file.value = '';
        return;
    }else{
        document.querySelector(".chat-callout").classList.remove('invalid');
    }
});

file.addEventListener('change', ChatformSend);
sendBtn.addEventListener('click', ChatformSend);

async function ChatformSend(e) {
    e.preventDefault();
    let data = new FormData(form);
    data.append('file', file.files[0]);

    let response = await fetch ('cms/php/insert-chat.php', {
        method: 'POST',
        body: data
    })
    if(response.ok){  
        snd1.play();
        form.reset();
        scrollToBottom();
    }else{
        alert("Ошибка обращения к файлу отправки формы");
    } 
    
    async function Sound () {
      let data = {
        incoming_id : document.getElementById("incoming_id").value
      }
      let response = await fetch ('cms/php/sound.php', {
        method: 'POST',
        body: JSON.stringify(data)
      })
      .then((response) => {
        return response.json();
      })
      .then((response) => {
        if(response != 0 && response !== null){
          snd2.play();
        }else{
          snd2.pause();
          snd2.currentTime = 0;
        }
      })
    }

    async function Chat () {
      let data = {
        incoming_id : document.getElementById("incoming_id").value,
        seen: seen_status
      }
      let response = await fetch ('php/get-chat.php', {
        method: 'POST',
        body: JSON.stringify(data)
      })
      .then((response) => {
        return response.json();
      })
      .then((response) => {
        chatBox.innerHTML = response;
        if(!chatBox.classList.contains("active")){
          scrollToBottom();
        }
        seen_status = 0;//for next messages
      })
    }

    setInterval(() => {
        Sound ();
        Chat ();
    }, 500);

    function scrollToBottom(){
      chatBox.scrollTop = chatBox.scrollHeight;
    }
}


