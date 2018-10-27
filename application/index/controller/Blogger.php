<?php
namespace app\index\controller;
//博主
class Blogger extends  Base
{
    public function index()
    {
        $this->assign('title',"乐乐-关于博主 | web后端技术博客");
        return $this->fetch(
            ""
        );
    }
}
