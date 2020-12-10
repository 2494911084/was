<div class="listshow">
    <div class="sub_airport">
        <ul class="airp_box">
            @foreach ($arts as $item)

            <li>
                <div class="airp_img"><img src="{{ config('app.url') . '/uploads/' . $item['image'] }}" style="width: 306px;height:408px;" width="306" height="408"></div>
                <div class="airp_bg aaa">
                    <a href="{{ route('art', $item['id']) }}">查看更多</a>
                </div>
                <a href="{{ route('art', $item['id']) }}">{{ $item['title'] }}</a>
            </li>

            @endforeach
        </ul>

        <div class="clear"></div>
    </div>
    <div style="text-align:center">
        <!--分页写法-->
        <div class="pull">
          {{ $arts->render() }}
        </div>
      </div>
</div>
</div>
