<?php
namespace  app\index\controller;

class Newlist extends Base{
    public function index(){
        $this->assign('title',"乐乐-慢节奏 | web后端技术博客");
        return $this->fetch(
            ""
        );
    }
}
