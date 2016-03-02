<?php


function  getClist(){
    
    $cate=D('Category');
    $list=$cate->field("id, name, pid, path,concat(path,'-',id) as  bpath")->order(id,pid)->select();
    
    
    foreach ($list  as  $key=>$value){
        $list[$key]['count']=count(explode('-', $value['bpath']))-1;
        $list[$key]['margin']=20*(count(explode('-', $value['bpath']))-1);
    }
    
    return $list;
}
