<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
   <title>Skip</title>
   <link rel="stylesheet" type="text/css" href="{{asset('css/skip.css')}}">
   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script src="{{asset('js/skip/slick.min.js')}}"></script>
   <script src="{{asset('js/skip/slick-slider.js')}}"></script>
   <script src="{{asset('js/skip/headre-footer.js')}}"></script>
   <script src="{{asset('js/skip/popup.js')}}"></script>
</head>

<body id="body">
   <div class="wraper">
      <header class="header">
         <div class="container">
            <div class="header__row">
               <div class="header__contacts contacts">
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
               <nav class="header-menu menu">
                  <ul class="header-menu__list">
                     <li class="header-menu__item"><a href="#" data-popup-id="linkPopup">Курсы</a>
                     </li>
                     <li class="header-menu__item"><a href="#" data-popup-id="linkPopup">АТТЕСТАЦИЯ</a>
                     </li>
                     <li class="header-menu__item"><a href="#" data-popup-id="linkPopup">ОХРАНА
                           ТРУДА</a></li>
                     <li class="header-menu__item"> <a href="#" data-popup-id="linkPopup">ПОЖАРНАЯ
                           БЕЗОПАСНОСТЬ</a></li>
                     <li class="header-menu__item"><a href="#" data-popup-id="linkPopup">СВИДЕТЕЛЬСТВО
                           ДОПОГ</a></li>
                     <li class="header-menu__item"> <a href="#" data-popup-id="linkPopup">ПРАВА НА
                           СПЕЦТЕХНИКУ</a></li>
                  </ul>
               </nav>
               <div class="header__burger">
                  <span></span>
               </div>
            </div>
         </div>
      </header>
      <main class="main">
         <div class="mainscreen">
            <div class="container">
               <div class="mainscreen__row">
                  <div class="mainscreen__content">
                     <div class="mainscreen__title">
                        <h1>Оформление допусков, удостоверений всех строительных и рабочих специальностей</h1>
                     </div>
                     <div class="mainscreen__label">
                        <p>аттестация ИТР <span>от 2 500 руб</span></p>
                     </div>
                     <div class="mainscreen__button">
                        <a href="#popup" class="popup-link">Заказать</a>
                     </div>
                  </div>
                  <div class="mainscreen__image image-main-skrin">
                     <img src="{{asset('/img/skip/worker_shadow.png')}}" alt="" class="shadow">
                     <img src="{{asset('/img/skip/worker.png')}}" alt="">
                  </div>
               </div>
            </div>
         </div>
         <div class="docs">
            <div class="container">
               <div class="docs__title">
                  <h2 class="docs__label">Какие документы хотите оформить?</h2>
               </div>
               <div class="docs__row">
                  <div class="docs__cards-first-row cards">
                     <div class="cards">
                        <div class="cards__row card">
                           <div class="card">
                              <div class="card__image">
                                 <a href="#" data-popup-id="linkPopup"><img
                                       src="{{asset('/img/skip/icons/docs/fireman.svg')}}" alt=""></a>
                              </div>
                              <div class="card__label">
                                 <a href="#" data-popup-id="linkPopup">
                                    <p>Гражданская<br> оборона и ЧС</p>
                                 </a>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card__image">
                                 <a href="#" data-popup-id="linkPopup"><img
                                       src="{{asset('/img/skip/icons/docs/crane.svg')}}" alt=""></a>
                              </div>
                              <div class="card__label">
                                 <a href="#" data-popup-id="linkPopup">
                                    <p>Работы на<br> высоте</p>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="cards">
                        <div class="cards__row card">
                           <div class="card">
                              <div class="card__image">
                                 <a href="#" data-popup-id="linkPopup"><img
                                       src="{{asset('/img/skip/icons/docs/toxic-waste.svg')}}" alt=""></a>
                              </div>
                              <div class="card__label">
                                 <a href="#" data-popup-id="linkPopup">
                                    <p>Опасные грузы<br>(ДОПОГ)</p>
                                 </a>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card__image">
                                 <a href="#" data-popup-id="linkPopup"><img
                                       src="{{asset('/img/skip/icons/docs/worker.svg')}}" alt=""></a>
                              </div>
                              <div class="card__label">
                                 <a href="#" data-popup-id="linkPopup">
                                    <p>Охрана труда</p>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="cards">
                        <div class="cards__row card">
                           <div class="card">
                              <div class="card__image">
                                 <a href="#" data-popup-id="linkPopup"><img
                                       src="{{asset('/img/skip/icons/docs/engineer.svg')}}" alt=""></a>
                              </div>
                              <div class="card__label">
                                 <a href="#" data-popup-id="linkPopup">
                                    <p>Обучение по рабочим<br>профессиям</p>
                                 </a>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card__image">
                                 <a href="#" data-popup-id="linkPopup"><img
                                       src="{{asset('/img/skip/icons/docs/plug.svg')}}" alt=""></a>
                              </div>
                              <div class="card__label">
                                 <a href="#" data-popup-id="linkPopup">
                                    <p>Энергетическая<br>безопасность</p>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="docs__cards-second-row card">
                     <div class="cards">
                        <div class="cards__row card">
                           <div class="card">
                              <div class="card__image">
                                 <a href="#" data-popup-id="linkPopup"><img
                                       src="{{asset('/img/skip/icons/docs/excavator.svg')}}" alt=""></a>
                              </div>
                              <div class="card__label">
                                 <a href="#" data-popup-id="linkPopup">
                                    <p>Дорожно-<br>строительная техника</p>
                                 </a>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card__image">
                                 <a href="#" data-popup-id="linkPopup"><img
                                       src="{{asset('/img/skip/icons/docs/settings.svg')}}" alt=""></a>
                              </div>
                              <div class="card__label">
                                 <a href="#" data-popup-id="linkPopup">
                                    <p>Неразрушающий<br>контроль</p>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="cards">
                        <div class="cards__row card">
                           <div class="card">
                              <div class="card__image">
                                 <a href="#" data-popup-id="linkPopup"><img
                                       src="{{asset('/img/skip/icons/docs/fire-extinguisher.svg')}}" alt=""></a>
                              </div>
                              <div class="card__label">
                                 <a href="#" data-popup-id="linkPopup">
                                    <p>Пожарно-технический<br>минимум</p>
                                 </a>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card__image">
                                 <a href="#" data-popup-id="linkPopup"><img
                                       src="{{asset('/img/skip/icons/docs/factory.svg')}}" alt=""></a>
                              </div>
                              <div class="card__label">
                                 <a href="#" data-popup-id="linkPopup">
                                    <p>Промышленная<br>безопасность</p>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="cards">
                        <div class="cards__row card">
                           <div class="card">
                              <div class="card__image">
                                 <a href="#" data-popup-id="linkPopup"><img
                                       src="{{asset('/img/skip/icons/docs/curve.svg')}}" alt=""></a>
                              </div>
                              <div class="card__label">
                                 <a href="#" data-popup-id="linkPopup">
                                    <p>Безопасность<br>дорожного движения</p>
                                 </a>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card__image">
                                 <a href="#" data-popup-id="linkPopup"><img
                                       src="{{asset('/img/skip/icons/docs/tracktor.svg')}}" alt=""></a>
                              </div>
                              <div class="card__label">
                                 <a href="#" data-popup-id="linkPopup">
                                    <p>Права на<br>спецтехнику</p>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>

                  </div>
               </div>
            </div>
         </div>
         <div class="awards">
            <div class="container">
               <div class="awards__title">Наши преимущества</div>
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
         <div class="education">
            <div class="container">
               <div class="education__title">
                  <h2 class="education__label">Образовательные программы</h2>
               </div>
               <div class="education-slider">
                  <div class="education-slider__item">
                     <div class="education-slider__item-img">
                        <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/programs/1.png')}}"></a>
                     </div>
                     <div class="education-slider__item-title">
                        <a href="#" data-popup-id="linkPopup">
                           Пожарно-технический минимум (учреждения-офисы, организации)
                        </a>
                     </div>
                     <div class="education-slider__item-label">
                        <p>Группа открыта</p>
                     </div>
                     <div class="education-slider__item-price">
                        <p>от 2500 руб.</p>
                     </div>
                  </div>
                  <div class="education-slider__item">
                     <div class="education-slider__item-img">
                        <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/programs/2.png')}}"></a>
                     </div>
                     <div class="education-slider__item-title">
                        <a href="#" data-popup-id="linkPopup">Пожарно-технический минимум (учреждения-офисы,
                           организации)</a>
                     </div>
                     <div class="education-slider__item-label">
                        <p>Группа открыта</p>
                     </div>
                     <div class="education-slider__item-price">
                        <p>от 2500 руб.</p>
                     </div>
                  </div>
                  <div class="education-slider__item">
                     <div class="education-slider__item-img">
                        <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/programs/3.png')}}"></a>
                     </div>
                     <div class="education-slider__item-title">
                        <a href="#" data-popup-id="linkPopup">
                           Пожарно-технический минимум (учреждения-офисы, организации)
                        </a>
                     </div>
                     <div class="education-slider__item-label">
                        <p>Группа открыта</p>
                     </div>
                     <div class="education-slider__item-price">
                        <p>от 2500 руб.</p>
                     </div>
                  </div>
                  <div class="education-slider__item">
                     <div class="education-slider__item-img">
                        <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/programs/4.png')}}"></a>
                     </div>
                     <div class="education-slider__item-title">
                        <a href="#" data-popup-id="linkPopup">Пожарно-технический минимум (учреждения-офисы,
                           организации)</a>
                     </div>
                     <div class="education-slider__item-label">
                        <p>Группа открыта</p>
                     </div>
                     <div class="education-slider__item-price">
                        <p>от 2500 руб.</p>
                     </div>
                  </div>

                  <div class="education-slider__item">
                     <div class="education-slider__item-img">
                        <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/programs/1.png')}}"></a>
                     </div>
                     <div class="education-slider__item-title">
                        <a href="#" data-popup-id="linkPopup">
                           Пожарно-технический минимум (учреждения-офисы, организации)
                        </a>
                     </div>
                     <div class="education-slider__item-label">
                        <p>Группа открыта</p>
                     </div>
                     <div class="education-slider__item-price">
                        <p>от 2500 руб.</p>
                     </div>
                  </div>
                  <div class="education-slider__item">
                     <div class="education-slider__item-img">
                        <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/programs/2.png')}}"></a>
                     </div>
                     <div class="education-slider__item-title">
                        <a href="#" data-popup-id="linkPopup">Пожарно-технический минимум
                           (учреждения-офисы, организации)</a>
                     </div>
                     <div class="education-slider__item-label">
                        <p>Группа открыта</p>
                     </div>
                     <div class="education-slider__item-price">
                        <p>от 2500 руб.</p>
                     </div>
                  </div>
                  <div class="education-slider__item">
                     <div class="education-slider__item-img">
                        <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/programs/3.png')}}"></a>
                     </div>
                     <div class="education-slider__item-title">
                        <a href="#" data-popup-id="linkPopup">
                           Пожарно-технический минимум (учреждения-офисы, организации)
                        </a>
                     </div>
                     <div class="education-slider__item-label">
                        <p>Группа открыта</p>
                     </div>
                     <div class="education-slider__item-price">
                        <p>от 2500 руб.</p>
                     </div>
                  </div>
                  <div class="education-slider__item">
                     <div class="education-slider__item-img">
                        <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/programs/4.png')}}"></a>
                     </div>
                     <div class="education-slider__item-title">
                        <a href="#" data-popup-id="linkPopup">Пожарно-технический минимум
                           (учреждения-офисы, организации)</a>
                     </div>
                     <div class="education-slider__item-label">
                        <p>Группа открыта</p>
                     </div>
                     <div class="education-slider__item-price">
                        <p>от 2500 руб.</p>
                     </div>
                  </div>

                  <div class="education-slider__item">
                     <div class="education-slider__item-img">
                        <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/programs/1.png')}}"></a>
                     </div>
                     <div class="education-slider__item-title">
                        <a href="#" data-popup-id="linkPopup">
                           Пожарно-технический минимум (учреждения-офисы, организации)
                        </a>
                     </div>
                     <div class="education-slider__item-label">
                        <p>Группа открыта</p>
                     </div>
                     <div class="education-slider__item-price">
                        <p>от 2500 руб.</p>
                     </div>
                  </div>
                  <div class="education-slider__item">
                     <div class="education-slider__item-img">
                        <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/programs/2.png')}}"></a>
                     </div>
                     <div class="education-slider__item-title">
                        <a href="#" data-popup-id="linkPopup">Пожарно-технический минимум
                           (учреждения-офисы, организации)</a>
                     </div>
                     <div class="education-slider__item-label">
                        <p>Группа открыта</p>
                     </div>
                     <div class="education-slider__item-price">
                        <p>от 2500 руб.</p>
                     </div>
                  </div>
                  <div class="education-slider__item">
                     <div class="education-slider__item-img">
                        <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/programs/3.png')}}"></a>
                     </div>
                     <div class="education-slider__item-title">
                        <a href="#" data-popup-id="linkPopup">
                           Пожарно-технический минимум (учреждения-офисы, организации)
                        </a>
                     </div>
                     <div class="education-slider__item-label">
                        <p>Группа открыта</p>
                     </div>
                     <div class="education-slider__item-price">
                        <p>от 2500 руб.</p>
                     </div>
                  </div>
                  <div class="education-slider__item">
                     <div class="education-slider__item-img">
                        <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/programs/4.png')}}"></a>
                     </div>
                     <div class="education-slider__item-title">
                        <a href="#" data-popup-id="linkPopup">Пожарно-технический минимум
                           (учреждения-офисы, организации)</a>
                     </div>
                     <div class="education-slider__item-label">
                        <p>Группа открыта</p>
                     </div>
                     <div class="education-slider__item-price">
                        <p>от 2500 руб.</p>
                     </div>
                  </div>

                  <div class="education-slider__item">
                     <div class="education-slider__item-img">
                        <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/programs/1.png')}}"></a>
                     </div>
                     <div class="education-slider__item-title">
                        <a href="#" data-popup-id="linkPopup">
                           Пожарно-технический минимум (учреждения-офисы, организации)
                        </a>
                     </div>
                     <div class="education-slider__item-label">
                        <p>Группа открыта</p>
                     </div>
                     <div class="education-slider__item-price">
                        <p>от 2500 руб.</p>
                     </div>
                  </div>
                  <div class="education-slider__item">
                     <div class="education-slider__item-img">
                        <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/programs/2.png')}}"></a>
                     </div>
                     <div class="education-slider__item-title">
                        <a href="#" data-popup-id="linkPopup">Пожарно-технический минимум
                           (учреждения-офисы, организации)</a>
                     </div>
                     <div class="education-slider__item-label">
                        <p>Группа открыта</p>
                     </div>
                     <div class="education-slider__item-price">
                        <p>от 2500 руб.</p>
                     </div>
                  </div>
                  <div class="education-slider__item">
                     <div class="education-slider__item-img">
                        <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/programs/3.png')}}"></a>
                     </div>
                     <div class="education-slider__item-title">
                        <a href="#" data-popup-id="linkPopup">
                           Пожарно-технический минимум (учреждения-офисы, организации)
                        </a>
                     </div>
                     <div class="education-slider__item-label">
                        <p>Группа открыта</p>
                     </div>
                     <div class="education-slider__item-price">
                        <p>от 2500 руб.</p>
                     </div>
                  </div>
                  <div class="education-slider__item">
                     <div class="education-slider__item-img">
                        <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/programs/4.png')}}"></a>
                     </div>
                     <div class="education-slider__item-title">
                        <a href="#" data-popup-id="linkPopup">Пожарно-технический минимум
                           (учреждения-офисы, организации)</a>
                     </div>
                     <div class="education-slider__item-label">
                        <p>Группа открыта</p>
                     </div>
                     <div class="education-slider__item-price">
                        <p>от 2500 руб.</p>
                     </div>
                  </div>

               </div>
            </div>
         </div>
         <div class="certificates">
            <div class="container">
               <div class="certificates__title">
                  <h2 class="certificates__label">Примеры допусков и сертификатов</h2>
               </div>
               <div class="certificates__slider">
                  <div class="certificates__slider-item">
                     <img src="{{asset('/img/skip/foto/examples/1.png')}}" alt=""
                        class="certificates__slider-item--img">
                  </div>
                  <div class="certificates__slider-item">
                     <img src="{{asset('/img/skip/foto/examples/2.png')}}" alt=""
                        class="certificates__slider-item--img">
                  </div>
                  <div class="certificates__slider-item">
                     <img src="{{asset('/img/skip/foto/examples/3.png')}}" alt=""
                        class="certificates__slider-item--img">
                  </div>
                  <div class="certificates__slider-item">
                     <img src="{{asset('/img/skip/foto/examples/4.png')}}" alt=""
                        class="certificates__slider-item--img">
                  </div>

                  <div class="certificates__slider-item">
                     <img src="{{asset('/img/skip/foto/examples/1.png')}}" alt=""
                        class="certificates__slider-item--img">
                  </div>
                  <div class="certificates__slider-item">
                     <img src="{{asset('/img/skip/foto/examples/2.png')}}" alt=""
                        class="certificates__slider-item--img">
                  </div>
                  <div class="certificates__slider-item">
                     <img src="{{asset('/img/skip/foto/examples/3.png')}}" alt=""
                        class="certificates__slider-item--img">
                  </div>
                  <div class="certificates__slider-item">
                     <img src="{{asset('/img/skip/foto/examples/4.png')}}" alt=""
                        class="certificates__slider-item--img">
                  </div>
               </div>
            </div>
         </div>
         <div class="news">
            <div class="container">
               <div class="news__title">
                  <h2 class="news__label">Новости и акции</h2>
               </div>
               <div class="news__row">
                  <div class="news__promotion promotion">
                     <div class="promotion__title">
                        <p>Получи в подарок удостоверение абсолютно <span>бесплатно</span></p>
                     </div>
                     <div class="promotion__img">
                        <img src="{{asset('/img/skip/foto/news/1.png')}}">
                     </div>
                     <div class="promotion__description">
                        <p>каждое 5-е удостоверение мы выдаем в подарок. Акция рассчитана на единовременное оформление
                           от 5 и более удостоверений</p>
                     </div>
                  </div>
                  <div class="news__news item-news">
                     <div class="item-news">
                        <div class="item-news__container">
                           <div class="item-news__img">
                              <a href="#" data-popup-id="linkPopup"><img
                                    src="{{asset('/img/skip/foto/news/2.png')}}"></a>
                           </div>
                           <div class="item-news__date">
                              <p>02.03.2019</p>
                           </div>
                           <div class="item-news__title">
                              <a href="#" data-popup-id="linkPopup">
                                 <p>Изменения в системе гражданской обороны</p>
                              </a>
                           </div>
                           <div class="item-news__description">
                              <p>Государство планирует реализовать значительные улучшения в сфере…</p>
                           </div>
                        </div>
                     </div>
                     <div class="item-news">
                        <div class="item-news__container">
                           <div class="item-news__img">
                              <a href="#" data-popup-id="linkPopup"><img
                                    src="{{asset('/img/skip/foto/news/3.png')}}"></a>
                           </div>
                           <div class="item-news__date">
                              <p>02.03.2019</p>
                           </div>
                           <div class="item-news__title">
                              <a href="#" data-popup-id="linkPopup">
                                 <p>Изменения в системе гражданской обороны</p>
                              </a>
                           </div>
                           <div class="item-news__description">
                              <p>Государство планирует реализовать значительные улучшения в сфере…</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="news__button all-news">
                  <div class="all-news__row">
                     <div class="all-news__button">
                        <a href="#" data-popup-id="linkPopup">ВСЕ НОВОСТИ</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </main>
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
                     <li class="pages-footer__item"><a href="#" data-popup-id="linkPopup">Об
                           Учебном комбинате</a></li>
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
                     <li class="menu-footer__item"><a href="#" data-popup-id="linkPopup">Об
                           Учебном комбинате</a></li>
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