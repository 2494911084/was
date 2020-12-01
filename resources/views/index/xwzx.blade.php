
    <div class="sy_inco1"><span>{{ $cate['title'] }}</span></div>
    <div class="News wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;margin-top:30px;">

        <div class="tab">
            @foreach ($arts4p as $key => $item)
                <div class="tab1 {{ $key==0?'on':'' }}">
                    <a href="javascript:void(0)" title="{{ $item['title'] }}">{{ $item['title'] }}</a>
                </div>
            @endforeach
        </div>
        <div class="tab_nr">
                <div class="tab_nr1" style="display: block;">
                    <div class="nr1">
                        <ul class="fix">
                            @foreach ($arts4p[0]->arts as $item)
                            <li class="fl">
                                <a href="{{ url('/') }}" title="{{ $item['title'] }}">
                                    <div class="item picfd">
                                        <div class="pic"><img src="{{ config('app.url') }}/uploads/{{ $item['image'] }}" alt="" class="db"></div>
                                        <div class="title">{{ $item['title'] }}</div>
                                        <div class="content">{!! $item['content'] !!}</div>
                                    </div>
                                </a>
                            </li>
                            @endforeach

    </ul>
                    </div>
                    <div class="nr2"><a href="{{ url('/') }}" title="">查看更多景区公告</a></div>
                </div>

            <div class="tab_nr1" style="display: none;">
            <div class="nr1">
                <ul class="fix">
                @foreach ($arts4p[1]->arts as $item)
                <li class="fl">
                    <a href="{{ url('/') }}" title="{{ $item['title'] }}">
                        <div class="item picfd">
                            <div class="pic"><img src="{{ config('app.url') }}/uploads/{{ $item['image'] }}" alt="" class="db"></div>
                            <div class="title">{{ $item['title'] }}</div>
                            <div class="content">{!! $item['content'] !!}</div>
                        </div>
                    </a>
                </li>
                @endforeach
                </ul>
            </div>
            <div class="nr2"><a href="{{ url('/') }}" title="">查看更多景区新闻</a></div>
        </div>

        <div class="tab_nr1" style="display: none;">
            <div class="nr1">
                <ul class="fix">
                    @foreach ($arts4p[2]->arts as $item)
                    <li class="fl">
                        <a href="{{ url('/') }}" title="{{ $item['title'] }}">
                            <div class="item picfd">
                                <div class="pic"><img src="{{ config('app.url') }}/uploads/{{ $item['image'] }}" alt="" class="db"></div>
                                <div class="title">{{ $item['title'] }}</div>
                                <div class="content">{!! $item['content'] !!}</div>
                            </div>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="nr2"><a href="{{ url('/') }}" title="">查看更多游记攻略</a></div>
        </div>
        </div>
    </div>
