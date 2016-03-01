<?php
namespace  Admin\Controller;


use Think\Controller;
class DownloadController extends Controller{
    
    function index(){
        
        $down=D('Download');
        $count=$down->count();
        $page=getPage($count);
        $show=$page->show();
        $this->assign('page',$show);
        $list=$down->limit($page->firstRow,$page->listRows)->select();
        
        $this->assign('list',$list);
        $this->display();
    }

    function insert(){
        
        $down=D('Download');
        
        $data=$down->create();
       // dump($data);
        if(empty($data['ishot'])){
            $data['ishot']=0;
        }
        if(empty($data['ishide'])){
            $data['ishide']=1;
        }
        if(!empty($data)){
            if($down->add($data)){
               $this->assign('jumpUrl','index');
                $this->success('添加成功');
            }else{
                $this->error('添加失败');
            }
        }
    }
    
    function edit(){
        
        
        $soft=D('Software');
        $list=$soft->select();
        
        $data=getClist();
        $this->assign('data',$data);
        $this->assign('list',$list);
        
        $id=$_GET['id'];
        if(!empty($id)){
            $down=D('Download');
            $data=$down->where("id=$id")->find();
            
            $this->assign('dlist',$data);
            $this->display('edit');
            
        
        }else{

            $this->display('add');
        }
    }
    
    function save(){
        
        $down=D('Download');
        if($data=$down->create()){
            if(!empty($data['id'])){
                if ($down->save()){
                    $this->assign('jumpUrl','index');
                    $this->success('修改成功');
                }else{
                    $this->error('修改失败');
                }
            }else{
                $this->error('选择要修改的选项');
            }
        }
    }
    
    function delete(){
        
        
        $id=$_GET['id'];
        if(!empty($id)){
            $down=D('Download');
            if ($down->where("id=$id")->delete()){
                $this->assign('jumpUrl',U('Download/index'));
                $this->success('删除成功');
            }else{
                    $this->error('删除失败');
                }
        }else{
                $this->error('选择要删除的选项');
            }
    }


























}