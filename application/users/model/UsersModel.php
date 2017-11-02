<?php
namespace app\users\model;
use think\Model;

/**
 * User: liaoyizhong
 * Date: 2017/11/2/002
 * Time: 9:59
 */

class UsersModel extends Model
{
    protected $table = "users";

    public function roles()
    {
        return $this->morphTo();
    }
}