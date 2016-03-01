<?php
function  getPage($count){
    $pagesize=C('PAGE_SIZE');
    $page=new \Think\Page($count,$pagesize);
    $page->setConfig('header', '<span class="rows">共 %TOTAL_ROW% 条记录</span>');
    $page->setConfig('first' , '第一页') ;
    $page->setConfig('prev' , '上一页') ;
    $page->setConfig('next' , '下一页') ;

    return $page;
}