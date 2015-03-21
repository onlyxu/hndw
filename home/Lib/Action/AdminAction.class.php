<?php

class AdminAction extends CommonAction {

	public function goLogin()
	{
		$this->display("login");
	}

	/**
	 *后台首页
	 */
    public function index(){

		if(session("user"))
		{
			$this->display("index");
		}else{
			self::goLogin();
		}
    }

	/**
	 *生成图片验证码
	 */
    public function genCode()
    {
    	import('ORG.Util.Image');
    	Image::buildImageVerify(4,1,png,80,32,'verify');
    }
    /**
     * 后台登陆
     */
    public function  AdminLogin()
    {
    	$userName = $_POST["userName"];
    	$userPass = $_POST["userPass"];
    	$verify = $_POST["verify"];
    	$logintime = date('Y-m-d H:i');
    	$utils = new UtilAction();

		$errorcode = -1;
		$msg = "";
    	if(session('verify') != md5($verify)) {
    		$errorcode = 1;
    		$msg = "验证码错误！";
    	}else{

    		$user = M("Users");
    		$res = $user->where("username ='%s'",$userName)->find();
    		if($res)
    		{
    			if($res["status"] ==1)
    			{
    				$loginkey = $res['userkey'];
    				if($utils->encrypt($userPass, $loginkey) == $res['userpass'])
    				{
    					$token = $utils->uuid();
    					session("user",$res);
    					session("token",$token);
    					$data["token"]=$token;
    					$msg = "登录成功！";
    				}else{
    					$errorcode = 3;
    					$msg = "登录密码错误！";
    				}
    			}else{
    				$errorcode = 4;
    				$msg = "登录账号已禁用！";
    			}

    		}else{
    			$errorcode = 2;
    			$msg = "登陆账号不存在！";
    		}
    	}

    	$data["errorcode"]=$errorcode;
    	$data["msg"]=$msg;
    	$this->ajaxReturn($data);
    }

	/**
	 * 测试添加用户
	 * @see Action::__call()
	 */
	public function addUser() {

		$user = M("Users");
		$utils = new UtilAction();
		$dtime = date('Y-m-d H:i');
		try {
			$user->startTrans();
			$data["username"]="admin";
			$randstr = $utils->randstr(8);
			$encrypt = $utils->encrypt("000000", $randstr);
			$data["userkey"]=$randstr;
			$data["userpass"]=$encrypt;
			$data["dtime"]=$dtime;
			$data["email"]="277156235@qq.com";
			$data["tele"]="12321412412";
			$data["typeid"]="1";
			$data["orders"]="1";
			$data["status"]="1";

			$add = $user->add($data);
			$user->commit();

		} catch (Exception $e) {


		}


	}


}