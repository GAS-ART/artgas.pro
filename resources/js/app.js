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
         contactsRow.classList.remove('active');
      };

      //Click for Avatar icons
      if (target.closest('.avatar__mini')) {
         let currentAvatarMini = e.target.closest('.avatar__mini');
         clickAvatars(currentAvatarMini)
      } else if (target.classList.contains('active') && window.matchMedia("(pointer: coarse)").matches) {
         hideAvatarsIcons();
      } else if (!target.closest('.avatar')) {
         hideAvatarsIcons();
      }
   }

   //file preview
   const formImage = document.getElementById('fileImage');
   const formPreview = document.getElementById('filePreview');
   const bookingForm = document.querySelector('#bookingform');
   const loadingPreview = document.querySelector('.loading-preview');
   formImage.addEventListener('change', function () {
      formPreview.innerHTML = '';
      loadingPreview.classList.add('load');
      if (this.files[0] == undefined) {
         loadingPreview.classList.remove('load');
      }
      uploadFile(formImage.files[0]);
   });
   function uploadFile(file) {
      if (file?.size > 2.5e+7 && bookingForm.classList.contains('ru')) {
         alert("Максимум 25 мегабайт");
         loadingPreview.classList.remove('load');
         $(".popup__send-load").removeClass('active');
         return
      } else if (file?.size > 2.5e+7 && bookingForm.classList.contains('en')) {
         alert("Maximum 25 megabytes");
         loadingPreview.classList.remove('load');
         return
      } else if (file?.size > 2.5e+7 && bookingForm.classList.contains('ua')) {
         alert("Максимум 25 мегабайт");
         loadingPreview.classList.remove('load');
         return
      }
      let reader = new FileReader();
      reader.onload = function (e) {
         if (file.type.match('image.*')) {
            formPreview.innerHTML = `<img src="${e.target.result}" alt="">`;
            loadingPreview.classList.remove('load');
         } else if (file.type.match('video.*')) {
            formPreview.innerHTML = `<video src="${e.target.result}" controls></video>`;
            loadingPreview.classList.remove('load');
         } else if (file.type.match('application/pdf')) {
            formPreview.innerHTML = `<img src="https://colorit.agency/public/img/form/pdf.svg" alt="">`;
            loadingPreview.classList.remove('load');
         } else if (file.type.match('application/msword')) {
            formPreview.innerHTML = `<img src="https://colorit.agency/public/img/form/word.png" alt="">`;
            loadingPreview.classList.remove('load');
         } else if (file.type.match('application/vnd.openxmlformats-officedocument.wordprocessingml.document')) {
            formPreview.innerHTML = `<img src="https://colorit.agency/public/img/form/word.png" alt="">`;
            loadingPreview.classList.remove('load');
         } else if (file.type.match('application/vnd.ms-excel')) {
            formPreview.innerHTML = `<img src="https://colorit.agency/public/img/form/excel.svg" alt="">`;
            loadingPreview.classList.remove('load');
         } else if (file.type.match('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet')) {
            formPreview.innerHTML = `<img src="https://colorit.agency/public/img/form/excel.svg" alt="">`;
            loadingPreview.classList.remove('load');
         } else if (file.name.slice(-4) == ".rar") {
            formPreview.innerHTML = `<img src="https://colorit.agency/public/img/form/rar.png" alt="">`;
            loadingPreview.classList.remove('load');
         } else if (file.name.slice(-4) == ".zip") {
            formPreview.innerHTML = `<img src="https://colorit.agency/public/img/form/zip.png" alt="">`;
            loadingPreview.classList.remove('load');
         } else if (file.name.slice(-4) == ".psd") {
            formPreview.innerHTML = `<img src="https://colorit.agency/public/img/form/psd.png" alt="">`;
            loadingPreview.classList.remove('load');
         } else if (file.type.match('text/plain')) {
            formPreview.innerHTML = `<img src="https://colorit.agency/public/img/form/txt.svg" alt="">`;
            loadingPreview.classList.remove('load');
         } else {
            formPreview.innerHTML = `<img src="https://colorit.agency/public/img/form/file.svg" alt="">`;
            loadingPreview.classList.remove('load');
         }
      }
      reader.onerror = function (e) {
         if (bookingForm.classList.contains('ru')) {
            alert("Ошибка загрузки файла");
         } else if (bookingForm.classList.contains('en')) {
            alert("File upload error");
         } else if (bookingForm.classList.contains('ua')) {
            alert("Помилка завантаження файлу");
         }
      };
      if (file?.size) {
         reader.readAsDataURL(file);
      }
   }

   // Отпарвка данных из формы
   $("#bookingform").submit(function (event) {
      event.preventDefault();
      $(".popup__send-load").addClass('active');
      $.ajax({
         type: 'POST',
         url: 'http://127.0.0.1:8000/feedback',
         data: new FormData(this),
         contentType: false,
         cache: false,
         processData: false,
         success: function () {
            $(".email-error").html('');
            $(".name-error").html('');
            $(".phone-error").html('');
            $(".file-error").html('');
            $(".popup").addClass("send");
            bookingForm.reset();
            $(".popup__send-load").removeClass('active');
         },
         error: function (err) {
            $(".popup__send-load").removeClass('active');
            if (bookingForm.classList.contains('ua')) {
               if (err?.responseJSON?.errors?.email) {
                  let text = err.responseJSON.errors.email[0];
                  if (text == 'Не заполнено поле "email"') {
                     $(".email-error").html('Не заповнено поле "email"');
                  } else if (text == 'Указан некорректный email адрес') {
                     $(".email-error").html('Вказана не коректна email адреса');
                  }
               } else {
                  $(".email-error").html('');
               }
               if (err?.responseJSON?.errors?.name) {
                  let text = err.responseJSON.errors.name[0];
                  if (text == 'Не заполнено поле "Имя"') {
                     $(".name-error").html('Не заповнено поле "Ім\'я"');
                  } else if (text == 'Поле "Имя" не должно содержать цифр') {
                     $(".name-error").html('Поле "Ім\'я" не повинно містити цифр');
                  }
                  else if (text == 'Поле "Имя" должно содержать 2 или больше символов') {
                     $(".name-error").html('Поле "Ім\'я" має містити 2 або більше символів');
                  }
                  else if (text == 'Поле "Имя" должно содержать не больше 80 символов') {
                     $(".name-error").html('Поле Ім\'я має містити не більше 80 символів');
                  }
               } else {
                  $(".name-error").html('');
               }
               if (err?.responseJSON?.errors?.phone) {
                  let text = err.responseJSON.errors.phone[0];
                  if (text == 'Не заполнено поле "Номер телефона"') {
                     $(".phone-error").html('Не заповнено поле "Номер телефону"');
                  } else if (text == 'Неверный формат номера телефона') {
                     $(".phone-error").html('Невірний формат номера телефону');
                  }
               } else {
                  $(".phone-error").html('');
               }
               if (err?.responseJSON?.errors?.text) {
                  $(".text-error").html('У полі "Повідомлення" надто багато символів');
               }
               if (!err?.responseJSON && err.statusText) {
                  alert("Помилка завантаження файлу");
                  formPreview.innerHTML = '';
               }
            } else if (bookingForm.classList.contains('en')) {
               if (err?.responseJSON?.errors?.email) {
                  let text = err.responseJSON.errors.email[0];
                  if (text == 'Не заполнено поле "email"') {
                     $(".email-error").html('Field "email" is not filled');
                  } else if (text == 'Указан некорректный email адрес') {
                     $(".email-error").html('Incorrect e-mail address specified');
                  }
               } else {
                  $(".email-error").html('');
               }
               if (err?.responseJSON?.errors?.name) {
                  let text = err.responseJSON.errors.name[0];
                  if (text == 'Не заполнено поле "Имя"') {
                     $(".name-error").html('Field "Name" is not filled');
                  } else if (text == 'Поле "Имя" не должно содержать цифр') {
                     $(".name-error").html('The "Name" field must not contain numbers');
                  }
                  else if (text == 'Поле "Имя" должно содержать 2 или больше символов') {
                     $(".name-error").html('The "Name" field must contain 2 or more characters');
                  }
                  else if (text == 'Поле "Имя" должно содержать не больше 80 символов') {
                     $(".name-error").html('The "Name" field must contain no more than 80 characters');
                  }
               } else {
                  $(".name-error").html('');
               }
               if (err?.responseJSON?.errors?.phone) {
                  let text = err.responseJSON.errors.phone[0];
                  if (text == 'Не заполнено поле "Номер телефона"') {
                     $(".phone-error").html('Phone number field not filled');
                  } else if (text == 'Неверный формат номера телефона') {
                     $(".phone-error").html('Invalid phone number format');
                  }
               } else {
                  $(".phone-error").html('');
               }
               if (err?.responseJSON?.errors?.text) {
                  $(".text-error").html('There are too many characters in the Message field');
               }
               if (!err?.responseJSON && err.statusText) {
                  alert("Error loading file");
                  formPreview.innerHTML = '';
               }
            } else {
               if (err?.responseJSON?.errors?.email) {
                  $(".email-error").html(err.responseJSON.errors.email[0]);
               } else {
                  $(".email-error").html('');
               }
               if (err?.responseJSON?.errors?.name) {
                  $(".name-error").html(err.responseJSON.errors.name[0]);
               } else {
                  $(".name-error").html('');
               }
               if (err?.responseJSON?.errors?.phone) {
                  $(".phone-error").html(err.responseJSON.errors.phone[0]);
               } else {
                  $(".phone-error").html('');;
               }
               if (err?.responseJSON?.errors?.text) {
                  $(".text-error").html(err.responseJSON.errors.text[0]);
               }
               if (!err?.responseJSON && err.statusText) {
                  alert("Ошибка загрузки файла");
                  formPreview.innerHTML = '';
               }
            }
         }
      });
   });
   /*===================PORTFOLIO===================*/

   //Change image
   const portfolioImg = document.querySelector('.portfolio__image')
   portfolioImg.addEventListener('click', function (e) {
      console.log(e.target)
      if (e.target.classList.contains('left')) {
         e.target.classList.remove('left');
         e.target.classList.add('right');
      } else if (e.target.classList.contains('right')) {
         e.target.classList.remove('right');
         e.target.classList.add('left');
      } else {
         e.target.classList.add('right');
      }
   });

   //Open info
   //const portfolioInfo = document.querySelector('.description-portfolio__text');
   $('.description-portfolio__text span').click(function (event) {
      $('.description-portfolio__text span').not($(event.target)).closest('.description-portfolio__text').removeClass('active');
      $(event.target).closest('.description-portfolio__text').toggleClass('active');
   });

   /*===================PORTFOLIO===================*/
   /*===================FOOTER===================*/
   //View avatar images
   let avatars = document.querySelector('.avatar');
   const avatarSide = ['avatar__mini-left', 'avatar__mini-right', 'avatar__mini-middle'];
   let avatarFull = "";
   let avatarIcons = "";

   if (window.matchMedia("(pointer: fine)").matches) {
      avatars.addEventListener('mouseenter', function (e) {
         avatarFull = e.target.querySelector('.avatar__full');
         avatarIcons = e.target.querySelectorAll('.avatar__mini');
         if (avatarFull.classList.contains('hide')) {
            avatarFull.classList.remove('hide');
         }
         avatarIcons.forEach(function (icon) {
            if (icon.classList.contains('hover')) {
               icon.classList.remove('hover');
            }
            if (!avatarFull.classList.contains('hold')) {
               avatarFull.classList.add('active');
               icon.classList.add('active');
               setTimeout(function () {
                  icon.classList.add('hover');
               }, 1300);
            }
         });
      });

      avatars.addEventListener('mouseleave', function (e) {
         avatarFull.classList.remove('active');
         avatarIcons.forEach(function (icon) {
            icon.classList.remove('active');
            icon.classList.remove('hover');
            icon.classList.remove('hide');
         });
      });

   } else if (window.matchMedia("(pointer: coarse)").matches) {

      avatars.addEventListener('click', function (e) {
         avatarFull = avatars.querySelector('.avatar__full');
         avatarIcons = avatars.querySelectorAll('.avatar__mini');
         if (avatarFull.classList.contains('hide')) {
            avatarFull.classList.remove('hide');
         }
         avatarIcons.forEach(function (icon) {
            if (icon.classList.contains('hover')) {
               icon.classList.remove('hover');
            }
            if (!avatarFull.classList.contains('hold')) {
               avatarFull.classList.add('active');
               icon.classList.add('active');
               setTimeout(function () {
                  icon.classList.add('hover');
               }, 1300);
            }
         });
      });
   }
   //This function run from documentActions function
   function clickAvatars(currentAvatar) {
      avatarFull.classList.remove('active');
      avatarIcons.forEach(function (icon) {
         if (icon != currentAvatar) {
            icon.classList.add('hide');
            setTimeout(function () {
               icon.classList.remove('hover');
               icon.classList.remove('active');
               icon.classList.remove('hide');
            }, 1000);
         } else {
            let targetIcon = icon;
            let sideIcon;
            avatarSide.forEach(function (className) {
               if (targetIcon.classList.contains(className)) {
                  sideIcon = className;
               }
            });
            avatarFull.classList.add('hold');
            icon.classList.add('fly');
            icon.classList.remove('hover');
            icon.classList.remove('active');
            setTimeout(function () {
               icon.classList.add('transform');
            }, 1220);
            setTimeout(function () {
               avatarFull.classList.remove('hold');
               avatarFull.classList.add('avatar__mini');
               icon.className = 'avatar__full';
            }, 3500);
            setTimeout(function () {
               avatarFull.className = 'avatar__mini';
               avatarFull.classList.add(sideIcon);
            }, 3550);
         }
      });
   }

   //This function run from documentActions function
   function hideAvatarsIcons() {
      let avatarfull = document.querySelector('.avatar__full');
      avatarfull.classList.remove('active');
      if (avatarIcons != "") {
         avatarIcons.forEach(function (icon) {
            icon.classList.remove('active');
            icon.classList.remove('hover');
            icon.classList.remove('hide');
         });
      }
   }

   //Skills highlighting
   let skillsHeader = document.querySelectorAll('.footer__title');
   let aboutMe = document.querySelectorAll('.about-me__text');
   skillsHeader.forEach(function (header) {
      header.addEventListener('mouseenter', function (e) {
         let skills = e.target.nextElementSibling.querySelectorAll('.footer__list-item');
         skills.forEach(function (skill) {
            skill.classList.add('active');
         });
      });

      header.addEventListener('mouseleave', function (e) {
         let skills = e.target.nextElementSibling.querySelectorAll('.footer__list-item');
         skills.forEach(function (skill) {
            skill.classList.remove('active');
         });
      });
   });

   aboutMe.forEach(function (text) {
      text.querySelector('p').addEventListener('mouseenter', function () {
         if (text.querySelector('span')) text.querySelector('span').classList.add('active');
         if (text.querySelector('.flag')) text.querySelector('.flag').classList.add('active');
      });
      text.querySelector('p').addEventListener('mouseleave', function () {
         if (text.querySelector('span')) text.querySelector('span').classList.remove('active');
         if (text.querySelector('.flag')) text.querySelector('.flag').classList.remove('active');
      });
   });
   /*===================FOOTER===================*/

   /*===================POLIFILLS===================*/
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
   /*===================POLIFILLS===================*/
};
