@extends('site.layout.main-layout')

@section('title', 'United Podcast')

@section('content')
<div class="ant-layout-header border-0 mb-10 sm:hidden block lg:py-7 pt-8 md:mb-0 mb-10 hidden">
    <ul class="ant-menu-overflow ant-menu ant-menu-root ant-menu-horizontal ant-menu-light justify-center items-center sm:hidden flex li-h-full  ant-menu-rtl css-t2ij9r"
        style="width:100%" dir="rtl" role="menu" tabindex="0" data-menu-list="true">
        <li class="ant-menu-overflow-item ant-menu-overflow-item-rest ant-menu-submenu ant-menu-submenu-horizontal"
            style="opacity:0;height:0;overflow-y:hidden;order:9007199254740991;pointer-events:none;position:absolute"
            aria-hidden="true" role="none">
            <div role="menuitem" class="ant-menu-submenu-title" tabindex="-1" aria-expanded="false"
                aria-haspopup="true" data-menu-id="rc-menu-uuid-70638-2-rc-menu-more"
                aria-controls="rc-menu-uuid-70638-2-rc-menu-more-popup"><span role="img" aria-label="ellipsis"
                    class="anticon anticon-ellipsis"><svg viewBox="64 64 896 896" focusable="false"
                        data-icon="ellipsis" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                        <path
                            d="M176 511a56 56 0 10112 0 56 56 0 10-112 0zm280 0a56 56 0 10112 0 56 56 0 10-112 0zm280 0a56 56 0 10112 0 56 56 0 10-112 0z">
                        </path>
                    </svg></span><i class="ant-menu-submenu-arrow"></i></div>
        </li>
    </ul>
    <div style="display:none" aria-hidden="true"></div>
</div>
<div class="container flex-1 h-full">
    <main class="ant-layout-content css-t2ij9r">
        <div style="padding-bottom:34px;min-height:380px">
            <div class="ant-space css-t2ij9r ant-space-vertical ant-space-rtl w-full"
                style="column-gap:40px;row-gap:40px">
                @php
                    $latest_articles = App\Models\Article::latest()->take(3)->get();
                @endphp
                @if ($latest_articles->count() > 0)
                    <div class="ant-space-item">
                        <div>
                            <div class="ant-row ant-row-rtl css-t2ij9r"
                            style="margin-left:-8px;margin-right:-8px;row-gap:32px">
                                @foreach ($latest_articles as $index => $article)
                                    @if($index == 0)
                                        <div style="padding-left:8px;padding-right:8px"
                                            class="ant-col ant-col-24 ant-col-rtl css-t2ij9r">
                                            <article class="relative">
                                                <div class="ant-row ant-row-middle ant-row-rtl css-t2ij9r"
                                                    style="margin-left:-8px;margin-right:-8px;row-gap:16px">
                                                    <div style="padding-left:8px;padding-right:8px"
                                                        class="ant-col ant-col-xs-24 ant-col-rtl ant-col-md-12 ant-col-xl-12 css-t2ij9r">
                                                        <a href="/post/1jqpbkfn92_1jhggnmybp"><img
                                                                alt="{{ $article->title }}" loading="eager"
                                                                decoding="async" data-nimg="1"
                                                                class="rounded-lg max-w-full h-auto aspect-[572.5/291]"
                                                                style="color:transparent;object-fit:cover"
                                                                src="{{ $article->thumbnail_path }}"
                                                                width="600" height="300"></a></div>
                                                    <div style="padding-left:8px;padding-right:8px"
                                                        class="ant-col ant-col-xs-24 ant-col-rtl ant-col-md-12 ant-col-xl-12 css-t2ij9r">
                                                        <div class="ant-space css-t2ij9r ant-space-vertical ant-space-rtl">
                                                            <div class="ant-space-item"><a
                                                                    href="/post/1jqpbkfn92_1jhggnmybp">
                                                                    <h4 class="ant-typography ant-typography-rtl ant-typography-ellipsis ant-typography-ellipsis-multiple-line  !text-[24px] mb-3 leading-[35px] css-t2ij9r"
                                                                        style="-webkit-line-clamp: 2;">{{ $article->title }}</h4>
                                                                    <div
                                                                        class="ant-typography ant-typography-rtl  text-lg line-clamp-3 mb-3 css-t2ij9r">
                                                                            {{ $article->intro }}
                                                                        </div>
                                                                </a></div>
                                                            <div class="ant-space-item">
                                                                <div class="mb-3">
                                                                    <div class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center w-full"
                                                                        style="column-gap:16px;row-gap:16px">
                                                                        <div class="ant-space-item last-of-type:flex-1 "><a
                                                                                class="font-bold"
                                                                                href="/author/1jmjjmmp0b"><span
                                                                                    class="flex items-center gap-2 font-bold undefined">
                                                                                        @if ($article->author->profile_path)
                                                                                        <img alt="" loading="lazy" decoding="async" data-nimg="1" class="rounded-full" style="color: transparent;" src="{{ $article->author->profile_path }}" width="18" height="18">
                                                                                        @endif
                                                                                        {{ $article->author->name }}
                                                                                    </span></a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="text-sm mb-2"><span>في<!-- --> <a
                                                                    class="text-black font-bold" href="/p/namat">{{ $article->channel->title }}</a><span
                                                                class="ant-typography ant-typography-rtl text-colorTextSecondary sm:text-sm text-xs css-t2ij9r"
                                                                title="16 ديسمبر 2023"><i
                                                                    class="inline-block h-1 w-1 rounded-full bg-[#B2B2B2] mx-1 align-middle"></i>16
                                                                ديسمبر 2023</span></div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    @else
                                        <div style="padding-left:8px;padding-right:8px" class="ant-col 
                                        
                                        
                                            ant-col-xs-24 ant-col-rtl ant-col-sm-24 ant-col-md-24 ant-col-lg-12 css-t2ij9r">
                                            <article class="relative">
                                                <div class="ant-row ant-row-top ant-row-rtl css-t2ij9r"
                                                    style="margin-left:-8px;margin-right:-8px;row-gap:16px">
                                                    <div style="padding-left:8px;padding-right:8px"
                                                        class="ant-col ant-col-xs-8 ant-col-rtl ant-col-md-7 ant-col-xl-8 css-t2ij9r">
                                                        <a href="/post/1jqkb7mmtd_1jhggnmybp"><img
                                                                alt="{{ $article->title }}" loading="lazy"
                                                                decoding="async" data-nimg="1"
                                                                class="rounded-lg max-w-full h-auto aspect-[180/150]"
                                                                style="color:transparent;object-fit:cover"
                                                                src="{{ $article->thumbnail_path }}"
                                                                width="600" height="300"></a></div>
                                                    <div style="padding-left:8px;padding-right:8px"
                                                        class="ant-col ant-col-xs-16 ant-col-rtl ant-col-md-17 ant-col-xl-16 css-t2ij9r">
                                                        <div class="ant-space css-t2ij9r ant-space-vertical ant-space-rtl">
                                                            <div class="ant-space-item"><a
                                                                    href="/post/1jqkb7mmtd_1jhggnmybp">
                                                                    <h4 class="ant-typography ant-typography-rtl ant-typography-ellipsis ant-typography-ellipsis-multiple-line  !text-[18px] mb-2 leading-[30px] css-t2ij9r"
                                                                        style="-webkit-line-clamp: 2;">{{ $article->title }}</h4>
                                                                    <div
                                                                        class="ant-typography ant-typography-rtl  text-sm line-clamp-1 lg:line-clamp-2 mb-2 css-t2ij9r">
                                                                        {{ $article->intro }}</div>
                                                                </a></div>
                                                            <div class="ant-space-item">
                                                                <div class=" mb-2">
                                                                    <div class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center w-full"
                                                                        style="column-gap:16px;row-gap:16px">
                                                                        <div class="ant-space-item last-of-type:flex-1 "><a
                                                                                class="font-bold text-sm"
                                                                                href="/author/hsnali"><span
                                                                                    class="flex items-center gap-2 font-bold undefined">
                                                                                    @if ($article->author->profile_path)
                                                                                    <img alt="" loading="lazy" decoding="async" data-nimg="1" class="rounded-full" style="color: transparent;" src="{{ $article->author->profile_path }}" width="18" height="18">
                                                                                    @endif
                                                                                    {{ $article->author->name }}
                                                                                </span>
                                                                                </a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="text-sm mb-2"><span>في<!-- --> <a
                                                                    class="text-black font-bold" href="/p/aha">{{ $article->channel->title }}</a>
                                                                <span
                                                                class="ant-typography ant-typography-rtl text-colorTextSecondary sm:text-sm text-xs css-t2ij9r"
                                                                title="14 ديسمبر 2023"><i
                                                                    class="inline-block h-1 w-1 rounded-full bg-[#B2B2B2] mx-1 align-middle"></i>14
                                                                ديسمبر 2023</span></div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
                <div class="ant-space-item">
                    <div class="ant-divider css-t2ij9r ant-divider-horizontal ant-divider-rtl  m-0"
                        role="separator"></div>
                </div>

                @php
                    $latest_podcast = App\Models\Article::where('type', 'podcast')->latest()->take(2)->get();
                    $latest_programs = App\Models\Channel::where('type', 'podcast')->latest()->take(6)->get();
                @endphp
                @if ($latest_podcast->count() > 0 && $latest_programs->count() > 0)
                    <div class="ant-space-item">
                        <div class="ant-space css-t2ij9r ant-space-vertical ant-space-rtl w-full"
                            style="gap: 40px;">
                            <div class="ant-space-item">
                                <div
                                    class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center ant-space-gap-row-small ant-space-gap-col-small w-full justify-between -mb-2 ">
                                    <div class="ant-space-item">
                                        <div
                                            class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center ant-space-gap-row-small ant-space-gap-col-small w-full">
                                            <div class="ant-space-item"><svg width="23" height="30"
                                                    viewBox="0 0 23 30" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M19.931 14.8096V18.0246C19.931 22.6506 16.167 26.4146 11.541 26.4146C6.91403 26.4146 3.15103 22.6506 3.15103 18.0246V14.9026H0.0820312V18.0246C0.0820312 24.3436 5.22203 29.4836 11.541 29.4836C17.86 29.4836 23 24.3436 23 18.0246V14.8096H19.931Z"
                                                        fill="black"></path>
                                                    <path
                                                        d="M11.614 21.3696C9.33704 21.3696 7.48304 19.0776 7.48304 16.2606H4.41504C4.41504 20.7686 7.64404 24.4366 11.614 24.4366C15.586 24.4366 18.815 20.7686 18.815 16.2606V8.6956C18.815 4.1846 15.586 0.516602 11.614 0.516602C7.64404 0.516602 4.41504 4.1846 4.41504 8.7026L4.44404 15.0846L10.08 15.0956L10.086 12.0256L7.49804 12.0206L7.48304 8.6956C7.48304 5.8786 9.33704 3.5866 11.614 3.5866C13.893 3.5866 15.747 5.8786 15.747 8.6956V16.2606C15.747 19.0776 13.893 21.3696 11.614 21.3696Z"
                                                        fill="black"></path>
                                                </svg></div>
                                            <div class="ant-space-item">
                                                <h3 class="ant-typography ant-typography-rtl !mb-0 css-t2ij9r">
                                                    الحلقات الجديدة</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ant-space-item">
                                <div class="ant-row ant-row-rtl css-t2ij9r" style="margin-left: -8px; margin-right: -8px; row-gap: 24px;">
                                    @if ($latest_podcast->count() > 0)
                                        <div style="padding-left: 8px; padding-right: 8px;"
                                            class="ant-col ant-col-xs-24 ant-col-rtl ant-col-sm-12 ant-col-md-14 ant-col-lg-12 ant-col-xl-12 css-t2ij9r">
                                            <div class="flex justify-center items-start h-full w-full">
                                                <div>
                                                    <div class="ant-row ant-row-rtl css-t2ij9r"
                                                        style="margin-left: -8px; margin-right: -8px; row-gap: 32px;">
                                                        @foreach ($latest_podcast as $podcast)
                                                            <div style="padding-left: 8px; padding-right: 8px;" class="ant-col 
                                                                    
                                                                    
                                                                        ant-col-xs-24 ant-col-rtl ant-col-sm-24 ant-col-md-24 ant-col-lg-24 css-t2ij9r">
                                                                <article class="relative">
                                                                    <div class="ant-row ant-row-top ant-row-rtl css-t2ij9r"
                                                                        style="margin-left: -8px; margin-right: -8px; row-gap: 16px;">
                                                                        <div style="padding-left: 8px; padding-right: 8px;"
                                                                            class="ant-col ant-col-xs-8 ant-col-rtl ant-col-md-7 ant-col-xl-8 css-t2ij9r">
                                                                            <a href="/post/1jqm16xpw3_1jhggnmybp"><img alt="{{$podcast->title}}"
                                                                                    loading="lazy" decoding="async" data-nimg="1"
                                                                                    class="rounded-lg max-w-full h-auto aspect-[180/150]"
                                                                                    style="color: transparent; object-fit: cover;"
                                                                                    src="{{$podcast->thumbnail_path}}"
                                                                                    width="600" height="300"></a>
                                                                        </div>
                                                                        <div style="padding-left: 8px; padding-right: 8px;"
                                                                            class="ant-col ant-col-xs-16 ant-col-rtl ant-col-md-17 ant-col-xl-16 css-t2ij9r">
                                                                            <div class="ant-space css-t2ij9r ant-space-vertical ant-space-rtl">
                                                                                <div class="ant-space-item"><a href="/post/1jqm16xpw3_1jhggnmybp">
                                                                                        <h4 class="ant-typography ant-typography-rtl ant-typography-ellipsis ant-typography-ellipsis-multiple-line  !text-[18px] mb-2 leading-[30px] css-t2ij9r"
                                                                                            style="-webkit-line-clamp: 2;">
                                                                                            {{$podcast->title}}</h4>
                                                                                        <div
                                                                                            class="ant-typography ant-typography-rtl  text-sm line-clamp-1 lg:line-clamp-2 mb-2 css-t2ij9r">
                                                                                            {{$podcast->info}}</div>
                                                                                    </a></div>
                                                                                <div class="ant-space-item">
                                                                                    <div class=" mb-2">
                                                                                        <div class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center w-full"
                                                                                            style="gap: 16px;">
                                                                                            <div class="ant-space-item last-of-type:flex-1 ">
                                                                                                <a class="font-bold text-sm" href="/author/alnajjar"><span
                                                                                                        class="flex items-center gap-2 font-bold undefined">{{$podcast->author->name}}</span></a>
                                                                                            </div>
                                                                                            <div class="ant-space-item last-of-type:flex-1 ">
                                                                                                <span
                                                                                                    class="ant-typography ant-typography-rtl text-colorTextSecondary sm:text-sm text-xs css-t2ij9r"><i
                                                                                                        class="inline-block h-1 w-1 rounded-full bg-[#B2B2B2] me-1 -ms-3 align-middle"></i>14
                                                                                                    ديسمبر 2023</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div><span
                                                                        class="flex items-center justify-center text-white bg-black/25 w-6 h-6 rounded-full absolute top-1 right-1"><svg
                                                                            class="w-3 h-3" width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M15 13.3912V8.52163C15 4.48756 11.866 1.21729 8 1.21729C4.13401 1.21729 1 4.48756 1 8.52163V13.3912M2.94444 15.826H1V12.1738C1 11.0532 1 10.3477 1 10.3477H4.9375V15.826H2.94444ZM15 15.826H11.1111V12.1738C11.1111 11.6459 11.1111 10.1448 11.1111 10.1448H15C15 10.1448 15 11.0532 15 12.1738V13.797C15 14.9176 15 15.826 15 15.826Z"
                                                                                stroke="currentColor" stroke-width="2" stroke-linecap="square"></path>
                                                                        </svg></span>
                                                                </article>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if ($latest_programs->count() > 0)
                                        <div style="padding-left: 8px; padding-right: 8px;"
                                            class="ant-col ant-col-xs-24 ant-col-rtl ant-col-sm-12 ant-col-md-10 ant-col-lg-12 ant-col-xl-12 css-t2ij9r">
                                            <div class="ant-row ant-row-rtl css-t2ij9r" style="margin-left: -8px; margin-right: -8px; row-gap: 16px;">
                                                @foreach ($latest_programs as $program)
                                                    <div style="padding-left: 8px; padding-right: 8px;"
                                                        class="ant-col ant-col-xs-12 ant-col-rtl ant-col-sm-12 ant-col-md-12 ant-col-lg-8 ant-col-xl-8 css-t2ij9r">
                                                        <div class="relative rounded-lg  shadow-custom "><a href="/p/morabbaa"><img alt="مربع"
                                                                    loading="lazy" decoding="async" data-nimg="1"
                                                                    class="w-full h-auto aspect-square bg-colorFillContentHover rounded-lg object-cover"
                                                                    style="color: transparent;"
                                                                    src="{{$program->thumbnail_path}}"
                                                                    width="200" height="200"></a></div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="ant-space-item">
                                <div class="ant-divider css-t2ij9r ant-divider-horizontal ant-divider-rtl  m-0"
                                    role="separator"></div>
                            </div>
                        </div>
                    </div>
                @endif

                @php
                    $latest_mainls_programs = App\Models\Channel::where('type', 'emails')->latest()->take(6)->get();
                @endphp
                @if($latest_mainls_programs->count() > 0)
                    <div class="ant-space-item">
                        <div class="ant-space css-t2ij9r ant-space-vertical ant-space-rtl w-full"
                            style="gap: 40px;">
                            <div class="ant-space-item">
                                <div
                                    class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center ant-space-gap-row-small ant-space-gap-col-small w-full justify-between -mb-2 ">
                                    <div class="ant-space-item">
                                        <div
                                            class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center ant-space-gap-row-small ant-space-gap-col-small w-full">
                                            <div class="ant-space-item"><svg width="28" height="20"
                                                    viewBox="0 0 28 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M28 0.430176H0.832127V19.5702H28V0.430176ZM24.908 3.52218V16.4782H3.92413V3.52218H24.908Z"
                                                        fill="black"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M1.28838 3.22219C1.76016 2.51054 2.71953 2.3161 3.43118 2.78789L14.4157 10.0701L25.4002 2.78789C26.1118 2.3161 27.0712 2.51054 27.543 3.22219C28.0148 3.93384 27.8203 4.89321 27.1087 5.365L14.4157 13.7799L1.72268 5.365C1.01103 4.89321 0.816586 3.93384 1.28838 3.22219Z"
                                                        fill="black"></path>
                                                </svg></div>
                                            <div class="ant-space-item">
                                                <h3 class="ant-typography ant-typography-rtl !mb-0 css-t2ij9r">
                                                    نشرات بريديّة مميّزة</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ant-space-item">
                                <div class="ant-row ant-row-rtl css-t2ij9r"
                                    style="margin-left: -8px; margin-right: -8px; row-gap: 16px;">
                                    @foreach ($latest_mainls_programs as $porgram)
                                        <div style="padding-left: 8px; padding-right: 8px;"
                                            class="ant-col ant-col-xs-12 ant-col-rtl ant-col-sm-12 ant-col-md-6 ant-col-lg-4 ant-col-xl-4 css-t2ij9r">
                                            <div class="relative rounded-lg  shadow-custom "><a href="/p/aha"><img
                                                        alt="{{$porgram->title}}" loading="lazy" decoding="async" data-nimg="1"
                                                        class="w-full h-auto aspect-square bg-colorFillContentHover rounded-lg object-cover"
                                                        style="color: transparent;"
                                                        src="{{$porgram->thumbnail_path}}"
                                                        width="200" height="200"></a></div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="ant-space-item">
                                <div class="ant-divider css-t2ij9r ant-divider-horizontal ant-divider-rtl  m-0"
                                    role="separator"></div>
                            </div>
                        </div>
                    </div>
                @endif

                @php
                    $latest_videos = App\Models\Article::where('type', 'video')->latest()->take(3)->get();
                @endphp
                @if($latest_videos->count() > 0)
                    <div class="ant-space-item">
                        <div class="ant-space css-t2ij9r ant-space-vertical ant-space-rtl w-full" style="gap: 40px;">
                            <div class="ant-space-item">
                                <div
                                    class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center ant-space-gap-row-small ant-space-gap-col-small w-full justify-between -mb-2 ">
                                    <div class="ant-space-item">
                                        <div
                                            class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center ant-space-gap-row-small ant-space-gap-col-small w-full">
                                            <div class="ant-space-item"><svg width="28" height="26" viewBox="0 0 28 26" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M3.89499 13.7796H19.111V3.77359H3.89499V13.7796ZM22.69 9.03458L24.931 10.3726V7.84958L22.69 8.71158V9.03458ZM0.825989 0.70459H22.18V5.62158L28 3.38159V15.7776L22.18 12.3026V16.8476H15.188L18.194 24.1256L15.359 25.2966L11.869 16.8476H11.016L7.817 25.2566L4.94899 24.1656L7.73199 16.8476H0.825989V0.70459Z"
                                                        fill="black"></path>
                                                </svg></div>
                                            <div class="ant-space-item">
                                                <h3 class="ant-typography ant-typography-rtl !mb-0 css-t2ij9r">
                                                    الوثائقيات الجديدة</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ant-space-item">
                                <div>
                                    <div class="ant-row ant-row-rtl css-t2ij9r"
                                        style="margin-left: -8px; margin-right: -8px; row-gap: 32px;">
                                        @foreach ($latest_videos as $video)                                            
                                            <div style="padding-left: 8px; padding-right: 8px;" class="ant-col 
                                                        max-lg:max-w-full max-lg:flex-[0_0_100%]
                                                        
                                                            ant-col-xs-24 ant-col-rtl ant-col-sm-12 ant-col-md-12 ant-col-lg-8 css-t2ij9r">
                                                <article class="relative">
                                                    <div class="ant-row ant-row-top ant-row-rtl css-t2ij9r"
                                                        style="margin-left: -10.5px; margin-right: -10.5px; row-gap: 8px;">
                                                        <div style="padding-left: 10.5px; padding-right: 10.5px;"
                                                            class="ant-col ant-col-xs-24 ant-col-rtl ant-col-lg-24 ant-col-xl-24 css-t2ij9r">
                                                            <a class="relative undefined" href="/post/1jpgyty35y_1jhggnmybp"><img
                                                                    alt="{{$video->title}}" loading="lazy" decoding="async"
                                                                    data-nimg="1" class="rounded-lg w-full h-auto aspect-[386/211] "
                                                                    style="color: transparent; object-fit: cover;"
                                                                    src="{{$video->thumbnail_path}}"
                                                                    width="640" height="350"></a>
                                                        </div>
                                                        <div style="padding-left: 10.5px; padding-right: 10.5px;"
                                                            class="ant-col ant-col-xs-24 ant-col-rtl ant-col-lg-24 ant-col-xl-24 css-t2ij9r">
                                                            <a class="relative undefined" href="/post/1jpgyty35y_1jhggnmybp">
                                                                <div class="ant-space css-t2ij9r ant-space-vertical ant-space-rtl">
                                                                    <div class="ant-space-item">
                                                                        <h4 class="ant-typography ant-typography-rtl ant-typography-ellipsis ant-typography-ellipsis-multiple-line mb-2 overflow-visible css-t2ij9r"
                                                                            style="-webkit-line-clamp: 2;">
                                                                            {{$video->title}}
                                                                        </h4>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <div class="mb-2 text-sm">
                                                                <div class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center w-full"
                                                                    style="gap: 16px;">
                                                                    <div class="ant-space-item last-of-type:flex-1 "><a
                                                                            class="font-bold text-sm" href="/p/8-questions"><span
                                                                                class="flex items-center gap-2 font-bold undefined">
                                                                                {{$video->channel->title}}
                                                                                </span></a></div>
                                                                    <div class="ant-space-item last-of-type:flex-1 ">
                                                                        <span
                                                                            class="ant-typography ant-typography-rtl text-colorTextSecondary sm:text-sm text-xs css-t2ij9r">15
                                                                            ديسمبر 2023</span>
                                                                    </div>
                                                                    <div class="ant-space-item last-of-type:flex-1 ">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><span
                                                        class="flex items-center justify-center text-white bg-black/25 w-6 h-6 rounded-full absolute top-1 right-1"><svg
                                                            class="w-4 h-4" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10.6665 6.86163L12.9833 5.43353C13.189 5.30673 13.4472 5.30114 13.6581 5.41892C13.8691 5.5367 13.9998 5.75941 13.9998 6.00103V10.6656C13.9998 10.9072 13.8691 11.1299 13.6582 11.2477C13.4472 11.3654 13.189 11.3599 12.9834 11.2331L10.6665 9.80495"
                                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <rect x="2" y="4" width="8.66667" height="8.66667" rx="3" stroke="currentColor"
                                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></rect>
                                                        </svg></span>
                                                </article>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="ant-space-item">
                                <div class="ant-divider css-t2ij9r ant-divider-horizontal ant-divider-rtl  m-0" role="separator"></div>
                            </div>
                        </div>
                    </div>
                @endif
                {{-- <div class="ant-space-item"><!--$-->
                    <div class="ant-space css-t2ij9r ant-space-vertical ant-space-rtl w-full"
                        style="column-gap:40px;row-gap:40px">
                        <div class="ant-space-item">
                            <div
                                class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center ant-space-gap-row-small ant-space-gap-col-small w-full justify-between -mb-2 ">
                                <div class="ant-space-item">
                                    <div
                                        class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center ant-space-gap-row-small ant-space-gap-col-small w-full">
                                        <div class="ant-space-item"><svg width="27" height="26"
                                                viewBox="0 0 27 26" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
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
                        <div class="ant-space-item">
                            <div>
                                <div class="ant-row ant-row-rtl css-t2ij9r"
                                    style="margin-left:-8px;margin-right:-8px;row-gap:32px">
                                    <div style="padding-left:8px;padding-right:8px" class="ant-col 
                            
                            
                                ant-col-xs-24 ant-col-rtl ant-col-sm-24 ant-col-md-24 ant-col-lg-12 css-t2ij9r">
                                        <article class="relative">
                                            <div class="ant-row ant-row-top ant-row-rtl css-t2ij9r"
                                                style="margin-left:-8px;margin-right:-8px;row-gap:16px">
                                                <div style="padding-left:8px;padding-right:8px"
                                                    class="ant-col ant-col-xs-8 ant-col-rtl ant-col-md-7 ant-col-xl-8 css-t2ij9r">
                                                    <a href="/post/1jqese4t41_1jhggnmybp"><img
                                                            alt="دروس آلان دو بوتون في الحب والزواج "
                                                            loading="lazy" decoding="async" data-nimg="1"
                                                            class="rounded-lg max-w-full h-auto aspect-[180/150]"
                                                            style="color:transparent;object-fit:cover"
                                                            srcset="/_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.eu-central-1.amazonaws.com%2Fassets%2Fpost%2Fnew-story%2Fpost-aafd5402-d3ca-49e4-8604-284bb39ecac1.jpeg&amp;w=640&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.eu-central-1.amazonaws.com%2Fassets%2Fpost%2Fnew-story%2Fpost-aafd5402-d3ca-49e4-8604-284bb39ecac1.jpeg&amp;w=1200&amp;q=75 2x"
                                                            src="https://thmanyah.com/_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.eu-central-1.amazonaws.com%2Fassets%2Fpost%2Fnew-story%2Fpost-aafd5402-d3ca-49e4-8604-284bb39ecac1.jpeg&amp;w=1200&amp;q=75"
                                                            width="600" height="300"></a></div>
                                                <div style="padding-left:8px;padding-right:8px"
                                                    class="ant-col ant-col-xs-16 ant-col-rtl ant-col-md-17 ant-col-xl-16 css-t2ij9r">
                                                    <div
                                                        class="ant-space css-t2ij9r ant-space-vertical ant-space-rtl">
                                                        <div class="ant-space-item"><a
                                                                href="/post/1jqese4t41_1jhggnmybp">
                                                                <h4 class="ant-typography ant-typography-rtl ant-typography-ellipsis ant-typography-ellipsis-multiple-line  !text-[18px] mb-2 leading-[30px] css-t2ij9r"
                                                                    style="-webkit-line-clamp: 2;">دروس آلان دو
                                                                    بوتون في الحب والزواج </h4>
                                                                <div
                                                                    class="ant-typography ant-typography-rtl  text-sm line-clamp-1 lg:line-clamp-2 mb-2 css-t2ij9r">
                                                                    نبحثُ عن الكمال، من يفهم مشاعرنا وضعفنا
                                                                    وعقدنا، مقتنعين بتلك الفكرة التي لا نعلم كيف
                                                                    غُرست في عقولنا عن مثالية الحب والمحبوب.
                                                                </div>
                                                            </a></div>
                                                        <div class="ant-space-item">
                                                            <div class=" mb-2">
                                                                <div class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center w-full"
                                                                    style="column-gap:16px;row-gap:16px">
                                                                    <div
                                                                        class="ant-space-item last-of-type:flex-1 ">
                                                                        <a class="font-bold text-sm"
                                                                            href="/author/adulkareem"><span
                                                                                class="flex items-center gap-2 font-bold undefined">عبدالكريم
                                                                                العدواني</span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-sm mb-2"><span>في<!-- --> <a
                                                                class="text-black font-bold" href="/p/elkh">نشرة
                                                                إلخ</a> <!-- -->من<!-- --> <a
                                                                class="text-black font-bold"
                                                                href="/company/thmanyah">ثمانية</a></span><span
                                                            class="ant-typography ant-typography-rtl text-colorTextSecondary sm:text-sm text-xs css-t2ij9r"
                                                            title="13 ديسمبر 2023"><i
                                                                class="inline-block h-1 w-1 rounded-full bg-[#B2B2B2] mx-1 align-middle"></i>13
                                                            ديسمبر 2023</span></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div style="padding-left:8px;padding-right:8px" class="ant-col 
                            
                            
                                ant-col-xs-24 ant-col-rtl ant-col-sm-24 ant-col-md-24 ant-col-lg-12 css-t2ij9r">
                                        <article class="relative">
                                            <div class="ant-row ant-row-top ant-row-rtl css-t2ij9r"
                                                style="margin-left:-8px;margin-right:-8px;row-gap:16px">
                                                <div style="padding-left:8px;padding-right:8px"
                                                    class="ant-col ant-col-xs-8 ant-col-rtl ant-col-md-7 ant-col-xl-8 css-t2ij9r">
                                                    <a href="/post/1jqdyhe5m0_1jhggnmybp"><img
                                                            alt="أرفض مشاهدة الحلقة الأخيرة قبل الأولى"
                                                            loading="lazy" decoding="async" data-nimg="1"
                                                            class="rounded-lg max-w-full h-auto aspect-[180/150]"
                                                            style="color:transparent;object-fit:cover"
                                                            srcset="/_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.eu-central-1.amazonaws.com%2Fassets%2Fpost%2Fnew-story%2Fpost-b80ed9ab-6625-46fc-98d0-6b9ab6831867.png&amp;w=640&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.eu-central-1.amazonaws.com%2Fassets%2Fpost%2Fnew-story%2Fpost-b80ed9ab-6625-46fc-98d0-6b9ab6831867.png&amp;w=1200&amp;q=75 2x"
                                                            src="https://thmanyah.com/_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.eu-central-1.amazonaws.com%2Fassets%2Fpost%2Fnew-story%2Fpost-b80ed9ab-6625-46fc-98d0-6b9ab6831867.png&amp;w=1200&amp;q=75"
                                                            width="600" height="300"></a></div>
                                                <div style="padding-left:8px;padding-right:8px"
                                                    class="ant-col ant-col-xs-16 ant-col-rtl ant-col-md-17 ant-col-xl-16 css-t2ij9r">
                                                    <div
                                                        class="ant-space css-t2ij9r ant-space-vertical ant-space-rtl">
                                                        <div class="ant-space-item"><a
                                                                href="/post/1jqdyhe5m0_1jhggnmybp">
                                                                <h4 class="ant-typography ant-typography-rtl ant-typography-ellipsis ant-typography-ellipsis-multiple-line  !text-[18px] mb-2 leading-[30px] css-t2ij9r"
                                                                    style="-webkit-line-clamp: 2;">أرفض مشاهدة
                                                                    الحلقة الأخيرة قبل الأولى</h4>
                                                                <div
                                                                    class="ant-typography ant-typography-rtl  text-sm line-clamp-1 lg:line-clamp-2 mb-2 css-t2ij9r">
                                                                    إن كنت حريصًا على ألا يحرق أحدهم أحداث مسلسل
                                                                    كنت أنتظره على أحر من الجمر، فلا سبيل أمامي
                                                                    سوى مشاهدة المسلسل فور نزوله دفعةً واحدة!
                                                                </div>
                                                            </a></div>
                                                        <div class="ant-space-item">
                                                            <div class=" mb-2">
                                                                <div class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center w-full"
                                                                    style="column-gap:16px;row-gap:16px">
                                                                    <div
                                                                        class="ant-space-item last-of-type:flex-1 ">
                                                                        <a class="font-bold text-sm"
                                                                            href="/author/mahmoudessam"><span
                                                                                class="flex items-center gap-2 font-bold undefined">محمود
                                                                                عصام</span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-sm mb-2"><span>في<!-- --> <a
                                                                class="text-black font-bold" href="/p/aha">نشرة
                                                                أها!</a> <!-- -->من<!-- --> <a
                                                                class="text-black font-bold"
                                                                href="/company/thmanyah">ثمانية</a></span><span
                                                            class="ant-typography ant-typography-rtl text-colorTextSecondary sm:text-sm text-xs css-t2ij9r"
                                                            title="12 ديسمبر 2023"><i
                                                                class="inline-block h-1 w-1 rounded-full bg-[#B2B2B2] mx-1 align-middle"></i>12
                                                            ديسمبر 2023</span></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div style="padding-left:8px;padding-right:8px" class="ant-col 
                            
                            
                                ant-col-xs-24 ant-col-rtl ant-col-sm-24 ant-col-md-24 ant-col-lg-12 css-t2ij9r">
                                        <article class="relative">
                                            <div class="ant-row ant-row-top ant-row-rtl css-t2ij9r"
                                                style="margin-left:-8px;margin-right:-8px;row-gap:16px">
                                                <div style="padding-left:8px;padding-right:8px"
                                                    class="ant-col ant-col-xs-8 ant-col-rtl ant-col-md-7 ant-col-xl-8 css-t2ij9r">
                                                    <a href="/post/1jqb4a6hh7_1jhggnmybp"><img
                                                            alt="لماذا تتجاهلون النهار؟!" loading="lazy"
                                                            decoding="async" data-nimg="1"
                                                            class="rounded-lg max-w-full h-auto aspect-[180/150]"
                                                            style="color:transparent;object-fit:cover"
                                                            srcset="/_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.eu-central-1.amazonaws.com%2Fassets%2Fpost%2Fnew-story%2Fpost-c5d5fd54-9e39-480f-a4d0-866c82114225.gif&amp;w=640&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.eu-central-1.amazonaws.com%2Fassets%2Fpost%2Fnew-story%2Fpost-c5d5fd54-9e39-480f-a4d0-866c82114225.gif&amp;w=1200&amp;q=75 2x"
                                                            src="https://thmanyah.com/_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.eu-central-1.amazonaws.com%2Fassets%2Fpost%2Fnew-story%2Fpost-c5d5fd54-9e39-480f-a4d0-866c82114225.gif&amp;w=1200&amp;q=75"
                                                            width="600" height="300"></a></div>
                                                <div style="padding-left:8px;padding-right:8px"
                                                    class="ant-col ant-col-xs-16 ant-col-rtl ant-col-md-17 ant-col-xl-16 css-t2ij9r">
                                                    <div
                                                        class="ant-space css-t2ij9r ant-space-vertical ant-space-rtl">
                                                        <div class="ant-space-item"><a
                                                                href="/post/1jqb4a6hh7_1jhggnmybp">
                                                                <h4 class="ant-typography ant-typography-rtl ant-typography-ellipsis ant-typography-ellipsis-multiple-line  !text-[18px] mb-2 leading-[30px] css-t2ij9r"
                                                                    style="-webkit-line-clamp: 2;">لماذا
                                                                    تتجاهلون النهار؟!</h4>
                                                                <div
                                                                    class="ant-typography ant-typography-rtl  text-sm line-clamp-1 lg:line-clamp-2 mb-2 css-t2ij9r">
                                                                    سيكون الأمر جميلًا حين تتخلى عزيزي السينمائي
                                                                    أو المنتنمي إلى عالم الفن السعودي عن فكرة
                                                                    أنك أستاذ ستعلّم الناس وتمرر أفكارك العظيمة
                                                                    من خلال أفلامك.</div>
                                                            </a></div>
                                                        <div class="ant-space-item">
                                                            <div class=" mb-2">
                                                                <div class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center w-full"
                                                                    style="column-gap:16px;row-gap:16px">
                                                                    <div
                                                                        class="ant-space-item last-of-type:flex-1 ">
                                                                        <a class="font-bold text-sm"
                                                                            href="/author/agrni"><span
                                                                                class="flex items-center gap-2 font-bold undefined"><img
                                                                                    alt="" loading="lazy"
                                                                                    decoding="async"
                                                                                    data-nimg="1"
                                                                                    class="rounded-full"
                                                                                    style="color:transparent"
                                                                                    srcset="/_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.amazonaws.com%2Fpublic%2Fprofile%2FBAoeaHuwnKNaHW4vhLwgQAyeVvz2.jpg&amp;w=32&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.amazonaws.com%2Fpublic%2Fprofile%2FBAoeaHuwnKNaHW4vhLwgQAyeVvz2.jpg&amp;w=48&amp;q=75 2x"
                                                                                    src="/_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.amazonaws.com%2Fpublic%2Fprofile%2FBAoeaHuwnKNaHW4vhLwgQAyeVvz2.jpg&amp;w=48&amp;q=75"
                                                                                    width="18"
                                                                                    height="18">عبدالله
                                                                                المزهر</span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-sm mb-2"><span>في<!-- --> <a
                                                                class="text-black font-bold"
                                                                href="/p/alsakher">نشرة الساخر</a>
                                                            <!-- -->من<!-- --> <a class="text-black font-bold"
                                                                href="/company/thmanyah">ثمانية</a></span><span
                                                            class="ant-typography ant-typography-rtl text-colorTextSecondary sm:text-sm text-xs css-t2ij9r"
                                                            title="12 ديسمبر 2023"><i
                                                                class="inline-block h-1 w-1 rounded-full bg-[#B2B2B2] mx-1 align-middle"></i>12
                                                            ديسمبر 2023</span></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div style="padding-left:8px;padding-right:8px" class="ant-col 
                            
                            
                                ant-col-xs-24 ant-col-rtl ant-col-sm-24 ant-col-md-24 ant-col-lg-12 css-t2ij9r">
                                        <article class="relative">
                                            <div class="ant-row ant-row-top ant-row-rtl css-t2ij9r"
                                                style="margin-left:-8px;margin-right:-8px;row-gap:16px">
                                                <div style="padding-left:8px;padding-right:8px"
                                                    class="ant-col ant-col-xs-8 ant-col-rtl ant-col-md-7 ant-col-xl-8 css-t2ij9r">
                                                    <a href="/post/1jqbe3zzwq_1jhggnmybp"><img
                                                            alt="لماذا لا أدفع إكرامية في تطبيق التوصيل؟"
                                                            loading="lazy" decoding="async" data-nimg="1"
                                                            class="rounded-lg max-w-full h-auto aspect-[180/150]"
                                                            style="color:transparent;object-fit:cover"
                                                            srcset="/_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.eu-central-1.amazonaws.com%2Fassets%2Fpost%2Fnew-story%2Fpost-6fd2c0b7-7383-44a7-ab2a-3a5b21d28849.png&amp;w=640&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.eu-central-1.amazonaws.com%2Fassets%2Fpost%2Fnew-story%2Fpost-6fd2c0b7-7383-44a7-ab2a-3a5b21d28849.png&amp;w=1200&amp;q=75 2x"
                                                            src="https://thmanyah.com/_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.eu-central-1.amazonaws.com%2Fassets%2Fpost%2Fnew-story%2Fpost-6fd2c0b7-7383-44a7-ab2a-3a5b21d28849.png&amp;w=1200&amp;q=75"
                                                            width="600" height="300"></a></div>
                                                <div style="padding-left:8px;padding-right:8px"
                                                    class="ant-col ant-col-xs-16 ant-col-rtl ant-col-md-17 ant-col-xl-16 css-t2ij9r">
                                                    <div
                                                        class="ant-space css-t2ij9r ant-space-vertical ant-space-rtl">
                                                        <div class="ant-space-item"><a
                                                                href="/post/1jqbe3zzwq_1jhggnmybp">
                                                                <h4 class="ant-typography ant-typography-rtl ant-typography-ellipsis ant-typography-ellipsis-multiple-line  !text-[18px] mb-2 leading-[30px] css-t2ij9r"
                                                                    style="-webkit-line-clamp: 2;">لماذا لا أدفع
                                                                    إكرامية في تطبيق التوصيل؟</h4>
                                                                <div
                                                                    class="ant-typography ant-typography-rtl  text-sm line-clamp-1 lg:line-clamp-2 mb-2 css-t2ij9r">
                                                                    إن تركيزنا في جدل «البقشيش» يجب ألا يكون على
                                                                    خيار الدفع من عدمه، بل في أهمية تحقيق توازن
                                                                    عادل في علاقة العمل بين المندوب والشركة
                                                                    لضمان استدامة رفاهية العمال والمستهلكين.
                                                                </div>
                                                            </a></div>
                                                        <div class="ant-space-item">
                                                            <div class=" mb-2">
                                                                <div class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center w-full"
                                                                    style="column-gap:16px;row-gap:16px">
                                                                    <div
                                                                        class="ant-space-item last-of-type:flex-1 ">
                                                                        <a class="font-bold text-sm"
                                                                            href="/author/eilaf585"><span
                                                                                class="flex items-center gap-2 font-bold undefined">إيلاف
                                                                                محمد</span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-sm mb-2"><span>في<!-- --> <a
                                                                class="text-black font-bold" href="/p/aha">نشرة
                                                                أها!</a> <!-- -->من<!-- --> <a
                                                                class="text-black font-bold"
                                                                href="/company/thmanyah">ثمانية</a></span><span
                                                            class="ant-typography ant-typography-rtl text-colorTextSecondary sm:text-sm text-xs css-t2ij9r"
                                                            title="11 ديسمبر 2023"><i
                                                                class="inline-block h-1 w-1 rounded-full bg-[#B2B2B2] mx-1 align-middle"></i>11
                                                            ديسمبر 2023</span></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div style="padding-left:8px;padding-right:8px" class="ant-col 
                            
                            
                                ant-col-xs-24 ant-col-rtl ant-col-sm-24 ant-col-md-24 ant-col-lg-12 css-t2ij9r">
                                        <article class="relative">
                                            <div class="ant-row ant-row-top ant-row-rtl css-t2ij9r"
                                                style="margin-left:-8px;margin-right:-8px;row-gap:16px">
                                                <div style="padding-left:8px;padding-right:8px"
                                                    class="ant-col ant-col-xs-8 ant-col-rtl ant-col-md-7 ant-col-xl-8 css-t2ij9r">
                                                    <a href="/post/1jqbq8184n_1jhggnmybp"><img
                                                            alt="«بايت دانس» تستحوذ على نفسها" loading="lazy"
                                                            decoding="async" data-nimg="1"
                                                            class="rounded-lg max-w-full h-auto aspect-[180/150]"
                                                            style="color:transparent;object-fit:cover"
                                                            srcset="/_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.eu-central-1.amazonaws.com%2Fassets%2Fpost%2Fnew-story%2Fpost-efe9c731-6b72-4ca2-bd5b-5c0fbe303857.png&amp;w=640&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.eu-central-1.amazonaws.com%2Fassets%2Fpost%2Fnew-story%2Fpost-efe9c731-6b72-4ca2-bd5b-5c0fbe303857.png&amp;w=1200&amp;q=75 2x"
                                                            src="https://thmanyah.com/_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.eu-central-1.amazonaws.com%2Fassets%2Fpost%2Fnew-story%2Fpost-efe9c731-6b72-4ca2-bd5b-5c0fbe303857.png&amp;w=1200&amp;q=75"
                                                            width="600" height="300"></a></div>
                                                <div style="padding-left:8px;padding-right:8px"
                                                    class="ant-col ant-col-xs-16 ant-col-rtl ant-col-md-17 ant-col-xl-16 css-t2ij9r">
                                                    <div
                                                        class="ant-space css-t2ij9r ant-space-vertical ant-space-rtl">
                                                        <div class="ant-space-item"><a
                                                                href="/post/1jqbq8184n_1jhggnmybp">
                                                                <h4 class="ant-typography ant-typography-rtl ant-typography-ellipsis ant-typography-ellipsis-multiple-line  !text-[18px] mb-2 leading-[30px] css-t2ij9r"
                                                                    style="-webkit-line-clamp: 2;">«بايت دانس»
                                                                    تستحوذ على نفسها</h4>
                                                                <div
                                                                    class="ant-typography ant-typography-rtl  text-sm line-clamp-1 lg:line-clamp-2 mb-2 css-t2ij9r">
                                                                    هذه ليست المرة الأولى التي تشتري فيها «بايت
                                                                    دانس» أسهم شركتها سواء من موظفيها أو
                                                                    المستثمرين فيها، ففي العام الماضي اشترت حصة
                                                                    أسهم بقيمة 3 مليار دولار.</div>
                                                            </a></div>
                                                        <div class="ant-space-item">
                                                            <div class=" mb-2">
                                                                <div class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center w-full"
                                                                    style="column-gap:16px;row-gap:16px">
                                                                    <div
                                                                        class="ant-space-item last-of-type:flex-1 ">
                                                                        <a class="font-bold text-sm"
                                                                            href="/author/emanasaad"><span
                                                                                class="flex items-center gap-2 font-bold undefined"><img
                                                                                    alt="" loading="lazy"
                                                                                    decoding="async"
                                                                                    data-nimg="1"
                                                                                    class="rounded-full"
                                                                                    style="color:transparent"
                                                                                    srcset="/_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.amazonaws.com%2Fpublic%2Fprofile%2Fnib5ntJndcPwLMtTLHJH72mmgkN2.jpg&amp;w=32&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.amazonaws.com%2Fpublic%2Fprofile%2Fnib5ntJndcPwLMtTLHJH72mmgkN2.jpg&amp;w=48&amp;q=75 2x"
                                                                                    src="/_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.amazonaws.com%2Fpublic%2Fprofile%2Fnib5ntJndcPwLMtTLHJH72mmgkN2.jpg&amp;w=48&amp;q=75"
                                                                                    width="18" height="18">إيمان
                                                                                أسعد</span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-sm mb-2"><span>في<!-- --> <a
                                                                class="text-black font-bold"
                                                                href="/p/assouq">نشرة السوق</a>
                                                            <!-- -->من<!-- --> <a class="text-black font-bold"
                                                                href="/company/thmanyah">ثمانية</a></span><span
                                                            class="ant-typography ant-typography-rtl text-colorTextSecondary sm:text-sm text-xs css-t2ij9r"
                                                            title="11 ديسمبر 2023"><i
                                                                class="inline-block h-1 w-1 rounded-full bg-[#B2B2B2] mx-1 align-middle"></i>11
                                                            ديسمبر 2023</span></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div style="padding-left:8px;padding-right:8px" class="ant-col 
                            
                            
                                ant-col-xs-24 ant-col-rtl ant-col-sm-24 ant-col-md-24 ant-col-lg-12 css-t2ij9r">
                                        <article class="relative">
                                            <div class="ant-row ant-row-top ant-row-rtl css-t2ij9r"
                                                style="margin-left:-8px;margin-right:-8px;row-gap:16px">
                                                <div style="padding-left:8px;padding-right:8px"
                                                    class="ant-col ant-col-xs-8 ant-col-rtl ant-col-md-7 ant-col-xl-8 css-t2ij9r">
                                                    <a href="/post/1jq8ed9nww_1jhggnmybp"><img
                                                            alt="مقاطعة الأجنبي فرصة ذهبية لدعم المحلي"
                                                            loading="lazy" decoding="async" data-nimg="1"
                                                            class="rounded-lg max-w-full h-auto aspect-[180/150]"
                                                            style="color:transparent;object-fit:cover"
                                                            srcset="/_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.eu-central-1.amazonaws.com%2Fassets%2Fpost%2Fnew-story%2Fpost-c714fcdb-9cf1-4092-8638-90e7d55e8556.png&amp;w=640&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.eu-central-1.amazonaws.com%2Fassets%2Fpost%2Fnew-story%2Fpost-c714fcdb-9cf1-4092-8638-90e7d55e8556.png&amp;w=1200&amp;q=75 2x"
                                                            src="https://thmanyah.com/_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.eu-central-1.amazonaws.com%2Fassets%2Fpost%2Fnew-story%2Fpost-c714fcdb-9cf1-4092-8638-90e7d55e8556.png&amp;w=1200&amp;q=75"
                                                            width="600" height="300"></a></div>
                                                <div style="padding-left:8px;padding-right:8px"
                                                    class="ant-col ant-col-xs-16 ant-col-rtl ant-col-md-17 ant-col-xl-16 css-t2ij9r">
                                                    <div
                                                        class="ant-space css-t2ij9r ant-space-vertical ant-space-rtl">
                                                        <div class="ant-space-item"><a
                                                                href="/post/1jq8ed9nww_1jhggnmybp">
                                                                <h4 class="ant-typography ant-typography-rtl ant-typography-ellipsis ant-typography-ellipsis-multiple-line  !text-[18px] mb-2 leading-[30px] css-t2ij9r"
                                                                    style="-webkit-line-clamp: 2;">مقاطعة
                                                                    الأجنبي فرصة ذهبية لدعم المحلي</h4>
                                                                <div
                                                                    class="ant-typography ant-typography-rtl  text-sm line-clamp-1 lg:line-clamp-2 mb-2 css-t2ij9r">
                                                                    إذا استثمرت الشركات المحليَّة في ثقة
                                                                    المستهلك المحلي بشكل صحيح فقد نشهد انتعاشًا
                                                                    اقتصاديًا محليًا وافرًا سيُسهم في تفضيل
                                                                    المنتج المحلي على المنتج الأجنبي في قائمة
                                                                    مشترياتنا للأبد.</div>
                                                            </a></div>
                                                        <div class="ant-space-item">
                                                            <div class=" mb-2">
                                                                <div class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center w-full"
                                                                    style="column-gap:16px;row-gap:16px">
                                                                    <div
                                                                        class="ant-space-item last-of-type:flex-1 ">
                                                                        <a class="font-bold text-sm"
                                                                            href="/author/saharalhashimi"><span
                                                                                class="flex items-center gap-2 font-bold undefined">سحر
                                                                                الهاشمي</span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-sm mb-2"><span>في<!-- --> <a
                                                                class="text-black font-bold" href="/p/aha">نشرة
                                                                أها!</a> <!-- -->من<!-- --> <a
                                                                class="text-black font-bold"
                                                                href="/company/thmanyah">ثمانية</a></span><span
                                                            class="ant-typography ant-typography-rtl text-colorTextSecondary sm:text-sm text-xs css-t2ij9r"
                                                            title="10 ديسمبر 2023"><i
                                                                class="inline-block h-1 w-1 rounded-full bg-[#B2B2B2] mx-1 align-middle"></i>10
                                                            ديسمبر 2023</span></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div style="padding-left:8px;padding-right:8px" class="ant-col 
                            
                            
                                ant-col-xs-24 ant-col-rtl ant-col-sm-24 ant-col-md-24 ant-col-lg-12 css-t2ij9r">
                                        <article class="relative">
                                            <div class="ant-row ant-row-top ant-row-rtl css-t2ij9r"
                                                style="margin-left:-8px;margin-right:-8px;row-gap:16px">
                                                <div style="padding-left:8px;padding-right:8px"
                                                    class="ant-col ant-col-xs-8 ant-col-rtl ant-col-md-7 ant-col-xl-8 css-t2ij9r">
                                                    <a href="/post/1jq3wq3mzk_1jhggnmybp"><img
                                                            alt="06: كيف أحدد الاتجاه؟" loading="lazy"
                                                            decoding="async" data-nimg="1"
                                                            class="rounded-lg max-w-full h-auto aspect-[180/150]"
                                                            style="color:transparent;object-fit:cover"
                                                            srcset="/_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.eu-central-1.amazonaws.com%2Fassets%2Fpost%2Fnew-story%2Fpost-ab0c74c1-3faa-494b-8fef-647107fa8f74.png&amp;w=640&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.eu-central-1.amazonaws.com%2Fassets%2Fpost%2Fnew-story%2Fpost-ab0c74c1-3faa-494b-8fef-647107fa8f74.png&amp;w=1200&amp;q=75 2x"
                                                            src="https://thmanyah.com/_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.eu-central-1.amazonaws.com%2Fassets%2Fpost%2Fnew-story%2Fpost-ab0c74c1-3faa-494b-8fef-647107fa8f74.png&amp;w=1200&amp;q=75"
                                                            width="600" height="300"></a></div>
                                                <div style="padding-left:8px;padding-right:8px"
                                                    class="ant-col ant-col-xs-16 ant-col-rtl ant-col-md-17 ant-col-xl-16 css-t2ij9r">
                                                    <div
                                                        class="ant-space css-t2ij9r ant-space-vertical ant-space-rtl">
                                                        <div class="ant-space-item"><a
                                                                href="/post/1jq3wq3mzk_1jhggnmybp">
                                                                <h4 class="ant-typography ant-typography-rtl ant-typography-ellipsis ant-typography-ellipsis-multiple-line  !text-[18px] mb-2 leading-[30px] css-t2ij9r"
                                                                    style="-webkit-line-clamp: 2;">06: كيف أحدد
                                                                    الاتجاه؟</h4>
                                                                <div
                                                                    class="ant-typography ant-typography-rtl  text-sm line-clamp-1 lg:line-clamp-2 mb-2 css-t2ij9r">
                                                                    بناء بوصلتك يتطلب حدًا أدنى من معرفة نفسك
                                                                    ومعرفة قيمك وفلسفتك تجاه الحياة. ما نظرتك
                                                                    نحو الأمور المهمة في حياتك من صحة وعمل
                                                                    وعلاقات ولعب.</div>
                                                            </a></div>
                                                        <div class="ant-space-item">
                                                            <div class=" mb-2">
                                                                <div class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center w-full"
                                                                    style="column-gap:16px;row-gap:16px">
                                                                    <div
                                                                        class="ant-space-item last-of-type:flex-1 ">
                                                                        <a class="font-bold text-sm"
                                                                            href="/author/1jmjjmmp0b"><span
                                                                                class="flex items-center gap-2 font-bold undefined"><img
                                                                                    alt="" loading="lazy"
                                                                                    decoding="async"
                                                                                    data-nimg="1"
                                                                                    class="rounded-full"
                                                                                    style="color:transparent"
                                                                                    srcset="/_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.eu-central-1.amazonaws.com%2Fassets%2Ftenant%2F1jmjjmmp0b%2Fc4edacf6-2237-4f70-aded-4498af919d1f.png&amp;w=32&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.eu-central-1.amazonaws.com%2Fassets%2Ftenant%2F1jmjjmmp0b%2Fc4edacf6-2237-4f70-aded-4498af919d1f.png&amp;w=48&amp;q=75 2x"
                                                                                    src="/_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.eu-central-1.amazonaws.com%2Fassets%2Ftenant%2F1jmjjmmp0b%2Fc4edacf6-2237-4f70-aded-4498af919d1f.png&amp;w=48&amp;q=75"
                                                                                    width="18"
                                                                                    height="18">البراء
                                                                                العوهلي</span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-sm mb-2"><span>في<!-- --> <a
                                                                class="text-black font-bold"
                                                                href="/p/namat">نشرة نمط</a> <!-- -->من<!-- -->
                                                            <a class="text-black font-bold"
                                                                href="/company/thmanyah">ثمانية</a></span><span
                                                            class="ant-typography ant-typography-rtl text-colorTextSecondary sm:text-sm text-xs css-t2ij9r"
                                                            title="9 ديسمبر 2023"><i
                                                                class="inline-block h-1 w-1 rounded-full bg-[#B2B2B2] mx-1 align-middle"></i>9
                                                            ديسمبر 2023</span></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div style="padding-left:8px;padding-right:8px" class="ant-col 
                            
                            
                                ant-col-xs-24 ant-col-rtl ant-col-sm-24 ant-col-md-24 ant-col-lg-12 css-t2ij9r">
                                        <article class="relative">
                                            <div class="ant-row ant-row-top ant-row-rtl css-t2ij9r"
                                                style="margin-left:-8px;margin-right:-8px;row-gap:16px">
                                                <div style="padding-left:8px;padding-right:8px"
                                                    class="ant-col ant-col-xs-8 ant-col-rtl ant-col-md-7 ant-col-xl-8 css-t2ij9r">
                                                    <a href="/post/1jq0qr5da5_1jhggnmybp"><img
                                                            alt="هل «ناقة» الفلم السعودي المنتظر؟"
                                                            loading="lazy" decoding="async" data-nimg="1"
                                                            class="rounded-lg max-w-full h-auto aspect-[180/150]"
                                                            style="color:transparent;object-fit:cover"
                                                            srcset="/_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.eu-central-1.amazonaws.com%2Fassets%2Fpost%2Fnew-story%2Fpost-e1104b63-ad93-479e-ac3f-c4455f316758.jpeg&amp;w=640&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.eu-central-1.amazonaws.com%2Fassets%2Fpost%2Fnew-story%2Fpost-e1104b63-ad93-479e-ac3f-c4455f316758.jpeg&amp;w=1200&amp;q=75 2x"
                                                            src="https://thmanyah.com/_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.eu-central-1.amazonaws.com%2Fassets%2Fpost%2Fnew-story%2Fpost-e1104b63-ad93-479e-ac3f-c4455f316758.jpeg&amp;w=1200&amp;q=75"
                                                            width="600" height="300"></a></div>
                                                <div style="padding-left:8px;padding-right:8px"
                                                    class="ant-col ant-col-xs-16 ant-col-rtl ant-col-md-17 ant-col-xl-16 css-t2ij9r">
                                                    <div
                                                        class="ant-space css-t2ij9r ant-space-vertical ant-space-rtl">
                                                        <div class="ant-space-item"><a
                                                                href="/post/1jq0qr5da5_1jhggnmybp">
                                                                <h4 class="ant-typography ant-typography-rtl ant-typography-ellipsis ant-typography-ellipsis-multiple-line  !text-[18px] mb-2 leading-[30px] css-t2ij9r"
                                                                    style="-webkit-line-clamp: 2;">هل «ناقة»
                                                                    الفلم السعودي المنتظر؟</h4>
                                                                <div
                                                                    class="ant-typography ant-typography-rtl  text-sm line-clamp-1 lg:line-clamp-2 mb-2 css-t2ij9r">
                                                                    فلم «ناقة» يعطيك تجربة رحلة البر المخيفة،
                                                                    التي تجعل أعصابك مشدودة من بدايتها إلى
                                                                    نهايتها مع بعض العشوائية في الإخراج والتصوير
                                                                    والصوتيات.</div>
                                                            </a></div>
                                                        <div class="ant-space-item">
                                                            <div class=" mb-2">
                                                                <div class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center w-full"
                                                                    style="column-gap:16px;row-gap:16px">
                                                                    <div
                                                                        class="ant-space-item last-of-type:flex-1 ">
                                                                        <a class="font-bold text-sm"
                                                                            href="/author/riyadhalgadhi"><span
                                                                                class="flex items-center gap-2 font-bold undefined"><img
                                                                                    alt="" loading="lazy"
                                                                                    decoding="async"
                                                                                    data-nimg="1"
                                                                                    class="rounded-full"
                                                                                    style="color:transparent"
                                                                                    srcset="/_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.amazonaws.com%2Fpublic%2Fprofile%2Ftyg1kbs4dOhDWEIaomH3HKSYPYd2.jpg&amp;w=32&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.amazonaws.com%2Fpublic%2Fprofile%2Ftyg1kbs4dOhDWEIaomH3HKSYPYd2.jpg&amp;w=48&amp;q=75 2x"
                                                                                    src="/_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.amazonaws.com%2Fpublic%2Fprofile%2Ftyg1kbs4dOhDWEIaomH3HKSYPYd2.jpg&amp;w=48&amp;q=75"
                                                                                    width="18" height="18">رياض
                                                                                القدهي</span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-sm mb-2"><span>في<!-- --> <a
                                                                class="text-black font-bold"
                                                                href="/p/cinema">النشرة السينمائية</a>
                                                            <!-- -->من<!-- --> <a class="text-black font-bold"
                                                                href="/company/thmanyah">ثمانية</a></span><span
                                                            class="ant-typography ant-typography-rtl text-colorTextSecondary sm:text-sm text-xs css-t2ij9r"
                                                            title="7 ديسمبر 2023"><i
                                                                class="inline-block h-1 w-1 rounded-full bg-[#B2B2B2] mx-1 align-middle"></i>7
                                                            ديسمبر 2023</span></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div style="padding-left:8px;padding-right:8px" class="ant-col 
                            
                            
                                ant-col-xs-24 ant-col-rtl ant-col-sm-24 ant-col-md-24 ant-col-lg-12 css-t2ij9r">
                                        <article class="relative">
                                            <div class="ant-row ant-row-top ant-row-rtl css-t2ij9r"
                                                style="margin-left:-8px;margin-right:-8px;row-gap:16px">
                                                <div style="padding-left:8px;padding-right:8px"
                                                    class="ant-col ant-col-xs-8 ant-col-rtl ant-col-md-7 ant-col-xl-8 css-t2ij9r">
                                                    <a href="/post/1jq0sbz654_1jhggnmybp"><img
                                                            alt="لا تنجر إلى إدمان مديرك على الإنتاجيَّة"
                                                            loading="lazy" decoding="async" data-nimg="1"
                                                            class="rounded-lg max-w-full h-auto aspect-[180/150]"
                                                            style="color:transparent;object-fit:cover"
                                                            srcset="/_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.eu-central-1.amazonaws.com%2Fassets%2Fpost%2Fnew-story%2Fpost-c94afb46-2d50-49ea-9364-1fbf90ae2fe2.png&amp;w=640&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.eu-central-1.amazonaws.com%2Fassets%2Fpost%2Fnew-story%2Fpost-c94afb46-2d50-49ea-9364-1fbf90ae2fe2.png&amp;w=1200&amp;q=75 2x"
                                                            src="https://thmanyah.com/_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.eu-central-1.amazonaws.com%2Fassets%2Fpost%2Fnew-story%2Fpost-c94afb46-2d50-49ea-9364-1fbf90ae2fe2.png&amp;w=1200&amp;q=75"
                                                            width="600" height="300"></a></div>
                                                <div style="padding-left:8px;padding-right:8px"
                                                    class="ant-col ant-col-xs-16 ant-col-rtl ant-col-md-17 ant-col-xl-16 css-t2ij9r">
                                                    <div
                                                        class="ant-space css-t2ij9r ant-space-vertical ant-space-rtl">
                                                        <div class="ant-space-item"><a
                                                                href="/post/1jq0sbz654_1jhggnmybp">
                                                                <h4 class="ant-typography ant-typography-rtl ant-typography-ellipsis ant-typography-ellipsis-multiple-line  !text-[18px] mb-2 leading-[30px] css-t2ij9r"
                                                                    style="-webkit-line-clamp: 2;">لا تنجر إلى
                                                                    إدمان مديرك على الإنتاجيَّة</h4>
                                                                <div
                                                                    class="ant-typography ant-typography-rtl  text-sm line-clamp-1 lg:line-clamp-2 mb-2 css-t2ij9r">
                                                                    المدير المدمن على الإنتاجية غالبًا يتوقع
                                                                    استعداد موظفيه العمل في أيام العطلات وبعد
                                                                    انتهاء ساعات العمل مثله، مما يضاعف شعورهم
                                                                    بالإحباط والذنب.</div>
                                                            </a></div>
                                                        <div class="ant-space-item">
                                                            <div class=" mb-2">
                                                                <div class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center w-full"
                                                                    style="column-gap:16px;row-gap:16px">
                                                                    <div
                                                                        class="ant-space-item last-of-type:flex-1 ">
                                                                        <a class="font-bold text-sm"
                                                                            href="/author/yasminabd"><span
                                                                                class="flex items-center gap-2 font-bold undefined">ياسمين
                                                                                عبدالله</span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-sm mb-2"><span>في<!-- --> <a
                                                                class="text-black font-bold" href="/p/aha">نشرة
                                                                أها!</a> <!-- -->من<!-- --> <a
                                                                class="text-black font-bold"
                                                                href="/company/thmanyah">ثمانية</a></span><span
                                                            class="ant-typography ant-typography-rtl text-colorTextSecondary sm:text-sm text-xs css-t2ij9r"
                                                            title="7 ديسمبر 2023"><i
                                                                class="inline-block h-1 w-1 rounded-full bg-[#B2B2B2] mx-1 align-middle"></i>7
                                                            ديسمبر 2023</span></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div style="padding-left:8px;padding-right:8px" class="ant-col 
                            
                            
                                ant-col-xs-24 ant-col-rtl ant-col-sm-24 ant-col-md-24 ant-col-lg-12 css-t2ij9r">
                                        <article class="relative">
                                            <div class="ant-row ant-row-top ant-row-rtl css-t2ij9r"
                                                style="margin-left:-8px;margin-right:-8px;row-gap:16px">
                                                <div style="padding-left:8px;padding-right:8px"
                                                    class="ant-col ant-col-xs-8 ant-col-rtl ant-col-md-7 ant-col-xl-8 css-t2ij9r">
                                                    <a href="/post/1jpy0e6rw3_1jhggnmybp"><img
                                                            alt="كيف تبحث في «قوقل»؟" loading="lazy"
                                                            decoding="async" data-nimg="1"
                                                            class="rounded-lg max-w-full h-auto aspect-[180/150]"
                                                            style="color:transparent;object-fit:cover"
                                                            srcset="/_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.eu-central-1.amazonaws.com%2Fassets%2Fpost%2Fnew-story%2Fpost-c3882132-a964-46c2-bc0b-18a0d098ee06.png&amp;w=640&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.eu-central-1.amazonaws.com%2Fassets%2Fpost%2Fnew-story%2Fpost-c3882132-a964-46c2-bc0b-18a0d098ee06.png&amp;w=1200&amp;q=75 2x"
                                                            src="https://thmanyah.com/_next/image?url=https%3A%2F%2Fprod842022-kiet-v2-storage-uploadsbucketc4b27cc7-115kl3obdhv7w.s3.eu-central-1.amazonaws.com%2Fassets%2Fpost%2Fnew-story%2Fpost-c3882132-a964-46c2-bc0b-18a0d098ee06.png&amp;w=1200&amp;q=75"
                                                            width="600" height="300"></a></div>
                                                <div style="padding-left:8px;padding-right:8px"
                                                    class="ant-col ant-col-xs-16 ant-col-rtl ant-col-md-17 ant-col-xl-16 css-t2ij9r">
                                                    <div
                                                        class="ant-space css-t2ij9r ant-space-vertical ant-space-rtl">
                                                        <div class="ant-space-item"><a
                                                                href="/post/1jpy0e6rw3_1jhggnmybp">
                                                                <h4 class="ant-typography ant-typography-rtl ant-typography-ellipsis ant-typography-ellipsis-multiple-line  !text-[18px] mb-2 leading-[30px] css-t2ij9r"
                                                                    style="-webkit-line-clamp: 2;">كيف تبحث في
                                                                    «قوقل»؟</h4>
                                                                <div
                                                                    class="ant-typography ant-typography-rtl  text-sm line-clamp-1 lg:line-clamp-2 mb-2 css-t2ij9r">
                                                                    نبحث جميعًا عن معلومات عبر الإنترنت، لكن
                                                                    النتائج التي نصل إليها ليست ذاتها؛ لأن هناك
                                                                    من يبحث بشكل وهناك من يبحث بشكل سطحي فلا يصل
                                                                    إلا إلى قشور المعلومات.</div>
                                                            </a></div>
                                                        <div class="ant-space-item">
                                                            <div class=" mb-2">
                                                                <div class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center w-full"
                                                                    style="column-gap:16px;row-gap:16px">
                                                                    <div
                                                                        class="ant-space-item last-of-type:flex-1 ">
                                                                        <a class="font-bold text-sm"
                                                                            href="/author/mahmoudessam"><span
                                                                                class="flex items-center gap-2 font-bold undefined">محمود
                                                                                عصام</span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-sm mb-2"><span>في<!-- --> <a
                                                                class="text-black font-bold" href="/p/aha">نشرة
                                                                أها!</a> <!-- -->من<!-- --> <a
                                                                class="text-black font-bold"
                                                                href="/company/thmanyah">ثمانية</a></span><span
                                                            class="ant-typography ant-typography-rtl text-colorTextSecondary sm:text-sm text-xs css-t2ij9r"
                                                            title="6 ديسمبر 2023"><i
                                                                class="inline-block h-1 w-1 rounded-full bg-[#B2B2B2] mx-1 align-middle"></i>6
                                                            ديسمبر 2023</span></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ant-space-item">
                            <div class="text-center undefined"><button id="load-more-button" type="button"
                                    class="ant-btn css-t2ij9r ant-btn-default ant-btn-rtl"><span>المزيد</span></button>
                            </div>
                        </div>
                    </div><!--/$-->
                </div> --}}
            </div>
            <script
                type="application/ld+json">{"@context":"https://schema.org","@graph":[{"@type":"Organization","@id":"https://thmanyah.com/#organization","name":"ثمانية","url":"https://thmanyah.com/","sameAs":["https://www.facebook.com/Thmanyah","https://www.instagram.com/thmanyah/","https://www.linkedin.com/company/thmanyah","https://www.youtube.com/channel/UCQPalfEYxVLs8nEB4LutApQ","https://twitter.com/thmanyah"]},{"@type":"WebSite","@id":"https://thmanyah.com/#website","url":"https://thmanyah.com/","name":"ثمانية","description":"نصنع الوثائقيات وننشر المقالات ونصدح عبر البودكاست، لنغيّر ثقافة الصحافة العربية.","publisher":{"@id":"https://thmanyah.com/#organization"},"potentialAction":[{"@type":"SearchAction","target":"https://thmanyah.com/search/?q={search_term_string}","query-input":"required name=search_term_string"}],"inLanguage":"ar"}]}</script>
        </div>
    </main>
</div>
@endsection