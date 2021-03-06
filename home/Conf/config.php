<?php
return array(
	//'配置项'=>'配置值'

		// 定义数据库连接信息
		'DB_TYPE'=> 'mysql', // 指定数据库是 mysql
		'DB_HOST'=> 'localhost',
		'DB_NAME'=>'hndw', // 数据库名
		'DB_USER'=>'hndw',
		'DB_PWD'=>'hndw', //您的数据库连接密码
		'DB_PORT'=>'3306',

		'DB_PREFIX'=>'tp_',//数据表前缀（与数据库myapp 中的表t_users 对应）
		'DISPATCH_ON'=> true, // 该参数设置是否启用 Dispatcher 功能。
		'URL_MODEL' => 2,
		'LOG_RECORD' => true, // 开启日志记录
		'LOG_LEVEL'  =>'EMERG,ALERT,CRIT,ERR,WARN,INFO,DEBUG', // 只记录EMERG ALERT CRIT ERR 错误

		'SESSION_AUTO_START' => true, //是否开启session
		'URL_ROUTER_ON'   => true, //开启路由
		'URL_ROUTE_RULES' => array( //定义路由规则
			'lan_auto'=>'Trans/getLanAuto',//自动翻译
			 'index'=>'Index/index',//系统首页
			  'admin'=>'Admin/index',//后台首页,
			  'verify'=>'Admin/genCode',//图片验证码
			  'login'=>'Admin/AdminLogin',//登陆验证
			  'admin_product_type/:keyword'=>'Product/getTypeList',//后台产品分类
			  'admin_product/:keyword'=>'Product/getList',//后台产品
			  'pre_product_add/:keyword'=>'Product/preAddProduct',//前往添加产品页面
			  'product_add'=>'Product/addProduct',//添加产品
			  'admin_news_type/:keyword'=>'News/getTypeList',//后台新闻分类
			  'admin_news/:keyword'=>'News/getList',//后台新闻
			  'pre_news_add/:keyword'=>'News/preAddNews',//前往添加新闻页面
			  'news_add'=>'News/addNews',//添加新闻
			  'case_list/:keyword'=>'Content/getCaseList',//成功案例列表
			  'partner_list/:keyword'=>'Content/getPartnerList'//合作伙伴列表
			)
);
?>