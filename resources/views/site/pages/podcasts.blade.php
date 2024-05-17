@extends('site.layout.main-layout')

@section('title', 'United Podcast | الحلقات الجديدة')
@section('podcasts_active', 'active')

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
        <div class="container flex-1 h-full" id="home_wrapper">
            <main class="ant-layout-content css-t2ij9r">
                <div class="ant-space-item">
            <div
                class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center ant-space-gap-row-small ant-space-gap-col-small w-full justify-between -mb-2 ">
                <div class="ant-space-item">
                    <div
                        class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center ant-space-gap-row-small ant-space-gap-col-small w-full justify-between -mb-2 ">
                        <div class="ant-space-item">
                            <div
                                class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center ant-space-gap-row-small ant-space-gap-col-small w-full">
                                <div class="ant-space-item"><svg class=" w-9 h-9 inline-block" width="17" height="21"
                                        viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.4141 12.6667V8C15.4141 4.13401 12.2801 1 8.41406 1C4.54807 1 1.41406 4.13401 1.41406 8V12.6667M3.35851 15H1.41406V11.5C1.41406 10.4261 1.41406 9.75 1.41406 9.75H5.35156V15H3.35851ZM15.4141 15H11.5252V11.5C11.5252 10.9941 11.5252 9.55556 11.5252 9.55556H15.4141C15.4141 9.55556 15.4141 10.4261 15.4141 11.5V13.0556C15.4141 14.1294 15.4141 15 15.4141 15Z"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="square"></path>
                                    </svg></div>
                                <div class="ant-space-item">
                                    <h1 class="ant-typography ant-typography-rtl !mb-0 css-t2ij9r">الحلقات الجديدة</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div style="padding-bottom:34px;min-height:380px">
            <div class="ant-space css-t2ij9r ant-space-vertical ant-space-rtl w-full"
                style="column-gap:40px;row-gap:40px">
                @php
                    $latest_articles = App\Models\Article::where('type', 'podcast')->latest()->take(5)->get();
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
                                                    <div style="padding-left: 8px; padding-right: 8px;"
                                                    class="ant-col ant-col-xs-24 ant-col-rtl ant-col-md-12 ant-col-xl-12 css-t2ij9r"><a
                                                    href="/post/{{ $article->id }}"><img alt="{{ $article->title }}" loading="eager" decoding="async"
                                                    data-nimg="1" class="rounded-lg max-w-full h-auto aspect-[572.5/291]"
                                                    style="color: transparent; object-fit: cover;"
                                                    src="{{ $article->thumbnail_path }}"
                                                    width="600" height="300"></a></div>
                                                    <div style="padding-left:8px;padding-right:8px"
                                                        class="ant-col ant-col-xs-24 ant-col-rtl ant-col-md-12 ant-col-xl-12 css-t2ij9r">
                                                        <div class="ant-space css-t2ij9r ant-space-vertical ant-space-rtl">
                                                            <div class="ant-space-item"><a
                                                                    href="{{ route("post.show", ["id" => $article->id]) }}">
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
                                                                                href="/author/{{$article->author->id}}"><span
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
                                                        <div class="text-sm mb-2"><span>في <!-- --> <a
                                                                    class="text-black font-bold" href="/channel/{{ $article->channel->id }}">{{ $article->channel->title }}</a><span
                                                                class="ant-typography ant-typography-rtl text-colorTextSecondary sm:text-sm text-xs css-t2ij9r"
                                                                title="16 ديسمبر 2023"><i
                                                                    class="inline-block h-1 w-1 rounded-full bg-[#B2B2B2] mx-1 align-middle"></i>16
                                                                ديسمبر 2023</span></div>
                                                    </div>
                                                </div>
                                                <span class="flex items-center justify-center text-white bg-black/25 w-6 h-6 rounded-full absolute top-1 right-1"><svg class="w-3 h-3" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15 13.3912V8.52163C15 4.48756 11.866 1.21729 8 1.21729C4.13401 1.21729 1 4.48756 1 8.52163V13.3912M2.94444 15.826H1V12.1738C1 11.0532 1 10.3477 1 10.3477H4.9375V15.826H2.94444ZM15 15.826H11.1111V12.1738C11.1111 11.6459 11.1111 10.1448 11.1111 10.1448H15C15 10.1448 15 11.0532 15 12.1738V13.797C15 14.9176 15 15.826 15 15.826Z" stroke="currentColor" stroke-width="2" stroke-linecap="square"></path></svg></span>
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
                                                        <a href="{{ route("post.show", ["id" => $article->id]) }}"><img
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
                                                                    href="{{ route("post.show", ["id" => $article->id]) }}">
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
                                                                                href="/author/{{$article->author->id}}"><span
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
                                                        <div class="text-sm mb-2"><span>في <!-- --> <a
                                                                    class="text-black font-bold" href="/channel/{{ $article->channel->id }}">{{ $article->channel->title }}</a>
                                                                <span
                                                                class="ant-typography ant-typography-rtl text-colorTextSecondary sm:text-sm text-xs css-t2ij9r"
                                                                title="14 ديسمبر 2023"><i
                                                                    class="inline-block h-1 w-1 rounded-full bg-[#B2B2B2] mx-1 align-middle"></i>14
                                                                ديسمبر 2023</span></div>
                                                    </div>
                                                </div>
                                                <span class="flex items-center justify-center text-white bg-black/25 w-6 h-6 rounded-full absolute top-1 right-1"><svg class="w-3 h-3" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15 13.3912V8.52163C15 4.48756 11.866 1.21729 8 1.21729C4.13401 1.21729 1 4.48756 1 8.52163V13.3912M2.94444 15.826H1V12.1738C1 11.0532 1 10.3477 1 10.3477H4.9375V15.826H2.94444ZM15 15.826H11.1111V12.1738C11.1111 11.6459 11.1111 10.1448 11.1111 10.1448H15C15 10.1448 15 11.0532 15 12.1738V13.797C15 14.9176 15 15.826 15 15.826Z" stroke="currentColor" stroke-width="2" stroke-linecap="square"></path></svg></span>
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
                    $latest_mainls_programs = App\Models\Channel::where('type', 'podcast')->latest()->take(6)->get();
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
                                            <div class="ant-space-item">
                                                <h3 class="ant-typography ant-typography-rtl !mb-0 css-t2ij9r">
                                                    برامج مميّزة</h3>
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
                                            <div class="relative rounded-lg  shadow-custom "><a href="/channel/{{ $porgram->id }}"><img
                                                        alt="{{$porgram->title}}" loading="lazy" decoding="async" data-nimg="1"
                                                        class="w-full h-auto aspect-square bg-colorFillContentHover rounded-lg object-cover"
                                                        style="color: transparent;"
                                                        src="{{$porgram->thumbnail_path}}"
                                                        width="200" height="200"></a></div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="ant-space-item" v-if="latest_articles && latest_articles.length > 0" >
                                <div class="ant-divider css-t2ij9r ant-divider-horizontal ant-divider-rtl  m-0"
                                    role="separator"></div>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="ant-space-item" v-if="latest_articles && latest_articles.length > 0" style="display: none" :style='latest_articles && latest_articles.length > 0 ? "display: block" : "display: none"'><!--$-->
                    <div class="ant-space css-t2ij9r ant-space-vertical ant-space-rtl w-full" style="column-gap:40px;row-gap:40px">
                        <div class="ant-space-item">
                            <div>
                                <div class="ant-row ant-row-rtl css-t2ij9r" style="margin-left:-8px;margin-right:-8px;row-gap:32px">

                                    <div style="padding-left:8px;padding-right:8px" v-for="article in latest_articles" :key="article.id" class="ant-col ant-col-xs-24 ant-col-rtl ant-col-sm-24 ant-col-md-24 ant-col-lg-12 css-t2ij9r">
                                        <article class="relative">
                                            <div class="ant-row ant-row-top ant-row-rtl css-t2ij9r"
                                                style="margin-left:-8px;margin-right:-8px;row-gap:16px">
                                                <div style="padding-left:8px;padding-right:8px"
                                                    class="ant-col ant-col-xs-8 ant-col-rtl ant-col-md-7 ant-col-xl-8 css-t2ij9r">
                                                    <a :href="`/post/${article.id}`"><img :alt="article.title"
                                                            loading="lazy" decoding="async" data-nimg="1"
                                                            class="rounded-lg max-w-full h-auto aspect-[180/150]"
                                                            style="color:transparent;object-fit:cover"
                                                            :src="article.thumbnail_path"
                                                            width="600" height="300"></a>
                                                </div>
                                                <div style="padding-left:8px;padding-right:8px"
                                                    class="ant-col ant-col-xs-16 ant-col-rtl ant-col-md-17 ant-col-xl-16 css-t2ij9r">
                                                    <div class="ant-space css-t2ij9r ant-space-vertical ant-space-rtl">
                                                        <div class="ant-space-item"><a :href="`/post/${article.id}`">
                                                                <h4 class="ant-typography ant-typography-rtl ant-typography-ellipsis ant-typography-ellipsis-multiple-line  !text-[18px] mb-2 leading-[30px] css-t2ij9r"
                                                                    style="-webkit-line-clamp: 2;">@{{ article.title }}</h4>
                                                                <div
                                                                    class="ant-typography ant-typography-rtl  text-sm line-clamp-1 lg:line-clamp-2 mb-2 css-t2ij9r">
                                                                    @{{ article.intro }}
                                                                </div>
                                                            </a></div>
                                                        <div class="ant-space-item">
                                                            <div class=" mb-2">
                                                                <div class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center w-full"
                                                                    style="column-gap:16px;row-gap:16px">
                                                                    <div class="ant-space-item last-of-type:flex-1 ">
                                                                        <a class="font-bold text-sm" :href="`/author/${article.author.id}`"><span
                                                                                class="flex items-center gap-2 font-bold undefined">@{{ article.author.name }}</span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-sm mb-2"><span>في <!-- --> <a class="text-black font-bold"
                                                                :href="`/channel/${article.channel.id}`">@{{ article.channel.title }}</a></span><span
                                                            class="ant-typography ant-typography-rtl text-colorTextSecondary sm:text-sm text-xs css-t2ij9r"
                                                            title="13 ديسمبر 2023"><i
                                                                class="inline-block h-1 w-1 rounded-full bg-[#B2B2B2] mx-1 align-middle"></i>13
                                                            ديسمبر 2023</span></div>
                                                </div>
                                            </div>
                                            <span class="flex items-center justify-center text-white bg-black/25 w-6 h-6 rounded-full absolute top-1 right-1"><svg class="w-3 h-3" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15 13.3912V8.52163C15 4.48756 11.866 1.21729 8 1.21729C4.13401 1.21729 1 4.48756 1 8.52163V13.3912M2.94444 15.826H1V12.1738C1 11.0532 1 10.3477 1 10.3477H4.9375V15.826H2.94444ZM15 15.826H11.1111V12.1738C11.1111 11.6459 11.1111 10.1448 11.1111 10.1448H15C15 10.1448 15 11.0532 15 12.1738V13.797C15 14.9176 15 15.826 15 15.826Z" stroke="currentColor" stroke-width="2" stroke-linecap="square"></path></svg></span>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ant-space-item" v-if="isMore">
                            <div class="text-center undefined"><button id="load-more-button" type="button"
                                    class="ant-btn css-t2ij9r ant-btn-default ant-btn-rtl">
                                    <span style="display: flex;flex-direction: column;gap: 20px;align-items: center;">المزيد
                                        <div style="width: calc(67px);display: flex;justify-content: center;">
                                            <div class="dots" style="display: none"></div>
                                        </div>
                                    </span>
                                    </button>
                            </div>
                        </div>
                    </div><!--/$-->
                </div>
                <div style="width: calc(67px);display: flex;justify-content: center;margin: auto">
                    <div class="loader dots"></div>
                </div>
            </div>
            <script
                type="application/ld+json">{"@context":"https://schema.org","@graph":[{"@type":"Organization","@id":"https://thmanyah.com/#organization","name":"United Podcast","url":"https://thmanyah.com/","sameAs":["https://www.facebook.com/Thmanyah","https://www.instagram.com/thmanyah/","https://www.linkedin.com/company/thmanyah","https://www.youtube.com/channel/UCQPalfEYxVLs8nEB4LutApQ","https://twitter.com/thmanyah"]},{"@type":"WebSite","@id":"https://thmanyah.com/#website","url":"https://thmanyah.com/","name":"United Podcast","description":"نصنع الوثائقيات وننشر المقالات ونصدح عبر البودكاست، لنغيّر ثقافة الصحافة العربية.","publisher":{"@id":"https://thmanyah.com/#organization"},"potentialAction":[{"@type":"SearchAction","target":"https://thmanyah.com/search/?q={search_term_string}","query-input":"required name=search_term_string"}],"inLanguage":"ar"}]}</script>
        </div>
    </main>
</div>
@endsection

@section('scripts')
<script>
const { createApp, ref } = Vue

createApp({
    data() {
        return {
            latest_articles: null,
            num: 10,
            isMore: false
        }
    },
    methods: {
        async getArticles(num) {
            try {
                const response = await axios.post(`{{ route('articles.latest') }}`, {
                    num: num,
                    not_latest_five: true,
                    type: "podcast",
                },
                );
                if (response.data.status === true) {
                    this.latest_articles = response.data.data.articles
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
