<?php

namespace app\orders\service;

use \app\orders\model\OrdersModel;

/**
 * User: liaoyizhong
 * Date: 2017/11/1/001
 * Time: 13:44
 */
class OrdersService
{
    public function mergeSex()
    {
        $newModel = new OrdersModel();
        $newModel->id = 16;
        $newModel->name = '极速订单';
        $result = $newModel->save();
        echo '<pre>';
        var_dump($result);
        echo '</pre>';
        exit();
    }

    public function info($id)
    {
        return OrdersModel::get($id);
    }
}