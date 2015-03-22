<?php
class TestAction extends CommonAction {

	public function testLan()
	{
		$util = new UtilAction();
		$getLanAuto = $util->getLanAuto("");
		dump($getLanAuto);
	}
}

?>