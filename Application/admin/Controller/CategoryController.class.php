<?php
namespace  Admin\Controller;

use Think\Controller;
class CategoryController  extends  Controller{
    function  index(){
        
        
        $cate=D('Category');
        $count=$cate->count();
        $page=getPage($count);
        $show=$page->show();
        
        $list=$cate->field("id, name, pid, path,concat(path,'-',id) as  bpath")->order(id,pid)->limit($page->firstRow,$page->listRows)->select();
        
    
        foreach ($list  as  $key=>$value){
            $list[$key]['count']=count(explode('-', $value['bpath']))-1;
            $list[$key]['margin']=20*(count(explode('-', $value['bpath']))-1);
        }
        $data=$cate->where("pid=0")->select();
        $this->assign('data',$data);
        $this->assign('page',$show);
        $this->assign('list',$list);
        
        //dump($list);
        $this->display();
        
    }
    
    function edit(){
        
        
        $id=$_GET['id'];
        if($id){
        $cate=D('Category');
        $data=$cate->where("id=$id")->find();
        $this->assign('data',$data);
        $this->display();
        }else{
            $this->error('选择修改项');
        }
        
    }
    
    function save(){
        
        
        $cate=D('Category');
        $data=$cate->create();
        //dump($data);
        if($data){
            
            if($cate->save()){
                $this->assign('jumpUrl','index');
                $this->success('更新成功');
            }else{
                $this->error('更新失败');
            }
        }else {
            $this->error('数据验证失败');
        }
        
        
        
        
    }
    function delete(){
        
        $id=$_GET['id'];
        if($id){
            $cate=D('Category');
            if($data=$cate->where("pid=$id")->find()){
                 //dump($data);
                 $this->error('不能被删除,存在下级类目');
            }else{
                
                if($cate->where("id=$id")->delete()){
                    $this->success('删除成功');
                }else{
                    $this->error('删除失败');
                }
            }
        }else{
            $this->error('选择删除对象');
        }
        
    }
    
    function insert(){
        
        
        $cate=D('Category');
        $data=$cate->create();
        
        if($data){

            if($cate->add()){
                $this->assign('jumpUrl','index');
                $this->success('添加成功');
            }else{
                $this->error('添加失败');
            }
            
        }else {
            $this->error('数据验证失败');
        }
    }
    
}