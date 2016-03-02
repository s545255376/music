<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
      $this->display();   
    }
 function login(){
        
        $_SESSION['name']=$_POST['name'];
        $_SESSION['pwd']=$_POST['pwd'];
        
        $name=$_SESSION['name'];
        $pwd=$_SESSION['pwd'];
        
        if(!empty($name) && !empty($pwd)){
            $user=M('Users');
          
            $map['UserName']=$name;
            $data=$user->where($map)->find();
            //dump($data);
            if($data){
                
                if($pwd==$data['userpwd']){
                    $this->assign('jumpUrl','../News/index');
                    $this->success("登陆成功!欢迎管理员光临!");
                }else{
                    $this->assign('jumpUrl','index');
                    $this->error("密码错误");
                }
            }else{
                $this->assign('jumpUrl','/index');
                $this->error("用户不存在");
                
            }
        }else{
                $this->assign('jumpUrl','index');
                $this->error("请输入用户和密码");
        }
    }
  function  logout(){
      
      $_SESSION=array();
      session_destroy();
      $this->assign('jumpUrl','index');
      $this->success('登出成功');
      
  }
  function  show(){
      if(!empty($_SESSION['name'])  &&  !empty($_SESSION['pwd'])){
      $this->display("Public/show");
      }else {
          $this->assign('jumpUrl','index');
          $this->error('请登录');
      }
  }
}