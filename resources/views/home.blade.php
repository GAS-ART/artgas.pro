@extends('layout')
@section('title', __('tittles.home.title'))
@section('description', __('tittles.home.description'))
@section('ogTitle', __('tittles.home.ogTitle'))
@section('ogDescription', __('tittles.home.ogDescription'))
@section('ogUrl', __('tittles.home.ogUrl'))


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
               <img src="{{asset('/img/home/colorit/colorit_1587_1.jpg')}}" alt="@lang('portfolio.colorit.title')">
               <img src="{{asset('/img/home/colorit/colorit_2_1587_1.jpg')}}" alt="@lang('portfolio.colorit.title')">
               <div class="image-portfolio__body">
                  <div class="image-portfolio__development">
                     <div class="image-portfolio__development--body">
                        <span class="image-portfolio__icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="50" height="52" viewBox="0 0 50 52">
                              <title>Logomark</title>
                              <path
                                 d="M49.626 11.564a.809.809 0 0 1 .028.209v10.972a.8.8 0 0 1-.402.694l-9.209 5.302V39.25c0 .286-.152.55-.4.694L20.42 51.01c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 0 1-.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054L.402 39.944A.801.801 0 0 1 0 39.25V6.334c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.029-.024.055-.05.088-.069h.001l9.61-5.533a.802.802 0 0 1 .8 0l9.61 5.533h.002c.032.02.059.045.088.068.026.02.055.038.078.06.028.029.048.062.072.094.017.024.04.045.054.071.023.04.036.082.052.124.008.023.022.044.028.068a.809.809 0 0 1 .028.209v20.559l8.008-4.611v-10.51c0-.07.01-.141.028-.208.007-.024.02-.045.028-.068.016-.042.03-.085.052-.124.015-.026.037-.047.054-.071.024-.032.044-.065.072-.093.023-.023.052-.04.078-.06.03-.024.056-.05.088-.069h.001l9.611-5.533a.801.801 0 0 1 .8 0l9.61 5.533c.034.02.06.045.09.068.025.02.054.038.077.06.028.029.048.062.072.094.018.024.04.045.054.071.023.039.036.082.052.124.009.023.022.044.028.068zm-1.574 10.718v-9.124l-3.363 1.936-4.646 2.675v9.124l8.01-4.611zm-9.61 16.505v-9.13l-4.57 2.61-13.05 7.448v9.216l17.62-10.144zM1.602 7.719v31.068L19.22 48.93v-9.214l-9.204-5.209-.003-.002-.004-.002c-.031-.018-.057-.044-.086-.066-.025-.02-.054-.036-.076-.058l-.002-.003c-.026-.025-.044-.056-.066-.084-.02-.027-.044-.05-.06-.078l-.001-.003c-.018-.03-.029-.066-.042-.1-.013-.03-.03-.058-.038-.09v-.001c-.01-.038-.012-.078-.016-.117-.004-.03-.012-.06-.012-.09v-.002-21.481L4.965 9.654 1.602 7.72zm8.81-5.994L2.405 6.334l8.005 4.609 8.006-4.61-8.006-4.608zm4.164 28.764l4.645-2.674V7.719l-3.363 1.936-4.646 2.675v20.096l3.364-1.937zM39.243 7.164l-8.006 4.609 8.006 4.609 8.005-4.61-8.005-4.608zm-.801 10.605l-4.646-2.675-3.363-1.936v9.124l4.645 2.674 3.364 1.937v-9.124zM20.02 38.33l11.743-6.704 5.87-3.35-8-4.606-9.211 5.303-8.395 4.833 7.993 4.524z"
                                 fill="#FF2D20" fill-rule="evenodd"></path>
                           </svg>
                        </span>
                        <span>@lang('portfolio.laravel')</span>
                     </div>
                     <div class="image-portfolio__bacground"></div>
                  </div>
                  <div class="image-portfolio__skills">
                     <div class="image-portfolio__skill">
                        <span class="image-portfolio__icon">
                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              viewBox="0 0 59 66" fill="#fff" fill-rule="evenodd" stroke="#000" stroke-linecap="round"
                              stroke-linejoin="round">
                              <use xlink:href="#A" x="1" y="1"></use>
                              <symbol id="A" overflow="visible">
                                 <g stroke="none" fill-rule="nonzero">
                                    <path d="M5.136 57.602L0 0h56.432l-5.14 57.594-23.112 6.404z" fill="#e44d26"></path>
                                    <path d="M46.89 53.926L51.284 4.71H28.216v54.394z" fill="#f16529"></path>
                                    <path
                                       d="M28.192 11.774H10.5l1.906 21.364h15.81v-7.064h-9.348l-.646-7.234h9.994v-7.066zm.024 32.624l-.03.008-7.868-2.124-.5-5.634h-7.096l.99 11.092 14.472 4 .032-.01z"
                                       fill="#ebebeb"></path>
                                    <path
                                       d="M28.192 33.138h8.7l-.8 9.16-7.88 2.126v7.35l14.484-4.014 1.94-21.69h-16.42zM45.72 13.67l.168-1.896h-17.7v7.064h17.064l.14-1.588z">
                                    </path>
                                 </g>
                              </symbol>
                           </svg>
                        </span>
                        <span class="image-portfolio__skill--text">HTML</span>
                     </div>
                     <div class="image-portfolio__skill">
                        <span class="image-portfolio__icon">
                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                              id="Layer_1" x="0px" y="0px" viewBox="0 0 547.8 410.6"
                              enable-background="new 0 0 547.8 410.6" xml:space="preserve">
                              <path fill="#CD6799"
                                 d="M471.4,236c-19.1,0.1-35.7,4.7-49.6,11.5c-5.1-10.1-10.2-19.1-11.1-25.7c-1-7.7-2.2-12.4-1-21.6  c1.2-9.2,6.6-22.3,6.5-23.3s-1.2-5.7-12.2-5.8c-11-0.1-20.5,2.1-21.6,5c-1.1,2.9-3.2,9.5-4.6,16.3c-1.9,10-22,45.7-33.5,64.4  c-3.7-7.3-6.9-13.7-7.6-18.8c-1-7.7-2.2-12.4-1-21.6c1.2-9.2,6.6-22.3,6.5-23.3c-0.1-1-1.2-5.7-12.2-5.8c-11-0.1-20.5,2.1-21.6,5  c-1.1,2.9-2.3,9.7-4.6,16.3c-2.3,6.6-29,66.2-36,81.6c-3.6,7.9-6.7,14.2-8.9,18.5c0,0,0,0,0,0s-0.1,0.3-0.4,0.8  c-1.9,3.7-3,5.7-3,5.7s0,0,0,0.1c-1.5,2.7-3.1,5.2-3.9,5.2c-0.6,0-1.7-7.2,0.2-17c4-20.7,13.5-52.9,13.4-54c0-0.6,1.8-6.2-6.2-9.1  c-7.8-2.9-10.6,1.9-11.3,1.9c-0.7,0-1.2,1.7-1.2,1.7s8.7-36.2-16.6-36.2c-15.8,0-37.6,17.3-48.4,32.9c-6.8,3.7-21.3,11.6-36.8,20.1  c-5.9,3.3-12,6.6-17.7,9.7c-0.4-0.4-0.8-0.9-1.2-1.3c-30.6-32.7-87.2-55.8-84.8-99.7c0.9-16,6.4-58,108.7-109  C233.9,19,300.9,30.5,312.5,56c16.6,36.4-35.9,104-122.9,113.8c-33.2,3.7-50.6-9.1-55-13.9c-4.6-5-5.3-5.3-7-4.3c-2.8,1.5-1,6,0,8.6  c2.6,6.8,13.3,18.8,31.4,24.7c16,5.2,54.9,8.1,102-10.1c52.7-20.4,93.9-77.1,81.8-124.6C330.7,2,250.7-13.9,175,13  C130,29,81.2,54.2,46.1,87c-41.7,39-48.3,72.9-45.6,87.1c9.7,50.4,79.2,83.2,107,107.5c-1.4,0.8-2.7,1.5-3.8,2.1  c-13.9,6.9-66.9,34.6-80.1,63.9c-15,33.2,2.4,57,13.9,60.2c35.7,9.9,72.4-7.9,92.1-37.3c19.7-29.4,17.3-67.6,8.2-85.1  c-0.1-0.2-0.2-0.4-0.4-0.6c3.6-2.1,7.3-4.3,10.9-6.4c7.1-4.2,14.1-8.1,20.1-11.3c-3.4,9.3-5.9,20.4-7.1,36.4  c-1.5,18.8,6.2,43.2,16.3,52.8c4.5,4.2,9.8,4.3,13.2,4.3c11.8,0,17.1-9.8,23-21.4c7.2-14.2,13.7-30.7,13.7-30.7s-8.1,44.6,13.9,44.6  c8,0,16.1-10.4,19.7-15.7c0,0.1,0,0.1,0,0.1s0.2-0.3,0.6-1c0.8-1.3,1.3-2.1,1.3-2.1s0-0.1,0-0.2c3.2-5.6,10.4-18.3,21.1-39.4  c13.8-27.2,27.1-61.2,27.1-61.2s1.2,8.3,5.3,22.1c2.4,8.1,7.4,17,11.4,25.6c-3.2,4.5-5.2,7-5.2,7s0,0,0.1,0.1  c-2.6,3.4-5.4,7.1-8.5,10.7c-10.9,13-23.9,27.9-25.7,32.2c-2.1,5.1-1.6,8.8,2.4,11.8c2.9,2.2,8.1,2.5,13.4,2.2  c9.8-0.7,16.7-3.1,20.1-4.6c5.3-1.9,11.5-4.8,17.3-9.1c10.7-7.9,17.2-19.2,16.6-34.1c-0.3-8.2-3-16.4-6.3-24.1  c1-1.4,1.9-2.8,2.9-4.2c16.9-24.7,30-51.8,30-51.8s1.2,8.3,5.3,22.1c2,7,6.1,14.6,9.7,22c-15.9,12.9-25.7,27.9-29.2,37.7  c-6.3,18.2-1.4,26.4,7.9,28.3c4.2,0.9,10.2-1.1,14.6-3c5.6-1.8,12.2-4.9,18.5-9.5c10.7-7.9,21-18.9,20.4-33.8  c-0.3-6.8-2.1-13.5-4.6-20c13.5-5.6,30.9-8.7,53.1-6.1c47.6,5.6,57,35.3,55.2,47.8c-1.8,12.5-11.8,19.3-15.1,21.4  c-3.3,2.1-4.4,2.8-4.1,4.3c0.4,2.2,2,2.1,4.8,1.7c3.9-0.7,25-10.1,25.9-33.1C548.9,267.8,520.9,235.7,471.4,236z M104.2,359.8  C88.4,377,66.4,383.5,56.9,378c-10.2-5.9-6.2-31.3,13.2-49.5c11.8-11.1,27-21.4,37.1-27.7c2.3-1.4,5.7-3.4,9.8-5.9  c0.7-0.4,1.1-0.6,1.1-0.6l0,0c0.8-0.5,1.6-1,2.4-1.5C127.6,318.8,120.8,341.7,104.2,359.8z M219.2,281.6c-5.5,13.4-17,47.7-24,45.8  c-6-1.6-9.7-27.6-1.2-53.3c4.3-12.9,13.4-28.3,18.7-34.3c8.6-9.6,18.1-12.8,20.4-8.9C236,236,222.6,273.2,219.2,281.6z M314.1,327  c-2.3,1.2-4.5,2-5.5,1.4c-0.7-0.4,1-2,1-2s11.9-12.8,16.6-18.6c2.7-3.4,5.9-7.4,9.3-11.9c0,0.4,0,0.9,0,1.3  C335.5,312.5,320.7,322.8,314.1,327z M387.3,310.3c-1.7-1.2-1.4-5.2,4.3-17.7c2.2-4.9,7.4-13.1,16.3-21c1,3.2,1.7,6.3,1.6,9.2  C409.4,300.1,395.6,307.3,387.3,310.3z">
                              </path>
                              <g>
                              </g>
                              <g>
                              </g>
                              <g>
                              </g>
                              <g>
                              </g>
                              <g>
                              </g>
                              <g>
                              </g>
                           </svg>
                        </span>
                        <span class="image-portfolio__skill--text">SCSS</span>
                     </div>
                     <div class="image-portfolio__skill">
                        <span class="image-portfolio__icon">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 630 630">
                              <rect width="630" height="630" fill="#f7df1e"></rect>
                              <path
                                 d="m423.2 492.19c12.69 20.72 29.2 35.95 58.4 35.95 24.53 0 40.2-12.26 40.2-29.2 0-20.3-16.1-27.49-43.1-39.3l-14.8-6.35c-42.72-18.2-71.1-41-71.1-89.2 0-44.4 33.83-78.2 86.7-78.2 37.64 0 64.7 13.1 84.2 47.4l-46.1 29.6c-10.15-18.2-21.1-25.37-38.1-25.37-17.34 0-28.33 11-28.33 25.37 0 17.76 11 24.95 36.4 35.95l14.8 6.34c50.3 21.57 78.7 43.56 78.7 93 0 53.3-41.87 82.5-98.1 82.5-54.98 0-90.5-26.2-107.88-60.54zm-209.13 5.13c9.3 16.5 17.76 30.45 38.1 30.45 19.45 0 31.72-7.61 31.72-37.2v-201.3h59.2v202.1c0 61.3-35.94 89.2-88.4 89.2-47.4 0-74.85-24.53-88.81-54.075z">
                              </path>
                           </svg>
                        </span>
                        <span class="image-portfolio__skill--text">JS</span>
                     </div>
                     <div class="image-portfolio__skill">
                        <span class="image-portfolio__icon">
                           <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#"
                              xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                              xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg"
                              xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                              xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" viewBox="0 0 350 240"
                              height="240" width="350" xml:space="preserve" id="svg2" version="1.1"
                              inkscape:version="0.91 r13725" sodipodi:docname="elephpant2.svg">
                              <sodipodi:namedview pagecolor="#ffffff" bordercolor="#666666" borderopacity="1"
                                 objecttolerance="10" gridtolerance="10" guidetolerance="10" inkscape:pageopacity="0"
                                 inkscape:pageshadow="2" inkscape:window-width="2560" inkscape:window-height="1017"
                                 id="namedview194" showgrid="false" inkscape:zoom="2.0408752" inkscape:cx="215.60601"
                                 inkscape:cy="130.47839" inkscape:window-x="-8" inkscape:window-y="-8"
                                 inkscape:window-maximized="1" inkscape:current-layer="svg2"></sodipodi:namedview>
                              <metadata id="metadata8">
                                 <rdf:rdf>
                                    <cc:work rdf:about="">
                                       <dc:format>image/svg+xml</dc:format>
                                       <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"></dc:type>
                                       <dc:title></dc:title>
                                    </cc:work>
                                 </rdf:rdf>
                              </metadata>
                              <defs id="defs6">
                                 <clipPath id="clipPath20" clipPathUnits="userSpaceOnUse">
                                    <path id="path18"
                                       d="m 366.672,2445.95 c 0,0 127.719,141.37 216.176,199.96 28.183,18.65 237.797,128.95 372.402,-250.67 73.64,-207.85 74.87,-362.68 -92.516,-428.71 -100.234,-39.55 -64.41,-113.59 -64.41,-113.59"
                                       inkscape:connector-curvature="0"></path>
                                 </clipPath>
                                 <linearGradient id="linearGradient26" spreadMethod="pad"
                                    gradientTransform="matrix(870.829,-648.982,-648.982,-870.829,1062.31,2048.82)"
                                    gradientUnits="userSpaceOnUse" y2="0" x2="1" y1="0" x1="0">
                                    <stop id="stop22" offset="0" style="stop-opacity:1;stop-color:#8c9bd6"></stop>
                                    <stop id="stop24" offset="1" style="stop-opacity:1;stop-color:#505e9b"></stop>
                                 </linearGradient>
                                 <clipPath id="clipPath38" clipPathUnits="userSpaceOnUse">
                                    <path id="path36"
                                       d="m 2084.18,2364.09 268.24,0 c 22.51,0 40.74,-14.93 40.74,-33.29 l 0,0 c 0,-18.37 -18.23,-33.27 -40.74,-33.27 l -210.54,0 z"
                                       inkscape:connector-curvature="0"></path>
                                 </clipPath>
                                 <linearGradient id="linearGradient44" spreadMethod="pad"
                                    gradientTransform="matrix(878.069,-654.378,-654.378,-878.069,1631.85,2795.24)"
                                    gradientUnits="userSpaceOnUse" y2="0" x2="1" y1="0" x1="0">
                                    <stop id="stop40" offset="0" style="stop-opacity:1;stop-color:#808fd0"></stop>
                                    <stop id="stop42" offset="1" style="stop-opacity:1;stop-color:#505e9b"></stop>
                                 </linearGradient>
                                 <clipPath id="clipPath68" clipPathUnits="userSpaceOnUse">
                                    <path id="path66"
                                       d="m 1150.12,1702.08 0,-535.82 c 0,-132.12 -131.1,-179.471 -292.784,-179.471 l 0,0 c -161.711,0 -292.746,47.351 -292.746,179.471 l 0,542.14"
                                       inkscape:connector-curvature="0"></path>
                                 </clipPath>
                                 <linearGradient id="linearGradient74" spreadMethod="pad"
                                    gradientTransform="matrix(867.01,-646.136,-646.136,-867.01,668.276,1535.96)"
                                    gradientUnits="userSpaceOnUse" y2="0" x2="1" y1="0" x1="0">
                                    <stop id="stop70" offset="0" style="stop-opacity:1;stop-color:#8c9bd6"></stop>
                                    <stop id="stop72" offset="1" style="stop-opacity:1;stop-color:#505e9b"></stop>
                                 </linearGradient>
                                 <clipPath id="clipPath98" clipPathUnits="userSpaceOnUse">
                                    <path id="path96"
                                       d="m 2045.81,1695.54 0,-535.81 c 0,-132.14 -131.09,-179.468 -292.78,-179.468 l 0,0 c -161.7,0 -292.79,47.328 -292.79,179.468 l 0,542.13"
                                       inkscape:connector-curvature="0"></path>
                                 </clipPath>
                                 <linearGradient id="linearGradient104" spreadMethod="pad"
                                    gradientTransform="matrix(867.001,-646.13,-646.13,-867.001,994.502,1953.79)"
                                    gradientUnits="userSpaceOnUse" y2="0" x2="1" y1="0" x1="0">
                                    <stop id="stop100" offset="0" style="stop-opacity:1;stop-color:#8c9bd6"></stop>
                                    <stop id="stop102" offset="1" style="stop-opacity:1;stop-color:#505e9b"></stop>
                                 </linearGradient>
                                 <clipPath id="clipPath128" clipPathUnits="userSpaceOnUse">
                                    <path id="path126"
                                       d="m 903.801,2433.88 c 114.029,-185.4 101.879,-342.02 -50.055,-424.12 -90.965,-49.18 -40.887,-114.04 -40.887,-114.04"
                                       inkscape:connector-curvature="0"></path>
                                 </clipPath>
                                 <linearGradient id="linearGradient134" spreadMethod="pad"
                                    gradientTransform="matrix(841.599,-627.199,-627.199,-841.599,1039.39,2029.86)"
                                    gradientUnits="userSpaceOnUse" y2="0" x2="1" y1="0" x1="0">
                                    <stop id="stop130" offset="0" style="stop-opacity:1;stop-color:#808fd0"></stop>
                                    <stop id="stop132" offset="1" style="stop-opacity:1;stop-color:#505e9b"></stop>
                                 </linearGradient>
                                 <clipPath id="clipPath146" clipPathUnits="userSpaceOnUse">
                                    <path id="path144"
                                       d="m 1569.91,2565.32 c 0,0 -189.32,2.23 -881.043,-20.69 C -2.81641,2521.72 22.7109,2273.69 21.6367,1917.49 l 0,-856.76 c 0,-72.468 62.793,-101.699 140.2733,-101.699 77.469,0 140.356,29.231 140.356,101.699 0,0 17.863,244.81 33.285,393.73 34.5,541.01 687.579,-88.96 1162.329,-59.56 431.41,26.74 771.15,175.65 771.15,529.54 0,353.97 -222.65,640.88 -699.12,640.88 z"
                                       inkscape:connector-curvature="0"></path>
                                 </clipPath>
                                 <linearGradient id="linearGradient152" spreadMethod="pad"
                                    gradientTransform="matrix(875.231,-652.263,-652.263,-875.231,894.629,1822.24)"
                                    gradientUnits="userSpaceOnUse" y2="0" x2="1" y1="0" x1="0">
                                    <stop id="stop148" offset="0" style="stop-opacity:1;stop-color:#8c9bd6"></stop>
                                    <stop id="stop150" offset="1" style="stop-opacity:1;stop-color:#505e9b"></stop>
                                 </linearGradient>
                                 <clipPath id="clipPath164" clipPathUnits="userSpaceOnUse">
                                    <path id="path162"
                                       d="m 40.5078,1894 c 0.7383,-80.46 -10.5781,-783.24 33.8086,-825.44 -13.9453,31.12 16.5625,711.97 16.1719,754.76 l -0.4102,25.04 c 0,11.92 0,23.67 0,35.37 -17.1093,6.32 -33.7148,14.09 -49.7461,22.98 z"
                                       inkscape:connector-curvature="0"></path>
                                 </clipPath>
                                 <linearGradient id="linearGradient170" spreadMethod="pad"
                                    gradientTransform="matrix(579.497,-844.587,-844.587,-579.497,-304.165,2038.99)"
                                    gradientUnits="userSpaceOnUse" y2="0" x2="1" y1="0" x1="0">
                                    <stop id="stop166" offset="0" style="stop-opacity:1;stop-color:#fafafd"></stop>
                                    <stop id="stop168" offset="1" style="stop-opacity:1;stop-color:#8892d2"></stop>
                                 </linearGradient>
                                 <clipPath id="clipPath180" clipPathUnits="userSpaceOnUse">
                                    <path id="path178"
                                       d="m 1569.65,2541.75 c 0,0 -185.21,2.18 -862.005,-20.24 C 30.8789,2499.09 41.2656,2249.73 41.2656,1914.49 l 0.1406,-12.4 c 15.6641,-8.89 31.8985,-16.66 48.5586,-22.99 0.1563,317.27 13.6482,550.06 666.4062,571.68 676.769,22.42 862.039,20.24 862.039,20.24 258.82,0 437,-87.38 547.94,-223.71 -102.14,176.42 -295.52,294.44 -596.7,294.44 z"
                                       inkscape:connector-curvature="0"></path>
                                 </clipPath>
                                 <linearGradient id="linearGradient186" spreadMethod="pad"
                                    gradientTransform="matrix(675.246,-984.137,-984.137,-675.246,649.966,2737.72)"
                                    gradientUnits="userSpaceOnUse" y2="0" x2="1" y1="0" x1="0">
                                    <stop id="stop182" offset="0" style="stop-opacity:1;stop-color:#fafafd"></stop>
                                    <stop id="stop184" offset="1" style="stop-opacity:1;stop-color:#8892d2"></stop>
                                 </linearGradient>
                                 <clipPath id="clipPath196" clipPathUnits="userSpaceOnUse">
                                    <path id="path194"
                                       d="m 1333.93,1456.26 0,-381.58 c 0,-132.121 -131.13,-179.571 -292.82,-179.571 l 0,0 c -161.696,0 -292.755,47.45 -292.755,179.571 l 0,580.79"
                                       inkscape:connector-curvature="0"></path>
                                 </clipPath>
                                 <linearGradient id="linearGradient202" spreadMethod="pad"
                                    gradientTransform="matrix(866.559,-645.8,-645.8,-866.559,654.526,1514.45)"
                                    gradientUnits="userSpaceOnUse" y2="0" x2="1" y1="0" x1="0">
                                    <stop id="stop198" offset="0" style="stop-opacity:1;stop-color:#8c9bd6"></stop>
                                    <stop id="stop200" offset="1" style="stop-opacity:1;stop-color:#505e9b"></stop>
                                 </linearGradient>
                                 <clipPath id="clipPath232" clipPathUnits="userSpaceOnUse">
                                    <path id="path230"
                                       d="m 2229.92,1718.48 0,-628.88 c 0,-132.112 -131.12,-179.53 -292.81,-179.53 l 0,0 c -161.71,0 -292.75,47.418 -292.75,179.53 l 0,361.33"
                                       inkscape:connector-curvature="0"></path>
                                 </clipPath>
                                 <linearGradient id="linearGradient238" spreadMethod="pad"
                                    gradientTransform="matrix(869.571,-648.045,-648.045,-869.571,1046.59,2028.58)"
                                    gradientUnits="userSpaceOnUse" y2="0" x2="1" y1="0" x1="0">
                                    <stop id="stop234" offset="0" style="stop-opacity:1;stop-color:#8c9bd6"></stop>
                                    <stop id="stop236" offset="1" style="stop-opacity:1;stop-color:#505e9b"></stop>
                                 </linearGradient>
                                 <clipPath id="clipPath298" clipPathUnits="userSpaceOnUse">
                                    <path id="path296"
                                       d="m 571.879,2500.55 c 0,0 171.527,117.93 279.867,158.35 34.531,12.89 283.674,78.71 324.064,-351.49 22.08,-235.55 -17.68,-398.24 -210.83,-427.71 -115.589,-17.66 -97.691,-103.81 -97.691,-103.81"
                                       inkscape:connector-curvature="0"></path>
                                 </clipPath>
                                 <linearGradient id="linearGradient304" spreadMethod="pad"
                                    gradientTransform="matrix(868.236,-647.05,-647.05,-868.236,1098.5,2096.02)"
                                    gradientUnits="userSpaceOnUse" y2="0" x2="1" y1="0" x1="0">
                                    <stop id="stop300" offset="0" style="stop-opacity:1;stop-color:#8c9bd6"></stop>
                                    <stop id="stop302" offset="1" style="stop-opacity:1;stop-color:#505e9b"></stop>
                                 </linearGradient>
                                 <clipPath id="clipPath316" clipPathUnits="userSpaceOnUse">
                                    <path id="path314"
                                       d="m 747.344,2531.75 c 194.211,121.45 302.026,59.35 302.026,59.35 -84.444,77.21 -179.436,51.62 -200.444,43.74 -107.969,-40.42 -316.485,-189.8 -316.485,-189.8 0,0 -28.195,-50.01 27.989,-39.16 0,0 122.211,85.38 186.914,125.87 z"
                                       inkscape:connector-curvature="0"></path>
                                 </clipPath>
                                 <linearGradient id="linearGradient322" spreadMethod="pad"
                                    gradientTransform="matrix(690.106,-1005.8,-1005.8,-690.106,633.604,2727.32)"
                                    gradientUnits="userSpaceOnUse" y2="0" x2="1" y1="0" x1="0">
                                    <stop id="stop318" offset="0" style="stop-opacity:1;stop-color:#fafafd"></stop>
                                    <stop id="stop320" offset="1" style="stop-opacity:1;stop-color:#8892d2"></stop>
                                 </linearGradient>
                              </defs>
                              <g id="g4577" transform="matrix(0.99618507,0,0,0.98808081,8.1337521e-7,-101.85463)">
                                 <g transform="matrix(0.13333333,0,0,-0.13333333,0,462.54667)" id="g14">
                                    <g id="g16" clip-path="url(#clipPath20)">
                                       <path inkscape:connector-curvature="0"
                                          d="m 366.672,2445.95 c 0,0 127.719,141.37 216.176,199.96 28.183,18.65 237.797,128.95 372.402,-250.67 73.64,-207.85 74.87,-362.68 -92.516,-428.71 -100.234,-39.55 -64.41,-113.59 -64.41,-113.59"
                                          style="fill:url(#linearGradient26);fill-opacity:1;fill-rule:nonzero;stroke:none"
                                          id="path28"></path>
                                    </g>
                                 </g>
                                 <path inkscape:connector-curvature="0"
                                    d="m 76.081731,107.46268 c -11.963999,7.924 -28.666666,26.34933 -29.371332,27.128 -1.044267,1.15866 -0.921867,2.92 0.2808,3.928 1.199466,1.00666 3.0224,0.89066 4.068133,-0.26934 0.169867,-0.188 16.931866,-18.67866 28.287999,-26.19733 0.340134,-0.22933 8.624533,-5.58933 18.714133,-2.364 10.610396,3.39334 19.802136,15.288 26.573996,34.39333 10.78054,30.42 7.58334,46.48 -10.69386,53.684 -5.2728,2.08534 -8.74427,5.09867 -10.31454,8.97467 -2.0724,5.112 0.1104,9.72933 0.20467,9.92667 0.66667,1.38533 2.3604,1.97333 3.79893,1.33866 1.44227,-0.628 2.0824,-2.272 1.4396,-3.668 -0.0109,-0.0267 -1.24373,-2.76533 -0.0421,-5.63466 0.988,-2.368 3.37493,-4.31867 7.0964,-5.78267 27.5728,-10.88133 21.94747,-38.12267 13.9676,-60.64267 -7.4848,-21.11066 -17.64893,-33.84933 -30.212932,-37.87066 -12.559467,-4.01733 -22.687067,2.324 -23.797467,3.056"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path30"></path>
                                 <g transform="matrix(0.13333333,0,0,-0.13333333,0,462.54667)" id="g32">
                                    <g id="g34" clip-path="url(#clipPath38)">
                                       <path inkscape:connector-curvature="0"
                                          d="m 2084.18,2364.09 268.24,0 c 22.51,0 40.74,-14.93 40.74,-33.29 l 0,0 c 0,-18.37 -18.23,-33.27 -40.74,-33.27 l -210.54,0 -57.7,66.56"
                                          style="fill:url(#linearGradient44);fill-opacity:1;fill-rule:nonzero;stroke:none"
                                          id="path46"></path>
                                    </g>
                                 </g>
                                 <path inkscape:connector-curvature="0"
                                    d="m 313.65599,150.11601 c 1.50134,0 2.54534,0.87467 2.54534,1.65733 0,0.78134 -1.044,1.656 -2.54534,1.656 0,0 -24.27733,0 -26.724,0 -0.57466,-0.65866 -1.43466,-1.66 -2.86933,-3.31333 8.452,0 29.59333,0 29.59333,0 z m -41.93466,-5.56267 12.51466,14.44 29.42,0 c 4.588,0 8.316,-3.23866 8.316,-7.22 0,-3.98266 -3.728,-7.22 -8.316,-7.22 l -41.93466,0"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path48"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 324.72399,137.01734 c 4.91734,-2.34266 10.664,-1.76933 12.84933,1.27867 2.17467,3.056 -0.0453,7.42 -4.96133,9.772 -4.908,2.34 -17.77466,5.17067 -19.956,2.11067 -2.184,-3.048 7.15867,-10.82 12.068,-13.16134"
                                    style="fill:#8b9dd7;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path50"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 325.99866,139.51068 0,0 c 3.81467,-1.816 8.00266,-1.304 9.19733,0.36666 0.332,0.468 0.40933,1.00534 0.236,1.648 -0.308,1.16 -1.54933,2.832 -4.10266,4.052 -4.74134,2.25867 -13.16134,3.584 -15.76267,2.944 0.96,-2.156 6.22667,-7.00266 10.432,-9.01066 z m -2.552,-4.98534 0,0 c -4.112,1.956 -12.47467,8.192 -13.79733,13.12134 l 0.63466,4.11066 c 3.95067,5.54934 19.88934,0.57734 23.60533,-1.19733 3.70134,-1.76667 6.29867,-4.55067 7.128,-7.63867 0.59334,-2.20133 0.21334,-4.40266 -1.07066,-6.20133 -3.012,-4.208 -10.25467,-5.17067 -16.5,-2.19467"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path52"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 333.45999,155.02534 c 5.272,1.76 8.208,5.836 6.58133,9.108 -1.64133,3.276 -7.23466,4.492 -12.50266,2.72667 -5.26,-1.756 -15.84,-8.37733 -14.20667,-11.64533 1.64,-3.28267 14.868,-1.94934 20.128,-0.18934"
                                    style="fill:#8b9dd7;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path54"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 334.40799,152.40001 -0.005,0 z m -1.89333,5.252 0.003,0 c 2.83199,0.95067 4.38266,2.53067 4.88533,3.696 0.38266,0.89067 0.124,1.41333 0.036,1.584 -0.86667,1.736 -4.88667,2.66133 -8.95467,1.3 -4.64933,-1.55067 -10.9,-5.92 -12.07733,-7.93067 2.18133,-0.73066 11.02133,-0.352 16.108,1.35067 z m -21.78,-3.644 0.003,4.036 c 2.03066,4.71733 11.40133,9.95867 15.85866,11.448 6.704,2.24667 13.75467,0.424 16.04133,-4.14267 0.48667,-0.98533 0.72934,-2.04266 0.72934,-3.11466 0,-1.01067 -0.21334,-2.032 -0.64267,-3.032 -1.292,-2.99334 -4.324,-5.46934 -8.32133,-6.80267 -3.988,-1.33733 -20.65467,-4.428 -23.668,1.608"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path56"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 334.23066,144.94134 c 7.82266,-0.0507 14.19466,2.768 14.224,6.30267 0.0387,3.53333 -6.26667,6.43733 -14.09334,6.488 -7.81066,0.0533 -25.51199,-2.684 -25.54799,-6.21467 -0.036,-3.53866 17.60533,-6.51733 25.41733,-6.576"
                                    style="fill:#8b9dd7;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path58"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 345.57066,151.27068 c 0,0.13466 -0.12534,0.39733 -0.476,0.74133 -1.41334,1.39067 -5.38667,2.90267 -10.75067,2.93733 -6.708,0.0453 -17.31866,-1.77466 -21.40133,-3.464 4.05333,-1.752 14.612,-3.716 21.31066,-3.76133 l -0.003,0 c 7.408,-0.0493 11.31333,2.612 11.32,3.54667 z m -11.35734,-9.11334 -0.004,0 c -5.68266,0.0413 -22.55866,2.04267 -26.88799,6.28534 l -1.39067,3.10266 c 0.08,8.17867 28.168,8.97067 28.452,8.97067 6.29466,-0.044 11.97733,-1.80533 14.828,-4.60133 1.41333,-1.38534 2.148,-3.00667 2.12933,-4.69867 -0.044,-5.308 -7.248,-9.12 -17.12667,-9.05867"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path60"></path>
                                 <g transform="matrix(0.13333333,0,0,-0.13333333,0,462.54667)" id="g62">
                                    <g id="g64" clip-path="url(#clipPath68)">
                                       <path inkscape:connector-curvature="0"
                                          d="m 1150.12,1702.08 0,-535.82 c 0,-132.12 -131.1,-179.471 -292.784,-179.471 l 0,0 c -161.711,0 -292.746,47.351 -292.746,179.471 l 0,542.14"
                                          style="fill:url(#linearGradient74);fill-opacity:1;fill-rule:nonzero;stroke:none"
                                          id="path76"></path>
                                    </g>
                                 </g>
                                 <path inkscape:connector-curvature="0"
                                    d="m 72.394798,234.76001 0,72.28533 c 0,17.228 14.882266,26.71227 41.916662,26.71227 27.03387,0 41.92187,-9.48427 41.92187,-26.71227 l 0,-71.44266 c 0,-1.53734 -1.292,-2.784 -2.884,-2.784 -1.59333,0 -2.884,1.24666 -2.884,2.784 l 0,71.44266 c 0,17.48 -19.65747,21.14667 -36.15387,21.14667 -16.490129,0 -36.147862,-3.66667 -36.147862,-21.14667 l 0,-72.28533 c 0,-1.53467 -1.2928,-2.78133 -2.884933,-2.78133 -1.591734,0 -2.883867,1.24666 -2.883867,2.78133"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path78"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 92.386398,306.96001 c 0,7.12666 -4.1312,12.92 -9.2296,12.92 -5.098933,0 -9.231333,-5.79334 -9.231333,-12.92 0,-7.14 4.1324,-23.26 9.231333,-23.26 5.0984,0 9.2296,16.12 9.2296,23.26"
                                    style="fill:#8b9dd7;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path80"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 74.887998,306.96001 c 0,-7.764 4.378133,-22.33334 8.2688,-22.33334 3.889066,0 8.268666,14.56934 8.268666,22.33334 0,6.616 -3.7072,11.99466 -8.268666,11.99466 -4.5584,0 -8.2688,-5.37866 -8.2688,-11.99466 z m -1.924933,0 c 0,7.636 4.571333,13.85066 10.193733,13.85066 5.620266,0 10.1896,-6.21466 10.1896,-13.85066 0,-6.97467 -4.059467,-24.19067 -10.1896,-24.19067 -6.128667,0 -10.193733,17.216 -10.193733,24.19067"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path82"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 76.411998,308.24801 c 0,-6.86534 4.995867,-19.22534 8.642667,-19.22534 0.349466,0 0.691733,0.17467 1.021333,0.44 -0.911467,-2.176 -1.955733,-3.616 -3.062,-3.616 -3.649467,0 -6.602,15.53867 -6.602,22.40134"
                                    style="fill:#a6bde6;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path84"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 96.739598,313.82401 c 0,5.50666 -3.2844,9.972 -7.339067,9.972 -4.0584,0 -7.347466,-4.46534 -7.347466,-9.972 0,-5.52267 3.289066,-17.96 7.347466,-17.96 4.054667,0 7.339067,12.43733 7.339067,17.96"
                                    style="fill:#8b9dd7;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path86"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 83.013998,313.82401 c 0,-5.772 3.4496,-17.03067 6.386533,-17.03067 2.937467,0 6.376533,11.25867 6.376533,17.03067 0,4.98533 -2.862,9.044 -6.376533,9.044 -3.523466,0 -6.386533,-4.05867 -6.386533,-9.044 z m -1.922267,0 c 0,6.008 3.7276,10.9 8.3088,10.9 4.5744,0 8.300533,-4.892 8.300533,-10.9 0,-4.70134 -2.945333,-18.888 -8.300533,-18.888 -5.3636,0 -8.3088,14.18666 -8.3088,18.888"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path88"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 85.140665,310.54401 c -0.369334,-3.924 3.072933,-10.43734 5.754666,-10.91334 0.251067,-0.0333 0.509333,0.0267 0.766133,0.13467 -0.786,-1.128 -1.675466,-2.02667 -2.437466,-1.67467 -2.654667,1.268 -4.452667,8.54267 -4.083333,12.45334"
                                    style="fill:#a6bde6;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path90"></path>
                                 <g transform="matrix(0.13333333,0,0,-0.13333333,0,462.54667)" id="g92">
                                    <g id="g94" clip-path="url(#clipPath98)">
                                       <path inkscape:connector-curvature="0"
                                          d="m 2045.81,1695.54 0,-535.81 c 0,-132.14 -131.09,-179.468 -292.78,-179.468 l 0,0 c -161.7,0 -292.79,47.328 -292.79,179.468 l 0,542.13"
                                          style="fill:url(#linearGradient104);fill-opacity:1;fill-rule:nonzero;stroke:none"
                                          id="path106"></path>
                                    </g>
                                 </g>
                                 <path inkscape:connector-curvature="0"
                                    d="m 191.81333,235.63201 0,72.284 c 0,17.224 14.88933,26.71186 41.924,26.71186 12.168,0 21.92533,-1.92133 29.004,-5.70786 8.44933,-4.52267 12.91733,-11.784 12.91733,-21.004 l 0,-71.44133 c 0,-1.536 -1.292,-2.78134 -2.884,-2.78134 -1.592,0 -2.88133,1.24534 -2.88133,2.78134 l 0,71.44133 c 0,7.27866 -3.25734,12.556 -9.95334,16.14133 -6.12533,3.27333 -15.184,5.00533 -26.20266,5.00533 -16.49334,0 -36.152,-3.672 -36.152,-21.14666 l 0,-72.284 c 0,-1.53867 -1.29467,-2.784 -2.88667,-2.784 -1.592,0 -2.88533,1.24533 -2.88533,2.784"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path108"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 211.81066,307.82934 c 0,7.12667 -4.12933,12.92933 -9.22667,12.92933 -5.10666,0 -9.23466,-5.80266 -9.23466,-12.92933 0,-7.136 4.128,-23.25733 9.23466,-23.25733 5.09734,0 9.22667,16.12133 9.22667,23.25733"
                                    style="fill:#7483ca;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path110"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 194.308,307.82934 c 0,-3.644 1.09466,-9.408 2.65866,-14.01333 1.74,-5.12934 3.89333,-8.31734 5.61733,-8.31734 3.88667,0 8.26667,14.568 8.26667,22.33067 0,6.61867 -3.708,12 -8.26667,12 -4.56399,0 -8.27599,-5.38133 -8.27599,-12 z m 0.83066,-14.59067 c -1.62133,4.76934 -2.75333,10.772 -2.75333,14.59067 0,7.63867 4.57467,13.856 10.19866,13.856 5.61867,0 10.188,-6.21733 10.188,-13.856 0,-6.97467 -4.06,-24.184 -10.188,-24.184 -3.46399,0 -5.95999,5.21333 -7.44533,9.59333"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path112"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 195.84133,309.12667 c 0,-6.868 4.992,-19.236 8.63866,-19.236 0.35067,0 0.692,0.18 1.02267,0.44134 -0.91467,-2.172 -1.956,-3.61467 -3.06133,-3.61467 -3.652,0 -6.6,15.54133 -6.6,22.40933"
                                    style="fill:#839ad6;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path114"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 216.16666,314.69201 c 0,5.51466 -3.28267,9.96933 -7.34133,9.96933 -4.05467,0 -7.34267,-4.45467 -7.34267,-9.96933 0,-5.52134 3.288,-17.95734 7.34267,-17.95734 4.05866,0 7.34133,12.436 7.34133,17.95734"
                                    style="fill:#7483ca;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path116"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 202.44533,314.69201 c 0,-5.772 3.44266,-17.028 6.38,-17.028 2.93333,0 6.37866,11.256 6.37866,17.028 0,4.98666 -2.86266,9.04666 -6.37866,9.04666 -3.52,0 -6.38,-4.06 -6.38,-9.04666 z m -1.92267,0 c 0,6.01466 3.724,10.9 8.30267,10.9 4.57866,0 8.30266,-4.88534 8.30266,-10.9 0,-4.7 -2.94666,-18.884 -8.30266,-18.884 -5.36,0 -8.30267,14.184 -8.30267,18.884"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path118"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 204.56933,311.41467 c -0.37467,-3.92 3.06933,-10.432 5.752,-10.91066 0.25333,-0.0347 0.512,0.0227 0.76533,0.132 -0.78533,-1.128 -1.67467,-2.028 -2.43733,-1.67467 -2.656,1.268 -4.45467,8.54133 -4.08,12.45333"
                                    style="fill:#839ad6;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path120"></path>
                                 <g transform="matrix(0.13333333,0,0,-0.13333333,0,462.54667)" id="g122">
                                    <g id="g124" clip-path="url(#clipPath128)">
                                       <path inkscape:connector-curvature="0"
                                          d="m 903.801,2433.88 c 114.029,-185.4 101.879,-342.02 -50.055,-424.12 -90.965,-49.18 -40.887,-114.04 -40.887,-114.04"
                                          style="fill:url(#linearGradient134);fill-opacity:1;fill-rule:nonzero;stroke:none"
                                          id="path136"></path>
                                    </g>
                                 </g>
                                 <path inkscape:connector-curvature="0"
                                    d="m 119.0364,135.63468 c -1.3724,0.78533 -1.82707,2.49333 -1.01094,3.81466 8.4636,13.75334 11.49227,26.20934 8.7636,36.01334 -1.94013,6.96933 -6.77866,12.584 -14.3636,16.68933 -4.7948,2.58933 -7.65466,5.856 -8.5052,9.704 -1.1572,5.22933 2.01414,9.41467 2.15,9.58933 0.94587,1.22534 2.7308,1.47334 4.0104,0.57334 1.27667,-0.90134 1.55574,-2.63867 0.63027,-3.87867 -0.014,-0.024 -1.77187,-2.43067 -1.138,-5.17467 0.50773,-2.19466 2.41613,-4.19866 5.6692,-5.95866 8.99907,-4.86667 14.76053,-11.62534 17.11987,-20.10267 3.13933,-11.28667 -0.098,-25.22133 -9.3756,-40.296 -0.81147,-1.32267 -2.5848,-1.756 -3.95,-0.97333"
                                    style="fill:#080604;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path138"></path>
                                 <g transform="matrix(0.13333333,0,0,-0.13333333,0,462.54667)" id="g140">
                                    <g id="g142" clip-path="url(#clipPath146)">
                                       <path inkscape:connector-curvature="0"
                                          d="m 1569.91,2565.32 c 0,0 -189.32,2.23 -881.043,-20.69 C -2.81641,2521.72 22.7109,2273.69 21.6367,1917.49 l 0,-856.76 c 0,-72.468 62.793,-101.699 140.2733,-101.699 77.469,0 140.356,29.231 140.356,101.699 0,0 17.863,244.81 33.285,393.73 34.5,541.01 687.579,-88.96 1162.329,-59.56 431.41,26.74 771.15,175.65 771.15,529.54 0,353.97 -222.65,640.88 -699.12,640.88"
                                          style="fill:url(#linearGradient152);fill-opacity:1;fill-rule:nonzero;stroke:none"
                                          id="path154"></path>
                                    </g>
                                 </g>
                                 <path inkscape:connector-curvature="0"
                                    d="m 5.7687465,321.11601 0,-114.23467 c 0,0.0107 0.00729,-5.03333 0.00729,-5.03333 0.015627,-43.93067 0.02812,-72.95333 86.1698245,-75.80666 91.034139,-3.01334 117.086129,-2.76 117.340799,-2.75867 l 0.0347,0 c 29.004,0 52.63866,8.36 68.348,24.17333 14.38266,14.472 21.984,34.7 21.984,58.49867 0,50.93066 -54.44667,64.99733 -100.12,67.82933 -24.03867,1.48533 -52.39333,-10.4 -77.4104,-20.88933 -28.042669,-11.75467 -52.260401,-21.90534 -67.170801,-13.09334 -7.8756,4.65334 -12.156266,14.024 -13.088533,28.64667 -2.026667,19.56 -4.416267,52.14133 -4.438533,52.47333 -0.0068,9.57067 -9.925067,10.9732 -15.837067,10.9732 -5.906266,0 -15.8192529,-1.40253 -15.8192529,-10.77853 z m 85.9828515,-200.632 c -91.7151396,3.036 -91.73076467,35.88933 -91.74430633,81.36 L 0,206.87334 0,321.11601 c 0,10.23226 8.0713598,16.34786 21.587999,16.34786 13.528667,0 21.598933,-6.1156 21.598933,-16.34786 0.01667,-0.13467 2.3948,-32.63734 4.424533,-52.22267 0.8172,-12.78266 4.202534,-20.70933 10.353067,-24.348 12.355733,-7.29733 36.394799,2.78134 61.858928,13.45467 25.61654,10.73866 54.64854,22.912 80.0792,21.336 68.04533,-4.22 105.51867,-30.28 105.51867,-73.38133 0,-25.25867 -8.15734,-46.81734 -23.58667,-62.35067 -16.82267,-16.932 -41.89867,-25.884 -72.51333,-25.884 l 0.0347,0 c -0.252,-0.003 -26.36799,-0.26533 -117.604392,2.764"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path156"></path>
                                 <g transform="matrix(0.13333333,0,0,-0.13333333,0,462.54667)" id="g158">
                                    <g id="g160" clip-path="url(#clipPath164)">
                                       <path inkscape:connector-curvature="0"
                                          d="m 40.5078,1894 c 0.7383,-80.46 -10.5781,-783.24 33.8086,-825.44 -13.9453,31.12 16.5625,711.97 16.1719,754.76 l -0.4102,25.04 c 0,11.92 0,23.67 0,35.37 -17.1093,6.32 -33.7148,14.09 -49.7461,22.98 L 40.5078,1894"
                                          style="fill:url(#linearGradient170);fill-opacity:1;fill-rule:nonzero;stroke:none"
                                          id="path172"></path>
                                    </g>
                                 </g>
                                 <g transform="matrix(0.13333333,0,0,-0.13333333,0,462.54667)" id="g174">
                                    <g id="g176" clip-path="url(#clipPath180)">
                                       <path inkscape:connector-curvature="0"
                                          d="m 1569.65,2541.75 c 0,0 -185.21,2.18 -862.005,-20.24 C 30.8789,2499.09 41.2656,2249.73 41.2656,1914.49 l 0.1406,-12.4 c 15.6641,-8.89 31.8985,-16.66 48.5586,-22.99 0.1563,317.27 13.6482,550.06 666.4062,571.68 676.769,22.42 862.039,20.24 862.039,20.24 258.82,0 437,-87.38 547.94,-223.71 -102.14,176.42 -295.52,294.44 -596.7,294.44"
                                          style="fill:url(#linearGradient186);fill-opacity:1;fill-rule:nonzero;stroke:none"
                                          id="path188"></path>
                                    </g>
                                 </g>
                                 <g transform="matrix(0.13333333,0,0,-0.13333333,0,462.54667)" id="g190">
                                    <g id="g192" clip-path="url(#clipPath196)">
                                       <path inkscape:connector-curvature="0"
                                          d="m 1333.93,1456.26 0,-381.58 c 0,-132.121 -131.13,-179.571 -292.82,-179.571 l 0,0 c -161.696,0 -292.755,47.45 -292.755,179.571 l 0,580.79"
                                          style="fill:url(#linearGradient202);fill-opacity:1;fill-rule:nonzero;stroke:none"
                                          id="path204"></path>
                                    </g>
                                 </g>
                                 <path inkscape:connector-curvature="0"
                                    d="m 96.896398,241.81734 0,77.43867 c 0,17.23333 14.890532,26.7224 41.918262,26.7224 27.036,0 41.928,-9.48907 41.928,-26.7224 l 0,-50.87734 c 0,-1.536 -1.29466,-2.78266 -2.88533,-2.78266 -1.59067,0 -2.884,1.24666 -2.884,2.78266 l 0,50.87734 c 0,17.48906 -19.66133,21.15893 -36.15867,21.15893 -16.4892,0 -36.1496,-3.66987 -36.1496,-21.15893 l 0,-77.43867 c 0,-1.536 -1.29213,-2.78133 -2.884396,-2.78133 -1.592666,0 -2.884266,1.24533 -2.884266,2.78133"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path206"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 124.33693,324.19067 c 0,6.6268 -5.51187,12.00134 -12.31813,12.00134 -6.80574,0 -12.319869,-5.37454 -12.319869,-12.00134 0,-6.63466 5.514129,-21.61066 12.319869,-21.61066 6.80626,0 12.31813,14.976 12.31813,21.61066"
                                    style="fill:#8b9dd7;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path208"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 100.66093,324.19067 c 0,-6.46 5.49173,-20.68666 11.35787,-20.68666 5.86666,0 11.35826,14.22666 11.35826,20.68666 0,6.10907 -5.0916,11.0748 -11.35826,11.0748 -6.25894,0 -11.35787,-4.96573 -11.35787,-11.0748 z m -1.924532,0 c 0,7.12787 5.958402,12.92947 13.282402,12.92947 7.32493,0 13.28226,-5.8016 13.28226,-12.92947 0,-6.72133 -5.6052,-22.544 -13.28226,-22.544 -7.6704,0 -13.282402,15.82267 -13.282402,22.544"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path210"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 101.80266,324.98401 c 0,-5.93467 6.89734,-16.596 11.94374,-16.596 0.48066,0 0.94733,0.152 1.41346,0.384 -1.27133,-1.87467 -2.70626,-3.12267 -4.23013,-3.12267 -5.04853,0 -9.12707,13.408 -9.12707,19.33467"
                                    style="fill:#a6bde6;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path212"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 134.37333,325.12934 c 0,8.74027 -5.70933,15.85227 -12.75307,15.85227 -7.05413,0 -12.76346,-7.112 -12.76346,-15.85227 0,-8.752 5.70933,-28.516 12.76346,-28.516 7.04374,0 12.75307,19.764 12.75307,28.516"
                                    style="fill:#8b9dd7;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path214"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 109.8172,325.12934 c 0,-8.62 5.70933,-27.59067 11.80306,-27.59067 6.09227,0 11.79307,18.97067 11.79307,27.59067 0,8.22667 -5.28933,14.92253 -11.79307,14.92253 -6.50573,0 -11.80306,-6.69586 -11.80306,-14.92253 z m -1.9224,0 c 0,9.25067 6.15826,16.77987 13.72546,16.77987 7.56414,0 13.71574,-7.5292 13.71574,-16.77987 0,-8.78533 -5.79227,-29.44133 -13.71574,-29.44133 -7.92653,0 -13.72546,20.656 -13.72546,29.44133"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path216"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 112.2964,326.71467 c 0,-8.428 6.90413,-23.57466 11.9448,-23.57466 0.48013,0 0.9536,0.21866 1.4124,0.54133 -1.2624,-2.67467 -2.70627,-4.43733 -4.22907,-4.43733 -5.04907,0 -9.12813,19.05466 -9.12813,27.47066"
                                    style="fill:#a6bde6;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path218"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 141.068,329.83627 c 0,6.18747 -4.10934,11.20254 -9.18054,11.20254 -5.0692,0 -9.1792,-5.01507 -9.1792,-11.20254 0,-6.2176 4.11,-20.2016 9.1792,-20.2016 5.0712,0 9.18054,13.984 9.18054,20.2016"
                                    style="fill:#8b9dd7;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path220"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 123.66973,329.83627 c 0,-6.7016 4.35893,-19.27493 8.21773,-19.27493 3.86854,0 8.2192,12.57333 8.2192,19.27493 0,5.6692 -3.684,10.27294 -8.2192,10.27294 -4.53013,0 -8.21773,-4.60374 -8.21773,-10.27294 z m -1.92333,0 c 0,6.68907 4.55306,12.13014 10.14106,12.13014 5.59787,0 10.14054,-5.44107 10.14054,-12.13014 0,-6.09226 -4.04,-21.12826 -10.14054,-21.12826 -6.09786,0 -10.14106,15.036 -10.14106,21.12826"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path222"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 126.56933,326.14134 c -0.4652,-4.41867 3.83747,-11.744 7.18933,-12.27333 0.316,-0.0507 0.63734,0.024 0.96134,0.14533 -0.984,-1.27333 -2.096,-2.28267 -3.04867,-1.88133 -3.32187,1.42666 -5.5672,9.60533 -5.102,14.00933"
                                    style="fill:#a6bde6;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path224"></path>
                                 <g transform="matrix(0.13333333,0,0,-0.13333333,0,462.54667)" id="g226">
                                    <g id="g228" clip-path="url(#clipPath232)">
                                       <path inkscape:connector-curvature="0"
                                          d="m 2229.92,1718.48 0,-628.88 c 0,-132.112 -131.12,-179.53 -292.81,-179.53 l 0,0 c -161.71,0 -292.75,47.418 -292.75,179.53 l 0,361.33"
                                          style="fill:url(#linearGradient238);fill-opacity:1;fill-rule:nonzero;stroke:none"
                                          id="path240"></path>
                                    </g>
                                 </g>
                                 <path inkscape:connector-curvature="0"
                                    d="m 294.43466,233.41601 0,83.85066 c 0,17.4868 -19.66133,21.15454 -36.15333,21.15454 -16.488,0 -36.148,-3.66774 -36.148,-21.15454 l 0,-48.17733 c 0,-1.536 -1.292,-2.784 -2.88534,-2.784 -1.592,0 -2.884,1.248 -2.884,2.784 l 0,48.17733 c 0,17.23054 14.88667,26.72267 41.91734,26.72267 27.03333,0 41.92266,-9.49213 41.92266,-26.72267 l 0,-83.85066 c 0,-1.53733 -1.28933,-2.78 -2.88133,-2.78 -1.59467,0 -2.888,1.24267 -2.888,2.78"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path242"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 243.80533,322.20001 c 0,6.62266 -5.51467,11.99613 -12.32,11.99613 -6.80534,0 -12.31867,-5.37347 -12.31867,-11.99613 0,-6.63467 5.51333,-21.61334 12.31867,-21.61334 6.80533,0 12.32,14.97867 12.32,21.61334"
                                    style="fill:#8b9dd7;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path244"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 220.12933,322.20001 c 0,-6.46267 5.48933,-20.68267 11.356,-20.68267 5.86933,0 11.36,14.22 11.36,20.68267 0,6.104 -5.09734,11.0732 -11.36,11.0732 -6.26134,0 -11.356,-4.9692 -11.356,-11.0732 z m -1.924,0 c 0,7.12786 5.956,12.92786 13.28,12.92786 7.324,0 13.28133,-5.8 13.28133,-12.92786 0,-6.72267 -5.60667,-22.54 -13.28133,-22.54 -7.672,0 -13.28,15.81733 -13.28,22.54"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path246"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 221.26933,322.98934 c 0,-5.932 6.896,-16.592 11.944,-16.592 0.48133,0 0.94666,0.15067 1.41333,0.38 -1.26933,-1.87467 -2.704,-3.12133 -4.22933,-3.12133 -5.048,0 -9.128,13.40933 -9.128,19.33333"
                                    style="fill:#a6bde6;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path248"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 253.84266,323.13467 c 0,8.74534 -5.708,15.85574 -12.75733,15.85574 -7.05467,0 -12.76267,-7.1104 -12.76267,-15.85574 0,-8.752 5.708,-28.51066 12.76267,-28.51066 7.04933,0 12.75733,19.75866 12.75733,28.51066"
                                    style="fill:#8b9dd7;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path250"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 229.28399,323.13467 c 0,-8.62 5.70534,-27.58533 11.80134,-27.58533 6.09466,0 11.79466,18.96533 11.79466,27.58533 0,8.2292 -5.292,14.92814 -11.79466,14.92814 -6.50934,0 -11.80134,-6.69894 -11.80134,-14.92814 z m -1.92266,0 c 0,9.2532 6.156,16.78027 13.724,16.78027 7.564,0 13.71733,-7.52707 13.71733,-16.78027 0,-8.78133 -5.79067,-29.44266 -13.71733,-29.44266 -7.93067,0 -13.724,20.66133 -13.724,29.44266"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path252"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 231.76399,324.72401 c 0,-8.42667 6.904,-23.57334 11.94267,-23.57334 0.48267,0 0.95467,0.21734 1.41467,0.53867 -1.26134,-2.67467 -2.704,-4.43333 -4.23067,-4.43333 -5.048,0 -9.12667,19.048 -9.12667,27.468"
                                    style="fill:#a6bde6;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path254"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 260.53333,327.84267 c 0,6.1904 -4.108,11.2056 -9.17734,11.2056 -5.06933,0 -9.18,-5.0152 -9.18,-11.2056 0,-6.21466 4.11067,-20.20266 9.18,-20.20266 5.06934,0 9.17734,13.988 9.17734,20.20266"
                                    style="fill:#8b9dd7;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path256"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 243.13599,327.84267 c 0,-6.7 4.35467,-19.27066 8.22,-19.27066 3.864,0 8.21867,12.57066 8.21867,19.27066 0,5.668 -3.69067,10.27747 -8.21867,10.27747 -4.53066,0 -8.22,-4.60947 -8.22,-10.27747 z m -1.92266,0 c 0,6.692 4.548,12.13054 10.14266,12.13054 5.592,0 10.13867,-5.43854 10.13867,-12.13054 0,-6.08933 -4.04,-21.128 -10.13867,-21.128 -6.10133,0 -10.14266,15.03867 -10.14266,21.128"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path258"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 246.03733,324.15067 c -0.464,-4.42 3.83733,-11.74266 7.18933,-12.27333 0.31467,-0.0493 0.63733,0.02 0.96133,0.14533 -0.98666,-1.276 -2.096,-2.27866 -3.04933,-1.88533 -3.32267,1.42667 -5.56533,9.608 -5.10133,14.01333"
                                    style="fill:#a6bde6;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path260"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 27.342133,160.29468 c -1.018667,1.384 -0.659334,3.28666 0.808933,4.25466 1.462533,0.96667 3.478667,0.62134 4.496267,-0.75866 5.800533,-7.88134 18.846932,-10.05334 25.049599,-7.81467 1.235867,0.448 2.797866,0.25333 3.480666,-0.444 0.682267,-0.688 0.236,-1.61333 -1.002666,-2.06 -8.492667,-3.06933 -25.153066,-3.62533 -32.832799,6.82267"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path262"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 52.482265,194.93868 c -5.3568,1.12933 -10.079599,-1.868 -10.544266,-6.692 -0.463067,-4.832 3.507867,-9.66 8.866133,-10.8 5.362533,-1.13334 10.083866,1.856 10.552133,6.69066 0.459867,4.83067 -3.509866,9.65734 -8.874,10.80134 z m 11.077067,-11.44534 c -0.536934,-5.62933 -6.114533,-9.09333 -12.4708,-7.756 -6.3484,1.344 -11.064533,6.98134 -10.5312,12.60267 0.5344,5.61867 6.114,9.092 12.462933,7.76 6.355734,-1.348 11.073467,-6.984 10.539067,-12.60667"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path264"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 61.017198,184.52668 c 0.4068,4.24666 -3.066666,8.5 -7.757333,9.492 -4.709866,1.00266 -8.839599,-1.64 -9.259333,-5.88667 -0.4036,-4.24667 3.070267,-8.496 7.763067,-9.48933 4.7052,-1 8.846266,1.63333 9.253599,5.884"
                                    style="fill:#fcfcfc;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path266"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 60.329732,184.56934 c -1.2704,-3.236 -4.643733,-5.112 -7.504667,-4.21066 -1.533333,0.47466 -2.583866,1.66 -3.073466,3.14133 l 3.998933,1.97867 -3.674,2.652 c 1.361467,3.052 4.581867,4.804 7.360933,3.93333 2.8724,-0.912 4.161467,-4.26 2.892267,-7.49467"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path268"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 57.385465,183.18268 c 0.711867,-0.10267 1.55,0.75866 1.854667,1.95466 0.3072,1.18134 -0.02347,2.232 -0.751067,2.344 -0.719733,0.108 -1.556266,-0.76 -1.864533,-1.952 -0.299067,-1.18 0.03853,-2.228 0.760933,-2.34666"
                                    style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path270"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 45.752132,178.30534 c -5.014133,3.86934 -6.599066,9.48934 -3.211466,12.67467 -0.293734,-0.12533 0.345733,0.69333 0.07493,0.54133 -5.333867,-2.95733 -6.224933,-11.73866 -1.314533,-16.90533 4.215066,-4.44 16.863999,-7.732 16.770266,-6.02 -0.521867,1.964 -4.224933,4.45733 -8.822933,7.16667 -1.480134,0.84133 -2.547334,1.812 -3.496267,2.54266"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path272"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 128.138,232.84401 c -0.25827,1.31733 0.6328,2.39867 1.97706,2.39867 l 7.72494,0 c 1.34666,0 2.65466,-1.08134 2.91466,-2.39867 l 2.05734,-10.60267 c 0.25866,-1.32 1.564,-2.39866 2.912,-2.39866 l 8.36,0 c 4.768,0 8.69066,-0.50134 11.76666,-1.50534 3.08267,-0.99866 5.87734,-2.68133 8.40134,-5.04 2.10933,-1.94133 3.824,-4.084 5.13066,-6.432 1.30667,-2.34 2.24,-4.92666 2.78667,-7.756 1.336,-6.864 0.0213,-11.97066 -3.016,-16.04933 -3.81467,-5.10667 -13.54933,-5.37733 -13.54933,-5.37733 -1.33067,-0.2 -3.51734,-0.37067 -4.86267,-0.37067 l -19.36933,0 c -1.344,0 -2.652,1.08267 -2.912,2.404 z m 30.26733,-46.38933 c 4.796,0 7.98667,0.88666 9.58533,2.656 1.59467,1.76933 1.97734,4.80933 1.144,9.112 -0.876,4.484 -2.556,7.688 -5.044,9.604 -2.488,1.91466 -8.93066,2.608 -8.93066,2.608 -1.34,0.14666 -3.53467,0.26533 -4.87734,0.26533 l -2.78133,0 c -1.344,0 -2.23867,-1.08133 -1.98,-2.4 L 149.3,188.85734 c 0.256,-1.32 1.56666,-2.40266 2.90933,-2.40266 l 6.196,0"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path274"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 128.138,232.84401 c -0.25827,1.31733 0.6328,2.39867 1.97706,2.39867 l 7.72494,0 c 1.34666,0 2.65466,-1.08134 2.91466,-2.39867 l 2.05734,-10.60267 c 0.25866,-1.32 1.564,-2.39866 2.912,-2.39866 l 8.36,0 c 4.768,0 8.69066,-0.50134 11.76666,-1.50534 3.08267,-0.99866 5.87734,-2.68133 8.40134,-5.04 2.10933,-1.94133 3.824,-4.084 5.13066,-6.432 1.30667,-2.34 2.24,-4.92666 2.78667,-7.756 1.336,-6.864 0.0213,-11.97066 -3.016,-16.04933 -3.81467,-5.10667 -13.54933,-5.37733 -13.54933,-5.37733 -1.33067,-0.2 -3.51734,-0.37067 -4.86267,-0.37067 l -19.36933,0 c -1.344,0 -2.652,1.08267 -2.912,2.404 z m 30.26733,-46.38933 c 4.796,0 7.98667,0.88666 9.58533,2.656 1.59467,1.76933 1.97734,4.80933 1.144,9.112 -0.876,4.484 -2.556,7.688 -5.044,9.604 -2.488,1.91466 -8.93066,2.608 -8.93066,2.608 -1.34,0.14666 -3.53467,0.26533 -4.87734,0.26533 l -2.78133,0 c -1.344,0 -2.23867,-1.08133 -1.98,-2.4 L 149.3,188.85734 c 0.256,-1.32 1.56666,-2.40266 2.90933,-2.40266 z"
                                    style="fill:none;stroke:#ffffff;stroke-width:5.33333302;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                                    id="path276"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 194.33866,164.31334 c 0.256,-1.31733 1.564,-2.39733 2.908,-2.39733 l 7.628,0 c 1.34667,0 2.236,1.08 1.97733,2.39733 l -2.05866,10.60267 c -0.25734,1.32133 0.63866,2.396 1.98,2.396 l 6.25733,0 c 1.344,0 3.54,0.116 4.876,0.25333 0,0 9.12533,0.10667 12.08667,3.42134 2.412,2.69866 3.46,6.416 2.39466,11.89733 l -4.768,24.55867 c -0.25466,1.32 -1.56666,2.4 -2.912,2.4 l -7.824,0 c -1.34533,0 -2.23733,-1.08 -1.98,-2.4 l 4.05067,-20.83334 c 0.256,-1.31866 0.544,-3.496 0.64267,-4.84 0,0 0.18,-2.46533 -0.80534,-3.52266 -0.98133,-1.06134 -3.07733,-1.58934 -6.28,-1.58934 l -7.55733,0 c -1.34667,0 -2.65067,1.07734 -2.912,2.39734 l -5.51066,28.388 c -0.25734,1.32 -1.56534,2.4 -2.91067,2.4 l -7.62933,0 c -1.34534,0 -2.23467,-1.08 -1.97867,-2.4 l 10.32533,-53.12934"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path278"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 194.33866,164.31334 c 0.256,-1.31733 1.564,-2.39733 2.908,-2.39733 l 7.628,0 c 1.34667,0 2.236,1.08 1.97733,2.39733 l -2.05866,10.60267 c -0.25734,1.32133 0.63866,2.396 1.98,2.396 l 6.25733,0 c 1.344,0 3.54,0.116 4.876,0.25333 0,0 9.12533,0.10667 12.08667,3.42134 2.412,2.69866 3.46,6.416 2.39466,11.89733 l -4.768,24.55867 c -0.25466,1.32 -1.56666,2.4 -2.912,2.4 l -7.824,0 c -1.34533,0 -2.23733,-1.08 -1.98,-2.4 l 4.05067,-20.83334 c 0.256,-1.31866 0.544,-3.496 0.64267,-4.84 0,0 0.18,-2.46533 -0.80534,-3.52266 -0.98133,-1.06134 -3.07733,-1.58934 -6.28,-1.58934 l -7.55733,0 c -1.34667,0 -2.65067,1.07734 -2.912,2.39734 l -5.51066,28.388 c -0.25734,1.32 -1.56534,2.4 -2.91067,2.4 l -7.62933,0 c -1.34534,0 -2.23467,-1.08 -1.97867,-2.4 z"
                                    style="fill:none;stroke:#ffffff;stroke-width:5.33333302;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                                    id="path280"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 233.03066,232.84401 c -0.25867,1.31733 0.63333,2.39867 1.98,2.39867 l 7.724,0 c 1.34133,0 2.656,-1.08134 2.91067,-2.39867 l 2.05866,-10.60267 c 0.25734,-1.32 1.568,-2.39866 2.90934,-2.39866 l 8.364,0 c 4.76666,0 8.68666,-0.50134 11.77066,-1.50534 3.07334,-0.99866 5.87334,-2.68133 8.39334,-5.04 2.116,-1.94133 3.82266,-4.084 5.13333,-6.432 1.308,-2.34 2.23733,-4.92666 2.788,-7.756 1.33467,-6.864 0.12667,-12.04933 -3.01867,-16.04933 -3.90266,-4.96533 -13.55066,-5.37733 -13.55066,-5.37733 -1.33067,-0.2 -3.51867,-0.37067 -4.86267,-0.37067 l -19.36933,0 c -1.34267,0 -2.65467,1.08267 -2.90934,2.404 z m 30.27067,-46.38933 c 4.79066,0 7.984,0.88666 9.58533,2.656 1.59067,1.76933 1.972,4.80933 1.13733,9.112 -0.87466,4.484 -2.548,7.688 -5.04,9.604 -2.492,1.91466 -8.93466,2.608 -8.93466,2.608 -1.33467,0.14666 -3.528,0.26533 -4.876,0.26533 l -2.784,0 c -1.34667,0 -2.232,-1.08133 -1.97734,-2.4 l 3.776,-19.44267 c 0.25867,-1.32 1.568,-2.40266 2.912,-2.40266 l 6.20134,0"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path282"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 233.03066,232.84401 c -0.25867,1.31733 0.63333,2.39867 1.98,2.39867 l 7.724,0 c 1.34133,0 2.656,-1.08134 2.91067,-2.39867 l 2.05866,-10.60267 c 0.25734,-1.32 1.568,-2.39866 2.90934,-2.39866 l 8.364,0 c 4.76666,0 8.68666,-0.50134 11.77066,-1.50534 3.07334,-0.99866 5.87334,-2.68133 8.39334,-5.04 2.116,-1.94133 3.82266,-4.084 5.13333,-6.432 1.308,-2.34 2.23733,-4.92666 2.788,-7.756 1.33467,-6.864 0.12667,-12.04933 -3.01867,-16.04933 -3.90266,-4.96533 -13.55066,-5.37733 -13.55066,-5.37733 -1.33067,-0.2 -3.51867,-0.37067 -4.86267,-0.37067 l -19.36933,0 c -1.34267,0 -2.65467,1.08267 -2.90934,2.404 z m 30.27067,-46.38933 c 4.79066,0 7.984,0.88666 9.58533,2.656 1.59067,1.76933 1.972,4.80933 1.13733,9.112 -0.87466,4.484 -2.548,7.688 -5.04,9.604 -2.492,1.91466 -8.93466,2.608 -8.93466,2.608 -1.33467,0.14666 -3.528,0.26533 -4.876,0.26533 l -2.784,0 c -1.34667,0 -2.232,-1.08133 -1.97734,-2.4 l 3.776,-19.44267 c 0.25867,-1.32 1.568,-2.40266 2.912,-2.40266 z"
                                    style="fill:none;stroke:#ffffff;stroke-width:5.33333302;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                                    id="path284"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 128.138,232.84401 c -0.25827,1.31733 0.6328,2.39867 1.97706,2.39867 l 7.72494,0 c 1.34666,0 2.65466,-1.08134 2.91466,-2.39867 l 2.05734,-10.60267 c 0.25866,-1.32 1.564,-2.39866 2.912,-2.39866 l 8.36,0 c 4.768,0 8.69066,-0.50134 11.76666,-1.50534 3.08267,-0.99866 5.87734,-2.68133 8.40134,-5.04 2.10933,-1.94133 3.824,-4.084 5.13066,-6.432 1.30667,-2.34 2.24,-4.92666 2.78667,-7.756 1.336,-6.864 0.0213,-11.97066 -3.016,-16.04933 -3.81467,-5.10667 -13.54933,-5.37733 -13.54933,-5.37733 -1.33067,-0.2 -3.51734,-0.37067 -4.86267,-0.37067 l -19.36933,0 c -1.344,0 -2.652,1.08267 -2.912,2.404 z m 30.26733,-46.38933 c 4.796,0 7.98667,0.88666 9.58533,2.656 1.59467,1.76933 1.97734,4.80933 1.144,9.112 -0.876,4.484 -2.556,7.688 -5.044,9.604 -2.488,1.91466 -8.93066,2.608 -8.93066,2.608 -1.34,0.14666 -3.53467,0.26533 -4.87734,0.26533 l -2.78133,0 c -1.344,0 -2.23867,-1.08133 -1.98,-2.4 L 149.3,188.85734 c 0.256,-1.32 1.56666,-2.40266 2.90933,-2.40266 l 6.196,0"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path286"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 194.33866,164.31334 c 0.256,-1.31733 1.564,-2.39733 2.908,-2.39733 l 7.628,0 c 1.34667,0 2.236,1.08 1.97733,2.39733 l -2.05866,10.60267 c -0.25734,1.32133 0.63866,2.396 1.98,2.396 l 6.25733,0 c 1.344,0 3.54,0.116 4.876,0.25333 0,0 9.12533,0.10667 12.08667,3.42134 2.412,2.69866 3.46,6.416 2.39466,11.89733 l -4.768,24.55867 c -0.25466,1.32 -1.56666,2.4 -2.912,2.4 l -7.824,0 c -1.34533,0 -2.23733,-1.08 -1.98,-2.4 l 4.05067,-20.83334 c 0.256,-1.31866 0.544,-3.496 0.64267,-4.84 0,0 0.18,-2.46533 -0.80534,-3.52266 -0.98133,-1.06134 -3.07733,-1.58934 -6.28,-1.58934 l -7.55733,0 c -1.34667,0 -2.65067,1.07734 -2.912,2.39734 l -5.51066,28.388 c -0.25734,1.32 -1.56534,2.4 -2.91067,2.4 l -7.62933,0 c -1.34534,0 -2.23467,-1.08 -1.97867,-2.4 l 10.32533,-53.12934"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path288"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 233.03066,232.84401 c -0.25867,1.31733 0.63333,2.39867 1.98,2.39867 l 7.724,0 c 1.34133,0 2.656,-1.08134 2.91067,-2.39867 l 2.05866,-10.60267 c 0.25734,-1.32 1.568,-2.39866 2.90934,-2.39866 l 8.364,0 c 4.76666,0 8.68666,-0.50134 11.77066,-1.50534 3.07334,-0.99866 5.87334,-2.68133 8.39334,-5.04 2.116,-1.94133 3.82266,-4.084 5.13333,-6.432 1.308,-2.34 2.23733,-4.92666 2.788,-7.756 1.33467,-6.864 0.12667,-12.04933 -3.01867,-16.04933 -3.90266,-4.96533 -13.55066,-5.37733 -13.55066,-5.37733 -1.33067,-0.2 -3.51867,-0.37067 -4.86267,-0.37067 l -19.36933,0 c -1.34267,0 -2.65467,1.08267 -2.90934,2.404 z m 30.27067,-46.38933 c 4.79066,0 7.984,0.88666 9.58533,2.656 1.59067,1.76933 1.972,4.80933 1.13733,9.112 -0.87466,4.484 -2.548,7.688 -5.04,9.604 -2.492,1.91466 -8.93466,2.608 -8.93466,2.608 -1.33467,0.14666 -3.528,0.26533 -4.876,0.26533 l -2.784,0 c -1.34667,0 -2.232,-1.08133 -1.97734,-2.4 l 3.776,-19.44267 c 0.25867,-1.32 1.568,-2.40266 2.912,-2.40266 l 6.20134,0"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path290"></path>
                                 <g transform="matrix(0.13333333,0,0,-0.13333333,0,462.54667)" id="g292">
                                    <g id="g294" clip-path="url(#clipPath298)">
                                       <path inkscape:connector-curvature="0"
                                          d="m 571.879,2500.55 c 0,0 171.527,117.93 279.867,158.35 34.531,12.89 283.674,78.71 324.064,-351.49 22.08,-235.55 -17.68,-398.24 -210.83,-427.71 -115.589,-17.66 -97.691,-103.81 -97.691,-103.81"
                                          style="fill:url(#linearGradient304);fill-opacity:1;fill-rule:nonzero;stroke:none"
                                          id="path306"></path>
                                    </g>
                                 </g>
                                 <path inkscape:connector-curvature="0"
                                    d="m 112.5224,105.43201 c -14.613602,5.45467 -36.998935,20.79067 -37.947469,21.44267 -1.294666,0.89067 -1.597866,2.62933 -0.671866,3.87866 0.922933,1.25067 2.726666,1.54134 4.0224,0.64934 0.2256,-0.15067 22.742795,-15.58 36.676135,-20.78267 0.43586,-0.16 10.69053,-3.872 20.53306,2.02267 10.24667,6.14 16.73467,20.83333 18.772,42.50133 3.244,34.62933 -4.44,50.784 -25.69213,54.03067 -6.02493,0.91733 -10.4104,3.22933 -13.04,6.87866 -3.45267,4.77734 -2.412,10.03467 -2.36307,10.25734 0.31307,1.49466 1.814,2.45866 3.36827,2.172 1.55627,-0.28534 2.5776,-1.74267 2.29213,-3.24534 -0.007,-0.0267 -0.58066,-3.264 1.4792,-6.064 1.7068,-2.31866 4.78907,-3.836 9.16454,-4.50666 31.5964,-4.82134 32.91773,-34.612 30.53773,-60.02534 -2.23867,-23.812 -9.468,-39.53333 -21.47333,-46.72399 -12.05294,-7.22 -24.29774,-2.992 -25.6576,-2.48534"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path308"></path>
                                 <g transform="matrix(0.13333333,0,0,-0.13333333,0,462.54667)" id="g310">
                                    <g id="g312" clip-path="url(#clipPath316)">
                                       <path inkscape:connector-curvature="0"
                                          d="m 747.344,2531.75 c 194.211,121.45 302.026,59.35 302.026,59.35 -84.444,77.21 -179.436,51.62 -200.444,43.74 -107.969,-40.42 -316.485,-189.8 -316.485,-189.8 0,0 -28.195,-50.01 27.989,-39.16 0,0 122.211,85.38 186.914,125.87"
                                          style="fill:url(#linearGradient322);fill-opacity:1;fill-rule:nonzero;stroke:none"
                                          id="path324"></path>
                                    </g>
                                 </g>
                                 <path inkscape:connector-curvature="0"
                                    d="m 90.301598,201.39468 c -0.225067,13.14666 -4.5776,25.11866 -11.366667,31.22533 -3.080266,2.77467 -6.516133,4.148 -9.945333,3.98 -1.057866,-0.0573 -1.959333,0.728 -2.020266,1.75067 -0.05053,1.02666 0.762933,1.896 1.8244,1.94933 4.492666,0.22667 8.904666,-1.49067 12.766666,-4.96667 7.524533,-6.77333 12.3464,-19.75466 12.586,-33.884 0.0208,-1.01866 -0.824,-1.86533 -1.8876,-1.88133 -1.063467,-0.0147 -1.938,0.80267 -1.9572,1.82667"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path326"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 98.631198,192.00668 c -1.4484,3.32133 -3.9796,5.43733 -6.950534,5.79066 -2.896266,0.34134 -5.839066,-1.01333 -7.874399,-3.628 -0.633867,-0.81733 -1.843734,-0.98533 -2.692267,-0.36933 -0.8484,0.61333 -1.021867,1.776 -0.3828,2.59333 2.8724,3.69467 7.143733,5.59467 11.421466,5.088 4.376534,-0.528 8.026536,-3.45733 10.025996,-8.04 0.40987,-0.94533 -0.0541,-2.024 -1.0292,-2.42533 -0.9812,-0.396 -2.103596,0.048 -2.518262,0.99067"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path328"></path>
                              </g>
                           </svg>
                        </span>
                        <span class="image-portfolio__skill--text">PHP</span>
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
                                 <img src="{{asset('img/home/colorit/colorit_lang_1.jpg')}}" alt="@lang('portfolio.colorit.lang')">
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
                                 <img src="{{asset('img/home/colorit/colorit_run.jpg')}}" alt="@lang('portfolio.colorit.ticker')">
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
                                 <img src="{{asset('img/home/colorit/colorit_messenger.jpg')}}" alt="@lang('portfolio.colorit.messenger')">
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
                                 <img src="{{asset('img/home/colorit/colorit_portfolio.jpg')}}" alt="@lang('portfolio.colorit.loading')">
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
               <a href="https://colorit.agency/" target="_blank" class="portfolio__title-link">furino</a>
            </div>
            <div class="portfolio__image image-portfolio">
               <img src="{{asset('/img/home/furino/furino_1_1528x815.jpg')}}" alt="@lang('portfolio.furino.title')">
               <img src="{{asset('/img/home/furino/furino_2_1528x815.jpg')}}" alt="@lang('portfolio.furino.title')">
               <div class="image-portfolio__body">
                  <div class="image-portfolio__development">
                     <div class="image-portfolio__development--body">
                        <span class="image-portfolio__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" width="175px" height="387px" viewBox="0 0 175 387" version="1.1">
                           <!-- Generator: Sketch 3.0.3 (7891) - http://www.bohemiancoding.com/sketch -->
                           <title>gulp</title>
                           <desc>Created with Sketch.</desc>
                           <defs></defs>
                           <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                              <g id="gulp" sketch:type="MSArtboardGroup" fill="#DA4648">
                                 <g id="Gulp-Logo" sketch:type="MSLayerGroup" transform="translate(0.000000, 1.000000)">
                                    <path d="M86.72,303.739 C64.146,303.739 46.703,300.348 38.315,298.327 C32.579,296.945 27.973,295.515 24.474,294.046 L35.661,313.159 L40.037,372.878 C40.037,379.573 61.305,385 87.54,385 C113.775,385 135.043,379.573 135.043,372.878 L138.508,312.509 L149.093,293.99 C145.579,295.479 140.932,296.928 135.124,298.327 C126.736,300.348 109.293,303.739 86.72,303.739 Z M149.456,109.411 C132.888,111.725 110.899,113 87.54,113 C64.181,113 42.192,111.725 25.624,109.411 C17.417,108.265 10.924,106.913 6.325,105.395 C5.228,105.032 3.369,104.413 1.58,103.427 L11.845,197.9 C12.322,196.273 12.853,194.648 13.442,193.029 C14.647,189.711 16.041,186.467 17.623,183.298 C19.206,180.13 20.929,177.135 22.792,174.314 C24.654,171.494 26.637,168.897 28.738,166.524 C30.84,164.152 32.996,162.112 35.21,160.402 C37.423,158.694 39.657,157.358 41.912,156.396 C44.168,155.434 46.402,154.952 48.615,154.952 C51.164,154.952 53.63,155.649 56.012,157.043 C58.393,158.436 60.619,160.693 62.693,163.812 C63.169,164.509 63.471,165.214 63.596,165.927 C63.723,166.641 63.785,167.313 63.785,167.943 C63.785,169.436 63.428,170.615 62.714,171.477 C62,172.34 61.152,172.771 60.172,172.771 C59.274,172.771 58.441,172.298 57.671,171.353 C56.9,170.407 56.039,169.055 55.086,167.296 C54.189,165.703 53.202,164.551 52.124,163.837 C51.045,163.124 49.876,162.767 48.615,162.767 C46.654,162.767 44.56,163.58 42.333,165.206 C40.105,166.831 37.899,168.98 35.715,171.651 C33.529,174.323 31.435,177.375 29.432,180.81 C27.429,184.244 25.656,187.761 24.115,191.361 C22.574,194.963 21.35,198.514 20.439,202.014 C19.528,205.514 19.073,208.658 19.073,211.445 C19.073,212.375 19.137,213.33 19.262,214.307 C19.389,215.287 19.626,216.174 19.977,216.971 C20.326,217.768 20.803,218.422 21.405,218.935 C22.008,219.451 22.771,219.707 23.695,219.707 C24.732,219.707 25.908,219.359 27.226,218.662 C28.542,217.967 29.908,217.053 31.322,215.926 C32.737,214.797 34.159,213.52 35.588,212.092 C37.018,210.666 38.348,209.223 39.58,207.762 C40.812,206.303 41.905,204.9 42.857,203.557 C43.81,202.213 44.524,201.043 45.001,200.047 L48.909,188.35 C49.385,187.09 50.008,186.194 50.779,185.663 C51.549,185.132 52.341,184.866 53.154,184.866 C53.545,184.866 53.937,184.933 54.33,185.065 C54.723,185.198 55.072,185.406 55.381,185.687 C55.689,185.97 55.934,186.334 56.116,186.783 C56.298,187.23 56.389,187.753 56.389,188.35 C56.389,189.943 56.249,191.435 55.969,192.83 C55.689,194.225 55.332,195.584 54.897,196.912 C54.463,198.238 53.979,199.574 53.447,200.918 C52.915,202.262 52.396,203.664 51.893,205.125 C51.781,205.291 51.578,205.812 51.283,206.691 C50.989,207.572 50.633,208.676 50.212,210.002 C49.792,211.33 49.336,212.814 48.846,214.457 C48.355,216.1 47.852,217.775 47.334,219.484 C46.815,221.193 46.318,222.869 45.842,224.512 C45.365,226.154 44.937,227.639 44.56,228.967 C44.182,230.293 43.867,231.404 43.614,232.301 C43.362,233.197 43.208,233.727 43.152,233.895 C43.012,234.424 42.787,235.014 42.48,235.66 C42.172,236.307 41.808,236.922 41.387,237.502 C40.967,238.082 40.505,238.565 40,238.945 C39.496,239.326 38.978,239.518 38.445,239.518 C37.549,239.518 36.897,239.219 36.492,238.623 C36.085,238.025 35.883,236.93 35.883,235.338 L35.883,234.641 C35.883,234.408 35.896,234.158 35.924,233.895 C35.951,233.363 36.162,232.367 36.555,230.906 C36.947,229.447 37.416,227.797 37.963,225.955 C38.509,224.113 39.098,222.205 39.728,220.23 C40.357,218.256 40.925,216.49 41.43,214.93 C39.943,216.59 38.334,218.24 36.597,219.883 C34.859,221.525 33.08,223.002 31.26,224.312 C29.438,225.623 27.603,226.693 25.755,227.523 C23.906,228.352 22.127,228.768 20.418,228.768 C18.457,228.768 16.769,228.336 15.353,227.473 C15.098,227.316 14.857,227.141 14.617,226.967 L20.329,286.855 C21.816,290.582 49.81,299.739 86.72,299.739 C123.647,299.739 151.652,290.573 153.113,286.849 L161.318,215.647 C160.639,216.27 159.978,216.879 159.346,217.469 C156.992,219.658 154.771,221.541 152.684,223.117 C150.598,224.693 148.559,225.914 146.57,226.775 C144.58,227.639 142.451,228.07 140.182,228.07 C138.053,228.07 136.406,227.605 135.244,226.676 C134.082,225.748 133.5,224.471 133.5,222.844 L133.5,222.471 C133.5,222.355 133.514,222.213 133.543,222.047 C133.654,221.053 134.09,219.906 134.846,218.613 C135.602,217.318 136.512,215.975 137.576,214.582 C138.641,213.188 139.775,211.777 140.98,210.35 C142.185,208.924 143.299,207.572 144.322,206.293 C145.344,205.018 146.191,203.848 146.863,202.785 C147.537,201.723 147.873,200.861 147.873,200.197 C147.873,199.799 147.732,199.484 147.453,199.25 C147.172,199.02 146.709,198.902 146.066,198.902 C144.945,198.902 143.789,199.193 142.6,199.773 C141.408,200.353 140.23,201.135 139.068,202.113 C137.906,203.092 136.771,204.213 135.664,205.473 C134.559,206.734 133.522,208.045 132.555,209.404 C131.588,210.766 130.707,212.135 129.908,213.512 C129.109,214.889 128.43,216.158 127.869,217.318 C127.701,217.684 127.463,218.199 127.154,218.861 C126.846,219.525 126.51,220.273 126.146,221.102 C125.781,221.932 125.396,222.787 124.99,223.664 C124.584,224.545 124.213,225.375 123.877,226.154 C123.541,226.934 123.24,227.629 122.975,228.244 C122.707,228.857 122.518,229.281 122.406,229.514 C122.266,229.812 122.035,230.375 121.713,231.205 C121.391,232.035 121.019,233.006 120.6,234.117 C120.18,235.228 119.738,236.398 119.275,237.627 C118.815,238.853 118.379,240.016 117.973,241.111 C117.566,242.205 117.209,243.168 116.902,243.998 C116.594,244.826 116.396,245.391 116.312,245.69 C116.033,246.553 115.703,247.364 115.326,248.13 C114.947,248.892 114.514,249.564 114.023,250.146 C113.533,250.726 112.973,251.19 112.342,251.538 C111.711,251.888 111.004,252.061 110.221,252.061 C109.211,252.061 108.379,251.819 107.719,251.339 C107.062,250.858 106.732,249.936 106.732,248.577 C106.732,247.913 106.816,247.233 106.984,246.537 C107.152,245.84 107.363,245.15 107.615,244.471 C107.867,243.789 108.127,243.127 108.393,242.48 C108.658,241.832 108.904,241.211 109.127,240.613 C110.641,237.295 112.182,233.969 113.75,230.633 C115.318,227.299 116.824,223.998 118.268,220.729 C118.568,220.047 118.844,219.379 119.137,218.701 C119.049,218.787 118.963,218.877 118.877,218.961 C117.055,220.721 115.242,222.271 113.435,223.615 C111.627,224.959 109.834,226.029 108.057,226.826 C106.277,227.621 104.547,228.02 102.865,228.02 C101.717,228.02 100.758,227.838 99.988,227.473 C99.217,227.107 98.602,226.609 98.139,225.98 C97.676,225.35 97.346,224.603 97.15,223.74 C97.084,223.445 97.043,223.137 97,222.83 C96.508,223.213 96.012,223.586 95.512,223.94 C93.775,225.166 92.066,226.154 90.385,226.9 C88.705,227.647 87.191,228.02 85.848,228.02 C84.502,228.02 83.41,227.572 82.568,226.676 C81.728,225.781 81.309,224.254 81.309,222.098 C81.309,220.57 81.533,218.795 81.98,216.772 C81.252,218.066 80.342,219.377 79.25,220.703 C78.156,222.031 76.91,223.242 75.51,224.338 C74.107,225.432 72.539,226.32 70.803,227 C69.065,227.68 67.174,228.02 65.13,228.02 C64.205,228.02 63.316,227.904 62.461,227.672 C61.606,227.439 60.857,227.041 60.213,226.477 C59.568,225.914 59.051,225.158 58.658,224.213 C58.266,223.268 58.07,222.08 58.07,220.654 C58.07,220.621 58.126,220.115 58.238,219.135 C58.35,218.156 58.707,216.613 59.31,214.506 C59.912,212.4 60.844,209.67 62.103,206.318 C63.365,202.967 65.144,198.902 67.441,194.125 C68.029,192.863 68.709,191.959 69.478,191.412 C70.25,190.864 71.082,190.59 71.978,190.59 C72.371,190.59 72.777,190.649 73.197,190.764 C73.619,190.881 74.01,191.063 74.375,191.312 C74.738,191.561 75.033,191.877 75.258,192.258 C75.48,192.639 75.594,193.078 75.594,193.576 C75.594,193.908 75.551,194.225 75.467,194.521 C75.326,195.088 75.025,195.824 74.565,196.736 C74.102,197.65 73.562,198.695 72.945,199.873 C72.33,201.051 71.678,202.32 70.992,203.682 C70.305,205.041 69.668,206.451 69.08,207.912 C68.492,209.373 67.987,210.857 67.567,212.367 C67.147,213.877 66.908,215.346 66.853,216.772 C66.853,217.369 66.992,217.916 67.273,218.414 C67.553,218.912 68.016,219.16 68.66,219.16 C70.48,219.16 72.217,218.562 73.871,217.369 C75.523,216.174 77.049,214.689 78.451,212.914 C79.852,211.139 81.119,209.23 82.254,207.189 C83.389,205.148 84.334,203.283 85.09,201.59 C85.623,200.463 86.092,199.25 86.498,197.957 C86.904,196.662 87.346,195.469 87.822,194.373 C88.299,193.277 88.844,192.365 89.461,191.635 C90.076,190.906 90.848,190.54 91.771,190.54 C92.781,190.54 93.578,190.922 94.168,191.685 C94.756,192.449 95.049,193.361 95.049,194.422 C95.049,195.019 94.861,195.842 94.482,196.887 C94.103,197.932 93.627,199.127 93.053,200.471 C92.478,201.815 91.855,203.25 91.184,204.775 C90.512,206.303 89.887,207.853 89.315,209.43 C88.738,211.006 88.264,212.549 87.885,214.059 C87.506,215.568 87.318,216.971 87.318,218.264 C87.318,219.459 87.934,220.057 89.166,220.057 C90.035,220.057 91.113,219.758 92.402,219.16 C93.691,218.562 95.043,217.725 96.457,216.646 C96.81,216.377 97.166,216.096 97.519,215.801 C97.914,214.172 98.377,212.666 98.916,211.297 C99.896,208.707 100.891,206.137 101.9,203.582 C102.908,201.027 103.832,198.687 104.674,196.563 L117.406,164.459 C117.91,163.165 118.59,162.252 119.443,161.721 C120.299,161.191 121.16,160.925 122.029,160.925 C122.896,160.925 123.687,161.207 124.402,161.771 C125.117,162.336 125.475,163.248 125.475,164.509 C125.475,165.106 125.355,165.737 125.117,166.4 C124.879,167.064 124.578,167.777 124.213,168.54 C123.514,170.101 122.68,172.008 121.713,174.264 C120.746,176.521 119.709,178.977 118.603,181.631 C117.496,184.286 116.361,187.048 115.199,189.918 C114.037,192.789 112.902,195.584 111.795,198.305 C110.69,201.027 109.652,203.605 108.685,206.045 C107.719,208.484 106.887,210.6 106.185,212.391 C105.877,213.154 105.576,214.043 105.283,215.055 C104.988,216.066 104.842,216.971 104.842,217.768 C104.842,218.264 104.926,218.662 105.094,218.961 C105.262,219.26 105.584,219.41 106.06,219.41 C106.648,219.41 107.383,219.203 108.266,218.787 C109.148,218.373 110.1,217.824 111.123,217.144 C112.147,216.465 113.211,215.685 114.316,214.805 C115.424,213.926 116.523,213.014 117.615,212.068 C118.709,211.121 119.752,210.176 120.746,209.23 C121.74,208.285 122.631,207.414 123.416,206.617 C123.6,206.426 123.82,206.291 124.062,206.19 C124.535,204.777 124.967,203.393 125.348,202.039 C125.572,201.441 125.881,200.596 126.273,199.5 C126.664,198.404 127.113,197.326 127.617,196.264 C128.121,195.203 128.69,194.281 129.318,193.502 C129.949,192.723 130.629,192.332 131.357,192.332 C132.478,192.332 133.291,192.59 133.795,193.103 C134.299,193.619 134.551,194.373 134.551,195.369 C134.551,195.568 134.523,195.883 134.467,196.314 C134.41,196.746 134.342,197.203 134.258,197.684 C134.174,198.164 134.082,198.621 133.984,199.053 C133.885,199.484 133.795,199.799 133.711,199.998 C134.746,198.869 135.867,197.75 137.072,196.639 C138.277,195.527 139.523,194.521 140.812,193.627 C142.102,192.73 143.418,192.002 144.764,191.435 C146.107,190.873 147.453,190.59 148.797,190.59 C149.721,190.59 150.639,190.723 151.549,190.989 C152.459,191.254 153.273,191.644 153.986,192.158 C154.701,192.674 155.283,193.32 155.73,194.1 C156.178,194.879 156.402,195.783 156.402,196.812 C156.402,198.174 156.06,199.625 155.373,201.168 C154.687,202.711 153.826,204.262 152.789,205.82 C151.752,207.381 150.631,208.898 149.428,210.375 C148.223,211.852 147.096,213.195 146.045,214.406 C144.994,215.619 144.111,216.646 143.396,217.492 C142.684,218.34 142.31,218.912 142.283,219.211 C142.283,219.609 142.41,219.932 142.662,220.182 C142.914,220.43 143.334,220.555 143.922,220.555 C144.398,220.555 145.1,220.289 146.023,219.758 C146.947,219.227 148.244,218.307 149.91,216.996 C151.576,215.685 153.693,213.926 156.256,211.719 C158.014,210.207 160.072,208.404 162.391,206.353 L173.505,103.424 C171.715,104.412 169.853,105.032 168.755,105.395 C164.157,106.913 157.664,108.265 149.456,109.411 Z M87.474,84.99 C39.425498,84.99 0.474,90.3623808 0.474,96.99 C0.474,103.617619 39.425498,108.99 87.474,108.99 C135.522502,108.99 174.474,103.617619 174.474,96.99 C174.474,90.3623808 135.522502,84.99 87.474,84.99 Z M122.212,100.497 C122.212,102.052 117.583,103.313 111.872,103.313 C106.162,103.313 101.533,102.052 101.533,100.497 C101.533,98.941 106.162,97.68 111.872,97.68 C117.583,97.68 122.212,98.941 122.212,100.497 Z" id="Cup" sketch:type="MSShapeGroup"></path>
                                    <path d="M103.626755,99.2519937 C103.575489,99.3337287 103.549,99.4171891 103.549,99.502 C103.549,100.509 107.276,101.324 111.872,101.324 C116.469,101.324 120.195,100.509 120.195,99.502 L131.066,55.424 L174.299046,9.77923896 C174.313162,9.76531306 174.326816,9.75090155 174.34,9.736 C175.255,8.701 173.398,5.498 170.317,2.751 C167.236,0.004 163.909,-0.926 162.875,0.12 C162.867271,0.127822825 162.859733,0.13575616 162.852383,0.143799116 L116.725,48.682 L103.626755,99.2519937 Z" id="Straw" sketch:type="MSShapeGroup"></path>
                                 </g>
                              </g>
                           </g>
                        </svg>
                        </span>
                        <span>@lang('portfolio.gulp')</span>
                     </div>
                     <div class="image-portfolio__bacground"></div>
                  </div>
                  <div class="image-portfolio__skills">
                     <div class="image-portfolio__skill">
                        <span class="image-portfolio__icon">
                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              viewBox="0 0 59 66" fill="#fff" fill-rule="evenodd" stroke="#000" stroke-linecap="round"
                              stroke-linejoin="round">
                              <use xlink:href="#A" x="1" y="1"></use>
                              <symbol id="A" overflow="visible">
                                 <g stroke="none" fill-rule="nonzero">
                                    <path d="M5.136 57.602L0 0h56.432l-5.14 57.594-23.112 6.404z" fill="#e44d26"></path>
                                    <path d="M46.89 53.926L51.284 4.71H28.216v54.394z" fill="#f16529"></path>
                                    <path
                                       d="M28.192 11.774H10.5l1.906 21.364h15.81v-7.064h-9.348l-.646-7.234h9.994v-7.066zm.024 32.624l-.03.008-7.868-2.124-.5-5.634h-7.096l.99 11.092 14.472 4 .032-.01z"
                                       fill="#ebebeb"></path>
                                    <path
                                       d="M28.192 33.138h8.7l-.8 9.16-7.88 2.126v7.35l14.484-4.014 1.94-21.69h-16.42zM45.72 13.67l.168-1.896h-17.7v7.064h17.064l.14-1.588z">
                                    </path>
                                 </g>
                              </symbol>
                           </svg>
                        </span>
                        <span class="image-portfolio__skill--text">HTML</span>
                     </div>
                     <div class="image-portfolio__skill">
                        <span class="image-portfolio__icon">
                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                              id="Layer_1" x="0px" y="0px" viewBox="0 0 547.8 410.6"
                              enable-background="new 0 0 547.8 410.6" xml:space="preserve">
                              <path fill="#CD6799"
                                 d="M471.4,236c-19.1,0.1-35.7,4.7-49.6,11.5c-5.1-10.1-10.2-19.1-11.1-25.7c-1-7.7-2.2-12.4-1-21.6  c1.2-9.2,6.6-22.3,6.5-23.3s-1.2-5.7-12.2-5.8c-11-0.1-20.5,2.1-21.6,5c-1.1,2.9-3.2,9.5-4.6,16.3c-1.9,10-22,45.7-33.5,64.4  c-3.7-7.3-6.9-13.7-7.6-18.8c-1-7.7-2.2-12.4-1-21.6c1.2-9.2,6.6-22.3,6.5-23.3c-0.1-1-1.2-5.7-12.2-5.8c-11-0.1-20.5,2.1-21.6,5  c-1.1,2.9-2.3,9.7-4.6,16.3c-2.3,6.6-29,66.2-36,81.6c-3.6,7.9-6.7,14.2-8.9,18.5c0,0,0,0,0,0s-0.1,0.3-0.4,0.8  c-1.9,3.7-3,5.7-3,5.7s0,0,0,0.1c-1.5,2.7-3.1,5.2-3.9,5.2c-0.6,0-1.7-7.2,0.2-17c4-20.7,13.5-52.9,13.4-54c0-0.6,1.8-6.2-6.2-9.1  c-7.8-2.9-10.6,1.9-11.3,1.9c-0.7,0-1.2,1.7-1.2,1.7s8.7-36.2-16.6-36.2c-15.8,0-37.6,17.3-48.4,32.9c-6.8,3.7-21.3,11.6-36.8,20.1  c-5.9,3.3-12,6.6-17.7,9.7c-0.4-0.4-0.8-0.9-1.2-1.3c-30.6-32.7-87.2-55.8-84.8-99.7c0.9-16,6.4-58,108.7-109  C233.9,19,300.9,30.5,312.5,56c16.6,36.4-35.9,104-122.9,113.8c-33.2,3.7-50.6-9.1-55-13.9c-4.6-5-5.3-5.3-7-4.3c-2.8,1.5-1,6,0,8.6  c2.6,6.8,13.3,18.8,31.4,24.7c16,5.2,54.9,8.1,102-10.1c52.7-20.4,93.9-77.1,81.8-124.6C330.7,2,250.7-13.9,175,13  C130,29,81.2,54.2,46.1,87c-41.7,39-48.3,72.9-45.6,87.1c9.7,50.4,79.2,83.2,107,107.5c-1.4,0.8-2.7,1.5-3.8,2.1  c-13.9,6.9-66.9,34.6-80.1,63.9c-15,33.2,2.4,57,13.9,60.2c35.7,9.9,72.4-7.9,92.1-37.3c19.7-29.4,17.3-67.6,8.2-85.1  c-0.1-0.2-0.2-0.4-0.4-0.6c3.6-2.1,7.3-4.3,10.9-6.4c7.1-4.2,14.1-8.1,20.1-11.3c-3.4,9.3-5.9,20.4-7.1,36.4  c-1.5,18.8,6.2,43.2,16.3,52.8c4.5,4.2,9.8,4.3,13.2,4.3c11.8,0,17.1-9.8,23-21.4c7.2-14.2,13.7-30.7,13.7-30.7s-8.1,44.6,13.9,44.6  c8,0,16.1-10.4,19.7-15.7c0,0.1,0,0.1,0,0.1s0.2-0.3,0.6-1c0.8-1.3,1.3-2.1,1.3-2.1s0-0.1,0-0.2c3.2-5.6,10.4-18.3,21.1-39.4  c13.8-27.2,27.1-61.2,27.1-61.2s1.2,8.3,5.3,22.1c2.4,8.1,7.4,17,11.4,25.6c-3.2,4.5-5.2,7-5.2,7s0,0,0.1,0.1  c-2.6,3.4-5.4,7.1-8.5,10.7c-10.9,13-23.9,27.9-25.7,32.2c-2.1,5.1-1.6,8.8,2.4,11.8c2.9,2.2,8.1,2.5,13.4,2.2  c9.8-0.7,16.7-3.1,20.1-4.6c5.3-1.9,11.5-4.8,17.3-9.1c10.7-7.9,17.2-19.2,16.6-34.1c-0.3-8.2-3-16.4-6.3-24.1  c1-1.4,1.9-2.8,2.9-4.2c16.9-24.7,30-51.8,30-51.8s1.2,8.3,5.3,22.1c2,7,6.1,14.6,9.7,22c-15.9,12.9-25.7,27.9-29.2,37.7  c-6.3,18.2-1.4,26.4,7.9,28.3c4.2,0.9,10.2-1.1,14.6-3c5.6-1.8,12.2-4.9,18.5-9.5c10.7-7.9,21-18.9,20.4-33.8  c-0.3-6.8-2.1-13.5-4.6-20c13.5-5.6,30.9-8.7,53.1-6.1c47.6,5.6,57,35.3,55.2,47.8c-1.8,12.5-11.8,19.3-15.1,21.4  c-3.3,2.1-4.4,2.8-4.1,4.3c0.4,2.2,2,2.1,4.8,1.7c3.9-0.7,25-10.1,25.9-33.1C548.9,267.8,520.9,235.7,471.4,236z M104.2,359.8  C88.4,377,66.4,383.5,56.9,378c-10.2-5.9-6.2-31.3,13.2-49.5c11.8-11.1,27-21.4,37.1-27.7c2.3-1.4,5.7-3.4,9.8-5.9  c0.7-0.4,1.1-0.6,1.1-0.6l0,0c0.8-0.5,1.6-1,2.4-1.5C127.6,318.8,120.8,341.7,104.2,359.8z M219.2,281.6c-5.5,13.4-17,47.7-24,45.8  c-6-1.6-9.7-27.6-1.2-53.3c4.3-12.9,13.4-28.3,18.7-34.3c8.6-9.6,18.1-12.8,20.4-8.9C236,236,222.6,273.2,219.2,281.6z M314.1,327  c-2.3,1.2-4.5,2-5.5,1.4c-0.7-0.4,1-2,1-2s11.9-12.8,16.6-18.6c2.7-3.4,5.9-7.4,9.3-11.9c0,0.4,0,0.9,0,1.3  C335.5,312.5,320.7,322.8,314.1,327z M387.3,310.3c-1.7-1.2-1.4-5.2,4.3-17.7c2.2-4.9,7.4-13.1,16.3-21c1,3.2,1.7,6.3,1.6,9.2  C409.4,300.1,395.6,307.3,387.3,310.3z">
                              </path>
                              <g>
                              </g>
                              <g>
                              </g>
                              <g>
                              </g>
                              <g>
                              </g>
                              <g>
                              </g>
                              <g>
                              </g>
                           </svg>
                        </span>
                        <span class="image-portfolio__skill--text">SCSS</span>
                     </div>
                     <div class="image-portfolio__skill">
                        <span class="image-portfolio__icon">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 630 630">
                              <rect width="630" height="630" fill="#f7df1e"></rect>
                              <path
                                 d="m423.2 492.19c12.69 20.72 29.2 35.95 58.4 35.95 24.53 0 40.2-12.26 40.2-29.2 0-20.3-16.1-27.49-43.1-39.3l-14.8-6.35c-42.72-18.2-71.1-41-71.1-89.2 0-44.4 33.83-78.2 86.7-78.2 37.64 0 64.7 13.1 84.2 47.4l-46.1 29.6c-10.15-18.2-21.1-25.37-38.1-25.37-17.34 0-28.33 11-28.33 25.37 0 17.76 11 24.95 36.4 35.95l14.8 6.34c50.3 21.57 78.7 43.56 78.7 93 0 53.3-41.87 82.5-98.1 82.5-54.98 0-90.5-26.2-107.88-60.54zm-209.13 5.13c9.3 16.5 17.76 30.45 38.1 30.45 19.45 0 31.72-7.61 31.72-37.2v-201.3h59.2v202.1c0 61.3-35.94 89.2-88.4 89.2-47.4 0-74.85-24.53-88.81-54.075z">
                              </path>
                           </svg>
                        </span>
                        <span class="image-portfolio__skill--text">JS</span>
                     </div>
                     <div class="image-portfolio__skill">
                        <span class="image-portfolio__icon">
                           <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#"
                              xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                              xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg"
                              xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                              xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" viewBox="0 0 350 240"
                              height="240" width="350" xml:space="preserve" id="svg2" version="1.1"
                              inkscape:version="0.91 r13725" sodipodi:docname="elephpant2.svg">
                              <sodipodi:namedview pagecolor="#ffffff" bordercolor="#666666" borderopacity="1"
                                 objecttolerance="10" gridtolerance="10" guidetolerance="10" inkscape:pageopacity="0"
                                 inkscape:pageshadow="2" inkscape:window-width="2560" inkscape:window-height="1017"
                                 id="namedview194" showgrid="false" inkscape:zoom="2.0408752" inkscape:cx="215.60601"
                                 inkscape:cy="130.47839" inkscape:window-x="-8" inkscape:window-y="-8"
                                 inkscape:window-maximized="1" inkscape:current-layer="svg2"></sodipodi:namedview>
                              <metadata id="metadata8">
                                 <rdf:rdf>
                                    <cc:work rdf:about="">
                                       <dc:format>image/svg+xml</dc:format>
                                       <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"></dc:type>
                                       <dc:title></dc:title>
                                    </cc:work>
                                 </rdf:rdf>
                              </metadata>
                              <defs id="defs6">
                                 <clipPath id="clipPath20" clipPathUnits="userSpaceOnUse">
                                    <path id="path18"
                                       d="m 366.672,2445.95 c 0,0 127.719,141.37 216.176,199.96 28.183,18.65 237.797,128.95 372.402,-250.67 73.64,-207.85 74.87,-362.68 -92.516,-428.71 -100.234,-39.55 -64.41,-113.59 -64.41,-113.59"
                                       inkscape:connector-curvature="0"></path>
                                 </clipPath>
                                 <linearGradient id="linearGradient26" spreadMethod="pad"
                                    gradientTransform="matrix(870.829,-648.982,-648.982,-870.829,1062.31,2048.82)"
                                    gradientUnits="userSpaceOnUse" y2="0" x2="1" y1="0" x1="0">
                                    <stop id="stop22" offset="0" style="stop-opacity:1;stop-color:#8c9bd6"></stop>
                                    <stop id="stop24" offset="1" style="stop-opacity:1;stop-color:#505e9b"></stop>
                                 </linearGradient>
                                 <clipPath id="clipPath38" clipPathUnits="userSpaceOnUse">
                                    <path id="path36"
                                       d="m 2084.18,2364.09 268.24,0 c 22.51,0 40.74,-14.93 40.74,-33.29 l 0,0 c 0,-18.37 -18.23,-33.27 -40.74,-33.27 l -210.54,0 z"
                                       inkscape:connector-curvature="0"></path>
                                 </clipPath>
                                 <linearGradient id="linearGradient44" spreadMethod="pad"
                                    gradientTransform="matrix(878.069,-654.378,-654.378,-878.069,1631.85,2795.24)"
                                    gradientUnits="userSpaceOnUse" y2="0" x2="1" y1="0" x1="0">
                                    <stop id="stop40" offset="0" style="stop-opacity:1;stop-color:#808fd0"></stop>
                                    <stop id="stop42" offset="1" style="stop-opacity:1;stop-color:#505e9b"></stop>
                                 </linearGradient>
                                 <clipPath id="clipPath68" clipPathUnits="userSpaceOnUse">
                                    <path id="path66"
                                       d="m 1150.12,1702.08 0,-535.82 c 0,-132.12 -131.1,-179.471 -292.784,-179.471 l 0,0 c -161.711,0 -292.746,47.351 -292.746,179.471 l 0,542.14"
                                       inkscape:connector-curvature="0"></path>
                                 </clipPath>
                                 <linearGradient id="linearGradient74" spreadMethod="pad"
                                    gradientTransform="matrix(867.01,-646.136,-646.136,-867.01,668.276,1535.96)"
                                    gradientUnits="userSpaceOnUse" y2="0" x2="1" y1="0" x1="0">
                                    <stop id="stop70" offset="0" style="stop-opacity:1;stop-color:#8c9bd6"></stop>
                                    <stop id="stop72" offset="1" style="stop-opacity:1;stop-color:#505e9b"></stop>
                                 </linearGradient>
                                 <clipPath id="clipPath98" clipPathUnits="userSpaceOnUse">
                                    <path id="path96"
                                       d="m 2045.81,1695.54 0,-535.81 c 0,-132.14 -131.09,-179.468 -292.78,-179.468 l 0,0 c -161.7,0 -292.79,47.328 -292.79,179.468 l 0,542.13"
                                       inkscape:connector-curvature="0"></path>
                                 </clipPath>
                                 <linearGradient id="linearGradient104" spreadMethod="pad"
                                    gradientTransform="matrix(867.001,-646.13,-646.13,-867.001,994.502,1953.79)"
                                    gradientUnits="userSpaceOnUse" y2="0" x2="1" y1="0" x1="0">
                                    <stop id="stop100" offset="0" style="stop-opacity:1;stop-color:#8c9bd6"></stop>
                                    <stop id="stop102" offset="1" style="stop-opacity:1;stop-color:#505e9b"></stop>
                                 </linearGradient>
                                 <clipPath id="clipPath128" clipPathUnits="userSpaceOnUse">
                                    <path id="path126"
                                       d="m 903.801,2433.88 c 114.029,-185.4 101.879,-342.02 -50.055,-424.12 -90.965,-49.18 -40.887,-114.04 -40.887,-114.04"
                                       inkscape:connector-curvature="0"></path>
                                 </clipPath>
                                 <linearGradient id="linearGradient134" spreadMethod="pad"
                                    gradientTransform="matrix(841.599,-627.199,-627.199,-841.599,1039.39,2029.86)"
                                    gradientUnits="userSpaceOnUse" y2="0" x2="1" y1="0" x1="0">
                                    <stop id="stop130" offset="0" style="stop-opacity:1;stop-color:#808fd0"></stop>
                                    <stop id="stop132" offset="1" style="stop-opacity:1;stop-color:#505e9b"></stop>
                                 </linearGradient>
                                 <clipPath id="clipPath146" clipPathUnits="userSpaceOnUse">
                                    <path id="path144"
                                       d="m 1569.91,2565.32 c 0,0 -189.32,2.23 -881.043,-20.69 C -2.81641,2521.72 22.7109,2273.69 21.6367,1917.49 l 0,-856.76 c 0,-72.468 62.793,-101.699 140.2733,-101.699 77.469,0 140.356,29.231 140.356,101.699 0,0 17.863,244.81 33.285,393.73 34.5,541.01 687.579,-88.96 1162.329,-59.56 431.41,26.74 771.15,175.65 771.15,529.54 0,353.97 -222.65,640.88 -699.12,640.88 z"
                                       inkscape:connector-curvature="0"></path>
                                 </clipPath>
                                 <linearGradient id="linearGradient152" spreadMethod="pad"
                                    gradientTransform="matrix(875.231,-652.263,-652.263,-875.231,894.629,1822.24)"
                                    gradientUnits="userSpaceOnUse" y2="0" x2="1" y1="0" x1="0">
                                    <stop id="stop148" offset="0" style="stop-opacity:1;stop-color:#8c9bd6"></stop>
                                    <stop id="stop150" offset="1" style="stop-opacity:1;stop-color:#505e9b"></stop>
                                 </linearGradient>
                                 <clipPath id="clipPath164" clipPathUnits="userSpaceOnUse">
                                    <path id="path162"
                                       d="m 40.5078,1894 c 0.7383,-80.46 -10.5781,-783.24 33.8086,-825.44 -13.9453,31.12 16.5625,711.97 16.1719,754.76 l -0.4102,25.04 c 0,11.92 0,23.67 0,35.37 -17.1093,6.32 -33.7148,14.09 -49.7461,22.98 z"
                                       inkscape:connector-curvature="0"></path>
                                 </clipPath>
                                 <linearGradient id="linearGradient170" spreadMethod="pad"
                                    gradientTransform="matrix(579.497,-844.587,-844.587,-579.497,-304.165,2038.99)"
                                    gradientUnits="userSpaceOnUse" y2="0" x2="1" y1="0" x1="0">
                                    <stop id="stop166" offset="0" style="stop-opacity:1;stop-color:#fafafd"></stop>
                                    <stop id="stop168" offset="1" style="stop-opacity:1;stop-color:#8892d2"></stop>
                                 </linearGradient>
                                 <clipPath id="clipPath180" clipPathUnits="userSpaceOnUse">
                                    <path id="path178"
                                       d="m 1569.65,2541.75 c 0,0 -185.21,2.18 -862.005,-20.24 C 30.8789,2499.09 41.2656,2249.73 41.2656,1914.49 l 0.1406,-12.4 c 15.6641,-8.89 31.8985,-16.66 48.5586,-22.99 0.1563,317.27 13.6482,550.06 666.4062,571.68 676.769,22.42 862.039,20.24 862.039,20.24 258.82,0 437,-87.38 547.94,-223.71 -102.14,176.42 -295.52,294.44 -596.7,294.44 z"
                                       inkscape:connector-curvature="0"></path>
                                 </clipPath>
                                 <linearGradient id="linearGradient186" spreadMethod="pad"
                                    gradientTransform="matrix(675.246,-984.137,-984.137,-675.246,649.966,2737.72)"
                                    gradientUnits="userSpaceOnUse" y2="0" x2="1" y1="0" x1="0">
                                    <stop id="stop182" offset="0" style="stop-opacity:1;stop-color:#fafafd"></stop>
                                    <stop id="stop184" offset="1" style="stop-opacity:1;stop-color:#8892d2"></stop>
                                 </linearGradient>
                                 <clipPath id="clipPath196" clipPathUnits="userSpaceOnUse">
                                    <path id="path194"
                                       d="m 1333.93,1456.26 0,-381.58 c 0,-132.121 -131.13,-179.571 -292.82,-179.571 l 0,0 c -161.696,0 -292.755,47.45 -292.755,179.571 l 0,580.79"
                                       inkscape:connector-curvature="0"></path>
                                 </clipPath>
                                 <linearGradient id="linearGradient202" spreadMethod="pad"
                                    gradientTransform="matrix(866.559,-645.8,-645.8,-866.559,654.526,1514.45)"
                                    gradientUnits="userSpaceOnUse" y2="0" x2="1" y1="0" x1="0">
                                    <stop id="stop198" offset="0" style="stop-opacity:1;stop-color:#8c9bd6"></stop>
                                    <stop id="stop200" offset="1" style="stop-opacity:1;stop-color:#505e9b"></stop>
                                 </linearGradient>
                                 <clipPath id="clipPath232" clipPathUnits="userSpaceOnUse">
                                    <path id="path230"
                                       d="m 2229.92,1718.48 0,-628.88 c 0,-132.112 -131.12,-179.53 -292.81,-179.53 l 0,0 c -161.71,0 -292.75,47.418 -292.75,179.53 l 0,361.33"
                                       inkscape:connector-curvature="0"></path>
                                 </clipPath>
                                 <linearGradient id="linearGradient238" spreadMethod="pad"
                                    gradientTransform="matrix(869.571,-648.045,-648.045,-869.571,1046.59,2028.58)"
                                    gradientUnits="userSpaceOnUse" y2="0" x2="1" y1="0" x1="0">
                                    <stop id="stop234" offset="0" style="stop-opacity:1;stop-color:#8c9bd6"></stop>
                                    <stop id="stop236" offset="1" style="stop-opacity:1;stop-color:#505e9b"></stop>
                                 </linearGradient>
                                 <clipPath id="clipPath298" clipPathUnits="userSpaceOnUse">
                                    <path id="path296"
                                       d="m 571.879,2500.55 c 0,0 171.527,117.93 279.867,158.35 34.531,12.89 283.674,78.71 324.064,-351.49 22.08,-235.55 -17.68,-398.24 -210.83,-427.71 -115.589,-17.66 -97.691,-103.81 -97.691,-103.81"
                                       inkscape:connector-curvature="0"></path>
                                 </clipPath>
                                 <linearGradient id="linearGradient304" spreadMethod="pad"
                                    gradientTransform="matrix(868.236,-647.05,-647.05,-868.236,1098.5,2096.02)"
                                    gradientUnits="userSpaceOnUse" y2="0" x2="1" y1="0" x1="0">
                                    <stop id="stop300" offset="0" style="stop-opacity:1;stop-color:#8c9bd6"></stop>
                                    <stop id="stop302" offset="1" style="stop-opacity:1;stop-color:#505e9b"></stop>
                                 </linearGradient>
                                 <clipPath id="clipPath316" clipPathUnits="userSpaceOnUse">
                                    <path id="path314"
                                       d="m 747.344,2531.75 c 194.211,121.45 302.026,59.35 302.026,59.35 -84.444,77.21 -179.436,51.62 -200.444,43.74 -107.969,-40.42 -316.485,-189.8 -316.485,-189.8 0,0 -28.195,-50.01 27.989,-39.16 0,0 122.211,85.38 186.914,125.87 z"
                                       inkscape:connector-curvature="0"></path>
                                 </clipPath>
                                 <linearGradient id="linearGradient322" spreadMethod="pad"
                                    gradientTransform="matrix(690.106,-1005.8,-1005.8,-690.106,633.604,2727.32)"
                                    gradientUnits="userSpaceOnUse" y2="0" x2="1" y1="0" x1="0">
                                    <stop id="stop318" offset="0" style="stop-opacity:1;stop-color:#fafafd"></stop>
                                    <stop id="stop320" offset="1" style="stop-opacity:1;stop-color:#8892d2"></stop>
                                 </linearGradient>
                              </defs>
                              <g id="g4577" transform="matrix(0.99618507,0,0,0.98808081,8.1337521e-7,-101.85463)">
                                 <g transform="matrix(0.13333333,0,0,-0.13333333,0,462.54667)" id="g14">
                                    <g id="g16" clip-path="url(#clipPath20)">
                                       <path inkscape:connector-curvature="0"
                                          d="m 366.672,2445.95 c 0,0 127.719,141.37 216.176,199.96 28.183,18.65 237.797,128.95 372.402,-250.67 73.64,-207.85 74.87,-362.68 -92.516,-428.71 -100.234,-39.55 -64.41,-113.59 -64.41,-113.59"
                                          style="fill:url(#linearGradient26);fill-opacity:1;fill-rule:nonzero;stroke:none"
                                          id="path28"></path>
                                    </g>
                                 </g>
                                 <path inkscape:connector-curvature="0"
                                    d="m 76.081731,107.46268 c -11.963999,7.924 -28.666666,26.34933 -29.371332,27.128 -1.044267,1.15866 -0.921867,2.92 0.2808,3.928 1.199466,1.00666 3.0224,0.89066 4.068133,-0.26934 0.169867,-0.188 16.931866,-18.67866 28.287999,-26.19733 0.340134,-0.22933 8.624533,-5.58933 18.714133,-2.364 10.610396,3.39334 19.802136,15.288 26.573996,34.39333 10.78054,30.42 7.58334,46.48 -10.69386,53.684 -5.2728,2.08534 -8.74427,5.09867 -10.31454,8.97467 -2.0724,5.112 0.1104,9.72933 0.20467,9.92667 0.66667,1.38533 2.3604,1.97333 3.79893,1.33866 1.44227,-0.628 2.0824,-2.272 1.4396,-3.668 -0.0109,-0.0267 -1.24373,-2.76533 -0.0421,-5.63466 0.988,-2.368 3.37493,-4.31867 7.0964,-5.78267 27.5728,-10.88133 21.94747,-38.12267 13.9676,-60.64267 -7.4848,-21.11066 -17.64893,-33.84933 -30.212932,-37.87066 -12.559467,-4.01733 -22.687067,2.324 -23.797467,3.056"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path30"></path>
                                 <g transform="matrix(0.13333333,0,0,-0.13333333,0,462.54667)" id="g32">
                                    <g id="g34" clip-path="url(#clipPath38)">
                                       <path inkscape:connector-curvature="0"
                                          d="m 2084.18,2364.09 268.24,0 c 22.51,0 40.74,-14.93 40.74,-33.29 l 0,0 c 0,-18.37 -18.23,-33.27 -40.74,-33.27 l -210.54,0 -57.7,66.56"
                                          style="fill:url(#linearGradient44);fill-opacity:1;fill-rule:nonzero;stroke:none"
                                          id="path46"></path>
                                    </g>
                                 </g>
                                 <path inkscape:connector-curvature="0"
                                    d="m 313.65599,150.11601 c 1.50134,0 2.54534,0.87467 2.54534,1.65733 0,0.78134 -1.044,1.656 -2.54534,1.656 0,0 -24.27733,0 -26.724,0 -0.57466,-0.65866 -1.43466,-1.66 -2.86933,-3.31333 8.452,0 29.59333,0 29.59333,0 z m -41.93466,-5.56267 12.51466,14.44 29.42,0 c 4.588,0 8.316,-3.23866 8.316,-7.22 0,-3.98266 -3.728,-7.22 -8.316,-7.22 l -41.93466,0"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path48"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 324.72399,137.01734 c 4.91734,-2.34266 10.664,-1.76933 12.84933,1.27867 2.17467,3.056 -0.0453,7.42 -4.96133,9.772 -4.908,2.34 -17.77466,5.17067 -19.956,2.11067 -2.184,-3.048 7.15867,-10.82 12.068,-13.16134"
                                    style="fill:#8b9dd7;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path50"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 325.99866,139.51068 0,0 c 3.81467,-1.816 8.00266,-1.304 9.19733,0.36666 0.332,0.468 0.40933,1.00534 0.236,1.648 -0.308,1.16 -1.54933,2.832 -4.10266,4.052 -4.74134,2.25867 -13.16134,3.584 -15.76267,2.944 0.96,-2.156 6.22667,-7.00266 10.432,-9.01066 z m -2.552,-4.98534 0,0 c -4.112,1.956 -12.47467,8.192 -13.79733,13.12134 l 0.63466,4.11066 c 3.95067,5.54934 19.88934,0.57734 23.60533,-1.19733 3.70134,-1.76667 6.29867,-4.55067 7.128,-7.63867 0.59334,-2.20133 0.21334,-4.40266 -1.07066,-6.20133 -3.012,-4.208 -10.25467,-5.17067 -16.5,-2.19467"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path52"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 333.45999,155.02534 c 5.272,1.76 8.208,5.836 6.58133,9.108 -1.64133,3.276 -7.23466,4.492 -12.50266,2.72667 -5.26,-1.756 -15.84,-8.37733 -14.20667,-11.64533 1.64,-3.28267 14.868,-1.94934 20.128,-0.18934"
                                    style="fill:#8b9dd7;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path54"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 334.40799,152.40001 -0.005,0 z m -1.89333,5.252 0.003,0 c 2.83199,0.95067 4.38266,2.53067 4.88533,3.696 0.38266,0.89067 0.124,1.41333 0.036,1.584 -0.86667,1.736 -4.88667,2.66133 -8.95467,1.3 -4.64933,-1.55067 -10.9,-5.92 -12.07733,-7.93067 2.18133,-0.73066 11.02133,-0.352 16.108,1.35067 z m -21.78,-3.644 0.003,4.036 c 2.03066,4.71733 11.40133,9.95867 15.85866,11.448 6.704,2.24667 13.75467,0.424 16.04133,-4.14267 0.48667,-0.98533 0.72934,-2.04266 0.72934,-3.11466 0,-1.01067 -0.21334,-2.032 -0.64267,-3.032 -1.292,-2.99334 -4.324,-5.46934 -8.32133,-6.80267 -3.988,-1.33733 -20.65467,-4.428 -23.668,1.608"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path56"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 334.23066,144.94134 c 7.82266,-0.0507 14.19466,2.768 14.224,6.30267 0.0387,3.53333 -6.26667,6.43733 -14.09334,6.488 -7.81066,0.0533 -25.51199,-2.684 -25.54799,-6.21467 -0.036,-3.53866 17.60533,-6.51733 25.41733,-6.576"
                                    style="fill:#8b9dd7;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path58"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 345.57066,151.27068 c 0,0.13466 -0.12534,0.39733 -0.476,0.74133 -1.41334,1.39067 -5.38667,2.90267 -10.75067,2.93733 -6.708,0.0453 -17.31866,-1.77466 -21.40133,-3.464 4.05333,-1.752 14.612,-3.716 21.31066,-3.76133 l -0.003,0 c 7.408,-0.0493 11.31333,2.612 11.32,3.54667 z m -11.35734,-9.11334 -0.004,0 c -5.68266,0.0413 -22.55866,2.04267 -26.88799,6.28534 l -1.39067,3.10266 c 0.08,8.17867 28.168,8.97067 28.452,8.97067 6.29466,-0.044 11.97733,-1.80533 14.828,-4.60133 1.41333,-1.38534 2.148,-3.00667 2.12933,-4.69867 -0.044,-5.308 -7.248,-9.12 -17.12667,-9.05867"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path60"></path>
                                 <g transform="matrix(0.13333333,0,0,-0.13333333,0,462.54667)" id="g62">
                                    <g id="g64" clip-path="url(#clipPath68)">
                                       <path inkscape:connector-curvature="0"
                                          d="m 1150.12,1702.08 0,-535.82 c 0,-132.12 -131.1,-179.471 -292.784,-179.471 l 0,0 c -161.711,0 -292.746,47.351 -292.746,179.471 l 0,542.14"
                                          style="fill:url(#linearGradient74);fill-opacity:1;fill-rule:nonzero;stroke:none"
                                          id="path76"></path>
                                    </g>
                                 </g>
                                 <path inkscape:connector-curvature="0"
                                    d="m 72.394798,234.76001 0,72.28533 c 0,17.228 14.882266,26.71227 41.916662,26.71227 27.03387,0 41.92187,-9.48427 41.92187,-26.71227 l 0,-71.44266 c 0,-1.53734 -1.292,-2.784 -2.884,-2.784 -1.59333,0 -2.884,1.24666 -2.884,2.784 l 0,71.44266 c 0,17.48 -19.65747,21.14667 -36.15387,21.14667 -16.490129,0 -36.147862,-3.66667 -36.147862,-21.14667 l 0,-72.28533 c 0,-1.53467 -1.2928,-2.78133 -2.884933,-2.78133 -1.591734,0 -2.883867,1.24666 -2.883867,2.78133"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path78"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 92.386398,306.96001 c 0,7.12666 -4.1312,12.92 -9.2296,12.92 -5.098933,0 -9.231333,-5.79334 -9.231333,-12.92 0,-7.14 4.1324,-23.26 9.231333,-23.26 5.0984,0 9.2296,16.12 9.2296,23.26"
                                    style="fill:#8b9dd7;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path80"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 74.887998,306.96001 c 0,-7.764 4.378133,-22.33334 8.2688,-22.33334 3.889066,0 8.268666,14.56934 8.268666,22.33334 0,6.616 -3.7072,11.99466 -8.268666,11.99466 -4.5584,0 -8.2688,-5.37866 -8.2688,-11.99466 z m -1.924933,0 c 0,7.636 4.571333,13.85066 10.193733,13.85066 5.620266,0 10.1896,-6.21466 10.1896,-13.85066 0,-6.97467 -4.059467,-24.19067 -10.1896,-24.19067 -6.128667,0 -10.193733,17.216 -10.193733,24.19067"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path82"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 76.411998,308.24801 c 0,-6.86534 4.995867,-19.22534 8.642667,-19.22534 0.349466,0 0.691733,0.17467 1.021333,0.44 -0.911467,-2.176 -1.955733,-3.616 -3.062,-3.616 -3.649467,0 -6.602,15.53867 -6.602,22.40134"
                                    style="fill:#a6bde6;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path84"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 96.739598,313.82401 c 0,5.50666 -3.2844,9.972 -7.339067,9.972 -4.0584,0 -7.347466,-4.46534 -7.347466,-9.972 0,-5.52267 3.289066,-17.96 7.347466,-17.96 4.054667,0 7.339067,12.43733 7.339067,17.96"
                                    style="fill:#8b9dd7;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path86"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 83.013998,313.82401 c 0,-5.772 3.4496,-17.03067 6.386533,-17.03067 2.937467,0 6.376533,11.25867 6.376533,17.03067 0,4.98533 -2.862,9.044 -6.376533,9.044 -3.523466,0 -6.386533,-4.05867 -6.386533,-9.044 z m -1.922267,0 c 0,6.008 3.7276,10.9 8.3088,10.9 4.5744,0 8.300533,-4.892 8.300533,-10.9 0,-4.70134 -2.945333,-18.888 -8.300533,-18.888 -5.3636,0 -8.3088,14.18666 -8.3088,18.888"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path88"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 85.140665,310.54401 c -0.369334,-3.924 3.072933,-10.43734 5.754666,-10.91334 0.251067,-0.0333 0.509333,0.0267 0.766133,0.13467 -0.786,-1.128 -1.675466,-2.02667 -2.437466,-1.67467 -2.654667,1.268 -4.452667,8.54267 -4.083333,12.45334"
                                    style="fill:#a6bde6;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path90"></path>
                                 <g transform="matrix(0.13333333,0,0,-0.13333333,0,462.54667)" id="g92">
                                    <g id="g94" clip-path="url(#clipPath98)">
                                       <path inkscape:connector-curvature="0"
                                          d="m 2045.81,1695.54 0,-535.81 c 0,-132.14 -131.09,-179.468 -292.78,-179.468 l 0,0 c -161.7,0 -292.79,47.328 -292.79,179.468 l 0,542.13"
                                          style="fill:url(#linearGradient104);fill-opacity:1;fill-rule:nonzero;stroke:none"
                                          id="path106"></path>
                                    </g>
                                 </g>
                                 <path inkscape:connector-curvature="0"
                                    d="m 191.81333,235.63201 0,72.284 c 0,17.224 14.88933,26.71186 41.924,26.71186 12.168,0 21.92533,-1.92133 29.004,-5.70786 8.44933,-4.52267 12.91733,-11.784 12.91733,-21.004 l 0,-71.44133 c 0,-1.536 -1.292,-2.78134 -2.884,-2.78134 -1.592,0 -2.88133,1.24534 -2.88133,2.78134 l 0,71.44133 c 0,7.27866 -3.25734,12.556 -9.95334,16.14133 -6.12533,3.27333 -15.184,5.00533 -26.20266,5.00533 -16.49334,0 -36.152,-3.672 -36.152,-21.14666 l 0,-72.284 c 0,-1.53867 -1.29467,-2.784 -2.88667,-2.784 -1.592,0 -2.88533,1.24533 -2.88533,2.784"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path108"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 211.81066,307.82934 c 0,7.12667 -4.12933,12.92933 -9.22667,12.92933 -5.10666,0 -9.23466,-5.80266 -9.23466,-12.92933 0,-7.136 4.128,-23.25733 9.23466,-23.25733 5.09734,0 9.22667,16.12133 9.22667,23.25733"
                                    style="fill:#7483ca;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path110"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 194.308,307.82934 c 0,-3.644 1.09466,-9.408 2.65866,-14.01333 1.74,-5.12934 3.89333,-8.31734 5.61733,-8.31734 3.88667,0 8.26667,14.568 8.26667,22.33067 0,6.61867 -3.708,12 -8.26667,12 -4.56399,0 -8.27599,-5.38133 -8.27599,-12 z m 0.83066,-14.59067 c -1.62133,4.76934 -2.75333,10.772 -2.75333,14.59067 0,7.63867 4.57467,13.856 10.19866,13.856 5.61867,0 10.188,-6.21733 10.188,-13.856 0,-6.97467 -4.06,-24.184 -10.188,-24.184 -3.46399,0 -5.95999,5.21333 -7.44533,9.59333"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path112"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 195.84133,309.12667 c 0,-6.868 4.992,-19.236 8.63866,-19.236 0.35067,0 0.692,0.18 1.02267,0.44134 -0.91467,-2.172 -1.956,-3.61467 -3.06133,-3.61467 -3.652,0 -6.6,15.54133 -6.6,22.40933"
                                    style="fill:#839ad6;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path114"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 216.16666,314.69201 c 0,5.51466 -3.28267,9.96933 -7.34133,9.96933 -4.05467,0 -7.34267,-4.45467 -7.34267,-9.96933 0,-5.52134 3.288,-17.95734 7.34267,-17.95734 4.05866,0 7.34133,12.436 7.34133,17.95734"
                                    style="fill:#7483ca;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path116"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 202.44533,314.69201 c 0,-5.772 3.44266,-17.028 6.38,-17.028 2.93333,0 6.37866,11.256 6.37866,17.028 0,4.98666 -2.86266,9.04666 -6.37866,9.04666 -3.52,0 -6.38,-4.06 -6.38,-9.04666 z m -1.92267,0 c 0,6.01466 3.724,10.9 8.30267,10.9 4.57866,0 8.30266,-4.88534 8.30266,-10.9 0,-4.7 -2.94666,-18.884 -8.30266,-18.884 -5.36,0 -8.30267,14.184 -8.30267,18.884"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path118"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 204.56933,311.41467 c -0.37467,-3.92 3.06933,-10.432 5.752,-10.91066 0.25333,-0.0347 0.512,0.0227 0.76533,0.132 -0.78533,-1.128 -1.67467,-2.028 -2.43733,-1.67467 -2.656,1.268 -4.45467,8.54133 -4.08,12.45333"
                                    style="fill:#839ad6;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path120"></path>
                                 <g transform="matrix(0.13333333,0,0,-0.13333333,0,462.54667)" id="g122">
                                    <g id="g124" clip-path="url(#clipPath128)">
                                       <path inkscape:connector-curvature="0"
                                          d="m 903.801,2433.88 c 114.029,-185.4 101.879,-342.02 -50.055,-424.12 -90.965,-49.18 -40.887,-114.04 -40.887,-114.04"
                                          style="fill:url(#linearGradient134);fill-opacity:1;fill-rule:nonzero;stroke:none"
                                          id="path136"></path>
                                    </g>
                                 </g>
                                 <path inkscape:connector-curvature="0"
                                    d="m 119.0364,135.63468 c -1.3724,0.78533 -1.82707,2.49333 -1.01094,3.81466 8.4636,13.75334 11.49227,26.20934 8.7636,36.01334 -1.94013,6.96933 -6.77866,12.584 -14.3636,16.68933 -4.7948,2.58933 -7.65466,5.856 -8.5052,9.704 -1.1572,5.22933 2.01414,9.41467 2.15,9.58933 0.94587,1.22534 2.7308,1.47334 4.0104,0.57334 1.27667,-0.90134 1.55574,-2.63867 0.63027,-3.87867 -0.014,-0.024 -1.77187,-2.43067 -1.138,-5.17467 0.50773,-2.19466 2.41613,-4.19866 5.6692,-5.95866 8.99907,-4.86667 14.76053,-11.62534 17.11987,-20.10267 3.13933,-11.28667 -0.098,-25.22133 -9.3756,-40.296 -0.81147,-1.32267 -2.5848,-1.756 -3.95,-0.97333"
                                    style="fill:#080604;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path138"></path>
                                 <g transform="matrix(0.13333333,0,0,-0.13333333,0,462.54667)" id="g140">
                                    <g id="g142" clip-path="url(#clipPath146)">
                                       <path inkscape:connector-curvature="0"
                                          d="m 1569.91,2565.32 c 0,0 -189.32,2.23 -881.043,-20.69 C -2.81641,2521.72 22.7109,2273.69 21.6367,1917.49 l 0,-856.76 c 0,-72.468 62.793,-101.699 140.2733,-101.699 77.469,0 140.356,29.231 140.356,101.699 0,0 17.863,244.81 33.285,393.73 34.5,541.01 687.579,-88.96 1162.329,-59.56 431.41,26.74 771.15,175.65 771.15,529.54 0,353.97 -222.65,640.88 -699.12,640.88"
                                          style="fill:url(#linearGradient152);fill-opacity:1;fill-rule:nonzero;stroke:none"
                                          id="path154"></path>
                                    </g>
                                 </g>
                                 <path inkscape:connector-curvature="0"
                                    d="m 5.7687465,321.11601 0,-114.23467 c 0,0.0107 0.00729,-5.03333 0.00729,-5.03333 0.015627,-43.93067 0.02812,-72.95333 86.1698245,-75.80666 91.034139,-3.01334 117.086129,-2.76 117.340799,-2.75867 l 0.0347,0 c 29.004,0 52.63866,8.36 68.348,24.17333 14.38266,14.472 21.984,34.7 21.984,58.49867 0,50.93066 -54.44667,64.99733 -100.12,67.82933 -24.03867,1.48533 -52.39333,-10.4 -77.4104,-20.88933 -28.042669,-11.75467 -52.260401,-21.90534 -67.170801,-13.09334 -7.8756,4.65334 -12.156266,14.024 -13.088533,28.64667 -2.026667,19.56 -4.416267,52.14133 -4.438533,52.47333 -0.0068,9.57067 -9.925067,10.9732 -15.837067,10.9732 -5.906266,0 -15.8192529,-1.40253 -15.8192529,-10.77853 z m 85.9828515,-200.632 c -91.7151396,3.036 -91.73076467,35.88933 -91.74430633,81.36 L 0,206.87334 0,321.11601 c 0,10.23226 8.0713598,16.34786 21.587999,16.34786 13.528667,0 21.598933,-6.1156 21.598933,-16.34786 0.01667,-0.13467 2.3948,-32.63734 4.424533,-52.22267 0.8172,-12.78266 4.202534,-20.70933 10.353067,-24.348 12.355733,-7.29733 36.394799,2.78134 61.858928,13.45467 25.61654,10.73866 54.64854,22.912 80.0792,21.336 68.04533,-4.22 105.51867,-30.28 105.51867,-73.38133 0,-25.25867 -8.15734,-46.81734 -23.58667,-62.35067 -16.82267,-16.932 -41.89867,-25.884 -72.51333,-25.884 l 0.0347,0 c -0.252,-0.003 -26.36799,-0.26533 -117.604392,2.764"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path156"></path>
                                 <g transform="matrix(0.13333333,0,0,-0.13333333,0,462.54667)" id="g158">
                                    <g id="g160" clip-path="url(#clipPath164)">
                                       <path inkscape:connector-curvature="0"
                                          d="m 40.5078,1894 c 0.7383,-80.46 -10.5781,-783.24 33.8086,-825.44 -13.9453,31.12 16.5625,711.97 16.1719,754.76 l -0.4102,25.04 c 0,11.92 0,23.67 0,35.37 -17.1093,6.32 -33.7148,14.09 -49.7461,22.98 L 40.5078,1894"
                                          style="fill:url(#linearGradient170);fill-opacity:1;fill-rule:nonzero;stroke:none"
                                          id="path172"></path>
                                    </g>
                                 </g>
                                 <g transform="matrix(0.13333333,0,0,-0.13333333,0,462.54667)" id="g174">
                                    <g id="g176" clip-path="url(#clipPath180)">
                                       <path inkscape:connector-curvature="0"
                                          d="m 1569.65,2541.75 c 0,0 -185.21,2.18 -862.005,-20.24 C 30.8789,2499.09 41.2656,2249.73 41.2656,1914.49 l 0.1406,-12.4 c 15.6641,-8.89 31.8985,-16.66 48.5586,-22.99 0.1563,317.27 13.6482,550.06 666.4062,571.68 676.769,22.42 862.039,20.24 862.039,20.24 258.82,0 437,-87.38 547.94,-223.71 -102.14,176.42 -295.52,294.44 -596.7,294.44"
                                          style="fill:url(#linearGradient186);fill-opacity:1;fill-rule:nonzero;stroke:none"
                                          id="path188"></path>
                                    </g>
                                 </g>
                                 <g transform="matrix(0.13333333,0,0,-0.13333333,0,462.54667)" id="g190">
                                    <g id="g192" clip-path="url(#clipPath196)">
                                       <path inkscape:connector-curvature="0"
                                          d="m 1333.93,1456.26 0,-381.58 c 0,-132.121 -131.13,-179.571 -292.82,-179.571 l 0,0 c -161.696,0 -292.755,47.45 -292.755,179.571 l 0,580.79"
                                          style="fill:url(#linearGradient202);fill-opacity:1;fill-rule:nonzero;stroke:none"
                                          id="path204"></path>
                                    </g>
                                 </g>
                                 <path inkscape:connector-curvature="0"
                                    d="m 96.896398,241.81734 0,77.43867 c 0,17.23333 14.890532,26.7224 41.918262,26.7224 27.036,0 41.928,-9.48907 41.928,-26.7224 l 0,-50.87734 c 0,-1.536 -1.29466,-2.78266 -2.88533,-2.78266 -1.59067,0 -2.884,1.24666 -2.884,2.78266 l 0,50.87734 c 0,17.48906 -19.66133,21.15893 -36.15867,21.15893 -16.4892,0 -36.1496,-3.66987 -36.1496,-21.15893 l 0,-77.43867 c 0,-1.536 -1.29213,-2.78133 -2.884396,-2.78133 -1.592666,0 -2.884266,1.24533 -2.884266,2.78133"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path206"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 124.33693,324.19067 c 0,6.6268 -5.51187,12.00134 -12.31813,12.00134 -6.80574,0 -12.319869,-5.37454 -12.319869,-12.00134 0,-6.63466 5.514129,-21.61066 12.319869,-21.61066 6.80626,0 12.31813,14.976 12.31813,21.61066"
                                    style="fill:#8b9dd7;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path208"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 100.66093,324.19067 c 0,-6.46 5.49173,-20.68666 11.35787,-20.68666 5.86666,0 11.35826,14.22666 11.35826,20.68666 0,6.10907 -5.0916,11.0748 -11.35826,11.0748 -6.25894,0 -11.35787,-4.96573 -11.35787,-11.0748 z m -1.924532,0 c 0,7.12787 5.958402,12.92947 13.282402,12.92947 7.32493,0 13.28226,-5.8016 13.28226,-12.92947 0,-6.72133 -5.6052,-22.544 -13.28226,-22.544 -7.6704,0 -13.282402,15.82267 -13.282402,22.544"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path210"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 101.80266,324.98401 c 0,-5.93467 6.89734,-16.596 11.94374,-16.596 0.48066,0 0.94733,0.152 1.41346,0.384 -1.27133,-1.87467 -2.70626,-3.12267 -4.23013,-3.12267 -5.04853,0 -9.12707,13.408 -9.12707,19.33467"
                                    style="fill:#a6bde6;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path212"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 134.37333,325.12934 c 0,8.74027 -5.70933,15.85227 -12.75307,15.85227 -7.05413,0 -12.76346,-7.112 -12.76346,-15.85227 0,-8.752 5.70933,-28.516 12.76346,-28.516 7.04374,0 12.75307,19.764 12.75307,28.516"
                                    style="fill:#8b9dd7;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path214"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 109.8172,325.12934 c 0,-8.62 5.70933,-27.59067 11.80306,-27.59067 6.09227,0 11.79307,18.97067 11.79307,27.59067 0,8.22667 -5.28933,14.92253 -11.79307,14.92253 -6.50573,0 -11.80306,-6.69586 -11.80306,-14.92253 z m -1.9224,0 c 0,9.25067 6.15826,16.77987 13.72546,16.77987 7.56414,0 13.71574,-7.5292 13.71574,-16.77987 0,-8.78533 -5.79227,-29.44133 -13.71574,-29.44133 -7.92653,0 -13.72546,20.656 -13.72546,29.44133"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path216"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 112.2964,326.71467 c 0,-8.428 6.90413,-23.57466 11.9448,-23.57466 0.48013,0 0.9536,0.21866 1.4124,0.54133 -1.2624,-2.67467 -2.70627,-4.43733 -4.22907,-4.43733 -5.04907,0 -9.12813,19.05466 -9.12813,27.47066"
                                    style="fill:#a6bde6;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path218"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 141.068,329.83627 c 0,6.18747 -4.10934,11.20254 -9.18054,11.20254 -5.0692,0 -9.1792,-5.01507 -9.1792,-11.20254 0,-6.2176 4.11,-20.2016 9.1792,-20.2016 5.0712,0 9.18054,13.984 9.18054,20.2016"
                                    style="fill:#8b9dd7;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path220"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 123.66973,329.83627 c 0,-6.7016 4.35893,-19.27493 8.21773,-19.27493 3.86854,0 8.2192,12.57333 8.2192,19.27493 0,5.6692 -3.684,10.27294 -8.2192,10.27294 -4.53013,0 -8.21773,-4.60374 -8.21773,-10.27294 z m -1.92333,0 c 0,6.68907 4.55306,12.13014 10.14106,12.13014 5.59787,0 10.14054,-5.44107 10.14054,-12.13014 0,-6.09226 -4.04,-21.12826 -10.14054,-21.12826 -6.09786,0 -10.14106,15.036 -10.14106,21.12826"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path222"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 126.56933,326.14134 c -0.4652,-4.41867 3.83747,-11.744 7.18933,-12.27333 0.316,-0.0507 0.63734,0.024 0.96134,0.14533 -0.984,-1.27333 -2.096,-2.28267 -3.04867,-1.88133 -3.32187,1.42666 -5.5672,9.60533 -5.102,14.00933"
                                    style="fill:#a6bde6;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path224"></path>
                                 <g transform="matrix(0.13333333,0,0,-0.13333333,0,462.54667)" id="g226">
                                    <g id="g228" clip-path="url(#clipPath232)">
                                       <path inkscape:connector-curvature="0"
                                          d="m 2229.92,1718.48 0,-628.88 c 0,-132.112 -131.12,-179.53 -292.81,-179.53 l 0,0 c -161.71,0 -292.75,47.418 -292.75,179.53 l 0,361.33"
                                          style="fill:url(#linearGradient238);fill-opacity:1;fill-rule:nonzero;stroke:none"
                                          id="path240"></path>
                                    </g>
                                 </g>
                                 <path inkscape:connector-curvature="0"
                                    d="m 294.43466,233.41601 0,83.85066 c 0,17.4868 -19.66133,21.15454 -36.15333,21.15454 -16.488,0 -36.148,-3.66774 -36.148,-21.15454 l 0,-48.17733 c 0,-1.536 -1.292,-2.784 -2.88534,-2.784 -1.592,0 -2.884,1.248 -2.884,2.784 l 0,48.17733 c 0,17.23054 14.88667,26.72267 41.91734,26.72267 27.03333,0 41.92266,-9.49213 41.92266,-26.72267 l 0,-83.85066 c 0,-1.53733 -1.28933,-2.78 -2.88133,-2.78 -1.59467,0 -2.888,1.24267 -2.888,2.78"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path242"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 243.80533,322.20001 c 0,6.62266 -5.51467,11.99613 -12.32,11.99613 -6.80534,0 -12.31867,-5.37347 -12.31867,-11.99613 0,-6.63467 5.51333,-21.61334 12.31867,-21.61334 6.80533,0 12.32,14.97867 12.32,21.61334"
                                    style="fill:#8b9dd7;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path244"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 220.12933,322.20001 c 0,-6.46267 5.48933,-20.68267 11.356,-20.68267 5.86933,0 11.36,14.22 11.36,20.68267 0,6.104 -5.09734,11.0732 -11.36,11.0732 -6.26134,0 -11.356,-4.9692 -11.356,-11.0732 z m -1.924,0 c 0,7.12786 5.956,12.92786 13.28,12.92786 7.324,0 13.28133,-5.8 13.28133,-12.92786 0,-6.72267 -5.60667,-22.54 -13.28133,-22.54 -7.672,0 -13.28,15.81733 -13.28,22.54"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path246"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 221.26933,322.98934 c 0,-5.932 6.896,-16.592 11.944,-16.592 0.48133,0 0.94666,0.15067 1.41333,0.38 -1.26933,-1.87467 -2.704,-3.12133 -4.22933,-3.12133 -5.048,0 -9.128,13.40933 -9.128,19.33333"
                                    style="fill:#a6bde6;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path248"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 253.84266,323.13467 c 0,8.74534 -5.708,15.85574 -12.75733,15.85574 -7.05467,0 -12.76267,-7.1104 -12.76267,-15.85574 0,-8.752 5.708,-28.51066 12.76267,-28.51066 7.04933,0 12.75733,19.75866 12.75733,28.51066"
                                    style="fill:#8b9dd7;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path250"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 229.28399,323.13467 c 0,-8.62 5.70534,-27.58533 11.80134,-27.58533 6.09466,0 11.79466,18.96533 11.79466,27.58533 0,8.2292 -5.292,14.92814 -11.79466,14.92814 -6.50934,0 -11.80134,-6.69894 -11.80134,-14.92814 z m -1.92266,0 c 0,9.2532 6.156,16.78027 13.724,16.78027 7.564,0 13.71733,-7.52707 13.71733,-16.78027 0,-8.78133 -5.79067,-29.44266 -13.71733,-29.44266 -7.93067,0 -13.724,20.66133 -13.724,29.44266"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path252"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 231.76399,324.72401 c 0,-8.42667 6.904,-23.57334 11.94267,-23.57334 0.48267,0 0.95467,0.21734 1.41467,0.53867 -1.26134,-2.67467 -2.704,-4.43333 -4.23067,-4.43333 -5.048,0 -9.12667,19.048 -9.12667,27.468"
                                    style="fill:#a6bde6;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path254"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 260.53333,327.84267 c 0,6.1904 -4.108,11.2056 -9.17734,11.2056 -5.06933,0 -9.18,-5.0152 -9.18,-11.2056 0,-6.21466 4.11067,-20.20266 9.18,-20.20266 5.06934,0 9.17734,13.988 9.17734,20.20266"
                                    style="fill:#8b9dd7;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path256"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 243.13599,327.84267 c 0,-6.7 4.35467,-19.27066 8.22,-19.27066 3.864,0 8.21867,12.57066 8.21867,19.27066 0,5.668 -3.69067,10.27747 -8.21867,10.27747 -4.53066,0 -8.22,-4.60947 -8.22,-10.27747 z m -1.92266,0 c 0,6.692 4.548,12.13054 10.14266,12.13054 5.592,0 10.13867,-5.43854 10.13867,-12.13054 0,-6.08933 -4.04,-21.128 -10.13867,-21.128 -6.10133,0 -10.14266,15.03867 -10.14266,21.128"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path258"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 246.03733,324.15067 c -0.464,-4.42 3.83733,-11.74266 7.18933,-12.27333 0.31467,-0.0493 0.63733,0.02 0.96133,0.14533 -0.98666,-1.276 -2.096,-2.27866 -3.04933,-1.88533 -3.32267,1.42667 -5.56533,9.608 -5.10133,14.01333"
                                    style="fill:#a6bde6;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path260"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 27.342133,160.29468 c -1.018667,1.384 -0.659334,3.28666 0.808933,4.25466 1.462533,0.96667 3.478667,0.62134 4.496267,-0.75866 5.800533,-7.88134 18.846932,-10.05334 25.049599,-7.81467 1.235867,0.448 2.797866,0.25333 3.480666,-0.444 0.682267,-0.688 0.236,-1.61333 -1.002666,-2.06 -8.492667,-3.06933 -25.153066,-3.62533 -32.832799,6.82267"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path262"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 52.482265,194.93868 c -5.3568,1.12933 -10.079599,-1.868 -10.544266,-6.692 -0.463067,-4.832 3.507867,-9.66 8.866133,-10.8 5.362533,-1.13334 10.083866,1.856 10.552133,6.69066 0.459867,4.83067 -3.509866,9.65734 -8.874,10.80134 z m 11.077067,-11.44534 c -0.536934,-5.62933 -6.114533,-9.09333 -12.4708,-7.756 -6.3484,1.344 -11.064533,6.98134 -10.5312,12.60267 0.5344,5.61867 6.114,9.092 12.462933,7.76 6.355734,-1.348 11.073467,-6.984 10.539067,-12.60667"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path264"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 61.017198,184.52668 c 0.4068,4.24666 -3.066666,8.5 -7.757333,9.492 -4.709866,1.00266 -8.839599,-1.64 -9.259333,-5.88667 -0.4036,-4.24667 3.070267,-8.496 7.763067,-9.48933 4.7052,-1 8.846266,1.63333 9.253599,5.884"
                                    style="fill:#fcfcfc;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path266"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 60.329732,184.56934 c -1.2704,-3.236 -4.643733,-5.112 -7.504667,-4.21066 -1.533333,0.47466 -2.583866,1.66 -3.073466,3.14133 l 3.998933,1.97867 -3.674,2.652 c 1.361467,3.052 4.581867,4.804 7.360933,3.93333 2.8724,-0.912 4.161467,-4.26 2.892267,-7.49467"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path268"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 57.385465,183.18268 c 0.711867,-0.10267 1.55,0.75866 1.854667,1.95466 0.3072,1.18134 -0.02347,2.232 -0.751067,2.344 -0.719733,0.108 -1.556266,-0.76 -1.864533,-1.952 -0.299067,-1.18 0.03853,-2.228 0.760933,-2.34666"
                                    style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path270"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 45.752132,178.30534 c -5.014133,3.86934 -6.599066,9.48934 -3.211466,12.67467 -0.293734,-0.12533 0.345733,0.69333 0.07493,0.54133 -5.333867,-2.95733 -6.224933,-11.73866 -1.314533,-16.90533 4.215066,-4.44 16.863999,-7.732 16.770266,-6.02 -0.521867,1.964 -4.224933,4.45733 -8.822933,7.16667 -1.480134,0.84133 -2.547334,1.812 -3.496267,2.54266"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path272"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 128.138,232.84401 c -0.25827,1.31733 0.6328,2.39867 1.97706,2.39867 l 7.72494,0 c 1.34666,0 2.65466,-1.08134 2.91466,-2.39867 l 2.05734,-10.60267 c 0.25866,-1.32 1.564,-2.39866 2.912,-2.39866 l 8.36,0 c 4.768,0 8.69066,-0.50134 11.76666,-1.50534 3.08267,-0.99866 5.87734,-2.68133 8.40134,-5.04 2.10933,-1.94133 3.824,-4.084 5.13066,-6.432 1.30667,-2.34 2.24,-4.92666 2.78667,-7.756 1.336,-6.864 0.0213,-11.97066 -3.016,-16.04933 -3.81467,-5.10667 -13.54933,-5.37733 -13.54933,-5.37733 -1.33067,-0.2 -3.51734,-0.37067 -4.86267,-0.37067 l -19.36933,0 c -1.344,0 -2.652,1.08267 -2.912,2.404 z m 30.26733,-46.38933 c 4.796,0 7.98667,0.88666 9.58533,2.656 1.59467,1.76933 1.97734,4.80933 1.144,9.112 -0.876,4.484 -2.556,7.688 -5.044,9.604 -2.488,1.91466 -8.93066,2.608 -8.93066,2.608 -1.34,0.14666 -3.53467,0.26533 -4.87734,0.26533 l -2.78133,0 c -1.344,0 -2.23867,-1.08133 -1.98,-2.4 L 149.3,188.85734 c 0.256,-1.32 1.56666,-2.40266 2.90933,-2.40266 l 6.196,0"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path274"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 128.138,232.84401 c -0.25827,1.31733 0.6328,2.39867 1.97706,2.39867 l 7.72494,0 c 1.34666,0 2.65466,-1.08134 2.91466,-2.39867 l 2.05734,-10.60267 c 0.25866,-1.32 1.564,-2.39866 2.912,-2.39866 l 8.36,0 c 4.768,0 8.69066,-0.50134 11.76666,-1.50534 3.08267,-0.99866 5.87734,-2.68133 8.40134,-5.04 2.10933,-1.94133 3.824,-4.084 5.13066,-6.432 1.30667,-2.34 2.24,-4.92666 2.78667,-7.756 1.336,-6.864 0.0213,-11.97066 -3.016,-16.04933 -3.81467,-5.10667 -13.54933,-5.37733 -13.54933,-5.37733 -1.33067,-0.2 -3.51734,-0.37067 -4.86267,-0.37067 l -19.36933,0 c -1.344,0 -2.652,1.08267 -2.912,2.404 z m 30.26733,-46.38933 c 4.796,0 7.98667,0.88666 9.58533,2.656 1.59467,1.76933 1.97734,4.80933 1.144,9.112 -0.876,4.484 -2.556,7.688 -5.044,9.604 -2.488,1.91466 -8.93066,2.608 -8.93066,2.608 -1.34,0.14666 -3.53467,0.26533 -4.87734,0.26533 l -2.78133,0 c -1.344,0 -2.23867,-1.08133 -1.98,-2.4 L 149.3,188.85734 c 0.256,-1.32 1.56666,-2.40266 2.90933,-2.40266 z"
                                    style="fill:none;stroke:#ffffff;stroke-width:5.33333302;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                                    id="path276"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 194.33866,164.31334 c 0.256,-1.31733 1.564,-2.39733 2.908,-2.39733 l 7.628,0 c 1.34667,0 2.236,1.08 1.97733,2.39733 l -2.05866,10.60267 c -0.25734,1.32133 0.63866,2.396 1.98,2.396 l 6.25733,0 c 1.344,0 3.54,0.116 4.876,0.25333 0,0 9.12533,0.10667 12.08667,3.42134 2.412,2.69866 3.46,6.416 2.39466,11.89733 l -4.768,24.55867 c -0.25466,1.32 -1.56666,2.4 -2.912,2.4 l -7.824,0 c -1.34533,0 -2.23733,-1.08 -1.98,-2.4 l 4.05067,-20.83334 c 0.256,-1.31866 0.544,-3.496 0.64267,-4.84 0,0 0.18,-2.46533 -0.80534,-3.52266 -0.98133,-1.06134 -3.07733,-1.58934 -6.28,-1.58934 l -7.55733,0 c -1.34667,0 -2.65067,1.07734 -2.912,2.39734 l -5.51066,28.388 c -0.25734,1.32 -1.56534,2.4 -2.91067,2.4 l -7.62933,0 c -1.34534,0 -2.23467,-1.08 -1.97867,-2.4 l 10.32533,-53.12934"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path278"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 194.33866,164.31334 c 0.256,-1.31733 1.564,-2.39733 2.908,-2.39733 l 7.628,0 c 1.34667,0 2.236,1.08 1.97733,2.39733 l -2.05866,10.60267 c -0.25734,1.32133 0.63866,2.396 1.98,2.396 l 6.25733,0 c 1.344,0 3.54,0.116 4.876,0.25333 0,0 9.12533,0.10667 12.08667,3.42134 2.412,2.69866 3.46,6.416 2.39466,11.89733 l -4.768,24.55867 c -0.25466,1.32 -1.56666,2.4 -2.912,2.4 l -7.824,0 c -1.34533,0 -2.23733,-1.08 -1.98,-2.4 l 4.05067,-20.83334 c 0.256,-1.31866 0.544,-3.496 0.64267,-4.84 0,0 0.18,-2.46533 -0.80534,-3.52266 -0.98133,-1.06134 -3.07733,-1.58934 -6.28,-1.58934 l -7.55733,0 c -1.34667,0 -2.65067,1.07734 -2.912,2.39734 l -5.51066,28.388 c -0.25734,1.32 -1.56534,2.4 -2.91067,2.4 l -7.62933,0 c -1.34534,0 -2.23467,-1.08 -1.97867,-2.4 z"
                                    style="fill:none;stroke:#ffffff;stroke-width:5.33333302;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                                    id="path280"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 233.03066,232.84401 c -0.25867,1.31733 0.63333,2.39867 1.98,2.39867 l 7.724,0 c 1.34133,0 2.656,-1.08134 2.91067,-2.39867 l 2.05866,-10.60267 c 0.25734,-1.32 1.568,-2.39866 2.90934,-2.39866 l 8.364,0 c 4.76666,0 8.68666,-0.50134 11.77066,-1.50534 3.07334,-0.99866 5.87334,-2.68133 8.39334,-5.04 2.116,-1.94133 3.82266,-4.084 5.13333,-6.432 1.308,-2.34 2.23733,-4.92666 2.788,-7.756 1.33467,-6.864 0.12667,-12.04933 -3.01867,-16.04933 -3.90266,-4.96533 -13.55066,-5.37733 -13.55066,-5.37733 -1.33067,-0.2 -3.51867,-0.37067 -4.86267,-0.37067 l -19.36933,0 c -1.34267,0 -2.65467,1.08267 -2.90934,2.404 z m 30.27067,-46.38933 c 4.79066,0 7.984,0.88666 9.58533,2.656 1.59067,1.76933 1.972,4.80933 1.13733,9.112 -0.87466,4.484 -2.548,7.688 -5.04,9.604 -2.492,1.91466 -8.93466,2.608 -8.93466,2.608 -1.33467,0.14666 -3.528,0.26533 -4.876,0.26533 l -2.784,0 c -1.34667,0 -2.232,-1.08133 -1.97734,-2.4 l 3.776,-19.44267 c 0.25867,-1.32 1.568,-2.40266 2.912,-2.40266 l 6.20134,0"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path282"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 233.03066,232.84401 c -0.25867,1.31733 0.63333,2.39867 1.98,2.39867 l 7.724,0 c 1.34133,0 2.656,-1.08134 2.91067,-2.39867 l 2.05866,-10.60267 c 0.25734,-1.32 1.568,-2.39866 2.90934,-2.39866 l 8.364,0 c 4.76666,0 8.68666,-0.50134 11.77066,-1.50534 3.07334,-0.99866 5.87334,-2.68133 8.39334,-5.04 2.116,-1.94133 3.82266,-4.084 5.13333,-6.432 1.308,-2.34 2.23733,-4.92666 2.788,-7.756 1.33467,-6.864 0.12667,-12.04933 -3.01867,-16.04933 -3.90266,-4.96533 -13.55066,-5.37733 -13.55066,-5.37733 -1.33067,-0.2 -3.51867,-0.37067 -4.86267,-0.37067 l -19.36933,0 c -1.34267,0 -2.65467,1.08267 -2.90934,2.404 z m 30.27067,-46.38933 c 4.79066,0 7.984,0.88666 9.58533,2.656 1.59067,1.76933 1.972,4.80933 1.13733,9.112 -0.87466,4.484 -2.548,7.688 -5.04,9.604 -2.492,1.91466 -8.93466,2.608 -8.93466,2.608 -1.33467,0.14666 -3.528,0.26533 -4.876,0.26533 l -2.784,0 c -1.34667,0 -2.232,-1.08133 -1.97734,-2.4 l 3.776,-19.44267 c 0.25867,-1.32 1.568,-2.40266 2.912,-2.40266 z"
                                    style="fill:none;stroke:#ffffff;stroke-width:5.33333302;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                                    id="path284"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 128.138,232.84401 c -0.25827,1.31733 0.6328,2.39867 1.97706,2.39867 l 7.72494,0 c 1.34666,0 2.65466,-1.08134 2.91466,-2.39867 l 2.05734,-10.60267 c 0.25866,-1.32 1.564,-2.39866 2.912,-2.39866 l 8.36,0 c 4.768,0 8.69066,-0.50134 11.76666,-1.50534 3.08267,-0.99866 5.87734,-2.68133 8.40134,-5.04 2.10933,-1.94133 3.824,-4.084 5.13066,-6.432 1.30667,-2.34 2.24,-4.92666 2.78667,-7.756 1.336,-6.864 0.0213,-11.97066 -3.016,-16.04933 -3.81467,-5.10667 -13.54933,-5.37733 -13.54933,-5.37733 -1.33067,-0.2 -3.51734,-0.37067 -4.86267,-0.37067 l -19.36933,0 c -1.344,0 -2.652,1.08267 -2.912,2.404 z m 30.26733,-46.38933 c 4.796,0 7.98667,0.88666 9.58533,2.656 1.59467,1.76933 1.97734,4.80933 1.144,9.112 -0.876,4.484 -2.556,7.688 -5.044,9.604 -2.488,1.91466 -8.93066,2.608 -8.93066,2.608 -1.34,0.14666 -3.53467,0.26533 -4.87734,0.26533 l -2.78133,0 c -1.344,0 -2.23867,-1.08133 -1.98,-2.4 L 149.3,188.85734 c 0.256,-1.32 1.56666,-2.40266 2.90933,-2.40266 l 6.196,0"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path286"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 194.33866,164.31334 c 0.256,-1.31733 1.564,-2.39733 2.908,-2.39733 l 7.628,0 c 1.34667,0 2.236,1.08 1.97733,2.39733 l -2.05866,10.60267 c -0.25734,1.32133 0.63866,2.396 1.98,2.396 l 6.25733,0 c 1.344,0 3.54,0.116 4.876,0.25333 0,0 9.12533,0.10667 12.08667,3.42134 2.412,2.69866 3.46,6.416 2.39466,11.89733 l -4.768,24.55867 c -0.25466,1.32 -1.56666,2.4 -2.912,2.4 l -7.824,0 c -1.34533,0 -2.23733,-1.08 -1.98,-2.4 l 4.05067,-20.83334 c 0.256,-1.31866 0.544,-3.496 0.64267,-4.84 0,0 0.18,-2.46533 -0.80534,-3.52266 -0.98133,-1.06134 -3.07733,-1.58934 -6.28,-1.58934 l -7.55733,0 c -1.34667,0 -2.65067,1.07734 -2.912,2.39734 l -5.51066,28.388 c -0.25734,1.32 -1.56534,2.4 -2.91067,2.4 l -7.62933,0 c -1.34534,0 -2.23467,-1.08 -1.97867,-2.4 l 10.32533,-53.12934"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path288"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 233.03066,232.84401 c -0.25867,1.31733 0.63333,2.39867 1.98,2.39867 l 7.724,0 c 1.34133,0 2.656,-1.08134 2.91067,-2.39867 l 2.05866,-10.60267 c 0.25734,-1.32 1.568,-2.39866 2.90934,-2.39866 l 8.364,0 c 4.76666,0 8.68666,-0.50134 11.77066,-1.50534 3.07334,-0.99866 5.87334,-2.68133 8.39334,-5.04 2.116,-1.94133 3.82266,-4.084 5.13333,-6.432 1.308,-2.34 2.23733,-4.92666 2.788,-7.756 1.33467,-6.864 0.12667,-12.04933 -3.01867,-16.04933 -3.90266,-4.96533 -13.55066,-5.37733 -13.55066,-5.37733 -1.33067,-0.2 -3.51867,-0.37067 -4.86267,-0.37067 l -19.36933,0 c -1.34267,0 -2.65467,1.08267 -2.90934,2.404 z m 30.27067,-46.38933 c 4.79066,0 7.984,0.88666 9.58533,2.656 1.59067,1.76933 1.972,4.80933 1.13733,9.112 -0.87466,4.484 -2.548,7.688 -5.04,9.604 -2.492,1.91466 -8.93466,2.608 -8.93466,2.608 -1.33467,0.14666 -3.528,0.26533 -4.876,0.26533 l -2.784,0 c -1.34667,0 -2.232,-1.08133 -1.97734,-2.4 l 3.776,-19.44267 c 0.25867,-1.32 1.568,-2.40266 2.912,-2.40266 l 6.20134,0"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path290"></path>
                                 <g transform="matrix(0.13333333,0,0,-0.13333333,0,462.54667)" id="g292">
                                    <g id="g294" clip-path="url(#clipPath298)">
                                       <path inkscape:connector-curvature="0"
                                          d="m 571.879,2500.55 c 0,0 171.527,117.93 279.867,158.35 34.531,12.89 283.674,78.71 324.064,-351.49 22.08,-235.55 -17.68,-398.24 -210.83,-427.71 -115.589,-17.66 -97.691,-103.81 -97.691,-103.81"
                                          style="fill:url(#linearGradient304);fill-opacity:1;fill-rule:nonzero;stroke:none"
                                          id="path306"></path>
                                    </g>
                                 </g>
                                 <path inkscape:connector-curvature="0"
                                    d="m 112.5224,105.43201 c -14.613602,5.45467 -36.998935,20.79067 -37.947469,21.44267 -1.294666,0.89067 -1.597866,2.62933 -0.671866,3.87866 0.922933,1.25067 2.726666,1.54134 4.0224,0.64934 0.2256,-0.15067 22.742795,-15.58 36.676135,-20.78267 0.43586,-0.16 10.69053,-3.872 20.53306,2.02267 10.24667,6.14 16.73467,20.83333 18.772,42.50133 3.244,34.62933 -4.44,50.784 -25.69213,54.03067 -6.02493,0.91733 -10.4104,3.22933 -13.04,6.87866 -3.45267,4.77734 -2.412,10.03467 -2.36307,10.25734 0.31307,1.49466 1.814,2.45866 3.36827,2.172 1.55627,-0.28534 2.5776,-1.74267 2.29213,-3.24534 -0.007,-0.0267 -0.58066,-3.264 1.4792,-6.064 1.7068,-2.31866 4.78907,-3.836 9.16454,-4.50666 31.5964,-4.82134 32.91773,-34.612 30.53773,-60.02534 -2.23867,-23.812 -9.468,-39.53333 -21.47333,-46.72399 -12.05294,-7.22 -24.29774,-2.992 -25.6576,-2.48534"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path308"></path>
                                 <g transform="matrix(0.13333333,0,0,-0.13333333,0,462.54667)" id="g310">
                                    <g id="g312" clip-path="url(#clipPath316)">
                                       <path inkscape:connector-curvature="0"
                                          d="m 747.344,2531.75 c 194.211,121.45 302.026,59.35 302.026,59.35 -84.444,77.21 -179.436,51.62 -200.444,43.74 -107.969,-40.42 -316.485,-189.8 -316.485,-189.8 0,0 -28.195,-50.01 27.989,-39.16 0,0 122.211,85.38 186.914,125.87"
                                          style="fill:url(#linearGradient322);fill-opacity:1;fill-rule:nonzero;stroke:none"
                                          id="path324"></path>
                                    </g>
                                 </g>
                                 <path inkscape:connector-curvature="0"
                                    d="m 90.301598,201.39468 c -0.225067,13.14666 -4.5776,25.11866 -11.366667,31.22533 -3.080266,2.77467 -6.516133,4.148 -9.945333,3.98 -1.057866,-0.0573 -1.959333,0.728 -2.020266,1.75067 -0.05053,1.02666 0.762933,1.896 1.8244,1.94933 4.492666,0.22667 8.904666,-1.49067 12.766666,-4.96667 7.524533,-6.77333 12.3464,-19.75466 12.586,-33.884 0.0208,-1.01866 -0.824,-1.86533 -1.8876,-1.88133 -1.063467,-0.0147 -1.938,0.80267 -1.9572,1.82667"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path326"></path>
                                 <path inkscape:connector-curvature="0"
                                    d="m 98.631198,192.00668 c -1.4484,3.32133 -3.9796,5.43733 -6.950534,5.79066 -2.896266,0.34134 -5.839066,-1.01333 -7.874399,-3.628 -0.633867,-0.81733 -1.843734,-0.98533 -2.692267,-0.36933 -0.8484,0.61333 -1.021867,1.776 -0.3828,2.59333 2.8724,3.69467 7.143733,5.59467 11.421466,5.088 4.376534,-0.528 8.026536,-3.45733 10.025996,-8.04 0.40987,-0.94533 -0.0541,-2.024 -1.0292,-2.42533 -0.9812,-0.396 -2.103596,0.048 -2.518262,0.99067"
                                    style="fill:#363254;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path328"></path>
                              </g>
                           </svg>
                        </span>
                        <span class="image-portfolio__skill--text">PHP</span>
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
                                 <img src="{{asset('img/home/furino/cart_1.jpg')}}" alt="@lang('portfolio.furino.cart')">
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
                                 <img src="{{asset('img/home/furino/slider.jpg')}}" alt="@lang('portfolio.furino.slider')">
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
                                 <img src="{{asset('img/home/furino/loading.jpg')}}" alt="@lang('portfolio.furino.loading')">
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
                                 <img src="{{asset('img/home/furino/gallery.jpg')}}" alt="@lang('portfolio.furino.gallery')">
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
</section>
@endsection