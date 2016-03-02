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
      <a href="/supper/logout.html">退出系统</a>
  </td>
  </tr>  
  </table>
  
  </div>

</div>





</body>
</html>
<link rel="stylesheet" type="text/css" href="/Public/css/common.css" />

<div  id="content">
<p>类目管理</p>
<table  border=1  id="ntable">
<tr>
<th>类目名称</th>
<th>子类目名称</th>
<th>修改</th>
<th>删除</th>
</tr>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>    
     <?php if(($vo['count']) > "1"): ?><td></td><?php endif; ?>
     <td>
     <?php echo ($vo['name']); ?>
     </td>
     <?php if(($vo['count']) == "1"): ?><td></td><?php endif; ?>
     <td><a href="/supper/Category/edit/id/<?php echo ($vo['id']); ?>">修改</a></td>
     <td><a href="/supper/Category/delete/id/<?php echo ($vo['id']); ?>">删除</a></td>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>

</table>
<div  class="page">
<?php echo ($page); ?>
</div>
<div  id="cdiv">
<form action="/supper/Category/insert"  method="post">
<table>

<tr>
<th>添加一级类目:</th>
<td>类目名称:</td>
<td>
<input type="hidden" name="pid"  value="0"/>
<input type="text" name="name" />
</td>
<td><input type="submit" value="添加"/></td>
</tr>


</table>
</form>
<br />
<form action="/supper/Category/insert"  method="post">
<table>

<tr>
<td>
<select name="pid" >
<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['id']); ?>"><?php echo ($vo['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
</select>
</td>
<th>添加二级类目:</th>
<td>类目名称:</td>
<td><input type="text" name="name" /></td>
<td><input type="submit" value="添加"/></td>
</tr>


</table>


</form>

</div>


</div>