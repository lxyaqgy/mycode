<?php
namespace app\index\controller;


use app\behavior\LoginRecord;
use app\index\model\AdminModel;
use think\Controller;
use think\facade\Session;


class Index extends Controller
{
    protected $redirect = '/index';
    protected $param = [];
    protected $loginUserKey = 'user';

    public function __construct()
    {
        parent::__construct();
        $this->param = $this->request->post();
    }

    /**
     * 登陆页面
     *
     * */
    public function index()

    {
        if($this->request->isPost()){

            $param = $this->param;
            $user = AdminModel::where('account',$param['name'])
                ->where('password',$param['password'])
                ->where('type',$param['type'])
                ->find();
            Session::set($this->loginUserKey, $user);

            if($user) return  $this->fetch('index'); //$this->success('登录成功', url($this->redirect));

        }
        return  $this->fetch('login');

    }
    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
    public function user()
    {
        return $this->fetch('index/qdAPI');
    }
}
