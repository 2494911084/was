@if (count($mr_cate->arts)>0)

<div class="cttitle explaintl">{{ ($mr_cate->arts)[0]['title'] }}</div>
<div class="articlect" id="zoomcon">
    {!! ($mr_cate->arts)[0]['content'] !!}

</div>

@endif
