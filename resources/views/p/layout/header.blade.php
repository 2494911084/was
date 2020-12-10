<div class="top">
    <div class="w1400">
        <div class="logo left"><a href="{{ url('/') }}" title="{{ json_decode(Cache::get('was_web_site_setting'), true)['title']??'？' }}"><img src="{{ config('app.url') }}/uploads/{{ json_decode(Cache::get('was_web_site_setting'), true)['logo']??'' }}" style="width: 336px;height: 69px;" alt="{{ json_decode(Cache::get('was_web_site_setting'), true)['title']??'？' }}"></a></div>
        <div class="nav right" id="nav">
            <li class="nLi"><a href="{{ url('/') }}" title="网站首页">网站首页</a></li>
            @foreach (Cache::get('was_site_menu') as $key => $item)

            <li class="nLi"><a href="{{ route('category', $item['id']) }}" title="{{ $item['title'] }}">{{ $item['title'] }}</a>
                <ul class="menu">
                    <div class="cont">
                        <div class="f18">{{ $item['title'] }}</div>{{ $item['instroduction'] }}
                    </div>
                    <div class="img"><img style="width: 264px; height: 175px;" src="{{ config('app.url') . '/uploads/' . $item['image']}}" alt="{{ $item['title'] }}">
                        @foreach ($item['siteMenu'] as $siteItem)

                        <a href="{{ route('category', $siteItem['id']) }}">{{ $siteItem['title'] }}</a>

                        @endforeach

                    </div>
                </ul>
            </li>

            @endforeach

        </div>
        <div class="clear"></div>
    </div>
</div>
