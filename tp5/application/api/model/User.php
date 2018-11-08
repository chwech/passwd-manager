<?php
namespace app\api\model;

use think\Model;
use app\lib\exception\ParameterException;
use think\Db;
use think\Request;

class User extends Model
{
    // 数据完成
    protected $insert = ['ip'];

    public static function addUser()
    {
        $result = Db::query(
            'select * from pm_user where id = 1'
        );

        return $result;
    }

    /**
     * 修改器，ip转换成长整型
     */
    protected function setRegisterIpAttr()
    {
        $request = Request::instance();
        $register_ip = $request -> param('register_ip');
        $register_ip_int = ip2long($register_ip);
        if ($register_ip_int) {
            return $register_ip_int;
        } else {
            throw new ParameterException([
                'msg' => 'ip地址格式不正确'
            ]);
        }
    }
}