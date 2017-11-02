<?php
/**
 * User: liaoyizhong
 * Date: 2017/11/2/002
 * Time: 15:42
 */

namespace app\common\service;


class UploadService
{
    /**
     * @param $file 等同于$_FILE且注意设置上传文件名为fname
     */
    public function picture($file)
    {
        if (isset($file['fname']) && $file['fname']['error'] == 0) {
            if (!is_uploaded_file($file['fname']['tmp_name'])) {
                return;
            }
            $re = strpos($file['fname']['type'],"/");
            $rr = substr($file['fname']['type'],$re+1);
            try {
                $md5 = md5_file($file['fname']['tmp_name']);
                echo $md5;
                $result = move_uploaded_file($file['fname']['tmp_name'], 'D:\picture\\' . $md5.".".$rr);
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
}