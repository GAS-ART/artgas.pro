@extends('layout')
@section('title', __('tittles.home.title'))
@section('description', __('tittles.home.description'))
@section('ogTitle', __('tittles.home.ogTitle'))
@section('ogDescription', __('tittles.home.ogDescription'))
@section('ogUrl', __('tittles.home.ogUrl'))

@section('page', 'home')


@section('content')
<section class="title">
   <div class="title__container">
      <h1 class="title__text">@lang('portfolio.title')</h1>
   </div>
</section>
<section class="portfolio">
   <div class="portfolio__item">
      <div class="portfolio__container">
         <div class="portfolio__title">
            <h2 class="portfolio__title-text">@lang('portfolio.colorit.title')</h2>
            <a href="https://colorit.agency/" target="_blank" class="portfolio__title-link">colorit.agency</a>
         </div>
         <div class="portfolio__image image-portfolio">
            <picture>
               <source type="image/webp" srcset="{{asset('/img/home/colorit/colorit_1587_1.webp')}}"
                  media="(min-width: 992px)">
               <source type="image/webp" srcset="{{asset('/img/home/colorit/colorit_1587_1_tab.webp')}} "
                  media="(min-width: 768px)">
               <source type="image/webp" srcset="{{asset('/img/home/colorit/colorit_1587_1_mob.webp')}} "
                  media="(min-width: 449px)">
               <source type="image/webp" srcset="{{asset('/img/home/colorit/colorit_1587_1_mobs.webp')}}">

               <source srcset="{{asset('/img/home/colorit/colorit_1587_1.jpg')}}" media="(min-width: 992px)">
               <source srcset="{{asset('/img/home/colorit/colorit_1587_1_tab.jpg')}} " media="(min-width: 768px)">
               <source srcset="{{asset('/img/home/colorit/colorit_1587_1_mob.jpg')}} " media="(min-width: 449px)">
               <source srcset="{{asset('/img/home/colorit/colorit_1587_1_mobs.jpg')}}">

               <img src="{{asset('/img/home/colorit/colorit_1587_1.jpg')}}" alt="@lang('portfolio.colorit.title')">
            </picture>

            <picture>
               <source type="image/webp" srcset="{{asset('/img/home/colorit/colorit_2_1587_1.webp')}}"
                  media="(min-width: 992px)">
               <source type="image/webp" srcset="{{asset('/img/home/colorit/colorit_2_1587_1_tab.webp')}} "
                  media="(min-width: 768px)">
               <source type="image/webp" srcset="{{asset('/img/home/colorit/colorit_2_1587_1_mob.webp')}} "
                  media="(min-width: 449px)">
               <source type="image/webp" srcset="{{asset('/img/home/colorit/colorit_2_1587_1_mobs.webp')}}">

               <source srcset="{{asset('/img/home/colorit/colorit_2_1587_1.jpg')}}" media="(min-width: 992px)">
               <source srcset="{{asset('/img/home/colorit/colorit_2_1587_1_tab.jpg')}} " media="(min-width: 768px)">
               <source srcset="{{asset('/img/home/colorit/colorit_2_1587_1_mob.jpg')}} " media="(min-width: 449px)">
               <source srcset="{{asset('/img/home/colorit/colorit_2_1587_1_mobs.jpg')}}">

               <img src="{{asset('/img/home/colorit/colorit_2_1587_1.jpg')}}" alt="@lang('portfolio.colorit.title')">
            </picture>
            <div class="image-portfolio__body">
               <div class="image-portfolio__development">
                  <div class="image-portfolio__development--body">
                     <span class="image-portfolio__content">
                        <span class="image-portfolio__icon _laravel"></span>
                        <span>@lang('portfolio.laravel')</span>
                     </span>
                  </div>
                  <div class="image-portfolio__bacground"></div>
               </div>
               <div class="image-portfolio__skills">
                  <div class="image-portfolio__skill">
                     <span class="image-portfolio__content">
                        <span class="image-portfolio__icon _html">
                        </span>
                        <span class="image-portfolio__skill--text">HTML</span>
                     </span>
                  </div>
                  <div class="image-portfolio__skill">
                     <span class="image-portfolio__content">
                        <span class="image-portfolio__icon _scss"></span>
                        <span class="image-portfolio__skill--text">SCSS</span>
                     </span>
                  </div>
                  <div class="image-portfolio__skill">
                     <span class="image-portfolio__content">
                        <span class="image-portfolio__icon _js">
                        </span>
                        <span class="image-portfolio__skill--text">JS</span>
                     </span>
                  </div>
                  <div class="image-portfolio__skill">
                     <span class="image-portfolio__content">
                        <span class="image-portfolio__icon _php">
                        </span>
                        <span class="image-portfolio__skill--text">PHP</span>
                     </span>
                  </div>
                  <div class="image-portfolio__bacground"></div>
               </div>
            </div>
         </div>
         <div class="portfolio__feature feature-portfolio">
            <div class="feature-portfolio__container">
               <div class="feature-portfolio__tittle">@lang('portfolio.features')</div>
               <div class="feature-portfolio__body">
                  <div class="feature-portfolio__item item-feature">
                     <div class="item-feature__body">
                        <div class="item-feature__row">
                           <div class="item-feature__img">
                              <picture>
                                 <source type="image/webp" srcset="{{asset('/img/home/colorit/colorit_lang_1.webp')}}">
                                 <source srcset="{{asset('/img/home/colorit/colorit_lang_1.jpg')}}">
                                 <img src="{{asset('img/home/colorit/colorit_lang_1.jpg')}}"
                                    alt="@lang('portfolio.colorit.lang')">
                              </picture>
                           </div>
                           <div class="item-feature__text ">@lang('portfolio.colorit.lang')</div>
                        </div>
                        <div class="item-feature__btn">@lang('portfolio.features_btn')</div>
                        <div class="item-feature__more-info"><span
                              class="close"></span><span>@lang('portfolio.colorit.lang_text')</span></div>
                     </div>
                  </div>
                  <div class="feature-portfolio__item item-feature">
                     <div class="item-feature__body">
                        <div class="item-feature__row">
                           <div class="item-feature__img">
                              <picture>
                                 <source type="image/webp" srcset="{{asset('/img/home/colorit/colorit_run.webp')}}">
                                 <source srcset="{{asset('/img/home/colorit/colorit_run.jpg')}}">
                                 <img src="{{asset('img/home/colorit/colorit_run.jpg')}}"
                                    alt="@lang('portfolio.colorit.ticker')">
                              </picture>
                           </div>
                           <div class="item-feature__text ">@lang('portfolio.colorit.ticker')</div>
                        </div>
                        <div class="item-feature__btn">@lang('portfolio.features_btn')</div>
                        <div class="item-feature__more-info">
                           <span class="close"></span>
                           <span>@lang('portfolio.colorit.ticker_text')</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="feature-portfolio__body">
                  <div class="feature-portfolio__item item-feature">
                     <div class="item-feature__body">
                        <div class="item-feature__row">
                           <div class="item-feature__img">
                              <picture>
                                 <source type="image/webp"
                                    srcset="{{asset('/img/home/colorit/colorit_messenger.webp')}}">
                                 <source srcset="{{asset('/img/home/colorit/colorit_messenger.jpg')}}">
                                 <img src="{{asset('img/home/colorit/colorit_messenger.jpg')}}"
                                    alt="@lang('portfolio.colorit.messenger')">
                              </picture>
                           </div>
                           <div class="item-feature__text ">@lang('portfolio.colorit.messenger')</div>
                        </div>
                        <div class="item-feature__btn">@lang('portfolio.features_btn')</div>
                        <div class="item-feature__more-info">
                           <span class="close"></span>
                           <span>@lang('portfolio.colorit.messenger_text')</span>
                        </div>
                     </div>
                  </div>
                  <div class="feature-portfolio__item item-feature">
                     <div class="item-feature__body">
                        <div class="item-feature__row">
                           <div class="item-feature__img">
                              <picture>
                                 <source type="image/webp"
                                    srcset="{{asset('/img/home/colorit/colorit_portfolio.webp')}}">
                                 <source srcset="{{asset('/img/home/colorit/colorit_portfolio.jpg')}}">
                                 <img src="{{asset('img/home/colorit/colorit_portfolio.jpg')}}"
                                    alt="@lang('portfolio.colorit.loading')">
                              </picture>
                           </div>
                           <div class="item-feature__text ">@lang('portfolio.colorit.loading')</div>
                        </div>
                        <div class="item-feature__btn">@lang('portfolio.features_btn')</div>
                        <div class="item-feature__more-info">
                           <span class="close"></span>
                           <span>@lang('portfolio.colorit.loading_text')</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="portfolio__description description-portfolio">
            <div class="description-portfolio__container">
               <div class="description-portfolio__title">@lang('portfolio.standarts.title')</div>
               <div class="description-portfolio__body">

                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')">
                           <i class="fa fa-info"></i>@lang('portfolio.standarts.adaptive')</span>
                     </div>
                  </div>
                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.responsive')</span>
                     </div>
                  </div>
                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.mobile')</span>
                     </div>
                  </div>


                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.save')</span></div>
                  </div>

                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.tags')</span>
                     </div>
                  </div>

                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.messengers')</span></div>
                  </div>


                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.events')</span></div>
                  </div>
                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.cross-browser')</span>
                     </div>
                  </div>
                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.quick')</span></div>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="portfolio__item">
      <div class="portfolio__container">
         <div class="portfolio__title">
            <h2 class="portfolio__title-text">@lang('portfolio.furino.title')</h2>
            <a href="{{ route('furino') }}" target="_blank" class="portfolio__title-link">furino</a>
         </div>
         <div class="portfolio__image image-portfolio">
            <picture>
               <source type="image/webp" srcset="{{asset('/img/home/furino/furino_1_1528x815.webp')}}"
                  media="(min-width: 992px)">
               <source type="image/webp" srcset="{{asset('/img/home/furino/furino_1_1528x815_tab.webp')}} "
                  media="(min-width: 768px)">
               <source type="image/webp" srcset="{{asset('/img/home/furino/furino_1_1528x815_mob.webp')}} "
                  media="(min-width: 449px)">
               <source type="image/webp" srcset="{{asset('/img/home/furino/furino_1_1528x815_mobs.webp')}}">

               <source srcset="{{asset('/img/home/furino/furino_1_1528x815.jpg')}}" media="(min-width: 992px)">
               <source srcset="{{asset('/img/home/furino/furino_1_1528x815_tab.jpg')}} " media="(min-width: 768px)">
               <source srcset="{{asset('/img/home/furino/furino_1_1528x815_mob.jpg')}} " media="(min-width: 449px)">
               <source srcset="{{asset('/img/home/furino/furino_1_1528x815_mobs.jpg')}}">
               <img src="{{asset('/img/home/furino/furino_1_1528x815.jpg')}}" alt="@lang('portfolio.furino.title')">
            </picture>

            <picture>
               <source type="image/webp" srcset="{{asset('/img/home/furino/furino_2_1528x815.webp')}}"
                  media="(min-width: 992px)">
               <source type="image/webp" srcset="{{asset('/img/home/furino/furino_2_1528x815_tab.webp')}} "
                  media="(min-width: 768px)">
               <source type="image/webp" srcset="{{asset('/img/home/furino/furino_2_1528x815_mob.webp')}} "
                  media="(min-width: 449px)">
               <source type="image/webp" srcset="{{asset('/img/home/furino/furino_2_1528x815_mobs.webp')}}">

               <source srcset="{{asset('/img/home/furino/furino_2_1528x815.jpg')}}" media="(min-width: 992px)">
               <source srcset="{{asset('/img/home/furino/furino_2_1528x815_tab.jpg')}} " media="(min-width: 768px)">
               <source srcset="{{asset('/img/home/furino/furino_2_1528x815_mob.jpg')}} " media="(min-width: 449px)">
               <source srcset="{{asset('/img/home/furino/furino_2_1528x815_mobs.jpg')}}">
               <img src="{{asset('/img/home/furino/furino_2_1528x815.jpg')}}" alt="@lang('portfolio.furino.title')">
            </picture>
            <div class="image-portfolio__body">
               <div class="image-portfolio__development">
                  <div class="image-portfolio__development--body">
                     <span class="image-portfolio__content">
                        <span class="image-portfolio__icon _gulp">
                        </span>
                        <span>@lang('portfolio.gulp')</span>
                     </span>
                  </div>
                  <div class="image-portfolio__bacground"></div>
               </div>
               <div class="image-portfolio__skills">
                  <div class="image-portfolio__skill">
                     <span class="image-portfolio__content">
                        <span class="image-portfolio__icon _html">
                        </span>
                        <span class="image-portfolio__skill--text">HTML</span>
                     </span>
                  </div>
                  <div class="image-portfolio__skill">
                     <span class="image-portfolio__content">
                        <span class="image-portfolio__icon _scss"></span>
                        <span class="image-portfolio__skill--text">SCSS</span>
                     </span>
                  </div>
                  <div class="image-portfolio__skill">
                     <span class="image-portfolio__content">
                        <span class="image-portfolio__icon _js">
                        </span>
                        <span class="image-portfolio__skill--text">JS</span>
                     </span>
                  </div>
                  <div class="image-portfolio__bacground"></div>
               </div>
            </div>
         </div>
         <div class="portfolio__feature feature-portfolio">
            <div class="feature-portfolio__container">
               <div class="feature-portfolio__tittle">@lang('portfolio.features')</div>
               <div class="feature-portfolio__body">
                  <div class="feature-portfolio__item item-feature">
                     <div class="item-feature__body">
                        <div class="item-feature__row">
                           <div class="item-feature__img">
                              <picture>
                                 <source type="image/webp" srcset="{{asset('/img/home/furino/cart_1.webp')}}">
                                 <source srcset="{{asset('/img/home/furino/cart_1.jpg')}}">
                                 <img src="{{asset('img/home/furino/cart_1.jpg')}}"
                                    alt="@lang('portfolio.furino.cart')">
                              </picture>
                           </div>
                           <div class="item-feature__text ">@lang('portfolio.furino.cart')</div>
                        </div>
                        <div class="item-feature__btn">@lang('portfolio.features_btn')</div>
                        <div class="item-feature__more-info"><span
                              class="close"></span><span>@lang('portfolio.furino.cart_text')</span></div>
                     </div>
                  </div>
                  <div class="feature-portfolio__item item-feature">
                     <div class="item-feature__body">
                        <div class="item-feature__row">
                           <div class="item-feature__img">
                              <picture>
                                 <source type="image/webp" srcset="{{asset('/img/home/furino/slider.webp')}}">
                                 <source srcset="{{asset('/img/home/furino/slider.jpg')}}">
                                 <img src="{{asset('img/home/furino/slider.jpg')}}"
                                    alt="@lang('portfolio.furino.slider')">
                              </picture>
                           </div>
                           <div class="item-feature__text ">@lang('portfolio.furino.slider')</div>
                        </div>
                        <div class="item-feature__btn">@lang('portfolio.features_btn')</div>
                        <div class="item-feature__more-info">
                           <span class="close"></span>
                           <span>@lang('portfolio.furino.slider_text')</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="feature-portfolio__body">
                  <div class="feature-portfolio__item item-feature">
                     <div class="item-feature__body">
                        <div class="item-feature__row">
                           <div class="item-feature__img">
                              <picture>
                                 <source type="image/webp" srcset="{{asset('/img/home/furino/loading.webp')}}">
                                 <source srcset="{{asset('/img/home/furino/loading.jpg')}}">
                                 <img src="{{asset('img/home/furino/loading.jpg')}}"
                                    alt="@lang('portfolio.furino.loading')">
                              </picture>
                           </div>
                           <div class="item-feature__text ">@lang('portfolio.furino.loading')</div>
                        </div>
                        <div class="item-feature__btn">@lang('portfolio.features_btn')</div>
                        <div class="item-feature__more-info">
                           <span class="close"></span>
                           <span>@lang('portfolio.furino.loading_text')</span>
                        </div>
                     </div>
                  </div>
                  <div class="feature-portfolio__item item-feature">
                     <div class="item-feature__body">
                        <div class="item-feature__row">
                           <div class="item-feature__img">
                              <picture>
                                 <source type="image/webp" srcset="{{asset('/img/home/furino/gallery.webp')}}">
                                 <source srcset="{{asset('/img/home/furino/gallery.jpg')}}">
                                 <img src="{{asset('img/home/furino/gallery.jpg')}}"
                                    alt="@lang('portfolio.furino.gallery')">
                              </picture>
                           </div>
                           <div class="item-feature__text ">@lang('portfolio.furino.gallery')</div>
                        </div>
                        <div class="item-feature__btn">@lang('portfolio.features_btn')</div>
                        <div class="item-feature__more-info">
                           <span class="close"></span>
                           <span>@lang('portfolio.furino.gallery_text')</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="portfolio__description description-portfolio">
            <div class="description-portfolio__container">
               <div class="description-portfolio__title">@lang('portfolio.standarts.title')</div>
               <div class="description-portfolio__body">

                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')">
                           <i class="fa fa-info"></i>@lang('portfolio.standarts.adaptive')</span>
                     </div>
                  </div>
                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.responsive')</span>
                     </div>
                  </div>
                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.mobile')</span>
                     </div>
                  </div>


                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.save')</span></div>
                  </div>

                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.tags')</span>
                     </div>
                  </div>

                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.messengers')</span></div>
                  </div>


                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.events')</span></div>
                  </div>
                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.cross-browser')</span>
                     </div>
                  </div>
                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.quick')</span></div>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="portfolio__item">
      <div class="portfolio__container">
         <div class="portfolio__title">
            <h2 class="portfolio__title-text">@lang('portfolio.zorya.title')</h2>
            <a href="https://zoryadnepra.com/shops" target="_blank" class="portfolio__title-link">zoryadnepra</a>
         </div>
         <div class="portfolio__image image-portfolio">
            <picture>
               <source srcset="{{asset('/img/home/zorya/zorya.jpg')}}" media="(min-width: 992px)">
               <source srcset="{{asset('/img/home/zorya/zorya_tab.jpg')}} " media="(min-width: 768px)">
               <source srcset="{{asset('/img/home/zorya/zorya_mob.jpg')}} " media="(min-width: 449px)">
               <source srcset="{{asset('/img/home/zorya/zorya_mobs.jpg')}}">
               <img src="{{asset('/img/home/zorya/zorya.jpg')}}" alt="@lang('portfolio.zorya.title')">
            </picture>

            <picture>
               <source srcset="{{asset('/img/home/zorya/zorya_1.jpg')}}" media="(min-width: 992px)">
               <source srcset="{{asset('/img/home/zorya/zorya_1_tab.jpg')}} " media="(min-width: 768px)">
               <source srcset="{{asset('/img/home/zorya/zorya_1_mob.jpg')}} " media="(min-width: 449px)">
               <source srcset="{{asset('/img/home/zorya/zorya_1_mobs.jpg')}}">
               <img src="{{asset('/img/home/zorya/zorya_1.jpg')}}" alt="@lang('portfolio.zorya.title')">
            </picture>
            <div class="image-portfolio__body">
               <div class="image-portfolio__development">
                  <div class="image-portfolio__development--body">
                     <span class="image-portfolio__content">
                        <span class="image-portfolio__icon _laravel"></span>
                        <span>@lang('portfolio.laravel')</span>
                     </span>
                  </div>
                  <div class="image-portfolio__bacground"></div>
               </div>
               <div class="image-portfolio__skills">
                  <div class="image-portfolio__skill">
                     <span class="image-portfolio__content">
                        <span class="image-portfolio__icon _html">
                        </span>
                        <span class="image-portfolio__skill--text">HTML</span>
                     </span>
                  </div>
                  <div class="image-portfolio__skill">
                     <span class="image-portfolio__content">
                        <span class="image-portfolio__icon _scss"></span>
                        <span class="image-portfolio__skill--text">SCSS</span>
                     </span>
                  </div>
                  <div class="image-portfolio__skill">
                     <span class="image-portfolio__content">
                        <span class="image-portfolio__icon _js">
                        </span>
                        <span class="image-portfolio__skill--text">JS</span>
                     </span>
                  </div>
                  <div class="image-portfolio__skill">
                     <span class="image-portfolio__content">
                        <span class="image-portfolio__icon _php">
                        </span>
                        <span class="image-portfolio__skill--text">PHP</span>
                     </span>
                  </div>
                  <div class="image-portfolio__bacground"></div>
               </div>
            </div>
         </div>
         <div class="portfolio__feature feature-portfolio">
            <div class="feature-portfolio__container">
               <div class="feature-portfolio__tittle">@lang('portfolio.features')</div>
               <div class="feature-portfolio__body">
                  <div class="feature-portfolio__item item-feature">
                     <div class="item-feature__body">
                        <div class="item-feature__row">
                           <div class="item-feature__img">
                              <picture>
                                 <source type="image/webp" srcset="{{asset('/img/home/zorya/road.webp')}}">
                                 <source srcset="{{asset('/img/home/zorya/road.jpg')}}">
                                 <img src="{{asset('img/home/zorya/road.jpg')}}" alt="@lang('portfolio.zorya.road')">
                              </picture>
                           </div>
                           <div class="item-feature__text ">@lang('portfolio.zorya.road')</div>
                        </div>
                        <div class="item-feature__btn">@lang('portfolio.features_btn')</div>
                        <div class="item-feature__more-info"><span
                              class="close"></span><span>@lang('portfolio.zorya.road_text')</span></div>
                     </div>
                  </div>
                  <div class="feature-portfolio__item item-feature">
                     <div class="item-feature__body">
                        <div class="item-feature__row">
                           <div class="item-feature__img">
                              <picture>
                                 <source type="image/webp" srcset="{{asset('/img/home/zorya/filter.webp')}}">
                                 <source srcset="{{asset('/img/home/zorya/filter.jpg')}}">
                                 <img src="{{asset('img/home/zorya/filter.jpg')}}"
                                    alt="@lang('portfolio.zorya.filter')">
                              </picture>
                           </div>
                           <div class="item-feature__text ">@lang('portfolio.zorya.filter')</div>
                        </div>
                        <div class="item-feature__btn">@lang('portfolio.features_btn')</div>
                        <div class="item-feature__more-info">
                           <span class="close"></span>
                           <span>@lang('portfolio.zorya.filter_text')</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="feature-portfolio__body">
                  <div class="feature-portfolio__item item-feature">
                     <div class="item-feature__body">
                        <div class="item-feature__row">
                           <div class="item-feature__img">
                              <picture>
                                 <source type="image/webp" srcset="{{asset('/img/home/zorya/claster.webp')}}">
                                 <source srcset="{{asset('/img/home/zorya/claster.jpg')}}">
                                 <img src="{{asset('img/home/zorya/claster.jpg')}}"
                                    alt="@lang('portfolio.zorya.claster')">
                              </picture>
                           </div>
                           <div class="item-feature__text ">@lang('portfolio.zorya.claster')</div>
                        </div>
                        <div class="item-feature__btn">@lang('portfolio.features_btn')</div>
                        <div class="item-feature__more-info">
                           <span class="close"></span>
                           <span>@lang('portfolio.zorya.claster_text')</span>
                        </div>
                     </div>
                  </div>
                  <div class="feature-portfolio__item item-feature">
                     <div class="item-feature__body">
                        <div class="item-feature__row">
                           <div class="item-feature__img">
                              <picture>
                                 <source type="image/webp" srcset="{{asset('/img/home/zorya/marker.webp')}}">
                                 <source srcset="{{asset('/img/home/zorya/marker.jpg')}}">
                                 <img src="{{asset('img/home/zorya/marker.jpg')}}"
                                    alt="@lang('portfolio.zorya.marker')">
                              </picture>
                           </div>
                           <div class="item-feature__text ">@lang('portfolio.zorya.marker')</div>
                        </div>
                        <div class="item-feature__btn">@lang('portfolio.features_btn')</div>
                        <div class="item-feature__more-info">
                           <span class="close"></span>
                           <span>@lang('portfolio.zorya.marker_text')</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="portfolio__description description-portfolio">
            <div class="description-portfolio__container">
               <div class="description-portfolio__title">@lang('portfolio.standarts.title')</div>
               <div class="description-portfolio__body">

                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')">
                           <i class="fa fa-info"></i>@lang('portfolio.standarts.adaptive')</span>
                     </div>
                  </div>
                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.responsive')</span>
                     </div>
                  </div>
                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.mobile')</span>
                     </div>
                  </div>


                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.save')</span></div>
                  </div>

                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.tags')</span>
                     </div>
                  </div>

                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.messengers')</span></div>
                  </div>


                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.events')</span></div>
                  </div>
                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.cross-browser')</span>
                     </div>
                  </div>
                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.quick')</span></div>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="portfolio__item">
      <div class="portfolio__container">
         <div class="portfolio__title">
            <h2 class="portfolio__title-text">@lang('portfolio.clining.title')</h2>
            <a href="https://xn--c1ajagfnb.dp.ua/" target="_blank" class="portfolio__title-link">клининг.dp.ua</a>
         </div>
         <div class="portfolio__image image-portfolio">
            <picture>
               <source type="image/webp" srcset="{{asset('/img/home/clining/clining.webp')}}"
                  media="(min-width: 992px)">
               <source type="image/webp" srcset="{{asset('/img/home/clining/clining_tab.webp')}} "
                  media="(min-width: 768px)">
               <source type="image/webp" srcset="{{asset('/img/home/clining/clining_mob.webp')}} "
                  media="(min-width: 449px)">
               <source type="image/webp" srcset="{{asset('/img/home/clining/clining_mobs.webp')}}">

               <source srcset="{{asset('/img/home/clining/clining.jpg')}}" media="(min-width: 992px)">
               <source srcset="{{asset('/img/home/clining/clining_tab.jpg')}} " media="(min-width: 768px)">
               <source srcset="{{asset('/img/home/clining/clining_mob.jpg')}} " media="(min-width: 449px)">
               <source srcset="{{asset('/img/home/clining/clining_mobs.jpg')}}">
               <img src="{{asset('/img/home/clining/clining.jpg')}}" alt="@lang('portfolio.clining.title')">
            </picture>

            <picture>
               <source type="image/webp" srcset="{{asset('/img/home/clining/clining_1.webp')}}"
                  media="(min-width: 992px)">
               <source type="image/webp" srcset="{{asset('/img/home/clining/clining_1_tab.webp')}} "
                  media="(min-width: 768px)">
               <source type="image/webp" srcset="{{asset('/img/home/clining/clining_1_mob.webp')}} "
                  media="(min-width: 449px)">
               <source type="image/webp" srcset="{{asset('/img/home/clining/clining_1_mobs.webp')}}">

               <source srcset="{{asset('/img/home/clining/clining_1.jpg')}}" media="(min-width: 992px)">
               <source srcset="{{asset('/img/home/clining/clining_1_tab.jpg')}} " media="(min-width: 768px)">
               <source srcset="{{asset('/img/home/clining/clining_1_mob.jpg')}} " media="(min-width: 449px)">
               <source srcset="{{asset('/img/home/clining/clining_1_mobs.jpg')}}">
               <img src="{{asset('/img/home/clining/clining_1.jpg')}}" alt="@lang('portfolio.clining.title')">
            </picture>
            <div class="image-portfolio__body">
               <div class="image-portfolio__development">
                  <div class="image-portfolio__development--body">
                     <span class="image-portfolio__content">
                        <span class="image-portfolio__icon _laravel"></span>
                        <span>@lang('portfolio.laravel')</span>
                     </span>
                  </div>
                  <div class="image-portfolio__bacground"></div>
               </div>
               <div class="image-portfolio__skills">
                  <div class="image-portfolio__skill">
                     <span class="image-portfolio__content">
                        <span class="image-portfolio__icon _html">
                        </span>
                        <span class="image-portfolio__skill--text">HTML</span>
                     </span>
                  </div>
                  <div class="image-portfolio__skill">
                     <span class="image-portfolio__content">
                        <span class="image-portfolio__icon _css"></span>
                        <span class="image-portfolio__skill--text">CSS</span>
                     </span>
                  </div>
                  <div class="image-portfolio__skill">
                     <span class="image-portfolio__content">
                        <span class="image-portfolio__icon _js">
                        </span>
                        <span class="image-portfolio__skill--text">JS</span>
                     </span>
                  </div>
                  <div class="image-portfolio__skill">
                     <span class="image-portfolio__content">
                        <span class="image-portfolio__icon _php">
                        </span>
                        <span class="image-portfolio__skill--text">PHP</span>
                     </span>
                  </div>
                  <div class="image-portfolio__bacground"></div>
               </div>
            </div>
         </div>
         <div class="portfolio__feature feature-portfolio">
            <div class="feature-portfolio__container">
               <div class="feature-portfolio__tittle">@lang('portfolio.features')</div>
               <div class="feature-portfolio__body">
                  <div class="feature-portfolio__item item-feature">
                     <div class="item-feature__body">
                        <div class="item-feature__row">
                           <div class="item-feature__img">
                              <picture>
                                 <source type="image/webp" srcset="{{asset('/img/home/clining/ga.webp')}}">
                                 <source srcset="{{asset('/img/home/clining/ga.jpg')}}">
                                 <img src="{{asset('img/home/clining/ga.jpg')}}" alt="@lang('portfolio.clining.ga')">
                              </picture>
                           </div>
                           <div class="item-feature__text ">@lang('portfolio.clining.ga')</div>
                        </div>
                        <div class="item-feature__btn">@lang('portfolio.features_btn')</div>
                        <div class="item-feature__more-info"><span
                              class="close"></span><span>@lang('portfolio.clining.ga_text')</span></div>
                     </div>
                  </div>
                  <div class="feature-portfolio__item item-feature">
                     <div class="item-feature__body">
                        <div class="item-feature__row">
                           <div class="item-feature__img">
                              <picture>
                                 <source type="image/webp" srcset="{{asset('/img/home/clining/ads.webp')}}">
                                 <source srcset="{{asset('/img/home/clining/ads.jpg')}}">
                                 <img src="{{asset('img/home/clining/ads.jpg')}}" alt="@lang('portfolio.clining.ads')">
                              </picture>
                           </div>
                           <div class="item-feature__text ">@lang('portfolio.clining.ads')</div>
                        </div>
                        <div class="item-feature__btn">@lang('portfolio.features_btn')</div>
                        <div class="item-feature__more-info">
                           <span class="close"></span>
                           <span>@lang('portfolio.clining.ads_text')</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="feature-portfolio__body">
                  <div class="feature-portfolio__item item-feature">
                     <div class="item-feature__body">
                        <div class="item-feature__row">
                           <div class="item-feature__img">
                              <video autoplay="" playsinline="" muted="" loop="" preload="auto" class="gif">
                                 <source type="video/mp4" src="{{asset('img/home/clining/video.mp4')}}">
                                 <source type="video/webm" src="{{asset('img/home/clining/video.webm')}}">
                              </video>
                           </div>
                           <div class="item-feature__text ">@lang('portfolio.clining.video')</div>
                        </div>
                        <div class="item-feature__btn">@lang('portfolio.features_btn')</div>
                        <div class="item-feature__more-info">
                           <span class="close"></span>
                           <span>@lang('portfolio.clining.video_text')</span>
                        </div>
                     </div>
                  </div>
                  <div class="feature-portfolio__item item-feature">
                     <div class="item-feature__body">
                        <div class="item-feature__row">
                           <div class="item-feature__img">
                              <picture>
                                 <source type="image/webp" srcset="{{asset('/img/home/clining/img.webp')}}">
                                 <source srcset="{{asset('/img/home/clining/img.jpg')}}">
                                 <img src="{{asset('img/home/clining/img.jpg')}}" alt="@lang('portfolio.clining.img')">
                              </picture>
                           </div>
                           <div class="item-feature__text ">@lang('portfolio.clining.img')</div>
                        </div>
                        <div class="item-feature__btn">@lang('portfolio.features_btn')</div>
                        <div class="item-feature__more-info">
                           <span class="close"></span>
                           <span>@lang('portfolio.clining.img_text')</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="portfolio__description description-portfolio">
            <div class="description-portfolio__container">
               <div class="description-portfolio__title">@lang('portfolio.standarts.title')</div>
               <div class="description-portfolio__body">

                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')">
                           <i class="fa fa-info"></i>@lang('portfolio.standarts.adaptive')</span>
                     </div>
                  </div>
                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.responsive')</span>
                     </div>
                  </div>
                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.mobile')</span>
                     </div>
                  </div>


                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.save')</span></div>
                  </div>

                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.tags')</span>
                     </div>
                  </div>

                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.messengers')</span></div>
                  </div>


                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.events')</span></div>
                  </div>
                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.cross-browser')</span>
                     </div>
                  </div>
                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.quick')</span></div>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="portfolio__item">
      <div class="portfolio__container">
         <div class="portfolio__title">
            <h2 class="portfolio__title-text">@lang('portfolio.scip.title')</h2>
            <p class="portfolio__title-sub-text">@lang('portfolio.sub_text')</p>
            <div class="portfolio__title-links">
               <a href="{{ route('skip') }}" target="_blank"
                  class="portfolio__title-link">@lang('portfolio.scip.link.main')</a>
               <a href="{{ route('skip_news') }}" target="_blank"
                  class="portfolio__title-link">@lang('portfolio.scip.link.news')</a>
               <a href="{{ route('skip_certification') }}" target="_blank"
                  class="portfolio__title-link">@lang('portfolio.scip.link.certification')</a>
               <a href="{{ route('skip_contacts') }}" target="_blank"
                  class="portfolio__title-link">@lang('portfolio.scip.link.contacts')</a>
            </div>
         </div>
         <div class="portfolio__image image-portfolio">
            <picture>
               <source type="image/webp" srcset="{{asset('/img/home/scip/scip.webp')}}" media="(min-width: 992px)">
               <source type="image/webp" srcset="{{asset('/img/home/scip/scip_tab.webp')}} " media="(min-width: 768px)">
               <source type="image/webp" srcset="{{asset('/img/home/scip/scip_mob.webp')}} " media="(min-width: 449px)">
               <source type="image/webp" srcset="{{asset('/img/home/scip/scip_mobs.webp')}}">

               <source srcset="{{asset('/img/home/scip/scip.jpg')}}" media="(min-width: 992px)">
               <source srcset="{{asset('/img/home/scip/scip_tab.jpg')}} " media="(min-width: 768px)">
               <source srcset="{{asset('/img/home/scip/scip_mob.jpg')}} " media="(min-width: 449px)">
               <source srcset="{{asset('/img/home/scip/scip_mobs.jpg')}}">
               <img src="{{asset('/img/home/scip/scip.jpg')}}" alt="@lang('portfolio.furino.title')">
            </picture>
            <picture>
               <source type="image/webp" srcset="{{asset('/img/home/scip/scip_1.webp')}}" media="(min-width: 992px)">
               <source type="image/webp" srcset="{{asset('/img/home/scip/scip_1_tab.webp')}} "
                  media="(min-width: 768px)">
               <source type="image/webp" srcset="{{asset('/img/home/scip/scip_1_mob.webp')}} "
                  media="(min-width: 449px)">
               <source type="image/webp" srcset="{{asset('/img/home/scip/scip_1_mobs.webp')}}">

               <source srcset="{{asset('/img/home/scip/scip_1.jpg')}}" media="(min-width: 992px)">
               <source srcset="{{asset('/img/home/scip/scip_1_tab.jpg')}} " media="(min-width: 768px)">
               <source srcset="{{asset('/img/home/scip/scip_1_mob.jpg')}} " media="(min-width: 449px)">
               <source srcset="{{asset('/img/home/scip/scip_1_mobs.jpg')}}">
               <img src="{{asset('/img/home/scip/scip_1.jpg')}}" alt="@lang('portfolio.furino.title')">
            </picture>
            <div class="image-portfolio__body">
               <div class="image-portfolio__development">
                  <div class="image-portfolio__development--body">
                     <span class="image-portfolio__content">
                        <span class="image-portfolio__icon _gulp">
                        </span>
                        <span>@lang('portfolio.gulp')</span>
                     </span>
                  </div>
                  <div class="image-portfolio__bacground"></div>
               </div>
               <div class="image-portfolio__skills">
                  <div class="image-portfolio__skill">
                     <span class="image-portfolio__content">
                        <span class="image-portfolio__icon _html">
                        </span>
                        <span class="image-portfolio__skill--text">HTML</span>
                     </span>
                  </div>
                  <div class="image-portfolio__skill">
                     <span class="image-portfolio__content">
                        <span class="image-portfolio__icon _css"></span>
                        <span class="image-portfolio__skill--text">CSS</span>
                     </span>
                  </div>
                  <div class="image-portfolio__skill">
                     <span class="image-portfolio__content">
                        <span class="image-portfolio__icon _js">
                        </span>
                        <span class="image-portfolio__skill--text">JS</span>
                  </div>
                  <div class="image-portfolio__bacground"></div>
               </div>
            </div>
         </div>
         <div class="portfolio__description description-portfolio">
            <div class="description-portfolio__container">
               <div class="description-portfolio__title">@lang('portfolio.standarts.title')</div>
               <div class="description-portfolio__body">

                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')">
                           <i class="fa fa-info"></i>@lang('portfolio.standarts.adaptive')</span>
                     </div>
                  </div>
                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.responsive')</span>
                     </div>
                  </div>
                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.mobile')</span>
                     </div>
                  </div>


                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.save')</span></div>
                  </div>

                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.tags')</span>
                     </div>
                  </div>

                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.messengers')</span></div>
                  </div>


                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.events')</span></div>
                  </div>
                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.cross-browser')</span>
                     </div>
                  </div>
                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.quick')</span></div>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="portfolio__item">
      <div class="portfolio__container">
         <div class="portfolio__title">
            <h2 class="portfolio__title-text">@lang('portfolio.bike.title')</h2>
            <p class="portfolio__title-sub-text">@lang('portfolio.sub_text')</p>
            <a href="{{ route('bike') }}" target="_blank" class="portfolio__title-link">bike</a>
         </div>
         <div class="portfolio__image image-portfolio">
            <picture>
               <source type="image/webp" srcset="{{asset('/img/home/bike/bike.webp')}}" media="(min-width: 992px)">
               <source type="image/webp" srcset="{{asset('/img/home/bike/bike_tab.webp')}} " media="(min-width: 768px)">
               <source type="image/webp" srcset="{{asset('/img/home/bike/bike_mob.webp')}} " media="(min-width: 449px)">
               <source type="image/webp" srcset="{{asset('/img/home/bike/bike_mobs.webp')}}">

               <source srcset="{{asset('/img/home/bike/bike.jpg')}}" media="(min-width: 992px)">
               <source srcset="{{asset('/img/home/bike/bike_tab.jpg')}} " media="(min-width: 768px)">
               <source srcset="{{asset('/img/home/bike/bike_mob.jpg')}} " media="(min-width: 449px)">
               <source srcset="{{asset('/img/home/bike/bike_mobs.jpg')}}">
               <img src="{{asset('/img/home/bike/bike.jpg')}}" alt="@lang('portfolio.furino.title')">
            </picture>
            <picture>
               <source type="image/webp" srcset="{{asset('/img/home/bike/bike_1.webp')}}" media="(min-width: 992px)">
               <source type="image/webp" srcset="{{asset('/img/home/bike/bike_1_tab.webp')}} "
                  media="(min-width: 768px)">
               <source type="image/webp" srcset="{{asset('/img/home/bike/bike_1_mob.webp')}} "
                  media="(min-width: 449px)">
               <source type="image/webp" srcset="{{asset('/img/home/bike/bike_1_mobs.webp')}}">

               <source srcset="{{asset('/img/home/bike/bike_1.jpg')}}" media="(min-width: 992px)">
               <source srcset="{{asset('/img/home/bike/bike_1_tab.jpg')}} " media="(min-width: 768px)">
               <source srcset="{{asset('/img/home/bike/bike_1_mob.jpg')}} " media="(min-width: 449px)">
               <source srcset="{{asset('/img/home/bike/bike_1_mobs.jpg')}}">
               <img src="{{asset('/img/home/bike/bike_1.jpg')}}" alt="@lang('portfolio.furino.title')">
            </picture>
            <div class="image-portfolio__body">
               <div class="image-portfolio__development">
                  <div class="image-portfolio__development--body">
                     <span class="image-portfolio__content">
                        <span class="image-portfolio__icon _gulp">
                        </span>
                        <span>@lang('portfolio.gulp')</span>
                     </span>
                  </div>
                  <div class="image-portfolio__bacground"></div>
               </div>
               <div class="image-portfolio__skills">
                  <div class="image-portfolio__skill">
                     <span class="image-portfolio__content">
                        <span class="image-portfolio__icon _html">
                        </span>
                        <span class="image-portfolio__skill--text">HTML</span>
                     </span>
                  </div>
                  <div class="image-portfolio__skill">
                     <span class="image-portfolio__content">
                        <span class="image-portfolio__icon _css"></span>
                        <span class="image-portfolio__skill--text">CSS</span>
                     </span>
                  </div>
                  <div class="image-portfolio__skill">
                     <span class="image-portfolio__content">
                        <span class="image-portfolio__icon _js">
                        </span>
                        <span class="image-portfolio__skill--text">JS</span>
                     </span>
                  </div>
                  <div class="image-portfolio__bacground"></div>
               </div>
            </div>
         </div>
         <div class="portfolio__description description-portfolio">
            <div class="description-portfolio__container">
               <div class="description-portfolio__title">@lang('portfolio.standarts.title')</div>
               <div class="description-portfolio__body">

                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')">
                           <i class="fa fa-info"></i>@lang('portfolio.standarts.adaptive')</span>
                     </div>
                  </div>
                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.responsive')</span>
                     </div>
                  </div>
                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.mobile')</span>
                     </div>
                  </div>


                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.save')</span></div>
                  </div>

                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.tags')</span>
                     </div>
                  </div>

                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.messengers')</span></div>
                  </div>


                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.events')</span></div>
                  </div>
                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.cross-browser')</span>
                     </div>
                  </div>
                  <div class="description-portfolio__item">
                     <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                              class="fa fa-info"></i>@lang('portfolio.standarts.quick')</span></div>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </div>

</section>
@endsection