<?php
namespace app\index\controller;

use app\index\model\GuanliModel;
use think\App;
use think\Controller;
use think\Request;

class IndexController extends Controller
{
    protected $request = null;
    public function __construct()
    {
        parent::__construct();
        $this->request = new Request();
        header("Access-Control-Allow-Origin: *");
        header('Access-Control-Allow-Methods:POST, GET, OPTIONS');
    }

    //登录
    public function login() {
        $username = $this->request->post('username');
        $pwd = $this->request->post('userpwd');
        $guanli = new GuanliModel();
        $res = $guanli->where('name', $username)->field('id,password')->find();
        if ($res != null) {
            if ($res['password'] === $pwd) {
                return 1;
            }else {
                return 0;
            }
        }else {
            return 0;
        }
    }

    //找回密码
    public function findpwd() {
        $username = $this->request->post('username');
        $tel = $this->request->post('tel');
        $guanli = new GuanliModel();
        $res = $guanli->where('name',$username)->field('id,tel,password')->find();
        if ($res != null) {
            if ($res['tel'] === $tel) {
                return json_encode($res['password']);
            } else {
                return json_encode('电话号码输入错误！');
            }
        } else {
            return json_encode('用户不存在！');
        }
    }

}
