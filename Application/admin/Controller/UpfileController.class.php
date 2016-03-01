<?php
namespace Admin\Controller;

use Think\Controller;
class  UpfileController extends  Controller{
    function index(){
        $upfile=D('Upfile');
        $count=$upfile->count();
       // echo $count;
        $page=getPage($count);
        $show=$page->show();
        $this->assign('page',$show);
        $list=$upfile->limit($page->firstRow,$page->listRows)->select();
        $this->assign('data',$list);
        $this->display();
        
    }
    function  upload(){
        $this->display();
    }
    
    function  upfile(){
        
        
        $time=getdate();
        $fname=$time['year'].$time['mod'].$time['mday'].$time['hours'].$time['minutes'].$time['seconds'];
        
        
        //上传目录
        
        $dir=getcwd();
        $updir=$dir."\Public\Music";
        //echo $updir;
        if(!is_dir($updir)){
            mkdir($updir);
        }
        //print_r($_FILES['file']);
        
        $file=$_FILES['file'];
        $filename=$file['name'];
        //获取扩展名
        $pos=strpos($filename,'.');
        $ext=substr($filename,$pos,strlen($filename)-$pos);
        
        
        $newfile=$updir.'\\'.$fname.$ext;
        //echo  $newfile;
        $upfile=D('Upfile');
        $map['uname']=$file['name'];
        $list=$upfile->where($map)->find();
        if(!$list){
            if(file_exists($file['tmp_name'])){
                if(move_uploaded_file($file['tmp_name'], $newfile)){
                    $this->assign('file',$file);
                    $this->assign('newfile',$newfile);
                    
                    
                    $data['name']=$fname.$ext;
                    $data['uname']=$file['name'];
                    $data['url']=$newfile;
                    
                    if($upfile->add($data)){
                        $this->assign('flag','上传成功');
                    }else{
                        $this->assign('flag','上传失败');
                    }
                }
            }else{
                
                $this->error('临时文件不存在');
            }
        }else{
            $this->error('文件已存在');
        }
        $this->display();
        

    }
    
    function delete(){
        
        
        
        $id=$_GET['id'];
        if($id){
            $upfile=D('Upfile');
            if($upfile->where("id=$id")->delete()){
                
                $this->success('删除成功');
            }else{
                $this->assign('jumpUrl','index');
                $this->error('删除失败');
            }
        }else{
            $this->error('选择删除选项');
        }
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}