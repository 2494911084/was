@extends('p.layout.app')

@section('content')

<div class="sec-banner">
    <section class="banner-tems4 text-center" id="banner-bg" style="background: url({{url('/uploads/' . $category['image']) }}) no-repeat;
    background-size: cover;
    background-position: center;">

    </section>
    <div class="ban-text"><div class="container">
        <div class="banner-content">
            <h2 data-scroll-reveal="enter top">{{ $category['title'] }}</h2>

        </div>
    </div></div>

</div>
<!--content:start-->
<div class="wal">
    <div class="pagect">
        <div class="inmenu">
            <em></em>
            <ul>
                @foreach ($childCate as $key => $item)

                <li class=''><a href='{{ route('category', $item['id']) }}'>{{ $item['title'] }}</a><i></i><b></b></li>

                @endforeach

            </ul>
        </div>
        {{-- 面包屑 --}}
        <div class="location"> <a href='{{ url('/') }}'>主页</a> > <a href='#'>{{ $category['title'] }}</a> > <a href='#'>{{ $art->load('category')->category->title }}</a></div>

        <div class="cttitle">{{ $art['title'] }}</div>
        <div class="explain">
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="font-size:14px;margin:0 auto;">
                <tbody><tr>
                    <td width="20%" align="center">发布日期:{{ $art['cre_time'] }}</td>
                    <td width="30%" align="left">信息来源：{{ $art['xxly'] }}</td>
                    <td width="50%" align="center">浏览量:{{ $art['view_count'] }}次</td></tr>
                </tbody></table>
        </div>
        <div class="articlect" id="zoomcon">
            {!! $art['content'] !!}
        </div>

    </div>
</div>

@endsection
