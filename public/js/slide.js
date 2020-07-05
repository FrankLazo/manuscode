var slideIndex = 1;
var myTimer;
var slideshowContainer;

window.addEventListener("load", function() {
    showSlides(slideIndex);
    myTimer = setInterval(function() {plusSlides(1)}, 3000);
    slideshowContainer = document.getElementsByClassName('slideShow-container')[0];
    slideshowContainer.addEventListener('mouseenter',pause)
    slideshowContainer.addEventListener('mouseleave',resume)
})

// NEXT AND PREVIOUS CONTROL
function plusSlides(n) {
    clearInterval (myTimer);
    if (n < 0) {
        showSlides (slideIndex -= 1);
    } else {
        showSlides (slideIndex += 1);
    }

//COMMENT OUT THE LINES BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME
    if (n === -1) {
        myTimer = setInterval (function() {plusSlides(n+2)}, 3600);
    } else {
        myTimer = setInterval (function() {plusSlides(n+1)}, 3600);
        }
}

//Controls the current slide and resets interval if needed
function currentSlide(n) {
    clearInterval(myTimer);
    myTimer = setInterval(function() {plusSlides(n + 1)}, 3000);
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.opacity = "0";
        // slides[i].style.display = "none";
    }
    for(i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.opacity = "1";
    // slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
}

pause = () => {
    clearInterval(myTimer);
}

resume = () => {
    clearInterval(myTimer);
    myTimer = setInterval(function() {plusSlides(slideIndex)}, 3000);
}