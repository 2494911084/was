<div class="listshow">
    <div class="qy_main8_1">
        <ul id="">
            @foreach ($arts as $item)

            <li class="fl fix picfd">
                <a href="2020/0921/128.html" title="" class="fix">
                    <div class="pic fl"><img src="{{ config('app.url') }}/uploads/{{ $item['image'] }}" alt="" class="db"></div>
                    <div class="text fl">
                        <div class="title">{{ $item['title'] }}</div>
                        <div class="content">{!! $item['content'] !!}</div>
                        <div class="date">{{ $item['cre_time'] }}</div>
                    </div>
                </a>
            </li>

            @endforeach

        </ul>
        <div class="clear"></div>
    </div>
    <div class='mypage'>
        {{ $arts->links() }}
    </span>
</div>
</div>
