//require('./bootstrap');

import { popUp } from './modules/popup.js';

window.onload = function () {

   document.addEventListener('click', documentActions);

   //popUp
   const popUpButtons = document.querySelectorAll('.link-on-popup');
   popUpButtons.forEach(function (item) {
      item.addEventListener('click', function (e) {
         popUp(e.target.dataset.popupId);
         e.preventDefault();
      });
   });

   //Переключение языков (комп и мобилка)
   const languageBtn = document.querySelector('.language-btn');
   languageBtn.addEventListener('click', function (e) {
      if (window.matchMedia("(pointer: coarse)").matches) { // Устройства со стилусом
         if (!languageBtn.classList.contains('active')) {
            e.preventDefault()
         }
         languageBtn.classList.toggle('active');
      }
   });

   //Показываем контакты на мобилке
   const contactsBtn = document.querySelector('.contacts-header__title-text');
   const contactsRow = document.querySelector('.contacts-header__row');
   contactsBtn.addEventListener('click', function (e) {
      if (window.matchMedia("(pointer: coarse)").matches) { // Устройства со стилусом
         console.log(e.target);
         contactsRow.classList.toggle('active');
      }
   });

   //Messendgers
   const messendgers = document.querySelector('.svg-messengers__icons');
   const messendgerBtn = document.querySelector('.svg-messengers__btn');
   const messendgerClose = document.querySelector('.svg-messengers__close');
   const messendgerOpen = document.querySelector('.svg-messengers__open');
   const massendgerLabelBtn = document.querySelector('.svg-messengers__label-btn');
   if (window.matchMedia("(pointer: fine)").matches) {
      messendgerBtn.addEventListener('click', function () {
         messendgers.classList.remove('active');
         messendgerClose.classList.remove('active');
         messendgerOpen.classList.remove('hide');
         massendgerLabelBtn.classList.remove('hide');
      });
      messendgerBtn.addEventListener('mouseenter', function () {
         activeMessengersForDesktop();
      });
      massendgerLabelBtn.addEventListener('click', function () {
         activeMessengersForDesktop();
      });
   } else if (window.matchMedia("(pointer: coarse)").matches) {
      messendgerBtn.addEventListener('click', function () {
         activeMessengersForMobile();
      });
      massendgerLabelBtn.addEventListener('click', function () {
         activeMessengersForMobile();
      });
   }

   function activeMessengersForDesktop() {
      messendgers.classList.add('active');
      messendgerClose.classList.add('active');
      messendgerOpen.classList.add('hide');
      massendgerLabelBtn.classList.add('hide');
   }

   function activeMessengersForMobile() {
      messendgers.classList.toggle('active');
      messendgerClose.classList.toggle('active');
      messendgerOpen.classList.toggle('hide');
      massendgerLabelBtn.classList.toggle('hide');
   }

   //Menu burger
   const menuBtn = document.querySelector('.icon-menu');
   const burger = document.querySelector('.burger');
   menuBtn.addEventListener('click', function () {
      menuBtn.classList.toggle('open');
      burger.classList.toggle('open');
   });

   function documentActions(e) {
      const target = e.target;

      //remove burger
      if (!target.closest('.burger') && !target.closest('.icon-menu')) {
         menuBtn.classList.remove('open');
         burger.classList.remove('open');
      }
      //remove language select
      if (!target.closest('.language-btn')) {
         languageBtn.classList.remove('active');
      }
      //remove contacts block
      if (!target.closest('.contacts-header__row')) {
         console.log(target);
         contactsRow.classList.remove('active');
      }
   }

   //file preview
   const formImage = document.getElementById('fileImage');
   const formPreview = document.getElementById('filePreview');
   const bookingForm = document.querySelector('#bookingform');
   formImage.addEventListener('change', function () {
      formPreview.innerHTML = '';
      formPreview.classList.add('load');
      if (this.files[0] == undefined) {
         formPreview.classList.remove('load');
      }
      uploadFile(formImage.files[0]);
   });
   function uploadFile(file) {
      if (file?.size > 2.5e+7 && bookingForm.classList.contains('ru')) {
         alert("Максимум 25 мегабайт");
         formPreview.classList.remove('load');
         $(".send-load").removeClass('active');
         return
      } else if (file?.size > 2.5e+7 && bookingForm.classList.contains('es')) {
         alert("el tamaño maximo 25");
         formPreview.classList.remove('load');
         return
      }
      let reader = new FileReader();
      reader.onload = function (e) {
         if (file.type.match('image.*')) {
            formPreview.innerHTML = `<img src="${e.target.result}" alt="">`;
            formPreview.classList.remove('load');
         } else if (file.type.match('video.*')) {
            formPreview.innerHTML = `<video src="${e.target.result}" controls></video>`;
            formPreview.classList.remove('load');
         } else if (file.type.match('application/pdf')) {
            formPreview.innerHTML = `<img src="https://colorit.agency/public/img/form/pdf.svg" alt="">`;
            formPreview.classList.remove('load');
         } else if (file.type.match('application/msword')) {
            formPreview.innerHTML = `<img src="https://colorit.agency/public/img/form/word.png" alt="">`;
            formPreview.classList.remove('load');
         } else if (file.type.match('application/vnd.openxmlformats-officedocument.wordprocessingml.document')) {
            formPreview.innerHTML = `<img src="https://colorit.agency/public/img/form/word.png" alt="">`;
            formPreview.classList.remove('load');
         } else if (file.type.match('application/vnd.ms-excel')) {
            formPreview.innerHTML = `<img src="https://colorit.agency/public/img/form/excel.svg" alt="">`;
            formPreview.classList.remove('load');
         } else if (file.type.match('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet')) {
            formPreview.innerHTML = `<img src="https://colorit.agency/public/img/form/excel.svg" alt="">`;
            formPreview.classList.remove('load');
         } else if (file.name.slice(-4) == ".rar") {
            formPreview.innerHTML = `<img src="https://colorit.agency/public/img/form/rar.png" alt="">`;
            formPreview.classList.remove('load');
         } else if (file.name.slice(-4) == ".zip") {
            formPreview.innerHTML = `<img src="https://colorit.agency/public/img/form/zip.png" alt="">`;
            formPreview.classList.remove('load');
         } else if (file.name.slice(-4) == ".psd") {
            formPreview.innerHTML = `<img src="https://colorit.agency/public/img/form/psd.png" alt="">`;
            formPreview.classList.remove('load');
         } else if (file.type.match('text/plain')) {
            formPreview.innerHTML = `<img src="https://colorit.agency/public/img/form/txt.svg" alt="">`;
            formPreview.classList.remove('load');
         } else {
            formPreview.innerHTML = `<img src="https://colorit.agency/public/img/form/file.svg" alt="">`;
            formPreview.classList.remove('load');
         }
      }
      reader.onerror = function (e) {
         if (bookingForm.classList.contains('ru')) {
            alert("Ошибка загрузки файла");
         } else if (bookingForm.classList.contains('es')) {
            alert("Error al cargar el archivo");
         }
      };
      if (file?.size) {
         reader.readAsDataURL(file);
      }

   }


   //Polifill for closest
   (function () {
      // проверяем поддержку
      if (!Element.prototype.closest) {
         // реализуем
         Element.prototype.closest = function (css) {
            var node = this;
            while (node) {
               if (node.matches(css)) return node;
               else node = node.parentElement;
            }
            return null;
         };
      }
   })();
   (function () {
      // проверяем поддержку
      if (!Element.prototype.matches) {
         // определяем свойство
         Element.prototype.matches = Element.prototype.matchesSelector ||
            Element.prototype.webkitMatchesSelector ||
            Element.prototype.mozMatchesSelector ||
            Element.prototype.msMatchesSelector;
      }
   })();
};
