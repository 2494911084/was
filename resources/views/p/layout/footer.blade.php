<div class="footer">
    <div class="fs"><iframe allowtransparency="true" frameborder="0" width="875" height="98" scrolling="no" src="//tianqi.2345.com/plugin/widget/index.htm?s=1&z=1&t=1&v=0&d=5&bd=0&k=&f=ffffff&ltf=009944&htf=cc0000&q=1&e=1&a=1&c=57073&w=875&h=98&align=center"></iframe>
    </div>
    <div class="wrap1200" style="height: 150px;">

        @foreach (Cache::get('was_site_menu') as $key => $item)

        <div class="list" style="margin-left: 25px">
            <h3 class="h02">{{ $item['title'] }}</h3>
            <ul>
                @foreach ($item['siteMenu'] as $siteItem)

                <p><a href="{{ route('category', $siteItem['id']) }}" target="_blank">{{ $siteItem['title'] }}</a></p>

                @endforeach
            </ul>
        </div>

        @endforeach

        <div class="list  last" style="margin-left:15px;">
            <img width="112" height="114" src="{{ config('app.url') . '/uploads/' . json_decode(Cache::get('was_web_site_setting'), true)['dyh_wechat']??'templets/moban/images/wx1.png' }}" alt="">
            <p style="text-align: center">关注官方订阅号</p>

        </div>
        <div class="list  last" style="margin-left:15px;">
            <img width="112" height="114"  src="{{ config('app.url') . '/uploads/' . json_decode(Cache::get('was_web_site_setting'), true)['fwh_wechat']??'templets/moban/images/wx.png' }}" alt="">
            <p style="text-align: center">关注官方服务号</p>

        </div>
        <div class="list last" style="width: 211px; margin-left: 15px;">

            <img src="templets/moban/images/phoneb.png" alt="">
            <p style="text-align: left; font-size: 14px;">客服电话：<span style="font-size: 18px;">{{ json_decode(Cache::get('was_web_site_setting'), true)['kefu_mobile']??'？' }}</span></p>
            <p style="text-align: left; font-size: 14px;">投诉电话：<span style="font-size: 18px;">{{ json_decode(Cache::get('was_web_site_setting'), true)['tous_mobile']??'？' }}</span></p>
            <p style="text-align: left; font-size: 14px;">救援电话：<span style="font-size: 18px;">{{ json_decode(Cache::get('was_web_site_setting'), true)['baoxiu_mobile']??'？' }}</span></p>

        </div>

    </div>
    <div class="fix">
    </div>

</div>
<div class="fv"><p>{{ json_decode(Cache::get('was_web_site_setting'), true)['beianxx']??'？' }}</p></div>
