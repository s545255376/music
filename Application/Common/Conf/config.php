<?php
return array(
	//'配置项'=>'配置值'
	
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'book',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'thinks_',    // 数据库表前缀
    
    'DEFAULT_THEME'    =>    'default',
    'MODULE_ALLOW_LIST'    =>    array('Home','supper'),
    'DEFAULT_MODULE'       =>    'Home',  // 默认模块
    'SHOW_PAGE_TRACE'     =>true,
    'URL_MODEL'            => '2', //URL模式
    'URL_HTML_SUFFIX'     => 'html|shtml|xml',
    'URL_MODULE_MAP'      =>    array('supper'=>'admin'),


);