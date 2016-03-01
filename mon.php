<?php

$m = new MongoClient('mongodb://192.168.247.129:27017');
echo  'ss';
print_r($m->listDBs());//
if($db=$m->mydb) echo  '选择数据库成功';
$col=$db->createCollection('mycol');
$document=array(
    "title" => "Mongo",
    "description" => "database",
    "likes" => 100,
    "url" => "http://www.w3cschool.cc/mongodb/",
    "by",
    "w3cschool.cc"
);
//if($col->insert($document)) echo 'ok<hr>';
$data=array('$set'=>array(
    "title" => "mysql",
    "description" => "database",
    "likes" => 100,
    "url" => "http://www.w3cschool.cc/mysql/",
    "by",
    "w3cschool.cc"
));
if($col->update(array('title'=>'Mongo'),$data))  echo 'update  successfully  <hr>';
if($col->remove(array('title'=>'mysql',"url" => "http://www.w3cschool.cc/mysql/")))  echo 'remove  successfully  <hr>';

$cursor = $col->findOne(array('_id'=>));
var_dump($cursor);
$user = $col->findOne();
var_dump($user);


//$cursor=$col->find();
//foreach($cursor  as $v){
//    //var_dump($v);
//    echo  $v['_id'].'<br>';
//    echo  $v['title'].'<br>';
//    //echo  $v['description'].'<br>';
//    echo  $v['url'].'<br>';
//    echo '<hr>';
//}
//



$m->close();







?>