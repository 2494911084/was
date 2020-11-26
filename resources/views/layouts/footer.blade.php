<!-- 尾部 -->
<link rel="stylesheet" href="http://www.lywas.com.cn/style/style.css">
<div class="footer">
    <div class="fs">
        <iframe allowtransparency="true" frameborder="0" width="875" height="98" scrolling="no" src="javascript:;"></iframe>
    </div>
    <div class="wrap1200" style="height: 150px;">

        <div class="list">
            <h3 class="h02">万安山印象</h3>
            <ul>

                <p><a href="html/about/intro/index.html" target="_blank">景区简介</a></p>

                <p><a href="html/about/jqwh/index.html" target="_blank">文化历史</a></p>

                <p><a href="html/about/rmjd/index.html" target="_blank">热门景点</a></p>

                <p><a href="html/about/jqfc/index.html" target="_blank">景区风采</a></p>

            </ul>
        </div>
        <div class="list" style="margin-left:35px;">
            <h3 class="h03">玩转万安山</h3>
            <ul>

                <p><a href="html/play/jdzs/index.html" target="_blank">酒店住宿</a></p>

                <p><a href="html/play/sjms/index.html" target="_blank">舌尖美食</a></p>

                <p><a href="html/play/lygl/index.html" target="_blank">游记攻略</a></p>

                <p><a href="html/play/ylss/index.html" target="_blank">娱乐设施</a></p>

                <p><a href="html/play/lytc/index.html" target="_blank">洛阳特产</a></p>

            </ul>
        </div>
        <div class="list" style="margin-left:25px;">
            <h3 class="h03">新闻资讯</h3>
            <ul>

                <p><a href="html/news/jqgg/index.html" target="_blank">景区公告</a></p>

                <p><a href="html/news/jqxw/index.html" target="_blank">景区新闻</a></p>

            </ul>
        </div>
        <div class="list" style="margin-left:25px;">
            <h3 class="h03">活动盛典</h3>
            <ul>

            </ul>
        </div>
        <div class="list" style="margin-left:25px;">
            <h3 class="h03">在线预定</h3>
            <ul>

                <p><a href="html/bm/mp/index.html" target="_blank">门票预定</a></p>

                <p><a href="html/bm/jd/index.html" target="_blank">酒店预定</a></p>

            </ul>
        </div>

        <div class="list" style="margin-left:25px;">
            <h3 class="h03">联系我们</h3>
            <ul>
                <p><a href="html/contact/index.html" target="_blank">联系我们</a></p>

            </ul>
        </div>
        <div class="list  last" style="margin-left:15px;">
            <img src="templets/moban/images/wx1.png" alt="">
            <p style="text-align: center">关注官方订阅号</p>

        </div>
        <div class="list  last" style="margin-left:15px;">
            <img src="templets/moban/images/wx.png" alt="">
            <p style="text-align: center">关注官方服务号</p>

        </div>
        <div class="list last" style="width: 211px; margin-left: 15px;">

            <img src="templets/moban/images/phoneb.png" alt="">
            <p style="text-align: left; font-size: 14px;">客服电话：<span style="font-size: 18px;">0379-63069118</span></p>
            <p style="text-align: left; font-size: 14px;">投诉电话：<span style="font-size: 18px;">0379-63069110</span></p>
            <p style="text-align: left; font-size: 14px;">救援电话：<span style="font-size: 18px;">0379-63069120</span></p>

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
