@section('footer')
<footer class="footer">
   <div class="footer__container">
      <div class="footer__row">
         <div class="footer__avatar avatar">
            <div class="avatar__mini avatar__mini-left">
               <img data-src="{{ asset('img/avatar/2min.jpg') }}" src="{{ asset('img/avatar/2.jpg') }}"
                  alt="foto artgas">
            </div>
            <div class="avatar__mini avatar__mini-middle">
               <img src="{{ asset('img/avatar/1min.jpg') }}" alt="artgas">
            </div>
            <div class="avatar__mini avatar__mini-right">
               <img src="{{ asset('img/avatar/4min.jpg') }}" alt="picture artgas">
            </div>
            <div class="avatar__full">
               <img src="{{ asset('img/avatar/3.jpg') }}" alt="avatar artgas">
            </div>
         </div>
         <div class="footer__center-items">
            <div class="footer__about-me about-me">
               <div class="footer__title">@lang('footer.about.title')</div>
               <ul class="about-me__list">
                  <li class="about-me__list-item footer__list-item">
                     <div class="about-me__text footer__text">
                        @lang('footer.about.name')
                     </div>
                  </li>
                  <li class="about-me__list-item footer__list-item">
                     <div class="about-me__text footer__text">
                        @lang('footer.about.age')
                     </div>
                  </li>
                  <li class="about-me__list-item footer__list-item">
                     <div class="about-me__text footer__text">
                        @lang('footer.about.experience')
                     </div>
                  </li>
                  <li class="about-me__list-item footer__list-item">
                     <div class="about-me__text footer__text">
                        @lang('footer.about.city')
                     </div>
                  </li>
                  <li class="about-me__list-item footer__list-item">
                     <div class="about-me__text footer__text">
                        @lang('footer.about.country')
                     </div>
                  </li>
               </ul>
            </div>
            <div class="footer__programs programs-footer">
               <div class="footer__title">@lang('footer.programs')</div>
               <ul class="programs-footer__list">
                  <li class="programs-footer__list-item footer__list-item">
                     <div class="programs-footer__img footer__icon _github"></div>
                     <div class="footer__text">GitHub</div>
                  </li>
                  <li class="programs-footer__list-item footer__list-item">
                     <div class="programs-footer__img footer__icon _git"></div>
                     <div class="footer__text">Git</div>
                  </li>
                  <li class="programs-footer__list-item footer__list-item">
                     <div class="programs-footer__img footer__icon _gulp"></div>
                     <div class="footer__text">Gulp</div>
                  </li>
                  <li class="programs-footer__list-item footer__list-item">
                     <div class="programs-footer__img footer__icon _vscode"></div>
                     <div class="footer__text">VSCode</div>
                  </li>
                  <li class="programs-footer__list-item footer__list-item">
                     <div class="programs-footer__img footer__icon _ga"></div>
                     <div class="footer__text">Google Analytics</div>
                  </li>
                  <li class="programs-footer__list-item footer__list-item">
                     <div class="programs-footer__img footer__icon _ads"></div>
                     <div class="footer__text">Google Ads</div>
                  </li>
               </ul>
            </div>
         </div>
      </div>

      <div class="footer__row">
         <div class="footer__skills skills-footer">
            <div class="footer__title">@lang('footer.skills')</div>
            <ul class="skills-footer__list">
               <li class="skills-footer__list-item footer__list-item">
                  <div class="skills-footer__img footer__icon _html"></div>
                  <div class="footer__text">HTML</div>
               </li>
               <li class="skills-footer__list-item footer__list-item">
                  <div class="skills-footer__img footer__icon _css"></div>
                  <div class="footer__text">CSS</div>
               </li>
               <li class="skills-footer__list-item footer__list-item">
                  <div class="skills-footer__img footer__icon _scss"></div>
                  <div class="footer__text">SCSS</div>
               </li>
               <li class="skills-footer__list-item footer__list-item">
                  <div class="skills-footer__img footer__icon _js"></div>
                  <div class="footer__text">JavaScript</div>
               </li>
               <li class="skills-footer__list-item footer__list-item">
                  <div class="skills-footer__img footer__icon _php"></div>
                  <div class="footer__text">PHP</div>
               </li>
            </ul>
         </div>
         <div class="footer__framework framework-footer">
            <div class="footer__title">@lang('footer.framework')</div>
            <ul class="framework-footer__list">
               <li class="framework-footer__list-item footer__list-item">
                  <div class="framework-footer footer__icon _laravel"></div>
                  <div class="footer__text">Laravel</div>
               </li>
               <li class="framework-footer__list-item footer__list-item">
                  <div class="framework-footer footer__icon _wordpress"></div>
                  <div class="footer__text">Wordpress</div>
               </li>
            </ul>
         </div>
      </div>
   </div>
</footer>