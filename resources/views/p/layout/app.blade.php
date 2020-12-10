<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ json_decode(Cache::get('was_web_site_setting'), true)['title']??'？' }}</title>
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
    <!--[if IE]>
    <script type="text/javascript" src="templets/moban/js/html5.js"></script>
    <![endif]-->
    <!--[if lt ie 9]>
    <script type="text/javascript" src="templets/moban/js/css3-mediaqueries.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/templets/moban/style/reset.css">
    <link rel="stylesheet" href="/templets/moban/style/public.css">
    <link rel="stylesheet" href="/templets/moban/style/index.css">
    <link rel="stylesheet" href="/templets/moban/style/style.css">
    <link rel="stylesheet" type="text/css" href="/templets/moban/style/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/templets/moban/style/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="/templets/moban/style/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="/templets/moban/style/gallery.css">
    <link rel="stylesheet" type="text/css" href="/templets/moban/style/vit-gallery.css">
    <script type="text/javascript" src="/templets/moban/js/jquery.min.js"></script>
    <script type="text/javascript" src="/templets/moban/js/jquery.SuperSlide.2.1.1.js"></script>
    <script src="/templets/moban/js/myjs.js"></script>
    <script type="text/javascript" src="/templets/moban/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="/templets/moban/js/sky.js"></script>
    <!-- <meta http-equiv="mobile-agent" content="format=xhtml;url=m/index.html"> -->
   <!-- <script type="text/javascript">if(window.location.toString().indexOf('pref=padindex') != -1){}else{if(/AppleWebKit.*Mobile/i.test(navigator.userAgent) || (/MIDP|SymbianOS|NOKIA|SAMSUNG|LG|NEC|TCL|Alcatel|BIRD|DBTEL|Dopod|PHILIPS|HAIER|LENOVO|MOT-|Nokia|SonyEricsson|SIE-|Amoi|ZTE/.test(navigator.userAgent))){if(window.location.href.indexOf("?mobile")<0){try{if(/Android|Windows Phone|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)){window.location.href="m/index.html";}else if(/iPad/i.test(navigator.userAgent)){}else{}}catch(e){}}}}</script> -->
</head>
<body>
<!-- 头部 -->
<!-- 头部公用部分 -->
<header>
@include('p.layout.header')
</header>
<script type="text/javascript">
    jQuery("#nav").slide({ type:"menu", titCell:".nLi", targetCell:".menu",effect:"slideDown",delayTime:300,triggerTime:100,returnDefault:true});
</script>

<!-- 头部结束 -->

@yield('content')



<!-- 尾部 -->
<link rel="stylesheet" href="http://www.lywas.com.cn/style/style.css">
@include('p.layout.footer')


<script type="text/javascript" src="/templets/moban/js/jquery.littlelightbox.js"></script>

<!-- Custom jQuery -->

<script type="text/javascript">

    $(document).ready(function(){
        //首页主题图片
        $("#test li").eq(0).addClass('active');
        $(".tab-pane.fade").eq(0).addClass("active in");
        $("#test li").click(function() {
            $(this).siblings('li').removeClass('active');
            $(this).addClass('active');
            $(".tab-pane.fade").siblings().removeClass("active in");
            $(".tab-pane.fade").eq($(this).index()).addClass("active in");
        });
        /*注册事件*/


    });
</script>



<!-- 尾部结束 -->
</body>
</html>
