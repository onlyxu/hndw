<?php

class IndexAction extends CommonAction {
	/**
	 * 系统首页
	 */
    public function index(){
		$this->display("index");
    }

    public function location()
    {
		$ip ="218.28.20.163";
		$util = new UtilAction();
		$getCity = $util->getCity($ip);
		foreach($getCity  as $key=>$value)
		{
			dump("getCity=>".$key.":".$value);
		}

    }
}