<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="/down/Public/css/common.css" /> 
<meta charset="UTF-8">
<title>用户登录</title>
</head>
<body>
<div  id="login"  >

<p>管理员登陆</p>
<form action="/down/admin.php/Index/login"  method="post" >
管理员账号:<input type="text" name="name"/><br /><br />
管理员密码:<input type="password"  name="pwd" /><br /><br />
&nbsp&nbsp&nbsp&nbsp<input type="submit"  value="登录" />
&nbsp&nbsp<input type="reset"  value="重填" />
</form>
</div>
</body>
</html>