<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- FAVICON https://favicon.io/favicon-converter/

   <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
   <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
   <link rel="manifest" href="img/favicon/site.webmanifest">

   -->

   <title>Главная страница</title>
   <meta name="description" content="Описание главной страницы">

   <meta property="og:url" content="" />
   <meta property="og:type" content="website" />
   <meta property="og:title" content="Заголовок главной страницы для месенджеров" />
   <meta property="og:description" content="Описание главной страницы для месенджеров" />
   <meta property="og:site_name" content="" />
   <meta property="og:image" content="" />

   <link
      href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400&amp;family=Roboto&amp;display=swap"
      rel="stylesheet">

   <link rel="stylesheet" href="{{asset('css/furino.css')}}">
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>

<body id="body">
   <div class="wrapper">
      <header class="header">
         <div class="header__wraper">
            <div class="header__container">
               <div class="header__body">
                  <div class="header__main">
                     <div class="header__logo">
                        Funiro.
                     </div>
                     <div class="header__menu menu">
                        <nav class="menu__body">
                           <ul class="menu__list">
                              <li class="menu__item">
                                 <a href="" data-popup-id="linkPopup"
                                    class="menu__link link-on-popup">Products</a><button type="button"
                                    class="menu__item-button _icon-arrow-down"></button>
                                 <ul class="menu__sub-list">
                                    <li class="menu__sub-item"><a href="" data-popup-id="linkPopup"
                                          class="menu__sub-link link-on-popup">Product 1</a></li>
                                    <li class="menu__sub-item"><a href="" data-popup-id="linkPopup"
                                          class="menu__sub-link link-on-popup">Product 2</a></li>
                                    <li class="menu__sub-item"><a href="" data-popup-id="linkPopup"
                                          class="menu__sub-link link-on-popup">Product 3</a></li>
                                    <li class="menu__sub-item"><a href="" data-popup-id="linkPopup"
                                          class="menu__sub-link link-on-popup">Product 4</a></li>
                                 </ul>
                              </li>
                              <li class="menu__item"><a href="" data-popup-id="linkPopup"
                                    class="menu__link link-on-popup">Rooms</a><button type="button"
                                    class="menu__item-button _icon-arrow-down"></button>

                                 <ul class="menu__sub-list">
                                    <li class="menu__sub-item"><a href="" data-popup-id="linkPopup"
                                          class="menu__sub-link link-on-popup">Room 1</a></li>
                                    <li class="menu__sub-item"><a href="" data-popup-id="linkPopup"
                                          class="menu__sub-link link-on-popup">Room 2</a></li>
                                    <li class="menu__sub-item"><a href="" data-popup-id="linkPopup"
                                          class="menu__sub-link link-on-popup">Room 3</a></li>
                                    <li class="menu__sub-item"><a href="" data-popup-id="linkPopup"
                                          class="menu__sub-link link-on-popup">Room 4</a></li>
                                 </ul>

                              </li>
                              <li class="menu__item"><a href="" data-popup-id="linkPopup"
                                    class="menu__link link-on-popup">Inspirations</a></li>
                           </ul>
                        </nav>
                     </div>
                  </div>
                  <div class="header__search search-form">
                     <button type="button" class="search-form__button _icon-search"></button>
                     <form data-popup-id="linkPopup" action="#" class="search-form__form">
                        <button type="submit" class="search-form__button-submit _icon-search"></button>
                        <input type="text" name="" class="search-form__input" placeholder="Search for minimalist chair"
                           autocomplete="off">
                     </form>
                  </div>
                  <div class="header__actions actions">
                     <a href="#" data-popup-id="linkPopup" class="actions__favorite link-on-popup _icon-favorite"></a>
                     <div class="actions__cart cart-header">
                        <a href="" class="cart-header__icon _icon-Cart"></a>
                        <ul class="cart-header__header-list cart-list">
                        </ul>
                        </button>
                     </div>
                     <a href="#" data-popup-id="linkPopup" class="actions__avatar link-on-popup">
                        <picture>
                           <source srcset="{{asset('/img/furino/ava_light.webp')}}" type="image/webp"><img
                              src="{{asset('/img/furino/ava_light.jpg')}}" alt="Avatar">
                        </picture>
                     </a>
                  </div>
                  <button type="button" class="menu__icon icon-menu">
                     <span></span>
                     <span></span>
                     <span></span>
                  </button>
               </div>
            </div>
         </div>


      </header>
      <main class="page">
         <section class="main-slider">
            <div class="main-slider__container">
               <div class="main-slider__body">
                  <div class="main-slider__content content-main-slider">
                     <div class="content-main-slider__body">
                        <div class="content-main-slider__tittle">
                           High-Quality
                           Furniture Just
                           For You
                        </div>
                        <div class="content-main-slider__text">
                           Our furniture is made from selected and best quality materials that are suitable for your
                           dream home
                        </div>
                        <a href="#" data-popup-id="linkPopup" class="content-main-slider__btn link-on-popup"><span>Shop
                              Now</span></a>
                     </div>
                  </div>
                  <div class="main-slider__slider slider-main">
                     <div class="slider-main__controls controls">
                        <div class="controls__dots"></div>
                        <div class="controls__buttons">
                           <button type="button" class="controls__left-btn _icon-arrow-down"></button>
                           <button type="button" class="controls__right-btn _icon-arrow-down"></button>
                        </div>
                     </div>
                     <div class="slider-main__body">
                        <div class="slider-main__slider swiper">
                           <div class="slider-main__wrapper swiper-wrapper">
                              <div class="slider-main__slide slide-main-slider swiper-slide">
                                 <div class="slide-main-slider__img">
                                    <picture>
                                       <source srcset="{{asset('/img/furino/main-slider/1.webp')}}" type="image/webp">
                                       <img src="{{asset('/img/furino/main-slider/1.jpg')}}" alt="Image">
                                    </picture>
                                 </div>
                                 <div data-swiper-parallax-opacity="0" data-swiper-parallax-x="-100%"
                                    class="slide-main-slider__content content-slide">
                                    <div class="content-slide__tittle">
                                       Bohauss
                                    </div>
                                    <div class="content-slide__text">Luxury big sofa 2-seat</div>
                                    <div class="content-slide__price price-slide">
                                       <div class="price-slide__price">Rp 17.000.000</div>
                                       <a href="" data-popup-id="linkPopup"
                                          class="price-slide__link link-on-popup _icon-arrow-link"></a>
                                    </div>
                                 </div>
                              </div>
                              <div class="slider-main__slide slide-main-slider swiper-slide">
                                 <div class="slide-main-slider__img">
                                    <picture>
                                       <source srcset="{{asset('/img/furino/main-slider/2.webp')}}" type="image/webp">
                                       <img src="{{asset('/img/furino/main-slider/2.jpg')}}" alt="Image">
                                    </picture>
                                 </div>
                                 <div data-swiper-parallax-opacity="0" data-swiper-parallax-x="-100%"
                                    class="slide-main-slider__content content-slide">
                                    <div class="content-slide__tittle">
                                       Bohauss
                                    </div>
                                    <div class="content-slide__text">Luxury big sofa 2-seat</div>
                                    <div class="content-slide__price price-slide">
                                       <div class="price-slide__price">Rp 17.000.000</div>
                                       <a href="" data-popup-id="linkPopup"
                                          class="price-slide__link link-on-popup _icon-arrow-link"></a>
                                    </div>
                                 </div>
                              </div>
                              <div class="slider-main__slide slide-main-slider swiper-slide">
                                 <div class="slide-main-slider__img">
                                    <picture>
                                       <source srcset="{{asset('/img/furino/main-slider/3.webp')}}" type="image/webp">
                                       <img src="{{asset('/img/furino/main-slider/3.jpg')}}" alt="Image">
                                    </picture>
                                 </div>
                                 <div data-swiper-parallax-opacity="0" data-swiper-parallax-x="-100%"
                                    class="slide-main-slider__content content-slide">
                                    <div class="content-slide__tittle">
                                       Bohauss
                                    </div>
                                    <div class="content-slide__text">Luxury big sofa 2-seat</div>
                                    <div class="content-slide__price price-slide">
                                       <div class="price-slide__price">Rp 17.000.000</div>
                                       <a href="" data-popup-id="linkPopup"
                                          class="price-slide__link link-on-popup _icon-arrow-link"></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a href="#" data-popup-id="linkPopup"
                        class="content-main-slider__btn--mobile link-on-popup"><span>Shop
                           Now</span></a>
                  </div>
               </div>
            </div>
         </section>
         <section class="advantages">
            <div class="advantages__container">
               <div class="advantages__row-items items-advantages">
                  <div class="items-advantages__item">
                     <div class="items-advantages__item-img">
                        <img src="{{asset('/img/furino/svg/advantage_1.svg')}}" alt="advantage">
                     </div>
                     <div class="items-advantages__item-title">
                        High Quality
                     </div>
                     <div class="items-advantages__item-text">
                        crafted from top materials
                     </div>
                  </div>
                  <div class="items-advantages__item">
                     <div class="items-advantages__item-img">
                        <img src="{{asset('/img/furino/svg/advantage_2.svg')}}" alt="advantages">
                     </div>
                     <div class="items-advantages__item-title">
                        Warrany Protection
                     </div>
                     <div class="items-advantages__item-text">
                        Over 2 years
                     </div>
                  </div>
               </div>
               <div class="advantages__row-items items-advantages">
                  <div class="items-advantages__item">
                     <div class="items-advantages__item-img">
                        <img src="{{asset('/img/furino/svg/advantage_3.svg')}}" alt="advantages">
                     </div>
                     <div class="items-advantages__item-title">
                        Free Shipping
                     </div>
                     <div class="items-advantages__item-text">
                        Order over 150 $
                     </div>
                  </div>
                  <div class="items-advantages__item">
                     <div class="items-advantages__item-img">
                        <img src="{{asset('/img/furino/svg/advantage_4.svg')}}" alt="advantages">
                     </div>
                     <div class="items-advantages__item-title">
                        24 / 7 Support
                     </div>
                     <div class="items-advantages__item-text">
                        Dedicated support
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="products">
            <div class="products__container">
               <h2 class="products__tittle _tittle">Our Products</h2>
               <div class="products__items">

                  <div data-id="1" class="products__item item-product">
                     <a href="#" class="item-product__img">
                        <picture>
                           <source srcset="{{asset('/img/furino/products/syltherine.webp')}}" type="image/webp"><img
                              src="{{asset('/img/furino/products/syltherine.jpg')}}" alt="Syltherine">
                        </picture>
                     </a>
                     <div class="item-product__description description-product">
                        <h5 class="description-product__tittle">Syltherine</h5>
                        <div class="description-product__text">Stylish cafe chair</div>
                        <div class="description-product__price price-product">
                           <div class="price-product__current">EUR 2.500</div>
                           <div class="price-product__old">EUR 3.500</div>
                        </div>
                     </div>
                     <div class="item-product__label label-product">
                        <div class="label-product__sale active">-30%</div>
                        <div class="label-product__new">new</div>
                     </div>
                     <div class="item-product__hover hover-product">
                        <div class="hover-product__actions">
                           <div class="hover-product__btn">Add to cart</div>
                           <div class="hover-product__social">
                              <a href="#" data-popup-id="linkPopup"
                                 class="hover-product__share link-on-popup _icon-share">Share</a>
                              <a href="#" data-popup-id="linkPopup"
                                 class="hover-product__like link-on-popup _icon-favorite">Like</a>
                           </div>
                        </div>
                        <a href="#" data-popup-id="linkPopup" class="hover-product__look link-on-popup">
                           <p>Learn more</p>
                           <div class="_icon-arrow-link"></div>
                        </a>

                     </div>
                  </div>

                  <div data-id="2" class="products__item item-product">
                     <a href="#" class="item-product__img">
                        <picture>
                           <source srcset="{{asset('/img/furino/products/leviosa.webp')}}" type="image/webp"><img
                              src="{{asset('/img/furino/products/leviosa.jpg')}}" alt="Leviosa">
                        </picture>
                     </a>
                     <div class="item-product__description description-product">
                        <h5 class="description-product__tittle">Leviosa</h5>
                        <div class="description-product__text">Stylish cafe chair</div>
                        <div class="description-product__price price-product">
                           <div class="price-product__current">EUR 2.500</div>
                           <div class="price-product__old"></div>
                        </div>
                     </div>
                     <div class="item-product__label label-product">
                        <div class="label-product__sale active"">-30%</div>
                        <div class=" label-product__new">new</div>
                     </div>
                     <div class="item-product__hover hover-product">
                        <div class="hover-product__actions">
                           <div class="hover-product__btn">Add to cart</div>
                           <div class="hover-product__social">
                              <a href="#" data-popup-id="linkPopup"
                                 class="hover-product__share link-on-popup _icon-share">Share</a>
                              <a href="#" data-popup-id="linkPopup"
                                 class="hover-product__like link-on-popup _icon-favorite">Like</a>
                           </div>
                        </div>
                        <a href="#" data-popup-id="linkPopup" class="hover-product__look link-on-popup">
                           <p>Learn more</p>
                           <div class="_icon-arrow-link"></div>
                        </a>

                     </div>
                  </div>

                  <div data-id="3" class="products__item item-product">
                     <a href="#" class="item-product__img">
                        <picture>
                           <source srcset="{{asset('/img/furino/products/lolito.webp')}}" type="image/webp"><img
                              src="{{asset('/img/furino/products/lolito.jpg')}}" alt="Lolito">
                        </picture>
                     </a>
                     <div class="item-product__description description-product">
                        <h5 class="description-product__tittle">Lolito</h5>
                        <div class="description-product__text">Luxury big sofa</div>
                        <div class="description-product__price price-product">
                           <div class="price-product__current">EUR 7.000</div>
                           <div class="price-product__old">EUR 14.000</div>
                        </div>
                     </div>
                     <div class="item-product__label label-product">
                        <div class="label-product__sale active"">-50%</div>
                        <div class=" label-product__new">new</div>
                     </div>
                     <div class="item-product__hover hover-product">
                        <div class="hover-product__actions">
                           <div class="hover-product__btn">Add to cart</div>
                           <div class="hover-product__social">
                              <a href="#" data-popup-id="linkPopup"
                                 class="hover-product__share link-on-popup _icon-share">Share</a>
                              <a href="#" data-popup-id="linkPopup"
                                 class="hover-product__like link-on-popup _icon-favorite">Like</a>
                           </div>
                        </div>
                        <a href="#" data-popup-id="linkPopup" class="hover-product__look link-on-popup">
                           <p>Learn more</p>
                           <div class="_icon-arrow-link"></div>
                        </a>

                     </div>
                  </div>

                  <div data-id="4" class="products__item item-product">
                     <a href="#" class="item-product__img">
                        <picture>
                           <source srcset="{{asset('/img/furino/products/respira.webp')}}" type="image/webp"><img
                              src="{{asset('/img/furino/products/respira.jpg')}}" alt="Respira">
                        </picture>
                     </a>
                     <div class="item-product__description description-product">
                        <h5 class="description-product__tittle">Respira</h5>
                        <div class="description-product__text">Minimalist fan</div>
                        <div class="description-product__price price-product">
                           <div class="price-product__current">EUR 500</div>
                           <div class="price-product__old"></div>
                        </div>
                     </div>
                     <div class="item-product__label label-product">
                        <div class="label-product__sale"></div>
                        <div class="label-product__new active"">new</div>
                     </div>
                     <div class=" item-product__hover hover-product">
                           <div class="hover-product__actions">
                              <div class="hover-product__btn">Add to cart</div>
                              <div class="hover-product__social">
                                 <a href="#" data-popup-id="linkPopup"
                                    class="hover-product__share link-on-popup _icon-share">Share</a>
                                 <a href="#" data-popup-id="linkPopup"
                                    class="hover-product__like link-on-popup _icon-favorite">Like</a>
                              </div>
                           </div>
                           <a href="#" data-popup-id="linkPopup" class="hover-product__look link-on-popup">

                              <p>Learn more</p>
                              <div class="_icon-arrow-link"></div>
                           </a>

                        </div>
                     </div>

                  </div>
                  <div class="products__footer">
                     <a href="#" class="products__footer--link">Show More</a>
                  </div>
               </div>
         </section>
         <section class="rooms">
            <div class="rooms__container">
               <div class="rooms__content content-rooms">
                  <div class="content-rooms__body">
                     <div class="content-rooms__title">50+ Beautiful rooms inspiration</div>
                     <div class="content-rooms__text">Our designer already made a lot of beautiful prototipe of rooms
                        that inspire you</div>
                     <a href="#" data-popup-id="linkPopup" class="content-rooms__btn link-on-popup">Explore More</a>
                  </div>
               </div>
               <div class="rooms__slider-body">
                  <div class="rooms__slider rooms-slider swiper">
                     <div class="rooms__slider-wraper swiper-wrapper">
                        <div class="rooms__slider-slide slide-rooms swiper-slide">
                           <div class="slide-rooms__img">
                              <picture>
                                 <source srcset="{{asset('/img/furino/rooms/1.webp')}}" type="image/webp"><img
                                    src="{{asset('/img/furino/rooms/1.jpg')}}" alt="Room 1">
                              </picture>
                           </div>
                           <div data-swiper-parallax-opacity="0" data-swiper-parallax-y="100%"
                              class="slide-rooms__description ">
                              <div class="slide-rooms__description-content">
                                 <div class="slide-rooms__description-text slide-rooms-text">
                                    <div class="slide-rooms-text__slide-number">01</div>
                                    <div class="slide-rooms-text__dash"></div>
                                    <div class="slide-rooms-text__text">Bed Room</div>
                                 </div>
                                 <div class="slide-rooms__description-title">
                                    Inner Peace
                                 </div>
                              </div>
                              <div class="slide-rooms__description-btn">
                                 <a href="#" data-popup-id="linkPopup"
                                    class="slide-rooms__description-link link-on-popup _icon-arrow-link"></a>
                              </div>
                           </div>
                        </div>

                        <div class="rooms__slider-slide slide-rooms swiper-slide">
                           <div class="slide-rooms__img">
                              <picture>
                                 <source srcset="{{asset('/img/furino/rooms/2.webp')}}" type="image/webp"><img
                                    src="{{asset('/img/furino/rooms/2.jpg')}}" alt="Room 2">
                              </picture>
                           </div>
                           <div data-swiper-parallax-opacity="0" data-swiper-parallax-y="100%"
                              class="slide-rooms__description ">
                              <div class="slide-rooms__description-content">
                                 <div class="slide-rooms__description-text slide-rooms-text">
                                    <div class="slide-rooms-text__slide-number">02</div>
                                    <div class="slide-rooms-text__dash"></div>
                                    <div class="slide-rooms-text__text">Kitchen Room</div>
                                 </div>
                                 <div class="slide-rooms__description-title">
                                    Kitchen Comfort
                                 </div>
                              </div>
                              <div class="slide-rooms__description-btn">
                                 <a href="#" data-popup-id="linkPopup"
                                    class="slide-rooms__description-link link-on-popup _icon-arrow-link"></a>
                              </div>
                           </div>
                        </div>
                        <div class="rooms__slider-slide slide-rooms swiper-slide">
                           <div class="slide-rooms__img">
                              <picture>
                                 <source srcset="{{asset('/img/furino/rooms/3.webp')}}" type="image/webp"><img
                                    src="{{asset('/img/furino/rooms/3.jpg')}}" alt="Room 3">
                              </picture>
                           </div>
                           <div data-swiper-parallax-opacity="0" data-swiper-parallax-y="100%"
                              class="slide-rooms__description ">
                              <div class="slide-rooms__description-content">
                                 <div class="slide-rooms__description-text slide-rooms-text">
                                    <div class="slide-rooms-text__slide-number">03</div>
                                    <div class="slide-rooms-text__dash"></div>
                                    <div class="slide-rooms-text__text">Dresser</div>
                                 </div>
                                 <div class="slide-rooms__description-title">
                                    Dresser Comfort
                                 </div>
                              </div>
                              <div class="slide-rooms__description-btn">
                                 <a href="#" data-popup-id="linkPopup"
                                    class="slide-rooms__description-link link-on-popup _icon-arrow-link"></a>
                              </div>
                           </div>

                        </div>
                     </div>
                     <div class="slider-main__controls controls">
                        <div class="controls__dots"></div>
                     </div>
                  </div>
                  <div class="controls__buttons">
                     <button type="button" class="controls__left-btn _icon-arrow-down"></button>
                     <button type="button" class="controls__right-btn _icon-arrow-down"></button>
                  </div>
               </div>
            </div>
         </section>
         <section class="tips">
            <div class="tips__container">
               <h2 class="tips__title _tittle">Tips & Tricks</h2>
               <div class="tips__slider slider-tips">
                  <div class="slider-tips__swiper slider-tips__body swiper">
                     <div class="slider-tips__wrapper swiper-wrapper">
                        <div class="slider-tips__slide tips-slide swiper-slide">
                           <div class="tips-slide__body">
                              <div class="tips-slide__img">
                                 <picture>
                                    <source srcset="{{asset('/img/furino/tips/1.webp')}}" type="image/webp"><img
                                       src="{{asset('/img/furino/tips/1.jpg')}}" alt="Tip 1">
                                 </picture>
                              </div>
                              <div class="tips-slide__content">
                                 <h3 class="tips-slide__title"> <a data-popup-id="linkPopup" class="link-on-popup"
                                       href="#">How to create a living room to love</a></h3>
                                 <div class="tips-slide__date">
                                    20 jan 2020
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="slider-tips__slide tips-slide swiper-slide">
                           <div class="tips-slide__body">
                              <div class="tips-slide__img">
                                 <picture>
                                    <source srcset="{{asset('/img/furino/tips/2.webp')}}" type="image/webp"><img
                                       src="{{asset('/img/furino/tips/2.jpg')}}" alt="Tip 1">
                                 </picture>
                              </div>
                              <div class="tips-slide__content">
                                 <h3 class="tips-slide__title"><a data-popup-id="linkPopup" class="link-on-popup"
                                       href="#">Solution for clean look working space</a></h3>
                                 <div class="tips-slide__date">
                                    10 jan 2020
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="slider-tips__slide tips-slide swiper-slide">
                           <div class="tips-slide__body">
                              <div class="tips-slide__img">
                                 <picture>
                                    <source srcset="{{asset('/img/furino/tips/3.webp')}}" type="image/webp"><img
                                       src="{{asset('/img/furino/tips/3.jpg')}}" alt="Tip 1">
                                 </picture>
                              </div>
                              <div class="tips-slide__content">
                                 <h3 class="tips-slide__title"><a data-popup-id="linkPopup" class="link-on-popup"
                                       href="#">Make your cooking activity more fun with good setup</a></h3>
                                 <div class="tips-slide__date">
                                    20 jan 2020
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="slider-main__controls controls">
                        <div class="controls__dots"></div>
                     </div>
                  </div>
                  <div class="controls__buttons">
                     <button type="button" class="controls__left-btn _icon-arrow-down"></button>
                     <button type="button" class="controls__right-btn _icon-arrow-down"></button>
                  </div>
               </div>
            </div>
         </section>
         <section class="furniture">
            <h3 class="furniture__subtitle">Share your setup with</h3>
            <h2 class="furniture__title _tittle">#FuniroFurniture</h2>
            <div class="furniture__gallery gallery-furniture">
               <div data-speed="0.01" class="gallery-furniture__body">
                  <div class="gallery-furniture__row">
                     <div class="gallery-furniture__item gallery-furniture__item-left-top">
                        <div data-src="{{asset('/img/furino/furniture/05.jpg')}}" class="gallery-furniture__img">
                           <picture>
                              <source srcset="{{asset('/img/furino/furniture/05.webp')}}" type="image/webp"><img
                                 src="{{asset('/img/furino/furniture/05.jpg')}}" alt="Furniture 1">
                           </picture>
                        </div>
                        <div data-src="{{asset('/img/furino/furniture/01.jpg')}}" class="gallery-furniture__img">
                           <picture>
                              <source srcset="{{asset('/img/furino/furniture/01.webp')}}" type="image/webp"><img
                                 src="{{asset('/img/furino/furniture/01.jpg')}}" alt="Furniture 2">
                           </picture>
                        </div>
                        <div data-src="{{asset('/img/furino/furniture/02.jpg')}}" class="gallery-furniture__img">
                           <picture>
                              <source srcset="{{asset('/img/furino/furniture/02.webp')}}" type="image/webp"><img
                                 src="{{asset('/img/furino/furniture/02.jpg')}}" alt="Furniture 3">
                           </picture>
                        </div>
                     </div>
                     <div class="gallery-furniture__item gallery-furniture__item-left-bottom">
                        <div data-src="{{asset('/img/furino/furniture/04.jpg')}}" class="gallery-furniture__img">
                           <picture>
                              <source srcset="{{asset('/img/furino/furniture/04.webp')}}" type="image/webp"><img
                                 src="{{asset('/img/furino/furniture/04.jpg')}}" alt="Furniture 4">
                           </picture>
                        </div>
                        <div data-src="{{asset('/img/furino/furniture/06.jpg')}}" class="gallery-furniture__img">
                           <picture>
                              <source srcset="{{asset('/img/furino/furniture/06.webp')}}" type="image/webp"><img
                                 src="{{asset('/img/furino/furniture/06.jpg')}}" alt="Furniture 5">
                           </picture>
                        </div>
                        <div data-src="{{asset('/img/furino/furniture/07.jpg')}}" class="gallery-furniture__img">
                           <picture>
                              <source srcset="{{asset('/img/furino/furniture/07.webp')}}" type="image/webp"><img
                                 src="{{asset('/img/furino/furniture/07.jpg')}}" alt="Furniture 6">
                           </picture>
                        </div>
                     </div>
                  </div>
                  <div class="gallery-furniture__row">
                     <div class="gallery-furniture__item gallery-furniture__item-center">
                        <div data-src="{{asset('/img/furino/furniture/03.jpg')}}" class="gallery-furniture__img">
                           <picture>
                              <source srcset="{{asset('/img/furino/furniture/03.webp')}}" type="image/webp"><img
                                 src="{{asset('/img/furino/furniture/03.jpg')}}" alt="Furniture 7">
                           </picture>
                        </div>
                     </div>
                  </div>
                  <div class="gallery-furniture__row">
                     <div class="gallery-furniture__item gallery-furniture__item-right-top">
                        <div data-src="{{asset('/img/furino/furniture/04.jpg')}}" class="gallery-furniture__img">
                           <picture>
                              <source srcset="{{asset('/img/furino/furniture/04.webp')}}" type="image/webp"><img
                                 src="{{asset('/img/furino/furniture/04.jpg')}}" alt="Furniture 8">
                           </picture>
                        </div>
                        <div data-src="{{asset('/img/furino/furniture/05.jpg')}}" class="gallery-furniture__img">
                           <picture>
                              <source srcset="{{asset('/img/furino/furniture/05.webp')}}" type="image/webp"><img
                                 src="{{asset('/img/furino/furniture/05.jpg')}}" alt="Furniture 9">
                           </picture>
                        </div>
                        <div data-src="{{asset('/img/furino/furniture/06.jpg')}}" class="gallery-furniture__img">
                           <picture>
                              <source srcset="{{asset('/img/furino/furniture/06.webp')}}" type="image/webp"><img
                                 src="{{asset('/img/furino/furniture/06.jpg')}}" alt="Furniture 10">
                           </picture>
                        </div>
                     </div>
                     <div class="gallery-furniture__item gallery-furniture__item-right-bottom">
                        <div data-src="{{asset('/img/furino/furniture/08.jpg')}}" class="gallery-furniture__img">
                           <picture>
                              <source srcset="{{asset('/img/furino/furniture/08.webp')}}" type="image/webp"><img
                                 src="{{asset('/img/furino/furniture/08.jpg')}}" alt="Furniture 11">
                           </picture>
                        </div>
                        <div data-src="{{asset('/img/furino/furniture/09.jpg')}}" class="gallery-furniture__img">
                           <picture>
                              <source srcset="{{asset('/img/furino/furniture/09.webp')}}" type="image/webp"><img
                                 src="{{asset('/img/furino/furniture/09.jpg')}}" alt="Furniture 12">
                           </picture>
                        </div>
                        <div data-src="{{asset('/img/furino/furniture/02.jpg')}}" class="gallery-furniture__img">
                           <picture>
                              <source srcset="{{asset('/img/furino/furniture/02.webp')}}" type="image/webp"><img
                                 src="{{asset('/img/furino/furniture/02.jpg')}}" alt="Furniture 13">
                           </picture>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>
      <footer class="footer">
         <div class="footer__container">
            <div class="footer__body">
               <div class="footer__row">
                  <div class="footer__items item-footer menu-footer">
                     <div class="item-footer__row">
                        <div class="item-footer__body body-item-footer">
                           <div class="body-item-footer__tittle">
                              Funiro.
                           </div>
                           <div class="body-item-footer__content">
                              <div class="body-item-footer__text">
                                 Worldwide furniture store since 2020. We sell over 1000+ branded products on our
                                 website
                              </div>
                              <div class="body-item-footer__address _icon-location">
                                 Sawojajar Malang, Indonesia
                              </div>
                              <div class="body-item-footer__phone">
                                 <a href="tel:%2B62894563455" class="_icon-phone">+6289 456 3455</a>
                              </div>
                              <div class="body-item-footer__link-site">
                                 <a data-popup-id="linkPopup" class="link-on-popup" href="#">www.funiro.com</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="footer__items item-footer accont-footer">
                     <div class="item-footer__row">
                        <div class="item-footer__body body-item-footer">
                           <div class="body-item-footer__tittle toggle-block">
                              Menu
                           </div>
                           <div class="body-item-footer__content">
                              <ul class="body-item-footer__list">
                                 <li class="body-item-footer__list-item"><a data-popup-id="linkPopup" href="#"
                                       class="body-item-footer__link link-on-popup">Products</a></li>
                                 <li class="body-item-footer__list-item"><a href="#" data-popup-id="linkPopup"
                                       class="body-item-footer__link link-on-popup">Rooms</a>
                                 </li>
                                 <li class="body-item-footer__list-item"><a href="#" data-popup-id="linkPopup"
                                       class="body-item-footer__link link-on-popup">Inspirations</a></li>
                                 <li class="body-item-footer__list-item"><a href="#" data-popup-id="linkPopup"
                                       class="body-item-footer__link link-on-popup">About
                                       Us</a></li>
                                 <li class="body-item-footer__list-item"><a href="#" data-popup-id="linkPopup"
                                       class="body-item-footer__link link-on-popup">Terms &
                                       Policy</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="item-footer__body body-item-footer">
                           <div class="body-item-footer__tittle toggle-block">
                              Account
                           </div>
                           <div class="body-item-footer__content">
                              <ul class="body-item-footer__list">
                                 <li class="body-item-footer__list-item"><a data-popup-id="linkPopup" href="#"
                                       class="body-item-footer__link link-on-popup">My
                                       Account</a></li>
                                 <li class="body-item-footer__list-item"><a data-popup-id="linkPopup" href="#"
                                       class="body-item-footer__link link-on-popup">Checkout</a>
                                 </li>
                                 <li class="body-item-footer__list-item"><a data-popup-id="linkPopup" href="#"
                                       class="body-item-footer__link link-on-popup">My
                                       Cart</a></li>
                                 <li class="body-item-footer__list-item"><a data-popup-id="linkPopup" href="#"
                                       class="body-item-footer__link link-on-popup">My
                                       catalog</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="item-footer__body body-item-footer">
                           <div class="body-item-footer__tittle toggle-block">
                              Stay Connected
                           </div>
                           <div class="body-item-footer__content">
                              <ul class="body-item-footer__list">
                                 <li class="body-item-footer__list-item"><a data-popup-id="linkPopup" href="#"
                                       class="body-item-footer__link link-on-popup">Facebook</a></li>
                                 <li class="body-item-footer__list-item"><a data-popup-id="linkPopup" href="#"
                                       class="body-item-footer__link link-on-popup">Instagram</a>
                                 </li>
                                 <li class="body-item-footer__list-item"><a data-popup-id="linkPopup" href="#"
                                       class="body-item-footer__link link-on-popup">Twitter</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="footer__items item-footer update-footer">
                     <div class="item-footer__row">
                        <div class="item-footer__body body-item-footer">
                           <div class="body-item-footer__tittle">
                              Stay Updated
                           </div>
                           <div class="body-item-footer__content">
                              <form id="form" action="#" class="body-item-footer__form" name="emailSubmit">
                                 <input type="text" name="email" placeholder="Enter your email"
                                    class="body-item-footer__input">
                                 <div class="body-item-footer__error error-input">ошибка</div>
                                 <button type="submit" data-popup-id="emailPopup"
                                    class="body-item-footer__btn _icon-send popup-link"></button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <script>

         </script>
      </footer>

   </div>
   <div id="emailPopup" class="popup">
      <div class="popup__body">
         <div class="popup__content">
            <a href="#" class="popup__close close-popup">X</a>
            <div class="popup__title">
               <h4>You have successfully subscribed to our newsletter</h4>
            </div>
            <div class="popup__button">
               OK
            </div>
         </div>
      </div>
   </div>
   <div id="cartPopup" class="popup">
      <div class="popup__body">
         <div class="popup__content">
            <a href="#" class="popup__close close-popup">X</a>
            <div class="popup__title">
               <h4>You successfully made test order</h4>
               <h5>You order contains</h5>
            </div>
            <div class="popup__order-tittles ordered-product-tittle">
               <div class="ordered-product-tittle__name">Product</div>
               <div class="ordered-product-tittle__price">Price</div>
               <div class="ordered-product-tittle__quantity">Quantity</div>
               <div class="ordered-product-tittle__total">Total</div>
            </div>
            <div class="popup__table ordered-table-popup">

            </div>
            <div class="popup__button">
               OK
            </div>
         </div>
      </div>
   </div>
   <div id="linkPopup" class="popup">
      <div class="popup__body">
         <div class="popup__content">
            <a href="#" class="popup__close close-popup">X</a>
            <div class="popup__text-link">
               <h4>You cannot follow the links as this page is not a full site.<p>This is just a layout created to
                     demonstrate working skills.</p>
               </h4>
            </div>
            <div class="popup__button">
               OK
            </div>
         </div>
      </div>
   </div>
   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
   <script src="{{asset('js/furino.js')}}"></script>
</body>

</html>