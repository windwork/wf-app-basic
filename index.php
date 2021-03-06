<?php
/**
 * Windwork
 * 
 * 一个开源的PHP轻量级高效Web开发框架
 * 
 * @copyright   Copyright (c) 2008-2016 Windwork Team. (http://www.windwork.org)
 * @license     http://opensource.org/licenses/MIT    MIT License
 */

/**
 * 入口
 * Windwork框架为单入口模式，所有mvc业务流程均通过index.php进入。
 * （不使用框架的mvc架构时可从其他入口进入）
 */

/**
 * 入口常量，声明该常量后才是有效的程序入口
 * @var bool
 */
define('WF_IN', true);


// 是否开启调试模式，正式环境设为 false
define('WF_DEBUG', true);

// 应用运行环境名，根据该参数加载配置文件
// dev）开发（默认）
// test）测试； 
// product）正式上线；
// 其他）其他正式上线应用
//define('WF_ENV', 'product');

// 程序源码文件夹完整路径
define('ROOT_DIR', __DIR__);

require_once 'vendor/autoload.php';
\wf\app\Loader::loadWfInOne();

$app = \wf\app\web\Application::app();
$app->run();

