<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

      $this->display();   
    }

  function  show(){
      if(!empty($_SESSION['name'])  &&  !empty($_SESSION['pwd'])){
              $this->display("Public/show");
          }else {
              $this->assign('jumpUrl',U('index'));
              $this->error('请登录');
      }
  }
}