<div class="sy_inco1"><span>{{ $cate1['title'] }}</span></div>

<div id="events-v2" class="owl-carousel owl-theme">

@foreach ($arts1p as $item)

    <div class="item">
        <div class="events-item">
            <div class="events-img"><img src="{{ config('app.url') }}/uploads/{{ $item['image'] }}" class="img-responsive" alt="Image"></div>
            <div class="events-content">
                <a href="{{ url('arts', $item['id']) }}" title="">
                    {{-- <p class="sky-p"><i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp;景点</p> --}}
                    <h3 class="sky-h3">{{ $item['title'] }}</h3>
                </a>
            </div>
            <div class="text-desc text-center">
                {{-- <span class="sky-p text-center"><i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp;景点</span> --}}
                <h3>{{ $item['title'] }}</h3>
                <p>{!! $item['content'] !!}</p>
                <div class="text-center">
                    <a href="{{ url('/') }}">
                        <button type="button" class="btn btn-default btn-our">查看更多</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endforeach

</div>
