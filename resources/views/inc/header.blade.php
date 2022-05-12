@section('header')
<header class="header">
   <div class="header__wraper">
      <div class="header__left"></div>
      <div class="header__container">
         <div class="header__logo logo">
            <video autoplay playsinline muted loop preload="auto" class="logo__video">
               <source type="video/webm" src="{{ asset('/video/1.mp4')}}">
               <!--   <source type="video/mp4" src="{{ asset('/video/cut_1.webm')}}">-->
            </video>
            <h1 class="logo__title"> <a href="#">ARTGAS</a></h1>
         </div>
         <div class="header__actions actions-header">
            <div class="header__language">
               <div class="actions-header__language language language-btn">
                  <div class="language__select">
                     <a class="language__link" href="{{ route('locale', __('language.current_lang')) }}">
                        <div class="language__text">@lang('language.current_lang')</div>
                        <div class="language__icon @lang('language.current_lang')"></div>
                     </a>
                  </div>
                  <div class="language__select">
                     <a class="language__link" href="{{ route('locale', __('language.set_lang')) }}">
                        <div class="language__text">@lang('language.set_lang')</div>
                        <div class="language__icon @lang('language.set_lang')"></div>
                     </a>
                  </div>
                  <div class="language__select">
                     <a class="language__link" href="{{ route('locale', __('language.set_lang_2')) }}">
                        <div class="language__text">@lang('language.set_lang_2')</div>
                        <div class="language__icon @lang('language.set_lang_2')"></div>
                     </a>
                  </div>
               </div>
            </div>
            <div data-popup-id="contats" class="header__contacts link-on-popup">Контакти</div>
            <div data-popup-id="lead" class="header__contacts link-on-popup">Зворотній зв'язок</div>
         </div>
         <div class="header__icon-menu icon-menu"><span></span></div>
         <div class="header__burger burger">
            <div class="burger__body">
               <div class="burger__contacts contacts-burger">
                  <div class="contacts-burger__tittle">Контакти</div>
                  <div class="contacts-burger__contacts">
                     <div class="contacts-burger__address">
                        <p>Адрес</p>
                        <p>Дніпро, Україна</p>
                     </div>
                     <div class="contacts-burger__phone">
                        <p>Телефон</p>
                        <a href="tel:%2B34691820317">+38 067 566 44 98</a>
                     </div>
                     <div class="contacts-burger__email">
                        <p>E-mail</p>
                        <a href="mailto:colorit.bcn@gmail.com">artgas-pro@gmail.com</a>
                     </div>
                     <div class="contacts-burger__social social-burger">
                        <a href="https://https://github.com/GAS-ART" target="_blank"
                           class="social-burger__meta _icon-facebook">github
                        </a>
                     </div>
                  </div>
               </div>
               <nav class="burger__menu menu-burger">
                  <ul class="menu-burger__list">
                     <li class="menu-burger__item"><a href="https://colorit.agency/es/about_us"
                           class="menu-burger__item-link">Зворотній зв'язок</a></li>
                  </ul>
               </nav>
            </div>
         </div>
      </div>
      <div class="header__right"></div>
   </div>
</header>