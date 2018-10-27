<?php
namespace app\index\controller;
class Work extends  Base
{
    public function index()
    {
        $this->assign('title',"乐乐-慢工作 | web后端技术博客");
        return $this->fetch(
            ""
        );
    }
}
