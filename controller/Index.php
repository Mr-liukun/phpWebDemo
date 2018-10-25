<?php
namespace app\index\controller;

use think\Controller;
use think\Request;
use app\index\model\DB as db;

class Index extends Controller
{
//    public function index(Request $request)
//    {
//        // 获取浏览器输入的值
////        dump($request->domain());
////        dump($request->pathinfo());
////        dump($request->path());
////        //请求方式
////        dump($request->method());
////        dump($request->get());
////        dump($request->session());
//
//
//        return $this->fetch("login");
//    }

    public function login(Request $request)
    {
        //传值
        $this->assign("name","刘坤");
        //跳转到application\index\view\index\{文件名}
        return $this->fetch("login");
    }

    /*
     * 在httpd.conf中配置DocumentRoot为：
     *  DocumentRoot "D:\phpProject\tp5\public"
     *  <Directory "D:\phpProject\tp5\public">的情况下
     * 访问路由：http://localhost:9999/index.php/index/index/fun(不区分大小写)
     *                                         /模块/控制器/方法
     */
    public function fun(Request $request)
    {
        $username = $request->post("username");
        $password = $request->post("password");
        $mysqli = db::connection();
        if ($mysqli) {
            $result = $mysqli->query("select username,password from user where username = '$username' and password = '$password' ");
            if ($result->num_rows == 0) {
                return $this->fetch("fail");
            } else {
                $this->assign("username", $username);
                return $this->fetch("success");
            }
        }
    }

}
