
@extends('site.layout.main-layout')

@if (isset($article))
@section('title', $article->title)

@section('content')
<div style="padding-bottom:34px;min-height:380px;max-width: 95vw;margin: auto;">
    <div class="max-w-[700px] mx-auto relative   ">
        <div class=" relative">
            <div class=" flex justify-between items-start">
                <h2 class="ant-typography ant-typography-rtl  pb-4 m-0 font-bold  css-t2ij9r">{{ $article->title }}</h2>
            </div>
            <p class="text-base mb-4 !leading-[27px] !text-colorTextSecondary ">{{ $article->intro }}</p>
            <div class="mb-4 ">
                <div class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center w-full"
                    style="gap: 16px;">
                    <div class="ant-space-item last-of-type:flex-1 "><span
                            class="flex items-center gap-2 font-bold text-black text-sm w-full">
                            @if ($article->author->profile_path)
                                <img alt="الكاتب"
                                    loading="lazy" decoding="async" data-nimg="1" class="rounded-full"
                                    style="color: transparent;"
                                    src="{{ $article->author->profile_path }}"
                                    width="34" height="34">
                            @endif
                            <div class="text-start whitespace-nowrap"><a class="block text-base"
                                    href="/author/{{$article->author->id}}">{{ $article->author->name }}</a><span class="font-normal text-sm">في
                                    <a class="text-black font-bold" href="/channel/{{ $article->channel->id }}">{{ $article->channel->title }}</a><span
                                        class="ant-typography ant-typography-rtl text-colorTextSecondary sm:text-sm text-xs css-t2ij9r"
                                        title="16 ديسمبر 2023"><i
                                            class="inline-block h-1 w-1 rounded-full bg-[#B2B2B2] mx-1 align-middle"></i>16
                                        ديسمبر 2023</span></span></div>
                        </span></div>
                    <div class="ant-space-item last-of-type:flex-1 "></div>
                </div>
            </div>
            <div class="ant-divider css-t2ij9r ant-divider-horizontal ant-divider-rtl  my-4 border-PalletTintedBorder"
                role="separator"></div>
            <div class="
                            md:w-auto min-w-[170px]

                                hidden
                        ">
                <div class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center  flex justify-between pt-4 pb-4 mb-8 border border-solid border-r-0 border-l-0 border-PalletTinted"
                    style="flex-wrap: wrap; gap: 16px;">
                    <div class="ant-space-item"><span class="whitespace-nowrap relative"><button type="button"
                                class="ant-btn css-t2ij9r ant-btn-circle ant-btn-text ant-btn-sm ant-btn-icon-only ant-btn-rtl !px-0"><span
                                    class="ant-btn-icon"><span role="img" aria-label="link" style="font-size: 20px;"
                                        class="anticon anticon-link"><svg viewBox="64 64 896 896" focusable="false"
                                            data-icon="link" width="1em" height="1em" fill="currentColor"
                                            aria-hidden="true">
                                            <path
                                                d="M574 665.4a8.03 8.03 0 00-11.3 0L446.5 781.6c-53.8 53.8-144.6 59.5-204 0-59.5-59.5-53.8-150.2 0-204l116.2-116.2c3.1-3.1 3.1-8.2 0-11.3l-39.8-39.8a8.03 8.03 0 00-11.3 0L191.4 526.5c-84.6 84.6-84.6 221.5 0 306s221.5 84.6 306 0l116.2-116.2c3.1-3.1 3.1-8.2 0-11.3L574 665.4zm258.6-474c-84.6-84.6-221.5-84.6-306 0L410.3 307.6a8.03 8.03 0 000 11.3l39.7 39.7c3.1 3.1 8.2 3.1 11.3 0l116.2-116.2c53.8-53.8 144.6-59.5 204 0 59.5 59.5 53.8 150.2 0 204L665.3 562.6a8.03 8.03 0 000 11.3l39.8 39.8c3.1 3.1 8.2 3.1 11.3 0l116.2-116.2c84.5-84.6 84.5-221.5 0-306.1zM610.1 372.3a8.03 8.03 0 00-11.3 0L372.3 598.7a8.03 8.03 0 000 11.3l39.6 39.6c3.1 3.1 8.2 3.1 11.3 0l226.4-226.4c3.1-3.1 3.1-8.2 0-11.3l-39.5-39.6z">
                                            </path>
                                        </svg></span></span></button></span></div>
                </div>
            </div>
            <div class="max-w-[700px]">
                <div class="article-editor-content relative">
                    <img src="{{ $article->thumbnail_path }}" class="null" alt="{{ $article->title }}" width="100%" height="auto">
                    {!! $article->content !!}
                </div>
            </div>
            <div class=" hidden"></div>
            <div class=" hidden"></div>
            <section
                class="md:p-[48px] sm:p-[32px] xs:p-[32px] py-[32px] flex items-center justify-start flex-col  border border-PalletTintedBorder border-solid border-l-0 border-r-0  md:border-b border-b-2">
                <div class="block">
                    <div class="ant-row ant-row-rtl w-full flex items-center justify-center !m-0 css-t2ij9r"
                        style="margin-left: -12px; margin-right: -12px; row-gap: 16px;">
                        <div style="padding-left: 12px; padding-right: 12px;"
                            class="ant-col gutter-row m-auto flex justify-center ant-col-xs-24 ant-col-rtl ant-col-md-24 ant-col-lg-24 ant-col-xl-24 css-t2ij9r">
                            <a href="
                                /channel/{{ $article->channel->id }}
                                "><img alt="{{ $article->channel->title }}" loading="lazy" decoding="async" data-nimg="1"
                                    class="flex md:!ml-0 m-auto w-full h-auto rounded-lg"
                                    style="color: transparent; width: 90px !important"
                                    src="{{ $article->channel->thumbnail_path }}"
                                    width="90" height="90"></a></div>
                        <div style="padding-left: 12px; padding-right: 12px;"
                            class="ant-col gutter-row w-full flex items-center justify-center flex-col ant-col-xs-24 ant-col-rtl ant-col-md-24 ant-col-lg-24 ant-col-xl-24 css-t2ij9r">
                            <h2 class="m-0 text-[32px] font-bold leading-[42px] text-center  mb-4 ">{{ $article->channel->title }}</h2>
                            <div class="block text-center md:px-16"><span
                                    class="ant-typography ant-typography-rtl text-base font-normal text-colorTextSecondary leading-[27px] css-t2ij9r">{{ $article->channel->description }}</span></div>
                        </div>
                        {{-- <div class="ant-divider css-t2ij9r ant-divider-horizontal ant-divider-rtl m-0 max-w-[592px] min-w-min"
                            role="separator"></div> --}}
                        {{-- <div style="padding-left: 12px; padding-right: 12px;"
                            class="ant-col gutter-row w-full flex justify-center p-0 ant-col-xs-24 ant-col-rtl ant-col-md-24 ant-col-lg-24 ant-col-xl-24 css-t2ij9r">
                            <form id="subscribe" style="display: flex;margin-top: 1rem;flex-direction: column;justify-content: center;align-items: center;gap: 13px;" autocomplete="off"
                                class="ant-form ant-form-inline ant-form-rtl css-t2ij9r subscribe-form">
                                <div
                                    class="ant-form-item md:w-[300px] w-full md:h-[71px] h-auto md:ml-2 md:mb-0 mb-[6px] css-t2ij9r">
                                    <div class="ant-row ant-row-rtl ant-form-item-row css-t2ij9r">
                                        <div class="ant-col ant-form-item-label ant-col-rtl css-t2ij9r"><label
                                                for="subscribe_email" class="ant-form-item-no-colon"
                                                title="بريدك المفضل">بريدك المفضل</label></div>
                                        <div class="ant-col ant-form-item-control ant-col-rtl css-t2ij9r">
                                            <div class="ant-form-item-control-input">
                                                <div class="ant-form-item-control-input-content"><input
                                                        placeholder="hala@feek.com" id="subscribe_email"
                                                        class="ant-input ant-input-rtl css-t2ij9r h-10"  style="box-sizing: border-box;margin: 0;padding: 9.8px 11px;color: rgba(0, 0, 0, 0.88);font-size: 16px;line-height: 1.15;list-style: none;position: relative;display: inline-block;width: 100%;min-width: 0;background-color: #ffffff;background-image: none;border-width: 1px;border-style: solid;border-color: #d9d9d9;border-radius: 8px;transition: all 0.2s;direction: ltr;" type="email"
                                                        value=""></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="width: 100% !important;min-width: 100%;"
                                    class="ant-form-item md:max-w-[171px] w-full md:h-[71px] ml-2 h-auto css-t2ij9r">
                                    <div class="ant-row ant-row-rtl ant-form-item-row css-t2ij9r">
                                        <div class="ant-col ant-form-item-label ant-col-rtl css-t2ij9r"><label
                                                for="subscribe_name"
                                                class="ant-form-item-required ant-form-item-no-colon"
                                                title="اسمك الأول، بالعربية">اسمك الأول، بالعربية</label></div>
                                        <div class="ant-col ant-form-item-control ant-col-rtl css-t2ij9r">
                                            <div class="ant-form-item-control-input">
                                                <div class="ant-form-item-control-input-content"><input  style="box-sizing: border-box;margin: 0;padding: 9.8px 11px;color: rgba(0, 0, 0, 0.88);font-size: 16px;line-height: 1.15;list-style: none;position: relative;display: inline-block;width: 100%;min-width: 0;background-color: #ffffff;background-image: none;border-width: 1px;border-style: solid;border-color: #d9d9d9;border-radius: 8px;transition: all 0.2s;direction: ltr;"
                                                        placeholder="عائشة" id="subscribe_name" aria-required="true"
                                                        class="ant-input ant-input-rtl css-t2ij9r h-10 leading-10"
                                                        type="text" value=""></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="ant-form-item md:h-[71px] ml-0 md:w-auto w-full md:flex block md:pt-0 pt-[6px] css-t2ij9r">
                                    <div class="ant-row ant-row-rtl ant-form-item-row css-t2ij9r">
                                        <div class="ant-col ant-form-item-control ant-col-rtl css-t2ij9r">
                                            <div class="ant-form-item-control-input">
                                                <div class="ant-form-item-control-input-content"><button
                                                        type="submit"
                                                        class="ant-btn css-t2ij9r ant-btn-primary ant-btn-rtl  w-full px-8"><span>اشترك</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div> --}}
                    </div>
                </div>
            </section>
            @php
                $channel_articles = App\Models\Article::where('channel_id', $article->channel_id)->latest()->take(6)->get();
            @endphp
            @if ($channel_articles->count() > 0)
                <section class=" pt-[21px] pb-[22px]  ">
                    <div
                        class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center ant-space-gap-row-small ant-space-gap-col-small w-full justify-between -mb-2 mb-[21px]">
                        <div class="ant-space-item">
                            <div
                                class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center ant-space-gap-row-small ant-space-gap-col-small w-full">
                                <div class="ant-space-item">
                                    <h5 class="ant-typography ant-typography-rtl !mb-0 css-t2ij9r"> المزيد من {{ $article->channel->title }}
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="ant-space-item"><a class="font-semibold underline-offset-2 underline"
                                href="/channel/{{ $article->channel->id }}">المزيد</a></div>
                    </div>
                    <div>
                        <div class="ant-row ant-row-rtl css-t2ij9r"
                            style="margin-left: -8px; margin-right: -8px; row-gap: 34px;">
                            @foreach ($channel_articles as $channel_article)
                                <div style="padding-left: 8px; padding-right: 8px;" class="ant-col

                                            p-0
                                            ant-col-xs-24 ant-col-rtl ant-col-sm-24 ant-col-md-24 ant-col-lg-24 css-t2ij9r">
                                    <article class="relative">
                                        <div class="ant-row ant-row-top ant-row-rtl  m-0  css-t2ij9r"
                                            style="margin-left: -8px; margin-right: -8px; row-gap: 16px;">
                                            <div style="padding-left: 8px; padding-right: 8px;"
                                                class="ant-col  p-0  ant-col-xs-8 ant-col-rtl ant-col-md-7 ant-col-xl-6 css-t2ij9r">
                                                <a href="/post/{{$channel_article->id}}"><img alt="{{$channel_article->title}}"
                                                        loading="lazy" decoding="async" data-nimg="1"
                                                        class="rounded-lg max-w-full h-auto aspect-[180/160]"
                                                        style="color: transparent; object-fit: cover;"
                                                        src="{{$channel_article->thumbnail_path}}"
                                                        width="180" height="160"></a></div>
                                            <div style="padding-left: 8px; padding-right: 8px;"
                                                class="ant-col  pr-4  ant-col-xs-16 ant-col-rtl ant-col-md-17 ant-col-xl-18 css-t2ij9r">
                                                <div class="ant-space css-t2ij9r ant-space-vertical ant-space-rtl">
                                                    <div class="ant-space-item"><a href="/post/{{$channel_article->id}}">
                                                            <h4 class="ant-typography ant-typography-rtl ant-typography-ellipsis ant-typography-ellipsis-multiple-line  !text-[18px] mb-2 leading-[30px] css-t2ij9r"
                                                                style="-webkit-line-clamp: 2;">{{$channel_article->title}}</h4>
                                                            <div
                                                                class="ant-typography ant-typography-rtl  text-sm line-clamp-1 lg:line-clamp-2 mb-2 css-t2ij9r">
                                                                {{$channel_article->intro}}
                                                            </div>
                                                        </a></div>
                                                    <div class="ant-space-item">
                                                        <div class=" mb-2">
                                                            <div class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center w-full"
                                                                style="gap: 16px;">
                                                                <div class="ant-space-item last-of-type:flex-1 "><a
                                                                        class="font-bold text-sm"
                                                                        href="/author/{{$channel_article->author->id}}"><span
                                                                            class="flex items-center gap-2 font-bold undefined">
                                                                            @if ($channel_article->author->profile_path)
                                                                            <img
                                                                                alt="" loading="lazy" decoding="async"
                                                                                data-nimg="1" class="rounded-full"
                                                                                style="color: transparent;"
                                                                                src="{{$channel_article->author->profile_path}}"
                                                                                width="18" height="18">
                                                                            @endif
                                                                            {{$channel_article->author->name}}
                                                                            </span></a></div>
                                                                <div class="ant-space-item last-of-type:flex-1 "><span
                                                                        class="ant-typography ant-typography-rtl text-colorTextSecondary sm:text-sm text-xs css-t2ij9r"><span
                                                                            class="-mr-2"><i
                                                                                class="inline-block h-1 w-1 rounded-full bg-[#B2B2B2] ml-1 align-middle"></i>9
                                                                            ديسمبر 2023</span></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-sm mb-2"><span>في  <a class="text-black font-bold"
                                                            href="/channel/{{ $article->channel->id }}">{{$channel_article->channel->title}}</a> </span><span
                                                        class="ant-typography ant-typography-rtl text-colorTextSecondary sm:text-sm text-xs css-t2ij9r"
                                                        title="9 ديسمبر 2023"></span></div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            @endif
        </div>
    </div>
</div>
@endsection
@else
@section('content')
    <h1 style="font-size: 50px; margin: auto; color: #030386;">404 | غير متوفر</h1>
@endsection
@endif
