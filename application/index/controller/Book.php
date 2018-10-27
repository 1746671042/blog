<?php
namespace app\index\controller;
class Book extends  Base
{
    public function index()
    {
        //碎言碎语
        $this->assign('title',"乐乐-碎言碎语 | web后端技术博客");
        return $this->fetch(
            ""
        );
    }
}
