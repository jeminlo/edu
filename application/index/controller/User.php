<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/27
 * Time: 15:38
 */

namespace app\index\controller;


class User extends Base
{
    public function login()
    {
        return $this->view->fetch();
    }

    public function checkLogin()
    {

    }

    public function logout()
    {

    }
}