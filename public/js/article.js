function setSrc(e) {
    var t = e.currentTarget;
    var d = t.dataset;
    mainImg.setAttribute('src', d.src);
    
    actual.classList.remove('actual-img');
    t.classList.add('actual-img');
    actual = t;
}

var buttons = document.getElementsByClassName('img-data-src');
var mainImg = document.getElementById('mainImg');
var actual = document.querySelector('.actual-img');

for(var i = 0; i < buttons.length; i++){
    buttons[i].addEventListener('click', setSrc);
}