<div class="listshow">
    <div class="qy_main8_1">

        <ul id="">
            @foreach ($arts as $item)

            <li class="fl fix picfd">
                <a href="{{ route('art', $item['id']) }}" title="" class="fix">
                    <div class="pic fl"><img src="{{ config('app.url') . '/uploads/' . $item['image'] }}" alt="" class="db"></div>
                    <div class="text fl">
                        <div class="title">{{ $item['title'] }}</div>
                        <div class="content">{!! $item['excerpt'] !!}</div>
                        <div class="date">{{ $item['cre_time'] }}</div>
                    </div>
                </a>
            </li>

            @endforeach
        </ul>
        <div class="clear"></div>
    </div>
    <p>
        {{ $arts->links() }}
    </p>
    <div class='mypage'><span class="pageinfo">共 <strong>1</strong>页<strong>10</strong>条记录</span>
</div>
</div>
