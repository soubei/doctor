<?php if (!defined('THINK_PATH')) exit();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
  <link rel="shortcut icon" href="/Public/home/favicon.ico" />
<link href="/Public/home/video/css/bootstrap.min.css" rel="stylesheet" type="text/css" />				
<link href="/Public/home/video/css/swiper.min.css" rel="stylesheet" type="text/css" >		
<link href="/Public/home/video/css/iconfont.css" rel="stylesheet" type="text/css" />
<link href="/Public/home/video/css/whitecolor.css" rel="stylesheet" type="text/css" />
<link href="/Public/home/video/css/style.min.css" rel="stylesheet" type="text/css" />
<script src="/Public/home/video/js/jquery.min.js"></script>
<script type="text/javascript" src="/Public/home/video/js/bootstrap.min.js"></script>		
<script src="/Public/home/video/js/function.js"></script>
<script type='text/javascript' src="/Public/home/video/js/LazyLoad.js"></script>
<script type='text/javascript' src="/Public/home/video/js/swiper.min.js"></script>
<script type="text/javascript " src="/Public/home/video/js/history.js "></script>	
<style type="text/css">

body{
background-repeat:repeat;background-size:inherit;background-attachment:fixed;background-position:center center;background: url(/style/bg.jpg); 
}
@media (max-width: 767px){
    body:before{background: url() center 0 no-repeat; background-attachment: fixed;background-size: cover;} 
}
</style>

<title>择医网 - 微视频！</title>
<meta name="keywords" content="电影,视频大全,在线高清电影,付费电影,免费电影,剧集,电影,在线观看,VIP高清电影直播">
<meta name="description" content="微视频，是专门做剧集,电影等在线播放服务，本页面提供电影的相关内容。">
</head>
<body class="index">

<script>
function uaredirect(f){try{if(document.getElementById("bdmark")!=null){return}var b=false;if(arguments[1]){var e=window.location.host;var a=window.location.href;if(isSubdomain(arguments[1],e)==1){f=f+"/#m/"+a;b=true}else{if(isSubdomain(arguments[1],e)==2){f=f+"/#m/"+a;b=true}else{f=a;b=false}}}else{b=true}if(b){var c=window.location.hash;if(!c.match("fromapp")){if((navigator.userAgent.match(/(iPhone|iPod|Android|ios)/i))){location.replace(f)}}}}catch(d){}}function isSubdomain(c,d){this.getdomain=function(f){var e=f.indexOf("://");if(e>0){var h=f.substr(e+3)}else{var h=f}var g=/^www\./;if(g.test(h)){h=h.substr(4)}return h};if(c==d){return 1}else{var c=this.getdomain(c);var b=this.getdomain(d);if(c==b){return 1}else{c=c.replace(".","\\.");var a=new RegExp("\\."+c+"$");if(b.match(a)){return 2}else{return 0}}}};
</script>

<script type="text/javascript">uaredirect("http://sou.zzw0527.com/dianying/wap/");</script>

<div class="hy-head-menu">
	<div class="container">
	    <div class="row">
		  	<div class="item">
			    <div class="logo hidden-xs">
					  <a href="<?php echo U('home/index/index');?>">
                        <img class="logolist "  style="background-size: cover;width: 190px;height: 89px;display: inline-block;" src="/Public/home/images/logolist.jpg" alt="择医网" class="wy-logo"></a>										  
				</div>	
				<div class="search"> 
<form id="ff-search" role="search" action="" method="get">
                            <input class="form-control" placeholder="输入影片名称回车搜索..." type="text" id="ff-wd" name="wd" required="">
                            <input type="submit" class="hide"><a href="javascript:" class="btns" title="搜索" onClick="$('#ff-search').submit();"><i class="icon iconfont icon-sou"></i></a>
                  </form>
			   </div>			   
			   <ul class="menulist hidden-xs">
					<li><a href="<?php echo U('home/index/index');?>">首页</a></li>
					<li ><a href="<?php echo U('home/index/videos');?>?sicktime=<?php echo urldecode('健康');?>">健康</a></li>				
					<li ><a href="<?php echo U('home/index/videos');?>?sicktime=<?php echo urldecode('养生');?>">养生</a>
						</li>	
										
						<li ><a href="<?php echo U('home/index/videos');?>?sicktime=<?php echo urldecode('减肥');?>">减肥</a></li>
						<li ><a href="<?php echo U('home/index/videos');?>?sicktime=<?php echo urldecode('生活');?>">生活</a></li>
										<li class="act6"><a href="<?php echo U('home/index/zipai');?>" target="_blank">我拍拍</a></li>

				</ul>													 
		  	</div>							
	    </div>
	</div>
</div>

<div class="container">
<div class="row"  style="margin-top:10px"></div>
  <div class="row">
		
<!--抢先看-->
<div class="container">
<div class="row"  style="margin-top:10px"></div></div>
		<div class="hy-layout clearfix">
			<div class="hy-video-head">
				<h3 class="margin-0"><i class="icon iconfont icon-vip text-color"></i> 健康</h3>
				<ul class="pull-right">
							<li class="active"><a href="<?php echo U('home/index/videos');?>?sicktime=<?php echo urldecode('健康');?>" class="text-muted">更多 <i class="icon iconfont icon-xiangyou"></i></a></li>
			</ul>
			</div>
			<div class="clearfix">
				<?php if(is_array($res)): foreach($res as $key=>$val): if($val["sicktime"] == '健康'): if($val["ishospital"] == '1'): ?><a href="<?php echo U('home/index/videolist');?>?id=<?php echo ($val["id"]); ?>" target="_blank">
				<video width="250" height="300" controls autobuffer>
				<source src="/<?php echo ($val["videourl"]); ?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'></source>
				</video>
				</a><?php endif; endif; ?>
				&nbsp;&nbsp;<?php endforeach; endif; ?>
					
				
				
	

			
			<div class="hy-video-footer visible-xs clearfix">
				<a href="./vlist.php?cid=0" class="text-muted">查看更多 <i class="icon iconfont icon-xiangyou pull-right"></i></a>
			</div>
		</div>
		<!--抢先看-->
<div class="container">
<div class="row"  style="margin-top:10px"></div></div>
		<!--电影-->
		<div class="hy-layout clearfix">
			<div class="hy-video-head">
				<ul class="pull-right">
				
				<li class="active"><a href="<?php echo U('home/index/videos');?>?sicktime=<?php echo urldecode('养生');?>" class="text-muted">更多 <i class="icon iconfont icon-xiangyou"></i></a></li>
				</ul>
				<h3 class="margin-0"><i class="icon iconfont icon-caidanicondianyinghui text-color"></i>养生</h3>
			</div>
			<div class="clearfix">
			<?php if(is_array($res1)): foreach($res1 as $key=>$val): if($val["sicktime"] == '养生'): if($val["ishospital"] == '1'): ?><a href="<?php echo U('home/index/videolist');?>?id=<?php echo ($val["id"]); ?>" target="_blank">
				<video width="250" height="300" controls autobuffer>
				<source src="/<?php echo ($val["videourl"]); ?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'></source>
				</video>
				</a><?php endif; endif; ?>
				&nbsp;&nbsp;<?php endforeach; endif; ?>


				<div class="hy-video-footer visible-xs clearfix">
					<a href="./movie.php?m=/dianying/list.php?cat=all&page=1" class="text-muted">查看更多 <i class="icon iconfont icon-xiangyou pull-right"></i></a>
				</div>
			</div>
		</div>		<!--电影-->
		<div class="container">
<div class="row"  style="margin-top:10px"></div></div>
		<!--剧集-->
		<div class="hy-layout clearfix">
			<div class="hy-video-head">
				<ul class="pull-right">
				
				<li class="active"><a href="<?php echo U('home/index/videos');?>?sicktime=<?php echo urldecode('减肥');?>" class="text-muted">更多 <i class="icon iconfont icon-xiangyou"></i></a></li>
				</ul>
				<h3 class="margin-0"><i class="icon iconfont icon-tv_icon text-color"></i>减肥</h3>
			</div>
			<div class="clearfix">
			<?php if(is_array($res2)): foreach($res2 as $key=>$val): if($val["sicktime"] == '减肥'): if($val["ishospital"] == '1'): ?><a href="<?php echo U('home/index/videolist');?>?id=<?php echo ($val["id"]); ?>" target="_blank">
				<video width="250" height="300" controls autobuffer>
				<source src="/<?php echo ($val["videourl"]); ?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'></source>
				</video>
				</a><?php endif; endif; ?>
				&nbsp;&nbsp;<?php endforeach; endif; ?>
			</div>
		</div>		<!--剧集-->
						<!--综艺-->
<div class="container">
<div class="row"  style="margin-top:10px"></div></div>
		<div class="hy-layout clearfix">
			<div class="hy-video-head">
				<ul class="pull-right">
				
					<li class="active"><a href="<?php echo U('home/index/videos');?>?sicktime=<?php echo urldecode('生活');?>" class="text-muted">更多 <i class="icon iconfont icon-xiangyou"></i></a></li>
				</ul>
				<h3 class="margin-0"><i class="icon iconfont icon-jiemu text-color"></i>生活</h3>
			</div>
			<div class="clearfix">
				<?php if(is_array($res3)): foreach($res3 as $key=>$val): if($val["sicktime"] == '生活'): if($val["ishospital"] == '1'): ?><a href="<?php echo U('home/index/videolist');?>?id=<?php echo ($val["id"]); ?>" target="_blank">
				<video width="250" height="300" controls autobuffer>
				<source src="/<?php echo ($val["videourl"]); ?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'></source>
				</video>
				</a><?php endif; endif; ?>
				&nbsp;&nbsp;<?php endforeach; endif; ?>
			</div>
		</div>		<!--综艺-->
										<!--动漫-->
<div class="container">
<div class="row"  style="margin-top:10px"></div></div>
		<div class="hy-layout clearfix">
			<div class="hy-video-head">
				<ul class="pull-right">
				
					<li class="active"><a href="<?php echo U('home/index/videos');?>?sicktime=<?php echo urldecode('自拍拍');?>" class="text-muted">更多 <i class="icon iconfont icon-xiangyou"></i></a></li>
				</ul>
				<h3 class="margin-0"><i class="icon iconfont icon-liebiaodaohang_dongman text-color"></i>我拍拍</h3>
			</div>
			<div class="clearfix">
				 	<?php if(is_array($res4)): foreach($res4 as $key=>$val): if($val["sicktime"] == '自拍拍'): if($val["ishospital"] == '1'): ?><a href="<?php echo U('home/index/videolist');?>?id=<?php echo ($val["id"]); ?>" target="_blank">
				<video width="250" height="300" controls autobuffer>
				<source src="/<?php echo ($val["videourl"]); ?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'></source>
				</video>
				</a><?php endif; endif; ?>
				&nbsp;&nbsp;<?php endforeach; endif; ?>
			</div>
		</div>		<!--动漫-->
				


		<script>
	    var swiper = new Swiper('.hy-slide', {
	        pagination: '.swiper-pagination',
	        paginationClickable: true,
	        autoplay: 3000,
	        nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
	    });	    
	    </script>


	<div style="position:fixed;width:300px;height:350px;top:50%;left:0%;margin-left:-150px;margin-top:-175px;display: none;z-index: 9999999;" id="gbewm" onclick="ewmgb()">
	<div style="text-align:center;line-height: 50px;background-color: #2db2ea;color: #fff;font-size: 20px;font-weight: bold;border-radius: 5px 5px 0px 0px;">扫码二维码，手机观看！</div>
	<img src="https://i.loli.net/2018/01/19/5a617da73ac6a.png" id="ewmtp" style="width: 300px;height: 300px;border-radius: 0px 0px 5px 5px;"/>
</div>
<div class="row" style="margin-top:10px"></div>
		 <div class="hy-layout hidden-xs" style="border-top: 2px solid #204060;">
	         <div class="hy-footer-link">
	             <div class="item clearfix">
	                 <p style="padding: 0 4px;text-align:center" class="container-fluid"><span style="color:#000;text-align:center;"><span style="color:#000;text-align:center;">本网站内容收集于互联网，热片网不承担任何由于内容的合法性及健康性所引起的争议和法律责任</span><br />
<span style="color:#000;text-align:center;">Copyright &copy;&nbsp; 择医网 版权所有</span></span></p>
				 </div>
			 </div>
	     </div>
<div style="display:none;">
</div>
<script type="text/javascript" charset="utf-8">
    $(function() {
        $(".videopic.lazy").lazyload({effect: "fadeIn"});  
        $("[data-toggle='tooltip']").tooltip();
    });
	function ewm(){
		var url = "http://qr.liantu.com/api.php?text="+window.location.href;
		$("#ewmtp").attr('src',url);
		$("#gbewm").css("display","block");
		$("#gbewm").animate({left:'50%'});
	}
	function ewmgb(){
		$("#gbewm").animate({left:'100%'});
		$("#gbewm").css("display","none");
	}
</script>	
</body>
</html>