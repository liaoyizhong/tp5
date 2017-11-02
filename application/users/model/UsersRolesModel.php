<?php
namespace app\users\model;
use think\Model;

/**
 * User: liaoyizhong
 * Date: 2017/11/2/002
 * Time: 9:59
 */

class UsersRolesModel extends Model
{
    protected $table = "users_roles";

    public function users()
    {
        return $this->morphMany("\app\users\model\UsersModel","userstable");
    }
}