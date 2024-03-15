@extends('site.layout.main-layout')

@section('title', 'United Podcast | الوثائقيات')
@section('videos_active', 'active')

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
                        <div class="ant-space-item"><span role="img" aria-label="video-camera"
                                class="anticon anticon-video-camera text-4xl"><svg viewBox="64 64 896 896" focusable="false"
                                    data-icon="video-camera" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M912 302.3L784 376V224c0-35.3-28.7-64-64-64H128c-35.3 0-64 28.7-64 64v576c0 35.3 28.7 64 64 64h592c35.3 0 64-28.7 64-64V648l128 73.7c21.3 12.3 48-3.1 48-27.6V330c0-24.6-26.7-40-48-27.7zM712 792H136V232h576v560zm176-167l-104-59.8V458.9L888 399v226zM208 360h112c4.4 0 8-3.6 8-8v-48c0-4.4-3.6-8-8-8H208c-4.4 0-8 3.6-8 8v48c0 4.4 3.6 8 8 8z">
                                    </path>
                                </svg></span></div>
                        <div class="ant-space-item">
                            <h1 class="ant-typography ant-typography-rtl !mb-0 css-t2ij9r">الوثائقيات</h1>
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
                    $latest_articles = App\Models\Article::where('type', 'video')->latest()->take(5)->get();
                @endphp
                @if ($latest_articles->count() > 0)
                    <div class="ant-space-item">
                        <div>
                            <div class="ant-row ant-row-rtl css-t2ij9r"
                            style="margin-left:-8px;margin-right:-8px;row-gap:32px">
                                @foreach ($latest_articles as $index => $article)
                                    @if($index == 0)
                                        <div style="padding-left: 8px; padding-right: 8px;" class="ant-col ant-col-24 ant-col-rtl css-t2ij9r">
                                            <article class="relative">
                                                <div class="ant-row ant-row-middle ant-row-rtl css-t2ij9r"
                                                    style="margin-left: -10.5px; margin-right: -10.5px; row-gap: 8px;">
                                                    <div style="padding-left: 10.5px; padding-right: 10.5px;"
                                                        class="ant-col ant-col-xs-24 ant-col-rtl ant-col-lg-12 ant-col-xl-12 css-t2ij9r"><a
                                                            class="relative undefined" href="/post/{{$article->id}}"><img alt="{{$article->title}}"
                                                                loading="lazy" decoding="async" data-nimg="1" class="rounded-lg w-full h-auto aspect-[386/211] "
                                                                style="color: transparent; object-fit: cover;"
                                                                src="{{$article->thumbnail_path}}"
                                                                width="640" height="350"></a></div>
                                                    <div style="padding-left: 10.5px; padding-right: 10.5px;"
                                                        class="ant-col ant-col-xs-24 ant-col-rtl ant-col-lg-12 ant-col-xl-12 css-t2ij9r"><a
                                                            class="relative undefined" href="/post/{{$article->id}}">
                                                            <div class="ant-space css-t2ij9r ant-space-vertical ant-space-rtl">
                                                                <div class="ant-space-item">
                                                                    <h4 class="ant-typography ant-typography-rtl ant-typography-ellipsis ant-typography-ellipsis-multiple-line mb-[12px] !text-[32px] overflow-visible css-t2ij9r"
                                                                        style="-webkit-line-clamp: 2;">{{$article->title}}</h4>
                                                                </div>
                                                                <div class="ant-space-item">
                                                                    <div class="ant-typography ant-typography-rtl mb-[19px] text-xl line-clamp-3 css-t2ij9r">
                                                                        {{$article->intro}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="mb-2 text-sm">
                                                            <div class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center w-full"
                                                                style="gap: 16px;">
                                                                <div class="ant-space-item last-of-type:flex-1 "><a class="font-bold"
                                                                        href="/channel/{{$article->channel->id}}"><span class="flex items-center gap-2 font-bold undefined">{{$article->channel->title}}</span></a></div>
                                                                <div class="ant-space-item last-of-type:flex-1 "><span
                                                                        class="ant-typography ant-typography-rtl text-colorTextSecondary sm:text-sm text-xs css-t2ij9r">15
                                                                        ديسمبر 2023</span></div>
                                                                <div class="ant-space-item last-of-type:flex-1 "></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><span
                                                    class="flex items-center justify-center text-white bg-black/25 w-6 h-6 rounded-full absolute top-1 right-1"><svg
                                                        class="w-4 h-4" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10.6665 6.86163L12.9833 5.43353C13.189 5.30673 13.4472 5.30114 13.6581 5.41892C13.8691 5.5367 13.9998 5.75941 13.9998 6.00103V10.6656C13.9998 10.9072 13.8691 11.1299 13.6582 11.2477C13.4472 11.3654 13.189 11.3599 12.9834 11.2331L10.6665 9.80495"
                                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <rect x="2" y="4" width="8.66667" height="8.66667" rx="3" stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></rect>
                                                    </svg></span>
                                            </article>
                                        </div>
                                    @else
                                        <div style="padding-left: 8px; padding-right: 8px;" class="ant-col ant-col-xs-24 ant-col-rtl ant-col-sm-12 ant-col-md-12 ant-col-lg-8 css-t2ij9r">
                                            <article class="relative">
                                                <div class="ant-row ant-row-top ant-row-rtl css-t2ij9r"
                                                    style="margin-left: -10.5px; margin-right: -10.5px; row-gap: 8px;">
                                                    <div style="padding-left: 10.5px; padding-right: 10.5px;"
                                                        class="ant-col ant-col-xs-24 ant-col-rtl ant-col-lg-24 ant-col-xl-24 css-t2ij9r"><a
                                                            class="relative undefined" href="/post/{{$article->id}}"><img
                                                                alt="{{$article->title}}" loading="lazy" decoding="async"
                                                                data-nimg="1" class="rounded-lg w-full h-auto aspect-[386/211] "
                                                                style="color: transparent; object-fit: cover;"
                                                                src="{{$article->thumbnail_path}}"
                                                                width="640" height="350"></a></div>
                                                    <div style="padding-left: 10.5px; padding-right: 10.5px;"
                                                        class="ant-col ant-col-xs-24 ant-col-rtl ant-col-lg-24 ant-col-xl-24 css-t2ij9r"><a
                                                            class="relative undefined" href="/post/1jqh30pppa_1jhggnmybp">
                                                            <div class="ant-space css-t2ij9r ant-space-vertical ant-space-rtl">
                                                                <div class="ant-space-item">
                                                                    <h4 class="ant-typography ant-typography-rtl ant-typography-ellipsis ant-typography-ellipsis-multiple-line mb-2 overflow-visible css-t2ij9r"
                                                                        style="-webkit-line-clamp: 2;">{{$article->title}}</h4>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="mb-2 text-sm">
                                                            <div class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center w-full"
                                                                style="gap: 16px;">
                                                                <div class="ant-space-item last-of-type:flex-1 "><a class="font-bold text-sm"
                                                                        href="/channel/{{$article->channel->id}}"><span
                                                                            class="flex items-center gap-2 font-bold undefined">{{$article->channel->title}}</span></a></div>
                                                                <div class="ant-space-item last-of-type:flex-1 "><span
                                                                        class="ant-typography ant-typography-rtl text-colorTextSecondary sm:text-sm text-xs css-t2ij9r">13
                                                                        ديسمبر 2023</span></div>
                                                                <div class="ant-space-item last-of-type:flex-1 "></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><span
                                                    class="flex items-center justify-center text-white bg-black/25 w-6 h-6 rounded-full absolute top-1 right-1"><svg
                                                        class="w-4 h-4" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10.6665 6.86163L12.9833 5.43353C13.189 5.30673 13.4472 5.30114 13.6581 5.41892C13.8691 5.5367 13.9998 5.75941 13.9998 6.00103V10.6656C13.9998 10.9072 13.8691 11.1299 13.6582 11.2477C13.4472 11.3654 13.189 11.3599 12.9834 11.2331L10.6665 9.80495"
                                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <rect x="2" y="4" width="8.66667" height="8.66667" rx="3" stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></rect>
                                                    </svg></span>
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
                    $latest_mainls_programs = App\Models\Channel::where('type', 'video')->latest()->take(6)->get();
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
                                    <div style="padding-left: 8px; padding-right: 8px;" v-for="article in latest_articles" :key="article.id"  class="ant-col ant-col-xs-24 ant-col-rtl ant-col-sm-12 ant-col-md-12 ant-col-lg-8 css-t2ij9r">
                                        <article class="relative">
                                            <div class="ant-row ant-row-top ant-row-rtl css-t2ij9r"
                                                style="margin-left: -10.5px; margin-right: -10.5px; row-gap: 8px;">
                                                <div style="padding-left: 10.5px; padding-right: 10.5px;"
                                                    class="ant-col ant-col-xs-24 ant-col-rtl ant-col-lg-24 ant-col-xl-24 css-t2ij9r"><a
                                                        class="relative undefined" :href="`/post/${article.id}`"><img
                                                            :alt="article.title" loading="lazy" decoding="async" data-nimg="1"
                                                            class="rounded-lg w-full h-auto aspect-[386/211] "
                                                            style="color: transparent; object-fit: cover;"
                                                            :src="article.thumbnail_path"
                                                            width="640" height="350"></a></div>
                                                <div style="padding-left: 10.5px; padding-right: 10.5px;"
                                                    class="ant-col ant-col-xs-24 ant-col-rtl ant-col-lg-24 ant-col-xl-24 css-t2ij9r"><a
                                                        class="relative undefined" :href="`/post/${article.id}`">
                                                        <div class="ant-space css-t2ij9r ant-space-vertical ant-space-rtl">
                                                            <div class="ant-space-item">
                                                                <h4 class="ant-typography ant-typography-rtl ant-typography-ellipsis ant-typography-ellipsis-multiple-line mb-2 overflow-visible css-t2ij9r"
                                                                    style="-webkit-line-clamp: 2;">@{{article.title}}</h4>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="mb-2 text-sm">
                                                        <div class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center w-full"
                                                            style="gap: 16px;">
                                                            <div class="ant-space-item last-of-type:flex-1 "><a class="font-bold text-sm"
                                                                    :href="`/channel/${article.channel.id}`"><span
                                                                        class="flex items-center gap-2 font-bold undefined">@{{article.channel.title}}</span></a></div>
                                                            <div class="ant-space-item last-of-type:flex-1 "><span
                                                                    class="ant-typography ant-typography-rtl text-colorTextSecondary sm:text-sm text-xs css-t2ij9r">22
                                                                    نوفمبر 2023</span></div>
                                                            <div class="ant-space-item last-of-type:flex-1 "></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><span
                                                class="flex items-center justify-center text-white bg-black/25 w-6 h-6 rounded-full absolute top-1 right-1"><svg
                                                    class="w-4 h-4" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.6665 6.86163L12.9833 5.43353C13.189 5.30673 13.4472 5.30114 13.6581 5.41892C13.8691 5.5367 13.9998 5.75941 13.9998 6.00103V10.6656C13.9998 10.9072 13.8691 11.1299 13.6582 11.2477C13.4472 11.3654 13.189 11.3599 12.9834 11.2331L10.6665 9.80495"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <rect x="2" y="4" width="8.66667" height="8.66667" rx="3" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round"></rect>
                                                </svg></span>
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
                    type: "video",
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
