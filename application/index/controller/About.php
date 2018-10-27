<?php
namespace  app\index\controller;

class About extends Base{
    public function index(){
        $this->assign('title',"乐乐-关于 | web后端技术博客");
        return $this->fetch(
            ""
        );
    }
}
