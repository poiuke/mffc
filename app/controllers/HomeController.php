<?php
/**
 * Created by PhpStorm.
 * User: chengsheng
 * Date: 2015/7/25
 * Time: 5:26
 */

class HomeController extends BaseController{
    public function home(){
        //echo "控制器成功！";
        /*$row = Article::first();
        require dirname(__FILE__)."/../views/home.php";*/
        $this->view = View::make('home')->with('article',Article::first())->withTitle('MFFC :-D')->withFunc1('OK!');
		
        Redis::set('key1','value1',10,'s');
        echo Redis::get('key1');
    }
}