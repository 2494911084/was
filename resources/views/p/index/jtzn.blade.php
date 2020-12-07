<div class="Jtzn wrap1200">
    <div class="sy_inco1"><span>{{ $cate3['title'] }}</span></div>
    <div class="content">
        <a href="{{ url('arts') }}"><img src="{{ config('app.url') }}/uploads/{{ $shouye['field6_image'] }}" alt=""></a>
        <ul>
            @foreach ($arts6p as $item)
                <li><a href="{{ url('/') }}"><img src="{{ config('app.url') }}/uploads/{{ $item['image'] }}" alt=""></a></li>
            @endforeach
        </ul>
    </div>
</div>
