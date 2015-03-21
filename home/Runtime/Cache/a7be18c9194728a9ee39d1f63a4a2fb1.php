<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
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
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/kkpager.css" />
</head>
<body>
<!--网页顶部 start-->
	<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，后台管理系统暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->
<header class="am-topbar admin-header">
  <div class="am-topbar-brand">
    <strong>河南帝伟</strong> <small>后台管理系统</small>
  </div>
  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

    <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
      <li class="am-dropdown" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          <span class="am-icon-users"><?php echo ($user["name"]); ?></span><span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <li><a href="#"><span class="am-icon-user"></span>个人资料</a></li>
          <li><a href="#"><span class="am-icon-cog"></span>修改密码</a></li>
        </ul>
      </li>
      <li><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
       <li><a href="#"><span class="am-icon-sign-out">注销登录</span></a></li>
    </ul>
  </div>
</header>
<!--网页顶部end-->

<div class="am-cf admin-main">
 <!-- 左侧菜单start -->
 	<!-- sidebar start -->
  <div class="admin-sidebar">
    <ul class="am-list admin-sidebar-list">
     	<li><a href="__ROOT__"><span class="am-icon-home"></span>前台首页</a></li>
      <li><a href="__ROOT__/index.php/admin"><span class="am-icon-home"></span>后台首页</a></li>
      <li class="admin-parent">
        <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}"><span class="am-icon-file"></span>产品管理<span class="am-icon-angle-right am-fr am-margin-right"></span></a>
        <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
         	<li><a href="__ROOT__/index.php/admin_product_type"><span class="am-icon-calendar"></span>产品分类</a></li>
            <li><a href="__ROOT__/index.php/admin_product"><span class="am-icon-th"></span>产品列表<span class="am-badge am-badge-secondary am-margin-right am-fr">24</span></a></li>
        </ul>
      </li>
      <li class="admin-parent">
        <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}"><span class="am-icon-file"></span>新闻管理<span class="am-icon-angle-right am-fr am-margin-right"></span></a>
        <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
         	<li><a href="admin-log.html"><span class="am-icon-calendar"></span>新闻分类</a></li>
            <li><a href="admin-gallery.html"><span class="am-icon-th"></span>新闻列表<span class="am-badge am-badge-secondary am-margin-right am-fr">24</span></a></li>
        </ul>
      </li>
      <li class="admin-parent">
        <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}"><span class="am-icon-file"></span>内容管理<span class="am-icon-angle-right am-fr am-margin-right"></span></a>
        <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
         	<li><a href="admin-log.html"><span class="am-icon-calendar"></span>成功案例管理</a></li>
            <li><a href="admin-gallery.html"><span class="am-icon-th"></span>关于我们</a></li>
            <li><a href="admin-log.html"><span class="am-icon-calendar"></span>合作伙伴</a></li>
            <li><a href="admin-gallery.html"><span class="am-icon-th"></span>在线留言<span class="am-badge am-badge-secondary am-margin-right am-fr">24</span></a></li>
        </ul>
      </li>
      <li class="admin-parent">
        <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}"><span class="am-icon-file"></span>系统管理<span class="am-icon-angle-right am-fr am-margin-right"></span></a>
        <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
        	<li><a href="admin-log.html"><span class="am-icon-calendar"></span>个人资料</a></li>
        	<li><a href="admin-log.html"><span class="am-icon-calendar"></span>系统用户</a></li>
         	<li><a href="admin-log.html"><span class="am-icon-calendar"></span>在线用户<span class="am-badge am-badge-secondary am-margin-right am-fr">24</span></a></li>
            <li><a href="admin-gallery.html"><span class="am-icon-th"></span>登陆日志</a></li>
            <li><a href="admin-log.html"><span class="am-icon-calendar"></span>操作日志</a></li>
            <li><a href="admin-gallery.html"><span class="am-icon-th"></span>访问日志</a></li>
        </ul>
      </li>
    </ul>

 </div>
 <!-- sidebar end -->
  <!-- 左侧菜单 end -->
  <!-- content start -->
  <div class="admin-content">

    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">首页</strong> / <small>产品列表</small></div>
    </div>

    <ul class="am-avg-sm-2 am-avg-md-4 am-avg-lg-6 am-margin gallery-list">
     <?php if(is_array($items)): $i = 0; $__LIST__ = $items;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
        <a href="#">
          <img class="am-img-thumbnail am-img-bdrs" src="http://cn.bing.com/az/hprichv/LondonTrainStation_GettyRR_139321755_ZH-CN742316019.jpg" alt=""/>
          <div class="gallery-title">远方 有一个地方 那里种有我们的梦想</div>
          <div class="gallery-desc">2375-09-26</div>
        </a>
      </li><?php endforeach; endif; else: echo "" ;endif; ?>

    </ul>

    <div class="am-margin am-cf" id="kkpager">

    </div>

  </div>
  <!-- content end -->

</div>
<input type="hidden" id="pagecount" value="<?php echo ($pagecount); ?>" />
<input type="hidden" id="itemscount" value="<?php echo ($itemscount); ?>" />
<input type="hidden" id="pageno" value="<?php echo ($pageno); ?>" />
<input type="hidden" id="size" value="10" />
<footer>
  <hr>
  <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license. <a href="__ROOT__" target="_blank">河南帝伟</a></p>
</footer>
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
<script type="text/javascript" src="__PUBLIC__/js/kkpager.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/product/productList.js"></script>
</body>
</html>