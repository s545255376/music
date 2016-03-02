<?php

namespace  Admin\Controller;


use Think\Controller;
class  SoftwareController  extends Controller{
    
    function index(){
      
        $soft=D('Software');
        $list=$soft->select();
        $this->assign('list',$list);
        $this->display();
    }
    
    function edit(){
        
        
        $id=$_GET['id'];
        if($id){
            $soft=D('Software');
            $data=$soft->where("id=$id")->find();
            $this->assign('data',$data);
            $this->display();
        }
        
    }
    
    function save(){
        
        $soft=D('Software');
        $data=$soft->create();
        
        if($data){
            
            if($soft->save()){
                $this->assign('jumpUrl','index');
                $this->success('修改成功');
            }else{
                $this->assign('jumpUrl','index');
                $this->error('修改失败');
            }
        }else{
            
            $this->error('数据验证错误');
        }
    }
    
    function delete(){
         
        
        $id=$_GET['id'];
        if($id){
            $soft=D('Software');
            if($soft->where("id=$id")->delete()){
                $this->success('删除成功');
            }else{
                $this->error('删除失败');
            }
        }else{
            $this->error('请选择删除选项');
        }
        
    }
    
    function insert(){
        
        $soft=D('Software');
        $data=$soft->create();
        
        if($data){
            if($soft->add()){
                $this->success('添加成功');
            }else{
                $this->error('添加失败');
            }
        }else{
            $this->error('数据验证失败');
        }
        
        
    }
    
    
    
    
    
    
    
    
    
    
}