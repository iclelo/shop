<div class="container-fluid header-d" style="background:#fff;min-width:1170px;">
    <div class="header-res container">
        <div class="pull-left"><a href="/" class="logo">
                <img src="/picture/logo03.png" alt="萤火虫网" title="萤火虫网" style="width:236px;height:44px;margin:10px 0;"/></a>
        </div>
    {{--   <p class="pull-left logoTitle">严选营销服务，保障营销效果</p>--}}
        <div id="publish-hover" class="publish-hover pull-right">
            <b></b>
            <a class="publish-header pull-left color-theme caClass" traceflag="header_pop_发布需求" id="headerDemand" onclick="javascript:tofb('','');">发布需求</a>
            <div class="p-list">
                <p class="p-title">定制您的需求，坐等服务商上门</p>

                <dl class="p-con">
                    <dt class="pull-left"><img src="/picture/p-icon01.png" alt=""/></dt>
                    <dd class="pull-left">
                        <p>一键发布 </p>
                        不需花时间选服务商
                    </dd>
                </dl>
                <dl class="p-con">
                    <dt class="pull-left"><img src="/picture/p-icon02.png" alt=""/></dt>
                    <dd class="pull-left">
                        <p>快速响应 </p>
                        需求发布后，15分钟快速响应
                    </dd>
                </dl>
                <dl class="p-con">
                    <dt class="pull-left"><img src="/picture/p-icon03.png" alt=""/></dt>
                    <dd class="pull-left">
                        <p> 智能推荐</p>
                        大数据为您智能分析您的需要
                    </dd>
                </dl>
                <dl class="p-con">
                    <dt class="pull-left"><img src="/picture/p-icon04.png" alt=""/></dt>
                    <dd class="pull-left">
                        <p>完全免费</p>
                        不向雇主收取任何形式费用
                    </dd>
                </dl>

                <div class="p-public">
                    <a onclick="javascript:tofb('','');" class="caClass" traceflag="floatbar_pop_发布需求" id="headerFlowDemand">发布需求</a>
                </div>
                <div class="watch-xqgl">
                    <a rel="nofollow" href="/aboutus.htm">查看需求攻略</a>
                </div>

            </div>
        </div>
        <div class="research pull-right">
            <div class="pull-left">
                <div class="res-input">
                    <input type="text" value="" id="searchFile" name="searchFile" searchtype="" placeholder="搜搜您感兴趣的服务/案例">
                    <div class="color-theme search glyphicon glyphicon-search" id="searchBtn"></div>
                </div>
            </div>
        </div>
        <div></div>
    </div>
</div>
<script>
    $('#searchBtn').click(function () {
        var content = $('#searchFile').val();
        if(content == ''){
            alert("请输入您要查询的服务/案例");
        }else{
            window.location.href='/search/index/'+content;
        }
    })
</script>