<?php
namespace Home\Controller;
use Think\Controller;
class ToolController extends Controller 
{
    public function clear_cache()
    {
    	S('info', null);
        S('res', null);
        S('zhongjiangqishu', null);
    }
    //
}