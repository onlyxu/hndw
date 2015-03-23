<?php
class ProductAction extends CommonAction{

	/**
	 * 获取产品分类
	 * keyword=producttype
	 */
	public  function getTypeList()
	{
		$cu =new CateAction();
		$getList = $cu->getTypeList();
		$this->display("productTypeList");
	}


	/**
	 * 获取产品
	 * keyword=producttype
	 */
	public  function getList()
	{
		$cu =new CateAction();
		$cu->getList();
		$this->display("productList");
	}

	public function preAddProduct()
	{
		$cu =new CateAction();
		$cu->preAddContent();
		$this->display("addProduct");
	}

	public function addProduct()
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