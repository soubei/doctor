<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="shortcut icon" href="/Public/home/favicon.ico" />
    <meta name="baidu-site-verification" content="Rk9zXLfIEQ" />
    <title><?php echo ($reslist["inspection_name"]); ?> - 择医网（挂号网）</title>
    <meta charset="utf-8">
    <meta name="description" content="糖尿病，绝大多数人应该都不陌生，这是一个“哪怕我自己不是糖尿病患者，我身边亲朋好友都一定会有几个是”的病！大家普遍认为糖尿病是一辈子的病，没法根治，但其实，糖尿。医生说的文章" />
    <meta name="mobile-agent" content="format=html5; url=https://sns.guahao.com/topic/yWOls32914951727316993" />
    <meta name="keywords" content="医生说｜糖尿病也能治愈！它的最佳治愈期你错过了吗？,医生说,糖尿病前期,高血糖,大血管病,糖尿病" />
<link rel="canonical" href="https://bbs.guahao.com/topic/yWOls32914951727316993"/>
<!-- External CSS -->
    <link rel="stylesheet" href="/Public/home/css/topic/health.base.min.css?v=1540800883543" type="text/css"/>



    <link rel="stylesheet" href="/Public/home/css/topic/common/common.css?_=1540800883543" type="text/css"/>
        <link rel="stylesheet" href="/Public/home/css/topic/index.css?_=1540800883543" type="text/css"/>
</head>
<body>

<div id="gc" class="gp-topic" data-module="topic/index">

<div class="g-header">
    <div class="g-header-box">
        <a href="<?php echo U('home/index/index');?>" >
      
          <img class="g-logo "   src="/Public/home/images/logolist.jpg" alt="择医网" class="wy-logo">
        </a>
        <div class="g-login">
             <!--    您好！请 <span id="J_Login" class="login">登录</span> | <span class="register" id="J_Register">注册</span> -->
        </div>
    </div>
</div>
<div class="g-content">
    <div class="g-whole">
        <div class="g-article">
            <div class="g-wenzhang">
                <div class="g-title">
                        <span class="g-icon">原创</span>
                    <span class="span-title"><?php echo ($reslist["inspection_name"]); ?></span>
                </div>
                <div class="g-time">
                    <span class="span-time"><?php echo (date('Y-m-d H:i',$reslist["create_time"])); ?></span>
                   
                </div>
                <hr class="division">
                   <!--  <div class="g-daoyu">
                        <span class="J_filter">拒绝糖尿病，从干预糖尿病前期开始！</span>
                    </div> -->
                    <div id="J_TopicContent" class="g-zw">
                    <?php echo ($reslist["unit"]); ?>
                    <?php echo ($reslist["textarea"]); ?>
                    </div>
            </div>
            <div class="g-share">
            <div class="gp-mask" id="J_GpMask">
                <p class="title"><span>提示</span><span class="close" id="J_CloseMask">x</span></p>
                <div class="content">
                    <p class="content-tip">您已经顶过了！</p>
                    <div class="content-ok" id="J_Ensure">确认</div>
                </div>
            </div>
                <div class="g-yq">
                    <div class="g-circle" id="J_Support" >
                        <span class="ding-text">顶</span>
                        <span id="J_SupportNum" class="ding-number">86</span>
                    </div>
                   
                </div>
                 </span> 
  
  <link rel="stylesheet" href="/Public/home/dist/css/share.min.css">



  <ol>
   
    <li class="row">
      <div id="share-2">分享:</div>
    </li>
   
   
  </ol>

<script src="http://apps.bdimg.com/libs/jquery/1.8.2/jquery.js"></script>
<script src="/Public/home/dist/js/jquery.share.min.js"></script>
<script>
$('#share-1').share();
$('#share-2').share({sites: ['qzone', 'qq', 'weibo','tencent','wechat']});
$('#share-3').share();
$('#share-4').share();
</script>

                <div class="popup-qrcode-box" id="J_QrcodeBox">
                    <p class="popup-header"><i class="close" id="J_QrcodeClose"></i></p>
                    <div class="popup-qrcode" id="J_Qrcode"></div>
                </div>
            </div>
            <hr class="share-division">
                <div class="g-tuijian">
                    <div class="g-label">
                        <span>相关推荐:</span>
                    </div>
                    <div class="tj-list">
                       
                           <?php if(is_array($recommend)): foreach($recommend as $key=>$vo): ?><div class="tj-content tj-last">
                            <a class="img-con-div" href="<?php echo U('home/index/allorderlist');?>?ins_id=<?php echo ($vo["ins_id"]); ?>" id="J_relatedImgCon">
                                <img class="tj-img" src="/Public/home/images/default-cover.png" style="width:260px;height:153px;">
                                
                            </a>
                            <a href="<?php echo U('home/index/allorderlist');?>?ins_id=<?php echo ($vo["ins_id"]); ?>" target="_blank" class="tj-title" title=""><?php echo ($vo["inspection_name"]); ?></a>
                        </div><?php endforeach; endif; ?>
                           
                           
                          
                    </div>
                </div>
        </div>
            <div class="g-doctor">
                <div class="g-jianjie">
                   
                        
                        <img class="doc-pic-container" style="width:140px;;" src="/Public/home/images/1511164061343.jpg">
                   <a class="doc-pic-container" style="height: 0" href=""></a>
                    <div class="doc-name">
                        <span>择医网</span>
                    </div>
                    <div class="doc-jianjie doc-scroll">
                        <label>简介:</label>
                        <span>择医官方健康号，专家医生深度科普，一篇文章讲透一个疾病。</span>
                    </div>
                        <a class="doc-health-btn" href="<?php echo U('home/index/fastorder');?>">去Ta主页</a>
            </div>
                <div class="g-doc-article">
                    <div class="arc-title">
                        <span>最近的文章</span>
                    </div>
                    <hr  class="lin-sx">
                    <div class="arc-list">
                        <?php if(is_array($articlelist)): foreach($articlelist as $key=>$vo): ?><a class="arc-label" href="<?php echo U('home/index/allorderlist');?>?ins_id=<?php echo ($vo["ins_id"]); ?>" target="_blank">
                                <div class="d-arc-text">
                                <span class="arc-text">
                                        <span class="arc-icon"></span>
                               <?php echo ($vo["inspection_name"]); ?>
                                </span>
                                </div>
                               <!--  <span class="arc-hover">
                                脾胃病不能吃膏方？那是你没吃对！
                                    <span class="arc-all">全文</span>
                                </span> -->
                            </a>
                                <hr  class="lin-xx"><?php endforeach; endif; ?>
                          
                           
                    </div>
                </div>
                <div class="g-doc-article">
                    <div class="arc-title"><span>热门文章</span></div>
                    <hr  class="lin-sx">
                    <div class="arc-list">
                          <?php if(is_array($articlelist)): foreach($articlelist as $key=>$vo): ?><a class="arc-label" href="<?php echo U('home/index/allorderlist');?>?ins_id=<?php echo ($vo["ins_id"]); ?>" target="_blank">
                                <div class="d-arc-text">
                                <span class="arc-text">
                                        <span class="arc-icon"></span>
                                <?php echo ($vo["inspection_name"]); ?>
                                </span>
                                </div>
                                
                            </a>
                                <hr  class="lin-xx"><?php endforeach; endif; ?>
                           
                             
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            </div>
        </div>
<div class="g-bottom">
     <div id="gf">
            <div class="g-container" style="border-top: 1px solid #e4e4e4;width:1200px;">
                <div class="g-footer g-clear">
                    <a class="logo g-left" href="/" onmousedown="return _smartlog(this,'BTM')"></a>
                    <div class="links g-left">
                        <dl class="one g-clear">
                            <dt>关于择医网</dt>
                            <dd><a href="<?php echo U('home/index/about');?>" rel="nofollow" onmousedown="return _smartlog(this,'BTM')">关于我们</a></dd>
                            <dd><a href="#" onmousedown="return _smartlog(this,'BTM')">友情链接</a></dd>
                            <dd><a href="#" rel="nofollow" onmousedown="return _smartlog(this,'BTM')">加入择医网</a></dd>
                            <dd><a href="<?php echo U('home/index/statement');?>" rel="nofollow" onmousedown="return _smartlog(this,'BTM')">版权声明</a></dd>
                            <dd><a href="#" rel="nofollow" onmousedown="return _smartlog(this,'BTM')">联系我们</a></dd>
                            <dd class="last"><a href="#" rel="nofollow" target="_blank" onmousedown="return _smartlog(this,'BTM')">新浪微博</a></dd>
                            <dd><a href="<?php echo U('home/index/navlist');?>" onmousedown="return _smartlog(this,'BTM')">网站地图</a></dd>
                            <dd><a href="#" onmousedown="return _smartlog(this,'BTM')">知识库</a></dd>
                        </dl>
                        <dl class="two">
                            <dd class="partner"><a href="#" onmousedown="return _smartlog(this,'BTM')">医院合作</a></dd>
                            <dd class="help"><a href="#" rel="nofollow" onmousedown="return _smartlog(this,'BTM')">客服中心</a></dd>
                        </dl>
                        <div class="clear"></div>
                    </div>
                    <div class="code g-left">
                        <a class="nihe" href="http://www.nihe.org.cn" rel="nofollow" target="_blank">政府网<br/>卫生部新闻宣传中心</a>
                        <a class="cha" href="http://www.cha.org.cn/" rel="nofollow" target="_blank">中国医院协会<br/>门急诊管理专业委员会</a>
                        <a class="fudanmed" href="http://www.fudanmed.com/manage/index.aspx" rel="nofollow" target="_blank">中国阳网在线</a>
                        <a class="cfnews" href="http://www.cfnews.org.cn" rel="nofollow" target="_blank">中国家庭报<br/>卫计委人口文化发展中心</a>
                        <div class="clear"></div>
                    </div>
                    <div class="internation g-right">
                        <a href="http://icih.h.gov.cn/" rel="nofollow" target="_blank"><i></i>
                                <h3>国际互联网医疗大会</h3>
                                <p>International Conference</p>
                                <p>on Internet Healthcare</p>
                            </a>
                    </div>
                </div>
                <!-- <p class="copyright">
                    版权所有：&nbsp;&nbsp;&nbsp;
                        <a href="" rel="nofollow">浙B2-20130007</a>&nbsp;&nbsp;
                        <a href="" rel="nofollow">浙卫(03)网审[2014]015号</a>&nbsp;&nbsp;
                        <a href="" rel="nofollow">(浙)-经营性-2014-0022</a>&nbsp;&nbsp;
                        <a class="alliance" href="" target="_blank" rel="nofollow"></a>
                        <a class="alliance attestation" href="" target="_blank" rel="nofollow"></a>
                        <a class="record" href="" rel="nofollow" target="_blank"></a>

                </p>
                <div style="width:300px;margin:0 auto; padding:20px 0;">
                    <a target="_blank" href="" rel="nofollow" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><img src="/Public/home/images/ghs.png" style="float:left;" />
                        <p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#939393;">苏ICP备16006825号-4</p>
                    </a>
                </div> -->
            </div>
        </div>

</div>
</div>


</body>
</html>