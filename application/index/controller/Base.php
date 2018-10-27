<?php
namespace app\index\controller;
use think\Controller;
class Base extends Controller{
    public function _initialize(){
        //获取控制器名称，到页面找到对应css   index list 等等
        $this->assign('controller', strtolower(request()->controller()));
    }
}