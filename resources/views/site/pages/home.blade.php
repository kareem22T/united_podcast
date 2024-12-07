@extends('site.layout.main-layout')

@section('title', 'United Podcast')

@section('content')
@php
$months = array(
"يناير", "فبراير", "مارس", "إبريل", "مايو", "يونيو",
"يوليو", "أغسطس", "سبتمبر", "أكتوبر", "نوفمبر", "ديسمبر"
);

$days = array(
"الأحد", "الإثنين", "الثلاثاء", "الأربعاء", "الخميس", "الجمعة", "السبت"
);
$channels_hero = App\Models\Channel::where("isInHero", true)->orderBy("isInHero_created_at", 'desc')->get();
@endphp

<div class="swiper mySwiper" style="width: 100vw; padding: 56px 16px;background: #F0F0F0; margin: -24px 0 40px">
    <div class="swiper-wrapper">
        @foreach ($channels_hero as $item)
        <div class="swiper-slide" style="
      width: 320px;
  height: 320px;
  position: relative;
  border-radius: 10px;
  overflow: hidden;
  min-width: 320px;">
            <div class="social" style="  position: absolute;
            top: 16px;
            left: 16px;
            z-index: 3;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8px;">
                <a href="{{$item->spotify_link}}">
                    <svg style="  width: 27px;
                    height: 29px;
                    stroke: white;" xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-brand-spotify" width="20" height="20" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="#0d0d0d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                        <path d="M8 11.973c2.5 -1.473 5.5 -.973 7.5 .527" />
                        <path d="M9 15c1.5 -1 4 -1 5 .5" />
                        <path d="M7 9c2 -1 6 -2 10 .5" />
                    </svg>
                </a>
                <a href="{{$item->youtube_link}}">
                    <svg style="  width: 27px;
                    height: 29px;
                    stroke: white;" xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-brand-youtube" width="20" height="20" viewBox="0 0 24 24"
                        stroke-width="2" stroke="#0d0d0d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M2 8a4 4 0 0 1 4 -4h12a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-12a4 4 0 0 1 -4 -4v-8z" />
                        <path d="M10 9l5 3l-5 3z" />
                    </svg>
                </a>
                <a href="{{$item->anghami_link}}">
                    <svg style="  width: 27px;
                    height: 29px;
                    stroke: white;
                    fill: white;
                    width: 24px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 612 611.29"
                        style="enable-background:new 0 0 612 611.29;" xml:space="preserve">

                        <g>
                            <path class="st0" d="M594.72,568.31c-9.06-1.59-17.78-1.98-25.46-5c-3.27-1.29-6.17-8.08-6.19-12.39
                       c-0.37-79.8,0.49-159.61-0.48-239.4c-1.27-104.04-46.53-183.72-138.65-233C295.31,9.7,136.53,64.96,74.29,196.5
                       c-59.94,126.67-6.44,274.09,114.13,336.5c56.39,29.19,115.94,36.43,177.61,21.42c14.04-3.42,27.09-4.65,41.04-1.01
                       c10.77,2.81,21.92,4.17,33.64,9.13c-13.98,5.91-27.64,12.77-41.99,17.59c-160.45,53.89-332.17-40.4-374.06-205.15
                       C-16.17,214.42,91.11,50.05,254.53,20.58c149.72-27,295.34,66.86,332.3,214.92c5.22,20.91,7.94,42.95,8.17,64.5
                       c0.92,86.02,0.4,172.05,0.38,258.08C595.37,561.11,595,564.13,594.72,568.31z" />
                            <path class="st0" d="M384.24,494.16c0,11.48,1.03,20.78-0.53,29.64c-0.58,3.32-6.78,6.88-11.06,8.14
                       c-44.71,13.17-89.89,14.02-134.19-0.29C149.72,503,94.7,442.54,74.34,351.37C49.4,239.73,118.94,116.97,228.1,82.52
                       c96.71-30.53,182.16-9.66,252.46,64.05c38.28,40.13,59.66,89.4,60.67,145.11c1.55,85.23,0.63,170.5,0.71,255.75
                       c0,2.65-0.59,5.31-1.14,9.99c-9.07-1.57-17.86-2.25-25.95-4.99c-2.58-0.87-4.65-7.2-4.68-11.05c-0.32-46.71-0.21-93.43-0.22-140.14
                       c-0.01-33.09,0.15-66.18-0.06-99.27c-0.6-93.49-71.25-176.94-162.58-196.13C239.34,83.14,126.39,153.99,104.75,271.3
                       c-19.3,104.6,55.27,213.6,159.47,233.73C304.37,512.78,342.84,508.97,384.24,494.16z" />
                            <path class="st0" d="M384.52,434.75c0,12.77,0.75,22.87-0.43,32.73c-0.39,3.22-5.33,6.96-9.02,8.55
                       c-72.58,31.22-163.63,7.4-212.68-55.38c-86.07-110.15-28.08-269.7,109.2-295.97c116.24-22.25,215.67,65.67,218.1,174.2
                       c1.79,80.13,0.39,160.34,0.35,240.51c0,2.63-0.62,5.27-1.18,9.75c-9.63-1.96-18.83-3.15-27.48-6.01c-2.5-0.83-4.77-6.44-4.82-9.89
                       c-0.38-28.41-0.2-56.82-0.21-85.23c-0.01-46.7,0.21-93.41-0.08-140.11c-0.48-77.42-51.53-137.93-127.38-151.47
                       c-70.29-12.55-145.42,34.37-166.54,103.99c-22.9,75.54,14.07,154.5,87.09,184.34c41.03,16.76,82.02,14.76,122.23-3.8
                       C375.13,439.37,378.52,437.66,384.52,434.75z" />
                            <path class="st0" d="M382.42,373.11c0,11.49,1.8,22.98-0.72,33.42c-1.38,5.71-9.33,11.18-15.57,14.14
                       c-44.75,21.25-88.87,20.51-131.05-6.82c-49.16-31.86-70.67-92.32-53.05-147.04c18.09-56.19,69.94-92.98,128.5-91.19
                       c68.16,2.09,123.99,57.6,124.98,126.5c1.07,74.34,0.2,148.7,0.5,223.06c0.04,9.77-3.46,12.17-12.63,10.41
                       c-18.26-3.5-18.28-3.2-18.28-22.16c0-69.68,0.43-139.37-0.19-209.05c-0.5-56.33-47.03-99.87-103.27-97.97
                       c-39.26,1.33-74.14,27.04-88.7,65.39c-13.79,36.31-3.71,78.19,25.53,106.02c28.17,26.81,71.03,34.75,106.23,18.37
                       C357.47,390.25,368.91,381.49,382.42,373.11z" />
                        </g>
                    </svg>
                </a>
            </div>
            <a href="/channel/{{$item->id}}" style="width: 100%;height: 100%">
                <div class="bg"
                    style=" background: rgb(0,0,0);
                background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0, 0, 0, 0.87) 100%);width: 100%;height: 100%;position:absolute; top: 0;left: 0;z-index: 2">
                </div>
                <img style="width: 100%;height: 100%;object-fit: cover;
                  filter: grayscale(100%);
  border-radius: 10px;" src="{{$item->thumbnail_path}}" alt="">
            </a>
            <div class="text"
                style="position: absolute; bottom: 16px;width: calc(100% - 16px); right: 16px; z-index: 3; color: #fff;font-weight: 700;">
                <h4 style="font-size: 16px">{{ $item->broadcaster }}</h4>
                <h2
                    style="font-weight: 700; font-size: 20px;display: block !important;overflow: hidden !important;text-overflow:ellipsis; width: calc(100% - 16px);white-space: nowrap; line-height: 28px">
                    {{ $item->title }}</h2>
            </div>
        </div>
        @endforeach
    </div>
</div>

@php
$latestthreearticles = App\Models\Article::where('type', 'article')->latest()->take(3)->get();
$mostViewsArticles = App\Models\Article::where('type', 'article')->orderBy("views", "desc")->latest()->take(15)->get();
$latest_podcast = App\Models\Article::where('type', 'podcast')->latest()->take(15)->get();
$latest_programs = App\Models\Channel::where('type', 'podcast')->latest()->take(6)->get();
@endphp

<div class="container flex-1 h-full" id="home_wrapper">
    <main class="ant-layout-content css-t2ij9r">
        <div style="padding-bottom:34px;min-height:380px">
            <div class="ant-space css-t2ij9r ant-space-vertical ant-space-rtl w-full"
                style="column-gap:40px;row-gap:40px">

                <div class="ant-space-item" v-if="latest_articles && latest_articles.length > 0" style="display: none"
                    :style='latest_articles && latest_articles.length > 0 ? "display: block" : "display: none"'><!--$-->
                    <div class="ant-space css-t2ij9r ant-space-vertical ant-space-rtl w-full"
                        style="column-gap:40px;row-gap:40px">
                        <div class="ant-space-item">
                            <div
                                class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center ant-space-gap-row-small ant-space-gap-col-small w-full justify-between -mb-2 ">
                                <div class="ant-space-item">
                                    <div
                                        class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center ant-space-gap-row-small ant-space-gap-col-small w-full">
                                        <div class="ant-space-item"><svg width="27" height="26" viewBox="0 0 27 26"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.95732 2.68696C5.10032 2.68696 4.40132 3.39296 4.40132 4.25996C4.40132 5.12796 5.10032 5.83296 5.95732 5.83296C6.81532 5.83296 7.51532 5.12796 7.51532 4.25996C7.51532 3.39296 6.81532 2.68696 5.95732 2.68696ZM5.95732 8.45696C3.65232 8.45696 1.77832 6.57497 1.77832 4.25996C1.77832 1.94597 3.65232 0.0639648 5.95732 0.0639648C8.26332 0.0639648 10.1383 1.94597 10.1383 4.25996C10.1383 6.57497 8.26332 8.45696 5.95732 8.45696Z"
                                                    fill="black"></path>
                                                <path
                                                    d="M3.27046 23.3137H8.64646V14.3427C8.64646 12.8617 7.44046 11.6557 5.95846 11.6557C4.47646 11.6557 3.27046 12.8617 3.27046 14.3427V23.3137ZM11.2695 25.9367H0.647461V14.3427C0.647461 11.4147 3.03046 9.03271 5.95846 9.03271C8.88746 9.03271 11.2695 11.4147 11.2695 14.3427V25.9367Z"
                                                    fill="black"></path>
                                                <path
                                                    d="M19.677 2.68696C18.82 2.68696 18.121 3.39296 18.121 4.25996C18.121 5.12796 18.82 5.83296 19.677 5.83296C20.535 5.83296 21.235 5.12796 21.235 4.25996C21.235 3.39296 20.535 2.68696 19.677 2.68696ZM19.677 8.45696C17.372 8.45696 15.498 6.57497 15.498 4.25996C15.498 1.94597 17.372 0.0639648 19.677 0.0639648C21.983 0.0639648 23.858 1.94597 23.858 4.25996C23.858 6.57497 21.983 8.45696 19.677 8.45696Z"
                                                    fill="black"></path>
                                                <path
                                                    d="M16.5128 23.3137H23.5958L20.6978 12.2967C20.6368 11.9247 20.3178 11.6557 19.9418 11.6557C19.5618 11.6557 19.2358 11.9387 19.1818 12.3127L19.1578 12.4337L16.5128 23.3137ZM26.9998 25.9367H13.1748L16.5958 11.8687C16.8658 10.2467 18.2908 9.03271 19.9418 9.03271C21.5848 9.03271 22.9758 10.1937 23.2748 11.8007L26.9998 25.9367Z"
                                                    fill="black"></path>
                                            </svg></div>
                                        <div class="ant-space-item">
                                            <h3 class="ant-typography ant-typography-rtl !mb-0 css-t2ij9r">
                                                المقالات الجديدة</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="latest_programs_wrapper tttt" style="display: grid; !important">
                            @foreach ($latestthreearticles as $item)
                            <a href="/post/{{$item->id}}" class="card">
                                <div class="img"><img src="{{$item->thumbnail_path}}" alt="{{$item->title}}"></div>
                                <div class="text">
                                    <h2>{{ $item->title }}</h2>
                                    <p>{!!$item->intro !!}</p>
                                    <div class="date">
                                        <span>{{ $item->author->name }}</span>
                                        |
                                        <span>
                                            {{ date('d', strtotime($item->created_at)) }}
                                            {{ ["يناير", "فبراير", "مارس", "إبريل", "مايو", "يونيو",
                                            "يوليو", "أغسطس", "سبتمبر", "أكتوبر", "نوفمبر", "ديسمبر"]
                                            [date('m', strtotime($item->created_at)) - 1] }}
                                            {{ date('Y', strtotime($item->created_at)) }}
                                        </span>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>

                        <div class="most_views_wrapper">
                            <div class="head">
                                <h2>الأكثر قراءة</h2>
                            </div>
                            <div class="swiper mostViewsSwipr">
                                <div class="swiper-wrapper">
                                    @foreach ($mostViewsArticles as $item)
                                    <div class="swiper-slide">
                                        <a href="/post/{{$item->id}}" class="img"><img src="{{$item->thumbnail_path}}"
                                                alt="{{$item->title}}">
                                        </a>
                                        <div class="text">
                                            <a href="/post/{{$item->id}}" class="title">{{ $item->title }}</a>
                                            <div class="date">
                                                <a href="/author/{{$item->author->id}}" class="author_name">{{
                                                    $item->author->name }}</a>
                                                |
                                                <span>
                                                    {{ date('d', strtotime($item->created_at)) }}
                                                    {{ ["يناير", "فبراير", "مارس", "إبريل", "مايو", "يونيو",
                                                    "يوليو", "أغسطس", "سبتمبر", "أكتوبر", "نوفمبر", "ديسمبر"]
                                                    [date('m', strtotime($item->created_at)) - 1] }}
                                                    {{ date('Y', strtotime($item->created_at)) }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="swiper-button-next">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-circle-chevron-right" width="20" height="20"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="#040488" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M11 9l3 3l-3 3" />
                                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0z" />
                                    </svg>
                                </div>
                                <div class="swiper-button-prev">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-circle-chevron-left" width="20" height="20"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="#040488" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M13 15l-3 -3l3 -3" />
                                        <path d="M21 12a9 9 0 1 0 -18 0a9 9 0 0 0 18 0z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div><!--/$-->
                </div>


            </div>
            <script
                type="application/ld+json">{"@context":"https://schema.org","@graph":[{"@type":"Organization","@id":"https://thmanyah.com/#organization","name":"United Podcast","url":"https://thmanyah.com/","sameAs":["https://www.facebook.com/Thmanyah","https://www.instagram.com/thmanyah/","https://www.linkedin.com/company/thmanyah","https://www.youtube.com/channel/UCQPalfEYxVLs8nEB4LutApQ","https://twitter.com/thmanyah"]},{"@type":"WebSite","@id":"https://thmanyah.com/#website","url":"https://thmanyah.com/","name":"United Podcast","description":"نصنع الوثائقيات وننشر المقالات ونصدح عبر البودكاست، لنغيّر ثقافة الصحافة العربية.","publisher":{"@id":"https://thmanyah.com/#organization"},"potentialAction":[{"@type":"SearchAction","target":"https://thmanyah.com/search/?q={search_term_string}","query-input":"required name=search_term_string"}],"inLanguage":"ar"}]}</script>
        </div>
    </main>

</div>
@if ($latest_podcast->count() > 0 && $latest_programs->count() > 0)
<div class="latest_programs_wrapper_2">
    <div class="most_views_wrapper container">
        <div class="head">
            <h2>
                <div class="ant-space-item">
                    <div
                        class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center ant-space-gap-row-small ant-space-gap-col-small w-full justify-between -mb-2">
                        <div class="ant-space-item">
                            <div
                                class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center ant-space-gap-row-small ant-space-gap-col-small w-full">
                                <div class="ant-space-item"><svg width="23" height="30" viewBox="0 0 23 30" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.931 14.8096V18.0246C19.931 22.6506 16.167 26.4146 11.541 26.4146C6.91403 26.4146 3.15103 22.6506 3.15103 18.0246V14.9026H0.0820312V18.0246C0.0820312 24.3436 5.22203 29.4836 11.541 29.4836C17.86 29.4836 23 24.3436 23 18.0246V14.8096H19.931Z"
                                            fill="black"></path>
                                        <path
                                            d="M11.614 21.3696C9.33704 21.3696 7.48304 19.0776 7.48304 16.2606H4.41504C4.41504 20.7686 7.64404 24.4366 11.614 24.4366C15.586 24.4366 18.815 20.7686 18.815 16.2606V8.6956C18.815 4.1846 15.586 0.516602 11.614 0.516602C7.64404 0.516602 4.41504 4.1846 4.41504 8.7026L4.44404 15.0846L10.08 15.0956L10.086 12.0256L7.49804 12.0206L7.48304 8.6956C7.48304 5.8786 9.33704 3.5866 11.614 3.5866C13.893 3.5866 15.747 5.8786 15.747 8.6956V16.2606C15.747 19.0776 13.893 21.3696 11.614 21.3696Z"
                                            fill="black"></path>
                                    </svg></div>
                                <div class="ant-space-item">
                                    <h3 class="ant-typography ant-typography-rtl !mb-0 css-t2ij9r"> الحلقات الجديدة</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </h2>
        </div>
        <div class="swiper mostViewsSwipr">
            <div class="swiper-wrapper">
                @foreach ($latest_podcast as $item)
                <div class="swiper-slide">
                    <a href="/post/{{$item->id}}" class="img"><img src="{{$item->thumbnail_path}}"
                            alt="{{$item->title}}">
                    </a>
                    <div class="text">
                        <a href="/post/{{$item->id}}" class="title">{{ $item->title }}</a>
                        <div class="date">
                            <a href="/author/{{$item->author->id}}" class="author_name">{{ $item->author->name }}</a>
                            |
                            <span>
                                {{ date('d', strtotime($item->created_at)) }}
                                {{ ["يناير", "فبراير", "مارس", "إبريل", "مايو", "يونيو",
                                "يوليو", "أغسطس", "سبتمبر", "أكتوبر", "نوفمبر", "ديسمبر"]
                                [date('m', strtotime($item->created_at)) - 1] }}
                                {{ date('Y', strtotime($item->created_at)) }}
                            </span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-button-next">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-chevron-right"
                    width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#040488" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M11 9l3 3l-3 3" />
                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0z" />
                </svg>
            </div>
            <div class="swiper-button-prev">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-chevron-left"
                    width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#040488" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M13 15l-3 -3l3 -3" />
                    <path d="M21 12a9 9 0 1 0 -18 0a9 9 0 0 0 18 0z" />
                </svg>
            </div>
        </div>
    </div>
</div>
@endif

@php
$allPodcasts = App\Models\Channel::where("type", "podcast")->get();
@endphp
@if ($allPodcasts->count() > 0)
<div class="all_programs_wrapper container">
    <div class="ant-space-item" id="our_programs">
        <div
            class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center ant-space-gap-row-small ant-space-gap-col-small w-full justify-between -mb-2">
            <div class="ant-space-item">
                <div
                    class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center ant-space-gap-row-small ant-space-gap-col-small w-full">
                    <div class="ant-space-item">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-brand-google-podcasts" width="33" height="33"
                            viewBox="0 0 24 24" stroke-width="2.5" stroke="#000" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 3v2"></path>
                            <path d="M12 19v2"></path>
                            <path d="M12 8v8"></path>
                            <path d="M8 17v2"></path>
                            <path d="M4 11v2"></path>
                            <path d="M20 11v2"></path>
                            <path d="M8 5v8"></path>
                            <path d="M16 7v-2"></path>
                            <path d="M16 19v-8"></path>
                        </svg>
                    </div>
                    <div class="ant-space-item">
                        <h3 class="ant-typography ant-typography-rtl !mb-0 css-t2ij9r"> البرامج</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="all_programs_container" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));gap: 16px;margin-bottom: 2rem">
        @foreach ($allPodcasts as $item)
        <div style="
      width: 100%;
  height: 280px;
  position: relative;
  border-radius: 10px;
  overflow: hidden;
  min-width: 100%;">
            <div class="social" style="  position: absolute;
            top: 16px;
            left: 16px;
            z-index: 3;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8px;">
                <a href="{{$item->spotify_link}}">
                    <svg style="  width: 27px;
                    height: 29px;
                    stroke: white;" xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-brand-spotify" width="20" height="20" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="#0d0d0d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                        <path d="M8 11.973c2.5 -1.473 5.5 -.973 7.5 .527" />
                        <path d="M9 15c1.5 -1 4 -1 5 .5" />
                        <path d="M7 9c2 -1 6 -2 10 .5" />
                    </svg>
                </a>
                <a href="{{$item->youtube_link}}">
                    <svg style="  width: 27px;
                    height: 29px;
                    stroke: white;" xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-brand-youtube" width="20" height="20" viewBox="0 0 24 24"
                        stroke-width="2" stroke="#0d0d0d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M2 8a4 4 0 0 1 4 -4h12a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-12a4 4 0 0 1 -4 -4v-8z" />
                        <path d="M10 9l5 3l-5 3z" />
                    </svg>
                </a>
                <a href="{{$item->anghami_link}}">
                    <svg style="  width: 27px;
                    height: 29px;
                    stroke: white;
                    fill: white;
                    width: 24px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 612 611.29"
                        style="enable-background:new 0 0 612 611.29;" xml:space="preserve">

                        <g>
                            <path class="st0" d="M594.72,568.31c-9.06-1.59-17.78-1.98-25.46-5c-3.27-1.29-6.17-8.08-6.19-12.39
                       c-0.37-79.8,0.49-159.61-0.48-239.4c-1.27-104.04-46.53-183.72-138.65-233C295.31,9.7,136.53,64.96,74.29,196.5
                       c-59.94,126.67-6.44,274.09,114.13,336.5c56.39,29.19,115.94,36.43,177.61,21.42c14.04-3.42,27.09-4.65,41.04-1.01
                       c10.77,2.81,21.92,4.17,33.64,9.13c-13.98,5.91-27.64,12.77-41.99,17.59c-160.45,53.89-332.17-40.4-374.06-205.15
                       C-16.17,214.42,91.11,50.05,254.53,20.58c149.72-27,295.34,66.86,332.3,214.92c5.22,20.91,7.94,42.95,8.17,64.5
                       c0.92,86.02,0.4,172.05,0.38,258.08C595.37,561.11,595,564.13,594.72,568.31z" />
                            <path class="st0" d="M384.24,494.16c0,11.48,1.03,20.78-0.53,29.64c-0.58,3.32-6.78,6.88-11.06,8.14
                       c-44.71,13.17-89.89,14.02-134.19-0.29C149.72,503,94.7,442.54,74.34,351.37C49.4,239.73,118.94,116.97,228.1,82.52
                       c96.71-30.53,182.16-9.66,252.46,64.05c38.28,40.13,59.66,89.4,60.67,145.11c1.55,85.23,0.63,170.5,0.71,255.75
                       c0,2.65-0.59,5.31-1.14,9.99c-9.07-1.57-17.86-2.25-25.95-4.99c-2.58-0.87-4.65-7.2-4.68-11.05c-0.32-46.71-0.21-93.43-0.22-140.14
                       c-0.01-33.09,0.15-66.18-0.06-99.27c-0.6-93.49-71.25-176.94-162.58-196.13C239.34,83.14,126.39,153.99,104.75,271.3
                       c-19.3,104.6,55.27,213.6,159.47,233.73C304.37,512.78,342.84,508.97,384.24,494.16z" />
                            <path class="st0" d="M384.52,434.75c0,12.77,0.75,22.87-0.43,32.73c-0.39,3.22-5.33,6.96-9.02,8.55
                       c-72.58,31.22-163.63,7.4-212.68-55.38c-86.07-110.15-28.08-269.7,109.2-295.97c116.24-22.25,215.67,65.67,218.1,174.2
                       c1.79,80.13,0.39,160.34,0.35,240.51c0,2.63-0.62,5.27-1.18,9.75c-9.63-1.96-18.83-3.15-27.48-6.01c-2.5-0.83-4.77-6.44-4.82-9.89
                       c-0.38-28.41-0.2-56.82-0.21-85.23c-0.01-46.7,0.21-93.41-0.08-140.11c-0.48-77.42-51.53-137.93-127.38-151.47
                       c-70.29-12.55-145.42,34.37-166.54,103.99c-22.9,75.54,14.07,154.5,87.09,184.34c41.03,16.76,82.02,14.76,122.23-3.8
                       C375.13,439.37,378.52,437.66,384.52,434.75z" />
                            <path class="st0" d="M382.42,373.11c0,11.49,1.8,22.98-0.72,33.42c-1.38,5.71-9.33,11.18-15.57,14.14
                       c-44.75,21.25-88.87,20.51-131.05-6.82c-49.16-31.86-70.67-92.32-53.05-147.04c18.09-56.19,69.94-92.98,128.5-91.19
                       c68.16,2.09,123.99,57.6,124.98,126.5c1.07,74.34,0.2,148.7,0.5,223.06c0.04,9.77-3.46,12.17-12.63,10.41
                       c-18.26-3.5-18.28-3.2-18.28-22.16c0-69.68,0.43-139.37-0.19-209.05c-0.5-56.33-47.03-99.87-103.27-97.97
                       c-39.26,1.33-74.14,27.04-88.7,65.39c-13.79,36.31-3.71,78.19,25.53,106.02c28.17,26.81,71.03,34.75,106.23,18.37
                       C357.47,390.25,368.91,381.49,382.42,373.11z" />
                        </g>
                    </svg>
                </a>
            </div>
            <a href="/channel/{{$item->id}}" style="width: 100%;height: 100%">
                <div class="bg"
                    style=" background: rgb(0,0,0);
                background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0, 0, 0, 0.87) 100%);width: 100%;height: 100%;position:absolute; top: 0;left: 0;z-index: 2">
                </div>
                <img style="width: 100%;height: 100%;object-fit: cover;object-position: top;
                  filter: grayscale(100%);
  border-radius: 10px;" src="{{$item->thumbnail_path}}" alt="">
            </a>
            <div class="text"
                style="position: absolute; bottom: 16px;width: calc(100% - 16px); right: 16px; z-index: 3; color: #fff;font-weight: 700;">
                <h4 style="font-size: 16px">{{ $item->broadcaster }}</h4>
                <h2
                    style="font-weight: 700; font-size: 20px;display: block !important;overflow: hidden !important;text-overflow:ellipsis; width: calc(100% - 16px);white-space: nowrap; line-height: 28px">
                    {{ $item->title }}</h2>
            </div>
        </div>

        @endforeach
    </div>
</div>
@endif
@endsection

@section('scripts')
<script>
    const { createApp, ref } = Vue

    createApp({
        data() {
            return {
                latest_articles: null,
                latest_podcasts: null,
                channels: [],
                num: 10,
            }
        },
        methods: {
            async getArticles(num) {
                try {
                    const response = await axios.post(`{{ route('articles.latest') }}`, {
                        num: num,
                        type: "article",
                    },
                    );
                    if (response.data.status === true) {
                        this.latest_articles = response.data.data.articles
                        this.latest_podcasts = response.data.data.poscasts
                        this.channels = response.data.data.programs
                        this.isMore = response.data.data.isMore
                    } else {
                        document.getElementById('errors').innerHTML = ''
                        $.each(response.data.errors, function (key, value) {
                            let error = document.createElement('div')
                            error.classList = 'error'
                            error.innerHTML = value
                            document.getElementById('errors').append(error)
                        });
                        $('#errors').fadeIn('slow')
                        setTimeout(() => {
                            $('input').css('outline', 'none')
                            $('#errors').fadeOut('slow')
                        }, 5000);
                    }

                } catch (error) {
                    document.getElementById('errors').innerHTML = ''
                    let err = document.createElement('div')
                    err.classList = 'error'
                    err.innerHTML = 'server error try again later'
                    document.getElementById('errors').append(err)
                    $('#errors').fadeIn('slow')
                    $('.loader').fadeOut()
                    this.languages_data = false
                    setTimeout(() => {
                        $('#errors').fadeOut('slow')
                    }, 3500);

                    console.error(error);
                }
            },
            handleScroll() {
                // Check if the user has scrolled to the bottom of the page
                if (window.innerHeight + window.scrollY >= document.body.offsetHeight) {
                    if (this.isMore) {
                        $("#load-more-button .dots").fadeIn().css('diplay', 'flex')
                        this.getArticles(this.num + 2).then(() => {
                            $("#load-more-button").fadeOut()
                        })
                    }
                }
            },
        },
        created() {
            this.getArticles().then(() => {
                $('.loader').fadeOut()
                setLatestSwipper()
            })
            window.addEventListener('scroll', this.handleScroll);
        },
        destroyed() {
            // Remove the scroll event listener when the component is destroyed to prevent memory leaks
            window.removeEventListener('scroll', this.handleScroll);
        },
    }).mount('#home_wrapper')
</script>
@endsection
