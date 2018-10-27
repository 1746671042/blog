<?php
namespace app\index\controller;
class Index extends  Base
{
    public function index()
    {
        $this->assign('title',"乐乐-首页 | web后端技术博客");
        return $this->fetch(
            ""
        );
    }
}
