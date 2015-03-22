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
            <li><a href="__ROOT__/index.php/admin_product"><span class="am-icon-th"></span>产品列表<span class="am-badge am-badge-secondary am-margin-right am-fr"><?php echo ($pro_count); ?></span></a></li>
        </ul>
      </li>
      <li class="admin-parent">
        <a class="am-cf" data-am-collapse="{target: '#collapse-nav-news'}"><span class="am-icon-file"></span>新闻管理<span class="am-icon-angle-right am-fr am-margin-right"></span></a>
        <ul class="am-list am-collapse admin-sidebar-sub" id="collapse-nav-news">
         	<li><a href="__ROOT__/index.php/admin_news_type"><span class="am-icon-calendar"></span>新闻分类</a></li>
            <li><a href="__ROOT__/index.php/admin_news"><span class="am-icon-th"></span>新闻列表<span class="am-badge am-badge-secondary am-margin-right am-fr"><?php echo ($news_count); ?></span></a></li>
        </ul>
      </li>
      <li class="admin-parent">
        <a class="am-cf" data-am-collapse="{target: '#collapse-nav-content'}"><span class="am-icon-file"></span>内容管理<span class="am-icon-angle-right am-fr am-margin-right"></span></a>
        <ul class="am-list am-collapse admin-sidebar-sub" id="collapse-nav-content">
         	<li><a href="admin-log.html"><span class="am-icon-calendar"></span>成功案例管理</a></li>
            <li><a href="admin-gallery.html"><span class="am-icon-th"></span>关于我们</a></li>
            <li><a href="admin-log.html"><span class="am-icon-calendar"></span>合作伙伴</a></li>
            <li><a href="admin-gallery.html"><span class="am-icon-th"></span>在线留言<span class="am-badge am-badge-secondary am-margin-right am-fr"><?php echo ($message_count); ?></span></a></li>
        </ul>
      </li>
      <li class="admin-parent">
        <a class="am-cf" data-am-collapse="{target: '#collapse-nav-sys'}"><span class="am-icon-file"></span>系统管理<span class="am-icon-angle-right am-fr am-margin-right"></span></a>
        <ul class="am-list am-collapse admin-sidebar-sub" id="collapse-nav-sys">
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
	<!--内容导航-->
    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">首页</strong> / <small>产品列表</small></div>
    </div>
    <!--内容导航end-->
	<!-- 内容操作按钮start -->
 	 <div class="am-g">
      <div class="am-u-md-6 am-cf">
        <div class="am-fl am-cf">
          <div class="am-btn-toolbar am-fl">
            <div class="am-btn-group am-btn-group-xs">
              <button type="button" onclick="window.location.href='__ROOT__/index.php/pre_product_add'" class="am-btn am-btn-default"><span class="am-icon-plus"></span>新增</button>
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span>更新排序</button>
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span>批量删除</button>
            </div>
    		<div class="am-form-group am-margin-left am-fl">
              <select>
                <option value="0">所有显示状态</option>
                <option value="1">显示</option>
                <option value="2">隐藏</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="am-u-md-3 am-cf">
        <div class="am-fr">
          <div class="am-input-group am-input-group-sm">
            <input type="text" class="am-form-field">
                <span class="am-input-group-btn">
                  <button class="am-btn am-btn-default" type="button">搜索</button>
                </span>
          </div>
        </div>
      </div>
    </div>
	<!-- 内容操作按钮end -->
	<!-- 内容start -->
	  <div class="am-g">
      <div class="am-u-sm-12">
        <form class="am-form">
          <table class="am-table am-table-striped am-table-hover table-main">
            <thead>
              <tr>
                <th class="table-check"><input type="checkbox" /></th><th class="table-title">展示图</th><th class="table-title">标题</th><th class="table-type">排序</th><th class="table-author">关键字</th><th class="table-date">创建日期</th><th class="table-type">显示状态</th><th class="table-type">轮播</th><th class="table-type">推荐</th><th class="table-set">操作</th>
              </tr>
          </thead>
          <tbody>
          <?php if(empty($items)): ?><tr><td colspan="8" align="center">还没有任何产品，请先添加！</td></tr><?php endif; ?>
         <?php if(is_array($items)): $i = 0; $__LIST__ = $items;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
              <td><input type="checkbox" value="<?php echo ($vo["id"]); ?>"/></td>
              <td><img class="am-img-thumbnail am-img-bdrs" title="<?php echo ($vo["title"]); ?>" width="100" height="60" src="<?php echo ($vo["img"]); ?>" alt="<?php echo ($vo["title"]); ?>"/></td>
              <td><a href="__ROOT__/index.php/pre_product_add/id/<?php echo ($vo["id"]); ?>"><?php echo (msubstr($vo["title"],0,20,'utf-8',true)); ?></a></td>
              <td><input name="orders" style="width: 50px;" type="text" value="<?php echo ($vo["orders"]); ?>" /></td>
              <td><?php echo ($vo["keyword"]); ?></td>
              <td><?php echo ($vo["dtime"]); ?></td>
              <?php if($vo["showing"] == 1): ?><td>显示</td><?php else: ?><td>隐藏</td><?php endif; ?>
              <?php if($vo["lb"] == 1): ?><td>是</td><?php else: ?><td>否</td><?php endif; ?>
              <?php if($vo["tj"] == 1): ?><td>是</td><?php else: ?><td>否</td><?php endif; ?>
              <td>
                <div class="am-btn-toolbar">
                  <div class="am-btn-group am-btn-group-xs">
                    <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                    <button class="am-btn am-btn-default am-btn-xs am-text-danger"><span class="am-icon-trash-o"></span> 删除</button>
                  </div>
                </div>
              </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>

          </tbody>
        </table>
         <div class="am-cf" id="kkpager">

		 </div>

        </form>
      </div>

    </div>
	<!-- 内容end-->
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