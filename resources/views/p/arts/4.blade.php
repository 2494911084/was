<div class="listshow">
    <div class="work">
        <ul class="customeritem">
            @foreach ($arts as $item)

            <li>

                <a href="javascript:;" rel="example_group" title="{{ $item['title'] }}">
                    <img style="width: 319px;height:213px;" src="{{ config('app.url') . '/uploads/' . $item['image'] }}" class="vm" title="{{ $item['title'] }}" alt="">
                    <span class="bgpng"></span>
                    <div class="con">
                        <div class="name"><b>$item['title']</b></div>
                    </div>
                </a>
            </li>

            @endforeach

            <li>
        </li></ul>

        <div class="clear"></div>
    </div>
    <div class='mypage'>首页
<a style='background:#2abbb7; color:#fff;'>1</a>
<a href='#'>2</a>
<a href='#'>下一页</a>
<a href='#'>末页</a>
</div>
</div>
