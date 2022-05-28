@extends('layout')
@section('title', __('tittles.home.title'))
@section('description', __('tittles.home.description'))
@section('ogTitle', __('tittles.home.ogTitle'))
@section('ogDescription', __('tittles.home.ogDescription'))
@section('ogUrl', __('tittles.home.ogUrl'))


@section('content')
<section class="title">
   <div class="title__container">
      <h1 class="title__text">Портфолио</h1>
   </div>
</section>
<section class="portfolio">
   <div class="portfolio__container">
      <div class="portfolio__item">
         <div class="portfolio__title">
            <h2 class="portfolio__title-text">Сайт рекламної агенції</h2>
            <a href="https://colorit.agency/" target="_blank" class="portfolio__title-link">colorit.agency</a>
         </div>
         <div class="portfolio__image image-portfolio">
            <img src="{{asset('/img/home/colorit_1587_1.jpg')}}" alt="">
            <img src="{{asset('/img/home/colorit_2_1587_1.jpg')}}" alt="">
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
                     <span>Розроблено на: Laravel</span>
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
         <div class="portfolio__description description-portfolio">
            <div class="description-portfolio__container">
               <div class="description-portfolio__title">Сайт містить всі сучасні стандарти розробки</div>
               <div class="description-portfolio__body">
                  <div class="description-portfolio__row">
                     <div class="description-portfolio__item">
                        <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                                 class="fa fa-info"></i><i class="fa fa-info"></i>Адаптивність</span>
                        </div>
                     </div>
                     <div class="description-portfolio__item">
                        <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                                 class="fa fa-info"></i>Гумова верстка</span>
                        </div>
                     </div>
                     <div class="description-portfolio__item">
                        <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                                 class="fa fa-info"></i>Мобільна версія</span>
                        </div>
                     </div>
                  </div>

                  <div class="description-portfolio__row">
                     <div class="description-portfolio__item">
                        <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                                 class="fa fa-info"></i>Збереження версій
                              сайту</span></div>
                     </div>

                     <div class="description-portfolio__item">
                        <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                                 class="fa fa-info"></i>Заповнення тегів title
                              та description</span>
                        </div>
                     </div>

                     <div class="description-portfolio__item">
                        <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                                 class="fa fa-info"></i>Налаштування
                              відображення у
                              месенджерах</span></div>
                     </div>
                  </div>

                  <div class="description-portfolio__row">
                     <div class="description-portfolio__item">
                        <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                                 class="fa fa-info"></i>Розподілення
                              подій</span></div>
                     </div>
                     <div class="description-portfolio__item">
                        <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                                 class="fa fa-info"></i>Кросбраузерність</span>
                        </div>
                     </div>
                     <div class="description-portfolio__item">
                        <div class="description-portfolio__text"><span class="@lang('language.current_lang')"><i
                                 class="fa fa-info"></i>Швидке
                              завантаження</span></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection