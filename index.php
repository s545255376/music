<?php

$car=array(
    'name'=>'benchi',
    'color'=>'red',
    'price'=>100,
    'speed'=>'high'

);

$a = array(
  array(
    'id' => 5698,
    'first_name' => 'Bill',
    'last_name' => 'Gates',
  ),
  array(
    'id' => 4767,
    'first_name' => 'Steve',
    'last_name' => 'Jobs',
  ),
  array(
    'id' => 3809,
    'first_name' => 'Mark',
    'last_name' => 'Zuckerberg',
  )
);

$car=array_change_key_case($car,CASE_UPPER);
$car=array_change_key_case($car,CASE_LOWER);

$list=array_column($a,'last_name','id');
$b=array(1,2,3);
$c=array(1,2,'three'=>3,4);
$arr=array_combine($b,$b);
//var_dump($arr);
//print_r(array_count_values($b));
//print_r(array_diff($c,$b));
//print_r(array_diff_key($c,$b));
//print_r(array_diff_assoc($c,$b));

define('name','jack');
echo defined('name'),constant('name');

$zip='E:/phpcms.zip';
echo $zip;
$zip=zip_open($zip);
while(!$zip_entry=zip_read($zip)){
    $filesize=zip_entry_filesize($zip_entry);
    $zipsize=zip_entry_compressedsize($zip_entry);
    $zipm=zip_entry_compressionmethod($zip_entry);
    echo  '<br>';
//echo  'name  is :'.zip_entry_name($zip_entry);
//
//    echo  '&nbsp  size  is :'.$filesize.'<br>';
//    echo  $zipsize.'<br>';
//    echo  $zipm.'<br>';
 



 if($filesize){
           zip_entry_open($zip,$zip_entry,'r');
           $content='';
           while($content=zip_entry_read($zip_entry)){
               echo $content;
          }
          exit();
           //echo  'content  is :'.$content.'<br>';
 }

   

}

$str="wordwrap() 函数按照指定长度对字符串进行折行处理。vsprintf() 函数把格式化字符串写入变量中。vprintf() 函数输出格式化的字符串。";

echo  wordwrap($str,15,'<br>');
echo  substr_replace('asdasdasdafsadsadsa','HELLO WORLD ',1,15);
ECHO  substr_count('sadasdasdsaaaaa','a');
echo  substr_compare('asdasdasdafsadsadsa','snadasdasdsaaaaasdadsadadadsdadadsadsa',1);
echo  substr('hello   world',4,4);
echo  strtr('hello  world','ho','mn');
echo  $str=strtoupper('hello  world');
echo  strtolower($str);
echo  '<br>';
echo  strstr($str,'O');
echo  strrchr($str,'O');
echo strpos($str,'O');
echo strrpos($str,'O');
echo strip_tags("<html>hello</html>");
echo  '<br>';
echo htmlentities("hello").'<br>';
echo crypt('123456','xm');







?>