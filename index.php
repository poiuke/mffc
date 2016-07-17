<?php
/**
 * Created by PhpStorm.
 * User: chengsheng
 * Date: 2015/7/21
 * Time: 10:51
 */
header('Content-type: text/html; charset=utf-8');

define('PUBLIC_PATH',__DIR__);

require(PUBLIC_PATH.'/bootstrap.php');

//var_dump($_SERVER);

require "./config/routes.php";