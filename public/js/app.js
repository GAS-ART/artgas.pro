/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _modules_popup_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./modules/popup.js */ "./resources/js/modules/popup.js");
//require('./bootstrap');


window.onload = function () {
  document.addEventListener('click', documentActions); //popUp

  var popUpButtons = document.querySelectorAll('.link-on-popup');
  popUpButtons.forEach(function (item) {
    item.addEventListener('click', function (e) {
      (0,_modules_popup_js__WEBPACK_IMPORTED_MODULE_0__.popUp)(e.target.dataset.popupId);
      e.preventDefault();
    });
  }); //Переключение языков (комп и мобилка)

  var languageBtn = document.querySelector('.language-btn');
  languageBtn.addEventListener('click', function (e) {
    if (window.matchMedia("(pointer: coarse)").matches) {
      // Устройства со стилусом
      if (!languageBtn.classList.contains('active')) {
        e.preventDefault();
      }

      languageBtn.classList.toggle('active');
    }
  }); //Показываем контакты на мобилке

  var contactsBtn = document.querySelector('.contacts-header__title-text');
  var contactsRow = document.querySelector('.contacts-header__row');
  contactsBtn.addEventListener('click', function (e) {
    if (window.matchMedia("(pointer: coarse)").matches) {
      // Устройства со стилусом
      contactsRow.classList.toggle('active');
    }
  }); //Messendgers

  var messendgers = document.querySelector('.svg-messengers__icons');
  var messendgerBtn = document.querySelector('.svg-messengers__btn');
  var messendgerClose = document.querySelector('.svg-messengers__close');
  var messendgerOpen = document.querySelector('.svg-messengers__open');
  var massendgerLabelBtn = document.querySelector('.svg-messengers__label-btn');

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
  } //Menu burger


  var menuBtn = document.querySelector('.icon-menu');
  var burger = document.querySelector('.burger');
  menuBtn.addEventListener('click', function () {
    menuBtn.classList.toggle('open');
    burger.classList.toggle('open');
  });

  function documentActions(e) {
    var target = e.target; //remove burger

    if (!target.closest('.burger') && !target.closest('.icon-menu')) {
      menuBtn.classList.remove('open');
      burger.classList.remove('open');
    } //remove language select


    if (!target.closest('.language-btn')) {
      languageBtn.classList.remove('active');
    } //remove contacts block


    if (!target.closest('.contacts-header__row')) {
      contactsRow.classList.remove('active');
    }

    ; //Click for Avatar icons

    if (target.closest('.avatar__mini')) {
      var currentAvatarMini = e.target.closest('.avatar__mini');
      clickAvatars(currentAvatarMini);
    } else if (target.classList.contains('active') && window.matchMedia("(pointer: coarse)").matches) {
      hideAvatarsIcons();
    } else if (!target.closest('.avatar')) {
      hideAvatarsIcons();
    }
  } //file preview


  var formImage = document.getElementById('fileImage');
  var formPreview = document.getElementById('filePreview');
  var bookingForm = document.querySelector('#bookingform');
  var loadingPreview = document.querySelector('.loading-preview');
  formImage.addEventListener('change', function () {
    formPreview.innerHTML = '';
    loadingPreview.classList.add('load');

    if (this.files[0] == undefined) {
      loadingPreview.classList.remove('load');
    }

    uploadFile(formImage.files[0]);
  });

  function uploadFile(file) {
    if ((file === null || file === void 0 ? void 0 : file.size) > 2.5e+7 && bookingForm.classList.contains('ru')) {
      alert("Максимум 25 мегабайт");
      loadingPreview.classList.remove('load');
      $(".popup__send-load").removeClass('active');
      return;
    } else if ((file === null || file === void 0 ? void 0 : file.size) > 2.5e+7 && bookingForm.classList.contains('en')) {
      alert("Maximum 25 megabytes");
      loadingPreview.classList.remove('load');
      return;
    } else if ((file === null || file === void 0 ? void 0 : file.size) > 2.5e+7 && bookingForm.classList.contains('ua')) {
      alert("Максимум 25 мегабайт");
      loadingPreview.classList.remove('load');
      return;
    }

    var reader = new FileReader();

    reader.onload = function (e) {
      if (file.type.match('image.*')) {
        formPreview.innerHTML = "<img src=\"".concat(e.target.result, "\" alt=\"\">");
        loadingPreview.classList.remove('load');
      } else if (file.type.match('video.*')) {
        formPreview.innerHTML = "<video src=\"".concat(e.target.result, "\" controls></video>");
        loadingPreview.classList.remove('load');
      } else if (file.type.match('application/pdf')) {
        formPreview.innerHTML = "<img src=\"https://colorit.agency/public/img/form/pdf.svg\" alt=\"\">";
        loadingPreview.classList.remove('load');
      } else if (file.type.match('application/msword')) {
        formPreview.innerHTML = "<img src=\"https://colorit.agency/public/img/form/word.png\" alt=\"\">";
        loadingPreview.classList.remove('load');
      } else if (file.type.match('application/vnd.openxmlformats-officedocument.wordprocessingml.document')) {
        formPreview.innerHTML = "<img src=\"https://colorit.agency/public/img/form/word.png\" alt=\"\">";
        loadingPreview.classList.remove('load');
      } else if (file.type.match('application/vnd.ms-excel')) {
        formPreview.innerHTML = "<img src=\"https://colorit.agency/public/img/form/excel.svg\" alt=\"\">";
        loadingPreview.classList.remove('load');
      } else if (file.type.match('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet')) {
        formPreview.innerHTML = "<img src=\"https://colorit.agency/public/img/form/excel.svg\" alt=\"\">";
        loadingPreview.classList.remove('load');
      } else if (file.name.slice(-4) == ".rar") {
        formPreview.innerHTML = "<img src=\"https://colorit.agency/public/img/form/rar.png\" alt=\"\">";
        loadingPreview.classList.remove('load');
      } else if (file.name.slice(-4) == ".zip") {
        formPreview.innerHTML = "<img src=\"https://colorit.agency/public/img/form/zip.png\" alt=\"\">";
        loadingPreview.classList.remove('load');
      } else if (file.name.slice(-4) == ".psd") {
        formPreview.innerHTML = "<img src=\"https://colorit.agency/public/img/form/psd.png\" alt=\"\">";
        loadingPreview.classList.remove('load');
      } else if (file.type.match('text/plain')) {
        formPreview.innerHTML = "<img src=\"https://colorit.agency/public/img/form/txt.svg\" alt=\"\">";
        loadingPreview.classList.remove('load');
      } else {
        formPreview.innerHTML = "<img src=\"https://colorit.agency/public/img/form/file.svg\" alt=\"\">";
        loadingPreview.classList.remove('load');
      }
    };

    reader.onerror = function (e) {
      if (bookingForm.classList.contains('ru')) {
        alert("Ошибка загрузки файла");
      } else if (bookingForm.classList.contains('en')) {
        alert("File upload error");
      } else if (bookingForm.classList.contains('ua')) {
        alert("Помилка завантаження файлу");
      }
    };

    if (file !== null && file !== void 0 && file.size) {
      reader.readAsDataURL(file);
    }
  } // Отпарвка данных из формы


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
      success: function success() {
        $(".email-error").html('');
        $(".name-error").html('');
        $(".phone-error").html('');
        $(".file-error").html('');
        $(".popup").addClass("send");
        bookingForm.reset();
        $(".popup__send-load").removeClass('active');
      },
      error: function error(err) {
        $(".popup__send-load").removeClass('active');

        if (bookingForm.classList.contains('ua')) {
          var _err$responseJSON, _err$responseJSON$err, _err$responseJSON2, _err$responseJSON2$er, _err$responseJSON3, _err$responseJSON3$er, _err$responseJSON4, _err$responseJSON4$er;

          if (err !== null && err !== void 0 && (_err$responseJSON = err.responseJSON) !== null && _err$responseJSON !== void 0 && (_err$responseJSON$err = _err$responseJSON.errors) !== null && _err$responseJSON$err !== void 0 && _err$responseJSON$err.email) {
            var text = err.responseJSON.errors.email[0];

            if (text == 'Не заполнено поле "email"') {
              $(".email-error").html('Не заповнено поле "email"');
            } else if (text == 'Указан некорректный email адрес') {
              $(".email-error").html('Вказана не коректна email адреса');
            }
          } else {
            $(".email-error").html('');
          }

          if (err !== null && err !== void 0 && (_err$responseJSON2 = err.responseJSON) !== null && _err$responseJSON2 !== void 0 && (_err$responseJSON2$er = _err$responseJSON2.errors) !== null && _err$responseJSON2$er !== void 0 && _err$responseJSON2$er.name) {
            var _text = err.responseJSON.errors.name[0];

            if (_text == 'Не заполнено поле "Имя"') {
              $(".name-error").html('Не заповнено поле "Ім\'я"');
            } else if (_text == 'Поле "Имя" не должно содержать цифр') {
              $(".name-error").html('Поле "Ім\'я" не повинно містити цифр');
            } else if (_text == 'Поле "Имя" должно содержать 2 или больше символов') {
              $(".name-error").html('Поле "Ім\'я" має містити 2 або більше символів');
            } else if (_text == 'Поле "Имя" должно содержать не больше 80 символов') {
              $(".name-error").html('Поле Ім\'я має містити не більше 80 символів');
            }
          } else {
            $(".name-error").html('');
          }

          if (err !== null && err !== void 0 && (_err$responseJSON3 = err.responseJSON) !== null && _err$responseJSON3 !== void 0 && (_err$responseJSON3$er = _err$responseJSON3.errors) !== null && _err$responseJSON3$er !== void 0 && _err$responseJSON3$er.phone) {
            var _text2 = err.responseJSON.errors.phone[0];

            if (_text2 == 'Не заполнено поле "Номер телефона"') {
              $(".phone-error").html('Не заповнено поле "Номер телефону"');
            } else if (_text2 == 'Неверный формат номера телефона') {
              $(".phone-error").html('Невірний формат номера телефону');
            }
          } else {
            $(".phone-error").html('');
          }

          if (err !== null && err !== void 0 && (_err$responseJSON4 = err.responseJSON) !== null && _err$responseJSON4 !== void 0 && (_err$responseJSON4$er = _err$responseJSON4.errors) !== null && _err$responseJSON4$er !== void 0 && _err$responseJSON4$er.text) {
            $(".text-error").html('У полі "Повідомлення" надто багато символів');
          }

          if (!(err !== null && err !== void 0 && err.responseJSON) && err.statusText) {
            alert("Помилка завантаження файлу");
            formPreview.innerHTML = '';
          }
        } else if (bookingForm.classList.contains('en')) {
          var _err$responseJSON5, _err$responseJSON5$er, _err$responseJSON6, _err$responseJSON6$er, _err$responseJSON7, _err$responseJSON7$er, _err$responseJSON8, _err$responseJSON8$er;

          if (err !== null && err !== void 0 && (_err$responseJSON5 = err.responseJSON) !== null && _err$responseJSON5 !== void 0 && (_err$responseJSON5$er = _err$responseJSON5.errors) !== null && _err$responseJSON5$er !== void 0 && _err$responseJSON5$er.email) {
            var _text3 = err.responseJSON.errors.email[0];

            if (_text3 == 'Не заполнено поле "email"') {
              $(".email-error").html('Field "email" is not filled');
            } else if (_text3 == 'Указан некорректный email адрес') {
              $(".email-error").html('Incorrect e-mail address specified');
            }
          } else {
            $(".email-error").html('');
          }

          if (err !== null && err !== void 0 && (_err$responseJSON6 = err.responseJSON) !== null && _err$responseJSON6 !== void 0 && (_err$responseJSON6$er = _err$responseJSON6.errors) !== null && _err$responseJSON6$er !== void 0 && _err$responseJSON6$er.name) {
            var _text4 = err.responseJSON.errors.name[0];

            if (_text4 == 'Не заполнено поле "Имя"') {
              $(".name-error").html('Field "Name" is not filled');
            } else if (_text4 == 'Поле "Имя" не должно содержать цифр') {
              $(".name-error").html('The "Name" field must not contain numbers');
            } else if (_text4 == 'Поле "Имя" должно содержать 2 или больше символов') {
              $(".name-error").html('The "Name" field must contain 2 or more characters');
            } else if (_text4 == 'Поле "Имя" должно содержать не больше 80 символов') {
              $(".name-error").html('The "Name" field must contain no more than 80 characters');
            }
          } else {
            $(".name-error").html('');
          }

          if (err !== null && err !== void 0 && (_err$responseJSON7 = err.responseJSON) !== null && _err$responseJSON7 !== void 0 && (_err$responseJSON7$er = _err$responseJSON7.errors) !== null && _err$responseJSON7$er !== void 0 && _err$responseJSON7$er.phone) {
            var _text5 = err.responseJSON.errors.phone[0];

            if (_text5 == 'Не заполнено поле "Номер телефона"') {
              $(".phone-error").html('Phone number field not filled');
            } else if (_text5 == 'Неверный формат номера телефона') {
              $(".phone-error").html('Invalid phone number format');
            }
          } else {
            $(".phone-error").html('');
          }

          if (err !== null && err !== void 0 && (_err$responseJSON8 = err.responseJSON) !== null && _err$responseJSON8 !== void 0 && (_err$responseJSON8$er = _err$responseJSON8.errors) !== null && _err$responseJSON8$er !== void 0 && _err$responseJSON8$er.text) {
            $(".text-error").html('There are too many characters in the Message field');
          }

          if (!(err !== null && err !== void 0 && err.responseJSON) && err.statusText) {
            alert("Error loading file");
            formPreview.innerHTML = '';
          }
        } else {
          var _err$responseJSON9, _err$responseJSON9$er, _err$responseJSON10, _err$responseJSON10$e, _err$responseJSON11, _err$responseJSON11$e, _err$responseJSON12, _err$responseJSON12$e;

          if (err !== null && err !== void 0 && (_err$responseJSON9 = err.responseJSON) !== null && _err$responseJSON9 !== void 0 && (_err$responseJSON9$er = _err$responseJSON9.errors) !== null && _err$responseJSON9$er !== void 0 && _err$responseJSON9$er.email) {
            $(".email-error").html(err.responseJSON.errors.email[0]);
          } else {
            $(".email-error").html('');
          }

          if (err !== null && err !== void 0 && (_err$responseJSON10 = err.responseJSON) !== null && _err$responseJSON10 !== void 0 && (_err$responseJSON10$e = _err$responseJSON10.errors) !== null && _err$responseJSON10$e !== void 0 && _err$responseJSON10$e.name) {
            $(".name-error").html(err.responseJSON.errors.name[0]);
          } else {
            $(".name-error").html('');
          }

          if (err !== null && err !== void 0 && (_err$responseJSON11 = err.responseJSON) !== null && _err$responseJSON11 !== void 0 && (_err$responseJSON11$e = _err$responseJSON11.errors) !== null && _err$responseJSON11$e !== void 0 && _err$responseJSON11$e.phone) {
            $(".phone-error").html(err.responseJSON.errors.phone[0]);
          } else {
            $(".phone-error").html('');
            ;
          }

          if (err !== null && err !== void 0 && (_err$responseJSON12 = err.responseJSON) !== null && _err$responseJSON12 !== void 0 && (_err$responseJSON12$e = _err$responseJSON12.errors) !== null && _err$responseJSON12$e !== void 0 && _err$responseJSON12$e.text) {
            $(".text-error").html(err.responseJSON.errors.text[0]);
          }

          if (!(err !== null && err !== void 0 && err.responseJSON) && err.statusText) {
            alert("Ошибка загрузки файла");
            formPreview.innerHTML = '';
          }
        }
      }
    });
  });
  /*===================PORTFOLIO===================*/
  //Change image

  var portfolioImg = document.querySelector('.portfolio__image');
  portfolioImg.addEventListener('click', function (e) {
    console.log(e.target);

    if (e.target.classList.contains('left')) {
      e.target.classList.remove('left');
      e.target.classList.add('right');
    } else if (e.target.classList.contains('right')) {
      e.target.classList.remove('right');
      e.target.classList.add('left');
    } else {
      e.target.classList.add('right');
    }
  }); //Open info
  //const portfolioInfo = document.querySelector('.description-portfolio__text');

  $('.description-portfolio__text span').click(function (event) {
    $('.description-portfolio__text span').not($(event.target)).closest('.description-portfolio__text').removeClass('active');
    $(event.target).closest('.description-portfolio__text').toggleClass('active');
  });
  /*===================PORTFOLIO===================*/

  /*===================FOOTER===================*/
  //View avatar images

  var avatars = document.querySelector('.avatar');
  var avatarSide = ['avatar__mini-left', 'avatar__mini-right', 'avatar__mini-middle'];
  var avatarFull = "";
  var avatarIcons = "";

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
  } //This function run from documentActions function


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
        var targetIcon = icon;
        var sideIcon;
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
  } //This function run from documentActions function


  function hideAvatarsIcons() {
    var avatarfull = document.querySelector('.avatar__full');
    avatarfull.classList.remove('active');

    if (avatarIcons != "") {
      avatarIcons.forEach(function (icon) {
        icon.classList.remove('active');
        icon.classList.remove('hover');
        icon.classList.remove('hide');
      });
    }
  } //Skills highlighting


  var skillsHeader = document.querySelectorAll('.footer__title');
  var aboutMe = document.querySelectorAll('.about-me__text');
  skillsHeader.forEach(function (header) {
    header.addEventListener('mouseenter', function (e) {
      var skills = e.target.nextElementSibling.querySelectorAll('.footer__list-item');
      skills.forEach(function (skill) {
        skill.classList.add('active');
      });
    });
    header.addEventListener('mouseleave', function (e) {
      var skills = e.target.nextElementSibling.querySelectorAll('.footer__list-item');
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
          if (node.matches(css)) return node;else node = node.parentElement;
        }

        return null;
      };
    }
  })();

  (function () {
    // проверяем поддержку
    if (!Element.prototype.matches) {
      // определяем свойство
      Element.prototype.matches = Element.prototype.matchesSelector || Element.prototype.webkitMatchesSelector || Element.prototype.mozMatchesSelector || Element.prototype.msMatchesSelector;
    }
  })();
  /*===================POLIFILLS===================*/

};

/***/ }),

/***/ "./resources/js/modules/popup.js":
/*!***************************************!*\
  !*** ./resources/js/modules/popup.js ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "popUp": () => (/* binding */ popUp)
/* harmony export */ });
function popUp(popupId) {
  var popUp = document.getElementById(popupId);
  var bodyLock = document.getElementById('body');
  var popupCloseIcon = popUp.querySelector('.close-popup');
  var popupBtn = popUp.querySelector('.popup__button');
  var popupSending = popUp.querySelector('.popup__send-load');
  var filePreview = popUp.querySelector('.preview-file') || false;
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
    popUp.classList.remove('send');

    if (filePreview) {
      filePreview.innerHTML = '';
    }
  }

  popUp.addEventListener('mousedown', function (e) {
    if (!e.target.closest('.popup__content') && !popupSending.classList.contains('active')) {
      popupClose(popUp);
    }
  });
}
;

/***/ }),

/***/ "./resources/css/scss/style.scss":
/*!***************************************!*\
  !*** ./resources/css/scss/style.scss ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0,
/******/ 			"css/style": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/style"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/style"], () => (__webpack_require__("./resources/css/scss/style.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;