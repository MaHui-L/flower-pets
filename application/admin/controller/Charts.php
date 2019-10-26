<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 2019/10/26
 * Time: 3:32
 */

namespace app\admin\controller;


class Charts extends Base
{
    public function index(){
        return $this->fetch();
    }
}