<?php
/**
 * Created by PhpStorm.
 * User: chengsheng
 * Date: 2015/7/21
 * Time: 10:54
 */

use \NoahBuscher\Macaw\Macaw;


Macaw::get('/func',function(){
    echo '成功！';
});

Macaw::get('/',"HomeController@home");

Macaw::$error_callback = function(){
    throw new Exception("路由无匹配项 404 not found");
};

/*Macaw::get('(:all)',function($fu){
    echo '未匹配到路由<br>'.$fu;
});*/


Macaw::dispatch();