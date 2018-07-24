<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller 
{
    public function index()
    {
    	session('look_login', null);
    	$this->display();
    }

    public function checkLogin()
    {
    	if(IS_AJAX)
    	{
    		$account = I('post.account');
    		$psd = I('post.psd');
    		if($account && $psd)
    		{
    			$info = $this->account();
                foreach($info as $k => $v) 
                {
                    if($psd == $v['psd'] && $account == $v['account'])
                    {
                        $data = 666;
                        session('look_login', $info);
                        break;
                    }
                    else
                    {
                        $data = 1;
                    }
                }

    			$this->ajaxReturn($data);
    		}
    	}
    }

    private function account()
    {
    	$data = [
            ['account' => 'wz88888', 'psd' => '123456'],
            ['account' => 'test', 'psd' => '123456'],
            ['account' => 'abc', 'psd' => '123456'],
        ];

    	return $data;
    }
    //
}