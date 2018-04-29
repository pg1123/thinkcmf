<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2018 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: 老猫 <zxxjjforever@163.com>
// +----------------------------------------------------------------------

//weixin
//1. 将nonce，timestamp，token按字典顺序排序
$nonce = $_GET['nonce'];     //微信公众平台提供
$timestamp = $_GET['timestamp'];    //微信公众平台提供
$token = 'weixin';    //自己在微信公众平台的配置中设置的令牌（token）
$signature = $_GET['signature'];    //微信公众平台提供
$arr = array($nonce, $timestamp, $token);
sort($arr);    //将nonce，timestamp，token按字典顺序排序
//2. 将排序后的三个参数拼接之后用sha1加密
$tempstr = implode('', $arr);
$tempstr = sha1($tempstr);
//3. 将加密后的字符串与signature进行对比，判断该请求是否来自微信
if($tempstr == $signature){
	echo $_GET['echostr'];
	exit();
}




// [ 入口文件 ]

// 调试模式开关
define("APP_DEBUG", true);

// 定义CMF根目录,可更改此目录
define('CMF_ROOT', __DIR__ . '/../');

// 定义应用目录
define('APP_PATH', CMF_ROOT . 'app/');

// 定义CMF核心包目录
define('CMF_PATH', CMF_ROOT . 'simplewind/cmf/');

// 定义插件目录
define('PLUGINS_PATH', __DIR__ . '/plugins/');

// 定义扩展目录
define('EXTEND_PATH', CMF_ROOT . 'simplewind/extend/');
define('VENDOR_PATH', CMF_ROOT . 'simplewind/vendor/');

// 定义应用的运行时目录
define('RUNTIME_PATH', CMF_ROOT . 'data/runtime/');

// 定义CMF 版本号
define('THINKCMF_VERSION', '5.0.180123');

// 加载框架基础文件
require CMF_ROOT . 'simplewind/thinkphp/base.php';

// 执行应用
\think\App::run()->send();
