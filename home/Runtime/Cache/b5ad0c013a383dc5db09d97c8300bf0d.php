<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>河南帝伟-后台管理系统</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<meta name="renderer" content="webkit" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="icon" type="image/png" href="__PUBLIC__/assets/i/favicon.png">
<link rel="apple-touch-icon-precomposed" href="__PUBLIC__/assets/i/app-icon72x72@2x.png">
<meta name="apple-mobile-web-app-title" content="" />
<link rel="stylesheet" href="__PUBLIC__/assets/css/amazeui.min.css" />
<link rel="stylesheet" href="__PUBLIC__/assets/css/admin.css" />
<link rel="stylesheet" href="__PUBLIC__/css/pintuer.css" />
<link rel="stylesheet" href="__PUBLIC__/css/admin.css" />
</head>

<body>
<div class="container">
    <div class="line">
        <div class="xs6 xm4 xs3-move xm4-move">
           <!--  <br /><br />
            <div class="media media-y">
                <a href="#" target="_blank"><img src="images/logo.png" class="radius" alt="后台管理系统" /></a>
            </div> -->
            <br /><br />
            <form  method="post" id="loginForm">
            <div class="panel">
                <div class="panel-head"><strong>登录河南帝伟后台管理系统</strong></div>
                <div class="panel-body" style="padding:30px;">
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="text" class="input" name="userName" id="userName" placeholder="登录账号" />
                            <span class="icon icon-user"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="password" class="input" name="userPass" id="userPass" placeholder="登录密码"  />
                            <span class="icon icon-key"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field">
                            <input type="text" class="input" name="verify" id="verify" placeholder="填写右侧的验证码"  />
                            <img src="__ROOT__/index.php/verify" id="verifyImg" onclick="fleshVerify()" width="80" height="32" class="passcode" />
                        </div>
                    </div>
                </div>
                <div class="panel-foot text-center"><button type="button" onclick="login()" class="button button-block bg-main text-big">立即登录后台</button></div>
            </div>
            </form>

        </div>
    </div>
</div>
<input type="hidden" id="cpath" value="__ROOT__" />
<!--[if lt IE 9]>
<script src="__PUBLIC__/assets/js/jquery1.11.1.min.js"></script>
<script src="__PUBLIC__/assets/js/modernizr.js"></script>
<script src="__PUBLIC__/assets/js/polyfill/rem.min.js"></script>
<script src="__PUBLIC__/assets/js/polyfill/respond.min.js"></script>
<script src="__PUBLIC__/assets/js/amazeui.legacy.js"></script>
<![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<script src="__PUBLIC__/assets/js/jquery.min.js"></script>
<script src="__PUBLIC__/assets/js/amazeui.min.js"></script>
<!--<![endif]-->
<script src="__PUBLIC__/assets/js/app.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/jquery.form.js"></script>
<script type="text/javascript" src="__PUBLIC__/artDialog4/artDialog.js?skin=twitter" > </script>
<script type="text/javascript" src="__PUBLIC__/js/common.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/admin_login.js"></script>
</body>
</html>