<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    'database' => [
	    'type'        => 'mysql',
	    // 数据库连接DSN配置
	    'dsn'         => '',
	    // 服务器地址
	    'hostname'    => 'dev.lookfeel.co',
	    // 数据库名
	    'database'    => 'lfcms',
	    // 数据库用户名
	    'username'    => 'root',
	    // 数据库密码
	    'password'    => 'sqladmin84456401',
	    // 数据库连接端口
	    'hostport'    => '',
	    // 数据库连接参数
	    'params'      => [],
	    // 数据库编码默认采用utf8
	    'charset'     => 'utf8',
	    // 数据库表前缀
	    'prefix'      => 'lf_',
	    // 数据库调试模式
	    'debug'       => true,
	    // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
	    'deploy'      => 0,
	    // 数据库读写是否分离 主从式有效
	    'rw_separate' => false,
	    // 读写分离后 主服务器数量
	    'master_num'  => 1,
	    // 指定从服务器序号
	    'slave_no'    => '',
    ],
    'cache'  => [
	    'type'   => 'File',
	    'path'   => CACHE_PATH,
	    'prefix' => 'sw_',
	    'expire' => 0,
	],
];