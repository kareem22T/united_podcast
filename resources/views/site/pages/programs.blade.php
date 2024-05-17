@extends('site.layout.main-layout')

@section('title', 'United Podcast | برامجنا')
@section('programs_active', 'active')
@php
$allPodcasts = App\Models\Channel::where("type", "podcast")->get();
@endphp

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
                    class="anticon anticon-ellipsis">
        </span><i class="ant-menu-submenu-arrow"></i></div>
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
                                <div class="ant-space-item">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-brand-google-podcasts" width="45" height="45"
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
                                    <h1 class="ant-typography ant-typography-rtl !mb-0 css-t2ij9r">برامجنا</h1>
                                </div>
                            </div>
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
