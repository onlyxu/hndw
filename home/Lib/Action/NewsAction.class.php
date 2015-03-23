<?php
class NewsAction extends CommonAction{

	/**
	 * 获取新闻分类列表
	 * keyword=producttype
	 */
	public  function getTypeList()
	{
		$cu =new CateAction();
		$getList = $cu->getTypeList();
		$this->display("newsTypeList");
	}


	/**
	 * 获取新闻列表
	 * keyword=producttype
	 */
	public  function getList()
	{
		$cu =new CateAction();
		$cu->getList();
		$this->display("newsList");
	}

	public function preAddNews()
	{
		$cu =new CateAction();
		$cu->preAddContent();
		$this->display("addNews");
	}

	public function addNews()
	{
		$cu =new CateAction();
		$bo = $cu->addContent();
		if($bo["bo"])
		{
			$this->error('增加或更新成功');
		}else{
			$this->error('增加或更新失败');
		}
	}
}

?>