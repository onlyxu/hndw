<?php

class TransAction extends CommonAction{

	public function  getLanAuto()
	{
		$content = $_GET["content"];
		$util = new UtilAction();
		$getLanAuto = $util->getLanAuto($content);
		$data["dist"]= $getLanAuto;
		$this->ajaxReturn($data);
	}
}

?>