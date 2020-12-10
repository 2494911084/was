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

                <li class='{{ $item['id']==$mr_cate['id']?'cur':'' }}'><a href='{{ route('category', $item['id']) }}'>{{ $item['title'] }}</a><i></i><b></b></li>

                @endforeach

            </ul>
        </div>
        {{-- 面包屑 --}}
        <div class="location"> <a href='{{ url('/') }}'>主页</a> > <a href='#'>{{ $category['title'] }}</a> > <a href='#'>{{ $mr_cate['title'] }}</a></div>

        @switch($mr_cate['type'])
            @case(1)
                @include('p.arts.1')
                @break
            @case(2)
                @include('p.arts.2')
                @break
            @case(3)
                @include('p.arts.3')
                @break
            @case(4)
                @include('p.arts.4')
                @break

        @endswitch

    </div>
</div>

@endsection
