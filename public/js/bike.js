/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/bike.js ***!
  \******************************/
$(function () {
  // Загрузка DOM JQUERY

  /*-------------------BURGER(JQUERY)----------------------------*/
  $('.menu__burger').click(function () {
    $('.menu__body, .menu__burger, .header-logo').toggleClass('active');
    $('body').toggleClass('lock');
  });
  /*-------------------BURGER----------------------------*/

  /*-------------------SLIDER(JS)----------------------------*/
  //window.onload = function () {  // Загрузка DOM для js если не использовать JQUERY

  /*	const prev = document.getElementById('btn-prev'),
  		next = document.getElementById('btn-next'),
  		slides = document.querySelectorAll('.slide'),
  		dots = document.querySelectorAll('.dot');
  
  	let index = 0;
  
  	const activeSlide = n => {
  		for (slide of slides) {
  			slide.classList.remove('slide-active');
  		}
  		slides[n].classList.add('slide-active');
  	}
  
  	const activeDot = n => {
  		for (dot of dots) {
  			dot.classList.remove('selector-active');
  		}
  		dots[n].classList.add('selector-active');
  	}
  
  	const prepareCurrentSlide = ind => {
  		activeSlide(ind);
  		activeDot(ind);
  	}
  
  	const nextSlide = () => {
  		if (index == slides.length - 1) {
  			index = 0
  			prepareCurrentSlide(index);
  		} else {
  			index++;
  			prepareCurrentSlide(index);
  		}
  	}
  
  	const prevSlide = () => {
  		//		clearInterval(interval); // Автоматическая прокрутка слайдов
  		if (index == 0) {
  			index = slides.length - 1;
  			prepareCurrentSlide(index);;
  		} else {
  			index--;
  			prepareCurrentSlide(index);
  		}
  	}
  
  	dots.forEach((item, indexDot) => {
  		item.addEventListener('click', () => {
  			index = indexDot;
  			prepareCurrentSlide(index);
  			//	clearInterval(interval); // Автоматическая прокрутка слайдов
  		})
  	})
  
  	next.addEventListener('click', nextSlide);
  	prev.addEventListener('click', prevSlide);
  
  
  	/*	const stopSetInterval = () => {
  				clearInterval(interval); // Автоматическая прокрутка слайдов
  			}*/
  //	const interval = setInterval(nextSlide, 2500); // Автоматическая прокрутка слайдов
  //	next.addEventListener('click', stopSetInterval); // Автоматическая прокрутка слайдов
  //} // Загрузка DOM для js если не использовать JQUERY*/

  /*-------------------SLIDER----------------------------*/

  function popUp(popupId) {
    var popUp = document.getElementById(popupId);
    var bodyLock = document.querySelector('body');
    var popupCloseIcon = popUp.querySelector('.close-popup');
    var popupBtn = popUp.querySelector('.popup__button');
    popUp.classList.add('open');
    bodyLock.classList.add('lock');
    popupCloseIcon.addEventListener('click', function (e) {
      popupClose(popUp);
      e.preventDefault();
    });
    popupBtn.addEventListener('click', function () {
      popupClose(popUp);
    });

    function popupClose(popupActive) {
      popupActive.classList.remove('open');
      bodyLock.classList.remove("lock");
    }

    popUp.addEventListener('click', function (e) {
      if (!e.target.closest('.popup__content')) {
        popupClose(popUp);
      }
    });
  }

  ; //Popup-links

  var linksPopup = document.querySelectorAll('[data-popup-id="linkPopup"]');

  function popupLinkClick() {
    linksPopup.forEach(function (link) {
      link.addEventListener('click', function (e) {
        var popupId = this.dataset.popupId;
        popUp(popupId);
        e.preventDefault();
      });
    });
  }

  popupLinkClick();
  $("#bike").submit(function (form) {
    popUp("linkPopup");
    form.preventDefault();
  });
  initSliders();
});

function initSliders() {
  var swiper = new Swiper('.swiper', {
    speed: 400,
    spaceBetween: 100,
    loop: true,
    simulateTouch: true,
    // Dotts
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },
    // Arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    }
  });
}
/******/ })()
;