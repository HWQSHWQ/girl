<?php
namespace app\index\controller;
use \think\Request;
//http://serverName/index.php（或者其它应用入口文件）/模块/控制器/操作/参数/值…
class Index extends \think\Controller
{
    public function __construct()
    {
        parent::__construct();
        $request = Request::instance();
        $this->assign('action',$request->action());
    }

    public $model;
    //首页展示
    public function index()
    {
        return $this->fetch('game/index');
    }


    public function game1()
    {
        return $this->fetch('game1/index');
    }

    public function game2()
    {
        return $this->fetch('game2/index');
    }

    public function game3()
    {
        return $this->fetch('game3/index');
    }

    public function game4()
    {
        return $this->fetch('game4/index');
    }

    public function game5()
    {
        return $this->fetch('game5/index');
    }

    public function game6()
    {
        return $this->fetch('game6/index');
    }

}
