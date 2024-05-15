
@extends('site.layout.main-layout')

@if (isset($channel))
@section('title', $channel->title)

@section('content')
<div class="container flex-1 h-full" id="channel_wrapper">
    <main class="ant-layout-content css-t2ij9r">
        <div style="padding-bottom:34px;min-height:380px">
            <div class="ant-space css-t2ij9r ant-space-vertical ant-space-rtl w-full gap-mobile-24" style="gap: 40px;">
                <div class="ant-space-item">
                    <div class="ant-row ant-row-rtl css-t2ij9r" style="margin-left: -17px; margin-right: -17px;">
                        <div style="padding-left: 17px; padding-right: 17px;"
                            class="ant-col flex items-start lg:justify-between  ant-col-xs-24 ant-col-rtl ant-col-md-5 ant-col-lg-4 ant-col-xl-3 css-t2ij9r">
                            <span class="flex-[0_0_96px]"><img alt="{{$channel->title}}" loading="lazy" decoding="async"
                                    data-nimg="1" class="rounded-lg max-w-[90%] h-auto"
                                    style="color: transparent; object-fit: cover;"
                                    src="{{$channel->thumbnail_path}}"
                                    width="96" height="96"></span>
                            <div class="ant-divider css-t2ij9r ant-divider-vertical ant-divider-rtl block h-full m-0"
                                role="separator"></div>
                            <div>
                                <h1
                                    class="ant-typography ant-typography-rtl text-[24px] !mb-0 md:hidden ps-5 css-t2ij9r">
                                    {{ $channel->title }}
                                    {{-- <button type="button"
                                        class="ant-btn css-t2ij9r ant-btn-primary ant-btn-sm ant-btn-rtl m-1 ms-2 align-middle"><span>اشترك</span></button> --}}
                                </h1><span
                                    class="ant-typography ant-typography-rtl  mb-4 block leading-6 ps-5 pt-[13px] md:hidden text-colorTextSecondary css-t2ij9r">نشرة
                                    {{ $channel->description }}</span>
                            </div>
                        </div>
                        <div style="padding-left: 17px; padding-right: 17px;"
                            class="ant-col ant-col-xs-24 ant-col-rtl ant-col-md-19 ant-col-lg-20 ant-col-xl-21 css-t2ij9r">
                            <div
                                class="ant-space css-t2ij9r ant-space-vertical ant-space-rtl ant-space-gap-row-small ant-space-gap-col-small w-full">
                                <div class="ant-space-item">
                                    <h1 class="ant-typography ant-typography-rtl hidden md:block css-t2ij9r">{{$channel->title}}
                                        {{-- <button type="button"
                                            class="ant-btn css-t2ij9r ant-btn-primary ant-btn-sm ant-btn-rtl m-1 ms-2 align-middle"><span>اشترك</span></button> --}}
                                    </h1>
                                </div>
                                <div class="ant-space-item"><span
                                        class="ant-typography ant-typography-rtl  mb-4 md:block leading-6 hidden text-colorTextSecondary css-t2ij9r">{{ $channel->description }}</span></div>
                            </div>
                        </div>
                        <div style="padding-left: 17px; padding-right: 17px;"
                            class="ant-col ant-col-xs-24 ant-col-rtl css-t2ij9r">
                            <div class="ant-divider css-t2ij9r ant-divider-horizontal ant-divider-rtl hidden lg:block mt-4 mb-0"
                                role="separator"></div>
                        </div>
                    </div>
                </div>
                @php
                    $channelId = $channel->id;
                    $authors = App\Models\Author::whereHas('articles', function ($query) use ($channelId) {
                        $query->where('channel_id', $channelId);
                    })->get()->unique();
                @endphp
                <div class="ant-space-item">
                    <div class="ant-tabs ant-tabs-top ant-tabs-rtl styled-tabs css-t2ij9r">
                        <div class="sticky top-[72px] z-10 bg-heroText py-2" style="">
                        <div role="tablist" class="ant-tabs-nav" style="margin: 0 !important;">
                                <div class="ant-tabs-nav-wrap">
                                    <div class="ant-tabs-nav-list" style="transform: translate(0px);display: flex;">
                                        <div data-node-key="all" class="ant-tabs-tab" :class="showArticles ? 'ant-tabs-tab-active' : ''" @click="showTeam = false;showArticles = true">
                                            <div role="tab" aria-selected="true" class="ant-tabs-tab-btn" tabindex="0" id="rc-tabs-2-tab-all"
                                                aria-controls="rc-tabs-2-panel-all"><span class="inline-block w-5 h-5 text-center"><svg
                                                        width="20" height="21" viewBox="0 0 20 21" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M7 2.08691H2V7.47822H7V2.08691ZM2 0.0869141H0V2.08691V7.47822V9.47822H2H7H9V7.47822V2.08691V0.0869141H7H2ZM13 2.08691H18V7.47822H13V2.08691ZM11 0.0869141H13H18H20V2.08691V7.47822V9.47822H18H13H11V7.47822V2.08691V0.0869141ZM13 13.5652H18V18.9565H13V13.5652ZM11 11.5652H13H18H20V13.5652V18.9565V20.9565H18H13H11V18.9565V13.5652V11.5652ZM2 13.5652H7V18.9565H2V13.5652ZM0 11.5652H2H7H9V13.5652V18.9565V20.9565H7H2H0V18.9565V13.5652V11.5652Z"
                                                            fill="currentColor"></path>
                                                    </svg></span></div>
                                        </div>
                                        <div data-node-key="members" class="ant-tabs-tab" :class="showTeam ? 'ant-tabs-tab-active' : ''" @click="showTeam = true;showArticles = false">
                                            <div role="tab" aria-selected="false" class="ant-tabs-tab-btn" tabindex="0"
                                                id="rc-tabs-2-tab-members" aria-controls="rc-tabs-2-panel-members"><span
                                                    class="inline-block w-5 h-5 text-center"><svg class="w-5 h-5" width="17" height="19"
                                                        viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M5 5.34774C5 3.5543 6.38283 2.17383 8 2.17383C9.61717 2.17383 11 3.5543 11 5.34774C11 7.14118 9.61717 8.52165 8 8.52165C6.38283 8.52165 5 7.14118 5 5.34774ZM8 0.173828C5.19889 0.173828 3 2.53081 3 5.34774C3 7.3246 4.08293 9.07493 5.69695 9.9431C2.37714 11.014 0 14.2352 0 17.9854V18.9854H2V17.9854C2 14.3991 4.77572 11.5651 8.11111 11.5651C11.4465 11.5651 14.2222 14.3991 14.2222 17.9854V18.9854H16.2222V17.9854C16.2222 14.182 13.7772 10.9228 10.3835 9.89885C11.953 9.01638 13 7.29157 13 5.34774C13 2.53081 10.8011 0.173828 8 0.173828Z"
                                                            fill="currentColor"></path>
                                                    </svg></span></div>
                                        </div>
                                        <div class="ant-tabs-ink-bar ant-tabs-ink-bar-animated"
                                            style="right: 20px; transform: translateX(50%); width: 40px;"></div>
                                    </div>
                                </div>
                                <div class="ant-tabs-nav-operations ant-tabs-nav-operations-hidden"
                                    style="border-bottom: 1px solid #dbd9d5;height: 1px;"><button type="button" class="ant-tabs-nav-more"
                                        style="visibility: hidden; order: 1;" tabindex="-1" aria-hidden="true" aria-haspopup="listbox"
                                        aria-controls="rc-tabs-2-more-popup" id="rc-tabs-2-more" aria-expanded="false"><span role="img"
                                            aria-label="ellipsis" class="anticon anticon-ellipsis"><svg viewBox="64 64 896 896"
                                                focusable="false" data-icon="ellipsis" width="1em" height="1em" fill="currentColor"
                                                aria-hidden="true">
                                                <path
                                                    d="M176 511a56 56 0 10112 0 56 56 0 10-112 0zm280 0a56 56 0 10112 0 56 56 0 10-112 0zm280 0a56 56 0 10112 0 56 56 0 10-112 0z">
                                                </path>
                                            </svg></span></button></div>
                            </div>
                        </div>
                        <div class="ant-space-item mt-3" v-if="latest_articles && latest_articles.length > 0 && showArticles" style="display: none"
                            :style='latest_articles && latest_articles.length > 0 ? "display: block" : "display: none"'><!--$-->
                            <div class="ant-space css-t2ij9r ant-space-vertical ant-space-rtl w-full" style="column-gap:40px;row-gap:40px">
                                <div class="ant-space-item">
                                    <div>
                                        <div class="ant-row ant-row-rtl css-t2ij9r" style="margin-left:-8px;margin-right:-8px;row-gap:32px">

                                            <div style="padding-left:8px;padding-right:8px" v-for="article in latest_articles" :key="article.id"
                                                class="ant-col ant-col-xs-24 ant-col-rtl ant-col-sm-24 ant-col-md-24 ant-col-lg-12 css-t2ij9r">
                                                <article class="relative">
                                                    <div class="ant-row ant-row-top ant-row-rtl css-t2ij9r"
                                                        style="margin-left:-8px;margin-right:-8px;row-gap:16px">
                                                        <div style="padding-left:8px;padding-right:8px"
                                                            class="ant-col ant-col-xs-8 ant-col-rtl ant-col-md-7 ant-col-xl-8 css-t2ij9r">
                                                            <a :href="`/post/${article.id}`"><img :alt="article.title" loading="lazy"
                                                                    decoding="async" data-nimg="1"
                                                                    class="rounded-lg max-w-full h-auto aspect-[180/150]"
                                                                    style="color:transparent;object-fit:cover" :src="article.thumbnail_path"
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
                                                                                        class="flex items-center gap-2 font-bold undefined">@{{
                                                                                        article.author.name }}</span></a>
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
                        <div class="ant-tabs-content-holder" v-if="showTeam" >
                            <div class="ant-tabs-content ant-tabs-content-top">
                                <div id="rc-tabs-0-panel-members" role="tabpanel" tabindex="0" aria-labelledby="rc-tabs-0-tab-members"
                                    aria-hidden="false" class="ant-tabs-tabpane ant-tabs-tabpane-active">
                                    <div
                                        class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center ant-space-gap-row-small ant-space-gap-col-small w-full justify-between -mb-2 mt-4 mb-6">
                                        <div class="ant-space-item">
                                            <div
                                                class="ant-space css-t2ij9r ant-space-horizontal ant-space-rtl ant-space-align-center ant-space-gap-row-small ant-space-gap-col-small w-full">
                                                <div class="ant-space-item"><svg class="h-[24px] w-auto" width="17" height="19"
                                                        viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M5 5.34774C5 3.5543 6.38283 2.17383 8 2.17383C9.61717 2.17383 11 3.5543 11 5.34774C11 7.14118 9.61717 8.52165 8 8.52165C6.38283 8.52165 5 7.14118 5 5.34774ZM8 0.173828C5.19889 0.173828 3 2.53081 3 5.34774C3 7.3246 4.08293 9.07493 5.69695 9.9431C2.37714 11.014 0 14.2352 0 17.9854V18.9854H2V17.9854C2 14.3991 4.77572 11.5651 8.11111 11.5651C11.4465 11.5651 14.2222 14.3991 14.2222 17.9854V18.9854H16.2222V17.9854C16.2222 14.182 13.7772 10.9228 10.3835 9.89885C11.953 9.01638 13 7.29157 13 5.34774C13 2.53081 10.8011 0.173828 8 0.173828Z"
                                                            fill="currentColor"></path>
                                                    </svg></div>
                                                <div class="ant-space-item">
                                                    <h3 class="ant-typography ant-typography-rtl !mb-0 css-t2ij9r">الفريق</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ant-list ant-list-split ant-list-grid ant-list-rtl css-t2ij9r">
                                        <div class="ant-spin-nested-loading css-t2ij9r">
                                            <div class="ant-spin-container">
                                                <div class="ant-row ant-row-rtl css-t2ij9r" style="margin-left: -12px; margin-right: -12px;">
                                                    @foreach ($authors as $author)
                                                        <div style="width: 33.3333%; max-width: 33.3333%;">
                                                            <a href="{{ route("author.profile", ["id" => $author->id]) }}" style="color: #000" target="_blanck">
                                                                <div style="padding-left: 12px; padding-right: 12px; flex: 1 1 auto;"
                                                                    class="ant-col ant-col-rtl css-t2ij9r">
                                                                    <div class="ant-list-item">
                                                                        <div class="ant-list-item-meta !items-center" style="display: flex;/*! justify-content: center; */align-items: center;gap: .5rem;font-family: 'Cairo', sans-serif !important;">
                                                                            @if($author->profile_path)
                                                                                <div class="ant-list-item-meta-avatar"><span
                                                                                        class="ant-avatar ant-avatar-circle ant-avatar-image css-t2ij9r"><img
                                                                                            src="{{ $author->profile_path }}" style="width: 38px;height: 38px;border-radius: 50%;object-fit: cover;"></span>
                                                                                </div>
                                                                            @else
                                                                                <div class="ant-list-item-meta-avatar">
                                                                                    <div
                                                                                        class="ml-2 bg-PalletTinted rounded-full w-[38px] h-[38px] flex justify-center items-center">
                                                                                        <svg width="18" height="18" viewBox="0 0 32 32" fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <path
                                                                                                d="M26.8272 23.8625C26.2377 22.4662 25.3823 21.1978 24.3085 20.1281C23.238 19.0553 21.9698 18.2 20.5741 17.6094C20.5616 17.6031 20.5491 17.6 20.5366 17.5938C22.4835 16.1875 23.7491 13.8969 23.7491 11.3125C23.7491 7.03125 20.2804 3.5625 15.9991 3.5625C11.7179 3.5625 8.2491 7.03125 8.2491 11.3125C8.2491 13.8969 9.51473 16.1875 11.4616 17.5969C11.4491 17.6031 11.4366 17.6062 11.4241 17.6125C10.0241 18.2031 8.76785 19.05 7.68973 20.1313C6.61694 21.2018 5.76162 22.4699 5.17098 23.8656C4.59073 25.232 4.2778 26.697 4.2491 28.1812C4.24827 28.2146 4.25412 28.2478 4.26631 28.2788C4.2785 28.3099 4.29678 28.3382 4.32008 28.3621C4.34338 28.386 4.37122 28.4049 4.40196 28.4179C4.43271 28.4308 4.46574 28.4375 4.4991 28.4375H6.3741C6.5116 28.4375 6.62098 28.3281 6.6241 28.1938C6.6866 25.7812 7.65535 23.5219 9.36785 21.8094C11.1397 20.0375 13.4929 19.0625 15.9991 19.0625C18.5054 19.0625 20.8585 20.0375 22.6304 21.8094C24.3429 23.5219 25.3116 25.7812 25.3741 28.1938C25.3772 28.3313 25.4866 28.4375 25.6241 28.4375H27.4991C27.5325 28.4375 27.5655 28.4308 27.5962 28.4179C27.627 28.4049 27.6548 28.386 27.6781 28.3621C27.7014 28.3382 27.7197 28.3099 27.7319 28.2788C27.7441 28.2478 27.7499 28.2146 27.7491 28.1812C27.7179 26.6875 27.4085 25.2344 26.8272 23.8625ZM15.9991 16.6875C14.5647 16.6875 13.2147 16.1281 12.1991 15.1125C11.1835 14.0969 10.6241 12.7469 10.6241 11.3125C10.6241 9.87813 11.1835 8.52812 12.1991 7.5125C13.2147 6.49687 14.5647 5.9375 15.9991 5.9375C17.4335 5.9375 18.7835 6.49687 19.7991 7.5125C20.8147 8.52812 21.3741 9.87813 21.3741 11.3125C21.3741 12.7469 20.8147 14.0969 19.7991 15.1125C18.7835 16.1281 17.4335 16.6875 15.9991 16.6875Z"
                                                                                                fill="#4D4D4D"></path>
                                                                                        </svg></div>
                                                                                </div>
                                                                            @endif
                                                                            <div class="ant-list-item-meta-content">
                                                                                <h4 class="ant-list-item-meta-title"><span
                                                                                        class="flex justify-between items-center"><b style="font-family: 'Cairo', sans-serif !important;font-size: 18px">{{ $author->name }}</b></span></h4>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ant-divider css-t2ij9r ant-divider-horizontal ant-divider-rtl mb-0 mt-[18px]"
                                                                            role="separator"></div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
            isMore: false,
            showArticles: true,
            showTeam: false,
        }
    },
    methods: {
        async getArticles(num) {
            try {
                const response = await axios.post(`{{ route('channel.articles') }}`, {
                    num: num,
                    id: "{{$channel->id}}"
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
        this.getArticles(10).then(() => {
            $('.loader').fadeOut()
        })
        window.addEventListener('scroll', this.handleScroll);
    },
    destroyed() {
        // Remove the scroll event listener when the component is destroyed to prevent memory leaks
        window.removeEventListener('scroll', this.handleScroll);
    },
}).mount('#channel_wrapper')
</script>
@endsection

@else
@section('content')
    <h1 style="font-size: 50px; margin: auto; color: #030386;">404 | غير متوفر</h1>
@endsection
@endif
