<div class="listshow">
    <div class="work">
        <ul class="customeritem">
            @foreach ($arts as $item)

            <li>

                <a href="{{ url('/') }}" rel="example_group" title="<b>{{ $item['title'] }}</b>">
                    <img src="{{ config('app.url') }}/uploads/{{ $item['image'] }}" class="vm" title="{{ $item['title'] }}" alt="">
                    <span class="bgpng"></span>
                    <div class="con">
                        <div class="name"><b>{{ $item['title'] }}</b></div>
                    </div>
                </a>
            </li>

            @endforeach

            <li>



        </li></ul>

        <div class="clear"></div>
    </div>
    <div class='mypage'>
        {{ $arts->links() }}
    </div>
</div>
<script type="text/javascript">
    $(function(){
        jQuery(document).ready(function() {
            var pageNow = 2;
            jQuery(".customeritem a").live("mouseenter", function() {
                jQuery(this).find('.bgpng').stop(true, true).animate({
                    "height": 50
                }, 200);
                jQuery(this).find('.con').stop(true, true).show().animate({
                    "bottom": 0
                }, 200);
            }).live("mouseleave", function() {
                jQuery(this).find('.bgpng').stop(true, true).animate({
                    "height": "0"
                }, 200);
                jQuery(this).find('.con').stop(true, true).hide().animate({
                    "bottom": -50
                }, 200);
            });
        });

        for(i=0;i<$(".customeritem").find('li').length;i++){
            if(i%5==4){
                $(".customeritem").find('li').eq(i).addClass('mr0');
            }
        }

    });
</script>
<script type="text/javascript">
    (function(){
        window.scrollReveal = new scrollReveal({ reset: true, move: '132px'});
    })();
    $(function(){
        $("#banner-bg").addClass("active");
    })
</script>
