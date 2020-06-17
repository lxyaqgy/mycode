<?php


namespace app\index\controller;

use think\Controller;

class Base extends Controller
{
    static  $uid ;
    protected $param;
    public function __construct()
    {
        parent::__construct();
        $this->param = $this->request->post();
//        $uid = 1;
    }

}