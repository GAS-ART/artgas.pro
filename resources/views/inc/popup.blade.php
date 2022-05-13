@section('popup')
<div id="popup" class="popup opn">
   <div class="popup__body">
      <div class="popup__content">
         <a href="#" class="popup__close close-popup">X</a>
         <div class="popup__row">
            <div class="send-load">
               <img src="{{asset('img/form/load.gif')}}" alt="">
            </div>
            <div class="popup__form">
               <div class="popup__title">
                  <h4>Форма зворотнього зв'язку</h4>
               </div>
               <div class="popup__text">
                  <form class="form @lang('main.current_lang_class')" id="bookingform" name="popupform" method="POST"
                     enctype="multipart/form-data" action="#" autocomplete="on">
                     @csrf
                     <div class="contacts-form__item data popup-data">
                        <input class="data__text-field" type="text" name="name" placeholder="Як до Вас звертатись?">
                        <p class="name-error error"></p>
                     </div>
                     <div class="contacts-form__item data popup-phone">
                        <input class="phone" type="text" name="phone" placeholder="Ваш номер телефону">
                        <p class="phone-error error"></p>
                     </div>
                     <div class="contacts-form__item data popup-email">
                        <input class="email" type="text" name="email" placeholder="Ваш E-mail">
                        <p class="email-error error"></p>
                     </div>
                     <div class="contacts-form__item data popup-text-area">
                        <textarea name="text" placeholder="Ваше повідомлення"></textarea>
                     </div>
                     <div class="contacts-form__item data popup-download">
                        <div class="file">
                           <input id="fileImage" type="file" name="filename" class="popup-file">
                           <div class="file-button">Додати файл</div>
                           <p class="file-error error"></p>
                        </div>
                        <div id="filePreview" class="preview-file"></div>
                     </div>
                     <div class="popup__button">
                        <button class="submit" type="submit">Відправити</button>
                     </div>
                  </form>
               </div>
               <div class="confirm">
                  <p>Данні успішно відправлені</p>
                  <p>Я зв'яжусь з Вами найближчим часом</p>
                  <div class="confirm-button">
                     ОК
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
