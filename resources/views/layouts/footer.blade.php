<!-- 尾部 -->
<link rel="stylesheet" href="http://www.lywas.com.cn/style/style.css">
<div class="footer">
    <div class="fs">
        <iframe allowtransparency="true" frameborder="0" width="875" height="98" scrolling="no" src="javascript:;"></iframe>
    </div>
    <div class="wrap1200" style="height: 150px;">
        @foreach (\Cache::get('was_site_menu') as $k => $item)
        <div class="list {{ $k!=0?'ml2':'' }}">
            <h3 class="h02">{{ $item->name }}</h3>
            <ul>
                @foreach ($item['subMenu'] as $v)
                <p><a href="{{ url('/') }}" target="_blank">{{ $v['title'] }}</a></p>
                @endforeach

            </ul>
        </div>
        @endforeach

        <div class="list  last" style="margin-left:15px;">
            <img src="{{ config('app.url') }}/uploads/{{ json_decode(Cache::get('was_web_site_setting'), true)['dyh_wechat'] }}" alt="">
            <p style="text-align: center">关注官方订阅号</p>

        </div>
        <div class="list  last" style="margin-left:15px;">
            <img src="{{ config('app.url') }}/uploads/{{ json_decode(Cache::get('was_web_site_setting'),true)['fwh_wechat'] }}" alt="">
            <p style="text-align: center">关注官方服务号</p>

        </div>
        <div class="list last" style="width: 211px; margin-left: 15px;">

            <img src="templets/moban/images/phoneb.png" alt="">
            <p style="text-align: left; font-size: 14px;">客服电话：<span style="font-size: 18px;">{{ json_decode(Cache::get('was_web_site_setting'),true)['kefu_mobile'] }}</span></p>
            <p style="text-align: left; font-size: 14px;">投诉电话：<span style="font-size: 18px;">{{ json_decode(Cache::get('was_web_site_setting'),true)['tous_mobile'] }}</span></p>
            <p style="text-align: left; font-size: 14px;">救援电话：<span style="font-size: 18px;">{{ json_decode(Cache::get('was_web_site_setting'),true)['baoxiu_mobile'] }}</span></p>

        </div>

    </div>
    <div class="fix">
    </div>

</div>
<div class="fv"><p>Copyright © 万安山旅游度假区 2015-2022 版权所有 ICP备案号：<a href="javascript:;" target="_self">豫ICP备2020030145号-1</a></p></div>


<script src="{{ mix('js/jquery.littlelightbox.js') }}" defer></script>

<!-- Custom jQuery -->

<script type="text/javascript">

    $(document).ready(function(){
        //首页主题图片
        $("#test li").eq(0).addClass('active');
        $(".tab-pane.fade").eq(0).addClass("active in");
        $("#test li").click(function() {
            $(this).siblings('li').removeClass('active');
            $(this).addClass('active');
            $(".tab-pane.fade").siblings().removeClass("active in");
            $(".tab-pane.fade").eq($(this).index()).addClass("active in");
        });
        /*注册事件*/


    });
</script>
