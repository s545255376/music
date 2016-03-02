<?php

namespace  Admin\Controller;

use Think\Controller;
class  NewsController  extends  Controller{
    
    function index(){
        if(!empty($_SESSION['name'])  &&  !empty($_SESSION['pwd'])){
        $news=D('News');
        $count=$news->count();
       // echo $count;
        $page=getPage($count);
        $show=$page->show();
        $this->assign('page',$show);
        $list=$news->limit($page->firstRow,$page->listRows)->select();
        //dump($list);
        $this->assign('list',$list);
        $this->display();
        }else{
            $this->assign('jumpUrl','http://localhost/down/admin.php');
            $this->error('请登录');
        }
    }
    function add(){
        
        $id=$_GET['id'];
        if (empty($id)){
            $this->display();
        }else{
            $news=D('News');
            $data=$news->where("id=$id")->find();
           // dump($data);
            $this->assign('data',$data);
            $this->display();
        }
        
    }
    function  save(){
        
        $news=D('News');
        $data=$news->create();
        //dump($data);
        if($data){
            //dump($data);
            if(empty($data['id'])){
                
                if($news->add()){
                    $this->assign('jumpUrl','index');
                    $this->success('添加成功');
                }else{
                    $this->error('添加失败');
                    
                }
            }else{
                if($news->save()){
                    $this->assign('jumpUrl','index');
                    $this->success('修改成功');
                }else{
                    $this->error('修改失败');
                }
            }     
        }else{
            $this->error('数据验证失败');
        } 
        
    } 
    function delete(){
        
        
        
         $did=$_POST['did'];
         if(!empty($did)  &&  is_array($did)){
             $del=implode(',', $did);
             $map['id']=array('in',$del);
             $news=M('News');
             if($news->where($map)->delete()){
                 $this->assign('jumpUrl','index');
                 $this->success('删除成功');
             }else{
                 $this->error('删除失败');
             }
         }else{
             $this->error('请选择删除选项');
         }
        
         
         
         
        
    }
    
    
    function select(){
        
        $id=$_GET['id'];
        $news=M('News');
        $data=$news->where("id=$id")->find();
        //dump($data);
        $this->assign('data',$data);
        $this->display();
    }
    
    
    
    
    
    
    
    
}
