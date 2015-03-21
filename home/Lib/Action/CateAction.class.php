<?php
class CateAction extends CommonAction {

	public function getList()
	{
		$cate = M("Category");
		$keyword = $_GET["keyword"];
		$itemscount =$cate->where("keyword='%s'",$keyword)->count();//全部记录数

		$pageNo = isset($_GET['pno'])?$_GET['pno']:1;//页码、默认为1
		$pageSize = isset($_GET['ps'])?$_GET['ps']:9;//每页显示条数、默认为10
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

		$list= $cate->where("keyword='%s'",$keyword)->limit(($pageNo-1)*$pageSize,$pageSize)->order('orders desc,dtime desc')->select();

		$this->assign("items",$list);
		$this->assign("itemscount",$itemscount);
		$this->assign("pagecount",$pageCount);
		$this->assign("pageno",$pageNo);
		$this->assign("pagesize",$pageSize);

		$this->display("cateList");
	}
}

?>