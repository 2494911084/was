@extends('p.layout.app')

@section('content')

<!-- 幻灯广告 -->
<section class="section-slider height-v">
    <div id="index12" class="owl-carousel  owl-theme">
        @foreach ($arts as $item)

        <div class="item">
            <img alt="Third slide" src="{{ config('app.url') . '/uploads/' . $item['image'] }}" class="img-responsive">
            <div class="container">
                <div class="carousel-caption ">
                    <a href="{{ route('art', $item['id']) }}"><div class="dj-bg"></div></a>
                    <h1 class="v2 cap-tit">{{ $item['title'] }}</h1>
                    <p class="p-v2 cap-tit2"><span class="line-t"></span>{{ $item['jiesao'] }}<span class="line-b"></span></p>
                    <div class="cap-des"><span class="line-t"></span>{!! $item['excerpt'] !!}</div>
                </div>
            </div>
        </div>

        @endforeach
    </div>
</section>
<!-- 幻灯广告结束 -->

<div class="fix"></div>

<!-- 快速导航 -->
<div class="flash_end">
    <div class="w1400 w_5">

        <li><a href="{{ route('category', json_decode(Cache::get('was_web_site_index_setting'), true)['field1_btn1_id']) }}" title="{{ json_decode(Cache::get('was_web_site_index_setting'), true)['field1_btn1_name'] }}">{{ json_decode(Cache::get('was_web_site_index_setting'), true)['field1_btn1_name'] }}</a></li>

        <li><a href="{{ route('category', json_decode(Cache::get('was_web_site_index_setting'), true)['field1_btn2_id']) }}" title="{{ json_decode(Cache::get('was_web_site_index_setting'), true)['field1_btn2_name'] }}">{{ json_decode(Cache::get('was_web_site_index_setting'), true)['field1_btn2_name'] }}</a></li>

        <li><a href="{{ route('category', json_decode(Cache::get('was_web_site_index_setting'), true)['field1_btn3_id']) }}" title="{{ json_decode(Cache::get('was_web_site_index_setting'), true)['field1_btn3_name'] }}">{{ json_decode(Cache::get('was_web_site_index_setting'), true)['field1_btn3_name'] }}</a></li>

        <li><a href="{{ route('category', json_decode(Cache::get('was_web_site_index_setting'), true)['field1_btn4_id']) }}" title="{{ json_decode(Cache::get('was_web_site_index_setting'), true)['field1_btn4_name'] }}">{{ json_decode(Cache::get('was_web_site_index_setting'), true)['field1_btn4_name'] }}</a></li>

        <li><a href="{{ route('category', json_decode(Cache::get('was_web_site_index_setting'), true)['field1_btn5_id']) }}" class="f18 bold" title="{{ json_decode(Cache::get('was_web_site_index_setting'), true)['field1_btn5_name'] }}">{{ json_decode(Cache::get('was_web_site_index_setting'), true)['field1_btn5_name'] }}</a></li>

    </div>
</div>
<!-- 快速导航结束 -->

<!--热门景点-->
<section class="events jd-info-bg">
    <div class="container">
        <div class="sy_inco1"><span>{{ json_decode(Cache::get('was_web_site_index_setting'), true)['field2_category']['title'] }}</span></div>

        <div id="events-v2" class="owl-carousel owl-theme">
            @foreach (json_decode(Cache::get('was_web_site_index_setting'), true)['field2_category']['tj_arts'] as $item)

            <div class="item">
                <div class="events-item">
                    <div class="events-img" style="width: 292px;height:389px;"><img style="width: 292px;height:389px;" src="{{ config('app.url') . '/uploads/' . $item['image'] }}" class="img-responsive" alt="Image"></div>
                    <div class="events-content">
                        <a href="{{ route('art', $item['id']) }}" title="">
                            <h3 class="sky-h3">{{ $item['title'] }}</h3>
                        </a>
                    </div>
                    <div class="text-desc text-center">
                        <h3>{{ $item['title'] }}</h3>
                        <p>{!! $item['excerpt'] !!}</p>
                        <div class="text-center">
                            <a href="{{ route('art', $item['id']) }}">
                                <button type="button" class="btn btn-default btn-our">查看更多</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>
</section>
<!--热门景点结束-->

<!--玩转万安山-->
<section class="section page5">
    <div id="page5">
        <div class="w1400 relative">
            <div class="sy_inco"><span>{{ json_decode(Cache::get('was_web_site_index_setting'), true)['field3_category']['title'] }}</span></div>

            @if ($im0 = json_decode(Cache::get('was_web_site_index_setting'), true)['field3_category']['childCate'][0])
            <li class="class1">

                <div class="box">

                    <div class="tit">{{ $im0['sim_name'] }}</div>

                    <div class="cont line30">{{ $im0['instroduction'] }}</div>

                    <a href="{{ route('category', $im0['id']) }}" class="more">查看更多</a>

                </div>

                <div class="mask"></div>

            </li>
            @endif

            @if ($im1 = json_decode(Cache::get('was_web_site_index_setting'), true)['field3_category']['childCate'][1])
            <li class="class2">

                <div class="box">

                    <div class="tit">{{ $im1['sim_name'] }}</div>

                    <div class="cont line30">{{ $im1['instroduction'] }}</div>

                    <a href="{{ route('category', $im1['id']) }}" class="more">查看更多</a>

                </div>

                <div class="mask"></div>

            </li>
            @endif

            @if ($im2 = isset(json_decode(Cache::get('was_web_site_index_setting'), true)['field3_category']['childCate'][2]))
            <li class="class3">

                <div class="box">

                    <div class="tit">{{ $im2['sim_name'] }}</div>

                    <div class="cont line30">{{ $im2['instroduction'] }}</div>

                    <a href="{{ route('category', $im2['id']) }}" class="more">查看更多</a>

                </div>

                <div class="mask"></div>

            </li>
            @endif

            @if ($im3 = isset(json_decode(Cache::get('was_web_site_index_setting'), true)['field3_category']['childCate'][3]))
            <li class="class4">

                <div class="box">

                    <div class="tit">{{ $im3['sim_name'] }}</div>

                    <div class="cont line30">{{ $im3['instroduction'] }}</div>

                    <a href="{{ route('category', $im3['id']) }}" class="more">查看更多</a>

                </div>

                <div class="mask"></div>

            </li>
            @endif

            @if ($im4 = isset(json_decode(Cache::get('was_web_site_index_setting'), true)['field3_category']['childCate'][4]))
            <li class="class5">

                <div class="box">

                    <div class="tit">{{ $im4['sim_name'] }}</div>

                    <div class="cont line30">{{ $im4['instroduction'] }}</div>

                    <a href="{{ route('category', $im4['id']) }}" class="more">查看更多</a>
                </div>

                <div class="mask"></div>
            </li>
            @endif
        </div>
    </div>

</section>
<!--玩转万安山结束-->

<!--新闻资讯开始-->
<section class="News wrap1200">
    <div class="sy_inco1"><span>{{ json_decode(Cache::get('was_web_site_index_setting'), true)['field4_category']['title'] }}</span></div>
    <div class="News wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
        <div class="tab">
            @foreach (json_decode(Cache::get('was_web_site_index_setting'), true)['field4_category']['childCate'] as $key => $item)
            <div class="tab1  {{ $key==0?'on':'' }}">
                <a href="javascript:void(0)" title="景区公告">景区公告</a>
            </div>
            @endforeach
        </div>
        <div class="tab_nr">
            @foreach (json_decode(Cache::get('was_web_site_index_setting'), true)['field4_category']['childCate'] as $key => $item)

            <div class="tab_nr1 {{ $key==0?'display-block':"display-none" }}">
                <div class="nr1">
                    <ul class="fix">
                        @foreach ($item['tj_arts'] as $art)

                        <li class="fl">
                            <a href="{{ route('art', $art['id']) }}" title="{{ $art['title'] }}">
                                <div class="item picfd">
                                    <div class="pic"><img src="{{ config('app.url') . '/uploads/' . $art['image'] }}" alt="{{ $art['title'] }}" class="db"></div>
                                    <div class="title">{{ $art['title'] }}</div>
                                    <div class="content">{!! $art['excerpt'] !!}</div>
                                </div>
                            </a>
                        </li>

                        @if ($key = 3)
                            @break
                        @endif

                        @endforeach
                    </ul>
                </div>
                <div class="nr2"><a href="{{ route('category', json_decode(Cache::get('was_web_site_index_setting'), true)['field4_category']['id']) }}" title="">查看更多景区公告</a></div>
            </div>

            @endforeach
        </div>
    </div>
</section>
<!--新闻资讯结束-->

<section class="gallery-our">
    <div class="container-fluid">

        <div class="gallery">
            <div class="sy_inco"><span>{{ json_decode(Cache::get('was_web_site_index_setting'), true)['field5_category']['title'] }}</span></div>

            <ul class="nav1 nav-tabs text-uppercase" id="test">
                @foreach (json_decode(Cache::get('was_web_site_index_setting'), true)['field5_category']['childCate'] as $key => $item)

                <li class="{{ $key==0?'active':'' }}"><a data-toggle="tab" href="#Hotel_{{ $key }}" class="{{ $key==0?'active':'' }}">{{ $item['title'] }}</a></li>

                @endforeach
            </ul>
            <br>
            <div class="tab-content">
                @foreach (json_decode(Cache::get('was_web_site_index_setting'), true)['field5_category']['childCate'] as $key => $item)

                <div id="Hotel_{{ $key }}" class="tab-pane fade">
                    <div class="product ">
                        <div class="row">
                            @foreach ($item['tj_arts'] as $key => $art)

                            <div class="gallery_product col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                <div class="wrap-box">
                                    <div class="box-img">
                                        <img width="569" height="379" src="{{ config('app.url') . '/uploads/' . $art['image'] }}" class="img-responsive" alt="" title="{{ $art['title'] }}">
                                        <div class="ga-img-tit">{{ $art['title'] }}</div>
                                    </div>
                                    <div class="gallery-box-main " title="{{ $art['title'] }}">
                                        <div class="gallery-icon">
                                            <a class="lightbox " href="javascript:;" data-littlelightbox-group="gallery" title="{{ $art['title'] }}"><i class="fa fa-search-plus" aria-hidden="true"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if ($key = 3)
                                @break
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
            <!-- end-tab-content -->
            <div class="text-center">
                <a href="{{ route('category', json_decode(Cache::get('was_web_site_index_setting'), true)['field5_category']['id']) }}"><button type="button" class="btn btn-default btn-our">查看更多</button></a>
            </div>
        </div>

        <!-- /gallery -->
    </div>
    <!-- /container -->
</section>
<!-- END / OUR GALLERY -->
<div class="Jtzn wrap1200">
    <div class="sy_inco1"><span>{{ json_decode(Cache::get('was_web_site_index_setting'), true)['field6_category']['title'] }}</span></div>
    <div class="content">
        <a href="{{ route('category', json_decode(Cache::get('was_web_site_index_setting'), true)['field6_category']['id']) }}"><img width="1394" height="685" src="{{ config('app.url') . '/uploads/' .  json_decode(Cache::get('was_web_site_index_setting'), true)['field6_image']}}" alt=""></a>
        <ul>

            @isset(json_decode(Cache::get('was_web_site_index_setting'), true)['field6_category']['tj_arts'][0])

            <li><a href="{{ route('art', json_decode(Cache::get('was_web_site_index_setting'), true)['field6_category']['tj_arts'][0]['id']) }}"><img width="394" height="119" src="{{ config('app.url') . '/uploads/' . json_decode(Cache::get('was_web_site_index_setting'), true)['field6_category']['tj_arts'][0]['image'] }}" alt=""></a></li>

            @endisset

            @isset(json_decode(Cache::get('was_web_site_index_setting'), true)['field6_category']['tj_arts'][1])

            <li><a href="{{ route('art', json_decode(Cache::get('was_web_site_index_setting'), true)['field6_category']['tj_arts'][1]['id']) }}"><img width="394" height="119" src="{{ config('app.url') . '/uploads/' . json_decode(Cache::get('was_web_site_index_setting'), true)['field6_category']['tj_arts'][1]['image'] }}" alt=""></a></li>

            @endisset
            @isset(json_decode(Cache::get('was_web_site_index_setting'), true)['field6_category']['tj_arts'][2])

            <li><a href="{{ route('art', json_decode(Cache::get('was_web_site_index_setting'), true)['field6_category']['tj_arts'][2]['id']) }}"><img width="394" height="119" src="{{ config('app.url') . '/uploads/' . json_decode(Cache::get('was_web_site_index_setting'), true)['field6_category']['tj_arts'][2]['image'] }}" alt=""></a></li>

            @endisset
        </ul>
    </div>
</div>


@endsection
