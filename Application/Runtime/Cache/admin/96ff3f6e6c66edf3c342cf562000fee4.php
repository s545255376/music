<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>查看新闻</title>
</head>
<body>

<h1><?php echo ($data['title']); ?></h1>
<p><?php echo ($data['memos']); ?></p>

<a href="/down/admin.php/News/index">[ 关  闭 ]</a>
</body>
</html>