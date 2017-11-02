<?php
/**
 * User: liaoyizhong
 * Date: 2017/11/1/001
 * Time: 15:21
 */

namespace app\orders\model;
use think\Model;

class OrdersTypeModel extends Model
{
    protected $table = 'orders_type';

    public function orders()
    {
        return $this->hasMany("\app\orders\model\OrdersModel",'orders_type_id','id');
    }
}