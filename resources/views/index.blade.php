@extends('layouts.app')

@section('content')
    <!-- 幻灯广告 -->
    @include('index.hdp')
    <!-- 幻灯广告结束 -->
<div class="fix"></div>
    <!-- 快速导航 -->
    @include('index.ksdh')
    <!-- 快速导航结束 -->
<!--热门景点-->
<section class="events jd-info-bg">
    <div class="container">
        @include('index.rmjd')
    </div>
</section>
<!--热门景点结束-->
<!--玩转万安山-->
<section class="section page5">
    @include('index.wzwas')
</section>
<!--玩转万安山结束-->
<!--新闻资讯开始-->
    @include('index.xwzx')
<!--新闻资讯结束-->
    @include('index.jqfc')
<!-- END / OUR GALLERY -->
    @include('index.jtzn')
@endsection
