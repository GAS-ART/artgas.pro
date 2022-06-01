@section('header')
<header class="header">
   <div class="header__wraper">
      <div class="header__left"></div>
      <div class="header__container">
         <div class="header__logo logo">
            <video autoplay playsinline muted loop preload="auto" class="logo__video">
               <source type="video/mp4" src="{{ asset('/video/1.mp4')}}">
               <source type="video/webm" src="{{ asset('/video/1.webm')}}">
            </video>
            <h1 class="logo__title @yield('page')"> <a href="{{ route('home.lang', ['locale' => __('language.current_lang')]) }}">ARTGAS</a></h1>
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
            <div class="header__contacts contacts-header">
               <div class="contacts-header__row">
                  <div class="contacts-header__title-text">@lang('header.contacts.title')</div>
                  <div class="contacts-header__contacts">
                     <div class="contacts-header__body">
                        <div class="contacts-header__link">
                           <a href="tel:%2B380675664498" class="contacts-header__phone-item contacts-header-phone">+38
                              067-566-44-98</a>
                           <a href="mailto:temoha1386@gmail.com"
                              class="contacts-header__phone-item contacts-header-email">artgas-pro@gmail.com</a>
                        </div>
                        <div class="contacts-header__messengers messengers-header">
                           <div class="messengers-header__item messengers-header-telegram">
                              <a href="tg://resolve?domain=GAS_ART" class="svg-messengers__telegram">
                                 <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    style="width: 100%; height: 100%; fill: rgb(255, 255, 255); stroke: none;">
                                    <path
                                       d="M15.02 20.814l9.31-12.48L9.554 17.24l1.92 6.42c.225.63.114.88.767.88l.344-5.22 2.436 1.494z"
                                       opacity=".6"></path>
                                    <path d="M12.24 24.54c.504 0 .727-.234 1.008-.51l2.687-2.655-3.35-2.054-.344 5.22z"
                                       opacity=".3">
                                    </path>
                                    <path
                                       d="M12.583 19.322l8.12 6.095c.926.52 1.595.25 1.826-.874l3.304-15.825c.338-1.378-.517-2.003-1.403-1.594L5.024 14.727c-1.325.54-1.317 1.29-.24 1.625l4.98 1.58 11.53-7.39c.543-.336 1.043-.156.633.214">
                                    </path>
                                 </svg>
                              </a>
                           </div>
                           <div class="messengers-header__item messengers-header-wathsapp">
                              <a href="https://wa.me/380645664498" class="svg-messengers__whatsapp">
                                 <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    style="width: 100%; height: 100%; fill: rgb(255, 255, 255); stroke: none;">
                                    <path
                                       d="M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z">
                                    </path>
                                 </svg>
                              </a>
                           </div>
                           <div class="messengers-header__item messengers-header-viber">
                              <a href="viber://chat?number=%2B380675664498" class="svg-messengers__viber">
                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    style="fill: white; width: 40px; height: 40px;" alt="Viber" viewBox="0 0 32 32"
                                    title="Viber" class="wh-messenger-icon">
                                    <path fill-rule="evenodd"
                                       d="M21.176 27c-.208-.062-.618-.13-.987-.303-6.476-3.02-11.18-7.972-13.853-15.082-.897-2.383.04-4.396 2.298-5.22.405-.147.802-.157 1.2.002.964.383 3.404 4.022 3.458 5.11.042.835-.48 1.287-1 1.67-.983.722-.988 1.638-.568 2.66.948 2.308 2.567 3.895 4.663 4.925.76.374 1.488.337 2.007-.515.925-1.518 2.06-1.445 3.3-.502.62.473 1.253.936 1.844 1.45.8.702 1.816 1.285 1.336 2.754-.5 1.527-2.226 3.066-3.7 3.05zm-4.76-20.986c4.546.166 8.46 4.677 8.406 9.543-.005.478.153 1.185-.504 1.172-.628-.015-.464-.733-.52-1.21-.603-5.167-2.786-7.606-7.52-8.394-.392-.066-.99.026-.96-.535.044-.833.754-.523 1.097-.576zm6.072 8.672c-.045.356.147.968-.385 1.056-.72.118-.58-.595-.65-1.053-.48-3.144-1.5-4.297-4.423-5.005-.43-.105-1.1-.032-.99-.75.108-.685.71-.452 1.164-.393 2.92.38 5.307 3.126 5.284 6.144zm-2.222-.573c.013.398-.026.818-.46.874-.314.04-.52-.245-.553-.597-.12-1.296-.75-2.062-1.95-2.27-.36-.063-.712-.19-.544-.715.11-.352.408-.387.712-.396 1.297-.036 2.815 1.647 2.794 3.103z">
                                    </path>
                                 </svg>
                              </a>
                           </div>
                        </div>
                        <div class="contacts-header__social">
                           <a href="https://github.com/GAS-ART" target="_blank"><svg xmlns="http://www.w3.org/2000/svg"
                                 fill="#000000" viewBox="0 0 30 30" width="60px" height="60px">
                                 <path
                                    d="M15,3C8.373,3,3,8.373,3,15c0,5.623,3.872,10.328,9.092,11.63C12.036,26.468,12,26.28,12,26.047v-2.051 c-0.487,0-1.303,0-1.508,0c-0.821,0-1.551-0.353-1.905-1.009c-0.393-0.729-0.461-1.844-1.435-2.526 c-0.289-0.227-0.069-0.486,0.264-0.451c0.615,0.174,1.125,0.596,1.605,1.222c0.478,0.627,0.703,0.769,1.596,0.769 c0.433,0,1.081-0.025,1.691-0.121c0.328-0.833,0.895-1.6,1.588-1.962c-3.996-0.411-5.903-2.399-5.903-5.098 c0-1.162,0.495-2.286,1.336-3.233C9.053,10.647,8.706,8.73,9.435,8c1.798,0,2.885,1.166,3.146,1.481C13.477,9.174,14.461,9,15.495,9 c1.036,0,2.024,0.174,2.922,0.483C18.675,9.17,19.763,8,21.565,8c0.732,0.731,0.381,2.656,0.102,3.594 c0.836,0.945,1.328,2.066,1.328,3.226c0,2.697-1.904,4.684-5.894,5.097C18.199,20.49,19,22.1,19,23.313v2.734 c0,0.104-0.023,0.179-0.035,0.268C23.641,24.676,27,20.236,27,15C27,8.373,21.627,3,15,3z" />
                              </svg></a>
                        </div>
                        <div class="contacts-header__address">@lang('header.contacts.address')</div>
                     </div>
                  </div>
               </div>
            </div>
            <div data-popup-id="lead" class="header__contacts link-on-popup">@lang('header.lead_head')</div>
         </div>
         <div class="header__icon-menu icon-menu"><span></span></div>
         <div class="header__burger burger">
            <div class="burger__body">
               <div class="burger__contacts contacts-burger">
                  <div class="contacts-burger__tittle">@lang('header.contacts.title')</div>
                  <div class="contacts-burger__contacts">
                     <div class="contacts-burger__phone">
                        <p>@lang('header.contacts.burger.phone')</p>
                        <a href="tel:%2B380675664498">+38 067 566 44 98</a>
                     </div>
                     <div class="contacts-burger__email">
                        <p>@lang('header.contacts.burger.email')</p>
                        <a href="mailto:temoha1386@gmail.com">artgas-pro@gmail.com</a>
                     </div>
                     <div class="contacts-burger__address">
                        @lang('header.contacts.burger.address')
                     </div>
                     <div class="contacts-burger__social social-burger">
                        <p>@lang('header.contacts.burger.social')</p>
                        <a href="https://https://github.com/GAS-ART" target="_blank"
                           class="social-burger__github _icon-facebook">@lang('header.contacts.burger.github')
                        </a>
                     </div>
                  </div>
               </div>
               <nav class="burger__menu menu-burger">
                  <ul class="menu-burger__list">
                     <li data-popup-id="lead" class="menu-burger__item link-on-popup">@lang('header.lead_burger')</li>
                  </ul>
               </nav>
            </div>
         </div>
      </div>
      <div class="header__right"></div>
   </div>
</header>