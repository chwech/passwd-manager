<?php
namespace app\api\model;

use think\Model;
use Exception;
use app\lib\exception\UserException;

class User extends Model
{
    public static function addUser()
    {
        try {
            1 / 0;
        } catch (Exception $e) {
            //
            new UserException();
        }
    }
}