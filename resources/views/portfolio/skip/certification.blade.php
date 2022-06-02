<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
   
   <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-touch-icon.png') }}">
   <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
   <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png')}} ">
   <link rel="manifest" href="{{ asset('img/favicon/site.webmanifest')}}">


   <title>Разработка сайтов по современным стандартам. Верстка сайтов. Создам качественный сайт.</title>
   <meta name="description" content="Качественная адаптивно-резиновая верстка сайтов с мобильной версией, кросбраузерностью и настройками ориентированными под Ваши задачи. Любые виды сайтов - Landing Page, Интернет магазин, Сайт визитка. Использую самые передовые и продвинутые технологии разработки. Помощь в выборе стратегии развития сайта.">

   <meta property="og:url" content="https://artgas.pro" />
   <meta property="og:type" content="website" />
   <meta property="og:title" content="Адаптивно-резиновая верстка сайтов." />
   <meta property="og:description" content="Разработка сайтов по современным стандартам с мобильной версией, кросбраузерностью и настройками ориентированными под Ваши задачи. Помощь в выборе стратегии развития сайта."/>
   <meta property="og:site_name" content="artgas.pro" />
   <meta property="og:image" content="{{ asset('img/avatar/3.jpg')}}"/>

   <link rel="stylesheet" type="text/css" href="{{asset('css/skip.css')}}">
   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script src="{{asset('js/skip/headre-footer.js')}}"></script>
   <script src="{{asset('js/skip/phone-mask.js')}}"></script>
   <script src="{{asset('js/skip/popup.js')}}"></script>
   <script>
   </script>
</head>

<body id="body">
   <div class="box">
      <header class="header header-not-main">
         <div class="container">
            <div class="header__row">
               <div class="header__contacts contacts contacts-not-main">
                  <div class="contacts__logo">
                     <a href="#" data-popup-id="linkPopup">ofdr</a>
                  </div>
                  <div class="line"></div>
                  <div class="contacts__description">
                     <p>центр профессиональной дистанционной переподготовки кадров</p>
                  </div>
                  <div class="contacts__mesendgers mesendgers">
                     <div class="mesendgers__whatsapp">
                        <a href="#" data-popup-id="linkPopup"><img
                              src="{{asset('/img/skip/icons/mesenger/header/whatsapp-logo.png')}}" alt=""></a>
                     </div>
                     <div class="mesendgers__viber">
                        <a href="#" data-popup-id="linkPopup"><img
                              src="{{asset('/img/skip/icons/mesenger/header/viber-logo.png')}}" alt=""></a>
                     </div>
                     <div class="mesendgers__telegram">
                        <a href="#" data-popup-id="linkPopup"><img
                              src="{{asset('/img/skip/icons/mesenger/header/telegram.png')}}" alt=""></a>
                     </div>
                  </div>
                  <div class="contacts__call call">
                     <div class="call__phone">
                        <a href="#" data-popup-id="linkPopup">8 800 000-00-00</a>
                     </div>
                     <div class="call__email">
                        <p>email@email.com</p>
                     </div>
                  </div>
                  <div class="contacts__callorder">
                     <a href="#popup" class="popup-link">Заказать звонок</a>
                  </div>
               </div>
               <nav class="header-menu menu-not-main">
                  <ul class="header-menu__list">
                     <li class="header-menu__item"><a href="#" data-popup-id="linkPopup">Курсы</a></li>
                     <li class="header-menu__item"><a href="#" data-popup-id="linkPopup">АТТЕСТАЦИЯ</a></li>
                     <li class="header-menu__item"><a href="#" data-popup-id="linkPopup">ОХРАНА ТРУДА</a></li>
                     <li class="header-menu__item"> <a href="#" data-popup-id="linkPopup">ПОЖАРНАЯ БЕЗОПАСНОСТЬ</a></li>
                     <li class="header-menu__item"><a href="#" data-popup-id="linkPopup">СВИДЕТЕЛЬСТВО ДОПОГ</a></li>
                     <li class="header-menu__item"> <a href="#" data-popup-id="linkPopup">ПРАВА НА СПЕЦТЕХНИКУ</a></li>
                  </ul>
               </nav>
               <div class="header__burger">
                  <span></span>
               </div>
            </div>
         </div>
      </header>
      <div class="breadcrumbs">
         <div class="container">
            <div class="breadcrumbs__row">
               <ul class="breadcrumbs__list">
                  <li class="bredcrumbs__item"><a href="#" data-popup-id="linkPopup">Главная</a><span>-</span></li>
                  <li class="bredcrumbs__item"><a href="#" data-popup-id="linkPopup">Аттестация</a><span>-</span></li>
                  <li class="bredcrumbs__item">Аттестация по электробезопасности</li>
               </ul>
            </div>
         </div>
      </div>
      <div class="attestation">
         <div class="container">
            <div class="attestation__row">
               <div class="attestation__price block-price">
                  <div class="block-price__cost">
                     <p>Стоимость аттестации</p>
                     <p>3000 ₽</p>
                     <p>Оформление <span>1 день</span></p>
                     <p>Срок действия<br> I, II, III, IV группы <span>1 год</span><br> V группа 1 или <span>3
                           года</span></p>
                  </div>
                  <div class="block-price__button">
                     <a href="#popup" class="popup-link">ЗАКАЗАТЬ</a>
                  </div>
               </div>
               <div class="attestation__description description-attestation">
                  <div class="description-attestation__title">
                     <p>Аттестация<br> по электробезопасности</p>
                  </div>
                  <div class="description-attestation__label">
                     <p>На все группы допуска до и свыше 1000В с отметкой ГосТехНадзора. Вместе с удостоверением Вы
                        получаете протокол экзаменационной комиссии РосТехНадзора.</p>
                  </div>
               </div>
               <div class="attestation__img">
                  <img src="{{asset('/img/skip/foto/certificates/electrical_safety.png')}}" alt="">
               </div>
            </div>
         </div>
      </div>
      <div class="text">
         <div class="container">
            <p>Обучение по электробезопасности персонала - обязательное условие для предприятий, чьи сотрудники работают
               с электричеством и электрическим оборудованием.</p>
            <h2>Кому необходимо проходить обучение?</h2>
            <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является
               стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник
               создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem
               Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн.
            </p>
            <h3>Таким образом, повышение квалификации обязаны проходить:</h3>
            <ul class="text__list">
               <li class="text__list-item">Сотрудники, впервые поступающим на работу, связанную с обслуживанием
                  электрооборудования;</li>
               <li class="text__list-item">Работники, не проходившие проверки знаний 3 года и более;</li>
               <li class="text__list-item">Сотрудники, претендующие на повышение группы допуска;</li>
               <li class="text__list-item">Неэлектротехнический персонал, деятельность которого прямо или косвенно
                  связана с обслуживанием установок.</li>
            </ul>
         </div>
      </div>
      <div class="awards">
         <div class="container">
            <div class="awards__row">
               <div class="awards__cards-first-row">
                  <div class="awards__card-item">
                     <div class="awards__card-item-image">
                        <img src="{{asset('/img/skip/icons/Shape.svg')}}">
                     </div>
                     <div class="awards__card-item-title">
                        <p>Документы в срок</p>
                     </div>
                     <div class="awards__card-item-label">
                        <p>Мы четко соблюдаем<br> сроки, так как дорожим<br> вашим временем</p>
                     </div>
                  </div>
                  <div class="awards__card-item">
                     <div class="awards__card-item-image">
                        <img src="{{asset('/img/skip/icons/favorites.svg')}}">
                     </div>
                     <div class="awards__card-item-title">
                        <p>100% качество<br> наших услуг</p>
                     </div>
                     <div class="awards__card-item-label">
                        <p>Мы несем полную<br> ответственность за свою<br> работу</p>
                     </div>
                  </div>
               </div>
               <div class="awards__cards-second-row">
                  <div class="awards__card-item">
                     <div class="awards__card-item-image">
                        <img src="{{asset('/img/skip/icons/file.svg')}}">
                     </div>
                     <div class="awards__card-item-title">
                        <p>Гарантия подлинности<br> документов</p>
                     </div>
                     <div class="awards__card-item-label">
                        <p>У нас есть все<br> необходимые лицензии<br> и сертификаты</p>
                     </div>
                  </div>
                  <div class="awards__card-item">
                     <div class="awards__card-item-image">
                        <img src="{{asset('/img/skip/icons/delivery-truck.svg')}}">
                     </div>
                     <div class="awards__card-item-title">
                        <p>Гарантия быстрой<br> доставки по всей<br> России.</p>
                     </div>
                     <div class="awards__card-item-label">
                        <p>Доставляем в любой<br> город России</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="form">
         <div class="container">
            <div class="form__title">
               <h2 class="form__label">Удостоверение по безопасности</h2>
            </div>
            <form id="certificate" class="form__form data-form" id="form" name="mainform" method="post"
               action="{{route('contactForm')}}" autocomplete="on">
               @csrf
               <div class="data-form__row">
                  <div class="data-form__data data">
                     <div class="data__item">
                        <p class="data__label">Ф.И.О. полностью</p>
                        <input class="data__text-field" type="text" name="name">
                        <div class="data__error">
                           <p class="text-field-name">Это поле не должно быть пусты</p>
                        </div>
                        <p class="data__label">Группа электробезопасности (2,3,4,5)</p>
                        <input class="data__text-field" type="text" name="group">
                        <div class="data__error">
                           <p class="text-field-group">Это поле не должно быть пустым</p>
                        </div>
                     </div>
                     <div class="data__item data__item2">
                        <p class="data__label">Название должности/профессии</p>
                        <input class="data__text-field" type="text" name="professions">
                        <div class="data__error">
                           <p class="text-field-professions">Это поле не должно быть пустым</p>
                        </div>
                        <p class="data__label">Причина проверки (первичная или очередная)</p>
                        <input class="data__text-field" type="text" name="reason-cheсk">
                     </div>
                     <div class="data__item data__item3">
                        <p class="data__label">Если Вы работаете укажите место работы</p>
                        <input class="data__text-field" type="text" name="work">
                        <p class="data__label">Укажите дату выдачи удостоверения, которую прописать в удостоверении</p>
                        <input class="data__text-field" type="date" name="date" min="2020-10-20" max="2022-12-31">
                     </div>
                  </div>
                  <div class="data-form__cotacts cotacts">
                     <div class="contacts__phone">
                        <input class="phone" type="text" name="phone" placeholder="+7 (__) __ - __ - __">
                        <p class="text-field-phone">Номер телефона должен содержать 10 цифр!</p>
                     </div>
                     <div class="contacts__email">
                        <input class="email" type="text" name="email" placeholder="Email">
                        <div class="data__error">
                           <p class="text-field-email">Это поле не должно быть пустым</p>
                        </div>
                     </div>
                     <div class="contacts__delivery">
                        <input class="contacts__text-field delivery" type="text" name="delivery"
                           placeholder="Адрес доставки готовых документов (город, адрес, номер телефона, ФИО)">
                     </div>
                     <div class="contacts__button button-submit">
                        <input class="submit" type="submit" value="Отправить заявку">
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <footer class="footer">
         <div class="container">
            <div class="footer__row">
               <div class="footer__pages pages-footer">
                  <h3><span class="pages-footer__label">Страницы с услугами</span></h3>
                  <ul class="pages-footer__list">
                     <li class="pages-footer__item"><a href="#" data-popup-id="linkPopup">Основные сведения</a></li>
                     <li class="pages-footer__item"><a href="#" data-popup-id="linkPopup">Структура и органы управления
                           образовательной
                           организацией</a></li>
                     <li class="pages-footer__item"><a href="#" data-popup-id="linkPopup">Документы</a></li>
                     <li class="pages-footer__item"><a href="#" data-popup-id="linkPopup">Образование</a></li>
                     <li class="pages-footer__item"><a href="#" data-popup-id="linkPopup">Руководство</a></li>
                     <li class="pages-footer__item"><a href="#" data-popup-id="linkPopup">Персональный состав
                           педагогических работников</a></li>
                     <li class="pages-footer__item"><a href="#" data-popup-id="linkPopup">Материально-техническое
                           обеспечение и оснащенность
                           образовательного
                           процесса</a></li>
                     <li class="pages-footer__item"><a href="#" data-popup-id="linkPopup">Стипендии и иные виды
                           материальной поддержки</a></li>
                     <li class="pages-footer__item"><a href="#" data-popup-id="linkPopup">Финансово-хозяйственная
                           деятельность</a></li>
                     <li class="pages-footer__item"><a href="#" data-popup-id="linkPopup">Вакантные места для приема
                           (перевода)</a></li>
                     <li class="pages-footer__item"><a href="#" data-popup-id="linkPopup">Сотрудники</a></li>
                     <li class="pages-footer__item"><a href="#" data-popup-id="linkPopup">Об Учебном комбинате</a></li>
                     <li class="pages-footer__item"><a href="#" data-popup-id="linkPopup">Партнеры</a></li>
                     <li class="pages-footer__item"><a href="#" data-popup-id="linkPopup">Отзывы</a></li>
                     <li class="pages-footer__item"><a href="#" data-popup-id="linkPopup">Реквизиты</a></li>
                     <li class="pages-footer__item"><a href="#" data-popup-id="linkPopup">Отчеты АО «Учебный
                           комбинат»</a></li>
                  </ul>
               </div>
               <div class="footer__menu menu-footer">
                  <h3><span class="menu-footer__label">Меню сайта</span></h3>
                  <ul class="menu-footer__list">
                     <li class="menu-footer__item"><a href="#" data-popup-id="linkPopup">Основные сведения</a></li>
                     <li class="menu-footer__item"><a href="#" data-popup-id="linkPopup">Структура и органы управления
                           образовательной
                           организацией</a></li>
                     <li class="menu-footer__item"><a href="#" data-popup-id="linkPopup">Документы</a></li>
                     <li class="menu-footer__item"><a href="#" data-popup-id="linkPopup">Образование</a></li>
                     <li class="menu-footer__item"><a href="#" data-popup-id="linkPopup">Руководство</a></li>
                     <li class="menu-footer__item"><a href="#" data-popup-id="linkPopup">Персональный состав
                           педагогических работников</a></li>
                     <li class="menu-footer__item"><a href="#" data-popup-id="linkPopup">Материально-техническое
                           обеспечение и оснащенность
                           образовательного процесса</a></li>
                     <li class="menu-footer__item"><a href="#" data-popup-id="linkPopup">Стипендии и иные виды
                           материальной поддержки</a></li>
                     <li class="menu-footer__item"><a href="#" data-popup-id="linkPopup">Финансово-хозяйственная
                           деятельность</a></li>
                     <li class="menu-footer__item"><a href="#" data-popup-id="linkPopup">Вакантные места для приема
                           (перевода)</a></li>
                     <li class="menu-footer__item"><a href="#" data-popup-id="linkPopup">Сотрудники</a></li>
                     <li class="menu-footer__item"><a href="#" data-popup-id="linkPopup">Об Учебном комбинате</a></li>
                     <li class="menu-footer__item"><a href="#" data-popup-id="linkPopup">Партнеры</a></li>
                     <li class="menu-footer__item"><a href="#" data-popup-id="linkPopup">Отзывы</a></li>
                     <li class="menu-footer__item"><a href="#" data-popup-id="linkPopup">Реквизиты</a></li>
                     <li class="menu-footer__item"><a href="#" data-popup-id="linkPopup">Отчеты АО «Учебный
                           комбинат»</a></li>
                  </ul>
               </div>
               <div class="footer__contacts contacts-footer">
                  <h3><span class="contacts-footer__label">Напишите нам</span></h3>
                  <div class="contacts-footer__contacts">
                     <div class="contacts-footer__telegram">
                        <a href="#" data-popup-id="linkPopup">telegram_name</a>
                     </div>
                     <div class="contacts-footer__viber">
                        <a href="#" data-popup-id="linkPopup">viber_name</a>
                     </div>
                     <div class="contacts-footer__whatsapp">
                        <a href="#" data-popup-id="linkPopup">whatsapp_name</a>
                     </div>
                     <div class="contacts-footer__phone">
                        <a href="#" data-popup-id="linkPopup">8 800 000-00-00</a>
                     </div>
                     <div class="contacts-footer__email">
                        <p>email@email.com</p>
                     </div>
                     <div class="contacts-footer__callorder">
                        <a href="#popup" class="popup-link">Обратный звонок</a>
                     </div>

                  </div>
                  <div class="contacts-footer__logo">
                     <a href="#" data-popup-id="linkPopup">ofdr</a>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <p>Copyright 2019. Все права защищены</p>
            </div>
      </footer>
   </div>
   <div id="popup" class="popup">
      <div class="popup__body">
         <div class="popup__content">
            <a href="#" class="popup__close close-popup">X</a>
            <div class="popup__title">
               <h4>ФОРМА ЗАКАЗА ОБРАТНОГО ЗВОНКА</h4>
            </div>
            <div class="popup__text">
               <form class="popup__form" id="skip" name="popupform" method="post" action="{{route('contactForm')}}"
                  autocomplete="on">
                  @csrf
                  <div class="contacts-form__item data popup-data">
                     <input class="data__text-field" type="text" name="name" placeholder="Как к Вам обращаться?">
                     <div class="data__error">
                        <p class="text-field-name-popup">Это поле не должно быть пусты</p>
                     </div>
                  </div>
                  <div class="contacts__phone popup-phone">
                     <input class="phone" type="text" name="phone" placeholder="+3 (__) __ - __ - __">
                     <p class="text-field-phone-popup">Некорректный номер телефона!</p>
                  </div>
                  <div class="popup__button">
                     <div class="button">
                        <input class="submit" type="submit" value="ЗАКАЗАТЬ ЗВОНОК">
                     </div>
                  </div>
               </form>
            </div>
            <div class="popup__confirm confirm">
               <div class="popup__title">
                  <h4><span>ЗВОНОК ЗАКАЗАН</span><br><br>Мы перезвони Вам в течении 10 минут</h4>
               </div>
               <div class="confirm__button">
                  <div class="button">
                     <input id="confirmButtom" class="submit close-popup" type="button" value="ОК">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="linkPopup" class="popup">
      <div class="popup__body">
         <div class="popup__content">
            <a href="#" class="popup__close close-popup">X</a>
            <div class="popup__title">
               <h4>
                  <p></p>You cannot follow the links as this page is not a full site.</p>
                  <p>This is just a layout created to
                     demonstrate working skills.</p>
                  <br>
                  <p></p>Вы не можете переходить по ссылкам, так как эта страница не является полноценным сайтом.</p>
                  <p>Это всего лишь макет, созданный для демонстрации рабочих навыков.
               </h4>
            </div>
            <input id="confirmButtom" class="submit popup__button" type="button" value="ОК">
         </div>
      </div>
   </div>
   <script src="{{asset('js/skip/form-validate.js')}}"></script>
</body>

</html>