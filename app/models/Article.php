<?php
/**
 * Created by PhpStorm.
 * User: chengsheng
 * Date: 2015/7/25
 * Time: 6:15
 */

class Article extends Illuminate\Database\Eloquent\Model{

    public $timestamps = false;
    protected $table = 'article';

    /*public static function first(){
        $connection = mysql_connect('localhost','root','root');
        if(!$connection){
            echo "连接数据库失败！";
            exit;
        }
        mysql_set_charset('utf8',$connection);
        mysql_select_db('mffc',$connection);
        $result = mysql_query('select * from article limit 0,1');
        if($row = mysql_fetch_assoc($result)){
            return $row;
        }
        mysql_close($connection);
    }*/
}