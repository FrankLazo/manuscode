function setUrl(e) {
    var t = e.currentTarget;
    var d = t.dataset;
    iFrame.setAttribute('src', d.url);
    
    actual.classList.remove('actual-location');
    t.classList.add('actual-location');
    actual = t;
}

var buttons = document.getElementsByClassName('btn-location');
var iFrame = document.getElementById('iframe');
var actual = document.querySelector('.actual-location');

for(var i = 0; i < buttons.length; i++){
    buttons[i].addEventListener('click', setUrl);
}