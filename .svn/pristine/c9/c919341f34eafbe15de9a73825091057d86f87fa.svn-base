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


    //游戏中心
    public function game()
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


}
