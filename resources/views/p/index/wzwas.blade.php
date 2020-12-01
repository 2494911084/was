
@foreach ($arts3 as $key => $item)


<li class="class{{ $key+1 }}"  style="background: url({{ config('app.url') }}/uploads/{{ $item['image'] }}) no-repeat top center;width: 418px; height: 418px;">

    <div class="box">

        <div class="tit">{{ $item['title'] }}</div>

        <div class="cont line30">{!! $item['content'] !!}</div>

        <a href="{{ url('/') }}" class="more">查看更多</a>

    </div>

    <div class="mask"></div>

</li>

@endforeach
