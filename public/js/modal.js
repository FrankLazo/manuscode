// Sales Modal
var modalBtnSales = document.querySelector('.btn-sales');
var modalBtnSalesFooter = document.querySelector('.btn-sales-footer');
var modalSalesBg = document.querySelector('.sales-bg');
var modalSalesClose= document.querySelector('.sales-close');

modalBtnSales.addEventListener('click', function () {
  modalSalesBg.classList.add('sales-active');
});

modalBtnSalesFooter.addEventListener('click', function () {
  modalSalesBg.classList.add('sales-active');
});

modalSalesClose.addEventListener('click', function () {
  modalSalesBg.classList.remove('sales-active');
});

// Contact Modal
var modalBtnContact = document.querySelector('.btn-contact');
var modalBtnContactFooter = document.querySelector('.btn-contact-footer');
var modalContactBg = document.querySelector('.contact-bg');
var modalContactClose= document.querySelector('.contact-close');

modalBtnContact.addEventListener('click', function () {
  modalContactBg.classList.add('contact-active');
});

modalBtnContactFooter.addEventListener('click', function () {
  modalContactBg.classList.add('contact-active');
});

modalContactClose.addEventListener('click', function () {
  modalContactBg.classList.remove('contact-active');
});

// About Modal
var modalBtnAbout = document.querySelector('.btn-about');
var modalBtnAboutFooter = document.querySelector('.btn-about-footer');
var modalAboutBg = document.querySelector('.about-bg');
var modalAboutClose= document.querySelector('.about-close');

modalBtnAbout.addEventListener('click', function () {
  modalAboutBg.classList.add('about-active');
});

modalBtnAboutFooter.addEventListener('click', function () {
  modalAboutBg.classList.add('about-active');
});

modalAboutClose.addEventListener('click', function () {
  modalAboutBg.classList.remove('about-active');
});