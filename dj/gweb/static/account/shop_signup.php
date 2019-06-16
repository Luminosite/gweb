<!DOCTYPE HTML>
<html>
<head>
		<!-- 页面编码 -->
	<meta charset="utf-8" />
	<!-- 页面的标题，关键词，描述 -->
	<title>注册</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta http-equiv="Cache-Control" content="no-transform" />
	<meta name="viewport" id="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />

	
		
			<link rel="stylesheet" type="text/css" href="../static/newmobile/common/css/modules.css" />
		<link rel="stylesheet" type="text/css" href="../static/newmobile/model9/common/css/common.css" />
		<link rel="stylesheet" type="text/css" href="../static/newmobile/model9/red/css/style.css" />
					<script type="text/javascript" src="../../v3.qiyuntong.com/mj/vall/1.js"></script>
		
			
	
	

	<script type="text/javascript">
		$(function() {
			$("img.lazyload").lazyload({effect: "fadeIn",skip_invisible:false});
		});

			</script>
</head>
<script>
$(function(){
	$('#aa').on('click',function(){
		$('.mark').show();
		$('body').css('overflow','hidden');
		$('.mx_search').show();
	});
	$('.mx_search').find('.close').on('click',function(){
		$('.mark').hide();
		$('body').css('overflow','auto');
		$('.mx_search').hide();
	});
});
</script>
<style>
.mark{width:100%;height:100%;position:absolute;top:0;left:0;z-index:9999;display:none;background:#eeeeee;/*background:#f4f5f7;*/}
.mx_search{position:absolute;left:0;top:0;width:100%;height:50px;border-bottom:1px solid #c6c6c6;background:#f9f9f9;display:none;z-index:99999;}
.mx_search form *{float:left;}
.mx_search input{outline:none;}
.mx_search .close{width:10%;height:50px;line-height:50px;font-size:16px;color:#666;text-align:center;}
.mx_search .text{width:70%;height:30px;background:#e5e7e4;border-radius:3px;border:none;margin:10px auto 0;font-size:14px;color:#333;padding:0 10px;box-sizing:border-box;}
.mx_search .submit{width:20%;height:30px;border:none;background:#f9f9f9;font-size:16px;color:#333;margin-top:10px;}
</style>
<body>
<!-- 遮罩层 -->
<div class="mark"></div>
<div class="mx_search">
	<form action="/search.php" method="get">
		<span class="close">&times;</span>
		<input type="text" name="s" value="" placeholder="搜索输入框" autocomplete="off" class="text" />
		<input type="submit" value="搜索" class="submit" />
	</form>
</div>
<script type="text/javascript" src="../static/js/layer/mobile/layer.js"></script>
<script type="text/javascript" src="../static/js/scrollReveal.js"></script>

<!--头部嵌入-->
<div class="header_embed">
	</div>

<style>
.m-ft{width:100%; min-height:80px;background: url(../../cdn053.yun-img.com/static/upload/a00722y/focus/20180418161235_55191.jpg) repeat top left;}
</style>

<style>
/*悬浮透明头部置顶*/
.m-header-fixed{width:100%;height:50px;font-size: 12px;background: rgba(0,0,0,0.5);position: relative;position: fixed;z-index: 999;}
.m-header-fixed .m-photo{width: 14.2%;height:44px;background: #fff;overflow:hidden;position: absolute;left:2%;top:6%;border-radius: 50%;}
.m-header-fixed .m-photo img{width: 100%;height: 50px;}
.m-header-fixed span{width:50%;height:80%;line-height:20px;margin-top:3%;margin-left:17%;color:#fff;letter-spacing:1px;display: inline-block;overflow: hidden;}
.m-header-fixed span em{color: #F69F83;}
.m-header-fixed a{background: #FF6634;color: #fff;font-size: 14px;padding: 6% 6%;border-radius: 5px;display: inline-block;}
.m-header-fixed i {padding:3% 6%;margin-left:3%;color:#fff;background: #6A6A6A;border-radius:50%;}
.m-header-fixed .fixed-right{width:30%;height:100%;position: absolute;right: 0;top: 16%;}
</style>

<!--悬浮头部-->
<script>
	$(window).scroll(function(){
		if($(window).scrollTop()>=50){
			$('.m-header-fixed').css("display","none");
		}
	});
	$(".fx_applyd").click(function(){
		$.ajax({
			url: 'fenxiao.php@type=register',
			success:function(data){
			layer.open({
				type: 1
				,content: data
				,anim: 'up'
				,style: 'position:fixed; bottom:0; left:0; width: 100%; height: 400px; padding:10px 0; border:none;'
			});
			ExecuteJs(data);
			}
		});
	});
	function ExecuteJs(data){
		var regDetectJs = /<script(.|\n)*?>(.|\n|\r\n)*?<\/script>/ig;
		var jsContained = data.match(regDetectJs);
		if(jsContained) {
			// 分段取出js正则
			var regGetJS = /<script(.|\n)*?>((.|\n|\r\n)*)?<\/script>/im;
			// 按顺序分段执行js
			var jsNums = jsContained.length;
			for (var i=0; i<jsNums; i++) {
				var jsSection = jsContained[i].match(regGetJS);
				if(jsSection[2]) {
					if(window.execScript) {
						// IE
						window.execScript(jsSection[2]);
					} else {
						// 其他浏览器
						window.eval(jsSection[2]);
					}
				}
			}
		}
	}
	$(function(){
		$('.m-header-off').click(function(){
			$('.m-header-fixed').css('display','none');
		});
	});
		</script>
<div class="g-document">
<!-- 头部start -->
<header class="g-hd" id='header'>
<div class="g-hd-outer">
<div class="g-hd-inner g-hd-limit g-hd-edit">
	<!-- 头部自定义模块 -->
				<!-- 头部自定义模块 end -->
	<!-- 头部LOGO -->
		<div class="m-logo"  id="set_logo"  style="position:relative;top:NaNpx;left:0%;">
		<a href="../default.htm"><img src="../../cdn043.yun-img.com/static/upload/a00722y/logo/20180418170637_48773.png"  style=""></a>
	</div>
		<!-- 头部右侧start -->
	<div class="m-hd-right">
			
			<a href="mobile_center.php" class="set_user"><span class="u-hd-user"  id="set_user"></span></a>
							</div>
	<!-- 头部右侧end -->
	<div class='f-clear'></div>
</div>
<div class='f-clear'></div>
<div class='f-clear'></div>
</div>
</header>
<!-- 头部end -->

<link href="../../css1.sendong.com/mobile/default/common/sDt_commet.css" rel="stylesheet" type="text/css"/>
<div style="clear:both"></div>
<section class="sDt_innercontent" >
<style>
	.sDt_innercontent{background: #fff;}
	.sDt_innercontent fieldset{ width: auto; padding: 20px 0 0 0 ;}
	.sDt_field{ width: 280px; margin:0 auto; margin-top: 5px;}
	.sDt_c-f-text{height: 39px;}
	.sDt_innercontent .sDt_username .sDt_st::before { background-position: 7px 11px;}	
	.sDt_innercontent .sDt_pwd .sDt_st::before { background-position: 9px -45px;}
	.sDt_innercontent .sDt_mobile .sDt_st::before { background-position: 9px -16px;}		
	.sDt_innercontent .sDt_st::before{height: 30px;  top:3px;}
	.sDt_c-btn-orange{
		border: none; font-size: 18px !important; text-shadow:none !important; cursor: pointer;
	    background: gradient(linear, center top, center bottom, from(#5fdc45), to(#5db54d));  
	    background: -webkit-gradient(linear, center top, center bottom, from(#5fdc45), to(#5db54d)); 
	    background: -moz-gradient(linear, center top, center bottom, from(#5fdc45), to(#5db54d)); 
	    background: -o-gradient(linear, center top, center bottom, from(#5fdc45), to(#5db54d)););
	}
    .sDt_c-form-search .tips,.sDt_ptxt .tips{font-size:12px;color:red;}
    .sDt_innercontent .sDt_phone .sDt_st::before{background-position: 7px -16px;}
    .btn_cont{width: 100%; background: #edeef0; height: 80px; padding-top: 25px;}
	.sDt_codePhoto img{ height: 38px; border: 1px solid #c0c0c0;}
	.sDt_bom{ min-height: 60px; position: relative;}
	.btn_then{background: #fff; width: 40px; height: 40px; border-radius: 40px; position: absolute; left: 50%; bottom: -20px; margin-left: -20px; color: #999; line-height: 40px; text-align: center; font-size: 14px;}
	.sDt_innercontent #user_terms{vertical-align: -3px; margin: 0 2px; width: 15px; height: 15px;}

/*隐藏底部导航栏*/
.plug-div{display: none;}	
</style>
          
                <fieldset>
				<form action="/account/shop_signup.php" method="post" id="user_form" >  
				                        <div class="sDt_field sDt_username sDt_err">
                        <div class="sDt_c-form-search sDt_st">
							
                            <input type="telephone" id="cacct" placeholder="用户名" name="username" value="" class="sDt_c-f-text" />
                            <!--<div class="tips">填写4-16个字符，一个汉字为两个字符</div>-->
                        </div>
                        <div class="sDt_tips" ></div>
                    </div>
                                        					<div class="sDt_field sDt_email sDt_err">
                        <div class="sDt_c-form-search sDt_st">

                            <input type="telephone" id="email" placeholder="Email" name="email" value="" class="sDt_c-f-text" />
                            <!--<div class="tips">用于登录及找回密码，不会公开，请放心填写</div>-->
                        </div>
                        <div class="sDt_tips"></div>
                    </div>
                                                            <div class="sDt_field sDt_pwd">
                        <div class="sDt_ptxt sDt_st">
                            <input id="pwd" type="password" value="" placeholder="密码" name="password"   class="sDt_c-f-text" />
                            <!--<div class="tips">为了您的帐号安全，建议密码最少设置为6个字符以上</div>-->
                        </div>
                         <div class="sDt_tips"></div>
                    </div>
					
					<div class="sDt_field sDt_pwd">
                        <div class="sDt_ptxt sDt_st">
                            <input id="pwd2" type="password" value="" placeholder="确认密码" name="password2"  class="sDt_c-f-text" />
                        </div>
						<div style="clear:both"></div>
                         <div class="sDt_tips"></div>
                    </div>
                    <div class="sDt_field sDt_pwd sDt_mobile">
                        <div class="sDt_ptxt sDt_st">
                         <input id="signup2-mobile" type="text" value="" placeholder="手机号码" name="diyinfo[mobile]"  class="sDt_c-f-text" />
                         <input type="hidden" class="SdT_f-input" id="signup3-mobile" value="mobile,手机号码,1" name="diykey[mobile]" size="30" >
                        </div>
                        <div style="clear:both"></div>
                         <div class="sDt_tips"></div>
          </div>
                    		                      <div class="sDt_field sDt_identifyCode sDt_bom">
                        <div class="sDt_c-form-search">
                            <div class="sDt_codeTxt">
                                <input id="validateCode" type="telephone" value="" placeholder="输入验证码" name="vcaptcha"  class="sDt_c-f-text" />
                                 <!--<div class="tips">请输入下面验证码上的字母或数字</div>-->
                            </div>
                            <div class="sDt_codePhoto">
                              <a><img style="cursor:pointer;" id='tuukdkdkd'  onclick="Xmisc_captcha(this.id);" title="看不清楚，点击更换" src="../captcha.php" >
							  </a>
							  
                            </div>
							<div style="clear:both"></div>
                        </div>
						<div class="sDt_tips"></div>
                        <!--增加协议勾选选项-->
                                            	<div class="btn_then">then</div>
						
                    </div>

					<div class="btn_cont">
	                    <div class="sDt_field sDt_submit-btn">
	                      <input type="button" class="sDt_c-btn-orange" onclick="register();" value="注 册"/>
	                    </div>
                    </div>
					</form>
                </fieldset>
           
</section>
<div style="clear:both"></div>

<script type="text/javascript">

	var WEB_ROOT = '..';
	
	Xmisc_captcha = function(id){
		
		$('#tuukdkdkd').attr('src', WEB_ROOT+'/captcha.php?v='+Math.random());
	
	};
	
	
	
</script>

<script src="../static/js/mobilehao.js@v=1526386182"></script>  
<script language="javascript" type="text/javascript">
var cloneAid = 0;
var templateId = -1;
var jump = 0;
var cookieDomain = 'faisco.cn';
var unionAid = 0;
var trackApp = 0;
var trackParam = '-';
var arr = [ "ChinaMobile", "ChinaUnicom", "ChinaTelecom", "VirtualNetworkOperator"]; 

$(function(){
	/* cacct blur validate */
	$('#cacct').focus(function(){
		$(this).parent().parent().find(".sDt_tips").hide();
		$(this).css('border-color','#DDD');
	})
	.blur(function(){
		cacctValidate(true);
	});
	/* email blur validate */
	$('#email').focus(function(){
		$(this).parent().parent().find(".sDt_tips").hide();
		$(this).css('border-color','#DDD');
	})
	.blur(function(){
		emailValidate(true);
	});
	/* pwd blur validate */
	$('#pwd').focus(function(){
		$(this).parent().parent().find(".sDt_tips").hide();
		$(this).css('border-color','#DDD');
	})
	.blur(function(){
		pwdValidate();
	});

	/* pwd2 blur validate */
	$('#pwd2').focus(function(){
		$(this).parent().parent().find(".sDt_tips").hide();
		$(this).css('border-color','#DDD');
	})
	.blur(function(){
		pwd2Validate();
	});
    	//mobile blur validate 
	$('#mobile').focus(function(){
		//$(this).parent().parent().find(".sDt_tips").hide();
		//$(this).css('border-color','#DDD');
	})
	.blur(function(){
		//mobileValidate();
	});
		/* validateCode blur validate */
	$('#validateCode').focus(function(){
		$(this).parent().parent().parent().find(".sDt_tips").hide();
		$(this).css('border-color','#DDD');
	})
	.blur(function(){
		validateCodeValidate(true);
	});
	/* usercardin blur validate */
		    $('#signup2-mobile').focus(function(){
        $(this).parent().parent().find(".sDt_tips").hide();
        $(this).css('border-color','#DDD');
    })
    .blur(function(){
        commonValidate("mobile","手机号码");
    });
            
});

function cacctValidate(isCheck){
	var cacct = $('#cacct');
	var checkThrough = true;
	if(cacct.val()==""){
		
		showErr(cacct, "用户名长度受限");
		checkThrough = false;
		return checkThrough;
	}
	if(isCheck){
	//alert($('#cacct').val());
	jQuery.post(WEB_ROOT +'/ajax/validsignup.php?n=signupname',
		{v:jQuery('#cacct').val()},
			function(msg){
				//alert(msg);
			 if(msg == 'YES'){
			  showErr(cacct, '抱歉，' + cacct.val() + '已被注册');
			  checkThrough = false;
			  return checkThrough;
			 }
			}
	  );
  }
   return checkThrough;	
}


function emailValidate(isCheck){
	var checkThrough = true;
	var reg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
	$('#email').val($.trim($('#email').val()));
	if($('#email').val() == ""){
		showErr($('#email'), '请输入电子邮箱');
		checkThrough = false;
		return checkThrough;
	}
	
	if((!reg.test($('#email').val()))){
		showErr($('#email'), 'Email格式不正确');
		checkThrough = false;
		return checkThrough;
	}else if(isCheck){
		jQuery.post(WEB_ROOT +'/ajax/validsignup.php?n=signupemail',
			{v:jQuery('#email').val()},
			function(msg){
				//alert(msg);
			 	if(msg == 'YES'){
			  		showErr($('#email'), '抱歉，' + $('#email').val() + '邮箱已被注册');
			  		checkThrough = false;
			  		return checkThrough;
			 	}
			}
	 	 );
	}
	return checkThrough;
}
/*
function mobileValidate(){
	var checkThrough = true;
	if($('#mobile').val() == ""){
		showErr($('#mobile'), '请输入手机号码');
		checkThrough = false;
		return checkThrough;
		
	}else if(!$("#mobile").val().match(/^\d*$/)){
		showErr($('#mobile'), '请输入正确的手机号码');
		checkThrough = false;
		return checkThrough;
	}else if(checkThrough == true){
		return checkThrough;
	}
}
*/
function pwdValidate(){
	var checkThrough = true;
	if($('#pwd').val() == ""){
		showErr($('#pwd'), '请输入密码');
		checkThrough = false;
		return checkThrough;
	}
	if ($('#pwd').val().length < 4 || $('#pwd').val().length > 20) {
		showErr($('#pwd'), '密码由4-20个字符组成，区分大小写');
		checkThrough = false;
		return checkThrough;
	}
	if(checkThrough == true){
		return checkThrough;
	}
	
}

function pwd2Validate(){
	var checkThrough = true;
	if($('#pwd2').val() == ""){
		showErr($('#pwd2'), '请输入确认密码');
		checkThrough = false;
		return checkThrough;
	}
	if($('#pwd2').val()!=$('#pwd').val()){
		showErr($('#pwd2'), '两次输入密码不一致');
		checkThrough = false;
		return checkThrough;
	}
	if(checkThrough == true){
		return checkThrough;
	}
	
}
/******************/
function commonValidate(key,name){
    var checkThrough = true;
    if($('#signup2-'+key+'').val() == ""){
        showErr($('#signup2-'+key+''), '请输入'+name+'');
        checkThrough = false;
        return checkThrough;
    }
    if(checkThrough == true){
        return checkThrough;
    }
}
/******************/
function validateCodeValidate(isCheck) {
	var checkThrough = true;
	if ($('#validateCode').val() == "") {
		$('#validateCode').parent().parent().parent().find(".sDt_tips").show();
		$('#validateCode').parent().parent().parent().find(".sDt_tips").html('请输入验证码。');
		$('#validateCode').css('border-color','#FF0000');
		checkThrough = false;
		return checkThrough;
	}else if(isCheck){
		$.post(WEB_ROOT+"/account/valifycode.php",
			{validCode:$('#validateCode').val()},
			function(data){
				if(data == 'yes'){
					$('#validateCode').parent().parent().parent().find(".sDt_tips").show();
					$('#validateCode').parent().parent().parent().find(".sDt_tips").html('验证码有误，请重新输入验证码。');
					$('#validateCode').css('border-color','#FF0000');
					checkThrough = false;
					return checkThrough;
				}
			}
		);
	
	}
	
	return checkThrough;
}

function register(){
	var valid = true;
	var valid1 = true;
	var valid2 = true;
	var valid3 = true;
	var valid4 = true;
	var valid5 = true;
	var validcom = true;
	var validcom_num = 0;   
	var terms_switch = "";
	var terms_name = "";
	//没有勾选同意会员注册条款，就阻止提交表单
	if((terms_switch == "Y") && (!$('#user_terms').is(':checked'))) {
		if(terms_name != ""){
			alert('请阅读并同意《'+terms_name+'》!');
		}else{
			alert('请阅读并同意《会员注册条款》!');
		}
		return false;
	}
		if(!cacctValidate(false)){ valid = false; }//Cacct Check
			if(!emailValidate(false)){ valid1 = false; }//Cname Check
		if(!pwdValidate()){ valid3 = false; }//Pwd2 Check
	if(!pwd2Validate()){ valid4 = false;}
	if(!validateCodeValidate(false)){ valid5 = false;}
	/* usercardin blur validate */
            if(!commonValidate("mobile","手机号码")){ validcom_num = validcom_num + 1;}
        	validcom = (validcom_num==0)?true:false;
	if(valid && valid1 && valid2 && valid3 && valid4 && valid5 && validcom){
		
		document.getElementById('user_form').submit();
	}
}

function showErr(obj, str){
		
	if (str) {
		//alert('sdf');
		obj.parent().parent().find(".sDt_tips").show();
		obj.parent().parent().find(".sDt_tips").html(str);
		obj.css('border-color','#FF0000');
		
	} else {
		obj.parent().parent().find(".sDt_tips").hide();
		obj.parent().parent().find(".sDt_tips").text(str);
	}
	
}

//用于表单提交之前的表单相关的验证
// function check(){  
// 	var terms_switch = "";
// 	if((terms_switch == "Y") && !$('#user_terms').attr('checked')) {
// 		alert('请同意《会员注册条款》!');
// 		return false;
// 	}
// }

$("#getsmscode").click(function(){
           var username = $("input[name='username']").val();
           var mobile = $("input[name='diyinfo[mobile]']").val();
           if(username==""){
               alert("用户名不能为空！");
               return false;
           }
           if(typeof(mobile)=="undefined"){
              alert("请联系商家开启手机号码"); 
           }else if(mobile==""){
              alert("请输入手机号码");
           }else if ($.inArray($.mobiletype(mobile, "zh"), arr)==-1) {
              alert("手机号码格式不正确！");
           } else{
              $.post("signup.php@action=sendsms",
              { 
              mobile: mobile,
              username: username
              }
             , function(data){
              if(data['result']==1)
              {
                 alert(data['msg']);
              }
              else
              {
                 alert(data['msg']);
              }
              var SysSecond =  90; //这里获取倒计时的起始时间 
              InterValObj = window.setInterval(SetRemainTime, 1000); //间隔函数，1秒执行 
               
              //将时间减去1秒，计算天、时、分、秒 
              function SetRemainTime() { 
                    if (SysSecond > 0) { 
                         $("#getsmscode").hide();
                         $("#showdown").show();
                         SysSecond = SysSecond - 1; 
                         var second = Math.floor(SysSecond);             // 计算秒     
                         $("#showdown").html( second + "秒后重新获取" ); 
                    } else {//剩余时间小于或等于0的时候，就停止间隔函数 
                         $("#getsmscode").show();
                         $("#showdown").hide();
                         window.clearInterval(InterValObj); 
                        //这里可以添加倒计时时间为0后需要执行的事件 
                     } 
                } 
              },'json');
           }
           //手机号码为空
           //短信验证码发送成功
           //短信验证码发送失败
        });
</script>
<!-- 底部start -->
<footer class="m-ft g-ft-edit">
	<div class='m-ft-login'>
						<span id='set_userbox'>
				<span class='m-ft-log-link'><a href='shop_login.php'>登录</a> &nbsp;&nbsp; <a href='shop_signup.php'>注册</a></span>
				</span>
								<span id='set_gotop' class='m-gotop' ><a href='#header'>返回顶部</a></span>
				<div style='clear:both;'> </div>
	</div>
	
	<!-- 脚部自定义模块 -->
		<div class="m-ft-foothtmlWrap" id="set_foothtml" >
		<div class="m-ft-foothtml" {"width":"1000px","height":"54px"}>
		<div class='m-foothtml-ct'><style>
.m-ft a {
    color: #fff;margin-bottom:5px;}
.m-ft-login {border-bottom: 0px solid #8d0101;
background:#ffcc00;}
</style></div>
		</div>
	</div>
		<!-- 脚部自定义模块 end -->
	<!-- 底部菜单start -->
		<!-- 底部菜单end -->
		<p  id="set_address" >
	<span>北京市海淀区中关村东路105号A塔2201室&nbsp;&nbsp;&nbsp;</span>
	</p>
		
	<p>
				<span id="set_copyright" >copyright ©2012</span>
								<span id="set_telphone" >010-22228888</span>
			</p>
	
	</footer>
<!-- 底部end -->
<!-- 底部插件注入区 -->

 <link rel="stylesheet" href="../static/css/sidenav/m/theme2/yellow.css"> 
 	<style>
.plug-div .icon_wswd{-webkit-background-size:20px auto;-o-background-size:20px auto;height:24px;margin:2px auto 0;display:block;width:100%; text-align:center;}
.plug-div,.plug-phone_dfse{height:50px;}
.plug-div .plug-phone_dfse{  position:fixed; z-index:900; bottom:0; left:0; right:0; margin:auto; display:block; width:100%; overflow:hidden; display:-webkit-box; display:box; -webkit-box-orient:horizontal; }
.plug-div .plug-phone_dfse div{ width:auto!important; height:100%; position:static!important; margin:0; border-radius:0!important; -webkit-box-sizing:border-box; box-sizing:border-box; -webkit-box-flex:1; box-flex:1; -webkit-box-sizing:border-box; overflow:hidden; box-shadow:none!important; background:none;}
.plug-div .plug-phone_dfse div a{display:block;width:100%;height:100%;text-decoration:none;}
.plug-div .plug-phone_dfse div .title,.plug-phone_dfse .title{line-height:22px;font-size:16px; font-weight:bold; text-align:center;width:100%;margin:0 auto; text-overflow:ellipsis;white-space:nowrap;overflow:hidden;}
.icon_wswd { speak: none; font-weight: normal; font-variant: normal; text-transform: none; -webkit-font-smoothing: antialiased;color: #fff; margin: 0 auto; font-size: 20px; display: inline-block; width: 30px; height: 100%; text-align: center; float: left; -webkit-background-size: 20px auto; -o-background-size: 20px auto; background-position: center; background-repeat: no-repeat; margin-right: 5px;}
.icon_wswd img{ margin:0 auto; width:20px;}
	</style>

	<script type="text/javascript" src="../../api.map.baidu.com/api@v=2.0&ak=2Ob1Cq4Ox2VLz1Dz1SHoHyjhECGsNWPr"></script>
<script type="text/javascript">
var addr = '北京市海淀区中关村东路105号A塔2201室';//获取地址信息
var title = '某某心理咨询中心';//获取公司名称
var latitude= '';
var longitude= '';

var myGeo = new BMap.Geocoder();
myGeo.getPoint(addr, function(point){
    if (point) {
        // alert("../../api.map.baidu.com/marker@location="+point.lat+","+point.lng+"&title="+decodeURIComponent(title)+"&content="+decodeURIComponent(addr)+"&output=html");
        $('#GoMap').attr('href',"../../api.map.baidu.com/marker@location="+point.lat+","+point.lng+"&title="+decodeURIComponent(title)+"&content="+decodeURIComponent(addr)+"&output=html");
    } else {
        $('#GoMap').attr('href',"../../api.map.baidu.com/marker@location=113.30765, 23.120049"+"&title="+decodeURIComponent(title)+"&content="+decodeURIComponent(addr)+"&output=html");
    }
});

</script>
	
	<div class="plug-div">
		<div class="plug-phone_dfse">
						<div>
			          	<a href="tel_3A010-22228888" data-ajax="false" >
				<i class="icon_wswd"><img src="../static/img/bm_s1.png" width="20" height="20" /></i>
				<p class="title">电话</p>
          	</a>
			          </div>
		  		  				<div>
						<a href="default.htm" id='GoMap' data-ajax="false" >
				<i class="icon_wswd"><img src="../static/img/bm_s3.png" width="20" height="20" /></i>
				<p class="title">地图</p>
          	</a>
			          </div>
		  		  				<div>
																			<a href="../message.html" data-ajax="false" >
					<i class="icon_wswd"><img src="../static/img/bm_s2.png" width="20" height="20" /></i>
					<p class="title">留言</p>
				</a>
							          </div>
		  		  				<div>
														  <div>
								<a href="shop_login.php" data-ajax="false">
									<i class="icon_wswd"><img src="../static/img/bm_s5.png" width="20" height="20" /></i>
					<p class="title">推广</p>
				</a>
			  </div>
												<a href="../../account/fenxiao.php@type=fx_apply" data-ajax="false" >
					<i class="icon_wswd"><img src="../static/img/bm_s5.png" width="20" height="20" /></i>
					<p class="title">我要分销</p>
				</a>
							          </div>
		  		  				<div>
																			<a href="mobile_center.php" data-ajax="false" >
					<i class="icon_wswd"><img src="../static/img/bm_user.png" width="20" height="20" /></i>
					<p class="title">用户中心</p>
				</a>
							          </div>
		  		  	</div>
	</div>
<!-- ios fixed兼容 -->
<style>
.plug-div .pos-rel { position: relative;}
</style>
<script>
    $(function() {
        var isIOS = (/iphone|ipad/gi).test(navigator.appVersion);

        if (isIOS) {
            $('.g-document').on('focus','input', function () {
                $('.plug-div .plug-phone_dfse').addClass('pos-rel');
            }).on('focusout', 'input', function () {
                $('.plug-div .plug-phone_dfse').removeClass('pos-rel');
             });
              $('.g-document').on('focus','textarea', function () {
                $('.plug-div .plug-phone_dfse').addClass('pos-rel');
            }).on('focusout', 'textarea', function () {
                $('.plug-div .plug-phone_dfse').removeClass('pos-rel');
             });
        }
    });
</script>
<!-- ios fixed兼容 end-->	
<script>
$("#fx_apply").click(function(){
	$.ajax({
		url: 'fenxiao.php@type=register',
		success:function(data){
		layer.open({
			type: 1
			,content: data
			,anim: 'up'
			,style: 'position:fixed; bottom:0; left:0; width: 100%; height: 400px; padding:10px 0; border:none;'
		});
		ExecuteJs(data);
		}
	});
});

function ExecuteJs(data){
	var regDetectJs = /<script(.|\n)*?>(.|\n|\r\n)*?<\/script>/ig;
	var jsContained = data.match(regDetectJs);

	if(jsContained) {
		// 分段取出js正则
		var regGetJS = /<script(.|\n)*?>((.|\n|\r\n)*)?<\/script>/im;

		// 按顺序分段执行js
		var jsNums = jsContained.length;
		for (var i=0; i<jsNums; i++) {
			var jsSection = jsContained[i].match(regGetJS);

			if(jsSection[2]) {
				if(window.execScript) {
					// IE
					window.execScript(jsSection[2]);
				} else {
					// 其他浏览器
					window.eval(jsSection[2]);
				}
			}
		}
	}
}
</script>
<style>
	body{
		background: url("../../cdn043.yun-img.com/static/upload/a00700t/focus/20180208143349_69564.png") repeat scroll left top rgba(0, 0, 0, 0);
		background-size:contain;
	}
</style>

<style type='text/css'>
.m-demo-sitetips {line-height: 30px;font-size: 14px;color: #000;text-align: center;position: fixed;left: 0;top: 0;z-index: 10000;width: 100%;min-height: 30px;_height: 30px;max-height:60px;border-bottom: 0;border-bottom: 1px solid #d8d8d8 \9;margin: 0;padding: 0;background: #fff;-webkit-box-shadow: 0 2px 5px rgba(0,0,0,0.2);-moz-box-shadow: 0 2px 5px rgba(0,0,0,0.2);box-shadow: 0 2px 5px rgba(0,0,0,0.2);}
.m-demo-sitetips .m-demo-keepcenter {max-width: 100%;min-width: 320px;min-height: 30px;_height: 30px;max-height:60px;line-height: 30px;margin: 0 auto;position: relative;}
.m-demo-sitetips .m-demo-tiptext {/*float: left;*/}
.m-demo-sitetips .m-demo-tiptext span {color: #666;_float:left;}
.m-demo-red{color:red;}
</style>
<div class='m-demo-sitetips'><div class='m-demo-keepcenter'><div class='m-demo-tiptext'><span>本网站为<b class='m-demo-red'>【演示站点】</b>的模板，只用于展示网站模板的效果，所有内容均属虚构，如有雷同，纯属巧合。</span></div></div></div>
<script type='text/javascript'>
$(document).ready(function(){
	$("<div style='min-height: 30px;_height:30px;max-height:60px;' class='m-demo-replace'></div>").prependTo("body");
	$('.m-demo-replace').height($('.m-demo-tiptext').height());
});
</script>
<script>
  window.scrollReveal = new scrollReveal();
</script>
</div>
</body>
</html>