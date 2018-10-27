<?php
namespace app\index\controller;
class Life extends  Base
{
    public function index()
    {
        $this->assign('title',"乐乐-慢生活 | web后端技术博客");
        return $this->fetch(
            ""
        );
    }
}
