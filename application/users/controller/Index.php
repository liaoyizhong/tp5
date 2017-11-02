<?php

namespace app\users\controller;

use think\Controller;

class Index extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {

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
     * @param  \think\Request $request
     * @return \think\Response
     */
    public function save()
    {
        if (isset($_FILES['fname']) && $_FILES['fname']['error'] == 0) {
            if (!is_uploaded_file($_FILES['fname']['tmp_name'])) {
                return;
            }
            $re = strpos($_FILES['fname']['type'],"/");
            $rr = substr($_FILES['fname']['type'],$re+1);
            try {
                $md5 = md5_file($_FILES['fname']['tmp_name']);
                echo $md5;
                $result = move_uploaded_file($_FILES['fname']['tmp_name'], 'D:\picture\\' . $md5.".".$rr);
                if ($result) {
                    echo '<pre>';
                    var_dump("ok");
                    echo '</pre>';
                    exit();
                } else {
                    echo '<pre>';
                    var_dump("not way");
                    echo '</pre>';
                    exit();
                }
            } catch (\Exception $e) {

            }
        }
    }

    /**
     * 显示指定的资源
     *
     * @param  int $id
     * @return \think\Response
     */
    public function read($id)
    {
        /** @var \app\orders\service\OrdersTypeService $service */
        $service = \think\Loader::model("\app\orders\service\OrdersTypeService");
        $model = $service->info($id);
        foreach ($model->orders as $value) {
            echo '<pre>';
            var_dump($value);
            echo '</pre>';
            exit();
        }
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request $request
     * @param  int $id
     * @return \think\Response
     */
    public function update($id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
