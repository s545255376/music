<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="/down/Public/css/common.css" />
<meta charset="UTF-8">
<title>主界面</title>
</head>
<body >
<div id="container">
  <div id="sidebar">
  
  <table  border=1  class="menu"  cellpadding="15">
  
  <tr>
  <td>
  <img src="/down/Public/Image/1.jpg"/>
      <a href="/down/admin.php/News/index">新闻管理</a>
  </td>
  </tr>
  <tr>
  <td>
  <img src="/down/Public/Image/1.jpg"/>
      <a href="/down/admin.php/Upfile/upload"> 音乐上传</a>
  </td>
  </tr>
  <tr>
  <td>
  <img src="/down/Public/Image/1.jpg"/>
       <a href="/down/admin.php/Upfile/index">上传管理</a>
  </td>
  </tr>
  <tr>
  <td>
  <img src="/down/Public/Image/1.jpg"/>
       <a href="/down/admin.php/Download/edit">添加音乐资源</a>
  </td>
  </tr>
  <tr>
  <td>
  <img src="/down/Public/Image/1.jpg"/>
     <a href="/down/admin.php/Download/index"> 音乐资源管理</a>
  </td>
  </tr>
  <tr>
  <td>
  <img src="/down/Public/Image/1.jpg"/>
      <a href="/down/admin.php/Category/index">类目管理</a>
  </td>
  </tr>
  <tr>
  <td>
  <img src="/down/Public/Image/1.jpg"/>
      <a href="/down/admin.php/Software/index">播放软件</a>
  </td>
  </tr>
  <tr>
  <td>
  <img src="/down/Public/Image/1.jpg"/>
      <a href="/down/admin.php/Users/index">用户管理</a>
  </td>
  </tr>  
  <td>
  <img src="/down/Public/Image/1.jpg"/>
       <a href="/down/admin.php/Users/edit">修改密码</a>
  </td>
  </tr>
  <tr>
  <td>
  <img src="/down/Public/Image/1.jpg"/>
      <a href="/down/admin.php/Index/logout">退出系统</a>
  </td>
  </tr>  
  </table>
  
  </div>

</div>





</body>
</html>
<link rel="stylesheet" type="text/css" href="/down/Public/css/common.css" />

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
 <td><a href="/down/admin.php/Upfile/delete/id/<?php echo ($vo['id']); ?>">删除</a></td>
 </tr><?php endforeach; endif; else: echo "" ;endif; ?>

</table>
<div  class="page">
<?php echo ($page); ?>
</div>



</div>