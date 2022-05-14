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
      console.log(e.target);
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
      console.log(target);
      contactsRow.classList.remove('active');
    }
  } //file preview


  var formImage = document.getElementById('fileImage');
  var formPreview = document.getElementById('filePreview');
  var bookingForm = document.querySelector('#bookingform');
  formImage.addEventListener('change', function () {
    formPreview.innerHTML = '';
    formPreview.classList.add('load');

    if (this.files[0] == undefined) {
      formPreview.classList.remove('load');
    }

    uploadFile(formImage.files[0]);
  });

  function uploadFile(file) {
    if ((file === null || file === void 0 ? void 0 : file.size) > 2.5e+7 && bookingForm.classList.contains('ru')) {
      alert("Максимум 25 мегабайт");
      formPreview.classList.remove('load');
      $(".send-load").removeClass('active');
      return;
    } else if ((file === null || file === void 0 ? void 0 : file.size) > 2.5e+7 && bookingForm.classList.contains('es')) {
      alert("el tamaño maximo 25");
      formPreview.classList.remove('load');
      return;
    }

    var reader = new FileReader();

    reader.onload = function (e) {
      if (file.type.match('image.*')) {
        formPreview.innerHTML = "<img src=\"".concat(e.target.result, "\" alt=\"\">");
        formPreview.classList.remove('load');
      } else if (file.type.match('video.*')) {
        formPreview.innerHTML = "<video src=\"".concat(e.target.result, "\" controls></video>");
        formPreview.classList.remove('load');
      } else if (file.type.match('application/pdf')) {
        formPreview.innerHTML = "<img src=\"https://colorit.agency/public/img/form/pdf.svg\" alt=\"\">";
        formPreview.classList.remove('load');
      } else if (file.type.match('application/msword')) {
        formPreview.innerHTML = "<img src=\"https://colorit.agency/public/img/form/word.png\" alt=\"\">";
        formPreview.classList.remove('load');
      } else if (file.type.match('application/vnd.openxmlformats-officedocument.wordprocessingml.document')) {
        formPreview.innerHTML = "<img src=\"https://colorit.agency/public/img/form/word.png\" alt=\"\">";
        formPreview.classList.remove('load');
      } else if (file.type.match('application/vnd.ms-excel')) {
        formPreview.innerHTML = "<img src=\"https://colorit.agency/public/img/form/excel.svg\" alt=\"\">";
        formPreview.classList.remove('load');
      } else if (file.type.match('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet')) {
        formPreview.innerHTML = "<img src=\"https://colorit.agency/public/img/form/excel.svg\" alt=\"\">";
        formPreview.classList.remove('load');
      } else if (file.name.slice(-4) == ".rar") {
        formPreview.innerHTML = "<img src=\"https://colorit.agency/public/img/form/rar.png\" alt=\"\">";
        formPreview.classList.remove('load');
      } else if (file.name.slice(-4) == ".zip") {
        formPreview.innerHTML = "<img src=\"https://colorit.agency/public/img/form/zip.png\" alt=\"\">";
        formPreview.classList.remove('load');
      } else if (file.name.slice(-4) == ".psd") {
        formPreview.innerHTML = "<img src=\"https://colorit.agency/public/img/form/psd.png\" alt=\"\">";
        formPreview.classList.remove('load');
      } else if (file.type.match('text/plain')) {
        formPreview.innerHTML = "<img src=\"https://colorit.agency/public/img/form/txt.svg\" alt=\"\">";
        formPreview.classList.remove('load');
      } else {
        formPreview.innerHTML = "<img src=\"https://colorit.agency/public/img/form/file.svg\" alt=\"\">";
        formPreview.classList.remove('load');
      }
    };

    reader.onerror = function (e) {
      if (bookingForm.classList.contains('ru')) {
        alert("Ошибка загрузки файла");
      } else if (bookingForm.classList.contains('es')) {
        alert("Error al cargar el archivo");
      }
    };

    if (file !== null && file !== void 0 && file.size) {
      reader.readAsDataURL(file);
    }
  } //Polifill for closest


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