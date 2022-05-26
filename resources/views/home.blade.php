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
         <div class="portfolio__body">
            <div class="portfolio__image">
               <img src="{{asset('/img/home/colorit_1587.jpg')}}" alt="">
               <img src="{{asset('/img/home/colorit_2_1587.jpg')}}" alt="">
            </div>
         </div>
      </div>
   </div>
</section>
@endsection