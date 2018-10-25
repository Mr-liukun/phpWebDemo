<?php
/**
 * Created by PhpStorm.
 * User: 刘坤
 * Date: 2018/10/23
 * Time: 22:31
 */

namespace app\index\controller;


use think\Controller;
use think\Request;

class Login extends Controller
{
    public function login(Request $request){

        //dump($request->post("username"));
        dump($request->url());
    }

}