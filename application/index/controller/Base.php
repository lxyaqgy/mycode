<?php


namespace app\index\controller;

use think\Controller;

class Base extends Controller
{
    static  $uid ;
    public function __construct()
    {
        parent::__construct();
//        $uid = 1;
    }

}