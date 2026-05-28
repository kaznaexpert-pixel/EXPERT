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

/*-------------------------BLOG-------------------------------- */

var container = document.querySelector('.animation-container');

if(container){
    var chars = ['a','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','o','п','р','с','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','я'];
    window.setInterval(Add_Word, 100);
    Add_Word();
}

function Add_Word() {
  var element = document.createElement('span');
  container.appendChild(element);
  Animate_Word(element);
}

function  Animate_Word(element) {
  var character = chars[Math.floor(Math.random() * chars.length)];
  var duration = Math.floor(Math.random() * 15) + 1;
  var offset = Math.floor(Math.random() * (50 - duration * 2)) + 3;
  var size = 12 + (15 - duration);
  element.style.cssText = 'right:'+offset+'vw; font-size:'+size+'px;animation-duration:'+duration+'s';
  element.innerHTML = character;
  window.setTimeout(Remove_Word, duration * 1000, element);
}

function Remove_Word(element) {
  element.parentNode.removeChild(element);
}  

/*-------------------------ARTICLE-------------------------- */

//subscribe

let subscribeform = document.getElementById('subscribe-form');
let subscribeEmail = document.getElementById('subscribe-email');
let subscribebtn = document.getElementById('subscribe-btn');

if(subscribeform){
    subscribeform.addEventListener('submit', subscribeSend);
}

async function subscribeSend(e) {
    e.preventDefault();

    let info = {
        subscribe : subscribeEmail.value
    }; 
    let response = await fetch ('../php/likeandsubscribe.php', {
        method: 'POST',
        headers: {
        'Content-Type': 'application/json'
        },
        body: JSON.stringify(info) 
    });
    if(response.ok){
        subscribeform.reset();
        subscribebtn.value = 'Вы подписаны!';
    }else {
        alert("Ошибка");
    } 
}

//likes on load

let likesform = document.getElementById('likes-form');
let spanlike = document.getElementById('spanlike');
let article = document.getElementById('likes-hidden');

if(likesform){
    window.addEventListener('load', LikesOnLoad);
    LikesOnLoad();
    likesform.addEventListener('submit', LikeSend);
}

function LikesOnLoad() {
    var data = {
        hidden : article.value
    };
    fetch ('../php/likeonload.php', {
        method: 'POST',
        headers: {
        'Content-Type': 'application/json'
        },
        body: JSON.stringify(data) 
    })
    .then((response) => {
        return response.json();
    })
    .then((response) => {
        spanlike.innerHTML = response;
    });
}

async function LikeSend(e) {
    e.preventDefault();

    localStorage.setItem("disable", true);

    let data = {
        hidden : article.value
    };  
    let response = await fetch ('../php/likeandsubscribe.php', {
        method: 'POST',
        headers: {
        'Content-Type': 'application/json'
        },
        body: JSON.stringify(data) 
    });
    if(response.ok){
        response.json().then((response) => {
        spanlike.innerHTML = response;
        window.location.reload();
        });
    }
    }
    let disable = localStorage.getItem("disable");
    if(disable){
    document.getElementById("likebtn").disabled = true;
}
