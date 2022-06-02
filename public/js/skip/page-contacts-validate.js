/*-------------------FORM-VALIDATE-JS----------------------------*/
function validate(form) {
   fail = validateName(form.name.value)
   fail += validateDocs(form.docs.value)
   fail += validatePhone(form.phone.value)
   fail += validateEmail(form.email.value)
   if (fail == false) return true
   else { return false }
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
   else if (space.length < 5) {
      document.querySelector('.text-field-name').classList.add("error");
      document.querySelector('.text-field-name.error').innerHTML = "Нужно использовать больше 4 символов!";
   }
   else {
      document.querySelector('.text-field-name').classList.remove("error");
      return false;
   }
}

function validateDocs(field) {
   //let space = field.trim();
   let space = field.replace(/\s+/g, '');
   console.log(space);
   if (space == "") {
      document.querySelector('.text-field-docs').classList.add("error");// text-field-name -> visibility: hidden; / .error -> visibility: visible;
      document.querySelector('.text-field-docs.error').innerHTML = "Это поле не должно быть пусты!";
   } else if (/[^a-z A-Zа-я А-я]/.test(space)) {
      document.querySelector('.text-field-docs').classList.add("error");
      document.querySelector('.text-field-docs.error').innerHTML = "Нужно использовать только буквы!";
   }
   else if (space.length < 5) {
      document.querySelector('.text-field-docs').classList.add("error");
      document.querySelector('.text-field-docs.error').innerHTML = "Нужно использовать больше 4 символов!";
   }
   else {
      document.querySelector('.text-field-docs').classList.remove("error");
      return false;
   }
}

function validatePhone(field) {
   if (field.length < 17) {
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
/*-------------------FORM-VALIDATE-JS----------------------------*/