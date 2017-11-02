<?php

namespace app\users\service;

use app\common\service\BaseService;

/**
 * User: liaoyizhong
 * Date: 2017/11/2/002
 * Time: 10:07
 */
class UsersService extends BaseService
{
    public function info($id)
    {
        $model = \app\users\model\UsersModel::get($id);
        return $model;
    }

    public function save($params)
    {

    }
}