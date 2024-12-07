<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}?v={{time()}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.jpg') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .dots {
        width: 13.4px;
        height: 13.4px;
        background: #030386;
        color: #030386;
        border-radius: 50%;
        box-shadow: 22.4px 0,-22.4px 0;
        animation: dots-u8fzftmd 1s infinite linear alternate;
        }

        @keyframes dots-u8fzftmd {
        0% {
            box-shadow: 22.4px 0,-22.4px 0;
            background: ;
        }

        33% {
            box-shadow: 22.4px 0,-22.4px 0 rgba(232,23,71,0.13);
            background: rgba(232,23,71,0.13);
        }

        66% {
            box-shadow: 22.4px 0 rgba(232,23,71,0.13),-22.4px 0;
            background: rgba(232,23,71,0.13);
        }
        }
    </style>
        <style>
        .loader {
            width: 100vw;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            justify-content: center;
            align-items: center;
            z-index: 99999999;
            background: #000000a1 !important;
            backdrop-filter: blur(1px);
            display: none;
        }
        .custom-loader {
            --d:22px;
            width: 4px;
            height: 4px;
            border-radius: 50%;
            color: #ff3100;
            box-shadow:
                calc(1*var(--d))      calc(0*var(--d))     0 0,
                calc(0.707*var(--d))  calc(0.707*var(--d)) 0 1px,
                calc(0*var(--d))      calc(1*var(--d))     0 2px,
                calc(-0.707*var(--d)) calc(0.707*var(--d)) 0 3px,
                calc(-1*var(--d))     calc(0*var(--d))     0 4px,
                calc(-0.707*var(--d)) calc(-0.707*var(--d))0 5px,
                calc(0*var(--d))      calc(-1*var(--d))    0 6px;
            animation: s7 1s infinite steps(8);
        }

        @keyframes s7 {
            100% {transform: rotate(1turn)}
        }

        #errors {
            position: fixed;
            top: 1.25rem;
            right: 1.25rem;
            display: flex;
            flex-direction: column;
            max-width: calc(100% - 1.25rem * 2);
            gap: 1rem;
            z-index: 99999999999999999999;
        }

        #errors >* {
            width: 100%;
            color: #fff;
            font-size: 1.1rem;
            padding: 1rem;
            border-radius: 1rem;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        }

        #errors .error {
            background: #e41749;
        }
        #errors .success {
            background: #12c99b;
        }
        .swiper-button-next::after, .swiper-button-prev::after {
            font-size: 22px !important
        }
        .swiper-pagination-bullet {
            background: #030388 !important;
        }
        @media (max-width: 575.98px) {
            .main-slider {
                padding-bottom: 1rem !important
            }
            .main-slider .swiper-button-next, .main-slider .swiper-button-prev{
                display: none !important
            }
            .main-slider .swiper-slide {
                padding: 0 !important
            }
            .swiper-wrapper-latest {
                padding: 0 !important

            }
            .swiper-wrapper-latest .swiper {
                padding-bottom: 3rem !important
            }
            .swiper-wrapper-latest .swiper-button-next, .swiper-wrapper-latest .swiper-button-prev {
                bottom: 0;
                top: auto;
            }
            .channels_wrapper {
                grid-template-columns: repeat(auto-fill, minmax(140px, 1fr)) !important;
            }
            .channels_wrapper >a {
                font-size: 15px !important;
            }
            .channels_wrapper >a .img {
                height: 130px !important;
            }

        }
        .mySwiper .swiper-slide:last-child {
            margin-left: 16px
        }
        @media (max-width: 992px) {
            .mySwiper .swiper-slide {
                width: 240px !important;
                min-width: 240px !important;
                height: 240px !important;
            }
            .mySwiper {
                padding: 32px 16px !important;
            }
        }
        .latest_programs_wrapper {
            display: grid !important;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 1fr 1fr;
            gap: 16px;
            width: 100%
        }

        .latest_programs_wrapper .card:first-child .text {
            position: absolute;
            bottom: 16px;
            z-index: 3;
            color: white;
            display: flex;
            flex-direction: column-reverse;
            width: 100%;
            padding: 0 16px;
            gap: 8px;
        }
        .latest_programs_wrapper .card:first-child .text p {
            display: none;
        }
        .card:first-child::after {
            content: "";
            background: rgb(0,0,0);
            background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0, 0, 0, 0.87) 100%);
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 2;
        }
        .latest_programs_wrapper .card:first-child .text .date span:first-child {
            font-weight: 700
        }
        .latest_programs_wrapper .card:first-child .text .date {
            display: flex;
            justify-content: start;
            align-items: center;
            gap: 8px;
            font-size: 15px;
        }
        .latest_programs_wrapper .card:first-child .text h2 {
            font-size: 19px;
            width: 100%;
            color: #fff;
            font-weight: 700;
        }
        .latest_programs_wrapper .card:first-child {
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            grid-row: span 2;
            height: 0;
            min-height: 100%;
        }

        .latest_programs_wrapper .card:first-child .img {
            width: 100%;
            height: 100%;
        }

        .latest_programs_wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top
        }
        .latest_programs_wrapper .card:not(:first-child) {
            display: flex;
            gap: 16px;
            align-items: center;
        }
        .latest_programs_wrapper .card:not(:first-child) .img {
            min-width: 180px;
            height: 140px;
            border-radius: 8px;
            overflow: hidden;
            width: 190px;
        }
        .latest_programs_wrapper .card:not(:first-child) .text {
            width: 100%;
        }
        .latest_programs_wrapper .card:not(:first-child) .text h2 {
            font-size: 16px;
            width: 100%;
            color: #000;
            font-weight: 700;
            line-height: 25px;
            margin-bottom: 4px;
        }

        .latest_programs_wrapper .card:not(:first-child) .text p {
            color: gray;
            font-size: 13px;
            line-height: 20px;
            max-height: 40px;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .latest_programs_wrapper .card:not(:first-child) .text .date {
            font-size: 13px;
            display: flex;
            gap: 8px;
            color: #000
        }
        .latest_programs_wrapper .card:not(:first-child) .text .date *:first-child {
            font-weight: 700
        }
        @media (max-width: 992.98px) {
            .latest_programs_wrapper {
                display: grid;
                grid-template-columns: 1fr;
                grid-template-rows: 1fr 1fr 1fr 1fr;
                gap: 16px;
                width: 100%;
            }
        }
        @media (max-width: 575.98px) {
            .latest_programs_wrapper .card:not(:first-child) .text .date {
                font-size: 10px !important;
            }
            .latest_programs_wrapper {
                display: grid;
                grid-template-columns: 1fr 1fr;
                grid-template-rows: auto 1fr;
                gap: 16px;
                width: 100%;
            }
            .latest_programs_wrapper .card:first-child {
                position: relative;
                border-radius: 8px;
                overflow: hidden;
                grid-column: span 2;
                grid-row: span 1;
                height: 220px;
                min-height: 220px;
            }

            .latest_programs_wrapper .card:not(:first-child) {
                display: flex;
                gap: 16px;
                align-items: center;
                flex-direction: column;
            }
            .latest_programs_wrapper .card:not(:first-child) .img {
                min-width: 100%;
                height: 140px;
                border-radius: 8px;
                overflow: hidden;
                width: 100%;
            }
            .latest_programs_wrapper .card:not(:first-child) .text h2 {
                font-size: 13px;
                width: 100%;
                color: #000;
                font-weight: 700;
                line-height: 25px;
                margin-bottom: 4px;
                height: 50px;
                overflow: hidden !important;
                text-overflow: ellipsis;
            }
        }
        .mostViewsSwipr {
            position: static !important
        }
        .mostViewsSwipr .title:hover {
            color: #cd2900 !important
        }
        .mostViewsSwipr .swiper-slide .img {
            width: 100%;
  height: 160px;
  border-radius: 10px;
  overflow: hidden;
  margin-bottom: 8px;
  position: relative;
  display: block
        }
        .mostViewsSwipr img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top
        }
        .mostViewsSwipr .img .channel_name {
            position: absolute;
  bottom: 8px;
  right: 8px;
  font-size: 14px;
  color: #fff;
  font-weight: 700;
  z-index: 3;
        }
        .mostViewsSwipr .text {
            padding: 0 8px
        }
        .mostViewsSwipr .text .title {
            font-size: 14px;
            color: #000;
            line-height: 22px;
            font-weight: 700;
            height: 50px;
  display: block;
  transition: all .3s ease-in;
  overflow: hidden;
  text-overflow: ellipsis;
        }
        .mostViewsSwipr .date {
            font-size: 13px;
            color: #000;
            line-height: 22px;
        }
        .mostViewsSwipr .date *:first-child {
            font-weight: 700;
        }
        .most_views_wrapper .head h2 {
            padding: 0 0 8px;
            font-weight: 700;
        }
        .most_views_wrapper {
            position: relative;
            margin-top: 8px
        }
        .mostViewsSwipr .swiper-button-next::after {
            content: "";

        }
        .mostViewsSwipr .swiper-button-next {
            left: 0 !important;
            top: 0;
            display: block;
            width: max-content;
            height: max-content;
            transform: none;
            margin: 0;
        }
        .mostViewsSwipr .swiper-button-next svg {
            width: 35px;
            height: 35px;
        }
        .mostViewsSwipr .swiper-button-prev::after {
            content: "";

        }
        .mostViewsSwipr .swiper-button-prev {
            left: 35px !important;
            top: 0;
            right: auto;
            display: block;
            width: max-content;
            height: max-content;
            transform: none;
            margin: 0;
        }
        .mostViewsSwipr .swiper-button-prev svg {
            width: 35px;
            height: 35px;
        }
        @media (max-width: 575.98px) {
            .mostViewsSwipr .date {
                font-size: 10px;
            }
            .mostViewsSwipr .text .title {
                font-size: 12px;
  color: #000;
  line-height: 22px;
  font-weight: 700;
  height: 50px;
  display: block;
  transition: all .3s ease-in;
  overflow: hidden;
  text-overflow: ellipsis;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  line-clamp: 2;
  -webkit-box-orient: vertical;
            }
        }
        .latest_programs_wrapper_2 .mostViewsSwipr {
            margin: 0
        }
        .latest_programs_wrapper_2 {
            width: 100vw;
            padding: 56px 16px;
            background: #F0F0F0;
            margin: 24px 0 40px;
        }

        .author_name:hover {
            color: #000 !important
        }
        :where(.css-t2ij9r).ant-menu .ant-menu-item .ant-menu-item-icon, :where(.css-t2ij9r).ant-menu .ant-menu-submenu-title .ant-menu-item-icon {
            font-weight: 700 !important;
        }
    </style>
    <title>@yield('title')</title>
</head>
<body>
    <div class="loader" style="background-color: #fff;">
        <div class="custom-loader"></div>
    </div>
    <div id="errors"></div>

    <main>
        <div class="ant-layout ant-layout-rtl layout min-h-screen  css-t2ij9r" style="max-width: 100vw;">
            @include('site.includes.header')
            @yield('content')
            @include('site.includes.footer')
        </div>
    </main>
    <script src="{{ asset('libs/vue.js') }}"></script>
    <script src="{{ asset('libs/jquery.js') }}"></script>
    <script src="{{ asset('libs/swiper.js') }}"></script>
    <script src="{{ asset('libs/axios.js') }}"></script>
    <script src="{{ asset('assets/js/login.js') }}"></script>

    @yield('scripts')
      <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
        slidesPerView: 'auto',
        spaceBetween: 24,
        freeMode: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        });


        function setLatestSwipper() {
            var swiper = new Swiper(".mostViewsSwipr", {
                slidesPerView: 2,
                spaceBetween: 16,
                    breakpoints: {
                        992: {
                            slidesPerView: 3
                        },
                        1199: {
                            slidesPerView: 4
                        }
                    },
                    // Add other configuration options as needed
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });


            var swiper = new Swiper(".latestSwiper", {
                slidesPerView: 2,
                spaceBetween: 0,
                breakpoints: {
                    992: {
                        slidesPerView: 3
                    },
                    1199: {
                        slidesPerView: 4
                    }
                },
                // Add other configuration options as needed
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        }
    </script>
    <script>
        $(".contact_link").on("click", function (e) {
            e.preventDefault()
            $(".contact-pop-up").fadeIn()
            $(".contact_hide_contact").fadeIn()
        })
        $(".contact_hide_contact, .contact-pop-up .ant-modal-close-x").on("click", function() {
            $(".contact-pop-up").fadeOut()
            $(".contact-pop-up").prev().fadeOut()
        })
        $(".ant-btn-icon").on("click", function() {
            $(".ant-menu").css("display", "block").attr('style', 'display: block !important');
        });
        $(".ant-menu .before").on("click", function () {
            $(".ant-menu").css("display", "none")
        })
    </script>
</body>
</html>
