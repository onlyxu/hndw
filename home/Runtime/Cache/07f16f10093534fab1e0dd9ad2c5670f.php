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
	<link rel="stylesheet" href="__PUBLIC__/kindeditor-4.1.10/themes/default/default.css" />
	<link rel="stylesheet" href="__PUBLIC__/kindeditor-4.1.10/plugins/code/prettify.css" />
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
 <form action="__ROOT__/index.php/product_add" method="post" class="am-form" id="am-from">
<div class="admin-content">
  <div class="am-cf am-padding">
    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">首页</strong> / <small>产品信息</small></div>
  </div>

  <div class="am-tabs am-margin" data-am-tabs>
    <ul class="am-tabs-nav am-nav am-nav-tabs">
      <li class="am-active"><a href="#tab1">基本信息</a></li>
      <li><a href="#tab2">详细描述(中文)</a></li>
      <li><a href="#tab3">详细描述(英文)</a></li>
    </ul>

    <div class="am-tabs-bd">
    <!-- 基本信息TAB -->
      <div class="am-tab-panel am-fade am-in am-active" id="tab1">
        <div class="am-g am-margin-top">
          <div class="am-u-sm-2 am-text-right">所属类别</div>
          <div class="am-u-sm-10">
            <select name="typeid">
            <?php if(is_array($cateList)): $i = 0; $__LIST__ = $cateList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i; if($pro['typeid'] == $cate['id']): ?><option selected="selected" value="<?php echo ($cate["id"]); ?>"><?php echo ($cate["title"]); ?></option>
            	<?php else: ?>
            	<option  value="<?php echo ($cate["id"]); ?>"><?php echo ($cate["title"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </select>
          </div>
        </div>
        <div class="am-g am-margin-top">
          <div class="am-u-sm-2 am-text-right">显示状态</div>
          <div class="am-u-sm-10">
            <div class="am-btn-group">
            <?php if($pro["showing"] == 1): ?><label class="am-btn am-btn-default am-btn-xs" for="option1">
	                <input type="radio" checked="checked" value="1" name="showing" id="option1" /> 正常
	              </label>
	              <label class="am-btn am-btn-default am-btn-xs" for="option2">
	                <input type="radio" name="showing" value="2" id="option2" />不显示
	              </label>
            <?php else: ?>
	             <label class="am-btn am-btn-default am-btn-xs" for="option1">
	                <input type="radio"  value="1" name="showing" id="option1" /> 正常
	              </label>
	              <label class="am-btn am-btn-default am-btn-xs" for="option2">
	                <input type="radio" checked="checked" name="showing" value="2" id="option2" />不显示
	              </label><?php endif; ?>

            </div>
          </div>
        </div>

        <div class="am-g am-margin-top">
          <div class="am-u-sm-2 am-text-right">推荐类型</div>
          <div class="am-u-sm-10">
            <div class="am-btn-group">
             <?php if($pro["tj"] == 1): ?><label class="am-btn am-btn-default am-btn-xs" for="tj">
                <input type="checkbox" checked="checked" name="tj" id="tj" value="1" /> 推荐
               </label>
             	<?php else: ?>
             	<label class="am-btn am-btn-default am-btn-xs" for="tj">
                <input type="checkbox"  name="tj" id="tj" value="1" /> 推荐
               </label><?php endif; ?>
 			<?php if($pro["lb"] == 1): ?><label class="am-btn am-btn-default am-btn-xs" for="lb">
	                <input type="checkbox" checked="checked" name="lb" id="lb" value="1" /> 轮播图
	              </label>
              <?php else: ?>
	              <label class="am-btn am-btn-default am-btn-xs" for="lb">
	                <input type="checkbox" name="lb" id="lb" value="1" /> 轮播图
	              </label><?php endif; ?>
            </div>
          </div>
        </div>

        <div class="am-g am-margin-top">
          <div class="am-u-sm-2 am-text-right">发布时间</div>
          <div class="am-u-sm-10">
              <div class="am-form-group am-form-icon">
                <i class="am-icon-calendar"></i>
                <input type="text" name="dtime" class="am-form-field am-input-sm" value="<?php echo ($dtime); ?>" placeholder="时间" />
              </div>
          </div>
        </div>
        <div class="am-g am-margin-top">
          <div class="am-u-sm-2 am-text-right">排序</div>
          <div class="am-u-sm-10">
               <input type="text" name="orders" class="am-form-field am-input-sm" value="<?php echo ($orders); ?>" placeholder="排序" />
          </div>
        </div>
        <div class="am-g am-margin-top">
          <div class="am-u-sm-2 am-text-right">浏览次数</div>
          <div class="am-u-sm-10">
               <input type="text" name="pv" class="am-form-field am-input-sm" value="<?php echo ($pro["pv"]); ?>" placeholder="浏览次数" />
          </div>
        </div>
 		<div class="am-g am-margin-top">
          <div class="am-u-sm-2 am-text-right">展示图片 </div>
          <div class="am-u-sm-10">
				<input type="button"  id="uploadButton" value="选择文件" />
				<span class="" id="img_td" style="display: none"><img id="uploadimgs" src="" width="100" height="100"/></span>
          </div>
        </div>
      </div>
	<!-- 中文详细信息TAB -->
      <div class="am-tab-panel am-fade" id="tab2">
          <div class="am-g am-margin-top">
            <div class="am-u-sm-2 am-text-right">产品名称</div>
            <div class="am-u-sm-8">
              <input type="text" class="am-input-sm" name="title" value="<?php echo ($pro["title"]); ?>"  />
            </div>
            <div class="am-u-sm-2">*必填</div>
          </div>

         <div class="am-g am-margin-top">
            <div class="am-u-sm-2 am-text-right">关键字</div>
            <div class="am-u-sm-8">
              <input type="text" class="am-input-sm" name="keyword" value="<?php echo ($pro["keyword"]); ?>"  />
            </div>
            <div class="am-u-sm-2">*必填，不可重复</div>
         </div>
         <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-2 am-text-right">内容描述</div>
            <div class="am-u-sm-10">
              <textarea rows="10" name="content" id="content"><?php echo ($pro["content"]); ?></textarea>
            </div>
          </div>
      </div>
	<!-- 英文详细信息TAB -->
      <div class="am-tab-panel am-fade" id="tab3">
         <div class="am-g am-margin-top">
            <div class="am-u-sm-2 am-text-right">&nbsp;</div>
            <div class="am-u-sm-2">
              <button type="button" onclick="transLan()" class="am-btn am-btn-primary am-btn-xs">一键翻译</button>
            </div>
            <div class="am-u-sm-6">一键翻译会对内容中的图片等元素产生影响，删掉翻译后的影响元素即可</div>
          </div>
          <div class="am-g am-margin-top">
            <div class="am-u-sm-2 am-text-right">产品名称</div>
            <div class="am-u-sm-8">
              <input type="text" class="am-input-sm" id="title_en" name="title_en" value="<?php echo ($pro["title_en"]); ?>" />
            </div>
             <div class="am-u-sm-2">*必填，</div>
          </div>
         <div class="am-g am-margin-top">
            <div class="am-u-sm-2 am-text-right">关键字</div>
            <div class="am-u-sm-8">
              <input type="text" class="am-input-sm" name="keyword_en" id="keyword_en" value="<?php echo ($pro["keyword_en"]); ?>" />
            </div>
             <div class="am-u-sm-2">*必填，不可重复</div>
         </div>

          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-2 am-text-right">内容描述</div>
            <div class="am-u-sm-10">
              <textarea rows="10" name="content_en" id="content_en"><?php echo ($pro["content_en"]); ?></textarea>
            </div>
          </div>
      </div>

    </div>
  </div>
	<input type="hidden" name="id" id="id" value="<?php echo ($pro["id"]); ?>" />
	<input type="hidden" id="uploads" name="uploads" value="<?php echo ($pro["img"]); ?>" />
  <div class="am-margin">
    <button type="submit" class="am-btn am-btn-primary am-btn-xs">提交保存</button>
    <button type="button" class="am-btn am-btn-primary am-btn-xs">放弃保存</button>
  </div>
</div>
</form>
<!-- content end -->

</div>

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
<script charset="utf-8" src="__PUBLIC__/kindeditor-4.1.10/kindeditor-min.js"></script>
<script charset="utf-8" src="__PUBLIC__/kindeditor-4.1.10/lang/zh_CN.js"></script>
<script charset="utf-8" src="__PUBLIC__/kindeditor-4.1.10/plugins/code/prettify.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/product/addProduct.js"></script>
</body>
</html>