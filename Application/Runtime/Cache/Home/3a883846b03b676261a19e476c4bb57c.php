<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="/down/Public/css/home.css" />
<script type="text/javascript" src="/down/Public/js/home.js"></script>
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
	 <a href="/down/index.php/Home/Download/index">MY MUSIC</a>
	 </div>
	 <div  class="search">
	 
	 <input type="text"   name="keyword" placeholder="音乐名,演员..."  id="stext" /> 
	 <a href="/down/index.php/Home/Download/search/key/" id="shref"  onclick="getkey()"><img src="/down/Public/Image/search.jpg" alt="" /></a>
	 
	 </div>
	 <div  class="menu">
	 <table>
	 <tr>
	 <td><a href="">歌手</a></td>
	 <td><a href="">专题</a></td>
	 <td><a href="">歌单</a></td>
	 <td><a href="">排行榜</a></td>
	 <td><a href="">评论</a></td>
	 <td><a href="/down/index.php/Home/Download/index">分类浏览</a></td>
	 </tr>
	 </table>
	 
	 </div>

</div>

</body>
</html>

<link rel="stylesheet" type="text/css" href="/down/Public/css/home.css" />
<script type="text/javascript" src="/down/Public/js/home.js"></script>
<script type="text/javascript" src="/down/Public/js/jquery.js"></script>
<script>
$(document).ready(function(){
  $('.all').hide();
  $('#cate').click(function(){
     $('.cate').show();
     $('.all').hide();
  })
    $('#all').click(function(){
     $('.cate').hide();
     $('.all').show();
  })
    
})
</script>
<div  id="tag">

<span>音乐标签</span>
<span  class="thref">
<a href="#"   id="cate"  onclick="cate()" >分类浏览</a>
<a href="#"  id="all"  onclick="all()"  >所有热门标签</a>
</span>
</div>


<div  class="cate">
<div  id="music">

<table>

<tr  collspan="4"><td><span>风格....</span></td></tr>


<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 4 );++$i; if(($mod) == "0"): ?><tr><?php endif; ?>
<td><a href=""><?php echo ($vo["name"]); ?></a></td>
<?php if(($mod) == "3"): ?></tr><?php endif; endforeach; endif; else: echo "" ;endif; ?>

</table>
</div>

<div  id="music">

<table>

<tr  collspan="4"><td><span>国家/地区....</span></td></tr>


<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 4 );++$i; if(($mod) == "0"): ?><tr><?php endif; ?>
<td><a href=""><?php echo ($vo["area"]); ?></a></td>
<?php if(($mod) == "3"): ?></tr><?php endif; endforeach; endif; else: echo "" ;endif; ?>

</table>
</div>

<div  id="music">

<table>

<tr  collspan="4"><td><span>艺术家....</span></td></tr>


<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 4 );++$i; if(($mod) == "0"): ?><tr><?php endif; ?>
<td><a href=""><?php echo ($vo['singer']); ?></a></td>
<?php if(($mod) == "3"): ?></tr><?php endif; endforeach; endif; else: echo "" ;endif; ?>

</table>
</div>
</div>

<div  class="all">

<div  id="music">

<table>

<tr  collspan="4"><td><span>全部标签....</span></td></tr>


<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 4 );++$i; if(($mod) == "0"): ?><tr><?php endif; ?>
<td><a href=""><?php echo ($vo['singer']); ?></a></td>
<td><a href=""><?php echo ($vo['area']); ?></a></td>
<?php if(($mod) == "3"): ?></tr><?php endif; endforeach; endif; else: echo "" ;endif; ?>

<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 4 );++$i; if(($mod) == "0"): ?><tr><?php endif; ?>
<td><a href=""><?php echo ($vo['name']); ?></a></td>
<?php if(($mod) == "3"): ?></tr><?php endif; endforeach; endif; else: echo "" ;endif; ?>

</table>

</div>

</div>