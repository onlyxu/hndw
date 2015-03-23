<?php
class ContentAction extends CommonAction{

	public function getCaseList()
	{
		$cate = new CateAction();
		$cate->getList();
		$this->display("caseList");
	}

	public function getPartnerList()
	{
		$cate = new CateAction();
		$cate->getList();
		$this->display("partnerList");
	}
}

?>