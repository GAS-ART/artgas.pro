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
               <div class="actions-header__language language">
                  <div class="language__select">
                     <a class="language__link" href="{{ route('locale', __('language.current_lang')) }}">
                        <br>
                        <div class="language__text">@lang('language.current_lang')</div>
                        <div class="language__icon @lang('language.current_lang')"></div>
                     </a>
                  </div>
                  <div class="language__select">
                     <a class="language__link" href="{{ route('locale', __('language.set_lang')) }}">
                        <br>
                        <div class="language__text">@lang('language.set_lang')</div>
                        <div class="language__icon @lang('language.set_lang')"></div>
                     </a>
                  </div>
               </div>
               <div class="language__select">
                  <a class="language__link" href="{{ route('locale', __('language.set_lang_2')) }}">
                     <br>
                     <div class="language__text">@lang('language.set_lang_2')</div>
                     <div class="language__icon @lang('language.set_lang_2')"></div>
                  </a>
               </div>
            </div>
            <div data-popup-id="contats" class="header__contacts link-on-popup">Контакти</div>
            <div data-popup-id="lead" class="header__contacts link-on-popup">Зворотній зв'язок</div>
         </div>
      </div>
      <div class="header__right"></div>
   </div>
</header>