<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="/Public/css/common.css" />
<meta charset="UTF-8">
<title>主界面</title>
</head>
<body >
<div id="container">
  <div id="sidebar">
  
  <table  border=1  class="menu"  cellpadding="15">
  
  <tr>
  <td>
  <img src="/Public/Image/1.jpg"/>
      <a href="/supper/news.html">新闻管理</a>
  </td>
  </tr>
  <tr>
  <td>
  <img src="/Public/Image/1.jpg"/>
      <a href="/supper/upfile/upload.html"> 音乐上传</a>
  </td>
  </tr>
  <tr>
  <td>
  <img src="/Public/Image/1.jpg"/>
       <a href="/supper/upfile.html">上传管理</a>
  </td>
  </tr>
  <tr>
  <td>
  <img src="/Public/Image/1.jpg"/>
       <a href="/supper/download/edit.html">添加音乐资源</a>
  </td>
  </tr>
  <tr>
  <td>
  <img src="/Public/Image/1.jpg"/>
     <a href="/supper/download.html"> 音乐资源管理</a>
  </td>
  </tr>
  <tr>
  <td>
  <img src="/Public/Image/1.jpg"/>
      <a href="/supper/category.html">类目管理</a>
  </td>
  </tr>
  <tr>
  <td>
  <img src="/Public/Image/1.jpg"/>
      <a href="/supper/software.html">播放软件</a>
  </td>
  </tr>
  <tr>
  <td>
  <img src="/Public/Image/1.jpg"/>
      <a href="/supper/Users/index.html">用户管理</a>
  </td>
  </tr>  
  <td>
  <img src="/Public/Image/1.jpg"/>
       <a href="/supper/users/edit.html">修改密码</a>
  </td>
  </tr>
  <tr>
  <td>
  <img src="/Public/Image/1.jpg"/>
      <a href="/supper/index/logout.html">退出系统</a>
  </td>
  </tr>  
  </table>
  
  </div>

</div>





</body>
</html>
<link rel="stylesheet" type="text/css" href="/Public/css/common.css" />

<div  id="content">

<p>上传管理</p>

<table  border="1px"   id="utable">

<tr>
<th  width=25 >ID</th>
<th  width=100>音乐名称</th>
<th  width=100>别名</th>
<th  width=125>实际URL</th>
<th  width=50>删除</th>

</tr>
<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
 <td><?php echo ($vo['id']); ?></td>
 <td><?php echo ($vo['name']); ?></td>
 <td><?php echo ($vo['uname']); ?></td>
 <td><?php echo ($vo['url']); ?></td>
 <td><a href="/supper/Upfile/delete/id/<?php echo ($vo['id']); ?>">删除</a></td>
 </tr><?php endforeach; endif; else: echo "" ;endif; ?>

</table>
<div  class="page">
<?php echo ($page); ?>
</div>



</div>