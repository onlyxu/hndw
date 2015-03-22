<?php

class CommonAction extends Action{
	function __construct() {
		parent::__construct();
		Log::$format = '[ Y-m-d H:i:s ]';
		header("Content-Type:text/html; charset=utf-8");
		$util = new UtilAction();
		$ip = get_client_ip();
		$local = $util->getCity($ip);

		$this->assign("ip",$ip);
		$this->assign("country",$local['country']);
		$this->assign("region",$local['region']);
		$this->assign("city",$local['city']);
		$this->assign("isp",$local['isp']);

		$u = session("user");
		if($u)
		{
			$user = M("Users");
			$findUser = $user->where("id=%d",$u['id'])->find();
			$con = M("Contents");
			$pro_count = $con->join("left join tp_category on tp_category.id = tp_contents.typeid")->where("tp_category.keyword='producttype'")->count();
			$news_count = $con->join("left join tp_category on tp_category.id = tp_contents.typeid")->where("tp_category.keyword='news'")->count();
			$message_count = $con->join("left join tp_category on tp_category.id = tp_contents.typeid")->where("tp_category.keyword='message'")->count();
			$this->assign("pro_count",$pro_count);
			$this->assign("news_count",$news_count);
			$this->assign("message_count",$message_count);
			$this->assign("user",$findUser);
		}
	}
}

?>