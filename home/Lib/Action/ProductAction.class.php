<?php
class ProductAction extends CommonAction{

	/**
	 * 获取产品分类
	 * keyword=producttype
	 */
	public  function getTypeList()
	{
		$cate = M("Category");

		$showing = $_GET['showing'];
		$pageNo = isset($_GET['pno'])?$_GET['pno']:1;//页码、默认为1
		$pageSize = isset($_GET['ps'])?$_GET['ps']:9;//每页显示条数、默认为10
		if($showing)
		{
			$itemscount =$cate->where("keyword='producttype' and showing =%d",$showing)->count();//全部记录数
		}else{
			$itemscount =$cate->where("keyword='producttype'")->count();//全部记录数
		}

		$pageCount = $itemscount % $pageSize ==0 ? ($itemscount / $pageSize):(($itemscount / $pageSize)+1);//总页数
		$pageCount = intval($pageCount);
		if($pageNo<=1)
		{
			$pageNo=1 ;
		}
		if($pageNo>=$pageCount)
		{
			$pageNo= $pageCount ;
		}
		if($showing)
		{
			$list= $cate->where("keyword='producttype' and showing =%d",$showing)->limit(($pageNo-1)*$pageSize,$pageSize)->order('orders desc,dtime desc')->select();
		}else{
			$list= $cate->where("keyword='producttype'")->limit(($pageNo-1)*$pageSize,$pageSize)->order('orders desc,dtime desc')->select();
		}


		$this->assign("items",$list);
		$this->assign("itemscount",$itemscount);
		$this->assign("pagecount",$pageCount);
		$this->assign("pageno",$pageNo);
		$this->assign("pagesize",$pageSize);

		$this->display("productTypeList");
	}



	/**
	 * 获取产品
	 * keyword=producttype
	 */
	public  function getList()
	{
		$cate = M("Category");

		$showing = $_GET['showing'];//展示状态
		$typeid = $_GET['typeid'];//展示状态
		$pageNo = isset($_GET['pno'])?$_GET['pno']:1;//页码、默认为1
		$pageSize = isset($_GET['ps'])?$_GET['ps']:9;//每页显示条数、默认为10
		if($showing)
		{
			$itemscount =$cate->where("keyword='producttype' and showing =%d",$showing)->count();//全部记录数
		}else{
			$itemscount =$cate->where("keyword='producttype'")->count();//全部记录数
		}

		$pageCount = $itemscount % $pageSize ==0 ? ($itemscount / $pageSize):(($itemscount / $pageSize)+1);//总页数
		$pageCount = intval($pageCount);
		if($pageNo<=1)
		{
			$pageNo=1 ;
		}
		if($pageNo>=$pageCount)
		{
			$pageNo= $pageCount ;
		}

		if($showing)
		{
			$list= $cate->where("keyword='producttype' and showing =%d",$showing)->limit(($pageNo-1)*$pageSize,$pageSize)->order('orders desc,dtime desc')->select();
		}else{
			$list= $cate->where("keyword='producttype'")->limit(($pageNo-1)*$pageSize,$pageSize)->order('orders desc,dtime desc')->select();
		}


		$this->assign("items",$list);
		$this->assign("itemscount",$itemscount);
		$this->assign("pagecount",$pageCount);
		$this->assign("pageno",$pageNo);
		$this->assign("pagesize",$pageSize);

		$this->display("productList");
	}
}

?>