<?php
namespace  Home\Controller;

use Think\Controller;
class  DownloadController extends Controller{
    
    function  index(){
        
        $down=D('Download');
        
        $data=$down->field('singer,area')->select();
        $this->assign('data',$data);
        
        $cate=D('Category');
        $map['pid']=array('in','1,2');
        $list=$cate->where($map)->field('name')->select();
        $this->assign('list',$list);
        $this->display();
        //dump($data);
        //dump($list);
        
    }
    function  indexall(){
        $down=D('Download');
        
        $data=$down->field('singer,area')->select();
        $this->assign('data',$data);
        
        $cate=D('Category');
        $map['pid']=array('in','1,2');
        $list=$cate->where($map)->field('name')->select();
        $this->assign('list',$list);
        $this->display();
    }
    
    function  search(){
        
    }
    
}