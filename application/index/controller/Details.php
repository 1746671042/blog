<?php
namespace app\index\controller;
//文章详情
class Details extends  Base
{
    public function index()
    {
        $this->assign('title',"乐乐-详情 | web后端技术博客");
        return $this->fetch(
            ""
        );
    }


    public function comment(){
        $comment = input("post.");
        var_dump($comment);
    }
}
