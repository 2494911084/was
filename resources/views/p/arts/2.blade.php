<link rel="stylesheet" type="text/css" href="{{asset('css/fye.css')}}" rel="external nofollow" />

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
    <div style="text-align:center">
        <!--分页写法-->
        <div class="pull">
          {{ $arts->render() }}
        </div>
      </div>
</div>
</div>
