<?php
return array(
		// 添加数据库配置信
	'SHOW_PAGE_TRACE' => false,
	'DB_TYPE' => 'mysql', // 数据库类型
	'DB_HOST' => 'qdm160589253.my3w.com', // 服务器地址
	'DB_NAME' => 'qdm160589253_db', // 数据库名
	'DB_USER' => 'qdm160589253', // 用户名
	'DB_PWD' => 'wxy112233', // 密码
	'DB_CHARSET' => 'utf8',
	'DB_PORT' => 3306, // 端口
	'DB_PREFIX' => 'yz_', // 数据库表前缀缀
	'SESSION_OPTIONS' => array(
		'type' => 'db', //session采用数据库保存
		'expire' => 14400, //session过期时间，如果不设就是php.ini中设置的默认值
	),
);