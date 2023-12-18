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
</body>
</html>