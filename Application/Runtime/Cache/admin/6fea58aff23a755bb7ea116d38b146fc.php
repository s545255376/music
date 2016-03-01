<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
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
<script type="text/javascript" src="/down/Public/js/common.js"></script>
<body>


  <div id="content">
        <p>新闻管理</p>
      <form action=""  method="post"  id="addF">
      <table  border=1  id="ntable">
      <tr>
      <th>题目</th>
      <th>时间</th>
      <th>修改</th>
      <th>选择</th>
      </tr>
      <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
      <td><a href="/down/admin.php/News/select/id/<?php echo ($vo['id']); ?>"><?php echo ($vo['title']); ?></a></td>
      <td><?php echo ($vo['createtime']); ?></td>
      <td><a href="/down/admin.php/News/add/id/<?php echo ($vo['id']); ?>">修改</a></td>
      <td><input type="checkbox"  name="did[]"  id="news" value="<?php echo ($vo['id']); ?>"/></td>
      </tr><?php endforeach; endif; else: echo "" ;endif; ?>
      
      </table>
      </form>
      <div  class="page">
      <?php echo ($page); ?>
      </div>
      <div  class="link">
      <a href="/down/admin.php/News/add"><input type="button"  id="button1"  value="添加新闻"  /></a>
      <input type="button"  id="button1"  value="全选"  onclick="sltAll()" />
      <input type="button"  id="button1"  value="清空"  onclick="unselAll()" />
      <input type="button"  id="button1"  value="删除"  onclick="del()"/>
      </div>
      
  </div>
</body>