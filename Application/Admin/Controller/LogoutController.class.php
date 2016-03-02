<?php


namespace Admin\Controller;
use Think\Controller;
class LogoutController extends Controller
{
    public  function  index(){

        $_SESSION=array();
        session_destroy();
        $this->assign('jumpUrl','http://www.music.com/supper.html');
        $this->success('登出成功');

    }
}
?>