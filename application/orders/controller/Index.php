<?php

namespace app\orders\controller;

use think\Controller;
use think\Request;
class Index extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $service = \think\Loader::model("\app\orders\service\OrdersService");
        $model = $service->info(1);
        echo '<pre>';var_dump($model->getData());echo '</pre>';exit();
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save()
    {
        //
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        /** @var \app\orders\service\OrdersService $service */
        $service = \think\Loader::model("\app\orders\service\OrdersService");
        /** @var \app\orders\model\OrdersModel $model */
        $model = $service->info($id);
        echo '<pre>';var_dump($model->orderType);echo '</pre>';exit();
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update($id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }

    public function calculate()
    {
        echo 1+2;
    }
}
