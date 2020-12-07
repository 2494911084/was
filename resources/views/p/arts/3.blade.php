<div class="listshow">
    <div class="sub_airport">
        <ul class="airp_box">
            @foreach ($arts as $item)
            <li>
                <div class="airp_img"><img src="{{ config('app.url') }}/uploads/{{ $item['image'] }}" width="306" height="208"></div>
                <div class="airp_bg aaa">
                    <a href="{{ url('/') }}">查看更多</a>
                </div>
                <a href="{{ url('/') }}">{{ $item['title'] }}</a>
            </li>

            @endforeach
        </ul>

        <div class="clear"></div>
    </div>
    <div class='mypage'>
        {{ $arts->links() }}
    </div>
</div>
