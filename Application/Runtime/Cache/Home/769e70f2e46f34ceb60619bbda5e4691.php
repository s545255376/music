<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="/music/Public/css/home.css" />
<script type="text/javascript" src="/music/Public/js/home.js"></script>
<meta charset="UTF-8">
<title>网站主页</title>
</head>
<body>
<div  id="top">
  <ul  class="left">
  <li><a href=""  onmouseover="onmouse(this)"  onmouseout="outmouse(this)">主页</a></li>
  <li><a href=""  onmouseover="onmouse(this)"  onmouseout="outmouse(this)">音乐</a></li>
  <li><a href=""  onmouseover="onmouse(this)"  onmouseout="outmouse(this)">更多</a></li>
  </ul>
  
  <ul  class="right">
  <li><a href=""  onmouseover="onmouse(this)"  onmouseout="outmouse(this)">登陆</a></li>
  <li><a href=""  onmouseover="onmouse(this)"  onmouseout="outmouse(this)">注册</a></li>
  </ul>
</div>
<div  id="title">
	 <div  class="name">
	 <a href="/music/index.php/Home/Index/index">MY MUSIC</a>
	 </div>
	 <div  class="search">
	 
	 <input type="text"   name="keyword" placeholder="音乐名,演员..."  id="stext" /> 
	 <a href="/music/index.php/Home/Download/search/key/" id="shref"  onclick="getkey()"><img src="/music/Public/Image/search.jpg" alt="" /></a>
	 
	 </div>
	 <div  class="menu">
	 <table>
	 <tr>
	 <td><a href="">歌手</a></td>
	 <td><a href="">专题</a></td>
	 <td><a href="">歌单</a></td>
	 <td><a href="">排行榜</a></td>
	 <td><a href="">评论</a></td>
	 <td><a href="/music/index.php/Home/Download/index">分类浏览</a></td>
	 </tr>
	 </table>
	 
	 </div>

</div>

</body>
</html>

<link rel="stylesheet" type="text/css" href="/music/Public/css/home.css" />
<script type="text/javascript" src="/music/Public/js/home.js"></script>