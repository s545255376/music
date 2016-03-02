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
      <a href="/supper/users.html">用户管理</a>
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
<p>用户信息</p>

<form action="/supper/Users/save"  method="post">

<table  id="uadd">

<tr>
<th>用户名</th>
<td><input type="text" name="UserName"  value="<?php echo ($data['username']); ?>"  disabled=true/></td>
</tr>
<tr>
<th>密码</th>
<td><input type="password" name="UserPwd"/></td>
</tr>
<tr>
<td><input type="hidden"  name="id"  value="<?php echo ($data['id']); ?>"/></td>
<td>
<input type="submit" value="提交"/>
<input type="reset"  value="重写"/>
</td>
</tr>
</table>
</form>

</div>