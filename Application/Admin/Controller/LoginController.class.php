<?php
/**
 * Created by PhpStorm.
 * User: LIU
 * Date: 2016/3/2
 * Time: 20:36
 */

namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller
{
      public  function  index(){
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
                      $this->assign('jumpUrl',U('News/index'));
                      $this->success("登陆成功!欢迎管理员光临!");
                  }else{
                      $this->assign('jumpUrl','http://www.music.com/supper.html');
                      $this->error("密码错误");
                  }
              }else{
                  $this->assign('jumpUrl','http://www.music.com/supper.html');
                  $this->error("用户不存在");

              }
          }else{
              $this->assign('jumpUrl','http://www.music.com/supper.html');
              $this->error("请输入用户和密码");
          }
      }


}