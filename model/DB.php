<?php

namespace app\index\model;

use think\Model;
/**
 * Created by PhpStorm.
 * User: 刘坤
 * Date: 2018/10/25
 * Time: 12:16
 */
class DB extends Model
{
   static public function connection()
    {
        $mysqli = new \mysqli("localhost","root","123","t7");
        if($mysqli->connect_error){
            die("连接失败".$mysqli->connect_error);
        }else{
            return $mysqli;
        }

    }


}