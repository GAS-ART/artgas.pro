<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
   <title>Skip</title>
   <link rel="stylesheet" type="text/css" href="{{asset('css/skip.css')}}">
   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script src="{{asset('js/skip/headre-footer.js')}}"></script>
   <script src="{{asset('js/skip/slick.min.js')}}"></script>
   <script src="{{asset('js/skip/slick-slider.js')}}"></script>
   <script src="{{asset('js/skip/popup.js')}}"></script>
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
                              src="{{asset('img/skip/icons/mesenger/header/viber-logo.png')}}" alt=""></a>
                     </div>
                     <div class="mesendgers__telegram">
                        <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/icons/mesenger/header/telegram.png')}}"
                           alt=""></a>
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
                  <li class="bredcrumbs__item">Новости</li>
               </ul>
            </div>
         </div>
      </div>
      <div class="news">
         <div class="container">
            <div class="news__title page-news-title">
               <h2 class="news__label page-news">Новости</h2>
            </div>
            <div class="page-news-slider">
               <div class="news__row page-news-row">
                  <div class="news__news item-news page-item-news">
                     <div class="item-news page-item-news">
                        <div class="item-news__container">
                           <div class="item-news__img">
                              <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/news/2.png')}}"></a>
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
                     <div class="item-news page-item-news">
                        <div class="item-news__container">
                           <div class="item-news__img">
                              <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/news/2.png')}}"></a>
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

               <div class="news__row page-news-row">
                  <div class="news__news item-news page-item-news">
                     <div class="item-news page-item-news">
                        <div class="item-news__container">
                           <div class="item-news__img">
                              <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/news/3.png')}}"></a>
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
                     <div class="item-news page-item-news">
                        <div class="item-news__container">
                           <div class="item-news__img">
                              <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/news/3.png')}}"></a>
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

               <div class="news__row page-news-row">
                  <div class="news__news item-news page-item-news">
                     <div class="item-news page-item-news">
                        <div class="item-news__container">
                           <div class="item-news__img">
                              <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/news/4.png')}}"></a>
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
                     <div class="item-news page-item-news">
                        <div class="item-news__container">
                           <div class="item-news__img">
                              <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/news/4.png')}}"></a>
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

               <div class="news__row page-news-row">
                  <div class="news__news item-news page-item-news">
                     <div class="item-news page-item-news">
                        <div class="item-news__container">
                           <div class="item-news__img">
                              <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/news/5.png')}}"></a>
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
                     <div class="item-news page-item-news">
                        <div class="item-news__container">
                           <div class="item-news__img">
                              <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/news/5.png')}}"></a>
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



               <div class="news__row page-news-row">
                  <div class="news__news item-news page-item-news">
                     <div class="item-news page-item-news">
                        <div class="item-news__container">
                           <div class="item-news__img">
                              <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/news/2.png')}}"></a>
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
                     <div class="item-news page-item-news">
                        <div class="item-news__container">
                           <div class="item-news__img">
                              <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/news/2.png')}}"></a>
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

               <div class="news__row page-news-row">
                  <div class="news__news item-news page-item-news">
                     <div class="item-news page-item-news">
                        <div class="item-news__container">
                           <div class="item-news__img">
                              <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/news/3.png')}}"></a>
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
                     <div class="item-news page-item-news">
                        <div class="item-news__container">
                           <div class="item-news__img">
                              <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/news/3.png')}}"></a>
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

               <div class="news__row page-news-row">
                  <div class="news__news item-news page-item-news">
                     <div class="item-news page-item-news">
                        <div class="item-news__container">
                           <div class="item-news__img">
                              <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/news/4.png')}}"></a>
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
                     <div class="item-news page-item-news">
                        <div class="item-news__container">
                           <div class="item-news__img">
                              <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/news/4.png')}}"></a>
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

               <div class="news__row page-news-row">
                  <div class="news__news item-news page-item-news">
                     <div class="item-news page-item-news">
                        <div class="item-news__container">
                           <div class="item-news__img">
                              <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/news/5.png')}}"></a>
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
                     <div class="item-news page-item-news">
                        <div class="item-news__container">
                           <div class="item-news__img">
                              <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/news/5.png')}}"></a>
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


               <div class="news__row page-news-row">
                  <div class="news__news item-news page-item-news">
                     <div class="item-news page-item-news">
                        <div class="item-news__container">
                           <div class="item-news__img">
                              <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/news/2.png')}}"></a>
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
                     <div class="item-news page-item-news">
                        <div class="item-news__container">
                           <div class="item-news__img">
                              <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/news/2.png')}}"></a>
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

               <div class="news__row page-news-row">
                  <div class="news__news item-news page-item-news">
                     <div class="item-news page-item-news">
                        <div class="item-news__container">
                           <div class="item-news__img">
                              <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/news/3.png')}}"></a>
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
                     <div class="item-news page-item-news">
                        <div class="item-news__container">
                           <div class="item-news__img">
                              <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/news/3.png')}}"></a>
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

               <div class="news__row page-news-row">
                  <div class="news__news item-news page-item-news">
                     <div class="item-news page-item-news">
                        <div class="item-news__container">
                           <div class="item-news__img">
                              <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/news/4.png')}}"></a>
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
                     <div class="item-news page-item-news">
                        <div class="item-news__container">
                           <div class="item-news__img">
                              <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/news/4.png')}}"></a>
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

               <div class="news__row page-news-row">
                  <div class="news__news item-news page-item-news">
                     <div class="item-news page-item-news">
                        <div class="item-news__container">
                           <div class="item-news__img">
                              <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/news/5.png')}}"></a>
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
                     <div class="item-news page-item-news">
                        <div class="item-news__container">
                           <div class="item-news__img">
                              <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/news/5.png')}}"></a>
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


               <div class="news__row page-news-row">
                  <div class="news__news item-news page-item-news">
                     <div class="item-news page-item-news">
                        <div class="item-news__container">
                           <div class="item-news__img">
                              <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/news/2.png')}}"></a>
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
                     <div class="item-news page-item-news">
                        <div class="item-news__container">
                           <div class="item-news__img">
                              <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/news/2.png')}}"></a>
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

               <div class="news__row page-news-row">
                  <div class="news__news item-news page-item-news">
                     <div class="item-news page-item-news">
                        <div class="item-news__container">
                           <div class="item-news__img">
                              <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/news/3.png')}}"></a>
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
                     <div class="item-news page-item-news">
                        <div class="item-news__container">
                           <div class="item-news__img">
                              <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/news/3.png')}}"></a>
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

               <div class="news__row page-news-row">
                  <div class="news__news item-news page-item-news">
                     <div class="item-news page-item-news">
                        <div class="item-news__container">
                           <div class="item-news__img">
                              <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/news/4.png')}}"></a>
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
                     <div class="item-news page-item-news">
                        <div class="item-news__container">
                           <div class="item-news__img">
                              <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/news/4.png')}}"></a>
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

               <div class="news__row page-news-row">
                  <div class="news__news item-news page-item-news">
                     <div class="item-news page-item-news">
                        <div class="item-news__container">
                           <div class="item-news__img">
                              <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/news/5.png')}}"></a>
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
                     <div class="item-news page-item-news">
                        <div class="item-news__container">
                           <div class="item-news__img">
                              <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/skip/foto/news/5.png')}}"></a>
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
            </div>
         </div>
      </div>
<footer class="footer">
         <div class="container">
            <div class="footer__row">
               <div class="footer__pages pages-footer">
                  <h3><span class="pages-footer__label">Страницы с услугами</span></h3>
                  <ul class="pages-footer__list">
                     <li class="pages-footer__item"><a href="#" data-popup-id="linkPopup">Основные сведения</a></li>
                     <li class="pages-footer__item"><a href="#" data-popup-id="linkPopup">Структура и органы управления образовательной
                           организацией</a></li>
                     <li class="pages-footer__item"><a href="#" data-popup-id="linkPopup">Документы</a></li>
                     <li class="pages-footer__item"><a href="#" data-popup-id="linkPopup">Образование</a></li>
                     <li class="pages-footer__item"><a href="#" data-popup-id="linkPopup">Руководство</a></li>
                     <li class="pages-footer__item"><a href="#" data-popup-id="linkPopup">Персональный состав педагогических работников</a></li>
                     <li class="pages-footer__item"><a href="#" data-popup-id="linkPopup">Материально-техническое обеспечение и оснащенность
                           образовательного
                           процесса</a></li>
                     <li class="pages-footer__item"><a href="#" data-popup-id="linkPopup">Стипендии и иные виды материальной поддержки</a></li>
                     <li class="pages-footer__item"><a href="#" data-popup-id="linkPopup">Финансово-хозяйственная деятельность</a></li>
                     <li class="pages-footer__item"><a href="#" data-popup-id="linkPopup">Вакантные места для приема (перевода)</a></li>
                     <li class="pages-footer__item"><a href="#" data-popup-id="linkPopup">Сотрудники</a></li>
                     <li class="pages-footer__item"><a href="#" data-popup-id="linkPopup">Об Учебном комбинате</a></li>
                     <li class="pages-footer__item"><a href="#" data-popup-id="linkPopup">Партнеры</a></li>
                     <li class="pages-footer__item"><a href="#" data-popup-id="linkPopup">Отзывы</a></li>
                     <li class="pages-footer__item"><a href="#" data-popup-id="linkPopup">Реквизиты</a></li>
                     <li class="pages-footer__item"><a href="#" data-popup-id="linkPopup">Отчеты АО «Учебный комбинат»</a></li>
                  </ul>
               </div>
               <div class="footer__menu menu-footer">
                  <h3><span class="menu-footer__label">Меню сайта</span></h3>
                  <ul class="menu-footer__list">
                     <li class="menu-footer__item"><a href="#" data-popup-id="linkPopup">Основные сведения</a></li>
                     <li class="menu-footer__item"><a href="#" data-popup-id="linkPopup">Структура и органы управления образовательной
                           организацией</a></li>
                     <li class="menu-footer__item"><a href="#" data-popup-id="linkPopup">Документы</a></li>
                     <li class="menu-footer__item"><a href="#" data-popup-id="linkPopup">Образование</a></li>
                     <li class="menu-footer__item"><a href="#" data-popup-id="linkPopup">Руководство</a></li>
                     <li class="menu-footer__item"><a href="#" data-popup-id="linkPopup">Персональный состав педагогических работников</a></li>
                     <li class="menu-footer__item"><a href="#" data-popup-id="linkPopup">Материально-техническое обеспечение и оснащенность
                           образовательного процесса</a></li>
                     <li class="menu-footer__item"><a href="#" data-popup-id="linkPopup">Стипендии и иные виды материальной поддержки</a></li>
                     <li class="menu-footer__item"><a href="#" data-popup-id="linkPopup">Финансово-хозяйственная деятельность</a></li>
                     <li class="menu-footer__item"><a href="#" data-popup-id="linkPopup">Вакантные места для приема (перевода)</a></li>
                     <li class="menu-footer__item"><a href="#" data-popup-id="linkPopup">Сотрудники</a></li>
                     <li class="menu-footer__item"><a href="#" data-popup-id="linkPopup">Об Учебном комбинате</a></li>
                     <li class="menu-footer__item"><a href="#" data-popup-id="linkPopup">Партнеры</a></li>
                     <li class="menu-footer__item"><a href="#" data-popup-id="linkPopup">Отзывы</a></li>
                     <li class="menu-footer__item"><a href="#" data-popup-id="linkPopup">Реквизиты</a></li>
                     <li class="menu-footer__item"><a href="#" data-popup-id="linkPopup">Отчеты АО «Учебный комбинат»</a></li>
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
               <form class="popup__form" id="skip" name="popupform" method="post" action="{{route('contactForm')}}" autocomplete="on">
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