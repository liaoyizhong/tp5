<?php
namespace app\orders\model;
use think\Model;

/**
 * User: liaoyizhong
 * Date: 2017/11/1/001
 * Time: 13:44
 */

class OrdersModel extends Model
{
    // 设置当前模型对应的完整数据表名称
    protected $table = 'orders';

    // 获取所有用户的所有数据
    public function getAllOrderDatas()
    {
        $more_datas = $this->select();          // 查询所有用户的所有字段资料
        if (empty($more_datas)) {                 // 判断是否出错
            return false;
        }
        return tp5ModelTransfer($more_datas);   // 返回修改后的数据
    }

    public function orderType()
    {
        return $this->hasMany('\app\orders\model\OrdersTypeModel','id','orders_type_id');
    }
}