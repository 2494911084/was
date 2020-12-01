@extends('layouts.app')

@section('content')

<!-- 幻灯广告 -->
<section class="section-slider height-v">
    @include('index.hdp')
</section>
<!-- 幻灯广告结束 -->

<div class="fix"></div>
<!-- 快速导航 -->
<div class="flash_end">
    @include('index.ksdh')
</div>
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
    <div id="page5" style="background: url('/images/rmjq.jpg') no-repeat top center; padding-top: 0px;background-size: cover;min-width: 1580px;">
        <div class="w1400 relative">
            <div class="sy_inco"><span>玩转万安山</span></div>
                @include('index.wzwas')
        </div>
    </div>
</section>
<!--玩转万安山结束-->
<!--新闻资讯开始-->
<section class="News wrap1200">
    @include('index.xwzx')
</section>
<!--新闻资讯结束-->
    {{-- @include('index.jqfc') --}}
<!-- END / OUR GALLERY -->
    @include('index.jtzn')
@endsection
