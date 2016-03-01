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
<form action="/down/admin.php/Download/insert"  method="post">
<table  id="dtable"  border=1  >

<tr>
<th  colspan="2">添加音乐下载</th>
</tr>
<tr>
<td>音乐类目:</td>

<td>

<select name="cid" id=""  >
<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['id']); ?>">

<?php for($i=0;$i<$vo['margin']/4;$i++){ echo "&nbsp&nbsp"; } ?>
<?php if(($vo['count']) > "1"): ?>---<?php endif; ?>

<?php echo ($vo['name']); ?>

</option><?php endforeach; endif; else: echo "" ;endif; ?>
</select>

</td>
</tr>
<tr>
<td>音乐名称：</td>
<td><input type="text" name="name"/></td>
</tr>
<tr>
<td  rowspan="2">下载地址：</td>
<td><input type="text" name="filename1"/></td>
</tr>
<tr>
<td>地址名称:<input type="text"  name="txtname1"/></td>
</tr>
<tr>
<td>艺术家</td>
<td><input type="text" name="singer"/></td>
</tr>
<tr>
<td>地区：</td>
<td><input type="text" name="area"/></td>
</tr>
<tr>
<td>推荐度:</td>
<td>
<select name="hotstars" >
<option value="1">一星级</option>
<option value="2">二星级</option>
<option value="3">三星级</option>
<option value="4">四星级</option>
<option value="5">五星级</option>
</select>

</td>
</tr>

<tr>
<td>播放软件:</td>
<td>
<select name="softid" >
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['id']); ?>"><?php echo ($vo['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
</select>
</td>
</tr>

<tr>
<td>音乐大小:</td>
<td><input type="text" name="downsize"  value="Byte"/></td>
</tr>
<tr>
<td>图片地址</td>
<td><input type="text"  name="imagefile"/></td>
</tr>
<tr>
<td>音乐来源:</td>
<td><input type="text"  name="url"  value="http://"/></td>
</tr>
<tr>
<td>音乐形式</td>
<td>
<select name="dnote" id="">
<option value="">共享音乐</option>
<option value="">会员音乐</option>
</select>
是否推荐     <input type="checkbox"  name="ishot"  value="1"/>
是否隐藏     <input type="checkbox"  name="ishide"  value="0"/>
</td>
</tr>
<tr>
<td>音乐简介:</td>
<td><textarea name="dnote" id="" cols="30" rows="10"></textarea></td>
</tr>

</table>

<input type="submit" value="提交"  class="sub1"/>
<input type="reset"  value="重填"  class="sub2"/>




</form>

















</div>