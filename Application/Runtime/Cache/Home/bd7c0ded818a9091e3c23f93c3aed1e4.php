<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="mobile-agent" content="format=html5;url=http://wapyyk.39.net/xq/zonghe/1cd60.html" />
<meta name="applicable-device"content="pc">

<meta http-equiv="Content-Type" content="text/html; charset=gbk" />

		<link rel="shortcut icon" href="/Public/home/favicon.ico" />
<title>择医网</title>
<link href="/Public/home/css/list/hospital_layout.css" rel="stylesheet" type="text/css">

<meta http-equiv="Cache-Control" content="no-transform " />
<link href="/Public/home/css/list/dy_base.css?v=2014111410" type="text/css" rel="stylesheet" />
<!-- <link href="/daoyi/css/yyk_keshi.css?20160829" type="text/css" rel="stylesheet"/> -->

<link href="/Public/home/css/list/yyk_keshi.css?20160829" type="text/css" rel="stylesheet"/>

<link href="/Public/home/css/list/dy_hospital.css" rel="stylesheet" type="text/css">
   <script src="/Public/his/vendor/jquery/jquery.min.js"></script>

<base target="_blank" />
<style type="text/css">
  #imgurl img{
    width:235px;
    height: 250px
  }
</style>

</head>
<body>


<div class="sysa">
</div>




<!--新的导航样式-->
<div class="art_topnav_channel" id="art_topnav">
    <div class="art_wrap">
    <div id="topLink" class="art_navtext">
    </div>
    <!--未登录-->
    <?php if($user["hospital"] == true): ?><div class="art_navlogin" id="newLoginBox" style="display:block;">
       设为首页 | 加入收藏  |
              <span class="n_reg">
                <a href="<?php echo U('home/index/logout');?>" target="_self"  title="退出">退出</a>
            </span>

      <span class="n_login sbtn"  id="">
        <cite><a href="<?php echo U('home/index/yydoctorhome');?>" ><?php echo ($user["hospital"]); ?></a></cite>
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
$('#share-2').share({sites: ['qzone', 'qq', 'weibo','wechat']});
$('#share-3').share();
$('#share-4').share();
</script>

    </div>
      <?php else: ?>
    <div class="art_navlogin" id="newLoginBox" style="display:block;">
       设为首页 | 加入收藏
              <span class="n_reg">
                <a href="<?php echo U('home/index/yyregister');?>" target="_self"  title="注册">注册</a>
            </span>

			<span class="n_login sbtn"  id="top_loginbox">
				<cite><a href="<?php echo U('home/index/yylogin');?>" target="_self" onclick="javascript:loginBox.Show();" title="登录">登录</a></cite>
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
$('#share-2').share({sites: ['qzone', 'qq', 'weibo','wechat']});
$('#share-3').share();
$('#share-4').share();
</script>

    </div><?php endif; ?>

    <!--登录后-->
    <div class="art_navlogin" id="loginInfo" style="display:none;">
              <span class="n_exit">
                  <a href="javascript:void(0);" target='_self' onclick='exit();return false;' title="退出">退出</a>
              </span>
			<span class="n_userinfo" id="userinfo_box">
				<em>
                    <a id="NavNickName" name="NavNickName" href="/user/index.html" title=""></a>
                </em>
				<span class="UIbox">
					<span class="ulist png">
						<ul>
                            <li><a href="/user/index.html" target="_blank" title="个人中心" rel="nofollow">个人中心</a></li>
                            <li><a href="/user/yuyue.html" target="_blank" title="我的预约" class="orange" rel="nofollow">我的预约</a></li>
                            <li class="nobline"><a href="/user/weihu.html" title="就诊人管理" target="_blank" rel="nofollow">就诊人管理</a></li>
                        </ul>
					</span>
				</span>
			</span>
    </div>
    <!--登录后 end-->

   
</div>
</div>
<!-- 预约表单页不广告 -->

	

<!-- 验证邮箱 -->
<div id="topYzBox" class="yzBox" style="display: none;">
	<div class="tc_box">
		<a href="javascript:topYzBox.Close();window.location.reload();" target="_self" title="关闭" class="tc_box_close png"></a>
		<div class="tc_box_tit"><h3 class="on">验证邮箱</h3><i style="width:30%;"></i></div>
		<div class="tc_box_con">
		      <div class="suc_box">
		      	  <p class="p1">已通过邮箱<span id="yz_email"></span>注册账户</p>
		      	  <p class="p2">验证后可完成注册<a href="#" target="_blank" class="yzbtn" id="top_yz_email_url">立即验证邮箱</a></span></p>
		      </div>
		</div>
	</div>
</div>
<!-- 验证邮箱 end-->
<!-- 验证手机 -->
<div id="lb_tel_check" class="yzBox yzBox-tel" style="display: none;">
	<div class="tc_box">
		<a href="javascript:lb_tel_check.Close();window.location.reload();" target="_self" title="关闭" class="tc_box_close png"></a>
		<div class="tc_box_tit"><h3 class="on">请验证手机</h3><i style="width:30%;"></i></div>
		<div class="tc_box_con">
			<div class="item"><span>手机</span><input id="telNo" type="tel" placeholder="请输入手机号码"></div>
			<div class="item clearfloat"><span>验证码</span><input class="sort" type="text" placeholder="短信验证码"><input id="getCode" class="check-btn" type="button" value="获取验证码"></div>
			<div class="alert"></div>
			<div class="btn"><input id="submitCode" type="button" value="提交验证" ></div>
			<ul class="tip">
				<li>&middot; 验证手机后可以使用免费预约挂号，在线咨询服务</li>
				<li>&middot; 验证手机后可以使用手机号登录及找回密码</li>
			</ul>
		</div>
	</div>
</div>
<!-- 验证手机 end-->

<style>
	.fc_box2{ margin-left: 510px;}
</style>
	<!-- pc就医助手广告位都要添加上 “广告” -->
	<script src="/art2013/js/ad-icon.js" type="text/javascript"></script>

<script type="text/javascript" src="/js/login.js"></script>

<script type="text/javascript" src="/js/template.js"></script>

	
<link type="text/css" rel="stylesheet" href="/daoyi/css/yyk_search.css"/>
<div class="keshi-header" style="height:108px;">
    <div class="logo">
        <div>

        	<a style="height:79px;"href="<?php echo U('home/index/index');?>" title="择医网" target="_blank">择医网
        </a>
    </div>
    </div>
    <div class="serach">
        <form onsubmit='return false' target="_blank">
        	<input type="hidden" value="0" id="type" name="type">
        	<span class="serach-tab">
                <a id="searchType2" href="javascript:void(0)" target="_self" class="now" title="">找医院</a>
                <!-- <a id="searchType" href="javascript:void(0)" target="_self" title="">找医院</a> -->
            </span>
            <div class="serach-in">
                <label><input id="searchKey" name="searchKey" type="text" class="tit" value="" placeholder="输入疾病名、科室或医院名"/></label>
                <i class="loading" style="display:none;"></i>
                <label><input target="_blank" id="searchButton" onclick="checkpost();" type="button" class="btn btn1" value="搜索" title="搜索"/></label>
            </div>
        </form>
       
    </div>
</div>
<script type="text/javascript" src="/js/search/keyDownWithoutTips.js"></script>
<div class="jy_hspt_mid">
	<div class="wid1000">
		
<div class="jy_hspt_add" id="hospial_location">

	
			您的位置： <a href="<?php echo U('home/index/index');?>">择医网</a> > <a href="/suqian/" title="宿迁挂号网">宿迁挂号网</a> >
		
</div>
<div class="jy_hspt_intro">
	<div class="jy_hspt_intro_m">
        <div class="l">
            <h2><?php echo ($res["hospital"]); ?><span><i class='pink_link'>三级</i><i class='green_link'>医保定点医院</i><i class='blue_link'>中医院</i></span></h2>
            
            <p>别名：宿迁中医院，市中医院&nbsp;</p>
            
        </div>
        <div class="r">
        	 <!-- <div class="btn">
        	 	<input id="favoriteId" type="hidden" name="favoriteId" value="" />
        	 	<a id="top_zan" class="btn-fav" href="javascript:addLikes();" target="_self"><b></b>点赞<i>+1</i></a>
        	 	<a class="btn-att" href="javascript:favorite();" target="_self"><b></b>
        	 		<span class="att-ing">关注TA</span>
        	 		<span class="att-ed"><i>已关注</i><i class="att-ed-hover">取消关注</i></span>
        	 	</a>
        	 </div> -->
             <!-- <div class="edit"><a id="feedBack" target="_blank" href="/page/feedback.html?reUrl=">纠正或补充信息</a></div> -->
             <script>
             $('body').on('mouseenter', '.btn-att-ed', function(){
                 $(this).addClass('btn-att-hover');	 
             }).on('mouseleave', '.btn-att-ed', function(){
                 $(this).removeClass('btn-att-hover');	 
             });
             </script> 
        </div>
        <div class="clean"></div>
    </div>
</div>
<div class="keshi-menu" id="keshi_menu_holder">
    <ul>
        <li><a href="/xq/zonghe/1cd60.html" title="首  页" target="_self">首  页</a></li>
        <li><a href="/hospital/1cd60_detail.html" title="详细介绍" target="_self">详细介绍</a></li>
        <li><a href="/hospital/1cd60_labs.html" title="科室列表" target="_self">科室列表</a></li>
        <li><a href="/hospital/1cd60_doctors.html" title="专家介绍" target="_self">推荐专家<i></i></a></li>
        <li><a href="/hospital/1cd60_guides.html" title="就医指南" target="_self">就医指南</a></li><li><a href="/hospital/1cd60_comments.html" title="就诊评价" target="_self">就诊评价</a></li>
        <li><a class="orange_link" href="/hospital/1cd60_registers.html" title="预约挂号" target="_self">预约挂号</a></li>
        <!-- 非合作方医院屏蔽底部浮动栏咨询 v5.6.4 -->
        
    </ul>
</div>
 


		
       	

        <div class="jy_hspt_main">
        		<div class="jy_hspt_main_l">
        		
        		<!-- 投放广告 -->
               	
<div>
	<script type="text/javascript" src="http://app-g.39.net/rel/k13.php?id=5115&keyword=<?php echo ($res["hospital"]); ?>"></script>
</div>

				
<div class="hspt_left_p1">
   	<div class="hspt_infor">
       	<div class="l">
			<img title="<?php echo ($res["hospital"]); ?>" src="/Public/home/images/default_yy.gif" alt="<?php echo ($res["hospital"]); ?>logo" />
        </div>
        <div class="r">
        	<table width="0" border="0">
        	
               <tr>
                 <th style="width:70px;" scope="row">医院简介：</th>
                 <td>
                 <P><?php echo ($res["hospital"]); ?>是国家三级乙等中医医院...
      </td>
               </tr>
              
              <tr>
                <th scope="row">医院地址：</th>
                <td>总院:江苏省宿迁市洪泽湖东路;分院:江苏...
     </td>
              </tr>
              
              
                <tr>
                	<th scope="row"style="vertical-align: top;">医院电话：</th>
                	<td><p>办公电话：<?php echo ($res["phone"]); ?>&nbsp;   
                        	</p>
                	</td>
                </tr>
                <tr>
                  <th scope="row"style="vertical-align: top;">医院网址：</th>
                  <td><p>www.baidu.com&nbsp;   
                          </p>
                  </td>
                
                </tr>
            </table>

        </div>
        <div class="clean"></div>
    </div>
    <div class="xinxi xinxi2">
                <ul>
                		
                            <li class="x1">
                                <strong>总床位数</strong>
                             <span class="is">

                             <i style='width:51%;' class="i1"></i>
                             <i style='width:50%;' class="i2"></i>
                             <i style='width:50%;' class="i3"><span>平均↑</span></i>
                         </span>
                            <cite><font>1000</font>张</cite>
                        </li>
                        
                    <li class="x2">
                        <strong>主任医师</strong>
                        <span class="is">
                            
                            <i style="width:48%;" class="i1"></i>
                            <i style="width:48%;" class="i2"></i>
                            <i style="width:50%;" class="i3"><span>平均↑</span></i>
                        </span>
                        <cite><font>9</font>人</cite>
                    </li>
                    
                    <li class="x3">
                        <strong>日门诊量</strong>
                        <span class="is">
                            
                            <i style="width:51%;" class="i1"></i>
                            <i style="width:50%;" class="i2"></i>
                            <i style="width:50%;" class="i3"><span>平均↑</span></i>
                        </span>
                        <cite><font>1781</font>次</cite>
                    </li>
                    
                    <li class="x4">
                        <strong>副主任医师</strong>
                        <span class="is">
                            
                            <i style="width:47%;" class="i1"></i>
                            <i style="width:47%;" class="i2"></i>
                            <i style="width:50%;" class="i3"><span>平均↑</span></i>
                        </span>
                        <cite><font>10</font>人</cite>
                    </li>
                    
                </ul>
            </div>
           
</div>
        		
		<div style="background: #fff;border: 1px solid #e5e5e5;margin: 20px 0;">
		<!-- 4679：就医助手_医院终端页_左通栏 类型：固定广告位 尺寸：730x90 -->
		<script type="text/javascript">//<![CDATA[
		ac_as_id = 4679;
		ac_format = 0;
		ac_mode = 1;
		ac_group_id = 1;
		ac_server_base_url = "d-test.39.net/";
		//]]></script>
		<script type="text/javascript" src="/style/style.js"></script>
		</div>
	
 <div class="hspt_left_p2">
	<div class="hspt_left_t">
    	本院专家推荐
    </div>
    
    
    <div class="find_prfs">
        <ul class="tablist"> <li class="tab"><a href="#tabpanel1" target="_self" class="tab_a tab_on tabJustHover" data-rel="panelHover1">按疾病找专家</a></li> <li class="tab"><a href="#tabpanel2" target="_self" class="tab_a tabJustHover" data-rel="panelHover2">按科室找专家</a></li></ul> 
        <ul class="tab_content"> 
        	<li id="panelHover1" class="tabpanel">
                
            	<table class="find_prfs_table" width="0" border="0">
                  
                  <tr>
                               
                    <th scope="row"><a href="/hospital/1cd60_doctors.html?diseaseId=2225" title="贲门癌">贲门癌</a> > </th>
                    
                    <td class="doctor"><a href="/doctor/295933.html" title="何智兴"  >何智兴</a></td> 
                    	<td>&nbsp;</td>
                    
                    	<td>&nbsp;</td>
                    
                    	<td>&nbsp;</td>
                    
                    	<td>&nbsp;</td>
                    
                  </tr>
                  
                  <tr>
                               
                    <th scope="row"><a href="/hospital/1cd60_doctors.html?diseaseId=337" title="肠炎">肠炎</a> > </th>
                    
                    <td class="doctor"><a href="/doctor/199143.html" title="梁兰英"  >梁兰英</a></td> 
                    <td class="doctor"><a href="/doctor/289832.html" title="蒋进广"  >蒋进广</a></td> 
                    	<td>&nbsp;</td>
                    
                    	<td>&nbsp;</td>
                    
                    	<td>&nbsp;</td>
                    
                  </tr>
                  
                  <tr>
                               
                    <th scope="row"><a href="/hospital/1cd60_doctors.html?diseaseId=224" title="角膜炎">角膜炎</a> > </th>
                    
                    <td class="doctor"><a href="/doctor/289837.html" title="董生良"  >董生良</a></td> 
                    	<td>&nbsp;</td>
                    
                    	<td>&nbsp;</td>
                    
                    	<td>&nbsp;</td>
                    
                    	<td>&nbsp;</td>
                    
                  </tr>
                  
                  <tr>
                               
                    <th scope="row"><a href="/hospital/1cd60_doctors.html?diseaseId=914" title="白内障">白内障</a> > </th>
                    
                    <td class="doctor"><a href="/doctor/289837.html" title="董生良"  >董生良</a></td> 
                    	<td>&nbsp;</td>
                    
                    	<td>&nbsp;</td>
                    
                    	<td>&nbsp;</td>
                    
                    	<td>&nbsp;</td>
                    
                  </tr>
                  
                  <tr>
                               
                    <th scope="row"><a href="/hospital/1cd60_doctors.html?diseaseId=3350" title="近视眼">近视眼</a> > </th>
                    
                    <td class="doctor"><a href="/doctor/289837.html" title="董生良"  >董生良</a></td> 
                    	<td>&nbsp;</td>
                    
                    	<td>&nbsp;</td>
                    
                    	<td>&nbsp;</td>
                    
                    	<td>&nbsp;</td>
                    
                  </tr>
                  
                  
                  <tr>
                    <th scope="row"><a title="更多疾病" target="_self" href="/hospital/1cd60_doctors.html">更多疾病</a> ></th>
                    <td class="more_disease" colspan="5">
                    
                    <a href="/hospital/1cd60_doctors.html?diseaseId=2225" title="贲门癌">贲门癌</a>      
                    
                    <a href="/hospital/1cd60_doctors.html?diseaseId=337" title="肠炎">肠炎</a>      
                    
                    <a href="/hospital/1cd60_doctors.html?diseaseId=224" title="角膜炎">角膜炎</a>      
                    
                    <a href="/hospital/1cd60_doctors.html?diseaseId=914" title="白内障">白内障</a>      
                    
                    <a href="/hospital/1cd60_doctors.html?diseaseId=3350" title="近视眼">近视眼</a>      
                    
                    <a href="/hospital/1cd60_doctors.html?diseaseId=187" title="冠心病">冠心病</a>      
                    
                    </td>
                  </tr>
                </table>
                <div class="next"><a title="全部疾病推荐专家" target="_self" href="/hospital/1cd60_doctors.html">全部疾病推荐专家</a></div>
                
            </li> 
            
            <li id="panelHover2" class="tabpanel" style="display:none;">
           		
            	<table class="find_prfs_table" width="0" border="0">
            	  
                  <tr>
                    <th scope="row"><a href="/hospital/76036_lab.html" title="神经内科">神经内科</a> > </th>
                   
                    <td class="doctor199136"><a href="/doctor/199136.html" title="李桂皊" >李桂皊</a></td> 
                    <td class="doctor199137"><a href="/doctor/199137.html" title="李志彬" >李志彬</a></td> 
                    	<td>&nbsp;</td>
                    
                    	<td>&nbsp;</td>
                    
                    	<td>&nbsp;</td>
                    
                  </tr>
                  
                  <tr>
                    <th scope="row"><a href="/hospital/76037_lab.html" title="骨伤科">骨伤科</a> > </th>
                   
                    <td class="doctor199138"><a href="/doctor/199138.html" title="沈家泰" >沈家泰</a></td> 
                    	<td>&nbsp;</td>
                    
                    	<td>&nbsp;</td>
                    
                    	<td>&nbsp;</td>
                    
                    	<td>&nbsp;</td>
                    
                  </tr>
                  
                  <tr>
                    <th scope="row"><a href="/hospital/76047_lab.html" title="眼科">眼科</a> > </th>
                   
                    <td class="doctor289837"><a href="/doctor/289837.html" title="董生良" >董生良</a></td> 
                    	<td>&nbsp;</td>
                    
                    	<td>&nbsp;</td>
                    
                    	<td>&nbsp;</td>
                    
                    	<td>&nbsp;</td>
                    
                  </tr>
                  
                  <tr>
                    <th scope="row"><a href="/hospital/76040_lab.html" title="呼吸科">呼吸科</a> > </th>
                   
                    <td class="doctor199142"><a href="/doctor/199142.html" title="张雷" >张雷</a></td> 
                    	<td>&nbsp;</td>
                    
                    	<td>&nbsp;</td>
                    
                    	<td>&nbsp;</td>
                    
                    	<td>&nbsp;</td>
                    
                  </tr>
                  
                  <tr>
                    <th scope="row"><a href="/hospital/76039_lab.html" title="普外科">普外科</a> > </th>
                   
                    <td class="doctor199140"><a href="/doctor/199140.html" title="黄侣新" >黄侣新</a></td> 
                    <td class="doctor199141"><a href="/doctor/199141.html" title="沈士刚" >沈士刚</a></td> 
                    	<td>&nbsp;</td>
                    
                    	<td>&nbsp;</td>
                    
                    	<td>&nbsp;</td>
                    
                  </tr>
                  
                  <tr>
                    <th scope="row"><a title="更多科室" target="_self" href="/hospital/1cd60_doctors.html">更多科室</a> ></th>
                    <td class="more_disease" colspan="5">
                    
                    <a href="/hospital/76048_lab.html" title="放射科">放射科</a>      
					
                    <a href="/hospital/76038_lab.html" title="男科">男科</a>      
					
                    <a href="/hospital/76041_lab.html" title="消化科">消化科</a>      
					
                    <a href="/hospital/76042_lab.html" title="老年病科">老年病科</a>      
					
                    <a href="/hospital/76043_lab.html" title="儿科">儿科</a>      
					
                    <a href="/hospital/76046_lab.html" title="肾内科">肾内科</a>      
					
					</td>
                          </tr>
                        </table>
					<div class="next"><a title="全部科室推荐专家" target="_self" href="/hospital/1cd60_doctors.html">全部科室推荐专家</a></div>
                
            </li>
        </ul>
    </div>
	</div>

                
                <div class="hspt_left_p3">
	                
                	<div class="hspt_left_t">
                    	科室列表<span><i>16</i> 个科室  
				       		 	 、<i>21</i> 位医生
				       		</span>
                    </div>
                    
                    <div class="sections_list_m">
                    	<ul>
                    	
                    		
	                        	<li>
	                            	<div class="sections_th l">
	                                	内科 >
	                                </div>
	                                <div class="sections_td">
	                                	
			                                		<a href="/hospital/76036_lab.html" title="神经内科">神经内科</a>       
			                                	
			                                		<a href="/hospital/76040_lab.html" title="呼吸科">呼吸科</a>       
			                                	
			                                		<a href="/hospital/76041_lab.html" title="消化科">消化科</a>       
			                                	
			                                		<a href="/hospital/76046_lab.html" title="肾内科">肾内科</a>       
			                                	
			                                		<a href="/hospital/76044_lab.html" title="肛肠科">肛肠科</a>       
			                                	
			                                		<a href="/hospital/76045_lab.html" title="心血管内科">心血管内科</a>       
			                                	
	                                </div>
	                            </li>
                            
	                        	<li>
	                            	<div class="sections_th l">
	                                	外科 >
	                                </div>
	                                <div class="sections_td">
	                                	
			                                		<a href="/hospital/76039_lab.html" title="普外科">普外科</a>       
			                                	
			                                		<a href="/hospital/76050_lab.html" title="胸心外科">胸心外科</a>       
			                                	
			                                		<a href="/hospital/76051_lab.html" title="神经外科">神经外科</a>       
			                                	
	                                </div>
	                            </li>
                            
	                        	<li>
	                            	<div class="sections_th l">
	                                	妇儿 >
	                                </div>
	                                <div class="sections_td">
	                                	
			                                		<a href="/hospital/76043_lab.html" title="儿科">儿科</a>       
			                                	
	                                </div>
	                            </li>
                            
	                        	<li>
	                            	<div class="sections_th l">
	                                	其他 >
	                                </div>
	                                <div class="sections_td">
	                                	
			                                		<a href="/hospital/76037_lab.html" title="骨伤科">骨伤科</a>       
			                                	
			                                		<a href="/hospital/76047_lab.html" title="眼科">眼科</a>       
			                                	
			                                		<a href="/hospital/76048_lab.html" title="放射科">放射科</a>       
			                                	
			                                		<a href="/hospital/76038_lab.html" title="男科">男科</a>       
			                                	
			                                		<a href="/hospital/76042_lab.html" title="老年病科">老年病科</a>       
			                                	
			                                		<a href="/hospital/76049_lab.html" title="急诊科">急诊科</a>       
			                                	
	                                </div>
	                            </li>
                            
                        </ul>
                    </div>
                </div>
                
                
                <div class="doc-box"><div class="doc-box-con">
                	
<div class="doc-tit clearfix">
	<h3>就诊评价</h3>
</div>
<div class="doc-cm-filter clearfix">
	<div class="tit">按疾病查看：</div>
	<div class="tag tag-hide">
		<ul class="clearfix">
			<li><a class='now' href="/hospital/1cd60_comments.html" target="_self">全部<i>(6)</i></a></li>
			
		</ul>
	</div>
	<div class="btn">
		<a class="btn-down" href="javascript:void(0);" target="_self">展开</a><a
			class="btn-up" href="javascript:void(0);" target="_self"
			style="display: none;">收起</a>
	</div>
</div>
<div class="doc-cm-list">
	
	<div class="item">
		<div class="tit">
			<span><i>医生：</i><a href="/doctor/199140.html">黄侣新</a></span>
			<span><i>疾病：</i>
				未填写
			</span><span><i>医生态度：</i>
				未填写
			</span><span><i>诊疗效果：</i>
				未填写
			</span><span><i>候诊时长：</i>
				10分钟内
			</span>
		</div>
		<div class="des">非常感谢黄院长，医术高明、医德高尚。</div>
		<div class="info">
			<a class="fav" href="javaScript:;" onclick="addVote(90280);">有用(<label id="voteCount90280">0</label>)</a><span>匿名</span><span>2012-05-25 10:20:10</span>
		</div>
	</div>
	
	<div class="item">
		<div class="tit">
			<span><i>医生：</i><a href="/doctor/199137.html">李志彬</a></span>
			<span><i>疾病：</i>
				未填写
			</span><span><i>医生态度：</i>
				未填写
			</span><span><i>诊疗效果：</i>
				未填写
			</span><span><i>候诊时长：</i>
				10分钟内
			</span>
		</div>
		<div class="des">药物治疗加手法康复，很好</div>
		<div class="info">
			<a class="fav" href="javaScript:;" onclick="addVote(94133);">有用(<label id="voteCount94133">0</label>)</a><span>匿名</span><span>2009-12-11 16:25:00</span>
		</div>
	</div>
	
	<div class="item">
		<div class="tit">
			<span><i>医生：</i><a href="/doctor/199137.html">李志彬</a></span>
			<span><i>疾病：</i>
				未填写
			</span><span><i>医生态度：</i>
				未填写
			</span><span><i>诊疗效果：</i>
				未填写
			</span><span><i>候诊时长：</i>
				10分钟内
			</span>
		</div>
		<div class="des">有爱心，技术高，服务到位，百问不烦，真是好医生</div>
		<div class="info">
			<a class="fav" href="javaScript:;" onclick="addVote(90278);">有用(<label id="voteCount90278">0</label>)</a><span>匿名</span><span>2009-05-17 15:12:00</span>
		</div>
	</div>
	
</div>

<script type="text/javascript">
function addVote(commentId){
	var voteCount = $('#voteCount'+commentId).text();
	$.ajax({
		url:'/doctor/comment/updateSum.json',
		async:false,
		data:"commentId="+commentId,
		error:function(errResult){
			console.log(errResult);
		},
		success:function(result){
			if(result.userCount == 0 ){
				voteCount=1+parseInt(voteCount);
				$('#voteCount'+commentId).text(voteCount)
			}else{
				alert(result.tip);
			}
		}
	});
}
</script>
                	
                	<div class="serach-left-page">
						<div class="next"><a href="/hospital/1cd60_comments.html" target="_self" title="查看全部就医评价">查看全部就医评价</a></div>
					</div>
					
                </div></div>
                
                
            </div>
        	<div class="jy_hspt_main_r">
        		
<div class="hspt_r_search mt-20">
	<h3>院内搜索</h3>
    <div class="hspt_r_searchbar">
    	<form onsubmit="preCheckKeyWords();" action="/hospital/1cd60_doctors.html">
    	<input class="r_search_input" id="keyWords" name="keyWords" type="text" value="疾病/科室/医生" onfocus="if(value=='疾病/科室/医生') {value=''}" onblur="if (value=='') {value='疾病/科室/医生'}" /> <input class="r_search_btn" type="submit" value="搜索" />
    	</form>
    </div>
</div>
<script type="text/javascript">
	function preCheckKeyWords(){
		var keyWords = $("#keyWords").val();
		if (keyWords == "疾病/科室/医生"){
			$("#keyWords").val("");
		}
		return true;
	}
</script>
        		
        		
                <div class="hspt_r_ad">
               		<a href="https://www.hospmall.com/hospital/index?unionid=100000&amp;s=1" target="_blank" rel="nofollow"><img src="http://pimg.39.net//PictureLib/A/f4/c3/20161009/org/768604.jpg" alt="" /></a>
	             </div>
               	
                <div class="doc-box" >
					<div class="doc-box-con">
						<div class="doc-tit2 clearfix">
							<h3>热门推荐内容</h3>
						</div>
						<div class="doc-rbox-rel">
							


<!-- 6060：就医助手-医生终端页-右侧图标 类型：固定广告位 尺寸：250x250 -->
<div>
<script type="text/javascript">//<![CDATA[
ac_as_id = 6060;
ac_format = 0;
ac_mode = 1;
ac_group_id = 1;
ac_server_base_url = "d-test.39.net/";
//]]></script>
<script type="text/javascript" src="/style/style.js"></script>
</div>
						</div>
					</div>
				</div>
                
                <div class="hspt_r_map">
                	<h3>医院地图</h3>
                    <div class="hspt_r_map_m">
                    	<a href="" title="查看" id="imgurl" ><?php echo ($imgurl); ?></a>
                    </div>
                </div>
                
	<div class="hspt_rbox">
		<div class="hspt_rbox_r">
			<a href="/suqian/hospitals/">宿迁医院排行&gt;&gt;</a>
		</div>
		<h3>同城医院</h3>
		<ul class="hspt_r_rel">
			
			<li>
				<h4>
					<a
					href="/xq/zonghe/1cd80.html"
					title="宿迁市宿豫区骆马医院" id="hospital1cd80">宿迁市宿豫区骆马医院</a> 
				</h4>
				<p>
					
				</p>
			</li>
			
			<li>
				<h4>
					<a
					href="/xq/zonghe/1cd64.html"
					title="宿迁市神经精神病院" id="hospital1cd64">宿迁市神经精神病院</a> 
				</h4>
				<p>
					二级甲等
				</p>
			</li>
			
			<li>
				<h4>
					<a
					href="/xq/zonghe/1cd72.html"
					title="宿迁市宿豫区龙河镇医院" id="hospital1cd72">宿迁市宿豫区龙河镇医院</a> 
				</h4>
				<p>
					
				</p>
			</li>
			
			<li>
				<h4>
					<a
					href="/xq/zonghe/f9a1c.html"
					title="固生堂无锡葆元春堂国医馆" id="hospitalf9a1c">固生堂无锡葆元春堂国医馆</a> 
				</h4>
				<p>
					二级甲等
				</p>
			</li>
			
			<li>
				<h4>
					<a
					href="/xq/zonghe/fc83b.html"
					title="南京京科医院男科" id="hospitalfc83b">南京京科医院男科</a> 
				</h4>
				<p>
					
				</p>
			</li>
			
		</ul>
	</div>

<div class="hspt_rbox" id="history_hospital" style="display: none;">
	<h3>最近浏览过的医院</h3>
	<ul class="hspt_r_rel"></ul>
</div>
<script type="text/javascript">
$(function() {
	$.getJSON("/hospital/getLocUser.json",function(result) {
		if(result.lookedHospitalList.length > 0) {
			$('#history_hospital ul').html("");
			var vHtml = "";
			for(var i=0; i<result.lookedHospitalList.length; i++) {
				vHtml += '<li><h4><a href="/'+result.lookedHospitalList[i].ABBREVIATION.AREA_ABBREVIATION  + '/' + result.lookedHospitalList[i].ABBREVIATION.NATURE_ABBREVIATION + '/' + result.lookedHospitalList[i].HEX_ID + '.html" title="' + result.lookedHospitalList[i].NAME + '">' + result.lookedHospitalList[i].NAME;
				if(result.lookedHospitalList[i].REGISTER_FLAG=='Y'){
					vHtml += '&nbsp;<img alt="" src="/preview/yyk_keshi/images/yue_icon.jpg">';
				}
				vHtml += '</a></h4><p>';
				if(result.lookedHospitalList[i].TAGs.length>0){
					for(var t=0;t<result.lookedHospitalList[i].TAGs.length;t++){
						if(t>0) vHtml+= '/';
						vHtml += result.lookedHospitalList[i].TAGs[t].NAME;
					}
				}
				vHtml += '</p></li>';
			}
			$('#history_hospital ul').append(vHtml);
			$('#history_hospital').show()
		}
		else {
			$('#history_hospital').hide();
		}
	});
});
</script>

                
                <div class="hspt_r_renxin">
                </div>
                
                
                <div class="doc-box" >
					<div class="doc-box-con">
						<div class="doc-tit2 clearfix">
							<h3>百度推广内容</h3>
						</div>
						<div class="doc-rbox-rel">
							
<!-- 7189：就医助手-终端页右下图标-通发 类型：固定广告位 尺寸：250x250 -->
<div>
<script type="text/javascript">//<![CDATA[
ac_as_id = 7189;
ac_format = 0;
ac_mode = 1;
ac_group_id = 1;
ac_server_base_url = "d-test.39.net/";
//]]></script>
<script type="text/javascript" src="/style/style.js"></script>
</div>

						</div>
					</div>
				</div>
                
           
                
            </div>
            
            <div class="clean"></div>
        </div>
    </div>
  
    
    
		


<!--增设底部 20140915 end-->
</div>


<div class="bottominfo" id="bottominfo" style="padding-top:10px;">
	<hr style="width:970px;color:#bbb;" size="1">
  
	<a href="<?php echo U('home/index/about');?>" rel="nofollow">关于我们</a> | 
    <a href="" rel="nofollow">媒体医院在线客服：QQ 电话</a> | 
    <a href="" rel="nofollow">对医院意见反馈：QQ，微信 </a> | 
    <a href="" rel="nofollow">版权投诉：（联系网站）QQ （联系医院）QQ </a> | 
    <a href="" rel="nofollow">账号申诉：QQ：1569602446 </a> | 
  
    <a href="" rel="nofollow">问题反馈</a> | 
    <a href="" rel="nofollow">帮助中心</a> | 
    <a href=""></a><br>
Copyright  © 2000-2018　39.net All Rights Reserved.　本文由择医网作者上传并发布，择医网仅提供信息发布平台。文章仅代表作者个人观点，不代表百度立场。未经作者许可，不得转载。
         
 <a href="" rel="nofollow">ICP备案</a> <a href="/" rel="nofollow">公安备案</a> <a href="" rel="nofollow">版权所有</a>
</div>

</div>
	</div>
	<script type="text/javascript">
   function checkpost(){
    var key = $("#searchKey").val();
    if(key){
       window.location.href='<?php echo U('home/index/zonghe');?>'+'?key='+key+'&searchType=search'; 
    }
   } 
  </script>





</body>
</html>