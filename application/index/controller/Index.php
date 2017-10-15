<?php
namespace app\index\controller;

use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
    public function resume($name = '刘东华')
    {
        return $this->fetch();
    }
}
