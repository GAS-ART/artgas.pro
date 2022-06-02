$(function () {  // Загрузка DOM JQUERY
	/*-------------------BURGER(JQUERY)----------------------------*/
	$('.header__burger').click(function () {
		$('.header-menu, .header__burger, .header-menu__list').toggleClass('active')
		$('body').toggleClass('lock')
	})
	/*-------------------BURGER----------------------------*/

	/*-------------------FOOTER-MOBILE-TAB(JQUERY)----------------------------*/
	function windowSize() {
		if ($(window).width() > '770') {
			$('.pages-footer__list').slideDown();
			$('.menu-footer__list').slideDown();
			$('.contacts-footer__contacts').slideDown();
		}
		else {
			$('.pages-footer__list').slideUp()
			$('.menu-footer__list').slideUp()
			$('.contacts-footer__contacts').slideUp()
		}
	}
	$('.pages-footer__label').click(function () {
		if ($(window).width() <= '770') {
			$('.pages-footer__list').slideToggle(500)
			$('.menu-footer__list').slideUp(500)
			$('.contacts-footer__contacts').slideUp(500)
		}

	})
	$('.menu-footer__label').click(function () {
		if ($(window).width() <= '770') {
			$('.menu-footer__list').slideToggle(500)
			$('.contacts-footer__contacts').slideUp(500)
			$('.pages-footer__list').slideUp(500)
		}
	})
	$('.contacts-footer__label').click(function () {
		if ($(window).width() <= '770') {
			$('.contacts-footer__contacts').slideToggle(500)
			$('.pages-footer__list').slideUp(500)
			$('.menu-footer__list').slideUp(500)
		}
	})
	$(window).on('load resize', windowSize);
	/*-------------------FOOTER-MOBILE-TAB----------------------------*/

})


/*-------------------PHONE-MASK-INPUT-JS----------------------------*/
window.addEventListener("DOMContentLoaded", function () {
	[].forEach.call(document.querySelectorAll('.phone'), function (input) {
		let keyCode;
		function mask(event) {
			event.keyCode && (keyCode = event.keyCode);
			let pos = this.selectionStart;
			if (pos < 3) event.preventDefault();
			let matrix = "+7 (___) ___ ____",
				i = 0,
				def = matrix.replace(/\D/g, ""),
				val = this.value.replace(/\D/g, ""),
				new_value = matrix.replace(/[_\d]/g, function (a) {
					return i < val.length ? val.charAt(i++) || def.charAt(i) : a
				});
			i = new_value.indexOf("_");
			if (i != -1) {
				i < 5 && (i = 3);
				new_value = new_value.slice(0, i)
			}
			let reg = matrix.substr(0, this.value.length).replace(/_+/g,
				function (a) {
					return "\\d{1," + a.length + "}"
				}).replace(/[+()]/g, "\\$&");
			reg = new RegExp("^" + reg + "$");
			if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = new_value;
			if (event.type == "blur" && this.value.length < 5) this.value = ""
		}

		input.addEventListener("input", mask, false);
		input.addEventListener("focus", mask, false);
		input.addEventListener("blur", mask, false);
		input.addEventListener("keydown", mask, false)

	});
});
/*-------------------PHONE-MASK-INPUT----------------------------*/


/*-------------------FORM-VALIDATE-JS----------------------------*/
function validate(form) {
	fail = validateForename(form.forename.value)

	if (fail == "") return true
	else { return false }
}

function validateForename(field) {
	return (field == "") ? document.querySelector('.error').classList.add("error-name") : ""
}
/*-------------------FORM-VALIDATE-JS----------------------------*/
window.onload = function () {
	/*-------------------FORM-VALIDATE-JS----------------------------*/


	/*function validate(form) {
		fail = validateForename(form.forename.value)

		if (fail == "") return true
		else { return false }
	}
	function validateForename(field) {
		return (field == "") ? document.querySelector('.error').classList.add("error-name") : ""
	}*/

	/*function validateName(field) {
		return (field == "") ? "Не верное имя" : "";
	}

	function validate(form) {
		fail = validateName(form.forename.value)
		if (fail == "") {
			return true;
		}
		else {
			alert(fail);
			return false;
		}
	}*/

	/*function validateName() {
		document.querySelector('.error').classList.add("error-name");
	}
	test.submit = false;*/

	/*-------------------FORM-VALIDATE-JS----------------------------*/
}

