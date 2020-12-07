

    <div id="index12" class="owl-carousel  owl-theme">

        @foreach ($shouye['slide_image'] as $item)
        <div class="item">
            <img alt="Third slide" src="{{ config('app.url') }}/uploads/{{ $item }}" class="img-responsive">
            <div class="container">
                <div class="carousel-caption ">
                    <a href=""><div class="dj-bg"></div></a>
                    <h1 class="v2 cap-tit">七彩大峡谷</h1>
                    <p class="p-v2 cap-tit2"><span class="line-t"></span>游水、登山、幽居、水乐<span class="line-b"></span></p>
                    <div class="cap-des"><span class="line-t"></span>打造成以城市休闲功能为主，道教文化为依托，集生态旅游、休闲观光、度假娱乐等功能为一体的原生态景区。...</div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
