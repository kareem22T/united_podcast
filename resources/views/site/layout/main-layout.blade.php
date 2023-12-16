<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}?v={{time()}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon">
    <style>
        .dots {
        width: 13.4px;
        height: 13.4px;
        background: #e81747;
        color: #e81747;
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
    <title>@yield('title')</title>
</head>
<body>
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

    @yield('scripts')
</body>
</html>