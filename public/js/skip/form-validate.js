//"use strict"
/*-------------------FORM-VALIDATE-JS----------------------------*/
$("#skip").submit(function (form) {
   validate();
   form.preventDefault();
});
function validate() {
   if (document.forms.mainform) {
      fail = validateName(form.name.value)
      fail += validateProfessions(form.professions.value)
      fail += validateGroup(form.group.value)
      fail += validatePhone(form.phone.value)
      fail += validateEmail(form.email.value)
      if (fail == false) {
         formSend(form);
         return false
      } else { return false }
   } else if (document.forms.popupform) {
      let form = document.forms.popupform;
      fail = validatePopupName(form.name.value);
      fail += validatePopupPhone(form.phone.value);
      if (fail == false) {
         formSend(form);
      }
   } else if (document.forms.pagecontactsform) {
      fail = validateName(form.name.value)
      fail += validateDocs(form.docs.value)
      fail += validatePhone(form.phone.value)
      fail += validateEmail(form.email.value)
      if (fail == false) {
         formSend(form);
         return false
      } else { return false }
   }
}

function formSend(form) {
   console.log(form);
   document.querySelector('.popup').classList.add("open");
   document.querySelector('.confirm').classList.add("send");
   document.querySelector('.popup__title').classList.add("send");
   document.querySelector('.popup__text').classList.add("send");
   form.reset();
}

function validateName(field) {
   //let space = field.trim();
   let space = field.replace(/\s+/g, '');
   if (space == "") {
      document.querySelector('.text-field-name').classList.add("error");// text-field-name -> visibility: hidden; / .error -> visibility: visible;
      document.querySelector('.text-field-name.error').innerHTML = "Это поле не должно быть пусты!";
   } else if (/[^a-z A-Zа-я А-я]/.test(space)) {
      document.querySelector('.text-field-name').classList.add("error");
      document.querySelector('.text-field-name.error').innerHTML = "Нужно использовать только буквы!";
   }
   else if (space.length < 2) {
      document.querySelector('.text-field-name').classList.add("error");
      document.querySelector('.text-field-name.error').innerHTML = "Имя не может быть меньше двух символов!";
   }
   else {
      document.querySelector('.text-field-name').classList.remove("error");
      return false;
   }
}

function validateProfessions(field) {
   space = field.replace(/\s+/g, '');
   if (space == "") {
      document.querySelector('.text-field-professions').classList.add("error");// text-field-name -> visibility: hidden; / .error -> visibility: visible;
      document.querySelector('.text-field-professions.error').innerHTML = "Это поле не должно быть пусты!";
   }
   else if (space.length < 5) {
      document.querySelector('.text-field-professions').classList.add("error");
      document.querySelector('.text-field-professions.error').innerHTML = "Имя не может быть меньше двух символов!";
   }
   else {
      document.querySelector('.text-field-professions').classList.remove("error");
      return false;
   }
}

function validateGroup(field) {
   space = field.replace(/\s+/g, '');
   if (space == "") {
      document.querySelector('.text-field-group').classList.add("error");// text-field-name -> visibility: hidden; / .error -> visibility: visible;
      document.querySelector('.text-field-group.error').innerHTML = "Это поле не должно быть пусты!";
   }
   else if ((isNaN(space)) || (space < 2 || space > 5)) {
      document.querySelector('.text-field-group').classList.add("error");
      document.querySelector('.text-field-group.error').innerHTML = "Нужно указать цифру 2,3,4 или 5!";
   }
   else {
      document.querySelector('.text-field-group').classList.remove("error");
      return false;
   }
}

function validatePhone(field) {

   if (!/^((\s*)?(\+)?)([- _():=+]?\d[- _():=+]?){10,12}(\s*)?$/.test(field)) {
      document.querySelector('.text-field-phone').classList.add("error");
   }
   else {
      document.querySelector('.text-field-phone').classList.remove("error");
      return false;
   }
}
function validateEmail(field) {
   space = field.replace(/\s+/g, '');
   if (space == "") {
      document.querySelector('.text-field-email').classList.add("error");// text-field-name -> visibility: hidden; / .error -> visibility: visible;
      document.querySelector('.text-field-email.error').innerHTML = "Это поле не должно быть пусты!";
   }

   else if (!((space.indexOf(".") > 0) && (space.indexOf("@") > 0)) || /[^a-zA-Z0-9.@_-]/.test(space) || space.length < 6) {
      document.querySelector('.text-field-email').classList.add("error");
      document.querySelector('.text-field-email.error').innerHTML = "Не корректный Email адрес!";
   }
   else {
      document.querySelector('.text-field-email').classList.remove("error");
      return false;
   }
}
/*Форма на странице contacts*/
function validateDocs(field) {
   //let space = field.trim();
   let space = field.replace(/\s+/g, '');
   if (space == "") {
      document.querySelector('.text-field-docs').classList.add("error");// text-field-name -> visibility: hidden; / .error -> visibility: visible;
      document.querySelector('.text-field-docs.error').innerHTML = "Это поле не должно быть пусты!";
   } else if (/[^a-z A-Zа-я А-я]/.test(space)) {
      document.querySelector('.text-field-docs').classList.add("error");
      document.querySelector('.text-field-docs.error').innerHTML = "Нужно использовать только буквы!";
   }
   else if (space.length < 5) {
      document.querySelector('.text-field-docs').classList.add("error");
      document.querySelector('.text-field-docs.error').innerHTML = "Имя не может быть меньше двух символов!";
   }
   else {
      document.querySelector('.text-field-docs').classList.remove("error");
      return false;
   }
}
/*Форма на странице contacts*/

function validatePopupName(field) {
   let space = field.replace(/\s+/g, '');
   if (space == "") {
      document.querySelector('.text-field-name-popup').classList.add("error");// text-field-name -> visibility: hidden; / .error -> visibility: visible;
      document.querySelector('.text-field-name-popup.error').innerHTML = "Это поле не должно быть пусты!";
   } else if (/[^a-z A-Zа-я А-я]/.test(space)) {
      document.querySelector('.text-field-name-popup').classList.add("error");
      document.querySelector('.text-field-name-popup.error').innerHTML = "Нужно использовать только буквы!";
   }
   else if (space.length < 2) {
      document.querySelector('.text-field-name-popup').classList.add("error");
      document.querySelector('.text-field-name-popup.error').innerHTML = "Имя не может быть меньше двух символов!";
   }
   else {
      document.querySelector('.text-field-name-popup').classList.remove("error");
      return false;
   }
}

function validatePopupPhone(field) {
   if (!/^((\s*)?(\+)?)([- _():=+]?\d[- _():=+]?){10,12}(\s*)?$/.test(field)) {
      document.querySelector('.text-field-phone-popup').classList.add("error");
   }
   else {
      document.querySelector('.text-field-phone-popup').classList.remove("error");
      return false;
   }
}

/*-------------------FORM-VALIDATE-JS----------------------------*/