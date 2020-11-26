<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>万安山旅游度假区</title>
        {{-- <meta name="description" content="万安山旅游度假坚持规划引领发展,以打造世界级生态旅游度假目的地为目标,已成为洛阳城南绿色生态屏障和市民休闲游憩的后花园,电话:0379-63069118"> --}}
        {{-- <meta name="keywords" content="万安山旅游度假区,洛阳万安山,万安山景区,洛阳旅游景点"> --}}
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="apple-touch-fullscreen" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="format-detection" content="telephone=no">
        <meta name="wap-font-scale" content="no">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ mix('css/all.css') }}">
        <link rel="stylesheet" href="http://www.lywas.com.cn/style/style.css">
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="{{ mix('js/jquery.min.js') }}" defer></script>
        <script src="{{ mix('js/jquery.SuperSlide.2.1.1.js') }}" defer></script>
        <script src="{{ mix('js/myjs.js') }}" defer></script>
        <script src="{{ mix('js/owl.carousel.min.js') }}" defer></script>
        <script src="{{ mix('js/sky.js') }}" defer></script>
        <meta http-equiv="mobile-agent" content="format=xhtml;url=m/index.html">
        <script type="text/javascript">if(window.location.toString().indexOf('pref=padindex') != -1){}else{if(/AppleWebKit.*Mobile/i.test(navigator.userAgent) || (/MIDP|SymbianOS|NOKIA|SAMSUNG|LG|NEC|TCL|Alcatel|BIRD|DBTEL|Dopod|PHILIPS|HAIER|LENOVO|MOT-|Nokia|SonyEricsson|SIE-|Amoi|ZTE/.test(navigator.userAgent))){if(window.location.href.indexOf("?mobile")<0){try{if(/Android|Windows Phone|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)){window.location.href="m/index.html";}else if(/iPad/i.test(navigator.userAgent)){}else{}}catch(e){}}}}</script>
    </head>
    <body>
        <header>
            @include('layouts.header')
        </header>

        <script type="text/javascript">
            jQuery("#nav").slide({ type:"menu", titCell:".nLi", targetCell:".menu",effect:"slideDown",delayTime:300,triggerTime:100,returnDefault:true});
        </script>

        @yield('content')

        @include('layouts.footer')
    </body>
</html>
