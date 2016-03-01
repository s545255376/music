<?php
namespace  admin\Model;

use Think\Model;
class  CategoryModel  extends  Model{
    protected $_validate        =   array();  // 自动验证定义
    protected $_auto            =   array(
        
        array('path','getpath',1,'callback'),
        
    );  // 自动完成定义
    protected $_map             =   array();  // 字段映射定义
    protected $_scope           =   array();  // 命名范围定义
    
    
    function  getpath(){
        
        $id=$_POST['pid'];
        $cate=D('Category');
        $data=$cate->field('id,path')->getById($id);
        $path=$id!=0 ? $data['path'].'-'.$id  : 0;
        return  $path;
    }
}