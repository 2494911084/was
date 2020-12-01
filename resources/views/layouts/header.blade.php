<div class="top">
    <div class="w1400">
        <div class="logo left"><a href="" title="{{ json_decode(Cache::get('was_web_site_setting'), true)['title'] }}"><img src="{{ config('app.url') }}/uploads/{{ json_decode(Cache::get('was_web_site_setting'), true)['logo'] }}" width="80px" alt="{{ json_decode(Cache::get('was_web_site_setting'), true)['title'] }}"></a></div>
        <div class="nav right" id="nav">
            <li class="nLi"><a href="{{ url('/') }}" title="网站首页">网站首页</a></li>
            @foreach (\Cache::get('was_site_menu') as $item)
            {{-- {{ dd($item) }} --}}
                <li class="nLi"><a href="{{ url('/') }}" title="万安山印象">{{ $item->name }}</a>
                </li>
            @endforeach
        </div>
        <div class="clear"></div>
    </div>
</div>
