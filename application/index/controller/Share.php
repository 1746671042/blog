<?php
namespace app\index\controller;
class Share extends  Base
{
    public function index()
    {
        $this->assign('title',"乐乐-案例欣赏 | web后端技术博客");
        return $this->fetch(
            ""
        );
    }
}
