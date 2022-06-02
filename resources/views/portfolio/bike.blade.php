<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   <link rel="stylesheet" type="text/css" href="{{asset('css/bike.css')}}">
   <title>bicycle</title>
   <meta name="viewport" content="width=device-width">
   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
   <script src="{{asset('js/bike.js')}}"></script>
</head>

<body>
   <div class="wraper">
      <main class="page">
         <header class="header">
            <div class="header__row">
               <nav class="header-menu menu">
                  <div class="menu__body">
                     <ul class="menu_list">
                        <li class="header-menu__item"><a href="#" data-popup-id="linkPopup">about us</a></li>
                        <li class="header-menu__item"><a href="#" data-popup-id="linkPopup">work</a></li>
                        <li class="header-menu__item header-logo"><img class="header-logo__img"
                              src="{{asset('/img/bike/header_logo.png')}}">
                        <li class="header-menu__item"><a href="#" data-popup-id="linkPopup">shop</a></li>
                        <li class="header-menu__item"><a href="#" data-popup-id="linkPopup">contact</a></li>
                     </ul>
                  </div>
               </nav>
               <div class="menu__burger">
                  <span></span>
               </div>
               <!--<div class="header-logo"><img class="header-logo__img" src="{{asset('/img/bike/header_logo.png')}}"></div>-->
            </div>
         </header>

         <div class="main-screen">

         </div>

         <div class="content">
            <div class="generation">
               <div class="container">
                  <div class="generetion__row">
                     <div class="generation__icon">
                        <img src="{{asset('/img/bike/icons/generation_icon.png')}}">
                     </div>
                     <div class="generation__title">
                        <h1>A NEW GENERATION OF VINTAGE BIKE</h1>
                     </div>
                     <div class="generation__text">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                           been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                           galley of type and scrambled it to make a type specimen book. It has survived not only five
                           centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                     </div>
                  </div>
               </div>
            </div>

            <div class="oliva">
               <div class="oliva__row">

                  <div class="oliva__image">
                     <div class="description__background">
                        <a href="#" data-popup-id="linkPopup"><img class="description__background-logo"
                              src="{{asset('/img/bike/icons/oliva_Logo.png')}}"></a>
                        <div class="description__background-background"></div>
                     </div>
                  </div>

                  <div class="oliva__content description">
                     <div class="description__row">
                        <div class="description__about">
                           <div class="description__icon">
                              <img src="{{asset('/img/bike/icons/description__oliva-icon.png')}}">

                           </div>
                           <div class="description__title">
                              <h2>vintage Oliva</h2>
                           </div>
                           <div class="description__text">
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                 has been the industry's standard dummy text ever since the 1500s, when an unknown
                                 printer took a galley of type and scrambled it to make a type specimen book. It has
                                 survived.</p>

                           </div>
                        </div>
                        <div class="oliva__img description__img">
                        </div>
                     </div>
                  </div>

               </div>
            </div>

            <div class="vintage">
               <div class="vintage__row">
                  <div class="vintage__content description">
                     <div class="description__row">
                        <div class="description__about vintage__about">
                           <div class="description__icon">
                              <img src="{{asset('/img/bike/icons/content_icon_2.png')}}">

                           </div>
                           <div class="description__title">
                              <h2>La Boriosa</h2>
                           </div>
                           <div class="description__text">
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                 has been the industry's standard dummy text ever since the 1500s, when an unknown
                                 printer took a galley of type and scrambled it to make a type specimen book. It has
                                 survived.</p>
                           </div>
                        </div>
                        <div class="vintage__img description__img">
                        </div>
                     </div>
                  </div>
                  <div class="vintage__image">
                     <div class="description__background">
                        <a href="#" data-popup-id="linkPopup"><img class="description__background-logo"
                              src="{{asset('/img/bike/icons/vintage_logo.png')}}"></a>
                        <div class="description__background-background"></div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="retro">
               <div class="retro__row">

                  <div class="retro__image1">
                     <div class="description__background">
                        <a href="#" data-popup-id="linkPopup"><img class="description__background-logo"
                              src="{{asset('/img/bike/icons/logo_03.png')}}"></a>
                        <div class="description__background-background"></div>
                     </div>
                  </div>

                  <div class="retro__content description">
                     <div class="description__row">
                        <div class="description__about">
                           <div class="description__icon">
                              <img src="{{asset('/img/bike/icons/description__retro-icon.png')}}">

                           </div>
                           <div class="description__title">
                              <h2>retr Bike - M. Hulot</h2>
                           </div>
                           <div class="description__text">
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                 has been the industry's standard dummy text ever since the 1500s, when an unknown
                                 printer took a galley of type and scrambled it to make a type specimen book. It has
                                 survived.</p>
                           </div>
                        </div>
                        <div class="retro__img description__img">
                        </div>
                     </div>
                  </div>

                  <div class="retro__image2">
                     <div class="description__background">
                        <a href="#" data-popup-id="linkPopup"><img class="description__background-logo"
                              src="{{asset('/img/bike/icons/logo_03.png')}}"></a>
                        <div class="description__background-background"></div>
                     </div>
                  </div>

               </div>
            </div>

            <div class="twiter">
               <div class="container">

                  <div class="twiter__icon">
                     <a href="#" data-popup-id="linkPopup"><img src="{{asset('/img/bike/icons/twiter_icon.png')}}"></a>
                  </div>
                  <div class="twiter__title">
                     <p>AOD New York @aod <span>/ 35 min</span></p>
                  </div>
                  <div class="swiper">
                     <!-- Additional required wrapper -->
                     <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut tellus ac nulla semper
                              rhoncus. Nullam a odio porttitor, dictum turpis vitae, pretium ante amet.</p>
                        </div>
                        <div class="swiper-slide">
                           <p>Nullam a odio porttitor, dictum turpis vitae, pretium ante amet.
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut tellus ac nulla semper
                           </p>
                        </div>
                        <div class="swiper-slide">
                           <p>Consectetur adipiscing elit. Sed ut tellus acLorem ipsum dolor sit amet, nulla semper
                              rhoncus. Nullam a odio porttitor, dictum turpis vitae.</p>
                        </div>
                     </div>
                     <div class="swiper-pagination"></div>
                     <div class="swiper-button-prev"></div>
                     <div class="swiper-button-next"></div>
                  </div>
               </div>
            </div>

            <div class="shop">
               <div class="shop__row">

                  <div class="shop__block1 block1">
                     <div class="block1__row">
                        <div class="block1__first-line">
                           <div class="block1__image1 shop-img">
                              <!--<div class="block1__image1-hight"></div>-->
                              <div class="description__background">
                                 <a href="#" data-popup-id="linkPopup"><img class="description__background-logo"
                                       src="{{asset('/img/bike/icons/foto_logo.png')}}"></a>
                                 <div class="description__background-background"></div>
                              </div>
                           </div>
                           <div class="block1__image2 shop-img">
                              <div class="description__background">
                                 <a href="#" data-popup-id="linkPopup"><img class="description__background-logo"
                                       src="{{asset('/img/bike/icons/foto_logo.png')}}"></a>
                                 <div class="description__background-background"></div>
                              </div>
                           </div>
                        </div>
                        <div class="block1__image3 shop-img">
                           <!--<div class="block1__image3-hight"></div>-->
                           <div class="description__background">
                              <a href="#" data-popup-id="linkPopup"><img class="description__background-logo"
                                    src="{{asset('/img/bike/icons/foto_logo.png')}}"></a>
                              <div class="description__background-background"></div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="shop__block2 block2">
                     <div class="block2__row">
                        <div class="block2__image1 shop-img">
                           <div class="description__background">
                              <a href="#" data-popup-id="linkPopup"><img class="description__background-logo"
                                    src="{{asset('/img/bike/icons/foto_logo.png')}}"></a>
                              <div class="description__background-background"></div>
                           </div>
                        </div>
                        <div class="block2__image2 shop-img">
                           <div class="description__background">
                              <a href="#" data-popup-id="linkPopup"><img class="description__background-logo"
                                    src="{{asset('/img/bike/icons/foto_logo.png')}}"></a>
                              <div class="description__background-background"></div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="shop__block3 block3">
                     <div class="block3__row">
                        <div class="block3__image1 shop-img">
                           <!--<div class="block3__image1-hight"></div>-->
                           <div class="description__background">
                              <a href="#" data-popup-id="linkPopup"><img class="description__background-logo"
                                    src="{{asset('/img/bike/icons/foto_logo.png')}}"></a>
                              <div class="description__background-background"></div>
                           </div>
                        </div>
                        <div class="block3__first-line">
                           <div class="block3__image2 shop-img">
                              <!--<div class="block3__image2-hight"></div>-->
                              <div class="description__background">
                                 <a href="#" data-popup-id="linkPopup"><img class="description__background-logo"
                                       src="{{asset('/img/bike/icons/foto_logo.png')}}"></a>
                                 <div class="description__background-background"></div>
                              </div>
                           </div>
                           <div class="block3__image3 shop-img">
                              <div class="description__background">
                                 <a href="#" data-popup-id="linkPopup"><img class="description__background-logo"
                                       src="{{asset('/img/bike/icons/foto_logo.png')}}"></a>
                                 <div class="description__background-background"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

               </div>
               <div class="shop__discover discover">
                  <div class="discover__row">

                     <a href="#" class="discover__button" data-popup-id="linkPopup">
                        <p>DISCOVER THE SHOP</p>
                     </a>

                  </div>
               </div>
            </div>

            <div class="subscribe">
               <div class="container">
                  <div class="subscribe__row">
                     <div class="subscribe__logo">
                        <img src="{{asset('/img/bike/icons/subscribe__logo.png')}}">
                     </div>
                     <div class="subscribe__label">
                        <p>Stay on the saddle!</p>
                     </div>
                     <div class="subscribe__email email">
                        <div class="email__form">
                           <form id="bike" method="post" class="form_email" action="{{route('contactForm')}}">
                              <input type="text" placeholder="enter your email..." name="email"
                                 class="email__text-field">
                              <input type="submit" value="go" class="email__button">
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <footer class="footer">
            <div class="container">
               <div class="footer__row">
                  <div class="footer__conacts">
                     <p>AOD New York</p>
                     <p>2250 Lexington Avenue </p>
                     <p>New York, NY 10035 - info@domain.com</p>
                  </div>
                  <div class="footer__icons">
                     <a href="#" data-popup-id="linkPopup"><img
                           src="{{asset('/img/bike/icons/footer_twiter.png')}}"></a>
                     <a href="#" data-popup-id="linkPopup"><img
                           src="{{asset('/img/bike/icons/foter_facebook.png')}}"></a>
                     <a href="#" data-popup-id="linkPopup"><img
                           src="{{asset('/img/bike/icons/footer_printerest.png')}}"></a>
                  </div>
                  <div class="footer__logo">
                     <span>Handcrafted by</span><img src="{{asset('/img/bike/icons/Y_E_B_O_Logo.png')}}">
                  </div>
               </div>
            </div>
         </footer>
      </main>
   </div>
   <div id="linkPopup" class="popup">
      <div class="popup__body">
         <div class="popup__content">
            <a href="#" class="popup__close close-popup">X</a>
            <div class="popup__text-link">
               <h4>
                  <p></p>You cannot follow the links as this page is not a full site.</p>
                  <p>This is just a layout created to
                     demonstrate working skills.</p>
                  <br>
                  <p></p>Вы не можете переходить по ссылкам, так как эта страница не является полноценным сайтом.</p>
                  <p>Это всего лишь макет, созданный для демонстрации рабочих навыков.
               </h4>
            </div>
            <div class="popup__button">
               OK
            </div>
         </div>
      </div>
   </div>
</body>

</html>