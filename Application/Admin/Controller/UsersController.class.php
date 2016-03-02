<?php
namespace  Admin\Controller;

use Think\Controller;
class   UsersController  extends   Controller{
    
    function index(){
        
        
        $user=D('Users');
       
        $count=$user->count();
        $page=getPage($count);
        $show=$page->show();
        $this->assign('page',$show);
        $data=$user->limit($page->firstRow,$page->listRows)->select();
       // dump($data);
        $this->assign('data',$data);
        $this->display();
    }
    
    function resetpwd(){
    
        $id=$_GET['id'];
        if($id){
            $data['id']=$id;
            $data['UserPwd']='111111';
            $user=D('Users');
            if($user->save($data)){
                $this->success('密码重置为  111111');
            }else{
                $this->error('密码重置失败,密码为原始密码');
            }
        
        }else{
            $this->error('请选择重置用户');
        }
    }
    
    function delete(){
        
        $id=$_GET['id'];
        if($id){
            $user=D('Users');
            if($user->where("id=$id")->delete()){
                $this->assign('jumpUrl',U('Users/index'));
                $this->success('删除成功');
            }else{
                $this->error('删除失败');
            }
        
        }else{
            $this->error('请选择删除的用户');
        }
    }
    
    function add(){
        
        $this->display();
    }
    
    function insert(){
        $user=D('Users');
        if($data=$user->create()){
            
            if($user->add()){
                $this->assign('jumpUrl','index');
                $this->success('添加成功');
            }else{
                $this->error('添加失败');
            }
        
        
        }else{
            $this->error('数据验证失败');
        }
    }
    function edit(){
        
        $name=$_SESSION['name'];
        $user=D('Users');
        $map['UserName']=$name;
        echo $$map['UserName'];
        $data=$user->where($map)->find();
        
        $this->assign('data',$data);
        
        $this->display();
    }
    
    function  save(){
        
        
        $user=D('Users');
        if($data=$user->create()){
            if(!empty($data['id'])){
                
                if ($user->save()){
                    $this->assign('jumpUrl',U('Index/index'));
                    $this->success('修改密码成功');
                }else{
                    $this->error('修改密码失败');
                }
            }
        }
    }
}