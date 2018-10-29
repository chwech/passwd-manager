<?php
namespace app\api\model;

use think\Model;
use Exception;
use app\lib\exception\UserException;
use think\Db;
class User extends Model
{
    public static function addUser()
    {
        $result = Db::query(
            'select * from pm_user where id = 1'
        );

        return $result;
    }
}