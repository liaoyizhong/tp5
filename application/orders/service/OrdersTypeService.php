<?php
/**
 * User: liaoyizhong
 * Date: 2017/11/1/001
 * Time: 17:07
 */

namespace app\orders\service;


use app\orders\model\OrdersTypeModel;

class OrdersTypeService
{
    public function info($id)
    {
        return OrdersTypeModel::get($id);
    }
}