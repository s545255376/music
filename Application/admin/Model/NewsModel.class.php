<?php
namespace  admin\Model;

use Think\Model;
class  NewsModel extends Model{
    

    protected $_validate        =   array(
        
        array('title','require','主题必须填',1,'regex',3),
        
    );  // 自动验证定义
    protected $_auto            =   array(
        array('createtime','getDate',3,'callback'),
        
    );  // 自动完成定义
    protected $_map             =   array(
        
        
    );  // 字段映射定义
    protected $_scope           =   array(
        
        
    );  // 命名范围定义
  function  getDate(){
        return  date("Y-m-d H:i:s");
    }
   
}