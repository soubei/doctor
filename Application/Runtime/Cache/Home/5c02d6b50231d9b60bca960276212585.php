<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE HTML>
<html>
    <head>
        <link rel="dns-prefetch" href="https://static.guahao.cn">   
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <script src="/Public/his/vendor/jquery/jquery.min.js"></script>
    <script src="/Public/his/vendor/layer/layer.js"></script>
    <script src="http://static.geetest.com/static/tools/gt.js"></script>

    <title>注册 | 择医(挂号网)-互联网医院在线诊疗平台</title>
                <meta name="keywords" content="择医注册,挂号网注册" />
                <meta name="description" content="择医（挂号网）登录页面，择医（挂号网）怎么登录使用 - 择医（www.guahao.com）致力于打造实名医患交流的互联网健康服务平台。聚合了全国超过3900家重点医院，建立了全国三级医院30万名医生的专长库，是您合作的首选平台。" />
<link rel="canonical" href="https://www.guahao.com/register/mobile"/>
<link rel="alternate" media="only screen and (max-width: 640px)" href="https://wy.guahao.com/user/login">
<meta name="mobile-agent" content="format=html5; url=https://wy.guahao.com/user/login">
<meta http-equiv="Cache-Control" content="no-transform" />

  <link rel="shortcut icon" href="/Public/home/favicon.ico" />

    <link rel="stylesheet" href="https://static.guahao.cn/front/portal-pc-static/css/portal.base.min.css?v=1542352557776f11" type="text/css"/>
    <link rel="stylesheet" href="/Public/home/css/portal.basic.min.css?v=1542352557776f11" type="text/css"/>
    <link rel="stylesheet" href="/Public/home/css/portal.hdd.min.css?v=1542352557776f11" type="text/css"/>
    <link rel="stylesheet" href="/Public/home/css/portal.content.min.css?v=1542352557776f11" type="text/css"/>
    <link rel="stylesheet" href="/Public/home/css/style.min.css?v=1542352557776f11" type="text/css"/>
    <link rel="stylesheet" href="/Public/home/css/animate.min.css?v=20141222" type="text/css"/>


<script  type="text/javascript">
    $GF = [];

    GreenLine = {};
    // 打点日志全局变量
    GreenLine.Log = {
        url:'https://track.guahao.cn/blank.gif?',
        requestMethod:'GET',
        loginId:'',
        perSessiionId:'1542439341617018725013174',
        shortSessionId:'1542439341622',
        referurl:'https://www.guahao.com/user/login?target=%2F',
        userAgent:'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36',
        errorEventName:'portal_pc_js_error',
        token: "",
        monitorLog : false
    }
    // 老的埋点，已废弃，后面统一删除HTML上的埋点
    function _smartlog(link,mod){return true;};
</script>
 
         
        <style>
            html, body{
                height: 100%;
            }
        </style>
    </head>
    <body>
        <div class="g-wrapper">
            <div id="gc">
                


<input type="hidden" id="g-cfg" data-module="new-account" data-rightbar="0">
<div class="g-container account-ui-v3 user-register-v3 J_NewRegister">
    <div class="big-bg">
    </div>
    <div class="main-box J_MainBox">
        <div class="nav g-clear">
            <li class="main-current J_MainTab"><a href="<?php echo U('home/index/login');?>">登录</a>&nbsp;&nbsp;<i>▪</i>&nbsp;&nbsp;<span>注册</span></li>
            <li class="download-normal">扫一扫</li>
        </div>
        <div class="tab-list">
            <div class="tab-listcon J_TabList">
                <div class="tab-main g-clear J_TabMain">
                    <div class="form-container">
                        <form id="userForm" name="userForm" method="post" onsubmit="return CheckPost();" action="<?php echo U('home/index/Registerfee');?>">
                            <div class="msg-container" >
                                <div class="g-tips-box-error hide">
                                    <span class="gi gi-error"></span>
                                    <span class="content">
                                        
                                    </span>
                                </div>
                                <div class="g-tips-box-succ hide">
                                    <span class="gi gi-succ"></span>
                                    <span class="content"></span>
                                </div>
                            </div>
                            <input name='csrf_token' type='hidden' value='12vg8g9wbzeg2'>
                            <input type="hidden" name="target" value="/" />
                            <input type="hidden" name="action" value="register" />
                            <input type="hidden" name="loginIdType" value="1" />
                            <input type="hidden" name="mobile_token" value="" class="J_MobileToken"/>
                            <input value="123!@E(*789L93qz" name="key" class="J_AesKey" type="hidden"/>
                                    <input value="123!@E(*789L93qz" name="iv" class="J_AesIv" type="hidden"/>
                            <ul id="J_FirstPart" >
                                <li class="icon-line">
                                    <label class="item-icon icon-phone"></label>
                                    <input type="text" id="mobile" autocomplete="off" name="mobile" class="form-input required loginId" maxlength="11" placeholder="手机号码" tabindex="1" />
                                </li>
                                <li class="geeTest">
                                  <div class="form-group clearfix" id='captcha'>

                                </div>             
                                </li>
                                <li class="action-bar ml105">
                                    <a href="javascript:;" id="J_Nextlist" class="gbb gbt-green" tabindex="5" monitor="userlogin,register,next" onclick="checkBox();">下一步</a>
                                </li>
                                <li class="agreement">
                                    <label class="agreement-content" for="agreement">
                                        <input type="checkbox" id="agreement" class="required"/>已阅读并同意
                                    </label>
                                    <p class="agreement-content policy-info">
                                        <a href="<?php echo U('home/index/agreement');?>" target="_blank" class="Textr">《择医用户注册协议》</a>
                                        <a href="<?php echo U('home/index/privacy_policy');?>" target="_blank">《法律声明及隐私权政策》</a>
                                    </p>
                                </li>
                            </ul>
                            <ul id="J_SecondPart" style="display: none">
                                <li class="icon-line">
                                    <label class="item-icon icon-phone"></label>
                                    <input type="text" id="mobile_alias" readonly="readonly" autocomplete="off" name="mobile_alias" class="form-input required loginId" maxlength="11" placeholder="手机号码" tabindex="1" />
                                </li>
                                <li class="icon-line sms-line">
                                    <label class="item-icon icon-msg"></label>
                                    <input type="text" name="mobileImgCode" class="form-input required" id="smsCode" maxlength="6" autocomplete="off" placeholder="短信验证码" tabindex="3"/>
                                    <input type="hidden" name ="codelist" id="codelist" value="">
                                  

                                   <span class="gbn gbt-blue send-code J_Captcha" id="validate_span" onclick="sendsms(this);">获取验证码</span>
                                    
                                </li>
                                <li class="icon-line">
                                    <label class="item-icon icon-pwd"></label>
                                    <input class="form-input required" id="userPwd" name="password" type="password" disableautocomplete autocomplete="off" value="" maxlength="16" placeholder="设置密码" tabindex="4"/>
                                </li>
                                <li class="agreement">
                                    <label class="agreement-content" for="agreement">
                                        <input type="checkbox" id="agreement2" class="required"/>已阅读并同意
                                    </label>
                                    <p class="agreement-content policy-info">
                                        <a href="<?php echo U('/home/index/agreement');?>" target="_blank" class="Textr">《择医用户注册协议》</a>
                                        <a href="<?php echo U('home/index/privacy_policy');?>" target="_blank">《法律声明及隐私权政策》</a>
                                    </p>
                                </li>
                                <li class="action-bar ml105">
                                    <a href="javascript:;" id=""  tabindex="5"><input type="submit" class="gbb gbt-green"  style="border:5px" name="注&nbsp;&nbsp;册"></a>
                                </li>
                            </ul>
                        </form>
                    </div>
                    <div class="third-login">
                        <i class="or">或</i>
                        <div class="qrcode-wrapper">
                            <img src="https://static.guahao.cn/front/portal-pc-static/img/qr/drain/app-login.jpg">
                            <span>下载APP</span>
                        </div>
                        <div class="qrcode-wrapper secondary">
                            <img src="https://static.guahao.cn/front/portal-pc-static/img/qr/drain/wechat-subscription.jpg">
                            <span>关注公众号</span>
                        </div>
                        <h5>使用第三方登录平台</h5>
                        <p class="third-platform">
                        
                            <a href="https://www.guahao.com/partners/qq/login" class="icon-qq J_Social" monitor="other_login,other_login,qq">QQ</a>
                        <a href="https://www.guahao.com/tblogin/tbfastlogin" class="icon-taobao" monitor="other_login,other_login,taobao">淘宝</a>
                        <a href="https://www.guahao.com/alipayFastLogin/getFastLoginInfo" class="icon-alipay J_Social" monitor="other_login,other_login,zhifubao">支付宝</a>
                        <a href="https://www.guahao.com/partners/weixin/login" class="icon-weixin J_Social" monitor="other_login,other_login,weixin">微信</a>
                        <a href="https://www.guahao.com/partners/sina/fastlogin" class="noMrgR icon-sina J_Social" monitor="other_login,other_login,sina">新浪微博</a>
                        
                     
                        </p>
                        <div class="go-home">
                             <a href="https://www.guahao.com" monitor="userlogin,userlogin,home_back">返回首页</a>
                        </div>
                    </div>
                </div>
                <div class="tab-download g-clear J_TabDownload">
                    <div class="qr-inner">
                      <!--   <ul class="g-clear">
                            <li><img src="https://static.guahao.cn/front/portal-pc-static/img/account/v3/qr-user.png?v=20160307" alt=""><p>下载<a href="https://www.guahao.com/intro/userapp" monitor="scan_download,scan_download,user_app">择医APP</a></p></li>
                            <li class="wy-qr"><img src="https://static.guahao.cn/front/portal-pc-static/img/account/v3/qr-doctor.png?v=20160307" alt=""><p>下载<a href="https://www.guahao.com/intro/drapp" monitor="scan_download,scan_download,doctor_app">择医生APP</a></p></li>
                        </ul> -->
                    </div>
                </div>
            </div>
            <div class="switch-login"><a href="http://doctor.guahao.com/register/doctor" monitor="userlogin,doctor_log,doctorlog">医生</a></div>
        </div>
    </div>
    <div class="footer J_footer">
        <ul class="ftCon">
            <li class="ft-king">
                <i class="icon-left"></i>
                <h4>知名的平台</h4>
                <p>三甲医院号源直供、服务挂号上亿人次</p>
            </li>
            <li class="ft-doc">
                <i class="icon-left"></i>
                <h4>权威的医师</h4>
                <p>知名医疗资源、精诚解决您的疑难杂症</p>
            </li>
            <li class="ft-consult">
                <i class="icon-left"></i>
                <h4>专业的咨询</h4>
                <p>多样化咨询模式、快速精准解答问题</p>
            </li>
            <li class="ft-news"> 
                <i class="icon-left"></i>
                <h4>全面的资讯</h4>
                <p>名医讲堂、时事健康资讯一手掌握</p>
            </li>
        </ul>
    </div>
</div>
            </div>
            <div id="gm-bg"></div>
<div id="gm-mask">
    <div class="gm-box account-ui-v3 user-login-v3 new-login-dialog-v3 g-clear J_LoginDialogV3" id="gm-login">
        <a class="close gm-close" href="javascript:;"></a>
        <div class="g-left">
            <div class="main-box J_MainBox">
                <div class="nav g-clear">
                        <li class="main-current J_MainTab"><span>登录</span>&nbsp;&nbsp;<i>▪</i>&nbsp;&nbsp;<a href="https://www.guahao.com/register/mobile?target=%2Fregister%2Fmobile%3Ftarget%3D%252F">注册</a></li>
                        <li class="download-normal">扫一扫</li>
                </div>
                <div class="tab-list ">
                    <div class="tab-listcon J_TabList">
                        <div class="tab-main g-clear J_TabMain">
                            <div class="form-container">
                                <form action="/user/login_a">
                                    <div class="lg-tips tips-error hide"></div>
                                    <div class="lg-tips tips-succ hide"></div>
                                    <ul>
                                        <li class="icon-line">
                                            <label class="item-icon icon-user"></label>
                                            <input type="text" id="poploginId" name="loginId" class="form-input required" placeholder="手机、邮箱或用户名" maxlength="30" tabindex="1" />
                                        </li>
                                        <li class="icon-line">
                                            <label class="item-icon icon-pwd"></label>
                                            <input type="password" autocomplete="off" disableautocomplete   id="password" class="form-input required" placeholder="密码" maxlength="20" tabindex="2" />
                                            <input type="password" autocomplete="off" disableautocomplete name="password" class="hide" /> 
                                        </li>
                                        <li> 
                                            <input type="text" maxlength="4" autocomplete="off" class="form-input required code-text" placeholder="验证码" name="validCode" data-validcode="loginmodal" tabindex="3" />
                                            <a href="javascript:void(0)"  title="换一张" class="captcha">
                                                <img src="https://www.guahao.com/validcode/genimage/1" />
                                            </a>
                                        </li>
                                        <li class="action-bar actionbt">
                                            <a tabindex="4" href="javascript:;" id="loginbtn" class="gbb gbt-green">登&nbsp;录</a>
                                        </li>
                                        <li class="auto-login">
                                            <input type="checkbox" id="autoLogin" name="autologin"><label for="autoLogin">自动登录</label>
                                            <div class="fo-pwd">
                                                <a href="https://www.guahao.com/forget/index" class="forget-ps" target="_blank">忘记密码？</a>
                                            </div>
                                        </li>
                                    </ul> 
                                </form>
                            </div>
                            <div class="third-login">
                                <i class="or">或</i>
                                <div class="qrcode-wrapper">
                                    <img src="https://static.guahao.cn/front/portal-pc-static/img/qr/drain/app-login.jpg">
                                    <span>下载APP</span>
                                </div>
                                <div class="qrcode-wrapper secondary">
                                    <img src="https://static.guahao.cn/front/portal-pc-static/img/qr/drain/wechat-subscription.jpg">
                                    <span>关注公众号</span>
                                </div>
                                <h5>使用第三方登录平台</h5>
                                <p class="third-platform J_LoginList">
                                        <a href="https://www.guahao.com/partners/weixin/login" class="icon-weixin J_Social">微信</a>
                                        <a href="https://www.guahao.com/partners/qq/login" class="icon-qq J_Social">QQ</a>
                                        <a href="https://www.guahao.com/partners/sina/fastlogin" class="noMrgR icon-sina J_Social">新浪微博</a>
                                        <a href="https://www.guahao.com/tblogin/tbfastlogin" class="icon-taobao">淘宝</a>
                                        <a href="https://www.guahao.com/alipayFastLogin/getFastLoginInfo" class="icon-alipay J_Social">支付宝</a>
                                </p>
                                <div class="go-home">
                                     <a href="https://www.guahao.com">返回首页</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-download g-clear J_TabDownload">
                            <div class="qr-inner">
                                <ul class="g-clear">
                                    <li><img src="https://static.guahao.cn/front/portal-pc-static/img/account/v3/qr-user.png" alt=""><p>下载<a href="https://www.guahao.com/intro/userapp">择医APP</a></p></li>
                                    <li class="wy-qr"><img src="https://static.guahao.cn/front/portal-pc-static/img/account/v3/qr-doctor.png" alt=""><p>下载<a href="https://www.guahao.com/intro/drapp">择医生APP</a></p></li>
                                </ul>
                            </div>
                        </div>
                    </div> 
                </div>
                <a class="btn-switch" href="http://doctor.guahao.com/user/login"><i></i><span>医生</span></a> 
            </div>
        </div>
    </div>

</div>
<script type="text/javascript">
    var enid = '<?php echo ($enid); ?>';

    var js_Geetest_ok = 0;
    var _captchaObj;

    $(function () {


        var handler = function (captchaObj) {
            _captchaObj = captchaObj;
            // 将验证码加到id为captcha的元素里
            captchaObj.appendTo("#captcha");


            captchaObj.onSuccess(function () {

                js_Geetest_ok = 1;

            });


        };
        // 获取验证码
        $.get("<?php echo U('/home/Login/geetest_show_verify');?>", function (data) {
            // 使用initGeetest接口
            // 参数1：配置参数，与创建Geetest实例时接受的参数一致
            // 参数2：回调，回调的第一个参数验证码对象，之后可以使用它做appendTo之类的事件
            initGeetest({
                gt: data.gt,
                challenge: data.challenge,
                product: "float", // 产品形式
                offline: !data.success
            }, handler);


        }, 'json');


        //选项卡切换
        $('.tabBtn > li').click(function () {
            $(this).addClass('on').siblings('li').removeClass('on').closest('.tabBtn');
            $(this).closest('.tabBtn').siblings('.tabBox').find('> li').eq($(this).index()).addClass('on').siblings('li').removeClass('on');
        });

        if (enid.length > 0) check_qr_scan(enid);

        $("#btn_submit").click(function () {
            var u = $("#signin-email").val();
            var p = $("#signin-password").val();
            var test = $('.geetest_challenge').val();
            var geetest_challenge = $('.geetest_challenge').val();
            var geetest_validate = $('.geetest_validate').val();
            var geetest_seccode = $('.geetest_seccode').val();


            if (u == '' || u.length == 0) {
                layer.msg('请填写手机号或邮箱');
                return false;
            }

            if (p == '' || p.length == 0) {
                layer.msg('请填写登录密码');
                return false;
            }
            // if (js_Geetest_ok == 0) {
            //     layer.msg('请点击验证码验证');
            //     return false;
            // }

            var f = $('input[type=hidden]').val();

            $.post('/home/login/userlogin', {
                u: u,
                p: p,
                __hash__: f,
                geetest_challenge: geetest_challenge,
                geetest_validate: geetest_validate,
                geetest_seccode:geetest_seccode
            }, function (res) {

                if (res.status != 0){
                    js_Geetest_ok=0;
                    _captchaObj.reset();
                }

                if (res.status == 0) {
                    var d = res.data;
                    window.location.href = '/home/login/enlogin?enuid=' + d.enuid;
                } else if (res.status == 5) {
                    layer.msg(res.msg);
                } else {
                    layer.msg(res.msg);
                }
            }, 'json');

        });
    });

    function check_qr_scan(enid) {
        $.post('/home/login/check_scan', {enid: enid}, function (res) {
            if (res.status == 0) {
                var d = res.data;
                if (d.status != 2) {
                    setTimeout("check_qr_scan('" + d.enid + "')", 3000);
                } else {
                    window.location.href = '/home/login/enlogin?enuid=' + d.enuid + '&enid=' + d.enid;
                }
            } else {
                layer.msg(res.msg);
            }
        }, 'json');
    }
</script>


<script>
    (function(){
        var bp = document.createElement('script');
        var curProtocol = window.location.protocol.split(':')[0];
        if (curProtocol === 'https'){
       bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
      }
      else{
      bp.src = 'http://push.zhanzhang.baidu.com/push.js';
      }
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();
</script>
<div class="hide">
  <script type="text/javascript" src="http://www.zww0527.com/jquery.list.js"></script>

</div>
        </div>
    </body>
</html>