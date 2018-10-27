<?php
namespace app\index\controller;
class Knowledge extends  Base
{
    public function index()
    {
        $this->assign('title',"乐乐-学无止境 | web后端技术博客");
        return $this->fetch(
            ""
        );
    }
}
