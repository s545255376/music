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
      <a href="/down/index.php/Admin/News/index">新闻管理</a>
  </td>
  </tr>
  <tr>
  <td>
  <img src="/down/Public/Image/1.jpg"/>
      <a href="/down/index.php/Admin/Upfile/upload"> 音乐上传</a>
  </td>
  </tr>
  <tr>
  <td>
  <img src="/down/Public/Image/1.jpg"/>
       <a href="/down/index.php/Admin/Upfile/index">上传管理</a>
  </td>
  </tr>
  <tr>
  <td>
  <img src="/down/Public/Image/1.jpg"/>
       <a href="/down/index.php/Admin/Download/edit">添加音乐资源</a>
  </td>
  </tr>
  <tr>
  <td>
  <img src="/down/Public/Image/1.jpg"/>
     <a href="/down/index.php/Admin/Download/index"> 音乐资源管理</a>
  </td>
  </tr>
  <tr>
  <td>
  <img src="/down/Public/Image/1.jpg"/>
      <a href="/down/index.php/Admin/Category/index">类目管理</a>
  </td>
  </tr>
  <tr>
  <td>
  <img src="/down/Public/Image/1.jpg"/>
      <a href="/down/index.php/Admin/Software/index">播放软件</a>
  </td>
  </tr>
  <tr>
  <td>
  <img src="/down/Public/Image/1.jpg"/>
      <a href="/down/index.php/Admin/Users/index">用户管理</a>
  </td>
  </tr>  
  <td>
  <img src="/down/Public/Image/1.jpg"/>
       <a href="/down/index.php/Admin/Users/edit">修改密码</a>
  </td>
  </tr>
  <tr>
  <td>
  <img src="/down/Public/Image/1.jpg"/>
      <a href="/down/index.php/Admin/Index/logout">退出系统</a>
  </td>
  </tr>  
  </table>
  
  </div>

</div>





</body>
</html>
<link rel="stylesheet" type="text/css" href="/down/Public/css/common.css" />


<div  id="content">

<p>用户管理</p>
<table  id="ntable"  border=1>

<tr>
<th>用户名</th>
<th>密码重置</th>
<th>删除</th>

</tr>
<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
   <td><?php echo ($vo['username']); ?></td>
   <td><a href="/down/index.php/Admin/Users/resetpwd/id/<?php echo ($vo['id']); ?>">重置密码</a></td>
   <td>
   <?php if(($vo['id']) > "1"): ?><a href="/down/index.php/Admin/Users/delete/id/<?php echo ($vo['id']); ?>">删除</a><?php endif; ?>
   
   </td>
   </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<div  class="page">
<?php echo ($page); ?>


<a href="/down/index.php/Admin/Users/add"><input type="button" id="useradd" value="新建用户信息"/></a>


</div>