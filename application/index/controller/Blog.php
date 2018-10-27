<?php
namespace app\index\controller;
//博客
class Blog extends  Base
{
    public function index()
    {
        $this->assign('title',"乐乐-关于博客 | web后端技术博客");
        return $this->fetch(
            ""
        );
    }
}
