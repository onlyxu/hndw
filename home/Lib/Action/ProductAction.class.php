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
		$con = M("Contents");

		$showing = $_GET['showing'];//展示状态
		$typeid = $_GET['typeid'];//展示状态
		$pageNo = isset($_GET['pno'])?$_GET['pno']:1;//页码、默认为1
		$pageSize = isset($_GET['ps'])?$_GET['ps']:9;//每页显示条数、默认为10

		$sql = "select a.id,a.title,a.content,a.dtime,a.orders,a.showing,a.pv,a.lb,a.tj,a.img,a.keyword,a.typeid,b.title as typename ";
		$sql = $sql." from tp_contents a left join tp_category b on a.typeid = b.id where 1=1 and b.keyword='producttype' ";
		if($showing)
		{
			$sql = $sql." and a.showing =".$showing;
		}
		if($typeid)
		{
			$sql = $sql." and a.typeid =".$typeid;
		}

		$sql = $sql." order by a.dtime desc,a.orders asc,b.id asc ";
		$sql = $sql." limit ".($pageNo-1)*$pageSize.",".$pageSize;

		$list  = $con->query($sql);
		$itemscount = count($list);
		$pageCount = $itemscount % $pageSize ==0 ? ($itemscount / $pageSize):(($itemscount / $pageSize)+1);//总页数
		$pageCount = intval($pageCount);

		$this->assign("items",$list);
		$this->assign("itemscount",$itemscount);
		$this->assign("pagecount",$pageCount);
		$this->assign("pageno",$pageNo);
		$this->assign("pagesize",$pageSize);

		$this->display("productList");
	}

	public function preAddProduct()
	{
		$cate = M("Category");
		$con = M("Contents");
		$cateList = $cate->where("keyword='producttype'")->select();
		$id = $_GET["id"];
		if($id)
		{
			$product = $con->where("id=%d",$id)->find();
			$orders =$product['orders'];
			$dtime = $product['dtime'];
			$this->assign("pro",$product);
		}else{
			$orders= $con->join("left join tp_category on tp_category.id = tp_contents.typeid ")->where("tp_category.keyword='producttype'")->count()+1;
			$dtime = date('Y-m-d H:i');
		}

		$this->assign("cateList",$cateList);
		$this->assign("orders",$orders);
		$this->assign("dtime",$dtime);
		$this->display("addProduct");
	}

	public function addProduct()
	{
		$id = $_POST["id"];
		$typeid = $_POST["typeid"];
		$content = $_POST["content"];
		$content_en = $_POST["content_en"];
		$showing = $_POST["showing"];
		$tj = isset($_POST['tj'])?$_POST['tj']:2;
		$lb = isset($_POST['lb'])?$_POST['lb']:2;
		$dtime = $_POST["dtime"];
		$orders = $_POST["orders"];
		$pv = $_POST["pv"];
		$uploads = $_POST["uploads"];
		$title = $_POST["title"];
		$title_en = $_POST["title_en"];
		$keyword = $_POST["keyword"];
		$keyword_en = $_POST["keyword_en"];

		$con = M("Contents");
		try {
			$con->startTrans();
			$data["typeid"]=$typeid;
			$data["content"]=$content;
			$data["content_en"]=$content_en;
			$data["showing"]=$showing;
			$data["tj"]=$tj;
			$data["lb"]=$lb;
			$data["dtime"]=$dtime;
			$data["orders"]=$orders;
			$data["pv"]=$pv;
			$data["img"]=$uploads;
			$data["title"]=$title;
			$data["title_en"]=$title_en;
			$data["keyword"]=$keyword;
			$data["keyword_en"]=$keyword_en;

			if($id)
			{
				$con->where("id=%d",$id)->save($data);
			}else{
				$con->add($data);
			}
			$con->commit();
			$this->success('增加或更新成功', 'Product/getList');
		} catch (Exception $e) {
			$con->rollback();
			$this->error('增加或更新失败');
		}

	}
}

?>