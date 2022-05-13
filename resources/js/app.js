//require('./bootstrap');
window.onload = function () {

   document.addEventListener('click', documentActions);

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


};
