<?php
/**
 * Created by PhpStorm.
 * User: chengsheng
 * Date: 2015/7/25
 * Time: 21:37
 */

use Illuminate\Database\Capsule\Manager as Capsule;

define('BASE_PATH',__DIR__);

require "./vendor/autoload.php";

$capsule = new Capsule;
$capsule->addConnection(require 'config/database.php');
$capsule->bootEloquent();

// whoops 错误提示
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();